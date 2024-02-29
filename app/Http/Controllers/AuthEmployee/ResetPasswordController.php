<?php

namespace App\Http\Controllers\AuthEmployee;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use Hash;
// use Auth;    
use App\Employees;
use Illuminate\Support\Facades\DB; 

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/password/done';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web');
    }

    public function guard()
    {
       return Auth::guard('web');
    }

    public function broker()
    {
        return Password::broker('employees'); 
    }
    
    public function showResetForm(Request $request, $token = null)
    {   

        // $email = $request->get('email');
        // $reset = DB::table('password_resets')->where('email', $email)->pluck('email'); 
        // dd($email);
        // if(count($reset) > 0) {
        //     if($this->hasher->check($token, $reset->token)) {
              
        //     }
        // }
        // $email = null;
        // $user = null; 

        // if ($token != null){ 
        //     $hash = Hash::make($token); 
        //     $email = DB::table('password_resets')->where('token', $hash)->pluck('email'); 
        //     dd($hash);

        //     $user = Employees::where('email', $email)->first();
        // } 
        return view('employee.password', ['token' => $token, 'email' => $request->email]); 
    } 

    public function reset_view()
    {
        return view('employee.forgotresult');
    } 


    public function password_reset(Request $request)
    {   
 
        Validator::make($request->all(), [
            'password'     => 'required|confirmed|min:8'
        ])->validate(); 
        
        if ($request->token != null){   

            $user =  Employees::where('email',$request->email)->update(['password' => bcrypt($request['password'])]); 
        }  
        return redirect()->route('signin');

    }
}
