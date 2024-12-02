@extends('frontend.base')
@section('content')
    <div class="hero-wrap px-4" style="background-image: url({{asset('frontend/icons-images/home.png')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container px-4">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text w-100">
                        <h1 class="mb-4">Trusted UK Immigration Experts</h1>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <p><a href="{{route('contact-us')}}" class="btn btn-primary py-3 px-5" style="font-size: 18px">Get a Free Consultation</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-intro ml-3 ">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex">
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
                <div class="col-md-3 d-flex">
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
                <div class="col-md-3 d-flex">
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
                <div class="col-md-3 d-flex">
                    <div class="intro color-4 d-lg-flex w-100">
                        <div class="icon">
                            <img src="{{asset('frontend/icons-images/stamp.png')}}" width="80" height="80">
                        </div>
                        <div class="text">
                            <h2 style="color: whitesmoke !important;">Your getaway to brighter future</h2>
                            <p> symbolizing our role in facilitating your path to a more promising tomorrow.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Discover our Scope</span>
                    <h2>What We Cover</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/icons-images/business.png')}}" width="30" height="30">
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                               <img src="{{asset('frontend/icons-images/business.png')}}" width="95" height="95">
                            </div>
                        </div>
                        <h2>Business Visa</h2>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/icons-images/family.png')}}" width="30" height="30">
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/icons-images/family.png')}}" width="90" height="90">
                            </div>
                        </div>
                        <h2>Family Visa</h2>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="icon-wrap">
                                <div class="mini-icon d-flex align-items-center justify-content-center">
                                    <img src="{{asset('frontend/icons-images/study.png')}}" width="30" height="30">
                                </div>
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <img src="{{asset('frontend/icons-images/study.png')}}" width="95" height="95">
                                </div>
                            </div>
                        </div>
                        <h2>Study Visa</h2>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="mini-icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/icons-images/work.png')}}" width="30" height="30">
                            </div>
                            <div class="icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/icons-images/work.png')}}" width="95" height="95">
                            </div>
                        </div>
                        <h2>Work Visa</h2>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section">

        <div class="img img-bg" style="background-image: url({{asset('frontend/images/bg_4.jpg')}});"></div>
        <div class="overlay"></div>
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Success Stories</span>
                    <h2 class="mb-3" style="color: whitesmoke !important;">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_2.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_2.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     @include('frontend.partials.cta')

{{--    blog--}}
     @include('frontend.partials.blog')

@endsection


<!--<section class="ftco-section ftco-no-pt ftco-no-pb">-->
<!--    <div class="container-fluid px-md-4">-->
<!--        <div class="row justify-content-center pb-5">-->
<!--            <div class="col-md-8 text-center heading-section ftco-animate">-->
<!--                <span class="subheading">Cases</span>-->
<!--                <h2 class="mb-3">Recent Case Studies</h2>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-3 d-flex align-items-stretch">-->
<!--                <div class="case-wrap d-flex">-->
<!--                    <div class="img" style="background-image: url(images/case-1.jpg);">-->
<!--                        <div class="text">-->
<!--                            <h2>Business Law</h2>-->
<!--                            <p>Far far away, behind the word</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 d-flex align-items-stretch">-->
<!--                <div class="case-wrap d-flex">-->
<!--                    <div class="img" style="background-image: url(images/case-2.jpg);">-->
<!--                        <div class="text">-->
<!--                            <h2>Criminal Offense</h2>-->
<!--                            <p>Far far away, behind the word</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 d-flex align-items-stretch">-->
<!--                <div class="case-wrap d-flex">-->
<!--                    <div class="img" style="background-image: url(images/case-3.jpg);">-->
<!--                        <div class="text">-->
<!--                            <h2>Dispute Resolution</h2>-->
<!--                            <p>Far far away, behind the word</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-md-3 d-flex align-items-stretch">-->
<!--                <div class="case-wrap d-flex">-->
<!--                    <div class="img" style="background-image: url(images/case-4.jpg);">-->
<!--                        <div class="text">-->
<!--                            <h2>Business Law</h2>-->
<!--                            <p>Far far away, behind the word</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 d-flex align-items-stretch">-->
<!--                <div class="case-wrap d-flex">-->
<!--                    <div class="img" style="background-image: url(images/case-5.jpg);">-->
<!--                        <div class="text">-->
<!--                            <h2>Business Law</h2>-->
<!--                            <p>Far far away, behind the word</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 d-flex align-items-stretch">-->
<!--                <div class="case-wrap d-flex">-->
<!--                    <div class="img" style="background-image: url(images/case-6.jpg);">-->
<!--                        <div class="text">-->
<!--                            <h2>Business Law</h2>-->
<!--                            <p>Far far away, behind the word</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 d-flex align-items-stretch">-->
<!--                <div class="case-wrap d-flex">-->
<!--                    <div class="img" style="background-image: url(images/case-7.jpg);">-->
<!--                        <div class="text">-->
<!--                            <h2>Business Law</h2>-->
<!--                            <p>Far far away, behind the word</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<!--

