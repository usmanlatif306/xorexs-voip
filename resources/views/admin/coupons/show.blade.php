@extends('layouts.admin')
@section('title', 'View Coupon Code')
@include('partials.admin-breadcrumb', [
    'title' => 'Coupon Codes',
    'links' => [['title' => 'Coupon Codes', 'url' => route('admin.coupons.index')], ['title' => 'View']],
])
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <form action="{{ route('admin.coupons.store') }}" method="post" class="border-bottom mb-3">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'View Coupon Code',
                        'link_title' => 'Back',
                        'link' => route('admin.coupons.index'),
                    ])
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3 row">
                                <span class="semibold col-sm-6">Coupon Code: </span>
                                <span class="col-sm-6">{{ $coupon->name }}</span>
                            </div>
                            <div class="col-12 row mb-3">
                                <span class="semibold col-sm-6">Coupon Code Discount: </span>
                                <span class="col-sm-6">{{ $coupon->value }}(%)</span>
                            </div>
                            <div class="col-12 row mb-3">
                                <span class="semibold col-sm-6">Status: </span>
                                <span class="col-sm-6">{{ $coupon->status === 1 ? 'Active' : 'Disabled' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
