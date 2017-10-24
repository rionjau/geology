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
						<h3> Add Staff</h3>
					</div>					
                </div>
                {!! Form::open(['route' => 'staff.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
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
							<td>{{ Form::label('university_email', 'University Email') }}</td>
							<td>{{ Form::text('university_email', null, array('class' => 'form-control')) }}</td>
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

						    <td>{{ Form::label('category', 'Staff category') }}</td>

                            <td>{{ Form::select('category', $category, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}</td>
                        
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