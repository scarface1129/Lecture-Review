@extends('layouts.layout')
@section('content')
    <main class="login-bg" style="margin-bottom: 400px">

        <div class="register-form-area">
            <div class="register-form text-center">

                <div class="register-heading">
                    <span>Create Lecturer Profile</span>
                    <p></p>
                </div>
                <form method="POST" action="{{ route('lecturer_create') }}" enctype="multipart/form-data">
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
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Profile Picture') }}</label>
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">
                            @error('image')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="single-input-fields">
                            <label for="employee_number" class="col-md-4 col-form-label text-md-end">{{ __('Employee Number') }}</label>
                            <input id="employee_number" type="`text" class="form-control @error('employee_number') is-invalid @enderror" name="employee_number" value="{{ old('employee_number') }}" required autocomplete="employee_number">
                            @error('employee_number')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="single-input-fields">
                            <label for="course" class="col-md-4 col-form-label text-md-end">{{ __('Course') }}</label>
                            <select id="course" class="form-control  @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}" required autocomplete="course">
                                <option>Courses</option>
                                @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{$course->name}}, {{$course->course_code}}</option>
                                @endforeach
                                
                            </select>
                            {{-- <input > --}}
                            @error('course')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="single-input-fields">
                            <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                            <input id="department" type="text" class="form-control" placeholder="Automatically filled based on the course selected " disabled name="department" required autocomplete="department">
                            @error('department')
                            <span class="invalid-feedback" style="color:red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="register-footer">
                        <p></p>
                        <button type="submit" class="btn">
                            {{ __('Create') }}
                        </button>
                    </div>
                </form>

                
            </div>
        </div>

    </main>
@endsection
