@extends('setup_header.providers_header')
    @section('title', 'Add Vehicle')  
 @section('content')    
   @php
 
 $user_details = App\User::where('id',Auth::user()->id)->first();
 $vechicle_details = App\Vehicle_detail::where('user_id',Auth::user()->id)->first();

 @endphp 
 </header>
 <style type="text/css">
     .mt-n1 {
  margin-top: -0.25rem !important;
}
 </style>
 
 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">{{ __(('Add new Vehicle')) }}</h3>
          </div>
        </div>
       </section>
    	<section class="section section-md text-center">
      <form method="post" action="/Providers/vehicle_details/{{$user_details->id}}">
		              @csrf
		           <div class="d-flex justify-content-start col px-md-5">    
		           <h4>{{ __(('Vehicle Details')) }}</h4>
		           </div>
		 <div class="col px-md-5">          
            <hr>
            </div>
            <br>
   <div class="d-flex justify-content-center">
            @if (session('msgg'))
                        <span class="badge badge-primary">
                            {{ session('msgg') }}
                        </span>
                    @endif
                    </div>
      
            
              
                <div class="row col px-md-5 ">
                  
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside d-flex justify-content-start" for="general-information-job-category">{{ __(('Vehicle Type')) }}</label>
                    <div class="form-wrap-inner">
                      <!-- Select 2-->
                      <select class="form-input select" id="general-information-job-category"  data-placeholder="Choose Car Type" name="vehical_type" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                        <option label="Select Status"></option>
                        <option>Car</option>
                        <option>Van</option>
                        <option>Lift</option>
                      </select>
                    </div>
                  </div>
                </div>
                  <br>
                  <br>
                  <br>
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside d-flex justify-content-start" for="general-information-profession">{{ __(('Number Plate')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="" name="number_plate" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession"></label>
                    </div>
                  </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside d-flex justify-content-start" for="general-information-profession">{{ __(('Vehicle Brand')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="" name="vehical_brand" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession"></label>
                    </div>
                  </div>
                  </div>
                  <br>
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside d-flex justify-content-start" for="general-information-profession">{{ __(('Vehicle Model')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="" name="model_vehicle" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession"></label>
                    </div>
                  </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside d-flex justify-content-start" for="general-information-profession">{{ __(('Vehicle Color')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="" name="vehicle_color" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession"></label>
                    </div>
                  </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside d-flex justify-content-start" for="general-information-job-category">{{ __(('Vehicle Status')) }}</label>
                    <div class="form-wrap-inner">
                      <!-- Select 2-->
                      <select class="form-input select" id="general-information-job-category"  data-placeholder="Choose a Category" name="vehicle_status" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                        <option label="Select Status"></option>
                        <option>Good</option>
                        <option>Average</option>
                        <option>Bad</option>
                      </select>
                    </div>
                  </div>
                </div>
                </div><br><br>
                <div class="col px-md-5 d-flex justify-content-center">
            <button class="button button-lg button-secondary" style="border-radius:40px;" type="submit">{{ __(('Add Vehicle')) }}</button>    
            </div>
                
                
                </div>
               
                </div>
                
                </form>
             </section>
                
     @endsection               
                