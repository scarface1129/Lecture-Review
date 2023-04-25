
@extends('layouts.layout')
@section('content')
    <main class="register-bg" style="margin-bottom: 800px">

        <div class="register-form-area">
            <div class="register-form text-center">

                <div class="register-heading">
                    <span>Sign Up</span>
                    <p>Create your account to get full access</p>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-box">
                        <div class="single-input-fields">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="single-input-fields">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="single-input-fields">
                            <label for="reg_number" class="col-md-4 col-form-label text-md-end">{{ __('Registration Number') }}</label>
                            <input id="reg_number" type="`text" class="form-control @error('email') is-invalid @enderror" name="reg_number" value="{{ old('reg_number') }}" required autocomplete="reg_number">
                            @error('reg_number')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="single-input-fields">
                            <label for="dept" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                            <select id="dept" class="form-control  @error('dept') is-invalid @enderror" name="dept" value="{{ old('dept') }}" required autocomplete="dept">
                                <option>Departments</option>
                                @foreach($department as $department)
                                <option value="{{ $department->id }}">{{$department->name}}</option>
                                @endforeach
                                
                            </select>
                            @error('dept')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="single-input-fields">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" style="color:red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="single-input-fields">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" style="color:red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="register-footer">
                        <p> Already have an account? <a href="{{ route('login') }}"> Login</a> here</p>
                        <button type="submit" class="btn">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>

                
            </div>
        </div>

    </main>

    @endsection