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
							<div class="blog-body">
								@foreach ( $blog as $list)
									<div class="col-md-6">
										<div class="blog-thumbnails">
											<img src="{{ asset('img/'.$list->thumbnail) }}">
											<a href="{{ url('/blog/'.$list->slug) }}"><h4>{{ $list->title }}</h4></a>
										</div>
									</div>
								@endforeach
							</div>
						@else
							<div class="blog-content">
								{!! $blog->content !!}
								<br>
								<div class="col-md-12">
									<center>
										<h3>Share This Article</h3><br>
										<a href="#facebook" class="blog-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										<a href="#twitter" class="blog-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										<a href="#google-plus" class="blog-google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
										<a href="#pinterest-p" class="blog-pinterest-p"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
										<a href="#linkedin" class="blog-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									</center>
								</div>
								<div class="col-md-12">
									<div class="blog-author-section">
										<div class="col-sm-2">
											<img src="{{ asset('assets/images/author-img.jpg') }}" width="100%">
										</div>
										<div class="col-sm-9">
											<h4>Author: Durian Graphics</h4>
											<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dui libero, tempor quis congue in, interdum eget tortor. </p>
										</div>
										
									</div>
								</div>
							</div>
						@endif
					</div>
				</div>
				<div class="col-md-3">
					<div class="blog-recent">
						<h3>Recent Posts</h3>
						<table>
							@foreach ( $recentBlog as $recent )
								<tr>
									<td width="30%"><img src="{{ asset('img/'.$recent->thumbnail ) }}"></td>
									<td class="details">
										<a href="{{ url('/blog/'.$recent->slug) }}"><p class="blog-recent-title">{{ str_limit($recent->title , $limit = 23, $end = '...') }}</p></a>
										<p class="blog-recent-date">{{  date('F d, Y', strtotime($recent->created_at)) }}</p>
									</td>
								</tr>
							@endforeach
						</table>
						<br>
						<br>
						@if ( $postCategory->get() != '' )
							<h3>Blog Categories</h3>
		                    <table class="blog-categories-table">
		                    	@foreach ( $postCategory->get() as $postCat )
		                    		@if( $postCategory->countItems($postCat->id) != 0)
			                    		<tr>
				                    		<td><p class="blog-categories">{{ $postCat->name }}</p></td>
				                    		<td><p class="blog-categories">({{ $postCategory->countItems($postCat->id) }})</p></td>
				                    	</tr>
			                    	@endif
		                    	@endforeach
		                    </table>	
						@endif
						
	                    <br>
	                    <br>
	                    <h3>Featured Items</h3>
	                    <div class="">
	                    	@foreach ( $option->where('category','=','featured')->skip(0)->take(6)->inRandomOrder()->get() as $optionList )
	                    		<div class="">
	                    			<a href="{{ url('/products/'.$category->getCatName($products->find($optionList->img_id)->category).'/'.$products->find($optionList->img_id)->id) }}">
	                    			<img src="{{ asset('images/'.$products->changeSizeImage( $products->find($optionList->img_id)->watermark_img,'s') ) }}" style="width: 30.33333333%; margin-right: 5px; margin-bottom: 5px;float: left;">
	                    			</a>
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