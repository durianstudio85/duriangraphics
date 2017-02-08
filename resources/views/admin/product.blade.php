@extends('layouts.app')

@section('content')
<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Administrator</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-about-content dg-categories-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('layouts.adminnav')
				</div>
				<div class="col-md-9">
					<div class="row">
					<div class="col-md-12">
						<div class="section form-custom admin-section">
							<div class="row">
								<div class="col-md-12">
									<h2>Products</h2>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<table class="table">
												<thead>
													<th width="135px">Images</th>
													<th>Details</th>
													<th>Action</th>
												</thead>
												<tbody>
													@foreach( $products->get() as $image )
													<tr>
														<td><a href="{{ url('/admin/products/'.$image->id.'/edit') }}"><img src="{{ asset('images/'.$products->changeSizeImage($image->watermark_img, 's')) }}" width="100%"></a></td>
														<td>
															<h3>{{ $image->title }}</h3>
															<p>{{ $image->description }}</p>
														</td>
														<td>
															<a href="{{ url('/admin/products/'.$image->id.'/edit') }}"><button class="btn follow-btn">View</button></a>
														</td>
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
	</div>
</div>

@endsection


