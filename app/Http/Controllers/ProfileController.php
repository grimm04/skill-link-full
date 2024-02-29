<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Follow;
use App\Models\Gender;
use App\Models\EmploymentStatus;
use App\Models\Martial;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Education;
use App\Models\HideArticle;
use App\Models\PostArticle;
use App\Models\Timeline;
use App\Models\Job;
use App\Models\Ticket;
use App\Models\Level;
use App\Models\Employeskill;
use App\Models\Endorsment;
use App\Models\Employeendorsment;
use App\Models\Duty;
use App\Models\Medical;
use App\Models\Interest;
use App\Models\EmployeDuty;
use App\ViewProfile;
use App\Employees;
use App\TypeTimeline;
use App\levelall;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Notifications\ShareProfile;
class ProfileController extends Controller
{   

    protected $endorsement;
    protected $level;
    protected $gender;
    protected $martial;
    protected $employmentstatus;
    protected $typetimeline;
    protected $job;
    protected $duty;
    protected $levelall;

    public function __construct()
    {
        $this->endorsement       = Endorsment::all();
        $this->level             = Level::all();
        $this->gender            = Gender::all();
        $this->martial           = Martial::all();
        $this->employmentstatus  = EmploymentStatus::all();
        $this->typetimeline      = TypeTimeline::all();
        $this->job               = Job::all();
        $this->duty              = Duty::with('fit')->get();
        $this->levelall          = levelall::all();
    }
    public function about()
    {   

        $about = Employee::where('id',Auth::user()->id)->first();  
        $follow = Follow::where('userid',Auth::user()->id)->count(); 
    	return view('frontprofile.about',compact('about','follow'));
    }

    public function post($post = '')
    {   

        
        $post = Employee::where('id',Auth::user()->id)->first(); 
        $follow = Follow::where('userid',Auth::user()->id)->count();

        $hide =   HideArticle::where('id_user',Auth::user()->id)->get(); 

        $hidepost = [];
        foreach ($hide as $key => $hid) {
            $hidepost[] = $hid->id_post;
        }   

        $posts = PostArticle::where('status',1)->where('id_user',Auth::user()->id)->whereNull('groupid')->orderBy('created_at', 'desc')->paginate(3);   

        // dd($posts);
        return view('frontprofile.post',compact('post','follow','posts'));
    }

    public function view_profile($username='')
    {	 
    	$user = Employee::where('username',$username)->first();
    	if (count($user) != 0) { 
    		$profile = ViewProfile::where('employeid',$user->id)->first(); 
    		if (count($profile) == 0) {
    			if (Auth::user()->id != 0) {
    				$flight = new ViewProfile; 
			        $flight->view_id = Auth::user()->id;
			        $flight->employeid = $user->id; 
			        $flight->save();
    			} 
    		} 
    	} 
    	return('page no avaible');
    }

    public function edit()
    {       
        $gender     = $this->gender;
        $employment = $this->employmentstatus;
        $martial    = $this->martial; 
        $edit = Employee::where('id',Auth::user()->id)->first();
        return view('frontprofile.edit',compact('edit','gender','employment','martial'));
    }

    public function experience()
    {    
        return view('frontprofile.addexperience');
    }


    public function editexperience()
    {   
        $experience = Experience::where('userid',Auth::user()->id)->get();  
        return view('frontprofile.editexperience',compact('experience'));
    }


    public function skill()
    {   
        $level = $this->level;   
        return view('frontprofile.addskill',compact('level'));
    }

    public function editskill()
    {    
        $level   = $this->level;  
        $skill   = Employeskill::where('userid',Auth::user()->id)->get();  
        return view('frontprofile.editskill',compact('level','skill'));
    }  
    
    public function endorsement()
    {   
        $endorsement         = $this->endorsement; 
        $employeeendorsement = Employeendorsment::where('userid',Auth::user()->id)->get(); 

        $endorsmentid = [];
        foreach ($employeeendorsement as $key => $en) {
            $endorsmentid[] = $en->endorsmentid;
        }       
        return view('frontprofile.editendorsement',compact('endorsement','employeeendorsement','endorsmentid'));
    }
    public function certification()
    {
        return view('frontprofile.addcertification');
    }

    public function editcertification()
    {   
        $certification = Certificate::where('userid',Auth::user()->id)->get();  
        return view('frontprofile.editcertification',compact('certification'));
    }



