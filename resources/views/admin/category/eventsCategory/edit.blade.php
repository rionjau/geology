@extends('layout.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
                <div class="row x_title">
					<div class="col-md-12">
						<h3> Edit an Event Category</h3>
					</div>					
                </div>
                {!! Form::model($category,['method' => 'PATCH','route' => ['eventsCategory.update', $category->id]]) !!}
                    <table class="table table-bordered table-responsive">
						<tr>
							<td>{{ Form::label('category_name', 'Category Name') }}</td>
							<td>{{ Form::text('category_name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}</td>
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