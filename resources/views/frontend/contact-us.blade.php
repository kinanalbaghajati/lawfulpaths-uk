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

    <section class="ftco-section" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper px-md-4">
                        <div id="home-contactus"></div>
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
                                        <p><span>Email:</span> <a  href="mailto:Info@lawfulpaths.co.uk">Info@lawfulpaths.co.uk</a></p>
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
                            <div class="col-md-7" >
                                <div class="contact-wrap w-100 p-md-5 p-4  shadow-lg">
                                    <h2 class="mb-4">Contact Us</h2>
                                    <form  method="post" action="{{route('contact.mail')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name" style="font-size: 16px">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email"  style="font-size: 16px">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject"  style="font-size: 16px">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#"  style="font-size: 16px">Message</label>
                                                    <textarea required name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="submit"  class="btn btn-primary px-4 py-2"  onclick="loadingBtn(this)">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 justify-content-center" >
                                                @if(session()->has('message_danger'))
                                                    <div class="alert align-center">
                                                        <p style="color: red;font-size: 14px!important;padding: 0!important;">{{ session()->get('message_danger') }}</p>
                                                    </div>
                                                @endif
                                                @if(session()->has('message_suc'))
                                                    <div class="alert align-center">
                                                        <p style="color: green;font-size: 14px!important;padding: 0!important;">{{ session()->get('message_suc') }}</p>
                                                    </div>
                                                @endif.

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
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat:51.51422973895267 , lng: -0.15588683294805045 },
                zoom: 8


            });
            const marker = new google.maps.Marker({
                position: {lat:51.51422973895267 , lng: -0.15588683294805045 },
                map: map,
                title: "Marker Title",
            });

        }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.8/mapsJavaScriptAPI.js" async defer></script>


{{--    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>--}}
    <script src="{{asset('frontend/js/google-map.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

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