why should hire us -->
<!--
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="img img-3 w-100 d-flex justify-content-center align-items-center"
                     style="background-image: url(images/about-1.jpg); position: relative;">
                    <a href="https://vimeo.com/45830194"
                       class="play-video popup-vimeo d-flex align-items-center justify-content-center">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="bg-light px-3 px-md-5 py-5 ">
                    <div class="heading-section">
                        <span class="subheading">Welcome to Law Firm</span>
                        <h2 class="mb-3">Why to Put Trust Your Trust In Law Firm</h2>

                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services d-flex w-100">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-lawyer"></span>
                                </div>
                                <div class="text pl-2">
                                    <h2>Expert Attorneys</h2>
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex w-100">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-discount"></span>
                                </div>
                                <div class="text pl-2">
                                    <h2>Great Discount</h2>
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex w-100">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-auction"></span>
                                </div>
                                <div class="text pl-2">
                                    <h2>Legal Advisory</h2>
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex w-100">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-handcuffs"></span>
                                </div>
                                <div class="text pl-2">
                                    <h2>Quick Charges</h2>
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>-->





<!--counter-->

<!--<section class="ftco-counter ftco-section ftco-no-pt mt-4 ftco-no-pb img" id="section-counter">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">-->
<!--                <div class="block-18 py-4 w-100">-->
<!--                    <span class="icon flaticon-checklist"></span>-->
<!--                    <div class="text align-items-center">-->
<!--                        <strong class="number" data-number="3000">0</strong>-->
<!--                        <span>Trusted Clients</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">-->
<!--                <div class="block-18 py-4 w-100">-->
<!--                    <span class="icon flaticon-checklist"></span>-->
<!--                    <div class="text align-items-center">-->
<!--                        <strong class="number" data-number="1000">0</strong>-->
<!--                        <span>Honor's &amp; Awards</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">-->
<!--                <div class="block-18 py-4 w-100">-->
<!--                    <span class="icon flaticon-checklist"></span>-->
<!--                    <div class="text align-items-center">-->
<!--                        <strong class="number" data-number="2000">0</strong>-->
<!--                        <span>Expert Lawyers</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">-->
<!--                <div class="block-18 py-4 w-100">-->
<!--                    <span class="icon flaticon-checklist"></span>-->
<!--                    <div class="text align-items-center">-->
<!--                        <strong class="number" data-number="10540">0</strong>-->
<!--                        <span>Successful Cases</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5">--}}
{{--            <div class="col-md-7 heading-section text-center ftco-animate">--}}
{{--                <span class="subheading">Blog</span>--}}
{{--                <h2>Recent Blog</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row d-flex">--}}
{{--            <div class="col-md-4 d-flex ftco-animate">--}}
{{--                <div class="blog-entry justify-content-end">--}}
{{--                    <div class="text text-center">--}}
{{--                        <a href="blog-single.html" class="block-20 img d-flex align-items-center"--}}
{{--                           style="background-image: url('images/image_1.jpg');">--}}
{{--                            <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">--}}
{{--                                <div>--}}
{{--                                    <span class="day">02</span>--}}
{{--                                    <span class="mos">June</span>--}}
{{--                                    <span class="yr">2020</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary--}}
{{--                            regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 d-flex ftco-animate">--}}
{{--                <div class="blog-entry justify-content-end">--}}
{{--                    <div class="text text-center">--}}
{{--                        <a href="blog-single.html" class="block-20 img d-flex align-items-center"--}}
{{--                           style="background-image: url('images/image_2.jpg');">--}}
{{--                            <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">--}}
{{--                                <div>--}}
{{--                                    <span class="day">02</span>--}}
{{--                                    <span class="mos">June</span>--}}
{{--                                    <span class="yr">2020</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary--}}
{{--                            regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 d-flex ftco-animate">--}}
{{--                <div class="blog-entry justify-content-end">--}}
{{--                    <div class="text text-center">--}}
{{--                        <a href="blog-single.html" class="block-20 img d-flex align-items-center"--}}
{{--                           style="background-image: url('images/image_3.jpg');">--}}
{{--                            <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">--}}
{{--                                <div>--}}
{{--                                    <span class="day">02</span>--}}
{{--                                    <span class="mos">June</span>--}}
{{--                                    <span class="yr">2020</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a mb-3></h3>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary--}}
{{--                            regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
