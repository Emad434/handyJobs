
<!DOCTYPE html>
<html class="wide" lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('/front_css/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/style.css')}}">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  </head>
</head>
<body>
    <div id="app">
        


 
  <body>
    <div class="ie-panel"> <a href="https://windows.microsoft.com/en-US/internet-explorer/">
        <img src="{{asset('/front_css/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
    </a></div>
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
                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark" src="{{asset('/front_css/images/logo-default-286x52.png')}}" alt="" width="143" height="26"/><img class="brand-logo-light" src="{{asset('/front_css/images/logo-inverse-286x52.png')}}" alt="" width="143" height="26"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">How its work</a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/Blog/Blogs">Blog</a> </li>
                        </ul> 
                      </li>
                     
                    </ul>
                  </div>
                </div>
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-item">
                    <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-register"><span class="icon mdi mdi-account"></span>Sign Up</button>
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
              </div>
            </div>
          </nav>
        </div>
        <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Start Building Your Own Career Now</h2>
              <div class="form-layout-search-outer">
                <form class="form-layout-search form-lg">
                  <div class="form-wrap form-wrap-icon">
                    <input class="form-input" id="form-keywords" type="text" name="keywords" data-constraints="@Required">
                    <label class="form-label" for="form-keywords">Keywords</label><span class="icon fl-bigmug-line-circular224"></span>
                  </div>
                  <div class="form-wrap form-wrap-icon form-wrap-select">
                    <!-- Select 2-->
                    <select class="form-input select" id="form-region" data-placeholder="All Regions" name="region" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                      <option label="All Regions"></option>
                      <option value="1">Seattle</option>
                      <option value="2">Miami</option>
                      <option value="3">Chicago</option>
                    </select><span class="icon fl-bigmug-line-big104"></span>
                  </div>
                  <div class="form-wrap form-wrap-button form-wrap-button-icon-only">
                    <button class="button button-lg button-primary button-icon-only" type="submit" aria-label="search"><span class="icon icon-4 fl-bigmug-line-search74"></span></button>
                  </div>
                </form>
              </div>
              <p class="big text-gray-800">We offer&nbsp;<a href="job-listing.html">2,989 job vacancies</a> right now!</p>
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>



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
                      <li><a href="job-listing-full.html">Browse Jobs</a></li>
                      <li><a href="job-listing.html">Browse Categories</a></li>
                      <li><a href="submit-resume.html">Submit Resume</a></li>
                      <li><a href="companies.html">Companies</a></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-marked-1">
                      <li><a href="post-a-job.html">Post a Job</a></li>
                      <li><a href="candidates-grid.html">Find a Candidate</a></li>
                      <li><a href="pricing-tables.html">Pricing Table</a></li>
                      <li><a href="faq.html">FAQ </a></li>
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
                      <li><a href="job-listing-full.html"><span class="icon icon-sm mdi mdi-map-marker"></span><span>San Francisco</span></a></li>
                      <li><a href="job-listing-full.html"><span class="icon icon-sm mdi mdi-map-marker"></span><span>Washington</span></a></li>
                      <li><a href="job-listing-full.html"><span class="icon icon-sm mdi mdi-map-marker"></span><span>Sacramento</span></a></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list list-1 list-icons">
                      <li><a href="job-listing-full.html"><span class="icon icon-sm mdi mdi-map-marker"></span><span>New York</span></a></li>
                      <li><a href="job-listing-full.html"><span class="icon icon-sm mdi mdi-map-marker"></span><span>Ontario</span></a></li>
                      <li><a href="job-listing-full.html"><span class="icon icon-sm mdi mdi-map-marker"></span><span>Chicago</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-creative-aside">
          <div class="container">
            <p class="rights"><span>JobsFactory</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
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
