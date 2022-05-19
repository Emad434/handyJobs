
 @extends('setup_header.providers_header')
   
 @section('content')

 		<center>
 	  <section class="card section section-md bg-default text-center col-sm-6">
        <div class="container">
           @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                 
          <h3>{{$my_gig->title}}</h3>
          <p class="text-spacing-05">{!! $my_gig->description !!}</p>
          <div class="row row-50 justify-content-center align-items-center text-left">
          	<img src="{{$my_gig->thumbnail}}" style="width: 150px;">
          </div>
          <hr>
          <h4>I will do this in just {{$my_gig->total_time_dureation}} days at ${{$my_gig->rate}}</h4>
           <p class="text-spacing-05">{{ $my_gig->category_details->name }}</p>
      </div>
  </section>
  </center>

  @if($my_gig->id == Auth::user()->id)
  <center>
		
		 <div class="card col-sm-6">
		 	<br>
		 	 <a href="" class="btn btn-primary">Contact Me</a>
  		 	<br>
		 </div>

</center>
@endif
 
 @endsection