
  @extends('layouts.admin_layout')
   
 @section('content')
<link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/data-tables/css/dataTables.checkboxes.css')}}">

<div id="main">
  <div class="row">
  	<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
	   <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
 		<div class="container">
	   <div class="row">
	 <div class="col s10 m6 l6">
    <h5 class="breadcrumbs-title mt-0 mb-0"><span>Notification Management</span></h5>
  </div>
</div>

<section class="users-list-wrapper section">
  <div class="users-list-filter">
    <div class="card-panel">
      <div class="row">
        <form method="get" id="send_container_messge">
          <div class="col s12 m6 l2">
           <label for="users-list-verified">Country</label>
            <div class="input-field" >
              <select class="form-control" name="countrys"id="users-list-verified">
                <option value="">Any</option>
                 @foreach($countrysss as $countrys)
 					 <option value="{{$countrys->id}}" @if($request->countrys == $countrys->name) selected @endif >{{$countrys->name}}</option>
                 @endforeach
               </select>
            </div>
          </div>
          <div class="col s12 m6 l2">
            <label for="users-list-role">City</label>
            <div class="input-field"id="testing">
              <select class="form-control" name="citys" id="users-list-role">
                <option value="">Any</option>
                 @foreach($city as $citys)
                 	 <option value="{{$citys->id}}" @if($request->name == $citys->name) selected @endif >{{$citys->name}}</option>
                  @endforeach
               </select>
               <p id="error_p" style="color: red;display: block;">Select country first</p>
            </div>
          </div>
          <div class="col s12 m6 l2">
            <label for="users-list-status">Provider Category</label>
            <div class="input-field">
              <select class="form-control" id="users-list-status" name="Category">
                <option value="">Any</option>
                <option value="Assembling Service" @if($request->Category == "Assembling Service") selected @endif >Assembling Service</option>
                <option value="Painting Service" @if($request->Category == "Painting Service") selected @endif >Painting Service</option>
                <option value="Cleaning services" @if($request->Category == "Cleaning services") selected @endif >Cleaning services</option>
                <option value="Cleaning services"@if($request->Category == "Transportation Service") selected @endif >Transportation Service</option>
              </select>
            </div>
          </div>
          <div class="col s12 m6 l2">
            <label for="users-list-status">Gender</label>
            <div class="input-field">
              <select class="form-control" name="gender" id="users-list-status">
                <option value="">Any</option>
                <option value="Male" @if($request->gender == "Male")  selected @endif >Male</option>
                <option value="Female" @if($request->gender == "Female")  selected @endif>Female</option>
                 
              </select>
            </div>
          </div>
          <div class="col s12 m6 l3 display-flex align-items-center show-btn">
            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
              	<th></th>
              	<th></th>
                <th>Name</th>
                <th>Country</th>
                <th>City</th>
                <th>Service Provider</th>
                <th>Is Active</th>
                <th>Account type</th>
                 
                <th></th>
                <th></th>
                	
              </tr>
             <tbody id="abccc">

            	 
 							
 			 @foreach($all_users as $all_users)
 	
             	
 			  <tr id="abc_{{$all_users->id}}">
              	
                <td></td>
                <td></td>
                <td>{{$all_users->name}}</td>
                <td>{{$all_users->country}}
                </td>
                <td>{{$all_users->city}}</td>
                <td>{{$all_users->category}}</td>
                <td>{{$all_users->is_active}}</td>
                <td>{{$all_users->account_type}}</td>
                <td> 
                </td>
                <td></td>
              </tr> 

             
               
              @endforeach  
                  </thead>
            </tbody>
          </table>

        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
</section>
 <div id="app">ssss</div>

</div>
	</div>
		</div>
			</div>


	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 


	  <script type="text/javascript">
	  
 $('#send_container_messge').submit(function(e){
  
 e.preventDefault();
  
 var form = new FormData(document.getElementById('send_container_messge'));
var token = $('#token').val();

form.append('_token', token);
  $.ajax({
    url: '/Admin/filter_user',
    type: 'post',
     data: form,             
        cache: false,
        contentType: false, //must, tell jQuery not to process the data
        processData: false,
        
    success: function(response,likes_count){
      	
      	 $("#abccc").empty();
				
		var dataa = response.likes_count;
 		dataa.forEach(function(collection){

 	 var random  = Math.random();

 	var data = '<tr><td></td><td>'+collection.name+'</td><td>'+collection.country+'</td><td> city</td><td>category</td><td>is_active</td><td>account_type</td><td><span class="chip green lighten-5"><span class="green-text">Active</span></span></td></tr><button class="btn btn-primary">Send Notification</button>';

 		//console.log(collection);
    	$('#abccc').append(data);
 
      			})
 	
 		return true; 
        }
  });

 
  });
	  </script>

	  <script type="text/javascript">
	  

	$('#users-list-verified').change(function(e) {
	   
  	 $.ajaxSetup({
        
        headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
 	var data = "";
    $.ajax({
        type:"get",
        url :"/Admin/Notification/",
        data:"selectbox1_selectedvalue="+$(this).val(),
        async: false,
	    success : function(response) {

	    	document.getElementById('error_p').style.display = "none";
	    	
        var append_var = response.city_filtered;

        append_var.forEach(function(collections){
        var random  = Math.random();
 		var edito_clas = $( "#testing" ).find( "ul" );
 		edito_clas.empty(edito_clas);
 		$('#users-list-role').empty();
 		var li = '<li id="select-options-'+random+'" tabindex="0"><span>'+collections.name+'</span></li>';
        edito_clas.append(li);
        var make_options = '<option value="'+collections.id+'">'+collections.name+'</option>';
        $('#users-list-role').append(make_options);
        console.log(edito_clas);

		});
		
		return true; 
        
        },
    	
    	error: function() {
        
        alert('Error occured while fetching city of '+$(this).val()+' ');
        
        }
    });
     
         
});
	  </script>

	  <script src="{{asset('/Admin_css/vendors/data-tables/js/datatables.checkboxes.min.js')}}"></script>
   
@endsection



