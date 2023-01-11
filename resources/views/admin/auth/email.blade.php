@extends('admin.auth.layout')
@section('title', 'Forget Password')
@section('content')
    <form method="POST" action="{{ route('password.email') }}" class="md-float-material form-material">
        @csrf
        <div class="auth-box card">
            <div class="card-block">
                <div class="row m-b-20">
                    <div class="col-md-12">
                        <h3 class="text-center">Forget Password</h3>
                    </div>
                </div>
                @include('partials.flash')
                <div class="form-group form-primary">
                    <input type="text" name="email" class="form-control @error('email') border-danger @enderror"
                        required autofocus />
                    <span class="form-bar"></span>
                    <label class="float-label">Email Address</label>
                    @error('email')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong></span>
                    @enderror
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
                            Send Reset Password Link
                        </button>
                    </div>
                </div>
                <div class="m-t-5 text-center">Already have an account?
                    <a href="{{ route('admin.login') }}" class="f-w-600"> Login</a>
                </div>
            </div>
        </div>
    </form>
@endsection
