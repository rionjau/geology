@extends ('layout.app')

@section('title')

 Geology Dept | NEWS

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
 
	<!-- ================ -->
	<div class="main col-md-9">
		<!-- page-title start -->
		<!-- ================ -->
		<h2 class="page-title"><b>News</b></h2>
		<div class="separator-2"></div>
		<!-- page-title end -->
		
		<div class="row">
			<div class="col-md-12">
				<div><b>2017/04/24</b></br><a href="http://www.geology.udsm.ac.tz/home/base/news_details/2">http://www.geology.udsm.ac.tz/home/base/news_details/2</a></div></br><img src='http://www.geology.udsm.ac.tz/home//file_shared/Mineralium.jpg' width = '50%' alt = ''/><div><b>2017/02/02</b></br><a href="http://www.geology.udsm.ac.tz/home/base/news_details/1">What triggered the largest volcanic eruption witnessed by mankind?</a></div></br><img src='http://www.geology.udsm.ac.tz/home//file_shared/whattriggere.jpg' width = '50%' alt = ''/></br></br>
			</div>
			
		</div>
		<hr>
	</div>

@endsection