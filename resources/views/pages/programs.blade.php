@extends('layout.app')

@section('title')

 Geology Dept | DEGREE PROGRAMS

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
			<h2 class="page-title"><b>Degree Programs</b></h2>
			<div class="separator-2"></div>
			<!-- page-title end -->
			
			<div class="row text-justify" >
				<div class="col-md-12">
							<h2>POSTGRADUATE</h2>
					We offer postgraduate degrees of  Master of Science and Doctor of Philosophy by thesis.
					<ul>
						<li>Master of Science (Geology) by Thesis</li>
						<li>Master of Science in Petroleum Geology(coursework & dissertation)</li>
						<li>Doctor of Philosophy (Geology) by Thesis</li>
					</ul>
					
				<h2>UNDERGRADUATE</h2>
				<p class = "text-justify">The structure of our curriculum is market driven.  
				Currently there is a big demand of geoscientists in the mineral-mining and -exploration industries, and the newly evolving gas and petroleum industry in the region. As a result the undergraduate B.Sc. (Geology), traditionally offered for 3 years, was extended to 4 years in the last decade to accommodate the desired skills by the market. Additionally, two new degree program namely B.Sc. (with Geology) and B.Sc. (Engineering Geology) were introduced. 
				Last year 2013, a new program in Petroleum geology (B.Sc. (Petroleum Geology)) was launched. Consequently, an annual intake increased from 25 students in the first year to the current intake of about 75 students for all the four degree programs we have.
				</p>

				<h2>ENTRY QUALIFICATIONS</h2>
				<p class = "text-justify">The program will admit students meeting the minimum entry qualifications of the University of Dar Es Salaam
				Certificate of Secondary Education Examination (C.S.E.E.) or equivalent, with passes in FIVE approved subjects THREE of which must be at credit level, obtained prior to sitting for the Advanced Certificate of Secondary Education Examination (A.C.S.E.E.) or equivalent.
				Two principal level passes in Mathematics and Physics in the A.C.S.E.E. or equivalent with total points from three subjects not below 2 based on the following grade to pint conversion scale: A=5; B=4; C=3; D=2; E=1; S=0.5 OR
				An appropriate equivalent diploma of not less than second class/Credit level or B average obtained from a college, which is fully registered by NACTE or approved by the UDSM Senate. For Diploma that are further classified into Upper and Lower Second classes, the requirement shall be an Upper Second class or B+ average.
				</p>

				<h2>UNDERGRADUATE DEGREE PROGRAMMES (4 Years)</h2>
					<ul>
						<li>Bachelor of Science in Geology</li>
						<li>Bachelor of Science in Engineering Geology</li>
						<li>Bachelor of Science with Geology</li>
						<li>Bachelor of Science Petroleum Geology</li>
					</ul>
				</br></br>
				</div>
				
			</div>
			<hr>
		</div>
		<!-- main end -->

@endsection