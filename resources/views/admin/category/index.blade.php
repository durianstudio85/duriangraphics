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
							<h3 class="cat-title">Category</h3><a href="{{ url('admin/categories/create') }}" class="cat-btn">Add Category</a>
							<p></p>
							<div class="table-responsive category-table" >								
								<table class="table">
									<thead style="background-color: #d9f7f7;">
										<th width="90%">Name</th>
										<th> </th>
									</thead>
									<tbody>
										@foreach ( $categoryList as $list)
										<tr>
											<td>
												{{ ucfirst($list->name) }} ( {{ $category->countCategoryContent($list->id) }} )
											</td>
											<td>
												<a href="#">Remove</a>
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