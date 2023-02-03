@extends('layouts.admin')
@section('title', 'Website SEO')
@include('partials.admin-breadcrumb', [
    'title' => 'Website SEO',
    'links' => [['title' => get_title($page), 'url' => route('admin.seo.page', $page)], ['title' => 'Update']],
])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    @include('partials.card-header', [
                        'title' => get_title($page),
                    ])

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('admin.seo.update', $page) }}" method="POST">
                            @csrf
                            <div class="row">
                                @foreach ($pages as $page => $fields)
                                    @foreach ($fields as $name => $field)
                                        <div
                                            class="@if (!$loop->last) col-md-6 @else col-12 @endif form-group mb-2">
                                            <label class="text-capitalize"
                                                for="{{ $field }}">{{ $name }}</label>
                                            <input id="{{ $field }}" class="form-control" type="text"
                                                name="{{ $field }}" value="{{ old($field, setting($field)) }}"
                                                placeholder="{{ $name }}">
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>

                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
