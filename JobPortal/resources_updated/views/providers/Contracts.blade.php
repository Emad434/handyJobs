
@extends('setup_header.providers_header')
@section('content')




  <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title"> <h2>Your Contracts</h2></h2>
              
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/8268-removebg-preview.png')}}"width="748" height="528">
           </div>
        </div>
        
        </header>
      </div>

<section class="section section-md text-center">
       
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
               <!-- Bootstrap tabs -->
              <div class="tabs-custom tabs-horizontal tabs-minimal" id="tabs-1">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
 <li class="nav-item" role="presentation"><a class="nav-link active show" href="#tabs-1-1" data-toggle="tab">All Contracts ({{$Contracts_count}})</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Completed ({{$cmplt_contract_count}})</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Cancelled ({{$cancelled_contract_count}})</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab">Pending ({{$pending_contract_count}})</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content" style="letter-spacing: .05em;">
                  <div class="tab-pane fade active show" id="tabs-1-1">
                    
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
		            	@if($Contracts_count > 0)

		            	@foreach($Contracts as $Contract)

					 @php
		                	 $contract_slug = str_replace(" ","-",$Contract->contract_name);
                
 		                @endphp
		              <tr>
		                <td>{{$Contract->buyer_details->name}}</td>
		                <td><a href="/Providers/Contract-details/{{$contract_slug}}/{{$Contract->order_no}}"> {{$Contract->contract_name}}</a></td>
		                <td>{{$Contract->due_on}}</td>
		                <td>${{$Contract->contract_amount}}</td>

		                @if($Contract->status == "active")
		                <td><div class="badge badge-primary">Active</div></td>
		                @elseif($Contract->status == "cancelled")
		                 <td><div class="badge badge-primary"style="background-color: yellow; color: black;">Cancelled</div></td>
		               @elseif($Contract->status == "late")
		                 <td><div class="badge badge-primary"style="background-color: red; color: white;">Late</div></td>
		               @elseif($Contract->status == "completed")
		                 <td><div class="badge badge-primary"style="background-color: green; color: white;">Completed</div></td>
		                  @elseif($Contract->status == "pending")
		                 <td><div class="badge badge-primary"style="background-color: pink; color: white;">Pending</div></td>
		              
		               @endif

		              </tr>
		              @endforeach

		              @else
		              <tr><td>No any orders found.</td></tr>
		              @endif
		             
		            </tbody>
		             
		          </table>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-2">
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
		            	@if($cmplt_contract_count > 0)

		            	@foreach($cmplt_contract as $cmplt_contracts)
 						@php
		                	 $contract_slug = str_replace(" ","-",$cmplt_contracts->contract_name);
                
 		                @endphp

		              <tr>
		                <td>{{$cmplt_contracts->buyer_details->name}}</td>
		                <td><a href="/Providers/Contract-details/{{$contract_slug}}/{{$cmplt_contracts->order_no}}">{{$cmplt_contracts->contract_name}}</a></td>
		                <td>{{$cmplt_contracts->due_on}}</td>
		                <td>${{$cmplt_contracts->contract_amount}}</td>

		                @if($cmplt_contracts->status == "active")
		                <td><div class="badge badge-primary">Active</div></td>
		                @elseif($cmplt_contracts->status == "cancelled")
		                 <td><div class="badge badge-primary"style="background-color: yellow; color: black;">Cancelled</div></td>
		               @elseif($cmplt_contracts->status == "late")
		                 <td><div class="badge badge-primary"style="background-color: red; color: white;">Late</div></td>
		               @elseif($cmplt_contracts->status == "completed")
		                 <td><div class="badge badge-primary"style="background-color: green; color: white;">Completed</div></td>
		               @endif

		              </tr>
		              @endforeach

		              @else
		              <tr><td>No any orders found.</td></tr>
		              @endif
		             
		            </tbody>
		             
		          </table>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-3">
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
		            	@if($cancelled_contract_count > 0)

		            	@foreach($cancelled_contract as $cancelled_contracts)
 
		            	@php
		                	 $contract_slug = str_replace(" ","-",$cancelled_contracts->contract_name);
                
 		                @endphp
		              <tr>
		                <td>{{$cancelled_contracts->buyer_details->name}}</td>
		                <td><a href="/Providers/Contract-details/{{$contract_slug}}/{{$cancelled_contracts->order_no}}">{{$cancelled_contracts->contract_name}}</a></td>
		                <td>{{$cancelled_contracts->due_on}}</td>
		                <td>${{$cancelled_contracts->contract_amount}}</td>

		                @if($cancelled_contracts->status == "active")
		                <td><div class="badge badge-primary">Active</div></td>
		                @elseif($cancelled_contracts->status == "cancelled")
		                 <td><div class="badge badge-primary"style="background-color: yellow; color: black;">Cancelled</div></td>
		               @elseif($cancelled_contracts->status == "late")
		                 <td><div class="badge badge-primary"style="background-color: red; color: white;">Late</div></td>
		               @elseif($cancelled_contracts->status == "completed")
		                 <td><div class="badge badge-primary"style="background-color: green; color: white;">Completed</div></td>
		               @endif

		              </tr>
		              @endforeach

		              @else
		              <tr><td>No any orders found.</td></tr>
		              @endif
		             
		            </tbody>
		             
		          </table>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-4">
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
		            	@if($pending_contract_count > 0)

		            	@foreach($pending_contract as $pending_contracts)
 

		              <tr>
		                <td>{{$pending_contracts->buyer_details->name}}</td>
		                @php
		                	 $contract_slug = str_replace(" ","-",$pending_contracts->contract_name);
                
 		                @endphp
		                <td><a href="/Providers/Contract-details/{{$contract_slug}}/{{$pending_contracts->order_no}}">{{$pending_contracts->contract_name}}</a></td>
		                <td>{{$pending_contracts->due_on}}</td>
		                <td>${{$pending_contracts->contract_amount}}</td>

		                @if($pending_contracts->status == "active")
		                <td><div class="badge badge-primary">Active</div></td>
		                @elseif($pending_contracts->status == "cancelled")
		                 <td><div class="badge badge-primary"style="background-color: black; color: white;">Cancelled</div></td>
		               @elseif($pending_contracts->status == "late")
		                 <td><div class="badge badge-primary"style="background-color: red; color: white;">Late</div></td>
		               @elseif($pending_contracts->status == "completed")
		                 <td><div class="badge badge-primary"style="background-color: green; color: white;">Completed</div></td>
		                  @elseif($Contract->status == "pending")
		                 <td><div class="badge badge-primary"style="background-color: pink; color: white;">Pending</div></td>
		              
		               @endif

		              </tr>
		              @endforeach

		              @else
		              <tr><td>No any orders found.</td></tr>
		              @endif
		             
		            </tbody>
		             
		          </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

 @endsection