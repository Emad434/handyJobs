

 @extends('client_header.client_header')
  @section('title', 'Blogs')  
   
 @section('content')
 
 
 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Blog</h3>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active">Blog</li>
            </ul>
          </div>
        </div>
      </section>
      
      
      
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 row-xl-70">
              
              @foreach($blog as $blogs)
              @php
                $coumments_count = App\BlogComment::where('blog_id',$blogs->id)->count();
                $views_count = App\BlogView::where('blog_id',$blogs->id)->count();
                
                $slug = str_replace(" ","-",$blogs->blog_title);
              @endphp
            <div class="col-sm-6 col-lg-4">
              <article class="post-classic"><a class="post-classic-media" href="/Client/Blog-Details/{{$blogs->id}}/{{$slug}}">
                  @foreach($blogs->images as $key)
                  <img class="post-classic-image" src="{{asset('/JobPortal/public/blog_images')}}/{{$key->file_path}}" alt=""style="width:369px;height:253px;" width="369" height="253">
                  @endforeach
                  </a>
                <h4 class="post-classic-title"><a href="/Client/Blog-Details/{{$blogs->id}}/{{$blogs->slug}}"> {!!  substr(strip_tags($blogs->blog_title), 0, 20) !!}...<small>continue reading</small> </a></h4>
                <time class="post-classic-time" datetime="2019">{{$blogs->created_at}}</time>
                <div class="post-classic-text">
                    
                  <p>  {!!  substr(strip_tags($blogs->blog_text), 0, 50) !!}  </p>
                </div>
                <ul class="post-classic-meta">
                  <li><a href="/Client/Blog-Details/{{$blogs->id}}/{{$blogs->slug}}"> <span class="icon mdi mdi-comment-outline"></span><span>{{$coumments_count}} Comments</span></a></li>
                  <li><a href="#"><span class="icon mdi mdi-eye"></span><span>{{$views_count}}</span></a></li>
                </ul>
              </article>
            </div>
            @endforeach
           
          </div>
          <!-- Bootstrap Pagination-->
          {{$blog->links()}}
        </div>
      </section>
 @endsection