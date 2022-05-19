 @extends('client_header.client_header')
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
  <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Edit Profile</h3>
          </div>
        </div>
       </section>
@php
 
 $user_details = App\User::where('id',Auth::user()->id)->first();


 @endphp
<br>
<br>
<div class="container">
           <div class="block-form">
             <div class="profile-content">
                <div class="row">
                    <div class="container"> 
  					
            <form method="post"  data-form-type="contact" action="/Client/update_profile/{{$user_details->id}}" enctype="multipart/form-data">
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
                   
                         <div class="input-group date" data-provide="datepicker">
   <input class="form-input" type="text" data-date="" id="general-information-profession" value="{{$user_details->bitrth_day}}" name="date_of_birth" >
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
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
              <label class="button button-sm button-primary-outline button-icon button-icon-left">
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
               
                 </form>  
                 </div>
                 </div>
                 </div>
                 </div>
                 </div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  
 <script>
var $j = jQuery.noConflict();
$j("#datepicker").datepicker();
  </script>       
       
       
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
       
       
 @endsection
       