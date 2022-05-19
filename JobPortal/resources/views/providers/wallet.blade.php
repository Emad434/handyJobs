 @extends('setup_header.providers_header')
    @section('title', 'Wallet')  
 @section('content')
     </header>
     
     @php
      $available = App\User::where('id',Auth::user()->id)->first();
     $currency_type = App\Amount::where('currency_type','!=',null)->first();
     $user_for_bidding = App\Proposal::where('provider_id',Auth::user()->id)->where('status','Active')->sum('bid_amount');
    @endphp
     
   <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">My Wallet</h3>
          </div>
          
        </div>
       </section>
 	<section class="section section-md text-center">
 	     <div class="container">
 	         
 	    <h3 class="text-left">{{ __(('Wallet Details')) }}</h3>
 	    <button class="button button-lg button-primary-outline" style="border-radius:40px;" data-toggle="modal" data-target="#exampleModal" style="margin-top:-65px; margin-left:780px;">Recharge Wallet</button>
  	    
  	       <div class="row">
  	        
            
            <div class="card mx-auto col-sm-6">
               <div class="card-body">
               <h4>{{ __(('Used For Bidding')) }}</h4>  
                   <h5><img src="{{asset('/message_media')}}/{{$currency_type->currency_img}}"style="width:20px;"> {{$user_for_bidding}}</h5>
              </div>
           </div>
            <div class="card mx-auto col-sm-6">
              <div class="card-body">
                <h4>{{ __(('Wallet Amount')) }}</h4>  
                
                   <h5><img src="{{asset('/message_media')}}/{{$currency_type->currency_img}}"style="width:20px;"> {{$available->widthdrwal_amount}}</h5>
              </div>
            </div>
             
            
            </div>
            
              <div class="row col-sm-12">
                   <h4>Wallet History</h4>
                
                 <h5 class="col-sm-6">
                 <select class="form-control" id="months" onchange="abbc_abbc__nn()">
                     <option value="01">{{ __(('All History'))}}</option>
                      <option value="02">{{ __(('Used For Bidding')) }}</option>
                     <option value="03">{{ __(('Wallet Amount')) }}</option>
                      <option value="04">{{ __(('Recharge History')) }}</option>
                     
                 </select>
                 </h5>
            </div>
       </div>
              

        </div>          
      <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Wallet Recharge.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <div class="container">
               <div class="leftorde br">
                    <div class="row"> 
                        <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                    </div>
              </div>
                    
                    
            <form method="post" action="/Providers/recharge_wallet"> 
                    	@csrf
                     <div class="container col-sm-12">
                        
                        <div class="row">
                     	<input placeholder="Cardholder's name:" class="form-control col-6"name="holder_name" Required> 
                    	
                     	<input placeholder="Card Number:" class="form-control col-6"name="card_no" Required>
                    	</div>
                        <div class="row">
                           <input placeholder="Expiry Month:" class="form-control col-6"name="expiry_month" Required>  
                        <input placeholder="Expiry Year:" class="form-control col-6" name="expiry_year" Required> 
                        </div>
                              <div class="row">
                          <input id="cvv" name="cvv"class="form-control col-6" placeholder="CVV:" Required>  
                              <input type="number" value=""class="form-control col-6" placeholder="Amount:" name="amount" Required> 
                         </div>
					  </div> 
					  <br>
					  <div class="col-12"><button class="btn btn-primary">Charge Wallet</button></div>
                    </form>
       
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>        
              
 </section>
 
 
 @endsection