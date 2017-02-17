@extends('layouts.app')

@section('content')
<div class="dg-banner-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="dg-banner-h2">Infographics, Themes, Vectors, Logos, Artworks and many more</h2>
                    <p class="dg-banner-p">Discover our huge collection of hand-reviewed graphic assets from our community of designers.</p>
                    {!! Form::open(['url'=>'/search', 'class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                
                                <div class="input-group dg-banner-input-group">
                                    {!! Form::text('search', old('search'), array('required', 'class'=>'form-control input-lg dg-banner-input', 'placeholder'=>'Find logo, banner, artworks, etc....')) !!}
                                    <!-- <input type="text" class="form-control input-lg dg-banner-input" placeholder="Find logo, banner, artworks, etc...."> -->
                                    <span class="input-group-btn gd-banner-button">
                                        <button class="btn btn-default btn-lg dg-banner-btn" type="submit">SEARCH</button>
                                   </span>
                                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                                </div>
                    
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Categories</h2>
					<p>From our huge collection of hand-reviewed graphic design, we provide all you need to complete your project. Our collection gives you the best design of logo, icon, artwork, infographics, invitations, presentations, t-shirt, themes, ads, abstract and alphabets</p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-about-content dg-categories-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="side-nav-categories">
						<h4>Your Filters</h4>
						<ul>
							<li><a href="{{ url('/categories') }}" {{{ ( Request::is('categories') ? 'class=active' : '') }}} ><p>All <span>({{ $category->countAll()}})</span></p></a></li>
							<!-- <li><a href="{{ url('/categories/newitems') }}" {{{ ( Request::is('categories/newitems') ? 'class=active' : '') }}} ><p>New Items <span>({{ $category->getNewCount()}})</span></p></a></li> -->
							<li><a href="{{ url('/categories/popular') }}" {{{ ( Request::is('categories/popular') ? 'class=active' : '') }}} ><p>Popular <span>({{ $category->getNoOfDownloads() }})</span></p></a></li>
							@foreach( $getCategoryAll as $items )
								<li><a href="{{ url('/categories/'.$items->name) }}" {{{ ( Request::is('categories/'.$items->name.'') ? 'class=active' : '') }}}><p>{{ ucfirst($items->name) }} <span>({{ $category->countCategoryContent($items->id)}})</span></p></a></li>
							@endforeach
						</ul>						
					</div>
				</div>
				<div class="col-md-9">
					<!-- <h2>Print Templates</h2> -->
					@if (Request::path() == 'categories/popular')
						@foreach( $getProdAll as $images )
							<div class="col-md-4 col-sm-4 col-xs-6 prod-margin">
								<img src="{{ asset('images/'.$products->changeSizeImage($products->find($images->img_id)->watermark_img, 'm')) }}">
								<div>
		                            <a href="{{ url('/products/'.$category->getCatName($products->find($images->img_id)->category).'/'.$images->img_id) }}" class="categories-hover-item">
		                                <span class="product-hover"><i class="fa fa-search" aria-hidden="true"></i></span>
		                            </a>
								</div>
							</div>
						@endforeach
					@else
						@foreach( $getProdAll as $images)
							<div class="col-md-4 col-sm-4 col-xs-6 prod-margin">
								<img src="{{ asset('images/'.$products->changeSizeImage($images->watermark_img, 'm')) }}">
								<div>
		                            <a href="{{ url('/products/'.$category->getCatName($images->category).'/'.$images->id) }}" class="categories-hover-item">
		                                <span class="product-hover"><i class="fa fa-search" aria-hidden="true"></i></span>
		                            </a>
								</div>
							</div>
						@endforeach
					@endif
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<hr>
						<center>
						{!! $getProdAll->links() !!}
					</center>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection