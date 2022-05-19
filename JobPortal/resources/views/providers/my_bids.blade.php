 @extends('setup_header.providers_header')
    @section('title', 'My Bids')  
 @section('content')
 
  
<section class="section breadcrumbs-custom">
 <div class="breadcrumbs-custom-main bg-image bg-primary">
  <div class="container">
    <h3 class="breadcrumbs-custom-title">{{ __(('All Bids')) }}</h3>
  </div>
 </div>
</section>

 @php
 $purposal = App\Proposal::where('provider_id',Auth::user()->id)->get();
 $purposal_count = App\Proposal::where('provider_id',Auth::user()->id)->count();

 @endphp
 
 
 
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
                 
                <th>{{ __(('Client')) }}</th>
                <th>{{ __(('Client Name')) }}</th>
                <th>{{ __(('Category')) }}</th>
                <th>{{ __(('Request Details')) }}</th>
                <th>{{ __(('Days')) }}</th>
                <th>{{ __(('Purposal Amount')) }}</th>
                <th>{{ __(('Bid Amount')) }}</th>
                <th>{{ __(('Status')) }}</th>
                <th>{{ __(('Actions')) }}</th>
              </tr>
            </thead>
            <tbody>
            @foreach($purposal as $purposals)
              <tr>
                  @if($purposal_count > 0)
                  @php
                  $request_details = App\ClientRequest::where('id',$purposals->request_id)->first();
                  $user = App\User::where('id',$request_details->client_id)->first();
                  $catagory = App\Services::where('id',$request_details->request_category)->first();
                   $currency = App\Amount::first();
                  @endphp
                  <td><img src="{{asset('/JobPortal/public/profile_images/')}}/{{$user->profile_image}}"style="width:50px;"></td>
                <td>{{$user->name}}</td>
                <td>{{$catagory->name}}</td>
                <td>{{substr(strip_tags($request_details->request_details), 0, 25)}}</td>
                <td>{{$purposals->proposal_days}} Days</td>
                <td>{{$purposals->proposal_amount}}</td>
                <td><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$purposals->bid_amount}}</td>
                <td>{{$purposals->status}}</td>
                <td><a href="/Providers/Request-details/{{$request_details->id}}">Details</a></td>
                 
               </tr>
               @else
               <tr><td>{{ __(('No any service found')) }}.</td></tr>
               @endif
            @endforeach
              
             
              
             
            </tbody>
             
          </table>
        </div>
      </section>
 
 
 
 @endsection