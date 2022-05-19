 
@extends('layouts.admin_layout')
@section('content')


	<div id="main">
      <div class="row">

   
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
                @if (session('msgg'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('msgg') }}
            </div>
          </div>
            @endif
           
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Edit Service</span></h5>
            </div>
          </div>

      </div>
  </div>
</div>

<div id="card-panel-type" class="section">
 <div class="row">
  
 <div class="col s12 m6 l4 card-width">
   <div class="card-panel border-radius-6 mt-10 card-animation-1">
    <h5>Edit Service</h5>
     <form method="post" action="/Admin/edit_service/{{$service->id}}">
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