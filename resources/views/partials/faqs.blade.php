<div class="voopo__faq__area pb--120 @if (!$homepage) pt--120 @endif bg--white">
    <div class="container">
        <div class="row">
            <div
                class="col-md-12 col-sm-12 col-12  @if ($homepage) col-lg-6 @else col-lg-10 offset-lg-1 @endif">
                <div id="accordion" class="panora_accordion" role="tablist">
                    @foreach ($faqs as $faq)
                        <div class="card">
                            <div class="acc-header" role="tab" id="heading{{ $faq->id }}">
                                <h5>
                                    <a data-toggle="collapse" class="@if (!$loop->first) collapsed @endif"
                                        href="#collapse{{ $faq->id }}" role="button"
                                        aria-expanded="@if ($loop->first) true @else false @endif"
                                        aria-controls="collapse{{ $faq->id }}">{{ $faq->question }}</a>
                                </h5>
                            </div>

                            <div id="collapse{{ $faq->id }}"
                                class="collapse @if ($loop->first) show @endif" role="tabpanel"
                                aria-labelledby="heading{{ $faq->id }}" data-parent="#accordion">
                                <div class="card-body">{{ $faq->answer }}</div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            @if ($homepage)
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 sm__mt--40 md__mt--40 xs__mt--40">
                    <div class="faq_inner">
                        <div class="content">
                            <h2>Have Any Other Questions?</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration.</p>
                            <div class="input__box">
                                <input type="email" placeholder="Enter your email address">
                                <textarea placeholder="Type your Question."></textarea>
                                <div class="qus__btn">
                                    <a class="voopo__btn" href="#">Send</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
