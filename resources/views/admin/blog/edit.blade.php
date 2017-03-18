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
							<h3 class="cat-title">Edit Post</h3><!-- <a href="{{ url('admin/posts/create') }}" class="cat-btn">Add Posts</a> -->
							<p></p>
							<div class="table-responsive category-table form-custom" >								
								{!! Form::model($post, ['method'=>'patch', 'action'=>['Admin\PostController@update', $post->id], 'files'=>'true']) !!}
									<div class="form-group">
                                		{!! Form::label('title', 'Title') !!}
                                    	{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Title Name']) !!}
                                    	<a href="{{ url('blog/'.$post->slug) }}" target="__blank">{{ url('blog/'.$post->slug) }}</a>
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
	                                    {!! Form::file('thumbnail',['class'=>'form-control', 'placeholder'=>'Watermark', 'title'=>'Normal Size']) !!}
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
@endsection