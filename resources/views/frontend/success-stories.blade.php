@extends('frontend.base')
@section('content')

    <link rel="stylesheet" href="{{asset('frontend/porto/css/theme-elements.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/porto/css/demos/demo-business-consulting-2.css')}}">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontend/porto/css/theme.css')}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('frontend/porto/css/skins/skin-business-consulting-2.css')}}">


    <div  style="background-color: #FFFFFF">


    <section class="hero-wrap hero-wrap-2"
             style="background-image: url('{{asset('frontend/icons-images/happy-client.jpg')}}');"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span>Success Stories <span><i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">Our Happy Clients</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="real-word-stories  overflow-hidden  pt-5 pb-4">
        <div class="container">
            <div class="row justify-content-between pt-5 mb-2">
                <div class="col-lg-6 position-relative">
                    <div class="custom-testimonial-container bg-color-light mb-5 shadow">
                        <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                            <div
                                class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1 shadow">
                                <img src="{{asset('frontend/images/staff-3.jpg')}}" alt="Bullseye" class="rounded">
                                {{--                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
                            </div>
                            <blockquote class="px-0 pb-0">
                                <h4 class="text-color-secondary font-weight-bold text-start " style="text-align: left">
                                    Diego Lopez</h4>
                                <h5 class=" mt-1 " style="text-align: left;color: #e5b856!important;">Student visa</h5>
                                <p style="text-align: left !important;">"When my student visa had
                                    complications, EuroLegal stepped in with immediate solutions. "</p>


                                <p style="text-align: left !important;">"
                                    Their team's deep knowledge of university requirements and up-to-date immigration
                                    rules made all the difference.
                                    I'm now completing my Masters at LSE with peace of mind."</p>
                            </blockquote>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="custom-testimonial-container bg-color-light mb-5 shadow">
                        <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                            <div
                                class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1 shadow">
                                <img src="{{asset('frontend/images/staff-1.jpg')}}" alt="Bullseye" class="rounded">
                                {{--                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
                            </div>
                            <blockquote class="px-0 pb-0">
                                <h4 class="text-color-secondary font-weight-bold text-start " style="text-align: left">
                                    Hassan Ali</h4>
                                <h5 class=" mt-1 " style="text-align: left;color: #e5b856!important;">Work Visa</h5>
                                <p style="text-align: left !important;">"Thanks to the exceptional team at
                                    EuroLegal, my Skilled Worker visa was approved in just 4 weeks."</p>
                                <p style="text-align: left !important;">"They handled every
                                    document meticulously and were always available for my questions, even on weekends.
                                    It's clear why they have such a high success rate."</p>
                            </blockquote>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="custom-testimonial-container bg-color-light mb-5 shadow">
                        <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                            <div
                                class="d-none  d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1 shadow">
                                <img src="{{asset('frontend/images/staff-2.jpg')}}" alt="Bullseye" class="rounded ">

                                {{--                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
                            </div>
                            <blockquote class="px-0 pb-0">
                                <h4 class="text-color-secondary font-weight-bold text-start " style="text-align: left">
                                    Alejandro Garcia</h4>
                                <h5 class=" mt-1 " style="text-align: left;color: #e5b856!important;">Spouse visa</h5>
                                <p style="text-align: left !important;">"After struggling with my Spouse visa
                                    application for
                                    months on my own,EuroLegal
                                    transformed the experience." </p>
                                <p style="text-align: left !important;">" They spotted issues I'd missed,
                                    strengthened my evidence, and guided me through every step. Now my wife and I are
                                    finally together in Manchester – worth every penny." </p>
                            </blockquote>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="custom-testimonial-container bg-color-light mb-5 shadow">
                        <div class="testimonial custom-testimonial testimonial-style-2 mb-0 ">
                            <div
                                class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1 shadow">
                                <img src="{{asset('frontend/images/staff-4.jpg')}}" alt="Bullseye" class="rounded">
                            </div>
                            <blockquote class="px-0 pb-0">
                                <h4 class="text-color-secondary font-weight-bold text-start " style="text-align: left">
                                    Giovanni Rossi</h4>
                                <h5 class=" mt-1 " style="text-align: left;color: #e5b856!important;">Innovator
                                    visa</h5>
                                <p style="text-align: left !important;">"As a startup founder, navigating the Innovator
                                    visa
                                    seemed daunting until I found EuroLegal."
                                </p>
                                <p style="text-align: left !important;">"Their business immigration team didn't
                                    just handle my visa – they provided invaluable insights for my business plan and
                                    endorsement application. Six months later, my tech company is thriving in London."
                                </p>
                            </blockquote>

                        </div>
                    </div>
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
    </div>
@endsection
