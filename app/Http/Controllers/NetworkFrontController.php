<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Auth;
use App\Models\Employee;
use App\ViewProfile;
use App\Models\PostArticle;
use App\Models\ImageArticle; 
use App\Models\CommentArticle; 
use App\Models\LikeArticle; 
use App\Models\Follow; 
use App\Models\HideArticle; 
use OpenGraph;
use URL; 
use Image;
use Alert;
use Share;

class NetworkFrontController extends Controller
{
    
    public function home()
    {	
    	$follow = Follow::where('userid',Auth::user()->id)->get();  
	    $userid = [];
	    foreach ($follow as $key => $fol) {
	        $userid[] = $fol->followid;
	    } 
	    $following = Employee::with('province')->whereNotIn('id',[Auth::user()->id])->whereNotIn('id',$userid)->get();     

    	$network = Follow::where('userid',Auth::user()->id)->count();
    	$visit   = ViewProfile::where('visitid',Auth::user()->id)->count();
    	$countpending = Follow::where('followid',Auth::user()->id)->where('status','0')->count(); 
    	return view('frontnetwork.home',compact('network','visit','pending','countpending','following'));
    }  
    public function about($about = '')
    {	
    	$networkprofile = Employee::where('username',$about)->first();
    	// dd($networkprofile);
		if (!$networkprofile) {
			abort(404);
		}

		$follow = Follow::where('userid',Auth::user()->id)->get();  

        $follow = Follow::where('userid', Auth::user()->id)->get(); 
        $followid = [];
        foreach ($follow as $key => $fol) {
            $followid[] = $fol->followid;
        } 

		$og = OpenGraph::title($networkprofile->fname.' '.$networkprofile->lname.' - Skill Linkk')
		    ->type('article')
		    ->image(URL::to('/').$networkprofile->photo)
		    ->description('Profile')
		    ->url(route('networkprofile', $networkprofile->username)); 
    	return view('frontnetwork.about',compact('networkprofile','og','followid'));
    }  
    public function mynetwork(Request $request)
    {	
    	$sort = $request->get('sort');

    	if($request->has('sort')){    
    		$mynetwork = Follow::with(['usersfollow' => function($query) {
				    $query->orderBy('fname');
				}])->where('userid',Auth::user()->id)->get();
    		// $mynetwork = Follow::whereHas('usersfollow', function($query) use($sort) {
    		// 	// if ($sort=='name') {
    		// 		$query->orderBy('employee.fname' ,'ASC');
    		// 	// } 
      //       })->where('userid',Auth::user()->id);
    		
    		// $mynetwork = Follow::with('usersfollow')->where('userid',Auth::user()->id)->orderBy('fname','ASC')->get();  
    		// dd($mynetwork);
    	}else {
    		$mynetwork = Follow::with('usersfollow')->where('userid',Auth::user()->id)->get();  
    	} 
    	
    	// dd($mynetwork);

    	return view('frontnetwork.mynetwork',compact('mynetwork'));
    }
    public function visitedmy()
    {	

    	$visit   = ViewProfile::where('visitid',Auth::user()->id)->get();
    	return view('frontnetwork.visitedmy',compact('visit'));
    } 
	public function post($profile = '')
	{	
		$networkprofile = Employee::where('username',$profile)->first(); 

		$visit = DB::table('visitor')->where('userid',Auth::user()->id)->where('visitid',$networkprofile->id)->first();
		if (!$visit) { 
			DB::table('visitor')->insert([
			    ['userid'  => Auth::user()->id,
			     'visitid' => $networkprofile->id,
			     'created_at' =>  \Carbon\Carbon::now(),
			     'updated_at' => \Carbon\Carbon::now()
				], 
			]);
		} 
		
		if (!$networkprofile) {
			abort(404);
		}
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

        $hidepost = [];
        foreach ($hide as $key => $hid) {
            $hidepost[] = $hid->id_post;
        }  
        // $hidepost[] = Auth::user()->id;
        $route = route('post_detail',array('detail' => 2));
        $fb = Share::page($route,'')->twitter();
        // dd($fb);
        $posts = PostArticle::where('status',1)->where('id_user',$networkprofile->id)->whereNotIn('id',$hidepost)->whereNull('groupid')->orderBy('created_at', 'desc')->paginate(3);   

		$og = OpenGraph::title($networkprofile->fname.' '.$networkprofile->lname.' - Skill Linkk')
		    ->type('article')
		    ->image(URL::to('/').$networkprofile->photo)
		    ->description('Profile')
		    ->url(route('networkprofile', $networkprofile->username)); 

		return view('frontnetwork.networkprofile',compact('networkprofile','og','posts','followid'));
	}
	public function profileadd($profile = '')
	{	
		$profile = Employee::where('username',$profile)->first(); 
		if (!$profile) {
			abort(404);
		} 
		return view('frontnetwork.networkprofileadd',compact('profile'));
	}
	public function procesedadd($process = '')
	{	
		$profile = Employee::where('username',$process)->first(); 
		if (!$profile) {
			abort(404);
		} 
		return view('frontnetwork.procesedadd',compact('profile'));
	}
	public function pending()
	{	 
		$pending = Follow::with('usersfollower')->where('followid',Auth::user()->id)->where('status','0')->get(); 
		return view('frontnetwork.pending',compact('pending'));
	}

	public function sort()
	{	 
		$term = Input::get('id');
		if ($term == 'name') {
			$pending = Follow::with('usersfollower')->where('followid',Auth::user()->id)->where('status','0')->get(); 
		}else if($term == 'company') {
			$pending = Follow::with('usersfollower')->where('followid',Auth::user()->id)->where('status','0')->get(); 
		}else if($term == 'location'){
			$pending = Follow::with('usersfollower')->where('followid',Auth::user()->id)->where('status','0')->get(); 
		}
		
		return view('frontnetwork.pending',compact('pending'));
	}


	public function confirm($confirm = '')
	{	

		$confirm = Employee::where('username',$confirm)->first(); 
		if (!$confirm) {
			abort(404);
		}
		$check = Follow::where('followid',Auth::user()->id)->where('userid', $confirm->id)->first();
		if ($check->status == 1) {
			return redirect()->route('networkprofile',$confirm->username);
		} 
		return view('frontnetwork.confirm',compact('confirm'));
	} 
	public function confirmpost(Request $request)
	{
		if ($request->id != null) {    
			$user = Employee::where('id',$request->id)->first();

	        $follow = Follow::where('followid',Auth::user()->id)->where('userid', $user->id)->update(['status' => 1]);
        	return response()->json(['data'=>$follow,'alert'=>true,'route'=>route('networkprofile',$user->username)]); 
    	 }

    	 return response()->json(['error'=>true]); 
	}


}
