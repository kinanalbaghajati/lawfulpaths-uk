@extends('frontend.base')
@section('content')
    <section class="hero-wrap hero-wrap-2"
             style="background-image: url('{{asset('frontend/icons-images/service.jpg')}}')"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Services <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Business Immigration <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">Business Immigration</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="row px-5">
            <div class="col-md-8">
                <div class="container mt-4 shadow rounded" style="border:3px solid #1d3f73!important;">
                    <div class="d-flex justify-content-start px-2">
                        <div class="icon d-flex align-items-center justify-content-center p-4 align-items-end">
                            <img src="{{asset('frontend/icons-images/business.png')}}" width="55" height="55">
                        </div>
                        <div class="mt-auto">
                            <h2 style="color: #d7a742 !important;" class="py-4 px-2 text-center">Business
                                Immigration</h2>
                        </div>

                    </div>
                    <div class="d-flex">
                        <div class="col px-4 pb-4">
                            <h5 class="px-2">• The United Kingdom is one of the world's leading economic hubs, making it
                                an
                                attractive
                                destination for entrepreneurs, investors, and business professionals. </h5>
                            <h5 class="px-2">
                                • The UK Business Visa offers various pathways to those looking to establish, expand,
                                or manage their business ventures in the UK.
                            </h5>
                            <h5 class="px-2">• These visa programs provide unparalleled access to a dynamic market,
                                innovative
                                industries, and a globally connected economy. </h5>
                        </div>
                    </div>
                </div>
                <div class="container mt-4 shadow rounded">
                    <h2 style="color: #d7a742 !important;" class="py-4 px-4">What is a Business Visa ? </h2>
                    <div class="d-flex px-4 pb-4">
                        <div class="col">

                            <h5 class="text-start">• A UK business visa allows interested individuals to stay in the UK
                                and carry out overseas business related activities. </h5>
                            <h5 class="text-start">• Under the present UK immigration business rules, there are several
                                kinds of business visas. </h5>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="bg-text mt-4 py-3">
                    <h2 class="" style="color: #ffc54f !important;">How to Get Started?</h2>
                    <div class="divider"></div>
                    <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">
                        <img src="{{asset('frontend/icons-images/elg.png')}}" width="50" height="50">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <h4 style="color: #d7a742 !important;">Eligibility Check</h4>
                            <h6 style="text-align: left;color: whitesmoke !important;">We’ll assess your profile and
                                recommend the best visa option for your goals</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">
                        <img src="{{asset('frontend/icons-images/timekeeping.png')}}" width="50" height="50">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <h4 style="color: #d7a742 !important;">Prepare Your Documents</h4>
                            <h6 style="text-align: left;color: whitesmoke !important;">Collect documents like
                                relationship proof, income statements, accommodation evidence, and proof of English
                                proficiency.</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">
                        <img src="{{asset('frontend/icons-images/plane.png')}}" width="50" height="50">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <h4 style="color: #d7a742 !important;">Move Abroad</h4>
                            <h6 style="text-align: left;color: whitesmoke !important;">Once your visa is approved, we’ll
                                help you with pre-departure tips and settling-in advice.</h6>
                        </div>
                    </div>


                    <div class="align-self-center my-4">
                        <a href="{{route('contact-us')}}" class="btn btn-primary py-3 px-5" style="font-size: 20px">Get
                            a Free
                            Consultation</a>
                    </div>


                </div>
            </div>

        </div>
        <div class="row mx-5">
            {{--                style="border:3px solid #1d3f73!important;"--}}
            <div class="container-fluid py-5 mt-4 shadow ml-4">
                <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Types of UK Business Visas:</h2>
                <div class="d-flex">
                    <div class="col">
                        <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">The UK offers several
                            visa options for individuals seeking business opportunities. Below are the main
                            categories:</h5>
                        <div class="row pt-3">

                            <div class="col-md-4">
                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">1. Start-Up Visa:</h4>
                                <h5 class="pt-1 px-4 pb-2 "
                                    style="font-size: 18px; font-family: PT Sans, sans-serif;">The Start-Up Visa is
                                    designed for aspiring entrepreneurs who want to establish a business for the
                                    first time in the UK. </h5>
                                <ul>
                                    <li class="py-2">
                                        <h5>Key Requirements:</h5>
                                        <ul>
                                            <li>Requires no initial investment.
                                            </li>
                                            <li>Your business idea must be innovative, viable, and scalable and endorsed
                                                by an approved body.
                                            </li>
                                            <li>Valid for two years, after which you can switch to an Innovator Visa.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">2. Global Business Mobility
                                    Visa:</h4>
                                <h5 class="pt-1 px-4 pb-2 "
                                    style="font-size: 18px; font-family: PT Sans, sans-serif;">Designed for
                                    multinational companies transferring employees to the UK. </h5>
                                <ul>
                                    <li class="py-2">
                                        <h5>Key Features:</h5>
                                        <ul>
                                            <li>Suitable for senior executives and specialists.
                                            </li>
                                            <li>Ideal for temporary assignments or expanding operations in the UK.
                                            </li>
                                            <li>Includes five categories: Senior/Specialist Worker, Graduate Trainee, UK
                                                Expansion Worker, and Secondment Worker.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">3. Investor Visa (Tier 1):</h4>
                                <h5 class="pt-1 px-4 pb-2 "
                                    style="font-size: 18px; font-family: PT Sans, sans-serif;">For high-net-worth
                                    individuals making significant financial investments in the UK economy. </h5>
                                <ul>
                                    <li class="py-2">
                                        <h5>Key Requirements:</h5>
                                        <ul>
                                            <li>Requires a minimum investment of £2 million.
                                            </li>
                                            <li>Offers a fast-track route to settlement depending on the investment
                                                amount (£5 million for three years, £10 million for two years).
                                            </li>
                                            <li>No requirement to run a business actively.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>


                        </div>
                        <div class="row justify-content-around pt-3">
                            <div class="col-md-4">
                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">4. Innovator Visa:</h4>
                                <h5 class="pt-1 px-4 pb-2 "
                                    style="font-size: 18px; font-family: PT Sans, sans-serif;">The Innovator
                                    Visa is for experienced entrepreneurs looking to establish an innovative
                                    business in the UK. </h5>
                                <ul>
                                    <li class="py-2">
                                        <h5>Key Requirements:</h5>
                                        <ul>
                                            <li>You must have an innovative, viable, and scalable business idea
                                                endorsed by an approved body.
                                            </li>
                                            <li>Requires a minimum investment of £50,000.
                                            </li>
                                            <li>Offers a pathway to settlement after three years.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">5. Sole Representative
                                    Visa:</h4>
                                <h5 class="pt-1 px-4 pb-2 "
                                    style="font-size: 18px; font-family: PT Sans, sans-serif;">This visa is for senior
                                    employees of an overseas business looking to set up a branch or subsidiary in the
                                    UK. </h5>
                                <ul>
                                    <li class="py-2">
                                        <h5>Key Features:</h5>
                                        <ul>
                                            <li>The applicant must be a sole representative of the parent company.
                                            </li>
                                            <li>Ideal for companies expanding their global footprint.
                                            </li>
                                            <li>Allows for family dependents to accompany the applicant.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-5">
            {{--                style="border:3px solid #1d3f73!important;"--}}
            <div class="container-fluid py-5 mt-4 shadow ml-4">
                <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Eligibility Requirements for UK Business
                    Visas:</h2>
                <div class="d-flex">
                    <div class="col">
                        <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">While each visa has
                            its unique requirements, common criteria include:</h5>
                        <div class="row px-3">
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Endorsement:</h5>
                                        <ul>
                                            <li>For Innovator and Start-Up visas, you need approval from an
                                                endorsing body recognized by the UK government.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Financial Resources</h5>
                                        <ul>
                                            <li>Depending on the visa type, proof of personal and investment funds
                                                may be required.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Business Plan</h5>
                                        <ul>
                                            <li>A detailed and credible business plan showcasing innovation,
                                                scalability, and economic viability.
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6 pl-5">
                                <ul>
                                    <li class="py-2"><h5>English Language Proficiency:</h5>
                                        <ul>
                                            <li>Applicants must meet the required English language standards.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Other Documentation</h5>
                                        <ul>
                                            <li>Valid passport and travel history.
                                            </li>
                                            <li>Evidence of business experience and financial standing.
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-5 ">

            {{--                style="border:3px solid #1d3f73!important;"--}}
            <div class="container-fluid py-4 mt-4 shadow ml-4" style="border:3px solid #1d3f73!important;">
                <h2 style="color: #d7a742 !important;" class="px-4 pb-2">How EuroLegal Can Help:</h2>
                <div class="d-flex">
                    <div class="col">
                        <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">At EuroLegal we
                            provide end-to-end assistance for UK Business Visas:</h5>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Personalized Consultation</h5>
                                        <ul>
                                            <li>
                                                Identify the best visa program based on your profile and goals.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Documentation Support</h5>
                                        <ul>
                                            <li>Help you draft business plans, financial statements, and other
                                                required documents.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Endorsement Guidance</h5>
                                        <ul>
                                            <li>Assistance in obtaining endorsement for Innovator and Start-Up
                                                Visas.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Application Management</h5>
                                        <ul>
                                            <li>Support with relocation, business establishment, and compliance.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Post-Visa Services</h5>
                                        <ul>
                                            <li>Support with relocation, business establishment, and compliance.
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="container py-4 mt-1   rounded">
            <section class="cta mb-5 shadow-lg rounded "
                     style="background: url('{{asset('frontend/icons-images/cta.jpg')}}') center/cover no-repeat;">
                <div class="cta-content ">
                    <div class="cta-text">
                        <h3 style="color: #ececec !important;font-family: PT Sans, sans-serif !important;">Apply for
                            Your Visa Today!</h3>
                        <p style="color: #efefef !important;">Start Your Business Journey and Unlock new opportunities
                            in the UK Today!</p>
                    </div>
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="btn btn-primary py-3 px-5" style="font-size: 15px">Get a Free Assessment</a>
                    </p>
                </div>

            </section>
        </div>
    </div>
@endsection
