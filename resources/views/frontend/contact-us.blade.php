@extends('frontend.base')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('frontend/icons-images/tickets-plane.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>Contact <span><i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper px-md-4">
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center shadow" style="background-color: #1d2d4f">
                                        <span class="fa fa-map-marker" style="font-size: 40px;color: #f6c65e"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span> 25 North Row London W1K 6DJ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center shadow" style="background-color: #1d2d4f">
                                        <span class="fa fa-phone" style="font-size: 40px;color: #f6c65e"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+44 2031 310212</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center shadow" style="background-color: #1d2d4f">
                                        <span class="fa fa-paper-plane " style="font-size: 40px;color: #f6c65e"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a  href="mailto:Fadoua@lawfulpaths.co.uk">Fadoua@lawfulpaths.co.uk</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center ">
                                    <div class="icon d-flex align-items-center justify-content-center shadow" style="background-color: #1d2d4f">
                                        <span class="fa fa-hourglass-3" style="font-size: 40px;color: #f6c65e"></span>
                                    </div>
                                    <div class="text ">
                                        	</span>
                                            Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED
                                            </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters ">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4  shadow-lg">
                                    <h2 class="mb-4">Contact Us</h2>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name" style="font-size: 16px">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email"  style="font-size: 16px">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject"  style="font-size: 16px">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#"  style="font-size: 16px">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary px-4 py-2">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 order-md-first d-flex align-items-stretch shadow-lg">
                                <div id="map" class="map shadow-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('frontend/js/scrollax.min.js')}}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
    <script src="{{asset('frontend/js/google-map.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

@endsection
