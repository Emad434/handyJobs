
  @extends('layouts.admin_layout')
   
 @section('content')
<link rel="stylesheet" type="text/css" href="{{asset('Admin_css/vendors/data-tables/css/dataTables.checkboxes.css')}}">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 

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
 @php
 $service = App\Services::where('is_active',1)->get();
 @endphp
<section class="users-list-wrapper section">
  <div class="users-list-filter">
    <div class="card-panel">
      <div class="row">
        <form method="get" action="/Admin/Notification">
          <div class="col s12 m6 l2">
           <label for="users-list-verified">Country</label>
            <div class="input-field" >
              <select class="form-control" name="countrys"id="users-list-verified" >
                <option value="">Any</option>
                 @foreach($countrysss as $countrys)
 					 <option value="{{$countrys->id}}" @if($request->countrys == $countrys->id) selected @endif >{{$countrys->name}}</option>
                 @endforeach
               </select>
            </div>
          </div>
          <div class="col s12 m6 l2">
            <label for="users-list-role">City</label>
            <div class="input-field"id="testing">
              <select class="form-control" name="citys" id="users-lists">
                <option value="">Any</option>
                 @foreach($city as $citys)
                 
                 	 <option value="{{$citys->id}}" @if($request->citys == $citys->id) selected @endif >{{$citys->name}}</option>
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
                @foreach($service as $services)
                <option value="{{$services->id}}" @if($services->Category == $services->name) selected @endif >{{$services->name}}</option>
               @endforeach
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
        <br>
     
      </div>
      
    </div>
  </div>
  
  <section class="users-list-wrapper section" id="noti_form" style="display:none;">
  <div class="users-list-filter">
    <div class="card-panel">
     <form method="post">
               <input type="text" hidden id="wager_token" value="{{ csrf_token() }}" >
                  
         <div class="col s12 m6 l2">
            <label for="users-list-status">Notification Header</label>
            <div class="input-field">
               <input type="text" class="form-control" name="heading"/>
             </div>
          </div> 
          
             <div class="col s12 m6 l2">
            <label for="users-list-status">Notification Body</label>
            <div class="input-field">
               <textarea class="form-control" name="noti_body"> </textarea>
               
            </div>
          </div> 
          <div class="col s12 m6 l3 display-flex align-items-center show-btn">
           <button class="btn btn-block indigo waves-effect waves-light">Send Notification</button>
          </div>
         </form>
         </div>
     </div>
  </section>
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
                 <th>Is Active</th>
                <th>Account type</th>
                 
                <th></th>
                <th></th>
                	
              </tr>
             <tbody id="abccc">
              
 			 @foreach($all_users as $all_userss)
 			 
 			 @php
 			    $country = App\Locations::where('id',$all_userss->country)->where('location_type','Country')->first();
 			    $city = App\Locations::where('id',$all_userss->city)->where('location_type','City')->first();
 			 @endphp
 			 
 			  <tr id="abc_{{$all_userss->id}}">
                <td></td>
                <td></td>
                <td>{{$all_userss->name}}</td>
                <td>{{$country->name ?? ''}}</td>
                <td>{{$city->name ?? ''}}</td>
                 <td>{{$all_userss->is_active}}</td>
                <td>{{$all_userss->account_type}}</td>
                <td> 
                </td>
                <td></td>
              </tr> 
              
              <script>
                
                
                    // Add record
                $('#noti_form').submit(function(e){
                       
                       
                 e.preventDefault();
                 var form = new FormData(document.getElementById('noti_form'));
                var token = $('#wager_token').val();
                 form.append('_token', token);
                 
                 var heading = $('#heading').val();
                 if(heading != ''){
                     
                    
                  $.ajax({
                    url: '/Admin/send_notification/{{$all_userss->id}}',
                    type: 'post',
                     data: form,             
                        cache: false,
                        contentType: false, //must, tell jQuery not to process the data
                        processData: false,
                    success: function(response){ 
                       return true; 
                    }
                  });
                
                } 
                   });
                  </script>
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
  
</div>
	</div>
		</div>
			</div>




@if($all_users_count > 0 && $request->all() != null )
 <script>
     	   document.getElementById('noti_form').style = "block";

 </script>
@endif
	  <script type="text/javascript">
	  

	$('#users-list-verified').change(function(e) {
	    $('#users-lists').remove();
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
	    success : function(response,data) {
	     document.getElementById('error_p').style.display = "none";
	     
         var append_var = response.city_filtered;
 	    var result = [append_var];
 	    
        result.forEach(function(collections){
            
            
            collections.forEach(function(index){
            
            console.log(index);
            var random  = Math.random();
     		var edito_clas = $( "#testing" ).find( "ul" );
      	 	var li = '<li id="select-options-'+random+'" tabindex="0"><span>'+index.name+'</span></li>';
            edito_clas.append(li);
            var make_options = '<option value="'+index.id+'">'+index.name+'</option>';
            $('#users-lists').append(make_options);
            
            });
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



