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
                                    class="fa fa-chevron-right"></i></a></span> <span>Study Visa <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">Study Visa</h1>
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
                            <img src="{{asset('frontend/icons-images/study.png')}}" width="55" height="55">
                        </div>
                        <div class="mt-auto">
                            <h2 style="color: #d7a742 !important;" class="py-4 px-2 text-center">Study Visa</h2>
                        </div>

                    </div>
                    <div class="d-flex">
                        <div class="col px-4 pb-4">
                            <h5 class="px-2">• A study visa is your gateway to pursuing world-class education in top institutions
                                across
                                the globe.
                                It allows students to travel to another country for academic purposes, providing
                                access to renowned universities, colleges, and schools.</h5>
                            <h5 class="px-2">
                                • Whether you’re aiming for
                                undergraduate studies, postgraduate research, or short-term courses, a study visa is an
                                essential step toward achieving your academic and career aspirations.
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="container mt-4 shadow rounded">
                    <h2 style="color: #d7a742 !important;" class="py-4 px-4">What Is a Study Visa ? </h2>
                    <div class="d-flex px-4 pb-4">
                        <div class="col">

                            <h5 class="text-start">• A study visa grants you legal permission to enter and reside in a
                                foreign country for the
                                duration of your academic program. </h5>
                            <h5 class="text-start">• This visa category is tailored for students who wish to
                                pursue full-time education and often includes provisions for part-time work,
                                internships, or
                                post-study work opportunities, depending on the country. </h5>

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
                        <img src="{{asset('frontend/icons-images/online-app.png')}}" width="50" height="50">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <h4 style="color: #d7a742 !important;">Submit an Online Application</h4>
                            <h6 style="text-align: left;color: whitesmoke !important;">Complete the visa application
                                form on the UK government’s official immigration website.</h6>
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
                    <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Eligibility Requirements for a Study
                        Visa:</h2>
                    <div class="d-flex">
                        <div class="col">
                            <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">While requirements
                                vary by country, the general criteria include:</h5>
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li class="py-2"><h5>Acceptance Letter:</h5>
                                            <ul>
                                                <li>A confirmed admission letter from a recognized educational
                                                    institution.
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="py-2"><h5>Proof of Financial Support</h5>
                                            <ul>
                                                <li>Demonstrate your ability to cover tuition fees, living expenses, and
                                                    travel costs during your stay.
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="py-2"><h5>Language Proficiency</h5>
                                            <ul>
                                                <li>Proof of English (IELTS, TOEFL, or PTE) or other language
                                                    proficiency (e.g., German, French) as required by the institution or
                                                    country.
                                                </li>

                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li class="py-2"><h5>Health and Medical Requirements:</h5>
                                            <ul>
                                                <li>Proof of good health and, in some cases, health insurance.
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="py-2"><h5>Background Check</h5>
                                            <ul>
                                                <li>Some countries require a police clearance certificate to prove a clean criminal record.
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="py-2"><h5>Immigration Documents</h5>
                                            <ul>
                                                <li>Valid passport, visa application form, and supporting documents
                                                    such as educational transcripts, proof of financial capacity, and
                                                    personal identification.
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

                <div class="container-fluid py-3 mt-4 ml-4 shadow rounded px-4"
                     style="border: 3px solid #d7a742;background-color: #d8ae56">
                    <h3 style="color: whitesmoke!important;">Who Needs a Study Visa? </h3>

                    <div class="row">
                        <div class="col-md-4">
                            <ul  style="color: rgba(245,245,245,0.85)!important;">
                                <li class="py-2"><h5  style="color: white!important;">Enrol in a full-time degree program (undergraduate, graduate, or PhD).</h5>

                                </li>

                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul  style="color: rgba(245,245,245,0.85)!important;">
                                <li class="py-2"><h5  style="color: white!important;">Participate in exchange programs or short-term academic projects</h5>

                                </li>


                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul  style="color: rgba(245,245,245,0.85)!important;">

                                <li class="py-2"><h5  style="color: white!important;">Attend a vocational or training course.</h5>

                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>



        <div class="row mx-5 ">

                {{--                style="border:3px solid #1d3f73!important;"--}}
                <div class="container-fluid py-4 mt-4 shadow ml-4" style="border:3px solid #1d3f73!important;">
                    <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Common Challenges and How We Help:</h2>
                    <div class="d-flex">
                        <div class="col">
{{--                            <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">Understanding Complex Visa Rules:</h5>--}}
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li class="py-2"><h5>Understanding Complex Visa Rules:</h5>
                                            <ul>
                                                <li>
                                                    We simplify the requirements for your chosen destination, ensuring you meet every criterion.
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="py-2"><h5>Financial Documents and Proofs</h5>
                                            <ul>
                                                <li>We guide you in preparing financial documents to satisfy the embassy’s requirements.
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li class="py-2"><h5>Visa Rejections</h5>
                                            <ul>
                                                <li>Some countries require a police clearance certificate to prove a clean criminal record.
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="py-2"><h5>Language Proficiency and SOP:</h5>
                                            <ul>
                                                <li>Assistance with test preparation and crafting an impressive Statement of Purpose (SOP) to strengthen your application.
                                                </li>
                                            </ul>
                                        </li>




                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                {{--                style="border:3px solid #1d3f73!important;"--}}
                <div class="container-fluid py-4 mt-4 shadow ml-4"  style="border:3px solid #d7a742!important;">
                    <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Documents We Help You Prepare:</h2>
                    <div class="d-flex">
                        <div class="col">
{{--                            <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">While requirements--}}
{{--                                vary by country, the general criteria include:</h5>--}}
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li class="py-2" ><h5>Admission Letter from the educational institution.</h5>
                                        </li>
                                        <li class="py-2"><h5>Valid Passport</h5>
                                        </li>
                                        <li class="py-2"><h5>Statement of Purpose (SOP) and Cover Letter.</h5>
                                        </li>
                                        <li class="py-2"><h5>Additional documents based on the country-specific requirements.</h5>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li class="py-2"><h5>Proof of Financial Support (bank statements, sponsor letters).</h5>

                                        </li>
                                        <li class="py-2"><h5>Visa Application Form.</h5>
                                        </li>
                                        <li class="py-2"><h5>Proof of Language Proficiency (IELTS, TOEFL, etc.).</h5>
                                        </li>
                                        <li class="py-2"><h5>Medical Certificates and Insurance.</h5>
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
                    <div class="cta-text">
                        <h3 style="color: #ececec !important;font-family: PT Sans, sans-serif !important;">Apply for Your Visa Today!</h3>
                        <p style="color: #efefef !important;">Pursuing an education abroad is a life-changing experience, and we’re here to make it true!</p>
                    </div>
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="btn btn-primary py-3 px-5" style="font-size: 15px">Get a Free Assessment</a>
                    </p>
                </div>

            </section>
        </div>
    </div>

@endsection
