@extends('setup_header.providers_header')
    @section('title', 'Edit Vehicle')  
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
            <h3 class="breadcrumbs-custom-title">Edit Vehicle</h3>
          </div>
        </div>
       </section>
    	<section class="section section-md text-center">
      <form method="post" action="/Providers/vechicle_update/{{$vehicale_detail->id}}">
		              @csrf
		            <div class="d-flex justify-content-start col px-md-5">    
		           <h4>{{ __(('Vehicle Details')) }}</h4>
		           </div>
		 <div class="col px-md-5">          
            <hr>
            </div>
   <div class="d-flex justify-content-center">
            @if (session('mseg'))
                        <span class="badge badge-primary">
                            {{ session('mseg') }}
                        </span>
                    @endif
                    </div>
      
            
              
                <div class="row col px-md-5 ">
                  
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside d-flex justify-content-start" for="general-information-job-category">{{ __(('Vehicle Type')) }}</label>
                    <div class="form-wrap-inner">
                      <!-- Select 2-->
                      <select class="form-input select" id="general-information-job-category"  data-placeholder="Choose vehicle Type" name="vehical_type" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                        <option label="Select Status"></option>
                        <option @if($vehicale_detail->vehicle_type == 'Car') selected @endif>Car</option>
                        <option @if($vehicale_detail->vehicle_type == 'Van') selected @endif>Van</option>
                        <option @if($vehicale_detail->vehicle_type == 'Lift') selected @endif>Lift</option>
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
                      <input class="form-input" id="general-information-profession"type="text" value="{{$vehicale_detail->number_plate}}" name="number_plate" data-constraints="@Required">
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
                      <input class="form-input" id="general-information-profession"type="text" value="{{$vehicale_detail->vehicle_brand}}" name="vehical_brand" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession"></label>
                    </div>
                  </div>
                  </div>
                  <br>
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside d-flex justify-content-start" for="general-information-profession">{{ __(('Vehicle Model')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="{{$vehicale_detail->vehicle_model}}" name="model_vehicle" data-constraints="@Required">
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
                      <input class="form-input" id="general-information-profession"type="text" value="{{$vehicale_detail->vehicle_color}}" name="vehicle_color" data-constraints="@Required">
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
                        <option @if($vehicale_detail->vehicle_status == 'Good') selected @endif>Good</option>
                        <option @if($vehicale_detail->vehicle_status == 'Average') selected @endif>Average</option>
                        <option @if($vehicale_detail->vehicle_status == 'Bad') selected @endif>Bad</option>
                      </select>
                    </div>
                  </div>
                </div>
                </div><br><br>
                <div class="col px-md-5 d-flex justify-content-center">
            <button class="button button-lg button-secondary" style="border-radius:40px;" type="submit">{{ __(('Save Changes')) }}</button>    
            </div>
                
                
                </div>
               
                </div>
                
                </form>
             </section>
                
     @endsection               
                