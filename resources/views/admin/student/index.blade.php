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
						<h3>All Students</h3>
					</div>
				</div>

			@foreach ($students as $student)

                <div class="col-md-3 col-sm-6 col-xs-12" style="padding: 15px 0px; border-bottom: #ccc dotted 2px">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img class="img-responsive" src="{{url('images', $student->image)}}" alt="" />
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h2 class="text-center"><a href="#">{{ $student->first_name }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $student->last_name }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $student->level }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $student->degree_program }}</a></h2>
						<h2 class="text-center"><a href="#">{{ $student->working_area }}</a></h2>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
							<button type="submit" class="btn btn-primary"><a href="{{ route('student.edit', $student->id)}}" style="color: #fff">Edit</a></button>
							
							{!! Form::open(['method' => 'DELETE','route' => ['student.destroy', $student->id], 'style'=>'display:inline']) !!}
            				{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
           					{!! Form::close() !!}
						</div>
					</div>
				</div>

		    @endforeach

				 <br/>
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