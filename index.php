<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="People">
	<meta name="keywords" content="People, Search, Engine">
	<meta name="author" content="Eng. Ali">    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>People</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
  </head>
  <body>
	<!-- Page Loader -->
	<div class="page-loading"></div>	
	
	<!-- Map Start -->
	<div class="full-map">
		<div id="map"></div>
	</div>
	<!-- Search Start -->
	<div class="col-md-4 col-sm-8 col-xs-10 find-people">
		<div class="search-form-logo"></div>
		<div class="row">
		  <div class="col-md-12 col-sm-12">
			<div class="input-group">
			  <input type="text" class="form-control">
			  <span class="input-group-btn">
				<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
			  </span>
			</div>
		  </div>
		</div>
	</div>

    <!-- JavaScript plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHExutZY2dzo78DrKaCxDcdMoIdAPoUnI"></script> 
	<script src="js/map/markerwithlabel_packed.js"></script> 
	<script src="js/map/infobox.js"></script>
	<script src="js/map/markerclusterer_packed.js"></script> 
	<script src="js/map/custom-map.js"></script> 	  
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-92408531-2"></script><!-- Google Analytics -->
	<script>
		//map
		$.getJSON('http://api.wipmania.com/jsonp?callback=?', function (data) { 
			/*
			console.log('Latitude: ' + data.latitude + '\nLongitude: ' + data.longitude + '\nCountry: ' + data.address.country); 
			_latitude = 36.596165;
			_longitude = -97.062988;
			*/		
			_latitude = data.latitude;
			_longitude = data.longitude;
			createHomepageGoogleMap(_latitude,_longitude);			  
		});
	
		//Google Analytics
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-92408531-2');

		//Page Loader
		$(window).load(function() {
			$(".page-loading").fadeOut("slow");
		})
				
	</script>
	
  </body>
</html>