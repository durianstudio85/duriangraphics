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
												<a href="#" data-toggle="modal" data-target="#userProf"><button class=" btn follow-btn"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
												<a href="#"  data-toggle="modal" data-target="#userProf{{ $user->id }}"><button class=" btn follow-btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
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

<!-- Modal Start -->
@foreach ( $userList as $userModal )
<div id="userProf{{ $userModal->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User</h4>
      </div>
      <div class="modal-body form-custom">
      		<ul class="nav nav-tabs">
		        <li class="active"><a data-toggle="tab" href="#details{{ $userModal->id }}">Details</a></li>
		        <li><a data-toggle="tab" href="#payment{{ $userModal->id }}">Payment</a></li>
		    </ul>
		    <div class="tab-content">
		        <div id="details{{ $userModal->id }}" class="tab-pane fade in active">
		        	<strong>Name:</strong> {{ $userModal->first_name.' '.$userModal->last_name }} <br>
		        	<strong>Email:</strong> {{ $userModal->email }} <br>
		        	<strong>Account Type:</strong> {{ $userModal->account_type }} <br>
		        	<strong>Created Date:</strong> {{  date('F d, Y', strtotime($userModal->created_at)) }} <br>
		        </div>


		        <div id="payment{{ $userModal->id }}" class="tab-pane fade">
		            
		        </div>
		    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endforeach

@endsection