<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="people">
	<meta name="keywords" content="People, Search, Engine">
	<meta name="author" content="Eng. Ali">    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>People</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
	<!-- http://localhost:8080/people/profile.php?id=100013489710942 -->
	<!-- http://localhost:8080/people/profile.php?user=100013489710942 -->
	<?php 
	$getName = explode("/",$_SERVER['REQUEST_URI']);	
	echo $getName[3];
	
	
	?>
	<h1>Hello, world!</h1>

    <!-- JavaScript plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	  
  </body>
</html>