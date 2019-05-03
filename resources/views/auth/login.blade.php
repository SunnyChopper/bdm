@extends('layouts.app')

@section('content')
@include('layouts.banner')
<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="gray-box">
                 <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="username">{{ __('Username') }}</label>
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label class="control control-checkbox">
                                    Remember Me
                                    <input class="form-check-input" type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                    <div class="control_indicator"></div>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="btn-link" style="display: block; margin-top: 12px; margin-bottom: 16px;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 col-12">
                                <button type="submit" class="site-btn-small">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        @if(session()->has('error'))
                        <div class="form-group mt-32 mb-0">
                            <p class="red mb-0">{{ session()->get('error') }}</p>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
