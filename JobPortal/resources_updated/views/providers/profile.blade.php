@extends('setup_header.providers_header')

@section('content')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

@php
  $location = App\Locations::where('id',Auth::user()->city)->first();
  $category = App\Services::where('id',$reume_details->resume_category)->first();
  @endphp

<section class="section section-sm bg-primary">
        <div class="container">
          <div class="layout-2">
            <div class="layout-2-item layout-2-item-main">
              <!-- Profile Light-->
              <article class="profile-light"><img class="profile-light-image" src="{{$reume_details->passport_size_pic}}" alt="" width="169" height="169">
                <div class="profile-light-main">
                  <h4 class="profile-light-name">{{Auth::user()->name}}</h4>
                  <h6 class="profile-light-position">{{$reume_details->profession}}</h6>
                  <div class="profile-light-divider"></div>
                  <ul class="profile-light-list">
                    <li><span class="icon icon-sm mdi mdi-map-marker"></span><span>{{$location->name}}</span></li>
                    <li><span class="icon icon-sm mdi mdi-cash"></span><span>${{$reume_details->minimum_rate}}</span></li>
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
                  <p class="text-style-1">{{$reume_details->intro}}</p>
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
                      <div class="timeline-classic-period"><span>{{$reume_details->jobstart_date}}-{{$reume_details->jobend_date}}</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title">{{$reume_details->job_title}}</h5>
                       
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="col-12">
                  <p class="heading-9">Education</p>
                  <hr>
                  <div class="timeline-classic">
                    <div class="timeline-classic-item">
                      <div class="timeline-classic-period"><span>{{$reume_details->school_start_date}}-{{$reume_details->schol_end_date}}</span></div>
                      <div class="timeline-classic-main">
                        <h5 class="timeline-classic-title">{{$reume_details->school_name}}</h5>
                  
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


      @endsection