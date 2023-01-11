@extends('layouts.admin')
@section('title', 'Edit Packages')
@include('partials.admin-breadcrumb', [
    'title' => 'Package',
    'links' => [['title' => 'Packages', 'url' => route('admin.packages.index')], ['title' => 'Edit']],
])
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <form action="{{ route('admin.packages.update', $package->id) }}" method="post" class="border-bottom mb-3">
                @csrf
                @method('put')
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Edit Package',
                        'link_title' => 'Back',
                        'link' => route('admin.packages.index'),
                    ])
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Plan Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $package->name) }}" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Plan Price</label>
                                    <input type="number" name="price"
                                        class="form-control @error('price') is-invalid @enderror"
                                        value="{{ old('price', $package->price) }}" />
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Plan Lines</label>
                                    <input type="number" name="lines"
                                        class="form-control @error('lines') is-invalid @enderror"
                                        value="{{ old('lines', $package->lines) }}" />
                                    @error('lines')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Plan Minutes</label>
                                    <input type="number" name="minutes"
                                        class="form-control @error('minutes') is-invalid @enderror"
                                        value="{{ old('minutes', $package->minutes) }}" />
                                    @error('minutes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Billing period</label>
                                    <select name="period" id=""
                                        class="form-control border @error('period') is-invalid @enderror">
                                        @foreach (billing_periods() as $name => $period)
                                            <option @selected(old('period', $package->period) === $period) value="{{ $period }}">
                                                {{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('period')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Plan Status</label>
                                    <select name="status"
                                        class="form-control border @error('status') is-invalid @enderror">
                                        <option @selected(old('status', $package->status) === 1) value="1">Active</option>
                                        <option @selected(old('status', $package->status) === 0) value="0">Disable</option>
                                    </select>
                                    @error('status')
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
    </div>
@endsection
