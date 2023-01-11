@extends('layouts.website')
@section('title', 'Reset Password')
@section('content')
    @include('partials.bradcaump', ['title' => 'Reset Password'])

    <!-- Forget Password-->
    <div id="contact" class="contact-area pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="col-md-8 offset-md-2">
                        @include('partials.flash')
                    </div>
                    <div class="card border-0">
                        <div class="card-body voopo__contact__form">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}" />

                                <div class="single-contact-form">
                                    <input type="email" name="email" placeholder="E-Mail Address"
                                        value="{{ $email }}" readonly>
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="single-contact-form">
                                    <input type="password" name="password" placeholder="Password" required autofocus>
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
                                        <button class="voopo__btn" type="submit">{{ __('Reset Password') }}</button>
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
