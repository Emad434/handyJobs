
<!DOCTYPE html>
<html>
<head>
  <title id="title"></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{asset('/front_css/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/front_css/css/style.css')}}">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>


<div class="container col-sm-5">
        @if (session('message'))
     <div class="alert alert-success">
     {{ session('message') }}
     </div>
    @endif
     <div class="form-wrap col-sm-12">
                <label class="form-label-outside" for="education-school-name">{{ __(('For Which Region')) }}</label>
                <div class="form-wrap-inner">

                  <input type="text" name="region" id="region" autocomplete="off" onkeyup="search_region()" class="form-input form-control-has-validation"/>
              
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
                
                 
                 <div id="Map" style="height:500px;display: none;"></div>
                 
                 <form method="post" action="/pin_map/{{$id}}">
                     @csrf
                 <input type="text" id="lat" hidden name="lat">

                 <input type="text" id="lag" hidden name="lag">
                 <button class="btn btn-primary">Pinned Map</button>
                 </form>
              </div>
              </div>
               
  <script src="https://www.openlayers.org/api/OpenLayers.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  

 <script>

 function search_region(){
 $('#title').empty();
             document.getElementById('result_container').style.display = 'block';
  document.getElementById('search_spinner').style.display = 'block';
         
var region_name = $("#region").val();
 if(region_name != ""){
  $(function() {
   $.get("/search_region",
    { "region_name": region_name },
     function(data){
        $("#location_list").empty();
   
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

         } else{
                document.getElementById('result_container').style.display = 'none';
                 document.getElementById('Map').style.display = 'none';
                  $('#title').empty();
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
 
    var title  = $("#title").find('title').text();
    $('#title').append(lat+','+lang);
 var region_name = document.getElementById('region').value = gen;
 
 
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


 
</body>
</html>