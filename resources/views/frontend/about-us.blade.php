@extends('frontend.base')
@section('content')

    <section class="hero-wrap hero-wrap-2"
             style="background-image: url('{{asset('frontend/icons-images/about-us.jpg')}}');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>About us <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row no-gutters px-5">
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100">
                        <div class="icon">
                            <img src="{{asset('frontend/icons-images/expert-advice.png')}}" width="80" height="80">
                        </div>
                        <div class="text">
                            <h2 style="color: whitesmoke !important;">Expert Guidance</h2>
                            <p>Get expert guidance from our team to navigate your visa process efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100">
                        <div class="icon">
                            <img src="{{asset('frontend/icons-images/journey.png')}}" width="80" height="80">
                        </div>
                        <div class="text">
                            <h2 style="color: whitesmoke !important;">Your journey , Our priority</h2>
                            <p>  prioritizing your needs and guiding you through your process with expertise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-3 d-lg-flex w-100">
                        <div class="icon">
                            <img src="{{asset('frontend/icons-images/trust.png')}}" width="80" height="80">
                        </div>
                        <div class="text">
                            <h2 style="color: whitesmoke !important;">Your partner for Global Migration</h2>
                            <p>conveying our dedication to being a reliable companion in your migration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="img img-3 w-100 d-flex justify-content-center align-items-center"
                         style="background-image: url({{asset('frontend/icons-images/about-usver.jpg')}}); position: relative;">
                    </div>
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class=" px-3 px-md-5 py-5 shadow">
                        <div class="heading-section">
                            <span class="subheading">Welcome to EuroLegal UK</span>
                            <h2 class="mb-3">Why to Put Trust Your Trust In EuroLegal UK</h2>

                            <p>Trust your immigration journey to EuroLegal UK, where expertise meets dedication.
                            </p>
                            <p>
                                Benefit
                                from our tailored guidance, proven track record, and commitment to ensuring a smooth and
                                successful visa application process.
                               </p>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="services d-flex w-100">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="flaticon-discount"></span>
                                    </div>
                                    <div class="text pl-2">
                                        <h2>Great Discount</h2>
                                        <p>Unbeatable savings for exceptional value</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services d-flex w-100">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="flaticon-lawyer"></span>
                                    </div>
                                    <div class="text pl-2">
                                        <h2>Expert Team</h2>
                                        <p>Offering unparalleled value and savings.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section ftco-no-pt mt-4 ftco-no-pb img py-2" id="section-counter">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
                    <div class="block-18 py-4 w-100">
                        <span class="icon flaticon-checklist"></span>
                        <div class="text align-items-center">
                            <strong class="number">10
                            </strong>
                            <span>Years of Experince</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
                    <div class="block-18 py-4 w-100">
                        <span class="icon flaticon-checklist"></span>
                        <div class="text align-items-center">
                            <strong class="number">24/7</strong>
                            <span>Support</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
                    <div class="block-18 py-4 w-100">
                        <span class="icon flaticon-checklist"></span>
                        <div class="text align-items-center">
                            <strong class="number">10K
                            </strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
                    <div class="block-18 py-4 w-100">
                        <span class="icon flaticon-checklist"></span>
                        <div class="text align-items-center">
                            <strong class="number">98%
                            </strong>
                            <span>Approval</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="py-4">
        @include('frontend.partials.CallToAction')
    </div>

    @include('frontend.partials.light-box')

@endsection
