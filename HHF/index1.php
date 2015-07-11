<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Meghna One page parallax responsive HTML Template ">

        <meta name="author" content="Muhammad Morshed">

        <title>Meghna | Responsive Multipurpose Parallax HTML5 Template</title>

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
	<!--	<div id="loading-mask">
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
							<img src="img/logo-meghna.png" alt="Meghna" />
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#showcase">Portfolio</a></li>
                        <li><a href="#our-team">Team</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact-us">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

        <?php
    	$con=mysqli_connect('localhost', 'root', '','hhf') or trigger_error("Unable to connect to the database: " . mysqli_error());
    //	mysqli_select_db('hhf') or trigger_error("Unable to switch to the database: " . mysqli_error());
    	$result=mysqli_query($con,"SELECT * FROM challenges");
          	?>


    <!--
    		Start Blog Section
    		=========================================== -->

    		<section id="blog" class="bg-one">
    			<div class="container">
    				<div class="row">

    					<!-- section title -->
    					<div class="title text-center wow fadeInDown">
    						<h2> Chall <span class="color">enges</span></h2>
    						<div class="border"></div>
    					</div>
    					<!-- /section title -->





    					<div class="clearfix">
                <?php
                        $i=1;
                        while($row=mysqli_fetch_array($result))
                             {
                            ?>

    						<!-- single blog post -->
    						<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
                  <div class="note">
    								<div class="media-wrapper">
    									<img src="<?php echo $row['c_image']; ?>"  alt="Meghna" class="img-responsive">
    								</div>

    								<div class="excerpt">
    									<h3><?php echo $row['challengeName']; ?></h3>
    									<p><?php echo $row['description']; ?></p>
    									<a class="btn btn-transparent" href="facebook.com">Challenge me</a>
                      </div>
                      <a href="<?php echo $row['link']; ?>"><img src="img/blog/face.png"></a>
                      <a class="twitter-share-button"
                      href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button%3Fsrc%3Dtwitter"
                      data-counturl="<?php echo $row['link']; ?>"><img src="img/blog/tweet.png" height="40" width="90"></a>


    							</div>

    						</article>
                <?php
                $i++;}
                ?>
    					</div>


    					<div class="all-post text-center">
                <h3>Post your Challenge</h3>
                <form name="challenge" method="post" action="uploader.php" enctype="multipart/form-data">
                <table align="center" rows=3 cols=2>
                  <tr style="text-align:left;">
                <td><h4>Name of Challenge:</h4> </td><td><input type="text" name="challengeName"></td></tr>
                <tr style="text-align:left;"><td><h4>Link:</h4> </td><td><input type="text" name="link"></td></tr>
    						<tr style="text-align:left;"><td><h4>Description:</h4></td> <td><textarea name="description" rows="4" cols="30"></textarea></td></tr>

                <tr><h4>Share your Photo or Video:</h4></tr>
    <td><input type="file" name="fileToUpload" id="fileToUpload" size="50" /></td></tr></table>
                <br><input type="submit" value="Submit your challenge" class="btn btn-transparent"></a>
    					</form>
              </div>

    				</div> <!-- end row -->
    			</div> <!-- end container -->
    		</section> <!-- end section -->




		<!-- Srart Contact Us
		=========================================== -->
		<section id="contact-us">
			<div class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Get In <span class="color">Touch</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h3>Contact Details</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
							</div>

							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Phone: +880-31-000-000</span>
							</div>

							<div class="con-info clearfix">
								<i class="fa fa-fax fa-lg"></i>
								<span>Fax: +880-31-000-000</span>
							</div>

							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: hello@meghna.com</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->

					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="sendmail.php" role="form">

							<div class="form-group">
								<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
							</div>

							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
							</div>

							<div class="form-group">
								<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
							</div>

							<div class="form-group">
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
							</div>

							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>

							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>

							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
							</div>

						</form>
					</div>
					<!-- ./End Contact Form -->

				</div> <!-- end row -->
			</div> <!-- end container -->

			<!-- Google Map -->
			<div class="google-map wow fadeInDown" data-wow-duration="500ms">
				<div id="map-canvas"></div>
			</div>
			<!-- /Google Map -->

		</section> <!-- end section -->

		<!-- end Contact Area
		========================================== -->

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
								<img src="img/logo-meghna.png" alt="Meghna" />
							</a>
							<br />

							<p>Design And Developed by <a href="http://www.themefisher.com"> Themefisher Team</a>. Copyright &copy; 2015. All Rights Reserved.</p>
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
