@extends('client_header.client_header')
 @section('title', 'Payment')  
@section('content')


<style type="text/css">
 
.card {
    max-width: 1000px;
    margin: 2vh
}

.card-top {
    padding: 0.7rem 5rem
}

.card-top a {
    float: left;
    margin-top: 0.7rem
}

#logo {
    font-family: 'Dancing Script';
    font-weight: bold;
    font-size: 1.6rem
}

.card-body {
    padding: 0 5rem 5rem 5rem;
     background-size: cover;
    background-repeat: no-repeat
}

@media(max-width:768px) {
    .card-body {
        padding: 0 1rem 1rem 1rem;
         background-size: cover;
        background-repeat: no-repeat
    }

    .card-top {
        padding: 0.7rem 1rem
    }
}

.row {
    margin: 0
}

.upper {
    padding: 1rem 0;
    justify-content: space-evenly
}

#three {
    border-radius: 1rem;
    width: 22px;
    height: 22px;
    margin-right: 3px;
    border: 1px solid blue;
    text-align: center;
    display: inline-block
}

#payment {
    margin: 0;
    color: blue
}

.icons {
    margin-left: auto
}

form span {
    color: rgb(179, 179, 179)
}

form {
    padding: 2vh 0
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

.header {
    font-size: 1.5rem
}

.left {
    background-color: #ffffff;
    padding: 2vh
}

.left img {
    width: 2rem
}

.left .col-4 {
    padding-left: 0
}

.right .item {
    padding: 0.3rem 0
}

.right {
    background-color: #ffffff;
    padding: 2vh
}

.col-8 {
    padding: 0 1vh
}

.lower {
    line-height: 2
}

.btn {
    background-color: rgb(23, 4, 189);
    border-color: rgb(23, 4, 189);
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin: 4vh 0 1.5vh 0;
    padding: 1.5vh;
    border-radius: 0
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}

input[type=checkbox] {
    width: unset;
    margin-bottom: unset
}

#cvv {
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.575), rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center
}

#cvv:hover {}
</style>

 
        
        </header>

 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title"><i class="fa fa-lock"></i> Secure Payment</h3>
          </div>
        </div>
       </section>
       
       <br>
       <br>
       <br>
       
        @php

        	$contract_details = App\Contract::where('id',$contract_id)->first();

        @endphp
        <center>
<div class="card">
    <div class="card-top border-bottom text-center"><span id="logo">HandyJob.com</span> </div>
    <div class="card-body">
        <div class="row upper"> <span><i class="fa fa-check-circle-o"></i> Contract Signed</span> <span><i class="fa fa-check-circle-o"></i> Order Accepted</span> <span id="payment"><span id="three"><i class="fa fa-lock"></i> </span>Payment</span> </div>
        <div class="row">
            <div class="col-md-7">
                <div class="left border">
                    <div class="row"> <span class="header">Payment</span>
                        <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                    </div>
                    <form method="post" action="/Client/contract_payment_save/{{$user_id}}/{{$contract_id}}"> 
                    	@csrf
                    	<span>Cardholder's name:</span> 
                    	<input placeholder="Linda Williams" name="holder_name"> <span>Card Number:</span> <input placeholder="0125 6780 4567 9909"name="card_no">
                        <div class="row">
                            <div class="col-4"><span>Expiry Month:</span> <input placeholder="MM" name="expiry_month"> </div>
                             <div class="col-4"><span>Expiry Year:</span> <input placeholder="YY" name="expiry_year"> </div>
                            	<input type="hidden" value="{{$contract_details->contract_amount}}" name="amount"> 
                            <div class="col-4"><span>CVV:</span> <input id="cvv" name="cvv"> </div>
					  </div> <input type="checkbox" id="save_card" class="align-left">
				 <label for="save_card">Save card details to wallet</label>
                        <div class="col-12"><button class="btn btn-primary" style="border-radius:40px;"><i class="fa fa-lock"></i> Pay ${{$contract_details->contract_amount}}</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right border">
                    <div class="header">Order Summary</div>
                     <div class="row item">

      				   @foreach ($contract_details->images as $key)
      
                      <center>  <div class="col-4 align-self-center"><img class="img-fluid" src="{{asset('/doc_signs')}}/{{$key->file_name}}"></div></center>
                       	 @endforeach
                        <div class="col-8">
                            <div class="row">Amount: <b>${{$contract_details->contract_amount}}</b></div>
                               <div class="row text-muted">Contract Details: {!! $contract_details->contract_description !!}</div>
                         
                            <div class="row text-muted">Contract Title: {{$contract_details->contract_name}}</div>
                         </div>
                    </div>
                     
                    <hr>
                    <div class="row lower">
                        <div class="col text-left">Total</div>
                        <div class="col text-right">${{$contract_details->contract_amount}}</div>
                    </div>
               
                   </div>
            </div>
        </div>
    </div>
    <div> </div>
</div>
</center>

@endsection