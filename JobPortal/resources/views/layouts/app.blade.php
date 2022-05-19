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
      <link rel="stylesheet" href="{{asset('/chatting_css/webfonts/inter/inter.css')}}"> 
    <link rel="stylesheet" href="{{asset('/chatting_css/css/app.min.css')}}">
    
  
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
    
.rd-dropdown-item {
   float:left;
   padding: 0px;
  
  
}

@media (max-width: 650px) {
  .button {
    margin-right:-10%;
   
  }
  
  #post_a_job{
      margin-left:30%;
  }

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

$services = App\Services::all();


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
                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="" width="143" height="26"/><img class="brand-logo-light" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="" width="143" height="26"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                        
                     <li class="rd-nav-item">
                          <a class="rd-nav-link" href="#">Our Services</a> 
                     <ul class="rd-menu rd-navbar-dropdown" >
                        <li class="rd-dropdown-item">
                            @foreach($services as $service)
                            <a class="rd-dropdown-link" href="#">{{$service->name}}</a>
                            @endforeach
                          </li>
                         </ul>
                         </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">How its work</a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/Blog/Blogs">Blog</a> </li>
                       <li class="rd-nav-item"><a class="rd-nav-link" href="/changeLanguage/en">En</a></li>
                     
                       <li class="rd-nav-item"><a class="rd-nav-link" href="/changeLanguage/dk">Dk</a></li>
                        
                      </li>
                     
                    </ul> 
                  </div>
                </div>
                @if(!Auth::check())
                <div class="rd-navbar-aside" >
                  <div class="rd-navbar-aside-item">
                    <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-register" style="border-radius:40px;"><span class="icon mdi mdi-account"></span>Sign Up</button>
                    <div class="rd-navbar-popup" style="background: linear-gradient(to top, #3399ff 5%, #ffffff 96%);" id="rd-navbar-register">
                      <center><h5 class="rd-navbar-popup-title">Join Us</h5></center>
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
                          <button class="button button-block button-primary" type="submit" style="border-radius:40px;">Create an Account</button>
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
                    <button class="button button-xs button-primary button-icon button-icon-left rd-navbar-popup-toggle" style="border-radius:40px;" data-rd-navbar-toggle="#rd-navbar-login"><span class="icon mdi mdi-import" ></span>Login</button>
                    <div class="rd-navbar-popup" style="background: linear-gradient(to top, #3399ff 25%, #ffffff 85%);" id="rd-navbar-login">
                    <center><h5 class="rd-navbar-popup-title">Login</h5></center>
                       @if (session('status'))
                         <div class="alert alert-danger">
                       {{ session('status') }}
                        </div>
                         @endif
                         
                        @php
                        $user_count = '';
                       $remeber_count  = App\Remeber::where('ip_address', $_SERVER['REMOTE_ADDR'])->count();
                       if($remeber_count > 0){
                        $remeber  = App\Remeber::where('ip_address', $_SERVER['REMOTE_ADDR'])->first();
                        $user_count = App\User::where('id',$remeber->user_id)->count();
                        $user = App\User::where('id',$remeber->user_id)->first();
                       }
                        
                        
                        @endphp
                      <form class="rd-form form-compact" method="POST" action="{{ route('loginpost') }}">
                        @csrf
                        <div class="form-wrap">
                          <input class="form-input @error('email') is-invalid @enderror" value="@if($user_count > 0){{$user->email}} @endif" id="rd-navbar-login-email" type="email" name="email" data-constraints="@Email @Required"/>
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
                         <input  type="checkbox" name="remeber"  value="Remeber Me" >&nbspRemeber Me</input>
                        </div>
                        <br>
                         <input type="hidden" placeholder="ip_addres" name="ip_addres" id="ip_addressss">
                        <div class="form-wrap">
                          <button class="button button-block button-primary" style="border-radius:40px;" type="submit">Login</button>
                        </div>
                      </form>
                      <div class="form-wrap form-wrap-ally">
                          <div class="form-group row mb-0" style="margin-right:100px;">
                            <div class="col-md-8 offset-md-4" >
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                        </div>
                        </div>
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
        @php
        $category = App\Services::where('is_active',1)->get();
    	$gigs = App\Gig::where('status','active')->orderBy('id','DESC')->paginate(10);

        $country = App\Locations::where('location_type','Country')->get();
        $categorys = App\Services::where('is_active',1)->get();
       
       
        @endphp
      <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
             <strong><h1 class="jumbotron-creative-title">{{ __(('Find & Hire Expert Talent')) }}</h1></strong>
             <h5>Work with the best work talent in your region on our secure,
