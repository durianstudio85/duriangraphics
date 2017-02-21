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
					<div class="row">
					<div class="col-md-12">
						<div class="section form-custom admin-section admin-dashboard-section-first">
							<div class="row">
								<div class="col-md-12">
									<h2>Products</h2>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<table class="table">
												<tbody>
													@foreach( $prodList as $image )
													<tr>
														<td width="90px"><a href="{{ url('/admin/products/'.$image->id.'/edit') }}"><img src="{{ asset('images/'.$products->changeSizeImage($image->watermark_img, 's')) }}" width="100%"></a></td>
														<td>
															<h4 style="margin-bottom: 0px;margin-top: 5px;">{{ $image->title }}</h4>
															<p><a href="{{ url('/products/'.$category->getCatName($image->category).'/'.$image->id)}}">Print Templates</a></p>
														</td>
														<td>
															<p>{{ $download->countImageDownloads($image->id) }} Downloads<br>
																13 likes</p>
														</td>
														<td>
															<center>
																<img src="{{ asset('assets/images/stars-3.png') }}">
																<p>6 Ratings</p>
															</center>
														</td>
														<td width="110px">
															<a href="{{ url('/admin/products/'.$image->id.'/edit') }}"><button class="btn follow-btn"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
															<button class="btn follow-btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
														</td>
													</tr>
													@endforeach
												</tbody>
											</table>
											<hr>
											<center>
											{!! $prodList->links() !!}
										</center>
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


