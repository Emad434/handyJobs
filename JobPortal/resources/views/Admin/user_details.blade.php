  @extends('layouts.admin_layout')

@section('content')

 {{$user_details->name}} 

 <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>UserDetails</span></h5>
              </div>
        

        <div class="col s12">
        
          <div class="container">
       <div class="section users-view">
          @if (session('status'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('status') }}
            </div>
          </div>
            @endif
        <!-- users view media object start -->
        <div class="card-panel">
          <div class="row">
            <div class="col s12 m7">
              <div class="display-flex media">
                <a href="#" class="avatar">
                  <img src="{{asset('/JobPortal/public/profile_images')}}/{{$user_details->profile_image}}" alt="users view avatar" class="z-depth-4 circle"
                    height="64" width="64">
                </a>
                <div class="media-body">

                  <h6 class="media-heading">
                    <span class="users-view-name">{{$user_details->name}} </span>
                   </h6>
                  <span>email:</span>
                  <span class="users-view-id">{{$user_details->email}}</span>
                </div>
              </div>
            </div>
            <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
             @if($user_details->is_active == "suspend")
               <a class="btn btn green"href="/Admin/active_user/{{$user_details->id}}">Active This User</a>
               @elseif($user_details->is_active == "active")
              <a class="btn modal-trigger"href="/Admin/user_suspend/{{$user_details->id}}">Suspend This User</a>
              @endif
            </div>
          </div>
        </div>
  <!-- users view media object ends -->
  <!-- users view card data start -->
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12 m4">
          <table class="striped">
            <tbody>
              <tr>
                <td>Registered:</td>
                <td>{{$user_details->created_at}}</td>
              </tr>
               

              <tr>
                <td>Verified:</td>
                 @if($user_details->email_verified_at != null)
                <td class="users-view-verified">Yes</td>
                @else
                <td class="users-view-verified">No</td>
                @endif
              </tr>
              <tr>
                <td>Role:</td>
                <td class="users-view-role uppercase">{{$user_details->account_type}}</td>
              </tr>
              <tr>
                <td>Status:</td>
                @if($user_details->is_active == "active")
                <td><span class=" users-view-status chip green lighten-5 green-text">Active</span></td>
                @elseif($user_details->is_active == "close")
                <td><span class=" users-view-status chip yellow lighten-5 yellow-text">CLosed</span></td>
                @elseif($user_details->is_active == "suspend")
                <td><span class=" users-view-status chip red lighten-5 red-text">Suspended</span></td>
                @endif
               
              </tr>
            </tbody>
          </table>
        </div>
        
        @php
        $all_reviews = App\Reviews::where('provider_id',$user_details->id)->count();
        $net_income = App\Invoice::where('user_id',$user_details->id)->count();
        $active_contracts = App\Contract::where('sellers_id',$user_details->id)->where('status','active')->count();
         $cancel_contracts = App\Contract::where('sellers_id',$user_details->id)->where('status','cancelled')->count();
         $decline_contracts = App\Contract::where('sellers_id',$user_details->id)->where('status','decline')->count();
        
        @endphp
        <div class="col s12 m8">
          <table class="responsive-table">
            <thead>
              <tr>
                <th>All Reviews</th>
                 <th>Total  Revenue</th>
                <th>Active Contracts</th>
                <th>Cancel Contracts</th>
                <th>Decline Contracts</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$all_reviews}}</td>
                <td>${{$net_income}}</td>
                <td>{{$active_contracts}}</td>
                <td>{{$cancel_contracts}}</td>
                <td>{{$decline_contracts}}</td>
              </tr>
             </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- users view card data ends -->

  <!-- users view card details start -->
  <div class="card">
    <div class="card-content">
      <div class="row indigo lighten-5 border-radius-4 mb-2">
        <div class="col s12 m4 users-view-timeline">
          <h6 class="indigo-text m-0">Posts: <span>125</span></h6>
        </div>
        <div class="col s12 m4 users-view-timeline">
          <h6 class="indigo-text m-0">Followers: <span>534</span></h6>
        </div>
        <div class="col s12 m4 users-view-timeline">
          <h6 class="indigo-text m-0">Following: <span>256</span></h6>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <table class="striped">
            <tbody>
              <tr>
                <td>Username:</td>
                <td class="users-view-username">dean3004</td>
              </tr>
              <tr>
                <td>Name:</td>
                <td class="users-view-name">Dean Stanley</td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td class="users-view-email">deanstanley@gmail.com</td>
              </tr>
              <tr>
                <td>Comapny:</td>
                <td>XYZ Corp. Ltd.</td>
              </tr>

            </tbody>
          </table>
          <h6 class="mb-2 mt-2"><i class="material-icons">link</i> Social Links</h6>
          <table class="striped">
            <tbody>
                        <tr>
                          <td>Twitter:</td>
                          <td><a href="#">https://www.twitter.com/</a></td>
                        </tr>
                        <tr>
                          <td>Facebook:</td>
                          <td><a href="#">https://www.facebook.com/</a></td>
                        </tr>
                        <tr>
                          <td>Instagram:</td>
                          <td><a href="#">https://www.instagram.com/</a></td>
                        </tr>
                      </tbody>
                    </table>
                    <h6 class="mb-2 mt-2"><i class="material-icons">error_outline</i> Personal Info</h6>
                    <table class="striped">
                      <tbody>
                        <tr>
                          <td>Birthday:</td>
                          <td>{{$user_details->bitrth_day}}</td>
                        </tr>
                        <tr>
                          <td>Country:</td>
                          <td>{{$user_details->country}}</td>
                        </tr>
                        <tr>
                          <td>Gender:</td>
                          <td>{{$user_details->gender}}</td>
                        </tr>
                        <tr>
                          <td>Contact:</td>
                          <td>{{$user_details->contacts}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- </div> -->
              </div>
            </div>
            <!-- users view card details ends -->

          </div>
 
               </div>
            </div>
         </div>
       </div>
      </div>
    </div>
  </div>
    
 
   @endsection