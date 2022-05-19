 
  @extends('layouts.admin_layout')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@section('content')
 
 
  @php
   $gig_region = App\Locations::where('id',$gig->region)->first();
    $author = App\User::where('id',$gig->user_id)->first();
     $rating = App\Reviews::where('provider_id',$gig->user_details->id)->get();
     $rating_count = App\Reviews::where('provider_id',$gig->user_details->id)->count();
     $review_avg = $rating->avg('stars');
     $currency = App\Amount::first();
    
     $contract = App\Contract::where('gig',$gig->id)->first();
  @endphp
<div id="main">
      <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Gig Details</span></h5>
                 
              </div>
              
                 @if (session('message'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('message') }}
            </div>
          </div>
            @endif
          </div>
   
          <section class="section section-md">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="layout-details">
                <article class="company-light company-light_1">
                   <label><h5><strong>Images:</strong></h5></label>
                  <figure class="company-light-logo"><img class="company-light-logo-image" src="{{asset('JobPortal/public/gig_thumbnail')}}/{{$gig->thumbnail}}" alt="" width="400" height="200">
                  </figure>
                  <div class="company-light-main">
                    <h5 class="company-light-title">Title : </h5>{{$gig->title}}
                    <div class="company-light-info">
                      <div class="row row-15 row-bordered">
                        <div class="col-sm-6">
                          <ul class="list list-xs">
                            <li>
                                <br>
                                <br>
                              <p class="object-inline object-inline_sm"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span><h5>Region : </h5>{{$gig->region}}</span></p>
                             
                            </li>
                            <li>
                                <div class="layout-1">
                                  <h5>Author</h5>
                         <div class="layout-1-inner">
                             <p><img src="{{asset('/JobPortal/public/profile_images')}}/{{$author->profile_image}}" class="img-thumbnail" style="width:50px;"/> {{$author->name}}</p>
                
                             </div>
                             </div>
                              <p class="object-inline object-inline_sm"><span class="icon icon-default text-primary mdi mdi-clock"></span><span>Post Date: {{$gig->created_at}}</span></p>
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-6">
                          <ul class="list list-xs">
                            <li>
                                <br>
                              <p class="object-inline object-inline_sm"><span class="icon icon-sm text-primary mdi mdi-cash " style="margin-right:-350px;"></span><span>Minimum Rate/h(<img src="{{$currency->currency_img}}" style="width:10px;"/>{{$gig->rate}})</span></p>
                            </li>
                            <li>
                              <p class="object-inline object-inline_sm"><span class="icon icon-1 text-primary mdi mdi-clock"></span><span><a href="#">{{$gig->total_time_dureation}}h</a></span></p>
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
                 <h5> Description : </h5>{!! $gig->description !!}
                </div>
               </div>
                  
                  <br>
                  
                       <div class="col s2">
                        @if($gig->active_by_admin == 0)
                        <a href="/Admin/gig_active_by_admin/{{$gig->id}}" class="mb-6 btn waves-effect waves-light gradient-45deg-green-teal">Approve</a> 
                        @endif
                        @if($gig->active_by_admin == 1)
                        <a href="#" class="btn btn-danger">Approved</a> 
                        @endif
                        
                      </div>
                      @if($gig->active_by_admin == 2)
                       
                         <div class="alert alert-danger row" role="alert">
                            The Gig Has been Suspended
                             </div>
                             <br>
                        <a href="/Admin/gig_active_by_admin/{{$gig->id}}" class="mb-6 btn waves-effect waves-light gradient-45deg-green-teal">Approve</a>      
                         
                        @endif
             
                <br>
                <br>
            </div>
            
            </div>
          </div>
        </div>
        
      </section>
      </div>
      </div>
  </div>
</div>


@endsection