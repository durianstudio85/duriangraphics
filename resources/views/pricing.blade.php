@extends('layouts.app')

@section('content')

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Pricing</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-pricing-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="dg-pricing-free">
						<div class="pricing-head">
							<h2>FREE</h2>
							<p><span class="currency">$</span><span class="price">0</span>/month</p>
						</div>
						<div class="pricing-content">
							<h3>10 Downloads / month<br>Limited Royalty</h3>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique lectus et augue consequat volutpat. Nulla magna felis, mollis ut lobortis et, pretium vel quam. Nulla facilisi.</p> -->
							<div style="margin-top: 110px;"><a href="#" class="pricing-btn">SELECT</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dg-pricing-professional">
						<div class="pricing-head">
							<h2>Professional</h2>
							<p><span class="currency">$</span><span class="price">4.99</span>/month</p>
						</div>
						<div class="pricing-content">
							<h3>1000 Downloads / month<br>Free Royalty</h3>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique lectus et augue consequat volutpat. Nulla magna felis, mollis ut lobortis et, pretium vel quam. Nulla facilisi.</p> -->
							<div style="margin-top: 110px;"><a href="#" class="pricing-btn">SELECT</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dg-pricing-business">
						<div class="pricing-head">
							<h2>Business</h2>
							<p><span class="currency">$</span><span class="price">9.99</span>/month</p>
						</div>
						<div class="pricing-content">
							<h3>Unlimited Downloads<br>Free Royalty<br>Free Support</h3>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique lectus et augue consequat volutpat. Nulla magna felis, mollis ut lobortis et, pretium vel quam. Nulla facilisi.</p> -->
							<div style="margin-top: 78px;">
								<a href="#" class="pricing-btn">SELECT</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="icon">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
					</div>
					<div class="pricing-feauted-content">
						<h3>How long are your contracts?</h3>
						<p>Durian Graphics plans are paid monthly or yearly. We make it simple to start — and stop — your service at any time.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="icon">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</div>
					<div class="pricing-feauted-content">
						<h3>How do I Signup?</h3>
						<p>You start with a free trial. We don't collect your credit card until you've determined Durian Graphics is the right product for you.</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="icon">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>
					<div class="pricing-feauted-content">
						<h3>Is there a discount for yearly?</h3>
						<p>Yes. The majority of Durian Graphics customers opt for yearly billing arrangements, and we are able to offer this at a discount to monthly pricing. We also offer the ability to get a free domain (for the first year) with any annual commitment.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="icon">
						<i class="fa fa-times" aria-hidden="true"></i>
					</div>
					<div class="pricing-feauted-content">
						<h3>How do I cancel Service?</h3>
						<p>Canceling Durian Graphicsis an easy and no-questions-asked process. It's done online right from your site manager.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="dg-subscribe-footer-background">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <h2>Subscription</h2>
	                <p>Subscriptions in demand forn only $4.99/month</p>
	            </div>
	        </div>
	        <div class="row dg-subscription-form">
	            <div class="col-md-12">
	                <p>Start using our professionally done graphics for only <span>$4.99/month</span> inlcuding source files.</p>
	                <button>SUBSCRIBE NOW!</button>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection