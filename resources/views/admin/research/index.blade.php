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
						<h3>Research Programs conducted</h3>
					</div>
				</div>
		 


			@forelse ($researchs as $research )

                <div class="col-md-3 col-sm-6 col-xs-12" style="padding: 15px 0px; border-bottom: #ccc dotted 2px">

					<div class="col-md-6 col-sm-12 col-xs-12">
						<h2 class="text-center"><a href="#">{{ $research->name }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $research->sponsors }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $research->duration }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $research->investigators }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $research->major_output }}</a></h2>

					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
							<button type="submit" class="btn btn-primary"><a href="{{ route('research.edit', $research->id)}}" style="color: #fff">Edit</a></button>
							
							{!! Form::open(['method' => 'DELETE','route' => ['research.destroy', $research->id], 'style'=>'display:inline']) !!}
            				{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
           					{!! Form::close() !!}
						</div>
					</div>
				</div>

		    @empty
			  
			   <h4 class = "text-center"> There are no research programs in the database </h4>
            
			@endforelse
				 <br/>
				<div class="clearfix"></div>
            </div>
        </div>
		<!-- Pager-->
		<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 15px 0px;">
			<nav aria-label="">
				<ul class="pager">
					<li><a href="{{ route ('research.create')}}">Add a research program</a></li>
				</ul>
			</nav>
		</div>
    </div>
</div>
@endsection