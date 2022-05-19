 
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
    <title>Conversations</title>
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="./../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./../favicon-16x16.png">
    <link rel="shortcut icon" href="./../favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
<link rel="apple-touch-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}">
    <link rel="stylesheet" href="{{asset('/chatting_css/webfonts/inter/inter.css')}}"> 
    <link rel="stylesheet" href="{{asset('/chatting_css/css/app.min.css')}}">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
 

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <!-- Toastr -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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
                                @foreach($ConversationPoint as $conversations)

                                @php
                                       	$last_message = App\Conversation::select('message')
                                    	->where('sender_id',$conversations->sender_id)
                                    	->orwhere('reciever_id',$conversations->reciever_id)->first();
                            $last_count = App\ActiveStatus::where('user_id',$conversations->reciever_id)->count();
                                    if($last_count > 0){
                            
                                       $last_seen = App\ActiveStatus::where('user_id',$conversations->reciever_id)->first();
                                     date_default_timezone_set("asia/karachi");
                    
                                           $dateTime = new DateTime($last_seen->last_seen);
                                          $current_time = new DateTime("now");
                                         $dateTime->modify('+5 minutes');
                                         }else{
                                         
                                         $last_seen = null;
                                         $dateTime = null;
                                         $current_time = null;
                                         }
                  
                                    $user_details = App\User::where('id',$conversations->reciever_id)->first();
                                    $name_slug = str_replace(" ","-",$user_details->name);
                                @endphp 
                                
                                @if($conversations->reciever_id != Auth::user()->id)
                                
                                <!-- Chat Item Start -->
                                <li class="contacts-item archived @if($provider_id == $conversations->reciever_id) active @endif">
                                    <a class="contacts-link" href="/Client/Conversation/{{$conversations->reciever_id}}/{{$name_slug}}">
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

                                            @if($last_message->files == null)
                                            <div class="contacts-texts">
                                                <p class="text-truncate">{{$last_message->message}}</p>
                                            </div>
                                            @else
                                            <div class="contacts-texts">
                                                <svg class="hw-20 text-muted" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                                </svg>&nbsp
                                                <p class="text-truncate">{{$last_message->message}}</p>
                                                 @if($unread_messages > 0)
                                                <div class="badge badge-rounded badge-primary ml-1">{{$unread_messages}}</div>
                                                @endif
                                            </div>
                                            @endif
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
        <main class="main main-visible">

            <!-- Chats Page Start -->
            <div class="chats">
                <div class="chat-body">

                    <!-- Chat Header Start-->
                    <div class="chat-header">
                        <!-- Chat Back Button (Visible only in Small Devices) -->
                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted d-xl-none" type="button" data-close="">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                        </button>
                        @php
                              $last_count = App\ActiveStatus::where('user_id',$provider_id)->count();
                               
                                    if($last_count > 0){
                            
                                       $last_seen = App\ActiveStatus::where('user_id',$provider_id)->first();
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

                        <!-- Chat participant's Name -->
                        <div class="media chat-name align-items-center text-truncate">
                            <div class="avatar @if($current_time >= $dateTime) avatar-away @else avatar-online @endif d-none d-sm-inline-block mr-3">
                                 @if($provider_details->profile_image == null)
                  
                                <img src="{{$provider_details->img_url}}" alt="">
                                @else
                                    <img src="{{asset('/JobPortal/public/profile_images')}}/{{$provider_details->profile_image}}" alt="">
                            @endif
                            </div>

                            <div class="media-body align-self-center ">
                                <h6 class="text-truncate mb-0">{{$provider_details->name}}</h6>
                             </div>



                             <div class="media-body">
                                <a class="nav-link text-muted px-1" href="#" role="button" data-toggle="modal" data-target="#inviteOthers"aria-expanded="false">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                        </svg>
                                    <!-- Alternate :: External File link -->
                                    <!-- <img src="./../assets/media/heroicons/outline/search.svg" alt="" class="injectable hw-20"> -->
                                </a>
                             
                         </div>
                        </div>

                       

                        


                        <!-- Chat Options -->
                        <ul class="nav flex-nowrap">


                        
                            <li class="nav-item list-inline-item d-none d-sm-block mr-0">
                                <div class="dropdown">
                                    <a class="nav-link text-muted px-1" href="#" role="button" title="Details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img src="./../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                                    </a>



                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                              
                                            <!-- Alternate :: External File link -->
                                            <!-- <img src="./../assets/media/heroicons/outline/information-circle.svg" alt="" class="injectable hw-20 mr-2"> -->
                                            <span>View Info</span>
                                        </a>
    
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item list-inline-item d-sm-none mr-0">
                                <div class="dropdown">
                                    <a class="nav-link text-muted px-1" href="#" role="button" title="Details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img src="./../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                       
                                        
                                        <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                              
                                            <!-- Alternate :: External File link -->
                                            <!-- <img src="./../assets/media/heroicons/outline/information-circle.svg" alt="" class="injectable hw-20 mr-2"> -->
                                            <span>View Info</span>
                                        </a>
                                        
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Chat Header End-->

                    <!-- Search Start -->
                    <div class="collapse border-bottom px-3" id="searchCollapse">
                        <div class="container-xl py-2 px-0 px-md-3">
                            <div class="input-group bg-light ">
                                <input type="text" class="form-control form-control-md border-right-0 transparent-bg pr-0" placeholder="Search...">
                                <div class="input-group-append">
                                    <span class="input-group-text transparent-bg border-left-0">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                          
                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/search.svg" alt="Search icon"> -->
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Search End -->

                    <!-- Chat Content Start-->
                    <div class="chat-content p-2" id="messageBody">
                        <div class="container">

                            <!-- Message Day Start -->
                            <div class="message-day">

                                <div id="message-container"></div>

                                 <center>
                                <div id="laoder"style="display: none;">
                               <div class="spinner-border text-primary"  role="status"><br>
                            
                            </div><span >Loading Messages...</span>
                            </div>
                        </center> 
                        


                            </div>
                            <!-- Message Day End -->
                        </div>

                        <!-- Scroll to finish -->
                        <div class="chat-finished" id="chat-finished"></div>
                </div>
                    <!-- Chat Content End-->

                        <form method="post" enctype="multipart/form-data" id="send_container_messge">

                    <!-- Chat Footer Start-->
                    <div class="chat-footer">
                        <div class="form-row">
                            <!-- Chat Input Group Start -->
                            <div class="col">
                                <div class="input-group">
                                    <!-- Attachment Start -->
                                    <div class="input-group-prepend mr-sm-2 mr-1">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                    
                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/plus-circle.svg" alt=""> -->
                                            </button>
                                            <div class="dropdown-menu">
                                                <div class="file_choosen_trigger">
                                                <a class="dropdown-item" href="#">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20 mr-2" src="./../assets/media/heroicons/outline/photograph.svg" alt=""> -->
                                                    <span><input type="file" class="hide_file" name="files" onchange="readURL(this);" id="image" style="display: none;">
                                                    Gallery</span>
                                                </a>

                                                </div>


                                                  <a class="dropdown-item" href="#" role="button" data-toggle="modal" data-target="#inviteOthers">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                        </svg>
                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20 mr-2" src="./../assets/media/heroicons/outline/photograph.svg" alt=""> -->
                                                    <span>Contract</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Attachment End -->
                            
                                    <!-- Emoji Start -->
                                     
                                    <!-- Emoji End -->                                  

                                    <!-- Textarea Start-->
                                      <input type="hidden"  id="token" value="{{ csrf_token() }}">
                         
                    <input type="text" class="form-control transparent-bg border-0 no-resize hide-scrollbar"name="message"id="message_content" placeholder="Write your message..." rows="1"> 
                                    <!-- Textarea End -->
                                </div>
                            </div>
                            <!-- Chat Input Group End -->
                    
                            <!-- Submit Button Start -->
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary btn-icon rounded-circle text-light mb-1" role="button">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                        
                                    <!-- Alternate :: External File link -->
                                    <!-- <img src="./../assets/media/heroicons/outline/arrow-right.svg" alt="" class="injectable hw-24"> -->
                                </button>
                            </div>
                            <!-- Submit Button End-->
                        </div>
                    </div>
                    <!-- Chat Footer End-->
                      <div class="container shadow p-3 mb-5 bg-white rounded"id="image_display">
                             <button type="reset" onclick="myFunction()" class="close" >
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <img class="injectable hw-20 img-thumbnail" id="blah" src="#">

                        </div>
                </div>
                </form>

                <!-- Chat Info Start -->
                <div class="chat-info">
                    <div class="d-flex h-100 flex-column">

                        <!-- Chat Info Header Start -->
                        <div class="chat-info-header px-2">
                            <div class="container-fluid">
                                <ul class="nav justify-content-between align-items-center">
                                    <!-- Sidebar Title Start -->
                                    <li class="text-center">
                                        <h5 class="text-truncate mb-0">Profile Details</h5>
                                    </li>
                                    <!-- Sidebar Title End -->

                                    <!-- Close Sidebar Start -->
                                    <li class="nav-item list-inline-item">
                                        <a class="nav-link text-muted px-0" href="#" data-chat-info-close="">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-22" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                              
                                            <!-- Alternate :: External File link -->
                                            <!-- <img class="injectable hw-22" src="./../assets/media/heroicons/outline/x.svg" alt=""> -->
                                        
                                        </a>
                                    </li>
                                    <!-- Close Sidebar End -->
                                </ul>
                            </div>
                        </div>
                        
                            @php
                        
$city= App\Locations::where('id',$provider_details->city)->where('location_type','City')->first();
 
                                  
                            $country = App\Locations::where('id',$provider_details->country)->where('location_type','Country')->first();
                            
                           @endphp
 
                                            <!-- Chat Info Body Start  -->
                        <div class="hide-scrollbar flex-fill">

                            <!-- User Profile Start -->
                            <div class="text-center p-3">

                                <!-- User Profile Picture -->
                                <div class="avatar avatar-xl mx-5 mb-3">
                                    <img class="avatar-img" src="{{asset('/JobPortal/public/profile_images')}}/{{$provider_details->profile_image}}" alt="">
                                </div>

                                <!-- User Info -->
                                <h5 class="mb-1">{{$provider_details->name}}</h5>
                                <p class="text-muted d-flex align-items-center justify-content-center">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                      
                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable mr-1 hw-18" src="./../assets/media/heroicons/outline/location-marker.svg" alt=""> -->
                                    
                                    <span>{{$city->name}}, {{$country->name}}</span>
                                    
                                </p>

                            
                            </div>
                             <!--User Profile End -->

                            <!-- User Information Start -->
                            <div class="chat-info-group">
                                <a class="chat-info-group-header" data-toggle="collapse" href="#profile-info" role="button" aria-expanded="true" aria-controls="profile-info">
                                    <h6 class="mb-0">User Information</h6>
                                    
                                    <!-- Default :: Inline SVG -->
                                     <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                      
                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/information-circle.svg" alt=""> -->
                                  </a>
                                  @php
                                   $contract_details = App\Contract::where('buyer_id',Auth::user()->id)->where('sellers_id',$provider_details->id)->where('status','active')->count();
                                   $contract_detailss = App\Contract::where('buyer_id',Auth::user()->id)->where('sellers_id',$provider_details->id)->where('status','active')->get();
                                  @endphp
                                @if($contract_details > 0)
                                <div class="chat-info-group-body collapse show" id="profile-info">
                                    <div class="chat-info-group-content list-item-has-padding">
                                        <!-- List Group Start -->
                                        <ul class="list-group list-group-flush ">

                                            <!-- List Group Item Start -->
                                            <li class="list-group-item border-0">
                                                <p class="small text-muted mb-0">Phone</p>
                                                <p class="mb-0">{{$provider_details->contacts}}</p>
                                            </li>
                                            <!-- List Group Item End -->

                                            <!-- List Group Item Start -->
                                            <li class="list-group-item border-0">
                                                <p class="small text-muted mb-0">Email</p>
                                                <p class="mb-0">{{$provider_details->email}}</p>
                                            </li>
                                            <!-- List Group Item End -->

                                            <!-- List Group Item Start -->
                                            <li class="list-group-item border-0">
                                                <p class="small text-muted mb-0">Address</p>
                                                <p class="mb-0">{{$provider_details->addres}}</p>
                                            </li>
                                            <!-- List Group Item End -->
                                        </ul>
                                        <!-- List Group End -->
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- User Information End -->
  
                            <!-- Shared Files Start -->
                            <div class="chat-info-group">
                                <a class="chat-info-group-header" data-toggle="collapse" href="#shared-files" role="button" aria-expanded="true" aria-controls="shared-files">
                                    <h6 class="mb-0">Active Contract</h6>
                                  
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                  
                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/document.svg" alt=""> -->
                                </a>
                               @if($contract_details > 0)
                                <div class="chat-info-group-body collapse show" id="shared-files">
                                    <div class="chat-info-group-content list-item-has-padding">
                                         <!-- List Group Start -->
                                         <ul class="list-group list-group-flush">
                                    @foreach($contract_detailss as $contract_detailsss)
                                            <li class="list-group-item">
                                                <div class="document">
                                                    <div class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-24" src="./../assets/media/icons/powerpoint-file.svg" alt=""> -->
                                                    </div>

                                                    <div class="document-body">
                                                        <h6 class="text-truncate">
                                                            <a href="{{asset('Client/Contract-details')}}/{{$contract_detailsss->contract_name}}/{{$contract_detailsss->order_no}}" class="text-reset" title="">{{$contract_detailsss->contract_name}}</a>
                                                        </h6>
                                                    </div>

                                                    <div class="document-options ml-1">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <!-- Default :: Inline SVG -->
                                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                                                </svg>
                                                                
                                                                <!-- Alternate :: External File link -->
                                                                <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                            </button>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            @endif
                                            <!-- List Group Item End -->
                                        </ul>
                                        <!-- List Group End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Shared Files End -->

                        </div>
                        <!-- Chat Info Body Start  -->

                    </div>
                </div>
                <!-- Chat Info End -->
            </div>
            <!-- Chats Page End -->
                        <!-- Chat Info Header End  -->
                     </div>
                </div>
            </div>
        </main>
    </div>

    @php

        $provider_details = App\User::where('id',$provider_id)->first();        
    @endphp

<!--   
  <div id="editor_script" style="display: none;">
      
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  </div>
 -->


 
 
     <!-- Modal 3 :: Invite Others -->
        <div class="modal modal-lg-fullscreen fade" id="inviteOthers" tabindex="-1" role="dialog" aria-labelledby="inviteOthersLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inviteOthersLabel">Create a contract with {{$provider_details->name}}</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body hide-scrollbar">
                        <form method="post" id="contact_from" action="/Client/send_contract_in_conversation/{{$provider_details->id}}" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inviteEmailAddress">Contract Name</label>
                                        <input type="text" class="form-control form-control-md" id="inviteEmailAddress" placeholder="Type contract name here" value=""name="contract_name" Required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inviteMessage">Contract With</label>
                                        <input type="text" name="sellers_id" disabled class="form-control form-control-md" id="inviteEmailAddress" value="{{$provider_details->name}}" Required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inviteMessage">Contract Type</label>
                                        <select class="form-control form-control-md" name="contract_type">
                                            @foreach($category as $categorys)
                                            <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inviteMessage">Select Days</label>
                                            <input type="number" class="form-control form-control-md"name="time_duration" placeholder="Select Days e.g '10 Days' "  id="inviteEmailAddress" Required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inviteMessage">Amount</label>
                                            <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"style="height:35px;">$</div>
                                            </div>
                                        <input type="number" name="amount" id="amountt" onkeyup="include_tax()" placeholder="Select Amount e.g '$100' "  class="form-control" Required>
                                        </div>
                                     </div>
                                     
                                     </div>
                                
                                 <div class="col-12">
                                 <div class="form-group">
                                        <label>{{ __(('Tax Payment')) }}</label>
               	<select class="form-control form-control-md" id="taxx" onchange="include_tax()" name="tax">
               	           <option value=0>Select</option>
            			    <option value=1>Include Tax</option>
            			    <option value=2>Not include tax</option>

            			</select>
            	     <strong id="amt"> </strong>
            	     <input type="hidden" name="amont" class="form-control" id="amount_database" >
                                        </div>
                                 </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inviteMessage">About Your Contract</label>
                                            <textarea class="form-control form-control-md" name="contract_description" rows="6" Required>Briefly Explain About Your Contract</textarea>
                                    </div>
                                </div>
 
                                   <div class="col-12">
                                    <div class="form-group">
                                        <label for="inviteMessage">Put Your Signature</label>
                                          <div id="signArea" >
                                            <div class="sig sigWrapper" style="height:auto;">
                                                <div class="typed"></div>
                                                <canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
                                            </div>
                                        </div>
                                        <input type="hidden" id="image_field" name="image_field">
                                        <input class="btn btn-primary" value="Save" onclick="Signbtn()" id="btnSaveSign" style="display: block;">
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link text-muted" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="save_contrract"  data-toggle="modal" data-target="#inviteOthers" style="display: none; border-radius:40px;" >Send Contract</button>
                    </div>
                  
                  </form>
                        
                </div>
            </div>
        </div>
<!-- Notification -->
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


</body>
 
 <script>
         function include_tax()
        { 
            var tax = 0;
            var selectBox = document.getElementById("taxx");
             if(selectBox.options[selectBox.selectedIndex].value == 1){
                 
              var tax_amount =  parseInt(document.getElementById("amountt").value * 25 /100) + parseInt(document.getElementById("amountt").value);
               console.log(tax_amount);
             
              document.getElementById("amt").innerHTML="Amount to pay = " +  tax_amount;
               document.getElementById("amount_database").value= tax_amount;
             }
             else{
               
              var ammount = document.getElementById("amountt").value;
              console.log(ammount);
              document.getElementById("amt").innerHTML="Amount to pay = " + ammount;
             document.getElementById("amount_database").value= ammount;
        }
        }
       
   </script>
 
<script type="text/javascript">
    
    function Signbtn(){

        document.getElementById('save_contrract').style.display = "block";
        document.getElementById('btnSaveSign').style.display = "none";

    }
    
    function home()
    {
        window.location.href = "https://handyjob.gtb2bexim.com/Client/Home";
    }

</script>


<script>

    // Add record
$('#send_container_messge').submit(function(e){
 
  
 e.preventDefault();
  var username = $('#message_content').val();

var form = new FormData(document.getElementById('send_container_messge'));
var token = $('#token').val();
 form.append('_token', token);
var x = document.getElementById("myAudio"); 

  $.ajax({
    url: '/Client/send_message/{{$provider_details->id}}',
    type: 'post',
     data: form,             
        cache: false,
        contentType: false, //must, tell jQuery not to process the data
        processData: false,
        
    success: function(response){
      
   
    var xdiv = document.getElementById("image_display");
      xdiv.style.display = "none";
        
          document.getElementById("send_container_messge").reset();
     
         $("#messageBody").animate({ 
         scrollTop: $( '#messageBody').get(0).scrollHeight },3000); 
        // console.log({'message': username});
      
        }
  });

 
  });


  </script>



<!-- Contract Send -->
  <script>
$('#contact_from').submit(function(e){
 
  
 e.preventDefault();
 
var form = new FormData(document.getElementById('contact_from'));
var token = $('#token').val();
 form.append('_token', token);
var x = document.getElementById("myAudio"); 

  $.ajax({
    url: '/Client/send_contract_in_conversation/{{$provider_details->id}}',
    type: 'post',
     data: form,             
        cache: false,
        contentType: false, //must, tell jQuery not to process the data
        processData: false,
        
    success: function(response){
      
   
    var xdiv = document.getElementById("image_display");
      xdiv.style.display = "none";
         $('#inviteOthers').modal('hide');

          document.getElementById("send_container_messge").reset();
     
         $("#messageBody").animate({ 
         scrollTop: $( '#messageBody').get(0).scrollHeight },3000); 
        // console.log({'message': username});
      
        }
  });

 
  });


  </script>


 <script type="text/javascript">


$('.file_choosen_trigger').bind("click" , function () {
$('#image').click();
});
</script>
<script type="text/javascript">
var x = document.getElementById("image_display");
x.style.display = "none";
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(200)
.height(100);
};
 var name = document.getElementById('image'); 
  x.style.display = "block";
 $('#files').val(name.files.item(0).name);
