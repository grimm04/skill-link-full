<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostArticle; 
use App\Models\CommentArticle; 
use App\Models\ImageArticle; 
use App\Models\LikeArticle;  
use App\Models\PostVideo; 
use App\Models\Follow; 
use App\Models\HideArticle; 
use App\Models\ReportArticle; 
use App\Models\GroupMember; 
use App\Models\Employee; 
use App\Models\ProfileSearchSetting; 
use App\Models\JobSearchSetting; 
use App\Models\Interest; 
use App\Models\Province; 
use App\Models\ChildTrade; 
use App\Models\Company; 
use App\Models\PostedTime; 
use App\Models\TypeJob; 
use App\Models\JobSearchSettingTitle; 
use App\Models\JobSearchSettingLocation; 
use App\Models\JobSearchSettingCompany; 
use App\Models\JobSearchSettingType; 
use App\Models\CompanyIndustry; 
use App\Employees; 
use App\User; 
use Auth; 
use Alert; 
use DB;
use Response;
use App\Models\Subcribe;
use Illuminate\Support\Facades\Input;
use Session;
 
use App\Models\Survey; 
use App\Models\Question;
use App\Models\McSurvey; 
use App\Models\EssayQuestion; 

use App\Notifications\UserFollowed;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
class AllController extends Controller
{	
    public $mailchimp;
    public $listId = '2aad69ee0c'; 


    public function test()
    { 
        $question = Survey::with('getModelQuestion')->get();
        $essay_question = Survey::with('getModelEssayQuestion')->get();
        
        return view('surveys.home')
            ->with('question', $question) 
            ->with('essay_question', $essay_question);
    }

    public function test2()
    {
       return view('test2');
    }

