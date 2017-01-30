@extends('layouts.app')

@section('content')
<div class="dashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				@include('layouts.usernav')
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<div class="section">
							<div class="row">
								<div class="col-md-12">
									<h2>Dashboard</h2>
								</div>
								<div class="col-md-12">
									<p>When you sell an item on Durian Graphics the total purchase price is made up of your item price plus Durian’s fee to the buyer. Buyer fees are either calculated as a % of the item price or are set at a fixed amount. Fixed buyer fee amounts apply to categories where authors set the price themselves. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="section">
							<h4 class="text-center">Non-Exclusive Authors</h4>
							<p class="text-center">
								Our author fee to non-exclusive authors is 55% of the item price. So for example when an item sells for $100 the breakdown of fees looks like this:
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="section">
							<h4 class="text-center">Exclusive Authors</h4>
							<p class="text-center">
								Our author fee to exclusive authors is between 12.5%-37.5% of the item price. So for example when an item sells for $100 the breakdown of fees looks like this:
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="section">
							<h4 class="text-center">Supporting Your Item</h4>
							<p class="text-center">
								Supporting your items is not a requirement of Durian Graphics Market, but some buyers tend to have questions about the item and require assistance. If you choose to offer support for your item, you’ll earn any sales of support extensions minus a standard author fee of 30%. There is no buyer fee associated with support extensions.

Read the item support policy for what it means to support your buyers and visit the Help Centre to learn how item support pricing works
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection