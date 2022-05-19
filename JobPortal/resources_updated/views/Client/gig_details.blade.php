
 @extends('client_header.client_header')
   
 @section('content')

<div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Your All Contracts Will Appear Hear</h2>
              
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/8265-removebg-preview.png')}}"width="748" height="528">
           </div>
        </div>
        
        </header>
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
          <br>
          <h4>I will do this in just {{$my_gig->total_time_dureation}} days at ${{$my_gig->rate}}</h4>
           <a href="" class="text-spacing-05"><i class="fa fa-tag"></i> {{ $my_gig->category_details->name }}</a>
      </div>
  </section>
  </center>

    <center>
		
		 <div class="card col-sm-6">
		 	<br>
		 	 <a href="#" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal">Contact Me</a>
  		 	<br>
		 </div>

</center>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Describe What You Want</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/Client/send_message/{{$my_gig->user_id}}">
          @csrf
        <textarea class="form-control" rows="5" name="message">I want</textarea><br>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>

  
 @endsection