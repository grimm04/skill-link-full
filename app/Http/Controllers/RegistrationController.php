<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request; 
use App\Employees;
use Illuminate\Support\Facades\Mail; 
use App\Mail\SkillLinkRegistration;
use Alert;
use Nexmo;
use App\MSG91;
use Session;
class RegistrationController extends Controller
{    

    public function opening(){ 
    	return view('registration2.opening');
    }
    public function getstarted(){
        return view('registration2.getstarted');
    }  
    public function register_sk(){
    	return view('registration2.register');
    }  

    public function register_post(Request $request )
    {   
 	   
    	  $validator = Validator::make($request->all(), [
            'fname' 	=> 'required|min:3|max:120',
            'lname' 	=> 'required|min:3|max:120',
            'email' 	=> 'required|email', 
            'password'  => 'required|min:6', 
        ]); 

        $user = Employees::where('email', $request['email'])->first();

        if ($user === null) {
             if ($validator->passes()) { 
                if ($request->ajax()) {   
                  $register_type = filter_var($request['email'], FILTER_VALIDATE_EMAIL ) 
                  ? 'email' 
                  : 'phone';    
                  if ($register_type == 'phone') { 
                        $otp = rand(100000, 999999);
                        $user = Employees::create([
                              'fname'=> $request['fname'],  
                              'lname'=> $request['lname'],
                               $register_type => $request['email'],
                              'password'=>bcrypt($request['password']),
                              'verification_code'=>$otp,
                              'employe_status'=>'0'
                        ]);  

                        Nexmo::message()->send([
                          'to'   =>  $request['email'],
                          'from' => 'SKILL LINK',
                          'text' => 'Your Actifation code is '.$otp.'',
                        ]);  

                        // $data = [];
                        // $data['id']    = $user->id;
                        // $data['phone'] = $user->phone;
                        // $data['verification_code'] = $user->verification_code; 
                        Session::push('dataphone', $user->id); 
                        return response()->json(['success'=>'Registration Success, Please Check Your Email', 'page'=> 'phone']); 
     
                  }elseif($register_type == 'email'){
                        $parts = explode("@", $request['email']);
                        $getusername = $parts[0];

                        $us = Employees::where('username',$getusername)->first();
                        if (count($us) == 1 ) {
                          $id  = $us->id + 1;
                          $username = $getusername.'-'.$id;
                        }else{
                          $username = $getusername;
                        }
                        $user = Employees::create([
                              'fname'=> $request['fname'],  
                              'lname'=> $request['lname'],
                              'username'=> $username,
                               $register_type => $request['email'],
                              'password'=>bcrypt($request['password']),
                              'verification_code'=>str_random(50), 
                              'employe_status'=>'0'
                        ]);  
          
                        $data = $request->all(); 
                        $data['verification_code']  = $user->verification_code;  
                        // Mail::send('emails.email', $data, function($message) use ($data)
                        //   {
                        //       $message->from('no-reply@skill.link', "Skill Link Registration Success");
                        //       $message->subject("Skill.Link");
                        //       $message->to($data['email']);
                        //   }); 

                          $skill = new \stdClass();
                          $skill->demo_one = 'Demo One Value';
                          $skill->link = $user->verification_code;
                          $skill->sender = 'SenderUserName';
                          $skill->receiver = $request['fname'].' '.$request['lname'];
                   
                          Mail::to($request['email'])->send(new SkillLinkRegistration($skill)); 
                      // Alert::info('Registration Success, Please Check Your Email');
                      return response()->json(['success'=>'Registration Success, Please Check Your Email','page'=>'email']);
                  } else {
                      return response()->json(['errors'=>$validator->getMessageBag()->toArray() ,'mail'=>false]); 
                  }   
               }   
            } 
            else {
                return response()->json(['errors'=>$validator->getMessageBag()->toArray(),'mail'=>false]); 
            }
        } else {
            return response()->json(['errors'=>'Email Already Taken','mail'=>true]); 
        }
    	  return response()->json(['errors'=>$validator->getMessageBag()->toArray(),'mail'=>false]); 
    }
    public function verify($token)
    {
    	if ($token) { 
    		$Employee = Employees::where('verification_code', $token)->first(); 
    		if ($Employee != null) {  
    			$user =  Employees::where('verification_code', $token) 
		          ->update(['employe_status' => 1]); 

    			return redirect()->route('signin')->with('modal_popup_verify', 5);; 
    		} 

    	}
    	return redirect()->route('opening');

    }

    public function sms_verify()
    {     
       // Session::flush();
        return view('employee.smsverify'); 
    }

    public function smsverfytoken(Request $request){

            $phone = Session::get('dataphone');   
            $validator = Validator::make($request->all(), [
                'code'     => 'required|min:6', 
            ]); 
            if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()->all(),'success'=>false]); 
            }

            if ($phone != null) {
               $user =  Employees::where('id', $phone) 
                ->where('verification_code', $request->code)
                ->update(['employe_status' => 1]);    
            }else {
               $user = 0;
            }
              
            if ($user != 0) { 
                Alert::success('Your Account has Active!');
                return response()->json(['success'=>true]);  
            }else { 
                Alert::warning('Wrong Activation Code!');
                return response()->json(['success'=>false]); 
            }  

            
    }   

}
