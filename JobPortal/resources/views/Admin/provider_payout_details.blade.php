
  @extends('layouts.admin_layout')

@section('content')
    
    @php
       $buyer_details = App\User::where('id',$contract_details->buyer_id)->first();
        $selelr_details = App\User::where('id',$contract_details->sellers_id)->first();
 
 		 $buyer_country = App\Locations::where('id',$buyer_details->country)->where('location_type','Country')->first();	
 		    
 		    $bank_details_count = App\BankDetail::where('user_id',$contract_details->buyer_id)->count();
 		   
 		   $invoice = App\Invoice::where('contract_id',$contract_details->id)->first();
  		 $selelr_country = App\Locations::where('id',$selelr_details->country)->where('location_type','Country')->first();
  		
  		
    @endphp


 <div id="main">
  <div class="row">
  	<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
	   <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
 	<div class="container">
   <div class="row">
  <div class="col s10 m6 l6">
     <h5 class="breadcrumbs-title mt-0 mb-0"><span>Payout Management</span></h5>
  </div>
    
            </div>
            @if (session('status'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('status') }}
            </div>
          </div>
            @endif
             <section class="invoice-view-wrapper section">
                  <div class="row">
                    <!-- invoice view page -->
                    <div class="col xl9 m8 s12">
                      <div class="card">
                        <div class="card-content invoice-print-area">
                          <!-- header section -->
                          <div class="row invoice-date-number">
                            <div class="col xl4 s12">
                              <span class="invoice-number mr-1">Payout Details#:</span>
                              <a href="/Admin/Invoice-details/{{$invoice->id}}"style="color:blue;"><span>{{$contract_details->order_no}}</span></a>
                            </div>
                            <div class="col xl8 s12">
                              <div class="invoice-date display-flex align-items-center flex-wrap">
                                <div class="mr-3">
                                  <small>Date Issue:</small>
                                  <span>{{$contract_details->created_at}}</span>
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
                              <h4 class="indigo-text">Payout</h4>
                              <span>{{$contract_details->contract_name}}</span>
                            </div>
                          </div>
                          <div class="divider mb-3 mt-3"></div>
                          <!-- invoice address and contact -->
                          <div class="row invoice-info">
                            <div class="col m6 s12">
                              <h6 class="invoice-from">Bill from</h6>
                               <div class="invoice-address">
                                <span class="indigo-text"><a href="/Admin/User-Details/{{$buyer_details->id}}" class="indigo-text">{{$buyer_details->name}}</a></span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$buyer_country->name ?? ''}}</span>
                              </div>
                             
                              <div class="invoice-address">
                                <span>{{$buyer_details->email}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$buyer_details->contacts}}</span>
                                
                              </div>
                            </div>
                            <div class="col m6 s12">
                              <div class="divider show-on-small hide-on-med-and-up mb-3"></div>
                              <h6 class="invoice-to">Bill To</h6>
                              <div class="invoice-address">
                                <span><a href="/Admin/User-Details/{{$selelr_details->id}}" class="indigo-text"> {{$selelr_details->name}}</a></span>
                              </div>
                              @if($selelr_country == null)
                              <div class="invoice-address">
                                <span> </span>
                                
                              </div>
                              @endif
                              @if($selelr_country)
                              <div class="invoice-address">
                                <span>{{$selelr_country->name}}</span>
                                
                              </div>
                               @endif
                              <div class="invoice-address">
                                <span>{{$selelr_details->email}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>{{$selelr_details->contacts}}</span>
                              </div>
                            </div>
                             </div>
                             
                             
                             
                       <div class="divider mb-3 mt-3"></div>
                          <!-- invoice address and contact -->
                          <div class="row invoice-info">
                            <div class="col m6 s12">
                              <h6 class="invoice-from">Contract Activity</h6>
                              
                               <div class="invoice-address">
                                <span class="indigo-text"><a href="/Admin/User-Details/{{$buyer_details->id}}" class="indigo-text">Buyer: {{$buyer_details->name}}</a></span>
                              </div>
                              <br>
                                
                              <div class="invoice-address">
                                <span class="indigo-text"><a href="/Admin/User-Details/{{$selelr_details->id}}" class="indigo-text">Seller: {{$selelr_details->name}}</a></span>
                              </div>
                              <br>
                                <br>
                                 
                              <div class="invoice-address">
                                <span class="indigo-text">Tip:</span>
                              </div>
                             </div>
                            <div class="col m6 s12">
                              <div class="divider show-on-small hide-on-med-and-up mb-3"></div>
                              <h6 class="invoice-to">Activity Details</h6>
                               
                               @foreach ($contract_details->images as $key)
                              <div class="invoice-address">
                                	<img src="{{asset('/doc_signs')}}/{{$key->file_name}}"style="width:100px;height:50px;">
                               </div>
                              @endforeach
                                
                                
                                <div class="invoice-address">
                                 <span class="indigo-text">{{$contract_details->tip_amount}}</span>
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
                                  <td>{{$contract_details->contract_name}}</td>
                                    <td>{!! $contract_details->contract_description !!}</td>
                                  <td>{{$contract_details->time_duration}} Day</td>
                                  <td class="indigo-text right-align">${{$contract_details->contract_amount}}</td>
                                </tr> 
                              </tbody>
                            </table>
                          </div>
                          <!-- invoice subtotal -->
                          <!--<div class="divider mt-3 mb-3"></div>-->
                          <!--<div class="invoice-subtotal">-->
                          <!--  <div class="row">-->
                          <!--    <div class="col m5 s12">-->
                          <!--      <p>Thanks for your business.</p>-->
                          <!--    </div>-->
                          <!--     <div class="col xl4 m7 s12 offset-xl3">-->
                          <!--      <ul>-->
                          <!--        <li class="display-flex justify-content-between">-->
                          <!--          <span class="invoice-subtotal-title">Subtotal</span>-->
                          <!--          <h6 class="invoice-subtotal-value">$72.00</h6>-->
                          <!--        </li>-->
                          <!--        <li class="display-flex justify-content-between">-->
                          <!--          <span class="invoice-subtotal-title">Discount</span>-->
                          <!--          <h6 class="invoice-subtotal-value">- $ 09.60</h6>-->
                          <!--        </li>-->
                          <!--        <li class="display-flex justify-content-between">-->
                          <!--          <span class="invoice-subtotal-title">Tax</span>-->
                          <!--          <h6 class="invoice-subtotal-value">21%</h6>-->
                          <!--        </li>-->
                          <!--        <li class="divider mt-2 mb-2"></li>-->
                          <!--        <li class="display-flex justify-content-between">-->
                          <!--          <span class="invoice-subtotal-title">Invoice Total</span>-->
                          <!--          <h6 class="invoice-subtotal-value">$ 61.40</h6>-->
                          <!--        </li>-->
                          <!--        <li class="display-flex justify-content-between">-->
                          <!--          <span class="invoice-subtotal-title">Paid to date</span>-->
                          <!--          <h6 class="invoice-subtotal-value">- $ 00.00</h6>-->
                          <!--        </li>-->
                          <!--        <li class="display-flex justify-content-between">-->
                          <!--          <span class="invoice-subtotal-title">Balance (USD)</span>-->
                          <!--          <h6 class="invoice-subtotal-value">$ 10,953</h6>-->
                          <!--        </li>-->
                          <!--      </ul>-->
                          <!--    </div>-->
                          <!--  </div>-->
                          <!--</div>-->
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
                    
                    @php
                     $bank_details_chk = App\BankDetail::where('user_id',$contract_details->sellers_id)->count();
                      $bank_details = App\BankDetail::where('user_id',$contract_details->sellers_id)->first();
 		           @endphp
 		           @if($bank_details_chk > 0)
                     <div class="col xl3 m4 s12">
                      <div class="card invoice-action-wrapper">
                        <div class="card-content">
                           <div class="invoice-action-btn">
                              <h5>Seller Bank Deatils</h5>
                              <hr>
                          <div class="row invoice-info">
                            <div class="col m12 s12">
                              <h6 class="invoice-from">Person Name: {{$bank_details->user__name}}</h6>
                               <div class="invoice-address">
                                <span class="indigo-text">Account No: {{$bank_details->account_no}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>IBAN NO: {{$bank_details->i_ban_no}}</span>
                              </div>
                               <div class="invoice-address">
                                <span>Branch Address: {{$bank_details->branch_addrs}}</span>
                              </div>
                              <div class="invoice-address">
                                <span>Account Type: {{$bank_details->bank_account_type}}</span>
                              </div>
                              <hr>
                              
                              @php
                                $pay_out = App\AmountStatus::where('contract_id',$contract_details->id)->where('status','available')->count();
                               @endphp
                              @if($pay_out > 0)
                               <div class="invoice-action-btn">
                            <button type="button" class="btn-block btn btn-light-indigo waves-effect waves-light">
                               <span> Already Paid</span>
                            </button>
                          </div>
                         
                          @else
                           <div class="invoice-action-btn">
                            <a href="/Admin/pay_clear/{{$contract_details->id}}" class="btn-block btn btn-light-indigo waves-effect waves-light">
                               <span> Pay</span>
                            </a>
                          </div>
                          @endif
                            </div>
                          </div>
                         </div>
                      </div>
                    </div>
                   </div>
                   @else
                   
                     <div class="col xl3 m4 s12">
                      <div class="card invoice-action-wrapper">
                        <div class="card-content">
                          
                          <div class="invoice-action-btn">
                            
                             <span>Bank details not found</span>
                             
                          </div>
                            
                        </div>
                      </div>
                    </div>
                    
                         @endif
                    
                   
                  
                  <!--  <div class="col xl3 m4 s12">-->
                  <!--    <div class="card invoice-action-wrapper">-->
                  <!--      <div class="card-content">-->
                          
                  <!--        <div class="invoice-action-btn">-->
                  <!--            <h5>Seller Bank Deatils</h5>-->
                  <!--               <div class="row invoice-info">-->
                  <!--          <div class="col m6 s12">-->
                  <!--            <h6 class="invoice-from">Bill from</h6>-->
                  <!--             <div class="invoice-address">-->
                  <!--              <span class="indigo-text"><a href="/Admin/User-Details/{{$buyer_details->id}}" class="indigo-text">{{$buyer_details->name}}</a></span>-->
                  <!--            </div>-->
                  <!--            <div class="invoice-address">-->
                  <!--              <span>{{$buyer_country->name ?? ''}}</span>-->
                  <!--            </div>-->
                             
                  <!--            <div class="invoice-address">-->
                  <!--              <span>{{$buyer_details->email}}</span>-->
                  <!--            </div>-->
                  <!--            <div class="invoice-address">-->
                  <!--              <span>{{$buyer_details->contacts}}</span>-->
                  <!--            </div>-->
                  <!--          </div>-->
                  <!--        </div>-->
                            
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                    
                    
                  <!--</div>-->
                </section>


             </div>
         </div>
      </div>
    </div>
  </div>
  </div>

  @endsection