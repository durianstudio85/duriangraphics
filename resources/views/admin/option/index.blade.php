@extends('layouts.app')

@section('content')
<div class="dg-administrator-container">
	<div class="dg-categories-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('layouts.adminnav')
				</div>
				<div class="col-md-9">
					<div class="col-md-12">
						<div class="section admin-dashboard-section-first">
							<h3 class="cat-title">Options</h3>
							<hr>
							<p></p>

							<div class="row">
								<div class="col-md-12">
									<h4>Featured Images</h4><a href="#" class="add-cat-btn" data-toggle="modal" data-target="#myModal">Add Image</a>			
									<br><br><br>
									<div class="table-responsive" >	
										<table class="table">
											<thead>
												<th>Image</th>
												<th>Name</th>
												<th>Category</th>
												<th>Action</th>
											</thead>
											@foreach ( $option->get() as $list)
												<tr>
													<td width="8%"><img src="{{ asset('images/'.$image->changeSizeImage( $image->find($list->img_id)->watermark_img,'s') ) }}" width="100%"></td>
													<td>{{ $image->find($list->img_id)->title }}</td>
													<td>{{ ucfirst($category->find( $image->find($list->img_id)->category)->name) }}</td>
													<td>
														{!! Form::open(['method'=>'delete','url' => ['admin/options', $list->id]]) !!}
															{!! Form::submit('Remove', ['class'=>'add-cat-btn', 'placeholder'=>'Name', 'style'=>'font-size: 11px;']) !!}
														{!! Form::close() !!}	
													</td>		
												</tr>
											@endforeach
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>    
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      	<div class="modal-content">
        	<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<h4 class="modal-title">Add Image</h4>
        	</div>
        	<div class="modal-body">
        		
					<div class="form-group">	                	
	                    
	                    <table class="table" id="dataTable">
	                    	<thead>
	                    		<th width="1px">Image</th>
	                    		<th>Name</th>
	                    		<th>Category</th>
	                    		<th style="width: 75px;">Action</th>
	                    	</thead>
	                    	<tbody>
	                    		@foreach( $image->get() as $list )
	                    		<tr>
	                    			<td><img src="{{ asset('images/'.$image->changeSizeImage($list->watermark_img,'s') ) }}" width="100%"></td>
	                    			<td>{{ $list->title }}</td>
	                    			<td>{{ ucfirst($category->getCatName($list->category)) }}</td>
	                    			<td>
	                    				{!! Form::open(['url'=>'admin/options']) !!}
	                    					{!! Form::hidden('img_id', $list->id, ['class'=>'']) !!}
	                    					{!! Form::hidden('category', 'featured', ['class'=>'']) !!}
	                    					{!! Form::submit('Add', ['class'=>'add-cat-btn', 'placeholder'=>'Name', 'style'=>'font-size: 11px;']) !!}
	                    				{!! Form::close() !!}
	                    			</td>
	                    		</tr>
	                    		@endforeach
	                    	</tbody>
	                    </table>
					</div>
					<div class="form-group">
						
					</div>
				
        	</div>
      	</div>
    </div>
  </div>




@endsection