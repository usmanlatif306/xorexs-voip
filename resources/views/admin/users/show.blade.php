@extends('layouts.admin')
@section('title', 'Users')
@include('partials.admin-breadcrumb', [
    'title' => 'Users',
    'links' => [['title' => 'User', 'url' => route('admin.users.index')], ['title' => 'View']],
])
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card">
                @include('partials.card-header', [
                    'title' => 'User Info',
                    'link_title' => 'Back',
                    'link' => route('admin.users.index'),
                ])
                <div class="card-body">
                    <div class="row">

                        <div class="col-12 fs-14 semibold">
                            <span class="">User#: &nbsp;&nbsp;</span>
                            <span>{{ $user->id }} </span>
                        </div>
                        {{-- user information --}}
                        <div class="col-12 py-2">
                            <span class="semibold fs-18 text-blue">User Information</span>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-sm-6">
                                <span class="semibold">Name:</span>
                            </div>
                            <div class="col-sm-6">
                                <span>{{ $user->name }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-sm-6">
                                <span class="semibold">Email:</span>
                            </div>
                            <div class="col-sm-6">
                                <span>{{ $user->email }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-sm-6">
                                <span class="semibold">Phone:</span>
                            </div>
                            <div class="col-sm-6">
                                <span>{{ $user->phone }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-sm-6">
                                <span class="semibold">Country:</span>
                            </div>
                            <div class="col-sm-6">
                                <span>{{ $user->user_details?->country }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-sm-6">
                                <span class="semibold">City:</span>
                            </div>
                            <div class="col-sm-6">
                                <span>{{ $user->user_details?->city }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-sm-6">
                                <span class="semibold">Address:</span>
                            </div>
                            <div class="col-sm-6">
                                <span>{{ $user->user_details?->address }}</span>
                            </div>
                        </div>

                        {{-- Subscriptions information --}}
                        <div class="col-12 py-2">
                            <span class="semibold fs-18 text-blue">Subscriptions Information</span>
                        </div>
                        @foreach ($user->subscriptions as $subscription)
                            <div class="col-12 py-2">
                                <span class="fs-16 semibold">{{ $loop->iteration }}:
                                    {{ $subscription->package->name }}</span>
                            </div>
                            <div class="col-md-6 mb-2 fs-14 row">
                                <div class="col-sm-6">
                                    <span class="">Remaining DIDs:</span>
                                </div>
                                <div class="col-sm-6">
                                    <span>{{ $subscription->remaining_dids }}</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2 fs-14 row">
                                <div class="col-sm-6">
                                    <span class="">Remaining Minutes:</span>
                                </div>
                                <div class="col-sm-6">
                                    <span>{{ $subscription->remaining_minutes }}</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2 fs-14 row">
                                <div class="col-sm-6">
                                    <span class="">Ending at:</span>
                                </div>
                                <div class="col-sm-6">
                                    <span>{{ $subscription->ends_at?->format('d/m/Y H:i A') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2 fs-14 row">
                                <div class="col-sm-6">
                                    <span class="">Status:</span>
                                </div>
                                <div class="col-sm-6">
                                    <span
                                        class="@if ($subscription->status) text-success @else text-danger @endif">{{ $subscription->status ? 'Active' : 'Disabled' }}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
