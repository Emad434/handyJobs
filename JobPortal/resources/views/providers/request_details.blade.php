 @extends('setup_header.providers_header')
  @section('title', 'Request Details')  
   
 @section('content')
 
 

 @php
    $category = App\Services::where('id',$request_details->request_category)->first();
    $chk_auth_bid = App\Proposal::where('provider_id',Auth::user()->id)->where('request_id',$id)->count();
    $image = App\Images::where('entity_id',$request_details->id)->where('entity_type','App\ClientRequest')->get();
     $image_count = App\Images::where('entity_id',$request_details->id)->where('entity_type','App\ClientRequest')->count();
      $currency = App\Amount::first();
    @endphp
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
 
 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
 
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="http://cdnjs.com/libraries/fancybox"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
        
      .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
  
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
    </style>

 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">About Request</h3>
            </div>
         
        </div>
        
        
        <div class="breadcrumbs-custom-aside">
          <div class="container">
              @if (session('message'))
                <div class="alert alert-danger"style="background-color: red; color: white;">
                    {{ session('message') }}
                </div>
                @endif
            <ul class="breadcrumbs-custom-path">
                @if($chk_auth_bid < 1)
                    @php    
                       $bid_amount = App\Amount::where('bid_amount' ,'!=',null)->first();
                       
                      @endphp
                   @if(Auth::user()->widthdrwal_amount > $bid_amount->bid_amount || Auth::user()->widthdrwal_amount == $bid_amount->bid_amount) 
              <li><button class="button button-lg button-primary-outline fa fa-paper-plane" style="border-radius:40px;" data-toggle="modal" data-target="#exampleModal"> Send Proposal</button></li>
                    @else
                      
              <li><button class="button button-lg button-primary-outline fa fa-paper-plane" style="border-radius:40px;" data-toggle="modal" data-target=".bd-example-modal-lg"> Send Proposal</button></li>
                    @endif
             @else
              <li><button class="button button-lg button-primary-outline fa fa-check" style="border-radius:40px;"> Proposal Send</button></li>
             @endif
            </ul>
           
          </div>
               
                    
        </div>
         @if (session('message'))
         <span class="badge badge-tertiary"style="width:100%;">
            {{ session('message') }}
          </span>
          @endif
 </section>
 
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Proposal Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Your Work images (Optional) </h6>
         <div class="contanier">
                      <form method="post" action="/Providers/post_request_images" class="dropzone" id="dropzone" enctype="multipart/form-data">
                          @csrf
                      <div class="dz-preview dz-file-preview">
                    <div class="dz-details">
                      <div class="dz-filename"><span data-dz-name></span></div>
                      <div class="dz-size" data-dz-size></div>
                      <img data-dz-thumbnail />
                     </div>
                     <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                     <div class="dz-success-mark"><span>✔</span></div>
                     <div class="dz-error-mark"><span>✘</span></div>
                     <div class="dz-error-message"><span data-dz-errormessage></span></div>
                    </div>
                     </div>
                     
                     </form>
                     
                     
        <br>
           <h6>Other Details</h6>
           <br>
         <form method="post" action="/Providers/send_proposal/{{$request_details->id}}" enctype="multipart/form-data">
				@csrf
             	<div class="container col-sm-12">
            		<div class="row">
            			<div class=" col-sm-6">
            				<input type="number" name="amount" placeholder="Offer Amount"value="" class="form-control">
            
            			</div>

            			<div class=" col-sm-6">
	            		   <input type="number" name="days" placeholder="Days"value="" class="form-control">
             			</div>
              		</div>



            	 <div class="row">
            			<div class=" col-sm-12">
            				<textarea name="details" placeholder="Details"class="form-control"></textarea>
                        </div>
            		 
            	 </div>
            	</div>
            	<br>
                <input type="hidden" name="image_id" id="demo" placeholder="" value="" class="form-control">
                    <br>
                        <hr>
                        <br>
                    <div class="container col-sm-12">
                		 <button class="btn btn-primary" style="width:100%;">Submit</button>
                    </div>
            	</form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
 
      <section class="section section-md">
         <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="layout-details">
                <article class="company-light company-light_1">
                  
                  <div class="company-light-main">
                    <h5 class="company-light-title">{{$request_details->days}} DAYS</h5>
                    <div class="company-light-info">
                      <div class="row row-15 row-bordered">
                        <div class="col-sm-6">
                          <ul class="list list-xs">
                            <li>
                              <p class="object-inline object-inline_sm"><span class="icon icon-1 text-primary mdi mdi-tag"></span><span>{{$category->name}}</span></p>
                            </li>
                            <li>
                              <p class="object-inline object-inline_sm"><span class="icon icon-default text-primary mdi mdi-clock"></span><span>Post Date: {{$request_details->created_at}}</span></p>
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-6">
                          <ul class="list list-xs">
                            <li>
                              <p class="object-inline object-inline_sm"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>Budget <img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>&nbsp{{$request_details->amount}}</span></p>
                            </li>
                            <li>
                              <p class="object-inline object-inline_sm"> <span class="icon icon-sm text-primary mdi mdi-eye"></span><span>Status {{$request_details->status}}</span></p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
          
              </div>
            </div>
            
            
                 <div class="block offset-top-2">
                        
                        <h4>Request Details</h4>
                        <p>{{$request_details->request_details}}</p>
                     
                 </div>
            <div class="block offset-top-2">
                 <h4>Images</h4>
                  <hr>
                  </div>
                  @if($image_count > 0)
    <div class="container">
  	<div class="row row-20">
           <div class="row">
                @foreach($image as $images)
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" 
                   data-image="{{asset('/JobPortal/public/post_request_image')}}/{{$images->file_name}}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail row"
                         src="{{asset('/JobPortal/public/post_request_image')}}/{{$images->file_name}}" 
                        style="width:150px;"
                        
                         alt="Another alt text">
                </a>&nbsp; &nbsp;
                @endforeach
            </div>
        </div>
