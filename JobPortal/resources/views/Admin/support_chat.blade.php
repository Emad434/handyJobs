 
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
                          
                          <div class="col s10">
                            <p class="m-0 blue-grey-text text-darken-4 font-weight-700">Administrator</p>
                            <p class="m-0 info-text">Customer Support </p>
                          </div>
                        </div>
                        
                      </div>
                      <!--/ Sidebar Header -->

                      <!-- Sidebar Search -->
                      <div class="sidebar-search animate fadeUp">
                        <div class="search-area"style="width:400px;">
                          <i class="material-icons search-icon">search</i>
                          <input type="text" placeholder="Search Chat" class="app-filter" id="chat_filter">
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
                                  <img src="{{asset('JobPortal/public/profile_images')}}/{{ $user->profile_image }}" alt=""
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
                    <img src="{{asset('JobPortal/public/profile_images')}}/{{ $user->profile_image }}" alt="" class="circle z-depth-2 responsive-img">
                  </div>
                  <div class="col">
                    <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ $user->name }}</p>
                    <p class="m-0 chat-text truncate">{{$user->account_type}}</p>
                  </div>
                </div>
               
              </div>
              <!--/ Chat header -->

              <!-- Chat content area -->
              <div class="chat-area">
                   @if($user->is_active == "suspend")
            
                   <div class="card-alert card gradient-45deg-purple-deep-orange">
                    <div class="card-content white-text">
                      <i class="material-icons">block</i>
                       <strong>Warning: </strong>This Account Is Closed By Admin
                    </div>
                  </div>
                  @endif
                <div class="chats">
                  <div class="chats" id="message_container">
                     
                    
                       
                  </div>
                </div>
              </div>
             
               <div id="wrapper" class="toggled">
            
              <!--/ Chat content area -->

              <!-- Chat footer <-->
               
               @if($user->is_active == "suspend")
            
                   <div class="card-alert card gradient-45deg-purple-deep-orange">
                    <div class="card-content white-text">
                      <i class="material-icons">block</i>
                       <strong>Warning: </strong>This Account Is Closed By Admin
                    </div>
                  </div>
                  @else
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
              @endif

              <!--/ Chat footer -->
              @else
                 <h6 class="center align-items-center justify-content-center"style="margin-top:20%;">
                  <i class="material-icons">comments</i>
                Select a Conversation</h6> 
              @endif
              
              
            </div>
            
            
            <!--/ Content Area -->
          </div>
           @if($id != null)
           
           @php
            $user_country = App\Locations::where('id',$user->country)->where('location_type','Country')->first();
               
              $user_city = App\Locations::where('id',$user->city)->where('location_type','City')->first();
              
              if($user->account_type == "seller"){
                          
                $active_contract = App\Contract::where('sellers_id',$id)->where('status','active')->get();
                $active_contract_count = App\Contract::where('sellers_id',$id)->where('status','active')->count();
                
            }elseif($user->account_type == "buyer"){
                 
                 $active_contract = App\Contract::where('buyer_id',$user->id)->where('status','active')->get();
                  $active_contract_count = App\Contract::where('buyer_id',$user->id)->where('status','active')->count();
               
                                
            
            }
           @endphp

 <div class="app-file-sidebar-info"style="width:650px;">
    <div class="card box-shadow-none m-0 pb-1">
     
      <div class="card-content">
        <ul class="tabs tabs-fixed-width mb-1">
          <li class="tab mr-1 pr-1">
            <a class="active display-flex align-items-center" id="details-tab" href="#details">
              <i class="material-icons mr-1">content_paste</i>
              <span>Details</span>
            </a>
          </li>
          <li class="tab">
            <a class="display-flex align-items-center" id="activity-tab" href="#file-activity">
              <i class="material-icons mr-1">timeline</i>
              <span>Activity</span>
            </a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="details-tab active" id="details">
            <div class="display-flex align-items-center flex-column pb-2 pt-4">
              <img src="{{asset('JobPortal/public/profile_images')}}/{{ $user->profile_image }}" class="circle z-depth-2 responsive-img"style="height:120px;">
              <p class="mt-4">{{ $user->name }}</p>
            </div>
            <div class="divider mt-5 mb-5"></div>
            <div class="pt-6">
              <span class="app-file-label">User Details</span>
              <div class="display-flex justify-content-between align-items-center mt-6">
                <p>Account Type</p>
                <div class="switch">
                  {{$user->account_type}}
                </div>
              </div>
              <div class="display-flex justify-content-between align-items-center mt-6">
                <p>Email</p>
                <div class="switch">
                  <label>
                    {{$user->email}}
                  </label>
                </div>
              </div>
              <div class="display-flex justify-content-between align-items-center mt-6 mb-8">
                <p>Country</p>
                <div class="switch">
                  <label>
                    {{$user_country->name}}
                  </label>
                </div>
              </div>
               <div class="display-flex justify-content-between align-items-center mt-6">
                <p>City</p>
                <p class="font-weight-700">{{$user_city->name}}</p>
              </div>
              <div class="display-flex justify-content-between align-items-center mt-6">
                <p>Phone</p>
                <p class="font-weight-700"> {{$user->contacts}}</p>
              </div>
              
              @if($user->account_type == "seller")
              @php
                $netincome = App\Invoice::where('user_id',$id)->sum('amount');
              @endphp
               <div class="display-flex justify-content-between align-items-center mt-6">
                <p>Net Income</p>
                <p class="font-weight-700">${{$netincome}}</p>
              </div>
              @endif
               
               
               <div class="display-flex justify-content-between align-items-center mt-6">
                <p>Action</p>
                  @if($user->is_active == "active")
            
                 <a href="/Admin/suspend/{{$id}}" class="btn btn-danger">Close account</a>
                @else
                <a href="/Admin/active_admin/{{$id}}" class="btn gradient-45deg-indigo-purple gradient-shadow buy-now-animated tada">Active</a>
                @endif
              </div>
            </div>
          </div>
          <div class="activity-tab" id="file-activity">
                @if($active_contract_count > 0)
          
                 <div class="sidebar-search animate fadeUp">
                   <div class="search-area">
                     <input type="text" placeholder="Search Contract By Order#"  id="myInput" onkeyup="myFunctionsss()" class="app-filter" id="chat_filter">
                   </div>
                 </div>
                 @endif
            <ul class="widget-timeline mb-0" id="myUL">
              
            @if($active_contract_count > 0)
                @foreach($active_contract as $active_contracts)
              <li class=" @if($active_contracts->status == 'active') timeline-items timeline-icon-green active @else timeline-items timeline-icon-red active @endif" >
                <div class="timeline-time">{{$active_contracts->created_at}}</div>
                <h6 class="timeline-title">{{$active_contracts->contract_name}}</h6>
                <span class="timeline-text">Status: {{$active_contracts->status}}</span>
                <p class="timeline-text">Contract#: {{$active_contracts->order_no}}</p>
                <div class="timeline-content">
                    @if($active_contracts->status == "active")
                   <a href="/Admin/cancel_contract/{{$active_contracts->id}}" class="btn btn-primary">Cancel Conract</a>
                     @endif
                </div>
              </li>
              @endforeach
              
              @else
              
               
               <li class=" timeline-items"id="search_error" >
                <div class="timeline-content">
                   <p >No Contract Found</p>
                </div>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
    <!--left sidebar of file manager start -->
  </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- START RIGHT SIDEBAR NAV -->
 
 
 <script>
function myFunctionsss() {
    var input, filter, ul, li, p, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        p = li[i].getElementsByTagName("p")[0];
        txtValue = p.textContent || p.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "block";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

 
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

