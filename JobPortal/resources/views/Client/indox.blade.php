<!DOCTYPE html>

 @php
 $app_setting= App\Amount::first();
 
 @endphp
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
     <link rel="apple-touch-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
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
                                  <a class="brand" href="/Client/Home"><img class="brand-logo-dark" src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}" alt="" width="143" height="80"/></a>
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
                                @foreach($ConversationPoint as $conversation)

                                @php
                                	$last_message = App\Conversation::select('message')
                                    	->where('sender_id',$conversation->sender_id)
                                    	->orwhere('reciever_id',$conversation->reciever_id)->first();
      
                             $last_count = App\ActiveStatus::where('user_id',$conversation->reciever_id)->count();
                            if($last_count > 0){
                            $last_seen = App\ActiveStatus::where('user_id',$conversation->reciever_id)->first();
                         date_default_timezone_set("asia/karachi");
        
                               $dateTime = new DateTime($last_seen->last_seen);
                              $current_time = new DateTime("now");
                             $dateTime->modify('+5 minutes');
                             }else{
                             
                             $last_seen = null;
                             $dateTime = null;
                             $current_time = null;
                             }
                  

                                    $user_details = App\User::where('id',$conversation->reciever_id)->first();
                                    $name_slug = str_replace(" ","-",$user_details->name);
                                @endphp

                                @if($conversation->reciever_id != Auth::user()->id)
                                

                                <!-- Chat Item Start -->
                                <li class="contacts-item archived">
                                    <a class="contacts-link" href="/Client/Conversation/{{$conversation->reciever_id}}/{{$name_slug}}">
                                        <div class="avatar @if($current_time >= $dateTime) avatar-away @else avatar-online @endif">
                                           @if($user_details->profile_image == null)
                                            <img src="{{$user_details->img_url}}" alt="">
                                            @else
                                            <img src="{{asset('/JobPortal/public/profile_images')}}/{{$user_details->profile_image}}" alt="">
                                            @endif
                                            </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name">{{$user_details->name}}</h6>
                                                <div class="chat-time"><span>{{$last_message->created_at}}</span></div>
                                            </div>
                                            <div class="contacts-texts">
                                               @if($conversation->files != null)
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
                                @endif
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
                            <img class="avatar-img" src="{{asset('/JobPortal/public/profile_images')}}/{{Auth::user()->profile_image}}" alt="">
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


  function home()
    {
        window.location.href = "https://handyjob.gtb2bexim.com/Client/Home";
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