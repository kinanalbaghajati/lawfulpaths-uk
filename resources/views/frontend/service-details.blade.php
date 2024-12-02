@extends('frontend.base')
@section('content')
    {{--    MOBILE MOBILE MOBILE MOBILE --}}
    {{--    <section class="service-mobile" style="background-image: url('{{asset('frontend/icons-images/service.jpg')}}'); background-size: cover; background-position: center; width: 100vw;">--}}
    <section class="service-mobile"
             style="background-image: url('{{asset('frontend/icons-images/service.jpg')}}'); background-size: cover; background-position: center;">
        <div class="row justify-content-around px-3">
            <div class="col-md-6 col-sm-12">
                <div class="first-div">
                    <h1 class="font-h" style="color: #E5B856 !important; font-size: 36px; text-align: center;">Schengen
                        Visa</h1>
                    <div class="ml-2">
                        <h2 class="font-s" style="color: #e0dede !important; width: 100%; text-align: start;">
                            The Fastest Way To Get Your Schengen Visa
                            Apply Now For Your Schengen Visa
                        </h2>
                        <h2 class="lead fw-bold pt-3"
                            style="color: #e0dede !important; font-size: 20px; text-align: center;">Apply in 3 Easy
                            Steps!</h2>
                        <ul style="list-style: none; padding: 0; text-align: start;">
                            <li style="color: whitesmoke !important; font-size: 18px;">1. Complete The Application Form
                                Pay Your Fees
                            </li>
                            <li style="color: whitesmoke !important; font-size: 18px;">2. Pay Your Fees</li>
                            <li style="color: whitesmoke !important; font-size: 18px;">3. Send Your Documents To Us</li>
                        </ul>
                        <h2 style="color: #E5B856 !important; padding-top: 16px; text-align: start;">TrustPilot</h2>
                        <div class="rate d-flex justify-content-center align-items-center" style="display: flex;justify-content: center !important;">

                            <input type="radio" id="star5" name="rate" value="5"/>
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" checked value="4"/>
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3"/>
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2"/>
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1"/>
                            <label for="star1" title="text">1 star</label>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="first-div">

                    <div class="bg-text">
                        <h1 class="font-h" style="color: #ffc54f !important; text-align: center;margin-top: 8px">Schengen Visit
                            Visa</h1>
                        <div class="divider"></div>
                        <div class="py-2 d-flex justify-content-center" style="gap: 2rem">
                            <img src="{{asset('frontend/icons-images/visa-clender.png')}}" width="60" height="60" >
                            <div class="d-flex flex-column justify-content-start align-items-start">
                                <h3 class="font-h" style="color: #d7a742 !important;">Valid For</h3>
                                <h4 class="font-s" style="color: whitesmoke !important;">90 days after issued</h4>
                            </div>
                        </div>
                        <div class="py-2 d-flex justify-content-center" style="gap: 2rem">
                            <img src="{{asset('frontend/icons-images/plane.png')}}" width="60" height="60" >
                            <div class="d-flex flex-column justify-content-start align-items-start">
                                <h3 class="font-h" style="color: #d7a742 !important;">
                                    Number of Entries</h3>
                                <h4 class="font-s" style="color: whitesmoke !important;">Multiple Entry</h4>
                            </div>
                        </div>
                        <div class="py-2 d-flex justify-content-center" style="gap: 2rem">
                            <img src="{{asset('frontend/icons-images/valid.png')}}" width="60" height="60" >
                            <div class="d-flex flex-column justify-content-start align-items-start">
                                <h3 class="font-h" style="color: #d7a742 !important;">
                                    Max Stay</h3>
                                <h4 class="font-s" style="color: whitesmoke !important;">90 days in every 180 days</h4>
                            </div>
                        </div>

                        <div class="text-center my-4">
                            <a href="{{route('contact-us')}}" class="btn btn-primary py-2 px-4" style="font-size: 16px;">Get a Free
                                Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{--   Laptop Laptop Laptop Laptop--}}
    <section class="service " style="background-image: url('{{asset('frontend/icons-images/service.jpg')}}');background-size: cover;
        background-position: center; width: 100vw;">
        <div class="row justify-content-around  px-5">
            <div class="col-md-6 col-sm-12 justify-content-start ml-5">
                <div class="first-div justify-content-start">
                    <h1 class="font-h" style="color: #E5B856!important;font-size: 50px;font-family: PT Sans, sans-serif !important;">Schengen Visa</h1>
                    <div class="ml-4">
                        <h2 style="color: #e0dede !important;width: 70%;font-family: PT Sans, sans-serif !important;">
                            The Fastest Way To Get Your Schengen Visa
                            Apply Now For Your Schengen Visa</h2>
                        <h2 class="lead fw-bold pt-4" style="color: #e0dede!important;font-size: 26px;font-family: PT Sans, sans-serif !important;">Apply in 3 Easy
                            Steps!</h2>

                        <ul style="list-style: none">
                            <li style="color: whitesmoke !important;font-size: 22px">1.&nbsp; Complete The
                                Application Form Pay Your Fees
                            </li>

                            <li style="color: whitesmoke !important;font-size: 22px">2.&nbsp;Pay Your Fees</li>

                            <li style="color: whitesmoke !important;font-size: 22px">3.&nbsp;Send Your Documents To Us
                            </li>
                        </ul>
                        <h2 style="color: #E5B856 !important;padding-top: 24px">TrustPilot</h2>
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5"/>
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" checked value="4"/>
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3"/>
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2"/>
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1"/>
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="first-div">
                    <div class="blur-div">
                        <div class="bg-text">
                            <h1 class="font-h" style="color: #ffc54f !important;">Schengen Visit Visa</h1>
                            <div class="divider"></div>
                            <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">
                                <img src="{{asset('frontend/icons-images/visa-clender.png')}}" width="70" height="70">
                                <div class="d-flex flex-column justify-content-start align-items-start">
                                    <h3 class="font-h" style="color: #d7a742 !important;">Valid For</h3>
                                    <h4 class="font-s" style="color: whitesmoke !important;">90 days after issued</h4>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">
                                <img src="{{asset('frontend/icons-images/plane.png')}}" width="70" height="70">
                                <div class="d-flex flex-column justify-content-start align-items-start">
                                    <h3 class="font-h" style="color: #d7a742 !important;">
                                        Number of Entries</h3>
                                    <h4 class="font-s" style="color: whitesmoke !important;">Multiple Entry</h4>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">
                                <img src="{{asset('frontend/icons-images/valid.png')}}" width="70" height="70">
                                <div class="d-flex flex-column justify-content-start align-items-start">
                                    <h3 class="font-h" style="color: #d7a742 !important;">
                                        Max Stay</h3>
                                    <h4 class="font-s" style="color: whitesmoke !important;">90 days in every 180 days</h4>
                                </div>
                            </div>

                            <div class="align-self-center my-4">
                                <a href="{{route('contact-us')}}" class="btn btn-primary py-3 px-5" style="font-size: 20px">Get a Free
                                    Consultation</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container py-5">
            <h1 style="color: #d7a742 !important;">First Title </h1>
            <div class="d-flex">
                <div class="col">
                    <h5 class="pt-3 fw-bold " style="font-size: 28px; font-family: PT Sans, sans-serif;">Sub Title</h5>
                    <p class="text-start" style="color: #181818">Left pellentesque pellentesque eget tempor tellus.
                        Fusce lacllentesque eget
                        tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor
                        pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Pellentesque
                        pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus.</p>

                    <div class="d-flex justify-content-between pt-4 flex-lg-row flex-column-reverse " style="gap: 16px">
                        <p class="text-start w-100 w-lg-50" style="color: #181818">
                            Center pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor ellentesque pellentesque eget tempor tellus pellentesque pellentesque eget tempor tellus. Fusce eget tempor tellus ellentesque pellentesque eget tempor tellus.
                        </p>
                        <img src="{{asset('frontend/icons-images/first-image.jpg')}}" class="img-fluid" width="300" height="300" alt="Service Image">
                    </div>
                    <h5 class="pt-3" style="font-size: 28px">Sub Title</h5>
                    <p class="text-end" style="color: #181818">Right pellentesque pellentesque eget tempor tellus. Fusce
                        lacllentesque eget
                        tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor
                        pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Pellentesque
                        pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus.</p>

                </div>
            </div>
        </div>
    </section>
    {{--    <div class="divider"></div>--}}
    @include('frontend.partials.CallToAction')
    <div class="container py-5">
        <h1 style="color: #d7a742 !important;">Second Title </h1>
        <div class="d-flex">
            <div class="col">
                <h5 class="pt-3 fw-bold " style="font-size: 28px">Sub Title</h5>
                <div class="d-flex justify-content-around">
                    <div>
                        <ul style="color: #181818;font-size: 20px">
                            <li>USA</li>
                            <li>Canada</li>
                            <li>Germany</li>
                            <li>Japan</li>
                            <li>France</li>
                            <li>Australia</li>
                            <li>Brazil</li>
                            <li>India</li>
                            <li>Italy</li>
                            <li>UK</li>

                        </ul>
                    </div>
                    <div>
                        <ul style="color: #181818;font-size: 20px">
                            <li>Australia</li>
                            <li>Spain</li>
                            <li>South Africa</li>
                            <li>South Korea</li>
                            <li>Mexico</li>
                            <li>Russia</li>
                            <li>Sweden</li>
                            <li>Argentina</li>
                            <li>Netherlands</li>
                            <li>Singapore</li>
                        </ul>
                    </div>
                    <div>
                        <ul style="color: #181818;font-size: 20px">
                            <li>USA</li>
                            <li>Canada</li>
                            <li>Germany</li>
                            <li>Japan</li>
                            <li>France</li>
                            <li>Australia</li>
                            <li>Brazil</li>
                            <li>India</li>
                            <li>Italy</li>
                            <li>UK</li>

                        </ul>
                    </div>
                    <div>
                        <ul style="color: #181818;font-size: 20px">
                            <li>Australia</li>
                            <li>Spain</li>
                            <li>South Africa</li>
                            <li>South Korea</li>
                            <li>Mexico</li>
                            <li>Russia</li>
                            <li>Sweden</li>
                            <li>Argentina</li>
                            <li>Netherlands</li>
                            <li>Singapore</li>
                        </ul>
                    </div>
                </div>
                <p class="text-justify pt-2" style="color: #181818">Justify pellentesque pellentesque eget tempor
                    tellus. Fusce lacllentesque
                    eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor
                    eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor
                    .</p>
            </div>
        </div>
    </div>

@endsection


