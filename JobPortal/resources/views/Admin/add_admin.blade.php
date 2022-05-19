   
 
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Make Admin</span></h5>
                 
              </div>
 
          </div>
 
           <div class="row">
              <div class="col s12">
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
                      <form class="formValidate" id="formValidate" method="post" action="/Admin/save_admin">
                        @csrf
                        <div class="row">
                          <div class="input-field col s12">
                            <label for="uname">Name*</label>
                            <input id="uname" name="name" type="text" data-error=".errorTxt1">
                            <small class="errorTxt1"></small>
                          </div>
                          <div class="input-field col s12">
                            <label for="cemail">E-Mail *</label>
                            <input id="cemail" type="email" name="email" data-error=".errorTxt2">
                            <small class="errorTxt2"></small>
                          </div>
                          <div class="input-field col s12">
                            <label for="password">Password *</label>
                            <input id="password" type="password" name="password" data-error=".errorTxt3">
                            <small class="errorTxt3"></small>
                          </div>
                          <div class="input-field col s12">
                            <label for="cpassword">Confirm Password *</label>
                            <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt4">
                            <small class="errorTxt4"></small>
                          </div>
 
                            
                          <div class="col s12">
                            <label for="tnc_select">Warning*</label>
                            <p>
                              <label>
                                <input type="checkbox" id="tnc_select" />
                                <span>After submitting the form this user will be able to sign in as a admin</span>
                              </label>
                            </p>
                            <div class="input-field">
                              <small class="errorTxt6"></small>
                            </div>
                          </div>
                          <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                   
              </div>
            </div>
          </div>
        </div>
      </div> 
</div>
          </div>
        </div>
      </div> 
      @endsection