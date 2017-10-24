@extends('layout.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
                <div class="row x_title">
					<div class="col-md-12">
						<h3> Edit a Research Program</h3>
					</div>					
                </div>
                {!! Form::model($research,['method' => 'PATCH','route' => ['research.update', $research->id]]) !!}
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
							<td>{{ Form::label('major_output', 'Major output') }}</td>
							<td>{{ Form::text('major_output', null, array('class' => 'form-control')) }}</td>
						</tr>
                        <tr>
							<td colspan="2">
								{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
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