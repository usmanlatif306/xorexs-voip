@extends('layouts.admin')
@section('title', 'Subscription')
@include('partials.admin-breadcrumb', [
    'title' => 'Subscription',
    'links' => [['title' => 'Subscription', 'url' => route('admin.subscriptions.index')], ['title' => 'View']],
])
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="card">
                @include('partials.card-header', [
                    'title' => 'Subscription Info',
                    'link_title' => 'Back',
                    'link' => route('admin.subscriptions.index'),
                ])
                <div class="card-body">
                    <div class="row">

                        <div class="col-12 fs-14 semibold">
                            <span class="">Subscription#: &nbsp;&nbsp;</span>
                            <span>{{ $subscription->id }} </span>
                        </div>
                        {{-- user information --}}
                        <div class="col-12 py-2">
                            <span class="semibold fs-18 text-blue">User Information</span>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Name:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->user->name }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Email:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->user->email }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Phone:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->user->phone }}</span>
                            </div>
                        </div>
                        {{-- Package information --}}
                        <div class="col-12 py-2">
                            <span class="semibold fs-18 text-blue">Package Information</span>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Name:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->package->name }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Lines:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->package->lines }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Minutes:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->package->minutes }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Billing period:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span class="text-capitalize">{{ $subscription->package->period }}</span>
                            </div>
                        </div>
                        {{-- Subscription information --}}
                        <div class="col-12 py-2">
                            <span class="semibold fs-18 text-blue">Subscription Information</span>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Remaining DIDs:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->remaining_dids }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Remaining Minutes:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->remaining_minutes }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Ending at:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->ends_at?->format('d/m/Y H:i A') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Status:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span
                                    class="@if ($subscription->status) text-success @else text-danger @endif">{{ $subscription->status ? 'Active' : 'Disabled' }}</span>
                            </div>
                        </div>
                        {{-- Package Prison information --}}
                        <div class="col-12 py-2">
                            <span class="semibold fs-18 text-blue">Package Prison Information</span>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Prison First Name:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->prisoner_detail->prison_fname }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Prison Last Name:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->prisoner_detail->prison_lname }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Prison Number:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->prisoner_detail->prison_number }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Prison Status:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->prisoner_detail->prison_status }}</span>
                            </div>
                        </div>
                        @if ($subscription->prisoner_detail->prison_status === 'sentenced')
                            <div class="col-md-6 mb-2 fs-14 row">
                                <div class="col-md-3 col-sm-6">
                                    <span class="semibold">Prison Status:</span>
                                </div>
                                <div class="col-md-9 col-sm-6">
                                    <span>{{ $subscription->prisoner_detail->release_date }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Prison:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->prisoner_detail->prison }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Prison Relation:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->prisoner_detail->prison_relation }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Prison Contact:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->prisoner_detail->prison_contact }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 fs-14 row">
                            <div class="col-md-3 col-sm-6">
                                <span class="semibold">Prison Contact Name:</span>
                            </div>
                            <div class="col-md-9 col-sm-6">
                                <span>{{ $subscription->prisoner_detail->prison_contact_name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
