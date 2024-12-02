@extends('frontend.base')
@section('content')

    <link rel="stylesheet" href="{{asset('frontend/porto/css/theme-elements.css')}}">

    {{--    <link rel="stylesheet" href="{{asset('frontend/porto/css/demos/demo-business-consulting-2.css')}}">--}}

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('frontend/porto/css/skins/skin-business-consulting-2.css')}}">

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('frontend/icons-images/main-blog.jpg')}}');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Blog <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">Our Blog</h1>
                </div>
            </div>
        </div>
    </section>

<div class="container py-5">
    <div class="row justify-content-start">
        <div class="col-lg-9">

            <article>
                <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                    <div class="card-body p-4 z-index-1">
                        <a href="#">
                            <img class="card-img-top border-radius-0"
                                 src="{{asset('frontend/icons-images/blog1.jpg')}}" style="height: 340px;object-fit: cover"
                                 alt="Card Image">
                        </a>
                        <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                            <time pubdate datetime="2022-01-10">10 Jan 2022</time>
                            <span class="opacity-3 d-inline-block px-2">|</span> John Doe
                        </p>
                        <div class="card-body p-0">
                            <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                                                                                   href="#">An
                                    Interview with John Doe</a></h4>
                            <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                sollicitudin...</p>
                            <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                sollicitudin...</p>

                            {{--                                <a href="demo-business-consulting-2-blog-post.html"--}}
                            {{--                                   class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More--}}
                            {{--                                    +</a>--}}
                        </div>
                    </div>
                </div>
            </article>

            <article>
                <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                    <div class="card-body p-4 z-index-1">
                        <a href="#">
                            <img class="card-img-top border-radius-0" src="{{asset('frontend/icons-images/blog2.jpg')}}" style="height: 340px;object-fit: cover"
                                 alt="Card Image">
                        </a>
                        <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                            <time pubdate datetime="2022-01-10">10 Jan 2022</time>
                            <span class="opacity-3 d-inline-block px-2">|</span>  John Doe
                        </p>
                        <div class="card-body p-0">
                            <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                                                                                   href="demo-business-consulting-2-blog-post.html">How
                                    to Grow your Business</a></h4>
                            <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                sollicitudin...</p>

                            <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                sollicitudin...</p>
                            <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                sollicitudin...</p>
                            {{--                                    <a href="demo-business-consulting-2-blog-post.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>--}}
                        </div>
                    </div>
                </div>
            </article>

            <ul class="pagination pagination-rounded pagination-lg justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-right"></i></a></li>
            </ul>

        </div>
        <div class="col-lg-3">

                <h2>Recent Blog</h2>
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url({{asset('frontend/images/image_1.jpg')}});"></a>
                    <div class="text">
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing </a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="fa fa-calendar"></span> Jun 02, 2020</a></div>
                            <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                        </div>
                    </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url({{asset('frontend/images/image_2.jpg')}});"></a>
                    <div class="text">
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing </a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="fa fa-calendar"></span> Jun 02, 2020</a></div>
                            <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                        </div>
                    </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url({{asset('frontend/images/image_3.jpg')}});"></a>
                    <div class="text">
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="fa fa-calendar"></span> Jun 02, 2020</a></div>
                            <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                        </div>
                    </div>
                </div>
            <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{asset('frontend/images/image_3.jpg')}});"></a>
                <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing</a></h3>
                    <div class="meta">
                        <div><a href="#"><span class="fa fa-calendar"></span> Jun 02, 2020</a></div>
                        <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>

                    </div>
                </div>
            </div>
            </div>
        </div>

</div>

    <script src="{{asset('porto/frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/lazysizes/lazysizes.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('porto/frontend/vendor/vivus/vivus.min.js')}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('frontend/porto/js/theme.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('frontend/porto/js/views/view.contact.js')}}"></script>

    <!-- Demo -->
    <script src="{{asset('frontend/porto/js/demos/demo-business-consulting-2.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('frontend/porto/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('frontend/porto/js/theme.init.js')}}"></script>


@endsection
