@extends('frontend.base')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('frontend/icons-images/faq.jpg')}}');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>FAQ <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">FAQ</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">

<div class="container py-5 shadow">
    <h3 class="mb-3 bread">Frequently Asked Questions<span style="font-weight: bold "> Schengen Visit Visa</span></h3>
    <div class="faq">
        <div class="accordion">
            What is a Schengen Visit Visa?
            <i class="fa fa-arrow-up"></i>
        </div>
        <div class="pannel">
            <p class="py-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                ullam, iure eligendi harum eaque hic corporis debitis porro
                consectetur voluptate rem officiis architecto.
            </p>
        </div>
    </div>
    <div class="faq">
        <div class="accordion">
            How long can I stay in the Schengen Area with a Visit Visa?
            <i class="fa fa-arrow-up"></i>
        </div>
        <div class="pannel">
            <p class="py-3">
                Sustainable farming practices involve minimizing the environmental impact of agriculture, conserving natural resources, and promoting biodiversity.
            </p>
        </div>
    </div>
    <div class="faq">
        <div class="accordion">
            Can I work with a Schengen Visit Visa?
            <i class="fa fa-arrow-up"></i>
        </div>
        <div class="pannel">
            <p class="py-3">
                Sustainable farming practices involve minimizing the environmental impact of agriculture, conserving natural resources, and promoting biodiversity.
            </p>
        </div>
    </div>
    <div class="faq">
        <div class="accordion">
            How far in advance should I apply for a Schengen Visit Visa?
            <i class="fa fa-arrow-up"></i>
        </div>
        <div class="pannel">
            <p class="py-3">
                Sustainable farming practices involve minimizing the environmental impact of agriculture, conserving natural resources, and promoting biodiversity.
            </p>
        </div>
    </div>
</div>
{{--        <div class="divider" style="border-bottom: 2px solid #b4b3af; width: 58%;"></div>--}}
        <br>
        <br>
    <div class="container py-5 shadow">
        <h3 class="mb-3 bread">Frequently Asked Questions<span style="font-weight: bold "> UK Business Visa</span></h3>
        <div class="faq">
            <div class="accordion">
                What documents are required for a UK Business Visa application
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="pannel">
                <p class="py-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                    saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                    ullam, iure eligendi harum eaque hic corporis debitis porro
                    consectetur voluptate rem officiis architecto.
                </p>
            </div>
        </div>
        <div class="faq">
            <div class="accordion">
                Is it possible to convert a UK Business Visa to a work visa?
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="pannel">
                <p class="py-3">
                    Sustainable farming practices involve minimizing the environmental impact of agriculture, conserving natural resources, and promoting biodiversity.
                </p>
            </div>
        </div>
        <div class="faq">
            <div class="accordion">
                Can I travel to other countries in the European Union with a UK Business Visa?
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="pannel">
                <p class="py-3">
                    Sustainable farming practices involve minimizing the environmental impact of agriculture, conserving natural resources, and promoting biodiversity.
                </p>
            </div>
        </div>
    </div>
    </section>

    @include('frontend.partials.CallToAction')
    <script>
        const accordions = document.querySelectorAll('.accordion');
        const panels = document.querySelectorAll('.pannel');

        accordions.forEach((accordion, index) => {
            accordion.addEventListener('click', () => {
                panels[index].classList.toggle('show');
                if (panels[index].classList.contains('show')) {
                    panels[index].style.maxHeight = panels[index].scrollHeight + "px";
                    accordion.classList.add('active');
                } else {
                    panels[index].style.maxHeight = null;
                    accordion.classList.remove('active');
                }
            });
        });
    </script>


@endsection



