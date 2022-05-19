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

    <title>@yield('title')</title>
       
    <meta charset="utf-8">
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
<style type="text/css">
  body{
        font-family:monospace;
       }
</style>
<body>
     
    @php
    $unread_messages= App\Conversation::where('reciever_id',Auth::user()->id)->where('is_seen','unread')->count();
    
       date_default_timezone_set("asia/karachi");

 
   $current_time = date('Y-m-d h:i A');
     $last_seen_chk = App\ActiveStatus::where('user_id',Auth::user()->id)->count();
          $last_seen = App\ActiveStatus::where('user_id',Auth::user()->id)->first();

    if($last_seen_chk > 0){
     App\ActiveStatus::where('user_id',Auth::user()->id)->update(array(
     'last_seen'=>$current_time,
     ));
    }else{
     $last_seen = new App\ActiveStatus;
     $last_seen->user_id = Auth::user()->id;
     $last_seen->last_seen =  $current_time;
    $last_seen->save();
    }
    @endphp
  
  
    @if(App\BankDetail::where('user_id',Auth::user()->id)->count() < 1)
     <div class="alert alert-info" style="background-color:yellow;color:white;">
         <a href="/Client/Bank-Details"><center> <h6>Set Your Bank Account Details</h6></center></a>
     </div>
     @endif
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
   <div class="page animated" >
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="/Client">
                        <img class="brand-logo-dark" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="" width="143" height="26"><img class="brand-logo-light" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="" width="143" height="26"></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap toggle-original-elements">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item rd-navbar--has-dropdown "><a class="rd-nav-link" href="/Client/Inbox">{{ __(('Messages')) }} <span class="badge badger-danger">{{$unread_messages}}</span></a> 
                      </li>
                      <li class="rd-nav-item rd-navbar--has-dropdown"><a class="rd-nav-link" href="/Client/Contracts">{{ __(('Contracts')) }}</a> 
                      </li>
                     
                     
                    
                     <li class="rd-nav-item rd-navbar--has-megamenu "><a class="rd-nav-link" href="/Client/Post-Request">{{ __(('Post A Job')) }}</a> 
                     </li> 
                     
                     <li class="rd-nav-item rd-navbar--has-megamenu "><a class="rd-nav-link" href="/Client/All-Request">{{ __(('All Request')) }}</a> 
                     </li> 
                          
                        </ul>
                      </li>
                     
                    </ul>
                     
                  </div>
                </div>
                
                
                
                
               
                <div class="rd-navbar-aside">
                                  <li class="rd-nav-item">
                                
                          <a class="rd-nav-link" href="#">
                               @php
                $user = App\User::where('id',Auth::user()->id)->first();
                
                @endphp
                @if($user->profile_image == null)
                  
                   <img src="{{$user->img_url}}"class="img-thumbnail" style="width:30px;height:30px;border-radius:50px;"/></a>
               
               
                 @else 
                 <img src="{{asset('/JobPortal/public/profile_images')}}/{{Auth::user()->profile_image}}"class="img-thumbnail" style="width:30px;height:30px;border-radius:50px;"/></a>
              @endif
                    
                         <ul class="rd-menu rd-navbar-dropdown">
                       
                      <li class="rd-dropdown-item">
                            <a class="rd-dropdown-link" href="/Client/Bank-Details">{{ __(('Bank Details'))}}</a>
                          </li>

                           <li class="rd-dropdown-item rd-navbar--has-megamenu "><a class="rd-dropdown-link" href="/Client/Blog">{{ __(('Comunity')) }}</a> 
                     </li> 
                      <li class="rd-dropdown-item rd-navbar--has-megamenu"><a class="rd-dropdown-link" href="/Client/Notification">{{ __(('Notification')) }}</a> 
                      </li>
                      <li class="rd-dropdown-item rd-navbar--has-megamenu"><a class="rd-dropdown-link" href="/Client/My-Profile">{{ __(('My Profile')) }}</a> 
                      </li>
                       <li class="rd-dropdown-item rd-navbar--has-megamenu"><a class="rd-dropdown-link" href="/Client/Favorite-Gigs">{{ __(('Favorite Gigs')) }}</a> 
                      </li>
                           
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __(('Logout')) }}<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                          </a>
                         </li>
                            
                         
                         

                        </ul>
                      </li>
                      

                 <li class="rd-nav-item">
                  <div class="dropdown">
                  <button class="button button-lg button-primary button-icon-only" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-globe"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/changeLanguage/en"><img src="/JobPortal/public/message_media/united-states.png" style="width:20px;">&nbsp EN</a>
                    <a class="dropdown-item" href="/changeLanguage/dk"><img src="/JobPortal/public/message_media/denmark.png" style="width:20px;">&nbsp DK</a>
                   </div>
                </div>
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
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Press</a></li>
                      <li><a href="#">Contact</a></li>
                      <li><a href="#">FAQs</a></li>
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
                <p class="footer-creative-title">Recent News posts</p>
                <div class="footer-creative-divider"></div>
                <div class="post-line-group">
                  <!-- Post Line--><a class="post-line" href="#">
                    <time class="post-line-time" datetime="2019"><span class="post-line-time-day">25</span><span class="post-line-time-month">April</span></time>
                    <p class="post-line-text">Canada adds 12,500 jobs in modest July rebound</p></a>
                  <!-- Post Line--><a class="post-line" href="#">
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
            <p class="rights"><span>Handy Service</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="#">Privacy Policy</a></p>
          </div>
        </div>
      </footer>
    </div>

     

    <div class="snackbars" id="form-output-global"></div>
    
   <script src="{{asset('front_css/js/core.min.js')}}"></script>
    <script src="{{asset('front_css/js/script.js')}}"></script>
    <!-- Toastr -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

     <!-- Toastr -->
 <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-firestore.js"></script>
 
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
       
       toastr.error('<a href='+snotificaton.url+' >'+snotificaton.text +'</a>');

       location.reload();
   }else{
        
toastr.success('<i class="fa fa-comment"></i> <a href='+snotificaton.url+' style="font-size:13px;margin-right:40px;">'+snotificaton.text +'</a>');

     }

});


