@extends('layout.admin')

@section('title')
    Create news Category
@endsection

@section('content')
<!-- page content -->
 <div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            
            <div class="dashboard_graph">
                
                <div class="row x_title">
                    
                    <div class="col-md-6">
                    
                        <h3>Adding a News Category</h3>
                    
                    </div>
                    
                    <div class="col-md-6">
                    
                        <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add a news Category</a>
                
                    </div>
                    
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
                    
                        </div><!-- /.modal-content -->
                    
                    </div><!-- /.modal-dialog -->
                
                </div><!-- /.modal -->
                
               <!--  <div class="row x_title">
        
                    <div class="col-md-6">
                        
                        <ul class="nav navbar-nav">
                        
                            @if(!empty($categories))
                            
                                @forelse($categories as $category)

                                <li class="active">

                                    <a href="{{route('category.show',$category->id)}}">{{$category->category_title}}</a>

                                </li>

                                @empty

                                <li>No Items</li>

                                @endforelse

                            @endif

                        </ul>
                    
                    </div>

                </div> -->
                
               <!--  @if(isset($products))
                
                    @forelse($products as $product)
                    
                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding: 15px 0px; border-bottom: #ccc dotted 2px">
                    
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        
                            <img class="img-responsive" src="{{url('images',$product->product_image)}}" alt="..." />
                    
                        </div>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        
                            <h2>{{$product->product_title}}</h2>
                            
                            <h2>{{$product->product_price}}</h2>
                            
                            <p>{{$product->product_desc}}</p>
                        
                        </div>
                    
                    </div>
                    
                    @empty
                    
                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding: 15px 0px; border-bottom: #ccc dotted 2px">
                    
                        <h2>no data</h2>
                        
                    </div>
                    
                    @endforelse
                    
                    <div class="clearfix"></div>
                    
                @endif -->
            
            </div>
        
        </div>
    
    </div>

</div> 

<!-- /page content -->

@endsection