reader.readAsDataURL(input.files[0]);
}
}



function myFunction() {
    var xdiv = document.getElementById("image_display");
  xdiv.style.display = "none"; 
 $('#send_container_messge')[0].reset();
 }
</script>
<script src="{{asset('/chatting_css/vendors/jquery/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('/chatting_css/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/chatting_css/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/chatting_css/vendors/svg-inject/svg-inject.min.js')}}"></script>
    <script src="{{asset('/chatting_css/vendors/modal-stepes/modal-steps.min.js')}}"></script>
    <script src="{{asset('/chatting_css/js/app.js')}}"></script>



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
            var blockkks = '<li class="list-group-item"><div class="media"><div class="btn btn-primary btn-icon rounded-circle text-light mr-2"><!-- Default :: Inline SVG --><svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><!-- Alternate :: External File link --><!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/check-circle.svg" alt=""> --></div><div class="media-body"><h6><a href="#">'+snotificaton.text+'</a></h6><p class="text-muted mb-0">25 mins ago</p></div></div></li>';
 
         
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

  
 
 
<script>

document.getElementById('laoder').style.display = "block";

var reff = firebase.database().ref("user_id_{{auth()->user()->id}}/messages/user_id_{{$provider_id}}");
 reff.on('child_added', function(snapshot) {

var AuthName = '{{auth()->user()->name}}';
var myname = "{{Auth::user()->name }}";

 

 var name = (myname == snapshot.val().username) ? myname : snapshot.val().username;

 
 var recent_images = '<div class="col-4 col-md-2 col-xl-4" ><a ><img src="{{asset("/JobPortal/public/message_media")}}/'+snapshot.val().files+ '" class="img-fluid rounded border" alt=""></a></div>';

 var  image_tag = "";
 if(snapshot.val().file == ""){

    image_tag = "";
 }
 else if(snapshot.val().file_type == "image"){

      image_tag = '<a class="popup-media img-thumbnail" href="{{asset("/JobPortal/public/message_media")}}/'+snapshot.val().files+ '"><img class="img-fluid rounded" src="{{asset("/JobPortal/public/message_media")}}/'+snapshot.val().files+ '"></a>';
 
 }
 else if(snapshot.val().file_type == "document"){

    image_tag = '   <div class="document"><div class="btn btn-primary btn-icon rounded-circle text-light mr-2"><svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg></div><div class="document-body"><h6><a href="{{asset("/message_media")}}/'+snapshot.val().files+'" class="text-reset" title="'+snapshot.val().files+ '">'+snapshot.val().files+ '</a></h6> </div></div>';

 }

 var link = '';
 if(snapshot.val().link != ""){

    var link = '<a href="'+snapshot.val().link+'" style="color:white;">See Details</a>';
 }
 
 	 var text = snapshot.val().text;
var html = urlify(text);
 
 if(name == AuthName){
document.getElementById('laoder').style.display = "none";

  if(snapshot.val().is_read == 1){

	 	var read_status = '| Seen';
	 }else{

	 	var read_status = '';
	 }
	 
 
 var block = ' <div class="message self" id="'+snapshot.key+'"><div class="message-wrapper"><div class="message-content"><span> '+html+'</span>'+image_tag+'</div></div><div class="message-options"><div class="avatar avatar-sm"><img alt="" src="{{asset("/JobPortal/public/profile_images")}}/{{Auth::user()->profile_image}}"></div>'+read_status+'<span id="abc_'+snapshot.key+'"></span><span class="message-date">'+snapshot.val().date+'</span> <div class="dropdown"><a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/></svg></a> <div class="dropdown-menu"><a class="dropdown-item d-flex align-items-center text-danger" href="#" role="button" data-toggle="modal" data-target="#abccc_'+snapshot.key+'"><svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg><span>Delete</span></a></div></div></div></div> <div class="modal modal-lg-fullscreen fade" id="abccc_'+snapshot.key+'" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="notificationModalLabel">Delete Message?</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body p-0 hide-scrollbar"><div class="row"><div class="col-12"><br><div class="container"><p>You Really Wants To Delete This Message?</p><button class="btn btn-danger" id="firebase_key_input_btn" onclick="myfunction('+snapshot.key+')" data-dismiss="modal">DELETE</button></div><br></div></div></div><div class="modal-footer justify-content-center"><button type="button" class="btn btn-link text-muted close" data-dismiss="modal" aria-label="Close">Close</button></div></div><div class="backdrop"></div> ';
 
    $("#message-container").append(block);
window.scrollTo(0,document.body.scrollHeight);

  
}else{
  
  var link2 = '';
  if(snapshot.val().link_for_privider != ""){

    var link2 = '<a href="'+snapshot.val().link_for_privider+'" style="color:white;">See Details</a>';

  }

var block2 = '<div class="message" id="'+snapshot.key+'"><div class="message-wrapper"><div class="message-content"><span>'+html+'</span>'+image_tag+'<div class="col">'+link2+'</div></div></div><div class="message-options"><div class="avatar avatar-sm"><img alt="" src="{{asset("/JobPortal/public/profile_images")}}/{{$provider_details->profile_image}}"></div><span class="message-date">'+snapshot.val().date+'</span></div></div> ';
document.getElementById('laoder').style.display = "none";

$("#message-container").append(block2);

window.scrollTo(0,document.body.scrollHeight);

}


});


 function urlify(text) {
  var urlRegex = /(https?:\/\/[^\s]+)/g;
  return text.replace(urlRegex, function(url) {
    return '<a href="' + url + '" style="color:#67D8EF;">' + url + '</a>';
  })
  // or alternatively
  // return text.replace(urlRegex, '<a href="$1">$1</a>')
}
 

	function myfunction(snapshot){

  var ref = firebase.database().ref("user_id_{{$provider_id}}/messages/user_id_{{auth()->user()->id}}");
 	ref.child(snapshot).getRef().remove();

 var ref = firebase.database().ref("user_id_{{auth()->user()->id}}/messages/user_id_{{$provider_id}}");
 	ref.child(snapshot).getRef().remove();
    
	}
 var ref = firebase.database().ref("user_id_{{$provider_id}}/messages/user_id_{{auth()->user()->id}}");
 ref.on("child_removed", function(snapshot) {
  var deletedPost = snapshot.val();
 $("#"+snapshot.key).remove();
   
 });
 
 
 
  
 var ref2 = firebase.database().ref('user_id_{{auth()->user()->id}}/messages/user_id_{{$provider_id}}/')
    var ref2 = firebase.database().ref('user_id_{{auth()->user()->id}}/messages/user_id_{{$provider_id}}')

 ref2.on("child_added", function(snapshot){

 firebase.database().ref('user_id_{{$provider_id}}/messages/user_id_{{auth()->user()->id}}/'+snapshot.key).child("is_read").set(1);
  
  });
  
 var ref3 = firebase.database().ref('user_id_{{auth()->user()->id}}/messages/user_id_{{$provider_id}}')
 ref3.on("child_changed", function(snapshot){
    var block = "| Seen";
    $("#abc_"+snapshot.key).append(block);
    
  });
  
  
  
document.getElementById('laoder').style.display = "none";

</script>

 

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
      