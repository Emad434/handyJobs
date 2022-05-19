@extends('client_header.client_header')

 @section('title', 'Post a Job')  
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
 @section('content')
 
 @php
    $category = App\Services::where('is_active',1)->get();
    
    $location = App\Locations::where('location_type','Country')->get();
   $service = App\Services::where('name','like','Transportation Service')->first()->id;
    @endphp
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
 <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title"> Job Posting</h3>
          </div>
        </div>
      
 </section>
 <head>
     <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
     <!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </head>
      <center>
  <br>
  <br>
 
 <section class="card section section-md text-center col-sm-8">
       @if (session('message'))
                        <span class="badge badge-info">
                            {{ session('message') }}
                        </span>
                    @endif
        <div class="container">
          <div class="text-center">
            <h2>Post a Job</h2>
           </div>
        </div>
        
    
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">

            	<form method="post"  action="/Client/request_publish" enctype="multipart/form-data">
				@csrf

            	<div class="container col-sm-12">
            		
            	<select class="form-input form-control-has-validation" onchange="Dropdown_Validation()"  id="category" name="category" Required>
            	    <option value="0">Select Category</option>
            	    @foreach($category as $categorys)
            	    
            	    <option value="{{$categorys->id}}">{{$categorys->name}}</option>
            	    @endforeach
            	</select>
            	</div>

                 	<div class="row">
             		  
             		   
            			<div class=" col-sm-6">
            			     <h6> <label class="form-label-outside d-flex justify-content-start" >From</label> </h6>
            			     <div class="input-group date" data-provide="datepicker">
   <input type="text" id="date1" onchange="daysdifference(date1 , date2)" data-date="" id="dpicker" class="form-control" name="start_date" value="" Required>
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
            			
            			</div>

            			<div class=" col-sm-6">
            			       <h6> <label class="form-label-outside d-flex justify-content-start" >To</label> </h6>
            			       <div class="input-group date" data-provide="datepicker">
   <input type="text" id="date2" onchange="daysdifference(date1 , date2)" data-date=""  class="form-control" name="end_date" value="" Required>
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
	            			
            
            			</div>
            			
            		
             		</div>
             
             		
             		<br>
             		<br>
            	<div class="container col-sm-12">
            		<div class="row">
            			<div class=" col-sm-6">
            			    
            				<input type="number" name="amount" placeholder="Your Budget"value="" class="form-control" Required>
            
            			</div>

            			<div class=" col-sm-6">
            			    
	            				<input type="number" id="total_days" name="days" placeholder="Days"value="" class="form-control" Required>
            
            			</div>
             		</div>
             				  @php

                $region = App\Locations::where('location_type','Country')->get();

              @endphp
              <br>
              <br>
              <div class="form-wrap col-sm-12">
                <h6 class="form-label-outside" for="education-school-name">{{ __(('Location to Pick')) }}</h6>
                <div class="form-wrap-inner">

                  <input type="text" name="pick" id="region" autocomplete="off" onkeyup="search_region()" class="form-input form-control-has-validation" Required/>
              
                  <div class="container shadow-lg p-3 mb-5 bg-white rounded" id="result_container" style="display: none;">
                    <strong><p>Search Result</p></strong>
                    <hr>
                    <div class="spinner-border text-primary" role="status" id="search_spinner" style="display: none;">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <ul class="rd-navbar-nav" id="location_list">
                   

                  </ul>
                  </div>
                 </div>
                 <input type="text" id="lat" hidden name="lat">

                 <input type="text" id="lag" hidden name="lag">
                 
                 <div id="Map" style="height:250px;display: none;"></div>
              </div>
              
              
              <br>
              <br>
              <div class="form-wrap col-sm-12" style="display:none;"  id="dilivr">
                <h6 class="form-label-outside" for="education-school-name">{{ __(('Location to Diliver')) }}</h6>
                <div class="form-wrap-inner">

                  <input type="text" name="diliver" id="regionn" autocomplete="off" onkeyup="search_regionn()" class="form-input form-control-has-validation" />
              
                  <div class="container shadow-lg p-3 mb-5 bg-white rounded" id="result_containerr" style="display: none;">
                    <strong><p>Search Result</p></strong>
                    <hr>
                    <div class="spinner-border text-primary" role="status" id="search_spinnerr" style="display: none;">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <ul class="rd-navbar-nav" id="location_listt">
                   

                  </ul>
                  </div>
                 </div>
                 <input type="text" id="latt" hidden name="lat">

                 <input type="text" id="lagg" hidden name="lag">
                 
                 <div id="Mapp" style="height:250px;display: none;"></div>
              </div>
             		
             		
             	
             		  <div class="row">
             		      <div class="col-sm-12">
                    	<select class="form-control" name="location">
            	            <option>Select Location</option>
            	                  @foreach($location as $locations)
            	                  @php
            	                   $user = App\User::where('id',Auth::user()->id)->first();
            	                   $user_location = App\Locations::where('id',$user->country)->where('location_type','Country')->first();
            	                   
            	                   @endphp
            	            <option value="{{$locations->id}}" @if($user->country == $locations->id) selected @endif>{{$locations->name}}</option>
            	            
            	            @endforeach
            	            
                            	</select>
                            	</div>

                         </div>
            	 <div class="row">
            			<div class=" col-sm-12">
            				<textarea name="details" placeholder="Details"class="form-control" Required></textarea>
                        </div>
            		 
            	 </div>
            	 <br>
            
            					<input type="hidden" name="image_id" id="demo" placeholder="" value="" class="form-control">
                       
            	 <div class="row d-flex justify-content-center">
            	     <button type="button" style="border-radius:40px;" class="button button-lg button-primary-outline fa fa-paper-plane" data-toggle="modal" data-target="#exampleModal"> Attachment</button>
            	 </div>
            	</div>
            	 
            	<br>
    
                    <br>
                        <hr>
                        <br>
                
                    <div class="container col-sm-12">
                		 <button class="btn btn-primary" id="buton"  style="width:100%; border-radius:40px;" disabled>Submit</button>
                    </div>
            	</form>
            	
            	
            	
                <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                     <div class="modal-header">
                      <h5 class="modal-title">Attachments</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                     <div class="modal-body">
                      <form method="post" action="/Client/post_request_images" class="dropzone" id="dropzone" enctype="multipart/form-data">
                          @csrf
                      <div class="dz-preview dz-file-preview">
                    <div class="dz-details">
                      <div class="dz-filename"><span data-dz-name></span></div>
                      <div class="dz-size" data-dz-size></div>
                      <img data-dz-thumbnail />
                     </div>
                     <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                     <div class="dz-success-mark"><span>✔</span></div>
                     <div class="dz-error-mark"><span>✘</span></div>
                     <div class="dz-error-message"><span data-dz-errormessage></span></div>
                    </div>
                     </div>
                     <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                      </form>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     </div>
                 </div>
                 </div>
                </div>	
                
            	
            	

            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
</center>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
 
  
 <script>
var $j = jQuery.noConflict();
$j("#datepicker").datepicker({ dateFormat: 'dd/mm/yy' });
  </script>
  
<script type="text/javascript">
    
    function daysdifference(date1, date2) {
              
             var dat1 = new Date(date1.value);
             var dat2 = new Date(date2.value);
             var newdate1 = dat1.getDate();
             var newdate2 = dat2.getDate();
              console.log(newdate1, newdate2);
            // The number of milliseconds in one day
            var ONEDAY = 1000 * 60 * 60 * 24;
            // Convert both dates to milliseconds
            
            var date1_ms = dat1.getTime();
            var date2_ms = dat2.getTime();
            // Calculate the difference in milliseconds
            var difference_ms = Math.abs(date1_ms - date2_ms);
              
            // Convert back to days and return
           var total_days =  Math.round(difference_ms/ONEDAY);
           document.getElementById("total_days").value = total_days;
        }
</script>

 <script type="text/javascript">
 
      var list = [];
        Dropzone.options.dropzone =
         {

            maxFilesize: 12,
            renameFile: function(file) {
                 var dt = new Date();
                var time = dt.getTime();
               return time+file.name;


            },

            acceptedFiles: ".jpeg,.jpg,.png,.gif,jfif",
            addRemoveLinks: true,
            timeout: 50000,

       
       
            success: function(file,response) 
            {
            
            console.log(response.image_id);    
                
            list.push(response.image_id);
              $('#demo').val(list);
              
              
                
              
               
                   
            },

            error: function(file, response)
            {
               return false;
            }


};




    </script>
    <script src="https://www.openlayers.org/api/OpenLayers.js"></script>

      <script>
      $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 100
      });
    </script>
    
  <script>
 function search_region(){

 document.getElementById('result_container').style.display = 'block';
  document.getElementById('search_spinner').style.display = 'block';
                
var region_name = $("#region").val();
 if(region_name != ""){
  $(function() {
   $.get("/Client/search_region",
    { "region_name": region_name },
     function(data){
        $("#location_list").empty();
   
      document.getElementById('search_spinner').style.display = 'none';
     var list_demo = data.map_detail;
     if(list_demo == 'Area Not Found.'){
  
     var item = "<li class='rd-nav-item'>Area Not Found.</li></a>";
    $('#location_list').append(item);
    

   

    }else{

       
 Object.keys(list_demo).forEach(function(key)
  {
  var item = "<li class='rd-nav-item' id='place_id_"+list_demo[key].place_id+"'  onclick='long_lat_func("+list_demo[key].lat+","+list_demo[key].lon+","+list_demo[key].lat+")'><img src='"+list_demo[key].icon+"'> "+list_demo[key].display_name+"</li><hr>";
    $('#location_list').append(item);
  });
  }

    } 
 

  );

 });

         }else{
                document.getElementById('result_container').style.display = 'none';
                 document.getElementById('Map').style.display = 'none';
           }

        }
      
    </script>
    
    <script>

