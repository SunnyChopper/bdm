@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Invest in Yourself</h3>
				<hr />
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<a href="">
					<div class="background-card set-bg" data-setbg="https://cdn-images-1.medium.com/max/1600/0*QUqE4WGF8_cC9bIl.jpg">
						<div class="card-overlay">
							<div class="card-footer">
								<h5 class="mb-0">Introductory Course</h5>
								<p class="mb-0 white">Price: <b>FREE</b></p>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
@endsection