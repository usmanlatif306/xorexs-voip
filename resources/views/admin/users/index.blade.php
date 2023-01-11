@extends('layouts.admin')
@section('title', 'Users')
@include('partials.admin-breadcrumb', [
    'title' => 'Users',
    'links' => [['title' => 'Users']],
])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Users',
                    ])
                    <div class="card-body">
                        @include('partials.flash')

                        @livewire('admin.users')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
