@extends('layout.admin')


@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <!-- -->
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="dashboard_graph">
                <div class="row x_title">
					<div class="col-md-12">
						<h3>Research Centers</h3>
					</div>
				</div>

			@forelse ($centers as $center )

                <div class="col-md-3 col-sm-6 col-xs-12" style="padding: 15px 0px; border-bottom: #ccc dotted 2px">

					<div class="col-md-6 col-sm-12 col-xs-12">
						<h2 class="text-center"><a href="#">{{ $center->name }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $center->location }}</a></h2>

					</div>
				</div>

		    @empty
			  
			   <h4 class = "text-center"> There are no research centers in the database </h4>
            
			@endforelse
				 <br/>
				<div class="clearfix"></div>
            </div>
        </div>
		<!-- Pager-->
		<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 15px 0px;">
			<nav aria-label="">
				<ul class="pager">
					<li><a href="{{ route ('createCenter')}}">Add a research Center</a></li>
				</ul>
			</nav>
		</div>
    </div>
</div>
@endsection