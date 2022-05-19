@extends('client_header.client_header')
 @section('title', 'Make Contract')  
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

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
 </style>
      

 
 
		<link href="{{asset('/signature_js/css/jquery.signaturepad.css')}}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
     <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">{{ __('Signed Contracts With your Contact List') }}</h3>
          </div>
        </div>
       </section>
      
<br>
	<center>
<section class="card section section-md text-center col-sm-8">
        <div class="container">
          <div class="text-center">
            <h2>{{ __('Make Contracts') }}</h2>
           </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">

            	<form method="post" action="/Client/contract_save" enctype="multipart/form-data">
				@csrf

            	<div class="container col-sm-12">
            		<input type="text" name="contract_name" placeholder="{{ __(('Contract Name')) }}" class="form-control" Required>
            	</div>
                	 
            	<div class="container col-sm-12">
            		<div class="row">
            			<div class=" col-sm-6">
            			<select class="form-control" onchange="Signbtn()"  id="contract_with" name="sellers_id">
            					<option value=0>{{ __('Contract With') }}</option>
            					@foreach($provider_contact as $provider_contacts)
            					@php
            						$user_details = App\User::where('id',$provider_contacts->reciever_id)->first();
            					@endphp
            					<option id="abc_{{$user_details->id}}" value="{{$user_details->id}}">{{$user_details->name}}</option>
            					

            					@endforeach
            			</select>
            			</div>
            		
            		<div class=" col-sm-6">
	            			<select class="form-control" name="contract_type" onchange="Dropdown_Validation()"  id="contrcat_type">
	            					<option value=0>{{ __('Contract Type') }}</option>
	            					@foreach($contract_type as $contract_types)
	            					<option value="{{$contract_types->id}}">{{$contract_types->name}}</option>
	            					@endforeach
	            			</select>
            			</div>
             		</div>
             
             		    <div class="row" id="gigs" style="display:none;"  >
                    	<div class=" col-sm-12">
                    	
            			<select class="form-control" id="gig_details" onchange="Dropdown_Validation()" name="gig">
            			    <option value=0>{{ __('Gigs') }}</option>

            				
            			</select>
            			
            			</div>
                        </div>
                        <br>
                        <br>
                       
                   
                        
            		 <div class="container col-sm-12">
                <div class="row">
                    
                  <div class="col-sm-6">
                    <label>{{ __(('Start Date')) }}</label>
                     <div class="input-group date" data-provide="datepicker">
   <input type="text" id="date1" onchange="daysdifference(date1 , date2)" data-date="" class="form-control" name="strtdate" data-date-format="YYYY MMMM DD" value="09/12/2020" Required>
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
                </div>
                 <div class="col-sm-6">
                  <label>{{ __(('End Date')) }}</label>
                     <div class="input-group date" data-provide="datepicker">
   <input type="text" id="date2" onchange="daysdifference(date1 , date2)" data-date="" class="form-control" name="enddate" data-date-format="YYYY MMMM DD" value="09/12/2020" Required>
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
                </div>
              </div>
              </div>
 

            		
 <script type="text/javascript">
    
    function Signbtn(){
        
         
         document.getElementById('gigs').style.display = "block";
         var user_id = document.getElementById('contract_with').value;
            $.ajax({
   	  url: '/Client/gig_reference/'+user_id+' ',
   	  method:"GET",  
      contentType: false,
      cache: false,
	  processData:false,
		  
      success: function(response){
		   
	 var list_demo = response.res;
 
	 Object.keys(list_demo).forEach(function(key)
	 {
	     console.log(list_demo[key]);
	     
	    var item = "<option value="+list_demo[key].id+">"+list_demo[key].title+"</option>";
     $('#gig_details').append(item);
        
	 });
	 
 
 	 
      }
    });
    
     var selectBox = document.getElementById("contrcat_type");
               var selectBox2 = document.getElementById("gigs");
               var selectbox3 = document.getElementById("contract_with");
               console.log(selectBox);
                if(selectBox.options[selectBox.selectedIndex].value == 0 && selectBox2.options[selectBox.selectedIndex].value == 0 && selectBox3.options[selectBox.selectedIndex].value == 0){
               document.getElementById("main_btn").disabled = true;
             }else{
               document.getElementById("main_btn").disabled = false;


             }

    }
 
     
   
