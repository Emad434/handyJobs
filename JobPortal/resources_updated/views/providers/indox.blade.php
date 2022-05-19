<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <!-- SEO Meta Tags-->
    <meta name="keywords" content="quicky, chat, messenger, conversation, social, communication" />
    <meta name="description" content="Quicky is a Bootstrap based modern and fully responsive Messaging template to help build Messaging or Chat application fast and easy." />
    <meta name="subject" content="communication">
    <meta name="copyright" content="frontendmatters">
    <meta name="revised" content="Sunday, July 18th, 2010, 5:15 pm" />
    <title>Inbox</title>
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="./../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./../favicon-16x16.png">
    <link rel="shortcut icon" href="./../favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{asset('/chatting_css/webfonts/inter/inter.css')}}"> 
    <link rel="stylesheet" href="{{asset('/chatting_css/css/app.min.css')}}">
</head>

<body class="chats-tab-open">

    <!-- Main Layout Start -->
    <div class="main-layout">
        <!-- Navigation Start -->
        <div class="navigation navbar navbar-light bg-primary">
            <!-- Logo Start -->
            <a class="d-none d-xl-block bg-light rounded p-1" href="./../index.html">
                <!-- Default :: Inline SVG -->
                <svg height="30" width="30" viewBox="0 0 512 511" ><g><path d="m120.65625 512.476562c-7.25 0-14.445312-2.023437-20.761719-6.007812-10.929687-6.902344-17.703125-18.734375-18.117187-31.660156l-1.261719-41.390625c-51.90625-46.542969-80.515625-111.890625-80.515625-183.992188 0-68.816406 26.378906-132.101562 74.269531-178.199219 47.390625-45.609374 111.929688-70.726562 181.730469-70.726562s134.339844 25.117188 181.730469 70.726562c47.890625 46.097657 74.269531 109.382813 74.269531 178.199219 0 68.8125-26.378906 132.097657-74.269531 178.195313-47.390625 45.609375-111.929688 70.730468-181.730469 70.730468-25.164062 0-49.789062-3.253906-73.195312-9.667968l-46.464844 20.5c-5.035156 2.207031-10.371094 3.292968-15.683594 3.292968zm135.34375-471.976562c-123.140625 0-216 89.816406-216 208.925781 0 60.667969 23.957031 115.511719 67.457031 154.425781 8.023438 7.226563 12.628907 17.015626 13.015625 27.609376l.003906.125 1.234376 40.332031 45.300781-19.988281c8.15625-3.589844 17.355469-4.28125 25.921875-1.945313 20.132812 5.554687 41.332031 8.363281 63.066406 8.363281 123.140625 0 216-89.816406 216-208.921875 0-119.109375-92.859375-208.925781-216-208.925781zm-125.863281 290.628906 74.746093-57.628906c5.050782-3.789062 12.003907-3.839844 17.101563-.046875l55.308594 42.992187c16.578125 12.371094 40.304687 8.007813 51.355469-9.433593l69.519531-110.242188c6.714843-10.523437-6.335938-22.417969-16.292969-14.882812l-74.710938 56.613281c-5.050781 3.792969-12.003906 3.839844-17.101562.046875l-55.308594-41.988281c-16.578125-12.371094-40.304687-8.011719-51.355468 9.429687l-69.554688 110.253907c-6.714844 10.523437 6.335938 22.421874 16.292969 14.886718zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#665dfe"/></g> </svg>
                
                <!-- Alternate :: External File link -->
                <!-- <img class="injectable" src="./../assets/media/logo.svg" alt=""> -->
            </a>
            <!-- Logo End -->

            <!-- Main Nav Start -->
            <ul class="nav nav-minimal flex-row flex-grow-1 justify-content-between flex-xl-column justify-content-xl-center" id="mainNavTab" role="tablist">
                
                <!-- Chats Tab Start -->
                <li class="nav-item">
                    <a class="nav-link p-0 py-xl-3 active" id="chats-tab" href="#chats-content" title="Chats">
                        <!-- Default :: Inline SVG -->
                        <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                        </svg>

                        <!-- Alternate :: External File link -->
                        <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/chat-alt-2.svg" alt="Chat icon"> -->
                    </a>
                </li>
                <!-- Chats Tab End -->

                <!-- Calls Tab Start -->
                <li class="nav-item">
                    <a class="nav-link p-0 py-xl-3 " href="home" title="Calls" style="color: white">
                        <!-- Default :: Inline SVG -->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
