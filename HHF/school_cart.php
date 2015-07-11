<?php
include("connect.php");

//$u_id = $_SESSION['u_id'];
//$type = $_SESSION['type'];
//add to cart

	
            if(isset($_POST['addtocart'])) {
              if(!empty($_POST['atc']))  {

                  $addlecs = $_POST['atc'];
                  $num = count($addlecs);

                  for($i=0; $i < $num; $i++)
                  {
                    $qadd = mysqli_query($connect,"insert into order_items('order_id,u_id,l_id) values('','".$u_id."','".$l_id."')");
                  }
                  echo '<script> alert("Successfully added to cart!"); </script>';
              }

            }

//add lecture

            if(isset($_POST['addlecture'])) {
            	if(!empty($_POST['grade']) && (!empty($_POST['topic']))) {

            		$search = strtolower($_POST['topic']);
					$check = mysql_query("select l_id from lectures where lower(topic) LIKE'%".$search."%'");
					if(mysqli_num_rows($check)>0) 
						echo '<script> alert("These topics have already been made available on our site!"); </script>';
					else {
						$grade=$_POST['grade'];
						$topic=$_POST['topic'];
						$q1=mysqli_query($connect,"select s_name from school where u_id='".$u_id."'");
						$r1=mysqli_fetch_assoc($q1);
						$source=$r1['s_name'];
						$qa=mysqli_query($connect,"insert into lectures(l_id,u_id,topic,source) values('','".$u_id."','".$topic."','".$source."')");
						echo '<script> alert("Successfully added lecture!"); </script>';

					}
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
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="index.html#about">Events</a></li>
                        <li><a href="index.html#services">Create Challenge</a></li>
                        <li><a href="index.html#showcase">Target</a></li>
                        <li><a href="index.html#our-team">Collaborate</a></li>
                        <li><a href="index.html#pricing">Donate</a></li>
                        <li><a href="index.html#contact-us">About Us</a></li>
						<li><a style="color:#6cb670" href="signup.html">SignUp</a></li>
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
						<h2>SCHOOL <span class="color">PORTAL</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<br>

				<?php 
				//if($type=="s_incomplete") {

				?>

					<form action="school_cart.php" method="POST">
					<center>			       
			        <table width="80%" border="0" cellpadding="10" cellspacing="10" >
			      	<tr>
			        <?php
			        
			           $q1 = mysqli_query($connect,"select * from lectures");
			           $nlecs = mysqli_num_rows($q1);
			           $count=0;
			                         
			           	for($i=0; $i<$nlecs; $i++) 
			           	   {

			                	$r1 = mysqli_fetch_assoc($q1);            
			           	               echo '<td align="center" valign="center">';       	                   	           	
			 		                    $l_id = $r1['l_id'];
			                            $grade = $r1['grade'];
			                            $topic = $r1['topic'];
			                            $source = $r1['source'];
			                              echo '<center> <br> Grade: '.$grade.' <br> <b> '.$topic.' </b> <br> '.$source.' <br><br> </center>';
			        ?>
			        	
			        		<input type="checkbox" name="atc[]" value="<?php echo $l_id; ?>">Add to Cart
			        	



			        <?php
			                              $count++;       
			                           echo '</td>';

			                           if($count%4==0)
			                           	 echo '</tr><tr>';
			                }
			        ?>    
			        
			        </table>
				    </center>
				    <br><br><br>
				    <input type="submit" id="button" name="addtocart" value="ADD TO CART" style="color:black">
				    </form>
				    <br>
				    <a href="viewcart.php"> <font size="4"> VIEW CART </font> </a>

				    <?php 
				//}
				//else if($type=="s_complete") {}
				    ?>


				    <br><br>
				    <form action="school_cart.php" method="POST">
				    <label>Grade:</label><input type="number" style="width:50px" value="1" min="1" style="color:black" required><br><br>
				    <label>Topic:</label><input type="text" name="topic" required><br><br>
				    <input type="submit" id="button" name="addlecture" value="ADD LECTURE" style="color:black" onClick="window.location.reload()" >
				    </form>
				    <br><br><br>
					<center>			       
			        <table width="80%" border="0" cellpadding="10" cellspacing="10" >
			      	<tr>
			        <?php
			        
			           $q1 = mysqli_query($connect,"select * from lectures");
			           $nlecs = mysqli_num_rows($q1);
			           $count=0;
			                         
			           	for($i=0; $i<$nlecs; $i++) 
			           	   {

			                	$r1 = mysqli_fetch_assoc($q1);            
			           	               echo '<td align="center" valign="center">';       	                   	           	
			 		                    $l_id = $r1['l_id'];
			                            $grade = $r1['grade'];
			                            $topic = $r1['topic'];
			                            $source = $r1['source'];
			                              echo '<center> <br> Grade: '.$grade.' <br> <b> '.$topic.' </b> <br> '.$source.' <br><br> </center>';
			        ?>
			        	
			        		
			        	



			        <?php
			                              $count++;       
			                           echo '</td>';

			                           if($count%4==0)
			                           	 echo '</tr><tr>';
			                }
			        ?>    
			        
			        </table>
				    </center>

			




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