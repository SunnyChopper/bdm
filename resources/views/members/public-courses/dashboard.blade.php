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
					{{ $videos->links() }}
				@else
					<h3 class="text-center">No videos available...</h3>
				@endif
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-12">
				<div class="gray-box">
					<h4 class="text-center">Latest Forums</h4>
					<hr />
					@if(count($forums) == 0)
						<p class="text-center">No forums created for this course...</p>
						<a href="/members/public-courses/{{ $course->id }}/new/forums" class="btn btn-success centered">Create New Forum</a>
					@else
						@foreach($forums as $forum)
							<h5>{{ $forum->title }}</h5>
							<p>{{ substr($forum->description, 0, 128) }}...<a href="/members/public-courses/{{ $course->id }}/forums/{{ $forum->id }}">Read more</a></p>
							<hr />
						@endforeach
						<a href="/members/public-courses/{{ $course->id }}/forums" class="btn btn-success centered">View All Forums</a>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection