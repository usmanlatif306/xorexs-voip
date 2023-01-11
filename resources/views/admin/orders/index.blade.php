@extends('layouts.admin')
@section('title', 'Orders')
@include('partials.admin-breadcrumb', [
    'title' => 'Orders',
    'links' => [['title' => 'Orders']],
])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Orders',
                    ])
                    <div class="card-body">
                        @include('partials.flash')

                        @livewire('admin.orders')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
