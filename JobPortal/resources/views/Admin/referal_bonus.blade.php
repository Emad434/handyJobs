 
@extends('layouts.admin_layout')
@section('content')

@php
$service = App\Services::where('is_active',1)->latest()->first();
@endphp
	<div id="main">
      <div class="row">

   
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
                @if (session('status'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('status') }}
            </div>
          </div>
            @endif
            @if (session('statuss'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('statuss') }}
            </div>
          </div>
            @endif
             @if (session('statusss'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('statusss') }}
            </div>
          </div>
            @endif
              @if (session('statussss'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('statussss') }}
            </div>
          </div>
            @endif
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>App Setting</span></h5>
            </div>
          </div>

      </div>
  </div>
</div>



<div id="card-panel-type" class="section">
 <div class="row">
  <div class="col s12 m6 l4 card-width">
   <div class="card-panel border-radius-6 mt-10 card-animation-1">
    <h5>Type Refferal Amount</h5>
     <form method="post" action="/Admin/app_setting?setting=set_refer_amount">
      @csrf
      <input type="number" value="{{$amount->amount}}" class="form-control" name="amount">
       <button class="btn btn-primary">Save</button>
    </form>
  </div>
 </div>           



  <div class="col s12 m6 l4 card-width">
   <div class="card-panel border-radius-6 mt-10 card-animation-1">
    <h5>Type Bid Amount</h5>
     <form method="post" action="/Admin/app_setting?setting=set_bid_amount">
      @csrf
      <input type="number" value="{{$amount->bid_amount}}" class="form-control" name="bid_amount">
       <button class="btn btn-primary">Save</button>
    </form>
  </div>
 </div>
 @php
 $app_setting= App\Amount::first();
 
 @endphp
 <div class="col s12 m6 l4 card-width">
   <div class="card-panel border-radius-6 mt-10 card-animation-1">
    <h5>Select Currency</h5>
     <form method="post" action="/Admin/app_setting?setting=change_currency">
      @csrf
      <select id="formGroupExampleInput2" name="type" class="custom-select" 
            style="width:150px;">
               <option value="Dollar" @if($app_setting->currency_type == "Dollar") selected @endif>Dollar</option>
                <option value="Danish krone " @if($app_setting->currency_type == "Danish krone") selected @endif>Danish krone</option> 
               <option value="Singapore dollar" @if($app_setting->currency_type == "Singapore dollar") selected @endif>Singapore dollar</option>
             </select> 
            
       <button class="btn btn-primary">Save</button>
    </form>
  </div>
 </div>
 
 
   <div class="col s12 m6 l4 card-width">
   <div class="card-panel border-radius-6 mt-10 card-animation-1">
    <h5>Change Site Logo</h5>
    <br>
     <form method="post" enctype="multipart/form-data" action="/Admin/app_setting?setting=change_site_logo">
      @csrf
      <input type="file"  class="form-control" name="lofo_file"><br>
      <img src="{{asset('/JobPortal/public/site_logo')}}/{{$app_setting->site_logo}}"style="width:150px;">
      <p style="color:red;">*Only JPG,JPEG,PNG file supported</p>
      
       <button class="btn btn-primary">Save</button>
    </form>
  </div>
 </div>
 
 
  <div class="col s12 m6 l4 card-width">
   <div class="card-panel border-radius-6 mt-10 card-animation-1">
    <h5>Enable/Disabled Social Login</h5>
     <form method="post" action="/Admin/app_setting?setting=socail_login_setting">
      @csrf
      @if($app_setting->social_is_active == "0")
      <button class="btn btn-succes">Enable</button>
      <input type="text" name="enable" value="1" hidden>
      @else
         <button class="btn btn-error">Disable</button>
         <input type="text" name="enable" value="0" hidden>
         @endif
   
    </form>
  </div>
 </div>
 
 <div class="col s12 m6 l4 card-width">
   <div class="card-panel border-radius-6 mt-10 card-animation-1">
    <h5>Add Service</h5>
     <form method="post" action="/Admin/app_setting?setting=add_service">
      @csrf
      <input type="text" value="{{$service->name}}" class="form-control" name="name">
       <button class="btn btn-primary">Save</button>
    </form>
  </div>
 </div>
 
</div>
</div>

 
</div>
</div>

</div>



@endsection