    public function __construct(\Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    public function landing()
    {
       return view('landing.home');
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]); 
        try { 
            $this->mailchimp
            ->lists
            ->subscribe(
                $this->listId,
                ['email' => $request->input('email')]
                // ['fname' => $request->input('fname')]
            );

            $sub = new Subcribe;

            $sub->email = $request->email; 
            $sub->save(); 
            return redirect()->back()->with('modal_popup_landing', 5);
        } catch (\Mailchimp_List_AlreadySubscribed $e) {
            return redirect()->back()->with('error','Email is Already Subscribed');
        } catch (\Mailchimp_Error $e) {
            return redirect()->back()->with('error','Error from MailChimp');
        }
    }

    public function subscribe_survey(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]); 
        try { 
            $this->mailchimp
            ->lists
            ->subscribe(
                $this->listId,
                ['email' => $request->email]
                // ['fname' => $request->input('fname')]
            );

            $sub = new Subcribe;

            $sub->email = $request->email; 
            $sub->save(); 
            Session::flash('modal_popup_landing', 5);
            return response()->json(['data'=>true]);
        } catch (\Mailchimp_List_AlreadySubscribed $e) {
            return redirect()->back()->with('error','Email is Already Subscribed');
        } catch (\Mailchimp_Error $e) {
            return redirect()->back()->with('error','Error from MailChimp');
        }
    }

	public function profile()
	{
		$employee = Employees::find(Auth::user()->id); 
        $useremploye = $employee;   
	}
    public function view_total()
    {
    	
    }
    public function follow(Request $request)
    {   

        $follower = auth()->user();
        $user = Employees::find($request->id);
        if ($follower->id == $user->id) {
            return response()->json(['error'=>false,'message'=>'You cant follow yourself']);  
        }
        if(!$follower->isFollowing($user->id)) {
            $follower->follow($user->id);

            // sending a notification

            $user->notify(new UserFollowed($follower));

            return response()->json(['error'=>false,'message'=>'You are now friends with '.$user->fname.' '.$user->lname.'','data'=>$follower]);  
        } 
        return response()->json(['error'=>true,'message'=>'You are already following '.$user->fname.' '.$user->lname.'','data'=>$follower]); 

        // return response()->json(['error'=>true]); 
    	 // if ($request->id != null) {    
	     //    $follow = new Follow; 
	     //    $follow->followid = $request->id;
      //       $follow->userid = Auth::user()->id;  
	     //    $follow->status = '0';  
	     //    $follow->save();   

      //       $profile = Employee::find($request->id);
      //       $username = route('networkprofile',$profile->username);
      //       $follow->notify(new UserFollowed($follow));
      //   	return response()->json(['data'=>$profile,'route'=>$username]); 
    	 // }
 
    }

    public function unfollow(Request $request){ 
            $unfollow = Follow::where('followid',$request->id)->where('userid',Auth::user()->id);  
            $unfollow->forceDelete();

            DB::table('notifications')
            ->where('notifiable_id', Auth::user()->id)
            ->update(['read_at' => \Carbon\Carbon::now()]);
            return response()->json(['data'=>$unfollow,'id'=>$request->id]);
        
    } 


    public function hide_post(Request $request)
    {
    	 if ($request->id != null) {    
	        $hidepost = new HideArticle; 
	        $hidepost->id_post = $request->id;
	        $hidepost->id_user = Auth::user()->id;  
	        $hidepost->save();   
        	return response()->json(['data'=>$hidepost]); 
    	 }

    	 return response()->json(['error'=>true]); 
    }

    public function join_group(Request $request)
    {	
    	 if ($request->id != null) {  
    	    $join = GroupMember::where('userid',Auth::user()->id)->first(); 
    	    if (count($join) != 1) {
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
    	 return response()->json(['errors'=>true]); 
    } 


    public function provinces(){
        $term = Input::get('term');
        
        $results = array();
        
        $queries = DB::table('provinces')
            ->where('name', 'LIKE', '%'.$term.'%')
            ->orWhere('country', 'LIKE', '%'.$term.'%')
            ->take(5)->get();
        
        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'name' => $query->name, 'country' => $query->country, 'value' => $query->name.', '.$query->country ];
        }
        return Response::json($results);
    }

    public function chtrades(){
        $term = Input::get('term');
        
        $results = array();
        
        $queries = DB::table('child_trades')
            ->join('trades', 'child_trades.tradeid', '=', 'trades.id')
            ->where('child_trades.name', 'LIKE', '%'.$term.'%') 
            ->select('child_trades.*', 'trades.name as trade')
            ->take(5)->get();
        

        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->name.' - '. $query->trade  ];
        }
        return Response::json($results);
    }

    public function delete_post(Request $request)
    {
         if ($request->id != null) {   
            $deletepost = PostArticle::findOrFail($request->id);  
            $deletepost->delete();  

            return response()->json(['data'=>$deletepost]); 
         }

         return response()->json(['error'=>true]); 
    }


    public function notifications()
    {
        return auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
    }

    public function notifdelete(Request $request)
    { 
        $delete = DB::table('notifications')
        ->where('id', $request->id)
        ->update(['read_at' => \Carbon\Carbon::now()]);
        return response()->json(['data'=>$delete,'id'=>$request->id]);
    }

    public function status_share(Request $request)
    {
        $status = DB::table('employees')
        ->where('id',  Auth::user()->id)
        ->update(['status_share' => $request->status_share]);
        return response()->json(['data'=>true]);
    }

     public function statuses(Request $request)
    {
        $status = DB::table('employees')
        ->where('id',  Auth::user()->id)
        ->update(['employe_status' => $request->id]);
        return response()->json(['data'=>true]);
    }

    public function search(Request $request)
    {   

        $search = $request->get('search');
        $profilesearchsetting = ProfileSearchSetting::where('userid',Auth::user()->id)->first();
        $jobsearchsetting   = JobSearchSetting::with('tittles','location','posted','typejob','company')->where('userid',Auth::user()->id)->first();
        // dd($jobsearchsetting);
        $province = Province::all();
        $chtrade = ChildTrade::all();
        $companiesall = Company::all();
        $postedtime = PostedTime::all();
        $jobtype = TypeJob::all();
        // dd($jobsearchsetting);
        if (count($profilesearchsetting) == 0) {
            $profilesetting = new ProfileSearchSetting; 
            $profilesetting->userid = Auth::user()->id; 
            $profilesetting->interest = '0';   
            $profilesetting->location = '0';    
            $profilesetting->company = '0';  
            $profilesetting->industries = '0';  
            $profilesetting->school = '0';  
            $profilesetting->save();
             $profilesearchsetting = ProfileSearchSetting::where('userid',Auth::user()->id)->first();
        }

        if (count($jobsearchsetting) == 0) {
            $jobsetting = new JobSearchSetting; 
            $jobsetting->userid = Auth::user()->id; 
            $jobsetting->postedtimeid = '1';  
            $jobsetting->save(); 

            $jobsearchsetting   = JobSearchSetting::with('tittles','location','posted','typejob','company')->where('userid',Auth::user()->id)->first();
        }
        $profile = Employee::with('interest','province','chtrade','education')->findOrFail(Auth::user()->id);

       
        if (count($profile) !=0) {
            $schoolname = [];
            foreach ($profile->education as $key => $inst) {
                $schoolname[] = $inst->institution;
            }  
            if (count($profile->interest)!=0) {
                # code...
            $interest = $profile->interest->description;
            }else {
                $interest ='';
            }
            $location = $profile->province->id; 
            $industries = $profile->chtrade->id;
            $school     = $schoolname; 
        }
      
            // dd($jobsearchsetting);

        if($request->has('search')){   
            if (count($profilesearchsetting)!=0) {
                if ($profilesearchsetting->interest==1) {    
                    $queryinterest = ['interests.description', '=', $interest];
                }  else {
                     $queryinterest =['interests.description', ''];
                }
                if ($profilesearchsetting->location==1) {
                    $querylocation = ['provinces.id', '=', $location];
                }else {
                    $querylocation =['provinces.id' , ''];
                }

                if ($profilesearchsetting->company==1) { 
                }else { 
                }
                if ($profilesearchsetting->industries==1) {
                    $queryindustries = ['child_trades.id', '=', $industries];
                }else {
                    $queryindustries =['child_trades.id', '=', ''];
                }
                if ($profilesearchsetting->school ==1) {
                    $queryschool = [$schoolname];
                }else {
                    $queryschool ='*';
                }

            }
            // $products = Employee::whereHas('interest', function($query) use($search) {
            //     $query->where('description', '=', '%'.$search.'%');
            // })->orWhere('fname','LIKE','%'.$search.'%')->get();

            // dd($products);
            

            $queryprofile = DB::table('employees')   
                ->leftJoin('interests' ,'interests.userid', '=', 'employees.id')
                ->leftJoin('follows'  ,'follows.followid', '=', 'employees.id')
                ->leftJoin('provinces','employees.provinceid', '=', 'provinces.id') 
                ->leftJoin('child_trades','employees.child_tradeid', '=', 'child_trades.id') 
                ->leftJoin('education','education.userid', '=', 'employees.id') 
                ->select('employees.*',
                    'provinces.name as provinces',
                    'provinces.country as country',
                    DB::raw('count(follows.userid) as follower')
                )
                ->whereNotIn('employees.id',[Auth::user()->id]) 
                ->where([['employees.fname', 'LIKE','%'.$search.'%'],
                        // $queryinterest,
                        // $querylocation,
                        // $queryindustries,
                ])
                // ->whereIn('education.institution',$schoolname) 
                ->orWhere([['employees.mdname', 'LIKE','%'.$search.'%'],
                         ['employees.lname', 'LIKE','%'.$search.'%']
                ]) 
                ->groupBy('employees.id')   
                ->get(); 
         
                $titles = [];
                if (count($jobsearchsetting->tittles)!=0) {
                   foreach ($jobsearchsetting->tittles as $key => $job) {
                    $titles[] = $job->chtrade->id;
                    }  
                }
                  
                $locations = [];
                if (count($jobsearchsetting->location)!=0) {
                    foreach ($jobsearchsetting->location as $key => $loc) {
                        $locations[] = $loc->province->id;
                    }   
                }
                
                $companies = [];
                if (count($jobsearchsetting->company)!=0) {
                    foreach ($jobsearchsetting->company as $key => $com) {
                        $companies[] = $com->companyname->id;
                    }  
                }
                $type = [];
                if (count($jobsearchsetting->typejob)!=0) {
                    foreach ($jobsearchsetting->typejob as $key => $typej) {
                        $type[] = $typej->typejob;
                    }  
                }
                // if (count($jobsearchsetting->tittles) != 0) {    
                //     $querytitles = $title;
                // }  else {
                //      $querytitles ='';
                // }
                $title      = $titles; 
                $posted     = $jobsearchsetting->posted->id;
                $location   = $locations; 
                $typejob    = $type;
                $company    = $companies; 

                
                if ($posted == 1) {
                    $var = '<=';
                    $post = Carbon::now();
                }else if($posted == 2){
                    $var = '<';
                    $post =  Carbon::now()->subDays(7);
                  
                }
                else if($posted == 3){
                    $var = '>=';
                    $post =  Carbon::parse('-24 hours');
                }
                else if($posted == 4){
                    $var = '>=';
                    $post =  Carbon::now()->subMonth();
                }  
                // dd($company);

            $queryjobs = DB::table('jobs')   
                ->leftJoin('companies' ,'jobs.companyid', '=', 'companies.id')
                ->leftJoin('type_companies' ,'companies.typecompanyid', '=', 'type_companies.id')
                ->leftJoin('company_industries' ,'company_industries.companyid', '=', 'companies.id')
                ->leftJoin('provinces' ,'companies.location', '=', 'provinces.id')
                ->join('industries' ,'company_industries.industryid', '=', 'industries.id')
                ->leftJoin('job_positions','jobs.id', '=', 'job_positions.jobid') 
                ->leftJoin('child_trades','job_positions.positionjobid', '=', 'child_trades.id') 
                ->leftJoin('job_skills','jobs.id', '=', 'job_skills.jobid')
                ->leftJoin('job_types','jobs.id', '=', 'job_types.jobid')
                ->select('jobs.*',
                    'companies.name as company',
                    'type_companies.name as typecompany',
                    'provinces.name as provinces',
                    'provinces.country as country',
                    'companies.avatar as avatar'
                ) 
                ->where([['jobs.name', 'LIKE','%'.$search.'%']
                ])
                ->orWhere([['jobs.created_at',$var,$post]])
                // ->orWhereIn('job_positions.positionjobid',$title)   
                // ->orWhereIn('companies.id',$company)    
                // ->orWhereIn('job_types.typejobid',$typejob)    
                // ->orWhereIn('jobs.locationid',$location)   
                ->groupBy('jobs.id')   
                ->get();  
            // dd($queryjobs[0]->companyid);

            $querycompanies = DB::table('companies')   
                ->leftJoin('type_companies' ,'companies.typecompanyid', '=', 'type_companies.id')
                ->leftJoin('company_industries' ,'company_industries.companyid', '=', 'companies.id')
                ->leftJoin('provinces' ,'companies.location', '=', 'provinces.id') 
                ->join('industries' ,'company_industries.industryid', '=', 'industries.id')
                ->select('companies.*',
                  'type_companies.name as typecompany',
                  'provinces.name as province',
                  'provinces.country as country'
                  ) 
                ->where('companies.name', 'LIKE','%'.$search.'%') 
                ->groupBy('companies.id')   
                ->get();  

             $querygroup = DB::table('groups')    
                ->leftJoin('group_types' ,'groups.group_type_id', '=', 'group_types.id') 
                ->select('groups.*',
                    'group_types.id as typeid',
                    'group_types.type_name as type'
                  ) 
                ->where('groups.group_name', 'LIKE','%'.$search.'%') 
                ->groupBy('groups.id')   
                ->get();   

        }else{
         
        }
        $join =  GroupMember::where('userid',Auth::user()->id)->where('status',1)->get(); 
        $follow = Follow::where('userid',Auth::user()->id)->get(); 

        // dd($follow);
        $titlesid = [];
        $locationid = [];
        $companyid = [];
        $typejobid = [];
        if (count($jobsearchsetting)!=0) {
            foreach ($jobsearchsetting->tittles as $key => $tit) {
                $titlesid[] = $tit->chtradeid;
            }  
            foreach ($jobsearchsetting->location as $key => $lol) {
                $locationid[] = $lol->locationid;
            }  
            foreach ($jobsearchsetting->company as $key => $com) {
                $companyid[] = $com->companyid;
            }   
            foreach ($jobsearchsetting->typejob as $key => $tip) {
                $typejobid[] = $tip->typejob;
            }   

        }
       
        $groupid = [];
        foreach ($join as $key => $gr) {
            $groupid[] = $gr->groupid;
        } 

        $folowid = [];
        foreach ($follow as $key => $fole) {
            $folowid[] = $fole->followid;
        }  

        // $username = $request->get('search');
        $industri = CompanyIndustry::with('industry')->get();
        // dd($titlesid);       
        return view('all_include.search',compact('queryprofile','queryjobs','querygroup','querycompanies','profilesearchsetting','jobsearchsetting','province','chtrade','companiesall','jobtype','postedtime','titlesid','locationid','companyid','typejobid','industri','groupid','folowid','search')); 
    }
    public function titlessave(Request $request)
    {   

        $validator = Validator::make($request->all(), [
           'titles'     => 'required'
        ]);  

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $usercek = JobSearchSetting::where('userid',Auth::user()->id)->first();

        if (!isset($usercek)) {
                $jobsetting = new JobSearchSetting; 
                $jobsetting->userid = Auth::user()->id; 
                $jobsetting->postedtimeid = '1';  
                $jobsetting->save(); 

                foreach ($request->titles as $val) {
                    $titles = new JobSearchSettingTitle;
                    $titles->jobsearchid = $jobsetting->id;
                    $titles->chtradeid = $val;
                    $titles->save(); 
                }
               
        }else { 
            $settingsc = JobSearchSettingTitle::where('jobsearchid',$usercek->id);  
            $settingsc->forceDelete();

            foreach ($request->titles as $val) {
                $titles = new JobSearchSettingTitle;
                $titles->jobsearchid = $usercek->id;
                $titles->chtradeid = $val;
                $titles->save(); 
 
            }
        }
         return response()->json(['data'=>true]);
    }

    public function interests(Request $request)
    { 

        $validator = Validator::make($request->all(), [
           'value'     => 'required'
        ]); 
         // return response()->json(['data'=>$request->all()]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $usercek = ProfileSearchSetting::where('userid',Auth::user()->id)->first();
        if (!isset($usercek)) {
            $profilesetting = new ProfileSearchSetting; 
            $profilesetting->userid = Auth::user()->id; 
            if ($request->value == 'interest') {
                 $profilesetting->interest = $request->status;  
            }elseif($request->value == 'location'){ 
                 $profilesetting->location = $request->status;  
            }
            elseif($request->value == 'company'){
                 $profilesetting->company = $request->status;  
            }
            elseif($request->value == 'industries'){
                $profilesetting->industries = $request->status;  
            }
            elseif($request->value == 'school'){ 
                $profilesetting->school = $request->status;  
            }
            else{

            }
            $profilesetting->save();
        }else{ 
            $updateprofilesetting  = ProfileSearchSetting::where('userid',Auth::user()->id) 
                ->update([$request->value  => $request->status]); 
        }
 
         return response()->json(['data'=>true]);

    }


    public function locationsave(Request $request)
    { 

        $validator = Validator::make($request->all(), [
           'locationid'     => 'required'
        ]);  

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $usercek = JobSearchSetting::where('userid',Auth::user()->id)->first();

        if (!isset($usercek)) {
                $jobsetting = new JobSearchSetting; 
                $jobsetting->userid = Auth::user()->id; 
                $jobsetting->postedtimeid = '1';  
                $jobsetting->save(); 

                foreach ($request->locationid as $val) {
                    $location = new JobSearchSettingLocation;
                    $location->jobsearchid = $jobsetting->id;
                    $location->locationid = $val;
                    $location->save(); 
                }
               
        }else { 
            $settingsc = JobSearchSettingLocation::where('jobsearchid',$usercek->id);  
            $settingsc->forceDelete();

            foreach ($request->locationid as $val) {
                $location = new JobSearchSettingLocation;
                $location->jobsearchid = $usercek->id;
                $location->locationid = $val;
                $location->save(); 
 
            }
        }
         return response()->json(['data'=>true]);

    }
    public function companysave(Request $request)
    { 

        $validator = Validator::make($request->all(), [
           'company'     => 'required'
        ]);  

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $usercek = JobSearchSetting::where('userid',Auth::user()->id)->first();

        if (!isset($usercek)) {
                $jobsetting = new JobSearchSetting; 
                $jobsetting->userid = Auth::user()->id; 
                $jobsetting->postedtimeid = '1';  
                $jobsetting->save(); 

                foreach ($request->company as $val) {
                    $company = new JobSearchSettingCompany;
                    $company->jobsearchid = $jobsetting->id;
                    $company->companyid = $val;
                    $company->save(); 
                }
               
        }else { 
            $settingsc = JobSearchSettingCompany::where('jobsearchid',$usercek->id);  
            $settingsc->forceDelete();

            foreach ($request->company as $val) {
                $company = new JobSearchSettingCompany;
                $company->jobsearchid = $usercek->id;
                $company->companyid = $val;
                $company->save(); 
 
            }
        }
         return response()->json(['data'=>true]);

    }
    public function datepostedsave(Request $request)
    { 

        $validator = Validator::make($request->all(), [
           'value'     => 'required'
        ]);  

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $usercek = JobSearchSetting::where('userid',Auth::user()->id)->first();

        if (!isset($usercek)) {
                $jobsetting = new JobSearchSetting; 
                $jobsetting->userid = Auth::user()->id; 
                $jobsetting->postedtimeid = $request->value;  
                $jobsetting->save();  
               
        }else {  
           $updateprofilesetting  = JobSearchSetting::where('userid',Auth::user()->id) 
                ->update(['postedtimeid'  => $request->value]); 
        }
         return response()->json(['data'=>true]);

    }

    public function typejobsave(Request $request)
    { 

        $validator = Validator::make($request->all(), [
           'value'     => 'required'
        ]);  

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $usercek = JobSearchSetting::where('userid',Auth::user()->id)->first();


        if (!isset($usercek)) {
                $jobsetting = new JobSearchSetting; 
                $jobsetting->userid = Auth::user()->id; 
                $jobsetting->postedtimeid = '1';  
                $jobsetting->save();  
                if ($request->status == 0) {
                    $settingsc = JobSearchSettingType::where('jobsearchid',$usercek->id)->where('typejob',$request->value);  
                    $settingsc->forceDelete();
                }  else {
                    $type = new JobSearchSettingType;
                    $type->jobsearchid = $usercek->id;
                    $type->typejob = $request->value;
                    $type->save(); 
                }
               
        }else {
                if ($request->status == 0) {
                    $settingsc = JobSearchSettingType::where('jobsearchid',$usercek->id)->where('typejob',$request->value);  
                    $settingsc->forceDelete();
                } else {
                    $type = new JobSearchSettingType;
                    $type->jobsearchid = $usercek->id;
                    $type->typejob = $request->value;
                    $type->save();
                } 
                  
        }
         return response()->json(['data'=>true]);

    }

    public function searchsetting()
    {   
        $province     = Province::all();
        $chtrade      = ChildTrade::all();
        $companiesall = Company::all();
        $postedtime   = PostedTime::all();
        $jobtype      = TypeJob::all();

        $profilesetting = ProfileSearchSetting::where('userid',Auth::user()->id)->first();
        $jobsetting = JobSearchSetting::with('tittles','location','company','posted','typejob')->where('userid',Auth::user()->id)->first();

        $titlesid = [];
        foreach ($jobsetting->tittles as $key => $tit) {
            $titlesid[] = $tit->chtradeid;
        }  
        $locationid = [];
        foreach ($jobsetting->location as $key => $lol) {
            $locationid[] = $lol->locationid;
        }  
        $companyid = [];
        foreach ($jobsetting->company as $key => $com) {
            $companyid[] = $com->companyid;
        }   
        $typejobid = [];
        foreach ($jobsetting->typejob as $key => $tip) {
            $typejobid[] = $tip->typejob;
        }  
        // dd($typejobid);
        return view('all_include.searchmobile',compact('province','chtrade','companiesall','jobtype','postedtime','profilesetting','jobsetting','titlesid','locationid','companyid','typejobid'));
    }



    public function review($comany = '')
    {   
        $company = Company::with('locations')->where('slug',$comany)->first();
        if (!$company) {
            abort(404);
        } 
        return view('company.review',compact('company'));
    }


    public function result()
    {    
        return view('company.result');
    }
}

 