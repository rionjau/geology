@extends('layout.app')

@section('title')

  Geology Dept | HOME

@endsection

@section('sidebar')
						<aside class="col-md-3">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Latest News</h3>
									<div class="separator"></div>
									<nav>

										<ul class="nav nav-pills nav-stacked">
											@foreach($news as $new)

												<li>
													<a @if(@empty($new->link))
														href="news/details/{{$new->id}}"
														@else
														href="{{$new->link}}"
														@endif
													  >
													  {{ $new->title }}
													</a>

												</li>

											@endforeach

										</ul>
									</nav>
								</div>
								<!-- Archives-->
								<div class="block clearfix">
									<h3 class="title">Archives</h3>
									<div class="separator"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											@foreach($archives as $archive)

												<li>
													<a @if(@empty($archive->link))
														href="archives/details/{{$archive->id}}"
														@else
														href="{{$archive->link}}"
														@endif
													  >
													  {{ $archive->title }}
													</a>

												</li>

											@endforeach										
										</ul>
									</nav>
								</div>
							</div>
						</aside>

@endsection


@section('content')

<!-- main start -->
	<!-- ================ -->
	<div class="main col-md-9">

		<!-- Content Sliders start -->
		<!-- ============================================================================== -->
		<!-- <div class="space-bottom"></div> -->
		<div class="owl-carousel content-slider-with-controls-autoplay">
			<div class="overlay-container">
				<img src="images/home_4.JPG" alt="">
				<!-- <div class="caption">
					<h3 class="title">Welcome</h3>
					The department of geology was established in 1974 as an academic unit of the University of Dar es Salaam...
				</div>
				 <a href="images/portfolio-item-2.jpg" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a> -->
			</div>
			
		</div>
		<div>
			<h2>Welcome</h2>
			<p>The department of geology was established in 1974 as an academic unit of the University of Dar es Salaam. Currently, the department forms one of many departments of the College of Natural and Applied Sciences (CoNAS) of the University of Dar es Salaam. We are guided by the mission, vision and values of the University of Dar es Salaam. Our main duties are teaching, researching, and public services through consultancy. <a href="/about"><b>learn more...</b></a></p>
		</div>
	</div>
<!-- main end -->

@endsection