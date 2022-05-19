
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
                 <section class="invoice-view-wrapper section">
                  <div class="row">
                    <!-- invoice view page -->
                    <div class="col xl9 m8 s12">
                      <div class="card">
                        <div class="card-content invoice-print-area">
                          <!-- header section -->
                          <div class="row invoice-date-number">
                            <div class="col xl4 s12">
                              <span class="invoice-number mr-1">Contract#:</span>
                              <span>{{$invoice_details->contract->order_no}}</span>
                            </div>
                            <div class="col xl8 s12">
                              <div class="invoice-date display-flex align-items-center flex-wrap">
                                <div class="mr-3">
                                  <small>Date Issue:</small>
                                  <span>{{$invoice_details->created_at}}</span>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <!-- logo and title -->
                          <div class="row mt-3 invoice-logo-title">
                            <div class="col m6 s12 display-flex invoice-logo mt-1 push-m6">
                              <img src="../../../app-assets/images/gallery/pixinvent-logo.png" alt="logo" height="46" width="164">
                            </div>
                            <div class="col m6 s12 pull-m6">
                              <h4 class="indigo-text">Invoice</h4>
                              <span>{{$invoice_details->contract->contract_name}}</span>
                            </div>
                          </div>
                          <div class="divider mb-3 mt-3"></div>
                          <!-- invoice address and contact -->
                          <div class="row invoice-info">
                            <div class="col m6 s12">
                              <h6 class="invoice-from">Bill from</h6>
                               <div class="invoice-address">
                                <span class="indigo-text"><a href="/Admin/User-Details/{{$invoice_details->buter_details->id}}" class="indigo-text">{{$invoice_details->buter_details->name}}</a></span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$invoice_details->buter_details->country}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$invoice_details->buter_details->city}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$invoice_details->buter_details->email}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$invoice_details->buter_details->contacts}}</span>
                              </div>
                            </div>
                            <div class="col m6 s12">
                              <div class="divider show-on-small hide-on-med-and-up mb-3"></div>
                              <h6 class="invoice-to">Bill To</h6>
                              <div class="invoice-address">
                                <span><a href="/Admin/User-Details/{{$invoice_details->selelr_details->id}}" class="indigo-text"> {{$invoice_details->selelr_details->name}}</a></span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$invoice_details->selelr_details->country}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$invoice_details->selelr_details->city}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$invoice_details->selelr_details->email}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$invoice_details->selelr_details->contacts}}</span>
                              </div>
                            </div>
                          </div>
                          <div class="divider mb-3 mt-3"></div>
                          <!-- product details table-->
                          <div class="invoice-product-details">
                            <table class="striped responsive-table">
                              <thead>
                                <tr>
                                  <th>Item</th>
                                  <th>Description</th>
                                   <th>Time Duration</th>
                                   <th class="right-align">Price</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{$invoice_details->contract->contract_name}}</td>
                                    <td>{{$invoice_details->contract->contract_description}}</td>
                                  <td>{{$invoice_details->contract->time_duration}} Day</td>
                                  <td class="indigo-text right-align">{{$invoice_details->amount}}</td>
                                </tr> 
                              </tbody>
                            </table>
                          </div>
                          <!-- invoice subtotal -->
                          <div class="divider mt-3 mb-3"></div>
                          <div class="invoice-subtotal">
                            <div class="row">
                              <div class="col m5 s12">
                                <p>Thanks for your business.</p>
                              </div>
                           <!--    <div class="col xl4 m7 s12 offset-xl3">
                                <ul>
                                  <li class="display-flex justify-content-between">
                                    <span class="invoice-subtotal-title">Subtotal</span>
                                    <h6 class="invoice-subtotal-value">$72.00</h6>
                                  </li>
                                  <li class="display-flex justify-content-between">
                                    <span class="invoice-subtotal-title">Discount</span>
                                    <h6 class="invoice-subtotal-value">- $ 09.60</h6>
                                  </li>
                                  <li class="display-flex justify-content-between">
                                    <span class="invoice-subtotal-title">Tax</span>
                                    <h6 class="invoice-subtotal-value">21%</h6>
                                  </li>
                                  <li class="divider mt-2 mb-2"></li>
                                  <li class="display-flex justify-content-between">
                                    <span class="invoice-subtotal-title">Invoice Total</span>
                                    <h6 class="invoice-subtotal-value">$ 61.40</h6>
                                  </li>
                                  <li class="display-flex justify-content-between">
                                    <span class="invoice-subtotal-title">Paid to date</span>
                                    <h6 class="invoice-subtotal-value">- $ 00.00</h6>
                                  </li>
                                  <li class="display-flex justify-content-between">
                                    <span class="invoice-subtotal-title">Balance (USD)</span>
                                    <h6 class="invoice-subtotal-value">$ 10,953</h6>
                                  </li>
                                </ul>
                              </div> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- invoice action  -->
                    <div class="col xl3 m4 s12">
                      <div class="card invoice-action-wrapper">
                        <div class="card-content">
                          
                          <div class="invoice-action-btn">
                            <a href="#" class="btn-block btn btn-light-indigo waves-effect waves-light invoice-print">

                              <span><i class="material-icons mr-2"> print </i> Print</span>
                            </a>
                          </div>
                           
                        </div>
                      </div>
                    </div>
                  </div>
                </section>



             </div>
         </div>
      </div>
    </div>
  </div>

  @endsection