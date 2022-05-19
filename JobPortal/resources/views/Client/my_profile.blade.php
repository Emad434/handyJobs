
 @extends('client_header.client_header')
    @section('title', 'Profile')  
 @section('content')

<style type="text/css">

.img_div {
  height: 50vh; /* Changed purely for Stack example */
}

 
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

.banner
{
     height: 70vh;
 
 /* Flexbox */
 display: flex;
 
}
.container-team {  
  max-width: 1170px;
  width: 30%;
  height:25%;
  margin: 0px auto;
  margin-bottom: -85%;
  padding: 0 0px;
  box-sizing: border-box;
  -webkit-transform-origin: top center;
          transform-origin: top center;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
     
 </script>   
 <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js">
     
 </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
 @php
 
 $user_details = App\User::where('id',Auth::user()->id)->first();

 $rating_count = App\Reviews::where('provider_id',Auth::user()->id)->count();
  $ratings = App\Reviews::where('provider_id',Auth::user()->id)->get();
  
  $completed_contracts = App\Contract::where('sellers_id',Auth::user()->id)->where('status','completed')->count();
  $total_gigs = App\Gig::where('user_id',Auth::user()->id)->count();
 @endphp
 
  @if($rating_count > 0)
 @foreach($ratings as $rating)
  @php
 $review_avg = $rating->avg('stars');
 $round_up = round($review_avg);
   @endphp
 @endforeach
 @endif
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    
                    <div class="container-team" id="img_div">
                        <div class="profile-img h-25 d-inline-block">
                            
                            <img src="{{asset('/JobPortal/public/profile_images')}}/{{$user_details->profile_image}}" class="img-responsive"  alt="..."/> 
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{$user_details->name}}
                                    </h5>
                                  
                        </div>
                    </div>
                    <div class="col-md-2">
                        
                        <a href="/Client/edit_profile" type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile">Edit Profile</a>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                         
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$user_details->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$user_details->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$user_details->contacts}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$user_details->bitrth_day}}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$user_details->addres}}</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

@endsection