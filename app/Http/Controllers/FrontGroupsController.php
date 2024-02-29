<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate; 
use App\Employees; 
use App\Models\Groups; 
use App\Models\GroupType; 
use App\Models\GroupMember; 
use App\Models\PostArticle; 
use App\Models\ImageArticle; 
use App\Models\CommentArticle; 
use App\Models\HideArticle; 
use App\Models\Follow; 
use Auth;
use Image;
use Alert;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Input;
use Response;
use Illuminate\Support\Facades\URL;

class FrontGroupsController extends Controller
{ 
     public function home($refnumber='')
    {	
        $hide =   HideArticle::where('id_user',Auth::user()->id)->get();
        $hidepost = [];
        foreach ($hide as $key => $hid) {
            $hidepost[] = $hid->id_post;
        }  

    	$follow = Follow::where('userid', Auth::user()->id)->get(); 
         $followid = [];
        foreach ($follow as $key => $fol) {
            $followid[] = $fol->followid;
        } 
        $group = Groups::where('ref_number',$refnumber)->first();
        if (!$group) {
            abort(404);
        }
    	$join =  GroupMember::where('userid',Auth::user()->id)->where('groupid',$group->id)->where('status',1)->first();
        $posts = PostArticle::with('images_post','comments','user','likes','userlikes')->where('groupid',$group->id)->whereNotIn('id',$hidepost)->orderBy('created_at', 'desc')->paginate(3); 
        // dd($posts);
    	$cek_join= count($join);  
    	if (count($group) != 0) { 
    		return view('frontgroups.home',compact('group','cek_join','posts','followid'));
    	}
    	return ('no group');
    }

    public function list()
    {	
        $joined =  GroupMember::where('userid',Auth::user()->id)->where('status',1)->get(); 
        $join = [];
        foreach ($joined as $key => $joi) {
            $join[] = $joi->groupid;
        } 
    	$groups = Groups::whereNotIn('id',$join)->get();

    	return view('frontgroups.grouplist',compact('groups','joined'));
    }
    public function joined()
    {   
        $joined =  GroupMember::where('userid',Auth::user()->id)->where('status',1)->get(); 
        $join = [];
        foreach ($joined as $key => $joi) {
            $join[] = $joi->groupid;
        } 
        $groups = Groups::whereIn('id',$join)->get();

        return view('frontgroups.groupjoined',compact('groups','joined'));
    } 

    public function list_join($refnumber)
    {      
        $getgroup = Groups::where('ref_number',$refnumber)->first();

        $groups   = GroupMember::with('users')->where('groupid',$getgroup->id)->where('status',0)->get();  

        // dd($getgroup);
        return view('frontgroups.accept',compact('groups'));
    }

    public function create()
    {   
        $grouptype = GroupType::all();

        return view('frontgroups.create',compact('grouptype'));
    }

    public function group_createpost(Request $request)
    {
    	// $validator = Validator::make($request->all(), [
     //        'group_name'     => 'required|min:8', 
     //        'group_type'     => 'required', 
     //        'location'       => 'required|min:8'
     //    ]);  

            Validator::make($request->all(), [
                'group_name'     => 'required|min:8', 
                'group_type'     => 'required', 
                'location'       => 'required|min:8'
            ])->validate(); 

        	$image = $request->group_image;
    	 	if ($request->hasFile('group_image')) { 
                $filenamegroup_image = time().''.$request->group_image->getClientOriginalName(); 
                $tes = $request->group_image->move(public_path('group_image'),$filenamegroup_image);   
            }  

            $group = new Groups();
            $group->group_name = $request->group_name;
            $group->ref_number = str_random(50);
            $group->group_info = $request->group_info;
            $group->group_type_id = $request->group_type;
            $group->userid =  Auth::user()->id;
            $group->location = $request->location;
            if ($request->hasFile('group_image')) { 
            	$group->group_image = $request->group_image;
            }   
            $group->save();
 
            $groupmember =  new GroupMember();   
            $groupmember->groupid = $group->id;
            $groupmember->userid  =  Auth::user()->id;
            $groupmember->levelid =  '2';
            $groupmember->status =  '1';
            $groupmember->save();
            return redirect()->route('group', ['refnumber' => $group->ref_number]); 
    }

    public function member($refnumber='')
    {	
    	$group = Groups::where('ref_number',$refnumber)->first();

    	$join =  GroupMember::where('userid',Auth::user()->id)->first();
    	$cek_join= count($join); 
    	// dd($group->user);
    	if (count($group) != 0) {  
    		return view('frontgroups.member',compact('group','cek_join'));
    	}
    	return ('no group');
    } 

    public function group_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post'     => 'required|min:10'
        ]);  
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $image = $request->image;
            if ($request->hasFile('image')) { 
                $filenameimage = time().''.$request->image->getClientOriginalName(); 
                $tes = $request->image->move(public_path('post_group'),$filenameimage);   
            }   
            $group = Groups::where('ref_number',$request->ref_number)->first();

            if (count($group) != null) {
                $postgroup = new PostArticle();
                $postgroup->post = $request->post;
                $postgroup->groupid = $group->id;  
                $postgroup->id_user =  Auth::user()->id;
                $postgroup->status ='1';
                if ($request->hasFile('image')) { 
                    $group->image = $request->image;
                }   
                $postgroup->save(); 

                return response()->json(['ref_n'=>$group->ref_number,'success'=>true]);
            }

            
        }
    }
    public function requesttojoin(Request $request)
    {    
        $join =  GroupMember::where('userid',Auth::user()->id)->where('groupid',$request->id)->first();
        if (count($join) == 0) {
            $member = new GroupMember; 
            $member->groupid = $request->id;
            $member->userid = Auth::user()->id; 
            if ($request->type == 'public') {
                $member->status = 1; 
            }else{
                $member->status = 0;
            }
            $member->levelid = '1';  
            $member->save();   
            return response()->json(['data'=>$member,'type'=>$request->type]);
        } 
        
    } 

    public function acceptjoin(Request $request)
    {   
 
        $group = Groups::where('ref_number',$request->segment)->first(); 
        $data  = GroupMember::where('userid',$request->id)
                ->where('groupid',$group->id)
                ->update(['status' => 1]);

        return response()->json(['data'=>true,'group'=>route('group',$request->segment) ]); 
        
    } 

     public function declinejoin(Request $request)
    {   
 
        $group = Groups::where('ref_number',$request->segment)->first();  

       $deletepost = GroupMember::where('userid',$request->id)
                ->where('groupid',$group->id);  
       $deletepost->delete(); 

        return response()->json(['data'=>true,'group'=>route('group',$request->segment) ]); 
        
    } 
}
 