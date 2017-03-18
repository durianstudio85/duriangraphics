@extends('layouts.app')

@section('content')
<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@if( Request::path() == 'blog' )
						<h2>Our Blog</h2>
					@else
						<h2>{{ $blog->title }}</h2>
					@endif
					<!-- <p>From our huge collection of hand-reviewed graphic design, we provide all you need to complete your project. Our collection gives you the best design of logo, icons, artwork, infographics, invitation, presentations, t-shirt, themes, ads, abstract, banner, elements and alphabets.</p> -->
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-about-content">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						@if( Request::path() == 'blog')
							@foreach ( $blog as $list)
								<div class="col-md-6">
									<div class="blog-thumbnails">
										<img src="{{ asset('img/'.$list->thumbnail) }}">
										<h4>{{ $list->title }}</h4>
										<p>{{ $list->short_content }}</p>
										<a href="{{ url('/blog/'.$list->slug) }}">Details</a>
									</div>
								</div>
							@endforeach
						@else
							{!! $blog->content !!}
							<!-- <div class="col-md-12">
								<center><h3>Share This Article<h3></center>
							</div> -->
							
						@endif
					</div>
				</div>
				<div class="col-md-3">
					<div class="blog-recent">
						<h3>Recent Posts</h3>
						<table>
							<tr>
								<td width="30%"><img src="{{ asset('assets/images/blog1.jpg') }}"></td>
								<td class="details">
									<p class="blog-recent-title">5 Reasons lorem ipsum dol</p>
									<p class="blog-recent-date">September 30, 2016</p>
								</td>
							</tr>
							<tr>
								<td width="30%"><img src="{{ asset('assets/images/blog2.jpg') }}"></td>
								<td class="details">
									<p class="blog-recent-title">5 Reasons lorem ipsum dol</p>
									<p class="blog-recent-date">September 30, 2016</p>
								</td>
							</tr>
							<tr>
								<td width="30%"><img src="{{ asset('assets/images/blog3.jpg') }}"></td>
								<td class="details">
									<p class="blog-recent-title">5 Reasons lorem ipsum dol</p>
									<p class="blog-recent-date">September 30, 2016</p>
								</td>
							</tr>
							<tr>
								<td width="30%"><img src="{{ asset('assets/images/blog4.jpg') }}"></td>
								<td class="details">
									<p class="blog-recent-title">5 Reasons lorem ipsum dol</p>
									<p class="blog-recent-date">September 30, 2016</p>
								</td>
							</tr>
							<tr>
								<td width="30%"><img src="{{ asset('assets/images/blog5.jpg') }}"></td>
								<td class="details">
									<p class="blog-recent-title">5 Reasons lorem ipsum dol</p>
									<p class="blog-recent-date">September 30, 2016</p>
								</td>
							</tr>
						</table>
						<br>
						<br>
						<h3>Blog Categories</h3>
	                    <table class="blog-categories-table">
	                    	<tr>
	                    		<td><p class="blog-categories">Design</p></td>
	                    		<td><p class="blog-categories">(4)</p></td>
	                    	</tr>
	                    </table>
	                    <br>
	                    <br>
	                    <h3>Featured Items</h3>
	                    <div class="">
	                    	@foreach ( $option->where('category','=','featured')->skip(0)->take(6)->inRandomOrder()->get() as $optionList )
	                    		<div class="">
	                    			<a href="{{ url('/products/'.$category->getCatName($products->find($optionList->img_id)->category).'/'.$products->find($optionList->img_id)->id) }}"></a>
	                    			<img src="{{ asset('images/'.$products->changeSizeImage( $products->find($optionList->img_id)->watermark_img,'s') ) }}" style="width: 33.33333333%; margin-right: 5px;float: left;">
	                    		</div>
	                    	@endforeach
	                    </div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	
</div>

@endsection