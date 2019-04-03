@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-12">
				<p><a href="{{ url('/members/public-courses/view/' . $course->id) }}">Go back to dashboard</a></p>
				<div class="videoWrapper">
					<iframe width="560" height="349" src="http://www.youtube.com/embed/{{ $video->video_url }}?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
				</div>
				<h4 class="mt-32">{{ $video->title }}</h4>
				<hr />
				<p>{{ $video->description }}</p>

				<div class="gray-box">
					<p><strong>Question:</strong> {{ $video->question }}</p>
					<form id="create_comment_form" action="/members/comments/create" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="video_id" value="{{ $video->id }}">
						<div class="form-group">
							<textarea class="form-control" form="create_comment_form" rows="6" name="comment"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success">
						</div>
					</form>
				</div>

				@if(count($comments) == 0)
					<p class="text-center mt-32">No comments yet...be the first one.</p>
				@else
					<ul class="list-group">
						@foreach($comments as $comment)
							<li class="list-group-item">
								<p class="mb-0">{{ $comment->comment }}</p>
							</li>
						@endforeach
					</ul>
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