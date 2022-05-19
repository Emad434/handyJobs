@extends('layouts.admin_layout')
 @section('content')
 <div id="main">
  <div class="row">
  	<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
	   <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
 		<div class="container">
	   <div class="row">
	 <div class="col s10 m6 l6">
        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Make Tags</span></h5>
      </div>
    </div>
       @if (session('status'))
          <div class="card-alert card gradient-45deg-purple-deep-orange">
            <div class="card-content white-text">
              <i class="material-icons">notifications</i>
          {{ session('status') }}
            </div>
          </div>
            @endif
 
 <div id="validations" class="card card-tabs">
 <div class="card-content">
<div id="view-validations">
 <form class="formValidate" id="formValidate" method="post" action="/Admin/save_tag">
 @csrf
 <div class="row">
  <div class="input-field col s12">
   <label for="uname">Name*</label>
  <input id="uname" name="name" type="text" data-error=".errorTxt1">
  <small class="errorTxt1"></small>
  <button class="btn btn-primary">Save</button>
</div>
 
 </div>
 </div>
 </div>
 </div></div>
 </div>
 @endsection