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
                                    class="fa fa-chevron-right"></i></a></span> <span>UK Asylum <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color: whitesmoke !important;">UK Asylum</h1>
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
                            <img src="{{asset('frontend/icons-images/asylum.png')}}" width="50" height="50">
                        </div>
                        <div class="mt-auto">
                            <h2 style="color: #d7a742 !important;" class="py-4 px-2 text-center">What is Asylum?</h2>
                        </div>

                    </div>
                    <div class="d-flex">
                        <div class="col px-4 pb-4">
                            <h5>• Asylum is the protection granted by a country to individuals who are unable or
                                unwilling to return to their home country due to fear of persecution. .</h5>
                            <h5>
                                • The UK provides asylum to people fleeing threats such as violence, discrimination, or
                                abuse based on race, religion, nationality, political opinion, or membership in a
                                particular social group.
                            </h5>


                        </div>
                    </div>
                </div>
                <div class="container mt-4 shadow rounded">
                    <h2 style="color: #d7a742 !important;" class="py-4 px-4">The UK's Commitment to International Protection : </h2>
                    <div class="d-flex px-4 pb-4">
                        <div class="col">

                            <h5 class="text-start">• The UK has a long-standing commitment to protecting those fleeing persecution, rooted in international law and a proud tradition of offering sanctuary.. </h5>
                            <h5 class="text-start">• The government has stated its intention to uphold its obligations under the Refugee Convention while also seeking to reform the asylum system to ensure it is fair, firm, and effective.
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
                        <img src="{{asset('frontend/icons-images/get_acc.png')}}" width="48" height="48">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <h4 style="color: #d7a742 !important;">Get Acceptance</h4>
                            <h6 style="text-align: left;color: whitesmoke !important;">Once your visa is approved, we’ll
                                help you with rang of support and information and settling-in advice.</h6>
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
                <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Eligibility for Asylum in the UK:</h2>
                <div class="d-flex">
                    <div class="col">
                        <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">To be eligible for asylum
                            in the UK, applicants must meet the following criteria:</h5>
                        <div class="row px-3">
                            <div class="col-md-6">

                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">1. Inability to Return
                                    Home:</h4>

                                <ul>
                                    <li class="py-2">
                                        <h5 class="pt-1 px-4 pb-2 "
                                            style="font-size: 18px; font-family: PT Sans, sans-serif;">You cannot seek
                                            protection in your home country because authorities there are unwilling or
                                            unable to offer protection.</h5>

                                    </li>

                                </ul>

                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">2. Adherence to UK Immigration
                                    Rules:</h4>

                                <ul>
                                    <li class="py-2">
                                        <h5 class="pt-1 px-4 pb-2 "
                                            style="font-size: 18px; font-family: PT Sans, sans-serif;">Your application
                                            must comply with the UK’s immigration and asylum laws, though exceptional
                                            circumstances may be considered..</h5>

                                    </li>

                                </ul>

                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">3. Presence in the UK or at Its
                                    Border:</h4>

                                <ul>
                                    <li class="py-2">
                                        <h5 class="pt-1 px-4 pb-2 "
                                            style="font-size: 18px; font-family: PT Sans, sans-serif;">You must be
                                            physically present in the UK or at its border to apply for asylum.</h5>

                                    </li>

                                </ul>

                            </div>
                            <div class="col-md-6">

                                <h4 style="color: #d7a742 !important;" class="px-4 pb-2">4. Fear of Persecution:</h4>

                                <ul>
                                    <li class="py-2">
                                        <h5 class="pt-1 px-4 pb-2 "
                                            style="font-size: 18px; font-family: PT Sans, sans-serif;">You must
                                            demonstrate a well-founded fear of persecution in your home country due to
                                            reasons such as:</h5>
                                        <ul>
                                            <li>
                                                Race.
                                            </li>
                                            <li>
                                                Religion.
                                            </li>
                                            <li>
                                                Nationality.
                                            </li>
                                            <li>
                                                Political opinion.
                                            </li>
                                            <li>
                                                Membership in a particular social group (e.g., LGBTQ+ individuals, women
                                                facing gender-based violence).
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
            <div class="container-fluid py-4 mt-4 shadow ml-4" style="border:3px solid #255193!important;">
                <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Rights and Support for Asylum Seekers:</h2>
                <div class="d-flex">
                    <div class="col">
                        <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">While your asylum
                            application is being processed, you are entitled to:</h5>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Accommodation and Financial Support</h5>
                                        <ul>
                                            <li>
                                                If you are destitute, you can apply for housing and a weekly allowance
                                                under Section 95 support.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Healthcare Services</h5>
                                        <ul>
                                            <li>Access to free healthcare under the National Health Service (NHS).
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Education</h5>
                                        <ul>
                                            <li>Children under 18 can attend school in the UK.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Legal Aid</h5>
                                        <ul>
                                            <li>Free or subsidized legal representation may be available for asylum
                                                seekers.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Work Restrictions</h5>
                                        <ul>
                                            <li>You are generally not allowed to work during the application process.
                                                However, after 12 months, you may apply for permission to work in
                                                specific occupations if the delay is not your fault.
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
                <h3 style="color: whitesmoke!important;" class="px-4 pb-1">What Happens After Asylum is Granted ?</h3>

                <div class="row">
                    <div class="col-md-6 px-4 ">
                        <ul style="color: rgba(245,245,245,0.85)!important;">
                            <li class="pt-2 pb-1"><h5 style="color: white!important;">You are granted refugee status for
                                    five years.</h5>
                            </li>

                        </ul>
                        <ul style="color: rgba(245,245,245,0.85)!important;">
                            <li class=" pb-1"><h5 style="color: white!important;">Your family members (spouse, partner,
                                    and children under 18) can join you in the UK through the Family Reunion
                                    scheme.</h5>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul style="color: rgba(245,245,245,0.85)!important;">
                            <li class="pt-2 pb-1"><h5 style="color: white!important;">You can work, study, and access
                                    public funds.</h5>
                            </li>

                        </ul>
                        <ul style="color: rgba(245,245,245,0.85)!important;">
                            <li class=" pb-1"><h5 style="color: white!important;">You may apply for indefinite leave to
                                    remain (ILR) after five years, which can lead to British citizenship.</h5>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>
        <div class="row mx-5 ">
            {{--                style="border:3px solid #1d3f73!important;"--}}
            <div class="container-fluid py-4 mt-4 shadow ml-4" style="border:3px solid #d7a742!important;">
                <h2 style="color: #d7a742 !important;" class="px-4 pb-2">Challenges in UK Asylum Applications:</h2>
                <div class="d-flex">
                    <div class="col">
                        {{--                            <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">Understanding Complex Visa Rules:</h5>--}}
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Lengthy Processing Times</h5>
                                        <ul>
                                            <li>
                                                Decisions can take months, leaving applicants in limbo.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Complex Legal Procedures</h5>
                                        <ul>
                                            <li>The asylum process requires substantial evidence, detailed
                                                documentation, and adherence to strict deadlines.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Risk of Refusal</h5>
                                        <ul>
                                            <li>Without expert guidance, the chances of rejection increase
                                                significantly.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Language Barriers</h5>
                                        <ul>
                                            <li>Non-English speakers often face challenges during interviews and
                                                document preparation.
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
                        <h5 class="pt-2 px-4 pb-2 " style=" font-family: PT Sans, sans-serif;">Navigating the UK asylum
                            process can be overwhelming, but our experienced team is here to assist you every step of
                            the way. We provide:</h5>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Legal Consultation</h5>
                                        <ul>
                                            <li>
                                                Understand your eligibility and the strength of your case with a
                                                thorough assessment.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Application Assistance</h5>
                                        <ul>
                                            <li>Help prepare and submit all necessary forms and supporting documents.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Interview Preparation</h5>
                                        <ul>
                                            <li>Train and guide you for the screening and asylum interviews to ensure a
                                                strong case presentation.
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="py-2"><h5>Appeals and Reviews</h5>
                                        <ul>
                                            <li>Provide legal support in case your application is refused, ensuring you
                                                have the best chance of success.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-2"><h5>Support Services</h5>
                                        <ul>
                                            <li>Assistance with housing, healthcare, and access to other benefits while
                                                your claim is being processed.
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
                    <div class="cta-text" style="text-align: center">
                        <h3 style="color: #ececec !important;font-family: PT Sans, sans-serif !important;">Apply for
                            Asylum Today!</h3>
                        <p style="color: #efefef !important;">Contact Us today to schedule a consultation and begin your
                            journey to safety and stability !</p>
                    </div>
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="btn btn-primary py-3 px-5" style="font-size: 16px">Get a Free Assessment</a>
                    </p>
                </div>

            </section>
        </div>
    </div>

@endsection
