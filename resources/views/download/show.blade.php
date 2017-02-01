@extends('layouts.app')

@section('content')
<div class="single-prod-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs-custom">
					<a href="{{ url('/') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{ url('/downloads') }}">Downloads</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">{{ $category->getCatName($showItem->category) }}</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">{{ $showItem->title }}</a>
				</div>
			</div>
			<div class="col-md-12">
				<h1>{{ $showItem->title }}</h1>
			</div>
			<div class="col-md-12">
				<div class="single-prod-nav">
					<a href="{{ url('/downloads/'.$category->getCatName($showItem->category).'/'.$showItem->id) }}" {{{ ( Request::is('downloads/'.$category->getCatName($showItem->category).'/'.$showItem->id) ? 'class=active' : '') }}}>Item Details</a>
					<a href="#">Reviews</a>
					<a href="#">Comments</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="single-prod-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="single-prod-section">
					<img src="{{ asset('assets/images/prod-details-web.png') }}" width="100%">
					<div class="product-details-btn">
						<a class="btn follow-btn colored-btn" href="#">LIVE PREVIEW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-prod-section">
					<h3>Download</h3>
					<a href="{{ url('/getdownloads') }}"><button class="btn download-btn"> Download </button></a>
				</div>

				<div class="single-prod-section">
					<div class="download-section">
						<i class="fa fa-download" aria-hidden="true"></i><span class="count">0</span>Downloads
					</div>
				</div>

				<div class="single-prod-section">
					<table class="table">
						<tr>
							<td><h5>Last Update</h5></td>
							<td>28 January 2017</td>
						</tr>
						<tr>
							<td><h5>Created</h5></td>
							<td>28 January 2017</td>
						</tr>

					</table>
				</div>
			</div>
			<div class="col-md-8">
				<div class="prod-detail-description">
					<p>
						Hexapro – Corporate Responsive WordPress Theme is a clean and elegant design – suitable for agency, blog, business, company, corporate, creative, portfolio, professional etc . It has a fully responsive width adjusts automatically to any screen size or resolution.
						We have included 5 defined layouts for the homepage to give you best selections in customization. You can mix between all home page layouts to get a different layout for your own website.
					</p>
					<div class="main-featured">
						<h3>Main Features</h3>
						<p>
							Responsive Layout<br>
							Wordpress Latest Version<br>
						</p>	
					</div>
					
				</div>
				<hr>
			</div>
			
		</div>
		
	</div>




</div>
@endsection