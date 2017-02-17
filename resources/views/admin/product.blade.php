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
															<h3 style="margin-bottom: 0px;margin-top: 5px;">{{ $image->title }}</h3>
															<p><a href="{{ url('/products/'.$category->getCatName($image->category).'/'.$image->id)}}">Preview</a></p>
														</td>
														<td>
															<p>20 Downloads</p>
														</td>
														<td>
															<a href="{{ url('/admin/products/'.$image->id.'/edit') }}"><button class="btn follow-btn"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
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


