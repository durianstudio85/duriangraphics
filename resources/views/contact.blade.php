@extends('layouts.app')

@section('content')

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Contact Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-contact-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Contact Information</h2>
					<img src="{{ asset('assets/images/dg-contact-img.png') }}" width="100%">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique lectus et augue consequat volutpat. Nulla magna felis, mollis ut lobortis et, pretium vel quam. Nul
					</p>
					<div class="icon">
						<p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;
						F2G Building Door 123 Bonifacio St. Davao City</p>
					</div>
					<div class="icon">
						<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
							Call Us Now! <strong>244-0936  |  09351759748</strong></p>
					</div>
					<div class="icon">
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;
							Email Address: info@duriangraphics.com
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<h2>Message Us</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique lectus et augue consequat volutpat. 
					</p>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Full Name"> 
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email Address"> 
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject"> 
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Message" rows="5"></textarea>
					</div>
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