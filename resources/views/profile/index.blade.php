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
						<div class="section">
							<div class="row">
								<div class="col-md-12">
									<h2>Profile</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<p class="profile-image">
										<img src="{{ asset('assets/images/profile-blank-image.png') }}">
									</p>
								</div>
								<div class="col-md-9">
									<p class="profile-name">{{ Auth::user()->first_name.'  '.Auth::user()->last_name }}</p>
									<p class="profile-status">Member since January 2017  &nbsp;&nbsp;|&nbsp;&nbsp; 20 Items Collection</p>
									<table class="follow-status-profile">
										<tr>
											<td>Followers <span>21</span></td>
											<td>Following <span>8</span></td>
										</tr>
									</table>
									{!! Form::button('FOLLOW', ['class' => 'btn follow-btn']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="section">
								<h3>Featured Item</h3>
								<p>We hope you enjoy browsing through our Music tracks & Designs, We add new files every few days so be sure to check back to see what’s new!

								If you need help with our files feel free to contact us through contact form and We will help you to fit the pieces together!</p>	
							
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="section">
							<p>asdsd</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="section">
							<p>asdsd</p>
						</div>
					</div>

				</div>
				



			</div>
		</div>
	</div>
</div>
@endsection