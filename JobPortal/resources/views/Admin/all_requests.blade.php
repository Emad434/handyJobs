
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Buyer Request Approval</span></h5>
                 
              </div>
              
                 @if (session('message'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('message') }}
            </div>
          </div>
            @endif
          </div>

<section class="invoice-list-wrapper section">


 <div class="responsive-table">
    <table class="table invoice-data-table white border-radius-4 pt-1">
      <thead>
        <tr>
          
      
          <th>

            <span></span>
          </th>
          <th>Client Name</th>
          <th>Category</th>
          <th>Request Details</th>
          <th>Amount</th>
          <th>Days</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        
        @if($all_request_count > 0)
        @foreach($all_requests as $all_request)
            
            @php
             $client_details = App\User::where('id',$all_request->client_id)->first();
           
              $category = App\Services::where('id',$all_request->request_category)->first();
              
            @endphp 
        
        <tr>
          <td></td>
           <td>
            {{$client_details->name}} 
            
            
          </td>
          <td><span class="invoice-amount">{{$category->name}}</span></td>
          <td><small>{{$all_request->request_details}}</small></td>
          <td><span class="invoice-customer">${{$all_request->amount}}</span></td>
          <td>
            <span class="invoice-amount">{{$all_request->days}} Days</span></a>
         <!--    <span class="bullet blue"></span>
            <small>Car</small> -->
          </td>
           <td>
            <div class="invoice-action" >
              <a href="/Admin/accepts_req/{{$all_request->id}}" class="btn btn-primary">
                Approve
              </a>
            </div>
          </td>
        </tr>
        @endforeach
             @else
             
        <tr>
          <td>Nothing for approval</td>
         </tr>
         @endif
             
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