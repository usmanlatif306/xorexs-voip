@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="m-0 p-0">User Profile</h3>
                    </div>
                    <div class="card-body">
                        @include('partials.flash')
                        @include('partials.errors')
                        <form action="{{ route('user.profile.update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text"
                                        class="
                                form-control form-control-sm @error('name') is-invalid @enderror"
                                        name="name" placeholder="Name" value="{{ auth()->user()->name }}" required />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class=" form-control form-control-sm @error('email') is-invalid @enderror"
                                        name="email" placeholder="Email Address" value="{{ auth()->user()->email }}"
                                        required />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="phone">{{ __('Mobile Number') }}</label>
                                    <input id="phone" type="tel"
                                        class=" form-control form-control-sm @error('phone') is-invalid @enderror"
                                        name="phone" placeholder="Mobile Number" value="{{ auth()->user()->phone }}"
                                        required />
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="country">{{ __('Country') }}</label>
                                    <input id="country" type="text"
                                        class="
                                            form-control form-control-sm
                                            @error('country')
                                            is-invalid
                                            @enderror
                                        "
                                        name="country" placeholder="Country"
                                        value="{{ old('country', auth()->user()->user_details->country) }}" required />

                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="city">{{ __('City Name') }}</label>
                                    <input id="city" type="text"
                                        class="
                                            form-control form-control-sm
                                            @error('city')
                                            is-invalid
                                            @enderror
                                        "
                                        name="city" placeholder="City Name"
                                        value="{{ old('city', auth()->user()->user_details->city) }}" required />
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="address">{{ __('Address') }}</label>
                                    <input id="address" type="text"
                                        class="
                                            form-control form-control-sm
                                            @error('address')
                                            is-invalid
                                            @enderror
                                        "
                                        name="address" placeholder="Address"
                                        value="{{ old('address', auth()->user()->user_details->address) }}" required />

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="postCode">{{ __('Post Code') }}</label>
                                    <input id="postCode" type="number"
                                        class="
                                            form-control form-control-sm
                                            @error('postcode')
                                            is-invalid
                                            @enderror
                                        "
                                        name="postcode" placeholder="Post Code"
                                        value="{{ old('postcode', auth()->user()->user_details->postcode) }}" required
                                        autocomplete="postcode" />
                                    @error('postcode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- prison details -->
                                <div class="col-md-6 form-group">
                                    <label>{{ __('Prisoner First Name') }}</label>
                                    <input type="text" name="prison_fname"
                                        class="form-control form-control-sm @error('prison_fname')
                                    is-invalid
                                    @enderror"
                                        value="{{ old('prison_fname', auth()->user()->user_details->prison_fname) }}"
                                        placeholder="Prisoner First Name" required />
                                    @error('prison_fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>{{ __('Prisoner Last Name') }}</label>
                                    <input type="text" name="prison_lname"
                                        class="form-control form-control-sm @error('prison_lname')
                                    is-invalid
                                    @enderror"
                                        value="{{ old('prison_lname', auth()->user()->user_details->prison_lname) }}"
                                        placeholder="Prisoner Last Name" required />
                                    @error('prison_lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>{{ __('Prisoner Number') }}</label>
                                    <input type="number" name="prison_number"
                                        class="form-control form-control-sm @error('prison_number')
                                    is-invalid @enderror"
                                        value="{{ old('prison_number', auth()->user()->user_details->prison_number) }}"
                                        placeholder="Prisoner Number" required />
                                    @error('prison_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>{{ __('Prison Status') }}</label>
                                    <select name="prison_status"
                                        class="form-control form-control-sm @error('prison_status') is-invalid @enderror"
                                        id="prison-status">
                                        <option value="">Select Prison Status</option>
                                        <option @selected(old('prison_status', auth()->user()->user_details->prison_status) === 'sentenced') value="sentenced">Sentenced</option>
                                        <option @selected(old('prison_status', auth()->user()->user_details->prison_status) === 'remanded') value="remanded">Remanded</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group {{ old('prison_status', auth()->user()->user_details->prison_status) !== 'sentenced' ? 'd-none' : '' }}"
                                    id="releaseDate">
                                    <label>{{ __('Release Date') }}</label>
                                    <input type="date" name="release_date" class="form-control form-control-sm"
                                        placeholder="Release Date"
                                        value="{{ old('release_date',auth()->user()->user_details->release_date?->format('Y-m-d')) }}" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>{{ __('Relation With Prisoner') }}</label>
                                    <input type="text" name="prison_relation"
                                        class="form-control form-control-sm @error('prison_relation')
                                        is-invalid
                                        @enderror"
                                        value="{{ old('prison_relation', auth()->user()->user_details->prison_relation) }}"
                                        placeholder="Relation With Prisoner" required />
                                    @error('prison_relation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $("select[name='prison_status']").change(function(e) {
                var status = e.target.value;
                if (status === "sentenced") {
                    $("#releaseDate").removeClass("d-none");
                } else {
                    $("#releaseDate").addClass("d-none");
                }
            });
        })
    </script>
@endpush