</script>
      
            			
<script type="text/javascript">
    
    function daysdifference(date1, date2) {
              
             var dat1 = new Date(date1.value);
             var dat2 = new Date(date2.value);
             var newdate1 = dat1.getDate();
             var newdate2 = dat2.getDate();
              console.log(newdate1, newdate2);
            // The number of milliseconds in one day
            var ONEDAY = 1000 * 60 * 60 * 24;
            // Convert both dates to milliseconds
            
            var date1_ms = dat1.getTime();
            var date2_ms = dat2.getTime();
            // Calculate the difference in milliseconds
            var difference_ms = Math.abs(date1_ms - date2_ms);
              
            // Convert back to days and return
           var total_days =  Math.round(difference_ms/ONEDAY);
           document.getElementById("total_days").value = total_days;
        }
</script>
            		<div class="row">
            			<div class=" col-sm-6">
            			 <input type="number" id="total_days" name="time_duration" placeholder="{{ __(("Select Days e.g'10 Days' ")) }}" class="form-control" Required >
            			</div>
            			<div class=" col-sm-6">
            				<div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text">$</div>
					        </div>
            			<input type="number" name="amount" id="amountt" onkeyup="include_tax()" placeholder="{{ __(("Select Amount e.g'$100' " )) }} " class="form-control" Required> 
            			
            			</div>
                  <label>{{ __(('Tax Payment')) }}</label>
               	<select class="form-control" id="taxx" onchange="include_tax()" name="tax">
               	           <option value=0>Select</option>
            			    <option value=1>ex vat</option>
            			    <option value=2>No ex vat</option>

            			</select>
            	     <strong id="amt"> </strong>
            	     <input type="hidden" name="amont" class="form-control" id="amount_database" >
            	</div><br>
             <br>
             <br>
             <br>
            	

            	<div class="container col-sm-12" style="margin-top:20px;">
              		<textarea name="contract_description" class="form-control" name="contract_description" rows="10" Required>{{ __(('Briefly Explain About Your Contract')) }}</textarea>
            	</div>


            		<div class="container col-sm-12">
            			<h4>{{ __(('Put Your Signature')) }}</h4>
            			<div class="alert alert-danger" style="background-color:red; color:white;display:none;" id="error" >{{ __(('Please Sign Conract')) }}</div>
		            	<div id="signArea" >
				 			<div class="sig sigWrapper" style="height:auto;">
								<div class="typed"></div>
								<canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
							</div>
						<input type="hidden" class="form-control" id="image_field" name="image_field">
		 				<button type="button" class="btn btn-primary" style="border-radius:40px;" id="btnSaveSign" onclick="validation()">{{ __(('Almost Done')) }}</button>
                       </div>
					</div>	
                    <div class="container col-sm-12">
                		 <button class="btn btn-primary" id="main_btn" style="display:none; border-radius:40px;" disabled>{{ __(('Make Contract')) }}</button>
                    </div>
            	</form>


            </div>
        </div>
    </div>
</section>
</center>
 <script>
         function include_tax()
        { 
            var tax = 0;
            var selectBox = document.getElementById("taxx");
             if(selectBox.options[selectBox.selectedIndex].value == 1){
                 
              var tax_amount =  parseInt(document.getElementById("amountt").value * 25 /100) + parseInt(document.getElementById("amountt").value);
               console.log(tax_amount);
             
              document.getElementById("amt").innerHTML="Amount to pay = " +  tax_amount;
               document.getElementById("amount_database").value= tax_amount;
             }
             else{
               
              var ammount = document.getElementById("amountt").value;
              console.log(ammount);
              document.getElementById("amt").innerHTML="Amount to pay = " + ammount;
             document.getElementById("amount_database").value= ammount;
        }
        }
       
   </script>

<script>
    function validation(){
        
        var image_field = document.getElementById('image_field');
        if(image_field.value == ""){
            
            document.getElementById('error').style.display = "block";
        }else{
            
            document.getElementById('main_btn').style.display = "block";
                  document.getElementById('error').style.display = "none";
        document.getElementById('btnSaveSign').style.display = "none";
            
        }
    }
    
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  
 <script>
var $j = jQuery.noConflict();
$j("#datepicker").datepicker();
  </script>
 

<script type="text/javascript">
  $("input").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")
</script>

 <script>
              function Dropdown_Validation(){
               var selectBox = document.getElementById("contrcat_type");
               var selectBox2 = document.getElementById("gigs");
                var selectbox3 = document.getElementById("contract_with");
               console.log(selectBox);
                if(selectBox.options[selectBox.selectedIndex].value == 0 && selectBox2.options[selectBox.selectedIndex].value == 0 && selectBox3.options[selectBox.selectedIndex].value == 0){
               document.getElementById("main_btn").disabled = true;
             }else{
               document.getElementById("main_btn").disabled = false;


             }
            }
        
             </script>
             
  

       

@endsection

