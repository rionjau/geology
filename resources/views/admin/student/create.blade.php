@extends('layout.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-sm-12">
			@if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
        </div>
	</div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
                <div class="row x_title">
					<div class="col-md-12">
						<h3> Add Student</h3>
					</div>					
                </div>
                {!! Form::open(['route' => 'student.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
                    <table class="table table-bordered table-responsive">
						<tr>
							<td>{{ Form::label('first_name', 'First Name') }}</td>
							<td>{{ Form::text('first_name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}</td>
						</tr>
                        
                        <tr>
							<td>{{ Form::label('last_name', 'Last Name') }}</td>
							<td>{{ Form::text('last_name', null, array('class' => 'form-control')) }}</td>
						</tr>

						<tr>
							<td>{{ Form::label('level', 'level') }}</td>
							<td>{{ Form::text('level', null, array('class' => 'form-control')) }}</td>
						</tr>
                        
                        <tr>
							<td>{{ Form::label('degree_program', 'Degree Program') }}</td>
							<td>{{ Form::text('degree_program', null, array('class' => 'form-control')) }}</td>
						</tr>

                        
                        <tr>
							<td>{{ Form::label('working_area', 'Working Area') }}</td>
							<td>{{ Form::text('working_area', null, array('class' => 'form-control')) }}</td>
						</tr>

                        
                        <tr>
							<td>{{ Form::label('project', 'Project') }}</td>
							<td>{{ Form::text('project', null, array('class' => 'form-control')) }}</td>
						</tr>

                        
                        <tr>
							<td>{{ Form::label('abstract', 'Abstract') }}</td>
							<td>{{ Form::text('abstract', null, array('class' => 'form-control')) }}</td>
						</tr>
                        
                        <tr>
							<td colspan="2">
								{{ Form::submit('Create', array('class' => 'btn btn-default')) }}
							</td>
                        </tr>
                        
					</table>
                {!! Form::close() !!}
                <div class="clearfix"></div>
			</div>
		</div>
    </div>
</div>
<!-- /page content -->
@endsection