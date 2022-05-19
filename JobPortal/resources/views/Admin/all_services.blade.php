
  @extends('layouts.admin_layout')

@section('content')

 
<div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>All Services</span></h5>
                 
              </div>
              
                 @if (session('msg'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('msg') }}
            </div>
          </div>
            @endif
          </div>

<section class="invoice-list-wrapper section">


 <div class="responsive-table">
    <table class="table invoice-data-table white border-radius-4 pt-1">
      <thead>
        <tr>
          <th>Service Name</th>
          <th>Status</th>
           <th>Action</th>
        <th>Action</th>
        </tr>
      </thead>
       @php
       $service = App\Services::where('is_active','1')->get();
       @endphp
      <tbody>
          @foreach($service as $services)
        <tr>
           <td>
               {{$services->name}}
           </td>
 
           <td>
               Active
          </td>
          <td>
              <div class="invoice-action" >
              <a href="/Admin/Service-Edit/{{$services->id}}" class="mb-6 btn waves-effect waves-light gradient-45deg-green-teal">
                Edit
              </a>
            </div>
          </td>
          
          <td>
        <div class="invoice-action" >
              <a href="/Admin/delete_service/{{$services->id}}" class="btn btn-danger">
                Delete
              </a>
            </div>
          </td>
        
        </tr>
        @endforeach
             
      </tbody>
    </table>
  </div>
</section>
    </div>
       </div>
  </div>
</div>
  </div>









@endsection