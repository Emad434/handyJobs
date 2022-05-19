
 @extends('setup_header.providers_header')
   
 @section('content')



  <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Describe Your Service Details</h2>
              
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/8268-removebg-preview.png')}}"width="748" height="528">
           </div>
        </div>
        
        </header>
      </div>





  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  

    <section class="section section-md" id="candidate_from" >
         <div class="container">
           <div class="block-form">
            <form method="post"  data-form-type="contact" action="/Providers/make_service" enctype="multipart/form-data">
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
                      <input class="form-input" id="general-information-profession"type="text" name="title" data-constraints="@Required">
                      <label class="form-label" for="general-information-profession">e.g. “I will do something i really good at”</label>
                    </div>
                  </div>
                </div>
               
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-rate">Minimum Rate/h ($)</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-rate"  type="number" name="rate" data-constraints="@Required">
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
                        <option value="{{$categorys->id}}">{{$categorys->name}}</option>
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
                           <textarea id="summernote" name="editordata" class="form-input" id="validationCustom01" data-constraints="@Required"> </textarea>
                                       
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
              <div class="form-wrap col-sm-12">
                <label class="form-label-outside" for="education-school-name">Select Days</label>
                <div class="form-wrap-inner">
                	<select class="form-input select"data-placeholder="Choose a Category" name="time_period" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                			
                			<option value="1">1 Day</option>
                			<option value="2">2 Days</option>
                			<option value="3">3 Days</option>
                			<option value="4">4 Days</option>
                			<option value="5">5 Days</option>
                			<option value="6">6 Days</option>
                			<option value="7">7 Days</option>
                			<option value="8">8 Days</option>
                			<option value="9">9 Days</option>
                			<option value="10">10 Days</option>
                			<option value="11">11 Days</option>
                			<option value="12">12 Days</option>
                			<option value="13">13 Days</option>
                			<option value="14">14 Days</option>
                			<option value="15">15 Days</option>
                			<option value="16">16 Days</option>
                			<option value="17">17 Days</option>
                			<option value="18">18 Days</option>
                			<option value="19">19 Days</option>
                			<option value="20">20 Days</option>
                			<option value="21">21 Days</option>
                			<option value="22">22 Days</option>
                			<option value="23">23 Days</option>
                			<option value="24">24 Days</option>
                			<option value="25">25 Days</option>
                			<option value="26">26 Days</option>
                			<option value="27">27 Days</option>
                			<option value="28">28 Days</option>
                			<option value="29">29 Days</option>
                			<option value="30">30 Days</option>
                	</select> 
                </div>
              </div>


              @php

                $region = App\Locations::where('location_type','Country')->get();

              @endphp
              <div class="form-wrap col-sm-12">  
                <label class="form-label-outside" for="education-school-name">For Which Region</label>
                <div class="form-wrap-inner">
                  <select class="form-input select"data-placeholder="Choose a Region" name="region" data-minimum-results-for-search="Infinity" data-constraints="@Selected">
                      
                      @foreach($region as $regions)
                      <option value="{{$regions->id}}">{{$regions->name}}</option>
                      @endforeach
                       
                  </select> 
                </div>
              </div>
         
            </div>
          </div>
        
           <div class="block-form">
            <h4>Thumbnail</h4>
            <hr>
            <div class="group">
              <label class="button button-sm button-primary-outline button-icon button-icon-left">
                <input type="file" name="photo" ><span class="icon mdi mdi-account-box"></span>Add Your Work Photo
              </label>
               
            </div>
            <hr>
            <button class="button button-lg button-secondary" type="submit">Publish</button>
          </div>
        </div>
        </form>
      </section>

      <script>
      $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 100
      });
    </script>

 @endsection