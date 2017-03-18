@extends('layouts.app')

@section('content')
<div class="dg-administrator-container">
	<div class="dg-categories-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('layouts.adminnav')
				</div>
				<div class="col-md-9">
					@include('notification.flash')
					<div class="col-md-12">
						<div class="section admin-dashboard-section-first">
							<h3 class="cat-title">Post Category</h3><a href="{{ url('admin/posts/categories/create') }}" class="cat-btn">Add Post Category</a>
							<p></p>
							<div class="table-responsive category-table" >								
								<table class="table">
									<thead style="background-color: #d9f7f7;">
										<th width="40%">Name</th>
										<th width="30%">Slug</th>
										<th width="10%"><center>Count</center></th>
										<th> </th>
									</thead>
									<tbody>
										@foreach ( $PostCategoryList as $list)
										<tr>
											<td>{{ $list->name }}</td>
											<td>{{ $list->slug }}</td>
											<td><center>{{ $post->countItems($list->id) }}</center></td>
											<td>
												<center><a href="{{ url('/admin/posts/categories/'.$list->id.'/edit') }}">Edit</a></center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>    
				</div>
			</div>
		</div>
	</div>
</div>
@endsection