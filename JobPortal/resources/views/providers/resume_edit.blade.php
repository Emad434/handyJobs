
 @extends('setup_header.providers_header')
    @section('title', 'Edit Resume')  
 @section('content')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
    .collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: #ccc;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

    
</style>
 @php
 
 $user_details = App\ProviderDetails::where('user_id',Auth::user()->id)->first();
 
 @endphp
  <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Resume Edit</h3>
          </div>
        </div>
       </section>

  <!-- Candidate form -->
      <section class="section section-md">
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
                      <input class="form-input" id="general-information-profession"type="text" value="{{$user_resume->profession}}" name="profession" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession">e.g. “Web Designer”</label>
                    </div>
                  </div>
                </div>
               
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-rate">Minimum Rate/h ($)</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-rate"  type="text" name="rate" value="{{$user_resume->minimum_rate}}" data-constraints="@Required">
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
                        <option value="{{$categorys->id}}" @if($user_resume->resume_category == $categorys->id) selected @endif>{{$categorys->name}}</option>
                        @endforeach
                    
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-skills">Skills (optional)</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-skills" value="{{$user_resume->skills}}"  type="text" name="skills"data-constraints="@Required">
                      <label class="form-label" for="general-information-skills">e.g. “Web Designer”</label>
                    </div>
                  </div>
                </div>
                 
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-resume-content">Your Information</label>
                    <div class="form-wrap-inner">
                      <label class="form-label" for="general-information-resume-content">Tell us something important about your self</label>
                      <textarea class="form-input" id="general-information-resume-content"  name="resumecontent" data-constraints="@Required">{{$user_resume->intro}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @if($user_details->busines_type == 'solo')
         <div class="block-form" id="education">
            <h4>Education</h4>
            <hr>
          <button type="button"  class="collapsible" >Click to fill Education (Optional)</button>
          <div class="content">
            <br>
            <div class="rd-form rd-mailform form-lg form-corporate">
              <div class="form-wrap">
                <label class="form-label-outside" for="education-school-name">School Name</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="education-school-name"  value="{{$user_resume->school_name}}" type="text" name="schoolname" data-constraints="@Required">
                  <label class="form-label" for="education-school-name">Text</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="education-qualification">Qualification(s)</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="education-qualification"  type="text" value="{{$user_resume->qualification}}" name="qualification" data-constraints="@Required">
                  <label class="form-label" for="education-qualification">Text</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="education-period">StartDate</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="education-period"  type="text" name="edu_start_date"value="{{$user_resume->school_start_date}}" data-constraints="@Required">
                  <label class="form-label" for="education-period">e.g. 2007</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="education-period">End Date</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="education-period"  type="text" name="edu_end_date" value="{{$user_resume->schol_end_date}}" data-constraints="@Required">
                  <label class="form-label" for="education-period">e.g. 2009</label>
                </div>
              </div>
            </div>
          </div>
      </div>

        
            <div class="block-form" id="experience">
            <h4>Experience</h4>
            <hr>
       <button type="button" class="collapsible">Click to fill Experience (Optional)</button>
        <div class="content">
         <br>
            <div class="rd-form rd-mailform form-lg form-corporate">
              <div class="form-wrap">
                <label class="form-label-outside" for="experience-employer">Employer</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="experience-employer"  type="text" name="employer" value="{{$user_resume->employer}}" data-constraints="@Required">
                  <label class="form-label" for="experience-employer">Employer Name</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="experience-job-title">Job Title</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="experience-job-title"  type="text" name="jobtitle"value="{{$user_resume->job_title}}"  data-constraints="@Required">
                  <label class="form-label" for="experience-job-title">Text</label>
                </div>
              </div>
              <div class="form-wrap">
                <label class="form-label-outside" for="experience-period">Start Date</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="experience-period"  type="text" name="job_start_date"value="{{$user_resume->jobstart_date}}"  data-constraints="@Required">
                  <label class="form-label" for="experience-period">e.g. 2009</label>
                </div>
              </div>

              <div class="form-wrap">
                <label class="form-label-outside" for="experience-period">End Date</label>
                <div class="form-wrap-inner">
                  <input class="form-input" id="experience-period"  type="text" name="job_end_date" value="{{$user_resume->jobend_date}}" data-constraints="@Required">
                  <label class="form-label" for="experience-period">e.g. 2009</label>
                </div>
              </div>
             </div>
          </div>
          </div>
          @endif
           <div class="block-form">
            <h4>Add Files</h4>
            <hr>
            <div class="group">
              <label class="button button-sm button-primary-outline button-icon button-icon-left" style="border-radius:40px;">
                <input type="file" name="photo" onchange="readURL(this);"  id="file_chosen"><span class="icon mdi mdi-account-box"></span>Change Your Photo
                
                &nbsp &nbsp
                
                  @if(Auth::user()->profile_image == null)
                            
                   <img src="{{Auth::user()->img_url}}" class="img-thumbnail" id="blah" style="width:50px;"/>
                @else
                <img src="{{asset('/JobPortal/public/profile_images')}}/{{Auth::user()->profile_image}}" id="blah" class="img-thumbnail" style="width:50px;"/>
                @endif
              </label>
              <label class="button button-sm button-primary button-icon button-icon-left" style="border-radius:40px;">
                <input type="file" name="resumefile"  for="file-upload" id="file-upload" ><span class="icon mdi mdi-attachment" style="transform: rotate(270deg); transform-origin: 37% 27%;"></span>Add Resume File
                 &nbsp &nbsp  
                 <div id="file-upload-filename"></div>
              </label>
              <a href="{{asset('/JobPortal/public/resume_files')}}/{{$user_details->resume}}"/>Your Resume</a> 
            </div>
            <hr>
            <div>
            <button class="button button-lg button-secondary" style="border-radius:40px;" type="submit">Save Changes</button>
            </div>
          </div>
        </div>
        </div>
        </div>
        </form>
      </section>
<!-- Cndidate form end -->
<script type="text/javascript">
 function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
document.getElementById('blah').style.display="block";


reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(200)
.height(100);
};
 var name = document.getElementById('file_chosen'); 
  $('#files').val(name.files.item(0).name);
reader.readAsDataURL(input.files[0]);
document.getElementById('old_img').style.display="none";
}
}

 

</script>

<script type="text/javascript">
var input = document.getElementById( 'file-upload' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {
  
  // the change event gives us the input it occurred in 
  var input = event.srcElement;
  
  // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
  var fileName = input.files[0].name;
  
  // use fileName however fits your app best, i.e. add it into a div
  infoArea.textContent = 'File name: ' + fileName;
}    
    
</script>


<script>
    var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
      @endsection