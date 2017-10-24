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
						<h3> Add News</h3>
					</div>					
                </div>
                {!! Form::open(['route' => 'news.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
                    <table class="table table-bordered table-responsive">
						<tr>
							<td>{{ Form::label('title', 'Title') }}</td>
							<td>{{ Form::text('title', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}</td>
						</tr>
                        
                        <tr>
							<td>{{ Form::label('link', 'Link') }}</td>
							<td>{{ Form::text('link', null, array('class' => 'form-control')) }}</td>
						</tr>

						<tr>
							<td>{{ Form::label('details', 'Description') }}</td>
							<td>{{ Form::text('details', null, array('class' => 'form-control')) }}</td>
						</tr>
                        
                         <tr>
							<td>{{ Form::label('categoryId', 'News Category') }}</td>
							<td>{{ Form::select('categoryId', $category, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}</td>
						</tr>
                        
                        
                        <tr>
							<td>{{ Form::label('image', 'Image (600 x 600px)') }}</td>
							<td>{{ Form::file('image', array('class' => 'form-control')) }}</td>
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