<g id="surface12331546">
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(80.000001%,80.000001%,80.000001%);fill-opacity:1;" d="M 24.960938 1.101562 C 24.753906 1.109375 24.550781 1.183594 24.386719 1.3125 L 1.386719 19.210938 C 1.089844 19.425781 0.933594 19.785156 0.976562 20.148438 C 1.023438 20.511719 1.261719 20.820312 1.605469 20.953125 C 1.945312 21.089844 2.332031 21.023438 2.613281 20.789062 L 4 19.710938 L 4 46 C 4 46.550781 4.449219 47 5 47 L 18.832031 47 C 18.941406 47.019531 19.050781 47.019531 19.160156 47 L 30.832031 47 C 30.941406 47.019531 31.050781 47.019531 31.160156 47 L 45 47 C 45.550781 47 46 46.550781 46 46 L 46 19.710938 L 47.386719 20.789062 C 47.667969 21.023438 48.054688 21.089844 48.394531 20.953125 C 48.738281 20.820312 48.976562 20.511719 49.023438 20.148438 C 49.066406 19.785156 48.910156 19.425781 48.613281 19.210938 L 40.96875 13.261719 C 40.992188 13.175781 41 13.089844 41 13 L 41 7 C 41 6.449219 40.550781 6 40 6 L 36.101562 6 C 35.546875 6 35.101562 6.449219 35.101562 7 L 35.101562 8.695312 L 25.613281 1.3125 C 25.425781 1.167969 25.195312 1.09375 24.960938 1.101562 Z M 25 3.367188 L 44 18.15625 L 44 45 L 32 45 L 32 27 C 32 26.449219 31.550781 26 31 26 L 19 26 C 18.703125 25.996094 18.421875 26.125 18.230469 26.347656 C 18.039062 26.570312 17.953125 26.867188 18 27.160156 L 18 45 L 6 45 L 6 18.15625 Z M 37.097656 8 L 39 8 L 39 11.730469 L 37.097656 10.25 Z M 20 28 L 30 28 L 30 45 L 20 45 Z M 20 28 "/>
</g>
</svg>

                        <!-- Alternate :: External File link -->
                        <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/phone.svg" alt="Phone icon"> -->
                    </a>
                </li>
                <!-- Calls Tab End -->
 
 
            </ul>
            <!-- Main Nav End -->
        </div>
        <!-- Navigation End -->

        <!-- Sidebar Start -->
        <aside class="sidebar">
            <!-- Tab Content Start -->
            <div class="tab-content">
                <!-- Chat Tab Content Start -->
                <div class="tab-pane active" id="chats-content">
                    <div class="d-flex flex-column h-100">
                        <div class="hide-scrollbar h-100" id="chatContactsList">
                            
                            <!-- Chat Header Start -->
                            <div class="sidebar-header sticky-top p-2">

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Chat Tab Pane Title Start -->
                                    <h5 class="font-weight-semibold mb-0">Chats</h5>
                                    <!-- Chat Tab Pane Title End -->

                                    <ul class="nav flex-nowrap">

                                        <li class="nav-item list-inline-item mr-1">
                                            <a class="nav-link text-muted px-1" href="#" title="Notifications" role="button" data-toggle="modal" data-target="#notificationModal">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img src="./../assets/media/heroicons/outline/bell.svg" alt="" class="injectable hw-20"> -->
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item list-inline-item d-block d-xl-none mr-1">
                                            <a class="nav-link text-muted px-1" href="#" title="Appbar" data-toggle-appbar="">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="hw-20" src="./../assets/media/heroicons/outline/view-grid.svg" alt="" class="injectable hw-20"> -->
                                            </a>
                                        </li>
 
                                    </ul>
                                </div>
                                
                                
                                <!-- Sidebar Header Start -->
                                <div class="sidebar-sub-header">                                   
                                    <!-- Sidebar Search Start -->
                                    <form class="form-inline">
                                        <div class="input-group">
                                            <input type="text"style="width:350px;" class="form-control search border-right-0 transparent-bg pr-0" placeholder="Search users...">
                                            <div class="input-group-append">
                                                <div class="input-group-text transparent-bg border-left-0" role="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Sidebar Search End -->
                                </div>
                                <!-- Sidebar Header End -->
                            </div>
                            <!-- Chat Header End -->

                            <!-- Chat Contact List Start -->
                            <ul class="contacts-list" id="chatContactTab" data-chat-list="">
                               
                                <!-- Chat Item End -->
                                 @if($conversation_count > 0)
                                @foreach($conversation as $conversation)

                                @php

                                    $user_details = App\User::where('id',$conversation->sender_id)->first();
                                    $name_slug = str_replace(" ","-",$user_details->name);
                                @endphp

                                <!-- Chat Item Start -->
                                <li class="contacts-item archived">
                                    <a class="contacts-link " href="/Providers/Conversation/{{$conversation->sender_id}}/{{$name_slug}}">
                                        <div class="avatar avatar-away"><img src="{{$user_details->profile_image}}" alt=""></div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name">{{$user_details->name}}</h6>
                                                <div class="chat-time"><span>{{$conversation->created_at}}</span></div>
                                            </div>
                                            <div class="contacts-texts">
                                                @if($conversation->files !=null)
                                                <svg class="hw-20 text-muted" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                                </svg>@else
                                                <p class="text-truncate">{{$last_message->message}}</p>
                                                @endif
                                                 @if($unread_messages > 0)
                                                <div class="badge badge-rounded badge-primary ml-1">{{$unread_messages}}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                @else

                                 <li class="contacts-item archived">
                                         <div class="alert alert-warning">No contact Found</div>
                                 </li>
                                @endif

                                <!-- Chat Item End -->
                            </ul>
                            <!-- Chat Contact List End -->
                        </div>
                    </div>
                </div>
                <!-- Chats Tab Content End -->

 
 
 
            </div>
            <!-- Tab Content End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Start -->
        <main class="main">

            <!-- Chats Page Start -->
            <div class="chats">
                <div class="d-flex flex-column justify-content-center text-center h-100 w-100">
                    <div class="container">
                        <div class="avatar avatar-lg mb-2">
                            <img class="avatar-img" src="{{Auth::user()->profile_image}}" alt="">
                        </div>

                        <h5>Welcome, {{Auth::user()->name}}</h5>
                        <p class="text-muted">Please select a chat to Start messaging.</p>

                        <!-- <button class="btn btn-outline-primary no-box-shadow" type="button" data-toggle="modal" data-target="#startConversation">
                            Start a conversation
                        </button> -->
                    </div>
                </div>
            </div>
            <!-- Chats Page End -->

            
        <!-- All Modals End -->
        
    </div>
    <!-- Main Layout End -->
         <div class="modal modal-lg-fullscreen fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0 hide-scrollbar">
                        <div class="row">

                            <div class="col-12">
                                    <!-- List Group Start -->
                                    <ul class="list-group list-group-flush  py-2" id="notifiy">
  
   

                                </ul>
                                <!-- List Group End -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-link text-muted">Clear all</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- Javascript Files -->
    <script src="{{asset('/chatting_css/vendors/jquery/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('/chatting_css/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/chatting_css/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/chatting_css/vendors/svg-inject/svg-inject.min.js')}}"></script>
    <script src="{{asset('/chatting_css/vendors/modal-stepes/modal-steps.min.js')}}"></script>
    <script src="{{asset('/chatting_css/js/app.js')}}"></script>

