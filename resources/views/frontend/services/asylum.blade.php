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
                                    class="fa fa-chevron-right"></i></a></span> <span>Asylum <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">Asylum</h1>
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
                            <img src="{{asset('frontend/icons-images/work.png')}}" width="50" height="50">
                        </div>
                        <div class="mt-auto">
                            <h2 style="color: #d7a742 !important;" class="py-4 px-2 text-center">Work Visa</h2>
                        </div>

                    </div>
                    <div class="d-flex">
                        <div class="col px-4 pb-4">
                            <h5>• If you are an individual dreaming of working in
                                the UK, a work visa is your gateway to achieving this goal. But dealing with work visa
                                applications is a daunting task.</h5>
                            <h5>
                                • At EuroLegal, we pride ourselves on
                                simplifying the process, allowing you to concentrate on your career ambitions while we
                                take care of the red tape.
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="container mt-4 shadow rounded">
                    <h2 style="color: #d7a742 !important;" class="py-4 px-4">What Is a Work Visa ? </h2>
                    <div class="d-flex px-4 pb-4">
                        <div class="col">

                            <h5 class="text-start">• A work visa is a legal authorization that
                                allows individuals to work in a foreign country for a specific duration, employer, or
                                industry. </h5>
                            <h5 class="text-start">• Whether you're planning to relocate temporarily or seeking permanent
                                residency
                                through skilled employment, a work visa is your gateway to opportunities abroad. </h5>


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
                        <img src="{{asset('frontend/icons-images/app-process.png')}}" width="50" height="50">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <h4 style="color: #d7a742 !important;">Application Process</h4>
                            <h6 style="text-align: left;color: whitesmoke !important;">Our team will guide you through
                                documentation, filing, and embassy interviews</h6>
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

        <div class="row px-5">

            <div class="container-fluid py-5 mt-4 shadow " style="border:3px solid #1d3f73!important;">
                <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Our Work Visa Services</h2>
                <div class="d-flex">
                    <div class="col">
                        <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">We
                            provide end-to-end assistance tailored to meet your unique needs. Here’s how we can
                            help:</h5>
                        <div class="row px-4">
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Eligibility Assessment:</h5>
                                        <ul>
                                            <li>Evaluate your profile based on skills, qualifications, and work
                                                experience.
                                            </li>
                                            <li>Match your expertise with the visa requirements.</li>
                                            <li>Provide a clear roadmap for your visa application.</li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Documentation Guidance</h5>
                                        <ul>
                                            <li>Assist you in compiling essential documents, including proof of
                                                employment, qualifications, and financial stability.
                                            </li>
                                            <li>Ensure accuracy and compliance with immigration guidelines to avoid
                                                rejections.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Application Filing</h5>
                                        <ul>
                                            <li>Prepare and submit your visa application accurately.
                                            </li>
                                            <li>Handle forms, employer sponsorship details, and specific
                                                requirements.
                                            </li>
                                            <li>Track your application status and provide timely updates.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Employer Support:</h5>
                                        <ul>
                                            <li>Prepare and submit your visa application accurately.
                                            </li>
                                            <li>Handle forms, employer sponsorship details, and specific
                                                requirements.
                                            </li>
                                            <li>Track your application status and provide timely updates.</li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Interview Preparation</h5>
                                        <ul>
                                            <li>Provide personalized coaching for embassy interviews, focusing on
                                                confidence and clarity.
                                            </li>
                                            <li>Share insights on frequently asked questions and how to present your
                                                case effectively.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Visa Renewal and Extensions</h5>
                                        <ul>
                                            <li>Help you with renewing or extending your work visa before expiry
                                            </li>
                                            <li>Ensure smooth transitions to avoid legal complications or work
                                                disruptions.
                                            </li>
                                            <li>Track your application status and provide timely updates.
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
            <section class="cta mb-5 shadow-lg rounded " style="background: url('{{asset('frontend/icons-images/cta.jpg')}}') center/cover no-repeat;">
                <div class="cta-content ">
                    <div class="cta-text" style="text-align: center">
                        <h3 style="color: #ececec !important;font-family: PT Sans, sans-serif !important;">Apply for Your Visa Today!</h3>
                        <p style="color: #efefef !important;">Contact us today to begin your work visa application!.</p>
                    </div>
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="btn btn-primary py-3 px-5" style="font-size: 16px">Get a Free Assessment</a>
                    </p>
                </div>

            </section>
        </div>
    </div>








@endsection
