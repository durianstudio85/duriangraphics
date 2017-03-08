@extends('layouts.app')

@section('content')

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Contact Us</h2>
					<p>Welcome to Durian Graphics. We provide all you need.  </p>
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
						We're very approachable and would love to speak to you. Feel free to call and send us email.
					</p>
					<div class="icon">
						<p><i class="fa fa-btn fa-map-marker" aria-hidden="true" style="padding-left: 13px;"></i>&nbsp;&nbsp;
						F2G Building Door 123 Bonifacio St. Davao City</p>
					</div>
					<div class="icon">
						<p><i class="fa fa-btn fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
							Call Us Now! <strong>244-0936  |  09351759748</strong></p>
					</div>
					<div class="icon">
						<p><i class="fa fa-btn fa-envelope-o" aria-hidden="true" style="padding-left: 9px;"></i>&nbsp;&nbsp;
							Email Address: info@duriangraphics.com
						</p>
					</div>
				</div>
				<div class="col-md-6">
					
					<h2>Message Us</h2>
					<p>Email us with any questions or inquiries. We would like to hear anything from you and answer all your queries. </p>
					<form class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-12 col-xs-12">
							<input type="text" class="form-control" placeholder="Full Name"> 
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12 col-xs-12">
							<input type="text" class="form-control" placeholder="Email Address"> 
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12 col-xs-12">
							<input type="text" class="form-control" placeholder="Subject"> 
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12 col-xs-12">
							<textarea class="form-control" placeholder="Message" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6">
							&nbsp;
						</div>
						<div class="col-xs-6">
							<button class="btn btn-primary dg-register-submit">Send</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection