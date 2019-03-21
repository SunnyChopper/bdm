@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <div class="container mt-32 mb-32">
        <div class="row justify-content-center">
            <div class="col-lg-7 order-lg-1 col-md-7 order-md-1 col-sm-12 order-sm-2 col-12 order-2">
                <h3 class="mb-32 mt-32-mobile mobile-text-center">What You Get By Joining</h3>
                <hr class="d-md-none">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="categorie-item">
                            <div class="ci-thumb set-bg" data-setbg="https://lagunita.stanford.edu/c4x/StanfordOnline/O.P.E.N./asset/course_design_tile.jpg"></div>
                            <div class="ci-text">
                                <h5>Free Intro Course</h5>
                                <p>Not sure if you want to start a tech business? Not sure how to start a tech business? This introductory course will give you an overview of the whole process.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="categorie-item">
                            <div class="ci-thumb set-bg" data-setbg="https://campustechnology.com/~/media/EDU/CampusTechnology/Images/2017/07/20170705onlinecommunity.jpg"></div>
                            <div class="ci-text">
                                <h5>Community</h5>
                                <p>Being around like-minded people shouldn't cost money. Not only do you get access to our on-site community, get access to our private Facebook group.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="categorie-item">
                            <div class="ci-thumb set-bg" data-setbg="https://www.altushost.com/wp-content/uploads/2016/06/image02-5.jpg"></div>
                            <div class="ci-text">
                                <h5>Premium Content</h5>
                                <p>We like to treat our members to premuim content that they cannot get anywhere. We dive deeper into the processes and systems and give even more tips.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="categorie-item">
                            <div class="ci-thumb set-bg" data-setbg="https://cdn-30-skcir4i63ajp.netdna-ssl.com/wp-content/uploads/2018/07/%E2%80%98Internet-has-democratised-us-but-questions-remain%E2%80%99.jpg"></div>
                            <div class="ci-text">
                                <h5>Free Downloadables</h5>
                                <p>As a member, you get unlimited free access to resources that will help you build your tech business. Downloadables like cheat sheets, how-to guides, lists, etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-lg-2 col-md-5 order-md-2 col-sm-12 order-sm-1 col-12 order-1 mt-64">
                <div class="gray-box mt-0">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="first_name">{{ __('First Name:') }}</label>
                                    <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="last_name">{{ __('Last Name:') }}</label>
                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="username">{{ __('Username:') }}</label>
                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="email">{{ __('E-Mail:') }}</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="password">{{ __('Password:') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="password-confirm">{{ __('Confirm Password:') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                                    <button type="submit" class="btn btn-success center-button">
                                        {{ __('Join for Free') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
