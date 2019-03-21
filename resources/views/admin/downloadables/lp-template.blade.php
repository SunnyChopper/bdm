@extends('layouts.lp')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-8 col-sm-10 col-12">
				<h3 class="text-center">{{ $download->title }}</h3>
				<p class="text-center">{{ $download->description }}</p>
				@if($download->downloads > 25)
					<p class="text-center"><small>Downloads: {{ $download->downloads }}</small></p>
				@endif

				<div class="gray-box mt-32">
					<h4 class="text-center">Join the Community</h4>
					<p class="text-center">Fill the form, get a free account that gets you access to this download and so much more.</p>
					<hr />
					<form action="/downloads/register" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="download_id" value="{{ $download->id }}">
						<div class="form-group row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<label for="first_name">{{ __('First Name:') }}</label>
								<input id="first_name" type="text" class="form-control {{ session()->has('error') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
								@if (session()->has('error'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ session()->get('error') }}</strong>
									</span>
								@endif
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<label for="last_name">{{ __('Last Name:') }}</label>
								<input id="last_name" type="text" class="form-control {{ session()->has('error') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required>

								@if (session()->has('error'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ session()->get('error') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="username">{{ __('Username:') }}</label>
							<input id="username" type="text" class="form-control {{ session()->has('error') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

							@if (session()->has('error'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ session()->get('error') }}</strong>
								</span>
							@endif
						</div>

						<div class="form-group">
							<label for="email">{{ __('E-Mail:') }}</label>
                            <input id="email" type="email" class="form-control {{ session()->has('error') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if (session()->has('error'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ session()->get('error') }}</strong>
                                </span>
                            @endif
						</div>

						<div class="form-group">
							<label for="password">{{ __('Password:') }}</label>
							<input id="password" type="password" class="form-control {{ session()->has('error') ? ' is-invalid' : '' }}" name="password" required>

							@if (session()->has('error'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ session()->get('error') }}</strong>
								</span>
							@endif
						</div>

						<div class="form-group">
							<label for="password-confirm">{{ __('Confirm Password:') }}</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success centered">
								{{ __('Join for Free & Download') }}
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection