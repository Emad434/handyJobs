@extends('client_header.client_header')
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
    background-image: url("https://i.imgur.com/4bg1e6u.jpg");
    background-size: cover;
    background-repeat: no-repeat
}

@media(max-width:768px) {
    .card-body {
        padding: 0 1rem 1rem 1rem;
        background-image: url("https://i.imgur.com/4bg1e6u.jpg");
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

 <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Almost Done,</h2>
              
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/6685-removebg-preview.png')}}"style="width:1800px;height:600px;">

           </div>
        </div>
        
        </header>

        @php

        	$contract_details = App\Contract::where('id',$contract_id)->first();

        @endphp
        <center>
<div class="card">
    <div class="card-top border-bottom text-center"><span id="logo">HandyJob.com</span> </div>
    <div class="card-body">
        <div class="row upper"> <span><i class="fa fa-check-circle-o"></i> Contract Signed</span> <span><i class="fa fa-check-circle-o"></i> Order Accepted</span> <span id="payment"><span id="three">3</span>Payment</span> </div>
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
                        <div class="col-12"><button class="btn btn-primary">Pay ${{$contract_details->contract_amount}}</button></div>
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
                            <div class="row"><b>${{$contract_details->contract_amount}}</b></div>
                            <div class="row text-muted">{{$contract_details->contract_name}}</div>
                         </div>
                    </div>
                     
                    <hr>
                    <div class="row lower">
                        <div class="col text-left">Subtotal</div>
                        <div class="col text-right">${{$contract_details->contract_amount}}</div>
                    </div>
                    
                    <div class="row lower">
                        <div class="col text-left"><b>Total to pay</b></div>
                        <div class="col text-right"><b>${{$contract_details->contract_amount}}</b></div>
                    </div>
                    <div class="row lower">
                        <div class="col text-left"><b>Amount you need to pay</b></div>
                        <div class="col text-right"><b>${{$contract_details->contract_amount}}</b></div>
                    </div>
                   </div>
            </div>
        </div>
    </div>
    <div> </div>
</div>
</center>

@endsection