@php

    $route = Request::route()->getName();
@endphp


<div class="wrap bg-dark-view pt-2 pb-2">
    <div class="container ">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-4 " style="font-size: 16px"><span class="fa fa-phone mr-1"
                                                                            style="font-size: 22px"></span> +44 2031 310212</a>
                    <a href="#" style="font-size: 16px"><span class="fa fa-paper-plane mr-1 "
                                                                  style="font-size: 22px"></span> Fadoualegal@gmail.com</a>
                </p>
            </div>
            <div class="col-md-3 d-flex align-items-center ">
                <div class="social-media mobile">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center rounded-sm"><span
                                class="fa fa-twitter" style="font-size: 22px"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center rounded-sm"><span
                                class="fa fa-linkedin" style="font-size: 22px"><i
                                    class="sr-only">Instagram</i></span></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 d-flex  justify-content-md-end ">
                <p class="mb-0 phone pl-md-2 mobile">
                    <a href="{{route('contact-us')}}" class="btn btn-primary py-3 px-5" style="font-size: 14px">Get a
                        Free Assessment</a>
                </p>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light "
     style="background-color: #17243E !important;" id="ftco-navbar">
    <div class="container ">
        <div style="position: relative;">
            <a class="logo" href="{{route('home')}}">
                <img class="logo-img" src="{{asset('frontend/logo/Logo.png')}}">
                <img class="logo-img-mobile" src="{{asset('frontend/logo/mobile.png')}}" width="70" height="70">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" style="font-size: 24px;color: whitesmoke"></i>
        </button>

        <div class="collapse navbar-collapse" style="background-color: #17243E !important;" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if($route == 'home') active @endif"><a href="{{route('home')}}" class="nav-link" style="text-decoration: none!important;">Home</a></li>
                <li class="nav-item hover-item @if($route == 'work-visa' || $route == 'family-visa') active @endif" onclick="drop()">
                    <a href="#" class="nav-link " style="position: relative;text-decoration: none!important;">
                        <span>Get My Visa</span>
                    </a>

                    <ul class="dropdown" id="drop" onclick="Drop()">
                        <li><a href="{{route('family-visa')}}" style="text-decoration: none!important;">Family Visas</a></li>
                        <li><a href="{{route('work-visa')}}" style="text-decoration: none !important;">Work Visas</a></li>
                        <li><a href="{{route('study-visa')}}" style="text-decoration: none!important;">Study Visas</a></li>
                        <li><a href="{{route('service-details')}}" style="text-decoration: none!important;">Business Immigration</a></li>
                        <li><a href="{{route('service-details')}}" style="text-decoration: none!important;">UK Asylum</a></li>
                    </ul>
                </li>

                <li class="nav-item @if($route == 'success-stories') active @endif"><a href="{{route('success-stories')}}" class="nav-link" style="text-decoration: none!important;">Success Stories</a></li>
                <li class="nav-item @if($route == 'blog') active @endif"><a href="{{route('blog')}}" class="nav-link" style="text-decoration: none!important;">Blog</a></li>
                <li class="nav-item dropdown-submenu @if($route == 'about-us') active @endif"><a href="{{route('about-us')}}" class="nav-link" style="text-decoration: none!important;">About Us</a></li>
                <li class="nav-item @if($route == 'faq') active @endif"><a href="{{route('faq')}}" class="nav-link" style="text-decoration: none!important;">FAQ</a></li>
                <li class="nav-item @if($route == 'contact-us') active @endif" ><a href="{{route('contact-us')}}" class="nav-link" style="text-decoration: none!important;">Contact Us</a></li>


            </ul>
        </div>
    </div>
</nav>

<script>
    function drop() {
        var screenWidth = window.innerWidth;
        if (screenWidth <= 600) {
            var dropElement = document.getElementById('drop');
            if (dropElement.style.display === "none" || dropElement.style.display === "") {
                dropElement.style.display = "block";
            } else {
                dropElement.style.display = "none";
            }
        }
    }
</script>