function long_lat_func(lat,lang,display_id){
  var gen  = $("#location_list").find('li').text();

  var region_name = document.getElementById('region').value = gen;
 document.getElementById('result_container').style.display = 'none';
 

 document.getElementById('lat').value = lat;
 document.getElementById('lag').value = lang;
 
     document.getElementById('Map').style.display = "block";
      $('#Map').empty();
      
    var lat            = lat;
    var lon            = lang;
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
  }
</script>

<script>
 function search_regionn(){

 document.getElementById('result_containerr').style.display = 'block';
  document.getElementById('search_spinnerr').style.display = 'block';
                
var region_name = $("#regionn").val();
 if(region_name != ""){
  $(function() {
   $.get("/Client/search_region",
    { "region_name": region_name },
     function(data){
        $("#location_listt").empty();
   
      document.getElementById('search_spinnerr').style.display = 'none';
     var list_demo = data.map_detail;
     if(list_demo == 'Area Not Found.'){
  
     var item = "<li class='rd-nav-item'>Area Not Found.</li></a>";
    $('#location_listt').append(item);
    

   

    }else{

       
 Object.keys(list_demo).forEach(function(key)
  {
  var item = "<li class='rd-nav-item' id='place_id_"+list_demo[key].place_id+"'  onclick='long_lat_funcc("+list_demo[key].lat+","+list_demo[key].lon+","+list_demo[key].lat+")'><img src='"+list_demo[key].icon+"'> "+list_demo[key].display_name+"</li><hr>";
    $('#location_listt').append(item);
  });
  }

    } 
 

  );

 });

         }else{
                document.getElementById('result_containerr').style.display = 'none';
                 document.getElementById('Mapp').style.display = 'none';
           }

        }
      
    </script>
    
    <script>

function long_lat_funcc(lat,lang,display_id){
  var gen  = $("#location_listt").find('li').text();

  var region_name = document.getElementById('regionn').value = gen;
 document.getElementById('result_containerr').style.display = 'none';
 

 document.getElementById('latt').value = lat;
 document.getElementById('lagg').value = lang;
 
     document.getElementById('Mapp').style.display = "block";
      $('#Mapp').empty();
      
    var lat            = lat;
    var lon            = lang;
    var zoom           = 18;

    var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
    var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
    var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);

    map = new OpenLayers.Map("Mapp");
    var mapnik         = new OpenLayers.Layer.OSM();
    map.addLayer(mapnik);

    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(position));

    map.setCenter(position, zoom);
  }
</script>

 
     
 <script>
              function Dropdown_Validation(){
               var selectBox = document.getElementById("category");
               console.log(selectBox);
                if(selectBox.options[selectBox.selectedIndex].value == 0){
               document.getElementById("buton").disabled = true;
             }else{
               document.getElementById("buton").disabled = false;


             }
             console.log(@json($service));
             if(selectBox.options[selectBox.selectedIndex].value == @json($service)){
               document.getElementById("dilivr").style.display = "block";
             }
             else
             {
                  document.getElementById("dilivr").style.display = "none";
             }
             
            }
             </script>
 @endsection