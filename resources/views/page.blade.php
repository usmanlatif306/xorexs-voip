@extends('layouts.website')
@section('title', get_title($page->slug))
@section('content')

    @include('partials.bradcaump', ['title' => get_title($page->slug)])

    <!-- Start Voopo Business -->
    <div class="voopo__business bg--cart-4 ptb--50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12 col-12 sm__mt--40">
                    <div class="content">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Voopo Business -->

@endsection
