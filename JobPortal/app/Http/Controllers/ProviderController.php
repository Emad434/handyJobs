<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\ProviderDetails;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Services;
use App\Gig;	
use App\Contract;
use App\CancelRequest;
use App\Images;
use App\GigClicks;
use App\ConversationPoint;
use App\Conversation;
use App\Reviews;
use App\Invoice;
use App\AmountStatus;
use App\Reply;
use App\BankDetail;
use App\Invitation;
use Illuminate\Support\Facades\Mail;
use App\Mail\Refferal;
use App\Mail\NewContract;
use App\Mail\DisputeClient;
use App\Mail\ContractCancel;
use App\Mail\AcceptDispute;
use App\ClientRequest;
use App\Vehicle_detail;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\Amount;
use App\Proposal;
use App\ActiveStatus;
use App\SupportInbox;
use App\Locations;



 class ProviderController extends Controller
{
    

	public function __construct(){
   
        $this->middleware('auth');
    }
    
    public function my_wallet(){
        
        return view('providers.wallet');
    }


        public function search_region(Request $request){

        // dd(Openstreetmap::searchByParams($streetname = 'KMC#251 Touheed colony orangi town sec#11 block-L karachi', $housenumber = '251', $city = 'karachi', $state = 'Sindh', $country = $request->region_name, $postalcode = null, $limit = 10));

       $map_detail = \Kolirt\Openstreetmap\Facade\Openstreetmap::search($request->region_name, $limit = 100);

       if($map_detail != null){
       return response()->json([
            'map_detail'=> $map_detail,
       ]);

   }else{

        return response()->json([
           'map_detail'=> 'Area Not Found.',
        ]);

   }
    }
    
    public function my_bids()
    {
        return view('providers.my_bids');
    }
    
    public function recharge_wallet(Request $request){
        
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
             
            User::where('id',Auth::user()->id)->update(array(
                'widthdrwal_amount'=> Auth::user()->widthdrwal_amount + $request->amount,
                ));
        return redirect()->back()->with('message','Your wallet is charged');
    }


    public function index(){
    	$category = Services::where('is_active',1)->get();
    	//dd($category);

    	return view('providers.index',compact('category'));
    }
    
        public function cancel_disput($id){
             
             //dd($buyer_name);
            Contract::where('id',$id)->update(array(
                
                'status' => 'cancelled',
                
            ));
            AmountStatus::where('contract_id',$id)->update(array(
    	    
    	    'status'=>'Contrcat_cancel'
    	    ));
            
        
         $contract_details = Contract::where('id',$id)->first();
         $buyer_name = User::where('id',$contract_details->buyer_id)->first();
         $seller_name = User::where('id',$contract_details->sellers_id)->first();
         $contract_slug = str_replace(" ","-",$contract_details->contract_name);
         
        
        $this->send_sms(['contacts'=>$buyer_name->contacts , 'message'=>$seller_name->name." Accept dispute in your contract. "]);
         $this->send_notification_to_user(['user_id'=>$contract_details->buyer_id, 'message'=>$seller_name->name." Accept dispute in your contract. ", 'url'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract_details->order_no]);
        Mail::to($buyer_name->email)->send(new AcceptDispute($id)); 
            return redirect()->back();
        }
        
         public function send_support_message(Request $request){
       
        $conversation = new SupportInbox;

        if($request->hasFile('files')){

       $attechment  = $request->file('files');

         $img_2 =  time().$attechment->getClientOriginalName();
        $attechment->move(public_path('message_media'),$img_2);
        
        $image_name = explode('.', $img_2);
        $extention = end($image_name);
        $extention = Str::lower($extention);

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

        $conversation_count = ConversationPoint::where('conversation_start_from',Auth::user()->id)
        ->count();
         


        $conversation->user_id = Auth::user()->id;
        $conversation->message = $request->message;
        $conversation->files = $img_2 ?? '';
        $conversation->save();

         $userss = User::where('account_type','admin')->get();
 
             # code...
         
        $this->send_message_to_admin(['id'=>Auth::user()->id,'file_type'=>$type ?? '', 'message'=>$request->message , 'link'=>'na','files'=>$img_2 ?? '','notification_for'=>'message']);
         

    }
        
        
        
        public function update_profile(Request $request,$id)
	{
	         if($request->hasFile('photo')){

       $attechment  = $request->file('photo');

         $img_2 =  time().$attechment->getClientOriginalName();
        $attechment->move(public_path('profile_images'),$img_2);
        
        $image_name = explode('.', $img_2);
        $extention = end($image_name);
        $extention = Str::lower($extention);

       
        }else{
            
            $user_old_image = User::where('id',Auth::user()->id)->first();
            $img_2 = $user_old_image->profile_image;
            
        }
	      
	     $user = User::where('id',$id)->update(array(
                'name'=>$request->name,
               'profile_image'=>$img_2 ?? '',
                'bitrth_day'=>$request->date_of_birth,
                'addres'=>$request->address,
                'contacts'=>$request->contact,
                'category'=>$request->catagory,
                
                
                ));
	    return redirect()->back()->with('msg','Details Updated');
	    
	}
	
	
	public function addvechicle()
	{
	    
	    return view('providers.add_vechical');
	}
	
	public function vehicle_details(Request $request,$id)
	{ 
	    //$checkUser = Vehicle_detail::where('user_id',$id)->count();
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
	            
	             return redirect()->back()->with('msgg','Vehical Added Successfully');
	    
	   
	}
	
	public function vehicle_edit_view($id)
	{
	    $vehicale_detail = Vehicle_detail::where('id',$id)->first();
	    return view('providers.edit_vehicle',compact('vehicale_detail'));
	}
	public function vechicle_update(Request $request,$id)
	{
	    $vehicle = Vehicle_detail::where('id',$id)->update(array(
	            'vehicle_type'=>$request->vehical_type,
                'number_plate'=>$request->number_plate,
                'vehicle_brand'=>$request->vehical_brand,
                'vehicle_model'=>$request->model_vehicle,
                'vehicle_color'=>$request->vehicle_color,
                'vehicle_status'=>$request->vehicle_status,
	        
	        ));
	        
	        return redirect()->back()->with('mseg','Vehicle Updated Successfully');
	}
	
	public function delete_vehicle($id)
	{
	    $vehicale_delete = Vehicle_detail::where('id',$id)->delete();
	    
	    return redirect()->back()->with('msseg','Vehicle Deleted');
	}
	
	public function lience(Request $request,$id)
	{
	    $user = User::where('id',$id)->update(array(
	        'driver_name'=>$request->driver_name,
	        'lience_number'=>$request->lience_number,
	        
	        ));
	        
	        return redirect()->back()->with('msggg','Details Updated');
	    
	}
	
	public function update_profilee()
	{
	    return view('providers.edit_profile');
	}
    
    
        public function bank_details(Request $request){
            
             $details =  BankDetail::where('user_id',Auth::user()->id)->first();
           //dd($details);
            return view('providers.bank_details',compact('details'));
            
        }
    
        public function earning_filter($id){
        //dd($id);
        //dd(Carbon::now()->month);
         
        
        $filer = Invoice::where('user_id',Auth::user()->id)->whereMonth('created_at', $id)->get();
        $filer_count = Invoice::where('user_id',Auth::user()->id)->whereMonth('created_at', $id)->count();

        if($filer_count > 0){
            
        foreach($filer as $filers){
        //      $new  = new Carbon($filers->created_at);
        //   dd($new->month);
       
        //  $result = Invoice::where('user_id',Auth::user()->id)->whereMonth('created_at', $new)->first();
        	$Contracts = Contract::where('id',$filers->id)->get();
        	foreach($Contracts as $Contract){
             $buyer_name = User::where('id',$Contract->buyer_id)->first();
             $contract_slug = str_replace(" ","-",$Contract->contract_name);
        	}
              return  response()->json([
 
                'data' => $Contract,
                'buyer_name'=> $buyer_name,
                'contract_slug'=>$contract_slug,
                  
            ]);
        
          
        }
        
      }else{
          
           return  response()->json(['error' => 1]);
        
      }
       
        //dd($id);
    }

    public function my_profile(){

        $my_services = Gig::where('user_id',Auth::user()->id)->get();
        $my_services_count = Gig::where('user_id',Auth::user()->id)->count();
        
        $ProviderDetails = ProviderDetails::where('user_id',Auth::user()->id)->first();
        if($ProviderDetails == null)
        {
            return view('providers.add_service');
        }
        $my_reviews = Reviews::where('provider_id',Auth::user()->id)->get();

        return view('providers.my_profile',compact('my_services','my_services_count','ProviderDetails','my_reviews'));
    }

    public function edit_gig($id){

        $edit_gig = Gig::where('id',$id)->first();
        //dd($edit_gig);
        return view('providers.edit_gig',compact('edit_gig'));
    }

    public function edit_save(Request $request,$id){

        if($request->hasFile('photo')){
           
            $attechment  = $request->file('photo');
            $imageName =  time().$attechment->getClientOriginalName();
            $attechment->move(public_path('/gig_thumbnail/'),$imageName);
        }else{
                
            $image = Gig::where('id',$id)->first();
            $imageName = $image->thumbnail;
            
        }

        Gig::where('id',$id)->update(array(

         'service_category' => $request->category,
         'total_time_dureation' => $request->time_period,
         'rate' => $request->rate,
        'title' => $request->title,
         'description' => $request->editordata,
         'thumbnail' => $image->thumbnail ?? $imageName,
         'available_on'=>$request->avilable_on,
         'available_end'=>$request->avilable_end,
         'postal_code'=>$request->postal_code

        ));

       return redirect()->back()->with('gig_edit','Your Gig Was Updated');

    }
    
    public function bank_detail_save(Request $request){
    
    $bank_found = BankDetail::where('user_id',Auth::user()->id)->count();
    if($bank_found < 1){
     $BankDetail = new BankDetail;
     $BankDetail->user_id = Auth::user()->id;
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
  
  BankDetail::where('user_id',Auth::user()->id)->update(array(
            
      'user_id' => Auth::user()->id,
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

    public function delete_gigs($id){

        Gig::where('id',$id)->update(array(

            'status' => 'deleted_by_user',
        ));
         return redirect()->back()->with('gig_dlt','Gig Was Deleted');
       
    }

    public function gig_details($id,$slug){
     
        $my_gig = Gig::where('id',$id)->first();

          $GigClicks = new GigClicks;
              $GigClicks->click_by = Auth::user()->id;
            $GigClicks->gig_id = $id;
            $GigClicks->save();
             
        return view('providers.gig_details',compact('my_gig'));
    }

    public function make_service(Request $request){
            //dd($request->all());
         //dd(public_path('//gig_thumbnail/'));
        if($request->hasFile('photo')){
        $attechment  = $request->file('photo');
        $imageName =  time().$attechment->getClientOriginalName();
        $attechment->move(public_path('/gig_thumbnail/'),$imageName);
        }
        $Gig = new Gig;
        $Gig->user_id = Auth::user()->id;
        $Gig->service_category = $request->category;
        $Gig->total_time_dureation = $request->time_period;
        $Gig->rate = $request->amont;
        $Gig->title = $request->title;
        $Gig->region = $request->region;
        $Gig->description = $request->editordata;
        $Gig->available_on = $request->avilable_on;
        $Gig->available_end = $request->avilable_end;
         $Gig->lat = $request->lat;
        $Gig->lon = $request->lag;
        $Gig->postal_code = $request->postal_code;
        $Gig->thumbnail = $imageName;
        $Gig->save();



        return redirect('Providers/My-Services')->with('status','Gig Publish Successfuly');;
        
    }


    public function add_servce(){


        return view('providers.add_service');
    }

    public function Resolution($id,$slug){


    	return view('providers.resolution',compact('id'));

    }

    public function request_cancel(Request $request,$id,$buyer_id){

    	$CancelRequest = new CancelRequest;
    	$CancelRequest->req_from = Auth::user()->id;
    	$CancelRequest->contract_id = $id;
        $CancelRequest->reciever_id = $buyer_id;
        
    	$CancelRequest->description = $request->desc;
    	$CancelRequest->save();

    	$contract = Contract::where('id',$id)->first();

    	Contract::where('id',$id)->update(array(

    		'status'=>'cancel_req',
    	));
    	$contract_slug = str_replace(" ","-",$contract->contract_name);
       // $contract_details = Contract::where('id',$id)->first();
       $seller_name = User::where('id',$contract->sellers_id)->first();
       $buyer_name = User::where('id',$contract->buyer_id)->first();
       // dd($buyer_name);
      $this->send_sms(['contacts'=>$buyer_name->contacts , 'message'=>$seller_name->name." Open dispute in your contract. "]);
         $this->send_notification_to_user(['user_id'=>$contract->buyer_id, 'message'=>$seller_name->name." Open dispute in your contract. ", 'url'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract->order_no]);
         Mail::to($buyer_name->email)->send(new ContractCancel($id));        

    	return redirect('Providers/Contract-details/'.$contract_slug.'/'.$contract->order_no.' ');
    		
    }


    public function Contracts(){

    	$Contracts = Contract::where('sellers_id',Auth::user()->id)->get();
     
    	$Contracts_count = Contract::where('sellers_id',Auth::user()->id)->count();
    	//dd($Contracts->buyer_details);

    	$cmplt_contract = Contract::where('sellers_id',Auth::user()->id)->where('status','completed')->get();
    	$cmplt_contract_count = Contract::where('sellers_id',Auth::user()->id)->where('status','completed')->count();
    	

    	$cancelled_contract = Contract::where('sellers_id',Auth::user()->id)->where('status','cancelled')->get();
    	$cancelled_contract_count = Contract::where('sellers_id',Auth::user()->id)->where('status','cancelled')->count();
    	

    	$pending_contract = Contract::where('sellers_id',Auth::user()->id)->where('status','waiting_for_provider_approval')->get();
    	$pending_contract_count = Contract::where('sellers_id',Auth::user()->id)->where('status','waiting_for_provider_approval')->count();
    	
    	return view('providers.Contracts',compact('Contracts','Contracts_count','cmplt_contract','cmplt_contract_count','cancelled_contract','cancelled_contract_count','pending_contract','pending_contract_count'));
 
    }
    


    public function contract_details($name,$order_no){

    	$contrac_details = Contract::where('order_no',$order_no)->first();
    	//dd($contrac_details);
    	return view('providers.contract_details',compact('contrac_details'));

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

       $this->send_sms(['contacts'=>$buyer_name->contacts , 'message'=>" Good news for you. ".Auth::user()->name." Aproveed your Contract. ",]);
        $this->send_notification_to_user(['user_id'=>$contract->buyer_id, 'message'=>" Good news for you. ".Auth::user()->name." Aproveed your Contract. ",'noti_type'=>'contract_accpt', 'url'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract->order_no]);
        return redirect()->back();

    }

    
  

    public function contract_decline($id){

        Contract::where('id',$id)->update(array(

            'status'=>'cancelled',
        ));
        
 return redirect()->back();

    }

    public function cronjob_update_contract_status(){
    	 
    	 $Contracts = Contract::where('status','active')->get();
    	 foreach($Contracts as $Contract){
    	 $date = $Contract->time_duration + date("j");
    	  		 
    	 if($date == date("j")){

    	  	Contract::where('id',$Contract->id)->update(array(
    	  			'status'=>'late',
    	  	));

    	  	}


    	}
    	
    }

    public function my_gigs(){

    	$my_gigs = Gig::where('user_id',Auth::user()->id)->where('status','active')->get();
    	$my_gigs_count = Gig::where('user_id',Auth::user()->id)->where('status','active')->count();
    	   


    	return view('providers.my_gigs',compact('my_gigs','my_gigs_count'));
    }

    public function inbox(){


        $conversation = Conversation::select('sender_id')->where('reciever_id',Auth::user()->id)->groupBy('sender_id')->orderBy('sender_id')->get();

        $last_message = Conversation::select('message')->where('sender_id',Auth::user()->id)
        ->orwhere('reciever_id',Auth::user()->id)->orderBy('id','DESC')->first();

        $conversation_count = Conversation::where('reciever_id',Auth::user()->id)
        ->count();
        $unread_messages= Conversation::where('reciever_id',Auth::user()->id)->where('is_seen','unread')->count();

        
    	return view('providers.indox',compact('conversation','conversation_count','last_message','unread_messages'));
    }


     public function conversation($provider_id,$name){



        $ConversationPoint = Conversation::select('sender_id')->where('reciever_id',Auth::user()->id)->groupBy('sender_id')->orderBy('sender_id')->get();
        //dd($ConversationPoint);
        $last_message = Conversation::where('reciever_id',Auth::user()->id)->orwhere('sender_id',Auth::user()->id)->orderBy('id','DESC')->first();
        $conversation_count = Conversation::where('reciever_id',Auth::user()->id)->count();

        // if($conversation_count < 1){

        //     $make_conversation = new ConversationPoint;
        //     $make_conversation->conversation_start_from = Auth::user()->id;
        //     $make_conversation->reciever_id = $provider_id;
        //     $make_conversation->save();

        // }

          $unread_messages= Conversation::where('reciever_id',Auth::user()->id)->where('is_seen','unread')->count();

        Conversation::where('reciever_id',Auth::user()->id)->update(array(

            'is_seen'=>'read'
        ));
        

        $provider_details = User::where('id',$provider_id)->first();
        //dd($provider_details);
        return view('providers.Conversation',compact('ConversationPoint','unread_messages','conversation_count','last_message','provider_id','provider_details'));
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
     $seller_name = User::where('id',$contract_details->sellers_id)->first();
     $buyer_name = User::where('id',$contract_details->buyer_id)->first();

    $this->send_sms(['contacts'=>$buyer_name->contacts , 'message'=>$buyer_name->name." Has decline dispute on your contract. ",]);
     $this->send_notification_to_user(['user_id'=>$contract_details->buyer_id, 'message'=>$buyer_name->name." Has decline dispute on your contract. ", 'url'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract_details->order_no]);   
          
        Mail::to($buyer_name->email)->send(new DisputeClient($id));    
        return redirect()->back();    
        
    }


     public function send_message(Request $request,$id){


        $conversation = new Conversation;

        if($request->hasFile('files')){

       $attechment  = $request->file('files');

         $img_2 =  time().$attechment->getClientOriginalName();
        $attechment->move(public_path('message_media'),$img_2);
        
        $image_name = explode('.', $img_2);
        $extention = end($image_name);
        $extention = Str::lower($extention);

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

        $conversation_count = ConversationPoint::where('conversation_start_from',Auth::user()->id)
        ->count();
        if($conversation_count < 1){

            $make_conversation = new ConversationPoint;
            $make_conversation->conversation_start_from = Auth::user()->id;
            $make_conversation->reciever_id = $id;
            
            $make_conversation->save();
            
            // try{
               
            //       Mail::to($user->email)->send(new NewConversation($request->contract_name));
   
            // }
            // catch(\Swift_TransportException $e){

            //     header( "refresh:5;url=./login" );

            //     //dd("Your Registration is successfull ! but welcome email is not sent because your webmaster not updated the mail settings in admin dashboard ! Kindly go back and login");

            // }
      // return $request->email;
       // return redirect('/Providers/Make-Contact');

        }
        
         $last_count = ActiveStatus::where('user_id',Auth::user()->id)->count();
                    if($last_count > 0){
                    $last_seen = ActiveStatus::where('user_id',Auth::user()->id)->first();
                 date_default_timezone_set("asia/karachi");

                   $dateTime = new \DateTime($last_seen->last_seen);
                  $current_time = new \DateTime("now");
                 $dateTime->modify('+5 minutes');
                 }else{
                 
                 $last_seen = null;
                 $dateTime = null;
                 $current_time = null;
                 }
   


        $conversation->sender_id = Auth::user()->id;
        $conversation->reciever_id = $id;
        $conversation->message = $request->message;
        $conversation->files = $img_2 ?? '';
        //$conversation->save();

      
         $this->send_message_to_user(['id'=>$id,'file_type'=>$type ?? '','message'=>$request->message, 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'','files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);
       
       $provider_details = User::where('id',$id)->first();
        $name_slug = str_replace(" ", "-", $provider_details->name);

 return redirect('Providers/Conversation/'.$id.'/'.$name_slug.' ');
         

        
         
        // return redirect('Client/Conversation/'.$id.'/'.$name_slug.' ');
         

         
    }


    public function Resume(){

    	$reume_details = ProviderDetails::where('user_id',Auth::user()->id)->first();
    	if($reume_details == null)
    	{
    	    return view('Account_setup.account_setup_step1');
    	}
    	else{
    	return view('providers.profile',compact('reume_details'));
    	}
    }
    
    public function resume_edit(){
        
         $user_resume = ProviderDetails::where('user_id',Auth::user()->id)->first();
        return view('providers.resume_edit',compact('user_resume'));
    }


	public function submit_provider_details(Request $request){
	    
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
        
        
        $useer_resume = ProviderDetails::where('user_id',Auth::user()->id)->count();
        if($useer_resume < 1){
            
		//dd($request->all());
		$ProviderDetails = new ProviderDetails;

		if($request->hasFile('photo')){
 			$attechment  = $request->file('photo');
	        $imageName =  time().$attechment->getClientOriginalName();
	        $attechment->move(public_path('passport_size_photos'),$imageName);
		    }else{
		    
		    $resume_photo = ProviderDetails::where('user_id',Auth::user()->id)->first();
		    $imageName = $resume_photo->passport_size_pic;
		    
		    
		}

		if($request->hasFile('resumefile')){
 			$attechment  = $request->file('resumefile');
	        $resume_files =  time().$attechment->getClientOriginalName();
	        $attechment->move(public_path('resume_files'),$resume_files);
 		    }else{
		    
		    
		    $resume_file =  ProviderDetails::where('user_id',Auth::user()->id)->first();
		    $resume_files = $resume_file->resume;
		    
		}
 		$ProviderDetails->user_id = Auth::user()->id;
		$ProviderDetails->profession = $request->profession;
 		$ProviderDetails->minimum_rate = $request->rate;
		$ProviderDetails->resume_category = $request->resumecategory;
		$ProviderDetails->skills = $request->skills;
 		$ProviderDetails->intro = $request->resumecontent;
		$ProviderDetails->school_name = $request->schoolname ?? '';
		$ProviderDetails->qualification = $request->qualification ?? '';
		$ProviderDetails->school_start_date = $request->edu_start_date ?? '';
		$ProviderDetails->schol_end_date = $request->edu_end_date ?? '';
		$ProviderDetails->employer = $request->employer ?? '';
		$ProviderDetails->job_title = $request->jobtitle ?? '';
		$ProviderDetails->jobstart_date = $request->job_start_date ?? '';
		$ProviderDetails->jobend_date = $request->job_end_date ?? '';
    	$ProviderDetails->passport_size_pic = $imageName ?? '';
		$ProviderDetails->resume = $resume_files ?? '';
		$ProviderDetails->cvr_number = $request->cvr_number ?? '';
		$ProviderDetails->cpr_number = $request->cpr_number ?? '';
		$ProviderDetails->save();

		User::where('id',Auth::user()->id)->update(array(

			'is_account_setup_completed'=> 1,
			'step_1'=>'completed',
			'step_2'=>'completed',
			'account_type'=>'seller',
			'country' => $country->id ?? '',
            'city' => $city->id ?? '',
            'ip_addres' => $request->ip_addres,
           'region' => $request->region,
           'postal' => $request->postal,
          'timezone' => $request->timezone,
          'internet' => $request->internet,
          


		));
		
		
        }else{
           
       if($request->hasFile('photo')){
        
			$attechment  = $request->file('photo');
	        $imageName =  time().$attechment->getClientOriginalName();
	        $attechment->move(public_path('passport_size_photos'),$imageName);
		}else{
		    
		    $resume_photo = ProviderDetails::where('user_id',Auth::user()->id)->first();
		    $imageName = $resume_photo->passport_size_pic;
		    
		    
		}

		if($request->hasFile('resumefile')){

			$attechment  = $request->file('resumefile');
	        $resume_files =  time().$attechment->getClientOriginalName();
	        $attechment->move(public_path('resume_files'),$resume_files);

		}else{
		    
		    
		    $resume_file =  ProviderDetails::where('user_id',Auth::user()->id)->first();
		    $resume_files = $resume_file->resume;
		    
		}

           
            ProviderDetails::where('user_id',Auth::user()->id)->update(array(
                 
                 'profession' =>$request->profession,
                 'minimum_rate'=>$request->rate,
                 'resume_category'=>$request->resumecategory,
                 'skills' =>$request->skills,
                 'intro'=>$request->resumecontent,
                 'school_name'=>$request->schoolname ?? '',
                 'qualification' =>$request->qualification ?? '',
                 'school_start_date'=>$request->edu_start_date ?? '',
                 'schol_end_date' =>$request->edu_end_date ?? '',
                 'employer'=>$request->employer ?? '',
                 'job_title' =>$request->jobtitle ?? '',
                 'jobstart_date'=>$request->job_start_date ?? '',
                 'jobend_date' =>$request->job_end_date ?? '',
                 'passport_size_pic'=>$imageName,
                 'resume'=>$resume_files,
                  
            ));
            
            
            
            
            
            
            
        }
		return redirect('Providers/Resume');
	}
	
	

    public function provider_reply(Request $request,$id){

        $Reply = new Reply;
        $Reply->provider_id = Auth::user()->id;
        $Reply->replys = $request->Review;
        $Reply->parent_comment = $id;
        $Reply->save();
        return redirect()->back();

    }


    public function earnings(){

        $invoices = Invoice::where('user_id',Auth::user()->id)->get();
         $invoices_count = Invoice::where('user_id',Auth::user()->id)->count();
        
        return view('providers.earnings',compact('invoices','invoices_count'));
    }


    public function Invite(){

        $invite = Invitation::where('invite_from',Auth::user()->id)->get();
        $invite_count = Invitation::where('invite_from',Auth::user()->id)->count();
        return view('providers.reffer_form',compact('invite_count','invite'));
    }


    public function invitation(Request $request){

        $invite = Invitation::where('email',$request->email)->count();
        $registerd_check = User::where('email',$request->email)->count();
          

        if($registerd_check < 1){

        if($invite < 1){

        $invitation = new Invitation;
        $link = rand();
        $invitation->invite_from = Auth::user()->id;
        $invitation->email = $request->email;
        $invitation->link = $link;
        $invitation->save();
         try{
               
                  Mail::to($request->email)->send(new Refferal($request->email));
   
            }
            catch(\Swift_TransportException $e){

                header( "refresh:5;url=./login" );

                //dd("Your Registration is successfull ! but welcome email is not sent because your webmaster not updated the mail settings in admin dashboard ! Kindly go back and login");

            }
      // return $request->email;
        return redirect('/Providers/Invite');

        }else{

            return redirect()->back()->with('status','This email is already refered by someone else.');
        }
    }else{

            return redirect()->back()->with('status','This email is already registered');

    }


    }


    public function work_diary(){

        $projects = Contract::where('sellers_id',Auth::user()->id)->get();
        
        return view('providers.calender',compact('projects'));
    }


    public function support_inbox(){

        return view('');
    }
    
    
    public function client_requests(){
        
        $all_request_count =  ClientRequest::where('status','Active')->count();
         $all_requests =  ClientRequest::where('status','Active')->get();
       
        return view('providers.all_requests',compact('all_request_count','all_requests'));
    }
    
    
    
    public function request_details($id){
       $request_details =  ClientRequest::where('id',$id)->first();
        $Proposal_count = Proposal::where('request_id',$id)->count();
         $Proposals = Proposal::where('request_id',$id)->get();
  
      return view('providers.request_details',compact('request_details','Proposal_count','Proposals','id'));
    }
    
     public function post_request_images(Request $request)
    {
          
            
            
            $image = $request->file('file');
         $imageName = $image->getClientOriginalName();
        $image->move(public_path('post_request_image'),$imageName);
        
 
         
         
            $images = new Images;

            $images->entity_type = 'App\Proposal';
           // $images->entity_id = $entity_id->id;
            $images->file_name = $imageName;
            $images->file_path = 'post_request_image';
            $images->save();
            
           
            
           return response()->json([
               'image_id'=>$images->id
               
               ]);
         
    }
    
    public function send_proposal(Request $request,$id){
      
        $bidding_amount = Amount::where('currency_type','!=',null)->first();
         $previous_amount = User::where('id',Auth::user()->id)->first();
      if($previous_amount->widthdrwal_amount == $bidding_amount->bid_amount || $previous_amount->widthdrwal_amount > $bidding_amount->bid_amount){
        $Proposal = new Proposal;
        $Proposal->provider_id = Auth::user()->id;
        $Proposal->request_id = $id;
        $Proposal->proposal_amount = $request->amount;
        $Proposal->proposal_days = $request->days;
        $Proposal->proposal_details = $request->details;
        $Proposal->bid_amount = $bidding_amount->bid_amount;
        $Proposal->image_id = $request->image_id;
        $Proposal->save();
        
        $image_array = explode(',',$Proposal->image_id);
        foreach($image_array as $image_arrays)
        {
            $image = Images::where('id',$image_arrays)->update(array(
                'entity_id'=>$Proposal->id
                
                ));
        }
             return redirect()->back()->with('message','Your Bids Successfuly Placed');
         }else{
             return redirect()->back()->with('message','You dont have enough credit for proposal.');
        }
        
        
    }

}
