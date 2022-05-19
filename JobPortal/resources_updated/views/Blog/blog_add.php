   @extends('layouts.admin_layout')

@section('content')

<div id="main">
      <div class="row">

   
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Edit Blogs</span></h5>
                 
              </div>
 
          </div>
 
           <div class="row">
              <div class="col s12">
                 @if (session('status'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('status') }}
            </div>
          </div>
          @endif

 

  <!-- full Editor start -->
   <form class="col s12">
  <section class="full-editor">
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">

	     
	      <div class="row">
	        <div class="input-field col s6">
	           <input id="icon_prefix" type="text" class="validate">
	          <label for="icon_prefix">Blog Title</label>
	        </div>
	        <div class="input-field col s6">
	           <input id="icon_telephone" type="tel" class="validate">
	          <label for="icon_telephone">Blog Slug</label>
	        </div>
	      </div>
	    
            <h4 class="card-title">Blog Text</h4>
             <div class="row">
              <div class="col s12">
                <div id="full-wrapper">
                  <div id="full-container">
                    <div class="editor">
                    	<strong><center><h1 class="ql-align-center">Blog Description Heading</h1></center></strong>
                      <textarea rows="15"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="divider mb-1 mt-1"></div>
		    <div class="row section">
		      
		      <div class="col s12 m12 l12">
		        <p>Maximum file upload size 2MB.</p>
		        <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
		      </div>
		    </div>
    		<div class="row section">
     		 <div class="col s12 m12 l12">
 		      <button class="mb-6 btn waves-effect waves-light gradient-45deg-light-blue-cyan">Publish</button>
		    </div>
		    </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </form>
  <!-- full Editor end -->
</div><!-- START RIGHT SIDEBAR NAV -->
 

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
     <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
  
  <script src="{{asset('/Admin_css/vendors/quill/katex.min.js')}}"></script>
    <script src="{{asset('/Admin_css/vendors/quill/highlight.min.js')}}"></script>
    <script src="{{asset('/Admin_css/vendors/quill/quill.min.js')}}"></script>
 
  @endsection