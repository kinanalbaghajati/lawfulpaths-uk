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
    <h3 class="mb-3 bread">Frequently Asked Questions<span style="font-weight: bold "> &nbsp;Visa Application Process</span></h3>
    <div class="faq">
        <div class="accordion">
            How long does the visa application process take?
            <i class="fa fa-arrow-up"></i>
        </div>
        <div class="pannel">
            <p class="py-3">
                 The timeline varies depending on the visa type but typically ranges from 3 to 8 weeks.
            </p>
        </div>
    </div>
    <div class="faq">
        <div class="accordion">
            How do I check the status of my visa application?
            <i class="fa fa-arrow-up"></i>
        </div>
        <div class="pannel">
            <p class="py-3">
               💼 You can track your application online through the UK Visas and Immigration (UKVI) website, or we can assist you in monitoring updates.
            </p>
        </div>
    </div>
    <div class="faq">
        <div class="accordion">
            What documents are required for a UK visa application?
            <i class="fa fa-arrow-up"></i>
        </div>
        <div class="pannel">
            <p class="py-3">
                Required documents vary by visa type but generally include a valid passport, financial proof, accommodation details, and supporting evidence like sponsorship or employment letters.
            </p>
        </div>
    </div>
</div>
{{--        <div class="divider" style="border-bottom: 2px solid #b4b3af; width: 58%;"></div>--}}
        <br>
        <br>
    <div class="container py-5 shadow">
        <h3 class="mb-3 bread">Frequently Asked Questions<span style="font-weight: bold "> &nbsp;Visa Extensions and Reapplications</span></h3>
        <div class="faq">
            <div class="accordion">
                Can I apply for a visa extension?
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="pannel">
                <p class="py-3">
                    Yes, many visas allow for extensions. Our team can guide you through the process.
                </p>
            </div>
        </div>
        <div class="faq">
            <div class="accordion">
                What happens if my visa application is rejected?
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="pannel">
                <p class="py-3">
                    We will review the reasons for rejection and assist with reapplications or appeals.
                </p>
            </div>
        </div>
        <div class="faq">
            <div class="accordion">
                Can I appeal a visa refusal?
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="pannel">
                <p class="py-3">
                    Yes, many refusals can be appealed or reviewed, depending on the visa type. We can guide you through the appeal process.
                </p>
            </div>
        </div>
        <div class="faq">
            <div class="accordion">
                Can I work in the UK while studying on a Student Visa?
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="pannel">
                <p class="py-3">
                    Yes, Student Visa holders can typically work up to 20 hours per week during term time and full-time during holidays, depending on your visa conditions.
                </p>
            </div>
        </div>
        <div class="faq">
            <div class="accordion">
                How long can I stay in the UK after completing my studies on a Student Visa?
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="pannel">
                <p class="py-3">
                    With the Graduate Visa, you can stay and work in the UK for up to 2 years (3 years for PhD graduates) after completing your studies.
                </p>
            </div>
        </div>
    </div>
<br>

        <div>
            <div class="container py-4 mt-1   rounded">
                <section class="cta mb-5 shadow-lg rounded " style="background: url('{{asset('frontend/icons-images/cta.jpg')}}') center/cover no-repeat;">
                    <div class="cta-content ">
                        <div class="cta-text">
                            <h3 style="color: #ececec !important;font-family: PT Sans, sans-serif !important;">Apply for Your Visa Today!</h3>
                            <p style="color: #efefef !important;">Make your travel dreams a reality with our seamless visa application process!.</p>
                        </div>
                        <p class="mb-0 phone pl-md-2">
                            <a href="#" class="btn btn-primary py-3 px-5" style="font-size: 16px">Get a Free Assessment</a>
                        </p>
                    </div>

                </section>
            </div>
        </div>

        <div class="container py-5 shadow">
            <h3 class="mb-3 bread">Frequently Asked Questions<span style="font-weight: bold "> &nbsp;Work and Study in the UK</span></h3>
            <div class="faq">
                <div class="accordion">
                    Can I work in the UK while studying on a Student Visa?
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        Yes, Student Visa holders can typically work up to 20 hours per week during term time and full-time during holidays, depending on your visa conditions.
                    </p>
                </div>
            </div>
            <div class="faq">
                <div class="accordion">
                    How long can I stay in the UK after completing my studies on a Student Visa?
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        With the Graduate Visa, you can stay and work in the UK for up to 2 years (3 years for PhD graduates) after completing your studies.
                    </p>
                </div>
            </div>
            <div class="faq">
                <div class="accordion">
                    Can I appeal a visa refusal?
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        Yes, many refusals can be appealed or reviewed, depending on the visa type. We can guide you through the appeal process.
                    </p>
                </div>
            </div>
            <div class="faq">
                <div class="accordion">
                    What is the minimum investment required for an Innovator Visa?
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        The Innovator Visa generally requires a minimum investment of £50,000 into a UK business that meets specific criteria.
                    </p>
                </div>
            </div>
            <div class="faq">
                <div class="accordion">
                    Can I bring my family members with me to the UK on a work visa?
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        Yes, most work visas allow you to bring dependents, such as your spouse or children under 18, provided you meet certain financial requirements.
                    </p>
                </div>
            </div>
            <div class="faq">
                <div class="accordion">
                    What are the financial requirements for a Family Visa?
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        For most Family Visas, you must prove an income of at least £18,600 per year, plus additional amounts for dependent children, unless exemptions apply.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container py-5 shadow">
            <h3 class="mb-3 bread">Frequently Asked Questions<span style="font-weight: bold "> &nbsp;Language Proficiency, Citizenship</span></h3>
            <div class="faq">
                <div class="accordion">
                    Do I need to pass an English language test for my visa application?
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        Most visa categories, including Skilled Worker and Spouse Visas, require proof of English proficiency through approved tests like IELTS or equivalent qualifications.
                    </p>
                </div>
            </div>
            <div class="faq">
                <div class="accordion">
                    Can I switch to another visa category while in the UK?
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        Yes, many visa categories allow switching while in the UK, such as moving from a Student Visa to a Skilled Worker Visa. We can help determine your eligibility.
                    </p>
                </div>
            </div>
            <div class="faq">
                <div class="accordion">
                    How soon can I apply for British citizenship after obtaining Indefinite Leave to Remain (ILR)?

                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="pannel">
                    <p class="py-3">
                        You can typically apply for citizenship after holding ILR for 12 months, provided you meet residency and other eligibility criteria.
                    </p>
                </div>
            </div>
        </div>
    </section>


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



