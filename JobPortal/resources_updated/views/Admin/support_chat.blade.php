 
  @extends('layouts.admin_layout')

@section('content')
 
    
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <div class="chat-application">
  <div class="chat-content-head">
    <div class="header-details">
      <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">mail_outline</i> Chat</h5>
    </div>
  </div>
  <div class="app-chat">
    <div class="content-area content-right">
      <div class="app-wrapper">
        <!-- Sidebar menu for small screen -->
        <a href="#" data-target="chat-sidenav" class="sidenav-trigger hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
        <!--/ Sidebar menu for small screen -->

        <div class="card card card-default scrollspy border-radius-6 fixed-width">
          <div class="card-content chat-content p-0">
            <!-- Sidebar Area -->
            <div class="sidebar-left sidebar-fixed animate fadeUp animation-fast">
              <div class="sidebar animate fadeUp">
                <div class="sidebar-content">
                  <div id="sidebar-list" class="sidebar-menu chat-sidebar list-group position-relative">
                    <div class="sidebar-list-padding app-sidebar sidenav" id="chat-sidenav">
                      <!-- Sidebar Header -->
                      <div class="sidebar-header">
                        <div class="row valign-wrapper">
                          <div class="col s2 media-image pr-0">
                            <img src="../../../app-assets/images/user/12.jpg" alt=""
                              class="circle z-depth-2 responsive-img">
                          </div>
                          <div class="col s10">
                            <p class="m-0 blue-grey-text text-darken-4 font-weight-700">Lawrence Collins</p>
                            <p class="m-0 info-text">Apple pie bonbon cheesecake tiramisu</p>
                          </div>
                        </div>
                        <span class="option-icon">
                          <i class="material-icons">more_vert</i>
                        </span>
                      </div>
                      <!--/ Sidebar Header -->

                      <!-- Sidebar Search -->
                      <div class="sidebar-search animate fadeUp">
                        <div class="search-area">
                          <i class="material-icons search-icon">search</i>
                          <input type="text" placeholder="Search Chat" class="app-filter" id="chat_filter">
                        </div>
                        <div class="add-user">
                          <a href="#">
                            <i class="material-icons mr-2 add-user-icon">person_add</i>
                          </a>
                        </div>
                      </div>
                      <!--/ Sidebar Search -->

                      <!-- Sidebar Content List -->
                      <div class="sidebar-content sidebar-chat">

                        @if($conversation_count > 0)
                        @foreach($conversation as $conversations)

                        @php
                        $user = App\User::where('id',$conversations->user_id)->first();
                        @endphp

                        @if($user->account_type != "admin")


                        <a href="/Admin/Support/Conversation/{{$user->id}}">
                        <div class="chat-list">
                          <div class="chat-user animate fadeUp delay-1">
                            <div class="user-section">
                              <div class="row valign-wrapper">
                                <div class="col s2 media-image online pr-0">
                                  <img src="../../../app-assets/images/user/2.jpg" alt=""
                                    class="circle z-depth-2 responsive-img">
                                </div>
                                <div class="col s10">
                                  <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{$user->name}}</p>
                                  <p class="m-0 info-text">Apple pie bonbon cheesecake tiramisu</p>
                                </div>
                              </div>
                            </div>
                            <div class="info-section">
                              <div class="star-timing">
                                <div class="favorite">
                                  <i class="material-icons amber-text">star</i>
                                </div>
                                <div class="time">
                                  <span>2.38 pm</span>
                                </div>
                              </div>
                              <span class="badge badge pill red">4</span>
                            </div>
                          </div> 
                         </div>
                       </a>
                         @endif

                         @endforeach
                         @endif
                        <div class="no-data-found">
                          <h6 class="center">No Results Found</h6>
                        </div>
                      </div>
                      <!--/ Sidebar Content List -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Sidebar Area -->

            <!-- Content Area -->
            <div class="chat-content-area animate fadeUp">
              <!-- Chat header -->
              @if($id != null)

              @php
               $user = App\User::where('id',$id)->first();
               @endphp

              <div class="chat-header">
                <div class="row valign-wrapper">
                  <div class="col media-image online pr-0">
                    <img src="{{ $user->profile_image }}" alt="" class="circle z-depth-2 responsive-img">
                  </div>
                  <div class="col">
                    <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ $user->name }}</p>
                    <p class="m-0 chat-text truncate">Online</p>
                  </div>
                </div>
                <span class="option-icon">
                  <span class="favorite">
                    <i class="material-icons">star_outline</i>
                  </span>
                  <i class="material-icons">delete</i>
                  <i class="material-icons">more_vert</i>
                </span>
              </div>
              <!--/ Chat header -->

              <!-- Chat content area -->
              <div class="chat-area">
                <div class="chats">
                  <div class="chats" id="message_container">
                     
                    
                       
                  </div>
                </div>
              </div>
              <!--/ Chat content area -->

              <!-- Chat footer <-->
              <div class="chat-footer">
                <form  id="support_from" class="chat-input">
              <!--     <i class="material-icons mr-2">face</i>
                  <i class="material-icons mr-2">attachment</i> -->
                  <i class="material-icons" onclick="onfunction()" style="cursor: pointer;">attachment
                  <input type="file" name="files" onchange="readURL(this);"  id="file_chosen" style="display: none;">
                </i>
                 <img class="injectable hw-20 img-thumbnail" id="blah" style="display: none;" src="#">

                   <input type="hidden"  id="token" value="{{ csrf_token() }}">
     
                 &nbsp &nbsp &nbsp <input type="text" placeholder="Type message here.." name="message" class="message mb-0">
                  <button class="btn waves-effect waves-light send">Send</button>
                </form>

                   
              </div>

              <!--/ Chat footer -->
              @else
                 <h6 class="center align-items-center justify-content-center"style="margin-top:20%;">
                  <i class="material-icons">comments</i>
                Select a Conversation</h6> 
              @endif
            </div>
            <!--/ Content Area -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- START RIGHT SIDEBAR NAV -->
 


 
<script type="text/javascript">
 function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
document.getElementById('blah').style.display="block";


reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(200)
.height(100);
};
 var name = document.getElementById('file_chosen'); 
  $('#files').val(name.files.item(0).name);
reader.readAsDataURL(input.files[0]);
}
}



function myFunction() {
    var xdiv = document.getElementById("image_display");
console.log('------------------------>');
 xdiv.style.display = "none"; 
}
</script>

<script type="text/javascript">
  
  function onfunction(){

   document.getElementById("file_chosen").click();


  }

</script>




   
 @endsection

