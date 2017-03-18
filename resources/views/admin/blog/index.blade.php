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
					<div class="col-md-12">
						<div class="section admin-dashboard-section-first">
							<h3 class="cat-title">Post</h3><a href="{{ url('admin/posts/create') }}" class="cat-btn">Add Posts</a>
							<p></p>
							<div class="table-responsive category-table" >								
								<table class="table">
									<thead style="background-color: #d9f7f7;">
										<th>Title</th>
										<th>Category</th>
										<th>Author</th>
										<th></th>
									</thead>
									<tbody>
										@foreach ( $post as $list )
											<tr>
												<td>{{ $list->title }}</td>
												<td>{{ $list->category }}</td>
												<td>{{ $list->author_id }}</td>
												<td><a href="{{ url('/admin/posts/'.$list->id.'/edit') }}">Edit</a></td>
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