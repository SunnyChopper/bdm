@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-12">
				@if(count($videos) > 0)
					<ul class="list-group">
						@foreach($videos as $video)
						<li class="list-group-item">
							<h4>{{ $video->title }}</h4>
							<hr />
							<p>{{ $video->description }}</p>
							<a href="/members/public-courses/{{ $course->id }}/videos/watch/{{ $video->id }}">Watch video...</a>
						</li>
						@endforeach
					</ul>
				@else
					<h3 class="text-center">No videos available...</h3>
				@endif
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-12">
				<div class="gray-box">
					<h4 class="text-center">Latest Forums</h4>
				</div>
			</div>
		</div>
	</div>
@endsection