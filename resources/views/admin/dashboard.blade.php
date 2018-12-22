@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="gray-box">
					<h5 class="text-center">Performance Summary</h5>
					<div class="row mt-32">
						<div class="col-4">
							<h5 class="text-center">8</h5>
							<p class="mb-0 text-center"><small>New Users</small></p>
						</div>

						<div class="col-4">
							<h5 class="text-center">16</h5>
							<p class="mb-0 text-center"><small>Return Users</small></p>
						</div>

						<div class="col-4">
							<h5 class="text-center">4</h5>
							<p class="mb-0 text-center"><small>New Customers</small></p>
						</div>
					</div>

					<div class="row mt-32">
						<div class="col-4">
							<h5 class="text-center">$174.76</h5>
							<p class="mb-0 text-center"><small>Today's Total</small></p>
						</div>

						<div class="col-4">
							<h5 class="text-center">$1,834.43</h5>
							<p class="mb-0 text-center"><small>Week's Total</small></p>
						</div>

						<div class="col-4">
							<h5 class="text-center">27</h5>
							<p class="mb-0 text-center"><small>Weekly Customers</small></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-32-mobile">
				<h5 class="text-center mb-16">Quick Actions</h5>
				<ul class="list-group">
					<a href="" class="mb-8">
						<li class="list-group-item">
							<h6 class="mb-0" style="display: inline-block;">Create New Blog Post</h6>
							<img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-right-01-512.png" style="width: 20px; margin: auto; margin-top: 2px; height: auto; display: inline-block; float: right;">
						</li>
					</a>

					<a href="" class="mb-8">
						<li class="list-group-item">
							<h6 class="mb-0" style="display: inline-block;">Upload New Downloadable</h6>
							<img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-right-01-512.png" style="width: 20px; margin: auto; margin-top: 2px; height: auto; display: inline-block; float: right;">
						</li>
					</a>

					<a href="" class="mb-8">
						<li class="list-group-item">
							<h6 class="mb-0" style="display: inline-block;">Send Push Notification</h6>
							<img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-right-01-512.png" style="width: 20px; margin: auto; margin-top: 2px; height: auto; display: inline-block; float: right;">
						</li>
					</a>

					<a href="" class="mb-8">
						<li class="list-group-item">
							<h6 class="mb-0" style="display: inline-block;">Update Top Bar</h6>
							<img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-right-01-512.png" style="width: 20px; margin: auto; margin-top: 2px; height: auto; display: inline-block; float: right;">
						</li>
					</a>
				</ul>
			</div>
		</div>
	</div>
@endsection