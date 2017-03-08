@extends('layouts.app')

@section('content')

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Help Center</h2>
					<!-- <p>Durian Graphics Help Center</p> -->
				</div>
			</div>
		</div>
	</div>
	<div class="dg-contact-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="list-terms list-help-center">
						<li><h3>Create Account</h3>
							<p> If you’re new to Durian Graphics, register first. Fill up the form with complete details</p>
							<img src="{{ asset('/assets/images/help/1.jpg') }}" width="100%">
						</li>
						<li><h3>Login located at the upper (menu) right.  Fill up the form with complete details. </h3>
							<img src="{{ asset('/assets/images/help/2.jpg') }}" width="100%">
						</li>
						<li><h3>Dashboard</h3>
							<img src="{{ asset('/assets/images/help/3.jpg') }}" width="100%">
							<p class="pull-center">Figure 1</p>
							<img src="{{ asset('/assets/images/help/3.2.jpg') }}" width="100%">
							<p class="pull-center">Figure 2</p>
						</li>
						<li>
							<h3>Profile – edit/update your profile information</h3>
							<img src="{{ asset('/assets/images/help/4.jpg') }}" width="100%">
						</li>
						<li>
							<h3>Downloads – List of your downloads </h3>
							<img src="{{ asset('/assets/images/help/5.jpg') }}" width="100%">
						</li>
						<li>
							<h3>Account Settings - change your email and password</h3>
							<img src="{{ asset('/assets/images/help/6.jpg') }}" width="100%">
						</li>
						<li>
							<h3>Pricing – Select your pricing plan. Start using free downloads for a trial. </h3>
							<img src="{{ asset('/assets/images/help/7.jpg') }}" width="100%">
						</li>
						<li>
							<h3>Categories</h3>
							<img src="{{ asset('/assets/images/help/8.jpg') }}" width="100%">
						</li>
						<li>
							<h3>How to download file</h3>
							<img src="{{ asset('/assets/images/help/9.jpg') }}" width="100%">
							<p class="pull-center">Figure 1 Choose image you want to download</p>
							<img src="{{ asset('/assets/images/help/9.2.jpg') }}" width="100%">
							<p class="pull-center">Figure 2 </p>
							<br><br>
							<p>Click Download button to download image.  Note that the downloaded zip file consist of 1 large image size and 1 .eps file format. </p>
						</li>
						
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection