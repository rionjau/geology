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
						<h3>All News Categories</h3>
					</div>
				</div>
                         <!-- Table -->
                        <table class="table table-bordered table-responsive">
                            <th> Category Name </th>

			                 @foreach ($categories as $category)

                             <tr>
                                <td>{{$category->category_name}}</td>
                                <td> <button type="submit" class="btn btn-primary"><a href="{{ route('newsCategory.edit', $category->id)}}" style="color: #fff">Edit</a></button> </td>
                                
                                <td>{!! Form::open(['method' => 'DELETE','route' => ['newsCategory.destroy', $category->id], 'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!} </td>
                             </tr>

                            @endforeach

                        </table>

                         <div class="col-md-6">
                    
                            <a class="btn btn-primary" data-toggle="modal" href="#category">Add Category</a>
                
                         </div>
                
                <div class="modal fade" id="category">
                
                    <div class="modal-dialog">
                      
                        <div class="modal-content">
                        
                            <div class="modal-header">
                            
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                
                                <h4 class="modal-title">Add a News Category</h4>
                            
                            </div>
                            
                            {!! Form::open(['route' => 'newsCategory.store', 'method' => 'post']) !!}
                                
                                <div class="modal-body">
                                
                                    <div class="form-group">

                                    
                                    
                                        {{ Form::label('category_name', 'Category Name') }}
                                        
                                        {{ Form::text('category_name', null,  array('class' => 'form-control')) }}

                                    
                                
                                    </div>
                        
                                </div>
                                
                                <div class="modal-footer">
                                
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                
                                </div>
                            {!! Form::close() !!}
              </div>    
          </div>            
    </div>            

@endsection
