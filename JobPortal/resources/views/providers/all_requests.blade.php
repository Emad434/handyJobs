 @extends('setup_header.providers_header')
    @section('title', 'Client Requests')  
 @section('content')
 
  
<section class="section breadcrumbs-custom">
 <div class="breadcrumbs-custom-main bg-image bg-primary">
  <div class="container">
    <h3 class="breadcrumbs-custom-title">{{ __(('Client Requests')) }}</h3>
  </div>
 </div>
</section>

 
 
 
 
  	<section class="section section-md text-center">

        <div class="container">
           @if (session('message'))
                <div class="badge badge-danger"style="background-color: red; color: white;">
                    {{ session('message') }}
                </div>
                @endif
          
          <table class="table table-primary table-responsive-md">
            <thead>
              <tr>
                  <th> </th>
                <th>{{ __(('Client')) }}</th>
                <th>{{ __(('Category')) }}</th>
                <th>{{ __(('Request Details')) }}</th>
                <th>{{ __(('Days')) }}</th>
                <th>{{ __(('Amount')) }}</th>
                <th>{{ __(('Status')) }}</th>
                <th>{{ __(('Actions')) }}</th>
              </tr>
            </thead>
            <tbody>
            	@if($all_request_count > 0)

            	@foreach($all_requests as $all_request)
                  @php
                    $category = App\Services::where('id',$all_request->request_category)->first();
                     $user = App\User::where('id',$all_request->client_id)->first();
                    $client_details = App\User::where('id',$all_request->client_id)->first();
                     $currency = App\Amount::first();
                  @endphp
              <tr>
                  <td><img src="{{asset('/JobPortal/public/profile_images')}}/{{$client_details->profile_image}}"style="width:50px;"></td>
                  <td>{{$user->name}}</td>
                <td>{{$category->name}}</td>
                <td>{{Str::limit($all_request->request_details, 50, ' ...')}}</td>
                <td>{{$all_request->days}} Days</td>
                <td><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$all_request->amount}}</td>
                @if($all_request->status == "pending")
                 <td class="badge badge-info">Pending</td>
                @elseif($all_request->status == "active")
                  <td class="badge badge-primary">Active</td>
               @elseif($all_request->status == "pause")
                  <td class="badge badge-danger">Pause</td>
                @endif
                <td><a href="/Providers/Request-details/{{$all_request->id}}">Details</a></td>
               </tr>
            
              @endforeach

              @else
              <tr><td>{{ __(('No any request found')) }}.</td></tr>
              @endif
             
            </tbody>
             
          </table>
        </div>
      </section>
 
 
 
 @endsection