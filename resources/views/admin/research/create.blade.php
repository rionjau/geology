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
						<h3> Add a Research Program</h3>
					</div>					
                </div>
                {!! Form::open(['route' => 'research.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
                    <table class="table table-bordered table-responsive">
						<tr>
							<td>{{ Form::label('name', 'Research Name') }}</td>
							<td>{{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}</td>
						</tr>
                        
                        <tr>
							<td>{{ Form::label('sponsors', 'Research Sponsors') }}</td>
							<td>{{ Form::text('sponsors', null, array('class' => 'form-control')) }}</td>
						</tr>

						<tr>
							<td>{{ Form::label('duration', 'Research Duration') }}</td>
							<td>{{ Form::text('duration', null, array('class' => 'form-control')) }}</td>
						</tr>
                        
                        <tr>
							<td>{{ Form::label('investigators', 'Research Investigators') }}</td>
							<td>{{ Form::text('investigators', null, array('class' => 'form-control')) }}</td>
						</tr>

                        
                        <tr>
							<td>{{ Form::label('major_output', 'Major Output') }}</td>
							<td>{{ Form::text('major_output', null, array('class' => 'form-control')) }}</td>
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