@extends('layouts.app')

@section('content')

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>About</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-about-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="{{ asset('assets/images/dg_about_img1.png') }}">
				</div>
				<div class="col-md-6">
					<h2>Why Buy Us?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique lectus et augue
					 consequat volutpat. Nulla magna felis, mollis ut lobortis et, pretium vel quam. Nulla facilisi.
					  Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut sit amet risus non magna laoreet
					   vehicula consectetur in enim. Vivamus tincidunt blandit porttitor. Aenean fermentum ut felis a hendrerit.</p>
					<p>Vivamus id lacus mi. In nec imperdiet ipsum, non sagittis enim. Etiam lobortis aliquam dignissim.
					 Etiam rhoncus sapien a elementum congue. Nulla sed nisl tincidunt, gravida enim et, tempor elit.
					  Donec ultricies tempor erat non imperdiet. Nullam malesuada enim eros. Integer sagittis lectus nisl.
					   Donec in nibh nunc. Donec dictum sagittis orci, non molestie dolor tempor id. Cras vehicula libero
					    mi, sit amet lobortis sapien scelerisque at. Etiam nisl erat, bibendum vel augue at, dictum semper elit.</p>
				</div>
			</div>
			<div class="row">
				
				<div class="col-md-6">
					<h2>Durian Careers?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique lectus et augue
					 consequat volutpat. Nulla magna felis, mollis ut lobortis et, pretium vel quam. Nulla facilisi.
					  Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut sit amet risus non magna laoreet
					   vehicula consectetur in enim. Vivamus tincidunt blandit porttitor. Aenean fermentum ut felis a hendrerit.</p>
					<p>Vivamus id lacus mi. In nec imperdiet ipsum, non sagittis enim. Etiam lobortis aliquam dignissim.
					 Etiam rhoncus sapien a elementum congue. Nulla sed nisl tincidunt, gravida enim et, tempor elit.
					  Donec ultricies tempor erat non imperdiet. Nullam malesuada enim eros. Integer sagittis lectus nisl.
					   Donec in nibh nunc. Donec dictum sagittis orci, non molestie dolor tempor id. Cras vehicula libero
					    mi, sit amet lobortis sapien scelerisque at. Etiam nisl erat, bibendum vel augue at, dictum semper elit.</p>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('assets/images/dg_about_img2.png') }}">
				</div>
			</div>
		</div>
	</div>
	<div class="dg-subscribe-footer-background">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <h2>Subscription</h2>
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