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
      <header class="section page-header jumbotron-creative">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{asset('front_css/images/logo-default-286x52.png')}}" alt="" width="143" height="26"/><img class="brand-logo-light" src="{{asset('front_css/images/logo-inverse-286x52.png')}}" alt="" width="143" height="26"/></a>
                  </div>
                </div>
                  <div class="rd-navbar-aside-item">
                    <button class="btn btn-primary  rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-register"><img src="{{Auth::user()->profile_image}}"class="img-thumbnail" style="width:20px;height:20px;border-radius:50px;"/> &nbsp{{Auth::user()->name}}</button>
               
                  </div>
              
              </div>
            </div>
          </nav>
        </div>
        
       <div class="jumbotron-creative-inner">

      
         <div class="container" style="margin-top:8%;">
            <div class="jumbotron-creative-main">
      <h3>Tell Us What You Are Looking For.</h3>
                 <section class="section section-md bg-default text-center">
   <div class="container">
       <br>
        
  <div class="row">
   <div class="container">
    <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle"style="width:300px;font-size: 5mm;"id="candidate_btn"
     onclick="candiate_function()" >
      <span class="icon mdi mdi-account" >
     </span>
            Looking For Job
      </button>
  </div>

  <div class="container">
 <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle" style="font-size: 5mm;" id="employer_btn"onclick="employer_function()">
       <span class="icon mdi mdi-briefcase"></span> 
      Looking For Candidate
      </button>
</div>
  </div>
  </div>
</section>

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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/search_results.png')}}" alt="" width="748" height="528"/>
          </div>
        </div>
        
        </header>
      <br>





  <!-- Candidate form -->
      <section class="section section-md" id="candidate_from" style="display: none;">
         <div class="container">
           <div class="block-form">
            <form method="post"  data-form-type="contact" action="/Save_details/submit_provider_details" enctype="multipart/form-data">
            	@csrf
            <h4>General Information</h4>
            <hr>
            <!-- RD Mailform-->
            <div class="rd-form rd-mailform form-lg">
              <div class="row row-40">
                
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">Profession</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" name="profession" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession">e.g. “Web Designer”</label>
                    </div>
                  </div>
                </div>
               
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-rate">Minimum Rate/h ($)</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-rate"  type="text" name="rate" data-constraints="@Required">
                      <label class="form-label" for="general-information-rate">e.g. 20</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-job-category">Resume Category</label>
                    <div class="form-wrap-inner">
                      <!-- Select 2-->
                      <select class="form-input select" id="general-information-job-category"  data-placeholder="Choose a Category" name="resumecategory" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                        <option label="Choose a Category"></option>
                        @php
                        $category = App\Services::where('is_active',1)->get();
                        @endphp

                        @foreach($category as $categorys)
                        <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                        @endforeach
                    
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-skills">Skills (optional)</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-skills"  type="text" name="skills"data-constraints="@Required">
                      <label class="form-label" for="general-information-skills">e.g. “Web Designer”</label>
                    </div>
                  </div>
                </div>
                 
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-resume-content">Resume Content</label>
                    <div class="form-wrap-inner">
                      <label class="form-label" for="general-information-resume-content">Please Enter the Full Text of Your Resume</label>
                      <textarea class="form-input" id="general-information-resume-content"  name="resumecontent" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-form">
            <h4>Education</h4>
            <hr>
            <!-- RD Mailform-->
            <div class="rd-form rd-mailform form-lg form-corporate">
              <div class="form-wrap">
                <label class="form-label-outside" for="education-school-name">School Name</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="education-school-name"  type="text" name="schoolname" data-constraints="@Required">
                  <label class="form-label" for="education-school-name">Text</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="education-qualification">Qualification(s)</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="education-qualification"  type="text" name="qualification" data-constraints="@Required">
                  <label class="form-label" for="education-qualification">Text</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="education-period">StartDate</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="education-period"  type="text" name="edu_start_date" data-constraints="@Required">
                  <label class="form-label" for="education-period">e.g. 2007</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="education-period">End Date</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="education-period"  type="text" name="edu_end_date" data-constraints="@Required">
                  <label class="form-label" for="education-period">e.g. 2009</label>
                </div>
              </div>
            </div>
          </div>
           <div class="block-form">
            <h4>Experience</h4>
            <hr>
            <!-- RD Mailform-->
            <div class="rd-form rd-mailform form-lg form-corporate">
              <div class="form-wrap">
                <label class="form-label-outside" for="experience-employer">Employer</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="experience-employer"  type="text" name="employer" data-constraints="@Required">
                  <label class="form-label" for="experience-employer">Employer Name</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="experience-job-title">Job Title</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="experience-job-title"  type="text" name="jobtitle" data-constraints="@Required">
                  <label class="form-label" for="experience-job-title">Text</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="experience-period">Start Date</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="experience-period"  type="text" name="job_start_date" data-constraints="@Required">
                  <label class="form-label" for="experience-period">e.g. 2009</label>
                </div>
              </div>

              <div class="form-wrap">
                <label class="form-label-outside" for="experience-period">End Date</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="experience-period"  type="text" name="job_end_date" data-constraints="@Required">
                  <label class="form-label" for="experience-period">e.g. 2009</label>
                </div>
              </div>
             </div>
          </div>
           <div class="block-form">
            <h4>Add Files</h4>
            <hr>
            <div class="group">
              <label class="button button-sm button-primary-outline button-icon button-icon-left">
                <input type="file" name="photo" ><span class="icon mdi mdi-account-box"></span>Add Your Photo
              </label>
              <label class="button button-sm button-primary button-icon button-icon-left">
                <input type="file" name="resumefile" ><span class="icon mdi mdi-attachment" style="transform: rotate(270deg); transform-origin: 37% 27%;"></span>Add Resume File
              </label>
            </div>
            <hr>
            <button class="button button-lg button-secondary" type="submit">Preview</button>
          </div>
        </div>
        </form>
      </section>
