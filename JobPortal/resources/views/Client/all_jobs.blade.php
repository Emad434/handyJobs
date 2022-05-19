
 @extends('client_header.client_header')
  @section('title', 'Jobs')  
   
 @section('content')
 
 
      <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Job Listing</h3>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">For Candidates</a></li>
              <li class="active">Job Listing</li>
            </ul>
          </div>
        </div>
      </section>
       @php
      $category = App\Services::where('is_active','1')->get();
      @endphp
      <section class="section section-md">
        <div class="container">
          <form class="form-layout-search form-lg" method="get" action="/Client/Searching-Services">
            <div class="form-wrap form-wrap-icon col-sm-6">
                  <select class="form-input select" id="form-keywords" data-placeholder="All Category" name="categorys" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                      <option label="{{ __(('All Categories')) }}"></option>
                      @foreach($category as $categorys)
                      @php

          	$gigs_count = App\Gig::where('service_category',5)->where('status','active')->where('active_by_admin','1')->count();
          
          	@endphp
                      <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                      @endforeach
                      
                    </select><span class="icon fl-bigmug-line-circular224"></span>
              </div>
            
            <div class="form-wrap form-wrap-icon form-wrap-select col-sm-6">
              <!-- Select 2-->
              <select class="form-input select form-control-has-validation select2-hidden-accessible" id="form-region" data-placeholder="All Regions" name="region" data-minimum-results-for-search="Infinity" data-constraints="@Selected" tabindex="-1" aria-hidden="true">
                  @foreach($country as $countrys)
                    <option value="{{$countrys->id}}">{{$countrys->name}}</option>
                  @endforeach
              </select>
              
             </div>
             
             <div class="form-wrap form-wrap-icon form-wrap-select col-sm-2" id="postal_code_filter">
                    <!-- Select 2-->
                    <input type="number" name="postal_code" placeholder="Postal Code" class="form-input form-control-has-validation"/>
                    <span class="icon fl-bigmug-line-big104"></span>
                  </div>
            <div class="form-wrap form-wrap-icon form-wrap-select col-sm-2" id="available_on">
                    <!-- Select 2-->
                    <input type="date" name="available_on" class="form-input form-control-has-validation"/>
                    <span class="icon fl-bigmug-line-big104"></span>
                  </div>
            <div class="form-wrap form-wrap-button" >
              <button class="button button-lg button-primary" style="border-radius:40px;" type="submit">Search</button>
            </div>
          </form>
          <br>
          <br>
          
           
            <div class="col-lg-8 col-xl-12">
              <table class="table-job-listing table-responsive">
                <tbody>
                @if($gigs_count > 0)    
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
                
                
                  $last_count = App\ActiveStatus::where('user_id',$gig->user_details->id)->count();
                    if($last_count > 0){
                    $last_seen = App\ActiveStatus::where('user_id',$gig->user_details->id)->first();
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

                  <tr>
                    <td class="table-job-offers-date">
                          @if($Bookmark > 0)
                         
                          <span id="aa_{{$gig->id}}">
                          <button class="wishlist" style="background-color:white;border-color:white;border-radius: 50px;" onclick="unsavefunction('{{$gig->id}}')">
                            <i class="fa fa-heart-o" style="color:red;"></i>
                          </button>
                          </span>
                          
                          @else
                          <span id="aa_{{$gig->id}}">
                          <button class="wishlist" style="background-color:white;border-color:white;border-radius: 50px;" onclick="myfunction('{{$gig->id}}')">
                            <i class="fa fa-heart-o"></i>
                          </button>
                          </span>
                          @endif
                        
                        </td>
                    <td class="table-job-offers-main">
                      <!-- Company Light-->
                      <article class="company-light">
                        <figure class="company-light-figure">
                          <div class="avatar @if($current_time >= $dateTime) avatar-away @else avatar-online @endif">
                            <img class="company-light-image" src="{{asset('/JobPortal/public/gig_thumbnail')}}/{{$gig->thumbnail}}" alt="" width="45" height="45"/>
                            </div>
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
                    <td class="table-job-offers-badge"><span class="badge badge-tertiary">Available on: {{$gig->available_on}}/{{$gig->available_end}}</span></td>
                  </tr>
                  @endforeach
                   @else
                  <center>
                     <td class="table-job-offers-main">
                      <!-- Company Light-->
                      <article class="company-light">
                         
                        <div class="company-light-main">
                         <p> <strong>No Job Found. </strong></p>
                         </div>
                      </article>
                    </td>
                    
                  </center>
                  @endif
                     
              </tbody></table>
              
              <!-- Bootstrap Pagination-->
              <nav class="pagination-outer text-center" aria-label="Page navigation">
                <div class="pagination">
                  {{ $gigs->links() }}
                </div>
              </nav>
              
               
            </div>
          </div>
        </div>
      </section>
    
    </div>
 
 
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