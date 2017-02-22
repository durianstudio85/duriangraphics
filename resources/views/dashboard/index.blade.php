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
									<h2>Dashboard</h2>
								</div>
								<div class="col-md-12">
									<p>It seems that your account is free version with limited functionality, upgrade now to remove this limitations.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="section" style="padding: 30px;  min-height: 735px;">
							<h3>Recent Downloads</h3>
							<!-- <p class="text-center">
								Our author fee to non-exclusive authors is 55% of the item price. So for example when an item sells for $100 the breakdown of fees looks like this:
							</p> -->
							<table class="table">
								@foreach ( $recentDownload as $list )
								<tr>
									<td width="30%">
										<img src="{{ asset('/images/'.$images->changeSizeImage($images->getOneImageDetail($list->img_id)->watermark_img, 's' )) }}" width="100%">
									</td>
									<td>
										<h4 style="margin-bottom: 2px;margin-top: 0px;">{{  str_limit($images->getOneImageDetail($list->img_id)->title, $limit = 20, $end = '...')  }}</h4>
										<a href="{{ url('/products/'.$category->getCatName($images->getOneImageDetail($list->img_id)->category).'/'.$list->img_id ) }}" target="__blank">View Template</a><br>
										<a href="{{ url('/getdownloads/'.$list->img_id) }}" target="__blank"><button class="btn follow-btn btn-green"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
									</td>
								</tr>
								@endforeach
							</table>
							<hr>
							<a href="{{ url('/downloads') }}">View All Downloads  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="section" style="padding: 30px; min-height: 735px;">
							<h3>Latest Designs</h3>
							<div style="width: 350px;height: 330px;overflow: hidden;">
								<img src="{{ asset('/images/'.$recentDesignFirst->watermark_img ) }}" width="100%" >
							</div>
							<br><br>
							<table class="table">
								@foreach ( $recentDesign as $list )
								<tr>
									<td width="30%">
										<img src="{{ asset('/images/'.$images->changeSizeImage($images->getOneImageDetail($list->id)->watermark_img, 's' )) }}" width="100%">
									</td>
									<td>
										<h4 style="margin-bottom: 2px;margin-top: 0px;">{{  str_limit($images->getOneImageDetail($list->id)->title, $limit = 20, $end = '...')  }}</h4>
										<a href="{{ url('/products/'.$category->getCatName($images->getOneImageDetail($list->id)->category).'/'.$list->id ) }}" target="__blank">View Template</a>
										&nbsp;&nbsp;| &nbsp;&nbsp;<img src="{{ asset('assets/images/stars-3.png') }}">
										<br>
										<br>
										
										<span style="color: #979595;font-size: 15px;">{{ $download->countImageDownloads($list->id) }} downloads</span> 

										<a style="float: right; margin-top: -15px; margin-left: 10px;" href="{{ url('/getdownloads/'.$list->id) }}" target="__blank">
											<button class="btn follow-btn btn-green"><i class="fa fa-download" aria-hidden="true"></i></button>
										</a>
										&nbsp;&nbsp;
										<a style="float: right; margin-top: -15px;" href="{{ url('/getdownloads/'.$list->id) }}" target="__blank">
											<button class="btn follow-btn btn-green"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
										</a>
										
									</td>
								</tr>
								@endforeach
							</table>
							<hr>
							<a href="{{ url('/categories') }}">View All Designs  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection