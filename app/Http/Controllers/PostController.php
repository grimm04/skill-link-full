<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Response;
use App\Employees;
use App\Models\GroupMember; 
use App\Models\CommentArticle; 
use App\Models\PostArticle; 
use App\Models\ReportArticle; 
use App\Models\HideArticle; 
use App\Models\ImageArticle; 
use App\Models\PostVideo; 
use App\Models\Groups;    
use App\Models\LikeArticle; 
use App\Models\Follow;  
use Auth;
use Alert;
use Share;
use OpenGraph;
use URL; 
use App\Notifications\NewPost;
use App\Notifications\UserComments;
use App\Notifications\PostGroup;
use App\Notifications\CommentGroup;
class PostController extends Controller
{
    
	protected $rules =
    [ 
        'comment' => 'required|min:2|max:128|regex:/^[a-z ,.\'-]+$/i'
    ];
    public function comment(Request $request)
    {
    	$validator = Validator::make(Input::all(), $this->rules);
        $ref_number = $request->ref_number; 
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $comment = new CommentArticle();
            $comment->id_post = $request->id_post;
            $comment->id_user = Auth::user()->id;
            $comment->comment = $request->comment;
            $comment->save();


            $post = PostArticle::find($request->id_post);
            $group = Groups::where('ref_number',$ref_number)->first();

            if ($post->id_user != Auth::user()->id) { 
                if ($ref_number != null) {
                    $user = Employees::find($post->id_user);
                    $usercomments = Employees::find(Auth::user()->id);
                    $user->notify(new CommentGroup($user,$comment,$usercomments,$group));
                }else {
                    $user = Employees::find($post->id_user);
                    $usercomments = Employees::find(Auth::user()->id);
                    $user->notify(new UserComments($user,$comment,$usercomments));
                }
                
            }   
            return response()->json(['id_post'=>$request->id_post,'status'=>true]);
        }
    }

    public function detail($id='')
    {
        // $detail = PostArticle::find($detail); 

        $follow = Follow::where('userid',Auth::user()->id)->get();
        $hide =   HideArticle::where('id_user',Auth::user()->id)->get();
        // dd($hide);

        $follow = Follow::where('userid', Auth::user()->id)->get(); 
        $followid = [];
        foreach ($follow as $key => $fol) {
            $followid[] = $fol->followid;
        } 
        $userid = [];
        foreach ($follow as $key => $fol) {
            $userid[] = $fol->followid;
        }  
        $userid[] = Auth::user()->id; 
        // $hidepost[] = Auth::user()->id;
        $route = route('post_detail',array('detail' => 2));
        $fb = Share::page($route,'')->twitter();
        // dd($fb);
        $detail = PostArticle::with('images_post','comments','user','likes','userlikes','group')->where('id',$id)->first(); 
        if (!$detail) {
             abort(404);
        }
        if ($detail != null) { 
            $total = $detail->view + 1; 
            $detail->view = $total; 
            $detail->save();
        }  
        $og = OpenGraph::title($detail->user->fname.' '.$detail->user->lname.' - Skill Linkk')
            ->type('article')
            ->image(URL::to('/').'/avatar/'.$detail->user->photo)
            ->description('Post Detail')
            ->url(route('post_detail', $detail->id)); 

        return view('dashboard.detail',compact('detail','followid','og'));
    } 

    public function report_post(Request $request)
    {
        if ($request->id != null) {    
            $hidepost = new ReportArticle; 
            $hidepost->postid = $request->id;
            $hidepost->userid = Auth::user()->id;  
            $hidepost->save();   
            return response()->json(['data'=>$hidepost]); 
        }

        return response()->json(['error'=>true]); 
    }

    public function post_article(Request $request, PostArticle $post)
    { 

        if ($request->hasFile('post_image')) { 
            $filenamepost_image = time().''.$request->post_image->getClientOriginalName(); 
            $tes = $request->post_image->move(public_path('post_image'),$filenamepost_image);   
        }  

        if ($request->hasFile('post_video')) { 
            $filenamepost_video = time().''.$request->post_video->getClientOriginalName(); 
            $tes = $request->post_video->move(public_path('post_video'),$filenamepost_video);  
        }  
        $article = new PostArticle; 
        $article->post = $request->post;
        $article->id_user = Auth::user()->id; 
        $article->status = '1';   
        $article->save();   
        
        if ($request->hasFile('post_image')) {
            $postimage = new ImageArticle;  
            $postimage->thumbnail = $filenamepost_image;
            $postimage->id_post = $article->id;  
            $postimage->image = $filenamepost_image;
            $postimage->save(); 
        }  
        if ($request->hasFile('post_video')) { 
            $postimage = new PostVideo;   
            $postimage->id_post = $article->id;  
            $postimage->video = $filenamepost_video;
            $postimage->save(); 
        }   


        $user    = Employees::find(Auth::user()->id);  
        foreach ($user->followers as $follower) {
            $follower->notify(new NewPost($user, $article));
        }
        Alert::success('Success post!');
        return redirect()->route('dashboard');  
         
    }

    public function post_article_group(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'post'     => 'required|min:10', 
        // ]);   
        if ($request->hasFile('post_image')) { 
            $filenamepost_image = time().''.$request->post_image->getClientOriginalName(); 
            $tes = $request->post_image->move(public_path('post_image'),$filenamepost_image);   
        }  

        if ($request->hasFile('post_video')) { 
            $filenamepost_video = time().''.$request->post_video->getClientOriginalName(); 
            $tes = $request->post_video->move(public_path('post_video'),$filenamepost_video);  
        }  
        $group = Groups::where('ref_number',$request->ref_number)->first();

        if (count($group) != null) {
            $postgroup = new PostArticle();
            $postgroup->post = $request->post;
            $postgroup->groupid = $group->id;  
            $postgroup->id_user =  Auth::user()->id;
            $postgroup->status ='1'; 
            $postgroup->save();  

            if ($request->hasFile('post_image')) {
                $postimage = new ImageArticle;  
                $postimage->thumbnail = $filenamepost_image;
                $postimage->id_post = $postgroup->id;  
                $postimage->image = $filenamepost_image;
                $postimage->save(); 
            }  
            if ($request->hasFile('post_video')) { 
                $postimage = new PostVideo;   
                $postimage->id_post = $postgroup->id;  
                $postimage->video = $filenamepost_video;
                $postimage->save(); 
            }  
        }

        $post    = GroupMember::with('users')->where('groupid',$group->id)->get(); 

        $user    = Employees::find(Auth::user()->id);  
        foreach ($post as $memberg) {  
            $memberg->users->notify(new PostGroup($user, $postgroup,$group)); 
        }

        Alert::success('Success post!');
        return redirect()->route('group', ['refnumber' => $request->ref_number]); 
        return response()->json(['error'=>$validator->errors()->all()]); 
         
    }
 
}
