
 @extends('setup_header.providers_header')
   
 @section('content')

<style type="text/css">
 
.nav-tabs {
    border-bottom: 1px solid #c9d2e3;
}
.profile .profile-header {
    position: relative;
}
.profile .profile-header .profile-header-cover {
    background: url(https://bootdey.com/img/Content/bg1.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 10.625rem;
    position: relative;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-cover {
        height: 6.25rem;
    }
}
.profile .profile-header .profile-header-cover:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(33, 40, 55, 0.35);
}
.profile .profile-header .profile-header-content {
    position: relative;
    padding: 0 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: flex-end;
    align-items: flex-end;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content {
        display: block;
        padding: 0 20px;
    }
}
.profile .profile-header .profile-header-content .profile-header-img {
    width: 12.5rem;
    height: 12.5rem;
    overflow: hidden;
    z-index: 10;
    margin-top: -8.75rem;
    padding: 0.1875rem;
    background: #fff;
    -webkit-border-radius: 9px;
    border-radius: 9px;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-img {
        width: 4.375rem;
        height: 4.375rem;
        margin: -3.75rem 0 0;
    }
}
.profile .profile-header .profile-header-content .profile-header-img img {
    max-width: 100%;
    width: 100%;
    -webkit-border-radius: 6px;
    border-radius: 6px;
}
.profile .profile-header .profile-header-content .profile-header-tab {
    position: relative;
    margin-left: 50px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab {
        margin: -0.625rem -20px 0;
        padding: 0 20px;
        overflow: scroll;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link {
    padding: 0.8125rem 0.625rem 0.5625rem;
    text-align: center;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link {
        padding: 0.9375rem 0.625rem 0.3125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-field {
    font-weight: 600;
    font-size: 0.8125rem;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-field {
        font-size: 0.6875rem;
        margin-bottom: -0.125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-value {
    font-size: 1.25rem;
    font-weight: 400;
    letter-spacing: -0.5px;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-value {
        font-size: 1.125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link.active {
    color: #212837;
    border-color: #212837;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link.active {
        background: 0 0;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item + .nav-item {
    margin-left: 0.9375rem;
}
.profile .profile-container {
    padding: 30px 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
@media (max-width: 991.98px) {
    .profile .profile-container {
        padding: 20px 20px;
    }
}
.profile .profile-container .profile-sidebar {
    width: 13.75rem;
}
@media (max-width: 991.98px) {
    .profile .profile-container .profile-sidebar {
        display: none;
    }
}
.profile .profile-container .profile-content {
    padding-left: 30px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
@media (max-width: 991.98px) {
    .profile .profile-container .profile-content {
        padding-left: 0;
    }
}
.profile .profile-img-list {
    list-style-type: none;
    margin: -0.0625rem -1.3125rem;
    padding: 0;
}
.profile .profile-img-list:after,
.profile .profile-img-list:before {
    content: "";
    display: table;
    clear: both;
}
.profile .profile-img-list .profile-img-list-item {
    float: left;
    width: 25%;
    padding: 0.0625rem;
}
.profile .profile-img-list .profile-img-list-item.main {
    width: 50%;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link {
    display: block;
    padding-top: 75%;
    overflow: hidden;
    position: relative;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link .profile-img-content,
.profile .profile-img-list .profile-img-list-item .profile-img-list-link img {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    max-width: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link .profile-img-content:before,
.profile .profile-img-list .profile-img-list-item .profile-img-list-link img:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 1px solid rgba(60, 78, 113, 0.15);
}
.profile .profile-img-list .profile-img-list-item.with-number .profile-img-number {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    color: #fff;
    font-size: 1.625rem;
    font-weight: 500;
    line-height: 1.625rem;
    margin-top: -0.8125rem;
    text-align: center;
}


</style>

 	<div class="container">
    <div class="profile">
        <div class="profile-header">
            <div class="profile-header-cover"></div>

            <div class="profile-header-content">
                <div class="profile-header-img">
                    <img src="{{Auth::user()->profile_image}}" alt="" class="img-thumbnail" />
                </div>
                <ul class="profile-header-tab nav nav-tabs nav-tabs-v2">
                    <li class="nav-item">
       <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-expanded="true">All Services</a>
                          
                    </li>
                    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile">Rezume</a>
                          
                    </li>
                    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-controls="profile">Reviews</a>
                      </li>
                    
                </ul>
            </div>
        </div>

        <div class="profile-container">
            <div class="profile-sidebar">
                <div class="desktop-sticky-top">
                    <h4>{{Auth::user()->name}}</h4>
                    @php
                    $country = App\Locations::where('id',Auth::user()->country)->first();
                    @endphp
                    <div class="font-weight-600 mb-3 text-muted mt-n2">{{Auth::user()->email}}</div>
                    <p>
                        Principal UXUI Design &amp; Brand Architecture for Studio. Creator of SeanTheme. Bringing the world closer together. Studied Computer Science and Psychology at Harvard University.
                    </p><hr><br>
                    <div class="mb-1"><i class="fa fa-map-marker"></i> {{$country->name}}</div><hr><br>
                     <hr class="mt-4 mb-4" />
                </div>
            </div>

            <div class="profile-content">
                <div class="row">
                    <div class="container"> 
  						<div class="tab-content" id="myTabContent">
					    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="1-tab">
					       <div class="tab-pane-header">

				       		@foreach($my_services as $my_servicess)
				           	<div class="list-group-item d-flex align-items-center">
							<img src="{{$my_servicess->thumbnail}}" alt="" width="50px" class="rounded-sm ml-n2" />
								<div class="flex-fill pl-3 pr-3">
								<div><a href="#" class="text-dark font-weight-600"><strong>{{$my_servicess->title}}</strong></a></div>
								 
						<div class="text-muted fs-13px">{!!  substr(strip_tags($my_servicess->description), 0, 30) !!}</div>
								</div>
 								<div href="#" class="badge badge-primary">{{$my_servicess->status}}</div>
					   </div>
							@endforeach
			   </div>
			</div>
		    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="2-tab">
		      <div class="tab-pane-header">
		      		
	@php
  $location = App\Locations::where('id',Auth::user()->city)->first();
  $category = App\Services::where('id',$ProviderDetails->resume_category)->first();
  @endphp

<section class="section section-sm bg-primary">
        <div class="container">
          <div class="layout-2">
            <div class="layout-2-item layout-2-item-main">
              <!-- Profile Light-->
              <article class="profile-light"><img class="profile-light-image" src="{{$ProviderDetails->passport_size_pic}}" alt="" width="169" height="169">
                <div class="profile-light-main">
                  <h4 class="profile-light-name">{{Auth::user()->name}}</h4>
                  <h6 class="profile-light-position">{{$ProviderDetails->profession}}</h6>
                  <div class="profile-light-divider"></div>
                  <ul class="profile-light-list">
                    <li><span class="icon icon-sm mdi mdi-map-marker"></span><span>{{$location->name}}</span></li>
                    <li><span class="icon icon-sm mdi mdi-cash"></span><span>${{$ProviderDetails->minimum_rate}}</span></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="layout-2-item text-center text-lg-left">
              <div>
                <div class="group group-xl group-middle">
                  <div>
                    <ul class="list-inline list-inline-xs">
                      <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-pinterest-p" href="#"></a></li>
                    </ul>
                  </div><a class="button button-lg button-primary-outline" href="#">Download CV</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="row row-50">
                <div class="col-12">
                  <p class="heading-9">About me</p>
                  <hr>
                  <p class="text-style-1">{{$ProviderDetails->intro}}</p>
                </div>
                <div class="col-12">
                  <p class="heading-9">Professional skill</p>
                  <hr>
                  <div class="row row-20">
                    <div class="col-md-6">
                      <!--Linear progress bar-->
                      <article class="progress-linear progress-bar-secondary">
                        <div class="progress-linear-header">
                          <p class="progress-linear-title">{{$category->name}}</p>
                        </div>
                       </article>
                      <!--Linear progress bar-->
                       
                    </div>
                    
                  </div>
                </div>
                <div class="col-12">
                  <p class="heading-9">Work Experience</p>
                  <hr>
                  <div class="timeline-classic">
                    <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>{{$ProviderDetails->jobstart_date}}-{{$ProviderDetails->jobend_date}}</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title">{{$ProviderDetails->job_title}}</h5>
                       
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="col-12">
                  <p class="heading-9">Education</p>
                  <hr>
                  <div class="timeline-classic">
                    <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>{{$ProviderDetails->school_start_date}}-{{$ProviderDetails->schol_end_date}}</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title">{{$ProviderDetails->school_name}}</h5>
                  
                      </div>
                    </div>
             
                  </div>
                </div>
                <div class="col-12">
                  <p class="heading-9">Services in {{$category->name}}</p>
                  <hr>
                  <div class="row row-30 offset-top-30px">
                    <div class="col-sm-6">
                      <!-- Thumbnail Classic--><a class="thumbnail-classic" href="#">
                        <figure class="thumbnail-classic-figure"><img class="thumbnail-classic-image" src="images/resume-page-2-368x265.jpg" alt="" width="368" height="265"/>
                        </figure>
                        <div class="thumbnail-classic-caption">
                          <p class="heading-9 thumbnail-classic-title">Project #1</p>
                        </div>
                        <div class="thumbnail-classic-dummy"></div></a>
                    </div>
                    <div class="col-sm-6">
                      <!-- Thumbnail Classic--><a class="thumbnail-classic" href="#">
                        <figure class="thumbnail-classic-figure"><img class="thumbnail-classic-image" src="images/resume-page-3-368x265.jpg" alt="" width="368" height="265"/>
                        </figure>
                        <div class="thumbnail-classic-caption">
                          <p class="heading-9 thumbnail-classic-title">Project #2</p>
                        </div>
                        <div class="thumbnail-classic-dummy"></div></a>
                    </div>
                    <div class="col-sm-6">
                      <!-- Thumbnail Classic--><a class="thumbnail-classic" href="#">
                        <figure class="thumbnail-classic-figure"><img class="thumbnail-classic-image" src="images/resume-page-4-368x265.jpg" alt="" width="368" height="265"/>
                        </figure>
                        <div class="thumbnail-classic-caption">
                          <p class="heading-9 thumbnail-classic-title">Project #3</p>
                        </div>
                        <div class="thumbnail-classic-dummy"></div></a>
                    </div>
                    <div class="col-sm-6">
                      <!-- Thumbnail Classic--><a class="thumbnail-classic" href="#">
                        <figure class="thumbnail-classic-figure"><img class="thumbnail-classic-image" src="images/resume-page-5-368x265.jpg" alt="" width="368" height="265"/>
                        </figure>
                        <div class="thumbnail-classic-caption">
                          <p class="heading-9 thumbnail-classic-title">Project #4</p>
                        </div>
                        <div class="thumbnail-classic-dummy"></div></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!--   <div class="col-lg-4">
              <div class="row row-30 row-lg-50">
                <div class="col-md-6 col-lg-12">
                   <form class="rd-mailform form-corporate form-spacing-small form-corporate_sm" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <h4>Contact Amanda</h4>
                    <div class="form-wrap">
                      <label class="form-label" for="contact-name">Your Name</label>
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                    </div>
                    <div class="form-wrap">
                      <label class="form-label" for="contact-email">E-mail</label>
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                    </div>
                    <div class="form-wrap">
                      <label class="form-label" for="contact-phone">Phone</label>
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                    </div>
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                    <div class="form-wrap">
                      <button class="button button-block button-primary" type="submit">Send Message</button>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>

		      </div>
		    </div>
			  <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="3-tab">

				      <div class="tab-pane-header">
				        <h2>Navivation Title (Nav-Tab 3)</h2>
				        <h5>Navigation subtitle</h5>
				        <p class="lead">
				          <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vero magni suscipit, fuga repellat quaerat eius minima vel, distinctio dignissimos labore esse harum, consequatur rem explicabo molestias aliquid saepe autem?</div>
				        </p>
				        <a href="#tab3" target="_blank">Link directly to this tab</a>
				      </div>

				      <p>3: Additional information Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci excepturi quo aut, maiores saepe aperiam suscipit sed! Amet sed nam ipsam qui at numquam similique esse cupiditate accusamus. Eum, reprehenderit?</p>

				    </div>
				  </div>


				</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection