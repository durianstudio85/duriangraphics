@extends('layouts.app')

@section('content')

<div class="dg-about-container">
	<div class="dg-about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>About</h2>
					<p>From our huge collection of hand-reviewed graphic design, we provide all you need to complete your project. Our collection gives you the best design of logo, icons, artwork, infographics, invitation, presentations, t-shirt, themes, ads, abstract, banner, elements and alphabets.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="dg-about-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="{{ asset('assets/images/dg_about_img1.png') }}">
				</div>
				<div class="col-md-6">
					<h2>Why Subscribe Us?</h2>
					<p>Got problem with your design that need to be fixed right away?<br>
                    Durian Graphics is here for you. We build and sell with our unique design. With our reliable and creative
                        team who has in-depth knowledge and expertise in creating customized design just for you. Because our clients expect
                        the best, we provide you the best option to choose from one of our graphic designs for your business and needs.</p>
                    <a href="#">Subscribe us now to get updated graphic design! </a>
				</div>
			</div>
			<div class="row">
				
				<div class="col-md-6">
					<h2>Durian Careers?</h2>
					<p>The Durian Graphics is responsible for creating and delivering creative design of any events. Durian Graphics people are very passionate in terms of design, a people with a very imaginative mind. Endless creative thinking and experiences based on the designed, makes our customer happy. Graphics designers create a design used in websites and publications, also for the client needs.
Build a new design that is unique and different from our competitors.<br><br>

If you got all of those, this is your opportunity to join our team and to showcase your skills.</p> <br>
					<a href="{{ url('/login') }}">Be a part of Durian Graphics.</a>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('assets/images/dg_about_img2.png') }}">
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection