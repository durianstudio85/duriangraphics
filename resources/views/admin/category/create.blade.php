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
							<h3>Add Category</h3>
							<p></p>
							{!! Form::open(['url'=>'admin/categories/create']) !!}
								<div class="form-group">
                                	{!! Form::label('name', 'Category Name') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
   								</div>
   								<div class="form-group">
   									{!! Form::submit('Add', ['class'=>'add-cat-btn', 'placeholder'=>'Name']) !!}
   								</div>
   							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection