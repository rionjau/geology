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
						<h3> Add a Research Center</h3>
					</div>					
                </div>
                {!! Form::open(['route' => 'storeCenter', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
                    <table class="table table-bordered table-responsive">
						<tr>
							<td>{{ Form::label('name', 'Name of the Research Center') }}</td>
							<td>{{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}</td>
						</tr>
                        
                        <tr>
							<td>{{ Form::label('location', 'Location of the Research Center') }}</td>
							<td>{{ Form::text('location', null, array('class' => 'form-control')) }}</td>
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