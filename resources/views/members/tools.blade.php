@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<h3>Work Smarter.</h3>
				<p>Not only is it about working hard, you must learn how to work smart. The tools presented here are all solutions to help you work smarter than your competition.</p>
				<hr />
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<img src="https://marketingweek.imgix.net/content/uploads/2017/05/12103909/Coding-body-image-.jpg" class="regular-image">
				<p class="mt-16 text-center"><big><b>Developer Self-Awareness Tool</b></big></p>
				<hr />
				<p class="text-center">It's important to play on your strengths. No one has ever created something great by playing on their weaknesses. This tool can help you figure out what type of coder you are so you can play on your strengths and maximize your chances of becoming a tech entrepreneur. With each result comes links to extremely helpful resources.</p>
				<a href="/members/dev-sa/start" class="btn btn-primary center-button">Access Tool</a>
			</div>
		</div>
	</div>
@endsection