ref.once('value', () => {
  newItems = true
})


   
</script>




  <!-- Support Messages -->


<script>

 
var reff = firebase.database().ref("user_id_{{Auth::user()->id}}/support_messages/");

 //reff.orderBy("support_messages", "desc").limit(3);
 reff.on('child_added', function(snapshot) {

var AuthName = '{{Auth::user()->id }}'
var myname = "{{Auth::user()->id }}";

 

 var name = (myname == snapshot.val().user_id) ? myname : snapshot.val().user_id;

 
  var recent_images = '<div class="col-4 col-md-2 col-xl-4" ><a ><img src="{{asset("/message_media")}}/'+snapshot.val().files+ '" class="img-fluid rounded border" alt=""></a></div>   ';

 
 var  image_tag = "";
 if(snapshot.val().file == ""){

    image_tag = "";
 }
 else if(snapshot.val().file_type == "image"){

      image_tag = '<a class="popup-media" href="{{asset("/message_media")}}/'+snapshot.val().files+ '"><img class="img-fluid rounded" src="{{asset("/message_media")}}/'+snapshot.val().files+'"></a>';
 
 }
 else if(snapshot.val().file_type == "document"){

    image_tag = '   <div class="document"><div class="btn btn-primary btn-icon rounded-circle text-light mr-2"><svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg></div><div class="document-body"><h6><a href="#" class="text-reset" title="'+snapshot.val().files+'">'+snapshot.val().files+ '</a></h6></div></div>';

 }
 
 if(name == AuthName){
 
  var block = '<div class="chat-bubble me"style="margin-left:31vh;">'+snapshot.val().text+'</div>';
 
    $("#messagess").append(block);
 
  
}else{
  

var block2 = '<div class="chat-bubble you">'+snapshot.val().text+'</div> ';

$("#messagess").append(block2);

 
}
  
});

</script>
   




    <script type="257be86a981729866f2fa61c-text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-83834093-1', 'auto');
    ga('send', 'pageview');

  </script>

    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="257be86a981729866f2fa61c-|49" defer=""></script>
<!-- Time line Html Ends -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('/support_box/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('/support_box/js/popper.min.js')}}"></script>
<script src="{{asset('/support_box/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/support_box/js/select2.min.js')}}"></script>


 <script>
        $(document).ready(function(){
            $(".select2_el").select2({
            });
        });
        </script>
<script>
    $(document).ready(function () {
        //Toggle fullscreen
        $(".chat-bot-icon").click(function (e) {
            $(this).children('img').toggleClass('hide');
            $(this).children('svg').toggleClass('animate');
            $('.chat-screen').toggleClass('show-chat');
        });
        $('.chat-mail button').click(function () {
            $('.chat-mail').addClass('hide');
            $('.chat-body').removeClass('hide');
            $('.chat-input').removeClass('hide');
            $('.chat-header-option').removeClass('hide');
        });
        $('.end-chat').click(function () {
            $('.chat-body').addClass('hide');
            $('.chat-input').addClass('hide');
            $('.chat-session-end').removeClass('hide');
            $('.chat-header-option').addClass('hide');
        });
    });

</script>
 

    <script src="{{asset('front_css/js/core.min.js')}}"></script>
    <script src="{{asset('front_css/js/script.js')}}"></script>
    <!-- Toastr -->


 
 
 <script type="text/javascript" id="">(function(){var b=document.location.search.split("aff\x3d")[1];if(b){var d=document.querySelectorAll("a"),c;for(c=0;c<d.length;c++){var a=d[c];0==a.href.indexOf("https://www.templatemonster.com")&&(0<a.href.indexOf("?")?a.href=a.href+"\x26aff\x3d"+b:a.href=a.href+"?aff\x3d"+b)}}b=document.location.search.split("i\x3d")[1];var e=document.location.search.split("pr_code\x3d")[1];if(b&&e)for(b=b.split("\x26")[0],d=document.querySelectorAll("a"),c=0;c<d.length;c++)a=d[c],0==a.href.indexOf("https://www.templatemonster.com")&&
(a.href="https://www.templatehelp.com/preset/cart.php?act\x3dadd\x26templ\x3d"+b+"\x26pr_code\x3d"+e)})();</script>
 
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

     
    </script> 

   
    <script src="{{asset('/app-assets/rating.js')}}"></script>


</body>
</html>
