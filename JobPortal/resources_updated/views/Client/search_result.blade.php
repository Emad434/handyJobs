 @extends('client_header.client_header')
   
 @section('content')


 <div class="jumbotron-creative-inner">
      
         <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Search Results</h2>
              
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/search_results.png')}}" alt="" width="748" height="528"/>
          </div>
        </div>
        
        </header>


         @if($result_count > 0)
               
       <section class="section section-md bg-gray-100">
        <div class="container">
          <div class="row row-40">
            <div class="col-12 text-center">
              <h3>Displaying Services According To Your Selections</h3>
            </div>
            <div class="col-12">
               <div class="row">
                @foreach($result as $gig)

                @php

                $gig_slug = str_replace(" ","-",$gig->title);
                 

                @endphp

                <a href="/Client/Gig-Details/{{$gig->id}}/{{$gig_slug}}" class="mx-auto">
                <div class="card" style="width: 18rem;">
          <img class="card-img-top img-thumbnail" src="{{$gig->thumbnail}}" alt="Card image cap"style="height:200px;">
          <div class="card-body">
            <h5 class="card-title">{{$gig->title}}</h5>
            <p class="card-text"><img src="{{$gig->user_details->profile_image}}" class="img-thumbnail" style="width: 30px;border-radius: 50px;"> {{$gig->user_details->name}}</p>
          
          </div>
        </div>
      </a>
        @endforeach



               </div>
            </div>
            <div class="col-12 text-center"><a class="button button-lg button-primary-outline" href="job-listing-full.html">Show More Jobs</a></div>
          </div>
        </div>
      </section>
      </div>

        @else

        <center>
        
             <img class="card-img-top img-thumbnail" src="{{asset('/front_css/images/19197559.jpg')}}" alt="" style="width: 500px;" width="500" height="500"/>
            <h1>Not Found</h1>
       
        </center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
         
        
        @endif



      @endsection