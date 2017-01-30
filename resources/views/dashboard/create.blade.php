@extends('layouts.app')

@section('content')
<div class="dashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				@include('layouts.usernav')
			</div>
			<div class="col-md-9">
				{!! Form::open(['url'=>'courses/create','files'=>'true', 'class'=>'']) !!}
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::label('watermark_img', 'Images( with watermark )', ['class' => 'awesome']) !!}
	                        {!! Form::file('watermark_img', ['class' => 'form-control image-form']) !!}
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::label('download_img', 'Downloaded Images( .zip )', ['class' => 'awesome']) !!}
	                        {!! Form::file('download_img', ['class' => 'form-control image-form']) !!}
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::label('title', 'Title', ['class' => 'awesome']) !!}
	                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::label('description', 'Description', ['class' => 'awesome']) !!}
	                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="col-md-12">
						{!! Form::submit('Create', ['class' => 'btn btn-custom']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection