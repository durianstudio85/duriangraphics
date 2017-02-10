<!-- <div class="side-nav-categories">
	<h4>Your Filters</h4>
	<ul>
		<li><a href="{{ url('/admin') }}" {{{ ( Request::is('admin') ? 'class=active' : '') }}}><p>Dashboard</p></a></li>
		<hr>
		<li><a href="{{ url('/admin/products/create') }}" {{{ ( Request::is('admin/products/create') ? 'class=active' : '') }}} ><p>Add Product <span></span></p></a></li>
		<li><a href="{{ url('/admin/products') }}" {{{ ( Request::is('admin/products') ? 'class=active' : '') }}}><p>Products <span>( {{ App\Image_item::count() }} )</span></p></a></li>
		<hr>
		<li><a href="{{ url('/admin/categories/create') }}" {{{ ( Request::is('admin/categories/create') ? 'class=active' : '') }}} ><p>Add Category <span></span></p></a></li>
		<li><a href="{{ url('/admin/categories') }}" {{{ ( Request::is('admin/categories') ? 'class=active' : '') }}} ><p>Categories <span>( {{ App\Category::count() }} )</span></p></a></li>
		<hr>
		<li><a href="{{ url('/admin/options') }}" {{{ ( Request::is('admin/options') ? 'class=active' : '') }}} ><p>Options</p></a></li>
		<hr>
		<li><a href="{{ url('/admin/logout') }}"><p>Logout</p></a></li>
	</ul>						
</div> -->

<div class="dashboard-nav">
	<center>
        <img src="{{ asset('assets/images/profile-blank-image.png') }}">
        <h2>Administrator</h2>
        <h5>Administrator</h5>
    </center>
    <br>

    <div class="user-navigation admin-include-navigation">
        <ul>
            <li>
                <a href="{{ url('/dashboard') }}" {{{ ( Request::is('dashboard') ? 'class=active' : '') }}}><p><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</p></a>
            </li>
            <li>
                <a href="{{ url('/profile') }}" {{{ ( Request::is('profile') ? 'class=active' : '') }}}><p><i class="fa fa-user" aria-hidden="true"></i>Profile</p></a>
            </li>
            <!-- <li>
                <a href="#"><p><i class="fa fa-users" aria-hidden="true"></i>Followers</p></a>
            </li>
            <li>
                <a href="#"><p><i class="fa fa-user-plus" aria-hidden="true"></i>Following</p></a>
            </li>
            <li>
                <a href="#"><p><i class="fa fa-cog" aria-hidden="true"></i>Setting</p></a>
            </li> -->
            <li>
                <a href="{{ url('/downloads') }}" {{{ ( Request::is('products') ? 'class=active' : '') }}}><p><i class="fa fa-download" aria-hidden="true"></i>Downloads</p></a>
            </li>
            <!-- <li>
                <a href="#"><p><i class="fa fa-star" aria-hidden="true"></i>Reviews</p></a>
            </li>
            <li>
                <a href="#"><p><i class="fa fa-money" aria-hidden="true"></i>Earnings</p></a>
            </li> -->
        </ul>
    </div>
    </div>