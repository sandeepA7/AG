<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use DB;
use Mail;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/album/dashboard';
    
    /**
     * Where to use username instead of email and to keep different input feild name for login and registration.
     *
     * @var string
     */    
    protected $username = 'login_username';

    /**
     * To handle API for mobility.
     *
     * @var string
     */    
    protected $apiMsg = array();

        
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
    
    protected function getCredentials(Request $request)
    {
        //return $request->only($this->loginUsername(), 'password');
        $credentials = $request->only($this->loginUsername(), 'login_password');
        $credentials['username'] = $credentials['login_username'];
        $credentials['password'] = $credentials['login_password'];
        unset($credentials['login_username']);
        unset($credentials['login_password']);
        return $credentials;

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = array(
            'tnc.required' => 'Please confirm that you have read terms and conditions!',
        );       

        return Validator::make($data, [
            'fname' => 'required|max:255',
            'sname' => 'required|max:255',
            'username' => 'required|max:255|confirmed|unique:users',
            'password' => 'required|min:6',
  		    'gender' => 'required',
  		    'dob' => 'required',
            'country' => 'required',
            'npcontact' => 'max:255',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
    
        $data['email'] = (filter_var($data['username'], FILTER_VALIDATE_EMAIL))? trim($data['username']):'';
        $data['phone'] = (!filter_var($data['username'], FILTER_VALIDATE_EMAIL))? $data['username']:'';
        return User::create([
            'fname' => $data['fname'],
            'sname' => $data['sname'],           
            'username' => $data['username'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'gender' => $data['gender'],     
            'dob' => $data['dob'], 
            'country' => $data['country'],     
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function login(Request $request)
    {
        $this->validate($request, [
            'login_username' => 'required',
            'login_password' => 'required',
        ]);
 
        $user = DB::table('users')->where('username',$request->input('login_username'))->first();

        //dd(DB::getQueryLog());//exit;
        //print_r(DB::getQueryLog());
        //exit;

        if(!is_null($user)) {
            if($user->status == 2){

                return redirect()->to('/register-nominee/'.$request->input('login_username'))
                    ->with('success',"Please provide below information to get registered in AG.");     
            }
            else if($user->status == 0){

                $this->logout();
                return back()->with('warning',"First please activate your account.");
            }        
            else{

                if (auth()->attempt(array('username' => $request->input('login_username'), 'password' => $request->input('login_password'))))
                {

                    return redirect()->to($this->redirectTo);
                }else{
                    return back()->with('warning','Incorrect username or password.');
                }
            }
        }
        else{
            return back()->with('warning','Incorrect username or password.');
        }
    }

    /**
     * Register new user
     *
     * @param  array  $data
     * @return User
     */
    public function register(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);

        if ($validator->passes()) {
            $user = $this->create($input)->toArray();
            $user['token'] = str_random(6);

            $check = DB::table('user_activations')->where('user_id',$user['id'])->first();
            if(!is_null($check)) {
                DB::table('user_activations')->where('user_id',$user['id'])->delete();
            } 

            DB::table('user_activations')->insert(['user_id'=>$user['id'],'token'=>$user['token']]);

            Mail::send('emails.activation', $user, function($message) use ($user) {
                $message->to($user['email']);
                $message->subject('Site - Activation Code');
            });

            /** Nominee Request
            * 
            */
            if(!empty($input['npcontact']) && isset($input['npcontact'])){
                $nominee['username'] = trim($input['npcontact']);
                $nominee['email'] = (filter_var($input['npcontact'], FILTER_VALIDATE_EMAIL))? trim($input['npcontact']):'';
                $nominee['phone'] = (!filter_var($input['npcontact'], FILTER_VALIDATE_EMAIL))? trim($input['npcontact']):'';
                $nominee['refName'] = $user['fname'].' '.$user['sname'];
                $nominee['refEmail'] = $user['email'];
                $nominee['link'] = $user['email'];
                $nominee['password'] = str_random(6);

                $existing_nominee = DB::table('users')->where('username', $input['npcontact'])->first();

                if(is_null($existing_nominee)){
                    $nominee_id = DB::table('users')->insertGetId(['username'=>$nominee['username'],'email'=>$nominee['email'], 'phone'=>$nominee['phone'], 'password'=>bcrypt($nominee['password']), 'status'=>2]);
                    $emailTemplate = 'emails.new-nominee';
                }
                else{
                    $nominee_id = $existing_nominee->id;
                    if($existing_nominee->status == 2){
                        DB::table('users')->where('id', $nominee_id)->update(['password' => bcrypt($nominee['password'])]);
                        $emailTemplate = 'emails.new-nominee';
                    }
                    else
                        $emailTemplate = 'emails.nominee';
                }
                
                $user_nominee = DB::table('nominees')->where(['user_id'=>$user['id'],'nominee_user_id'=>$nominee_id])->first();
                if(is_null($user_nominee)){
                    DB::table('nominees')->insert(['user_id'=>$user['id'],'nominee_user_id'=>$nominee_id, 'view'=>1]);
                }            

                if($nominee['email'] != '' ){
                    Mail::send($emailTemplate, $nominee , function($message) use($nominee) {
                        $message->to($nominee['email']);
                        $message->subject('AG - Congrats!!');
                    });
                }
            }
            /** End Nominee request
            *
            */
            if(isset($input['api']) && $input['api'] == 1){
            	//echo '1'; exit;
            	$this->apiMsg['status'] = '1';
            	$this->apiMsg['user'] = $user;
            }
            else{
             return redirect()->to('verify/'.$user['id'])
                ->with('success',"We sent activation code. Please check your mail.");           	
            }
        }
        if(isset($input['api']) && $input['api'] == 1 && count($validator->errors()->all())>0){
        	$this->apiMsg['status'] = '0';
        	$this->apiMsg['error'] = $validator->errors();
        }else{
        	return back()->with('errors',$validator->errors());        	
        }

    }

     /**
     * show the application user confirmation after registration
     *
     * @param  $user_id
     */
    public function userVerification($user_id)
    {
        $user = DB::table('users')->where('id',$user_id)->first();

        if(!is_null($user)){
            if($user->status == 1){
                return redirect()->to('/')
                    ->with('success',"You are already activated.");                    
            }
            $check = DB::table('user_activations')->where('user_id',$user_id)->first();
 
            if(is_null($check)){
                return back()->with('errors', "Invalid link!");
            }
            return redirect()->to('confirm/'.$user_id)
               ->with('success',"Please check your mail to get the code.");
        }
        return redirect()->to('confirm/'.$user_id)
            ->with('errors', "Invalid link!");
    }   

    /**
     * Check for user Activation Code
     *
     * @param  array  $data
     * @return User
     */
    public function userConfirmation(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
        ]);
        
        $check = DB::table('user_activations')->where('token',$request->input('token'))->first();
        
        if(!is_null($check)){
            $user = User::find($check->user_id);
           
            if($user->status == 1){
                return redirect()->to('/home')
                    ->with('success',"You are already activated. Please login.");                
            }

            $user->update(['status' => 1]);
            DB::table('user_activations')->where('token',$request->input('token'))->delete();
            Auth::guard($this->getGuard())->login($user);

            return redirect()->to($this->redirectTo);
        }

        return redirect()->to('/home')
                ->with('warning',"Invalid token.");
                
    }

    /*public function nomineeRegistration($username)
    {
        $user = DB::table('users')->where('username',$username)->first();

        if(!is_null($user)){
            if($user->status == 2 && empty($user->fname)){
                return redirect()->to('/register-nominee')
                    ->with('success',"Please provide below information to get registered in AG.");         
            }
        }
    }*/

    public function registerNominee(Request $request){

        $input = $request->all();
        $validator = $this->nomineeValidator($input);
 
        if ($validator->passes()) {
            
            $user = User::where('username',$input['username']) -> first();
            if(!is_null($user)){
                DB::table('users')->where('username', $input['username'])->update(['fname' => $input['fname'], 'sname' => $input['sname'], 'password' => bcrypt($input['password']), 'gender' => $input['gender'], 'dob' => $input['dob'], 'status' =>1]);
               Auth::guard($this->getGuard())->login($user);
               return redirect()->to($this->redirectTo);
            }
            else{
                return redirect()->to('/register-nominee/'.$input['username'])
                    ->with('invalid_user',"Invalid user.");
            }
        }
        else{
             return back()->with('errors',$validator->errors());        
        }
    } 

    protected function nomineeValidator(array $data)
    {
        $messages = array(
            'tnc.required' => 'Please confirm that you have read terms and conditions!',
        );       

        return Validator::make($data, [
            'fname' => 'required|max:255',
            'sname' => 'required|max:255',
            'password' => 'required|min:6',            
            'gender' => 'required',
            'dob' => 'required',
            'country' => 'required',
            ], $messages);


    }

/* APIs for mobility */

    public function countryList(){
        
        $countries = DB::table('countries')->select('id', 'country_name')->orderBy("country_name")->get();
        echo json_encode($countries);
    } 

    public function registerService(Request $request){
        
        $request->merge( array( 'api' => 1 ) );
        $this->register($request);
        echo (json_encode($this->apiMsg));exit;
    }  
    
    public function confirimService(Request $request){
        
        $request->merge( array( 'api' => 1 ) );
        $this->register($request);
        echo (json_encode($this->apiMsg));exit;
    }     

}   