<!-- Cndidate form end -->
 
 <form method="post" action="/client_details_save">
  @csrf
    <center>
    <section class="section section-md"id="empployer_form"style="display: none;">
        <div class="container">
               <div class="col-lg-4">
                <div class="form-wrap">

                    <label class="containerss">Want to hire for company
                  <input type="radio" value="for_company" onclick="for_company()" name="radio">
                  <span class="checkmark"></span>
                </label>
                <label class="containerss">Want to hire for my personal home
                  <input type="radio" value="for_home" id="for_home" onclick="for_home_check()" name="radio">
                  <span class="checkmark"></span>
                </label>
              
          </div>
      </div>
        </div>
   </section>
   </center>



   <!-- for home client form -->

<section class="section section-md"id="home_form"style="display: none;">
        <div class="container">
          <h4>Get better matches by adding your home details</h4><br>
          <!-- RD Mailform-->
             <div class="row row-30">
              <div class="col-lg-4">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="contact-name">Your Confrim Address line 1</label>
                  <input class="form-input form-control-has-validation form-control-last-child" id="contact-name" type="text" name="home_adrs_1" data-constraints="@Required"><span class="form-validation"></span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="contact-email">Your Confrim Address line 2 (optional)</label>
                  <input class="form-input form-control" id="contact-email" type="email" name="home_adrs_2" data-constraints="@Required @Email"><span class="form-validation"></span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="contact-phone">What's your personal phone number?</label>
                  <input class="form-input form-control-has-validation form-control-last-child" id="contact-phone" type="text" name="personal_phone" data-constraints="@PhoneNumber"><span class="form-validation"></span>
                </div>
              </div>
             
              <div class="col-12">
                <button class="button button-primary" type="submit">Save</button>
              </div>
            </div>
         </div>
 </section>

<!--Employer Form -->
<section class="section section-md"id="empployer_forms"style="display: none;">
        <div class="container">
          <h4>Get better matches by adding company details</h4><br>
          <!-- RD Mailform-->
             <div class="row row-30">
              <div class="col-lg-4">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="contact-name">How many employees does your company have?</label>
                  <input class="form-input form-control-has-validation form-control-last-child" id="contact-name" type="number" name="total_employer" data-constraints="@Required"><span class="form-validation"></span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="contact-email">Which department do you work in?</label>
                  <input class="form-input form-control-has-validation form-control-last-child" id="contact-email" type="text" name="department_name" data-constraints="@Required @Email"><span class="form-validation"></span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="contact-phone">What's your business phone number?</label>
                  <input class="form-input form-control-has-validation form-control-last-child" id="contact-phone" type="text" name="bussines_num" data-constraints="@PhoneNumber"><span class="form-validation"></span>
                </div>
              </div>
                <div class="col-lg-12">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="contact-phone">What's your business Address?</label>
                  <input class="form-input form-control-has-validation form-control-last-child" id="contact-phone" type="text" name="company_adres" data-constraints="@PhoneNumber"><span class="form-validation"></span>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="contact-message">Introduction</label>
                  <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="company_intro" data-constraints="@Required"></textarea><span class="form-validation"></span>
                </div>
              </div>
              <div class="col-12">
                <button class="button button-primary" type="submit">Save</button>
              </div>
            </div>
         </div>
 </section>
</div>
</div>
</section>
</form>

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

 