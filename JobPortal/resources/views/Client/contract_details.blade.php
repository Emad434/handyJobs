
 @extends('client_header.client_header')
  @section('title', 'Contract Details')  
 @section('content') 


  
        </header>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('/support_box/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/support_box/css/main.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{asset('/support_box/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/support_box/css/chatBot.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/support_box/css/timeline.css')}}" rel="stylesheet" type="text/css"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="257be86a981729866f2fa61c-|49" defer=""></script>
<!-- Time line Html Ends -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('/support_box/js/jquery-3.1.1.min.js')}}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
 
.card {
    max-width: 1000px;
    margin: 2vh
}

.card-top {
    padding: 0.7rem 5rem
}

.card-top a {
    float: left;
    margin-top: 0.7rem
}

#logo {
    font-family: 'Dancing Script';
    font-weight: bold;
    font-size: 1.6rem
}

.card-body {
    padding: 0 5rem 5rem 5rem;
     background-size: cover;
    background-repeat: no-repeat
}

@media(max-width:768px) {
    .card-body {
        padding: 0 1rem 1rem 1rem;
         background-size: cover;
        background-repeat: no-repeat
    }

    .card-top {
        padding: 0.7rem 1rem
    }
}

.row {
    margin: 0
}

.upper {
    padding: 1rem 0;
    justify-content: space-evenly
}

#three {
    border-radius: 1rem;
    width: 22px;
    height: 22px;
    margin-right: 3px;
    border: 1px solid blue;
    text-align: center;
    display: inline-block
}

#payment {
    margin: 0;
    color: blue
}

.icons {
    margin-left: auto
}

form span {
    color: rgb(179, 179, 179)
}

form {
    padding: 2vh 0
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

.header {
    font-size: 1.5rem
}

.left {
    background-color: #ffffff;
    padding: 2vh
}

.left img {
    width: 2rem
}

.left .col-4 {
    padding-left: 0
}

.right .item {
    padding: 0.3rem 0
}

.right {
    background-color: #ffffff;
    padding: 2vh
}

.col-8 {
    padding: 0 1vh
}

.lower {
    line-height: 2
}

.btn {
    background-color: rgb(23, 4, 189);
    border-color: rgb(23, 4, 189);
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin: 4vh 0 1.5vh 0;
    padding: 1.5vh;
    border-radius: 0
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}

input[type=checkbox] {
    width: unset;
    margin-bottom: unset
}

#cvv {
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.575), rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center
}

#cvv:hover {}
</style>
<style type="text/css">
  
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

 

.cross {
    padding: 10px;
    color: #d6312d;
    cursor: pointer;
    font-size: 23px
}

.cross i {
    margin-top: -5px;
    cursor: pointer
}

.comment-box {
    padding: 5px
}

.comment-area textarea {
    resize: none;
    border: 1px solid ##1087EB
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
}

.send {
    color: #fff;
    background-color: #ff0000;
    border-color: #ff0000
}

.send:hover {
    color: #fff;
    background-color: #1087EB;
    border-color: #1087EB
}

