@extends('layouts.admin')
@section('title', 'Edit FAQ')
@include('partials.admin-breadcrumb', [
    'title' => 'FAQs',
    'links' => [['title' => 'FAQs', 'url' => route('admin.faqs.index')], ['title' => 'Edit']],
])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Edit FAQ',
                        'link_title' => 'Back',
                        'link' => route('admin.faqs.index'),
                    ])
                    <div class="card-body">
                        <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12">@include('partials.flash')</div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input type="text" name="question"
                                            class="form-control @error('question') is-invalid @enderror"
                                            value="{{ $faq->question }}" />
                                        @error('question')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Answer</label>
                                        <textarea name="answer" class="form-control @error('answer') is-invalid @enderror" rows="5">{{ $faq->answer }}</textarea>
                                        @error('answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
