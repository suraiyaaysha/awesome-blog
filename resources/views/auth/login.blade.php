@extends('layouts.app')

@section('content')
    <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                    <h3 class="card-title text-left mb-3">{{ __('Login') }}</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('Email Address') }}</label>
                            <input type="email" class="form-control p_input @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>{{ __('Password') }}</label>
                            <input type="password" class="form-control p_input @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group d-flex align-items-center justify-content-between">
                            <div class="form-check">
                                <label class="form-check-label" for="remember">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="forgot-pass" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif

                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __('Login') }}</button>
                        </div>

                        {{-- <div class="d-flex">
                            <button class="btn btn-facebook me-2 col">
                            <i class="mdi mdi-facebook"></i> Facebook </button>
                            <button class="btn btn-google col">
                            <i class="mdi mdi-google-plus"></i> Google plus </button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>



    {{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- </div> --}}
@endsection
