<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CompanyDetails;
use App\Services;
use App\BlogDetail;
use App\BlogTag;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Stripe\Charge;
use App;
use App\Contract;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Gig;
use App\Locations;

class HomeController extends Controller
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
     
    public function map($id){
        
        return view('map',compact('id'));
    }
    
    public function pin_map(Request $request,$id){
        
        
        Gig::where('id',$id)->update(array(
            
            'lat'=>$request->lat,
            'lon'=>$request->lag,
            
            ));
            
        return redirect()->back()->with('message','Map pinned successfuly.');
        
    }
    
    public function show_map($id){
        
        $map = Gig::where('id',$id)->first();
         $map_count = Gig::where('id',$id)->count();
        
        return view('gig_map',compact('map','map_count'));
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
    public function index()
    {   
        //  dd(Auth::user()->phone_confirm,Auth::user()->is_account_setup_completed);
         if(Auth::user()->phone_confirm == 0)
        {
            return view('Account_setup.number_confirmation');
        }
        
       
        if(Auth::user()->is_account_setup_completed == 0 && Auth::user()->phone_confirm == 1){


         return redirect('Account-Setup');
        }
        
         if(Auth::user()->is_account_setup_completed == 1 && Auth::user()->phone_confirm == 1){
            if(Auth::user()->account_type == "seller"){
                return redirect('/Providers/Home');
             }else{
                return redirect('/Client/Home');
             }
         }
   
    }
    
    public function number_confirm(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->where('confirmation_code',$request->confirm)->count();
        
        if($user > 0)
        {
            User::where('id',Auth::user()->id)->update(array(
                
                'confirmation_code'=> null,
                'phone_confirm' => 1
                
                ));
           return redirect('User/');
        }
        else
        {
            return redirect()->back();
        }
    }
   
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
        dd($result_count);
  
         
         return view('layouts.search_result',compact('result','result_count','country','categorys'));

    }
     public function cronjob_update_contract_status(){
    	 
    	 $Contracts = Contract::where('status','active')->get();
    	 foreach($Contracts as $Contract){
    	 $date = $Contract->time_duration + date("j");
    	  	dd($date);	 
    	 if($date == date("j")){

    	  	Contract::where('id',$Contract->id)->update(array(
    	  			'status'=>'late',
    	  	));

    	  	}


    	}
    	
    }


      public function changeLanguage($lang){
        App::setLocale($lang);
         Session::put('locale', $lang);
        // dd($lang,__(('Language')),__(('Personal_Balance')),Session::has('locale'));
        return redirect()->back();

    }


    public function client_details_save(Request $request){
           
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
           
           $CompanyDetails = new CompanyDetails; 

           if($request->radio == "for_company"){

            $CompanyDetails->client_id = Auth::user()->id;
           $CompanyDetails->has_company = 'company';
           $CompanyDetails->total_amount_of_employer = $request->total_employer;
           $CompanyDetails->from_which_department_you_from = $request->department_name;
           $CompanyDetails->bussines_number = $request->bussines_num;
           $CompanyDetails->company_intro = $request->company_adres;
           $CompanyDetails->company_adres = $request->company_intro;
           $CompanyDetails->cvr_number = $request->cvr_number;
           $CompanyDetails->save();

           User::where('id',Auth::user()->id)->update(array(

            'account_type'=>'buyer',
            'is_account_setup_completed'=>1,
            'step_1'=>'completed',
            'step_2'=>'completed',
        	'country' => $country->id ?? '',
            'city' => $city->id ?? '',
            'ip_addres' => $request->ip_addres,
           'region' => $request->region,
           'postal' => $request->postal,
          'timezone' => $request->timezone,
          'internet' => $request->internet,

           ));

           return redirect('/Client');

       }else{

            $CompanyDetails->client_id = Auth::user()->id;
           $CompanyDetails->has_company = 'solo';     
           $CompanyDetails->home_addres1 =  $request->home_adrs_1;
           $CompanyDetails->home_addres2 = $request->home_adrs_2;
           $CompanyDetails->personal_phone = $request->personal_phone;
           $CompanyDetails->save();

              User::where('id',Auth::user()->id)->update(array(

            'account_type'=>'buyer',
            'is_account_setup_completed'=>1,
            'step_1'=>'completed',
            'step_2'=>'completed',

           ));

           return redirect('/Client');

       }
    }


    public function blogss(){

      $all_blogs = BlogDetail::where('is_active','active')->get();
    $blogs_count = BlogDetail::where('is_active','active')->count();
    
      return view('Blog.blog_show',compact('all_blogs','blogs_count'));
    }

    public function blog_detail($id,$slug){

   $all_blogs = BlogDetail::where('id',$id)->first();
   
      return view('Blog.blog_details_for_guest',compact('all_blogs'));
    }


        public function payment_test(Request $request){

               $stripe = Stripe::make(env('STRIPE_SECRET'));

                     //dd($stripe,env('STRIPE_SECRET'));
    
                $token = $stripe->tokens()->create([
                'card' => [
                    'number'    => $request->get('card_no'),
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
            
    }
    
    // public function Active()
    // {
        
    //     return view('/email/Active');
    // }
    
}
