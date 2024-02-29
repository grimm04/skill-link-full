<?php

namespace App\Http\Controllers\AuthEmployee;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use Alert;
use Hash;
use Validator;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */ 

    /**
     * Create a new controller instance.
     *
     * @return void 
    */

    public function __construct()
    {
        $this->middleware('guest')->except('logoutWeb');
    }

    public function showLoginForm()
    {    
        return view('employee.login');
    }

    public function login(Request $request)
    {    
        $validator =  Validator::make($request->all(), [
            'email' => 'required:email', 
            'password' => 'required'
        ]); 
 
        $login_type = filter_var($request['email'], FILTER_VALIDATE_EMAIL ) 
        ? 'email' 
        : 'phone'; 

        $credential = [
            $login_type => $request->email, 
            'password' =>  $request->password, 
        ]; 
 
        $user = Employee::where($login_type,$request->email)->first();  
        if (count($user) == 0) {   
            Alert::warning('Your Account Not Registered Or Wrong Password And Email!');
            return redirect()->back()->withInput($request->only('email'));
        } else { 
            if (Hash::check($request->password, $user->password)) {
                 if ($user->employe_status != 0) {
                    if (Auth::guard('web')->attempt($credential)) {
                        if ($user->employe_status >= 2) {
                            return redirect()->intended(route('dashboard')); 
                        }else {
                            return redirect()->intended(route('about-ys')); 
                        } 
                    } 
                } else {
                    Alert::warning('Please Activation Your Account'); 
                    return redirect()->back()->withInput($request->only('email','remember'));
                }
            }
            else {
               return redirect()->back()->withInput($request->only('email'))->with(['errors'=> $validator->getMessageBag()->add('password', 'Password wrong')]);
            } 
           
        }  
        return redirect()->back()->withInput($request->only('email','password','remember'));
    }

    public function logoutWeb()
    {
        Auth::guard('web')->logout();   

        return redirect('sign-in');
    }
}
