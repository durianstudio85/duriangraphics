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
					<p>asdasd</p>
				</div>

			</div>
		</div>
	</div>




</div>
@endsection