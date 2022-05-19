<!DOCTYPE html>
<html class="wide" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('front_css/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front_css/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('front_css/css/style.css')}}">
     
 <style>
 .containerss {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.containerss input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
</style>
  </head>
  <body data-spy="scroll" data-target=".page" data-offset="50">
    <div class="preloader">
      <div class="preloader-body"> 
        <div class="preloader-item">
          <svg width="40" height="40" viewbox="0 0 40 40">
            <polygon class="rect" points="0 0 0 40 40 40 40 0"></polygon>
          </svg>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
 
     
      <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Number Confirmation</h3>
          </div>
        </div>
      
 </section>

     <br>
     <br>
     <br>

  <!-- Candidate form -->

 
    <center>
    <section class="card section section-md text-center col-sm-7">
       @if (session('message'))
                        <span class="badge badge-primary">
                            {{ session('message') }}
                        </span>
                    @endif
        <div class="container">
          <div class="text-center">
            <h2>Enter Confrimation Code</h2>
           </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">

            	<form method="post" action="Number-Confirm" enctype="multipart/form-data">
				@csrf

            	<div class="container col-sm-12">
            	     <div class="row">
                  <div class="col-sm-12">
                  <label class="form-label-outside" for="general-information-job-category">{{ __(('Enter Code')) }}</label>
              	   <input type="text"  placeholder="Confirmation code" value="" class="form-control" name="confirm">
              	   </div>
             
               </div>
                
            	   
            	
            	</div>
            	<br>
          
                
                <br>
        
                
                    <br>
                        <hr>
                        <br>
                    <div class="container col-sm-12">
                		 <button class="btn btn-primary" style="width:100%;">{{ __(('Submit')) }}</button>
                    </div>
                    
            	</form>


            </div>
        </div>
    </div>
</section>
   </center>


</div>
</div>



   <div class="snackbars" id="form-output-global"></div>

    <script src="{{asset('front_css/js/core.min.js')}}"></script>
    <script src="{{asset('front_css/js/script.js')}}"></script>
    <!-- Toastr -->

 <!-- Employer Form end -->

<script type="text/javascript">
	
	function employer_function(){


		document.getElementById('empployer_form').style.display ="block";
		document.getElementById('candidate_from').style.display ="none";
     document.getElementById('home_form').style.display ="none";


     window.scrollBy(0, 800);
	}

function candiate_function(){

	document.getElementById('empployer_form').style.display ="none";
 	document.getElementById('candidate_from').style.display ="block";
   document.getElementById('home_form').style.display ="none";



 window.scrollBy(0, 800);
 }


function for_company(){
 
 document.getElementById('empployer_forms').style.display ="block";
document.getElementById('home_form').style.display ="none";
 window.scrollBy(0, 800);

 }

 function for_home_check(){
 
 window.scrollBy(0, 800);
 document.getElementById('home_form').style.display ="block";
document.getElementById('empployer_forms').style.display ="none";

 }



</script>

 