<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CompanyDetails;
use App\Services;
use App\BlogDetail;
use App\BlogTag;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;
use Stripe\Charge;
use App;

use Illuminate\Support\Str;
use App\Contract;
use Illuminate\Support\Facades\Session;
use App\User;
use App\ProviderDetails;
use App\Gig;
use App\Locations;
use App\BankDetail;

class GuestController extends Controller
{
    
    public function search_service(Request $request){
        
         $result = Gig::where('status','active')->paginate(10);
           
        
        if($request->has('categorys')){
            $result = Gig::where('service_category',$request->categorys)->paginate(10);
        }

         elseif($request->has('region')){
            $result = Gig::where('region',$request->region)->paginate(10);
          }
         
         elseif($request->has('postal_code')){
             $postal = $request->postal_code.';300';
              $integerIDs = array_map('intval', explode(';', $postal));
             //dd($integerIDs);
             $result = Gig::whereBetween('postal_code',$integerIDs)->paginate(10);
          }
         
          elseif($request->has('available_on')){
            $result = Gig::where('available_on',$request->available_on)->paginate(10);
         }
         
         
         elseif($request->has('keywords')){
            $result = Gig::where('title','like','%'.$request->keywords.'%')->paginate(10);
         }
         
         $result_count = $result->count();
          
        $country = Locations::where('location_type','Country')->get();
        $categorys = Services::where('is_active',1)->get();
       
       	$gigs = Gig::where('status','active')->where('active_by_admin','1')->orderBy('id','DESC')->paginate(10);
         
         return view('search_result',compact('result','gigs','result_count','country','categorys'));

    }
    
    public function about(){
        
        return view('about_us');
    }
    
    public function contact(){
        
        return view('contact');
    }
    
    
    public function faqs(){
        
        
        return view('faqs');
    }
    
    public function contact_us(Request $request){
        
        Mail::to($request->name)->send(new ContactUs($request->email));  
        return redirect()->back()->with('message','Email send');
    }
 
    
    public function profile_edit(Request $request){
      
    $user_details = User::where('profile_token',$request->token)->first();
    if($user_details['profile_token'] != $request->token)
    {
        return redirect('/login');
    }
    if($user_details->profile_token == $request->token ){
      $reume_details = ProviderDetails::where('user_id',$user_details->id)->first();
    return view('resume',compact('user_details','reume_details'));
    }
    
        
    
        
    }
    
        public function update_profile(Request $request){  
           
  	         if($request->hasFile('photo')){

       $attechment  = $request->file('photo');

         $img_2 =  time().$attechment->getClientOriginalName();
        $attechment->move(public_path('profile_images'),$img_2);
        
        $image_name = explode('.', $img_2);
        $extention = end($image_name);
        $extention = Str::lower($extention);

       
        }else{
            
            $user_old_image = User::where('profile_token',$request->token)->first();
            
            $img_2 = $user_old_image->profile_image;
            
        }
	     $tokencheck = User::where('profile_token',$request->token)->first();
	     if($tokencheck->profile_token == $request->token ){
	     $user = User::where('profile_token',$request->token)->update(array(
                'name'=>$request->name,
               'profile_image'=>$img_2 ?? '',
                'bitrth_day'=>$request->date_of_birth,
                'addres'=>$request->address,
                'contacts'=>$request->contact,
                'category'=>$request->catagory,
                'profile_token' => rand(),
                
                
                ));
                
                return redirect('/login');
                 
	     }
	     else
	     {
	        return redirect('/login');
	     }
	   
	    
	}
	
	
	  public function bank_detail_save(Request $request){
    $user  = User::where('profile_token',$request->token)->first();
    $bank_found = BankDetail::where('user_id',$user->id)->count();
    if($bank_found < 1){
     $BankDetail = new BankDetail;
     $BankDetail->user_id = $user->id;
     $BankDetail->swift_code = $request->swift_code ?? '';
     $BankDetail->account_no = $request->account_no;
     $BankDetail->i_ban_no = $request->i_ban_no;
     $BankDetail->branch_name = $request->branch_name;
     $BankDetail->branch_addrs = $request->branch_addrs ?? '';
     $BankDetail->bank_account_type = $request->bank_account_type ?? '';
     $BankDetail->postal_code = $request->postal_code ?? '';
     $BankDetail->user__name = $request->name;
     $BankDetail->dob = $request->dob ?? '';
     $BankDetail->name_of_account = $request->name_of_account ?? '';
     $BankDetail->addrs = $request->addrs ?? '';
     $BankDetail->city = $request->city ?? '';
     $BankDetail->country = $request->country ?? '';
     $BankDetail->phone = $request->phone ?? '';
     $BankDetail->save();
     
    }else{
  
  BankDetail::where('user_id',$user->id)->update(array(
            
      'user_id' => $request->id,
     'swift_code' => $request->swift_code ?? '',
     'account_no' => $request->account_no,
     'i_ban_no' => $request->i_ban_no,
     'branch_name' => $request->branch_name,
     'branch_addrs' => $request->branch_addrs ?? '',
     'bank_account_type' => $request->bank_account_type ?? '',
     'postal_code' => $request->postal_code ?? '',
     'user__name' => $request->name,
     'dob' => $request->dob ?? '',
     'name_of_account' => $request->name_of_account ?? '',
     'addrs' => $request->addrs ?? '',
     'city' => $request->city ?? '',
     'country' => $request->country ?? '',
     'phone' => $request->phone ?? '',
            
 ));
        
        
        
    }
    
    return redirect()->back()->with('message','Details Saved');
    }
    
}


