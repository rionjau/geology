@extends('layout.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
                <div class="row x_title">
					<div class="col-md-12">
						<h3> Edit Staff</h3>
					</div>					
                </div>
                {!! Form::model($staff,['method' => 'PATCH','route' => ['staff.update', $staff->id]]) !!}
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
							<td>{{ Form::label('title', 'Title') }}</td>
							<td>{{ Form::text('title', null, array('class' => 'form-control')) }}</td>
						</tr>
                        
                        <tr>
							<td>{{ Form::label('office_contact', 'Office Contact') }}</td>
							<td>{{ Form::text('office_contact', null, array('class' => 'form-control')) }}</td>
						</tr>

                        
                        <tr>
							<td>{{ Form::label('mobile_contact', 'Office Contact') }}</td>
							<td>{{ Form::text('mobile_contact', null, array('class' => 'form-control')) }}</td>
						</tr>

                        
                        <tr>
							<td>{{ Form::label('email', 'University Email') }}</td>
							<td>{{ Form::text('email', null, array('class' => 'form-control')) }}</td>
						</tr>

                        
                        <tr>
							<td>{{ Form::label('personal_email', 'Personal Email') }}</td>
							<td>{{ Form::text('personal_email', null, array('class' => 'form-control')) }}</td>
						</tr>
                        
                        
                        <tr>
							<td>{{ Form::label('image', 'Staff Image (600 x 600px)') }}</td>
							<td>{{ Form::file('image', array('class' => 'form-control')) }}</td>
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