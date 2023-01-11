@extends('layouts.website')
@section('title', 'Contact Us')
@section('content')

    @include('partials.bradcaump', ['title' => 'Contact Us'])

    <!-- Start Contact Area -->
    <div class="voopo__contact ptb--110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="voopo__contact__form">
                        <h2>If you need to contact us, Please fill out the form below.</h2>
                        {{-- id="contact-form" --}}
                        <form action="{{ route('send_message') }}" method="post">
                            @csrf
                            <div class="single-contact-form">
                                <input type="text" name="name" placeholder="Type Your Name">
                            </div>
                            <div class="single-contact-form">
                                <input type="email" name="email" placeholder="Type Your e-mail">
                            </div>
                            <div class="single-contact-form message">
                                <textarea name="message" placeholder="Type Your Message"></textarea>
                            </div>
                            <div class="contact-btn">
                                <button class="voopo__btn" type="submit">Send</button>
                            </div>
                        </form>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 col-sm-12 col-12">
                    <div class="contact__thumb">
                        <img src="{{ asset('theme/images/about/contact.png') }}" alt="voopo voip">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Contact Address -->
    <div class="voopo__address bg--cart-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7 col-sm-12 col-12">
                    <div class="vp__contact__address">
                        <h2>Out Contact Info</h2>
                        <div class="vp__address__container">
                            <!-- Start Single Address -->
                            <div class="vp__address">
                                <h4>Address</h4>
                                <p>Doemon Demon 77/h9 South Road, USA - 009877</p>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="vp__address">
                                <h4>Address</h4>
                                <p><a href="#">demovoopo.mail.com</a></p>
                                <p><a href="#">demo.mailvoopo.info</a></p>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="vp__address">
                                <h4>Address</h4>
                                <p><a href="#">+1 (22) 555 666 999</a></p>
                                <p><a href="#">+1 (22) 555 999 966</a></p>
                            </div>
                            <!-- End Single Address -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="goggle__map">
            <div id="googleMap"></div>
        </div>
    </div>
    <!-- End Contact Address -->

@endsection
