@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<!-- Page -->
	<section class="contact-page spad pb-0 mb-64">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 order-2">
					<div style="background-color: hsl(0, 0%, 95%); padding: 32px; -webkit-box-shadow: 0px 4px 16px -4px rgba(0,0,0,0.5); box-shadow: 0px 4px 16px -4px rgba(0,0,0,0.5); border-radius: 8px;">
						<div class="text-left">
							<h2>Get in Touch</h2>
							<p>Whether you have a question about tech entrepreneurship or need help with your product, feel free to reach out to us. We'll get back to you as soon as possible.</p>
						</div>
						<form action="/contact/submit" method="POST" id="contact_form">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Name:</label>
								<input type="text" name="name" class="form-control">
							</div>

							<div class="form-group">
								<label>Email:</label>
								<input type="email" name="email" class="form-control">
							</div>

							<div class="form-group">
								<label>Category:</label>
								<select class="form-control" name="category">
									<option value="General Inquiry">General Inquiry</option>
									<option value="Billing">Billing</option>
									<option value="Abuse Report">Abuse Report</option>
								</select>
							</div>

							<div class="form-group">
								<label>Message:</label>
								<textarea form="contact_form" name="message" class="form-control" rows="5"></textarea>
							</div>

							<div class="form-group">
								<input type="submit" class="site-btn" value="Send Message">
							</div>

							@if(session()->has('success'))
								<div class="form-group">
									<p class="green">{{ session()->get('success') }}</p>
								</div>
							@endif
						</form>
					</div>
				</div>
				{{-- <div class="col-lg-4 order-1">
					<div class="contact-info-area">
						<div class="section-title text-left p-0">
							<h3>Something Broken?</h3>
							<p>Don't contact us! Instead to make things easier for you and us, submit a support ticket which describes exactly what's broken and our development team will get on it.</p>
							<a href="/support/ticket/new" class="site-btn small mt-2">Create Support Ticket</a>
						</div>
						<div class="social-links">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
	<!-- Page end -->

	{{-- @include('layouts.bottom-cta') --}}
@endsection