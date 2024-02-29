<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\JobApplyUser;
use App\Models\JobSettingUser;
use App\Models\JobSettingPosition;
use App\Models\JobSettingLocation;
use App\Models\JobSettingType;
use App\Models\Job;
use App\Models\EmploymentStatus;
use App\Models\Employee;
use App\Models\TypeJob;
use App\Models\Province;
use App\Models\ChildTrade;
use Auth;  
use Response; 
use App\Employees; 
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Input;
class FrontJobsController extends Controller
{   
    protected $rules =
    [ 
        'id' => 'required'
    ];

    protected $rulessetting =
    [ 
        'employmentstatusid' => 'required',
        'jobrelocate' => 'required'
    ];

    protected $jobapply;  
    protected $location;  
    protected $trade;  
 
    public function __construct() {
        $this->location      = Province::all();
        $this->trade      = ChildTrade::all();
        // $this->jobapply    = JobApplyUser::where('userid', $this->userID)->get(); 
    }

    public function all()
    {   
        if (Auth::guest()) {
            return redirect()->route('signin'); 
        }
        $setting = JobSettingUser::with('employmentstatus','jobsettingtype','jobsettingposition','jobsettinglocation')->where('userid',Auth::user()->id)->first(); 
        $apply = JobApplyUser::where('userid',Auth::user()->id)->get(); 
        $jobid = [];
        foreach ($apply as $key => $fol) {
            $jobid[] = $fol->jobid;
        } 
        $jobs = Job::with('position','company','skill','typejob')->whereNotIn('id',$jobid)->inRandomOrder()->get(); 
        return view('front_jobs.job_all',compact('jobs'));
    }   
    public function job_others($company)
    {   
        if (Auth::guest()) {
            return redirect()->route('signin'); 
        } 
        $company = Company::where('slug',$company)->first();
        $jobs = Job::with('position','company','skill','typejob')->where('companyid',$company->id)->inRandomOrder()->get();  
    	return view('front_jobs.other_jobs',compact('jobs','company'));
    }

    public function home()
    {   

        $apply = JobApplyUser::where('userid',Auth::user()->id)->get();
        // dd($apply);
        $jobid = [];
        foreach ($apply as $key => $fol) {
            $jobid[] = $fol->jobid;
        } 
        $jobs = Job::with('position','company','skill','typejob')->whereNotIn('id',$jobid)->inRandomOrder()->first();
        // dd($jobs);
        // if (!$jobs)  {
        //     abort(404); 
        // }  
        $job = Job::with('position','company','skill','typejob')->inRandomOrder()->get();
        // dd($job);
    	return view('front_jobs.home',compact('job','jobs','apply'));
    }
    public function profile($id , $slug)
    {   

        $companies = Company::with('headquarters','locations','typecompany','companyindustry','companyspeciality')->where('id',$id)->where('slug',$slug)->where('status',1)->first();
        // dd($companies);
        if (!$companies) {
            abort(404);
        } 

    	return view('front_jobs.profile',compact('companies'));
    } 
    public function setting()
    {   
        $employmentstatus  = EmploymentStatus::orderBy('id','desc')->get();
        $setting  = JobSettingUser::where('userid', Auth::user()->id)->first();
        $settingloc  = JobSettingLocation::where('jobsettingid', $setting->id)->get();
        $settingps  = JobSettingPosition::where('jobsettingid', $setting->id)->get();
        $location = $this->location;
        $trade = $this->trade;

        $settinglocid = [];
        foreach ($settingloc as $key => $sloc) {
            $settinglocid[] = $sloc->locationid;
        }  

        $settingpos = [];
        foreach ($settingps as $key => $sloc) {
            $settingpos[] = $sloc->positionjobid;
        }    

        $type = [];
        foreach ($setting->jobsettingtype as $key => $hid) {
            $type[] = $hid->typejobid;
        }    
        // dd($settinglocid);
        $typejob  = TypeJob::orderBy('id','desc')->get();
    	return view('front_jobs.setting',compact('employmentstatus','typejob','setting','type','location','settinglocid','settingpos','trade'));
    }
    public function apply(Request $request)
    {
    	
        $check = JobApplyUser::where('userid', Auth::user()->id)->where('jobid',$request->id)->first();
        if (count($check)  == 0) {
            $jobapply = new JobApplyUser;  
            $jobapply->userid = Auth::user()->id;  
            $jobapply->jobid = $request->id;  
            $jobapply->application = '1';  
            $jobapply->save();  
            return response()->json(['data'=>true]);    
        }else { 
            return response()->json(['data'=>false]);    
        }
    }

    public function applied()
    {   

        $jobapply = JobApplyUser::where('userid', Auth::user()->id)->get(); 
        // dd($jobapply);
    	return view('front_jobs.applied',compact('jobapply')); 
    }

    public function send_aplication($detail ='')
    {   

        $job = Job::where('id',$detail)->first();

        $employe = Employees::find(Auth::user()->id);
        if (!$employe) {
            return redirect()->route('signin'); 
        }
    	return view('front_jobs.send_aplication',compact('employe','job'));
    }

    public function detail($detail='')
    {   
        // dd($detail);
        $jobs = Job::with('position','company','skill','typejob')->where('id',$detail)->first();


        $other = Job::with('position','company','skill','typejob')->where('companyid',$jobs->companyid)->get(); 
        // dd($jobs);
        if (!$jobs)  {
            abort(404); 
        } 
        // dd($jobs);
        return view('front_jobs.apply',compact('jobs','other'));
    }
// =====================================Post=================================

    public function application(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $employe = Employees::find(Auth::user()->id);
            if ($employe->application != null) {  
                return response()->json(['data'=>true]);
            } 
            return response()->json(['data'=>false]);
        }
    }

    public function settingsave(Request $request)
    {   

        // return Response::json(array('data' => $request->all())); 
        $validator = Validator::make(Input::all(), $this->rulessetting); 
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else { 
            $setting = JobSettingUser::where('userid', Auth::user()->id)->first();  
            if (count($setting) == 0) {
                $setting = new JobSettingUser;
                $setting->userid = Auth::user()->id; 
                $setting->jobrelocate          = $request->jobrelocate; 
                $setting->jobrelocate          = $request->jobrelocate; 
                $setting->employmentstatusid   = $request->employmentstatusid; 
                $setting->save();  
            } 

            $delete = JobSettingPosition::where('jobsettingid',$setting->id);  
            $delete->forceDelete();
            for ($i = 0; $i < count($request->position); $i++) {  

                $settingpostion = new JobSettingPosition;
                $settingpostion->jobsettingid    = $setting->id;  
                $settingpostion->positionjobid   = $request->position[$i];  
                $settingpostion->save();  
            }
            $delete = JobSettingLocation::where('jobsettingid',$setting->id);  
            $delete->forceDelete();
            for ($i = 0; $i < count($request->location); $i++) {  
                $settinglocation = new JobSettingLocation;
                $settinglocation->jobsettingid  = $setting->id;   
                $settinglocation->locationid    = $request->location[$i];  
                $settinglocation->save(); 
            } 

            for ($i = 0; $i < count($request->typejob); $i++) { 
                $settingtype = new JobSettingType;
                $settingtype->jobsettingid      = $setting->id;   
                $settingtype->typejobid        = $request->typejob[$i];  
                $settingtype->save(); 
            }


            return response()->json(['data'=>true]);
        }
    }

}
