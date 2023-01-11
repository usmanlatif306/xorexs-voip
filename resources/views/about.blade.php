@extends('layouts.website')
@section('title', 'About Us')
@section('content')

    @include('partials.bradcaump', ['title' => 'About Us'])

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
                        <h2 class="title__line">PhoneLocally Is complete solution for you Business</h2>
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

    <!-- Start Service Area -->
    @include('partials.tool')
    <!-- End Service Area -->

    <!-- Start About Area -->
    <div class="voopo__about__area position-relative bg--cart-11">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about__inner">
                        <div class="section__title--2">
                            <span>Software</span>
                            <h2>Get the Best!</h2>
                        </div>
                        <p>PhoneLocally is a leading vendor of the full-suite cloud-based innovative operational
                            communication solution, including VoIP and Cloud PBX, prognostic Dialer, SMS Service, and local
                            DID Numbers, also available on a modular basis. Boost contact center operational efficiency with
                            our call operation tools, analytics, and the best-in-class SIP trunking route services.</p>
                        <p>PhoneLocally is committed to providing superior quality, global coverage, robust security and
                            reliability, and deep telecommunications expertise.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about--thumb">
            <img src="{{ asset('theme/images/about/about.png') }}" alt="voopo voip">
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Works Area -->
    <div class="voopo__works bg-image--6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="works__inner">
                        <div class="section__title--2">
                            <span>Software</span>
                            <h2>Delivering Superior Solutions Across the Globe</h2>
                        </div>
                        <p>Our intelligent solutions are powered by a commitment to superior quality with direct connections
                            to Tier 1 providers and shorter routing, as well as global coverage, smart services, strong
                            partnerships, and deep telecommunications expertise.</p>
                        <p>The PhoneLocally support team provides personalized live service 24/7 through the communication
                            channel most convenient for you.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 sm__mt--40">
                    <div class="works__list">
                        <!-- Start Single Works -->
                        <div class="works">
                            <div class="icons">
                                <i class="zmdi zmdi-dot-circle-alt"></i>
                            </div>
                            <div class="content">
                                <h2>Global Coverage</h2>
                                <p>Expand your business’s international reach with premium A-Z SIP termination services.
                                    Establish a local presence in over 100 countries. Strategically placed infrastructure
                                    ensures reliable connections.</p>
                            </div>
                        </div>
                        <!-- End Single Works -->
                        <!-- Start Single Works -->
                        <div class="works">
                            <div class="icons">
                                <i class="zmdi zmdi-dot-circle-alt"></i>
                            </div>
                            <div class="content">
                                <h2>Secure and Reliable</h2>
                                <p>Operate with PhoneLocally’s dependable, enterprise-ready services. Easily monitor contact
                                    center results with transparent, smart, customizable solutions that adhere to the most
                                    robust security protocols.
                                <p>
                            </div>
                        </div>
                        <!-- End Single Works -->
                        <!-- Start Single Works -->
                        <div class="works">
                            <div class="icons">
                                <i class="zmdi zmdi-dot-circle-alt"></i>
                            </div>
                            <div class="content">
                                <h2>Communications Expertise</h2>
                                <p>Succeed with CommPeak’s extensive experience in the communications industry, coupled with
                                    our comprehensive understanding of hundreds of customers’ needs and respective results.
                                <p>
                            </div>
                        </div>
                        <!-- End Single Works -->
                        <!-- Start Single Works -->
                        <div class="works">
                            <div class="icons">
                                <i class="zmdi zmdi-dot-circle-alt"></i>
                            </div>
                            <div class="content">
                                <h2>Superior Quality Commitment</h2>
                                <p>Benefit from direct connections to Tier 1 providers and shorter routing, and highly
                                    customizable smart tools. Our dedicated support team and automated solutions ensure your
                                    effectiveness and profitability.
                                <p>
                            </div>
                        </div>
                        <!-- End Single Works -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Works Area -->

@endsection
