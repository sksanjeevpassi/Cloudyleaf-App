@extends('layouts/home-app')

@section('content')
<section class="banner-section relative">
	<div class="container">
		<div class="flex align-center justify-between flex-wrap">
			<div class="banner-content">
				<h4 class="primary-color">Outstanding Creative Agency</h4>
				<h1>WE BRAND<br /> YOUR PROJECT</h1>
				<a href="#" class="primary-btn">Our Services</a>
				<div class="banner-dots">
					<img src="../assets/images/sq-clr.png">
				</div>
			</div>
			<div class="banner-img">
				<img src="../assets/images/banner-img.png">

			</div>
		</div>
	</div>
	<div class="banner-circle">
		<img src="../assets/images/bl.png">
	</div>
</section>

<section class="pdf-section relative">
	<div class="container">
		<div class="flex align-center justify-between flex-wrap">
			<div class="pdf-img">
				<img src="../assets/images/pdf.png">
			</div>
			<div class="pdf-content">
				<h2 class="left heading">Create PDF Documnets</h2>
				<p>Curabitur rhoncus nisi ut libero convallis, quis egestas nisi sollicitudin. Vestibulum molestie efficitur enim et tincidunt. Mauris placerat, nisi vel commodo fringilla, eros lorem aliquet elit, sed volutpat nibh arcu sed.</p>
				<p>Integer ac sollicitudin orci. Morbi sapien magna, rhoncus a ultricies a, placerat id libero. Duis hendrerit mi egestas, varius tellus sed, maximus risus. Praesent a commodo diam. Aenean cursus congue ex, non aliquet ex vestibulum eu.</p>
				<a href="#" class="primary-btn">View More</a>
			</div>
		</div>
	</div>
	<div class="pdf-cardimg">
		<img src="../assets/images/Vector.png">
	</div>
</section>

<section class="api-section relative">
	<div class="api-circle1">
		<img src="../assets/images/circle1.png">
	</div>
	<div class="container">
		<div class="heading-div">
			<h2 class="heading center">Create Web API Projects</h2>
			<p>Mauris consectetur leo sed lacus gravida, nec pharetra justo laoreet</p>
		</div>
		<div class="flex align-center justify-between flex-wrap api-div">
			<div class="api-content">
				<p>Nulla tempus varius augue ac vehicula. Vivamus sagittis auctor dui, quis suscipit orci sollicitudin id. Phasellus rutrum varius fringilla. In in dolor volutpat, suscipit urna quis, mollis nisl. Nulla nulla metus. Suspendisse vel volutpat tellus.</p>
				<ul>
					<li>Nullam elementum gravida velit at posuere.</li>
					<li>hasellus interdum, velit in convallis placerat, quam odio pharetra.</li>
					<li>Felis, ac pellentesque leo libero eget turpis. Integer viverra</li>
				</ul>
				<a href="#" class="primary-btn">Know More</a>
			</div>
			<div class="api-img">
				<img src="../assets/images/image.png">
			</div>
		</div>
	</div>
	<div class="api-circle2">
		<img src="../assets/images/circle2.png">
	</div>
</section>

<section class="service-development relative">
	<div class="service-img">
		<img src="../assets/images/globe.png">
	</div>
	<div class="container">
		<div class="flex align-center justify-between flex-wrap service-grid-outter">
			<div class="service-grid service-frst-grid">
				<h3>Full Range of Web Development Services</h3>
				<p>Vivamus ac iaculis justo. Donec sed sollicitudin odio, sit amet egestas sem.</p>
				<a href="#" class="border-btn">VIEW ALL SERVICES</a>
			</div>
			<div class="service-grid">
				<div class="service-icon">
					<img src="../assets/images/icon1.png">
				</div>
				<h3>Mobile Applications</h3>
				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut urna orci, vulputate et.</h4>
				<a href="#" class="link">Read more <img src="../assets/images/arrow.png"></a>
			</div>
			<div class="service-grid">
				<div class="service-icon">
					<img src="../assets/images/icon2.png">
				</div>
				<h3>Mobile Applications</h3>
				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut urna orci, vulputate et.</h4>
				<a href="#" class="link">Read more <img src="../assets/images/arrow.png"></a>
			</div>
			<div class="service-grid">
				<div class="service-icon">
					<img src="../assets/images/icon3.png">
				</div>
				<h3>Mobile Applications</h3>
				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut urna orci, vulputate et.</h4>
				<a href="#" class="link">Read more <img src="../assets/images/arrow.png"></a>
			</div>
			<div class="service-grid">
				<div class="service-icon">
					<img src="../assets/images/icon4.png">
				</div>
				<h3>Mobile Applications</h3>
				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut urna orci, vulputate et.</h4>
				<a href="#" class="link">Read more <img src="../assets/images/arrow.png"></a>
			</div>
			<div class="service-grid">
				<div class="service-icon">
					<img src="../assets/images/icon5.png">
				</div>
				<h3>Mobile Applications</h3>
				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut urna orci, vulputate et.</h4>
				<a href="#" class="link">Read more <img src="../assets/images/arrow.png"></a>
			</div>

		</div>
	</div>
</section>

<section class="blog">
	<div class="container">
		<div class="heading-div">
			<h2 class="heading center">Blog</h2>
			<p>Mauris consectetur leo sed lacus gravida, nec pharetra justo laoreet</p>
		</div>
		<div class="flex align-center justify-between flex-wrap blog-grid-outter">
			@foreach($blogs as $blog)
			<div class="blog-grid">
				<div class="blog-img">
					<img src="{{ asset('uploads/' . $blog->blog_image) }}" alt="{{ $blog->blog_name }}">
				</div>
				<div class="blog-content">
					<h4>{{ $blog->blog_name }}</h4>
					<p>{{ $blog->blog_description }}</p>
					<div class="flex align-center justify-between flex-wrap blog-date">
						<h3 class="primary-color">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</h3>
						<a href="#" class="blog-btn">Read More</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="blog-btn">
			<a href="/blogs" class="primary-btn">Read All</a>
		</div>
	</div>
</section>
@endsection