@extends('layouts.website')
@section('title', 'FAQS')
@section('content')
    @include('partials.bradcaump', ['title' => 'FAQS'])
    <!-- Start Faq Area -->
    @include('partials.faqs', ['faqs' => $data['faqs'], 'homepage' => false])
    <!-- End Faq Area -->
@endsection
