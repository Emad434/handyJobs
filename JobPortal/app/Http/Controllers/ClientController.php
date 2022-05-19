<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Gig;
use App\Conversation;
use App\User;
use App\Images;
use App\ConversationPoint;
use Illuminate\Support\Str;
use App\GigClicks;
use Carbon\Carbon;
use App\CancelRequestContract;
use App\Contract;
use App\ProviderDetails;
use App\Reviews;
use App\Invoice;
use App\Locations;
use App\Invitation;
use App\Amount;
use Stripe\Charge;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\SupportInbox;
use App\CancelRequest;
use App\Bookmark;
use App\BlogDetail;
use App\BlogReply;
use App\AmountStatus;
use App\BlogComment;
use App\BlogView;
use App\BankDetail;
use App\Mail\NewContract;
use App\Mail\NewConversation;
use App\ClientRequest;
use App\Mail\CancelContract;
use App\Mail\ContractDispute;
use App\Mail\DisputeAccept;
use App\SiteBalance;
use App\Proposal;
use App\UsedAmount;    
use App\ActiveStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class ClientController extends Controller
{
    public function __construct(){
   
        $this->middleware('auth');
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
    
    public function blogs(){
        
        $blog = BlogDetail::where('is_active','active')->paginate(10);
        return view('Client.all_blogs',compact('blog'));
    }
    
    
    public function blog_details($id,$slug){
        
        $blog_details = BlogDetail::where('id',$id)->first();
                $recent_post = BlogDetail::where('is_active','active')->get();

        $BlogView = new BlogView;
        $BlogView->blog_id = $id;
        $BlogView->viewer_id = Auth::user()->id;
        $BlogView->save();
        return view('Client.blog_details',compact('blog_details','recent_post'));
    }
    
    public function my_profile()
    {
        return view('Client.my_profile');
    }
    
    public function favorite_gig()
    {
        return view('Client.favorite_gig');
    }
    
    public function delete_favorite_gig($id)
    {
        $delete_gig = Bookmark::where('id',$id)->delete();
        
        return redirect()->back()->with('gig_delete','Gig Deleted');
    }
    
    public function edit_profile()
    {
       
        return view('Client.edit_profile');
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
                
                
                
                ));
	    return redirect()->back()->with('msg','Details Updated');
	    
	}
    
    public function post_comment(Request $request,$id){
        
        $BlogComment = new BlogComment;
        $BlogComment->blog_id = $id;
        $BlogComment->commenter_id = Auth::user()->id;
        $BlogComment->comments = $request->message;
        $BlogComment->save();
        
        return redirect()->back()->with('message','Comment Publish');
    }
    
    public function reply(Request $request,$id){
        
        $BlogReply = new BlogReply;
        $BlogReply->parent_comment = $id;
        $BlogReply->replier_id = Auth::user()->id;
         $BlogReply->comment = $request->reply;
        $BlogReply->save();
     return redirect()->back()->with('message','Reply Publish');

    }


    public function index(){

    	  //dd($category);
      	$category = Services::where('is_active',1)->get();
      	
    	$gigs = Gig::where('status','active')->where('active_by_admin','1')->orderBy('id','DESC')->paginate(10);
        
        $country = Locations::where('location_type','Country')->get();
       
       
       $rising_seller = User::where('is_featured',1)->get();
        
       $rising_sellers_count = User::where('is_featured',1)->count();
       
       return view('Client.index',compact('category','gigs','country','rising_sellers_count','rising_seller'));
    }
    
    public function all_jobs(){
        
   // $category = Services::where('is_active','1')->get();
    
       $gigs = Gig::where('status','active')->where('active_by_admin','1')->orderBy('id','DESC')->paginate(10);
        $country = Locations::where('location_type','Country')->get();
      
       
        return view('Client.all_jobs',compact('gigs','country'));
    }
    
    
    public function notification(){
        
        
        return view('Client.notification');
    }
    
    public function bank_details(){
        $details = null;
        $details_count = BankDetail::where('user_id',Auth::user()->id)->count();
        if($details_count > 0){
          $details = BankDetail::where('user_id',Auth::user()->id)->first();
        }
        return view('Client.bank_details',compact('details'));
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
    
    public function request_post(){
        
        
        return view('Client.client_request');
    }
    
    public function all_requests(){
            
        $all_request_count = ClientRequest::where('client_id',Auth::user()->id)->count();
        $all_requests = ClientRequest::where('client_id',Auth::user()->id)->get();
        return view('Client.all_buyer_request',compact('all_request_count','all_requests'));
    }
    
    public function post_request_images(Request $request)
    {
          
            
            
            $image = $request->file('file');
         $imageName = $image->getClientOriginalName();
        $image->move(public_path('post_request_image'),$imageName);
        
 
         
         
            $images = new Images;

            $images->entity_type = 'App\ClientRequest';
           // $images->entity_id = $entity_id->id;
            $images->file_name = $imageName;
            $images->file_path = 'post_request_image';
            $images->save();
            
           
            
           return response()->json([
               'image_id'=>$images->id
               
               ]);
         
    }
    public function request_publish(Request $request){
      //  dd($request);
        $ClientRequest = new ClientRequest;
        $ClientRequest->client_id = Auth::user()->id;
        $ClientRequest->request_category = $request->category;
        $ClientRequest->request_details = $request->details;
         $ClientRequest->start_from = $request->start_from;
        $ClientRequest->end_to = $request->end_to;
        $ClientRequest->location = $request->location;
        $ClientRequest->amount = $request->amount;
         $ClientRequest->days = $request->days;
         $ClientRequest->image_id = $request->image_id;
         $ClientRequest->pick_location = $request->pick;
         $ClientRequest->diliver_location = $request->diliver;
        $ClientRequest->save();
        
        $image_array = explode(',',$ClientRequest->image_id);
        foreach($image_array as $image_arrays)
        {
            $image = Images::where('id',$image_arrays)->update(array(
                'entity_id'=>$ClientRequest->id
                
                ));
        }
        
        
        return redirect()->back()->with('message','Request will publish after approval.');
    }
    
    
    public function request_details($id){
        
     $request_details = ClientRequest::where('id',$id)->first();
      $Proposal_count = Proposal::where('request_id',$id)->count();
     $Proposals = Proposal::where('request_id',$id)->get();
           return view('Client.request_details',compact('request_details','Proposal_count','Proposals'));
    }

    
    
      public function booksmarks($id){
        
        $Bookmark = new Bookmark;
        $Bookmark->gig_id = $id;
        $Bookmark->user_id = Auth::user()->id;
        $Bookmark->save();
    }
    
     public function booksmarks_unsave($id){
        
        Bookmark::where('gig_id',$id)->where('user_id',Auth::user()->id)->delete();
    }
    
    
    public function accept_proposal($id,$user_id){
        
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
    	$conversation->sender_id = Auth::user()->id;
    	$conversation->reciever_id = $user_id;
    	$conversation->message = 'Proposal Accepted! Lets talk about my work. ';
    	$conversation->files = $img_2 ?? '';
    	$conversation->save();
    	$perposal = Proposal::where('id',$id)->first();
        $seller_contact = User::where('id',$perposal->provider_id)->first();
        
        $this->send_sms(['contacts'=>$seller_contact->contacts , 'message'=>'Proposal Accepted! Lets talk about my work. ']);
		$this->send_message_to_user(['id'=>$user_id,'file_type'=>$type ?? '', 'message'=>'Proposal Accepted! Lets talk about my work. ', 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'','files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);
       
        $username = User::where('id',$user_id)->first();
        $slug = str_replace(" ","-",$username->name);
        return redirect('/Client/Conversation/'.$user_id.'/'.$slug.' ')->with('message','Proposal Accepted');
    }



    public function inbox(){

    	$ConversationPoint = Conversation::select('reciever_id')->where('sender_id',Auth::user()->id)->groupBy('reciever_id')->orderBy('id','DESC')->get();

        // /dd($ConversationPoint);

     	$conversation_count = Conversation::where('sender_id',Auth::user()->id)
    	->count();

        $unread_messages= Conversation::where('reciever_id',Auth::user()->id)->where('is_seen','unread')->count();

    	  
    	return view('Client.indox',compact('ConversationPoint','conversation_count','unread_messages'));
    }


    public function conversation($provider_id,$name){



    	$ConversationPoint = Conversation::select('reciever_id')->where('sender_id',Auth::user()->id)->groupBy('reciever_id')->orderBy('id','DESC')->get();

            $category = Services::where('is_active',1)->get();
        
    	$last_message = Conversation::where('sender_id',Auth::user()->id)
    	->orwhere('reciever_id',Auth::user()->id)->orderBy('id','DESC')->first();

    	$conversation_count = ConversationPoint::where('conversation_start_from',Auth::user()->id)
    	->count();

     
          $unread_messages= Conversation::where('reciever_id',Auth::user()->id)->where('is_seen','unread')->count();

        Conversation::where('reciever_id',Auth::user()->id)->update(array(

            'is_seen'=>'read'
        ));
    	
    	$provider_details = User::where('id',$provider_id)->first();



     	return view('Client.Conversation',compact('ConversationPoint','conversation_count','category','last_message','unread_messages','provider_id','provider_details'));
    }

    public function send_message(Request $request,$id){

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

	    $conversation_count = ConversationPoint::where('conversation_start_from',Auth::user()->id)->count();
	    
	   if($conversation_count < 1){
            
     	 $make_conversation = new ConversationPoint;
    	 $make_conversation->conversation_start_from = Auth::user()->id;
         $make_conversation->reciever_id = $id;
     	 $make_conversation->save();
     	 $user = User::where('id',$id)->first();
    	   
         Mail::to($user->email)->send(new NewConversation($id));
   
    	}
    	
    	
    	      
     date_default_timezone_set("asia/karachi");

 
   $current_time = date('Y-m-d h:i A');
     $last_seen_chk = ActiveStatus::where('user_id',Auth::user()->id)->count();
          $last_seen = ActiveStatus::where('user_id',Auth::user()->id)->first();

    if($last_seen_chk > 0){
      ActiveStatus::where('user_id',Auth::user()->id)->update(array(
     'last_seen'=>$current_time,
     ));
    }else{
     $last_seen = new ActiveStatus;
     $last_seen->user_id = Auth::user()->id;
     $last_seen->last_seen =  $current_time;
    $last_seen->save();
    }
    	 

        $conversation = new Conversation;
    	$conversation->sender_id = Auth::user()->id;
    	$conversation->reciever_id = $id;
    	$conversation->message = $request->message;
    	$conversation->files = $img_2 ?? '';
    	$conversation->save();

		 $this->send_message_to_user(['id'=>$id,'file_type'=>$type ?? '', 'message'=>$request->message, 'order_no'=>'','contract_slug'=>'','file_type'=>$type ?? '', 'link'=>'','files'=>$img_2 ?? '','link_for_privider'=>'','notification_for'=>'message']);
       

		$provider_details = User::where('id',$id)->first();
		$name_slug = str_replace(" ", "-", $provider_details->name);

		 
		return redirect('Client/Conversation/'.$id.'/'.$name_slug.' ');
		 

		 
    }



        public function Contracts(){

    	$Contracts = Contract::where('buyer_id',Auth::user()->id)->get();
    	$Contracts_count = Contract::where('buyer_id',Auth::user()->id)->count();
    	//dd($Contracts->buyer_details);

    	$cmplt_contract = Contract::where('buyer_id',Auth::user()->id)->where('status','completed')->get();
    	$cmplt_contract_count = Contract::where('buyer_id',Auth::user()->id)->where('status','completed')->count();
    	

    	$cancelled_contract = Contract::where('buyer_id',Auth::user()->id)->where('status','cancelled')->get();
    	$cancelled_contract_count = Contract::where('buyer_id',Auth::user()->id)->where('status','cancelled')->count();
    	

    	$pending_contract = Contract::where('buyer_id',Auth::user()->id)->where('status','waiting_for_provider_approval')->get();
    	$pending_contract_count = Contract::where('buyer_id',Auth::user()->id)->where('status','waiting_for_provider_approval')->count();
    	
    	return view('Client.Contracts',compact('Contracts','Contracts_count','cmplt_contract','cmplt_contract_count','cancelled_contract','cancelled_contract_count','pending_contract','pending_contract_count'));
    }


    public function cancel_contract_approval($id){

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



        $this->send_sms(['contacts'=>$seller_name->contacts ,  'message'=>$seller_name->name." Your contract status has been changed to cancelled. "]);
         $this->send_notification_to_user(['user_id'=>$contract_details->sellers_id, 'message'=>$seller_name->name." Your contract status has been changed to cancelled. ", 'url'=>'/Providers/Contract-details'.$slug.'/'.$contract_details->order_no]);
        Mail::to($buyer_name->email)->send(new DisputeAccept($id));   
    	return redirect()->back();
    }
    
    public function decline_dispute(Request $request,$id)
    {
        Contract::where('id',$id)->update(array(
            
            'status' => 'active'
            ));;
    $CancelRequest = new CancelRequest;
    $CancelRequest->reciever_id = $id;
   
    $contract_details = Contract::where('id',$id)->first();
     $buyer_name = User::where('id',$contract_details->buyer_id)->first();
     $seller_name = User::where('id',$contract_details->sellers_id)->first();
     $slug = str_replace("","-",$contract_details->contract_name);

     
     $this->send_sms(['contacts'=>$seller_name->contacts , 'message'=>$buyer_name->name." Has decline the dispute. "]);
    $this->send_notification_to_user(['user_id'=>$contract_details->sellers_id, 'message'=>$buyer_name->name." Has decline the dispute. ", 'url'=>'/Providers/Contract-details'.$slug.'/'.$contract_details->order_no]);

         
       Mail::to($buyer_name->email)->send(new ContractDispute($id));    
        return redirect()->back();    
        
    }


    public function gig_details($id,$slug){

    	 $my_gig = Gig::where('id',$id)->first();

          $GigClicks = new GigClicks;
              $GigClicks->click_by = Auth::user()->id;
            $GigClicks->gig_id = $id;
            $GigClicks->save();
    	return view('Client.gig_details',compact('my_gig','id'));
    }



    public function make_contract(){


    	$provider_contact = Conversation::select('reciever_id')->where('sender_id',Auth::user()->id)->groupBy('reciever_id')->orderBy('id','DESC')->get();
    	$contract_type = Services::where('is_active',1)->get();
       
        
    
        return view('Client.make_contract',compact('provider_contact','contract_type'));
    }
    
    public function gig_reference($id)
    {   
       
            $gig_details = Gig::where('user_id',$id)->get();
        
        
        return response()->json([
            'res'=>$gig_details,
              
            ]);
    }


    public function contract_save(Request $request){
       
       // dd($request->all());
    	$result = array();
		$imagedata = base64_decode($request->image_field);
		$filename = md5(date("dmYhisA"));
		$file_name = '/doc_signs/'.$filename.'.png';
		file_put_contents('.'.$file_name,$imagedata);
		$result['status'] = 1;
		$result['file_name'] = $file_name;
	    json_encode($result);
        
     

    	$order_no = rand();
    	$carbon = Carbon::now();
    	$contract = new Contract;
    	$contract->contract_name = $request->contract_name;
    	$contract->contract_type = $request->contract_type;
    	$contract->contract_amount = $request->amont;
    	$contract->start_date = $request->strtdate;
    	$contract->end_date = $request->enddate;
    	$contract->sellers_id = $request->sellers_id;
    	$contract->time_duration = $request->time_duration;
    	$contract->contract_description = $request->contract_description;
    	$contract->gig = $request->gig;
    	$contract->order_no = $order_no;
    	$contract->due_on = $carbon;
    	$contract->buyer_id = Auth::user()->id;
    	$contract->save();

    	$images = new Images;

    	$images->entity_type = 'App\Contract';
    	$images->entity_id = $contract->id;
    	$images->file_name = $filename.'.png';
     	$images->file_path = 'doc_signs';
     	$images->signature_type = 'Buyer Signature';
    	
    	//dd('s');
    	$images->save();

        $contract_details = Contract::where('order_no',$order_no)->first();
        $slug = str_replace("","-",$contract_details->contract_name);
        $user = User::find($request->sellers_id);
        $user_contact = User::where('id',$request->sellers_id)->first();
        //$this->send_sms(['contacts'=>$user_contact->contacts , 'message'=>" Good news for you. ".Auth::user()->name." Signed a contract with you." ]);
        $this->send_notification_to_user(['user_id'=>$request->sellers_id, 'message'=>" Good news for you. ".Auth::user()->name." Signed a contract with you. ", 'url'=>'/Providers/Contract-details/'.$slug.'/'.$order_no]);
        
            try{
               
                  Mail::to($user->email)->send(new NewContract($contract->id));
   
            }
            catch(\Swift_TransportException $e){

                header( "refresh:5;url=./login" );

                //dd("Your Registration is successfull ! but welcome email is not sent because your webmaster not updated the mail settings in admin dashboard ! Kindly go back and login");

            }
      // return $request->email;
       // return redirect('/Providers/Make-Contact');
    	return redirect('/Client/Contracts');
    }


    public function contract_payment($user_id,$contract_id){


        return view('Client.payment_form',compact('contract_id','user_id'));

    }

          public function contract_payment_save(Request $request,$user_id,$contract_id){
                
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
        $AmountStatus->provider_id = $user_id;
        $AmountStatus->contract_id = $contract_id;
        $AmountStatus->amount = $request->amount;
        $AmountStatus->save();
        
        
        
        $generate_invoice = new Invoice;
        $generate_invoice->user_id = $user_id;
        $generate_invoice->buyer_id = Auth::user()->id;
        $generate_invoice->payment_method = "Stripe";
        $generate_invoice->amount = $request->amount;
        $generate_invoice->contract_id = $contract_id;
        $generate_invoice->save();
        
        Contract::where('id',$contract_id)->update(array(
            
            'status'=>'active',
            'start_date'=> date("Y-m-d"),
            
        ));

        $contrac_details = Contract::where('id',$contract_id)->first();
        $slug = str_replace(" ", "-", $contrac_details->contract_name); 
        $user_contact = User::where('id',$user_id)->first();
          $this->send_sms(['contacts'=>$user_contact->contacts , 'message'=>" Good news for you. ".Auth::user()->name." Release Your Payment." ]);
        $this->send_notification_to_user(['user_id'=>$user_id, 'message'=>" Good news for you. ".Auth::user()->name." Release your payment now you can start working. ", 'url'=>'/Providers/Contract-details/'.$slug.'/'.$contrac_details->order_no]);

        return redirect('/Client/Contract-details/'.$slug.'/'.$contrac_details->order_no.' ');
        
         
        
        
            
    }




    public function contract_details(Request $req,$slug,$order_no){
       
    	$contrac_details = Contract::where('order_no',$order_no)->first();
        
        
     //dd($reson_dispute);
    	return view('Client.contract_details',compact('contrac_details'));
    }

     public function Resolution($id,$slug){

    
    	return view('Client.resolution',compact('id'));

    }

      public function request_cancel(Request $request,$id,$sellers_id){

    	$CancelRequest = new CancelRequest;
    	$CancelRequest->req_from = Auth::user()->id;
    	$CancelRequest->contract_id = $id;
        $CancelRequest->reciever_id = $sellers_id;
        
    	$CancelRequest->description = $request->desc;
    	$CancelRequest->save();

    	$contract = Contract::where('id',$id)->first();

    	Contract::where('id',$id)->update(array(

    		'status'=>'cancel_req',
    	));
    	$contract_slug = str_replace(" ","-",$contract->contract_name);
                
       //$contract_details = Contract::where('id',$id)->first();
       $buyer_name = User::where('id',$contract->buyer_id)->first();
      // dd($buyer_name->email);
      $name = User::where('id',$sellers_id)->first();
		  
        $this->send_sms(['contacts'=>$name->contacts , 'message'=>$buyer_name->name." Open dispute in your contract. "]);
         $this->send_notification_to_user(['user_id'=>$contract->sellers_id, 'message'=>$buyer_name->name." Open dispute in your contract. ", 'url'=>'/Providers/Contract-details/'.$contract_slug.'/'.$contract->order_no]);
         Mail::to($name->email)->send(new CancelContract($id));
    	return redirect('Client/Contract-details/'.$contract_slug.'/'.$contract->order_no.' ');
    		
    }

    public function complete_contract_req(Request $request,$id){
        
          $contract = Contract::find($id);
         
        if($request->amount != null){
            
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
            
        
       $privious_paid = AmountStatus::where('contract_id',$id)->first();

        Contract::where('id',$id)->update(array(

            'status'=>'completed',
            'tip_amount'=>$request->amount

         ));
        
        AmountStatus::where('contract_id',$id)->update(array(
            
            'status'=>'pending_clearance',
            'amount'=>$privious_paid->amount + $request->amount

        ));
         	   
       $contract_details = Contract::where('id',$id)->first();
       $contract_slug = str_replace(" ","-",$contract_details->contract_name);
             
       $name = User::where('id',$contract_details->sellers_id)->first();
		  
        $this->send_sms(['contacts'=>$name->contacts , 'message'=>"Congratulations. ".Auth::user()->name." Your Contract Is Completed. "]); 
        $this->send_notification_to_user(['user_id'=>$contract_details->sellers_id, 'message'=>"Congratulations. ".Auth::user()->name." Your Contract Is Completed. ", 'url'=>'/Providers/'.$contract_slug.'/'.$contract_details->order_no]);
                  
        $provider_details = User::where('id',$contract->sellers_id)->first();

       
        $check_is_referal = Invitation::where('email',$provider_details->email)->count();
      

        if($check_is_referal > 0){
    
        
         $check_refferd_by = Invitation::where('email',$provider_details->email)->first();
         $check_refferd_details = User::where('id',$check_refferd_by->invite_from)->first();
       
             $amounts = Amount::first();


            $chk_frist_job = Invoice::where('user_id',$provider_details->id)->count();
            
            if($chk_frist_job == 1){
                 $contract_details = Contract::where('id',$id)->first();
      
                User::where('id',$provider_details->id)->update(array(
                    'widthdrwal_amount' => $provider_details->widthdrwal_amount + $amounts->amount + $contract_details->contract_amount + $request->amount ?? '',
                ));

                Invitation::where('email',$provider_details->email)->update(array(
                    'status' => 'job_completed',
                ));


                 User::where('id',$check_refferd_by->id)->update(array(
                    'widthdrwal_amount' =>$check_refferd_details->widthdrwal_amount + $amounts->amount ,
                ));
                
                 $contract_details = Contract::where('id',$id)->first();
       	$contract_slug = str_replace(" ","-",$contract_details->contract_name);
        
                $this->send_notification_to_user(['user_id'=>$check_refferd_by->id, 'message'=>"Your inviter complete their first job and you win $".$amounts->amount." ", 'url'=>'/Providers/'.$contract_slug.'/'.$contract_details->order_no]);


            }

        }
        else{
               // dd('dd');
                 User::where('id',$provider_details->id)->update(array(
                    'widthdrwal_amount' => $provider_details->widthdrwal_amount + $contract_details->contract_amount + $request->amount ?? ''  ,
                ));

                
            }
         }
         else
         {
        Contract::where('id',$id)->update(array(

            'status'=>'completed',
            
        )); 
        
        
              
        $provider_details = User::where('id',$contract->sellers_id)->first();

       
        $check_is_referal = Invitation::where('email',$provider_details->email)->count();
        
        if($check_is_referal > 0){
        
         $check_refferd_by = Invitation::where('email',$provider_details->email)->first();
         $check_refferd_details = User::where('id',$check_refferd_by->invite_from)->first();
       
        }

        if($check_is_referal > 0){

             $amounts = Amount::first();


            $chk_frist_job = Invoice::where('user_id',$provider_details->id)->count();
            
            if($chk_frist_job == 1){

                User::where('id',$provider_details->id)->update(array(
                    'widthdrwal_amount' => $provider_details->widthdrwal_amount + $amounts->amount + $request->amount ?? '',
                ));

                Invitation::where('email',$provider_details->email)->update(array(
                    'status' => 'job_completed',
                ));


                 User::where('id',$check_refferd_by->id)->update(array(
                    'widthdrwal_amount' =>$check_refferd_details->widthdrwal_amount + $amounts->amount ,
                ));
                
                 $contract_details = Contract::where('id',$id)->first();
       	$contract_slug = str_replace(" ","-",$contract_details->contract_name);
        
                $this->send_notification_to_user(['user_id'=>$check_refferd_by->id, 'message'=>"Your inviter complete their first job and you win $".$amounts->amount." ", 'url'=>'/Providers/'.$contract_slug.'/'.$contract_details->order_no]);


            }

        }
        else{
               // dd('dd');
                     $contract_details = Contract::where('id',$id)->first();
                 User::where('id',$provider_details->id)->update(array(
                    'widthdrwal_amount' => $provider_details->widthdrwal_amount +$contract_details->contract_amount + $request->amount ?? '',
                ));

                
            }
        
        
       $contract_details = Contract::where('id',$id)->first();
       	$contract_slug = str_replace(" ","-",$contract_details->contract_name);
       // dd($contract_details);
        $this->send_notification_to_user(['user_id'=>$contract_details->sellers_id, 'message'=>" Good news for you. ".Auth::user()->name." Give you tip. ", 'url'=>'/Providers/Contract-details/'.$contract_slug.'/'.$contract_details->order_no]);

         }



        return redirect()->back();

    }

    public function provider_profile($id,$name){


        $my_services = Gig::where('user_id',$id)->get();
        $my_services_count = Gig::where('user_id',$id)->count();
        
        $provider_details = User::where('id',$id)->first();

        $ProviderDetails = ProviderDetails::where('user_id',$id)->first(); 
        $my_reviews = Reviews::where('provider_id',$id)->get();


        return view('Client.provider_profile',compact('my_services','my_services_count','ProviderDetails','my_reviews','provider_details','id'));
    }


    public function post_review(Request $request,$contract_id,$provider_id){
        
        $contcart = Contract::where('sellers_id',$provider_id)->where('id',$contract_id)->first();
    
        $Reviews = new Reviews;
        
        $Reviews->buyer_id = Auth::user()->id;
        $Reviews->provider_id = (int)$provider_id;
        $Reviews->contract_id  = (int)$contract_id;
        $Reviews->stars  = $request->rating;
        $Reviews->review  = $request->Review;
        $Reviews->save();
        
        
        Contract::where('sellers_id',$provider_id)->where('contract_type',$contcart->contract_type)->where('id',$contract_id)->update(array(
               
               'comment'=>$request->Review,
            
            ));
            
            
        Gig::where('user_id',$provider_id)->where('service_category',$contcart->contract_type)->where('id',$contcart->gig)->update(array(
           
            'gig_rating'=>$request->rating,
            ));
        
        $contract_details = Contract::where('id',$contract_id)->first();
       
       	$contract_slug = str_replace(" ","-",$contract_details->contract_name);
           $user_contact = User::where('id',$provider_id)->first();
           $this->send_sms(['contacts'=>$user_contact->contacts , 'message'=>"Buyer give you <i class='fa fa-star'></i> ".$request->rating."  review" ]);
        $this->send_notification_to_user(['user_id'=>$contract_details->sellers_id, 'message'=>"Buyer give you <i class='fa fa-star'></i> ".$request->rating."  review", 'url'=>'/Providers/Contract-details/'.$contract_slug.'/'.$contract_details->order_no]);

        return redirect()->back();

    }

    public function search_service(Request $request){
        
         $result = Gig::where('status','active');
           
        
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
         
         
        //  elseif($request->has('keywords')){
        //     $result = Gig::where('title','like','%'.$request->keywords.'%')->paginate(10);
        //  }
         
         $result = $result->paginate(10);
         $result_count = $result->count();
          
  
        $country = Locations::where('location_type','Country')->get();
        $categorys = Services::where('is_active',1)->get();
       
       	$gigs = Gig::where('status','active')->where('active_by_admin','1')->orderBy('id','DESC')->paginate(10);
         
         return view('Client.search_result',compact('result','gigs','result_count','country','categorys'));

    }


    // public function file_download($filename){

    // 	    $headers = array(
    //    'Content-Type: application/octet-stream',
    // );
    // #return Response::download($file, $id. '.' .$type, $headers); 
    // return response()->download(asset('/message_media/'.$filename), $headers);

    // }




    public function send_contract_in_conversation(Request $request,$id){


        $result = array();
        $imagedata = base64_decode($request->image_field);
        $filename = md5(date("dmYhisA"));
        $file_name = '/doc_signs/'.$filename.'.png';
        file_put_contents('.'.$file_name,$imagedata);
        $result['status'] = 1;
        $result['file_name'] = $file_name;
        json_encode($result);


        $order_no = rand();
        $carbon = Carbon::now();
        $contract = new Contract;
        $contract->contract_name = $request->contract_name;
        $contract->contract_type = $request->contract_type;
        $contract->contract_amount = $request->amont;
        $contract->sellers_id = $id;
        $contract->time_duration = $request->time_duration;
        $contract->contract_description = $request->contract_description;
        $contract->order_no = $order_no;
        $contract->due_on = $carbon;
        $contract->gig = $request->gig;
        $contract->buyer_id = Auth::user()->id;
        $contract->contract_send_in = 'conversation';
        $contract->save();

        $images = new Images;

        $images->entity_type = 'App\Contract';
        $images->entity_id = $contract->id;
        $images->file_name = $filename.'.png';
        $images->file_path = 'doc_signs';
        $images->signature_type = 'Buyer Signature';
        
        //dd('s');
        $contract_slug = str_replace(" ","-",$contract->contract_name);
       
        $images->save();
       // $images->id;
       $user_contact = User::where('id',$id)->first();
     ///  $this->send_sms(['contacts'=>$user_contact->contacts , 'message'=>" Good news for you. ".Auth::user()->name." Signed a contract with you." ]);
        $this->send_message_to_user(['id'=>$id,'file_type'=>$type ?? '', 'message'=>' '.Auth::user()->name.' Shared a Signed contract with You  ', 'order_no'=>$order_no,'contract_slug'=>$contract_slug,'file_type'=>$type ?? '', 'link'=>' '.asset('/Client/Contract-details/'.$contract_slug.'/'.$order_no.'').' ','files'=>$img_2 ?? '','link_for_privider'=>' '.asset('/Providers/Contract-details/'.$contract_slug.'/'.$order_no.'').' ','notification_for'=>'message']);
        
 
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
}