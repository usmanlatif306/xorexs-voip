@extends('layouts.admin')
@php
    $title = ucwords(str_replace('-', ' ', $page->slug));
@endphp
@section('title', $title)
@include('partials.admin-breadcrumb', [
    'title' => 'Page Content',
    'links' => [['title' => $title]],
])
@section('content')
    <div class="row justify-content-center">
        <!---- General Content  --->
        <div class="col-md-10">
            <form action="{{ route('admin.pages.update', $page) }}" method="post" class="border-bottom mb-3">
                @csrf
                @method('put')
                <div class="card">
                    @include('partials.card-header', [
                        'title' => $title,
                    ])
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">@include('partials.flash')</div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{!! $page->content !!}</textarea>
                                    @error('content')
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
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#content")).catch((error) => {
            console.error(error);
        });
    </script>
@endpush
