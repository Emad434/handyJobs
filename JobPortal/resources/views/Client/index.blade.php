 @extends('client_header.client_header')
 @section('title', 'Home')  
 @section('content')



<style>
 
 
.card {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 190px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.image-container {
    position: relative
}

.thumbnail-image {
    border-radius: 10px !important;
    height:200px;
}

.discount {
    background-color: green;
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 4px;
    padding-right: 4px;
    font-size: 10px;
    border-radius: 6px;
    color: #fff
}

.wishlist {
    height: 25px;
    width: 25px;
    background-color: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.first {
    position: absolute;
    width: 100%;
    padding: 9px
}

.dress-name {
    font-size: 13px;
    font-weight: bold;
    width: 75%
}

.new-price {
    font-size: 13px;
    font-weight: bold;
    color: green
}

.old-price {
    font-size: 8px;
    font-weight: bold;
    color: grey
}

.btn {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    padding: 3px
}

.creme {
    background-color: #fff;
    border: 2px solid grey
}

.creme:hover {
    border: 3px solid grey
}

.creme:focus {
    background-color: grey
}

.red {
    background-color: #fff;
    border: 2px solid red
}

.red:hover {
    border: 3px solid red
}

.red:focus {
    background-color: red
}

.blue {
    background-color: #fff;
    border: 2px solid #40C4FF
}

.blue:hover {
    border: 3px solid #40C4FF
}

.blue:focus {
    background-color: #40C4FF
}

.darkblue {
    background-color: #fff;
    border: 2px solid #01579B
}

.darkblue:hover {
    border: 3px solid #01579B
}

.darkblue:focus {
    background-color: #01579B
}

.yellow {
    background-color: #fff;
    border: 2px solid #FFCA28
}

.yellow:hover {
    border-radius: 3px solid #FFCA28
}

.yellow:focus {
    background-color: #FFCA28
}

.item-size {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #fff;
    border: 1px solid grey;
    color: grey;
    font-size: 10px;
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: center
}

.rating-star {
    font-size: 10px !important
}

.rating-number {
    font-size: 10px;
    color: grey
}

.buy {
    font-size: 12px;
    color: purple;
    font-weight: 500
}

.voutchers {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 190px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    overflow: hidden
}

.voutcher-divider {
    display: flex
}

.voutcher-left {
    width: 60%
}

.voutcher-name {
    color: grey;
    font-size: 9px;
    font-weight: 500
}

.voutcher-code {
    color: red;
    font-size: 11px;
    font-weight: bold
}

.voutcher-right {
    width: 40%;
    background-color: purple;
    color: #fff
}

.discount-percent {
    font-size: 12px;
    font-weight: bold;
    position: relative;
    top: 5px
}

.off {
    font-size: 14px;
    position: relative;
    bottom: 5px
}
</style>
             

                 
 <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">{{ __(('Start Building Your Own Career Now')) }}</h2>
              <div class="form-layout-search-outer">
                <form class="form-layout-search form-lg" method="get" action="/Client/Searching-Services">
                  
                  <div class="form-wrap form-wrap-icon form-wrap-select">
                    <!-- Select 2-->
                    <select class="form-input select" id="form-keywords" data-placeholder="All Category" name="categorys" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                      <option label="{{ __(('All Categories')) }}"></option>
                      @foreach($category as $categorys)
                      <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                      @endforeach
                      
                    </select><span class="icon fl-bigmug-line-circular224"></span>
                  </div>
                  
                     <div class="form-wrap form-wrap-icon form-wrap-select" id="region_filter">
                    <!-- Select 2-->
                    <select class="form-input select" id="form-region" data-placeholder="{{ __(('All Regions')) }}" name="region" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                      <option label="All Regions"></option>
                      @foreach($country as $countrys)
                      <option value="{{$countrys->id}}">{{$countrys->name}}</option>
                      @endforeach
                      
                    </select><span class="icon fl-bigmug-line-big104"></span>
                      
                  </div>
                  
                   
                   <div class="form-wrap form-wrap-icon form-wrap-select" style="display:none" id="postal_code_filter">
                    <!-- Select 2-->
                    <input type="number" name="postal_code" placeholder="Postal Code" class="form-input form-control-has-validation"/>
                    <span class="icon fl-bigmug-line-big104"></span>
                  </div>
                   
                  <div class="form-wrap form-wrap-icon form-wrap-select" style="display:none" id="available_on">
                    <!-- Select 2-->
                    <input type="date" name="available_on" class="form-input form-control-has-validation"/>
                    <span class="icon fl-bigmug-line-big104"></span>
                  </div>
                   <div class="form-wrap form-wrap-icon form-wrap-select" >
                       <a href="#" onclick="filter_function()">{{ __(('More Filters')) }}</a>
                       
                   </div>
                  <div class="form-wrap form-wrap-button form-wrap-button-icon-only">
                    <button class="button button-lg button-primary button-icon-only" type="submit" style="border-radius:40px;" aria-label="search"><span class="icon icon-4 fl-bigmug-line-search74"></span></button>
                  </div>
                </form>
              </div>
              <!--<p class="big text-gray-800">We offer&nbsp;<a href="job-listing.html">2,989 {{ __(('job vacancies')) }}</a> {{ __(('right now!')) }}</p>-->
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
            </div><img class="jc-decoration-image" src="{{asset('/front_css/images/home-1-748x528.png')}}" alt="" width="748" height="528"/>
          </div>
        </div>
        
        </header>
      </div>

<script>
    function filter_function(){
        
        document.getElementById("postal_code_filter").style.display = "block";
        document.getElementById("available_on").style.display = "block";
            
    }
</script>
  <section class="section section-md bg-default text-center">
        <div class="container">
          <h3>Welcome to <span class="text-primary">{{ __(('Handy')) }}</span>{{ __(('Services')) }}</h3>
          <p class="text-spacing-05">{{ __(('A place where leading employers are already looking for your talent and experience.')) }}</p>
          <div class="row row-50 justify-content-center align-items-center text-left">
            <div class="col-md-10 col-lg-6">
              <figure class="figure-responsive block-5"><img src="{{asset('/front_css/images/home-2-540x413.jpg')}}" alt="" width="540" height="413"/>
              </figure>
            </div>
            <div class="col-md-10 col-lg-6">
              <div class="row row-50 row-xl-70">
                <div class="col-sm-6">
                  <!-- Box Line-->
                  <article class="box-line box-line_sm">
                    <div class="box-line-inner">
                      <div class="box-line-icon icon mercury-icon-group"></div>
                      <h5 class="box-line-title">More than 3.8 million visitors every day</h5>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Box Line-->
                  <article class="box-line box-line_sm">
                    <div class="box-line-inner">
                      <div class="box-line-icon icon mercury-icon-partners"></div>
                      <h5 class="box-line-title">Leading recruiting website in the US and Europe</h5>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Box Line  -->
                  <article class="box-line box-line_sm">
                    <div class="box-line-inner">
                      <div class="box-line-icon icon mercury-icon-chat"></div>
                      <h5 class="box-line-title">24\7 Dedicated and free Support</h5>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Box Line-->
                  <article class="box-line box-line_sm">
                    <div class="box-line-inner">
                      <div class="box-line-icon icon mercury-icon-target"></div>
                      <h5 class="box-line-title">Only relevant and verified vacancies </h5>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular Categories-->
   <section class="section section-md bg-default text-center">
        <div class="container container-fullwidth">
          <h3>Popular Categories</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-carousel-stretch" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="6" data-dots="true" data-nav="false" data-stage-padding="1" data-loop="false" data-margin="26" data-md-margin="20" data-lg-margin="26" data-autoplay="false" data-autoplay-timeout="3500" data-mouse-drag="false">
        
          	@foreach($category as $categorys)
          	@php

          	$gigs_count = App\Gig::where('service_category',6)->where('status','active')->where('active_by_admin','1')->count();
          
          	@endphp
          	<center>
          	<a class="box-creative" href="#">
              <div class="box-creative-inner">
                {!! $categorys->iconns !!}
                <p class="box-creative-title">{{$categorys->name}}</p>
                <p>{{$gigs_count}} {{ __(('open offers')) }}</p>
              </div>
              <div class="box-creative-dummy"></div></a> 
          </center>
              @endforeach
        </div>
        </div>
        
      </section>
      <!-- Recent Jobs-->


 
      <section class="section section-md bg-gray-100">
         <div class="container">
           <div class="row row-40">
               <div class="col-12 text-center">
              <h3>{{ __(('Providers Offers')) }}</h3>
            </div>
            
            
            
            <table class="table-job-offers table-responsive">
                
               
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
            
                  
                 $provider_details = App\User::where('id',$gig->user_details->id)->first();
                    
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
                          
                        <figure class="company-light-figure">
                            
                            <img class="company-light-image" src="{{asset('/JobPortal/public/gig_thumbnail')}}/{{$gig->thumbnail}}" alt="" width="45" height="45"/>
                          
                        </figure>
                        <div class="company-light-main">
                         <p> <strong><a href="/Client/Gig-Details/{{$gig->id}}/{{$gig_slug}}">{{$gig->title}}</a></strong></p>
                          <p class="text-color-default">{{$gig_category->name}}</p>
                        </div>
                      </article>
                    </td>
                    
                     <td class="table-job-offers-main">
                      <!-- Company Light-->
                      <article class="company-light">
                          
                        <figure class="company-light-figure">
                             <div class="avatar @if($current_time >= $dateTime) avatar-away @else avatar-online @endif">
                               @php
                $user = App\User::where('id',Auth::user()->id)->first();
                
                @endphp
                @if($provider_details->profile_image == null)
                 
                 	<img class="company-light-image" src="{{$provider_details->img_url}}" alt="" width="45" height="45"/>
               
                  
                 @else 
                
                  <img class="company-light-image" src="{{asset('/JobPortal/public/profile_images')}}/{{$provider_details->profile_image}}" alt="" width="45" height="45"/>
               
                 
              @endif   
                            
                            </div>
                        </figure>
                        <div class="company-light-main">
                            @php
                            $provider_slug = str_replace(" ","-",$provider_details->name);
                            @endphp
                          <h5 class="company-light-title"><a href="/Client/Provider-profile/{{$provider_details->id}}/{{$provider_slug}}">{{$provider_details->name}}</a></h5>
                          <p class="text-color-default"> @if($current_time >= $dateTime) Offline @else  Online @endif</p>
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
                  
                   
                </table>
           
            <div class="col-12 text-center"><a class="button button-lg button-primary-outline" style="border-radius:40px;" href="/Client/All-Jobs">{{ __(('Show All Offers')) }}</a></div>
          </div>
        </div>
       </section>
       @if($rising_sellers_count > 0)
<section class="section section-sm bg-default">
        <div class="container">
          <h3 class="text-center">Our Rising Providers</h3>
          <div class="owl-carousel owl-carousel-profile owl-loaded" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-fade="true" data-margin="30" data-mouse-drag="false" style="">
            <!-- Profile Classic-->
            <!-- Profile Classic-->
            <!-- Profile Classic-->
            <!-- Profile Classic-->
            @foreach($rising_seller as $rising_sellers)
             @php
               $rating = App\Reviews::where('provider_id',$rising_sellers->id)->get();
               $review_avg = $rating->avg('stars');
                $round_up = round($review_avg);
               $user_region = App\Locations::where('id',$rising_sellers->country)->first();
                
                $completed_contracts = App\Contract::where('sellers_id',$rising_sellers->id)->where('status','completed')->count();
            @endphp
             <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                 <a class="profile-classic" href="/Client/Provider-profile/{{$rising_sellers->id}}/{{$rising_sellers->name}}">
              <figure class="profile-classic-figure"><img class="profile-classic-image" src="{{asset('/JobPortal/public/profile_images')}}/{{$rising_sellers->profile_image}}" alt="" width="266" height="219">
              </figure>
              <div class="profile-classic-main">
                <h5 class="profile-classic-name">{{$rising_sellers->name}}</h5>
                <hr>
                <ul class="profile-classic-list">
                    @if($user_region != null)
                  <li><span class="icon mdi mdi-map-marker"></span>Location: <span>{{$user_region->name}}</span></li>
                  @endif
                  <li><span class="icon mdi mdi-book"></span>Completed Contracts: <span>{{$completed_contracts}}</span></li>
                  <li><span class="icon mdi mdi-star" style="color:yellow;"></span>Rating: <span>{{$round_up}}</span></li>
                </ul>
              </div>
              </a>
            </div>
            @endforeach
           
           </div> <div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></div>
        </div>
</section>
@endif
      
      <section class="parallax-container section-md bg-primary bg-overlay-1 text-center" data-parallax-img="{{asset('/front_css/images/parallax-2.jpg')}}">
        <div class="parallax-content">
          <div class="container container-fullwidth">
            <h3>{{ __(('Companies Helped')) }}</h3>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stretch" data-autoplay="true" data-autoplay-timeout="4000" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="6" data-dots="true" data-nav="false" data-stage-padding="2" data-loop="false" data-margin="30" data-mouse-drag="false">
                <a class="link-corporate" href="#">
                    <img src="{{asset('/front_css/images/brand-1-inverse-183x44.png')}}" alt="" width="183" height="44"/></a>
                    <a class="link-corporate" href="#">
                        <img src="{{asset('/front_css/images/brand-2-inverse-118x82.png')}}" alt="" width="118" height="82"/></a>
                        <a class="link-corporate" href="#">
                            <img src="{{asset('/front_css/images/brand-3-inverse-137x39.png')}}" alt="" width="137" height="39"/></a>
                            <a class="link-corporate" href="#">
                                <img src="{{asset('/front_css/images/brand-4-inverse-133x77.png')}}" alt="" width="133" height="77"/></a>
                                <a class="link-corporate" href="#">
                                    <img src="{{asset('/front_css/images/brand-5-inverse-153x30.png')}}" alt="" width="153" height="30"/></a>
                                    <a class="link-corporate" href="#">
                                        <img src="{{asset('/front_css/images/brand-6-inverse-90x68.png')}}" alt="" width="90" height="68"/></a>
                                    <a class="link-corporate" href="#">
                             <img src="{{asset('/front_css/images/brand-7-inverse-112x43.png')}}" alt="" width="112" height="43"/></a>
                         <a class="link-corporate" href="#">
                      <img src="{{asset('/front_css/images/brand-8-inverse-126x22.png')}}" alt="" width="126" height="22"/></a>
                    <a class="link-corporate" href="#">
                 <img src="{{asset('/front_css/images/brand-9-inverse-158x33.png')}}" alt="" width="158" height="33"/></a>
              <a class="link-corporate" href="#"><img src="{{asset('/front_css/images/brand-10-inverse-137x37.png')}}" alt="" width="137" height="37"/></a>
             <a class="link-corporate" href="#"><img src="{{asset('/front_css/images/brand-11-inverse-84x59.png')}}" alt="" width="84" height="59"/></a>
            <a class="link-corporate" href="#"><img src="{{asset('/front_css/images/brand-12-inverse-116x51.png')}}" alt="" width="116" height="51"/></a>
        </div>
          </div>
        </div>
      </section>
      <!-- Steps-->
      
    
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h3>{{ __(('Get JobsFactory App for Your Mobile')) }}</h3>
          <p class="offset-top-20px">
            <span style="max-width: 670px;">{{ __(('Searching for jobs has never been that easy. Now you can find job matched your career expectation, apply for jobs and receive feedback right on your mobile. Start your job search now!')) }}</span>
        </p>
          <div class="group">
            <a class="button button-primary button-fixed-size" href="#">
                <img src="{{asset('/front_css/images/google-play-download-138x35.png')}}" alt="" width="138" height="35"/></a>
                <a class="button button-primary button-fixed-size" href="#">
            <img src="{{asset('/front_css/images/google-play-download-138x35.png')}}" alt=""></a></div>
        </div>
      </section>
      <!-- Page Footer-->
      
    </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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