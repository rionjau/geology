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
						<h3>All Staff</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
								<img src="..." alt="...">
								<div class="caption">
									<h3>Thumbnail label</h3>
									<p>...</p>
									<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
            </div>
        </div>
		<!-- Pager-->
		<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 15px 0px;">
			<nav aria-label="">
				<ul class="pager">
					<li><a href="#">Previous</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</nav>
		</div>
    </div>
</div>
@endsection