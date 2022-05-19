   @extends('layouts.admin_layout')

@section('content')
<!--  

       <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  
   -->
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
   <form class="col s12" method="post" enctype="multipart/form-data" id="form_submit" action="/Blog/edit_save/{{$blog->id}}">
   	@csrf
  <section class="full-editor">
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">

	     
	      <div class="row">
	        <div class="input-field col s6">
	           <input id="icon_prefix" name="title" value="{{$blog->blog_title}}" type="text" class="validate">
	          <label for="icon_prefix">Blog Title</label>
	        </div>
	        <div class="input-field col s6">
	           <input id="icon_telephone" name="slug" type="text" value="{{$blog->slug}}" class="validate">
	          <label for="icon_telephone">Blog Slug</label>
	        </div>
	      </div>
	    
        <h4 class="card-title">Blog Text</h4>
         <div class="row">
          <div class="col s12">
           <section class="full-editor">
		    <div class="row">
		      <div class="col s12">
		        <div class="card">
		          <div class="card-content">
		            <h4 class="card-title">Full Editor</h4>
 		            <div class="row">
		              <div class="col s12">
		                <div id="full-wrapper">
		                  <div id="full-container">
		                    <div class="editor"id="editor">
		                		{!! $blog->blog_text !!}
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    		<textarea hidden="true" name="textarea"id="textarea">{!! $blog->blog_text !!}</textarea>
 	 </section>
              </div>
            </div>
              <div class="divider mb-1 mt-1"></div>
		    <div class="row section">
		      
		      <div class="col s12 m12 l12">
		        <p>Maximum file upload size 2MB.</p>
		        <input type="file" id="input-file-max-fs" name="file" class="dropify" data-max-file-size="2M" />
		      </div>
		   

		    </div>
		       @php
		      $images = App\Images::where('entity_id',$blog->id)->first();
		      @endphp
		      <br>
		      <div class="col s12 m12 l12">
		      	<img src="{{$images->file_path}}"style="height: 100px;">
		      </div>

		      <div class="divider mb-1 mt-1"></div>
		    
		    <div class="row section">
		    	<div class="col s12 m12 l12">
		    		<div class="input-field">
				  <select class="select2 browser-default" multiple="multiple" name="tags">

				    <optgroup label="Tags">
				    	@foreach($tags as $tag)
				      <option value="{{$tag->id}}" @if($blog->tag_ids == $tag->id) selected="selected" @endif>{{$tag->tag_name}}</option>
				      @endforeach
				      </optgroup>
				     
				  </select>
				</div>
				<br>
				<p>Is Active: </p>

				@if($blog->is_active == "deactivate")
 				<a href="/Blog/blog_active/{{$blog->id}}" class="mb-6 btn waves-effect waves-light gradient-45deg-light-blue-cyan">Active this blog</a>
				@else
				<a href="/Blog/blog_deactive/{{$blog->id}}" class="btn btn-primary">Deactivate this blog</a>
				@endif

		     </div>
		    </div>
    		<div class="row section">
     		 <div class="col s12 m12 l12">
 		      <button class="mb-6 btn waves-effect waves-light gradient-45deg-light-blue-cyan">Save Edit</button>
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
   
 <script type="text/javascript">
 	
		 document.body.addEventListener('keypress', function(e) {

		 	var edito_clas = $( "div.editor" ).find( "p" ).html();

		    document.getElementById('textarea').value = edito_clas;

		 	console.log('--------->',edito_clas);
		});


    // Add record
$('#form_submit').submit(function(e){
       
       
 e.preventDefault();


 });
 </script>
  @endsection