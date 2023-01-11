@extends('layouts.website')
@section('title', 'How It Works')
@section('content')
    @include('partials.bradcaump', ['title' => 'How It Works'])
    <!-- Start Faq Area -->
    @include('partials.works')
    <!-- End Faq Area -->
@endsection
