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
									<h2>Account Settings</h2>
								</div>
								<div class="col-md-12">
									<br>
									<ul class="nav nav-tabs">
										<li  class="active">
											<a href="{{ url('/settings') }}">Account</a>
										</li>
										<!-- <li>
											<a href="{{ url('/settings/upgrade') }}">Upgrade Plan</a>
										</li> -->
										<li>
											<a href="{{ url('/settings/payments') }}">Payment History</a>
										</li>
									</ul>

									<p></p>
									{!! Form::open(['url'=>'settings/create','files'=>'true', 'class'=>'']) !!}
										<div class="col-md-12">
											<div class="form-group">
												{{ Form::label('email', 'Email') }}
												{{ Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'Email']) }}
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('password', 'Password') }}
												{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('confirm_password', 'Confirm Password') }}
												{{ Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) }}
											</div>
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
@endsection