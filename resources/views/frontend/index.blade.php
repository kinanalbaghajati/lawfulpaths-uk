@extends('frontend.base')
@section('content')
    <div class="hero-wrap px-4" style="background-image: url({{asset('frontend/icons-images/home.png')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container px-4">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text w-100">
                        <h1 class="mb-4"> Make the UK Your Home </h1>
                        <p class="mb-4">Expert immigration support that turns your British dreams <br>
                            into reality.</p>
                        <p><a href="{{route('contact-us')}}" class="btn btn-primary py-3 px-5" style="font-size: 18px">Get Your Free Assessment</a></p>
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
{{--            <div class="d-flex flex-column flex-sm-row">--}}
            <div class="row">
                <div class=" col-md-3 d-flex align-items-stretch ftco-animate">
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
                            <a href="#" class="learn-more p-2" style="margin-top: -10%">learn More</a>

                    </div>

                </div>
                <div class=" col-md-3 d-flex align-items-stretch ftco-animate">
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
                        <a href="{{route('family-visa')}}" class="learn-more p-2" style="margin-top: -10%">learn More</a>
                    </div>
                </div>
                <div class="  col-md-3 d-flex align-items-stretch ftco-animate">
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
                        <a href="#" class="learn-more p-2" style="margin-top: -10%">learn More</a>
                    </div>
                </div>
                <div class=" col-md-3  d-flex align-items-stretch ftco-animate">
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
                        <a href="{{route('work-visa')}}" class="learn-more p-2" style="margin-top: -10%">learn More</a>
                    </div>
                </div>
                <div class=" col-md-3 d-flex align-items-stretch ftco-animate">
{{--                    <div class="services-2 text-center">--}}
{{--                        <div class="icon-wrap">--}}
{{--                            <div class="mini-icon d-flex align-items-center justify-content-center">--}}
{{--                                <img src="{{asset('frontend/icons-images/family.png')}}" width="30" height="30">--}}
{{--                            </div>--}}
{{--                            <div class="icon d-flex align-items-center justify-content-center">--}}
{{--                                <img src="{{asset('frontend/icons-images/family.png')}}" width="90" height="90">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h2>Asylum </h2>--}}
{{--                        <a href="#" class="learn-more p-2" style="margin-top: -10%">learn More</a>--}}
{{--                    </div>--}}
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
                                    <p class="mb-4">"Thanks to the exceptional team at EuroLegal, my Skilled Worker visa was approved in just 4 weeks.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Hassan Ali</p>
                                            <span class="position">Work Visa</span>
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
                                    <p class="mb-4">After struggling with my Spouse visa application for months on my own,EuroLegal transformed the experience.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_2.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Alejandro Garcia</p>
                                            <span class="position">Spouse visa</span>
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
                                    <p class="mb-4">When my student visa had complications, EuroLegal stepped in with immediate solutions.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_4.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Diego Lopez</p>
                                            <span class="position">student visa </span>
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
                                    <p class="mb-4">As a startup founder, navigating the Innovator visa seemed daunting until I found EuroLegal.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Giovanni Rossi</p>
                                            <span class="position">Innovator visa </span>
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

    <section class="ftco-appointment ftco-section img" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});margin-bottom: 40px" id="home-contactus">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section heading-section-white">
                        <h2 class="mb-5" style="color:whitesmoke !important;">We Have Great Results</h2>

                        <div class="row mt-md-5">
                            <div class="col-lg-12">
                                <div class="services d-flex w-100">

                                    <div class="mini-icon d-flex align-items-center justify-content-center mb-4" >
                                        <img src="{{asset('frontend/icons-images/customer-journey.png')}}" width="60" height="60">
                                    </div>

                                    <div class="text pl-3">
                                        <h2 style="color:whitesmoke !important;">Guaranteed Results</h2>
                                        <p style="color:lightgrey">Ensuring outcomes that exceed expectations through our dedicated efforts and expertise.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="services d-flex w-100">
                                    <div class="mini-icon d-flex align-items-center justify-content-center mb-4">
                                        <img src="{{asset('frontend/icons-images/expert-team.png')}}" width="60" height="60">
                                    </div>

                                    <div class="text pl-3">
                                        <h2 style="color:whitesmoke !important;">Best Team</h2>
                                        <p style="color:lightgrey !important;">Our exceptional group of professionals dedicated to delivering top-tier service and results.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 half ftco-animate">
                    <h2 class="mb-4" style="color:whitesmoke !important;">Free Consultation</h2>
                    <form class="appointment"  method="post" action="{{route('contact.mail.index')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="subject" name="subject" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                          placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send message" class="btn btn-primary py-3 px-4" onclick="loadingBtn(this)">
                                </div>
                            </div>
                            <div class="col-md-12">
                                @if(session()->has('message_danger'))
                                    <div class="alert align-center">
                                        <p style="color: red;font-size: 14px!important;padding: 8px!important; background-color:whitesmoke;border-radius: 4px">{{ session()->get('message_danger') }}</p>
                                    </div>
                                @endif
                                @if(session()->has('message_suc'))
                                    <div class="alert align-center">
                                        <p style="color: green;font-size: 14px!important;padding: 8px!important; background-color:whitesmoke;border-radius: 4px">{{ session()->get('message_suc') }}</p>
                                    </div>
                                @endif.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

     @include('frontend.partials.blog')


    <script>
        function loadingBtn(element) {
            if (element.tagName.toLowerCase() == "button") {
                event.target.form.submit();
                element.disabled = true;
                element.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Loading...';
                element.setAttribute('type', 'button');
            } else if (element.tagName.toLowerCase() == "a") {
                element.disabled = true;
                element.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Loading...';
            } else if (element.tagName.toLowerCase() == "input") {
                element.disabled = true;
                element.value = 'Loading...';
                event.target.form.submit();
            }
        }

    </script>
@endsection

