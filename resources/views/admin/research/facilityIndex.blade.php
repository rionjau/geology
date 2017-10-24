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
						<h3>Facilities</h3>
					</div>
				</div>

			@forelse ($facilities as $facility )

                <div class="col-md-3 col-sm-6 col-xs-12" style="padding: 15px 0px; border-bottom: #ccc dotted 2px">

					<div class="col-md-6 col-sm-12 col-xs-12">
						<h2 class="text-center"><a href="#">{{ $facility->name }}</a></h2>

					</div>
				</div>

		    @empty
			  
			   <h4 class = "text-center"> There are no facilities in the database </h4>
            
			@endforelse
				 <br/>
				<div class="clearfix"></div>
            </div>
        </div>
		<!-- Pager-->
		<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 15px 0px;">
			<nav aria-label="">
				<ul class="pager">
					<li><a href="{{ route ('createFacility')}}">Add a Facility</a></li>
				</ul>
			</nav>
		</div>
    </div>
</div>
@endsection