 

 @extends('setup_header.providers_header')
    @section('title', 'Edit Gig')  
 @section('content')


       </header>

 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Manage your service</h3>
          </div>
        </div>
       </section>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    <section class="section section-md" id="candidate_from" >
         <div class="container">
         	 @if (session('gig_edit'))
                <div class="alert alert-primary">
                    {{ session('gig_edit') }}
                </div>
                @endif
           <div class="block-form">
            <form method="post"  data-form-type="contact" action="/Providers/edit_save/{{$edit_gig->id}}" enctype="multipart/form-data">
            	@csrf
            <h4>Describe Your Service</h4>
            <hr>
            <!-- RD Mailform-->
            <div class="rd-form rd-mailform form-lg">
              <div class="row row-40">
                
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">Service Title</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" value="{{$edit_gig->title}}" name="title" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession">e.g. “I will do something i really good at”</label>
                    </div>
                  </div>
                </div>
               
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-rate">Minimum Rate/h ($)</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-rate"  type="number" name="rate" value="{{$edit_gig->rate}}" data-constraints="@Required">
                      <label class="form-label" for="general-information-rate">e.g. $20</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-job-category">Resume Category</label>
                    <div class="form-wrap-inner">
                      <!-- Select 2-->
                      <select class="form-input select" id="general-information-job-category"  data-placeholder="Choose a Category" name="category" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                        <option label="Choose a Category"></option>
                        @php
                        $category = App\Services::where('is_active',1)->get();
                        @endphp

                        @foreach($category as $categorys)
                        <option value="{{$categorys->id}}" @if($edit_gig->service_category == $categorys->id) selected @endif>{{$categorys->name}}</option>
                        @endforeach
                    
                      </select>
                    </div>
                  </div>
                </div>
             <!--    <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-skills">Skills (optional)</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-skills"  type="text" name="skills"data-constraints="@Required">
                      <label class="form-label" for="general-information-skills">e.g. “Web Designer”</label>
                    </div>
                  </div>
                </div> -->
                 
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-resume-content">Briefly Explain Your Service</label>
                    <div class="form-wrap-inner">
 						<textarea id="summernote" name="editordata" class="form-input"  id="validationCustom01" data-constraints="@Required"> 
 							{!! $edit_gig->description !!}
                        </textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-form">
            <h4>Other Details</h4>
            <hr>
            <!-- RD Mailform-->
            <div class="rd-form rd-mailform form-lg form-corporate">
              <div class="form-wrap">
                <label class="form-label-outside" for="education-school-name">Select Days</label>
                <div class="form-wrap-inner">
                	<select class="form-input select"data-placeholder="Choose a Category" name="time_period" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                			
                			<option value="1" @if($edit_gig->total_time_dureation == 1) selected @endif>1 Day</option>
                			<option value="2" @if($edit_gig->total_time_dureation == 2) selected @endif>2 Days</option>
                			<option value="3" @if($edit_gig->total_time_dureation == 3) selected @endif>3 Days</option>
                			<option value="4" @if($edit_gig->total_time_dureation == 4) selected @endif>4 Days</option>
                			<option value="5" @if($edit_gig->total_time_dureation == 5) selected @endif>5 Days</option>
                			<option value="6" @if($edit_gig->total_time_dureation == 6) selected @endif>6 Days</option>
                			<option value="7" @if($edit_gig->total_time_dureation == 7) selected @endif>7 Days</option>
                			<option value="8" @if($edit_gig->total_time_dureation == 8) selected @endif>8 Days</option>
                			<option value="9" @if($edit_gig->total_time_dureation == 9) selected @endif>9 Days</option>
                			<option value="10" @if($edit_gig->total_time_dureation == 10) selected @endif>10 Days</option>
                			<option value="11" @if($edit_gig->total_time_dureation == 11) selected @endif>11 Days</option>
                			<option value="12" @if($edit_gig->total_time_dureation == 12) selected @endif>12 Days</option>
                			<option value="13" @if($edit_gig->total_time_dureation == 13) selected @endif>13 Days</option>
                			<option value="14" @if($edit_gig->total_time_dureation == 14) selected @endif>14 Days</option>
                			<option value="15" @if($edit_gig->total_time_dureation == 15) selected @endif>15 Days</option>
                			<option value="16" @if($edit_gig->total_time_dureation == 16) selected @endif>16 Days</option>
                			<option value="17" @if($edit_gig->total_time_dureation == 17) selected @endif>17 Days</option>
                			<option value="18" @if($edit_gig->total_time_dureation == 18) selected @endif>18 Days</option>
                			<option value="19" @if($edit_gig->total_time_dureation == 19) selected @endif>19 Days</option>
                			<option value="20" @if($edit_gig->total_time_dureation == 20) selected @endif>20 Days</option>
                			<option value="21" @if($edit_gig->total_time_dureation == 21) selected @endif>21 Days</option>
                			<option value="22" @if($edit_gig->total_time_dureation == 22) selected @endif>22 Days</option>
                			<option value="23" @if($edit_gig->total_time_dureation == 23) selected @endif>23 Days</option>
                			<option value="24" @if($edit_gig->total_time_dureation == 24) selected @endif>24 Days</option>
                			<option value="25" @if($edit_gig->total_time_dureation == 25) selected @endif>25 Days</option>
                			<option value="26" @if($edit_gig->total_time_dureation == 26) selected @endif>26 Days</option>
                			<option value="27" @if($edit_gig->total_time_dureation == 27) selected @endif>27 Days</option>
                			<option value="28" @if($edit_gig->total_time_dureation == 28) selected @endif>28 Days</option>
                			<option value="29" @if($edit_gig->total_time_dureation == 29) selected @endif>29 Days</option>
                			<option value="30" @if($edit_gig->total_time_dureation == 30) selected @endif>30 Days</option>
                	</select> 
                </div>
              </div>
              
              
              <div class="form-wrap col-sm-12">  
                <label class="form-label-outside" for="education-school-name">Available On</label>
                <div class="form-wrap-inner">
                    <div class="input-group date" data-provide="datepicker">
   <input class="form-input form-control-has-validation" type="text" name="avilable_on" value="{{$edit_gig->available_on}}">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
                 
                </div>
              </div>
              
                <div class="form-wrap col-sm-12">  
                <label class="form-label-outside" for="education-school-name">Days Available For</label>
                <div class="form-wrap-inner">
                     <div class="input-group date" data-provide="datepicker">
   <input class="form-input form-control-has-validation" type="text" name="avilable_end" value="{{$edit_gig->available_end}}">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
                 
                </div>
              </div>
                
                 <div class="form-wrap col-sm-12">  
                <label class="form-label-outside" for="education-school-name">Provide Your Postal Code</label>
                <div class="form-wrap-inner">
                  <input type="number" name="postal_code" value="{{$edit_gig->postal_code}}" placeholder="Postal Code" class="form-input form-control-has-validation"/>
                </div>
              </div>
         
            </div>
            
            
          </div>
        
           <div class="block-form">
            <h4>Thumbnail</h4>
            <hr>
            <div class="group">
              <label class="button button-sm button-primary-outline button-icon button-icon-left " style="border-radius:40px;">
                <input type="file" name="photo" onchange="readURL(this);"  id="file_chosen" ><span class="icon mdi mdi-account-box"></span>Add Your Work Photo
              </label>
              <img src="{{asset('JobPortal/public/gig_thumbnail')}}/{{$edit_gig->thumbnail}}" id="blah" style="width: 150px;">
               
            </div>	
            <hr>
            <button class="button button-lg button-secondary" style="border-radius:40px;" type="submit">Save</button>
          </div>
        </div>
        </form>
      </section>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  
 <script>
var $j = jQuery.noConflict();
$j("#datepicker").datepicker();
  </script>           
      
      
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
      <script>
      $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 100
      });
    </script>

    <script type="text/javascript">
 document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
return false;
}
}

document.addEventListener('contextmenu', event => event.preventDefault());

</script>
 
 @endsection

 