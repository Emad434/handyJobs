<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use App\Gig;
use App\Locations;
use App\Services;
use App\Reviews;
use App\Contract;
use App\BankDetail;
use App\Images;
use Carbon\Carbon;
use App\Invitation;
use App\Mail\Refferal;
use App\Mail\NewContract;
use App\Mail\AcceptProposal;
use App\Invoice;
use App\AmountStatus;
use App\Conversation;
use Illuminate\Support\Str;
use App\ConversationPoint;
use App\Mail\ResetPassword;
use App\Bookmark;
use App\ProviderDetails;
use App\Vehicle_detail;
use App\Proposal;
use App\Amount;
use App\UsedAmount;
use DB;
use App\ClientRequest;
use Stripe\Charge;
use App\CancelRequest;
use App\CompanyDetails;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{

public $url = '/home1/gtb2bexim/public_html/handyjob/JobPortal/public';


  public function contract_payment_save(Request $request,$contract_id){
                
                
                $contrac_details = Contract::where('id',$contract_id)->first();
           $slug = str_replace(" ", "-", $contrac_details->contract_name); 
           $user_contact = User::where('id',$contrac_details->sellers_id)->first();
           $provider = User::where('id',$contrac_details->sellers_id)->first();
           $buyer = User::where('id',$contrac_details->buyer_id)->first();
                //dd($contract_id);
               $stripe = Stripe::make(env('STRIPE_SECRET'));

                     //dd($request->all());
    
                $token = $stripe->tokens()->create([
                'card' => [
                    
                    'number'    => $request->card_no,
                    'exp_month' => $request->get('expiry_month'),
                    'exp_year'  => $request->get('expiry_year'),
                    'cvc'       => $request->get('cvv'),
                    
                ],
            ]);

                //dd();


            if (!isset($token['id'])) {
              
              return response()->json([
       
                  'cart_details' => 'Token is not generate correct',
                  'status' => false
         
              ]);
            }
            

            //$currency = Currency::first();

            $charge = $stripe->charges()->create([
                'card' => $token['id'],
                'currency' => 'usd', //$currency->currency
                'amount'   => $request->amount,
                'description' => 'Payment',
            ]);
            
            
        $AmountStatus = new AmountStatus;
        $AmountStatus->provider_id = $provider->id;
        $AmountStatus->contract_id = $contract_id;
        $AmountStatus->amount = $request->amount;
        $AmountStatus->save();
        
        
        
        $generate_invoice = new Invoice;
        $generate_invoice->user_id = $provider->id;
        $generate_invoice->buyer_id = $buyer->id;
        $generate_invoice->payment_method = "Stripe";
        $generate_invoice->amount = $request->amount;
        $generate_invoice->contract_id = $contract_id;
        $generate_invoice->save();
        
        Contract::where('id',$contract_id)->update(array(
            
            'status'=>'active',
            'start_date'=> date("Y-m-d"),
            
        ));

       
         // $this->send_sms(['contacts'=>$user_contact->contacts , 'message'=>" Good news for you. ".$provider->name." Release Your Payment." ]);
        $this->send_notification_to_user(['user_id'=>$provider->id, 'message'=>" Good news for you. ".$buyer->name." Release your payment now you can start working. ", 'url'=>'/Providers/Contract-details/'.$slug.'/'.$contrac_details->order_no]);

        return response()->json([
            'status'=>true,
            'message'=>'Paymnet Success'
            
            ]);
        
         
        
        
            
    }
    
     public function decline_dispute(Request $request,$id)
    {
        Contract::where('id',$id)->update(array(
            
            'status' => 'active'
            ));;
    $CancelRequest = new CancelRequest;
    $CancelRequest->reciever_id = $id;
    $contract_details = Contract::where('id',$id)->first();
    
     //dd($buyer_name);
     $contract_slug = str_replace(" ","-",$contract_details->contract_name);
     $seller_name = User::where('id',$id)->first();
     $buyer_name = User::where('id',$id)->first();

   // $this->send_sms(['contacts'=>$buyer_name->contacts , 'message'=>$buyer_name->name." Has decline dispute on your contract. ",]);
     //  $this->send_app_message_to_user(['sender'=>$seller_name->id,'id'=>$id,'file_type'=>$type ?? '', 'message'=>$seller_name->name.'Has Approved Your Contract', 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract->order_no ,'files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);          
       // Mail::to($buyer_name->email)->send(new DisputeClient($id));    
    
    return response()->json([
        
        'message'=>"Dispute Decline"
        
        ]);  
        
    }
    
     public function dispute_request(Request $request,$id){

        $contract = Contract::where('id',$id)->first();
        
        $buyer = User::where('id',$contract->buyer_id)->first();
        $seller = User::where('id',$contract->sellers_id)->first();
         
    	$CancelRequest = new CancelRequest;
    	$CancelRequest->req_from = $buyer->id;
    	$CancelRequest->contract_id = $id;
        $CancelRequest->reciever_id = $seller->id;
        
    	$CancelRequest->description = $request->description;
    	$CancelRequest->save();

    	

    	Contract::where('id',$id)->update(array(

    		'status'=>'cancel_req',
    	));
    	$contract_slug = str_replace(" ","-",$contract->contract_name);
                
       //$contract_details = Contract::where('id',$id)->first();
       $buyer_name = User::where('id',$contract->buyer_id)->first();
      // dd($buyer_name->email);
      $name = User::where('id',$seller)->first();
		  
       // $this->send_sms(['contacts'=>$name->contacts , 'message'=>$buyer_name->name." Open dispute in your contract. "]);
     //  $this->send_app_message_to_user(['sender'=>$seller_name->id,'id'=>$id,'file_type'=>$type ?? '', 'message'=>$seller_name->name.'Has Approved Your Contract', 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract->order_no ,'files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);          
//         Mail::to($name->email)->send(new CancelContract($id));
    	
    	return response()->json([
    	    
    	    'message'=>'Dispute Opend'
    	    ]);
    		
    }
    
    public function accept_dispute($id){

     	Contract::where('id',$id)->update(array(

    		'status'=>'cancelled',
    	));
    	
    	AmountStatus::where('contract_id',$id)->update(array(
    	    
    	    'status'=>'Contrcat_cancel'
    	    ));
    	
        $contract_details = Contract::where('id',$id)->first();
        $buyer_name = User::where('id',$contract_details->buyer_id)->first();
        $seller_name = User::where('id',$contract_details->sellers_id)->first();
        $slug = str_replace("","-",$contract_details->contract_name);



       // $this->send_sms(['contacts'=>$seller_name->contacts ,  'message'=>$seller_name->name." Your contract status has been changed to cancelled. "]);
     //  $this->send_app_message_to_user(['sender'=>$seller_name->id,'id'=>$id,'file_type'=>$type ?? '', 'message'=>$seller_name->name.'Has Approved Your Contract', 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract->order_no ,'files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);          
      //  Mail::to($buyer_name->email)->send(new DisputeAccept($id));   
    
    return response()->json([
        
        'message'=>'Contarct Cancelled'
        ]);
    }
    
    
     public function contract_approval(Request $request,$id){

            $result = array();
 
        $imagedata = base64_decode($request->image_field);
        $filename = md5(date("dmYhisA"));

        $file_name = '/doc_signs/'.$filename.'.png';
        file_put_contents('.'.$file_name,$imagedata);
        $result['status'] = 1;
        $result['file_name'] = $file_name;
        json_encode($result);

        $images = new Images;

        $images->entity_type = 'App\Contract';
        $images->entity_id = $id;
        $images->file_name = $filename.'.png';
        $images->file_path = 'doc_signs';
        $images->signature_type = 'Seller Signature';
        $images->save();


        Contract::where('id',$id)->update(array(

            'status'=>'waiting_fro_payment',
            // 'start_date'=> date("Y-m-d"),
        ));
        $contract = Contract::where('id',$id)->first();
        $contract_slug = str_replace(" ","-",$contract->contract_name);
        $seller_name = User::where('id',$contract->sellers_id)->first();
        $buyer_name = User::where('id',$contract->buyer_id)->first();

       //$this->send_sms(['contacts'=>$buyer_name->contacts , 'message'=>" Good news for you. ".Auth::user()->name." Aproveed your Contract. ",]);
       // $this->send_app_message_to_user(['user_id'=>$contract->buyer_id, 'message'=>" Good news for you. ".$seller_name->name." Aproveed your Contract. ",'noti_type'=>'contract_accpt', 'url'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract->order_no]);
       $this->send_app_message_to_user(['sender'=>$seller_name->id,'id'=>$buyer_name->id,'file_type'=>$type ?? '', 'message'=>$seller_name->name.'Has Approved Your Contract', 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract->order_no ,'files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);
       return response()->json([
           'status'=>'Contract Approved'
           ]);

    }
    
     public function contract_decline($id){

        Contract::where('id',$id)->update(array(

            'status'=>'cancelled',
        ));
         $contract = Contract::where('id',$id)->first();
        $contract_slug = str_replace(" ","-",$contract->contract_name);
        $seller_name = User::where('id',$contract->sellers_id)->first();
        $buyer_name = User::where('id',$contract->buyer_id)->first();
        $this->send_app_message_to_user(['sender'=>$seller_name->id,'id'=>$buyer_name->id,'file_type'=>$type ?? '', 'message'=>$seller_name->name.'Has Decline Your Contract', 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract->order_no ,'files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);
 
 return response()->json([
          'status'=>'Contract Cancel'
          
     ]);

    }
    
 
  public function login_api(Request $request)
    {

        $input = $request->all();
    //dd($input,$request->email);
    
        
       $login = User::where('email',$request->email)->where('password',$request->password)->first();
    
       //$location = Locations::where('id',$login->country)->where('location_type','Country')->first();
    //   $userss = DB::table('users')
    //         ->join('locations', 'users.country', '=', 'locations.id')
    //         ->join('locations', 'users.city', '=', 'location.id')
    //         ->select('users.*', 'location.*')
    //         ->first();
        //dd($login);
        
        //  DB::table(DB::raw('users, locations'))
        //      ->join('teacher_subjects','teachers.teacherID', '=', 'teacher_subjects.teacherID')
             
         if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            
         $users = User::where('email',$input['email'])->first()->toArray();
         $users['city_name'] =  Locations::where('id',$users['city'])->where('location_type','City')->first()->name ?? 'N/A';
         $users['country_name'] =  Locations::where('id',$users['country'])->where('location_type','Country')->first()->name ?? 'N/A';
               // dd($users);
         $users['currency'] = Amount::first()->currency_type ?? "N/A";
         $users['currencySymbol'] = Amount::first()->currency_symbol ?? "N/A";
        
        User::where('email',$input['email'])->update(array(
                        'profile_token'=> rand(),
                        ));
         
               return response()->json([
                   'login_credentials'=>$users,
                   'status'=>true,
                   'img_url'=>asset('/JobPortal/public/profile_images/'.$users['profile_image'])
                   ]);

         }else{
             
             
             return response()->json([
                 'status'=>false
                 ]);
         }

   }
   
   public function confrimation_code(Request $request,$id)
   {
       
       $confirm_code = rand(10,600000);
       
       $user = User::where('id',$id)->where('phone_confirm',0)->update(array(
           'confirmation_code' => "HANDYjOBS".$confirm_code,
           
           ));
        $users = User::where('id',$id)->first(); 
        
       $this->send_sms(['contacts'=>$users->contacts , 'message'=>'Your Confrimation Code is'.' '."HANDYjOBS".$confirm_code]);
       return response()->json([
           'message'=>'Code Sended',
           ]);
   }
   
   public function phone_verfication(Request $request,$id)
   {
       $verfication_code = User::where('id',$id)->first();
       
       if($verfication_code->confirmation_code == $request->confirm_code)
       {
           User::where('id',$id)->update(array(
               'confirmation_code' => null,
               'phone_confirm' => 1
               
               ));
               
               return response()->json([
                   'status'=>true,
                   'message'=>'Phone Verified'
                   ]);
       }
       else
       {
           return response()->json([
               'status'=>false,
               'message'=>'Invalid Code'
               ]);
       }
       
       
   }
   
    public function gig_reference($user_id)
     {
         $gigs = Gig::where('user_id',$user_id)->get();
         
        return response()->json([
            'details'=>$gigs
            ]);
     }
   
   
   public function provider_wallet($user_id)
   {
      
      $available = User::where('id',$user_id)->first();
     //$currency_type = Amount::where('currency_type','!=',null)->first();
     $available['use_for_biding'] = Proposal::where('provider_id',$user_id)->where('status','Active')->sum('bid_amount');
     
     return response()->json([
         'wallet_deatils'=>$available
         
         ]);
    
   }
   
   public function getrefferal($user_id)
   {
       $refferal = Invitation::where('invite_from',$user_id)->orderBy('id', 'DESC')->get();
       
       foreach($refferal as $refferals)
       { 
          
           $refferals['provider_name'] = User::where('id',$refferals->invite_from)->first()->name ?? 'N/A';
          
           
          
       }
        return response()->json([
          "refferal"=> $refferal
           
           ]);
        
       
   }
   
   public function active_transportation($user_id)
   {
         
    $providerdetails= Gig::where('user_id',$user_id)->where('service_category','4')->where('status','active')->count();
    
    if($providerdetails > 0 )
    {
        return response()->json([
            'status'=>true
            ]);
    }
    else
    {
        return response()->json([
            'status'=>false
            ]);
        
    }
                
                
   }
   
   
   public function provider_profile($user_id)
   {
       $gig_details = [];
        $gig_detail = [];
        $user = User::where('id',$user_id)->first();
       $provider_details = User::where('id',$user_id)->first();
       //$provider_details = Gig::where('user_id',$user->id)->first();
       $provider_details['profile_image'] = asset('/JobPortal/public/profile_images/'.$user->profile_image);
       $provider_details['location'] = Locations::where('id',$user->country)->first()->name;
       $provider_details['intro'] = ProviderDetails::where('user_id',$user_id)->first()->intro;
       $gigs = Gig::where('user_id',$provider_details->id)->get();
              
      foreach($gigs as $gig){

     $gig_details['gig_title'] = str_replace(" ","-",$gig->title);
     $gig_details['gig_image'] = asset('/JobPortal/public/gig_thumbnail/'.$gig->thumbnail);
      $gig_details['gig_catagory'] = Services::where('id',$gig->service_category)->first()->name;   
      $rating = Reviews::where('provider_id',$gig->user_details->id)->get();
      $rating_count = Reviews::where('provider_id',$gig->user_details->id)->count();
      $review_avg = $rating->avg('stars');
      $gig_details['rating'] = round($review_avg);
     // $Bookmark = Bookmark::where('gig_id',$gig->id)->where('user_id',Auth::user()->id)->count();
      $gig_details['region'] = Locations::where('id',$gig->region)->first()->name ?? null;
      
      array_push($gig_detail,$gig_details);
      }
      return response()->json([
          'provider_details'=>$provider_details,
          'gigs'=>$gig_detail
          ]);
     
      
   }
   
   public function home_detail_api(){
  $array = [];
  $detail = [];
  $gig_details = [];
  $gig_detail = [];
  $rising_seller = User::where('is_featured',1)->get(); 
   $catagory = Services::where('is_active','1')->limit(4)->get();
   $gigs = Gig::where('status','active')->orderBy('id','DESC')->paginate(10);
   //dd($gigs);
   $details = [];
  
     foreach($rising_seller as $rising_sellers){
     $detail = $rising_sellers;
   
   
     $detail['location'] = Locations::where('id',$rising_sellers->country)->first();
     $detail['profile_image'] = asset('/JobPortal/public/profile_images/'.$rising_sellers->profile_image);
     $detail["completed_contracts"] = Contract::where('sellers_id',$rising_sellers->id)->where('status','completed')->count();
     $rating = Reviews::where('provider_id',$rising_sellers->id)->get();
    $review_avg = $rating->avg('stars');
    $detail['round_up'] = round($review_avg);
       
          array_push($array,$detail);
    	  
    	 }
    
    foreach($gigs as $gig)
    {
      $gig_details['id'] = $gig->id;
               $gig_details['gig_title'] = str_replace(" ","-",$gig->title);
               $gig_details['avalible_on'] = $gig->available_on;
               $gig_details['available_end'] = $gig->available_end;
               $gig_details['gig_image'] = asset('/JobPortal/public/gig_thumbnail/'.$gig->thumbnail);
                $gig_details['gig_catagory'] = Services::where('id',$gig->service_category)->first();   
                $rating = Reviews::where('provider_id',$gig->user_details->id)->get();
                $rating_count = Reviews::where('provider_id',$gig->user_details->id)->count();
                $review_avg = $rating->avg('stars');
                $gig_details['rating'] = round($review_avg);
               // $Bookmark = Bookmark::where('gig_id',$gig->id)->where('user_id',Auth::user()->id)->count();
                $gig_details['region'] = Locations::where('id',$gig->region)->first();
            
              array_push($gig_detail,$gig_details);      
        
    }
    

       return response()->json([
           'rising_providers'=>$array,
           'catagorys'=>$catagory,
           'provider_offer'=>$gig_detail
           
           ]);
    }

   
     public function signup_api(Request $request){
    //  $check_user_id  = User::where('google_id',$request->id)->count(); 
      $checkUser_count = User::where('email',$request->email)->count();
      if($checkUser_count > 0)
      {
          return response()->json([
              
              'Record already exist',
              
              ]);
      }
      else{
          
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
        
        
      
        
    
           $user = new User;
          
             $user->id; 
             $user->email =  $request->email;
             $user->name = $request->name;
             $user->account_type= $request->account_type;
             $user->password = Hash::make($request->password);
             $user->profile_image= 'avatar.png';
             $user->contacts = $request->contacts;
             $user->contact_without_code = $request->contact_without_code;
             $user->country = $country->id;
             $user->city = $city->id;
               
             
             $user->save();
              
               $user_details = User::where('id',$user->id)->first();
  if($user_details->account_type == 'buyer'){
    $client_company = CompanyDetails::where('client_id',$user->id)->count();
     if($client_company > 0){
      CompanyDetails::where('client_id',$user->id)->update(array(
          
             'client_id'=> $user->id,
             'has_company'=>'solo' ?? 'N/A',
             
             ));
     }
    
     else
    {
      
        $company = new  CompanyDetails;
        $company->client_id = $user->id;
        $company->has_company = 'solo';
        $company->save();
    }
    $client_companyy = CompanyDetails::where('client_id',$user->id)->first();
    
      if($client_companyy->has_company == 'company')
      {
          CompanyDetails::where('client_id',$user->id)->update(array(
              'cvr_number'=>$request->cvr_number
              ));
          
      }  
     
  }
    if($user_details->account_type == 'seller'){
    $provider_company  = ProviderDetails::where('user_id',$user->id)->count();
    
    if($provider_company > 0){
   
      ProviderDetails::where('user_id',$user->id)->update(array(
            'user_id'=>$id,
            'busines_type'=>'solo' ?? 'N/A'
            ));  
    }
    else{
        
        $provider_companyy = new ProviderDetails;
        $provider_companyy->user_id=$user->id;
        $provider_companyy->busines_type= 'solo';
        $provider_companyy->save();
    }
    $provider_company  = ProviderDetails::where('user_id',$user->id)->first();
    if($provider_company->busines_type == 'company')
    {
       ProviderDetails::where('user_id',$user->id)->update(array(
           'cvr_number'=>$request->number
           ));
    }
    else
    {
        ProviderDetails::where('user_id',$user->id)->update(array(
            
            'cpr_number'=>$request->number
            ));
    }
    }
          
        
            //  $user = new User;
             
            //  $user->create([
            //  'email' => $request->email,
            //  'name' => $request->name,
            //  'account_type' => $request->account_type,
            //  'password' => Hash::make($request['password']),
            //  'profile_image'=> 'avatar.png',
             
            //  ]);
             
            // 
            
            
                   
            $user['city_name'] =  Locations::where('id',$user['city'])->where('location_type','City')->first()->name ?? 'N/A';
            $user['country_name'] =  Locations::where('id',$user['country'])->where('location_type','Country')->first()->name ?? 'N/A';   
            $user['currency'] = Amount::first()->currency_type ?? "N/A";
            $user['currencySymbol'] = Amount::first()->currency_symbol ?? "N/A";    
            $user['contact_without_code'] = User::where('id',$user->id)->first()->contact_without_code ?? "N/A";
              return response()->json([
                  'login_credentials' => $user,
                  "status" => true,
                 'img_url'=>asset('/JobPortal/public/profile_images/'.$user['profile_image'])
                                      
                                      

             ]);
     
      }
      
    }
    
 
    
    public  function delete_vehicle($id)
    {
        $vehical = Vehicle_detail::where('id',$id)->delete();
        
        return response()->json([
            'message'=>'Vehicle Deleted'
            
            ]);
    }
    
    public function edit_profile_client_api(Request $request, $id)
    {
        if($request->has('profile_image')){
        $result = array();
        $image_name = explode('.', $request->image_name);
        
        $extention = end($image_name);
    	$imagedata = base64_decode($request->profile_image);
        $imageName = md5(date("dmYhisA"));

        $file_name = $imageName.'.'.$extention;
        $path = $this->url .'/profile_images/';
         $success = file_put_contents($path.$file_name, $imagedata);
        }
        else{
                
            $image = User::where('id',$id)->first();
            $imageName = $image->profile_image;
            
        }
        
        $country = Locations::where('name',$request['country'])->first();
        $country_count = Locations::where('name',$request['country'])->count();
        
        if($country_count < 1){

            $make_new = new Locations;

            //$make_new->parent_locations = $request['country'];
            $make_new->name = $request['country'];
            $make_new->postal_code = $request['postal'];
            $make_new->location_type  = "Country";
            $make_new->save();

        }
        else{


            $make_new = new Locations;

            $make_new->parent_locations = $country->id;
          
            $make_new->name = $request['city'];
            $make_new->postal_code = $request['postal'];
            $make_new->location_type  = "City";
            $make_new->save();

       
        $getUser = User::find($id);
        $user = User::where('id',$id)->update(array(
            'name'=>$request->name,
            'contacts'=>$request->contact, //// addres  contacts image_proile birthday 
            'addres'=>$request->addres ?? $getUser->addres, 
            'bitrth_day'=>$request->birthday ?? $getUser->birthday, 
            'profile_image'=>$file_name ?? $imageName,
            'country'=>  $country->id ?? 'N/A',
            'city'=> $country->id ?? 'N/A'
            
            
            
            ));
            
            return response()->json([
                'message'=>'Profile Updated Successfully',
                
                ]);
        
        
        }
        
    }
    
    public function provider_get_details_api($id)
    {
        
        
        $user = User::where('id',$id)->first();
        if($user->profile_image == null)
        {
              $image = User::where('id',$id)->first()->img_url;
            //$image_name = $image->profile_image;
            
        }
        else
        {
            $image = asset('/JobPortal/public/profile_images/'.$user->profile_image);
        }
        
        $user['country'] =  Locations::where('id',$user->country)->first()->name ?? 'N/A';
        $user['city'] = Locations::where('id',$user->city)->where('location_type','City')->first()->name ?? 'N/A';
        $user['profile_image'] = $image;
        $user['contacts'] = User::where('id',$id)->first()->contacts ?? 'N/A';
        $clinet_company = CompanyDetails::where('client_id',$id)->count();
        $provider_company = ProviderDetails::where('user_id',$id)->count();
        if($provider_company > 0){
        $provider_company = ProviderDetails::where('user_id',$id)->first();
        
        $user_detail = User::where('id',$provider_company->user_id)->first();
        }
        if($clinet_company > 0){
            
            $client_compnay = CompanyDetails::where('client_id',$id)->first();
            $user_detail = User::where('id',$client_compnay->client_id)->first();
           // dd($user_detail);
        }
        if($user->account_type == 'seller'){
        $user['provider_bussines_type'] = ProviderDetails::where('user_id',$id)->first()->busines_type ?? null;
        $user['cvr_number'] = ProviderDetails::where('user_id',$id)->first()->cvr_number ?? null;
         $user['cpr_number'] = ProviderDetails::where('user_id',$id)->first()->cpr_number ?? null;
        }
        else
        {
            $user['provider_bussines_type'] = CompanyDetails::where('client_id',$id)->first()->has_company ?? null;
             $user['cvr_number'] = CompanyDetails::where('client_id',$id)->first()->cvr_number ?? null;
        }
        if($user->phone_confirm == 1)
        {
            $user['phone_number'] = true;
            return response()->json([
                'user_details'=>$user
                
                ]);
            
        }
        else
        {
            $user['phone_number'] = false;
            return response()->json([
                'user_details'=>$user
                
                ]);
        }
        
        return response()->json([
            'user_details'=>$user
            
            ]);
    }
    
    
    
    public function vehical_details_api(Request $request,$id)
    {
        $vechicle  = new Vehicle_detail;
	   
	        $vehicle_details = Vehicle_detail::Create([
	            'user_id'=>$id,
	            
                'vehicle_type'=>$request->vehical_type,
                'number_plate'=>$request->number_plate,
                'vehicle_brand'=>$request->vehical_brand,
                'vehicle_model'=>$request->model_vehicle,
                'vehicle_color'=>$request->vehicle_color,
                'vehicle_status'=>$request->vehicle_status,
	            
	            ]);
	            
	       return response()->json([
	           
	           'message'=>'Vehicle Added'
	           
	           ]);
	            
    }
    
    public function viewVehicles($id){
        $vehicle_details = Vehicle_detail::where('user_id',$id)->get();
         return response()->json([
	           
	           'list'=>$vehicle_details
	           
	           ]);
    }
    
    public function lience_details(Request $request,$id)
    {
        $user = User::where('id',$id)->update(array(
	        'driver_name'=>$request->driver_name,
	        'lience_number'=>$request->lience_number,
	        
	        ));
	        
	        return response()->json([
	            'message'=>'Liences detail added'
	            ]);
	        
    }
    
    public function view_lience_details(Request $request,$id)
    {
        $user = User::where('id',$id)->select(
	        'driver_name',
	        'lience_number'
	        
	        )->get();
	        
	        return response()->json([
	            'user'=>$user
	            ]);
	        
    }
    
    
    public function provider_edit_profile(Request $request,$id)
    {
        $user = User::where('id',$id)->first();
        
        if($request->has('profile_image') && $request->profile_image != "" ){
        $result = array();
        $image_name = explode('.', $request->image_name);
        
        $extention = end($image_name);
    	$imagedata = base64_decode($request->profile_image);
        $imageName = md5(date("dmYhisA"));

        $file_name = $imageName.'.'.$extention;
        $path = $this->url .'/profile_images/';
         $success = file_put_contents($path.$file_name, $imagedata);
        }
        
      
        
        else{
        
       
             
            $image = User::where('id',$id)->first();
            $image_name = $image->profile_image;
            //$extention = end($image_name);
            
            
        }
          $country_count = Locations::where('name',$request->country)->count();
        $city_count = Locations::where('name',$request->city)->count();
        $city = Locations::where('name',$request->city)->first();
  
        if($country_count < 1){

            $make_new = new Locations;

            //$make_new->parent_locations = $request['country'];
            $make_new->name = $request->country;
            $make_new->postal_code = $request->postal;
            $make_new->location_type  = "Country";
           
            $make_new->save();
            
             $country = Locations::where('name',$request['country'])->first();
            
            $make_new = new Locations;
           
            $make_new->parent_locations = $country->id;
            
            $make_new->name = $request['city'];
            $make_new->postal_code = $request['postal'];
            $make_new->location_type  = "City";
            $make_new->save();
            
            $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->latest()->first();
            
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
            
            $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->latest()->first();
        }
        
        else
        {     $country = Locations::where('name',$request['country'])->first();
              $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->latest()->first();
        }
        
        
       
         
      
          $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->latest()->first();
        
        $user_old_data = User::where('id',$id)->first();
        
        $user = User::where('id',$id)->update(array(
            'name' => $request->name,
            'bitrth_day' =>$request->date_of_birth,
            'addres' => $request->address ,
            'contacts' => $request->contact,
            'contact_without_code' => $request->contact_without_code ?? $user_old_data->contact_without_code,
            'profile_image' => $file_name ?? $image_name,
            'country'=>$country->id,
            'city'=>$city->id,
        
        ));
    
    $user_details = User::where('id',$id)->first();
  if($user_details->account_type == 'buyer'){
    $client_company = CompanyDetails::where('client_id',$id)->count();
     if($client_company > 0){
      CompanyDetails::where('client_id',$id)->update(array(
          
             'client_id'=> $id,
             'has_company'=>$request->has_company ?? 'N/A',
             
             ));
     }
    
     else
    {
      
        $company = new  CompanyDetails;
        $company->client_id = $id;
        $company->has_company = $request->has_company;
        $company->save();
    }
    $client_companyy = CompanyDetails::where('client_id',$id)->first();
    
      if($client_companyy->has_company == 'company')
      {
          CompanyDetails::where('client_id',$id)->update(array(
              'cvr_number'=>$request->number
              ));
          
      }  
     
  }
    if($user_details->account_type == 'seller'){
    $provider_company  = ProviderDetails::where('user_id',$id)->count();
    
    if($provider_company > 0){
   
      ProviderDetails::where('user_id',$id)->update(array(
            'user_id'=>$id,
            'busines_type'=>$request->has_company ?? 'N/A'
            ));  
    }
    else{
        
        $provider_companyy = new ProviderDetails;
        $provider_companyy->user_id=$id;
        $provider_companyy->busines_type= $request->has_company;
        $provider_companyy->save();
    }
    $provider_company  = ProviderDetails::where('user_id',$id)->first();
    if($provider_company->busines_type == 'company')
    {
       ProviderDetails::where('user_id',$id)->update(array(
           'cvr_number'=>$request->number
           ));
    }
    else
    {
        ProviderDetails::where('user_id',$id)->update(array(
            
            'cpr_number'=>$request->number
            ));
    }
    }
   
             
        return response()->json([
            'message'=>'Profile Updated Successfully'
            
            ]);
        
    }
    
    public function per_vehical_edit(Request $request,$id)
    {
        $vechical_details = Vehicle_detail::where('id',$id)->update(array(
            'vehicle_type'=>$request->vehical_type,
            'number_plate'=>$request->number_plate,
            'vehicle_brand'=>$request->vehicle_brand,
            'vehicle_model'=>$request->model_vehicle,
            'vehicle_color'=>$request->vehicle_color,
            'vehicle_status'=>$request->vehicle_status
            
            
            ));
            
            return response()->json([
                'message'=>'Vehical updated'
                
                ]);
            
    }
    
    public function SocialLoginClient(Request $request){
     $checkUser_count = User::where('email',$request->email)->count();
     $checkUser = User::where('email',$request->email)->first();
       $city_count = Locations::where('name',$request->city)->count();
        $city = Locations::where('name',$request->city)->first();
          
      if($checkUser_count < 1 ){
          
       $country = Locations::where('name',$request['country'])->first();
        $country_count = Locations::where('name',$request['country'])->count();
        if($country_count < 1){

            $make_new = new Locations;

            //$make_new->parent_locations = $request['country'];
            $make_new->name = $request->country;
            $make_new->postal_code = $request->postal;
            $make_new->location_type  = "Country";
           
            $make_new->save();
            
             $country = Locations::where('name',$request['country'])->first();
            
            $make_new = new Locations;
           
            $make_new->parent_locations = $country->id;
            
            $make_new->name = $request['city'];
            $make_new->postal_code = $request['postal'];
            $make_new->location_type  = "City";
            $make_new->save();
            
            $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->latest()->first();

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
        
          $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->latest()->first() ;
       
        }
        else{
           $country = Locations::where('name',$request['country'])->first();
           $city = Locations::where('parent_locations',$country->id)->where('location_type','City')->latest()->first() ;
        }
          $client_id = $request->type == 'google' ? 'google_id' : 'facebook_id';
            
           $user = User::Create([
                  'email' => $request->email ?? "",
                  'name' => $request->name ?? "",
                  'contacts' => $request->contact,
                  'contact_without_code' => $request->contact_without_code,
                   'account_type'=>$request->account_type,
                   'is_social' => '1',
                   //'client_id' => $client_id,
                  'img_url' => $request->image_url ?? "avatar.png",
                  'country' => $country->id,
                  'city' => $city->id
                   
                   
              
           ]);
           
            $users = User::where('id',$user->id)->first();
            $users['profile_image'] = $users->img_url ?? 'N/A';
            $users['country_name'] = Locations::where('id',$users->country)->where('location_type','Country')->first()->name ?? "N/A";
            $users['city_name'] = Locations::where('id',$users->city)->where('location_type','City')->first()->name ?? "N/A";
            $users['currency'] = Amount::first()->currency_type ?? "N/A";
            $users['currencySymbol'] = Amount::first()->currency_symbol ?? "N/A";
            
            
              return response()->json([
                                     
                                      'login_credentials' => $users,
                                      "status" => true,
                                      'img_url'=>$request->image_url,
                                      "Message" => "Record save successfully",
             ]);
              
             
    }
    
    
       

      

   }
   
      public function social_signin(Request $request)
      {
          
                //$checkUser_count = User::where('email',$request->email)->count();
                $User = User::where('email',$request->email)->first();
                
               if($User->profile_image == null)
                  {
                   $User['profile_image'] = User::where('id',$User->id)->first()->img_url;
            
                 }
                 else
                 {
                     $User['profile_image'] = asset('/JobPortal/public/profile_images/'.$User->profile_image);
                 }
                $User['city'] = Locations::where('id',$User->city)->where('location_type','City')->first()->name ?? "N/A"; 
                $User['country'] = Locations::where('id',$User->country)->where('location_type','Country')->first()->name ?? "N/A";
                $User['currency'] = Amount::first()->currency_type ?? "N/A";
                $User['currencySymbol'] = Amount::first()->currency_symbol ?? "N/A";
            
                       return response()->json([
                    
                                      'login_credentials' => $User,
                                      "status" => true,
                                      "Message" => "Login Success",
                                      
                ]);

          
      }
   
   
       public function check_atthentication(Request $request)
       {
           $user = User::where('email',$request->email)->count();
           
           if($user > 0 )
           {
               return response()->json([
                   'status'=>'signin',
                   
                   ]);
           }
           
           else
           {
               return response()->json([
                   'status'=>'signup'
                   ]);
           }
       }
       
      public function send_app_token(Request $request){
    $user = User::find($request->user_id); //->update(['app_token'=> $request->app_token])
    if($user != null){
         $user->app_token = $request->app_token;
    $user->save();
     return response()->json([

            'status' => 'Success! token save successfully',
            ]);

    }
    else{
        return response()->json([

            'status' => 'User Not Found',
            ]);
    }

    }

   public function search_service_api(Request $request){
      
          $result = Gig::where('status','active');
           //$result = Gig::all();
        if($request->username!= null){
            $user = User::where('name','like','%'.$request->username.'%')->pluck('id');
            $results = $result->whereIn('user_id',$user);
        }
    
        
        if($request->categorys!= null){
            $result = $result->where('service_category',$request->categorys);
            // dd($result->get());
        }

         if($request->region != null){
             
            $result = $result->where('region',$request->region);
           
          }
         
         if($request->postal_code != null){
             $postal = $request->postal_code.';300';
              $integerIDs = array_map('intval', explode(';', $postal));
             //dd($integerIDs);
             $result = $result->whereBetween('postal_code',$integerIDs);
          }
         
          if($request->available_on!= null){
            $result = $result->where('available_on',$request->available_on);
         }
         
         
        //  if($request->has('keywords')){
        //     $result = $result->where('title','like','%'.$request->keywords.'%');
        //  }
         $result = $result->get();
         
         foreach($result as $results){
             
         $results['thumbnail'] = asset('/JobPortal/public/gig_thumbnail/'.$results->thumbnail);
         }
         
        //  else
        //  {
        //       $result = $result->where('status','active')->limit(5)->get();
        //  }
         
         $result_count = $result->count();
         
  
        $country = Locations::where('location_type','Country')->get();
        $categorys = Services::where('is_active',1)->get();
       
         
                return response()->json([
                'user_data' => $result,
                'user_count' => $result_count
                ]);
      
  }
  
  public function provider_propasal_details($user_id)
  {
      $array = [];
      
      
      $proposals  = Proposal::where('provider_id',$user_id)->get();
     
      
      foreach($proposals as $proposal){
      $proposals =  ClientRequest::where('id',$proposal->request_id)->first();
      $proposals['user_details'] = User::where('id',$proposals->client_id)->first('name');
      
      array_push($array,$proposals);
      }
      return response()->json([
          'proposal_details'=>$array
      ]);
      
      
  }
  
   public function request_publish_api(Request $request,$user_id){
       //dd($this->url .'/post_request_image/');
        $ClientRequest = new ClientRequest;
        $ClientRequest->client_id = $user_id;
        $ClientRequest->request_category = $request->request_category;
        $ClientRequest->request_details = $request->request_details;
        $ClientRequest->start_from = $request->start_from;
        $ClientRequest->end_to = $request->end_to;
        $ClientRequest->location = $request->location;
        $ClientRequest->amount = $request->amount;
        $ClientRequest->days = $request->days;
        $ClientRequest->save();
         
        if($request->images != []){
            // dd($request->images);
           foreach($request->images as $image){
            //   dd($image);
           // echo $image['name'];
               $image_name = explode('.', $image['name']);
               $extention = end($image_name);
               $imagedata = base64_decode($image['base64']);
               $imageName = md5(date("dmYhisA"));
               $file_name = $imageName.rand(10,1000).'.'.$extention;
                $path = $this->url .'/post_request_image/';
                $success = file_put_contents($path.$file_name, $imagedata);
            
            
            $images = new Images;

            $images->entity_type = 'App\ClientRequest';
            $images->entity_id = $ClientRequest->id;
            $images->file_name = $file_name;
            $images->file_path = 'post_request_image';
            $images->save();
        
        
        
           }
               
       }
         $contact = User::where('id',$user_id)->first();
       
    
        
        return response()->json([
            'status' =>true,
            'message'=> 'Request will publish after aproval'
            
            ]);
    }
    
     public function all_requests_api($id){
          
        $all_request_count = ClientRequest::where('client_id',$id)->count();
        $all_requests = ClientRequest::where('client_id',$id)->get();
          
        foreach($all_requests as $all_request){
           
         $all_request['request_category'] = Services::where('id',$all_request->request_category)->get('name');
        
        }
        
        return response()->json([
            'request_details' => $all_requests
            
            ]);
        
     }
     
     
     public function purposal_detail_api($id)
     {
        
        $proposal = Proposal::where('id',$id)->first();
        $proposal['provider_name'] = User::where('id',$proposal->provider_id)->first()->name;
        $user_profile = User::where('id',$proposal->provider_id)->first();
        $proposal['profile_image'] = asset('/JobPortal/public/profile_images/'.$user_profile->profile_image);
        $images = Images::where('entity_id',$proposal->id)->where('entity_type','App\Proposal')->get('file_name');
          
          return response()->json([
              
              'parposal_details'=>$proposal,
              'images'=>$images,
              'url' => asset('/JobPortal/public/proposal_images/')
              ]);
               
     }
     
     public function all_request_provider_api()
     {
         $all_request_count =  ClientRequest::where('status','Active')->count();
         $request_detail =  ClientRequest::where('status','Active')->get();
         
         	foreach($request_detail as $request_details){
                  
             $request_details['request_category'] = Services::where('id',$request_details->request_category)->first()->name ?? "N/A";
             $request_details['client_name'] = User::where('id',$request_details->client_id)->first()->name;
             $request_details['location'] = Locations::where('parent_locations',$request_details->country)->first()->name ?? "N/A";
             $user_profile = User::where('id',$request_details->client_id)->first();
            // $request_details['profile_image'] = asset('/JobPortal/public/profile_images/'.$user_profile->profile_image);
             
         	}
         	
         	return response()->json([
         	    'request_details'=>$request_detail,
         	    
         	    ]);
                 
         
     }
     
     
     public function request_details($id){
     $array = [];
     $request_details = ClientRequest::where('id',$id)->first();
     $request_details['request_category'] = Services::where('id',$request_details->request_category)->first()->name ?? "N/A";
     $profile = User::where('id',$request_details->client_id)->first('profile_image');
     $request_details['client_id'] =  User::where('id',$request_details->client_id)->first()->name ?? "N/A";
     $request_details['location'] = Locations::where('parent_locations',$profile->country)->first()->name ?? "N/A";
     $user_profile['profile_image'] = asset('/JobPortal/public/profile_images/'.$profile->profile_image);
     array_push($array,$request_details,$user_profile);
     $Proposal_count = Proposal::where('request_id',$id)->count();
     if($Proposal_count > 0 ){
         $proposal_array = [];
     $Proposal = Proposal::where('request_id',$id)->get();
     foreach($Proposal as $Proposals){
      $Proposals['provider_name'] = User::where('id',$Proposals->provider_id)->first()->name;
     array_push($proposal_array,$Proposals);
     }
     
     }
     else
     {
         $Proposal =[];
     }
    
     
     $array_image = [];
      $image_count = Images::where('entity_id',$request_details->id)->where('entity_type','App\ClientRequest')->count(); 
      if($image_count > 0){
      $images= Images::where('entity_id',$request_details->id)->where('entity_type','App\ClientRequest')->get('file_name');
    
      }
      else
      {
          $images = [];
      }
    
           return response()->json([
               'request_detail'=>$array,
               'proposals'=>$Proposal,
               'images'=>$images,
               'url' => asset('/JobPortal/public/post_request_image/')
               ]);
    }
    
    public function accept_proposal($id,$user_id,$client_id){
        
        Proposal::where('id',$id)->update(array(
            
            'status'=>'Active',
            
        ));
        $bid_amount = Amount::where('currency_type','!=',null)->first();
        $previous_amount = User::where('id',$user_id)->first();
        
        $UsedAmount = new UsedAmount;
        $UsedAmount->user_id = $user_id;
        $UsedAmount->request_id = $id;
        $UsedAmount->amount = $bid_amount->bid_amount;
        $UsedAmount->save();
        
        $bid_amount_calculation = $previous_amount->widthdrwal_amount - $bid_amount->bid_amount;
        //dd($bid_amount_calculation);
         User::where('id',$user_id)->update(array(
            
            'widthdrwal_amount'   =>$bid_amount_calculation,  
        ));
        
        $conversation = new Conversation;
    	$conversation->sender_id = $client_id;
    	$conversation->reciever_id = $user_id;
    	$conversation->message = 'Proposal Accepted! Lets talk about my work. ';
    	$conversation->files = $img_2 ?? '';
    	$conversation->save();
    	$perposal = Proposal::where('id',$id)->first();
        $seller_contact = User::where('id',$perposal->provider_id)->first();
        
       // $this->send_sms(['contacts'=>$seller_contact->contacts , 'message'=>'Proposal Accepted! Lets talk about my work. ']);
       
	      $this->send_app_message_to_user(['sender'=>$client_id,'id'=>$user_id,'file_type'=>$type ?? '', 'message'=>'Proposal Accepted! Lets talk about my work. ', 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'','files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);
         $user = User::where('id',$user_id)->first(); 
         Mail::to($user->email)->send(new AcceptProposal($user->email));
       
        $username = User::where('id',$user_id)->first();
        $slug = str_replace(" ","-",$username->name);
        
        return response()->json([
            'message'=>'purposal Accepted'
            ]);
    }
    
    public function proposal_details_provider($id){
     $array = [];
     $request_details = ClientRequest::where('id',$id)->first();
     $request_details['request_category'] = Services::where('id',$request_details->request_category)->first()->name ?? 'N/A';
     $profile = User::where('id',$request_details->client_id)->first('profile_image');
     $request_details['client_name'] =  User::where('id',$request_details->client_id)->first()->name ?? "N/A";
     $request_details['location'] = Locations::where('parent_locations',$profile->country)->first()->name ?? "N/A";
     $request_details['profile_image'] = asset('/JobPortal/public/profile_images/'.$profile->profile_image);
     array_push($array,$request_details);
     
     $Proposal = Proposal::where('request_id',$id)->first();
     $request_details['bid_amount'] = $Proposal->bid_amount ?? 'N/A';
    $request_details['proposal_amount'] = $Proposal->proposal_amount ?? 'N/A';
     
     $array_image = [];
      $image_count = Images::where('entity_id',$request_details->id)->where('entity_type','App\Proposal')->count(); 
      if($image_count > 0){
      $images= Images::where('entity_id',$request_details->id)->where('entity_type','App\Proposal')->get('file_name');
    
      }
      else
      {
          $images = [];
      }
    
           return response()->json([
               'request_detail'=>$array,
               'images'=>$images,
               'url' => asset('/JobPortal/public/post_request_image/')
               ]);
    }
    
    
    public function request_detail_from_provider($request_id,$user_id){
        
         $Proposal_chk = Proposal::where('request_id',$request_id)->where('provider_id',$user_id)->count();
         if($Proposal_chk > 0){
         $is_purposal_available = false;
         }else{
             
             $is_purposal_available = true;
             
         }
         
         
         
          $array = [];
     $request_details = ClientRequest::where('id',$request_id)->first();
     $request_details['request_category'] = Services::where('id',$request_details->request_category)->first()->name ?? "N/A";
     $profile = User::where('id',$request_details->client_id)->first('profile_image');
     $request_details['client_id'] =  User::where('id',$request_details->client_id)->first()->name ?? "N/A";
     $request_details['location'] = Locations::where('parent_locations',$profile->country)->first()->name ?? "N/A";
     $user_profile['profile_image'] = asset('/JobPortal/public/profile_images/'.$profile->profile_image);
     array_push($array,$request_details,$user_profile);
     $Proposal_count = Proposal::where('request_id',$request_id)->count();
     if($Proposal_count > 0 ){
         $proposal_array = [];
     $Proposal = Proposal::where('request_id',$request_id)->get();
     foreach($Proposal as $Proposals){
      $Proposals['provider_name'] = User::where('id',$Proposals->provider_id)->first()->name;
     array_push($proposal_array,$Proposals);
     }
     
     }
     else
     {
         $Proposal =[];
     }
    
     
     $array_image = [];
      $image_count = Images::where('entity_id',$request_details->id)->where('entity_type','App\ClientRequest')->count(); 
      if($image_count > 0){
      $images= Images::where('entity_id',$request_details->id)->where('entity_type','App\ClientRequest')->get('file_name');
    
      }
      else
      {
          $images = [];
      }
    
           return response()->json([
               'request_detail'=>$array,
               'proposals'=>$Proposal,
               'images'=>$images,
               'url' => asset('/JobPortal/public/post_request_image/'),
               'is_purposal_available'=>$is_purposal_available
               ]);
     
    }
    
    
    public function send_proposal(Request $request,$request_id,$user_id){
        
     // dd($request->images);
          
        $bidding_amount = Amount::where('currency_type','!=',null)->first();
         $previous_amount = User::where('id',$user_id)->first();
      if($previous_amount->widthdrwal_amount == $bidding_amount->bid_amount || $previous_amount->widthdrwal_amount > $bidding_amount->bid_amount){
        $Proposal = new Proposal;
        $Proposal->provider_id = $user_id;
        $Proposal->request_id = $request_id;
        $Proposal->proposal_amount = $request->amount;
        $Proposal->proposal_days = $request->days;
        $Proposal->proposal_details = $request->details;
        $Proposal->bid_amount = $bidding_amount->bid_amount;
        $Proposal->save();
        
         if($request->images != []){
        // dd($request->images);
           foreach($request->images as $image){
            //   dd($image);
           // echo $image['name'];
               $image_name = explode('.', $image['name']);
               $extention = end($image_name);
               $imagedata = base64_decode($image['base64']);
               $imageName = md5(date("dmYhisA"));
               $file_name = $imageName.rand(10,1000).'.'.$extention;
                $path = $this->url .'/proposal_images/';
                $success = file_put_contents($path.$file_name, $imagedata);
            
            
            $images = new Images;

            $images->entity_type = 'App\Proposal';
            $images->entity_id = $Proposal->id;
            $images->file_name = $file_name;
            $images->file_path = 'proposal_images';
            $images->save();
        
        
        
           }
               
       }

          return response()->json([
               'status'=>true,
               'message'=>'bid_sent',
                
               ]);
           
         }
         else{
             return response()->json([
              'status'=>false,
              'message'=>'not_have_enough_credit',
                
              ]);
        }

    }
    
     


  public function category($user_id){
      
      $array = [];
      $catagory = Services::where('is_active','1')->get()->toArray();
    $contacts = Conversation::select('reciever_id')->where('sender_id',$user_id)->groupBy('reciever_id')->orderBy('id','DESC')->get();
  
     $ConversationPoint = Conversation::Select('reciever_id')->where('sender_id',$user_id)->groupBy('reciever_id')->get();
          //dd($ConversationPoint);
             $conversation_count = Conversation::Select('reciever_id')->where('sender_id',$user_id)->groupBy('reciever_id')->count();
          // dd($conversation_count);
     if($conversation_count > 0){
     foreach($ConversationPoint as $contact){
         
          $contactor = User::where('id',$contact->reciever_id)->get();
       //  dd($contactor);
   
     }
      array_push($array,$catagory,$contactor);
      
       return response()->json([
         
        'contactors_detals'=>$array,
        ]);
        
       }else{
         return response()->json([
             //'catagorys'=>$catagory,
             'contacts'=>'No contacts found'
             
             ]);
      }
     }
     
     public function bankdetails_api(Request $request,$id)
     {
          $bank_found = BankDetail::where('user_id',$id)->count();
        if($bank_found < 1){
         $BankDetail = new BankDetail;
         $BankDetail->user_id = $request->id;
         $BankDetail->swift_code = $request->swift_code ?? '';
         $BankDetail->account_no = $request->account_no;
         $BankDetail->i_ban_no = $request->reg_no;
         $BankDetail->branch_name = $request->bank_name;
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
         
     return response()->json([
        'status'=>'Details Inserted',
        ]);
     
    }else{
  
  BankDetail::where('user_id',$id)->update(array(
            
          'user_id' => $request->id,
         'swift_code' => $request->swift_code ?? '',
         'account_no' => $request->account_no,
         'i_ban_no' => $request->reg_no,
         'branch_name' => $request->bank_name,
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
        return response()->json([
        'status'=>'Details Updated',
        ]);
        
        
    }
    
    
         
     }
     
     public function contracts_detail_api(Request $request,$user_id)
     {   
         
          $contracts = Contract::all();
    
         if($request->account_type =='buyer'){
                
         if($request->contracts == "allcontracts"){
         $contracts = Contract::where('buyer_id',$user_id)->get();
         }
         if($request->contracts == "completed"){
         $contracts = Contract::where('buyer_id',$user_id)->where('status','completed')->get();
         }
         if($request->contracts == "cancelled"){
         $contracts = Contract::where('buyer_id',$user_id)->where('status','cancelled')->get();
         }
          if($request->contracts == "waiting_fro_payment"){
         $contracts = Contract::where('buyer_id',$user_id)->where('status','waiting_fro_payment')->get();
         }
         
          if($request->contracts == "Pending_contracts")
         {
         $contracts = Contract::where('buyer_id',$user_id)->where('status','waiting_for_provider_approval')->get();
         }
         
         if($request->contracts == "decline_contracts"){
             $contracts = Contract::where('buyer_id',$user_id)->where('status','decline')->get();
         }
         
          if($request->contracts == "disput_open"){
              $contracts = Contract::where('buyer_id',$user_id)->where('status','cancel_req')->get();
         }
         
          if($request->contracts == "active"){
              
              
              $contracts = Contract::where('buyer_id',$user_id)->where('status','active')->get();
              
         }
         
         
         return response()->json([
             'status'=>$contracts,
              
             
             ]);
         }
        else{
             
     
         if($request->contracts == "allcontracts"){
         $contracts = Contract::where('sellers_id',$user_id)->get();
         }
         if($request->contracts == "completed"){
         $contracts = Contract::where('sellers_id',$user_id)->where('status','completed')->get();
         }
         
      if($request->contracts == "Pending_contracts")
         {
         $contracts = Contract::where('sellers_id',$user_id)->where('status','waiting_for_provider_approval')->get();
         }
         
         if($request->contracts == "cancelled"){
         $contracts = Contract::where('sellers_id',$user_id)->where('status','cancelled')->get();
         }
          if($request->contracts == "waiting_fro_payment"){
         $contracts = Contract::where('sellers_id',$user_id)->where('status','waiting_fro_payment')->get();
         }
    
         if($request->contracts == "decline_contracts"){
             $contracts = Contract::where('sellers_id',$user_id)->where('status','decline')->get();
         }
         
          if($request->contracts == "disput_open"){
              $contracts = Contract::where('sellers_id',$user_id)->where('status','cancel_req')->get();
         }
         
          if($request->contracts == "active"){
              $contracts = Contract::where('sellers_id',$user_id)->where('status','active')->get();
         }
         
         
         return response()->json([
             'status'=>$contracts,
             
             ]);
            
        }
             
     }
     
     public function make_contract_api(Request $request,$user_id)
     {    
         $contract = new Contract;
         $catagory = Services::where('is_active','1')->get();
      
         
        if($request->has('file_name')){
        $result = array();
    	$imagedata = base64_decode($request->file_name);
        $filename = md5(date("dmYhisA"));

        $file_name = '/doc_signs/'.$filename.'.png';
        file_put_contents('.'.$file_name,$imagedata);
        $result['status'] = 1;
        $result['file_name'] = $file_name;
        json_encode($result);
    
        }
    
       	$order_no = rand();
    	$carbon = Carbon::now();
    	$contract = new Contract;
    	$contract->contract_name = $request->contract_name;
    	$contract->contract_type = $request->contract_type;
    	$contract->contract_amount = $request->amount;
    	$contract->start_date = $request->startdate;
    	$contract->end_date = $request->enddate;
    	$contract->sellers_id = $request->sellers_id;
    	$contract->time_duration = $request->time_duration;
    	$contract->contract_description = $request->contract_description;
    	$contract->order_no = $order_no;
    	$contract->due_on = $carbon;
    	$contract->buyer_id = $user_id;
    	$contract->save();
       
       $images = new Images;

        $images->entity_type = 'App\Contract';
        $images->entity_id = $contract->id;
        $images->file_name = $filename.'.png';
        $images->file_path = 'doc_signs';
        $images->signature_type = 'Buyer Signature';
        $images->save();
        
        $contract_slug = str_replace(" ","-",$request->contract_name);
        $email = User::where('id',$request->sellers_id)->first();
        
        $buyer = Contract::where('buyer_id',$user_id)->first();
        
      Mail::to($email)->send(new NewContract($contract->id));
      $this->send_app_message_to_user(['id'=>$request->sellers_id,'sender'=>$buyer->buyer_id,'file_type'=>$type ?? '', 'message'=>$buyer->name . 'Make a Contract With You', 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'','files'=>$file_name ?? '','link_for_privider'=>'/Providers/Contract-details/'.$contract_slug.'/'.$order_no,'notification_for'=>'message']);
       
       
        //   $conversation_count = ConversationPoint::where('conversation_start_from',$user_id)->count();
        // $conversation = ConversationPoint::where('conversation_start_from',$user_id)->first();
        //  if($conversation_count > 0)
        //  {
        //      $seller_detail = User::where('id',$conversation->reciever_id)->first();
             
        //      return response()->json([
            
        //      'seller_details'=>$seller_detail,
                 
        //     ]);
        //  } 
       
          return response()->json([
           'status'=>'Contract Created Successfully',
           //'services'=>$catagory,
           
           ]);
      
       
    
     }
     
    
     
     public function calender_api($user_id){
         $array = [];
         $parseArray = [];
         $dateArray = [];
          $projects = Contract::where('sellers_id',$user_id)->get();
          
          $projects = DB::table('contracts')
            ->join('users', function ($join) {
                $join->on('contracts.buyer_id', '=', 'users.id');


            })->where('contracts.sellers_id', $user_id )
            ->select('contracts.id as contract_id','contracts.contract_name as name','contracts.contract_description as contract_description', 'users.name as client_name','users.id as seller_id','contracts.end_date','contracts.start_date')
            ->get();
           if($projects->isNotEmpty()){
                   //dd($projects);
          foreach($projects as $project){
          
              $period = new \DatePeriod(
                 new \DateTime($project->start_date),
                 new \DateInterval('P1D'),
                 new \DateTime($project->end_date)
                );
                // dd($period);
                
            foreach ($period as $key => $value) {
                $datevalue = $value->format('Y-m-d');
                if(!array_key_exists($datevalue,$dateArray)){
                $dateArray[$datevalue] = [$project];
                // dd($project);
                
                }else{
                    array_push($dateArray[$datevalue],$project);
                }      
            }
 
          }
          
         // dd($datevalue);
          
        return response()->json([
            'status'=>true,
            'contracts'=>$dateArray,
             
            ]);
            
          }else{
              
               return response()->json([
            'status'=>false,
            'contracts'=>'no task found',
             
            ]);
              
          }
         
     }
     
    public function returnDates($fromdate, $todate) {
    $fromdate = \DateTime::createFromFormat('Y/d/m', $fromdate);
    $todate = \DateTime::createFromFormat('Y/d/m', $todate);
    // dd($fromdate, $todate);
    return new \DatePeriod(
        $fromdate,
        new \DateInterval('P1D'),
        $todate->modify('+1 day')
    );
}

     
       public function my_gigs($id){
        
        $aray = [];
    	$my_gigs = Gig::where('user_id',$id)->where('status','active')->get();
    	
    	foreach($my_gigs as $my_gigss)
    	{
    	   $my_gigss['gig_image'] = $image = asset('/JobPortal/public/gig_thumbnail/'.$my_gigss->thumbnail);
    	   //$my_gigss['gig_image'] = $image = asset('/gig_thumbnail/'.$my_gigss->thumbnail);
    	   
    	   array_push($aray,$my_gigss);
    	}
        return response()->json([
            'gig_details'=>$my_gigs,
            
            ]);
         
       }
       
       public function gig_details($user_id,$id){
           
             $my_gig = Gig::where('id',$id)->first();

          $GigClicks = new GigClicks;
           $GigClicks->click_by = Auth::user()->id;
            $GigClicks->gig_id = $id;
            $GigClicks->save();
           
       }
   
    public function make_service(Request $request,$id){
            //dd($request->all());
         //dd(public_path('//gig_thumbnail/'));
        // if($request->hasFile('thumbnail')){
        // $attechment  = $request->file('thumbnail');
        // $imageName =  time().$attechment->getClientOriginalName();
        // $attechment->move(public_path('/gig_thumbnail/'),$imageName);
        // }
      if($request->has('thumbnail')){
        
        
        
        $result = array();
        $image_name = explode('.', $request->image_name);
        
        $extention = end($image_name);
    	$imagedata = base64_decode($request->thumbnail);
        $imageName = md5(date("dmYhisA"));

        $file_name = $imageName.'.'.$extention;
        $path = $this->url .'/gig_thumbnail/';
        $success = file_put_contents($path.$file_name, $imagedata);
        
        
        $result['status'] = 1;
        $result['thumbnail'] = $file_name;
        json_encode($result);
    
        }
        
        $Gig = new Gig;
        $Gig->user_id = $id;
        $Gig->service_category = $request->category;
        $Gig->total_time_dureation = $request->time_period;
        $Gig->rate = $request->rate;
        $Gig->title = $request->title;
        $Gig->region = $request->region;
        $Gig->description = $request->description;
        $Gig->available_on = $request->avilable_on;
        $Gig->available_end = $request->avilable_end;
        $Gig->postal_code = $request->postal_code;
        $Gig->thumbnail = $file_name;
        $Gig->save();
        
         return response()->json([
            'message'=>'Gig added succesfully',
            'gig_id'=>$Gig->id
            
            ]);
        
       
        
    }
    public function edit_gig(Request $request,$id)
    {
       
        
     if($request->has('thumbnail')){
        $result = array();
        $image_name = explode('.', $request->image_name);
        
        $extention = end($image_name);
    	$imagedata = base64_decode($request->thumbnail);
        $imageName = md5(date("dmYhisA"));

        $file_name = $imageName.'.'.$extention;
        $path = $this->url .'/gig_thumbnail/';
         $success = file_put_contents($path.$file_name, $imagedata);
        
        
        
        
        $result['status'] = 1;
        $result['thumbnail'] = $file_name;
     //   json_encode($result);
    //  return $file_name;
        
        }else{
                
            $image = Gig::where('id',$id)->first();
            $imageName = $image->thumbnail;
            
        }

        Gig::where('id',$id)->update(array(

         'service_category' => $request->category,
         'total_time_dureation' => $request->time_period,
         'region'=>$request->region,
         'rate' => $request->rate,
        'title' => $request->title,
         'description' => $request->description,
         'thumbnail' => $file_name ?? $imageName, //asset('/gig_thumbnail/'). JobPortal/public //asset('JobPortal/public/gig_thumbnail/')
         'available_on'=>$request->avilable_on,
         'available_end'=>$request->avilable_end,
         'postal_code'=>$request->postal_code

        ));
        return response()->json([
            'message'=> 'Gig Updated Sussecfully'
        ]);
        
    }
    
    
    
    public function gig_get_api($id)
    {
        
        $gig = Gig::where('id',$id)->get();
        
                             
        
        return response()->json([
            'message' =>$gig
            ]);
    }
    public function services()
    {
        $service = Services::where('is_active',1)->get();
        
        return response()->json([
            'list'=>$service
            ]);
    }
    
    public function bank_details_get_api($id)
    {
        $bank_details = BankDetail::where('user_id',$id)->first();
        
        return response()->json([
            'status' =>$bank_details,
            
            ]);
    }
    
    public function region()
    {
         $region = Locations::where('location_type','Country')->get();
         $service = Services::where('is_active',1)->get();
         
         $days = [];
         for($i = 1; $i<=30; $i++){
             array_push($days,['value' =>  $i,'label' => $i." days"]);
            //  $day[$i] = $i." days";
         }
         
         return response()->json([
             'regions'=>$region,
             'services'=>$service,
             'days' => $days
             ]);
    }
    
    public function region_get()
    {
         $region = Locations::select('id','name')->where('location_type','Country')->get();
         $service = Services::select('id','name')->where('is_active',1)->get();
         
         return response()->json([
             'regions'=>$region,
             'services'=>$service
             
             ]);
        
    }
    
 public function contract_description(Request $request,$id){
  if($request->account_type == 'seller'){
   $contract_details = Contract::where('id',$id)->first();
    $buyer_details  = $user = User::where('id',$contract_details->buyer_id)->first();
     $sign = Images::where('entity_id',$contract_details->buyer_id)->where('signature_type','Buyer Signature')->count();
       $signs = Images::where('entity_id',$contract_details->buyer_id)->where('signature_type','Buyer Signature')->get();
       
       
    
         $buyer_details['user_avatar'] = asset('/JobPortal/public/profile_images').'/'.$user->profile_image;
         
        //  contract_activity
        $array_activity = [];
        $check_payment = Invoice::where('contract_id',$contract_details->id)->count();
            if($sign > 0){
            foreach($signs as $sign){
          
             $payment_status['signature'] = asset('/doc_signs/'.$sign->file_name);
             
             
            }
         }
         
         if($contract_details->status == "active")
         {
             $contract_details['dispute_sended'] = false;
             $contract_details['dispute_open'] = true;
         }
         else
         {    $contract_details['dispute_sended'] = true;
              $contract_details['dispute_open'] = false;
         }
         
        if($check_payment > 0 ){
            
            $payment_status['title'] = 'Payment From Client';
            $payment_status['desciption'] = 'Payment Cleared';
        }else{
             $payment_status['title'] = 'Payment From Client';
            $payment_status['desciption'] = 'Payment Uncleared'; 
        }
        
        if($contract_details->status == "cancel_req"){
            
             $contract_status['title'] = 'Contract Status';
            $contract_status['desciption'] = 'Dispute Open';
            
        }else{
            $contract_status['title'] = 'Contract Status';
            $contract_status['desciption'] = 'No event';
        }
        
        if($contract_details->status == "completed" && $contract_details->tip_amount != null){
             $contract_status['title'] = 'Tip Amount';
            $contract_tip['desciption'] = $contract_details->tip_amount;
        }else{
            $contract_tip['title'] = 'Tip Amount';
                $contract_tip['desciption'] = 'No tip';
         
            
        }
  array_push($array_activity,$payment_status,$contract_status,$contract_tip);
       
        return response()->json([
        
            'status'=>true,
            'contract_details'=> $contract_details,
            'buyer_details'=>$buyer_details,
            'contract_activity'=>$array_activity
         ]);
        
         }
         
         else
         {
             
             
             $contract_details = Contract::where('id',$id)->first();
            
             $seller_details =  User::where('id',$contract_details->sellers_id)->first();
            
           $sign = Images::where('entity_id',$contract_details->sellers_id)->where('signature_type','Seller Signature')->count();
           $signs = Images::where('entity_id',$contract_details->sellers_id)->where('signature_type','Seller Signature')->get();
         
         if($sign > 0)
         {
            foreach($signs as $signss){
             $payment_status['signature'] = asset('/doc_signs/'.$signss->file_name);
            }
         }
         
                  $seller_details['user_avatar'] = asset('/JobPortal/public/profile_images').'/'.$seller_details->profile_image;
         
        //  contract_activity
        
          if($contract_details->status == "active")
         {
             $contract_details['dispute_sended'] = false;
             $contract_details['dispute_open'] = true;
         }
         else
         {    $contract_details['dispute_sended'] = true;
              $contract_details['dispute_open'] = false;
         }
        $array_activity = [];
          if($sign > 0)
         {
            foreach($signs as $signss){
             $payment_status['signature'] = asset('/doc_signs/'.$signss->file_name);
            }
         }
        $check_payment = Invoice::where('contract_id',$contract_details->id)->count();
        if($check_payment > 0 ){
            
            $payment_status['title'] = 'Payment From Client';
            $payment_status['desciption'] = 'Payment Cleared';
        }else{
             $payment_status['title'] = 'Payment From Client';
            $payment_status['desciption'] = 'Payment Uncleared'; 
        }
        
        if($contract_details->status == "cancel_req"){
            
             $contract_status['title'] = 'Contract Status';
            $contract_status['desciption'] = 'Dispute Open';
            
        }else{
            $contract_status['title'] = 'Contract Status';
            $contract_status['desciption'] = 'No event';
        }
        
        if($contract_details->status == "completed" && $contract_details->tip_amount != null){
             $contract_status['title'] = 'Tip Amount';
            $contract_tip['desciption'] = $contract_details->tip_amount;
        }else{
            $contract_tip['title'] = 'Tip Amount';
                $contract_tip['desciption'] = 'No tip';
         
            
        }
  array_push($array_activity,$payment_status,$contract_status,$contract_tip);
       
             
              $rating = Reviews::where('provider_id',$seller_details->id)->where('contract_id',$id)->first();
             $ratings = Reviews::where('provider_id',$seller_details->id)->where('contract_id',$id)->count();
             
             if($ratings > 0 ){
             $seller_details['stars'] = $rating->stars;
             }
             else
             {
                 $seller_details['stars'] = 'No Reviews';
             }
            
            
             return response()->json([
                 'status'=>true,
                 'contract_details'=>$contract_details,
                 'seller_details'=>$seller_details,
                    'contract_activity'=>$array_activity
                 
                 ]);
             
         }
      
        
    }
    
    public function refer_friend_api(Request $request,$id)
    {
         $invite = Invitation::where('email',$request->email)->count();
        $registerd_check = User::where('email',$request->email)->count();
         

        if($registerd_check < 1){
         

        if($invite < 1){

        $invitation = new Invitation;
        $link = rand();
        $invitation->invite_from = $id;
        $invitation->email = $request->email;
        $invitation->link = $link;
        $invitation->save();
        
               
                  Mail::to($request->email)->send(new Refferal($request->email));
  
        
              }
              else
              {
                  return response()->json([
                      'message'=>'This email is refferd by someone else'
                      ]);
              }
              
               return response()->json([
            
            'status'=>'Invitation Sended'
            
            ]);   
       
              }
              else
              {
                  return response()->json([
                      'message'=>'This email is already registerd'
                      ]);
              }
              
          
              
             }
             
 public function earnings(Request $request,$id){
                 
 $filer = Invoice::where('user_id',$id)->whereMonth('created_at', $id)->get();
  $filer_count = Invoice::where('user_id',$id)->whereMonth('created_at', $id)->count();
    if($filer_count > 0){
      foreach($filer as $filers){
        //      $new  = new Carbon($filers->created_at);
        //   dd($new->month);
       
        //  $result = Invoice::where('user_id',Auth::user()->id)->whereMonth('created_at', $new)->first();
        	$Contracts = Contract::where('id',$filers->id)->first();
             $buyer_name = User::where('id',$Contracts->buyer_id)->first();
             $contract_slug = str_replace(" ","-",$Contracts->contract_name);
            
              return  response()->json([
 
                'data' => $Contracts,
                'buyer_name'=> $buyer_name,
                'contract_slug'=>$contract_slug,
                  
            ]);
        
          
        }
        
      }
                
     return response()->json([
                    'Net ammount'=>Invoice::where('user_id',$id)->sum('amount'),
                    'widthdraw'=>AmountStatus::where('provider_id',$id)->where('status','cleared')->sum('amount'),
                    'Pending'=>AmountStatus::where('provider_id',$id)->where('status','pending_clearance')->sum('amount'),
                    'avalible'=>AmountStatus::where('provider_id',$id)->where('status','available')->sum('amount'),
                    ]);
             }
             
             
    public function conversation_get_api($sender_id){
         $array = [];
        //  $ConversationPoint = Conversation::Select('reciever_id','sender_id')->where('sender_id',$sender_id)->orwhere('reciever_id',$sender_id)->groupBy('reciever_id','sender_id')->get();
     $ConversationPoint = Conversation::select('reciever_id')->where('sender_id',$sender_id)->groupBy('reciever_id')->orderBy('id','DESC')->get();
       //  dd($ConversationPoint);
             $user_detail = User::where('id',$sender_id)->first();
            $conversation_count = Conversation::where('sender_id',$sender_id)->orwhere('reciever_id',$sender_id)->count();
            if($conversation_count > 0){
              foreach($ConversationPoint as $conversations){
                  
                  if($user_detail->account_type == "seller"){
                      
                        $user_details = User::where('id',$conversations->sender_id)->first();
                     
                  }else{

                  $user_details = User::where('id',$conversations->reciever_id)->first();
                      
                  }
                   if($user_detail->profile_image == null)
        {
             $user_details['user_avatar'] = $user_details->img_url;
            //$image_name = $image->profile_image;
            
        }
        else
        {
           $user_details['user_avatar'] = asset('/JobPortal/public/profile_images/').'/'.$user_details->profile_image;
        }
              
              
         //  dd($last_message);
 
              $user_details['last_message'] = Conversation::Select('message')->where('sender_id',$conversations->sender_id)->orwhere('reciever_id',$conversations->reciever_id)->first();
             
              //dd($last_message);
            array_push($array,$user_details);
            }
          return response()->json([
          'user_detail'=>$array
          ]);
         }
         else{
           return response()->json([
             'message'=>'No Contacts found',
                   
           ]);
      }
    }
    
    
    public function earning_api($user_id){
        $array = [];
        
     $neticome['neticome'] = Invoice::where('user_id',$user_id)->sum('amount');
     $withdrawn['withdrawn'] = AmountStatus::where('provider_id',$user_id)->where('status','cleared')->sum('amount');
     $pending_clearance['pending_clearance'] = AmountStatus::where('provider_id',$user_id)->where('status','pending_clearance')->sum('amount');
     $available['available'] = AmountStatus::where('provider_id',$user_id)->where('status','available')->sum('amount');
        array_push($array,$neticome,$withdrawn,$pending_clearance,$available);
 
       return response()->json([
             'earning_details'=>$array,
                   
           ]); 
    }
    
    public function completed_contracts($user_id){
        
        
        $completed_contracts = Contract::where('sellers_id',$user_id)->where('status','completed')->get();
        return response()->json([
            'completed_contracts'=>$completed_contracts,
            ]);
        
    }
    
    
    public function earning_filer(Request $request,$user_id){
        
                
        if($request->has('month')){
          if($request->month != "00"){
             $Contract = Contract::where('sellers_id',$user_id)->whereMonth('created_at',$request->month)->where('status','completed')->get();
        	$Contracts_count = Contract::where('sellers_id',$user_id)->whereMonth('created_at',$request->month)->where('status','completed')->count();
          
          return  response()->json([
 
                'completed_contracts' => $Contract,
                    
            ]);
   
         }  else{ 
               $completed_contracts = Contract::where('sellers_id',$user_id)->where('status','completed')->get();
        return response()->json([
            'completed_contracts'=>$completed_contracts,
            ]);
             
         }
         }else{
             $completed_contracts = Contract::where('sellers_id',$user_id)->where('status','completed')->get();
                 return response()->json([
            'completed_contracts'=>$completed_contracts,
            ]);
          }
       
    }
    
    // public function function forgot_password(Request $request){
        
        
    // }
    
    
        
        
   public function send_message_api(Request $request,$sender,$reciever){
 
           
 
      if($request->has('thumbnail')){
          
        $result = array();
        $image_name = explode('.', $request->image_name);
        
        $extention = end($image_name);
    	$imagedata = base64_decode($request->thumbnail);
        $imageName = md5(date("dmYhisA"));

        $file_name = $imageName.'.'.$extention;
        $path = $this->url .'/gig_thumbnail/';
         $success = file_put_contents($path.$file_name, $imagedata);
        
        
        
        
        $result['status'] = 1;
        $result['thumbnail'] = $file_name;
  
        
 
	    if($extention == "png"){

	    	$type = 'image';
	    }
	    elseif($extention == "jpg"){
	    	$type = 'image';
	    }

	    elseif($extention == "jpeg"){
	    	$type = 'image';
	    }else{

	    	$type = "document";
	    }
      }
   
 	    $conversation_count = ConversationPoint::where('conversation_start_from',$sender)->count();
	    
 	   if($conversation_count < 1){
            
     	 $make_conversation = new ConversationPoint;
    	 $make_conversation->conversation_start_from = $sender;
         $make_conversation->reciever_id = $reciever;
     	 $make_conversation->save();
     	 $user = User::where('id',$reciever)->first();
    	   
         Mail::to($user->email)->send(new NewConversation($reciever));
   
    	}
    	
    	if($request['thumbnail'] == null && $request['image_name'] == null)
    	{
    	    $file_name = null;
    	} 
    	else
    	{
    	    $file_name = $imageName.'.'.$extention;
    	}

        $conversation = new Conversation;
    	$conversation->sender_id = $sender;
    	$conversation->reciever_id = $reciever;
    	$conversation->message = $request->message;
    	$conversation->files = $file_name ?? null;
    	$conversation->save();
        
		 $this->send_app_message_to_user(['id'=>$reciever,'sender'=>$sender,'file_type'=>$type ?? '', 'message'=>$request->message, 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'','files'=>$file_name ?? '','link_for_privider'=>'','notification_for'=>'message']);
       

	//	$provider_details = User::where('id',$reciever)->first();
	//	dd($provider_details);
        return response()->json([
            'status'=>true,
            'message'=>'message_sent'
            
            ]);	 

		 
    }

    
       public function forgot_password(Request $request){
        
        
        $check_user_available = User::where('email',$request->email)->count();
      
        if($check_user_available > 0){
           User::where('email',$request->email)->update(array(
               'remember_token'=>rand(),
             ));
              $user_details = User::where('email',$request->email)->first();
             Mail::to($request->email)->send(new ResetPassword($user_details));
            
              return response()->json([
                
                'status'=>true,
                'message'=>'reset mail send'
                
                ]);
            
        }else{
            
            
            return response()->json([
                
                'status'=>false,
                'message'=>'email not found'
                
                ]);
        }
    }
    
    
    public function reset_code_compare(Request $request){
        
        $is_code_exist = User::where('remember_token',$request->code)->count();
        if($is_code_exist > 0){
             $user_details = User::where('remember_token',$request->code)->first();
                
            return response()->json([
                
                'status'=>true,
                 'user_data'=>$user_details
                
                ]);
            
        }else{
            
              return response()->json([
                
                'status'=>false,
                 'message'=>'link_expired'
                
                ]);
            
        }
        
    }
    
    public function reset_password_api(Request $request,$user_id){
        
         $compare_hash = User::where('id',$user_id)->count();
            if($compare_hash > 0){
                
                
                User::where('id',$user_id)->update(array(
                     'remember_token'=> '',
                     'password'=>Hash::make($request->password),
                     ));
                
                
                return response()->json([
                
                'status'=>true,
                 
                ]);
                
            } 
        
    }
    
    
    public function service_details($id){
        
        $gig_count = Gig::where('id',$id)->count();
       
       if($gig_count > 0){
        $data =  DB::table('gigs')
            ->join('users', function ($join) {
                $join->on('gigs.user_id', '=', 'users.id');


            })->join('services', function ($join) {
                $join->on('gigs.service_category', '=', 'services.id');

            })->where('gigs.id', $id )
            ->select('gigs.*', 'services.name as service_name','users.name as user_name','users.id as user_id','users.profile_image as user_profile_image')
            ->first();
             // dd($data);
            $data->thumbnail =  asset('JobPortal/public/gig_thumbnail').'/'.$data->thumbnail ?? null;
            // dd($data->toArray());
        // $reviews = Reviews::where('provider_id',$data->user_id)
        $reviews = DB::table('reviews')
            ->join('users', function ($join) {
                $join->on('reviews.buyer_id', '=', 'users.id');
            })->where('reviews.provider_id' ,$data->user_id )
            ->select('reviews.*','users.name as user_name','users.id as user_id','users.profile_image as user_profile_image')
            ->limit(5)->get();
        
        return response()->json([
                
                'data'=>$data,
                'reviews' => $reviews,
                'url' => asset('/JobPortal/public/profile_images/')
                 
                ]);
                
       }else{
           
            return response()->json([
                
                'data'=>'gig_not_found',
               
                ]);
           
       }
    }
    
    
    public function viewGeneralProfile($id){
        return response()->json([
                
                'user'=> User::find($id)
                 
                ]);
    }
    
    public function editGeneralProfile($id){
        // addres  contacts image_proile birthday name
        return response()->json([
                
                'user'=> User::find($id)
                 
                ]);
    }
    
    
   
     public function topup_wallet(Request $request,$user_id){
        
        
        
           $stripe = Stripe::make(env('STRIPE_SECRET'));

                     //dd($request->all());
    
                $token = $stripe->tokens()->create([
                'card' => [
                   // 'card_owner' => $request->owner,
                    'number'    => $request->card_no,
                    'exp_month' => $request->get('expiry_month'),
                    'exp_year'  => $request->get('expiry_year'),
                    'cvc'       => $request->get('cvv'),
                ],
            ]);

                //dd();


            if (!isset($token['id'])) {
              
                return response()->json([
       
                  'cart_details' => 'Token is not generate correct',
                  'status' => false
         
             ]);
            }
            

            //$currency = Currency::first();

            $charge = $stripe->charges()->create([
                'card' => $token['id'],
                'currency' => 'usd', //$currency->currency
                'amount'   => $request->amount,
                'description' => 'Payment',
            ]);
             
            $user=  User::where('id',$user_id)->first();
             
            User::where('id',$user_id)->update(array(
                'widthdrwal_amount'=> $user->widthdrwal_amount + $request->amount,
                ));
        return response()->json([
            
            'message'=>'wallet recharge_successful'
            ]);
    }
    
    public function save_gigs($gig_id,$user_id){
        
          
        $Bookmark = new Bookmark;
        $Bookmark->gig_id = $gig_id;
        $Bookmark->user_id = $user_id;
        $Bookmark->save();
        
        return response()->json([
            'status'=>true,
            'message'=>'gig_saved'
            ]);
         
    }
    
     public function booksmarks_unsave($id,$user_id){
        
        Bookmark::where('gig_id',$id)->where('user_id',$user_id)->delete();
        return response()->json([
            'status'=>true,
            'message'=>'saved_gig_deleted'
            ]);
    }
    
    
    public function gig_list($user_id){
        
     $aray = [];
        
        $Bookmark = Bookmark::where('user_id',$user_id)->get();
    	foreach($Bookmark as $my_gigss)
    	{
    	   $my_gigss['my_gigss'] = $my_gigs = Gig::where('id',$my_gigss->gig_id)->first();
    
     	   $my_gigss['gig_image'] = $image = asset('/JobPortal/public/gig_thumbnail/'.$my_gigs->thumbnail);
     	   
    	   array_push($aray,$my_gigss);
     	}
        return response()->json([
            'gig_details'=>$aray,
            
            ]);
       
    }
    
   
}