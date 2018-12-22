@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-12">
				<h2 class="mobile-text-center">Welcome {{ $user->first_name }}</h2>
				<hr />
			</div>
		</div>

		<div class="row mt-16">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<h4>Latest Blog Posts</h4>
				<div class="background-card set-bg mt-16" data-setbg="https://zdnet2.cbsistatic.com/hub/i/2018/03/13/caa74f32-b8d3-4517-965f-659384beea88/a42105d0dcf45a120aaff0c06c64490f/ai-image.png">
					<div class="card-overlay">
						<div class="card-footer">
							<h5>How AI Can Help Supercharge Your Business</h5>
							<a href="">Read More</a>
						</div>
					</div>
				</div>

				<div class="background-card set-bg mt-16" data-setbg="https://cdn-images-1.medium.com/max/2000/1*SSutxOFoBUaUmgeNWAPeBA.jpeg">
					<div class="card-overlay">
						<div class="card-footer">
							<h5>5 Best Python Web Frameworks</h5>
							<a href="">Read More</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="gray-box mt-32-mobile">
					<h4 class="text-center">My Courses</h4>
					<hr />
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-6 col-12" style="margin: auto;">
							<img src="https://courses.telegraph.co.uk/images/26/625x351/coding625x351.jpg" class="regular-image">
						</div>

						<div class="col-lg-7 col-md-7 col-sm-6 col-12 mt-16-mobile">
							<h6>Introductory Course</h6>
							<p class="mb-2">Learn the overall process of going from learning to code to having a technology business.</p>
							<a href="" class="site-btn-small">Enter Course</a>
						</div>
					</div>
				</div>

				<div class="gray-box mt-32">
					<h4 class="text-center">My Tools</h4>
					<hr />
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-6 col-12" style="margin: auto;">
							<img src="https://smallbiztrends.com/wp-content/uploads/2018/03/shutterstock_705804559-850x476.jpg" class="regular-image">
						</div>

						<div class="col-lg-7 col-md-7 col-sm-6 col-12 mt-16-mobile">
							<h6>Business Plan Generator</h6>
							<p class="mb-2">This tool will ask you questions and guide you to generate your business plan.</p>
							<a href="" class="site-btn-small">Use Tool</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection