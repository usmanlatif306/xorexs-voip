@extends('admin.auth.layout')
@section('title', 'Login')
@section('content')
    <form action="{{ route('login') }}" method="POST" class="md-float-material form-material">
        @csrf
        <div class="auth-box card">
            <div class="card-block">
                <div class="row m-b-20">
                    <div class="col-md-12">
                        <h3 class="text-center">Sign In</h3>
                    </div>
                </div>
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="form-group form-primary">
                    <input type="text" name="email" class="form-control @error('email') border-danger @enderror"
                        required autofocus value="{{ old('email') }}" />
                    <span class="form-bar"></span>
                    <label class="float-label">Email Address</label>
                    @error('email')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group form-primary">
                    <input type="password" name="password"
                        class="
                        form-control
                        @error('password')
                        border-danger
                        @enderror
                    "
                        required />
                    <span class="form-bar"></span>
                    <label class="float-label">Password</label>
                    @error('password')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="row m-t-25 text-left">
                    <div class="col-12">
                        <div class="checkbox-fade fade-in-primary d-">
                            <input type="checkbox" name="remmeber" id="remember" {{ old('remember') ? 'checked' : '' }} />
                            <label class="text-inverse pl-2" for="remember">
                                Remember me
                            </label>
                        </div>
                        <div class="forgot-phone text-right f-right">
                            <a href="{{ route('admin.forget') }}" class="text-right f-w-600">
                                Forgot Password?</a>
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <button type="submit"
                            class="
                            btn btn-primary btn-md btn-block
                            waves-effect waves-light
                            text-center
                            m-b-20
                        ">
                            Sign in
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
