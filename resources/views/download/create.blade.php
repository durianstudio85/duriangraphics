@extends('layouts.app')

@section('content')
<div class="dashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				@include('layouts.usernav')
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<div class="section form-custom">
							<div class="row">
								<div class="col-md-12">
									<h2>Create Item</h2>
								</div>
								<div class="col-md-12">
									{!! Form::open(['url'=>'downloads/create','files'=>'true']) !!}
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                	{!! Form::label('image_watermark', 'Image(Watermark)'); !!}
				                                    {!! Form::file('watermark_img',['class'=>'', 'placeholder'=>'Watermark', 'title'=>'image_watermark']) !!}
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                	{!! Form::label('download_img', 'Download File(Zip Only)'); !!}
				                                    {!! Form::file('download_img',['class'=>'', 'placeholder'=>'Download', 'title'=>'image_watermark']) !!}
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                	{!! Form::label('title', 'File Name'); !!}
				                                    {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'e.g. Image']) !!}
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                            	<div class="form-group">
				                            		{!! Form::label('category', 'Category'); !!}
				                            		<select name="category" class="form-control">
				                            			@foreach( $categoryList as $category )
				                            				<option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
					                            		@endforeach
				                            		</select>
				                            	</div>
				                            </div>

				                            <div class="col-md-12">
				                                <div class="form-group">
				                                	{!! Form::label('description', 'Description'); !!}
				                                    {!! Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Description']) !!}
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                	{!! Form::label('main_features', 'Main Features'); !!}
				                                    {!! Form::textarea('main_features', null,['class'=>'form-control', 'placeholder'=>'']) !!}
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                {!! Form::submit('Save', ['class' => 'btn btn-custom']) !!}
				                            </div>
				                    {!! Form::close() !!}


									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection