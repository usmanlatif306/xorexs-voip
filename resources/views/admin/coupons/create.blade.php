@extends('layouts.admin')
@section('title', 'Create Coupon Code')
@include('partials.admin-breadcrumb', [
    'title' => 'Coupon Codes',
    'links' => [['title' => 'Coupon Codes', 'url' => route('admin.coupons.index')], ['title' => 'Create']],
])
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <form action="{{ route('admin.coupons.store') }}" method="post" class="border-bottom mb-3">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'New Coupon Code',
                        'link_title' => 'Back',
                        'link' => route('admin.coupons.index'),
                    ])
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Coupon Code</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Coupon Discount (%)</label>
                                    <input type="text" name="value"
                                        class="form-control @error('value') is-invalid @enderror"
                                        value="{{ old('value') }}" />
                                    @error('value')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status"
                                        class="form-control border @error('status') is-invalid @enderror">
                                        <option @selected(old('status') === 1) value="1">Active</option>
                                        <option @selected(old('status') === 0) value="0">Disable</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">
                                    Create
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
