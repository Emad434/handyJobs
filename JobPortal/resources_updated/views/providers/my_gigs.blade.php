
 @extends('setup_header.providers_header')
   
 @section('content')




  <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">My Services</h2> 
              
             </div>
          </div>
          <div class="jc-decoration">
            <div class="jc-decoration-item jc-decoration-item-1">
              <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970" preserveAspectRatio="none">
                <path d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
              </svg>
            </div>
            <div class="jc-decoration-item jc-decoration-item-2">
              <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970" preserveAspectRatio="none">
                <path d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
              </svg>
            </div>
            <img class="jc-decoration-image" src="{{asset('/front_css/images/4782-removebg-preview.png')}}"width="748" height="528">
           </div>
        </div>
        
        </header>
      </div>

 	<section class="section section-md text-center">

        <div class="container">
           @if (session('gig_dlt'))
                <div class="alert alert-danger"style="background-color: red; color: white;">
                    {{ session('gig_dlt') }}
                </div>
                @endif
           <a href="/Providers/Add-Service" class="btn btn-primary"><i class="fa fa-plus"></i> Add Service </a>

          <table class="table table-primary table-responsive-md">
            <thead>
              <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Clicks</th>
                <th>Status</th>
                <th>Actions</th>
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
                <td><img src="{{$my_gig->thumbnail}}"style="width: 50px;"></td>
                <td>{{$clicks}}</td>
                <td>{{$my_gig->status}}</td>
                <td><a href="/Providers/Edit-Gig/{{$my_gig->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> <a href="/Providers/delete_gigs/{{$my_gig->id}}" class="btn btn" style="background-color: red;color: white;">Delete</a></td>
              </tr>
            
              @endforeach

              @else
              <tr><td>No any service found.</td></tr>
              @endif
             
            </tbody>
             
          </table>
        </div>
      </section>

 @endsection