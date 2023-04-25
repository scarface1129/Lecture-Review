@extends('layouts.layout')
@section('content')
    <main class="login-bg">

        <div class="register-form-area">
            <div class="register-form text-center">

                <div class="register-heading">
                    <span>Create Course</span>
                    <p></p>
                </div>
                <form method="POST" action="{{ route('lecture_store') }}">
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
                            <label for="course_code" class="col-md-4 col-form-label text-md-end">{{ __('Course Code') }}</label>
                            <input id="course_code" type="course_code" class="form-control @error('course_code') is-invalid @enderror" name="course_code" value="{{ old('course_code') }}" required autocomplete="course_code">
                            @error('course_code')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        
                        <div class="single-input-fields">
                            <label for="course" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                            <select id="department" class="form-control  @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department">
                                <option>Departments</option>
                                @foreach($department as $department)
                                <option value="{{ $department->id }}">{{$department->name}}</option>
                                @endforeach
                                
                            </select>
                            {{-- <input > --}}
                            @error('department')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        
                    </div>
                        <button type="submit" class="btn">
                            {{ __('Create') }}
                        </button>
                </form>

                
            </div>
        </div>

    </main>
@endsection
