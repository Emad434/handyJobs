 
  @extends('layouts.admin_layout')

@section('content')
 
    
<div id="main">
      <div class="row">

   
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Payment For Clearence</span></h5>
                 
              </div>
          </div>


 <section class="invoice-list-wrapper section">
  <div class="responsive-table">
    <table class="table invoice-data-table white border-radius-4 pt-1">
      <thead>
        <tr>
              <th></th>
          <!-- data table responsive icons -->
          <th ></th>
      
          <th><span>Provider</span></th>
          <th>Contract</th>
          <th>Amount</th>
          <th>Created At</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
           
        @if($completed_contracts_count > 0)
        
        @foreach($completed_contracts as $amount_for_clearences)
            
            @php
               
                $Provider_detals = App\User::where('id',$amount_for_clearences->sellers_id)->first();
              
             @endphp
        
        <tr>
          <td></td>
          <td></td>
          <td>
            <a href="/Admin/User-Details/{{$amount_for_clearences->sellers_id}}"style="color: blue;">{{$Provider_detals->name}}</a>
          </td>
          <td><span class="invoice-amount">{{$amount_for_clearences->contract_name}}</span></td>
          <td><span>{{$amount_for_clearences->contract_amount}} </span></td>
          <td>{{$amount_for_clearences->created_at}}</td>
          <td>
             <div class="invoice-action" >
              <a href="/Admin/Prodiver-Payout/{{$amount_for_clearences->id}}" class="btn btn-primary">
               Pay
              </a>
            </div>
          </td>
        </tr>
        @endforeach
        @else
             <td>No Result </td>
             @endif
      </tbody>
    </table>
       {{$completed_contracts->links()}}
     
  </div>
</section>
    </div>
       </div>
  </div>
</div>
  </div>
               
  @endsection