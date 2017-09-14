<!DOCTYPE html> 
<html> 
<head> 
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link href='//fonts.googleapis.com/css?family=Grand Hotel' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/www/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/www/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/www/bootstrap/css/bootstrap-theme.min.css" type="text/css" />
    <link rel="stylesheet" href="/www/bootstrap/css/bootstrap-theme.css" type="text/css" />

    <style type="text/css"> 
        html, body{  margin: 0px; padding: 0px; }
        form input{
             
        }
       #mapview{ visibility: hidden; margin: 0; padding: 0px; padding-top:10px;}
        
    </style>
 
    <link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript"
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVKTJxIpxKouR0B-S7qpF0_oslxlFvgNc&sensor=SET_TO_TRUE_OR_FALSE">
    </script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript"> 
        var directionDisplay;
        var directionsService = new google.maps.DirectionsService();
        var map;
        var pontoPadrao;
 
        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            var myLatlng = new google.maps.LatLng();
             
            var myOptions = {
                zoom:7,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: myLatlng
            }
 
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById("directionsPanel"));
        }
        
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {

            pontoPadrao = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            maps.setCenter(pontoPadrao);
      
            var geocoder = new google.maps.Geocoder();
      
            geocoder.geocode({
            "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
            $("").val(results[0].formatted_address);
        }
            });
    });
  }

        function calcRoute() {
            var start = pontoPadrao;
            var end = "Rua Viana, s/nº - Boa Vista, Vila Velha - ES, 29106-091";
            var request = {
                origin:start, 
                destination:end,
                travelMode: google.maps.DirectionsTravelMode.DRIVING
            };
             
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                } else {
                    alert(status);
                }
 
                document.getElementById('mapview').style.visibility = 'visible';
            });
            
        }
       google.maps.event.addDomListener(window, 'resize', initialize);
       google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head> 
<body onload="initialize()">
 
<form action="javascript: void(0);" onSubmit="calcRoute()">
    <center><p></p><button class="btn btn-success" type="submit"> Como chegar ? </button> </center>
</form>

<div class="container-fluid" >
    <div class="row" id="mapview">
        <div class="col-sm-6" id="map_canvas" style="width:70%;height:400px;" ></div>
        <div class=" col-sm-6 direcao" style=" width: 380px; height: 500px; overflow: scroll; padding = 10px" >
        <div id="directionsPanel" style="width: 300px;height 150px; margin-left:50px"></div>
        </div>
    </div>
</div>
</body> 
</html>