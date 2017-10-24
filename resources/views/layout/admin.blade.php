<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield ('title') </title>

		<!-- Bootstrap -->
		<link href="{{URL('css/bootstrap.min.css')}}" rel="stylesheet">
		
		<!-- Font Awesome -->
		<link href="{{URL('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="{{URL('css/custom.min.css')}}" rel="stylesheet">
		
	</head>

	<body class="nav-md">
    
		<div class="container body">
			
			<div class="main_container">
			
				<div class="col-md-3 left_col">
					
					<div class="left_col scroll-view">
						
						<!-- Stanbic Bank logo-->
						
						<div class="navbar nav_title" style="border: 0;">
							
							<a href="/admin" class="site_title"><i class="fa fa-circle"></i> <span>Geology Dept</span></a>
						
						</div>
						
						<!-- /Stanbic Bank logo-->
						
						<div class="clearfix"></div>

						<!-- Admin profile quick info -->
						
						<div class="profile">
			
							<div class="profile_pic">
								
								<img src="{{URL('images/img.jpg')}}" alt="..." class="img-circle profile_img">
							
							</div>
							
							<div class="profile_info">
								
								<span>Welcome,</span>
								
								<h2>{{ucfirst(Auth::user()->first_name)}}</h2>
							
							</div>
						
						</div>
						
						<!-- /menu profile quick info -->

						<br />

						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							
							<div class="menu_section">
								
								<h3>Navigation</h3>
								
								<ul class="nav side-menu">
									
									<!-- Home -->
									<li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
									
									
									<!-- Staff Module-->
									<li><a><i class="fa fa-user"></i> Staff Management <span class="fa fa-chevron-down"></span></a>
										
										<ul class="nav child_menu">
											
											<li><a href="{{ route('staff.index')}}">All Staff</a></li>
											
											<li><a href="{{ route('staff.index')}}">Administrative Staff</a></li>

                                            <li><a href="{{ route('staff.index')}}">Technical Staff</a></li>

                                            <li><a href="{{ route('staff.index')}}">Academic Staff</a></li>

                                            <li><a href="{{ route('staff.index')}}">Support Staff</a></li>

											<li><a href="{{ route('staff.create')}}">Add a new Staff member</a></li>


										</ul>
										
									</li>

									<!-- Student module-->
									<li><a><i class="fa fa-graduation-cap"></i>Student Management<span class="fa fa-chevron-down"></span></a>
										
										<ul class="nav child_menu">

                                           <li><a href="{{ route('student.index')}}">All students</a></li>
											
											<li><a href="{{ route('student.index')}}">MSC</a></li>
											
                                            <li><a href="{{ route('student.index')}}">PHD</a></li>

                                            <li><a href="{{route('student.create')}}">Add a student</a></li>
											
											
										</ul>
										
									</li>

									<!-- Research module -->
									<li><a><i class="fa fa-edit"></i>Research<span class="fa fa-chevron-down"></span></a>
										
										<ul class="nav child_menu">
											
											<li><a href="{{ route ('research.index')}}">Research programs conducted</a></li>
											
                                            <li><a href="{{ route ('centerIndex')}}">Research centers</a></li>											
											
										</ul>
										
									</li>
                                    
									<!-- Facilities module -->
									<li><a><i class="fa fa-building"></i>Facilities<span class="fa fa-chevron-down"></span></a>
										
										<ul class="nav child_menu">
											
											<li><a href="{{route ('facilityIndex')}}">All facilities</a></li>

											<li><a href="{{ route('createFacility')}}">Add New facility</a></li>
											
											
										</ul>
										
									</li>

									<!--News module -->
									<li><a><i class="fa fa-newspaper-o"></i>News<span class="fa fa-chevron-down"></span></a>
										
										<ul class="nav child_menu">
											
											<li><a href="{{ route ('news.create')}}">Add News</a></li>

											<li><a href="{{ route ('newsCategory.index')}}">All News categories</a></li>

											
											
										</ul>
										
									</li>


                                    <!--- Events module -->

                                    <li><a><i class="fa fa-calendar"></i>Events<span class="fa fa-chevron-down"></span></a>
										
										<ul class="nav child_menu">
											
											<li><a href="{{ route ('events.create')}}">Add Event</a></li>
											
											<li><a href="{{ route ('eventsCategory.index')}}">All Event categories</a></li>

											
										</ul>
										
									</li>

									<!-- Feedback -->
									<li><a href=""><i class="fa fa-commenting"></i>Feedback</a></li>

								</ul>
							
							</div>
							
						</div>
						<!-- /sidebar menu -->
					</div>
				
				</div>

				<!-- top navigation -->
				<div class="top_nav">
					
					<div class="nav_menu">
						
						<nav>
							
							<div class="nav toggle">
								
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							
							</div>

							<ul class="nav navbar-nav navbar-right">
								
								<li class="">
									
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										
										<img src="" alt="">{{ucfirst(Auth::user()->first_name)}}
										
										<span class=" fa fa-angle-down"></span>
									
									</a>
									
									<ul class="dropdown-menu dropdown-usermenu pull-right">
										
										<li><a href=""> Front </a></li>
										
										
										<li><a href=""><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
									</ul>
								
								</li>

								<li role="presentation" class="dropdown">
									
									<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
										
										<i class="fa fa-envelope-o"></i>
										
										<span class="badge bg-green">6</span>
									
									</a>
									
									<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
										
										<li>
											
											<a>
											
												<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
												
												<span>
													
													<span>John Smith</span>
													
													<span class="time">3 mins ago</span>
												
												</span>
												
												<span class="message">
													
													Film festivals used to be do-or-die moments for movie makers. They were where...
												
												</span>
												
											</a>
										
										</li>
										
										<li>
											
											<a>
												
												<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
												
												<span>
													
													<span>John Smith</span>
													
													<span class="time">3 mins ago</span>
												
												</span>
												
												<span class="message">
													
													Film festivals used to be do-or-die moments for movie makers. They were where...
												
												</span>
												
											</a>
										
										</li>
										
									</ul>
								
								</li>
								
							</ul>
						
						</nav>
						
					</div>
				
				</div>
				<!-- /top navigation -->

				@yield('content')

				<!-- footer content -->
				<footer>
					
					<div class="pull-right">
					
						<p class="copyright">UD - Department of Geology. All rights reserved.</p>
					
					</div>
					
					<div class="clearfix"></div>
				
				</footer>
				<!-- /footer content -->
				
			</div>
		
		</div>
		
		<!-- jQuery -->
		<script src="{{URL('js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap -->
		<script src="{{URL('js/bootstrap.min.js')}}"></script>
		
		<!-- FastClick -->
		<script src="{{URL('js/fastclick.js')}}"></script>
		
		<!-- NProgress -->
		<script src="{{URL('js/nprogress.js')}}"></script>
		
		<!-- bootstrap-progressbar -->
		<script src="{{URL('js/bootstrap-progressbar.min.js')}}"></script>

		<!-- Custom Theme Scripts -->
		<script src="{{URL('js/custom.min.js')}}"></script>

	</body>

</html>
