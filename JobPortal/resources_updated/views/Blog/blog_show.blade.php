@extends('layouts.app')
   
 @section('content')

 
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 row-xl-70">

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
          
            
          <!-- Bootstrap Pagination-->
          <nav class="pagination-outer text-center" aria-label="Page navigation">
            <div class="pagination">
              <div class="page-item page-item-control"><a class="page-link" href="#" aria-label="Previous">Prev</a></div>
              <div class="page-item"><a class="page-link" href="#">1</a></div>
              <div class="page-item"><a class="page-link" href="#">2</a></div>
              <div class="page-item active"><span class="page-link">3</span></div>
              <div class="page-item"><a class="page-link" href="#">4</a></div>
              <div class="page-item page-item-control"><a class="page-link" href="#" aria-label="Next">Next</a></div>
            </div>
          </nav>
        </div>
      </section>
      
</body></html>


@endsection