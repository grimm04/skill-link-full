<?php

namespace App\Http\Controllers\AuthEmployee;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;  
use App\Employees;
use Auth;
use App\Models\Gender;
use App\Models\Martial;
use App\Models\Province;
use App\Models\Level;
use App\Models\ChildTrade;
use App\Models\Trade; 
// use Request;
use Alert;
use Spatie\ImageOptimizer\OptimizerChainFactory; 
use Session;
use Illuminate\Support\Facades\Input;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
          
        $this->middleware('web');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     
    public function about_ys()
    {   
        // $employee = Employees::find(Auth::user()->id); 
        // $employeeid = $employee->id;

        $province = Province::all();
        $gender = Gender::all();
        $martial = Martial::all();

        return view('employee.about-sk',compact('gender','martial','province')); 
    } 

    public function register_about(Request $request)
    {   
        $employee = Employees::find(Auth::user()->id); 
        $employeeid = $employee->id;
        $validator = Validator::make($request->all(), [
            'address'     => 'required',
            'countryid'   => 'required', 
            'gender'      => 'required',   
            'birth'       => 'required',   
            'martial'     => 'required',   
            'emergency_1'     => 'required',     
        ]); 
        if ($validator->passes()) { 
            if ($request->ajax()) {   
               $user =  Employees::where('id', $employeeid) 
                  ->update(['address' => $request['address'],
                            'provinceid' => $request['countryid'],
                            'genderid' => $request['gender'],
                            'birth' =>    date('Y-m-d', strtotime($request['birth'])),
                            'martialid' => $request['martial'],
                            'emergency_contact_1' => $request['emergency_1'],
                            'emergency_contact_2' => $request['emergency_2']
                        ]
                          
                );  
            }  
            return response()->json(['success'=>'success']); 
        } 
        return response()->json(['error'=>$validator->errors()->all()]);
    } 
    public function getcountry(){ 

        return response()->json(Province::all()); 
    }
    public function certification()
    {   
        $employee = Employees::find(Auth::user()->id); 
        $employeeid = $employee;

        // dd($employeeid);
        $trade = trade::with('chtrade')->get(); 
        $province = Province::all();
        $childtrade = ChildTrade::all();
        $level = Level::all();
        return view('employee.certification-sk',compact('province','level','trade','childtrade'));
    } 

    public function register_certification(Request $request)
    {   
        $employee = Employees::find(Auth::user()->id); 
        $employeeid = $employee->id;

        $validator = Validator::make($request->all(), [
            'child_tradeid'     => 'required',
            'levelid'     => 'required', 
            'certifiction_number'     => 'required',   
            'origin_certification'     => 'required',   
            'certifictionoriginid'     => 'required'
        ]); 
        if ($validator->passes()) { 
            if ($request->ajax()) {   
               $user =  Employees::where('id', $employeeid) 
                  ->update(['child_tradeid' => $request['child_tradeid'],
                            'levelid' => $request['levelid'],
                            'certifiction_number' => $request['certifiction_number'],
                            'origin_certification' => $request['origin_certification'],
                            'certifictionoriginid' => $request['certifictionoriginid']
                        ] 
                );  
            }  
            return response()->json(['success'=>'success']);  
        } 
        return response()->json(['error'=>$validator->errors()->all()]);
    } 
    public function add_photo()
    {   
        $employee  =  Employees::find(Auth::user()->id);  
        $trade     =  ChildTrade::where('id', $employee->child_tradeid)->first();  
        $province  =  Province::where('id', $employee->provinceid)->first();    
     
        $fullname = $employee->fname. ' ' . $employee->lname;
        $tradename = $trade->name;
        $provincename = $province->name . ', ' .  $province->country;
        return view('employee.add-photo', compact('fullname','tradename','provincename')); 
    }

    public function register_photo(Request $request)
    {   
        $employee = Employees::find(Auth::user()->id); 
        $employeeid = $employee->id; 

        if ($request->hasFile('photo')) {   
                $request->file('photo'); 
                $filenamephoto = time().''.$request->photo->getClientOriginalName(); 
                $tes = $request->photo->move(public_path('avatar'),$filenamephoto); 
                $optimizerChain = OptimizerChainFactory::create();

                $optimizerChain->optimize($tes);
                $user =  Employees::where('id', $employeeid)->update(['photo' => $filenamephoto]);  
                
            return redirect()->route('access_contact');
        } 
        return redirect()->route('add_photo'); 
    } 

    public function access_contact()
    {   
        $google   = Session::get('google');  
        $twitter  = Session::get('twitter');  
        $fabebook = Session::get('fabebook');  
        return view('employee.access_contact',compact('google','twitter','fabebook')); 
    }
    public function connect_other(Request $request)
    {   
        $emailem = Session::get('data_google_array'); 
        $resultArray = Session::get('data_google_array'); 

        $user = DB::table('employees')
            ->leftJoin('provinces' ,'employees.provinceid', '=', 'provinces.id')
            ->select('employees.*',  
                'provinces.name as provinces',
                'provinces.country as country'
            ) 
            ->where('email','!=' ,$emailem) 
            ->whereIn('email', $resultArray) 
             ->paginate(2);  
        if ($request->ajax()) {
            return view('employee.connect_other', ['user' => $user])->render();  
        }
        return view('employee.connect_other',compact('user'));  
    }
    public function how_do_you()
    {   
        Session::forget('google'); 
        Session::forget('twitter'); 
        Session::forget('fabebook'); 
        Session::forget('data_google'); 
        $employee = Employees::find(Auth::user()->id); 
        $employeeid = $employee->id; 
        $user =  Employees::where('id', $employeeid)->update(['employe_status' => 2]);  
        return view('employee.how_do_you'); 
    } 

    public function reset_done(){
        return view('employee.forgotresult');
    }

    


    public function importGoogleContact(Request $request)
    {   
        // get data from request
        $code = $request->get('code');

        // get google service
        // $googleService = \OAuth::consumer('Google');

        $OAuth = new \OAuth();
        $OAuth::setHttpClient('CurlClient');
        $googleService = $OAuth::consumer('Google');


        // check if code is valid

        // if code is provided get user data and sign in
        if ( ! is_null($code)) {
            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken($code); 
            // Send a request with it
            $result = json_decode($googleService->request('https://www.google.com/m8/feeds/contacts/default/full?alt=json&max-results=400'), true);

            // Going through the array to clear it and create a new clean array with only the email addresses
            $emails = []; // initialize the new array
            foreach ($result['feed']['entry'] as $contact) {
                if (isset($contact['gd$email'])) { // Sometimes, a contact doesn't have email address
                    $emails[] = $contact['gd$email'][0]['address'];
                }
            } 
            $employee = Employees::all();
            
            $emailemployee = [];
            foreach ($employee as $key => $value) {
                $emailemployee[] = $value->email; 
            }
             
            $result = array_intersect($emailemployee, $emails);  
             $emailemplo = Employees::find(Auth::user()->id); 
            $emailem = $emailemplo->email;
            $resultArray = json_decode(json_encode($result), true); 
            Session::put('data_google_email', $emailem);
            Session::put('data_google_array', $resultArray);
            Session::put('google', 'checked');
            return redirect()->route('access_contact');    
 
        }
        
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();

            // return to google login url
            return redirect((string)$url);
        }
    }


    public function importTwiitterContact(Request $request)
    {
        // get data from request
        $token  = $request->get('oauth_token');
        $verify = $request->get('oauth_verifier');
        
        // get twitter service
        $tw = \OAuth::consumer('Twitter');
        
        // check if code is valid
        
        // if code is provided get user data and sign in
        if ( ! is_null($token) && ! is_null($verify))
        {
            // This was a callback request from twitter, get the token
            $token = $tw->requestAccessToken($token, $verify);
            
            // Send a request with it
            $result = json_decode($tw->request('account/verify_credentials.json'), true);
            
            $message = 'Your unique Twitter user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            $user =  Employees::where('id',Auth::user()->id)->update(['twitter_connect' => 1]);
            Session::put('twitter', 'checked');
            return redirect()->route('access_contact');  
        }
        // if not ask for permission first
        else
        {
            // get request token
            $reqToken = $tw->requestRequestToken();
            
            // get Authorization Uri sending the request token
            $url = $tw->getAuthorizationUri(['oauth_token' => $reqToken->getRequestToken()]);

            // return to twitter login url
            return redirect((string)$url);
        }
    }

    public function importFacebookContact(Request $request)
    {
        // get data from request
        $code = $request->get('code');
        
        // get fb service
        $fb = \OAuth::consumer('Facebook');
        
        // check if code is valid
        
        // if code is provided get user data and sign in
        if ( ! is_null($code))
        {
            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken($code);
            
            // Send a request with it
            $result = json_decode($fb->request('/me'), true);
            
            $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            echo $message. "<br/>";
            Session::put('facebook', 'checked');
            return redirect()->route('access_contact');  
            //Var_dump
            //display whole array.
            // dd($result);
        }
        // if not ask for permission first
        else
        {
            // get fb authorization
            $url = $fb->getAuthorizationUri();
            
            // return to facebook login url
            return redirect((string)$url);
        }
    }
    
 
}
