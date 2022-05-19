<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Remeber;
use Redirect;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){

        $this->middleware('guest')->except('logout');
    }


       public function loginpost(Request $request){
        
       $input = $request->all();
         $remeber_count  = Remeber::where('ip_address',$request->ip_addres)->count();
       
        
       $remember_me = $request->has('remeber') ? true : false; 
 
                
       if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']), $remember_me)){
          
              if(Auth::check('next'))
              {   
                  if(Auth::user()->is_account_setup_completed == 1 && Auth::user()->account_type == "buyer"  && Auth::user()->is_active == "active"){
                   return redirect('/Client/Post-Request');
                  }
                  
              }
            //dd(Auth::user());
              if(Auth::user()->account_type == "user" && Auth::user()->is_active == "active" && Auth::user()->is_account_setup_completed == 0){
                    
                    User::where('id',Auth::user()->id)->update(array(
                        'profile_token'=> rand(),
                        'remember_token' => rand(),
                        ));
                     return redirect('/User');

                } 
       

              if(Auth::user()->is_account_setup_completed == 1 && Auth::user()->account_type == "seller"  && Auth::user()->is_active == "active"){ 
                  
                            if($remember_me == true){
            if($remeber_count > 0){
                Remeber::where('ip_address',$request->ip_addres)->update(array(
                    
                    'user_id' => $request->id,
                    ));
            }
            else{
                
                $rember  = new Remeber();
                $rember->user_id = Auth::user()->id;
                $rember->ip_address = $request->ip_addres;
                $rember->save();
                
            }
        }
                   User::where('id',Auth::user()->id)->update(array(
                        'profile_token'=> rand(),
                         'remember_token' => rand(),
                        ));
                    return redirect('/Providers');
               
                } 
                  
                 if(Auth::user()->is_account_setup_completed == 1 && Auth::user()->account_type == "buyer" && Auth::user()->is_active == "active"){ 
                    
                     User::where('id',Auth::user()->id)->update(array(
                        'profile_token'=> rand(),
                         'remember_token' => rand(),
                        ));
                    return redirect('/Client');
               
                }


                if (Auth::user()->account_type == "admin" && Auth::user()->is_active == "active") {
                    
                     User::where('id',Auth::user()->id)->update(array(
                        'profile_token'=> rand(),
                         'remember_token' => rand(),
                        ));
                    return redirect('/Admin');
                
                }

                if (Auth::user()->is_active == "suspend") {
                       // dd('s');
                     Auth::logout();
                    return redirect()->back()->with('status', 'You are ban from admin');

                }  

       }
        
       else{

           return redirect()->back()->with('status', 'These credendials did not match with our records');

       }

    }



}
