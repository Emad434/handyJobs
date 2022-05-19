
 @extends('setup_header.providers_header')
  @section('title', 'Add Service')  
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
 @section('content')


        </header>
<section class="section breadcrumbs-custom">
 <div class="breadcrumbs-custom-main bg-image bg-primary">
  <div class="container">
  <h3 class="breadcrumbs-custom-title">{{ __(('Describe your service')) }}</h3>
 </div>
</div>
</section>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <section class="section section-md" id="candidate_from" >
         <div class="container">
           <div class="block-form">
            <form method="post"  data-form-type="contact" action="/Providers/make_service" enctype="multipart/form-data">
              @csrf
            <h4>{{ __(('Describe Your Service')) }}</h4>
            <hr>
            <!-- RD Mailform-->
            <div class="rd-form rd-mailform form-lg">
              <div class="row row-40">

                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-profession">{{ __(('Service Title')) }}</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="general-information-profession"type="text" name="title" data-constraints="@Required" Required> 
                      <label class="form-label" for="general-information-profession">{{ __(('e.g. “I will do something i really good at”')) }}</label>
                    </div>
                  </div>
                  
                   <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-job-category">{{ __(('Resume Category')) }}</label>
                    <div class="form-wrap-inner">
                      <!-- Select 2-->
                      <select class="form-input select" id="general-information-job-category"  data-placeholder="Choose a Category" name="category" data-minimum-results-for-search="Infinity" data-constraints="@Selected" Required> 
                        <option label="Choose a Category"></option>
                        @php
                        $category = App\Services::where('is_active',1)->get();
                        @endphp

                        @foreach($category as $categorys)
                        <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                        @endforeach

                      </select>
                    </div>
                  </div>
                  
                  
                </div>

                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-rate">{{ __(('Minimum Rate')) }}/h ($)</label>
                    <div class="form-wrap-inner">
                      <input class="form-input" id="amountt" placeholder="e.g. $20" onkeyup="include_tax()" type="number" name="rate" data-constraints="@Required" Required>
                      
                    </div>
                    <br>
                    
                    <div class="form-wrap-inner" style="margin-top:10px;">
                    <label class="form-label-outside" for="general-information-profession">{{ __(('Tax Payment')) }}</label>
                    <select class="form-input select" id="taxx" onchange="include_tax()" name="tax">
               	           <option value=0>Select</option>
            			    <option value=1>ex vat</option>
            			    <option value=2>No ex vat</option>

            			</select>
            			
            			</div>
            	     <strong id="amt"> </strong>
            	     <input type="hidden" name="amont" class="form-control" id="amount_database" >
                    
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="general-information-resume-content">{{ __(('Briefly Explain Your Service')) }}</label>
                    <div class="form-wrap-inner">
                           <textarea id="summernote" name="editordata" class="form-input" id="validationCustom01" data-constraints="@Required" Required> </textarea>
                                       
                     </div>
                  </div>
                </div>
               </div>
              </div>
            </div>
          
          <div class="block-form">
            <h4>{{ __(('Other Details')) }}</h4>
            <hr>
            <!-- RD Mailform-->
            <div class="rd-form rd-mailform form-lg form-corporate">
              <div class="form-wrap col-sm-12">
                <label class="form-label-outside" for="education-school-name">{{ __(('Select Days')) }}</label>
                <div class="form-wrap-inner">
                  <select class="form-input select"data-placeholder="Choose a Category" name="time_period" data-minimum-results-for-search="Infinity" data-constraints="@Selected" Required>

                      <option value="1">1 {{ __(('Day')) }}</option>
                      <option value="2">2 {{ __(('Days')) }}</option>
                      <option value="3">3 {{ __(('Days')) }}</option>
                      <option value="4">4 {{ __(('Days')) }}</option>
                      <option value="5">5 {{ __(('Days')) }}</option>
                      <option value="6">6 {{ __(('Days')) }}</option>
                      <option value="7">7 {{ __(('Days')) }}</option>
                      <option value="8">8 {{ __(('Days')) }}</option>
                      <option value="9">9 {{ __(('Days')) }}</option>
                      <option value="10">10 {{ __(('Days')) }}</option>
                      <option value="11">11 {{ __(('Days')) }}</option>
                      <option value="12">12 {{ __(('Days')) }}</option>
                      <option value="13">13 {{ __(('Days')) }}</option>
                      <option value="14">14 {{ __(('Days')) }}</option>
                      <option value="15">15 {{ __(('Days')) }}</option>
                      <option value="16">16 {{ __(('Days')) }}</option>
                      <option value="17">17 {{ __(('Days')) }}</option>
                      <option value="18">18 {{ __(('Days')) }}</option>
                      <option value="19">19 {{ __(('Days')) }}</option>
                      <option value="20">20 {{ __(('Days')) }}</option>
                      <option value="21">21 {{ __(('Days')) }}</option>
                      <option value="22">22 {{ __(('Days')) }}</option>
                      <option value="23">23 {{ __(('Days')) }}</option>
                      <option value="24">24 {{ __(('Days')) }}</option>
                      <option value="25">25 {{ __(('Days')) }}</option>
                      <option value="26">26 {{ __(('Days')) }}</option>
                      <option value="27">27 {{ __(('Days')) }}</option>
                      <option value="28">28 {{ __(('Days')) }}</option>
                      <option value="29">29 {{ __(('Days')) }}</option>
                      <option value="30">30 {{ __(('Days')) }}</option>
                  </select>
                </div>
              </div>


              @php

                $region = App\Locations::where('location_type','Country')->get();

              @endphp
              <div class="form-wrap col-sm-12">
                <label class="form-label-outside" for="education-school-name">{{ __(('For Which Region')) }}</label>
                <div class="form-wrap-inner">

                  <input type="text" name="region" id="region" autocomplete="off" onkeyup="search_region()" class="form-input form-control-has-validation" Required/>
              
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


              <div class="form-wrap col-sm-12">
                <label class="form-label-outside" for="education-school-name">{{ __(('Available On')) }}</label>
                <div class="form-wrap-inner">
                 <div class="input-group date" data-provide="datepicker">
   <input class="form-input form-control-has-validation" type="text" data-date="" id="general-information-profession" name="avilable_on" Required>
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
    </div>   
    </div>
              

                <div class="form-wrap col-sm-12">
                <label class="form-label-outside" for="education-school-name">{{ __(('Days Available For')) }}</label>
                <div class="form-wrap-inner">
                     <div class="input-group date" data-provide="datepicker">
   <input class="form-input form-control-has-validation" type="text" data-date="" id="general-information-profession" name="avilable_end" Required>
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>

                </div>
              </div>

                 <div class="form-wrap col-sm-12">
                <label class="form-label-outside" for="education-school-name">{{ __(('Provide Your Postal Code')) }}</label>
                <div class="form-wrap-inner">
                  <input type="number" name="postal_code" id="postal_code" placeholder="Postal Code" class="form-input form-control-has-validation" Required/>
                </div>
              </div>
            </div>
          </div>

           <div class="block-form">
            <h4>{{ __(('Thumbnail' )) }}</h4>
            <hr>
            <div class="group">
              <label class="button button-sm button-primary-outline button-icon button-icon-left" style="border-radius:40px;">
                <input type="file" name="photo" onchange="readURL(this);"  id="file_chosen"  Required><span class="icon mdi mdi-account-box"></span>{{ __(('Add Your Work Photo' )) }} &nbsp &nbsp
                 <img class="injectable hw-20 img-thumbnail" id="blah" style="display: none;" src="#"> 
              </label>

            </div>
            <hr>
            <button class="button button-lg button-secondary" style="border-radius:40px;" type="submit">{{ __(('Publish' )) }}</button>
          </div>
        </div>
        </div>
        </form>
      </section>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  
 <script>
var $j = jQuery.noConflict();
$j("#datepicker").datepicker();
  </script>      
      
 <script type="text/javascript">
 function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
document.getElementById('blah').style.display="block";


reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(200)
.height(100);
};
 var name = document.getElementById('file_chosen'); 
  $('#files').val(name.files.item(0).name);
reader.readAsDataURL(input.files[0]);
document.getElementById('old_img').style.display="none";
}
}

</script>            
      
<script>
         function include_tax()
        { 
            var tax = 0;
            var selectBox = document.getElementById("taxx");
             if(selectBox.options[selectBox.selectedIndex].value == 1){
                 
              var tax_amount =  parseInt(document.getElementById("amountt").value * 25 /100) + parseInt(document.getElementById("amountt").value);
               console.log(tax_amount);
             
              document.getElementById("amt").innerHTML="Amount to pay = " +  tax_amount;
               document.getElementById("amount_database").value= tax_amount;
             }
             else{
               
              var ammount = document.getElementById("amountt").value;
              console.log(ammount);
              document.getElementById("amt").innerHTML="Amount to pay = " + ammount;
             document.getElementById("amount_database").value= ammount;
        }
        }
       
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
   $.get("/Providers/search_region",
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



 
 
 @endsection
