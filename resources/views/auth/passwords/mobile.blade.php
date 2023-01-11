@extends('layouts.website')
@section('title', 'Verify Mobile Number') @section('content')

@include('partials.bradcaump', ['title' => 'Verify Mobile Number'])

<!-- Login -->
<div id="contact" class="contact-area pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-10 offset-md-1">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {!! session('success') !!}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {!! session('error') !!}
                        </div>
                    @endif
                </div>

                <div class="card border-0">
                    <div class="card-body voopo__contact__form">
                        <form method="POST" action="{{ route('mobile.verify') }}">
                            @csrf
                            <div class="single-contact-form">
                                <input type="number" name="otp" placeholder="Enter OTP" value="{{ old('otp') }}"
                                    required autofocus>
                                @error('otp')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12">
                                    <button class="voopo__btn" type="submit">{{ __('Verify OTP') }}</button>
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
