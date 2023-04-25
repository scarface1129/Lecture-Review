@extends('layouts.layout')
@section('content')
    <main class="login-bg">

        <div class="login-form-area">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form">

                    <div class="login-heading">
                        <span>Login</span>
                        <p>Enter Login details to get access</p>
                    </div>
                    

                    <div class="input-box">
                        <div class="single-input-fields">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="single-input-fields">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="single-input-fields login-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            @if (Route::has('password.request'))
                            <a class="f-right" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                    </div>

                    <div class="login-footer">
                        <p>Don’t have an account? <a href="{{ route('register') }}">Sign Up</a> here</p>
                        <button class="btn">Login</button>
                    </div>
                </div>
            </form>
        </div>

    </main>
@endsection