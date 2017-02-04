@extends('layouts.app')

@section('content')

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-about-content">
		<div class="container">
			<div class="row">
				@foreach( $getCategoryList as $items )
					@if( $category->countCategoryContent($items->id) > 0 )
						<div class="col-md-3">
							<img src="{{ asset('images/'.$products->changeSizeImage($products->getFirstItemByCategory($items->id), 'm')) }}" width="100%">
							<h2>{{ $items->name }}</h2>
						</div>
					@endif
				@endforeach
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