flexible and cost-effective platform.</h5>
              <div class="form-layout-search-outer">
                <form class="form-layout-search form-lg" method="get" action="/Searching-Services">
                  
                  <div class="form-wrap form-wrap-icon form-wrap-select">
                    <!-- Select 2-->
                    <select class="form-input select" id="form-keywords" data-placeholder="All Category" name="categorys" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                      <option label="{{ __(('All Categories')) }}"></option>
                      @foreach($categorys as $categorys)
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
                  <div class="form-wrap form-wrap-button form-wrap-button-icon-only d-flex justify-content-center" id="serch_div" >
                    <button class="button button-lg button-primary button-icon-only" id="serch" style="width:50%; border-radius:40px; margin-right:50%;" type="submit" aria-label="search"><span class="icon icon-4 fl-bigmug-line-search74"></span></button>
                  </div>
                </form>
              </div>
           <br>
           <center><a href="/login?next="><button type="button" class="button button-lg button-primary" id="post_a_job" style="margin-right:30%; margin-top:5%; border-radius:10px;">Post a Job</button></a></center>
         
         
           <br>
           <br>
            <a href="/login"><button type="button" class="button button-sm button-primary" style="border-radius:40px;">Join as Seller</button></a> &nbsp  <a href="/login"><button type="button"  class="button button-sm button-primary" style="background-color:#F2F7F2; margin-left:10%; border-color:#1087EB; color:#1087EB; border-radius:40px;">Join as Buyer</button></a>
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
                      <li><a href="/AboutUs">About Us</a></li>
                       <li><a href="/Contact">Contact</a></li>
                      <li><a href="/Faqs">FAQs</a></li>
                    </ul>
                  </div>
                  <div class="col-6">
                      @php
                      $service = App\Services::where('is_active',1)->limit(4)->get();
                      @endphp
                    <ul class="list-marked-1">
                        @foreach($service as $services)
                      <li><a href="#">{{$services->name}}</a></li>

                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3"> 
                <p class="footer-creative-title">Recent Buyer Request</p>
                <div class="footer-creative-divider"></div>
                <div class="post-line-group">
                  <!-- Post Line-->
                  @php
                    $ClientRequest = App\ClientRequest::where('status','active')->orderBy('id','DESC')->limit(2)->get();
                  @endphp
                  @foreach($ClientRequest as $ClientRequests)
                  <a class="post-line" href="blog-post.html">
                    <!--<time class="post-line-time" datetime="2019"><span class="post-line-time-day">50</span><span class="post-line-time-month">April</span></time>-->
                    <p class="post-line-text">{{$ClientRequests->request_details}}</p>
                    </a>
                @endforeach
                 
                </div>
              </div>
              @php
                $location = App\Locations::Select('name')->where('location_type','Country')->groupBy('name')->limit(4)->get();
              @endphp
              <div class="col-sm-6 col-lg-3">
                <p class="footer-creative-title">Cities And Countries</p>
                <div class="footer-creative-divider"></div>
                <div class="row row-narrow row-15">
                  <div class="col-6">
                    <ul class="list list-1 list-icons">
                        @foreach($location as $locations)
                      <li><a href="#"><span class="icon icon-sm mdi mdi-map-marker"></span><span>{{$locations->name}}</span></a></li>
                      @endforeach
                     </ul>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-creative-aside">
          <div class="container">
            <p class="rights"><span>Handy Service</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="#">Privacy Policy</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>

    <script src="{{asset('front_css/js/core.min.js')}}"></script>
    <script src="{{asset('front_css/js/script.js')}}"></script>
    <!-- Toastr -->

     <!-- Toastr -->
 <script>
 $.get("https://ipinfo.io/json?token=2a1157dd26cc91", function(response) {
        
    console.log(response);
var loation = document.getElementById('countryss').value =  response.country;
console.log('---------->',loation);
var city = document.getElementById('cityss').value =  response.city;
var ip_addres = document.getElementById('ip_addresss').value =  response.ip;
var ip_addres = document.getElementById('ip_addressss').value =  response.ip;
var region = document.getElementById('regionss').value =  response.region;
var postal = document.getElementById('postalss').value =  response.postal;
var timezone = document.getElementById('timezoness').value =  response.timezone;

var internet = document.getElementById('internetss').value =  response.org;
 
}, "jsonp");


    </script>

  
 </body>

</body>
</html>
