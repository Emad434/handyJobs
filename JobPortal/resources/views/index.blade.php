
  @extends('layouts.app')
   
 @section('content')
 <style>
     .card-wrapper {
  margin: 5% 0;
}
.img {
    display: block;
}

@media (max-width: 650px) {
  .bg-white {
    display: none;
  }
}

/* You can adjust the image size by increasing/decreasing the width, height */
.custom-circle-image {
  width: 8vw; /* note i used vw not px for better responsive */
  height: 8vw;
}

.custom-circle-image img {
  object-fit: cover;
}

.card-title {
  letter-spacing: 1.1px;
}

.card-text {
  font-family: MerriweatherRegular;
  font-size: 22px;
  line-height: initial;
}

 </style>


  <section class="section section-md bg-default text-center">
        <div class="container">
          <h3>It's Easy to Get Work Done on Our Platfrom</h3>
          <!--<p class="text-spacing-05">A place where leading employers are already looking for your talent and experience.</p>-->
          <div class="container">
    <div class="row">
     <div class="col-sm-3 card-wrapper">
        
          <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image shadow p-3 mb-5 bg-white rounded">
            <img class="w-100 h-100" src="{{asset('/JobPortal/paper.jpg')}}"  alt="">
              
        </div>
        <div>
              <h4>Post A Job</h4>
              <p >Create your free job posting and start receiving Quotes within hours.</p>
            </div>
      </div>
      

      <div class="col-sm-3 card-wrapper">
        
          <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image shadow p-3 mb-5 bg-white rounded">
            <img class="w-100 h-100 " src="{{asset('/JobPortal/eniginer2.png')}}" alt="">
              
        </div>
        <div>
              <h4>Hire Talent</h4>
              <p>Compare the Quotes you receive and hire the best talent professionals for the job.</p>
            </div>
      </div>

    <div class="col-sm-3 card-wrapper">
        
          <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image shadow p-3 mb-5 bg-white rounded">
            <img class="w-100 h-100 " src="{{asset('/JobPortal/tool.jpg')}}" alt="">
              
        </div>
        <div>
              <h4>Get Work Done</h4>
              <p>Decide on how and when payments will be made and use WorkRooms to collaborate, communicate and get work easier.</p>
            </div>
      </div>
      
      <div class="col-sm-3 card-wrapper">
        
          <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image shadow p-3 mb-5 bg-white rounded">
            <img class="w-100 h-100 " src="{{asset('/JobPortal/payment.png')}}" alt="">
              
        </div>
        <div>
              <h4>Make Secure Payments</h4>
              <p >Choose from multiple payment methods with SafePay payment protection.</p>
            </div>
      </div>

    </div>
    <center><a href="#"><button type="button" class="button button-lg button-primary" style="border-radius:10px;">See How It Work</button></a></center>
  </div>
  
          </div>
          
        
      </section>
      <!-- Popular Categories-->
      <section class="section section-md bg-default text-center">
        <div class="container container-fullwidth">
          <h3>Popular Categories</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-carousel-stretch" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="6" data-dots="true" data-nav="false" data-stage-padding="1" data-loop="false" data-margin="26" data-md-margin="20" data-lg-margin="26" data-autoplay="false" data-autoplay-timeout="3500" data-mouse-drag="false">

            @php
            $category = App\Services::where('is_active',1)->get();
            $category_count = App\Services::where('is_active',1)->count();
            @endphp

            @if($category_count > 0)
            @foreach($category as $categorys)

            @php
            $jobs = App\Gig::where('service_category',$categorys->id)->count();
            @endphp

            <a class="box-creative" href="#">
              <div class="box-creative-inner">
                <div class="icon box-creative-icon mercury-icon-calc"></div>
                <p class="box-creative-title">{{$categorys->name}}</p>
                <p>{{$jobs}} open positions</p>
              </div>
              <div class="box-creative-dummy"></div>
            </a>
            @endforeach
            @endif
 
        </div>
      </section>
 
      <!-- Success Stories-->
      <section class="parallax-container section-md bg-primary bg-overlay-1 text-center" data-parallax-img="{{asset('/front_css/images/bg-image-7.jpg')}}">
        <div class="parallax-content">
          <div class="container">
            <h3>Success Stories </h3>
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-md-items="2" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-autoplay="true" data-mouse-drag="false">
              <blockquote class="quote-mary">
                <div class="quote-mary-main">
                  <svg class="quote-mary-mark" version="1.1" x="0px" y="0px" viewbox="0 0 36 28" width="38" height="28">
                    <path d="M13,0l-2.4,13.3H15V28H0V13.1L4,0H13z M34,0l-2.4,13.3H36V28H20.9V13.1L25,0H34z"></path>
                  </svg>
                  <div class="quote-mary-text">
                    <p>If I didn’t find JobsFactory I’m pretty sure I’d be nowhere, they helped me find a job in less than 2 days and the job is amazing. Thank you!</p>
                  </div>
                </div>
                <div class="quote-mary-meta"><img class="quote-mary-avatar" src="{{asset('/front_css/images/user-2-73x73.jpg')}}" alt="" width="73" height="73"/>
                  <div class="quote-mary-info">
                    <cite class="quote-mary-cite heading-5">Karen Sanders</cite>
                    <p class="quote-mary-subtitle">Marketing Director</p>
                  </div>
                </div>
              </blockquote>
              <blockquote class="quote-mary">
                <div class="quote-mary-main">
                  <svg class="quote-mary-mark" version="1.1" x="0px" y="0px" viewbox="0 0 36 28" width="38" height="28">
                    <path d="M13,0l-2.4,13.3H15V28H0V13.1L4,0H13z M34,0l-2.4,13.3H36V28H20.9V13.1L25,0H34z"></path>
                  </svg>
                  <div class="quote-mary-text">
                    <p>Within a couple of days after posting a CV, I had possible employers contacting me. After several interviews, I decided to accept a position located nearby.</p>
                  </div>
                </div>
                <div class="quote-mary-meta"><img class="quote-mary-avatar" src="{{asset('/front_css/images/user-1-73x73.jpg')}}" alt="" width="73" height="73"/>
                  <div class="quote-mary-info">
                    <cite class="quote-mary-cite heading-5">Walter Williams</cite>
                    <p class="quote-mary-subtitle">HR Managers</p>
                  </div>
                </div>
              </blockquote>
              <blockquote class="quote-mary">
                <div class="quote-mary-main">
                  <svg class="quote-mary-mark" version="1.1" x="0px" y="0px" viewbox="0 0 36 28" width="38" height="28">
                    <path d="M13,0l-2.4,13.3H15V28H0V13.1L4,0H13z M34,0l-2.4,13.3H36V28H20.9V13.1L25,0H34z"></path>
                  </svg>
                  <div class="quote-mary-text">
                    <p>I found a job as a Web Developer and applied through my iPhone with the JobsFactory website! It’s very easy to search for jobs and apply here!</p>
                  </div>
                </div>
                <div class="quote-mary-meta"><img class="quote-mary-avatar" src="{{asset('/front_css/images/user-4-73x73.jpg')}}" alt="" width="73" height="73"/>
                  <div class="quote-mary-info">
                    <cite class="quote-mary-cite heading-5">Julia Smith</cite>
                    <p class="quote-mary-subtitle">Web Developer</p>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
      <!-- Pricing-->
      <br>
      <br>
      <br>
      
      
      <section class="parallax-container section-md bg-primary bg-overlay-1 text-center" data-parallax-img="{{asset('/front_css/images/parallax-2.jpg')}}">
        <div class="parallax-content">
          <div class="container container-fullwidth">
            <h3>Companies We've Helped</h3>
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
          <h3>Just 3 Easy Steps to New Capabilities</h3>
          <ul class="list-linked">
            <li class="ll-item">
              <div class="icon ll-item-icon thin-icon-email-search">
                <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
                  <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
                </svg>
              </div>
              <div class="ll-item-main">
                <h5 class="ll-item-title"><a href="#">Browse Jobs</a></h5>
                <p>Easy search by category</p>
              </div>
            </li>
            <li class="ll-item">
              <div class="icon ll-item-icon mercury-icon-target-2">
                <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
                  <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
                </svg>
              </div>
              <div class="ll-item-main">
                <h5 class="ll-item-title"><a href="#">Find Your Vacancy</a></h5>
                <p>Choose a suitable job</p>
              </div>
            </li>
            <li class="ll-item">
              <div class="icon ll-item-icon ll-item-icon-sm mercury-icon-e-mail-o">
                <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
                  <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
                </svg>
              </div>
              <div class="ll-item-main">
                <h5 class="ll-item-title"><a href="#">Submit Resume</a></h5>
                <p>Get a personal job offer</p>
              </div>
            </li>
            <li class="ll-item">
              <div class="icon ll-item-icon mercury-icon-touch">
                <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
                  <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
                </svg>
              </div>
              <div class="ll-item-main"><a class="button button-sm button-primary-outline" href="/register">Start Now</a></div>
            </li>
          </ul>
        </div>
      </section>
      
      <!-- CTA-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h3>Get JobsFactory App for Your Mobile</h3>
          <p class="offset-top-20px">
            <span style="max-width: 670px;">Searching for jobs has never been that easy. Now you can find job matched your career expectation, apply for jobs and receive feedback right on your mobile. Start your job search now!</span>
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