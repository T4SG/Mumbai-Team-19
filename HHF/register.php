<?php
include("connect.php");

if(isset($_POST['submit'])) {
	if((strlen($_POST['email'])!=0) && (strlen($_POST['password'])!=0) && (strlen($_POST['name'])!=0)) {

		$email=$_POST['email'];
		$password= $_POST['password'];
		$name=$_POST['name'];

		$q1=mysqli_query($connect,"insert into users(u_id,type,email,password) values('','donor','".$email."',md5('".$password."'));");
		session_start();
            $_SESSION['type'] = $type;

            $qid = mysql_query("select u_id from users ORDER BY u_id DESC limit 1");
            $rid = mysql_fetch_array($qid);            
            $u_id=$rid[0];

            $_SESSION['u_id'] = $u_id;
            header("location:donate.php");
	}
}  
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Meghna One page parallax responsive HTML Template ">
        
        <meta name="author" content="Muhammad Morshed">
		
        <title>Happy Hearts Fund</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Grid Component css -->
        <link rel="stylesheet" href="css/component.css">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="js/modernizr-2.6.2.min.js"></script>


		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-54152927-1', 'auto');
		  ga('send', 'pageview');
		
		</script>


		<script>
function validateForm() {
    var x;
    x = document.forms["register"]["name"].value;
    var letters = /^[a-zA-Z ]+$/;
    if(!x.match(letters)) {
    	alert(" Name must consist of only alphabets & spaces");
    	return false;
    }

    x = document.forms["register"]["password"].value;
    if(x.length<6 || x.length>15) {
    	alert("Password must be between 6 to 15 characters");
    	return false;
    }

    var x2=document.forms["register"]["repassword"].value;
    if(x!=x2) {
    	alert("Re-enter the same password correctly");
    	return false;
    }

    x = document.forms["register"]["email"].value;
    var at = x.indexOf("@");
    var dot = x.lastIndexOf(".");
    if(at<1 || dot<at+2 || dot+2>=x.length) {
    	alert("Email id must be valid");
    	return false;
    }


}
</script>
	
    </head>
	
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<!--<div id="loading-mask">
			<div class="loading-img">
				<img alt="Meghna Preloader" src="img/preloader.gif"  />
			</div>
		</div>-->
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
			
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/logo.png" alt="HHF" />
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="index.html">Home</a></li>
                        <li><a href="index.html#about">Events</a></li>
                        <li><a href="index.html#services">Create Challenge</a></li>
                        <li><a href="index.html#showcase">Target</a></li>
                        <li><a href="index.html#our-team">Collaborate</a></li>
                        <li><a href="index.html#pricing">Donate</a></li>
                        <li><a href="index.html#contact-us">About Us</a></li>
						<li><a style="color:#6cb670" href="signup.html">Login</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        

		

		<!--
		Start Blog Section
		=========================================== -->
<section id="about" class="bg-one">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>Register <span class="color"></span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					
					
					<!-- About item -->
					
						
						<form action="register.php" name="register" onsubmit="return validateForm()" method="POST" > 
						<center> 
						<table width="40%" border="0" cellpadding="10" cellspacing="10">
						      
			                <tr>
			                <td>Name:</td>
			                <td><input type="text" name="name" required></td>
			                </tr>
			                <tr>
			                <td>Password:  </td>
			                <td><input type="password" name="password" required></td>
			                </tr>
			                <tr>
			                <td><label>Re-enter Password: </label></td>
			                <td><input type="password" name="repassword" required></td>
			                </tr>
			                <tr>
			                <td><label>Email id: </label></td>
			                <td><input type="email" name="email_id" required></td>
			                </tr>
			                <tr>
			                <td><input type="submit" id="button" value="Submit" name="submit" style="color:black"></td><td></td>
			                </tr>	            
			            	
			            	</table>
			            	</center>
			            	</form>
						
					
					<!-- End About item -->
					
					
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<img src="img/logo.png" alt="HHF" /> 
							</a>
							<br />
							
							
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="js/jquery.slitslider.js"></script>
		<script src="js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="js/grid.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>

    </body>
</html>