</div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-7" src="" >
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @else
        
        <h6>No images</h6>
        
        
        @endif
        
        
        
            
            
                 <div class="block offset-top-2">
                <h4>{{$Proposal_count}} Proposals</h4>
                <table class="table-job-listing table-responsive">
                  <tbody>
                  @if($Proposal_count > 0)
                   @foreach($Proposals as $Proposal)
                    @php
                     $provider_details = App\User::where('id',$Proposal->provider_id)->first();
                        $rating = App\Reviews::where('provider_id',$provider_details->id)->get();
                          $review_avg = $rating->avg('stars');
     
                    @endphp
                      <tr>
                    
                    <td class="table-job-listing-main">
                      <!-- Company Minimal-->
                      <article class="company-minimal">
                        <figure class="company-minimal-figure">
                              @if($provider_details->profile_image == null)
                             <img  class="company-minimal-image" src="{{$provider_details->img_url}}" width="38" height="49"/>
                             @else 
                             <img class="company-minimal-image" src="{{asset('JobPortal/public/profile_images')}}/{{$provider_details->profile_image}}" width="38" height="49"/>
                          @endif 
                         </figure>
                        <div class="company-minimal-main">
                          <h5 class="company-minimal-name">{{$provider_details->name}} - <span id="dataReadonlyReview" data-rating-stars="{{$review_avg}}" data-rating-readonly="true"> </span> {{$review_avg}}</h5>
                          <p>{{$Proposal->proposal_details}}</p>
                          <hr><br>
                           <p>Proposal Amount: <strong><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>&nbsp{{$Proposal->proposal_amount}}</strong></p>
                          
                        </div>
                      </article>
                    </td>
                   
                    <td>Proposal Days: {{$Proposal->proposal_days}} Days</td>
                    
                    </tr>
                 
                 
                  @endforeach
                     @else
                    
                    <tr>
                     <td class="table-job-listing-badge">
                        <div class="col-4">
                        <div class="pull-right reply">
                            <p>No request found.</p>
                         </div>
                    </div>
                  </td>
                 </tr>
                
                 @endif
                   
                 
                </tbody></table>
              </div>
          </div>
        </div>
      </section>
      
      
    
    </div>


<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title alert alert-danger" sty id="exampleModalLabel">Not Enough Balance You Have!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h5 class="modal-title badge badge-danger"style="background-color:red;width:100%;">Recharge your wallet up to proposal amount.</h5>
          <div class="container">
               <div class="leftorde br">
                    <div class="row"> 
                        <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                    </div>
              </div>
                    
                    
            <form method="post" action="/Providers/recharge_wallet"> 
                    	@csrf
                     <div class="container col-sm-12">
                        
                        <div class="row">
                     	<input placeholder="Cardholder's name:" class="form-control col-6"name="holder_name" Required> 
                    	
                     	<input placeholder="Card Number:" class="form-control col-6"name="card_no" Required>
                    	</div>
                        <div class="row">
                           <input placeholder="Expiry Month:" class="form-control col-6"name="expiry_month" Required>  
                        <input placeholder="Expiry Year:" class="form-control col-6" name="expiry_year" Required> 
                        </div>
                              <div class="row">
                          <input id="cvv" name="cvv"class="form-control col-6" placeholder="CVV:" Required>  
                              <input type="number" value=""class="form-control col-6" placeholder="Amount:" name="amount" Required > 
                         </div>
					  </div> 
					  <br>
					  <div class="col-12"><button class="btn btn-primary" style="border-radius:40px;">Charge Wallet</button></div>
                    </form>
       
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>

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
 
      var list = [];
        Dropzone.options.dropzone =
         {

            maxFilesize: 12,
            renameFile: function(file) {
                 var dt = new Date();
                var time = dt.getTime();
               return time+file.name;


            },

            acceptedFiles: ".jpeg,.jpg,.png,.gif,jfif",
            addRemoveLinks: true,
            timeout: 50000,

       
       
            success: function(file,response) 
            {
            
            console.log(response.image_id);    
                
            list.push(response.image_id);
              $('#demo').val(list);
              
              
                
              
               
                   
            },

            error: function(file, response)
            {
               return false;
            }


};




    </script>
    
    <script type="text/javascript">
    
   let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

   
</script>


@endsection