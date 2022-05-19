 
 @extends('setup_header.providers_header')
    @section('title', 'Edit Profile')  
 @section('content')
 <style type="text/css">
 
.nav-tabs {
    border-bottom: 1px solid #c9d2e3;
}
.profile .profile-header {
    position: relative;
}
.profile .profile-header .profile-header-cover {
    background: url(https://bootdey.com/img/Content/bg1.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 10.625rem;
    position: relative;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-cover {
        height: 6.25rem;
    }
}
.profile .profile-header .profile-header-cover:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(33, 40, 55, 0.35);
}
.profile .profile-header .profile-header-content {
    position: relative;
    padding: 0 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: flex-end;
    align-items: flex-end;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content {
        display: block;
        padding: 0 20px;
    }
}
.profile .profile-header .profile-header-content .profile-header-img {
    width: 12.5rem;
    height: 12.5rem;
    overflow: hidden;
    z-index: 10;
    margin-top: -8.75rem;
    padding: 0.1875rem;
    background: #fff;
    -webkit-border-radius: 9px;
    border-radius: 9px;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-img {
        width: 4.375rem;
        height: 4.375rem;
        margin: -3.75rem 0 0;
    }
}
.profile .profile-header .profile-header-content .profile-header-img img {
    max-width: 100%;
    width: 100%;
    -webkit-border-radius: 6px;
    border-radius: 6px;
}
.profile .profile-header .profile-header-content .profile-header-tab {
    position: relative;
    margin-left: 50px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab {
        margin: -0.625rem -20px 0;
        padding: 0 20px;
        overflow: scroll;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link {
    padding: 0.8125rem 0.625rem 0.5625rem;
    text-align: center;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link {
        padding: 0.9375rem 0.625rem 0.3125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-field {
    font-weight: 600;
    font-size: 0.8125rem;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-field {
        font-size: 0.6875rem;
        margin-bottom: -0.125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-value {
    font-size: 1.25rem;
    font-weight: 400;
    letter-spacing: -0.5px;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-value {
        font-size: 1.125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link.active {
    color: #212837;
    border-color: #212837;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link.active {
        background: 0 0;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item + .nav-item {
    margin-left: 0.9375rem;
}
.profile .profile-container {
    padding: 30px 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
@media (max-width: 991.98px) {
    .profile .profile-container {
        padding: 20px 20px;
    }
}
.profile .profile-container .profile-sidebar {
    width: 13.75rem;
}
@media (max-width: 991.98px) {
    .profile .profile-container .profile-sidebar {
        display: none;
    }
}
.profile .profile-container .profile-content {
    padding-left: 30px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
@media (max-width: 991.98px) {
    .profile .profile-container .profile-content {
        padding-left: 0;
    }
}
.profile .profile-img-list {
    list-style-type: none;
    margin: -0.0625rem -1.3125rem;
    padding: 0;
}
.profile .profile-img-list:after,
.profile .profile-img-list:before {
    content: "";
    display: table;
    clear: both;
}
.profile .profile-img-list .profile-img-list-item {
    float: left;
    width: 25%;
    padding: 0.0625rem;
}
.profile .profile-img-list .profile-img-list-item.main {
    width: 50%;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link {
    display: block;
    padding-top: 75%;
    overflow: hidden;
    position: relative;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link .profile-img-content,
.profile .profile-img-list .profile-img-list-item .profile-img-list-link img {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    max-width: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link .profile-img-content:before,
.profile .profile-img-list .profile-img-list-item .profile-img-list-link img:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 1px solid rgba(60, 78, 113, 0.15);
}
.profile .profile-img-list .profile-img-list-item.with-number .profile-img-number {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    color: #fff;
    font-size: 1.625rem;
    font-weight: 500;
    line-height: 1.625rem;
    margin-top: -0.8125rem;
    text-align: center;
    
    
}


</style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
     
 </script>   
 <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js">
     
 </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

  <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Edit Profile</h3>
          </div>
        </div>
       </section>
 @php
 
 $user_details = App\User::where('id',Auth::user()->id)->first();
 $vechicle_detail = App\Vehicle_detail::where('user_id',$user_details->id)->get();
 $service = App\Services::where('name','like','Transportation Service')->first()->id;

 
 @endphp
 <br>
 <div class="d-flex justify-content-center">
 <div class="profile-header">
          
                <ul class="profile-header-tab nav nav-tabs nav-tabs-v2">
                    <li class="nav-item">
       <a class="nav-link active border border-primary" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-expanded="true"><h5>General Information</h5></a>
                          
                    </li>
                     @php
                $providerdetails= App\Gig::where('user_id',Auth::user()->id)->where('service_category',$service)->where('status','active')->count();
                
                @endphp
               
                    <li class="nav-item">
      <a class="nav-link border border-primary" data-toggle="tab" href="#tab3" role="tab" aria-controls="profile"><h5>{{ __(('Bank details')) }}</h5></a>
                          
                    </li>
                    
                     @if($providerdetails > 0)
                    <li class="nav-item">
      <a class="nav-link border border-primary" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile"><h5>{{ __(('Vehicle Details')) }}</h5></a>
                      </li>
                      @endif
                      @if($providerdetails > 0)
                      <li class="nav-item">
      <a class="nav-link border border-primary" data-toggle="tab" href="#tab4" role="tab" aria-controls="profile"><h5>{{ __(('Driving Licence Detail')) }}</h5></a>
                      </li>
                      @endif
                    
                </ul>
            </div>
             
            </div>
            <br>
            <br>
            <div class="d-flex justify-content-center">
            @if (session('msgg'))
                        <span class="badge badge-primary">
                            {{ session('msgg') }}
                        </span>
                    @endif
                    
                     @if (session('msg'))
                        <span class="badge badge-primary">
                            {{ session('msg') }}
                        </span>
                    @endif
                     @if (session('message'))
                        <span class="badge badge-primary">
                            {{ session('message') }}
                        </span>
                    @endif
                     @if (session('msggg'))
                        <span class="badge badge-primary">
                            {{ session('msggg') }}
                        </span>
                    @endif
                    </div>
        <br>
        <br>
  <!-- Candidate form -->
      
         <div class="container">
           <div class="block-form">
             <div class="profile-content">
                <div class="row">
                    <div class="container"> 
  						<div class="tab-content" id="myTabContent">  
  			 <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="1-tab">
					       <div class="tab-pane-header">
            <form method="post"  data-form-type="contact" action="/Providers/update_profile/{{$user_details->id}}" enctype="multipart/form-data">
            	@csrf
            <h4>{{ __(('General Information')) }}</h4>
            <hr>
            
           
      
            <!-- RD Mailform-->
            <div class="rd-form rd-mailform form-lg">
              <div class="row row-40">
                
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">{{ __(('Name')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="{{Auth::user()->name}}" name="name" >
                      <label class="form-label" for="general-information-profession">{{Auth::user()->name}}</label>
                    </div>
                  </div>
                  </div>
                  
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">{{ __(('Date of Birth')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession" type="date" value="{{$user_details->bitrth_day}}" name="date_of_birth" >
                      <label class="form-label" for="general-information-profession">{{$user_details->bitrth_day}}</label>
                    </div>
                  </div>
                  </div>
                  
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">{{ __(('Address')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="{{$user_details->addres}}" name="address">
                      <label class="form-label" for="general-information-profession">{{$user_details->addres}}</label>
                    </div>
                  </div>
                  </div>
                  
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">{{ __(('Contact number')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="number" value="{{$user_details->contacts}}" name="contact">
                      <label class="form-label" for="general-information-profession">{{$user_details->contacts}}</label>
                    </div>
                  </div>
                  </div>
                 
                 
                          
                
                     <div class="container">
                <div class="group">
              <label class="button button-sm button-primary-outline button-icon button-icon-left" style="border-radius:40px;">
                <input type="file" name="photo" onchange="readURL(this);"  id="file_chosen" ><span class="icon mdi mdi-account-box"></span>{{ __(('Change Your Photo')) }}
                
                &nbsp &nbsp <img src="{{asset('/JobPortal/public/profile_images')}}/{{Auth::user()->profile_image}}" id="old_img" class="img-thumbnail" style="width:50px;"/>
                <img class="injectable hw-20 img-thumbnail" id="blah" style="display: none;" src="#">
              </label>
            </div>
            </div>
             <br>
             <br>
            <div class="col-md-6">
            <button class="button button-lg button-secondary" style="border-radius:40px;" type="submit">{{ __(('Save Changes')) }}</button>    
            </div>
                </div>
                </div>
                </div>
                </div>
                 </form>
                 
                 <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="2-tab">
                     
		      <div class="tab-pane-header">
		          <form method="post" action="/Providers/vehicle_details/{{$user_details->id}}">
		              @csrf
		           <h4>{{ __(('Vehicle Details')) }}</h4>
            <hr>
 	<section class="section section-md text-center">

        <div class="container">
           @if (session('msseg'))
                <div class="alert alert-primary" style="bg-primary text-white">
                    {{ session('msseg') }}
                </div>
                @endif
           <a href="/Providers/addvechicle" class="btn btn-primary"><i class="fa fa-plus"></i> {{ __(('Add Vehicle')) }} </a>

          <table class="table table-primary table-responsive-md">
            <thead>
              <tr>
                <th>{{ __(('Vehicle Type')) }}</th>
                <th>{{ __(('Number Plate')) }}</th>
                <th>{{ __(('Vehicle Brand')) }}</th>
                <th>{{ __(('Vehicle Model')) }}</th>
                <th>{{ __(('Vehicle Color')) }}</th>
                <th>{{ __(('Vehicle Status')) }}</th>
                <th>{{ __(('Action')) }}</th>
                <th>{{ __(('Action')) }}</th>
                
              </tr>
            </thead>
            <tbody>
    
              @foreach($vechicle_detail as $vechicle_details)
              <tr>
                <td>{{$vechicle_details->vehicle_type}}</td>
                <td>{{$vechicle_details->number_plate}}</td>
                <td>{{$vechicle_details->vehicle_brand}}</td>
                <td>{{$vechicle_details->vehicle_model}}</td>
                <td>{{$vechicle_details->vehicle_color}}</td>
                <td>{{$vechicle_details->vehicle_status}}</td>
                <td><a href="/Providers/Edit-Vehicle/{{$vechicle_details->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                <td><a href="/Providers/delete_vehicle/{{$vechicle_details->id}}" class="btn btn" style="background-color: red;color: white;">Delete</a></td>
              </tr>
            @endforeach
              

              
              <!--<tr><td>{{ __(('No any service found')) }}.</td></tr>-->
              
             
            </tbody>
             
          </table>
        </div>
      </section>
                
                
                </div>
               
                </div>
                </form>
                
                
                
           <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="3-tab">
            <div class="tab-pane-header">
                
        
        @php
             $country = App\Locations::where('id',Auth::user()->country)->where('location_type','Country')->first();
            $city = App\Locations::where('parent_locations',Auth::user()->city)->where('location_type','City')->first();
            $details =  App\BankDetail::where('user_id',Auth::user()->id)->first();
        @endphp
  <center>
  <br>
  <br>
  

<section class="card section section-md text-center col-sm-8">
      
        <div class="container">
          <div class="text-center">
            <h2>{{ __(('Enter your bank details')) }}</h2>
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
            	<br>
          
                
                <br>
                <br>
                
                    <br>
                        <hr>
                        <br>
                    <div class="container col-sm-12">
                		 <button class="btn btn-primary" style="width:100%; border-radius:40px;">{{ __(('Save Details')) }}</button>
                    </div>
            	</form>


            </div>
        </div>
    </div>
</section>  
    </div>
	</div>
 <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="4-tab">
                     
		      <div class="tab-pane-header">
		          <form method="post" action="/Providers/lience/{{Auth::user()->id}}">
		              @csrf
		           <h4>{{ __(('Licence Details')) }}</h4>
            <hr>
            <br>
               
                <div class="row">
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">{{ __(('Driver Name')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="{{$user_details->driver_name ?? ''}}" name="driver_name" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession">{{$user_details->driver_name ?? ''}}</label>
                    </div>
                  </div>
                  </div>
                 
                  
                  <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">{{ __(('Driving Licence Number')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="{{$user_details->lience_number ?? ''}}" name="lience_number" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession">{{$user_details->lience_number ?? ''}}</label>
                    </div>
                  </div>
                  </div>
                  
                </div><br><br>
                <div class="col-md-6">
            <button class="button button-lg button-secondary" style="border-radius:40px;" type="submit">{{ __(('Save Changes')) }}</button>    
            </div>
                
                
                </div>
               
                </div>
	
	
  </div>
     </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        </div>
        
        <br>
        <br>
   <script type="text/javascript">
 function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
document.getElementById('blah').style.display="block";


reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(200)
.height(100);
};
 var name = document.getElementById('file_chosen'); 
  $('#files').val(name.files.item(0).name);
reader.readAsDataURL(input.files[0]);
document.getElementById('old_img').style.display="none";
}
}

</script>
        
     <script type="text/javascript">
         
         $('editable').editableSelect();
     </script>
        
      @endsection           