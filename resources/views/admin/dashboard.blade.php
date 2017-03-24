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
							<h3>Dashboard</h3>
							<p>When you sell an item on Durian Graphics the total purchase price is made up of your item price plus Durian’s fee to the buyer. Buyer fees are either calculated as a % of the item price or are set at a fixed amount. Fixed buyer fee amounts apply to categories where authors set the price themselves. </p>
						</div>
					</div>
						
					<div class="col-md-6">
						<div class="section admin-dashboard-section">
							<h3>Recent Downloads</h3>
							<table class="table">
								@foreach($recentDownloads as $items )
								<tr>
									<td width="60px"><img src="{{ asset('images/'.$image->changeSizeImage($image->getOneImageDetail($items->img_id)->watermark_img, $size = 's')) }}" width="60px" height="60px"></td>
									<td>
										<h4>{{ $image->getOneImageDetail($items->img_id)->title }}</h4>
										<p>{{ $download->getDate($items->created_at ) }} &nbsp;&nbsp; By: {{ $user->getOneUserDetail($items->user_id)->first_name.' '.$user->getOneUserDetail($items->user_id)->last_name }}</p>
									</td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div class="section admin-dashboard-section">
							<h3>Recent Products</h3>
							<div style="text-align:center;border: 1px solid #e5ebeb;">
								<!-- <img src="{{  asset( 'images/'.$image->changeSizeImage($recentProductsFirst->watermark_img, 'm')) }}"> -->
								<img src="{{  asset( 'images/'.$recentProductsFirst->watermark_img) }}" width="100%">
							</div>
							<table class="table">
								<tr>
									<td width="60px"><img src="{{ asset('images/'.$image->changeSizeImage($image->getOneImageDetail($recentProductsThumb->id)->watermark_img, $size = 's')) }}" width="60px" height="60px"></td>
									<td>
										<h4>{{ $recentProductsThumb->title }}</h4>
										<p>{{ $download->getDate($recentProductsThumb->created_at ) }}</p>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
									</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="col-md-12">
						<div class="section admin-dashboard-section">
							<h3>Sales</h3>
							
						</div>
					</div>

				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection