
  @extends('setup_header.providers_header')
    @section('title', 'Home')  
 @section('content')

     <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">{{ __(('Start Building Your Own Career Now By Providing Best Services')) }}</h2>
              
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/5297-removebg-preview.png')}}"width="748" height="528">
           </div>
        </div>
        
        
      </div>
 </header>
  <section class="section section-md bg-default text-center">
        <div class="container">
           @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
          <h3>{{ __(('Welcome to')) }} <span class="text-primary">{{ __(('Handy')) }}</span>{{ __(('Services')) }}</h3>
          <p class="text-spacing-05">{{ __(('A place where leading employers are already looking for your talent and experience.')) }}</p>
          <div class="row row-50 justify-content-center align-items-center text-left">
            <div class="col-md-10 col-lg-6">
              <figure class="figure-responsive block-5"><img src="{{asset('/front_css/images/home-2-540x413.jpg')}}" alt="" width="540" height="413"/>
              </figure>
            </div>
            <div class="col-md-10 col-lg-6">
              <div class="row row-50 row-xl-70">
                <div class="col-sm-6">
                  <!-- Box Line-->
                  <article class="box-line box-line_sm">
                    <div class="box-line-inner">
                      <div class="box-line-icon icon mercury-icon-group"></div>
                      <h5 class="box-line-title">More than 3.8 million visitors every day</h5>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Box Line-->
                  <article class="box-line box-line_sm">
                    <div class="box-line-inner">
                      <div class="box-line-icon icon mercury-icon-partners"></div>
                      <h5 class="box-line-title">Leading recruiting website in the US and Europe</h5>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Box Line  -->
                  <article class="box-line box-line_sm">
                    <div class="box-line-inner">
                      <div class="box-line-icon icon mercury-icon-chat"></div>
                      <h5 class="box-line-title">24\7 Dedicated and free Support</h5>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Box Line-->
                  <article class="box-line box-line_sm">
                    <div class="box-line-inner">
                      <div class="box-line-icon icon mercury-icon-target"></div>
                      <h5 class="box-line-title">Only relevant and verified vacancies </h5>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular Categories-->
      <section class="section section-md bg-default text-center">
        <div class="container container-fullwidth">
          <h3>{{ __(('Popular Categories')) }}</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-carousel-stretch" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="6" data-dots="true" data-nav="false" data-stage-padding="1" data-loop="false" data-margin="26" data-md-margin="20" data-lg-margin="26" data-autoplay="false" data-autoplay-timeout="3500" data-mouse-drag="false"> 
               
               @foreach($category as $categorys)
               <div class="container">
             <a class="box-creative" href="#">
              <div class="box-creative-inner">
                <div class="icon box-creative-icon mercury-icon-tag"></div>
                <p class="box-creative-title">{{$categorys->name}}</p>
                <p>1215 {{ __(('open positions')) }}</p>
              </div>
              <div class="box-creative-dummy"></div></a></div>
              @endforeach
        </div>
      </section>
      <!-- Recent Jobs-->
   <!--    <section class="section section-md bg-gray-100">
        <div class="container">
          <div class="row row-40">
            <div class="col-12 text-center">
              <h3>Recent Jobs</h3>
            </div>
            <div class="col-12">
              <div class="table-job-offers-outer">
                <table class="table-job-offers table-responsive">
                  <tr>
                    <td class="table-job-offers-date"><span>1 hour ago</span></td>
                    <td class="table-job-offers-main">
                       <article class="company-light">
                        <figure class="company-light-figure"><img class="company-light-image" src="{{asset('front_css/images/company-1-45x45.png')}}" alt="" width="45" height="45"/>
                        </figure>
                        <div class="company-light-main">
                          <h5 class="company-light-title"><a href="job-details.html">Senior UX Designer</a></h5>
                          <p class="text-color-default">StarArt</p>
                        </div>
                      </article>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>$25–$35 \ hour</span></div>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span>New York, NY, USA</span></div>
                    </td>
                    <td class="table-job-offers-badge"><span class="badge">Full Time</span></td>
                  </tr>
                  <tr>
                    <td class="table-job-offers-date"><span>1 day ago</span></td>
                    <td class="table-job-offers-main">
                       <article class="company-light">
                        <figure class="company-light-figure"><img class="company-light-image" src="{{asset('front_css/images/company-2-38x49.png')}}" alt="" width="38" height="49"/>
                        </figure>
                        <div class="company-light-main">
                          <h5 class="company-light-title"><a href="job-details.html">Marketing Director</a></h5>
                          <p class="text-color-default">UpBook</p>
                        </div>
                      </article>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>$45–$53 \ hour</span></div>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span>Saint-Etienne, France</span></div>
                    </td>
                    <td class="table-job-offers-badge"><span class="badge badge-secondary">Part Time</span></td>
                  </tr>
                  <tr>
                    <td class="table-job-offers-date"><span>1 day ago</span></td>
                    <td class="table-job-offers-main">
                       <article class="company-light">
                        <figure class="company-light-figure"><img class="company-light-image" src="{{asset('front_css/images/company-3-46x52.png')}}" alt="" width="46" height="52"/>
                        </figure>
                        <div class="company-light-main">
                          <h5 class="company-light-title"><a href="job-details.html">Front End Developer</a></h5>
                          <p class="text-color-default">MediaLab</p>
                        </div>
                      </article>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>$25–$43 \ hour</span></div>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span>Derry, United Kingdom</span></div>
                    </td>
                    <td class="table-job-offers-badge"><span class="badge badge-tertiary">Freelance</span></td>
                  </tr>
                  <tr>
                    <td class="table-job-offers-date"><span>1 day ago</span></td>
                    <td class="table-job-offers-main">
                       <article class="company-light">
                        <figure class="company-light-figure"><img class="company-light-image" src="{{asset('front_css/images/company-4-50x49.png')}}" alt="" width="50" height="49"/>
                        </figure>
                        <div class="company-light-main">
                          <h5 class="company-light-title"><a href="job-details.html">Social Media Executive</a></h5>
                          <p class="text-color-default">Creator</p>
                        </div>
                      </article>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>$15–$43 \ hour</span></div>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span>Los Angeles, CA, USA</span></div>
                    </td>
                    <td class="table-job-offers-badge"><span class="badge">Full Time</span></td>
                  </tr>
                  <tr>
                    <td class="table-job-offers-date"><span>1 day ago</span></td>
                    <td class="table-job-offers-main">
                       <article class="company-light">
                        <figure class="company-light-figure"><img class="company-light-image" src="{{asset('front_css/images/company-5-48x44.png')}}" alt="" width="48" height="44"/>
                        </figure>
                        <div class="company-light-main">
                          <h5 class="company-light-title"><a href="job-details.html">Restaurant Dishwasher</a></h5>
                          <p class="text-color-default">Camping</p>
                        </div>
                      </article>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>$10–$20 \ hour</span></div>
                    </td>
                    <td class="table-job-offers-meta">
                      <div class="object-inline"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span>Stockholm, Sweden</span></div>
                    </td>
                    <td class="table-job-offers-badge"><span class="badge badge-secondary">Part Time</span></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-12 text-center"><a class="button button-lg button-primary-outline" href="job-listing-full.html">Show More Jobs</a></div>
          </div>
        </div>
      </section> -->
      
 
      <section class="parallax-container section-md bg-primary bg-overlay-1 text-center" data-parallax-img="{{asset('/front_css/images/parallax-2.jpg')}}">
        <div class="parallax-content">
          <div class="container container-fullwidth">
            <h3>{{ __(('Companies Helped')) }}</h3>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stretch" data-autoplay="true" data-autoplay-timeout="4000" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="6" data-dots="true" data-nav="false" data-stage-padding="2" data-loop="false" data-margin="30" data-mouse-drag="false">
                <a class="link-corporate" href="#">
                    <img src="{{asset('/front_css/images/brand-1-inverse-183x44.png')}}" alt="" width="183" height="44"/></a>
                    <a class="link-corporate" href="#">
                        <img src="{{asset('/front_css/images/brand-2-inverse-118x82.png')}}" alt="" width="118" height="82"/></a>
                        <a class="link-corporate" href="#">
                            <img src="{{asset('/front_css/images/brand-3-inverse-137x39.png')}}" alt="" width="137" height="39"/></a>
                            <a class="link-corporate" href="#">
                                <img src="{{asset('/front_css/images/brand-4-inverse-133x77.png')}}" alt="" width="133" height="77"/></a>
                                <a class="link-corporate" href="#">
                                    <img src="{{asset('/front_css/images/brand-5-inverse-153x30.png')}}" alt="" width="153" height="30"/></a>
                                    <a class="link-corporate" href="#">
                                        <img src="{{asset('/front_css/images/brand-6-inverse-90x68.png')}}" alt="" width="90" height="68"/></a>
                                    <a class="link-corporate" href="#">
                             <img src="{{asset('/front_css/images/brand-7-inverse-112x43.png')}}" alt="" width="112" height="43"/></a>
                         <a class="link-corporate" href="#">
                      <img src="{{asset('/front_css/images/brand-8-inverse-126x22.png')}}" alt="" width="126" height="22"/></a>
                    <a class="link-corporate" href="#">
                 <img src="{{asset('/front_css/images/brand-9-inverse-158x33.png')}}" alt="" width="158" height="33"/></a>
              <a class="link-corporate" href="#"><img src="{{asset('/front_css/images/brand-10-inverse-137x37.png')}}" alt="" width="137" height="37"/></a>
             <a class="link-corporate" href="#"><img src="{{asset('/front_css/images/brand-11-inverse-84x59.png')}}" alt="" width="84" height="59"/></a>
            <a class="link-corporate" href="#"><img src="{{asset('/front_css/images/brand-12-inverse-116x51.png')}}" alt="" width="116" height="51"/></a>
        </div>
          </div>
        </div>
      </section>
      <!-- Steps-->
   
 
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h3>{{ __(('Get JobsFactory App for Your Mobile')) }}</h3>
          <p class="offset-top-20px">
            <span style="max-width: 670px;">{{ __(('Searching for jobs has never been that easy. Now you can find job matched your career expectation, apply for jobs and receive feedback right on your mobile. Start your job search now!')) }}</span>
        </p>
          <div class="group">
            <a class="button button-primary button-fixed-size" href="#">
                <img src="{{asset('/front_css/images/google-play-download-138x35.png')}}" alt="" width="138" height="35"/></a>
                <a class="button button-primary button-fixed-size" href="#">
            <img src="{{asset('/front_css/images/google-play-download-138x35.png')}}" alt=""></a></div>
        </div>
      </section>
      <!-- Page Footer-->
      
    </div>

     @endsection