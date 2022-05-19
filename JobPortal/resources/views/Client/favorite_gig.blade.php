
@extends('client_header.client_header')
 @section('title', 'Favorite Gigs')  
@section('content')

 
        </header>

 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Your Services</h3>
          </div>
        </div>
       </section>
      @php
      $faviorte_gig = App\Bookmark::where('user_id',Auth::user()->id)->get();
      @endphp
 	<section class="section section-md text-center">
    
        <div class="container">
           @if (session('gig_delete'))
                <div class="alert alert-danger"style="background-color: red; color: white;">
                    {{ session('gig_delete') }}
                </div>
                @endif
         

          <table class="table table-primary table-responsive-md">
            <thead>
              <tr>
                <th>{{ __(('Provider Name')) }}</th>  
                <th>{{ __(('Title')) }}</th>
                <th>{{ __(('Image')) }}</th>
                <th>{{ __(('Clicks')) }}</th>
                <th>{{ __(('Status')) }}</th>
                <th>{{ __(('Actions')) }}</th>
                <th>{{ __(('Actions')) }}</th>
              </tr>
            </thead>
            <tbody>
             @foreach($faviorte_gig as $faviorte_gigs)
             @php
             $gig_details = App\Gig::where('id',$faviorte_gigs->gig_id)->first();
             $gig_slug = str_replace(" ","-",$gig_details->title);
             $provider_details = App\User::where('id',$gig_details->user_id)->first();
             $clicks = App\GigClicks::where('gig_id',$gig_details->id)->count();
             @endphp
              <tr>
                  <td>{{$provider_details->name}}</td>
                <td>{{$gig_details->title}}</td>
                <td><img src="{{asset('/JobPortal/public/profile_images/')}}/{{$provider_details->profile_image}}"style="width: 50px;"></td>
                <td>{{$clicks}}</td>
                <td>{{$gig_details->status}}</td>
                <td><a  href="/Client/Gig-Details/{{$gig_details->id}}/{{$gig_slug}}">Details</a></td>
                <td><a  href="/Client/Bookmark-Delete/{{$faviorte_gigs->id}}">Delete</a></td>
                
              </tr>
            @endforeach
             
              
              
            </tbody>
             
          </table>
        </div>
      </section>

 @endsection