    public function education()
    {   
        // $gender = Gender::all();
        // $employment = EmploymentStatus::all();
        // $martial = Martial::all();
        // $edit = Employee::where('id',Auth::user()->id)->first();
        return view('frontprofile.addeducation');
    }

    public function editeducation()
    {   
        // $gender = Gender::all();
        // $employment = EmploymentStatus::all();
        // $martial = Martial::all();
        // $edit = Employee::where('id',Auth::user()->id)->first();
        $education = Education::where('userid',Auth::user()->id)->get();  
        return view('frontprofile.editeducation',compact('education'));
    }
    public function timeline()
    {   

        $type = $this->typetimeline; 
        $job  = $this->job;   
        return view('frontprofile.addtimeline',compact('type','job'));
    }
     public function edittimeline()
    {   
        $type = $this->typetimeline; 
        $job  = $this->job;   
        $timeline = Timeline::where('userid',Auth::user()->id)->get();   
        return view('frontprofile.edittimeline',compact('type','job','timeline'));
    }
    public function ticket()
    {
        return view('frontprofile.addticket');
    }

    public function editticket()
    {   
        $ticket = Ticket::where('userid',Auth::user()->id)->get();   
        return view('frontprofile.editticket',compact('ticket'));
    }

    public function additional()
    {   

        $duty = $this->duty; 
        $levelall = $this->levelall; 
        $interest = Interest::where('userid',Auth::user()->id)->get();
        $fitduty = EmployeDuty::where('userid',Auth::user()->id)->get();
        return view('frontprofile.addadditional',compact('duty','levelall','interest','duty'));
    }   
    public function editadditional()
    {   
        $duty = $this->duty; 
        $levelall = $this->levelall; 
        $employe = Employee::find(Auth::user()->id); 
        $fitduty = EmployeDuty::where('userid',Auth::user()->id)->get(['fitdutyid']);
        $dutyid = [];
        foreach ($fitduty as $key => $hid) {
            $dutyid[] = $hid->fitdutyid;
        }     
        // dd($dutyid);
        return view('frontprofile.editadditional',compact('duty','levelall','employe','dutyid'));
    }

    // ++++++++++++++++++++++++++post


    public function profile_post_edit(Request $request, Employees $post)
    {
            Validator::make($request->all(), [
                'fname'     => 'required', 
                'lname'     => 'required'
            ])->validate(); 
            
            $image = $request->cover;
            if ($request->hasFile('cover')) { 
                $filenamecover = time().''.$request->cover->getClientOriginalName(); 
                $tes = $request->cover->move(public_path('cover'),$filenamecover);    
            }  
            $newDate = date("Y-m-d", strtotime($request->birth));
            $employe = Employees::find(Auth::user()->id);
            $employe->employe_status = $request->employe_status; 
            $employe->fname = $request->fname;
            $employe->mdname = $request->mdname; 
            $employe->lname = $request->lname; 
            $employe->about = $request->about; 
            $employe->birth = $newDate; 
            $employe->provinceid = $request->provinceid; 
            $employe->child_tradeid = $request->child_tradeid; 
            $employe->genderid = $request->genderid; 
            $employe->martialid = $request->martialid; 
            $employe->web = $request->web; 
            $employe->phone = $request->phone; 
            $employe->fb = $request->fb; 
            $employe->twitter = $request->twitter; 
            $employe->ig = $request->ig;  
            if ($request->hasFile('cover')) { 
                $employe->cover = $filenamecover;
            }   
            $employe->save();

            $user = Employees::find(Auth::user()->id); 
            if ($user->status_share == 1) {
                foreach ($user->followers as $follower) {
                    $follower->notify(new ShareProfile($user, $user));
                } 
            }
            
            return response()->json(['data'=>true]); 
    
    }

     public function addexperience(Request $request)
     {      

       
        $input = $request->all();
        $rules = [];

        foreach($input['company'] as $key => $val)
        {
            $rules['company.'.$key] = 'required';
            $rules['title.'.$key] = 'required';
            $rules['start_date.'.$key] = 'required';
            $rules['present.'.$key] = 'required';
        }


        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        } 
        for ($i = 0; $i < count($request->company); $i++) {  
            $add = new Experience;
            $add->userid = Auth::user()->id; 
            $add->company = $request->company[$i]['company']; 
            $add->title   = $request->title[$i]['title']; 
            $add->location = $request->location[$i]['location']; 
            $add->present  = $request->present[$i]['present']; 
            $add->description = $request->description[$i]['description'];   
            if ($request->has('work_status')) {
                $add->work_status = $request->work_status[$i]['work_status'];  
            }else {
                $add->work_status = '0';
            } 
            $add->start_date = $request->start_date[$i]['start_date'];  
            $add->save(); 
        }

