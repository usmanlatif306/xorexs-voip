@extends('layouts.admin')
@section('title', 'Profile')
@include('partials.admin-breadcrumb', [
    'title' => 'Profile',
    'links' => [['title' => 'Profile']],
])
@section('content')
    <div class="row">
        <div class="col-12">@include('partials.flash')</div>
        {{-- profile --}}
        <div class="col-12 col-md-6">
            <form action="{{ route('admin.profile.update') }}" method="post" class="border-bottom mb-3">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Update Profile',
                    ])
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ auth()->user()->name }}" required />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ auth()->user()->email }}" required />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ auth()->user()->phone }}" required />
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {{-- password --}}
        <div class="col-12 col-md-6">
            <form action="{{ route('admin.profile.password') }}" method="post" class="border-bottom mb-3">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Update Password',
                    ])
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input type="password" name="current_password"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        placeholder="*********" required />
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" placeholder="*********"
                                        required />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="*********" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
