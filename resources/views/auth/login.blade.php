@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="sign-in-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('login') }}" class="logo logo-light">
                        <span class="logo-sm text-rotate">
                            <div class="row">
                                <div class="col pl-4 pr-0" style="top: 35px">
                                    <span class="span-text">
                                        <img src="{{ asset('images/logogosen2.png') }}" alt="" height="auto" width="20%">
                                    </span>
                                </div>
                            </div>
                        </span>
                    </a>
                </div>
                <div class="card-body mt-4">
                    <h5 class="sign-in-heading text-center m-b-20">{{ __('Sign in to your account') }}</h5>
                    <div class="form-group">
                        <label for="username" class="sr-only">{{ __('Username') }}</label>
                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror"
                            placeholder="Username" name="username" value="{{ old('username') }}" required
                            autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">{{ __('Password') }}</label>
                        <input id="password" type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                            name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="checkbox m-b-10 m-t-20">
                        <div class="custom-control custom-checkbox checkbox-primary form-check">
                            <input type="checkbox" class="custom-control-input" id="remember"
                                {{ old('remember') ? 'checked' : '' }} checked="">
                            <label class="custom-control-label" for="remember"> Remember me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="float-right">Forgot Password?</a>
                        @endif
                    </div>
                    <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Sign
                        In</button>
                    <p class="text-muted m-t-25 m-b-0 p-0">Don't have an account yet?<a href="{{ route('register') }}">
                            Create an
                            account</a></p>
                </div>
            </div>
        </form>
    </div>
@endsection
