
 @extends('setup_header.providers_header')
 @section('content')
  
</header>
<style type="text/css">
  
  .media img {
    width: 60px;
    height: 60px
}

.reply a {
    text-decoration: none
}
</style>
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/8263-removebg-preview.png')}}"width="748" height="528">
           </div>
        </div>
        
        </header>
      </div>

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

@elseif($contrac_details->status == "decline")

<div class="alert alert-info"style="background-color: red; ">
<h4 class="text-center" style="color: white;">Contract Decline</h4>
</div>


@endif
</div>

<center>
 <div class="card col-sm-6">
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
                  <p>by {{$contrac_details->buyer_details->name}}</p>
        </div>
              </div>
            </div>
            <div class="row"> 
            {!! $contrac_details->contract_description !!}
           </div>
        </div>
    </section>
</div>
</center>
<br>

<center>
    
     <div class="card col-sm-6">
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

@if($contrac_details->status == "waiting_for_provider_approval")

<center>
        
        <form method="post" enctype="multipart/form-data"action="/Providers/contract_approval/{{$contrac_details->id}}">
          @csrf
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
            <input type="button" value="Save" id="btnSaveSign">
          </div>


      <div class="row justify-content-center mx-auto">
      <button type="submit" class="btn btn-primary">Accept</button> &nbsp &nbsp
      <a href="/Providers/contract_decline/{{$contrac_details->id}}">Decline</a>
      
    </div>
      <br>
     </div>
</form>
      </center>


      @else
<center>

   @php

      $cancel_req = App\CancelRequest::where('reciever_id',Auth::user()->id)->where('contract_id',$contrac_details->id)->count();

  @endphp
    
    @if($cancel_req > 0)
   @if($contrac_details->status == "cancel_req")
  <center>
      
     <div class="card col-sm-6">
      <br>
        <a href="/Client/cancel_contract_approval/{{$contrac_details->id}}">Accept Cancel Request</a> 
      <br>
     </div>

      </center>
      @endif
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
                $reply = App\Reply::where('parent_comment',$review_chk->id)->first();
          
          $buyer_details = App\User::where('id',$review_chk->buyer_id)->first();
          
         @endphp
       

         <center>
     <div class="card col-sm-6 shadow p-3 mb-5 bg-white rounded">
     
         <div class="card-body text-center"> 
          
                      <center><h4 class="text-center mb-5">Client Drop {{$review_chk->stars}} Stars Rating According To Your Work
                        <span id="dataReadonlyReview" data-rating-stars="{{$review_chk->stars}}" data-rating-readonly="true">- </span></h4>
                   </center>

                      <div class="col-md-12">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="media"> <img class="mr-3 rounded-circle img-thumbnail" alt="Bootstrap Media Preview" src="{{$buyer_details->profile_image}}" />
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-8 d-flex">
                                        <h5>{{$buyer_details->name}}</h5> <span>-{{$review_chk->created_at}}</span>
                                    </div>
                                    <div class="col-4">
                                        <div class="pull-right reply"> <a href="#"><span id="dataReadonlyReview" data-rating-stars="{{$review_chk->stars}}" data-rating-readonly="true">-</span></a> </div>
                                    </div>
                                </div> <p style="margin-right: -10;">{{$review_chk->review}}</p>

                                @if($reply_chk > 0)
                                <div class="media mt-4"> <a class="pr-3" href="#"><img class="rounded-circle img-thumbnail" alt="Bootstrap Media Another Preview" src="{{Auth::user()->profile_image}}" /></a>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <h5>{{Auth::user()->name}}</h5> <span>- {{$review_chk->created_at}}</span>
                                            </div>
                                        </div> {{$reply->replys}}
                                    </div>
                                </div>
                                @else

                                <br>
                                <form method="post" action="/Providers/provider_reply/{{$review_chk->id}}">
                                  @csrf
                                  <div class="comment-area"> 
                      <textarea class="form-control" name="Review" placeholder="what is your respoonse?" rows="4"></textarea> </div>
                    <div class="text-center mt-4">
                     <button class="btn btn-primary send px-5">Reply<i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                
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
      
     <div class="card col-sm-6">
      <br>
      <i class="fa fa-rocket" aria-hidden="true"style="font-size: 70px;color: #1087EB;"></i>
      <p>CONTRACT WAS STARTED</p>
       @php
                       $contract_slug = str_replace(" ","-",$contrac_details->contract_name);
                
        @endphp
      <p>Having trouble? <a href="/Providers/Resolution/{{$contrac_details->id}}/{{$contract_slug}}">Visit Resolution Center</a></p>
        <br>
     </div>

      </center>
 @endif
     </div>
     <br>
<br>
 <br>
  
 


 @endsection