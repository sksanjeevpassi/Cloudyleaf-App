@extends('layouts/home-app')

@section('content')
<section class="contact-section">
		<div class="container">
			<div class="heading-div">
				<h2 class="heading center">CONTACT US</h2>
				<p>Mauris consectetur leo sed lacus gravida, nec pharetra justo laoreet</p>
			</div>
			<div class="contact-inner">
				<div class="contact-img">
					<img src="../assets/images/contact-img.png">
				</div>
				<form action="/sendcontact" method="post">
				@csrf
				<div class="contact-form">
					<div class="contact-form-inner">
						<div class="contact-feild">
							<label>Name<span>*</span></label>
							<input name="name" type="text" placeholder="Your Full Name" required>
						</div>
						<div class="contact-feild">
							<label>Email<span>*</span></label>
							<input type="text" name="email placeholder="Your Email" required >
						</div>
						<div class="contact-feild">
							<label>Phone<span>*</span></label>
							<input type="text" name="phone" placeholder="Your Phone Number" required>
						</div>
						<div class="contact-feild">
							<label>Message<span>*</span></label>
							<textarea name="message" placeholder="Write Your Message" required></textarea>
						</div>
						<div class="contact-btn">
							<Button type="submit" class="primary-btn">Send</Button>
						</div>
					</div>
				</div>
			   </form>
			</div>
		</div>
	</section>
    @endsection