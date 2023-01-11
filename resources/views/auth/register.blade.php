@extends('layouts.website')
@section('title', 'Register')
@section('content')

    @include('partials.bradcaump', ['title' => 'Sign Up'])

    <div id="contact" class="contact-area pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    @include('partials.flash')
                    @include('partials.errors')
                    <div class="card border-0">
                        <div class="card-body voopo__contact__form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="single-contact-form">
                                    <input type="text" name="name" placeholder="Enter Your Name"
                                        value="{{ old('name') }}" required autofocus>
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

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
                                    <input type="tel" name="phone" placeholder="Enter Phone Number"
                                        value="{{ old('phone') }}" required autofocus>
                                    @error('phone')
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

                                <div class="single-contact-form">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password "
                                        required>
                                </div>

                                <div class="form-group row mt-4">
                                    <div class="col-12">
                                        <button class="voopo__btn" type="submit">Sign Up</button>

                                        <a class="btn btn-link" href="{{ route('login') }}">
                                            {{ __('Already Have Account?') }}
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
@endsection
