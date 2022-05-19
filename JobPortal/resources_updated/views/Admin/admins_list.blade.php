 
  @extends('layouts.admin_layout')

@section('content')
 
<div id="main">
      <div class="row">

   
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
                @if (session('status'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('status') }}
            </div>
          </div>
            @endif
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>All Admins</span></h5>
              
                 
              </div>

              <div class="col s2 m2 1">
                <a href="/Admin/Add-Admin" class="btn btn-primary">Add Admins</a></h5>
               </div>
          </div>
         
         <div id="card-panel-type" class="section">
             <div class="row mt-2">
              @foreach($all_admins as $all_admin)
                <div class="col s12 m6 l4 card-width">
                  <div class="card-panel border-radius-6 mt-10 card-animation-1">
                    <img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                      src="{{$all_admin->profile_image}}" alt="images" />
                    <h6>{{$all_admin->name}}</h6>
                    <p>{{$all_admin->email}}</p>
                    <div class="row mt-4">
                      <div class="col s2">
                        @if($all_admin->is_active == "suspend")
                        <a href="/Admin/active_admin/{{$all_admin->id}}" class="mb-6 btn waves-effect waves-light gradient-45deg-green-teal">Active</a> 
                        @else
                        <a href="/Admin/suspend/{{$all_admin->id}}" class="btn btn-danger">Suspend</a> 
                        @endif
                      </div>
                     </div>
                  </div>
                </div>
                @endforeach
           
            </div>
          </div>










     </div>
    </div>
  </div>
</div>

@endsection