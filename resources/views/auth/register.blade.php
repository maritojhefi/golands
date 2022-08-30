@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="sign-in-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('login') }}" class="logo logo-light">
                        <span class="logo-sm text-rotate">
                            <div class="row">
                                <div class="col pl-4 pr-0" style="top: 35px">
                                    <span class="span-text">
                                        <img src="{{ asset('images/logogosen2.png') }}" alt="" height="auto" width="15%">
                                    </span>
                                </div>
                            </div>
                        </span>
                    </a>
                </div>
                <div class="card-body mt-4">
                    <h5 class="sign-in-heading text-center m-b-20">Create an account</h5>
                    <div class="form-group">
                        <label for="name" class="sr-only">Your Name</label>
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Your Name" name="name" value="{{ old('name') }}" required autocomplete="name"
                            autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="username" class="sr-only">Your Username</label>
                        <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                            placeholder="Your Username" name="username" value="{{ old('username') }}" required autocomplete="username"
                            autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="email" class="sr-only">Email Address</label>
                        <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="password" class="sr-only">Confirm Password</label>
                        <input type="password" id="password-confirm" class="form-control"
                            placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    </div>



                    <div class="checkbox m-b-10 m-t-15">
                        <div class="custom-control custom-checkbox checkbox-primary form-check">
                            <input type="checkbox" class="custom-control-input" id="stateCheck1" checked="">
                            <label class="custom-control-label" for="stateCheck1"> I accept the <a
                                    href="javascript:void(0)">terms and conditions</a></label>
                        </div>
                    </div>


                    <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Create My
                        Account</button>


                    <p class="text-muted m-t-25 m-b-0 p-0">Already have an account?<a href="{{route('home')}}"> Sign In</a>
                    </p>
                </div>

            </div>
        </form>









        {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    </div>
@endsection
