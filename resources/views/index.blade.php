@extends('layouts.website')
@section('title', 'Home')
@section('content')
    <!-- Start Banner Area -->
    <div class="slider__area slider--one">
        <div class="slide__activation">
            <!-- Start Single Slide -->
            <div class="slide slider_fixed_height gra__bg--1 d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-5 col-md-6 col-sm-6 col-12">
                            <div class="content">
                                <h1>Boost Your Sales With PhoneLocally's Cloud Contact Center Solutions</h1>
                                <p>PhoneLocally makes business communication easier by providing highly customizable
                                    cloud-based contact center solutions. Our innovative tools can be tailored to meet your
                                    unique business needs.
                                </p>
                                <a class="voopo__btn btn--org" href="#services">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-md-6 col-sm-6 col-12">
                            <div class="slide__fornt__img">
                                <img src="{{ asset('theme/images/banner/s1.png') }}" alt="voopo voip">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Service Area -->
    @include('partials.tool')
    <!-- End Service Area -->

    <!-- Start Voopo Business -->
    <div class="voopo__business bg--cart-4 ptb--110">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="thumb">
                        <img src="{{ asset('theme/images/about/s1.png') }}" alt="voopo voip">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12 sm__mt--40">
                    <div class="content">
                        <h2 class="title__line">PhoneLocally is complete solution for you Business</h2>
                        <p class="first__desc">Boost contact center
                            operational efficiency with our call operation tools, analytics, and the best-in-class SIP
                            trunking route services.</p>
                        <p>PhoneLocally is a leading vendor of the full-suite cloud-based innovative
                            operational communication solution, including VoIP and Cloud PBX, prognostic Dialer, SMS
                            Service, and local DID Numbers, also available on a modular basis. </p>
                        <p>PhoneLocally is committed to providing superior quality, global coverage,
                            robust security and reliability, and deep telecommunications expertise.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Voopo Business -->

    <!-- Start Best Service Area -->
    @include('partials.service')
    <!-- End Best Service Area -->

    <!-- Start Voopo Software -->
    <div class="voopo__software poss--relative bg--white">
        <div class="sft-bg-color poss--relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12 col-12">
                        <div class="content">
                            <h2>Our User Friendly Software</h2>
                            <p>Nor again is there anyone who loves or pursues or obtain pain of itself, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat oh arif vai kemon asen.
                            </p>
                            <p>because it pain because occasionally circumstances. quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="poly__1">
                <img src="{{ asset('theme/images/icons/pl1.png') }}" alt="voopo voip">
            </div>
            <div class="poly__2">
                <img src="{{ asset('theme/images/icons/pl2.png') }}" alt="voopo voip">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="download__btn">
                        <li><a href="#">Download <img src="{{ asset('theme/images/icons/down.png') }}"
                                    alt="voip voopo"></a>
                        </li>
                        <li><a href="#">Download <img src="{{ asset('theme/images/icons/apple.png') }}"
                                    alt="voip voopo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shape--1">
            <img src="{{ asset('theme/images/about/soft1.png') }}" alt="voopo voip">
        </div>
    </div>
    <!-- End Voopo Software -->

    <!-- Start Working Process -->
    @include('partials.works')
    <!-- End Working Process -->

    <!-- Start Pricing Table Area -->
    @include('partials.peckages', ['packages' => $data['packages'], 'codes' => []])
    <!-- End Pricing Table Area -->

    <!-- Start Shop Area -->
    <div class="voppo__shop__area bg--white pt--110 pb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2>Global Coverage With Our Call Center Cloud Solutions</h2>
                        <span>12 globally located servers strategically positioned, ensuring superior quality from the
                            leading cloud contact center provider.</span>
                    </div>
                </div>
            </div>
            <div class="row mt--30">
                <div class="col-lg-8 offset-lg-2">
                    <div class="row">
                        <!-- Start Single Product -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('theme/images/shop/p1.jpg') }}"
                                            alt="voopo voip"></a>
                                </div>
                                <div class="content">
                                    <h2><a href="#">VoIP</a></h2>
                                    <p>Starts from</p>
                                    <span class="price">$0.0009</span>
                                </div>
                                <div class="hover__action">
                                    <a class="voopo__btn btn--org" href="cart.html">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('theme/images/shop/p2.jpg') }}"
                                            alt="voopo voip"></a>
                                </div>
                                <div class="content">
                                    <h2><a href="#">DID</a></h2>
                                    <p>Starts from</p>
                                    <span class="price">$0.5</span>
                                </div>
                                <div class="hover__action">
                                    <a class="voopo__btn btn--org" href="cart.html">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('theme/images/shop/p3.jpg') }}"
                                            alt="voopo voip"></a>
                                </div>
                                <div class="content">
                                    <h2><a href="#">SMS</a></h2>
                                    <p>Starts from</p>
                                    <span class="price">$0.0047</span>
                                </div>
                                <div class="hover__action">
                                    <a class="voopo__btn btn--org" href="cart.html">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Shop Area -->

    <!-- Start Faq Area -->
    @include('partials.faqs', ['faqs' => $data['faqs'], 'homepage' => true])
    <!-- End Faq Area -->

    <!-- Start Voopo Business -->
    <div class="voopo__business bg--cart-4 ptb--80">
        <div class="container">
            <div class="row align-items-center flex-column">
                <h2>Tailored Just for You!</h2>
                <p style="font-size: 16px;">Ready to get customized communication tools built for your virtual contact
                    center?</p>
                <a class="voopo__btn mt--20" href="{{ route('login') }}">START NOW</a>
            </div>
        </div>
    </div>
    <!-- End Voopo Business -->

@endsection
