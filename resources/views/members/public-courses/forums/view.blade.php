@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-12">
				<p><a href="{{ url('/members/public-courses/view/' . $course->id) }}">Go back to dashboard</a></p>
				<h3>{{ $forum->title }}</h3>
				<hr />
				<p>{{ $forum->description }}</p>
				<div class="gray-box">
					<form action="/members/forums/comments/create" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="forum_id" value="{{ $forum->id }}">
						<div class="form-group">
							<label>Create comment:</label>
							<textarea class="form-control" rows="4"></textarea>
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-primary">
						</div>
					</form>
				</div>

				@if(count($comments) > 0)
					@foreach($comments as $comment)
						<p><strong>{{ $comment->user_id }}</strong>: {{ $comment->comment }}</p>
						<hr />
					@endforeach
				@else
					<p class="text-center mt-32"><strong>No comments.</strong></p>
				@endif
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-12">
				<div class="gray-box">
					<h4 class="text-center">Latest Forums</h4>
					<hr />
					@if(count($forums) == 0)
						<p class="text-center">No forums created for this course...</p>
						<a href="/members/public-courses/{{ $course->id }}/forums/new" class="btn btn-success centered">Create New Forum</a>
					@else
						@foreach($forums as $forum)
							<h5>{{ $forum->title }}</h5>
							<p>{{ substr($forum->description, 0, 128) }}...<a href="/members/public-courses/{{ $course->id }}/forums/{{ $forum->id }}">Read more</a></p>
							<hr />
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection