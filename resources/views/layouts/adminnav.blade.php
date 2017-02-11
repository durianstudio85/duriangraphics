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

<div class="side-nav-categories dashboard-nav">
	<center>
        <img src="{{ asset('assets/images/profile-blank-image.png') }}">
        <h2>Administrator</h2>
        <h5>Administrator</h5>
    </center>
    <br>

    <div class="user-navigation admin-include-navigation">
        <ul>
            <li><a href="{{ url('/admin') }}" {{{ ( Request::is('admin') ? 'class=active' : '') }}}><p>Dashboard</p></a></li>
            <li><a href="{{ url('/admin/products') }}" {{{ ( Request::is('admin/products') ? 'class=active' : '') }}}><p>Products <span>( {{ App\Image_item::count() }} )</span></p></a></li>
            <li><a href="{{ url('/admin/products/create') }}" {{{ ( Request::is('admin/products/create') ? 'class=active' : '') }}} ><p>Add Product <span></span></p></a></li>
            
            <li><a href="{{ url('/admin/categories') }}" {{{ ( Request::is('admin/categories') ? 'class=active' : '') }}} ><p>Categories <span>( {{ App\Category::count() }} )</span></p></a></li>
            <li><a href="{{ url('/admin/categories/create') }}" {{{ ( Request::is('admin/categories/create') ? 'class=active' : '') }}} ><p>Add Category <span></span></p></a></li>

            <li><a href="{{ url('/admin/users') }}" {{{ ( Request::is('admin/options') ? 'class=active' : '') }}} ><p>Users</p></a></li>
            
            <li><a href="{{ url('/admin/options') }}" {{{ ( Request::is('admin/options') ? 'class=active' : '') }}} ><p>Option</p></a></li>
            <li><a href="{{ url('/admin/options') }}" {{{ ( Request::is('admin/options') ? 'class=active' : '') }}} ><p>Account Setting</p></a></li>

            

            <li><a href="{{ url('/admin/logout') }}"><p>Logout</p></a></li>
        </ul>   
    </div>
</div>