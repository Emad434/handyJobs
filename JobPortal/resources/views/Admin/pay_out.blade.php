
  @extends('layouts.admin_layout')
   
 @section('content')
 
 
 <div id="main">
  <div class="row">
  	<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
	   <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
 	<div class="container">
   <div class="row">
  <div class="col s10 m6 l6">
     <h5 class="breadcrumbs-title mt-0 mb-0"><span>PayOut List</span></h5>
  </div>
</div>
 
 
 <section class="users-list-wrapper section">
  <div class="users-list-filter">
    <div class="card-panel">
      <div class="row">
        <form method="get">
          <div class="col s12 m6 l8">
            <label for="users-list-role">Order No</label>
            <div class="input-field">
                <input type="text" class="form-control"/>
            </div>
          </div>
          <div class="col s12 m6 l3 display-flex align-items-center show-btn">
            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  
    <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
              	<th></th>
              		<th></th>
              	  <th>Contract Name</th>
                <th>Order No</th>
                <th>Buyer Name</th>
                <th>Seller Name</th>
                <th>Amount</th>
                <th>Action</th>
                  <th></th>
               </tr>
             <tbody id="abccc">
            @foreach($contract_detail as $contract_details)
 			    
 			    @php
 			    $nvoice = App\Invoice::where('contract_id',$contract_details->id)->count();
	 
 			      $contract_count = App\Contract::where('id',$contract_details->id)->count();    
 			    @endphp
 			    
 			     @if($nvoice > 0)
 			
 			    
 			    @if($contract_count > 0)
 			    
 			    @php
 			      $pyaout = App\Payout::where('contract_id',$contract_details->id)->first();
 			      $buyer_name = App\User::where('id',$contract_details->buyer_id)->first();
 			     $selelr_name = App\User::where('id',$contract_details->sellers_id)->first();
 			       
 			    @endphp
 			 
 			  <tr>
                <td></td>
                <td></td>
                <td>{{$contract_details->contract_name}}</td>
                <td>{{$contract_details->order_no}}</td>
                <td> <a href="/Admin/User-Details/{{$buyer_name->id}}"style="color:blue;">{{$buyer_name->name}}</td></a> 
                <td> <a href="/Admin/User-Details/{{$selelr_name->id}}"style="color:blue;">{{$selelr_name->name}}</td></a>
                <td>${{$contract_details->contract_amount}}</td>
                <td><a href="/Admin/Payout-Details/{{$contract_details->id}}" class="btn btn-primary">View</a></td>
                 <td></td>
               </tr> 
              
               @endif
               @endif
              @endforeach 
              
            
            </thead>
            </tbody>
          </table>

        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
  
  
  
 </section>
 
 
   </div>
  </div>
 </div>
</div>
 @endsection