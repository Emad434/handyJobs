 @extends('client_header.client_header')
  @section('title', 'Gig Details')  
   
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>
       
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" href="{{asset('/front_css/images/favicon.icon')}}" type="image/x-icon">
     
 
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('/front_css/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/style.css')}}">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" href="{{asset('/chatting_css/webfonts/inter/inter.css')}}"> 
    <link rel="stylesheet" href="{{asset('/chatting_css/css/app.min.css')}}">
    
 @section('content')
 
 </header>
 
 @php
   $gig_region = App\Locations::where('id',$my_gig->region)->first();
    $author = App\User::where('id',$my_gig->user_id)->first();
     $rating = App\Reviews::where('provider_id',$my_gig->user_details->id)->get();
     $rating_count = App\Reviews::where('provider_id',$my_gig->user_details->id)->count();
     $review_avg = $rating->avg('stars');
     $currency = App\Amount::first();
    
     $contract = App\Contract::where('gig',$my_gig->id)->first();
  @endphp
 
     <!-- Page Header-->
       <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">{{$my_gig->title}}</h3>
            <i class="icon icon-1 mdi mdi-tag"></i> {{ $my_gig->category_details->name }}
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="/Client/Home">Home</a></li>
              <li class="active">{{$my_gig->title}}</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="layout-details">
                <article class="company-light company-light_1">
                  <figure class="company-light-logo"><img class="company-light-logo-image" src="{{asset('JobPortal/public/gig_thumbnail')}}/{{$my_gig->thumbnail}}" alt="" width="45" height="45">
                  </figure>
                  <div class="company-light-main">
                    <h5 class="company-light-title">{{$my_gig->title}}</h5>
                    <div class="company-light-info">
                      <div class="row row-15 row-bordered">
                        <div class="col-sm-6">
                          <ul class="list list-xs">
                            <li>
                              <p class="object-inline object-inline_sm"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span>{{$my_gig->region}}</span></p>
                            </li>
                            <li>
                              <p class="object-inline object-inline_sm"><span class="icon icon-default text-primary mdi mdi-clock"></span><span>Post Date: {{$my_gig->created_at}}</span></p>
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-6">
                          <ul class="list list-xs">
                            <li>
                              <p class="object-inline object-inline_sm"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>Minimum Rate/h(<img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$my_gig->rate}})</span></p>
                            </li>
                            <li>
                              <p class="object-inline object-inline_sm"><span class="icon icon-1 text-primary mdi mdi-clock"></span><span><a href="#">{{$my_gig->total_time_dureation}}h</a></span></p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="row row-30">
                <div class="col-md-12">
                   {!! $my_gig->description !!}
                </div>
               </div>
              
             
              <div class="block offset-top-2">
                <h4>Gig Rating</h4>
                <table class="table-job-listing table-responsive">
                  <tbody>
                  
                      <tr>
                    <td class="table-job-listing-main">
                      <!-- Company Minimal-->
                      <article class="company-minimal">
                        <figure class="company-minimal-figure"><img class="company-minimal-image" src="{{asset('/JobPortal/public/gig_thumbnail')}}/{{$my_gig->thumbnail}}" alt="" width="38" height="49">
                        </figure>
                        <div class="company-minimal-main">
                          <h5 class="company-minimal-name"></h5>
                          <p>{{$my_gig->title}}</p>
                          <p>{{$my_gig->gig_rating}}</p>
                        </div>
                      </article>
                    </td>
                    <td class="table-job-listing-badge">
                        <div class="col-4">
                        <div class="pull-right reply">
                            <span id="dataReadonlyReview" data-rating-stars="{{$my_gig->gig_rating}}" data-rating-readonly="true">-</span>
                        </div>
                    </div>
                  </td>
                  </tr>
               
                </tbody></table>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row row-30 row-lg-50">
                <div class="col-md-6 col-lg-12">
                   
                  <form class="rd-mailform form-corporate form-spacing-small form-corporate_sm" method="post" action="/Client/send_message/{{$my_gig->user_id}}" novalidate="novalidate">
                    <h4>Contact Privately</h4>
                     @csrf
                    <div class="form-wrap">
                      <label class="form-label rd-input-label" for="contact-message">Message</label>
                      <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                    </div>
                    <div class="form-wrap">
                      <button class="button button-block button-primary" style="border-radius:40px;" type="submit">Send Message</button>
                    </div>
                  </form>
                </div>
                
                <div class="col-md-6 col-lg-12">
                                <div id="Map"style="height:500px;"></div>
 
                 <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                   </ul>
                  </div>
                  <article class="message-bubble">
                    <div class="message-bubble-inner">
                      <div class="icon mdi mdi-map-marker icon-sm text-primary"></div>
                      <div class="message-bubble-main">
                        <p>116 Holland Park, Holland Park, W11 4UA</p>
                        <p>Email:&nbsp;<a href="mailto:#">info@demolink.org</a></p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    </div>







  <script src="https://www.openlayers.org/api/OpenLayers.js"></script>

   <script type="text/javascript">
    var lat  = '{{$my_gig->lat}}';    
    var lon  = '{{$my_gig->lon}}' ;
    var zoom           = 18;

    var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
    var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
    var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);

    map = new OpenLayers.Map("Map");
    var mapnik         = new OpenLayers.Layer.OSM();
    map.addLayer(mapnik);

    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(position));

    map.setCenter(position, zoom);
   </script>





 
  
 @endsection