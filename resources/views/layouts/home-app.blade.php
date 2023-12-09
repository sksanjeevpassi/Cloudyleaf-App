<!DOCTYPE html>


<html>
	<head>
		<title>Web Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="../assets/css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
		</head>
<body>
	<header>
		<div class="container">
			<div class="flex align-center justify-between header-inner">
				<div class="logo">
					<a href="/"><img src="../assets/images/logo.png"></a>
				</div>
				<div class="menu-bar">
					<ul class="flex m-0 p-0 justify-end">
						<li><a href="/">Home</a></li>
						<li><a href="/about">About Us</a></li>
						<li><a href="/services">Services</a></li>
						<li><a href="/blogs">Blogs</a></li>
						<li><a href="/contact">Contact Us</a></li>
					</ul>
					<div class="navbar">
						<i class="fa fa-bars" aria-hidden="true"></i>

					</div>
				</div>
				
			</div>
		</div>
	</header>
	@yield('content')
	
	<footer>
		<div class="footer-outter">
			<div class="container">
				<div class="flex justify-between flex-wrap">
					<div class="footer-grid footer-logo-grid">
						<img src="../assets/images/footer-logo.png">
						<div class="social-links">
							<ul>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="footer-grid">
						<h3>Explore</h3>	
						<ul>
						    <li><a href="/">Home</a></li>
							<li><a href="/about">About Us</a></li>
							<li><a href="/services">Services</a></li>
							<li><a href="/blogs">Blogs</a></li>
							<li><a href="/contact">Contact us</a></li>
						</ul>
					</div>	
					<div class="footer-grid">
						<h3>Quick Links</h3>	
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/about">About Us</a></li>
							<li><a href="/services">Services</a></li>
							<li><a href="/blogs">Blogs</a></li>
							<li><a href="/contact">Contact us</a></li>
						</ul>
					</div>
					<div class="footer-grid footer-contact">
						<h3>Contact Info</h3>	
						<ul>
							<li><img src="../assets/images/location.png">US Office - 19353 Pinnacle Court, Saratoga, CA 95070-6114</li>
							<li><img src="../assets/images/phone.png">+91 0183-2820040</li>
							<li><img src="../assets/images/mail.png">support@example.com</li>	
						</ul>
					</div>	
				</div>
			</div>
		</div>
		<div class="copy-write">
			<p>© 2023 Lorem ipsum | All Rights Reserved</p>
		</div>
	</footer>
</body>
<script>
    $(document).ready(function() {
      // Add class on click
      $('.menu-bar').on('click', function() {
        $(this).toggleClass('toggle-nav');
      });
    });
  </script>
</html>
