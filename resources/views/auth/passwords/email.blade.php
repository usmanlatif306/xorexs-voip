@extends('layouts.website')
@section('title', 'Forget Password')
@section('content')

    @include('partials.bradcaump', ['title' => 'Forget Password'])

    <!-- Forget Password-->
    <div id="contact" class="contact-area pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0">
                        <div class="card-body voopo__contact__form">
                            @include('partials.flash')
                            <form method="POST" action="{{ route('password.email') }}">
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

                                <div class="form-group row mt-4">
                                    <div class="col-12">
                                        <button class="voopo__btn"
                                            type="submit">{{ __('Send Password Reset Link') }}</button>
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
