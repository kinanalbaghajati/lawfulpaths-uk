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
                                    class="fa fa-chevron-right"></i></a></span> <span>Family Visa <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">Family Visa</h1>
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
                            <img src="{{asset('frontend/icons-images/family.png')}}" width="50" height="50">
                        </div>
                        <div class="mt-auto">
                            <h2 style="color: #d7a742 !important;" class="py-4 px-2 text-center">Family Visa</h2>
                        </div>

                    </div>
                    <div class="d-flex">
                        <div class="col px-4 pb-4">
                            <h5 class="px-2">• Reuniting families is at the heart of our mission. At EuroLegal, we
                                specialize in
                                helping individuals bring their loved ones closer, no matter where in the world they
                                are.</h5>
                            <h5 class="px-2">
                                • Our Family Visa services ensure a smooth and hassle-free process so that you can focus
                                on
                                cherishing moments with your family while we take care of the formalities.
                            </h5>


                        </div>
                    </div>
                </div>
                <div class="container mt-4 shadow rounded">
                    <h2 style="color: #d7a742 !important;" class="py-4 px-4">What is a Family Visa ? </h2>
                    <div class="d-flex px-4 pb-4">
                        <div class="col">

                            <h5 class="text-start">• A family visa allows individuals living abroad to sponsor their
                                immediate family members—spouse, children, parents, or dependents—to join them in their
                                host country. These visas can enable your family members to reside, study, and even work
                                abroad. </h5>
                            <h5 class="text-start">• Whether you’re applying for a temporary stay or permanent residency
                                for your family, understanding the process and meeting the legal requirements can be
                                daunting. That’s where we step in. </h5>


                        </div>
                    </div>
                </div>

                {{--                <div class="container mt-4 shadow rounded">--}}
                {{--                    <h2 style="color: #d7a742 !important;" class="py-4 px-4">Who Can Apply for a UK Family Visa ? </h2>--}}
                {{--                    <div class="d-flex px-4 pb-4">--}}
                {{--                        <div class="col">--}}

                {{--                            <h5 class="text-start">• You can apply for a Family Visa to join certain family members in--}}
                {{--                                the UK, provided you meet the eligibility requirements. You may be eligible if you--}}
                {{--                                are: </h5>--}}

                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>
            <div class="col-md-4">
                <div class="bg-text mt-4 py-3">
                    <h2 class="" style="color: #ffc54f !important;">How to Get Started?</h2>
                    <div class="divider"></div>
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
                    <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">
                        <img src="{{asset('frontend/icons-images/bio.png')}}" width="50" height="50">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <h4 style="color: #d7a742 !important;">Biometric Appointment</h4>
                            <h6 style="text-align: left;color: whitesmoke !important;">Attend a biometric appointment at
                                your nearest visa application center to provide fingerprints and a photograph.</h6>
                        </div>
                    </div>

                    {{--                    <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">--}}
                    {{--                        <img src="{{asset('frontend/icons-images/plane.png')}}" width="50" height="50">--}}
                    {{--                        <div class="d-flex flex-column justify-content-start align-items-start">--}}
                    {{--                            <h4 style="color: #d7a742 !important;">Move Abroad</h4>--}}
                    {{--                            <h6 style="text-align: left;color: whitesmoke !important;">Once your visa is approved, we’ll--}}
                    {{--                                help you with pre-departure tips and settling-in advice.</h6>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="d-flex justify-content-start py-2 px-5" style="gap: 2rem">--}}
                    {{--                        <img src="{{asset('frontend/icons-images/plane.png')}}" width="50" height="50">--}}
                    {{--                        <div class="d-flex flex-column justify-content-start align-items-start">--}}
                    {{--                            <h4 style="color: #d7a742 !important;">Move Abroad</h4>--}}
                    {{--                            <h6 style="text-align: left;color: whitesmoke !important;">Once your visa is approved, we’ll--}}
                    {{--                                help you with pre-departure tips and settling-in advice.</h6>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}


                    <div class="align-self-center my-4">
                        <a href="{{route('contact-us')}}" class="btn btn-primary py-3 px-5" style="font-size: 20px">Get
                            a Free
                            Consultation</a>
                    </div>


                </div>
            </div>

        </div>

        <div class="row mx-5">

            <div class="container-fluid py-5 px-4 mt-4 shadow ml-4">
                <h2 style="color: #d7a742 !important;" class="px-2 pb-2">Who Can Apply for a UK Family Visa?</h2>
                <div class="d-flex">
                    <div class="col">
                        <h5 class="pt-2 px-2 pb-2 " style=" font-family: PT Sans, sans-serif;">You can apply for a
                            Family Visa to join certain family members in the UK, provided you meet the eligibility
                            requirements. You may be eligible if you are:</h5>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5> A Spouse or Partner:</h5>
                                        <ul>
                                            <li>Married, in a civil partnership, or in a long-term relationship with
                                                a British citizen or someone settled in the UK.
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>A Fiancé(e) or Proposed Civil Partner: </h5>
                                        <ul>
                                            <li>Planning to marry or enter a civil partnership within six months of
                                                arrival in the UK.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>An Adult Dependent Relative</h5>
                                        <ul>
                                            <li>A close family member (like a parent or grandparent) needing
                                                long-term care that is unavailable in their home country.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>A Child:</h5>
                                        <ul>
                                            <li>Under 18 and dependent on a parent living in the UK.
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>A Parent</h5>
                                        <ul>
                                            <li>Seeking to join a child under 18 who is a British citizen or settled
                                                in the UK.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                {{--                    <div class="divider-1" ></div>--}}
                {{--                    <h2 style="color: #d7a742 !important;" class="px-2 py-">Who Can Apply for a UK Family Visa?</h2>--}}
            </div>


        </div>

        <div class="row mx-5">

            <div class="container-fluid py-3 mt-4 ml-4 shadow rounded px-4"
                 style="border: 3px solid #d7a742;background-color: #d8ae56">
                <h3 style="color: whitesmoke!important;">Key Considerations for UK Family Visas :</h3>

                <div class="row">
                    <div class="col-md-4">
                        <ul style="color: rgba(245,245,245,0.85)!important;">
                            <li class="py-2"><h5 style="color: white!important;">Immigration Health Surcharge (IHS)
                                    :</h5>
                                <ul>
                                    <li style="color: white!important;">Applicants are required to pay the IHS to access
                                        healthcare in the UK.
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul style="color: rgba(245,245,245,0.85)!important;">
                            <li class="py-2"><h5 style="color: white!important;">Public Funds :</h5>
                                <ul>
                                    <li style="color: white!important;">Family visa holders are typically not allowed to
                                        claim public funds.
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul style="color: rgba(245,245,245,0.85)!important;">
                            <li class="py-2"><h5 style="color: white!important;">Dependents :</h5>
                                <ul>
                                    <li style="color: white!important;">Children may apply as dependents on a parent’s
                                        family visa application.
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>


        <div class="row mx-5">

            <div class="container-fluid py-5 px-4 mt-4 shadow ml-4" style="border:3px solid #1d3f73!important;">
                <h2 style="color: #d7a742 !important;" class="px-2 pb-2">How We Can Help ?</h2>
                <div class="d-flex">
                    <div class="col">
                        <h4 class="pt-2 px-2 pb-2 " style=" font-family: PT Sans, sans-serif;">At EuroLegal, we simplify
                            the UK Family Visa process with expert guidance tailored to your circumstances Our services
                            include:</h4>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5> Eligibility assessments to determine the best visa type for
                                            you.</h5>

                                    </li>
                                    <li class="py-2"><h5>Assistance with gathering and submitting required
                                            documents. </h5>

                                    </li>
                                    <li class="py-2"><h5>Detailed guidance on meeting financial and English language
                                            requirements.</h5>
                                        <ul>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5> Support throughout the application process, including tracking
                                            and updates.</h5>

                                    </li>
                                    <li class="py-2"><h5>Preparation for any interviews or additional document requests
                                            from the UK Home Office.</h5>

                                    </li>

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                {{--                    <div class="divider-1" ></div>--}}
                {{--                    <h2 style="color: #d7a742 !important;" class="px-2 py-">Who Can Apply for a UK Family Visa?</h2>--}}
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
                        <p style="color: #efefef !important;">Bring your family together in the UK. Book a consultation
                            for your family visa today!.</p>
                    </div>
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="btn btn-primary py-3 px-5" style="font-size: 16px">Get a Free Assessment</a>
                    </p>
                </div>

            </section>
        </div>
    </div>

@endsection
