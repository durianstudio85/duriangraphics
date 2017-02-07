@extends('layouts.app')

@section('content')
<div class="dg-banner-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="dg-banner-h2">Over 100,000, Infographics, Themes, Vectors, Logos, and Artworks</h2>
                    <p class="dg-banner-p">Discover our huge collection of hand-reviewed graphic assets from our community of designers.</p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-group dg-banner-input-group">
                                    <input type="text" class="form-control input-lg dg-banner-input" placeholder="Find logo, banner, artworks, etc....">
                                    <span class="input-group-btn gd-banner-button">
                                        <button class="btn btn-default btn-lg dg-banner-btn" type="button">SEARCH</button>
                                   </span>
                                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Administrator</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-about-content dg-categories-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('layouts.adminnav')
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<div class="section form-custom admin-section">
								<div class="row">
									<div class="col-md-12">
										<h2>Edit Product</h2>
									</div>
									<div class="col-md-12">
										{!! Form::open(['url'=>'admin/products/create','files'=>'true']) !!}
					                            <div class="col-md-4">
					                                <div class="form-group">
					                                	{!! Form::label('image_watermark', 'Image(Normal)'); !!}
					                                    {!! Form::file('watermark_img',['class'=>'', 'placeholder'=>'Watermark', 'title'=>'Normal Size']) !!}
					                                </div>
					                            </div>
					                            <div class="col-md-4">
					                                <div class="form-group">
					                                	{!! Form::label('medium_size', 'Image(Medium Size  263x263)'); !!}
					                                    {!! Form::file('medium_size',['class'=>'', 'placeholder'=>'Watermark', 'title'=>'Medium Size']) !!}
					                                </div>
					                            </div>
					                            <div class="col-md-4">
					                                <div class="form-group">
					                                	{!! Form::label('small_size', 'Image(Small Size 165x165)'); !!}
					                                    {!! Form::file('small_size',['class'=>'', 'placeholder'=>'Watermark', 'title'=>'Hard Size']) !!}
					                                </div>
					                            </div>
					                            <div class="col-md-12">
					                                <div class="form-group">
					                                	{!! Form::label('download_img', 'Download File(Zip Only)'); !!}
					                                    {!! Form::file('download_img',['class'=>'', 'placeholder'=>'Download', 'title'=>'File']) !!}
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-subscribe-footer-background">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                
	                <p>Subscriptions in demand forn only $4.99/month</p>
	            </div>
	        </div>
	        <div class="row dg-subscription-form">
	            <div class="col-md-12">
	                <p>Start using our professionally done graphics for only <span>$4.99/month</span> inlcuding source files.</p>
	                <button>SUBSCRIBE NOW!</button>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection


