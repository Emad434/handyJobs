@extends('client_header.client_header')
    @section('title', 'Requests')  
 @section('content')
 
 
 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">All Requests</h3>
          </div>
        </div>
      
 </section>
 
 
  	<section class="section section-md text-center">

        <div class="container">
           @if (session('gig_dlt'))
                <div class="alert alert-danger"style="background-color: red; color: white;">
                    {{ session('gig_dlt') }}
                </div>
                @endif
           <a href="/Client/Post-Request" class="btn btn-primary"><i class="fa fa-plus"></i> {{ __(('Post Request')) }} </a>

          <table class="table table-primary table-responsive-md">
            <thead>
              <tr>
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
                     $currency = App\Amount::first();
                  @endphp
              <tr>
                <td>{{$category->name}}</td>
                <td>{{Str::limit($all_request->request_details, 10, ' ...')}}</td>
                <td>{{$all_request->days}}</td>
                <td><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$all_request->amount}}</td>
                @if($all_request->status == "pending")
                 <td class="badge badge-info">Pending</td>
                @elseif($all_request->status == "active")
                  <td class="badge badge-primary">Active</td>
               @elseif($all_request->status == "pause")
                  <td class="badge badge-danger">Pause</td>
                @endif
                <td><a href="/Client/Request-details/{{$all_request->id}}">Details</a></td>
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