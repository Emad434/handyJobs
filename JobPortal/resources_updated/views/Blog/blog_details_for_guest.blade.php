@extends('layouts.app')
@section('content')
 

      <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image">
          <div class="container">
          	@foreach($all_blogs->images as $key)
              	<img class="post-classic-image" src="{{$key->file_path}}" alt="" width="369" height="253"></a>
              	@endforeach
             <h3 class="breadcrumbs-custom-title">{{$all_blogs->blog_title}}</h3>

          </div>

        </div>
        <hr>
      </section>
      <section class="section section-md">
        <div class="container">
          <div class="blog-layout">
            <div class="blog-layout-main">
              <article class="post-creative">
              	 	@foreach($all_blogs->images as $key)
              	<img class="post-classic-image" src="{{$key->file_path}}" alt="" width="369" height="253"></a>
              	@endforeach	

              	<br>
               
                <h5>{{$all_blogs->blog_title}}</h5>
                <p>{!! $all_blogs->blog_text !!}}</p>
                <!-- Quote Light-->
            
              </article>     
    </div>

 </div>
 </div>
</section>

<section class="section section-md">
        <div class="container">
        	<h3 class="breadcrumbs-custom-title">More Blogs</h3>

          <div class="row row-50 row-xl-70">

          	@php
          	
          	$all_blogs = App\BlogDetail::where('is_active','active')->get();
    		$blogs_count = App\BlogDetail::where('is_active','active')->count();
    
    		@endphp

          	@if($blogs_count > 0)
          	 
          	@foreach($all_blogs as $all_blog)
          	@php

          	$slug = str_replace(" ","-",$all_blog->blog_title);
          	@endphp
          	
            <div class="col-sm-6 col-lg-4">
              <article class="post-classic"><a class="post-classic-media" href="/Blog/Blogs-Details/{{$all_blog->id}}/{{$slug}}">
              	@foreach($all_blog->images as $key)
              	<img class="post-classic-image" src="{{$key->file_path}}" alt="" width="369" height="253"></a>
              	@endforeach
                <h4 class="post-classic-title"><a href="/Blog/Blogs-Details/{{$all_blog->id}}/{{$slug}}">{{$all_blog->blog_title}}</a></h4>
                <time class="post-classic-time" datetime="2019">{{$all_blog->created_at}}</time>
                <!-- <div class="post-classic-text">
                  <p>There’s no denying that the landscape of work is changing. More and more companies are adopting </p>
                </div> -->
               <!--  <ul class="post-classic-meta">
                  <li><a href="blog-post.html"> <span class="icon mdi mdi-comment-outline"></span><span>3 Comments</span></a></li>
                  <li><a href="#"><span class="icon mdi mdi-thumb-up-outline"></span><span>30 Likes</span></a></li>
                </ul> -->
              </article>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
 
</body></html>





 @endsection