<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title> @yield('title') </title>
		<meta name="description" content="Geology">
		<meta name="author" content="Oceania">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="http://www.geology.udsm.ac.tz/home//images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="{{url('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
		
		<!-- Font Awesome CSS -->
		<link href="{{ url('fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="{{ url('fonts/fontello/css/fontello.css')}}" rel="stylesheet">

		<!-- Plugins -->
		<link href="{{ url('plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
		<link href="{{ url('frnt_css/animations.css')}}" rel="stylesheet">
		<link href="{{ url('plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!-- iDea core CSS file -->
		<link href="{{ url('css/style.css') }}" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
		<link href="{{ url('css/skins/blue.css')}}" rel="stylesheet">

		<!-- Custom css -->
		<link href="{{ url('css/custom.css')}}" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<!-- body classes 
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> 
	-->
	<body class="no-trans boxed">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

			<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <divclass="header-top dark">) -->
			<!-- ================ -->
			<div class="header-top">
				<center><img src="images/banner.gif" alt="" width = "auto" /></center>
			</div>
			<!-- header-top end -->
			
			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

					<header class="header fixed clearfix">
				<div class="container">
					<div class="row">
					<div class="col-md-12">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- ================ -->
								<div class="main-navigation animated">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<ul class="nav navbar-nav">
													<li class="">
														<a href="/">Home</a>
                                                    </li>

													<li class="">
														<a href="/about">About Us</a>
                                                    </li>

													<li class="">
														<a href="/people">People</a>
                                                    </li>

													<li class="">
														<a href="/programs">Degree Programs</a>
                                                    </li>

													<li class="">
														 <a href="/research">Research</a>
                                                    </li>

													<li class="">
														<a href="/news">News</a>
                                                    </li>

													<li class="">
                                                        <a href = "/facility">Facilities</a>
													</li>

                                                    <li class="">
                                                        <a href = "/event">Events</a>
													</li>

												</ul>
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->

							</div>
							<!-- header-right end -->

						</div>
					</div>
				</div>
			</header>
			<!-- header end -->					<!--banner or main-->

@yield('content')
						
@yield('sidebar')

					</div>
				</div>
			</section>
  
  <!--footer-->
  <!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
							  
								<div class="footer-content">
								  <h2>Contacts</h2>
									
									<ul class="list-icons">
										<li><i class="fa fa-map-marker pr-10"></i>University of Dar es Salaam</li>
										<li><i class="fa fa-phone pr-10"></i>Department of Geology</li>
										<li><i class="fa fa-fax pr-10"></i>P.O.Box 35052 Dar Es Salaam</li>
										<li><i class="fa fa-envelope-o pr-10"></i>geology@udsm.ac.tz</li>
									</ul>
                                    <p>Copyright © 2016 UDSM Geology Department. <br/>All Rights Reserved</p>
								</div>
							</div>
							<div class="space-bottom hidden-lg hidden-xs"></div>
							<div class="col-sm-6 col-md-4">
								<div class="footer-content">
									<h2>Related Links</h2>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="https://mem.go.tz" target="_blank" class="new_window">Ministry of Energy and Minerals, Tanzania</a></li><li><a href="http://www.tgs.or.tz" target="_blank" class="new_window">Tanzania Geological Society</a></li><li><a href="http://www.geology.udsm.ac.tz/home/www.gst.go.tz/index.html" target="_blank" class="new_window">The Geological Survey of Tanzania (GST)</a></li><li><a href="https://www.udsm.ac.tz/" target="_blank" class="new_window">University of Dar es Salaam</a></li>											
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="footer-content">
									<h2>Quick Links</h2>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="http://undergraduate.udsm.ac.tz/index.php/undergraduate-programmes" target="_blank" class="new_window"> Undergraduate Programmes</a></li><li><a href="http://undergraduate.udsm.ac.tz/index.php/admission" target="_blank" class="new_window">Admission</a></li><li><a href="https://www.udsm.ac.tz/node/782" target="_blank" class="new_window">Almanac 2016/2017</a></li><li><a href="http://undergraduate.udsm.ac.tz/index.php/academic-units" target="_blank" class="new_window">Colleges & Schools</a></li><li><a href="http://undergraduate.udsm.ac.tz/index.php/entry-requirements" target="_blank" class="new_window">Entry Requirements</a></li><li><a href="http://udsm.ac.tz/node/308" target="_blank" class="new_window">Guidance to Visitors</a></li><li><a href="http://support.udsm.ac.tz/" target="_blank" class="new_window">IT Support</a></li><li><a href="http://postgraduate.udsm.ac.tz/" target="_blank" class="new_window">Postgraduate</a></li><li><a href="https://aris2.udsm.ac.tz/pgoa/login.php" target="_blank" class="new_window">Postgraduate Online Application</a></li><li><a href="https://www.udsm.ac.tz/node/783" target="_blank" class="new_window">Undergraduate Prospectus 2016 to 2017</a></li>											
										</ul>
									</nav>
									</div>
								</div>
							</div>
						</div>
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
				<!-- .footer end -->
                                

				
			</footer>
			<!-- footer end --></div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="{{ url('plugins/jquery.js')}}"></script>
		<script type="text/javascript" src="{{ url('bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="{{ url('plugins/modernizr.js')}}"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="{{ url('plugins/isotope/isotope.pkgd.min.js')}}"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="{{ url('plugins/owl-carousel/owl.carousel.js')}}"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="{{ url('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="{{ url('plugins/jquery.appear.js')}}"></script>

		<!-- Sharrre javascript -->
		<script type="text/javascript" src="{{ url('plugins/jquery.sharrre.min.js')}}"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="{{ url('plugins/jquery.countTo.js')}}"></script>

		<!-- Parallax javascript -->
		<script src="{{ url('plugins/jquery.parallax-1.1.3.js')}}"></script>

		<!-- Contact form -->
		<script src="{{ url('plugins/jquery.validate.js')}}"></script>

		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="{{ url('plugins/jquery.browser.js')}}"></script>
		<script type="text/javascript" src="{{ url('plugins/SmoothScroll.js')}}"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="{{ url('js/template.js')}}"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="{{ url('js/custom.js')}}"></script>

	</body>
</html>
