 @extends('setup_header.providers_header')
 @section('title', 'Bank Details')  
 @section('content')


     <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Bank Details</h3>
          </div>
        </div>
       </section>
        
        @php
             $country = App\Locations::where('id',Auth::user()->country)->where('location_type','Country')->first();
            $city = App\Locations::where('parent_locations',Auth::user()->city)->where('location_type','City')->first();
            
        @endphp
  <center>
  <br>
  <br>
  

<section class="card section section-md text-center col-sm-8">
       @if (session('message'))
                        <span class="badge badge-primary">
                            {{ session('message') }}
                        </span>
                    @endif
        <div class="container">
          <div class="text-center">
            <h2>Enter your bank details</h2>
           </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">

            	<form method="post" action="/Providers/bank_detail_save" enctype="multipart/form-data">
				@csrf
					<div class="container col-sm-12">
            	     <div class="row">
                  <div class="col-sm-12">
                  <label class="form-label-outside" for="general-information-job-category">{{ __(('Full Name')) }}</label>
              	   <input type="text"  placeholder="Full Name" value="{{Auth::user()->name}}"value="{{$details->user__name ?? ''}}" class="form-control" name="name">
              	   </div>
             
               </div>
                <div class="row">
            			<div class=" col-sm-12">
            			     <label class="form-label-outside" for="general-information-job-category">{{ __(('Bank Name')) }}</label>
            				<input type="text" name="branch_name" placeholder="Bank Name"value="{{$details->branch_name ?? ''}}" class="form-control">
                        </div>
            	   </div>
            	   <div class="row">
            	   <div class=" col-sm-12">
            	       <label class="form-label-outside" for="general-information-job-category">{{ __(('Registration Number')) }}</label>
	            				<input type="text" name="i_ban_no" placeholder="Registration Number"value="{{$details->i_ban_no ?? ''}}" class="form-control">
            
            			</div>
            			</div>
            		<div class="row">
            			<div class=" col-sm-12">
            			    <label class="form-label-outside" for="general-information-job-category">{{ __(('Account Number')) }}</label>
            				<input type="text" name="account_no" placeholder="Account Number"value="{{$details->account_no ?? ''}}" class="form-control">
            
            			</div>

            			
             		</div>
            	
            	</div>

                
               
                 
                  
                    <div class="container col-sm-12">
                		 <button class="btn btn-primary" style="width:100%; border-radius:40px;">Save Details</button>
                    </div>
            	</form>


            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>

@endsection