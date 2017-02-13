@extends('layouts.app')

@section('content')
<div class="dg-administrator-container">
	<div class="dg-categories-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('layouts.adminnav')
				</div>
				<div class="col-md-9">
					<div class="col-md-12">
						<div class="section admin-dashboard-section-first">
							<h3 class="cat-title">Accounts</h3>
							<p></p>
							<div class="table-responsive" >								
								<table class="table">
									@foreach ($userList as $user)
										<tr>
											<td width="8%"><img src="http://localhost/github/laravel/duriangraphics/public/assets/images/profile-blank-image.png" class="acc-img"></td>
											<td width="72%" style="padding-top: 14px;">
												<h4>{{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }}</h4>
												{{ $user->email }}
											</td>
											<td>
												<a href="#"><button class=" btn follow-btn"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
											</td>
										</tr>
									@endforeach
								</table>
							</div>
						</div>
					</div>    
				</div>
			</div>
		</div>
	</div>
</div>
@endsection