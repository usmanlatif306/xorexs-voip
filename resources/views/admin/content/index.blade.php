@extends('layouts.admin')
@section('title', 'General Content')
@include('partials.admin-breadcrumb', [
    'title' => 'General Content',
    'links' => [['title' => 'Content']],
])
@section('content')
    <div class="row">
        <div class="col-12">@include('partials.flash')</div>
        <!---- General Content  --->
        <div class="col-md-6">
            <form action="{{ route('admin.contents.store') }}" method="post" class="border-bottom mb-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'General Content',
                    ])
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data['general'] as $field => $type)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                        @if ($type === 'input')
                                            <input type="text" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @elseif ($type === 'file')
                                            <input type="file" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @else
                                            <textarea name="{{ $field }}" class="form-control @error($field) is-invalid @enderror" rows="5">{{ setting($field) ?? old($field) }}</textarea>
                                        @endif

                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
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

        <!---- Hero Section  --->
        <div class="col-md-6">
            <form action="{{ route('admin.contents.store') }}" method="post" class="border-bottom mb-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Hero Section',
                    ])
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data['hero'] as $field => $type)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                        @if ($type === 'input')
                                            <input type="text" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @elseif ($type === 'file')
                                            <input type="file" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @else
                                            <textarea name="{{ $field }}" class="form-control @error($field) is-invalid @enderror" rows="5">{{ setting($field) ?? old($field) }}</textarea>
                                        @endif

                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
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

        <!---- Service Content  --->
        <div class="col-md-6">
            <form action="{{ route('admin.contents.store') }}" method="post" class="border-bottom mb-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Services',
                    ])
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data['services'] as $field => $type)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                        @if ($type === 'input')
                                            <input type="text" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @elseif ($type === 'file')
                                            <input type="file" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @else
                                            <textarea name="{{ $field }}" class="form-control @error($field) is-invalid @enderror" rows="5">{{ setting($field) ?? old($field) }}</textarea>
                                        @endif

                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
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

        <!---- Contact us , Call and NewsLetter Content  --->
        <div class="col-md-6">
            <form action="{{ route('admin.contents.store') }}" method="post" class="border-bottom mb-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Contact Us',
                    ])
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data['contact'] as $field => $type)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                        @if ($type === 'input')
                                            <input type="text" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @elseif ($type === 'file')
                                            <input type="file" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @else
                                            <textarea name="{{ $field }}" class="form-control @error($field) is-invalid @enderror" rows="5">{{ setting($field) ?? old($field) }}</textarea>
                                        @endif

                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{ route('admin.contents.store') }}" method="post" class="border-bottom mb-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'News Letter & Call',
                    ])
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data['call'] as $field => $type)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                        @if ($type === 'input')
                                            <input type="text" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @elseif ($type === 'file')
                                            <input type="file" name="{{ $field }}"
                                                class="form-control @error($field) is-invalid @enderror"
                                                value="{{ setting($field) ?? old($field) }}" />
                                        @else
                                            <textarea name="{{ $field }}" class="form-control @error($field) is-invalid @enderror" rows="5">{{ setting($field) ?? old($field) }}</textarea>
                                        @endif

                                        @error($field)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
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

        <!---- About Us Page Content  --->
        <div class="col-md-6">
            <form action="{{ route('admin.contents.store') }}" method="post" class="border-bottom mb-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'About Us',
                    ])
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>About Us Image</label>
                                    <input type="file" name="about_image" class="form-control" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>About Us Page Content</label>
                                    <textarea name="about_page" id="aboutPage" class="form-control">{{ setting('about_page') }}</textarea>
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

        <!---- How It Works Page Content  --->
        <div class="col-md-6">
            <form action="{{ route('admin.contents.store') }}" method="post" class="border-bottom mb-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'How It Works',
                    ])
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>How It Work</label>
                                    <textarea name="work_page" id="workPage" class="form-control">{{ setting('work_page') }}</textarea>
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
        ClassicEditor.create(document.querySelector("#aboutPage")).catch((error) => {
            console.error(error);
        });
        ClassicEditor.create(document.querySelector("#workPage")).catch((error) => {
            console.error(error);
        });
    </script>
@endpush
