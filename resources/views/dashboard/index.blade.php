@extends('layouts.app')

@section('content')
<div class="dashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="btn-group-vertical" role="group" aria-label="..." style="width: 100%;">
				  <a href="#" class="btn btn-default">Profile</a>
				  <a href="#" class="btn btn-default">Downloads</a>

				  <div class="btn-group" role="group">
				    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				      Dropdown
				      <span class="caret"></span>
				    </button>
				    <ul class="dropdown-menu">
				      <li><a href="#">Dropdown link</a></li>
				      <li><a href="#">Dropdown link</a></li>
				    </ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection