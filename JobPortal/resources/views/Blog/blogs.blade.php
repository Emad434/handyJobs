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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>All Public Blogs</span></h5>
                <br><a href="/Blog/Create/New"class="btn btn-primary"> Create Blog</a>
                    <a href="/Admin/Create-Tag"class="btn btn-gradient-45deg-indigo-purple"> Create Tag</a>
                

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



         <div id="card-panel-type" class="section">
             <div class="row mt-2">

             	@if($blogs_count  > 0)
              @foreach($all_blogs as $all_blog)
              @php
              	$blog_images = App\Images::where('entity_id', $all_blog->id)->first();

              @endphp
                <div class="col s12 m6 l4 card-width">
                  <div class="card-panel border-radius-6 mt-10 card-animation-1">
                    <img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                      src="{{asset('/JobPortal/public/blog_images')}}/{{$blog_images->file_path}}" alt="images" style="height:200px;width:480px;"/>
                    <h6>{{ substr(strip_tags($all_blog->blog_title), 0, 30) }}</h6>
                    <p>{!! substr(strip_tags($all_blog->blog_text), 0, 50) !!}</p>
                    <hr>
                      <div class="row mt-4">
			            <div class="col s2">
			              <a href="#"><img src="{{asset('/JobPortal/public/profile_images')}}/{{$all_blog->blog_user_details->profile_image}}" width="40" alt="news"
			                  class="circle responsive-img mr-3" /></a>
			            </div>
			            
			              <div class="col s3 p-0 mt-1"><span class="pt-2">{{$all_blog->blog_user_details->name}}</span></div>
			            
			           	 <div class="col s7 mt-1 right-align">
			              <div class="chip cyan white-text">
                       
                       {{$all_blog->tags->tag_name}}
                   </div>

 <a href="/Blog/Blog-Edit/{{$all_blog->id}}" class="btn waves-effect waves-light right submit"><i class="material-icons dp48">edit</i></a>
			              
			            </div>

			          </div>
                  </div>
                </div>
                @endforeach
                @else

                <div class="container">
                	
                	<h6>0 Blog found</h6>
                </div>
                @endif
           
            </div>
          </div>

           </div>
    </div>
  </div>
</div>
















          @endsection