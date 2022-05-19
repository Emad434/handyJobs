
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Invoice Management</span></h5>
                 
              </div>
          </div>

<section class="invoice-list-wrapper section">
  <!-- create invoice button-->
  <!-- Options and filter dropdown button-->
  <div class="invoice-filter-action mr-3">
    <a href="#" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
      <i class="material-icons">picture_as_pdf</i>
      <span class="hide-on-small-only">Export to PDF</span>
    </a>
  </div>
  <!-- create invoice button-->
  <div class="invoice-create-btn">
    <a href="app-invoice-add.html" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
      <i class="material-icons">add</i>
      <span class="hide-on-small-only">Create Invoice</span>
    </a>
  </div>
  <!-- <div class="filter-btn">
     Dropdown Trigger  
    <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#'
      data-target='btn-filter'>
      <span class="hide-on-small-only">Filter Invoice</span>
      <i class="material-icons">keyboard_arrow_down</i>
    </a>
      Dropdown Structure  
    <ul id='btn-filter' class='dropdown-content'>
      <li><a href="#!">Paid</a></li>
      <li><a href="#!">Unpaid</a></li>
      <li><a href="#!">Partial Payment</a></li>
    </ul>
  </div> -->
  <div class="responsive-table">
    <table class="table invoice-data-table white border-radius-4 pt-1">
      <thead>
        <tr>
              <th></th>
          <!-- data table responsive icons -->
          <th ></th>
      
          <th>

            <span>Invoice#</span>
          </th>
          <th>Amount</th>
          <th>Date</th>
          <th>Buyer</th>
          <th>Seller</th>
          <th>Contract#</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        
        @foreach($all_invoice as $all_invoices)

        
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="app-invoice-view.html"style="color: blue;">{{$all_invoices->id}}</a>
          </td>
          <td><span class="invoice-amount">${{$all_invoices->amount}}</span></td>
          <td><small>{{$all_invoices->created_at}}</small></td>
          <td><a href="/Admin/User-Details/{{$all_invoices->buter_details->id}}"style="color: blue;"><span class="invoice-customer">{{$all_invoices->buter_details->name}}</span></a></td>
          <td>
           <a href="/Admin/User-Details/{{$all_invoices->selelr_details->id}}"style="color: blue;"> <span class="invoice-amount">{{$all_invoices->selelr_details->name}}</span></a>
         <!--    <span class="bullet blue"></span>
            <small>Car</small> -->
          </td>
          <td><span class="chip lighten-5 green green-text">{{$all_invoices->contract->order_no}}</span></td>
          <td>
            <div class="invoice-action" >
              <a href="/Admin/Invoice-details/{{$all_invoices->id}}" class="invoice-action-view mr-4">
                <i class="material-icons"style="color: black;">remove_red_eye</i>
              </a>
            </div>
          </td>
        </tr>
        @endforeach
             
      </tbody>
    </table>
  </div>
</section>
    </div>
       </div>
  </div>
</div>
  </div>
@endsection