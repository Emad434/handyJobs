<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Socialite;
use App\Invitation;
use App\Locations;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
   
    public function redirect($provider){
        
            return Socialite::driver('facebook')->redirect();
     }
     public function callback($provider){
         
       $getInfo = Socialite::driver($provider)->user(); 
       $user = $this->createUser($getInfo,$provider); 
       auth()->login($user); 
       
       if(Auth::user()->is_account_setup_completed == 0){
       return redirect()->to('/Account-Setup');
       }else{
           
            if(Auth::user()->account_type == "buyer"){
                
                return redirect()->to('/Client');
                
            }else{
                
                return redirect()->to('/Providers');
                
                
            }
           
       }
     }
     
     function createUser($getInfo,$provider){
            
           
        
        
     $user = User::where('email', $getInfo->email)->first();
     if (!$user) {
   
      $user = User::create([
         'name'     => $getInfo->name,
         'email'    => $getInfo->email,
        'country' => $country->id ?? '',
         'provider_id' => $getInfo->id,
         'img_url'=>$getInfo->avatar,
     ]);
   }
   return $user;
 }
 
 
  public function redirectToGoogle($provider)
    {
       
        return Socialite::driver($provider)->redirect();
    }

    
        public function handleGoogleCallback($provider){
        
       
         $getInfo = Socialite::driver($provider)->user(); 
           
            $finduser_count = User::where('email', $getInfo->email)->count();
             
              if($finduser_count > 0 ){
                //   dd('xssn');
                
                 $finduser = User::where('email', $getInfo->email)->first();
                   if($finduser->is_account_setup_completed == 0){
                
                  auth()->login($finduser); 
                   return redirect('/Account-Setup');
            
                }else{
                    
                    if($finduser->account_type == 'buyer'){
                        
                         return redirect('/Client');
            
                    }else{
                         return redirect('/Providers');
                        }
                 }
   
            }else{

                $getInfo = Socialite::driver($provider)->user();
                $user = $this->createGoogleUser($getInfo,$provider); 
            }
   
    }
    
    
    public function createGoogleUser($getInfo,$provider){
     $this->checkReferral($getInfo->email);
           $newUser = User::create([
                    'name' => $getInfo->name,
                    'email' => $getInfo->email,
                    'provider' => 'Google',
                    'provider_id'=> $getInfo->id,
                    'profile_image'=>$getInfo->avatar,
            ]);
                
      auth()->login($newUser); 
         
         
     return redirect('/Account-Setup');
          
          
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
