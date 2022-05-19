
 @extends('client_header.client_header')
  @section('title', 'Provider Profile')  
   
 @section('content')

 @php
  $country = App\Locations::where('id',$provider_details->country)->first();
 $location = App\Locations::where('id',$provider_details->city)->first();
 $category = App\Services::where('id',$ProviderDetails->resume_category)->first();
 $ratings = App\Reviews::where('provider_id',$id)->get();
 $rating_count = App\Reviews::where('provider_id',$id)->count();
                                
                                
                                      $last_count = App\ActiveStatus::where('user_id',$id)->count();
                    if($last_count > 0){
                    $last_seen = App\ActiveStatus::where('user_id',$id)->first();
                 date_default_timezone_set("asia/karachi");

                   $dateTime = new DateTime($last_seen->last_seen);
                  $current_time = new DateTime("now");
                 $dateTime->modify('+5 minutes');
                 }else{
                 
                 $last_seen = null;
                 $dateTime = null;
                 $current_time = null;
                 }
@endphp
				            
 @if($rating_count > 0)
 @foreach($ratings as $rating)
				            
				            @php
				             $review_avg = $rating->avg('stars');
                            
                             $round_up = round($review_avg);
				            $buyer = App\User::where('id',$rating->buyer_id)->first();
				            
				          
 @endphp
 
				           @endforeach
				             @endif
<section class="parallax-container section-lg bg-overlay-3" data-parallax-img="{{asset('/front_css/images/parallax-2.jpg') }}"><div class="material-parallax parallax"><img src="{{asset('/front_css/images/parallax-2.jpg') }}" alt="" style="display: block; transform: translate3d(-50%, 181px, 0px) rotate(0.1deg);"></div>
 <div class="parallax-content">
  <div class="container">
    <div class="placeholder-1"></div>
  </div>
 </div>
</section>

