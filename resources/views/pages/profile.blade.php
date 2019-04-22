@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 col-12">
				<img src="{{ $user->profile_image_url }}" class="regular-image">
				<div class="hidden-sm hidden-xs">
					<h3 class="mt-16 mb-0">{{ $user->first_name }} {{ $user->last_name }}</h3>
					<p>Joined on {{ $user->created_at->format('M jS, Y') }}</p>
					@if(Auth::id() == $user->id)
						<p>Points: {{ \App\Custom\UsersHelper::getPoints(Auth::id()) }}</p>
						<p class="mb-0"><small><a href="/profile/edit/{{ $user->id }}"><i class="fas fa-pencil-alt" style="margin-right: 0.5em;"></i> Edit Profile</a></small></p>
					@endif

					<hr />

					@if($user->facebook_link != "")
						<p class="mb-0"><small><a href="{{ $user->facebook_link }}"><i class="fab fa-facebook" style="margin-right: 0.5em;"></i> Facebook</a></small></p>
					@endif

					@if($user->twitter_link != "")
						<p class="mb-0"><small><a href="{{ $user->twitter_link }}"><i class="fab fa-twitter" style="margin-right: 0.5em;"></i> Twitter</a></small></p>
					@endif

					@if($user->instagram_link != "")
						<p class="mb-0"><small><a href="{{ $user->instagram_link }}"><i class="fab fa-instagram" style="margin-right: 0.5em;"></i> Instagram</a></small></p>
					@endif

					@if($user->youtube_link != "")
						<p class="mb-0"><small><a href="{{ $user->youtube_link }}"><i class="fab fa-youtube" style="margin-right: 0.5em;"></i> YouTube</a></small></p>
					@endif

					@if($user->github_link != "")
						<p class="mb-0"><small><a href="{{ $user->github_link }}"><i class="fab fa-github" style="margin-right: 0.5em;"></i> Github</a></small></p>
					@endif

					@if($user->dribbble_link != "")
						<p class="mb-0"><small><a href="{{ $user->dribbble_link }}"><i class="fab fa-dribbble" style="margin-right: 0.5em;"></i> Dribbble</a></small></p>
					@endif

					@if($user->website_link != "")
						<p class="mb-0"><small><a href="{{ $user->website_link }}"><i class="fas fa-link" style="margin-right: 0.5em;"></i> Website</a></small></p>
					@endif
				</div>
			</div>

			<div class="col-lg-9 col-md-8 col-sm-12 col-12 mt-32-mobile">
				<div class="gray-box">
					
				</div>
			</div>
		</div>
	</div>
@endsection