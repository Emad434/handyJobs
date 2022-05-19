
 @extends('client_header.client_header')
 @section('content') 

  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="257be86a981729866f2fa61c-|49" defer=""></script>
<!-- Time line Html Ends -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('/support_box/js/jquery-3.1.1.min.js')}}"></script>

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

 <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('/support_box/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/support_box/css/main.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{asset('/support_box/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/support_box/css/chatBot.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/support_box/css/timeline.css')}}" rel="stylesheet" type="text/css"/>

 <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Contract Details</h2>
              
             </div>
          </div>
          <div class="jc-decoration">
            <div class="jc-decoration-item jc-decoration-item-1">
              <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970" preserveAspectRatio="none">
                <path d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
              </svg>
            </div>
            <div class="jc-decoration-item jc-decoration-item-2">
              <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970" preserveAspectRatio="none">
                <path d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
              </svg>
            </div>

  <img class="jc-decoration-image" src="{{asset('/front_css/images/2354-removebg-preview.png')}}" alt="" width="748" height="528"/>

           </div>
        </div>
        
        </header>
 

<div class="container col-sm-7"> 

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

 
@endif
</div>

<center>
 <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
  <section class="section section-md text-center">
        <div class="container">
          <div class="text-center">
            <h2>{{$contrac_details->contract_name}}</h2>
         
          </div>
        </div>
 
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
            	<div class="container">
            		<ul>
            			<li>
            	  	<h4>Order #{{$contrac_details->order_no}} </h4></li><li> 
            	  		<div class="text-right col-sm-12">
            	  		<h2>${{$contrac_details->contract_amount}}</h2>

            	  	</div>
            	  </li>
            			<p>for: <a href="/Client/Provider-profile/{{$contrac_details->provider_details->id}}/{{$contrac_details->provider_details->name}}">{{$contrac_details->provider_details->name}}</a></p>
 				       </div>
              </div>
            </div>
            <br>
            <div class="container"> 
            <p>{!! $contrac_details->contract_description !!}</p>
       		 </div>
        </div>
    </section>
</div>
</center>
<br>
@php
$check_payment = App\Invoice::where('contract_id',$contrac_details->id)->count()
@endphp


@if($check_payment == 0 )

@if($contrac_details->status == "active")
 <br>

     <center>
      <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
      <br>
        <a href="/Client/Contract-Payment/{{$contrac_details->provider_details->id}}/{{$contrac_details->id}}">Waiting For Payment From You  </a>  
      <br>
     </div>
   </center>
   @endif

@else

<center>
		
		 <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
		 	<br>
			 	<div class="row">
			 		<div class="container">

         @foreach ($contrac_details->images as $key)
      
			 		<img src="{{asset('/doc_signs')}}/{{$key->file_name}}"style="width:300px;height:200px;">
			 		<strong><p>{{$key->signature_type}}</p></strong>

         @endforeach
			 	</div>
			 	</div>
 		 	<br>
		 </div>

</center>
<br>

  @php

      $cancel_req = App\CancelRequest::where('reciever_id',Auth::user()->id)->where('contract_id',$contrac_details->id)->count();

  @endphp
    
    @if($cancel_req > 0)
   @if($contrac_details->status == "cancel_req")
  <center>
      
     <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
      <br>
        <a href="/Client/cancel_contract_approval/{{$contrac_details->id}}">Accept Cancel Request</a> 
      <br>
     </div>

      </center>
      @endif
      @endif
      <br>

      @if($contrac_details->status == "active")
       <center>
      
     <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
      <br>
        <a href="/Client/complete_contract_req/{{$contrac_details->id}}" class="btn btn-primary">Mark this as completed</a> 
      </div>

      </center>

       @endif

          @if($contrac_details->status == "completed")
          @php
        $review_chk_count = App\Reviews::where('contract_id',$contrac_details->id)->count();
         @endphp
        @if($review_chk_count == 0)
       <center>
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
        </center>
        @else

           @php
            $review_chk = App\Reviews::where('contract_id',$contrac_details->id)->first();
            $reply_chk = App\Reply::where('parent_comment',$review_chk->id)->count();
         @endphp
       

         <center>
     <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
     
         <div class="card-body text-center"> 
          
                      <center><h3 class="text-center mb-5">You Drop {{$review_chk->stars}} Stars Rating
                        <span id="dataReadonlyReview" data-rating-stars="{{$review_chk->stars}}" data-rating-readonly="true">- </span></h3>
                   </center>

                      <div class="col-md-12">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="media"> <img class="mr-3 rounded-circle img-thumbnail" alt="Bootstrap Media Preview" src="{{Auth::user()->profile_image}}" />
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-8 d-flex">
                                        <h5>{{Auth::user()->name}}</h5> <span>-{{$review_chk->created_at}}</span>
                                    </div>
                                    <div class="col-4">
                                        <div class="pull-right reply"> <a href="#"><span id="dataReadonlyReview" data-rating-stars="{{$review_chk->stars}}" data-rating-readonly="true">-</span></a> </div>
                                    </div>
                                </div> <p style="margin-right: -10;">{{$review_chk->review}}</p>

                                @if($reply_chk > 0)
                                <div class="media mt-4"> <a class="pr-3" href="#"><img class="rounded-circle img-thumbnail" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/xELPaag.jpg" /></a>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <h5>Simona Disa</h5> <span>- 3 hours ago</span>
                                            </div>
                                        </div> letters, as opposed to using 'Content here, content here', making it look like readable English.
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
      </center>
        @endif
        @endif

<center>
       @if($contrac_details->status == "cancelled")
		 <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
		 	<br>
	        <p>😞 Ooopsss! Contract was cancelled</p>
     
  	 	<br>
		 </div>
@endif

     @if($contrac_details->status == "active")
      <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
      <br>
      <i class="fa fa-rocket" aria-hidden="true"style="font-size: 70px;color: #1087EB;"></i>
      <p>CONTRACT WAS STARTED</p>
       @php
                       $contract_slug = str_replace(" ","-",$contrac_details->contract_name);
                
          @endphp
      <p>Having trouble? <a href="/Client/Resolution/{{$contrac_details->id}}/{{$contract_slug}}">Visit Resolution Center</a></p>
        <br>
     </div>
     @endif

      </center>
 
		 </div>
     <br>

     <center>
      <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
      <br>
        <a href="/Providers/Support/Inbox">Support</a>     
      <br>
     </div>
   </center>
<br>
 <br>
 

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



   @endif


 @endsection