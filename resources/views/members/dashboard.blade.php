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
				@if(count($posts) > 0)
					@foreach($posts as $post)
					<div class="background-card set-bg mt-16" data-setbg="{{ $post->featured_image_url }}">
						<div class="card-overlay">
							<div class="card-footer">
								<h5>{{ $post->title }}</h5>
								<a href="/posts/{{ $post->id }}/{{ $post->slug }}">Read More</a>
							</div>
						</div>
					</div>
					@endforeach
				@else
					<div class="gray-box">
						<h5 class="mb-0 text-center">No posts available.</h5>
					</div>
				@endif
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
							<a class="">Under Construction</a>
						</div>
					</div>
				</div>

				<div class="gray-box mt-32">
					<h4 class="text-center">Available Downloadables</h4>
					<hr />
					@if(count($downloads) > 0)
						@foreach($downloads as $download)
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-16-mobile">
									@if($download->file_type == 1)
										<h6 class="mb-2">{{ $download->title }} <span class="badge badge-pill badge-primary ml-2">PDF</span></h6>
									@else
										<h6 class="mb-2">{{ $download->title }}</h6>
									@endif
									
									<p class="mb-4">{{ $download->description }}</p>
									
									<a href="{{ $download->file_url }}" class="site-btn-small">Download</a>
								</div>
							</div>
						@endforeach
					@else
					<p class="text-center mb-0">No downloads available for you.</p>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection