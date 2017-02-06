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