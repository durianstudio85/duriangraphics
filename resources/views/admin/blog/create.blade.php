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
					@include('notification.flash')
					<div class="col-md-12">
						<div class="section admin-dashboard-section-first">
							<h3 class="cat-title">Add Post</h3><!-- <a href="{{ url('admin/posts/create') }}" class="cat-btn">Add Posts</a> -->
							<a href="#" class="cat-btn" data-toggle="modal" data-target="#postImage">Images</a>
							<p></p>
							<div class="table-responsive category-table form-custom" >								
								{!! Form::open(['url'=>'admin/posts/create','files'=>'true']) !!}
																		<div class="form-group">
                                		{!! Form::label('title', 'Title') !!}
                                    	{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Title Name','required'=>'required']) !!}
   									</div>
   									<div class="form-group">
                                		{!! Form::label('content', 'Content') !!}
                                    	{!! Form::textarea('content', null, ['class'=>'form-control', 'data-provide'=>'markdown', 'placeholder'=>'Content']) !!}
   									</div>
   									<div class="form-group">
                                		{!! Form::label('short_content', 'Short Content') !!}
                                    	{!! Form::textarea('short_content', null, ['class'=>'form-control', 'data-provide'=>'markdown', 'placeholder'=>'Short Content', 'rows'=>'5']) !!}
   									</div>
   									<div class="form-group">
	                                	{!! Form::label('thumbnail', 'Thumbnail (414 x 265)'); !!}
	                                    {!! Form::file('thumbnail',['class'=>'form-control', 'placeholder'=>'Watermark', 'title'=>'Normal Size','required'=>'required']) !!}
	                                </div>

   									<div class="form-group">
	   									{!! Form::submit('Save', ['class'=>'add-cat-btn', 'placeholder'=>'Name']) !!}
   									</div>
								{!! Form::close() !!}
							</div>
						</div>
					</div>    
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="postImage" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Post Image</h4>
      </div>
      <div class="modal-body form-custom">
      		<ul class="nav nav-tabs">
		        <li class="active"><a data-toggle="tab" href="#imageAll">Images</a></li>
		        <li><a data-toggle="tab" href="#imageAdd">Add Image</a></li>
		    </ul>
		    <div class="tab-content">
		        <div id="imageAll" class="tab-pane fade in active">
		        	<div class="table-responsive category-table">
			            <table class="table">
			            	<thead>
			            		<th>Img</th>
			            		<th>Details</th>
			            	</thead>
			            	<tbody>
			            		@foreach ( App\Postimage::orderBy('created_at','desc')->get() as $imageList )
				            		<tr>
				            			<td><img src="{{ asset('img/posts/'.$imageList->filename) }}" height= "50px"></td>
				            			<td>
				            				Name: {{ $imageList->name }}<br>
				            				Link: <a href="{{ asset('img/posts/'.$imageList->filename) }}">{{ asset('img/posts/'.$imageList->filename) }}</a><br>
				            				HTML: {{ '<img src="'.asset('img/posts/'.$imageList->filename).'" width="100%">' }}
				            			</td>
				            		</tr>
			            		@endforeach
			            	</tbody>
			            </table>
		            </div>
		        </div>


		        <div id="imageAdd" class="tab-pane fade">
		            {!! Form::open(['url'=>'admin/posts/images/create','files'=>'true']) !!}
				      	<div class="form-group">
				            {!! Form::file('image',['class'=>'form-control', 'placeholder'=>'Watermark', 'title'=>'Normal Size','required'=>'required']) !!}
				        </div>
				        <div class="form-group">
							{!! Form::submit('Save', ['class'=>'add-cat-btn', 'placeholder'=>'Name']) !!}
						</div>
				    {!! Form::close() !!}
		        </div>
		    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection