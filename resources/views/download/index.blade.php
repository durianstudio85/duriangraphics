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
									<h2>Downloads</h2>
								</div>
								<div class="col-md-12">
									<table class="table">
										@foreach( $allImage as $items )
											<tr class="download-list">
												<td width="130px"><img src="{{ asset('assets/images/profile-blank-image.png') }}"></td>
												<td>
													<div class="download-decription">
														<h4>{{ $items->title }}</h4>
														<p>{{ $items->description }}</p>
													</div>
												</td>
												<td>
													<center>
														<button class="btn follow-btn">Download</button>
														<a href="{{ url('/downloads/'.$category->getCatName($items->category).'/'.$items->id) }}"><button class="btn follow-btn">Details</button>
													</center>
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
</div>
@endsection