<section class="section section-md">
        <div class="container"> 
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="layout-info">
                <div class="layout-info-main">
                  <article class="company-light">
                    <figure class="company-light-logo">
                        <div class="avatar @if($current_time >= $dateTime) avatar-away @else avatar-online @endif">
                        <img class="company-light-logo-image" src="{{asset('JobPortal/public/profile_images')}}/{{$provider_details->profile_image}}" alt="" width="45" height="45">
                        </div>
                    </figure>
                    <div class="company-light-main">
                      <h5 class="company-light-title">{{$provider_details->name}}</h5>
                      <p><span class="icon icon-1 mdi mdi-tag text-primary"></span> {{$category->name}}</p>
                      <p><span class="icon icon-1 mdi mdi-map-marker text-primary"></span> {{$country->name}}</p>
                      <p class="object-inline object-inline_sm"><a href="{{asset('/JobPortal/public/resume_files/')}}/{{$ProviderDetails->resume}}"><span class="icon icon-1 mdi mdi-file-document text-primary"></span><span>Download Resume</span></a></p>
                    </div>
                  </article>
                </div>
              
                   
              </div>
              
              <h4 class="heading-decorated_1">About Provider</h4>
              <p class="text-style-1">{{$ProviderDetails->intro}}</p>
                             <h4 class="heading-decorated_1">Offers</h4>
    <section class="section section-md">
         <div class="container">
           <div class="row row-40">
             <table class="table-job-offers table-responsive">
                @php
                    $gigs = App\Gig::where('user_id',$provider_details->id)->get();
                @endphp
                @foreach($gigs as $gig)
                
                 	@php

               	$gig_slug = str_replace(" ","-",$gig->title);
                $gig_category = App\Services::where('id',$gig->service_category)->first();   
                $rating = App\Reviews::where('provider_id',$gig->user_details->id)->get();
                $rating_count = App\Reviews::where('provider_id',$gig->user_details->id)->count();
                $review_avg = $rating->avg('stars');
                $round_up = round($review_avg);
                $Bookmark = App\Bookmark::where('gig_id',$gig->id)->where('user_id',Auth::user()->id)->count();
                $gig_region = App\Locations::where('id',$gig->region)->first();
                
                
               	@endphp

                  <tr>
                    <td class="table-job-offers-date">
                          @if($Bookmark > 0)
                         
                          <span id="aa_{{$gig->id}}">
                          <button class="wishlist" style="background-color:white;border-color:white;" onclick="unsavefunction('{{$gig->id}}')">
                            <i class="fa fa-heart-o" style="color:red;"></i>
                          </button>
                          </span>
                          
                          @else
                          <span id="aa_{{$gig->id}}">
                          <button class="wishlist" style="background-color:white;border-color:white;" onclick="myfunction('{{$gig->id}}')">
                            <i class="fa fa-heart-o"></i>
                          </button>
                          </span>
                          @endif
                        
                        </td>
                    <td class="table-job-offers-main">
                      <!-- Company Light-->
                      <article class="company-light">
                        <figure class="company-light-figure"><img class="company-light-image" src="{{asset('JobPortal/public/gig_thumbnail')}}/{{$gig->thumbnail}}" alt="" width="45" height="45"/>
                        </figure>
                        <div class="company-light-main">
                          <h5 class="company-light-title"><a href="/Client/Gig-Details/{{$gig->id}}/{{$gig_slug}}">{{$gig->title}}</a></h5>
                          <p class="text-color-default">{{$gig_category->name}}</p>
                        </div>
                      </article>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-sm text-primary mdi mdi-cash"></span>
                      <span>${{$gig->rate}} \  @if($rating_count > 0) <i class="fa fa-star-o rating-star" style="color:#ffff00;"></i> {{$round_up}} @else Not Rated @endif
                   
                   
                    </span></div>
                    </td>
                    @if($gig_region != null)
                    <td class="table-job-offers-meta">
                        
                      <div class="object-inline"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span>{{$gig_region->name}}</span></div>
                    </td>
                    @endif
                    <td class="table-job-offers-badge"><span class="badge badge-tertiary">{{ __(('Available on')) }}: {{$gig->available_on}}/{{$gig->available_end}}</span></td>
                  </tr>
                  @endforeach
                   
                </table>
           
           </div>
        </div>
       </section>
       
       <h4 class="heading-decorated_1">Reviews</h4>
            <div class="block offset-top-2">
                 <table class="table-job-listing table-responsive">
                  <tbody>
                   @foreach($ratings as $rating)
                   
                   @php
                   
                    $buyer_details = App\User::where('id',$rating->buyer_id)->first();
                   @endphp
                      <tr>
                    <td class="table-job-listing-main">
                      <!-- Company Minimal-->
                      <article class="company-minimal">
                        <figure class="company-minimal-figure">
                            <img class="company-minimal-image" src="{{asset('JobPortal/public/profile_images')}}/{{$buyer_details->profile_image}}" alt="" width="38" height="49">
                        </figure>
                        <div class="company-minimal-main">
                          <h5 class="company-minimal-name">{{$buyer_details->name}}-{{$rating->created_at}}</h5>
                          <p>{{$rating->review}}</p>
                        </div>
                      </article>
                    </td>
                    <td class="table-job-listing-badge">
                        <div class="col-4">
                        <div class="pull-right reply">
                            <span id="dataReadonlyReview" data-rating-stars="{{$rating->stars}}" data-rating-readonly="true">-</span>
                        </div>
                    </div>
                  </td>
                  </tr>
                 @endforeach
                </tbody></table>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row row-30 row-lg-50">
                <div class="col-md-6 col-lg-12">
                  <!-- RD Mailform-->
                  <form class="rd-mailform form-corporate form-spacing-small form-corporate_sm" data-form-output="form-output-global" data-form-type="contact" method="post" action="/Client/send_message/{{$provider_details->id}}" novalidate="novalidate">
                    <h4>Contact</h4>
                  
                    <div class="form-wrap">
                      <a href="/Client/Conversation/{{$provider_details->id}}/{{$provider_details->name}}" style="border-radius:40px;" class="button button-block button-primary" type="submit">Send Message</a>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
 	  <script>

   function myfunction(product_id){
       
    document.getElementById('aa_'+product_id).innerHTML = '<button class="item marking" type="submit" onclick="unsavefunction('+product_id+')" data-toggle="tooltip"data-placement="top"title="Unsave"style="border-radius: 50px;background-color:white;border-color:white"><i class="fa fa-heart-o" style="color:red;"></i></button>';
        $.ajax({
        url: '/Client/booksmarks/'+product_id,
        dataType: 'jsonp', //mispelled
        type: 'get',
        async: false,
        contentType: "application/json; charset=utf-8",
    })
                            
                             
    } 
    
    
    
 function unsavefunction(product_id){
   document.getElementById('aa_'+product_id).innerHTML = '<button class="item marking" type="submit" onclick="myfunction('+product_id+')" data-toggle="tooltip"data-placement="top"title="Unsave"style="border-radius: 50px;background-color:white;border-color:white"><i class="fa fa-heart-o"></i></button>';
   $.ajax({
   url: '/Client/booksmarks_unsave/'+product_id,
   dataType: 'jsonp', //mispelled
   type: 'get',
   async: false,
   contentType: "application/json; charset=utf-8",
   success: function( ){
                             
                                
   }
  });
                            
  }
                           
                        
  </script>
@endsection