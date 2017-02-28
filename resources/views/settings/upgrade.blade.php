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
										<li>
											<a href="{{ url('/settings') }}">Account</a>
										</li>
										<li class="active">
											<a href="{{ url('/settings/upgrade') }}">Upgrade Plan</a>
										</li>
										<li>
											<a href="{{ url('/settings/payments') }}">Payment History</a>
										</li>
									</ul>

									<p></p>
									<div class="table-responsive">
										<table class="table table-custom-upgrade">
											<thead style="background-color: #d9f7f7;">
												<th>Your Plan</th>
												<th>Price</th>
												<th></th>
											</thead>
											<tbody>
												<tr>
													<td>FREE</td>
													<td>$0 per month</td>
													@if ( Auth::user()->account_type == 'free' )
														<td><a href="#" class="selected">Selected</td>	
													@else
														<td><a href="#">DOWNGRADE</td>	
													@endif
													
												</tr>
												<tr>
													<td>PROFESSIONAL</td>
													<td>$4.99 per month</td>
													<td>
														
<a href="#" data-toggle = "modal" data-target = "#upgradeProf">UPGRADE</a></td>
												</tr>
												<tr>
													<td>BUSINESS</td>
													<td>$9.99 per month</td>
													@if ( Auth::user()->account_type == 'business')
														<td><a href="#" class="selected">Selected</td>	
													@else
														<td><a href="#">UPGRADE</td>
													@endif
													
												</tr>
											</tbody>
										</table>
									</div>
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