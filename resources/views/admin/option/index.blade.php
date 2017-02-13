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
							<h3 class="cat-title">Options</h3>
							<hr>
							<p></p>
							<div class="row">
								<div class="col-md-12">
									<h4>Featured Images</h4>
									<div class="table-responsive" >								
										<table class="table">
											<tr>
												<td>Images</td>
												<td>Name</td>
											</tr>
											<tr>
												<td>Images</td>
												<td>Name</td>
											</tr>
											<tr>
												<td>Images</td>
												<td>Name</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>    
				</div>
			</div>
		</div>
	</div>
</div>
@endsection