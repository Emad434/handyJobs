
 @extends('setup_header.providers_header')
    @section('title', 'My Gigs')  
 @section('content')

 
        </header>

 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Your Services</h3>
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
           <a href="/Providers/Add-Service" class="btn btn-primary"><i class="fa fa-plus"></i> {{ __(('Add Service')) }} </a>

          <table class="table table-primary table-responsive-md">
            <thead>
              <tr>
                <th>{{ __(('Title')) }}</th>
                <th>{{ __(('Image')) }}</th>
                <th>{{ __(('Clicks')) }}</th>
                <th>{{ __(('Status')) }}</th>
                <th>{{ __(('Actions')) }}</th>
              </tr>
            </thead>
            <tbody>
            	@if($my_gigs_count > 0)

            	@foreach($my_gigs as $my_gig)
                
                @php

                 $gig_slug = str_replace(" ","-",$my_gig->title);
                 $clicks = App\GigClicks::where('gig_id',$my_gig->id)->count();
                 @endphp
              
              <tr>
                <td> <a href="/Providers/Gig-Details/{{$my_gig->id}}/{{$gig_slug}}">{{$my_gig->title}}</a></td>
                <td><img src="{{asset('JobPortal/public/gig_thumbnail')}}/{{$my_gig->thumbnail}}"style="width: 50px;"></td>
                <td>{{$clicks}}</td>
                <td>{{$my_gig->status}}</td>
                <td><a href="/Providers/Edit-Gig/{{$my_gig->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> <a href="/Providers/delete_gigs/{{$my_gig->id}}" class="btn btn" style="background-color: red;color: white;">Delete</a></td>
              </tr>
            
              @endforeach

              @else
              <tr><td>{{ __(('No any service found')) }}.</td></tr>
              @endif
             
            </tbody>
             
          </table>
        </div>
      </section>

 @endsection