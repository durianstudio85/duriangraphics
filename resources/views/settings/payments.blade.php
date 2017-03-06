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
										<!-- <li>
											<a href="{{ url('/settings/upgrade') }}">Upgrade Plan</a>
										</li> -->
										<li class="active">
											<a href="{{ url('/settings/payments') }}">Payment History</a>
										</li>
									</ul>

									<p></p>
									<div class="table-responsive">
										<table class="table table-custom-upgrade">
											<thead style="background-color: #d9f7f7;">
												<th>Date</th>
												<th>Transaction ID</th>
												<th>Amount</th>
											</thead>
											<tbody>
												@foreach ( $payHistory as $list )
												<tr>
													<td>{{ $list->created_at->toFormattedDateString()  }}</td>
													<td>{{ $list->paypal_id }}</td>
													<td style="text-align: right;" >{{ $list->transaction_amount_total }}</td>
												</tr>
												@endforeach
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