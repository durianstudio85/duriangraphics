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
										@foreach( $getDownload as $download )
											
											<tr class="download-list">
												
												<td width="90px">
													<a href="{{ url('/products/'.$category->getCatName($imageItem->getOneImageDetail($download->img_id)->category).'/'.$imageItem->getOneImageDetail($download->img_id)->id) }}">
														<img src="{{ asset('images/'.$imageItem->changeSizeImage($imageItem->getOneImageDetail($download->img_id)->watermark_img, 's')) }}">
													</a>
												</td>

												<td>
													<div class="download-decription">
														<h3>{{ $imageItem->getOneImageDetail($download->img_id)->title }}</h3>
														<p>{{ $imageItem->getOneImageDetail($download->img_id)->description }}</p>
													</div>
												</td>
												<td width="130px">
													
														<a href="{{ url('/products/'.$category->getCatName($imageItem->getOneImageDetail($download->img_id)->category).'/'.$imageItem->getOneImageDetail($download->img_id)->id) }}">
															<button class="btn follow-btn">Details</button>		
														</a><br>
														<a href="{{ url('/getdownloads/'. $imageItem->getOneImageDetail($download->img_id)->id) }}">
															<button class="btn follow-btn">Download</button>									
														</a>			
													
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