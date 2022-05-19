<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Locations;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeUser;

use App\Invitation;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $request, $referal_key = null){
           
            $country_count = Locations::where('name',$request['country'])->count();
        $city_count = Locations::where('name',$request['city'])->count();
        $city = Locations::where('name',$request['city'])->first();
  
        if($country_count < 1){

            $make_new = new Locations;

            //$make_new->parent_locations = $request['country'];
            $make_new->name = $request['country'];
            $make_new->postal_code = $request['postal'];
            $make_new->location_type  = "Country";
           
            $make_new->save();
            
             $country = Locations::where('name',$request['country'])->first();
            
            $make_new = new Locations;
           
            $make_new->parent_locations = $country->id;
            
            $make_new->name = $request['city'];
            $make_new->postal_code = $request['postal'];
            $make_new->location_type  = "City";
            $make_new->save();
            
             $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->first();
            
        }
        elseif($city_count < 1)
        {
            $country = Locations::where('name',$request['country'])->first();
            
            $make_new = new Locations;
           
            $make_new->parent_locations = $country->id;
            
            $make_new->name = $request['city'];
            $make_new->postal_code = $request['postal'];
            $make_new->location_type  = "City";
            $make_new->save();
            
             $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->first();
        }
        else
        {
            $country = Locations::where('name',$request['country'])->first();
            $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->first();
        }
        
         
      
      
    
        
        $this->checkReferral($request['email']);
         
       $contact = $request['country_code'].$request['phone_number'];
       $confirm_code = rand(10,600000);
       $profile_token = rand();
       // dd("HANDYjOBS:".$confirm_code);
        $user = User::create([
        
        'name' => $request['name'],
        'email' => $request['email'],
        'profile_image' => 'avatar.png',
        'country' => $country->id ?? '',
        'city' => $city->id ?? '',
        'ip_addres' => $request['ip_addres'],
        'region' => $request['region'],
        'postal' => $request['postal'],
        'timezone' => $request['timezone'],
        'internet' => $request['internet'],
        'contacts' =>$contact,
        'contact_without_code' =>$request['phone_number'],
        'confirmation_code'=>"HANDYjOBS".$confirm_code,
        'password' => Hash::make($request['password']),
        'profile_token' => $profile_token
        


        ]);
        
    //       $users = User::where('id',$user->id)->first(); 
         
    //   $this->send_sms(['contacts'=>$users->contacts , 'message'=>'Your Confrimation Code is'.' '."HANDYjOBS".$confirm_code]);
        
         try{
               
                  Mail::to($request['email'])->send(new WelcomeUser($user));
   
            }
            catch(\Swift_TransportException $e){

                header( "refresh:5;url=./login" );

                //dd("Your Registration is successfull ! but welcome email is not sent because your webmaster not updated the mail settings in admin dashboard ! Kindly go back and login");

            }
       return $user;
    }

    
    public function checkReferral($email){

        $user_referal_chk = Invitation::where('email',$email)->count();

        if($user_referal_chk > 0){

            Invitation::where('email',$email)->update(array(

                'status'=>'join',
            ));
        }
    }

        
}
