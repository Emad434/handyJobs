
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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('/front_css/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>

  <style type="text/css">
  body{
        font-family:monospace;
       }
</style>
</head>
<body>
    <div id="app">
        


 
  <body>
  @php
    $unread_messages= App\Conversation::where('reciever_id',Auth::user()->id)->where('is_seen','unread')->count();
    @endphp
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
      <header class="section page-header jumbotron-creative ">
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
                    <!--Brand--><a class="brand" href="/Providers/"><img class="brand-logo-dark" src="{{asset('/front_css/images/logo-default-286x52.png')}}" alt="" width="143" height="26"/><img class="brand-logo-light" src="{{asset('/front_css/images/logo-inverse-286x52.png')}}" alt="" width="143" height="26"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/Providers/Inbox">Message 
                        <div class="badge"style="background-color:red; border-radius: 50px;">{{$unread_messages}}</div></a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/Providers/Contracts">Contracts</a>
                         
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/Providers/My-Services">My Services</a>
                         
                      </li>

                      <li class="rd-nav-item"><a class="rd-nav-link" href="/Providers/Earnings">Earnings</a>
                         
                      </li>

                      <li class="rd-nav-item"><a class="rd-nav-link" href="/Providers/Work-Diary">Work Diary</a>
                         
                      </li>                      
                    </ul>
                  </div>
                </div>
                 <div class="rd-navbar-aside-item">
                 <!--    <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-register"><img src="{{Auth::user()->profile_image}}"class="img-thumbnail" style="width:20px;height:20px;border-radius:50px;"/> &nbsp{{Auth::user()->name}}&nbsp  <div class="badge"style="background-color:green; border-radius: 50px;">$204</div>

                    </button> -->
                     
                <li class="rd-nav-item">
                  <a class="rd-nav-link" href="#">
                  <img src="{{Auth::user()->profile_image}}"class="img-thumbnail" style="width:30px;height:30px;border-radius:50px;"/></a>
                  <span class="rd-nav-item"> Personal Balance ${{Auth::user()->widthdrwal_amount}}</span>
                        <ul class="rd-menu rd-navbar-dropdown">


                                 <li class="rd-dropdown-item">
                            <a class="rd-dropdown-link" href="/Providers/Invite">{{ __(('Refer'))}}</a>
                          </li>
                          
                          <li class="rd-dropdown-item">
                            <a class="rd-dropdown-link" href="/Providers/Invite">{{ __(('Language')) }}</a>
                            <ul class="rd-menu rd-navbar-dropdown">
                                <li class="rd-dropdown-item">
                                    <a class="rd-link" href="/changeLanguage/en">En
                               </a>
                              </li>
                                 <li class="rd-dropdown-item">
                                    <a class="rd-link" href="/changeLanguage/dk">Danish
                               </a>
                              </li>
                            </ul>
                          </li>

                          
                          <li class="rd-dropdown-item">
                            <a class="rd-dropdown-link" href="/Providers/Invite">Reffer</a>
                          </li>

                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                          </a>
                          </li>

                         

                        </ul>
                      </li>
                  </div>
              </div>
            </div>
          </nav>
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
 

   
   <script src="{{asset('/signature_js/js/numeric-1.2.6.min.js')}}"></script> 
    <script src="{{asset('/signature_js/js/bezier.js')}}"></script>
    <script src="{{asset('/signature_js/js/jquery.signaturepad.js')}}"></script> 
    
     <script src="{{asset('/signature_js/js/json2.min.js')}}"></script>
    

     <script src="{{asset('/signature_js/js/html2canvas.js')}}"></script>
    
    
    
    <script>
      $(document).ready(function() {
        $('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
      });
      
      $("#btnSaveSign").click(function(e){
        e.preventDefault();
        html2canvas([document.getElementById('sign-pad')], {
          onrendered: function (canvas) {
            var canvas_img_data = canvas.toDataURL('image/png');
            var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
            //ajax call to save image inside folder
            
             document.getElementById('image_field').value = img_data;
           
          }
        });
      });

      function clear_function(){
       clearCanvas();
     }
      </script> 



      <script>
    toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
      apiKey: "AIzaSyApzKmXOl1znu4NK4OODtH6as4LhfFxgF4",
    authDomain: "jobportal2-903d9.firebaseapp.com",
    databaseURL: "https://jobportal2-903d9.firebaseio.com",
    projectId: "jobportal2-903d9",
    storageBucket: "jobportal2-903d9.appspot.com",
    messagingSenderId: "831849369744",
    appId: "1:831849369744:web:6671df04d62b92f0850815",
    measurementId: "G-JK3LQXXEFL"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
   

var ref = firebase.database().ref("user_id_{{auth()->user()->id}}/web_notification");
 
let newItems = false;
ref.on('child_added', function(snapshot) {
     var snotificaton =  snapshot.val();
     if(snotificaton.url == "block"){
    var blockkks = '<li class="list-group-item"><div class="media"><div class="btn btn-danger btn-icon rounded-circle text-light mr-2"><i class="fa fa-ban" style="color:white;font-size:50px;"></i></div><div class="media-body"><h6><a href="#">'+snotificaton.text+'</a></h6><p class="text-muted mb-0">25 mins ago</p></div></div></li>';
     }else
     {
            var blockkks = '<li class="list-group-item"><div class="media"><div class="btn btn-primary btn-icon rounded-circle text-light mr-2"><!-- Default :: Inline SVG --><svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><!-- Alternate :: External File link --><!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/check-circle.svg" alt=""> --></div><div class="media-body"><h6><a href="#">'+snotificaton.text+'</a></h6><p class="text-muted mb-0">'+snapshot.val().date+'</p></div></div></li>';
          
     }

$('#notifiy').append(blockkks);
 if (!newItems) { return }
   
toastr.options.progressBar = false;
 
    if(snotificaton.url == "block"){
       
       toastr.error('<a href='+snotificaton.url+'>'+snotificaton.text +'</a>');

       location.reload();
   }else{
       toastr.success('<a href='+snotificaton.url+'>'+snotificaton.text +'</a>');

   }

});


ref.once('value', () => {
  newItems = true
})


   
</script>


   
   
    <script src="{{asset('/app-assets/rating.js')}}"></script>
    
 </body>

</body>
</html>
