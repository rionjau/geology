@extends('layout.app')

@section('title')

 Geology Dept | ABOUT

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
				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title">Introduction</h1>
				<div class="separator-2"></div>
				<!-- page-title end -->
				
				<div class="row">
					<div class="col-md-12">
						<p style="text-align: justify;">
				The department of geology was established in 1974 as an academic unit of the University of Dar es Salaam. Currently, the department forms one of many departments of the College of Natural and Applied Sciences (CoNAS) of the University of Dar es Salaam. We are guided by the mission, vision and values of the University of Dar es Salaam. Our main duties are teaching, researching, and public services through consultancy.</p>
			<p style="text-align: justify;">
				We do offer the four years undergraduate degree programmes:</p>
			<ul>
				<li style="text-align: justify;">
					B.Sc. in Geology,</li>
				<li style="text-align: justify;">
					B.Sc. with Geology,</li>
				<li style="text-align: justify;">
					B.Sc. Engineering Geology and</li>
				<li style="text-align: justify;">
					B.Sc. Petroleum Geology</li>
			</ul>
			<p style="text-align: justify;">
				as well as postgraduate degree programmes by research (Thesis) and coursework &amp; dissertation (MSc and PhD).</p>
			<p style="text-align: justify;">
				We conduct research in different fields of Earth Sciences e.g. hydrogeology, economic geology, gemmology, geochemistry, geophysics and environmental sciences.</p>
			</br></br>
					</div>
					
				</div>
				<hr>
			</div>
<!-- main end -->



@endsection