</body>

<audio id="send_aaudio" autoplay="pause">
  <source src="{{asset('messenger_web.mp3')}}" type="audio/ogg">
     
</audio>
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

<!-- nodesjs --><script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" integrity="sha512-v8ng/uGxkge3d1IJuEo6dJP8JViyvms0cly9pnbfRxT6/31c3dRWxIiwGnMSWwZjHKOuY3EVmijs7k1jz/9bLA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.dev.js" integrity="sha512-RjPwl9YNS2z4nf50767Vg8dW2WLVv8WmKMYhZVBgiCJaiGVNIjXcVcpzVLUzuojaUM5ACZefP6sXnaWkR0lj0w==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.slim.dev.js" integrity="sha512-cBESQ7vbK7hAWMSOeJUnVx0XINFbnYg6b6CHcDEafznBb1kr72qgyrvczLwaULo4bCLtK72brQfyUeEmP+G57g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.slim.js" integrity="sha512-hcPg/5yQzb6Ocz2NHy+XdRfmET1kTOtZc1l6Yt2TyriHW6WpK80hoLfaKG5wI7SqLt/x6IiV9kRoInYCA/BEWw==" crossorigin="anonymous"></script>

 

<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-firestore.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- firebase -->
 <script>
    
 $("#messageBody").animate({ 
scrollTop: $( '#messageBody').get(0).scrollHeight },3000); 
    
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
  var send_aaudio = document.getElementById('send_aaudio')


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
 
send_aaudio.play();
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

  
 
</html>


 