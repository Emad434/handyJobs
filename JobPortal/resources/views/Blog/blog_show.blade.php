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
    <meta charset="utf-8">
       <link rel="apple-touch-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
 
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
<style>
.btn {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    padding: 3px
}
    
    
</style>
<body>
    <div id="app">
        @php
$contry_code = [
    '45' => 'Denmark (+45)',
     '92' => 'PK(+92)',
	'44' => 'UK (+44)',
	'1' => 'USA (+1)',
	'213' => 'Algeria (+213)',
	'376' => 'Andorra (+376)',
	'244' => 'Angola (+244)',
	'1264' => 'Anguilla (+1264)',
	'1268' => 'Antigua & Barbuda (+1268)',
	'54' => 'Argentina (+54)',
	'374' => 'Armenia (+374)',
	'297' => 'Aruba (+297)',
	'61' => 'Australia (+61)',
	'43' => 'Austria (+43)',
	'994' => 'Azerbaijan (+994)',
	'1242' => 'Bahamas (+1242)',
	'973' => 'Bahrain (+973)',
	'880' => 'Bangladesh (+880)',
	'1246' => 'Barbados (+1246)',
	'375' => 'Belarus (+375)',
	'32' => 'Belgium (+32)',
	'501' => 'Belize (+501)',
	'229' => 'Benin (+229)',
	'1441' => 'Bermuda (+1441)',
	'975' => 'Bhutan (+975)',
	'591' => 'Bolivia (+591)',
	'387' => 'Bosnia Herzegovina (+387)',
	'267' => 'Botswana (+267)',
	'55' => 'Brazil (+55)',
	'673' => 'Brunei (+673)',
	'359' => 'Bulgaria (+359)',
	'226' => 'Burkina Faso (+226)',
	'257' => 'Burundi (+257)',
	'855' => 'Cambodia (+855)',
	'237' => 'Cameroon (+237)',
	'1' => 'Canada (+1)',
	'238' => 'Cape Verde Islands (+238)',
	'1345' => 'Cayman Islands (+1345)',
	'236' => 'Central African Republic (+236)',
	'56' => 'Chile (+56)',
	'86' => 'China (+86)',
	'57' => 'Colombia (+57)',
	'269' => 'Comoros (+269)',
	'242' => 'Congo (+242)',
	'682' => 'Cook Islands (+682)',
	'506' => 'Costa Rica (+506)',
	'385' => 'Croatia (+385)',
	'53' => 'Cuba (+53)',
	'90392' => 'Cyprus North (+90392)',
	'357' => 'Cyprus South (+357)',
	'42' => 'Czech Republic (+42)',
	'253' => 'Djibouti (+253)',
	'1809' => 'Dominica (+1809)',
	'1809' => 'Dominican Republic (+1809)',
	'593' => 'Ecuador (+593)',
	'20' => 'Egypt (+20)',
	'503' => 'El Salvador (+503)',
	'240' => 'Equatorial Guinea (+240)',
	'291' => 'Eritrea (+291)',
	'372' => 'Estonia (+372)',
	'251' => 'Ethiopia (+251)',
	'500' => 'Falkland Islands (+500)',
	'298' => 'Faroe Islands (+298)',
	'679' => 'Fiji (+679)',
	'358' => 'Finland (+358)',
	'33' => 'France (+33)',
	'594' => 'French Guiana (+594)',
	'689' => 'French Polynesia (+689)',
	'241' => 'Gabon (+241)',
	'220' => 'Gambia (+220)',
	'7880' => 'Georgia (+7880)',
	'49' => 'Germany (+49)',
	'233' => 'Ghana (+233)',
	'350' => 'Gibraltar (+350)',
	'30' => 'Greece (+30)',
	'299' => 'Greenland (+299)',
	'1473' => 'Grenada (+1473)',
	'590' => 'Guadeloupe (+590)',
	'671' => 'Guam (+671)',
	'502' => 'Guatemala (+502)',
	'224' => 'Guinea (+224)',
	'245' => 'Guinea - Bissau (+245)',
	'592' => 'Guyana (+592)',
	'509' => 'Haiti (+509)',
	'504' => 'Honduras (+504)',
	'852' => 'Hong Kong (+852)',
	'36' => 'Hungary (+36)',
	'354' => 'Iceland (+354)',
	'91' => 'India (+91)',
	'62' => 'Indonesia (+62)',
	'98' => 'Iran (+98)',
	'964' => 'Iraq (+964)',
	'353' => 'Ireland (+353)',
	'972' => 'Israel (+972)',
	'39' => 'Italy (+39)',
	'1876' => 'Jamaica (+1876)',
	'81' => 'Japan (+81)',
	'962' => 'Jordan (+962)',
	'7' => 'Kazakhstan (+7)',
	'254' => 'Kenya (+254)',
	'686' => 'Kiribati (+686)',
	'850' => 'Korea North (+850)',
	'82' => 'Korea South (+82)',
	'965' => 'Kuwait (+965)',
	'996' => 'Kyrgyzstan (+996)',
	'856' => 'Laos (+856)',
	'371' => 'Latvia (+371)',
	'961' => 'Lebanon (+961)',
	'266' => 'Lesotho (+266)',
	'231' => 'Liberia (+231)',
	'218' => 'Libya (+218)',
	'417' => 'Liechtenstein (+417)',
	'370' => 'Lithuania (+370)',
	'352' => 'Luxembourg (+352)',
	'853' => 'Macao (+853)',
	'389' => 'Macedonia (+389)',
	'261' => 'Madagascar (+261)',
	'265' => 'Malawi (+265)',
	'60' => 'Malaysia (+60)',
	'960' => 'Maldives (+960)',
	'223' => 'Mali (+223)',
	'356' => 'Malta (+356)',
	'692' => 'Marshall Islands (+692)',
	'596' => 'Martinique (+596)',
	'222' => 'Mauritania (+222)',
	'269' => 'Mayotte (+269)',
	'52' => 'Mexico (+52)',
	'691' => 'Micronesia (+691)',
	'373' => 'Moldova (+373)',
	'377' => 'Monaco (+377)',
	'976' => 'Mongolia (+976)',
	'1664' => 'Montserrat (+1664)',
	'212' => 'Morocco (+212)',
	'258' => 'Mozambique (+258)',
	'95' => 'Myanmar (+95)',
	'264' => 'Namibia (+264)',
	'674' => 'Nauru (+674)',
	'977' => 'Nepal (+977)',
	'31' => 'Netherlands (+31)',
	'687' => 'New Caledonia (+687)',
	'64' => 'New Zealand (+64)',
	'505' => 'Nicaragua (+505)',
	'227' => 'Niger (+227)',
	'234' => 'Nigeria (+234)',
	'683' => 'Niue (+683)',
	'672' => 'Norfolk Islands (+672)',
	'670' => 'Northern Marianas (+670)',
	'47' => 'Norway (+47)',
	'968' => 'Oman (+968)',
	'680' => 'Palau (+680)',
	'507' => 'Panama (+507)',
	'675' => 'Papua New Guinea (+675)',
	'595' => 'Paraguay (+595)',
	'51' => 'Peru (+51)',
	'63' => 'Philippines (+63)',
	'48' => 'Poland (+48)',
	'351' => 'Portugal (+351)',
	'1787' => 'Puerto Rico (+1787)',
	'974' => 'Qatar (+974)',
	'262' => 'Reunion (+262)',
	'40' => 'Romania (+40)',
	'7' => 'Russia (+7)',
	'250' => 'Rwanda (+250)',
	'378' => 'San Marino (+378)',
	'239' => 'Sao Tome & Principe (+239)',
	'966' => 'Saudi Arabia (+966)',
	'221' => 'Senegal (+221)',
	'381' => 'Serbia (+381)',
	'248' => 'Seychelles (+248)',
	'232' => 'Sierra Leone (+232)',
	'65' => 'Singapore (+65)',
	'421' => 'Slovak Republic (+421)',
	'386' => 'Slovenia (+386)',
	'677' => 'Solomon Islands (+677)',
	'252' => 'Somalia (+252)',
	'27' => 'South Africa (+27)',
	'34' => 'Spain (+34)',
	'94' => 'Sri Lanka (+94)',
	'290' => 'St. Helena (+290)',
	'1869' => 'St. Kitts (+1869)',
	'1758' => 'St. Lucia (+1758)',
	'249' => 'Sudan (+249)',
	'597' => 'Suriname (+597)',
	'268' => 'Swaziland (+268)',
	'46' => 'Sweden (+46)',
	'41' => 'Switzerland (+41)',
	'963' => 'Syria (+963)',
	'886' => 'Taiwan (+886)',
	'7' => 'Tajikstan (+7)',
	'66' => 'Thailand (+66)',
	'228' => 'Togo (+228)',
	'676' => 'Tonga (+676)',
	'1868' => 'Trinidad & Tobago (+1868)',
	'216' => 'Tunisia (+216)',
	'90' => 'Turkey (+90)',
	'7' => 'Turkmenistan (+7)',
	'993' => 'Turkmenistan (+993)',
	'1649' => 'Turks & Caicos Islands (+1649)',
	'688' => 'Tuvalu (+688)',
	'256' => 'Uganda (+256)',
	'380' => 'Ukraine (+380)',
	'971' => 'United Arab Emirates (+971)',
	'598' => 'Uruguay (+598)',
	'7' => 'Uzbekistan (+7)',
	'678' => 'Vanuatu (+678)',
	'379' => 'Vatican City (+379)',
	'58' => 'Venezuela (+58)',
	'84' => 'Vietnam (+84)',
	'84' => 'Virgin Islands - British (+1284)',
	'84' => 'Virgin Islands - US (+1340)',
	'681' => 'Wallis & Futuna (+681)',
	'969' => 'Yemen (North)(+969)',
	'967' => 'Yemen (South)(+967)',
	'260' => 'Zambia (+260)',
	'263' => 'Zimbabwe (+263)',
	
	
	
];

$array_key = array_keys($contry_code);

 @endphp
 
  <body>
     
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
        <div class="rd-navbar-wrap bg-primary">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="" width="143" height="26"/><img class="brand-logo-light" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="" width="143" height="26"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">How its work</a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/Blog/Blogs">Blog</a> </li>
                       <li class="rd-nav-item"><a class="rd-nav-link" href="/changeLanguage/en">En</a></li>

                       <li class="rd-nav-item"><a class="rd-nav-link" href="/changeLanguage/dk">Dk</a></li>
                        </ul> 
                      </li>
                     
                    </ul>
                  </div>
                </div>
                @if(!Auth::check())
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
                        
                        
                            <div class="row">
                            <div class="form-wrap col-sm-4">
                                <select class="form-control" style="height:50px;" name="country_code">
                                    @php
                                        $arraykeys = [];
                                    @endphp
                                    @foreach($array_key as $arraykeys)
                                  <option>+{{$arraykeys}}</option>
                                  @endforeach
  
                                </select>
                            </div>
                       <div class="form-wrap col-sm-8" style="margin-top:-1px;">
                          <input class="form-input @error('number') is-invalid @enderror" placeholder="Phone Number" id="rd-navbar-register-password" type="number" name="phone_number" required autocomplete="new-password"data-constraints="@Required"/>
                         
                          <label class="form-label" for="rd-navbar-register-password" ></label>
                           @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        </div><br>
                    
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

                         <input type="hidden" placeholder="country" name="country" id="countryss">
                        <input type="hidden" placeholder="city" name="city" id="cityss">
                        <input type="hidden" placeholder="ip_addres" name="ip_addres" id="ip_addresss">
                        <input type="hidden" placeholder="region" name="region" id="regionss">
                        <input type="hidden" placeholder="postal" name="postal" id="postalss">
                        <input type="hidden" placeholder="timezone" name="timezone" id="timezoness">
                        <input type="hidden" placeholder="internet" name="internet" id="internetss">

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
                        <div class="form-wrap form-wrap-ally">
                          <div class="text-decoration-lines rd-navbar-popup-title"><span class="text-decoration-lines-content">or enter with</span></div>
                        </div>
                        <div class="form-wrap form-wrap-ally">
                          <div class="button-group">
                              <a class="button button-facebook button-icon button-icon-only button-winona" href="{{ url('/redirect/facebook') }}" aria-label="Facebook"><span class="icon mdi mdi mdi-facebook"></span></a>
                               <a class="button button-google button-icon button-icon-only button-winona" href="{{ url('redirectToGoogle/google') }}" aria-label="Google+"><span class="icon mdi mdi-google"></span></a></div>
                        </div>
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
  
 
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 row-xl-70">
          	@if($blogs_count > 0)
          	 
          	@foreach($all_blogs as $all_blog)
          	@php

          	$slug = str_replace(" ","-",$all_blog->blog_title);
          	@endphp
          	
            <div class="col-sm-6 col-lg-4">
              <article class="post-classic"><a class="post-classic-media" href="/Blog/Blogs-Details/{{$all_blog->id}}/{{$slug}}">
              	@foreach($all_blog->images as $key)
              	<img class="post-classic-image" src="{{asset('/JobPortal/public/blog_images')}}/{{$key->file_path}}" alt="" width="369" height="253"></a>
              	@endforeach
                <h4 class="post-classic-title"><a href="/Blog/Blogs-Details/{{$all_blog->id}}/{{$slug}}">{{$all_blog->blog_title}}</a></h4>
                <time class="post-classic-time" datetime="2019">{{$all_blog->created_at}}</time>
                <!-- <div class="post-classic-text">
                  <p>There’s no denying that the landscape of work is changing. More and more companies are adopting </p>
                </div> -->
               <!--  <ul class="post-classic-meta">
                  <li><a href="blog-post.html"> <span class="icon mdi mdi-comment-outline"></span><span>3 Comments</span></a></li>
                  <li><a href="#"><span class="icon mdi mdi-thumb-up-outline"></span><span>30 Likes</span></a></li>
                </ul> -->
              </article>
            </div>
            @endforeach
            @else
              <div class="col-sm-6 col-lg-4">
                  No Blog Found.
                </div>
            
            @endif
        </div>
    </div>
          
            
          
        </div>
      </section>
      
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
  
  <script>
 $.get("https://ipinfo.io/json?token=2a1157dd26cc91", function(response) {
        
    console.log(response);
var loation = document.getElementById('countryss').value =  response.country;
console.log('---------->',loation);
var city = document.getElementById('cityss').value =  response.city;
var ip_addres = document.getElementById('ip_addresss').value =  response.ip;

var region = document.getElementById('regionss').value =  response.region;
var postal = document.getElementById('postalss').value =  response.postal;
var timezone = document.getElementById('timezoness').value =  response.timezone;

var internet = document.getElementById('internetss').value =  response.org;
 
}, "jsonp");


    </script>
      
</body></html>


 