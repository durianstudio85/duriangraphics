@extends('layouts.app')

@section('content')
<div class="single-prod-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs-custom">
					<a href="{{ url('/') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{ url('/categories/'.$category->getCatName($showItem->category)) }}">{{ $category->getCatName($showItem->category) }}</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">{{ $showItem->title }}</a>
				</div>
			</div>
			<div class="col-md-12">
				<h1>{{ $showItem->title }}</h1>
			</div>
			<div class="col-md-12">
				<div class="single-prod-nav">
					<a href="{{ url('/products/'.$category->getCatName($showItem->category).'/'.$showItem->id) }}" {{{ ( Request::is('products/'.$category->getCatName($showItem->category).'/'.$showItem->id) ? 'class=active' : '') }}}>Item Details</a>
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
					<img src="{{ asset('images/'.$showItem->watermark_img) }}" width="100%">
					<div class="product-details-btn">
						<a class="btn follow-btn colored-btn" href="#">LIVE PREVIEW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-prod-section">
					<h3>Download</h3>
					<a href="{{ url('/getdownloads/'.$showItem->id) }}"><button class="btn download-btn"> Download </button></a>
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
						{!! nl2br($showItem->description)	 !!}
						
					</p>
					<div class="main-featured">
						<h3>Main Features</h3>
						<p>
							{!! nl2br($showItem->main_features) !!}
							
						</p>	
					</div>
					
				</div>
				<hr>
			</div>
			
		</div>
		
	</div>
</div>
@endsection