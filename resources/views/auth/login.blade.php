@extends('layouts.website')
@section('title', 'Login')
@section('content')

    @include('partials.bradcaump', ['title' => 'Login'])

    <!-- Login -->
    <div id="contact" class="contact-area pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @include('partials.flash')
                    <div class="card border-0">
                        <div class="card-body voopo__contact__form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="single-contact-form">
                                    <input type="email" name="email" placeholder="Enter Your Email"
                                        value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="single-contact-form">
                                    <input type="password" name="password" placeholder="Password" required>
                                    @error('password')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <input type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }} />
                                    <label for="remember" class="pl-2">Remember Me</label>
                                </div>

                                <div class="form-group row mt-4">
                                    <div class="col-12">
                                        <button class="voopo__btn" type="submit">Login</button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            {{ __('Create New Account?') }}
                                        </a>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->
@endsection
