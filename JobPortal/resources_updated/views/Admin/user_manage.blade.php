  @extends('layouts.admin_layout')

@section('content')
 <link rel="stylesheet" type="text/css" href="{{asset('Admin_css/css/pages/page-users.min.css')}}">
  
 <div id="main">
      <div class="row">

   
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>UserManagement</span></h5>
                 
              </div>
          </div>

 <section class="users-list-wrapper section">
				 
				 <div class="row">
				    <div class="col s12">
				      <div class="card">
				        <div class="card-content">
				          <h4 class="card-title">Users List</h4>
				          <div class="row">
				            <div class="col s12">
				              <table id="page-length-option" class="display">
				                <thead>
				                  <tr>
				                    <th>Name</th>
				                    <th>Position</th>
				                    <th>Account Status</th>
				                    <th>Gender</th>
 				                    <th>Joined Date</th>
 				                     <th>Action</th>
				                  </tr>
				                </thead>
				                <tbody>
				                	@foreach($all_users as $all_user)
				                  <tr>
				                    <td class="uppercase">{{$all_user->name}}</td>
				                    <td class="uppercase">{{$all_user->account_type}}</td>
				                    <td class="uppercase"><span class="bullet green"></span> <small>{{$all_user->is_active}} </small></td>
 				                    <td class="uppercase">{{$all_user->gender}}</td>
				                    <td class="uppercase"> {{$all_user->created_at}}</td>
				                    <td class="uppercase"><a href="/Admin/User-Details/{{$all_user->id}}" class="black-text">Details</a></td>
				                  </tr>
				                  @endforeach
				                  

				                 
				                </tbody>
  				              </table>
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>
				  </div>
    		   </div>
      	    </div>
         </div>
     </div>
  </div>
</section>

@endsection

