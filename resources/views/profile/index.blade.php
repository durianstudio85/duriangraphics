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
									<div class="col-md-12">
										<h2>Profile</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="col-md-12">
										<p class="profile-image">
											@if ( Auth::user()->photo == '' )
												<img src="{{ asset('assets/images/profile-blank-image.png') }}">
											@else
												<img src="{{ asset('img/'.Auth::user()->photo) }}" >
											@endif
										</p>
									</div>
								</div>
								<div class="col-md-9">
									<p class="profile-name">{{ Auth::user()->first_name.'  '.Auth::user()->last_name }}</p>
									<p class="profile-status">Member since January 2017  &nbsp;&nbsp;|&nbsp;&nbsp; 20 Items Collection</p>
									<table class="follow-status-profile">
										<!-- <tr>
											<td>Followers <span>21</span></td>
											<td>Following <span>8</span></td>
										</tr> -->
									</table>
									{!! Form::button('CHANGE PROFILE PIC', ['class' => 'btn follow-btn btn-green','data-toggle' => 'modal', 'data-target' => '#changeImage']) !!}
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-12">
										<p>We do not sell or share your details without our permission. Find out more in our <a href="#">Privacy Policy</a></p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-12">
										<br>
										<h3>Personal Information</h3>
										<br>
									</div>
								</div>
								<div class="col-md-12">
									{!! Form::model($user, ['method'=>'patch', 'action'=>['ProfileController@update', $user->id], 'files'=>'true']) !!}
										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('first_name', 'First Name') }}
												{{ Form::text('first_name', null, ['class'=>'form-control', 'placeholder' => 'Enter First Name']) }}
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('last_name', 'Last Name') }}
												{{ Form::text('last_name', null, ['class'=>'form-control', 'placeholder' => 'Enter Last Name']) }}
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('company_name', 'Company Name') }}
												{{ Form::text('company_name', null, ['class'=>'form-control', 'placeholder' => 'Enter name of your company']) }}
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('country', 'Country') }}
												{{ Form::text('country', null, ['class' => 'form-control', 'placeholder' => 'Select Country']) }}
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												{{ Form::label('address1', 'Address Line 1') }}
												{{ Form::text('address1', null, ['class' => 'form-control', 'placeholder' => 'Select Country']) }}
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												{{ Form::label('address2', 'Address Line 2') }}
												{{ Form::text('address2', null, ['class' => 'form-control', 'placeholder' => 'Select Country']) }}
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('city', 'City') }}
												{{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Enter name of your city']) }}
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('state', 'State | Province | Region') }}
												{{ Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Enter your state, province, or region']) }}
											</div>
										</div>


										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('zipcode', 'Postal Code') }}
												{{ Form::text('zipcode', null, ['class' => 'form-control', 'placeholder' => 'Enter zipcode']) }}
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												{{ Form::label('company_no', 'Company No.') }}
												{{ Form::text('company_no', null, ['class' => 'form-control', 'placeholder' => 'Enter company number']) }}
											</div>
										</div>

										<div class="col-md-12">
											{!! Form::submit('SAVE', ['class' => 'btn btn-profile-submit']) !!}
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

<!-- ===================================== Modal ========================================== -->
<div class="modal fade" id="changeImage" role="dialog">
    <div class="modal-dialog">
      	<!-- Modal content-->
      	<div class="modal-content">
      		{!! Form::model($user, ['method'=>'patch', 'action'=>['ProfileController@updateImg', $user->id], 'files'=>'true']) !!}
	        	<div class="modal-header">
	          		<button type="button" class="close" data-dismiss="modal">&times;</button>
	          		<h4 class="modal-title">Change Image (160 x 160)</h4>
	        	</div>
	        	<div class="modal-body">
	        		{{ Form::file('photo') }}
	          		<!-- <p>Some text in the modal.</p> -->
	        	</div>
	        	<div class="modal-footer">
	        		{!! Form::submit('SAVE', ['class' => 'btn btn-profile-submit']) !!}
	          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	</div>
        	{!! Form::close() !!}
      	</div>      
    </div>
</div>
@endsection