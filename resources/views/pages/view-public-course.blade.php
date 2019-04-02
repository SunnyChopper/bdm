@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row justify-content-center">
			@if($course->image_url != "" || $course->video_url != "")
				@if($course->video_url != "")
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="videoWrapper">
						    <iframe width="560" height="349" src="http://www.youtube.com/embed/{{ $course->video_url }}?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				@else
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<img src="{{ $course->image_url }}" class="regular-image">
					</div>
				@endif

				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<h3>{{ $course->title }}</h3>
					<hr />
					<p>{{ $course->description }}</p>

					@if($course->enrolled > 100)
					<p><strong>Enrolled:</strong> {{ $course->enrolled }}</p>
					@endif

					@if(Auth::guest())
					<a href="/members/login" class="btn btn-primary centered">Login to Register</a>
					@else
					<a href="/members/public-courses/enroll/{{ $course->id }}" class="btn btn-success centered">Enroll in Course</a>
					@endif
				</div>
			@else
				<div class="col-lg-7 col-md-8 col-sm-10 col-12">
					<h3>{{ $course->title }}</h3>
					<hr />
					<p>{{ $course->description }}</p>

					@if($course->enrolled > 100)
					<p><strong>Enrolled:</strong> {{ $course->enrolled }}</p>
					@endif

					@if(Auth::guest())
					<a href="/members/login" class="btn btn-primary centered">Login to Register</a>
					@else
					<a href="/members/public-courses/enroll/{{ $course->id }}" class="btn btn-success centered">Enroll in Course</a>
					@endif
				</div>
			@endif
		</div>
	</div>
@endsection