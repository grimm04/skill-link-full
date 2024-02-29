<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request; 
use Illuminate\Auth\Middleware\Authenticate; 
use App\Employees;
use App\Models\PostArticle;
use App\Models\GroupMember;
use App\Models\ImageArticle;
use App\Models\CommentArticle; 
use App\Models\LikeArticle;
use App\Models\Follow;
use App\Models\HideArticle; 
use App\Models\Groups; 
use Auth;
use Image;
use Alert;
use Share;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Input;

use App\Notifications\UserLikes;
use App\Notifications\LikeGroup;
class DashboardController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {   
        $follow = Follow::where('userid',Auth::user()->id)->get();
        $hide   =    HideArticle::where('id_user',Auth::user()->id)->get();
        $group  =   GroupMember::where('userid',Auth::user()->id)->get();
        
        $groupid = [];

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

        $hidepost = [];
        foreach ($hide as $key => $hid) {
            $hidepost[] = $hid->id_post;
        }  
        // $hidepost[] = Auth::user()->id;
        $route = route('post_detail',array('detail' => 2));
        $fb = Share::page($route,'')->twitter();
        // dd(followid); 
        $posts = PostArticle::with(array('images_post','comments','user','likes','userlikes','group'))->where('status',1)->whereIn('id_user',$userid)->whereNotIn('id',$hidepost)->orderBy('created_at', 'desc')->paginate(3);    
        // dd($posts);  
        return view('dashboard.home',compact('posts','followid'));

    }  
    
    public function likestatus(Request $request){  

        $userlike =LikeArticle::where('id_post',$request->postid)->where('id_user',Auth::user()->id)->first();
        if (!isset($userlike)) { 
            $like = new LikeArticle; 
            $like->id_post = $request->postid;
            $like->id_user = Auth::user()->id;  
            $like->status = '1';  
            $like->save();   

            $group = Groups::where('ref_number',$request->ref_number)->first();
            $post = PostArticle::find($request->postid);
            if ($post->id_user != Auth::user()->id) {
                if ($request->ref_number != null) {
                    $user = Employees::find($post->id_user);
                    $userlike = Employees::find(Auth::user()->id);
                    $user->notify(new LikeGroup($user,$like,$userlike,$group));
                }else {
                    $user = Employees::find($post->id_user);
                    $userlike = Employees::find(Auth::user()->id);
                    $user->notify(new UserLikes($user,$like,$userlike));
                }

            }
        }else {
            $unlike = LikeArticle::where('id_post',$request->postid)->where('id_user',Auth::user()->id);
            $unlike->delete();
            return response()->json(['status'=>false],201);
        } 
        return response()->json(['status'=>true],201);
    } 

    public function unlikestatus(){
            $id = Input::get('id');  
            $unlike = LikeArticle::where('id_post',$id)->where('id_user',Auth::user()->id);  
            $unlike->forceDelete();
            return response()->json(['data'=>$unlike,'id'=>$id]);
        
    } 

    public function following()
    {   
        $follow = Follow::where('userid',Auth::user()->id)->get();
        // dd($follow);
        $userid = [];
        foreach ($follow as $key => $fol) {
            $userid[] = $fol->followid;
        } 
        $users = Employees::with('follower')->whereNotIn('id',[Auth::user()->id])->whereNotIn('id',$userid)->paginate(10);    
        return view('dashboard.following',compact('users'));
    }


}
