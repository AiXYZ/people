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
	<link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
        <img class="img-thumbnail" src="img/people_photos/ali.png" alt="">
        <h1>Ali Akhtar Mohammed</h1>
        <h4>Software Engineer</h4>
      </div>
    </header>

	<div class="container">
	  <h4 class="text-center bio">Engineer, Public Speaker, Political Critic</h4>
	  <!-- Education -->
	  <h3>Education</h3>
	  <div class="media">
	    <div class="media-left media-top">
	      <img src="img/education/stanford.png" class="media-object mediaLogo">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">Stanford University</h4>
	      <p><strong>MS - Innovation and Entrepreneurship</strong></p>
	      <p class="timePeriod">2013 - 2014</p>
	      <p>
			A greater understanding of the tools that every innovative organization needs to succeed.
			A wider and deeper set of innovation skills, customized to fit both your organization’s needs and your career goals.
			A greater understanding the best and most current research on innovation and entrepreneurship.
			Deeper insights into the people you are serving - a powerful tool for innovation.
			The joy of learning from and engaging with some of Stanford’s smartest and most entertaining teachers
			Personal feedback and advice from Stanford’s team of innovation coaches.
	      </p>
	    </div>
	  </div>
	  <div class="media">
	    <div class="media-left media-top">
	      <img src="img/education/mgr.png" class="media-object mediaLogo">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">Dr. M.G.R. University</h4>
	      <p><strong>B. Tech - Computer Science And Engineering</strong></p>
	      <p class="timePeriod">2009 - 2013</p>
	      <p>
			Was awarded the First Prize Winner for project zoom by Mr. Shibu Thomas, Associate Director of Projects - Cognizant. 
			Winner of IBM Master the Mainframe Contest 2012 and eligible to be in first 200 candidates to pass Part-2.
	      </p>
	    </div>
	  </div>
	  <div class="media">
	    <div class="media-left media-top">
	      <img src="img/education/university.png" class="media-object mediaLogo">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">Kamla Rai College</h4>
	      <p><strong>Senior Secondary - Mathematics and Science</strong></p>
	      <p class="timePeriod">2007 - 2009</p>
	      <p></p>
	    </div>
	  </div>
	  <hr>
	  
	  <!-- Work -->
	  <h3>Work</h3>
	  <div class="media">
	    <div class="media-left media-top">
	      <img src="img/work/qmax.png" class="media-object mediaLogo">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">Qmax Systems</h4>
	      <p><strong>Software Engineer</strong></p>
	      <p class="timePeriod">2013 - 2015</p>
	      <p>
			Responsible for developing and coding web and desktop-based software.
			Wrote well designed, testable, efficient code that meets specifications and follows standards.
			Develop solution architecture based from project requirements.
			Design and develop web services, API.
			Modify existing software to correct errors, allow it to adapt to new hardware, and to improve its performance.
			Integrate applications using components develop in-house and third party libraries.
			Participate in day-to-day coding, performance profiling, optimization, and general troubleshooting.
			Integrate software components into a fully functional software system.
			Analyze and resolve technical and application problems.
			Assist in the collection and documentation of user's requirements, development of user stories, and estimates.
	      </p>
	    </div>
	  </div>
	  <div class="media">
	    <div class="media-left media-top">
	      <img src="img/work/emc.png" class="media-object mediaLogo">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">EMC</h4>
	      <p><strong>Student Ambassador</strong></p>
	      <p class="timePeriod">2013 - 2014</p>
	      <p>
			Serve as a bridge between EMC Corporation and Universities. 
			Conduct seminars and organize events to create awareness about EMC and EMC Academic Alliance Program. 
			Participate in the events on behalf of EMC Corporation.
	      </p>
	    </div>
	  </div>
	  <div class="media">
	    <div class="media-left media-top">
	      <img src="img/work/microsoft.png" class="media-object mediaLogo">
	    </div>
	    <div class="media-body">
	      <h4 class="media-heading">Microsoft</h4>
	      <p><strong>MSP</strong></p>
	      <p>2013 - 2013</p>
	      <p class="timePeriod"></p>
	    </div>
	  </div>
	  <hr>
	  
	  <!-- Contact -->
	  <h3>Contact</h3>	  
	  <div class="row">
	    <div class="col-md-6">
			<address>
			  <strong>GICT, Inc.</strong><br>
			  181428 Gopalganj, Bihar<br>
			  Mobile Phone: +91 90430 38157<br>
			  Email: EngAliAkhtar@gmail.com
			</address>	      
	    </div>
	    <div class="col-md-6">
			<ul class="list-unstyled">
			  <li><span class="glyphicon glyphicon-globe"></span> <a href="<?php echo $profileUrl ?>"><?php echo $profileUrl ?></a></li>
			  <li><i class="fa fa-facebook-official"></i> <a href="https://www.facebook.com/EngAliAkhtar"> https://www.facebook.com/EngAliAkhtar </a></li>
			  <li><i class="fa fa-twitter-square"></i> <a href="https://www.facebook.com/EngAliAkhtar"> https://www.facebook.com/EngAliAkhtar </a></li>
			  <li><i class="fa fa-instagram"></i> <a href="https://www.facebook.com/EngAliAkhtar"> https://www.facebook.com/EngAliAkhtar </a></li>
			  <li><i class="fa fa-linkedin-square"></i> <a href="https://www.facebook.com/EngAliAkhtar"> https://www.facebook.com/EngAliAkhtar </a></li>
			</ul>	      
	    </div>
	  </div>	  	  
	</div>
    
    <div class="container">
      <hr>
      <footer>
        <p>&copy; 2017 People, Inc.</p>
      </footer>
    </div> <!-- /container -->    

    <!-- JavaScript plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
