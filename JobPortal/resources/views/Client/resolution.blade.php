@extends('client_header.client_header')
 @section('title', 'Resolution')  
@section('content')

 
  <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Resolution,</h2>
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/solution.png')}}"style="width:1800px;height:500px;">

           </div>
        </div>
        </div>
 </header>
<center>
 <div class="card col-sm-5">
  <section class="section section-md text-center">
        <div class="container">
          <div class="text-center">
            <h5>Welcome to resolution</h5>
         	<p> Here you can work things out and resolve issues regarding your orders</p>
         	<hr>
            			
          </div>
        </div>
        @php
          $buyer_id = App\Contract::where('id',$id)->first();
        @endphp

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
            	<div class="container">
            		<form method="post" action="/Client/request_cancel/{{$id}}/{{$buyer_id->sellers_id}}">
            			@csrf
            			<label>Describe what happend?</label>
            			<textarea class="form-control"required id="desc" name="desc"></textarea><br>
            			<p style="color: red;display: none;"id="error" >Required</p>
            			<button class="btn btn-primary" onclick="myfunction" style="background-color: red;border-color: red; border-radius:40px;">Open Dispute</button>
            		</form>
            	</div>
            </div>
        </div>
    </div>
  </section>
 </div>
</center>

 
 @endsection