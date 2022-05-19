
 @extends('setup_header.providers_header')
    @section('title', 'Resolution')  
 @section('content')


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
            		<form method="post" action="/Providers/request_cancel/{{$id}}/{{$buyer_id->buyer_id}}">
            			@csrf
            			<label>Describe what happend?</label>
            			<textarea class="form-control"required id="desc" name="desc"></textarea><br>
            			<p style="color: red;display: none;"id="error" >Required</p>
            			<button class="btn btn-primary" onclick="myfunction" style="background-color: red;border-color: red; border-radius:20px;">Open Dispute</button>
            		</form>
            	</div>
            </div>
        </div>
    </div>
  </section>
 </div>
</center>

 
 @endsection