@extends('frontend.base')
@section('content')
    <link rel="stylesheet" href="{{asset('frontend/porto/css/theme-elements.css')}}">

    {{--    <link rel="stylesheet" href="{{asset('frontend/porto/css/demos/demo-business-consulting-2.css')}}">--}}

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('frontend/porto/css/skins/skin-business-consulting-2.css')}}">
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
                            <p> prioritizing your needs and guiding you through your process with expertise.</p>
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
        <div class="container" >
            <div class="row no-gutters">
                <div class="col-md-6 d-flex align-items-stretch shadow">
                    <div class="img img-3 w-100 d-flex justify-content-center align-items-center "
                         style="background-image: url({{asset('frontend/icons-images/about-usver.jpg')}}); position: relative;">
                    </div>
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class=" px-3 px-md-5 py-5 shadow">
                        <div class="heading-section">
                            <span class="subheading">Welcome to EuroLegal UK</span>
                            <h3 class="mb-3" style="line-height: 36px">Need expert guidance to navigate the complexities
                                of UK immigration?</h3>

                            <p> EuroLegale based in London and Dubai, specializes in assisting individuals and
                                businesses worldwide with tailored immigration solutions.
                            </p>
                        </div>

                        <div class="row py-0">

                            <div class="col-lg-12">
                                <div class="services d-flex w-100">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <img src="{{asset('frontend/icons-images/needs.png')}}" width="50" height="50">
                                    </div>
                                    <div class="text pl-2">
                                        <h2>Understand Your Needs</h2>
                                        <p>Share your immigration concerns with us, and we’ll identify the best solution
                                            tailored to your specific requirements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="services d-flex w-100">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <img src="{{asset('frontend/icons-images/case.png')}}" width="50" height="50">
                                    </div>
                                    <div class="text pl-2">
                                        <h2>Comprehensive Case Review</h2>
                                        <p>Our Immigration Associates will analyze your case, addressing any gaps and
                                            inconsistencies through our step-by-step process.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="services d-flex w-100">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="flaticon-lawyer" style="font-size: 46px"></span>
                                    </div>
                                    <div class="text pl-2">
                                        <h2>Move Forward with Confidence</h2>
                                        <p>Trust our experts to guide you every step of the way, ensuring your
                                            immigration challenges are handled with professionalism and care.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
{{--    <section class="ftco-section ftco-no-pb ftco-no-pt">--}}
{{--    <div class="container py-3 ">--}}
{{--        <div class="row justify-content-start">--}}
{{--            <div class="col-lg-12">--}}
{{--                <article>--}}
{{--                    <div class="card border-0 border-radius-0 mb-3 shadow">--}}
{{--                        <div class="card-body  z-index-1">--}}
{{--                            <div class="card-body p-0">--}}
{{--                                <h3 class="card-title " style="line-height: 36px"> At EuroLegale , we’re committed to turning complex immigration processes into stress-free journeys &nbsp; Let’s get started today!</h3></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </section>--}}
    <section class="ftco-counter ftco-section ftco-no-pt  ftco-no-pb img py-4" id="section-counter">
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

    <section class="ftco-section ftco-no-pb ftco-no-pt" >
        <div class="container  " >
            <div class="row justify-content-start">
                <div class="col-lg-12">
                    <article>
                        <div class="card border-0 border-radius-0 mb-3 shadow " style="background-color: #163057FF ">
                            <div class="card-body  z-index-1">
                                <div class="card-body p-0">
                                    <h3 class="card-title " style="line-height: 42px;color: whitesmoke!important;font-size: 24px"> At EuroLegale , we’re committed to turning complex immigration processes into stress-free journeys &nbsp; Let’s get started today!</h3></h4>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

        <div>
            <div class="container py-4 mt-1   rounded">
                <section class="cta mb-5 shadow-lg rounded " style="background: url('{{asset('frontend/icons-images/cta.jpg')}}') center/cover no-repeat;">
                    <div class="cta-content ">
                        <div class="cta-text">
                            <h3 style="color: #ececec !important;font-family: PT Sans, sans-serif !important;">Apply for Your Visa Today!</h3>
                            <p style="color: #efefef !important;">Make your travel dreams a reality with our seamless visa application process!.</p>
                        </div>
                        <p class="mb-0 phone pl-md-2">
                            <a href="#" class="btn btn-primary py-3 px-5" style="font-size: 16px">Get a Free Assessment</a>
                        </p>
                    </div>

                </section>
            </div>
        </div>


    @include('frontend.partials.light-box')




@endsection
