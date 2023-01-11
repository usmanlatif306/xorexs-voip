@extends('layouts.website')
@section('title', 'Services')
@section('content')

    @include('partials.bradcaump', ['title' => 'Services'])

    <!-- Start Service Area -->
    <div class="vp__service service--3 position-relative">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6 bg-image--7 col-md-12 col-sm-12 col-12 col-xl-6">
                    <div class="service__inner">
                        <h2>What Is PhoneLocally</h2>
                        <p>PhoneLocally is a leading vendor of the full-suite cloud-based innovative operational
                            communication solution, including VoIP and Cloud PBX, prognostic Dialer, SMS Service, and local
                            DID Numbers, also available on a modular basis. Boost contact center operational efficiency with
                            our call operation tools, analytics, and the best-in-class SIP trunking route services.
                            PhoneLocally is committed to providing superior quality, global coverage, robust security and
                            reliability, and deep telecommunications expertise.
                        </p>
                        <div class="video__cion">
                            <a class="play__btn" href="https://www.youtube.com/watch?v=LOHfKSmWXVM">
                                <span>
                                    <i class="zmdi zmdi-play"></i>
                                </span> Play Video</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 col-xl-6">
                    <div class="thumb">
                        <img src="{{ asset('theme/images/about/ser1.jpg') }}" alt="voopo voip">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Area -->

    <!-- Start Best Service Area -->
    @include('partials.service')
    <!-- End Best Service Area -->

    <!-- Start Pricing Table Area -->
    @include('partials.peckages', ['packages' => $data['packages'], 'codes' => []])
    <!-- End Pricing Table Area -->

    <!-- Start Testimonial Area -->
    <div class="voopo__testimnial bg--white ptb--110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <span>Testimonial</span>
                        <h2>What Client Say</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--40">
                <div class="col-md-10 offset-md-1">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/1.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Pakhi Azimpur</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12 xs__mt--40">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/2.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Ikra Rampura</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12 sm__mt--40">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/3.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Prity Dohar</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/1.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Pakhi Azimpur</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12 xs__mt--40">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/2.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Ikra Rampura</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12 sm__mt--40">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/3.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Prity Dohar</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/1.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Pakhi Azimpur</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12 xs__mt--40">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/2.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Ikra Rampura</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                    <!-- Start Single Clint -->
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-12 sm__mt--40">
                                        <div class="testimonial">
                                            <div class="thumb">
                                                <img src="{{ asset('theme/images/clint/3.png') }}" alt="voopo voip">
                                            </div>
                                            <div class="clint__info">
                                                <h4>Prity Dohar</h4>
                                                <p>There are many variations passages Lorem Ipsum available, the majority
                                                    have suffered.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Clint -->
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="icon__circle"><i class="fa fa-angle-left" aria-hidden="true"></i></span>

                            <span aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="icon__circle"><i class="fa fa-angle-right" aria-hidden="true"></i></span>

                            <span aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->

@endsection
