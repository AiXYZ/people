<?php 
/*
http://localhost:8080/people/profile.php?id=100013489710942
http://localhost:8080/people/EngAli 
username minimum length is 5 
*/
if(!empty($_GET['id'])){
	$username = $_GET['id'];
}else{
	$username = "no";
}
$profileUrl = "http://peoplealpha.azurewebsites.net/" . $username;
?>
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

  <body class="bodyClass">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/people-logo.png" alt="People"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
		    <div class="input-group">
		      <input type="text" class="form-control">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
		      </span>
		    </div><!-- /input-group -->
          </form>          
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Header -->
    <header class="pHead" style="background-image: url('img/people_photos/cover/1080.jpg');">
      <div class="container">
        <img class="img-thumbnail" src="img/people_photos/haimanti.png" alt="">
        <h1>Haimanti Das</h1>
        <h4>Software Engineer</h4>
      </div>
    </header>

	<!-- Experience -->
	<div class="container">
	  <h2>Media Object</h2>
	  <p>The media object can also be top, middle or bottom-aligned with the "media-top", "media-middle" or "media-bottom" class:</p><br>
	  <div class="media">
	    <div class="media-left media-top">
	      <img src="img/people_photos/haimanti.png" class="media-object" style="width:80px">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">Media Top</h4>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	    </div>
	  </div>
	  <hr>
	  <div class="media">
	    <div class="media-left media-middle">
	      <img src="img/people_photos/haimanti.png" class="media-object" style="width:80px">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">Media Middle</h4>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	    </div>
	  </div>
	  <hr>
	  <div class="media">
	    <div class="media-left media-bottom">
	      <img src="img_avatar1.png" class="media-object" style="width:80px">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">Media Bottom</h4>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	    </div>
	  </div>
	</div>


    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Engineer, Public Speaker, Political Critic</p>
          <p><span class="glyphicon glyphicon-search"></span> Riyadh, Saudi Arabia</p>
          <a href="<?php echo $profileUrl ?>"><?php echo $profileUrl ?></a>
        </div>
      </div>
    </div> <!-- /container --> 
    
    <div class="container">
      <hr>
      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->    

    <!-- JavaScript plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
