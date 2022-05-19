
 @extends('setup_header.providers_header')
  @section('title', 'Contract Details')  
 @section('content')
  
</header>


  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="257be86a981729866f2fa61c-|49" defer=""></script>
<!-- Time line Html Ends -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('/support_box/js/jquery-3.1.1.min.js')}}"></script>

 <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('/support_box/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/support_box/css/main.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{asset('/support_box/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/support_box/css/chatBot.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/support_box/css/timeline.css')}}" rel="stylesheet" type="text/css"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<style type="text/css">
  
  .media img {
    width: 60px;
    height: 60px
}

.reply a {
    text-decoration: none
}
</style>

<script type="text/javascript">
    
    function Signbtn(){

         document.getElementById('accept').style.display = "block";
        document.getElementById('btnSaveSign').style.display = "none";

    }
</script>
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
<h4 class="text-center" style="color: white;">Client Not Pay Yet</h4>
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
            $check_payment = App\Invoice::where('contract_id',$contrac_details->id)->count()
            @endphp
            <div class="layout-2-item text-center text-lg-left">
              <div>
                <div class="group group-xl group-middle">
                  <div>
                    <ul class="list-inline list-inline-xs">
                      <li>Contract Amount: <img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>&nbsp{{$contrac_details->contract_amount}}</li> 
                    </ul>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
 <section class="section section-sm bg-primary">
     
        <div class="container">
          <div class="layout-2">
            
            @php
            $check_payment = App\Invoice::where('contract_id',$contrac_details->id)->count()
            @endphp
            <div class="layout-2-item text-center text-lg-left">
              <div>
                <div class="group group-xl group-middle">
                   @php
                   $cancel_req = App\CancelRequest::where('reciever_id',Auth::user()->id)->orwhere('req_from',Auth::user()->id)->where('contract_id',$contrac_details->id)->count();
                    $cancel_request = App\CancelRequest::where('reciever_id',Auth::user()->id)->orwhere('req_from',Auth::user()->id)->where('contract_id',$contrac_details->id)->orderBy('id','desc')->first();
                  @endphp
    
                    @if($cancel_req > 0)
                    
                   @if($contrac_details->status == "cancel_req")
                   @if($cancel_request->req_from == Auth::user()->id)
                  
                  <a class="button button-lg button-primary-outline" style="border-radius:40px;" href="/Providers/decline_dispute/{{$contrac_details->id}}">Decline Disput Request</a>
                    
                    @else
                    
                  
                     @if($cancel_request->reciever_id == Auth::user()->id)
                    <a class="button button-lg button-primary-outline" style="border-radius:40px;" href="/Providers/decline_dispute/{{$contrac_details->id}}">Decline Disput Request</a>
                    <a href="/Providesr/cancel_contract_approval/{{$contrac_details->id}}" style="color:white; border-radius:40px;">Accept Disput Request</a>
                    @endif
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
                    $completed_contracts = App\Contract::where('buyer_id',$contrac_details->buyer_details->id)->count();
                    $ratings_count = App\Reviews::where('buyer_id',$contrac_details->buyer_details->id)->count();
                @endphp
                <div class="col-12">
                  <p class="heading-9">Buyer Details</p>
                  <hr>
                  <div class="row row-20">
                    <div class="col-md-12">
                      <!--Linear progress bar-->
                      <article class="progress-linear progress-bar-secondary">
                        <div class="progress-linear-header">
                            <div class="row">
                         <a href="/Client/Provider-profile/{{$contrac_details->buyer_details->id}}/{{$contrac_details->buyer_details->name}}"> 
                          @php
               
                
                @endphp
                @if($contrac_details->buyer_details->profile_image == null)
                 
                  <img class="profile-light-image" src="{{$contrac_details->buyer_details->img_url}}" alt="" style="width:80px;"/>

                 @else 
                
                   <img class="profile-light-image" src="{{asset('/JobPortal/public/profile_images')}}/{{$contrac_details->buyer_details->profile_image}}" alt="" style="width:80px;"/>
               
                 
              @endif
                          
                           </a>
                           <ul>
                              
                           <a href="/Client/Provider-profile/{{$contrac_details->buyer_details->id}}/{{$contrac_details->buyer_details->name}}"> <li>&nbsp {{$contrac_details->buyer_details->name}}</li> </a>
                            <li>&nbsp Completed Contracts: <strong>{{$completed_contracts}}</strong></li>
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
                    @if($contrac_details->status == "completed" && $contrac_details->tip_amount != 0)
                    <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>Tip For Provider</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title"><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:11px;">&nbsp{{$contrac_details->tip_amount}}</h5>
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
                  <form class="form-group" data-form-output="form-output-global" data-form-type="contact" method="post" action="/Providers/send_message/{{$contrac_details->buyer_details->id}}">
                      @csrf
                    <h4>Contact {{$contrac_details->buyer_details->name}}</h4>
                   
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
                      <p>Having trouble? <a href="/Providers/Resolution/{{$contrac_details->id}}/{{$contract_slug}}"style="font-size:3mm;">Visit Resolution Center</a></p>
                    </div>
                 </div>
              </div>
            </div>
            @endif
              </div>
            </div>
            
            
         
        
          </div>
          

          </div>
          <br>
          <br>
          <br>
          
          
      
      
      @if($contrac_details->status == "completed")
             @if($contrac_details->tip_amount != 0)
          <center>
         <div class="d-flex justify-content-center"> 
           <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
             
            <strong>Client give you tip <img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>&nbsp{{$contrac_details->tip_amount}} tip.</strong>
          </div>
          </div>
          </center>
          @endif
         
          @php
        $review_chk_count = App\Reviews::where('contract_id',$contrac_details->id)->count();
         @endphp
        @if($review_chk_count > 0)
         @php
            $review_chk = App\Reviews::where('contract_id',$contrac_details->id)->first();
            $reply_chk = App\Reply::where('parent_comment',$review_chk->id)->count();
         @endphp
       
        
                 <center>
    <div class="d-flex justify-content-center">
     <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
     
         <div class="card-body text-center"> 
          
                      <center><h3 class="text-center mb-5">{{$contrac_details->buyer_details->name}} Drop {{$review_chk->stars}} Stars Rating
                        <span id="dataReadonlyReview" data-rating-stars="{{$review_chk->stars}}" data-rating-readonly="true">- </span></h3>
                   </center>

                      <div class="col-md-12">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="media">
                             @php
                
                
                @endphp
                @if($contrac_details->buyer_details->profile_image == null)
                 
                 	 <img class="mr-3 rounded-circle img-thumbnail" alt="Bootstrap Media Preview" src="{{$contrac_details->buyer_details->img_url}}" />
               
                  
                 @else 
                
                  	 <img class="mr-3 rounded-circle img-thumbnail" alt="Bootstrap Media Preview" src="{{asset('/JobPortal/public/profile_images')}}/{{$contrac_details->buyer_details->profile_image}}" />
               
                 
              @endif 
                       
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-8 d-flex">
                                        <h5>{{$contrac_details->buyer_details->name}}</h5> <span>-{{$review_chk->created_at}}</span>
                                    </div>
                                    
                                    <div class="col-4">
                                        <div class="pull-right reply"> <a href="#"><span id="dataReadonlyReview" data-rating-stars="{{$review_chk->stars}}" data-rating-readonly="true">-</span></a> </div>
                                        
                                    </div>
                                    <p style="margin-left:22px;">{{$review_chk->review}}</p>
                                </div> 

                                @if($reply_chk > 0)
                                    @php
                                        $reply = App\User::where('id',$review_chk->provider_id)->first();
                                        $reply_view = App\Reply::where('parent_comment',$review_chk->id)->first();
                                    @endphp
                                <div class="media mt-4"> 
                                 @php
                
                
                @endphp
                @if($reply->profile_image == null)
                 
                 <a class="pr-3" href="#"><img class="rounded-circle img-thumbnail" alt="Bootstrap Media Another Preview" src="{{$reply->img_url}}" /></a>
               
                  
                 @else 
                
                  <a class="pr-3" href="#"><img class="rounded-circle img-thumbnail" alt="Bootstrap Media Another Preview" src="{{asset('/JobPortal/public/profile_images')}}/{{$reply->profile_image}}" /></a>
                 
              @endif
                                
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <h5>{{$reply->name}}</h5> <span>- {{$reply_view->created_at}}</span>
                                                
                                            </div>
                                            &nbsp&nbsp{{$reply_view->replys}}
                                        </div> 
                                    </div>
                                </div>
                                @else
                                 <center>
                             <div class="card col-sm-12 shadow p-3 mb-5 bg-white rounded">
                             
                                <div class="card-body text-center"> <img src=" https://i.imgur.com/d2dKtI7.png" height="100" width="100">
                                        <div class="comment-box text-center">
                                            <h4>Give reply this will also public with this review</h4>
                                            <form method="post" action="/Providers/provider_reply/{{$review_chk->id}}">
                                              @csrf
                                           
                                            <div class="comment-area"> 
                                              <textarea class="form-control" name="Review" placeholder="what is your view?" rows="4"></textarea> </div>
                                            <div class="text-center mt-4">
                                             <button class="btn btn-primary send px-5">Publish Reply<i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                                        </div>
                                        </form>
                                    </div>
                                  </div>
                                </center>
                                
                                @endif
                                
                            </div>
                        </div>
                     </div>
                </div>
            </div>
          </div>
        </div>
        </div>
        
        
        @else

          
        

      </center>
        @endif
   @endif
   
    @if($contrac_details->status == "waiting_for_provider_approval")

   
         <center>
 <form method="post" enctype="multipart/form-data"action="/Providers/contract_approval/{{$contrac_details->id}}">
          @csrf
    <div class="d-flex justify-content-center">      
     <div class="card col-sm-6 mx-auto">
      <br>

      <div class="container col-sm-12">
                  <h4>Put Your Signature</h4>
                  <div id="signArea" >
              <div class="sig sigWrapper" style="height:auto;">
                <div class="typed"></div>
                <canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
              </div>
            </div>
            <input type="hidden" id="image_field" name="image_field">
            <input type="button" value="Save" onclick="Signbtn()" id="btnSaveSign">
          </div>


      <div class="row justify-content-center mx-auto">
      <button type="submit" id="accept" class="btn btn-primary" style="display: none; border-radius:40px;">Accept</button> &nbsp &nbsp
      <a href="/Providers/contract_decline/{{$contrac_details->id}}" style="border-radius:40px;">Decline</a>
      
    </div>
      <br>
     </div>
     </div>
</form>
          </center>
        </div>
      </section>

 
  @endif
  
  <style>
      .chatbox {
    position: fixed;
    bottom: 0;
    right: 30px;
    width: 300px;
    height: 400px;
    background-color: #fff;
    font-family: 'Lato', sans-serif;

    -webkit-transition: all 600ms cubic-bezier(0.19, 1, 0.22, 1);
    transition: all 600ms cubic-bezier(0.19, 1, 0.22, 1);

    display: -webkit-flex;
    display: flex;

    -webkit-flex-direction: column;
    flex-direction: column;
}

.chatbox--tray {
    bottom: -350px;
}

.chatbox--closed {
    bottom: -400px;
}

.chatbox .form-control:focus {
    border-color: #1f2836;
}

.chatbox__title,
.chatbox__body {
    border-bottom: none;
}

.chatbox__title {
    min-height: 50px;
    padding-right: 10px;
    background-color: #1f2836;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    cursor: pointer;

    display: -webkit-flex;
    display: flex;

    -webkit-align-items: center;
    align-items: center;
}

.chatbox__title h5 {
    height: 50px;
    margin: 0 0 0 15px;
    line-height: 50px;
    position: relative;
    padding-left: 20px;

    -webkit-flex-grow: 1;
    flex-grow: 1;
}

.chatbox__title h5 a {
    color: #fff;
    max-width: 195px;
    display: inline-block;
    text-decoration: none;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.chatbox__title h5:before {
    content: '';
    display: block;
    position: absolute;
    top: 50%;
    left: 0;
    width: 12px;
    height: 12px;
    background: #4CAF50;
    border-radius: 6px;

    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.chatbox__title__tray,
.chatbox__title__close {
    width: 24px;
    height: 24px;
    outline: 0;
    border: none;
    background-color: transparent;
    opacity: 0.5;
    cursor: pointer;

    -webkit-transition: opacity 200ms;
    transition: opacity 200ms;
}

.chatbox__title__tray:hover,
.chatbox__title__close:hover {
    opacity: 1;
}

.chatbox__title__tray span {
    width: 12px;
    height: 12px;
    display: inline-block;
    border-bottom: 2px solid #fff
}

.chatbox__title__close svg {
    vertical-align: middle;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-width: 1.2px;
}

.chatbox__body,
.chatbox__credentials {
    padding: 15px;
    border-top: 0;
    background-color: #f5f5f5;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;

    -webkit-flex-grow: 1;
    flex-grow: 1;
}

.chatbox__credentials {
    display: none;
}

.chatbox__credentials .form-control {
    -webkit-box-shadow: none;
    box-shadow: none;
}

.chatbox__body {
    overflow-y: auto;
}

.chatbox__body__message {
    position: relative;
}

.chatbox__body__message p {
    padding: 15px;
    border-radius: 4px;
    font-size: 14px;
    background-color: #fff;
    -webkit-box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
    box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
}

.chatbox__body__message img {
    width: 40px;
    height: 40px;
    border-radius: 4px;
    border: 2px solid #fcfcfc;
    position: absolute;
    top: 15px;
}

.chatbox__body__message--left p {
    margin-left: 15px;
    padding-left: 30px;
    text-align: left;
}

.chatbox__body__message--left img {
    left: -5px;
}

.chatbox__body__message--right p {
    margin-right: 15px;
    padding-right: 30px;
    text-align: right;
}

.chatbox__body__message--right img {
    right: -5px;
}

.chatbox__message {
    padding: 15px;
    min-height: 50px;
    outline: 0;
    resize: none;
    border: none;
    font-size: 12px;
    border: 1px solid #ddd;
    border-bottom: none;
    background-color: #fefefe;
}

.chatbox--empty {
    height: 262px;
}

.chatbox--empty.chatbox--tray {
    bottom: -212px;
}

.chatbox--empty.chatbox--closed {
    bottom: -262px;
}

.chatbox--empty .chatbox__body,
.chatbox--empty .chatbox__message {
    display: none;
}

.chatbox--empty .chatbox__credentials {
    display: block;
}
  </style>
  
  <div class="chatbox chatbox--tray chatbox--empty" >
    <div class="chatbox__title">
        <h5><a href="#">Customer Service</a></h5>
        <button class="chatbox__title__tray">
            <span></span>
        </button>
        <button class="chatbox__title__close">
            <span>
                <svg viewBox="0 0 12 12" width="12px" height="12px">
                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                </svg>
            </span>
        </button>
    </div>
    <form method="post" id="support_from">
         @csrf
    
    <div class="chatbox__body" id="messagess" style="overflow:scroll;height:250px;">
        <!-- <div class="chatbox__message me">Welcome to our site, if you need help simply reply to this message, we are online and ready to help.</div>-->
        <!--<div class="chatbox__message you">Hi, I am back</div>-->
         
    </div>
    
    
    <div class="chatbox__credentials">
        <h5>Support Chat</h5>
        <button type="submit" class="btn btn-success btn-block">Start Chatting</button>
    </div>
   
    <textarea class="chatbox__message form-control col-xs-12" name="message" placeholder="Write something interesting"></textarea>
    
    <center>
    <div class="chatbox__message">
    <button  class="btn btn-success btn-md" type="submit">Send</button></center>
   </div>
   </center>
   </form>
   
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
    (function($) {
    $(document).ready(function() {
        var $chatbox = $('.chatbox'),
            $chatboxTitle = $('.chatbox__title'),
            $chatboxTitleClose = $('.chatbox__title__close'),
            $chatboxCredentials = $('.chatbox__credentials');
        $chatboxTitle.on('click', function() {
            $chatbox.toggleClass('chatbox--tray');
        });
        $chatboxTitleClose.on('click', function(e) {
            e.stopPropagation();
            $chatbox.addClass('chatbox--closed');
        });
        $chatbox.on('transitionend', function() {
            if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
        });
        $chatboxCredentials.on('click', function(e) {
            e.preventDefault();
            $chatbox.removeClass('chatbox--empty');
        });
    });
})(jQuery);

</script>

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
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

<script type="text/javascript">
    
$('#support_from').submit(function(e){
 
  
 e.preventDefault();
 
var form = new FormData(document.getElementById('support_from'));
var token = $('input[name=_token]').val();

 form.append('_token', token);
var x = document.getElementById("myAudio"); 

  $.ajax({
    url: '/Providers/send_support_message',
    type: 'post',
    data: form,             
    cache: false,
    contentType: false, //must, tell jQuery not to process the data
    processData: false,
        
    success: function(response){
    $('#messagess').append(response);
    document.getElementById("support_from").reset();
    }
  });

 
  });
  </script>


<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
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
console.log(snapshot.val().files);
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
 
  var block = '<div class="chatbox__message me ">'+snapshot.val().text+'</div>';
 
    $("#messagess").append(block);
 
  
}else{
  

var block2 = '<div class="chatbox__message you">'+snapshot.val().text+'</div> ';

$("#messagess").append(block2);

 
}
  
});

</script>



 @endsection
 
 
 