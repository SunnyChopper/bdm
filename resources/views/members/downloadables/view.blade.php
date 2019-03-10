@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-7 col-sm-9 col-12">
				<h3 class="text-center">Downloadables</h3>
				<p class="text-center">Get access to valuable resources that you can use to further develop yourself.</p> 

				@if(count($downloads) > 0)
					<ul class="list-group">
						@foreach($downloads as $download)
							<li class="list-group-item">
								@if($download->file_type == 1)
									<span class="badge badge-pill badge-primary">PDF</span>
								@endif
								<h4>{{ $download->title }}</h4>
								<p>{{ $download->description }}</p>
								<a href="{{ $download->file_url }}" class="site-btn-small">Download</a>
								<hr />
								<p class="mb-0"><small>Created on: {{ $download->created_at->format('M jS, Y') }} | Downloads: {{ $download->downloads }}</small>
							</li>
						@endforeach
					</ul>
				@else
					<div class="gray-box">
						<p class="text-center mb-0">No downloads available.</p>
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection