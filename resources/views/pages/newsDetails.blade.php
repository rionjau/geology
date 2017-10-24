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

	<div class="main col-md-9">
	<!-- page-title start -->
	<!-- ================ -->
	<h2 class="page-title"><b>News Details</b></h2>
	<div class="separator-2"></div>
	<!-- page-title end -->
	
	<div class="row">
		<div class="col-md-12">

			<img src='{{url('newsImages', $new->image)}}' width = '50%' alt = ''/>
			<h2>{{$new->title}}</h2>
			<p>{{$new->created_at}}</p>
			<p>{{$new->details}}</p>

		</div>
		
	</div>
	<hr>
</div>
	

@endsection