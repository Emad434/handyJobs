@extends('client_header.client_header')
@section('content')
 <style type="text/css">
   input {
    position: relative;
    width: 150px; height: 20px;
    color: white;
}

input:before {
    position: absolute;
    top: 3px; left: 3px;
    content: attr(data-date);
    display: inline-block;
    color: black;
}

input::-webkit-datetime-edit, input::-webkit-inner-spin-button, input::-webkit-clear-button {
    display: none;
}

input::-webkit-calendar-picker-indicator {
    position: absolute;
    top: 3px;
    right: 0;
    color: black;
    opacity: 1;
}
  .StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
 </style>
 <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Their Providers Show According To Your Inbox Contacts</h2>
              
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

		<link href="{{asset('/signature_js/css/jquery.signaturepad.css')}}" rel="stylesheet">
	
	<center>
<section class="card section section-md text-center col-sm-8">
        <div class="container">
          <div class="text-center">
            <h2>Make Contracts</h2>
           </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">

            	<form method="post" action="/Client/contract_save" enctype="multipart/form-data">
				@csrf

            	<div class="container col-sm-12">
            		<input type="text" name="contract_name" placeholder="Contract Name" class="form-control">
            	</div>

            	<div class="container col-sm-12">
            		<div class="row">
            			<div class=" col-sm-6">
            			<select class="form-control" name="sellers_id">
            					<option>Contract With</option>
            					@foreach($provider_contact as $provider_contacts)
            					@php
            						$user_details = App\User::where('id',$provider_contacts->reciever_id)->first();
            					@endphp
            					<option value="{{$provider_contacts->reciever_id}}">{{$user_details->name}}</option>
            					@endforeach
            			</select>
            			</div>

            			<div class=" col-sm-6">
	            			<select class="form-control"name="contract_type">
	            					<option>Contract Type</option>
	            					@foreach($contract_type as $contract_types)
	            					<option value="{{$contract_types->id}}">{{$contract_types->name}}</option>
	            					@endforeach
	            			</select>
            			</div>
             		</div>



            		<div class="row">
            			<div class=" col-sm-6">
            			 <input type="number" name="time_duration" placeholder="Select Days e.g'10 Days' " class="form-control">
            			</div>
            			<div class=" col-sm-6">
            				<div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text">$</div>
					        </div>
            			<input type="number" name="amount" placeholder="Select Amount e.g'$100' " class="form-control">
            			</div>
            		</div>
            	</div><br>

            	<div class="container col-sm-12">
                <div class="row">
                  <div class="col-sm-6">
                    <label>Start Date</label>
                  <input type="date" data-date="" class="form-control" name="strtdate" data-date-format="YYYY MMMM DD" value="2020-12-09">
                </div>
                 <div class="col-sm-6">
                  <label>End Date</label>
                  <input type="date" data-date="" class="form-control" name="enddate" data-date-format="YYYY MMMM DD" value="2020-12-09">
                </div>
              </div>
              </div>

            	<div class="container col-sm-12">
              		<textarea name="contract_description" class="form-control" name="contract_description" rows="10">Briefly Explain About Your Contract</textarea>
            	</div>


            		<div class="container col-sm-12">
            			<h4>Put Your Signature</h4>
		            	<div id="signArea" >
				 			<div class="sig sigWrapper" style="height:auto;">
								<div class="typed"></div>
								<canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
							</div>
						<input type="hidden" id="image_field" name="image_field">
		 				<input type="button" value="Save" id="btnSaveSign">
            </div>
					</div>	

            	 <div class="container col-sm-12">
            		 <button class="btn btn-primary" >Make Contract</button>
            	 </div>


            	</form>


            </div>
        </div>
    </div>
</section>

<script src="https://js.stripe.com/v3/"></script>

 
<form action="/charge" method="post" id="payment-form">
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
</center>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

<script type="text/javascript">
  $("input").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")



  // Create a Stripe client.
var stripe = Stripe('pk_test_51I023XBvxckVcKFEmtZxazDi8one7MjC5kGTlREd89CQWdlFM23YPTzxhTEWotJAoUiKm58xRv3uvRcVVDnRbeFB00VWnWwL0E');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
</script>

@endsection

