
  @extends('layouts.admin_layout')

@section('content')

 
<div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Gig Approval</span></h5>
                 
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

<section class="invoice-list-wrapper section">


 <div class="responsive-table">
    <table class="table invoice-data-table white border-radius-4 pt-1">
      <thead>
        <tr>
          

          <th>Provider Name</th>
          <th>Category</th>
          <th>Region</th>
          <th>Title</th>
          <th>Thumbnail</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
          @php
        $gig_count = App\Gig::where('active_by_admin','0')->count();
         $gig = App\Gig::where('active_by_admin','0')->get();
         @endphp
        @if($gig_count > 0)
        @foreach($gig as $gigs)
            
            @php
             $provider_details = App\User::where('id',$gigs->user_id)->first();
          
              $category = App\Services::where('id',$gigs->service_category)->first();
              
            @endphp 
        
        <tr>
          
           <td>{{$provider_details->name}} </td>
          <td><span class="invoice-amount">{{$category->name}}</span></td>
          <td><small>{{substr($gigs->region ,0 , 30)}}</small></td>
           <td><small>{{substr($gigs->title ,0 , 30)}}</small></td>
          <td><img src="{{asset('JobPortal/public/gig_thumbnail')}}/{{$gigs->thumbnail}}" style="width:50px;"></td>
         <!-- <td>-->
         <!--   <span class="invoice-amount">{{!! substr($gigs->description ,0 , 100) !!}}</span></a>-->
         <!--    <span class="bullet blue"></span>
         <!--   <small>Car</small> -->
         <!-- </td>-->
           <td>
            <div class="invoice-action" >
              <a href="/Admin/Gig-Details/{{$gigs->id}}" class="btn btn-primary">
                Details
              </a>
            </div>
          </td>
        </tr>
        @endforeach
             @else
             
        <tr>
          <td>Nothing for approval</td>
         </tr>
         @endif
             
      </tbody>
    </table>
  </div>
</section>
    </div>
       </div>
  </div>
</div>
  </div>









@endsection