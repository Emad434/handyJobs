
 @extends('client_header.client_header')
  @section('title', 'Blog Details')  
   
 @section('content')
 
 
 @php
    $admin_details = App\User::where('id',$blog_details->admin_id)->first();
    $coumments_count = App\BlogComment::where('blog_id',$blog_details->id)->count();
    $views_count = App\BlogView::where('blog_id',$blog_details->id)->count();
    $slug = str_replace(" ","-",$blog_details->blog_title);
 @endphp
 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">{{$blog_details->blog_title}}</h3>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Blogs</a></li>
              <li class="active">{{$blog_details->blog_title}}</li>
            </ul>
          </div>
        </div>
      </section>
      
      
<section class="section section-md">
        <div class="container">
          <div class="blog-layout">
            <div class="blog-layout-main">
              <article class="post-creative">
                     @foreach($blog_details->images as $key)
                  <img class="post-creative-image" src="{{asset('/JobPortal/public/blog_images')}}/{{$key->file_path}}" alt=""width="768" height="475">
                  @endforeach
                 <div class="post-creative-meta">
                  <div class="post-creative-meta-inner">
                    <div class="post-creative-author">
                        <img class="post-creative-author-image" src="images/user-1-36x36.jpg" alt="" width="36" height="36">
                      <p>
                         by&nbsp;<a href="#">{{$admin_details->name}}</a></p>
                    </div>
                    <div>
                      <ul class="post-creative-meta-list">
                        <li> <span class="icon mdi mdi-clock"> </span>
                          <time datetime="2019">{{$blog_details->created_at}}</time>
                        </li>
                        <li><span class="icon mdi mdi-comment-outline"></span><span>{{$coumments_count}} </span></li>
                        <li><span class="icon mdi mdi-eye"></span><span>{{$views_count}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <p>{!! $blog_details->blog_text !!}</p>
               </article>
              <div class="section-sm section-first">
                <p class="blog-layout-title text-center">Recent Posts</p>
                <div class="row row-30">
                    @foreach($recent_post as $blogs)
                        
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
              </div>
              @php
               $coumments = App\BlogComment::where('blog_id',$blog_details->id)->get();
                 $coumments_count = App\BlogComment::where('blog_id',$blog_details->id)->count();
                      
              @endphp       
              <div class="section-sm section-bottom-0">
                <p class="blog-layout-title text-center">{{$coumments_count}} comments</p>
                <div class="comment-group">
                  <!-- Comment-->
                  @if($coumments_count > 0)
                   @foreach($coumments as $coumment)
                     @php
                        $commente_details = App\User::where('id',$coumment->commenter_id)->first();
                        $chk_reply = App\BlogReply::where('parent_comment',$coumment->id)->count();
                     @endphp
                  <article class="comment">
                    <div class="comment-aside">
                        <img class="comment-image" src="{{asset('/JobPortal/public/profile_images')}}/{{$commente_details->profile_image}}" alt="" width="65" height="65"  style="height:65px;">
                    </div>
                    <div class="comment-header">
                      <div class="comment-header-inner">
                        <p class="comment-title">{{$commente_details->name}}</p><span class="comment-time">{{$coumment->created_at}}</span>
                      </div>
                    </div>
                    <div class="comment-main">
                      <div class="comment-text">
                        <p>{{$coumment->comments}}</p>
                      </div>
                      <div class="comment-footer">
                        <ul class="comment-list">
                           <li><a href="#" class="comment-link" data-toggle="modal" data-target="#aa__{{$coumment->id}}"><span class="icon mdi mdi-comment-outline"></span> Reply</a></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                  
                                                       
                <div class="modal fade" id="aa__{{$coumment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reply to {{$commente_details->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="/Client/reply/{{$coumment->id}}">
                            @csrf
                            <textarea class="form-input form-control-has-validation form-control-last-child" name="reply"></textarea>
                            
                            <div class="from-wrap">
                        <button class="button button-primary" type="submit">Reply</button>
                      </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       </div>
                    </div>
                  </div>
                </div>
                  @if($chk_reply > 0)
                  @php
                    $reply = App\BlogReply::where('parent_comment',$coumment->id)->get();
                  @endphp
                   @foreach($reply as $replys)
                   
                    @php
                    $reply_user_details = App\User::where('id',$replys->replier_id)->first();
                  @endphp
                  <div class="comment-group">
                    <!-- Comment-->
                    <article class="comment">
                      <div class="comment-aside"><img class="comment-image" src="{{asset('/JobPortal/public/profile_images')}}//{{$reply_user_details->profile_image}}" alt="" width="51" height="51"  style="height:65px;">
                      </div>
                      <div class="comment-header">
                        <div class="comment-header-inner">
                          <p class="comment-title">{{$reply_user_details->name}}</p><span class="comment-time">{{$reply_user_details->creayed_at}}</span>
                        </div>
                      </div>
                      <div class="comment-main">
                        <div class="comment-text">
                          <p>{{$replys->comment}}</p>
                          </div>
                       </div>
                    </article>
                    </div>
                    
             
                    @endforeach
                  @endif
                   @endforeach
                  @endif
                </div>
  
          
                <!-- Comment-->
                <article class="comment comment-box">
                  <div class="comment-aside"><img class="comment-image" src="{{asset('/JobPortal/public/profile_images')}}/{{Auth::user()->profile_image}}" alt="" width="65" height="65" style="height:65px;">
                  </div>
                  @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                  <div class="comment-header">
                    <p class="comment-title">{{Auth::user()->name}}</p>
                  </div>
                  <div class="comment-main">
                    <form class=" " method="post" action="/Client/post_comment/{{$blog_details->id}}" novalidate="novalidate">
                        @csrf
                      <div class="form-wrap">
                        <label class="form-label rd-input-label" for="comment-message">Your comment</label>
                        <textarea class="form-input form-control-has-validation form-control-last-child" id="comment-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                      </div>
                      <div class="from-wrap">
                        <button class="button button-primary" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </article>
              </div>
            </div>
            <div class="blog-layout-aside">
              <!--<div class="blog-layout-aside-item"> -->
                <!-- RD Search-->
              <!--  <form class="rd-form rd-search rd-search-classic form-lg form-filled" action="search-results.html" method="GET">-->
              <!--    <div class="form-wrap">-->
              <!--      <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">-->
              <!--      <label class="form-label rd-input-label" for="rd-search-form-input">Search the blog...</label>-->
              <!--    </div>-->
              <!--    <button class="rd-search-submit" type="submit"></button>-->
              <!--  </form>-->
              <!--</div>-->
              @php
              $category = App\Services::where('is_active',1)->get();
              @endphp
              <div class="blog-layout-aside-item">
                <p class="blog-layout-title">Category</p>
                <ul class="list-categories">
                    @foreach($category as $categorys)
                  <li class=""><a href="#"><span>{!! $categorys->iconns !!}  {{$categorys->name}}</span></a></li>
                  @endforeach
                </ul>
              </div>
              
               @php
              $related_post = App\BlogDetail::where('blog_title','like','%'.$blog_details->blog_title.'%')->get();
              @endphp
              <div class="blog-layout-aside-item">
                <p class="blog-layout-title">Related Posts</p>
                @foreach($related_post as $related_posts)
                <div class="post-light-group">
                  <!-- Post Light-->
                  <a class="post-light" href="blog-post.html"> 
                    <div class="post-light-media">
                         @foreach($related_posts->images as $key)
                              <img class="post-light-image" src="{{asset('/JobPortal/public/blog_images')}}/{{$key->file_path}}" alt=""width="106" height="104">
                              @endforeach
                     </div>
                     
                    <div class="post-light-main">
                      <p class="post-light-title">{!!  substr(strip_tags($related_posts->blog_title), 0, 20) !!}...</p>
                      <time class="post-light-time" datetime="{{$related_posts->created_at}}">{{$related_posts->created_at}}</time>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
              <!--<div class="blog-layout-aside-item">-->
              <!--  <p class="blog-layout-title">Newsletter</p>-->
              <!--  <p>Enter your e-mail to get the latest news. </p>-->
                <!-- Rd Mailform-->
              <!--  <form class="rd-form rd-mailform form-centered" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" novalidate="novalidate">-->
              <!--    <div class="form-wrap">-->
              <!--      <input class="form-input form-control-has-validation" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>-->
              <!--      <label class="form-label rd-input-label" for="subscribe-form-email">Your e-mail address...</label>-->
              <!--    </div>-->
              <!--    <div class="form-button">-->
              <!--      <button class="button button-block button-primary" type="submit" aria-label="subscribe">Subscribe</button>-->
              <!--    </div>-->
              <!--  </form>-->
              <!--</div>-->
            </div>
          </div>
        </div>
      </section>
 
 
 
 
 @endsection