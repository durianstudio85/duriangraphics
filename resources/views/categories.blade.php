@extends('layouts.app')

@section('content')
<div class="dg-banner-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="dg-banner-h2">Over 100,000, Infographics, Themes, Vectors, Logos, and Artworks</h2>
                    <p class="dg-banner-p">Discover our huge collection of hand-reviewed graphic assets from our community of designers.</p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-group dg-banner-input-group">
                                    <input type="text" class="form-control input-lg dg-banner-input" placeholder="Find logo, banner, artworks, etc....">
                                    <span class="input-group-btn gd-banner-button">
                                        <button class="btn btn-default btn-lg dg-banner-btn" type="button">SEARCH</button>
                                   </span>
                                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                                </div>
                            </div>
                        </div>
                    </form>
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
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
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
							@foreach( $getCategoryAll as $items )
								<li><a href="{{ url('/categories/'.$items->name) }}" {{{ ( Request::is('categories/'.$items->name.'') ? 'class=active' : '') }}}><p>{{ ucfirst($items->name) }} <span>({{ $category->countCategoryContent($items->id)}})</span></p></a></li>
							@endforeach
						</ul>						
					</div>
				</div>
				<div class="col-md-9">
					<!-- <h2>Print Templates</h2> -->
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
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection