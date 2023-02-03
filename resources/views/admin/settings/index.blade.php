@extends('layouts.admin')
@section('title', 'Settings')
@include('partials.admin-breadcrumb', [
    'title' => 'Settings',
    'links' => [['title' => 'Settings'], ['title' => ucfirst($type)]],
])
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('partials.flash')
            @if ($type === 'general')
                <!---- General Settings  --->
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'General Setting',
                    ])
                    <div class="card-body">
                        <form action="{{ route('admin.settings.update') }}" method="post" class="border-bottom mb-3">
                            @csrf
                            <div class="row">
                                @foreach ($data as $field => $type)
                                    <div class="col-12 form-group">
                                        <label>{{ get_title($field) }}</label>
                                        @if ($field === 'app_environment' || $field === 'app_debug' || $field === 'show_app_name_in_title')
                                            <select name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror">
                                                @if ($field === 'app_environment')
                                                    <option @selected(config('app.env') === 'local') value="local">Local</option>
                                                    <option @selected(config('app.env') === 'production') value="production">Production
                                                    </option>
                                                @elseif ($field === 'app_debug')
                                                    <option @selected(config('app.debug') === 'true') value="true">True</option>
                                                    <option @selected(config('app.debug') === 'false') value="false">False</option>
                                                @elseif ($field === 'show_app_name_in_title')
                                                    <option @selected(setting($field) === 'yes') value="yes">Yes</option>
                                                    <option @selected(setting($field) === 'no') value="no">No</option>
                                                @endif

                                            </select>
                                        @else
                                            <input type="text" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" required />
                                        @endif
                                        @if ($field === 'currency_code')
                                            <span class="fs-12">Three-letter <a
                                                    href="https://www.iso.org/iso-4217-currency-codes.html"
                                                    class="text-c-blue">ISO currency code</a>, in lowercase. Must
                                                be
                                                a <a href="https://stripe.com/docs/currencies" class="text-c-blue">supported
                                                    currency</a>.</span>
                                        @endif
                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @elseif ($type === 'payment')
                <!---- Payment Settings  --->
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Payment Setting',
                    ])
                    <div class="card-body">
                        <form action="{{ route('admin.settings.env') }}" method="post" class="border-bottom mb-3">
                            @csrf
                            <div class="row">
                                @foreach ($data as $field => $value)
                                    <div class="col-12 form-group">
                                        <label>{{ ucwords(strtolower(str_replace('_', ' ', $field))) }}</label>

                                        @if ($field === 'PAYPAL_MODE')
                                            <select name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror">
                                                <option @selected($value === 'sandbox') value="sandbox">Sandbox</option>
                                                <option @selected($value === 'live') value="live">Live</option>
                                            </select>
                                        @else
                                            <input type="text" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ $value }}" required />
                                        @endif
                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @elseif ($type === 'social')
                <!---- Social & Recaptcha Settings  --->
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Social & Recaptcha Setting',
                    ])
                    <div class="card-body">
                        <form action="{{ route('admin.settings.env') }}" method="post" class="border-bottom mb-3">
                            @csrf
                            <div class="row">
                                @foreach ($data as $field => $value)
                                    <div class="col-12 form-group">
                                        <label>{{ ucwords(strtolower(str_replace('_', ' ', $field))) }}</label>
                                        <input type="text" name="{{ $field }}"
                                            class="form-control @error($field) is-invalid @enderror"
                                            value="{{ $value }}" required />
                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @elseif ($type === 'email')
                <!---- Email Settings  --->
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Email Setting',
                    ])
                    <div class="card-body">
                        <form action="{{ route('admin.settings.env') }}" method="post" class="border-bottom mb-3">
                            @csrf
                            <div class="row">
                                @foreach ($data as $field => $value)
                                    <div class="col-12 form-group">
                                        <label>{{ ucwords(strtolower(str_replace('_', ' ', $field))) }}</label>
                                        <input type="text" name="{{ $field }}"
                                            class="form-control @error($field) is-invalid @enderror"
                                            value="{{ $value }}" required />
                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!---- Test Email  --->
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Test Email',
                    ])
                    <div class="card-body">
                        <form action="{{ route('admin.settings.email') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="email" name="email" class="form-control" required
                                        placeholder="Email Address" />
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Send test email
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            @endif
        </div>


    </div>

@endsection
