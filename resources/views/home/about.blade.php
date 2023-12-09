@extends('layouts/home-app')

@section('content')
<section class="aboutection">
		<div class="container">
			<div class="heading-div">
				<h2 class="heading center">ABOUT US</h2>
			</div>	
			<div class="flex align-center justify-between flex-wrap about-grid">
				<div class="about-content">
					<h3>Smart Platform Integration</h3>
					<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Nam quam nunc, blandit vel. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanti.</p>
					<p>Lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
				</div>
				<div class="about-img">
					<img src="../assets/images/aboutimg.png">
				</div>
			</div>
		</div>
	</section>
	
	<section class="count-section">
		<div class="container">
			<div class="flex align-center justify-between flex-wrap count-grid">
				<div class="count-inner count-inner1">
					<h3>Innovative and existing product</h3>
					<p>Lorem ipsum dolor sit amet ridiculus consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Montes est massa. Cum sociis Theme natoq</p>
				</div>
				<div class="count-inner count-inner2">
					<h3>Innovative and existing product</h3>
					<p>Lorem ipsum dolor sit amet ridiculus consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Montes est massa. Cum sociis Theme natoq</p>
				</div>
				<div class="count-inner count-inner3">
					<h3>Innovative and existing product</h3>
					<p>Lorem ipsum dolor sit amet ridiculus consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Montes est massa. Cum sociis Theme natoq</p>
				</div>
			</div>
		</div>
	</section>
	
	<section class="process-section">
		<div class="container">
			<div class="heading-div">
				<h2 class="heading center">Our Process</h2>
				<p>Mauzris consectetur leo sed lacus gravida, nec pharetra justo laoreet</p>
			</div>	
			<div class="flex align-center justify-between flex-wrap process-grid">
				<div class="process-inner">
					<div class="process-icon">
						<img src="../assets/images/picon1.png">
					</div>
					<div class="process-circle"><img src="../assets/images/planing-circle.png"></div>
					<div class="process-content">
						<h3>Planning</h3>
						<p>Lorem ipsum dolor sit amet, consectetur elit.</p>
					</div>
				</div>
				<div class="process-inner">
					<div class="process-icon">
						<img src="../assets/images/picon2.png">
					</div>
					<div class="process-circle"><img src="../assets/images/organization-circle.png"></div>
					<div class="process-content">
						<h3>Organisation</h3>
						<p>Phasellus rhoncus elementum volutpat consectetur </p>
					</div>
				</div>
				<div class="process-inner">
					<div class="process-icon">
						<img src="../assets/images/picon3.png">
					</div>
					<div class="process-circle"><img src="../assets/images/planing-circle.png"></div>
					<div class="process-content">
						<h3>Management</h3>
						<p>Phasellus rhoncus elementum volutpat consectetur </p>
					</div>
				</div>
				<div class="process-inner">
					<div class="process-icon">
						<img src="../assets/images/picon4.png">
					</div>
					<div class="process-circle"><img src="../assets/images/organization-circle.png"></div>
					<div class="process-content">
						<h3>Support</h3>
						<p>Nunc mattis, elit ac placerat placerat, eros nisi</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="trust-section">
		<div class="container">
			<div class="flex align-center justify-between flex-wrap trust-grid">
				<div class="trust-img">
					<img src="../assets/images/about-trust.png">
				</div>
				<div class="trust-content">
					<h3>Trusted and Supported by Many</h3>
					<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Nam quam nunc, blandit vel. Lorem ante, dapibus in, viverra quis, feugiat.</p>
					<p>Phasellus viverra nulla ut metus varius laoreet. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanti.</p>
				</div>
			</div>
		</div>
	</section>
	
	<section class="company-section">
		<div class="container">
			<div class="flex align-center justify-between flex-wrap company-grid">
				<h2><span>BEST</span> FACTS OF<br> OUR COMPANY</h2>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
			</div>
		</div>
	</section>
	
	<section class="conter-section">
		<div class="container">
			<div class="flex align-center justify-between flex-wrap counter-grid">
				<div class="counter-inner">
					<h2>125</h2>
					<p>satisfied clients</p>
				</div>
				<div class="counter-inner">
					<h2>368</h2>
					<p>completed projects</p>
				</div>
				<div class="counter-inner">
					<h2>100%</h2>
					<p>completed projects</p>
				</div>
				<div class="counter-inner">
					<h2>2500+</h2>
					<p>hours of work</p>
				</div>
			</div>
		</div>
	</section>
	@endsection