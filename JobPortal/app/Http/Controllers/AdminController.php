<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Invoice;
use App\Contract;
use App\BlogDetail;
use App\BlogTag;
use App\Images;
use App\Locations;
use  App\Amount;
Use App\AmountStatus;
use App\SupportInbox;
use App\Payout;
use App\Gig;
use Carbon\Carbon;
 use App\Services;
 use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
 use App\Mail\Active;
 use App\Mail\Suspended;
 use App\ClientRequest;
 use App\Mail\AdminActive;
 use App\Mail\AdminSuspend;
 use App\Mail\SellerPayout;
 use App\Mail\BuyerPayout;
 use App\Mail\RequestAproval;
 


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function __construct(){
   
        $this->middleware('auth');
    }

	public function index(){
        
        $cmplted_contrracts = Contract::where('status','completed')->sum('contract_amount');
        $total_clients = User::where('account_type','buyer')->count();
         $new_clients = User::where('account_type','buyer')->where('created_at',carbon::now())->count();
         
         $rising_sellers = User::where('account_type','seller')->where('is_featured',0)->get();
		return view('Admin.index',compact('cmplted_contrracts','total_clients','new_clients','rising_sellers'));
	}
	
	public function create_blog(){
 	    
 	    $tags = BlogTag::all();
	    return view('Blog.blog_add',compact('tags'));
	}
	
	public function make_tag_form(){
	    
	    return view('Admin.make_tag');
	}
	public function save_tag(Request $request){
	    
	    $check = BlogTag::where('tag_name',$request->name)->count();
	    if($check < 1){
	    $BlogTag = new BlogTag;
	    $BlogTag->tag_name = $request->name;
	    $BlogTag->save();
	    
	    return redirect()->back()->with('status','Tag created');
	    }else{
	        
	         return redirect()->back()->with('status','This Tag Is Aready Exist.');
	  
	    }
	}
	
	
	public function save_create_blog(Request $request){
	    //dd(public_path());
	    $create_blog = new BlogDetail;
	    $create_blog->admin_id = Auth::user()->id;
	    $create_blog->blog_title = $request->blog_title;
	    $create_blog->slug = $request->slug;
	    $create_blog->blog_text = $request->textarea;
	    $create_blog->tag_ids = $request->tags;
	    $create_blog->save();
	    
        if($request->hasFile('image')){

            $attechment  = $request->file('image');
            $imageName =  time().$attechment->getClientOriginalName();
            $attechment->move(public_path('/blog_images/'),$imageName);
            
            $images = new Images;
            $images->entity_type = "App\BlogDetail";
            $images->entity_id = $create_blog->id;
            $images->file_name = $request->image;
            $images->file_path = $imageName;
            $images->save();
        }
	    
	    return redirect('/Blog/All-Blogs')->with('status','Blog Publish Successfuly');
	}
	
	
	public function featured_seller($id){
	    
	    User::where('id',$id)->update(array(
	        
	        'is_featured'=>'1'
	        
	   ));
	   
	   return redirect()->back();
	    
	}
	
	
	public function provider_payout_details($id){
	        
 	     $contract_details = Contract::where('id',$id)->first();
 	    return view('Admin.provider_payout_details',compact('contract_details'));
	    
	}

	public function user_manage(){

		$all_users = User::where('account_type','buyer')->orwhere('account_type','user')->get();
		$active_class = "active gradient-shadow gradient-45deg-green-teal";
		return view('Admin.user_manage',compact('all_users','active_class'));
	}
	
	public function payout(){
	   
	   $contract_detail = Contract::where('status','cancelled')->get();
	     
	   return view('Admin.pay_out',compact('contract_detail'));
	}
	
	public function pay_cmplt($contract_id,$buyer_id,$inovice_id){
	    
	    $inovice_amount = Invoice::where('contract_id',$contract_id)->first();
	    $Payout = new Payout;
	    $Payout->contract_id = $contract_id;
	    $Payout->buyer_id = $buyer_id;
	    $Payout->invoice_id = $inovice_id;
	      $Payout->amount = $inovice_amount->amount;
	  
	    $Payout->save();
	    $contract = Contract::where('id',$contract_id)->first();
	    $name = User::where('id',$contract->buyer_id)->first();
        $this->send_sms(['contacts'=>$name->contacts , 'message'=>$name->name." Your Paymnet has been relased by admin. "]);
	    $this->send_notification_to_user(['user_id'=>$contract->buyer_id , 'message'=>$name->name." Your Paymnet has been relased by admin. ", 'url'=>'/Client/Home']);
 		  Mail::to($name->email)->send(new BuyerPayout($buyer_id)); 
	    return redirect()->back()->with('status','Payout Genereted');
	}
	
	public function payout_details($id){
	    
	    $contract_details = Contract::where('id',$id)->first();
	    return view('Admin.payout_details',compact('contract_details'));
	}

	public function user_details($id){

		$user_details = User::where('id',$id)->first();
		//dd($user_details);
		return view('Admin.user_details',compact('user_details'));
	}

	public function user_suspend($id){


		User::where('id',$id)->update(array(

			'is_active' => "suspend",

		));
        $name = User::where('id',$id)->first();
       Mail::to($name->email)->send(new Suspended($id));
		return redirect()->back()->with('status','User Suspended');
	}

	public function active_user($id){


		User::where('id',$id)->update(array(

			'is_active' => "active",

		));
	$name = User::where('id',$id)->first();
	
       Mail::to($name->email)->send(new Active($id)); 
		return redirect()->back()->with('status','User Activated');
	}
	
	
 



	public function invoice_list(){

		$all_invoice = Invoice::orderBy('id', 'DESC')->get();
		//dd($all_invoice);
		return view('Admin.invoice_list',compact('all_invoice'));

	}

	public function invoice_details($id){

		$invoice_details = Invoice::where('id',$id)->first();
		return view('Admin.invoice_details',compact('invoice_details'));
	}

	public function customor_support_front($id = null,$user_slug = null){
		
 		$conversation = SupportInbox::select('user_id')->orderBy('id','desc')->groupBy('user_id')->get();
		 $conversation_count = SupportInbox::select('user_id')->orderBy('id','desc')->groupBy('user_id')->count();

		 

		return view('Admin.support_chat',compact('conversation','conversation_count','id'));
	}

	public function send_support_message(Request $request, $id){

		//dd($request->all());
		    $conversation = new SupportInbox;

        if($request->hasFile('files')){

       $attechment  = $request->file('files');

         $img_2 =  time().$attechment->getClientOriginalName();
        $attechment->move(public_path('/message_media'),$img_2);
        
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


        $conversation->user_id = Auth::user()->id;
        $conversation->message = $request->message;
        $conversation->files = $img_2 ?? '';
        $conversation->save();
        
        $this->send_message_to_admin(['id'=>$id ,'file_type'=>$type ?? '', 'message'=>$request->message , 'link'=>'na','files'=>$img_2 ?? '','notification_for'=>'message']);
        

	}

	public function all_admins(){

		$all_admins = User::where('account_type','admin')->get();
		return view('Admin.admins_list',compact('all_admins'));
	}

	public function add_admin(){


		return view('Admin.add_admin');
	}

	public function save_admin(Request $request){

		$admin = new User;
		$admin->name = $request->name;
		$admin->email = $request->email;
		$admin->password = Hash::make($request->password);
		$admin->profile_image = asset('/profile_images/avatar.PNG');
		$admin->account_type = 'admin';
		$admin->save();

		return redirect()->back()->with('status','New Admin Activated');

	}

	public function suspend($id){
       
		User::where('id',$id)->update(array(

			'is_active' => "suspend"

		));
		//$id->logout();
		$name = User::where('id',$id)->first();
        Mail::to($name->email)->send(new AdminSuspend($id));
	   return redirect()->back()->with('status','Admin Deactivated');

	}

	public function active_admin($id){

		User::where('id',$id)->update(array(

			'is_active' => "active"

		));
		$name = User::where('id',$id)->first();
        Mail::to($name->email)->send(new AdminActive($id));
		return redirect()->back()->with('status','Admin Activated');


	}
	
	public function cancel_contract($id){
	     
	   
	    Contract::where('id',$id)->update(array(

			'status' => "cancelled",
			 'cancel_by_admin'=>1

		));
		
		
		AmountStatus::where('contract_id',$id)->update(array(
    	    
    	    'status'=>'Contrcat_cancel'
    	    ));
    	    
    	 
	       $contract_details = Contract::where('id',$id)->first();
    	   	$contract_slug = str_replace(" ","-",$contract_details->contract_name);
    	     $contract_detail = Contract::where('id',$id)->first();
    	   
    	   $this->send_notification_to_user(['user_id'=>$contract_detail->buyer_id, 'message'=>"Admin has cancel the contract" , 'url'=>'/Client/Contract-details/'.$contract_slug.'/'.$contract_details->order_no]);
	      
	      $this->send_notification_to_user(['user_id'=>$contract_detail->sellers_id, 'message'=>"Admin has cancel the contract" , 'url'=>'/Providers/Contract-details/'.$contract_slug.'/'.$contract_details->order_no]);

    	   	
	    	return redirect()->back()->with('status','Contract Cancelled');

	}

	public function all_blogs(){

		$all_blogs = BlogDetail::all();
		$blogs_count = BlogDetail::all()->count();
		return view('Blog.blogs',compact('all_blogs','blogs_count'));
	}

	public function blog_edit($id){

		$blog = BlogDetail::where('id',$id)->first();
		$tags = BlogTag::all();
		return view('Blog.blog_edit',compact('blog','tags'));
	}

	public function edit_save(Request $request,$id){

	    if($request->hasFile('file')){

       $attechment  = $request->file('file');


        $imageName =  time().$attechment->getClientOriginalName();
        $attechment->move(public_path('blog_images'),$imageName);
 
		}else
		{

			$old_image = Images::where('entity_id',$id)->first();
			$imageName = $old_image->file_path;

		}
		BlogDetail::where('id',$id)->update(array(

			'blog_title' => $request->title,
			'slug' => $request->slug,
			'blog_text' => $request->textarea,
			'tag_ids' => $request->tags
		
		));

		Images::where('entity_id',$id)->update(array(

			'file_name' => $imageName,
			'file_path' =>$imageName
		));


		return redirect()->back()->with('status','Blog Updated');
	}

	public function blog_active($id){

		BlogDetail::where('id',$id)->update(array(

			'is_active' => 'active',
		));

		return redirect()->back()->with('status','Blog Activated');

	}

		public function blog_deactive($id){

		BlogDetail::where('id',$id)->update(array(

			'is_active' => 'deactivate',
		));

		return redirect()->back()->with('status','Blog Deactivate');

	}


	public function Notification(Request $request){
 			
 			// dd($request->all());
 			
 		 $all_users = User::whereIn('account_type',['seller','buyer']); //->orWhere('account_type','buyer')
 	    
 	   
 		 if($request->has('selectbox1_selectedvalue')){
       
        	$citys = Locations::where('parent_locations',$request->selectbox1_selectedvalue)->where('location_type','City')->get();
	        
	        //dd($citys);
	        return response()->json(['city_filtered' => $citys]);
         

 		 }
 		 
 		 if($request->has('citys')){
           
            $all_users =  User::where('city',$request->citys);
          
 		 }
 		 
 		 if($request->has('Category')){
           
            $all_users =  User::where('category',$request->Category);
          
 		 }
      $all_users =$all_users->where('category',$request->Category)->orWhere('city',$request->citys)->get();
 	     $all_users_count = User::where('category',$request->Category)->orWhere('city',$request->citys)->count();
 	    
 	   	$countrysss = Locations::where('location_type','country')->get();
		 //dd($country);
		$city = Locations::where('location_type','City')->get();
		return view('Admin.noti',compact('countrysss','city','request','users','all_users','all_users_count'));
 	    
    	}
    	
    	public function send_notification(Request $request,$id){
    	    
    	    $user_details = User::where('id',$id)->get();
     	 $this->send_notification_to_user(['user_id'=>$id, 'message'=>$request->heading."<br> ".$request->noti_body." ", 'url'=>'#']);
            
            foreach($user_details as $user_detail){
    	    Mail::to($user_detail->email)->send(new Active($id)); 
            }
    	}
	
	
		 
 		 public function pending_payment(){
 		     
 		     $completed_contracts = Contract::where('status','completed')->orderBy('id','DESC')->paginate('10'); 
 		      $completed_contracts_count = Contract::where('status','completed')->count(); 
 		    
 		     return view('Admin.pending_payment_list',compact('completed_contracts','completed_contracts_count'));
 		 }
 		 
 		 
 		 public function pay_clear($id){
 		     
 		     AmountStatus::where('contract_id',$id)->update(array(
 		         
 		         'status'=>'available'
 		      ));
 		  $contract = Contract::where('id',$id)->first();
 		  $name = User::where('id',$contract->sellers_id)->first();
		  
		 $this->send_sms(['contacts'=>$name->contacts , 'message'=>$name->name." Your Paymnet has been relased by admin. "]);
 		$this->send_notification_to_user(['user_id'=>$contract->sellers_id , 'message'=>$name->name." Your Paymnet has been relased by admin. ", 'url'=>'/Providers/Earnings']);
 		  Mail::to($name->email)->send(new SellerPayout($id)); 
 		    return redirect()->back()->with('status','Payment Completed');
 		 }

	public function filter_user(Request $request,$id = null){

		if($request->has('countrys')){

			 $users = User::where('country',$request->countrys)->get();
			  return  response()->json(['likes_count' => $users]);
         
		}
 

	}


	public function referal_bonus(Request $reqeust){
	    
	    
		$amount = Amount::first();
		return view('Admin.referal_bonus',compact('amount'));
	}

	public function app_setting(Request $request){
        
         if($request->setting == "set_refer_amount"){
            
           	Amount::where('id',1)->update(array(

			'amount'=>$request->amount,
		));

		return redirect()->back()->with('status','New Amount Set For Referal Bonus');

        }
        
        if($request->setting == "set_bid_amount"){
            
            
       Amount::where('id',1)->update(array(

			'bid_amount'=>$request->bid_amount,
		));

		return redirect()->back()->with('statuss','New Amount Set For Biding');

        }
	    
	    
	    if($request->setting == "change_currency"){
	        
	          $image_url = null;
	     if($request->type == "Dollar"){
	        $image_url = 'dollar3.png';
	        $symbol = "$";
	         
	     }
	     elseif($request->type == "Danish krone"){
	        $image_url = 'Danish-Krone-514.png'; 
	        $symbol = "Kr"; 
	     }
	     elseif($request->type == "Singapore dollar"){
	        $image_url = 'singapore.png'; 
	         $symbol = "S$";
	     }
	     
	         Amount::where('id',1)->update(array(
	       
	       'currency_type' => $request->type,
	       'currency_symbol'=>$symbol,
	       'currency_img'=>$image_url,
	     
	       ));
	       
	       return redirect()->back()->with('statusss','Currency Set Succesfully');
	        
	    }
	    
	    if($request->setting == "change_site_logo"){
 	        if($request->hasFile('lofo_file')){
                  
             $attechment  = $request->file('lofo_file');
              $img_2 =  time().$attechment->getClientOriginalName();
            $attechment->move(public_path('site_logo'),$img_2);
                
             $image_name = explode('.', $img_2);
    	    $extention = end($image_name);
    	    $extention = Str::lower($extention);
    	    
    	    if($extention == "png" || $extention == "jpg" || $extention == "jpeg"){
    	        
    	      Amount::where('id',1)->update(array(
    	          
    	          'site_logo'=>$img_2 ??''
	            ));
    	         return redirect()->back()->with('statusss','Site Logo Updated');
    	    }else{
    	        
    	         return redirect()->back()->with('statusss','File Extension Not Supported');
    	        
    	    }

            
	         }else{
	             
	             return redirect()->back()->with('statusss','Select Logo File From Your Device Before Proceeding.');
	             
	         }
	        
	   }
 	   
	   if($request->setting == "socail_login_setting"){
	       
 	       Amount::where('id',1)->update(array(
    	          
    	          'social_is_active'=>$request->enable
	            ));
	       return redirect()->back()->with('statusss','Social Login Active Status Has Been Changed.');
	             
	       
	   }
	   
	    if($request->setting == "add_service"){
	       
 	       $services = new Services();
 	       $services->name = $request->name;
 	       $services->iconns = '<i class="fa fa-code"></i>';
 	       $services->is_active = '1';
 	       $services->save();
	       return redirect()->back()->with('statussss','Service Added Successfully');
	             
	       
	   }
	   
	   

	}
	 
	public function delete_service($id)
	{
	    $service = Services::where('id',$id)->update(array(
	        'is_active' => 0
	        ));
	    
	    return redirect()->back()->with('msg','Service Deleted');
	} 
	
	public function service_edit($id)
	{
	    $service = Services::where('id',$id)->first();
	    return view('Admin.edit_service',compact('service'));
	}
	
	public function edit_service(Request $request, $id)
	{
	    $service = Services::where('id',$id)->update(array(
	        'name'=>$request->name,
	        
	        ));
	        
	        return redirect()->back()->with('msgg','Service Updated');
	}
	 
	public function gig_aproval()
	
	{
	    
	    return view('Admin.gig_approval');
	    
	}
	
	public function gig_active_by_admin($id)
	{
	    $gig = Gig::where('id',$id)->update(array(
	        'active_by_admin'=>'1',
	        ));
	        
	    $user_id = Gig::where('id',$id)->first();
	    $name = User::where('id',$user_id->user_id)->first();
	   	$this->send_notification_to_user(['user_id'=>$user_id->user_id , 'message'=>$name->name." Your Gig has been approved by admin. ", 'url'=>'/Providers/My-Services']);
	        
	        return redirect()->back()->with('message','Gig Aproved');
	    
	}
	
	public function gig_details($id)
	{
	    $gig = Gig::where('id',$id)->first();
	    
	    return view('Admin.gig_details',compact('gig'));
	}
	
	
	public function all_request(){
	    
	    $all_requests =  ClientRequest::where('status','pending')->get();
	   
        $all_request_count =  ClientRequest::where('status','pending')->count();

	    return view('Admin.all_requests',compact('all_requests','all_request_count'));
	}
	
	public function gig_suspend($id)
	{
	    Gig::where('id',$id)->update(array(
	        'active_by_admin' => 2,
	        
	        ));
	        
	        $user_id = Gig::where('id',$id)->first();
	    $name = User::where('id',$user_id->user_id)->first();
	   	$this->send_notification_to_user(['user_id'=>$user_id->user_id , 'message'=>$name->name." Your Gig has been Suspended by admin. ", 'url'=>'/Providers/My-Services']);
	        
	        return redirect()->back()->with('messagess','Gig Suspended');
	    
	}
	
	public function all_gigs()
	{
	    return view('Admin.all_gigs');
	}
	
		public function all_services()
	{
	    return view('Admin.all_services');
	}
	
	public function accepts_req($id){
	    
	    ClientRequest::where('id',$id)->update(array(
	      'status'=>'Active'  
	   ));
	   
	   $requester = ClientRequest::where('id',$id)->first();
	   $name = User::where('id',$requester->client_id)->first();
		  
		 $this->send_sms(['contacts'=>$name->contacts , 'message'=>$name->name." Your Request Approved By Admin. "]);
	   $this->send_notification_to_user(['user_id'=>$requester->client_id, 'message'=>$name->name." Your Request Approved By Admin. ", 'url'=>'/Client/All-Request']);
        Mail::to($name->email)->send(new RequestAproval($id));
	   return redirect()->back()->with('message','Request Apporved');
	}


}
