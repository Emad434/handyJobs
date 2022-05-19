@extends('client_header.client_header')
    @section('title', 'Request Detail')  
 @section('content')
 
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
 
 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
 
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="http://cdnjs.com/libraries/fancybox"></script>
 @php
    $category = App\Services::where('id',$request_details->request_category)->first();
    $image = App\Images::where('entity_id',$request_details->id)->where('entity_type','App\ClientRequest')->get();
    $image_count = App\Images::where('entity_id',$request_details->id)->where('entity_type','App\ClientRequest')->count();
  
    @endphp
    
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
      
 </section>
 
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
                              <p class="object-inline object-inline_sm"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>Budget (${{$request_details->amount}})</span></p>
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
     <!--    <div class="block offset-top-2">-->
     <!--            <h4>Images</h4>-->
     <!--             <hr>-->
                   
     <!--     <div class="row row-20">-->
    	<!--<div class='list-group gallery'>-->
           
     <!--           <div class="row">-->
     <!--            @foreach($image as $images)-->
     <!--           <a class="thumbnail fancybox" rel="ligthbox" href="{{asset('/JobPortal/public/post_request_image')}}/{{$images->file_name}}">-->
                   
     <!--               <img class="img-responsive" alt="" src="{{asset('/JobPortal/public/post_request_image')}}/{{$images->file_name}}" />-->
                    
     <!--           </a>-->
     <!--           @endforeach-->
                
     <!--       </div> -->
     <!--       </div>-->
     <!--       </div>-->
            
     <!--       </div>-->
            
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
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
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
                 
                 	<img class="company-minimal-image" src="{{$provider_details->img_url}}" alt="" width="38" height="49">
               
                  
                 @else 
                
      <img class="company-minimal-image" src="{{asset('JobPortal/public/profile_images')}}/{{$provider_details->profile_image}}" alt="" width="38" height="49">
               
                 
              @endif
                            
                        </figure>
                        <div class="company-minimal-main">
                      
                          <h5 class="company-minimal-name">{{$provider_details->name}} @if($Proposal->status == "Active") &nbsp<i class="fa fa-trophy" style="color:yellow;" title="Accepted"></i>@endif - <span id="dataReadonlyReview" data-rating-stars="{{$review_avg}}" data-rating-readonly="true"> </span> {{$review_avg}}</h5>
                         
                          <p>{{$Proposal->proposal_details}}</p>
                          <hr><br>
                           <p>Proposal Amount: <strong>${{$Proposal->proposal_amount}}</strong></p>
                          <p>Proposal Status:  <strong>{{$Proposal->status}}</strong></p>
                          @if($Proposal->status == "pending")
                          <a href="/Client/accept_proposal/{{$Proposal->id}}/{{$Proposal->provider_id}}" class="btn btn-primary">Accept</a>
                          @elseif($Proposal->status == "Active")
                           
                            <a href="/Client/Conversation/{{$Proposal->provider_id}}/{{$provider_details->name}}" class="btn btn-danger">Contact</a>
                          @endif
                        </div>
                      </article>
                    </td>
                    <hr>
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