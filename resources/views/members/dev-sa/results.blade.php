@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12 col-12">
				<div class="black-box">
					<p class="text-center text-white">You should consider becoming a...</p>
					<h3 class="text-center text-white">Frontend Developer</h3>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12 col-12">
				<h5 class="text-center mt-32 mb-16">Here are some resources to help you get started.</h5>
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row" style="display: flex;">
							<div class="col-lg-4 col-md-4 col-sm-8 col-12" style="margin: auto;">
								<img src="https://hlfppt.org/wp-content/uploads/2017/04/placeholder.png" class="regular-image">
							</div>

							<div class="col-lg-8 col-md-8 col-sm-8 col-12" style="margin: auto;">
								<p class="mb-0 mt-16-mobile text-white" style="font-size: 18px;"><b>Resource #1</b></p>
								<p class="mb-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="" class="btn btn-sm btn-primary mb-16-mobile">Visit Resource</a>
							</div>
						</div>
					</li>

					<li class="list-group-item">
						<div class="row" style="display: flex;">
							<div class="col-lg-4 col-md-4 col-sm-8 col-12" style="margin: auto;">
								<img src="https://hlfppt.org/wp-content/uploads/2017/04/placeholder.png" class="regular-image">
							</div>

							<div class="col-lg-8 col-md-8 col-sm-8 col-12" style="margin: auto;">
								<p class="mb-0 mt-16-mobile text-white" style="font-size: 18px;"><b>Resource #1</b></p>
								<p class="mb-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="" class="btn btn-sm btn-primary mb-16-mobile">Visit Resource</a>
							</div>
						</div>
					</li>

					<li class="list-group-item">
						<div class="row" style="display: flex;">
							<div class="col-lg-4 col-md-4 col-sm-8 col-12" style="margin: auto;">
								<img src="https://hlfppt.org/wp-content/uploads/2017/04/placeholder.png" class="regular-image">
							</div>

							<div class="col-lg-8 col-md-8 col-sm-8 col-12" style="margin: auto;">
								<p class="mb-0 mt-16-mobile text-white" style="font-size: 18px;"><b>Resource #1</b></p>
								<p class="mb-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="" class="btn btn-sm btn-primary mb-16-mobile">Visit Resource</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection