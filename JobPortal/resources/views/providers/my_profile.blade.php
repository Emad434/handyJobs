
 @extends('setup_header.providers_header')
    @section('title', 'My Profile')  
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
 $category = App\Services::where('id',$ProviderDetails->resume_category)->first();
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
                             @php
                $user = App\User::where('id',Auth::user()->id)->first();
                
                @endphp
                @if($user->profile_image == null)
                 
                  <img src="{{$user->img_url}}" class="img-fluid"  alt="..."/> 
               
                  
                 @else 
                
                  <img src="{{asset('/JobPortal/public/profile_images')}}/{{$user_details->profile_image}}" class="img-fluid"  alt="..."/> 
               
                 
              @endif
                            
                            
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{$user_details->name}}
                                    </h5>
                                    <h6>
                                       {{$category->name}}
                                    </h6>
                                    @if($rating_count != null)
                                    <p class="proile-rating">Rating : <span>{{$rating_count}}/ <i class="fa fa-star"></i>{{$round_up}}</span></p>
                                    @endif
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="profile" aria-selected="true">About</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Services</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#reviews" role="tab" aria-controls="profile" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        
                        <a href="/Providers/update_profilee" type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile">Edit Profile</a>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            
                            <p>Freelancer Details</p>
                            <a href="">Completed Work: {{$completed_contracts}}</a><br/>
                            <a href="">Total Rating: {{$rating_count}}</a><br/>
                            <a href="">Total Services: {{$total_gigs}}</a><hr/>
                            
                             <p>Profile Type</p>
                            <a href="">Category: {{$category->name}}</a><br/>
                           
                            
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
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$category->name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                
                                </div>
                                  <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="profile-tab">

                                      <div class="layout-1">
                                    <h4>Your Reviews</h4><br>
                                  <div class="layout-1-inner">
                                      <p><img src="{{asset('JobPortal/public/profile_images')}}/{{$user_details->profile_image}}" class="img-thumbnail" style="width:50px;"/>&nbsp;{{$user_details->name}}</p>
                                      <div>
                                      <ul class="list-inline list-inline-xs">
                                        <li>Rating: @if($rating_count > 0) <i class="mdi mdi-star" style="color:yellow;"></i>{{$rating_count}}@else <span class="badge">Not Rated</span>@endif</li>
                                         </ul>
                                   </div>
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