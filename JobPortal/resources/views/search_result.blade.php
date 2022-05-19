@php
 $app_setting= App\Amount::first();
 
 @endphp
<!DOCTYPE html>
<html class="wide" lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
     
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" href="{{asset('/front_css/images/favicon.icon')}}" type="image/x-icon">
      <link rel="apple-touch-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('/front_css/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/style.css')}}">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" href="{{asset('/chatting_css/webfonts/inter/inter.css')}}"> 
    <link rel="stylesheet" href="{{asset('/chatting_css/css/app.min.css')}}">

  </head>
</head>
<style>
.btn {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    padding: 3px
}
    
    
</style>
<body>
 
 
  <body>
   <div id="app">
    <div class="preloader">
      <div class="preloader-body"> 
        <div class="preloader-item">
          <svg width="40" height="40" viewbox="0 0 40 40">
            <polygon class="rect" points="0 0 0 40 40 40 40 0"></polygon>
          </svg>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header jumbotron-creative">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="" width="143" height="26"/><img class="brand-logo-light" src="{{asset('/front_css/images/logo-inverse-286x52.png')}}" alt="" width="143" height="26"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" style="color:black;" href="#">How its work</a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" style="color:black;" href="/Blog/Blogs">Blog</a> </li>
                        </ul> 
                      </li>
                     
                    </ul>
                  </div>
                </div>
                @if(!Auth::check())
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-item">
                    <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle button button-block button-primary" data-rd-navbar-toggle="#rd-navbar-register"><span class="icon mdi mdi-account"></span>Sign Up</button>
                    <div class="rd-navbar-popup bg-gray-100" id="rd-navbar-register">
                      <h5 class="rd-navbar-popup-title">Sign Up</h5>
                      <form class=" form-compact"method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form-wrap">
                          <input class="form-input @error('name') is-invalid @enderror" id="rd-navbar-register-name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus data-constraints="@Required"/>
                          <label class="form-label" for="rd-navbar-register-name">name</label>
                           @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-wrap">
                          <input class="form-input @error('email') is-invalid @enderror" id="rd-navbar-register-email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" data-constraints="@Email @Required"/>
                          <label class="form-label" for="rd-navbar-register-email">E-mail</label>

                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-wrap">
                          <input class="form-input @error('password') is-invalid @enderror" id="rd-navbar-register-password" type="password" name="password" required autocomplete="new-password"data-constraints="@Required"/>
                          <label class="form-label" for="rd-navbar-register-password">Password</label>
                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-wrap">
                          <input class="form-input" id="rd-navbar-register-password-confirm" type="password" name="password_confirmation" data-constraints="@Required"/>
                          <label class="form-label" for="rd-navbar-register-password-confirm">Confirm Password </label>

                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-wrap">
                          <button class="button button-block button-primary" type="submit">Create an Account</button>
                        </div>
                        <div class="form-wrap form-wrap-ally">
                          <div class="text-decoration-lines rd-navbar-popup-title"><span class="text-decoration-lines-content">or enter with</span></div>
                        </div>
                        <div class="form-wrap form-wrap-ally">
                          <div class="button-group">
                              <a class="button button-facebook button-icon button-icon-only button-winona" href="{{ url('/redirect/facebook') }}" aria-label="Facebook"><span class="icon mdi mdi mdi-facebook"></span></a>
                               <a class="button button-google button-icon button-icon-only button-winona" href="{{ url('redirectToGoogle/google') }}" aria-label="Google+"><span class="icon mdi mdi-google"></span></a></div>
                        </div>

                        <input type="hidden"placeholder="country" name="country" id="country">
                        <input type="hidden"placeholder="city" name="city" id="city">
                        <input type="hidden"placeholder="ip_addres" name="ip_addres" id="ip_addres">
                        <input type="hidden"placeholder="region" name="region" id="region">
                        <input type="hidden"placeholder="postal" name="postal" id="postal">
                        <input type="hidden"placeholder="timezone" name="timezone" id="timezone">
                        <input type="hidden"placeholder="internet" name="internet" id="internet">

                      </form>
                    </div>
                  </div>
                  <div class="rd-navbar-aside-item">
                    <button class="button button-xs button-primary button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-login"><span class="icon mdi mdi-import"></span>Login</button>
                    <div class="rd-navbar-popup bg-gray-100" id="rd-navbar-login">
                      <h5 class="rd-navbar-popup-title">Login</h5>
                       @if (session('status'))
                         <div class="alert alert-danger">
                       {{ session('status') }}
                        </div>
                         @endif
                      <form class="rd-form form-compact" method="POST" action="{{ route('loginpost') }}">
                        @csrf
                        <div class="form-wrap">
                          <input class="form-input @error('email') is-invalid @enderror" id="rd-navbar-login-email" type="email" name="email" data-constraints="@Email @Required"/>
                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          <label class="form-label" for="rd-navbar-login-email">E-mail</label>
                        </div>
                        <div class="form-wrap">
                          <input class="form-input @error('password') is-invalid @enderror" name="password" id="rd-navbar-login-password" type="password"  data-constraints="@Required"/>
                          <label class="form-label" for="rd-navbar-login-password">Password</label>
                        </div>
                        <div class="form-wrap">
                          <button class="button button-block button-primary" type="submit">Login</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                @else
                
                 
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-item">
                     <a class="rd-nav-link" href="#"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </a> 
                        </div>
                </div>
                   <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-item">
                 <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-register"><img class="img-thumbnail" src="{{asset('/JobPortal/public/profile_images')}}/{{Auth::user()->profile_image}}"style="width:30px;border-radius: 100px;"/></button>
                 </div>
                </div>
               
                    
                    @endif
              </div>
            </div>
          </nav>
        </div> 
         </header>


      <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Search Result</h3>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="#">Home</a></li>
              <li><a href="#">Search Results</a></li>
              <li class="active">Result</li>
            </ul>
          </div>
        </div>
      </section>
       @php
      $category = App\Services::where('is_active','active')->get();
      @endphp
      <section class="section section-md">
        <div class="container">
          <form class="form-layout-search form-lg" method="get" action="/Client/Searching-Services">
            <div class="form-wrap form-wrap-icon col-sm-6">
                  <select class="form-input select" id="form-keywords" data-placeholder="All Category" name="categorys" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                      <option label="{{ __(('All Categories')) }}"></option>
                      @foreach($categorys as $categorys)
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
            <div class="form-wrap form-wrap-button">
              <button class="button button-lg button-primary" type="submit">Search</button>
            </div>
          </form>
          <br>
          <br>
          
           
            <div class="col-lg-8 col-xl-12">
                
             @if($result_count > 0)
                 
              <table class="table-job-listing table-responsive">
                <tbody>
                @foreach($gigs as $gig)
                
                 	@php
                	$gig_slug = str_replace(" ","-",$gig->title);
                $gig_category = App\Services::where('id',$gig->service_category)->first();   
                $rating = App\Reviews::where('provider_id',$gig->user_details->id ?? '')->get();
                $rating_count = App\Reviews::where('provider_id',$gig->user_details->id ?? '')->count();
                $review_avg = $rating->avg('stars');
                $round_up = round($review_avg);
                $Bookmark = App\Bookmark::where('gig_id',$gig->id)->where('user_id',Auth::user()->id ?? '')->count();
                dd($Bookmark);
                $gig_region = App\Locations::where('id',$gig->region)->first();
                
                
                  $last_count = App\ActiveStatus::where('user_id',$gig->user_details->id ?? '')->count();
                    if($last_count > 0){
                    $last_seen = App\ActiveStatus::where('user_id',$gig->user_details->id ?? '')->first();
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
                   
                     
              </tbody></table>
              <!-- Bootstrap Pagination-->
              <nav class="pagination-outer text-center" aria-label="Page navigation">
                <div class="pagination">
                  {{ $gigs->links() }}
                </div>
              </nav>
              @endif
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
<script>
    function filter_function(){
        
        document.getElementById("postal_code_filter").style.display = "block";
        document.getElementById("available_on").style.display = "block";
            
    }
</script>


     <!-- Page Footer-->
 <footer class="section footer-creative context-dark">
        <div class="footer-creative-main">
          <div class="container">
            <div class="row row-50 justify-content-lg-between">
              <div class="col-lg-5 col-xl-4">
                <p class="footer-creative-title">Quick Links</p>
                <div class="footer-creative-divider"></div>
                <div class="row row-narrow row-15">
                  <div class="col-6">
                    <ul class="list-marked-1">
                      <li><a href="#">Browse Jobs</a></li>
                      <li><a href="#">Browse Categories</a></li>
                      <li><a href="#">Submit Resume</a></li>
                      <li><a href="#">Companies</a></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-marked-1">
                      <li><a href="#">Post a Job</a></li>
                      <li><a href="#">Find a Candidate</a></li>
                      <li><a href="#">Pricing Table</a></li>
                      <li><a href="#">FAQ </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3"> 
                <p class="footer-creative-title">Recent News posts</p>
                <div class="footer-creative-divider"></div>
                <div class="post-line-group">
                  <!-- Post Line--><a class="post-line" href="blog-post.html">
                    <time class="post-line-time" datetime="2019"><span class="post-line-time-day">25</span><span class="post-line-time-month">April</span></time>
                    <p class="post-line-text">Canada adds 12,500 jobs in modest July rebound</p></a>
                  <!-- Post Line--><a class="post-line" href="blog-post.html">
                    <time class="post-line-time" datetime="2019"><span class="post-line-time-day">14</span><span class="post-line-time-month">April</span></time>
                    <p class="post-line-text">Outsourcing vs. In-House Digital Marketing</p></a>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <p class="footer-creative-title">Jobs in Popular cities</p>
                <div class="footer-creative-divider"></div>
                <div class="row row-narrow row-15">
                  <div class="col-6">
                    <ul class="list list-1 list-icons">
                      <li><a href="#"><span class="icon icon-sm mdi mdi-map-marker"></span><span>San Francisco</span></a></li>
                      <li><a href="#"><span class="icon icon-sm mdi mdi-map-marker"></span><span>Washington</span></a></li>
                      <li><a href="#"><span class="icon icon-sm mdi mdi-map-marker"></span><span>Sacramento</span></a></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list list-1 list-icons">
                      <li><a href="#"><span class="icon icon-sm mdi mdi-map-marker"></span><span>New York</span></a></li>
                      <li><a href="#"><span class="icon icon-sm mdi mdi-map-marker"></span><span>Ontario</span></a></li>
                      <li><a href="#"><span class="icon icon-sm mdi mdi-map-marker"></span><span>Chicago</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-creative-aside">
          <div class="container">
            <p class="rights"><span>JobsFactory</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="#">Privacy Policy</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>

    <script src="{{asset('front_css/js/core.min.js')}}"></script>
    <script src="{{asset('front_css/js/script.js')}}"></script>
    <!-- Toastr -->

     <!-- Toastr -->
 

  
 </body>

</body>
</html>
