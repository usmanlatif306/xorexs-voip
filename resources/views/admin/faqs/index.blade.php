@extends('layouts.admin')
@section('title', 'FAQs')
@include('partials.admin-breadcrumb', [
    'title' => 'FAQs',
    'links' => [['title' => 'FAQs']],
])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'FAQs',
                        'link_title' => 'Add New',
                        'link' => route('admin.faqs.create'),
                    ])
                    <div class="card-body">
                        @include('partials.flash')
                        @livewire('admin.faqs')
                    </div>
                </div>
                {{-- faq detail model --}}
                <div class="modal fade" id="faqModal" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header pb-1">
                                <h5 class="modal-title" id="faqModalLabel">FAQ Detail</h5>
                                <span class="fs-20 pointer" onclick="closeModel('faqModal')">
                                    <span aria-hidden="true">&times;</span>
                                </span>
                            </div>
                            <div class="modal-body">
                                <div class="mb-2">
                                    <span class="semibold d-block">Question: </span>
                                    <span id="question"></span>
                                </div>
                                <div>
                                    <span class="semibold d-block">Answer: </span>
                                    <span id="answer"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function show(faq) {
            console.log(faq);
            $('#question').text(faq.question);
            $('#answer').text(faq.answer);
            $('#faqModal').modal('show');
        }
    </script>
@endpush
