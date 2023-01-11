@extends('layouts.admin')
@section('title', 'Coupon Codes')
@include('partials.admin-breadcrumb', [
    'title' => 'Coupon Codes',
    'links' => [['title' => 'Coupon Codes']],
])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Coupon Code',
                        'link_title' => 'New Coupon',
                        'link' => route('admin.coupons.create'),
                    ])
                    <div class="card-body">
                        @include('partials.flash')
                        @livewire('admin.coupons')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
