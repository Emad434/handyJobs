
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
   <link rel="icon" href="{{asset('/front_css/images/favicon.icon')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('/front_css/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <style>
    .ie-panel{
    display: none;
    background: #212121;
    padding: 10px 0;
    box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
    clear: both;
    text-align:center;
    position: relative;
    z-index: 1;
    }
     html.ie-10 .ie-panel, 
     html.lt-ie-10 .ie-panel {
     display: block;
   }
   .badge{

      background-color: red;
      border-radius: 50px;
   }
 </style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    
  </head>
</head>
<style type="text/css">
  body{
        font-family:monospace;
       }
</style>
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
   <div class="page animated" style="animation-duration: 500ms;">
      <!-- Page Header-->
      <header class="section page-header jumbotron-creative">
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
                    <!--Brand--><a class="brand" href="/Client"><img class="brand-logo-dark" src="{{asset('/front_css/images/logo-default-286x52.png')}}" alt="" width="143" height="26"><img class="brand-logo-light" src="{{asset('/front_css/images/logo-inverse-286x52.png')}}" alt="" width="143" height="26"></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap toggle-original-elements">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link" href="/Client/Inbox">Messages <span class="badge badger-danger">{{$unread_messages}}</span></a> 
                      </li>
                      <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link" href="/Client/Contracts">Contracts</a> 
                      </li>
                      <li class="rd-nav-item rd-navbar--has-megamenu rd-navbar-submenu"><a class="rd-nav-link" href="#">Comunity</a> 
                          </li>
                         
                        </ul>
                      </li>
                     
                    </ul>
                  </div>
                </div>
                <div class="rd-navbar-aside">
                  <!--    <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-register"><img src="{{Auth::user()->profile_image}}"class="img-thumbnail" style="width:20px;height:20px;border-radius:50px;"/> &nbsp{{Auth::user()->name}}&nbsp  <div class="badge"style="background-color:green; border-radius: 50px;">$204</div>

                    </button> -->
                <li class="rd-nav-item">
                  <a class="rd-nav-link" href="#">
                  <img src="{{Auth::user()->profile_image}}"class="img-thumbnail" style="width:30px;height:30px;border-radius:50px;"/></a>
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></a>


                          </li>
                        </ul>
                      </li>
                  </div>
              </div>
            </div>
          </nav>
        </div>
        
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


 
 <script type="text/javascript">
 !function(e){e(["jquery"],function(e){return function(){function t(e,t,n){return g({type:O.error,iconClass:m().iconClasses.error,message:e,optionsOverride:n,title:t})}function n(t,n){return t||(t=m()),v=e("#"+t.containerId),v.length?v:(n&&(v=d(t)),v)}function o(e,t,n){return g({type:O.info,iconClass:m().iconClasses.info,message:e,optionsOverride:n,title:t})}function s(e){C=e}function i(e,t,n){return g({type:O.success,iconClass:m().iconClasses.success,message:e,optionsOverride:n,title:t})}function a(e,t,n){return g({type:O.warning,iconClass:m().iconClasses.warning,message:e,optionsOverride:n,title:t})}function r(e,t){var o=m();v||n(o),u(e,o,t)||l(o)}function c(t){var o=m();return v||n(o),t&&0===e(":focus",t).length?void h(t):void(v.children().length&&v.remove())}function l(t){for(var n=v.children(),o=n.length-1;o>=0;o--)u(e(n[o]),t)}function u(t,n,o){var s=!(!o||!o.force)&&o.force;return!(!t||!s&&0!==e(":focus",t).length)&&(t[n.hideMethod]({duration:n.hideDuration,easing:n.hideEasing,complete:function(){h(t)}}),!0)}function d(t){return v=e("<div/>").attr("id",t.containerId).addClass(t.positionClass),v.appendTo(e(t.target)),v}function p(){return{tapToDismiss:!0,toastClass:"badge",containerId:"toast-container",debug:!1,showMethod:"fadeIn",showDuration:300,showEasing:"swing",onShown:void 0,hideMethod:"fadeOut",hideDuration:1e3,hideEasing:"swing",onHidden:void 0,closeMethod:!1,closeDuration:!1,closeEasing:!1,closeOnHover:!0,extendedTimeOut:1e3,iconClasses:{error:"toast-error",info:"toast-info",success:"badge badge-primary",warning:"toast-warning"},iconClass:"toast-info",positionClass:"toast-top-right",timeOut:5e3,titleClass:"toast-title",messageClass:"toast-message",escapeHtml:!1,target:"body",closeHtml:'<button type="button">&times;</button>',closeClass:"toast-close-button",newestOnTop:!0,preventDuplicates:!1,progressBar:!1,progressClass:"toast-progress",rtl:!1}}function f(e){C&&C(e)}function g(t){function o(e){return null==e&&(e=""),e.replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/'/g,"&#39;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}function s(){c(),u(),d(),p(),g(),C(),l(),i()}function i(){var e="";switch(t.iconClass){case"badge badge-primary":case"toast-info":e="polite";break;default:e="assertive"}I.attr("aria-live",e)}function a(){E.closeOnHover&&I.hover(H,D),!E.onclick&&E.tapToDismiss&&I.click(b),E.closeButton&&j&&j.click(function(e){e.stopPropagation?e.stopPropagation():void 0!==e.cancelBubble&&e.cancelBubble!==!0&&(e.cancelBubble=!0),E.onCloseClick&&E.onCloseClick(e),b(!0)}),E.onclick&&I.click(function(e){E.onclick(e),b()})}function r(){I.hide(),I[E.showMethod]({duration:E.showDuration,easing:E.showEasing,complete:E.onShown}),E.timeOut>0&&(k=setTimeout(b,E.timeOut),F.maxHideTime=parseFloat(E.timeOut),F.hideEta=(new Date).getTime()+F.maxHideTime,E.progressBar&&(F.intervalId=setInterval(x,10)))}function c(){t.iconClass&&I.addClass(E.toastClass).addClass(y)}function l(){E.newestOnTop?v.prepend(I):v.append(I)}function u(){if(t.title){var e=t.title;E.escapeHtml&&(e=o(t.title)),M.append(e).addClass(E.titleClass),I.append(M)}}function d(){if(t.message){var e=t.message;E.escapeHtml&&(e=o(t.message)),B.append(e).addClass(E.messageClass),I.append(B)}}function p(){E.closeButton&&(j.addClass(E.closeClass).attr("role","button"),I.prepend(j))}function g(){E.progressBar&&(q.addClass(E.progressClass),I.prepend(q))}function C(){E.rtl&&I.addClass("rtl")}function O(e,t){if(e.preventDuplicates){if(t.message===w)return!0;w=t.message}return!1}function b(t){var n=t&&E.closeMethod!==!1?E.closeMethod:E.hideMethod,o=t&&E.closeDuration!==!1?E.closeDuration:E.hideDuration,s=t&&E.closeEasing!==!1?E.closeEasing:E.hideEasing;if(!e(":focus",I).length||t)return clearTimeout(F.intervalId),I[n]({duration:o,easing:s,complete:function(){h(I),clearTimeout(k),E.onHidden&&"hidden"!==P.state&&E.onHidden(),P.state="hidden",P.endTime=new Date,f(P)}})}function D(){(E.timeOut>0||E.extendedTimeOut>0)&&(k=setTimeout(b,E.extendedTimeOut),F.maxHideTime=parseFloat(E.extendedTimeOut),F.hideEta=(new Date).getTime()+F.maxHideTime)}function H(){clearTimeout(k),F.hideEta=0,I.stop(!0,!0)[E.showMethod]({duration:E.showDuration,easing:E.showEasing})}function x(){var e=(F.hideEta-(new Date).getTime())/F.maxHideTime*100;q.width(e+"%")}var E=m(),y=t.iconClass||E.iconClass;if("undefined"!=typeof t.optionsOverride&&(E=e.extend(E,t.optionsOverride),y=t.optionsOverride.iconClass||y),!O(E,t)){T++,v=n(E,!0);var k=null,I=e("<div/>"),M=e("<div/>"),B=e("<div/>"),q=e("<div/>"),j=e(E.closeHtml),F={intervalId:null,hideEta:null,maxHideTime:null},P={toastId:T,state:"visible",startTime:new Date,options:E,map:t};return s(),r(),a(),f(P),E.debug&&console&&console.log(P),I}}function m(){return e.extend({},p(),b.options)}function h(e){v||(v=n()),e.is(":visible")||(e.remove(),e=null,0===v.children().length&&(v.remove(),w=void 0))}var v,C,w,T=0,O={error:"error",info:"info",success:"success",warning:"warning"},b={clear:r,remove:c,error:t,getContainer:n,info:o,options:{},subscribe:s,success:i,version:"2.1.3",warning:a};return b}()})}("function"==typeof define&&define.amd?define:function(e,t){"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):window.toastr=t(window.jQuery)});



 </script>
 

 <script src="http://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>
  <!-- Toastr -->


<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-firestore.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 
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
console.log(snapshot.val().files);
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
   


   
    <script src="{{asset('/app-assets/rating.js')}}"></script>


</body>
</html>