.rating {
    display: inline-flex;
    margin-top: -10px;
    flex-direction: row-reverse
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 28px;
    font-size: 35px;
    color: #FFCC04;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}



    .rate-base-layer
        {
            color: #aaa;
        }
        .rate-hover-layer
        {
            color: orange;
        }
        .rate2
        {
            font-size: 35px;
        }
        .rate2 .rate-hover-layer
        {
            color: pink;
        }
        .rate2 .rate-select-layer
        {
            color: red;
        }
        .im
        {
            background-image: url('./images/heart.gif');
            background-size: 32px 32px;
            background-repeat: no-repeat;
            width: 32px;
            height: 32px;
            display: inline-block;
        }
        .im2
        {
            background-image: url('./images/emoji5.png');
            background-size: 64px 64px;
            background-repeat: no-repeat;
            width: 64px;
            height: 64px;
            display: inline-block;
        }
        #rate5 .rate-base-layer span, #rate7 .rate-base-layer span
        {
            opacity: 0.5;
        }
        hr
        {
            border: 1px solid #ccc;
        }
        p
        {
            font-size: 15px;
            margin-left: -0;
        }


        .card {
    position: relative;
    display: flex;
    padding: 20px;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 11px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}

.media img {
    width: 60px;
    height: 60px
}

.reply a {
    text-decoration: none
}
 
</style>

 @php
   $currency = App\Amount::first();
                    @endphp
          
<div class="container"> 

 @if($contrac_details->status == "waiting_for_provider_approval")
<div class="alert alert-info"style="background-color: pink;"><h4 class="text-center">This Contract Is Pending For Approval</h4></div>

@elseif($contrac_details->status == "active")
<div class="alert alert-primary"><h4 class="text-center"style="color: black;">Contract Active</h4></div>

@elseif($contrac_details->status == "cancelled")
<div class="alert alert-info"style="background-color: gray; color: white;"><h4 class="text-center"style="color: white;">Contract Canelled</h4></div>

@elseif($contrac_details->status == "late")
<div class="alert alert-info"style="background-color: red; color: white;"><h4 class="text-center" style="color: white;">Try To Complete As Well As Soon</h4></div>


@elseif($contrac_details->status == "completed")
<div class="alert alert-info"style="background-color: green; "><h4 class="text-center" style="color: white;">Congratulations! Your This Contract Is Completed</h4></div>
@elseif($contrac_details->status == "cancel_req")

<div class="alert alert-info"style="background-color: red; ">
<h4 class="text-center" style="color: white;">Dispute open</h4>
</div>
 
 @elseif($contrac_details->status == "late")

<div class="alert alert-info"style="background-color: red; ">
<h4 class="text-center" style="color: white;">Try to complete your contract as given time for good rating</h4>
</div>


@elseif($contrac_details->status == "decline")

<div class="alert alert-info"style="background-color: red; ">
<h4 class="text-center" style="color: white;">Contract Decline</h4>
<center><p style="color: white;">Try to make contract with mutual understanding</p></center>
</div>

 @elseif($contrac_details->status == "waiting_fro_payment")

<div class="alert alert-info"style="background-color: blue; ">
<h4 class="text-center" style="color: white;">Waiting For Payment</h4>
 </div>

 @endif
</div>
 <section class="section section-sm bg-primary">
     
        <div class="container">
          <div class="layout-2">
            <div class="layout-2-item layout-2-item-main">
              <!-- Profile Light-->
              <div class="row">
              @foreach ($contrac_details->images as $key)
       
              <article class="profile-light col-sm-4"><img class="profile-light-image" src="{{asset('/doc_signs')}}/{{$key->file_name}}" alt="" width="169" height="169"/>
                <div class="profile-light-main">
                  <h4 class="profile-light-name">{{$key->signature_type}}</h4>
                    
                </div>
              </article>
               @endforeach
               
              </div>
            </div>
@php
$check_payment = App\Invoice::where('contract_id',$contrac_details->id)->count();
 @endphp
            <div class="layout-2-item text-center text-lg-left">
              <div>
                <div class="group group-xl group-middle">
                  <div>
                    <ul class="list-inline list-inline-xs">
                       
                      <li>Contract Amount: <img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>&nbsp{{$contrac_details->contract_amount}}</li> 
                    </ul>
                  </div> 
                  @if($check_payment < 1 && $contrac_details->status == "waiting_fro_payment")
                   <a class="button button-lg button-primary-outline" style="border-radius:40px;" href="/Client/Contract-Payment/{{$contrac_details->provider_details->id}}/{{$contrac_details->id}}">Payment</a>
                  @endif
                      
                  @if($check_payment > 0 && $contrac_details->status == "active")
                    <a class="button button-lg button-primary-outline" href="#" style="border-radius:40px;" data-toggle="modal" data-target=".bd-example-modal-lg">Mark as completed</a>
                  @endif
                  
                   @php
                   $cancel_req = App\CancelRequest::where('reciever_id',Auth::user()->id)->orwhere('req_from',Auth::user()->id)->where('contract_id',$contrac_details->id)->count();
                  $cancel_request = App\CancelRequest::where('reciever_id',Auth::user()->id)->orwhere('req_from',Auth::user()->id)->where('contract_id',$contrac_details->id)->orderBy('id','desc')->first();
                  
                  
                  @endphp
                      
                    
                    
                    @if($cancel_req > 0)
                    
                   @if($contrac_details->status == "cancel_req")
                   @if($cancel_request->req_from == Auth::user()->id)

                  <a class="button button-lg button-primary-outline" style="border-radius:40px;" href="/Client/decline_dispute/{{$contrac_details->id}}">Decline Disput Request</a>
                    
                    @else
                    
                    <a class="button button-lg button-primary-outline" style="border-radius:40px;" href="/Client/decline_dispute/{{$contrac_details->id}}">Decline Disput Request</a>
                    <a href="/Client/cancel_contract_approval/{{$contrac_details->id}}" style="color:white; border-radius:40px;">Accept Disput Request</a>
                      @endif
                     @endif
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="row row-50">
                <div class="col-12">
                  <p class="heading-9">About Contract</p>
                  <hr>
                  <p class="text-style-1">
                      <h2 class="text-style-1">{{$contrac_details->contract_name}}</h2>
                      <br>
                   {!! $contrac_details->contract_description !!}
                   
                       </p>
                       <p>Start Date : {!! $contrac_details->start_date !!}</p>
                        <p>End Date : {!! $contrac_details->end_date !!}</p>
                       
                </div>
                @php
                    $completed_contracts = App\Contract::where('sellers_id',$contrac_details->provider_details->id)->count();
                    $ratings_count = App\Reviews::where('provider_id',$contrac_details->provider_details->id)->count();
                @endphp
                <div class="col-12">
                  <p class="heading-9">Provider Details</p>
                  <hr>
                  <div class="row row-20">
                    <div class="col-md-12">
                      <!--Linear progress bar-->
                      <article class="progress-linear progress-bar-secondary">
                        <div class="progress-linear-header">
                            <div class="row">
              
                @if($contrac_details->provider_details->profile_image == null)
                 
                  <a href="/Client/Provider-profile/{{$contrac_details->provider_details->id}}/{{$contrac_details->provider_details->name}}"> 
                         
                          <img class="profile-light-image" src="{{$contrac_details->provider_details->img_url}}" alt="" style="width:80px;"/>
                           </a>
                 @else 
                
                   <a href="/Client/Provider-profile/{{$contrac_details->provider_details->id}}/{{$contrac_details->provider_details->name}}"> 
                         
                          <img class="profile-light-image" src="{{asset('/JobPortal/public/profile_images')}}/{{$contrac_details->provider_details->profile_image}}" alt="" style="width:80px;"/>
                           </a>
                 
              @endif      
                        
                           <ul>
                              
                           <a href="/Client/Provider-profile/{{$contrac_details->provider_details->id}}/{{$contrac_details->provider_details->name}}"> <li>&nbsp {{$contrac_details->provider_details->name}}</li> </a>
                            <li>&nbsp Completed Contracts: <strong>{{$completed_contracts}}</strong></li>
                            <li>&nbsp Ratings: {{$ratings_count}} Ratings</li>
                            </ul>
                            </div>
                            
                         </div>
                      </article>
                   </div>
                 </div>
                </div>
                
                <div class="col-12">
                  <p class="heading-9">Activity In Contract</p>
                  <hr>
                  <div class="timeline-classic">
                  @foreach ($contrac_details->images as $key)
                    @if($key->signature_type == "Buyer Signature")
                     <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Buyer Signature</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title"><img class="profile-light-image" src="{{asset('/doc_signs')}}/{{$key->file_name}}" alt="" width="169" height="169"/> </h5>
                        <p>Signed Date: {{$key->created_at}}</p>
                       </div>
                    </div>
                    @else
                    <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Seller Signature</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title"><img class="profile-light-image" src="{{asset('/doc_signs')}}/{{$key->file_name}}" alt="" width="169" height="169"/></h5>
                        <p>Signed Date: {{$key->created_at}}</p>
                       </div>
                    </div>
                    @endif
                    @endforeach
                    
                  
                   @if($check_payment != 0)
                     <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Payment From Client</span></div>
                     
                      <div class="timeline-classic-main">
                          
                        <h5 class="timeline-classic-title">Cleared</h5>
                       </div>
                    </div>
                    @endif
                    
                     @if($contrac_details->status == "completed")
                    <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Contract Status</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title">Completed</h5>
                       </div>
                    </div>
                    @endif
                   
                    @if($contrac_details->status == "completed" && $contrac_details->tip_amount != null)
                    <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Tip For Provider</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title"><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:17px;"/>&nbsp{{$contrac_details->tip_amount}}</h5>
                       </div>
                    </div>
                    @endif
                  
                          @php
                    $cancel_reason_chk = App\CancelRequest::where('reciever_id',Auth::user()->id)->where('contract_id',$contrac_details->id)->count();
                    
                    @endphp
                     @if($contrac_details->status == "cancel_req")
                     <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Dispute Request</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title">Opened Dispute</h5>
                       </div>
                    </div>
                    
                    @if($cancel_reason_chk > 0)
                    @php
                    $cancel_reason = App\CancelRequest::where('reciever_id',Auth::user()->id)->where('contract_id',$contrac_details->id)->first();
                    
                    @endphp
                     <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Dispute Reason</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title">{{$cancel_reason->description ?? 'Not Defined'}}</h5>
                       </div>
                    </div>
                    
                    @endif
                    @endif
                    @if($contrac_details->cancel_by_admin == 1)
                     <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Dispute Request</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title" style="color:red;">Order Cancelled By Admin</h5>
                       </div>
                    </div>
                    @endif
                    @if($contrac_details->cancel_by_admin == 0 && $contrac_details->status == 'cancelled' )
                     <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Dispute Request</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title" style="color:red;">Order Cancelled By Mutuall Understanding</h5>
                       </div>
                    </div>
                    @endif
                    
                  </div>
                </div>
               </div>
            </div>
            <div class="col-lg-4">
              <div class="row row-30 row-lg-50">
                <div class="col-md-6 col-lg-12">
                  <!-- RD Mailform-->
                  <form class="form-group" data-form-output="form-output-global" data-form-type="contact" method="post" action="/Client/send_message/{{$contrac_details->provider_details->id}}">
                        @csrf
                    <h4>Contact {{$contrac_details->provider_details->name}}</h4>
                   
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                    <div class="form-wrap">
                      <button class="button button-block button-primary" style="border-radius:40px;" type="submit">Send Message</button>
                    </div>
                  </form>
                </div>
                @if($contrac_details->status == "active")
           <div class="col-lg-12">
              <div class="row row-30 row-lg-50">
                <div class="col-md-6 col-lg-12">
                  <!-- RD Mailform-->
                     <h4>CONTRACT WAS STARTED</h4>
                    <div class="form-wrap">
                        @php
                            $contract_slug = str_replace(" ","-",$contrac_details->contract_name);
                          @endphp
                      <p>Having trouble? <a href="/Client/Resolution/{{$contrac_details->id}}/{{$contract_slug}}"style="font-size:3mm;">Visit Resolution Center</a></p>
                    </div>
                 </div>
              </div>
            </div>
            @endif
              </div>
            </div>
            
            
         
        

          </div>
          
          @if($contrac_details->status == "completed")
             @if($contrac_details->tip_amount != 0)
      <div class="d-flex justify-content-center">
       <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded d-flex justify-content-center">
         <p class="d-flex justify-content-center">We truely Appriciate that tip you give to our provider</p>
        <strong class="d-flex justify-content-center">Thnanks for giving <img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>&nbsp{{$contrac_details->tip_amount}} tip.</strong>
      </div>
</div>
      
      @endif
     
      
      
         
          @php
        $review_chk_count = App\Reviews::where('contract_id',$contrac_details->id)->count();
         @endphp
        @if($review_chk_count == 0)
    <div class="d-flex justify-content-center">
     <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
     
        <div class="card-body text-center"> <img src=" https://i.imgur.com/d2dKtI7.png" height="100" width="100">
                <div class="comment-box text-center">
                    <h4>Add a comment</h4>
                    <form method="post" action="/Client/post_review/{{$contrac_details->id}}/{{$contrac_details->provider_details->id}}">
                      @csrf
                    <div class="rating"> 
                      <input type="radio" name="rating"  value="5" id="5">
                      <label for="5">☆</label> 
                      <input type="radio" name="rating" value="4" id="4">
                      <label for="4">☆</label>
                       <input type="radio" name="rating" value="3" id="3">
                       <label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2">
                        <label for="2">☆</label> 
                        <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                     </div>
                    <div class="comment-area"> 
                      <textarea class="form-control" name="Review" placeholder="what is your view?" rows="4"></textarea> </div>
                    <div class="text-center mt-4">
                     <button class="btn btn-primary send px-5">Add Review<i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                </div>
                </form>
            </div>
          </div>
       </div>
        @else

           @php
            $review_chk = App\Reviews::where('contract_id',$contrac_details->id)->first();
            $reply_chk = App\Reply::where('parent_comment',$review_chk->id)->count();
         @endphp
       

         <div class="d-flex justify-content-center">
     <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
     
         <div class="card-body text-center"> 
          
                      <center><h3 class="text-center mb-5">You Drop {{$review_chk->stars}} Stars Rating
                        <span id="dataReadonlyReview" data-rating-stars="{{$review_chk->stars}}" data-rating-readonly="true">- </span></h3>
                   </center>

                      <div class="col-md-12">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="media">
                             @php
                $user = App\User::where('id',Auth::user()->id)->first();
                
                @endphp
                @if($user->profile_image == null)
                 
                 	<img src="{{$user->img_url}}" style="width:150px;border-radius: 100px;" class="img-thumbnail">
               
                  
                 @else 
                
               <img class="mr-3 rounded-circle img-thumbnail" alt="Bootstrap Media Preview" src="{{asset('JobPortal/public/profile_images')}}/{{Auth::user()->profile_image}}" />

               
                 
              @endif
                            
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-8 d-flex">
                                        <h5>{{Auth::user()->name}}</h5> <span>-{{$review_chk->created_at}}</span>
                                    </div>
                                    
                                    <div class="col-4">
                                        <div class="pull-right reply"> <a href="#"><span id="dataReadonlyReview" data-rating-stars="{{$review_chk->stars}}" data-rating-readonly="true">-</span></a> </div>
                                        
                                    </div>
                                    <p style="margin-left:22px;">{{$review_chk->review}}</p>
                                </div> 

                                @if($reply_chk > 0)
                                    @php
                                        $reply = App\User::where('id',$review_chk->provider_id)->first();
                                    @endphp
                                <div class="media mt-4"> 
                                            
                                           @if($reply->profile_image == null)
                 
                                            <a class="pr-3" href="#"><img class="rounded-circle img-thumbnail" alt="Bootstrap Media Another Preview" src="{{$reply->img_url}}" /></a>
               
                  
                                           @else 
                
                                             <a class="pr-3" href="#"><img class="rounded-circle img-thumbnail" alt="Bootstrap Media Another Preview" src="{{asset('JobPortal/public/profile_images')}}/{{$reply->profile_image}}" /></a>
               
                 
                                          @endif
                               
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <h5>{{$reply->name}}</h5> <span>- {{$review_chk->created_at}}</span>
                                                
                                            </div>
                                            {{$review_chk->review}}
                                        </div> 
                                    </div>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                     </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
        @endif
 
        </div>
      </section>
  

 
 </div>


 
  
   @endif
 
   <style>
       .modal-backdrop{
           
           z-index:-1;
       }
   </style>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mo_body">
          <p>We glad to know your contract is going to be as completed. Thanks for choosing HandyServices</p>
          <br>
          <br>
            <div class="form-control">
             <input type="checkbox" id="myCheck" onclick="myFunction()" />
              <label for="myCheck">Want to give a tip?</label>
               <br>
               <br>
               <br>
               <br>
                <p><strong>You can continue if you not want to give tip</strong></p>
                
                 </div>
                <div class="form-control " id="text" style="display:none">
                
                    <div class="row"><span class="header">TIP:</span>
                        <div class="icons" style="margin-top:40px;"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                    </div>
                    <br>
                    <br>
        
                    <form method="post" action="/Client/complete_contract_req/{{$contrac_details->id}}"> 
                    	@csrf
                    	<span>Cardholder's name:</span> 
                    	<input placeholder="Linda Williams" name="holder_name"> <span>Card Number:</span> <input placeholder="0125 6780 4567 9909"name="card_no">
                        <div class="row">
                            <div class="col-6"><span>Expiry Month:</span> <input placeholder="MM" name="expiry_month"> </div>
                             <div class="col-6"><span>Expiry Year:</span> <input placeholder="YY" name="expiry_year"> </div>
                              </div>
                              <div class="row" style="margin-top:20px;">
                            <div class="col-6"><span>CVV:</span> <input id="cvv" name="cvv"> </div>
                            <div class="col-6"><span>Tip Amount:</span>  <input type="number" value="" palceholder="Tip Amount" name="amount" ></div> 
                         </div>
					  
					  <div class="col-12"><button class="btn btn-primary" style="font-size:15px;">Give tip</button></div>
					 
                    </form>
                </div>
             </div>
            
        <div class="modal-footer">
          <form action="/Client/complete_contract_req/{{$contrac_details->id}}" method="post">
              @csrf
               <br>
         <button type="submit"class="btn btn-primary" style="font-size:10px;" id="Continue">Continue</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size:15px;">Close</button>
      </div>
    </div>
  </div>
</div>


 <div class="chat-screen">
    <div class="chat-header">
        <div class="chat-header-title">
            Let’s chat? - We're online
        </div>
         
    </div>
    <div class="chat-mail">
        <div class="row">
            <div class="col-md-12 text-center mb-2">
                <p>Hi 👋! Please fill out the form below to start chatting with the next available agent.</p>
            </div>
        </div>
        <div class="row">
          <!--   <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
            </div> -->
             
            <div class="col-md-12">
              <button class="btn btn-primary btn-rounded btn-block">Start Chat</button>
            </div>
            
        </div>
    </div>
   <div class="chat-body hide" id="messagess" style="overflow: scroll;">
        <!--  <div class="chat-bubble me">Welcome to our site, if you need help simply reply to this message, we are online and ready to help.</div>
        <div class="chat-bubble you">Hi, I am back</div> -->
    </div>
    <form method="post" id="support_from">
      <input type="hidden"  id="token" value="{{ csrf_token() }}">
                         
    <div class="chat-input hide">
        <input type="text" id="send_container_messge" autocomplete="off" name="message" placeholder="Type a message...">
        <div class="input-action-icon">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></a>
        </div>
    </div>
  </form>
 
</div>
<div class="chat-bot-icon" id="chat">
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square animate"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x "><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
</div>
<!-- Chat Bot UI Ends -->
<!-- Time line Html Start -->
 </div>
     
    
     
     
  
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-firestore.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



<script>
    toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>

  
<script>
function myFunction() {
   
 
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  
  if (checkBox.checked == true){
    document.getElementById("mo_body").style.height="600px";
    document.getElementById("Continue").style.display = "none";
    text.style.display = "block";
  } else {
      document.getElementById("mo_body").style.height="100px";
      document.getElementById("Continue").style.display = "block";
     text.style.display = "none";
  }
}
</script>

<script type="text/javascript">
    
$('#support_from').submit(function(e){
 
  
 e.preventDefault();
 
var form = new FormData(document.getElementById('support_from'));
var token = $('#token').val();
 form.append('_token', token);
var x = document.getElementById("myAudio"); 

  $.ajax({
    url: '/Client/send_support_message',
    type: 'post',
    data: form,             
    cache: false,
    contentType: false, //must, tell jQuery not to process the data
    processData: false,
        
    success: function(response){

    document.getElementById("support_from").reset();
    }
  });

 
  });
  </script>




<script>

  var firebaseConfig = {
      apiKey: "AIzaSyApzKmXOl1znu4NK4OODtH6as4LhfFxgF4",
    authDomain: "jobportal2-903d9.firebaseapp.com",
    databaseURL: "https://jobportal2-903d9.firebaseio.com",
    projectId: "jobportal2-903d9",
    storageBucket: "jobportal2-903d9.appspot.com",
    messagingSenderId: "831849369744",
    appId: "1:831849369744:web:6671df04d62b92f0850815",
    measurementId: "G-JK3LQXXEFL"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
   

 
var reff = firebase.database().ref("user_id_{{Auth::user()->id}}/support_messages/");
 
 //reff.orderBy("support_messages", "desc").limit(3);
 reff.on('child_added', function(snapshot) {
 var AuthName = '{{Auth::user()->id }}'
var myname = "{{Auth::user()->id }}";

 

 var name = (myname == snapshot.val().user_id) ? myname : snapshot.val().user_id;

 
  var recent_images = '<div class="col-4 col-md-2 col-xl-4" ><a ><img src="{{asset("/message_media")}}/'+snapshot.val().files+ '" class="img-fluid rounded border" alt=""></a></div>   ';

 
 var  image_tag = "";
 if(snapshot.val().file == ""){

    image_tag = "";
 }
 else if(snapshot.val().file_type == "image"){

      image_tag = '<a class="popup-media" href="{{asset("/message_media")}}/'+snapshot.val().files+ '"><img class="img-fluid rounded" src="{{asset("/message_media")}}/'+snapshot.val().files+'"></a>';
 
 }
 else if(snapshot.val().file_type == "document"){

    image_tag = '   <div class="document"><div class="btn btn-primary btn-icon rounded-circle text-light mr-2"><svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg></div><div class="document-body"><h6><a href="#" class="text-reset" title="'+snapshot.val().files+'">'+snapshot.val().files+ '</a></h6></div></div>';

 }
 
 if(name == AuthName){
 
  var block = '<div class="chat-bubble me"style="margin-right:31vh;">'+snapshot.val().text+'</div>';
 
    $("#messagess").append(block);
 
  
}else{
  

var block2 = '<div class="chat-bubble you">'+snapshot.val().text+'</div> ';

$("#messagess").append(block2);

 
}
  
});

</script>
   


 @endsection
 
