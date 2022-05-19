 @extends('setup_header.providers_header')
 @section('content')
  


  <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Earnings</h2> 
              
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/5522-removebg-preview.png')}}"width="748" height="528">
           </div>
        </div>
        
        </header>
      </div>

 	<section class="section section-md text-center">
        <div class="container">
           

          <div class="card">
          		
          		<table class="table table-primary table-responsive-md">
		            <thead>
		              <tr>
		                <th>Buyer</th>
		                <th>Contract</th>
		                <th>Due On</th>
		                <th>Total</th>
		                <th>Status</th>
		              </tr>
		            </thead>
		            <tbody>
		            	 
		            	@if($invoices_count > 0)

		            	@foreach($invoices as $Contract)


					 @php
					 	 	$contract_details = App\Contract::where('id',$Contract->id)->first();
		                 	$contract_slug = str_replace(" ","-",$contract_details->contract_name);
                		
 		                @endphp
		              <tr>
		                <td>{{$Contract->buter_details->name}}</td>
		                <td><a href="/Providers/Contract-details/{{$contract_slug}}/{{$contract_details->order_no}}"> {{$contract_details->contract_name}}</a></td>
		                <td>{{$contract_details->due_on}}</td>
		                <td>${{$contract_details->contract_amount}}</td>

		                @if($contract_details->status == "active")
		                <td><div class="badge badge-primary">Active</div></td>
		                @elseif($contract_details->status == "cancelled")
		                 <td><div class="badge badge-primary"style="background-color: yellow; color: black;">Cancelled</div></td>
		               @elseif($contract_details->status == "late")
		                 <td><div class="badge badge-primary"style="background-color: red; color: white;">Late</div></td>
		               @elseif($contract_details->status == "completed")
		                 <td><div class="badge badge-primary"style="background-color: green; color: white;">Completed</div></td>
		                  @elseif($contract_details->status == "pending")
		                 <td><div class="badge badge-primary"style="background-color: pink; color: white;">Pending</div></td>
		              
		               @endif

		              </tr>
		              @endforeach

		              @else
		              <tr><td>No earnings found.</td></tr>
		              @endif
		             
		            </tbody>
		             
		          </table>

          </div>
        </div>

</section>



  @endsection