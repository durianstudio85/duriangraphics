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
					<div class="side-nav-categories">
						<h4>Your Filters</h4>
						<ul>
							<li><a href="{{ url('/admin') }}" {{{ ( Request::is('admin') ? 'class=active' : '') }}}><p>Dashboard</p></a></li>
							<hr>
							<li><a href="{{ url('/admin/products/create') }}" {{{ ( Request::is('admin/products/create') ? 'class=active' : '') }}} ><p>Add Product <span></span></p></a></li>
							<li><a href="{{ url('/admin/products') }}" {{{ ( Request::is('admin/products') ? 'class=active' : '') }}}><p>Products <span>(0)</span></p></a></li>
							<hr>
							<li><a href="{{ url('/admin/categories/create') }}" {{{ ( Request::is('admin/categories/create') ? 'class=active' : '') }}} ><p>Add Category <span></span></p></a></li>
							<li><a href="{{ url('/admin/categories') }}" {{{ ( Request::is('admin/categories') ? 'class=active' : '') }}} ><p>Categories <span>(0)</span></p></a></li>
						</ul>						
					</div>
				</div>
				<div class="col-md-9">
					<!-- <h2>Print Templates</h2> -->
					
				</div>
			</div>
		</div>
	</div>
	<div class="dg-subscribe-footer-background">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                
	                <p>Subscriptions in demand forn only $4.99/month</p>
	            </div>
	        </div>
	        <div class="row dg-subscription-form">
	            <div class="col-md-12">
	                <p>Start using our professionally done graphics for only <span>$4.99/month</span> inlcuding source files.</p>
	                <button>SUBSCRIBE NOW!</button>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection