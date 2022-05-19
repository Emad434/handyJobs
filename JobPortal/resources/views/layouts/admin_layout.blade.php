
  @php
 $app_setting= App\Amount::first();
 
 @endphp
<!DOCTYPE html>
 
<html class="loading" lang="en" data-textdirection="ltr">
 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard- HandyJobs</title>
    <link rel="apple-touch-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/vendors/chartist-js/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/vendors/chartist-js/chartist-plugin-tooltip.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/themes/vertical-modern-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/themes/vertical-modern-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/pages/dashboard-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/pages/intro.min.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->
    <!-- END: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/pages/app-chat.min.css')}}">
 
       <!-- END: VENDOR CSS-->
       <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/dropify/css/dropify.min.css')}}">
    <!-- BEGIN: Page Level CSS-->
      <!-- END: Page Level CSS-->
   <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/pages/app-invoice.min.css')}}">
 
      

  <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/data-tables/css/select.dataTables.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/pages/data-tables.min.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
   <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/quill/quill.bubble.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/pages/form-select2.min.css') }}">
     <link rel="stylesheet" href="{{asset('Admin_css/vendors/select2/select2.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Admin_css/vendors/select2/select2-materialize.css')}}" type="text/css">
   

       <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/css/pages/page-users.min.css')}}">
       <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
   
 <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/css/pages/app-file-manager.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Admin_css/css/pages/widget-timeline.min.css')}}">
    <!-- END: Page Level CSS-->
  </head>
 
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark shadow gradient-45deg-indigo-blue" >
          <div class="nav-wrapper"style="background-color:#1087EB;">
            <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize" data-search="template-list">
              <ul class="search-list collection display-none"></ul>
            </div>
            <ul class="navbar-list right">
                
              <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
              <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>

              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown">
                <span class="avatar-status avatar-online"><img src="{{asset('Admin_css/images/avatar/avatar-7.png')}}" alt="avatar"><i></i></span></a>
              </li>
             
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i class="flag-icon flag-icon-gb"></i> English</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></li>
            </ul>
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
             

              <li><a class="grey-text text-darken-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">


                                                     <i class="material-icons">keyboard_tab</i> Logout</a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                                   </li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form id="navbarForm">
                <div class="input-field search-input-sm">
                  <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                  <ul class="search-list collection search-list-sm display-none"></ul>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
          </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark gradient-45deg-deep-purple-blue sidenav-gradient sidenav-active-rounded">
      <div class="brand-sidebar"style="background-color:#1087EB;">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="/Admin">
            <img class="hide-on-med-and-down" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="materialize logo"/>
            <img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="materialize logo"/>
            <span class="logo-text hide-on-med-and-down">Admin</span></a>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" style="background-color:#1087EB;" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="active bold"><a class="active gradient-shadow gradient-45deg-green-teal" href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><!-- <span class="badge badge pill orange float-right mr-10">3</span> --></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a  href="/Admin/User-Manage" {{ Request::path() == '/Admin/User-Manage' ? ' active gradient-shadow gradient-45deg-green-teal' : '' }}><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">User Management</span></a>
              </li>
              <li><a href="/Admin/Invoice-List"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">Invoice Management</span></a>
              </li>
              <li><a href="/Admin/Support"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Customer Support</span></a>
              </li>
               <li><a href="/Admin/All-Admin"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Admins List</span></a>
              </li>
              <li><a href="/Blog/All-Blogs"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Blogs Management</span></a>
              </li>
               
              <li><a href="/Admin/Notification"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Send Notification</span></a>
              </li>
                 <li>
                     <a href="/Admin/Pending-payment-list"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Provider Payout</span></a>
              </li>
              
              <li>
                     <a href="/Admin/Payout"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Buyer Payout</span></a>
              </li>
              
              <li>
                     <a href="/Admin/All-Services"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Services</span></a>
              </li>
              
                 <li>
                     <a href="/Admin/All-buyer-request"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Buyer Requests Approval</span></a>
                </li>
                
                 <li>
                     <a href="/Admin/Gig-Approval"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Gig Approval Requests</span></a>
                </li>
                
                 <li>
                     <a href="/Admin/All-Gigs"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">All Gigs</span></a>
                </li>
               
              <li><a href="/Admin/Set-Referal-Bonus"><i class="material-icons">radio_button_unchecked</i>
                <span data-i18n="Analytics">App settings</span></a>
              </li>
            </ul>
          </div>
        </li>   
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

      <main class="py-4">
            @yield('content')
        </main>




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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script type="text/javascript">
    
$('#support_from').submit(function(e){
 
  
 e.preventDefault();
 
var form = new FormData(document.getElementById('support_from'));
var token = $('#token').val();
 form.append('_token', token);
var x = document.getElementById("myAudio"); 

  $.ajax({
    url: '/Admin/send_support_message/{{$id ?? ''}}',
    type: 'post',
    data: form,             
    cache: false,
    contentType: false, //must, tell jQuery not to process the data
    processData: false,
        
    success: function(response){

    document.getElementById("support_from").reset();
    document.getElementById('blah').style.display = "none";

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

//$('#notifiy').append(blockkks);
 if (!newItems) { return }
   
toastr.options.progressBar = false;
 
      
 toastr.success('<a href='+snotificaton.url+'>'+snotificaton.text +'</a>');

   

});


ref.once('value', () => {
  newItems = true
})


   
</script>

<script>

 
var reff = firebase.database().ref("user_id_{{$id ?? ''}}/support_messages/");
 reff.on('child_added', function(snapshot) {

var AuthName = '{{Auth::user()->id }}'
var myname = "{{Auth::user()->id }}";

 

 var name = (myname == snapshot.val().user_id) ? myname : snapshot.val().user_id;

 
  var recent_images = '<div class="col-4 col-md-2 col-xl-4" ><a ><img src="{{asset("/JobPortal/public/message_media")}}/'+snapshot.val().files+ '" class="img-fluid rounded border" alt=""></a></div>   ';

 
 var  image_tag = "";
 if(snapshot.val().file == ""){

    image_tag = "";
 }
 else if(snapshot.val().file_type == "image"){

      image_tag = '<a class="popup-media" href="{{asset("/JobPortal/public/message_media")}}/'+snapshot.val().files+ '"><img class="img-fluid rounded" src="{{asset("/JobPortal/public/message_media")}}/'+snapshot.val().files+'" style="width:100px;height:100px;"></a>';
 
 }
 else if(snapshot.val().file_type == "document"){

    image_tag = '<i class="material-icons">folder_open</i>'+snapshot.val().files+ '';

 }
 
 if(name == AuthName){
 
  var block = ' <div class="chat chat-right"><div class="chat-avatar"><a class="avatar"><img src="../../../app-assets/images/user/12.jpg" class="circle" alt="avatar" /></a></div><div class="chat-body"><div class="chat-text"><p>'+snapshot.val().text+''+image_tag+'</p></div></div></div>';
 
    $("#message_container").append(block);
 
  
}else{
  

var block2 = '<div class="chat"><div class="chat-avatar"><a class="avatar"><img src="../../../app-assets/images/user/7.jpg" class="circle" alt="avatar" /></a></div><div class="chat-body"><div class="chat-text"><p>'+snapshot.val().text+'</p>'+image_tag+'</div></div></div>';

$("#message_container").append(block2);

 
}
  
});

</script>

 

<!-- 
    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2020          <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
      </div>
    </footer> -->

    <script type="text/javascript">
    var  var1= {{$cmplted_contrracts ?? 1}};
    var var2= 50;

    // User statics
    var male = 500;
    var female = 50;
     </script>



     <script src="{{asset('/Admin_css/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('/Admin_css/vendors/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('/Admin_css/vendors/chartist-js/chartist.min.js')}}"></script>
    <script src="{{asset('/Admin_css/vendors/chartist-js/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('/Admin_css/vendors/chartist-js/chartist-plugin-fill-donut.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{asset('/Admin_css/js/plugins.min.js')}}"></script>
    <script src="{{asset('/Admin_css/js/search.min.js')}}"></script>
    <script src="{{asset('/Admin_css/js/custom/custom-script.min.js')}}"></script>
    <script src="{{asset('/Admin_css/js/scripts/customizer.min.js')}}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('/Admin_css/js/scripts/dashboard-modern.js')}}"></script>
    <script src="{{asset('/Admin_css/js/scripts/intro.min.js')}}"></script>

 <script src="{{asset('/Admin_css/js/scripts/advance-ui-modals.min.js')}}"></script>
   
<!-- DATABLES SCRIPT -->
 
     <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('/Admin_css/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/Admin_css/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/Admin_css/vendors/data-tables/js/dataTables.select.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
<script src="{{asset('/Admin_css/js/plugins.min.js')}}"></script>
<script src="{{asset('/Admin_css/js/search.min.js')}}"></script>
<script src="{{asset('/Admin_css/js/custom/custom-script.min.js')}}"></script>
<script src="{{asset('/Admin_css/js/scripts/customizer.min.js')}}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('/Admin_css/js/scripts/data-tables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/Admin_css/js/scripts/app-invoice.min.js')}}"></script>


<script src="{{asset('Admin_css/js/scripts/app-chat.min.js')}}"></script>
<script src="{{asset('Admin_css/js/scripts/form-validation.js') }}"></script>
<script src="{{asset('Admin_css/vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('Admin_css/js/scripts/ui-chips.min.js')}}"></script>
<script src="{{asset('Admin_css/js/scripts/form-editor.min.js')}}"></script>
<script src="{{asset('Admin_css/js/scripts/form-file-uploads.min.js')}}"></script>
<script src="{{asset('Admin_css/vendors/dropify/js/dropify.min.js')}}"></script>

   <script src="{{asset('Admin_css/js/scripts/app-file-manager.min.js')}}"></script>
   


<script src="{{asset('/Admin_css/vendors/quill/katex.min.js')}}"></script>
<script src="{{asset('/Admin_css/vendors/quill/highlight.min.js')}}"></script>
<script src="{{asset('/Admin_css/vendors/quill/quill.min.js')}}"></script>
<script src="{{asset('Admin_css/js/scripts/form-select2.min.js')}}"></script>
<script src="{{asset('Admin_css/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('/Admin_css/js/scripts/page-users.min.js')}}"></script>
<script src="{{asset('/Admin_css/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/Admin_css/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
  

   