        return response()->json(['data'=>true]);    
    }

    public function editexperiencesave(Request $request)
     {      

            $delete = Experience::where('userid',Auth::user()->id);  
            $delete->forceDelete();
            for ($i = 0; $i < count($request->company); $i++) { 
                $add = new Experience;
                $add->userid = Auth::user()->id; 
                $add->company = $request->company[$i]['company']; 
                $add->title   = $request->title[$i]['title']; 
                $add->location = $request->location[$i]['location']; 
                $add->present  = $request->present[$i]['present']; 
                $add->description = $request->description[$i]['description'];  
                if ($request->work_status[$i]) {
                    $add->work_status = $request->work_status[$i]['work_status'];  
                } 
                $add->start_date = $request->start_date[$i]['start_date'];  
                $add->save(); 
            }

            return response()->json(['data'=>true]);    
    }

     public function experiencedelete(Request $request)
    {
            $delete = Experience::where('id',$request->id);  
            $delete->forceDelete();
            return response()->json(['data'=>$delete,'id'=>$request->id]);
    } 
    public function photocover(Request $request)
    {    
        Validator::make($request->all(), [
            'cover'     => 'required | mimes:jpeg,jpg,png | max:1000',  
        ])->validate();  
        if ($request->hasFile('cover')) { 
            $covernamecover = time().''.$request->cover->getClientOriginalName(); 
            $request->cover->move(public_path('cover'),$covernamecover);  

            $employee = Employee::where('id', Auth::user()->id)
              ->update(['cover' => $covernamecover]);

        }   
        return back()->withInput(); 
    }
    public function photoavatar(Request $request)
    {    
        Validator::make($request->all(), [
            'avatar'     => 'required | mimes:jpeg,jpg,png | max:1000',  
        ])->validate();  
        if ($request->hasFile('avatar')) { 
            $photonamephoto = time().''.$request->avatar->getClientOriginalName(); 
            $request->avatar->move(public_path('avatar'),$photonamephoto);  

            $employee = Employee::where('id', Auth::user()->id)
              ->update(['photo' => $photonamephoto]);

        }   
        return back()->withInput(); 
    }
 


    /////certification 
    public function savecertification(Request $request)
    {
        $input = $request->all();
        $rules = [];

        foreach($input['title'] as $key => $val)
        {
            $rules['photo.'.$key] = 'required'; 
            $rules['title.'.$key] = 'required'; 
            $rules['institution.'.$key] = 'required'; 
            $rules['location.'.$key] = 'required';  
        }


        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
            return redirect()->route('profile_certification')
                    ->withErrors($validator)
                    ->withInput();
        } 
        for ($i = 0; $i < count($request->title); $i++) {  
            if ($request->photo[$i]['photo']) { 
                $photonamephoto = time().''.$request->photo[$i]['photo']->getClientOriginalName(); 
                $request->photo[$i]['photo']->move(public_path('certifications'),$photonamephoto);    

            }     
            $add = new Certificate;
            $add->userid = Auth::user()->id; 
            $add->title = $request->title[$i]['title']; 
            if ($request->photo[$i]['photo']) { 
                $add->photo   = $photonamephoto; 
            }
            $add->institution = $request->institution[$i]['institution']; 
            $add->location  = $request->location[$i]['location']; 
            $add->expiry_date = $request->expiry_date[$i]['expiry_date'];  
            $add->save(); 
 
        }

        return redirect()->route('profile_about');
    }

    public function saveeditcertification(Request $request)
    {       


            $input = $request->all();
            $rules = [];

            foreach($input['title'] as $key => $val)
            { 
                $rules['title.'.$key] = 'required'; 
                $rules['institution.'.$key] = 'required'; 
                $rules['location.'.$key] = 'required';  
            }


            $validator = Validator::make($input, $rules);
            if ($validator->fails())    
            {
                return redirect()->route('editcertification')
                        ->withErrors($validator)
                        ->withInput();
            } 
            for ($i = 0; $i < count($request->title); $i++) { 
               if ($request->photo[$i]['photo']) { 
                $photonamephoto = time().''.$request->photo[$i]['photo']->getClientOriginalName(); 
                $request->photo[$i]['photo']->move(public_path('certifications'),$photonamephoto);    

                }     
                $edit = Certificate::find($request->id[$i]['id']);
                $edit->userid = Auth::user()->id; 
                $edit->title = $request->title[$i]['title']; 
                if ($request->photo[$i]['photo']) { 
                    $edit->photo   = $photonamephoto; 
                }
                $edit->institution = $request->institution[$i]['institution']; 
                $edit->location    = $request->location[$i]['location']; 
                $edit->expiry_date = $request->expiry_date[$i]['expiry_date'];  
                $edit->save(); 
            }

            return redirect()->route('profile_about');   
    }

    public function deletecertification(Request $request)
    {
            $delete = Certificate::where('id',$request->id);  
            $delete->forceDelete();
            return response()->json(['data'=>$delete,'id'=>$request->id]);
    }


    ///education

    public function addeducation(Request $request)
    {        
        $input = $request->all();
        $rules = [];

        foreach($input['institution'] as $key => $val)
        {
            $rules['institution.'.$key] = 'required'; 
            $rules['major.'.$key] = 'required'; 
            $rules['location.'.$key] = 'required'; 
            $rules['from.'.$key] = 'required';  
            $rules['until.'.$key] = 'required';  
        }


        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
            return redirect()->route('profile_education')
                    ->withErrors($validator)
                    ->withInput();
        } 
        for ($i = 0; $i < count($request->institution); $i++) {   
            $add = new Education;
            $add->userid = Auth::user()->id; 
            $add->institution = $request->institution[$i]['institution'];  
            $add->major   = $request->major[$i]['major']; 
            $add->location  = $request->location[$i]['location']; 
            $add->from = $request->from[$i]['from'];  
            $add->until = $request->until[$i]['until'];  
            $add->save(); 
 
        } 
       return redirect()->route('profile_about');
    }

    public function editeducationsave(Request $request)
    {       
          
            $delete = Education::where('userid',Auth::user()->id);  
            $delete->forceDelete();

            for ($i = 0; $i < count($request->institution); $i++) {   
                $add = new Education;
                $add->userid = Auth::user()->id; 
                $add->institution = $request->institution[$i]['institution'];  
                $add->major   = $request->major[$i]['major']; 
                $add->location  = $request->location[$i]['location']; 
                $add->from = $request->from[$i]['from'];  
                $add->until = $request->until[$i]['until'];  
                $add->save(); 
     
            } 

           return redirect()->route('profile_about');
    }

    public function deleteducation(Request $request)
    {
            $delete = Education::where('id',$request->id);  
            $delete->forceDelete();
            return response()->json(['data'=>$delete,'id'=>$request->id]);
    }

    ///ticket

    public function addticketsave(Request $request)
    {    
        $input = $request->all();
        $rules = [];

        foreach($input['title'] as $key => $val)
        {
            $rules['title.'.$key] = 'required'; 
            $rules['institution.'.$key] = 'required';  
            $rules['location.'.$key] = 'required'; 
            $rules['ticket_number.'.$key] = 'required';   
        }


        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
            return redirect()->route('profile_ticket')
                    ->withErrors($validator)
                    ->withInput();
        }  


        for ($i = 0; $i < count($request->title); $i++) {  
            if ($request->photo[$i]['photo']) { 
                $photonamephoto = time().''.$request->photo[$i]['photo']->getClientOriginalName(); 
                $request->photo[$i]['photo']->move(public_path('ticket'),$photonamephoto);    

            }   

            $add = new Ticket;
            $add->userid = Auth::user()->id; 
            $add->title = $request->title[$i]['title'];  
            $add->institution   = $request->institution[$i]['institution']; 
            $add->location   = $request->location[$i]['location']; 
            if ($request->photo[$i]['photo']) { 
                $add->photo   = $photonamephoto; 
            }
            $add->ticket_number   = $request->ticket_number[$i]['ticket_number']; 
            $add->expiry_date  = $request->expiry_date[$i]['expiry_date'];  
            $add->save();  
 
        } 
       return redirect()->route('profile_about');
    }

    public function editticketsave(Request $request)
    {        
        $input = $request->all();
        $rules = [];

        foreach($input['title'] as $key => $val)
        {
            $rules['title.'.$key] = 'required'; 
            $rules['institution.'.$key] = 'required';  
            $rules['location.'.$key] = 'required'; 
            $rules['ticket_number.'.$key] = 'required';   
        }


        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
            return redirect()->route('profile_ticket')
                    ->withErrors($validator);
             
        }
 
        for ($i = 0; $i < count($request->title); $i++) {  

            if ($request->photo[$i]['photo']) { 
                $photonamephoto = time().''.$request->photo[$i]['photo']->getClientOriginalName(); 
                $request->photo[$i]['photo']->move(public_path('ticket'),$photonamephoto);    

            }   
             
            $add = Ticket::find($request->id[$i]['id']); 
            $add->userid = Auth::user()->id; 
            $add->title = $request->title[$i]['title'];  
            $add->institution   = $request->institution[$i]['institution']; 
            $add->location   = $request->location[$i]['location']; 
            $add->ticket_number   = $request->ticket_number[$i]['ticket_number']; 
            if ($request->photo[$i]['photo']) { 
                $add->photo   = $photonamephoto; 
            }
            $add->expiry_date  = $request->expiry_date[$i]['expiry_date'];    
            $add->save();  
 
        } 
       return redirect()->route('profile_about');
    }

    public function deletticket(Request $request)
    {
            $delete = Ticket::where('id',$request->id);  
            $delete->forceDelete();
            return response()->json(['data'=>$delete,'id'=>$request->id]);
    }
    ///timeline
     public function addtimeline(Request $request)
    {        
            for ($i = 0; $i < count($request->jobid); $i++) {   
                $add = new Timeline;
                $add->userid = Auth::user()->id; 
                $add->jobid = $request->jobid[$i]['jobid'];  
                $add->type   = $request->type[$i]['type']; 
                $add->start_date   = $request->start_date[$i]['start_date']; 
                $add->end_date   = $request->end_date[$i]['end_date'];   
                $add->save(); 
     
            } 
           return redirect()->route('profile_about');
    }

    public function edittimelinesave(Request $request)
    {       
        
        $delete = Timeline::where('userid',Auth::user()->id);  
        $delete->forceDelete();

       for ($i = 0; $i < count($request->jobid); $i++) {   
            $add = new Timeline;
            $add->userid = Auth::user()->id; 
            $add->jobid = $request->jobid[$i]['jobid'];  
            $add->type   = $request->type[$i]['type']; 
            $add->start_date   = $request->start_date[$i]['start_date']; 
            $add->end_date   = $request->end_date[$i]['end_date'];   
            $add->save(); 
 
        } 
       return redirect()->route('profile_about');
    }


    ///skill

    public function addskillsave(Request $request)
    {        
        $input = $request->all();
        $rules = [];

        foreach($input['name'] as $key => $val)
        {
            $rules['name.'.$key] = 'required'; 
        }


        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
            return redirect()->route('profile_skill')
                    ->withErrors($validator)
                    ->withInput();
        } 
        for ($i = 0; $i < count($request->name); $i++) {   
            $add = new Employeskill;
            $add->userid = Auth::user()->id; 
            $add->name = $request->name[$i]['name'];  
            $add->levelid   = $request->levelid[$i]['levelid'];  
            $add->save(); 
 
        } 
       return redirect()->route('profile_about');
    }

    public function editskillsave(Request $request)
    {       
        
        $delete = Employeskill::where('userid',Auth::user()->id);  
        $delete->forceDelete();

        for ($i = 0; $i < count($request->name); $i++) {   
            $add = new Employeskill;
            $add->userid = Auth::user()->id; 
            $add->name = $request->name[$i]['name'];  
            $add->levelid   = $request->levelid[$i]['levelid'];  
            $add->save(); 
 
        } 
       return redirect()->route('profile_about');
    }

    public function deletskill(Request $request)
    {
            $delete = Employeskill::where('id',$request->id);  
            $delete->forceDelete();
            return response()->json(['data'=>$delete,'id'=>$request->id]);
    }


    //////endorsement


    public function updateendorsement(Request $request)
    {   

        $endorsement = Employeendorsment::where('userid',Auth::user()->id)->get();
        if (count($endorsement) == 0) { 
            $end = new Employeendorsment;
            $end->userid = Auth::user()->id; 
            $end->endorsmentid = $request->id;   
            $end->status = $request->status;   
            $end->save(); 
        } else { 

            $end =  Employeendorsment::where('userid',Auth::user()->id)
            ->where('id',$request->id)
              ->update(['status' => $request->status]);
        }

        return response()->json(['data'=>$endorsement]);    
    }

    ///medical

    public function addmedicalsave(Request $request)
    {        

        $input = $request->all();
        $rules = [];

        dd();
        foreach($input['condition'] as $key => $val)
        {
            $rules['condition.'.$key] = 'required'; 
        }


        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
            return redirect()->route('profile_additional')
                    ->withErrors($validator)
                    ->withInput();
        } 
        for ($i = 0; $i < count($request->condition); $i++) {   
            $add = new Medical;
            $add->userid = Auth::user()->id; 
            $add->condition = $request->condition[$i]['condition'];  
            $add->level  = $request->level[$i]['level'];  
            $add->from   = $request->from[$i]['from'];  
            $add->save(); 
 
        } 
       return redirect()->route('profile_about');
    }

    public function editmedicalsave(Request $request)
    {       
        
        $delete = Medical::where('userid',Auth::user()->id);  
        $delete->forceDelete(); 
        for ($i = 0; $i < count($request->condition); $i++) {   
            $add = new Medical;
            $add->userid = Auth::user()->id; 
            $add->condition = $request->condition[$i]['condition'];  
            $add->level  = $request->level[$i]['level'];  
            $add->from   = $request->from[$i]['from'];
            $add->save(); 
 
        } 
       return redirect()->route('profile_about');
    }

    public function delemedical(Request $request)
    {
            $delete = Medical::where('id',$request->id);  
            $delete->forceDelete();
            return response()->json(['data'=>$delete,'id'=>$request->id]);
    }

       ///interesets

    public function addinterestssave(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'description'     => 'required' 
        ]);  
        // dd($request->all());  
        $add = new Interest;
        $add->userid = Auth::user()->id; 
        $add->description = $request->description;     
        $add->save();  

       return redirect()->route('profile_about');
    }

    public function editinterestssave(Request $request)
    {       
        $validator = Validator::make($request->all(), [
            'description'     => 'required' 
        ]);  
        $delete = Interest::where('userid',Auth::user()->id);  
        $delete->forceDelete();

      
        $add = new Interest;
        $add->userid = Auth::user()->id; 
        $add->description = $request->description;     
        $add->save();  
       return redirect()->route('profile_about');
    }

    public function deletenterests(Request $request)
    {
            $delete = Interest::where('id',$request->id);  
            $delete->forceDelete();
            return response()->json(['data'=>$delete,'id'=>$request->id]);
    }


       ///Fit For Duties

    public function addfitdutiessave(Request $request)
    {         

 
        for ($i = 0; $i < count($request->dutyid_checkbox); $i++) {    
            $fit = new EmployeDuty;
            $fit->userid = Auth::user()->id; 
            $fit->fitdutyid = $request->dutyid_checkbox[$i];      
            $fit->save(); 
        }  

        if ($request->has('dutyid_2')) {
            $fit = new EmployeDuty;
            $fit->userid = Auth::user()->id; 
            $fit->fitdutyid = $request->dutyid_2;      
            $fit->save(); 
        } 
        if ($request->has('dutyid_3')) {
            $fit = new EmployeDuty;
            $fit->userid = Auth::user()->id; 
            $fit->fitdutyid = $request->dutyid_3;      
            $fit->save(); 
        }
        
 
        // }

        return redirect()->route('profile_about'); 
    }

    public function editfitdutiessave(Request $request)
    {       
        
        $delete = EmployeDuty::where('userid',Auth::user()->id);  
        $delete->forceDelete(); 
      
        for ($i = 0; $i < count($request->dutyid_checkbox); $i++) {    
            $fit = new EmployeDuty;
            $fit->userid = Auth::user()->id; 
            $fit->fitdutyid = $request->dutyid_checkbox[$i];      
            $fit->save(); 
        }  

        if ($request->has('dutyid_2')) {
            $fit = new EmployeDuty;
            $fit->userid = Auth::user()->id; 
            $fit->fitdutyid = $request->dutyid_2;      
            $fit->save(); 
        } 
        if ($request->has('dutyid_3')) {
            $fit = new EmployeDuty;
            $fit->userid = Auth::user()->id; 
            $fit->fitdutyid = $request->dutyid_3;      
            $fit->save(); 
        }
        
 
       return redirect()->route('profile_about');
    }

    public function deletefitduties(Request $request)
    {
            $delete = EmployeDuty::where('id',$request->id);  
            $delete->forceDelete();
            return response()->json(['data'=>$delete,'id'=>$request->id]);
    }
     

 }
