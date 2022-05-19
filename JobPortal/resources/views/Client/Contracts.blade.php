
@extends('client_header.client_header')
 @section('title', 'Contracts')  
@section('content')
        
   
      <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">{{ __(('Contracts Lists')) }}</h3>
          </div>
        </div>
       </section>
      
      
<section class="section section-md text-center">
        <div class="container">
          <div class="text-center">
            <h2>{{ __(('Your Contracts')) }}</h2>
         
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
               <!-- Bootstrap tabs -->
              <div class="tabs-custom tabs-horizontal tabs-minimal" id="tabs-1">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
 <li class="nav-item" role="presentation"><a class="nav-link active show" href="#tabs-1-1" data-toggle="tab">{{ __(('All Contracts')) }} ({{$Contracts_count}})</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">{{ __(('Completed')) }} ({{$cmplt_contract_count}})</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">{{ __(('Cancelled')) }} ({{$cancelled_contract_count}})</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab">{{ __(('Pending')) }} ({{$pending_contract_count}})</a></li>
 <a href="/Client/Make-Contact/" class="btn btn-primary">{{ __(('Make Contract')) }}</a>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content" style="letter-spacing: .05em;">
                  <div class="tab-pane fade active show" id="tabs-1-1">
                    
		          <table class="table table-primary table-responsive-md">
		            <thead>
		              <tr>
		                <th>{{ __(('Buyer')) }}</th>
		                <th>{{ __(('Contract')) }}</th>
		                <th>{{ __(('Due On')) }}</th>
		                <th>{{ __(('Total')) }}</th>
		                <th>{{ __(('Status')) }}</th>
		              </tr>
		            </thead>
		            <tbody>
		            	@if($Contracts_count > 0)

		            	@foreach($Contracts as $Contract)

					 @php
		                	 $contract_slug = str_replace(" ","-",$Contract->contract_name);
                             $currency = App\Amount::first();
 		                @endphp
		              <tr>
		                <td>{{$Contract->buyer_details->name}}</td>
		                <td><a href="/Client/Contract-details/{{$contract_slug}}/{{$Contract->order_no}}"> {{$Contract->contract_name}}</a></td>
		                <td>{{$Contract->due_on}}</td>
		                <td><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:15px;"/>&nbsp{{$Contract->contract_amount}}</td>

		                @if($Contract->status == "active")
		                <td><div class="badge badge-primary">Active</div></td>
		                @elseif($Contract->status == "cancelled")
		                 <td><div class="badge badge-primary"style="background-color: yellow; color: black;">Cancelled</div></td>
		               @elseif($Contract->status == "late")
		                 <td><div class="badge badge-primary"style="background-color: red; color: white;">Late</div></td>
		               @elseif($Contract->status == "completed")
		                 <td><div class="badge badge-primary"style="background-color: green; color: white;">Completed</div></td>
		                  @elseif($Contract->status == "waiting_for_provider_approval")
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