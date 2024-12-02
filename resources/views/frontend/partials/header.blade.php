<div class="wrap bg-dark-view pt-2 pb-2"  >
    <div class="container ">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-4 " style="font-size: 16px"><span class="fa fa-phone mr-1" style="font-size: 22px"></span> +00 1234 567</a>
                    <a href="#" style="font-size: 16px"><span class="fa fa-paper-plane mr-1 " style="font-size: 22px"></span> youremail@email.com</a>
                </p>
            </div>
            <div class="col-md-3 d-flex align-items-center ">
                <div class="social-media mobile">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center rounded-sm"><span
                                class="fa fa-twitter" style="font-size: 22px"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center rounded-sm"><span
                                class="fa fa-linkedin" style="font-size: 22px"><i class="sr-only">Instagram</i></span></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 d-flex  justify-content-md-end ">
                <p class="mb-0 phone pl-md-2 mobile">
                    <a href="{{route('contact-us')}}" class="btn btn-primary py-3 px-5"  style="font-size: 14px">Get a Free Consultation</a>
                </p>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light "
     style="background-color: #17243E !important;" id="ftco-navbar">
    <div class="container " >
         <div style="position: relative;">
        <a class="logo" href="{{route('home')}}"  ><img class="logo-img" src="{{asset('frontend/logo/Logo.png')}}" ></a>
         </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" style="font-size: 24px;color: whitesmoke"></i>
        </button>

        <div class="collapse navbar-collapse" style="background-color: #17243E !important;" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link" >Home</a></li>
                <li class="nav-item hover-item" onclick="drop()">
                    <a href="#" class="nav-link" style="position: relative">
                        <span >Get My Visa</span>
                    </a>

                    <ul  class="dropdown" id="drop" onclick="Drop()">
                        <li><a href="{{route('service-details')}}">United Kingdom Visitors Visa</a></li>
                        <li><a href="{{route('service-details')}}">United Kingdom ETA</a></li>
                        <li><a href="{{route('service-details')}}">USA B1/B2 Visitors Visa</a></li>
                        <li><a href="{{route('service-details')}}">United States ESTA</a></li>
                        <li><a href="{{route('service-details')}}">Schengen Visit Visa</a></li>
                        <li><a href="{{route('service-details')}}">Schengen ETIAS</a></li>
                        <li><a href="{{route('service-details')}}">United Kingdom Spouse Visa</a></li>
                        <li><a href="{{route('service-details')}}">Apply For a UK Student Visa</a></li>
                        <li><a href="{{route('service-details')}}">India Tourist e-Visa</a></li>
                        <li><a href="{{route('service-details')}}">China Tourist Visa</a></li>
                        <li><a href="{{route('service-details')}}">Self Sponsorship Skilled Worker</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="{{route('success-stories')}}" class="nav-link">Success Stories</a></li>
                <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item dropdown-submenu"><a href="{{route('about-us')}}" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="{{route('faq')}}" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link">Contact Us</a></li>


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
