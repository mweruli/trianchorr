@extends('layouts.index')
@section('title', 'FAQ | IT service provider company in kenya')
@section('content')

 <div class="page-title-area page-title-padding pos-relative gray-bg fix"
            data-background="assets/images/img/page-title-bg.jpg" data-overlay="theme" data-opacity="7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title">
                            <h3 class="white-color">FAQ</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{!! url('/'); !!}">Home</a></li>
                                <li>Faq</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title End -->

      
        <!-- Faq Header End -->

        <!-- Faq Area -->
        <section class="faq pt-95 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="theme text-center">
                            <span class="theme__small--title fw-700 text-uppercase"><span></span>asked questions<span></span></span>
                            <h2 class="theme__big--title fw-700 mb-80">Frequently asked questions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="faq-wrapper">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                What is the cost of your services
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body d-flex">
                                            <div class="card-thumb d-none d-md-block">
                                                <img src="assets/images/new/faq.jpg" alt="">
                                            </div>
                                            <div class="card-text">
                                                <p>It really depends on what service levels you need and what you are looking to achieve. Although every business needs IT in today’s fast-paced world, we do have different tiered structures that offer different service levels, which define hours, fees and response times. We will work within the framework of your needs, budget and requirements.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                What types of system support do you provide?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body d-flex">
                                            <div class="card-thumb d-none d-md-block">
                                                <img src="assets/images/new/faq.jpg" alt="">
                                            </div>
                                            <div class="card-text">
                                                <p>We pride ourselves on being “ecosystem agnostic”: whether you use Google Apps or Office365, Windows or Mac, Android or iOS, we will support your team.  Need to install a server onsite or host one virtually on Amazon or Azure? We will support you.  Need to transition from one ecosystem to another?  We’ll be there for you.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                           What is your response time?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body d-flex">
                                            <div class="card-thumb d-none d-md-block">
                                                <img src="assets/images/new/faq.jpg" alt="">
                                            </div>
                                            <div class="card-text">
                                                <p>We try to resolve issues as soon as possible. Our help desk is always available and depending on the severity of the issue a client is facing, we ensure fast response times. Our goal is to meet your IT needs and build a proactive, robust and smart IT infrastructure that will minimize disruptions and downtime.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                How do you choose the best managed service provider?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body d-flex">
                                            <div class="card-thumb d-none d-md-block">
                                                <img src="assets/images/new/faq.jpg" alt="">
                                            </div>
                                            <div class="card-text">
                                                <p>Although different managed service providers offer similar services, may be priced similarly according to the marketplace, and pretty much have access to similar resources, no two providers are really truly alike. The major differences tend to be revealed in the level of service they provide, the relationships they are capable of creating and maintaining, and their reputation with other clients. A lot boils down to chemistry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                Releasing The Ethical Design Handbook When We Needed It Most ?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body d-flex">
                                            <div class="card-thumb d-none d-md-block">
                                                <img src="assets/images/new/faq.jpg" alt="">
                                            </div>
                                            <div class="card-text">
                                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I
                                                    will give
                                                    you a complete acco
                                                    unt of the system, and expound the actual teachings of the great explorer of the truth, the master-builder
                                                    of human
                                                    happinesrejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not
                                                    know how to
                                                    pursue pleasure</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Area end -->

        <!-- Consultation -->
        <section class="consult">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="consult__bg pt-70 pb-80" data-background="assets/images/img/consult-bg.jpg"
                            data-overlay="theme" data-opacity="6">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="theme text-center">
                                        <span class="theme__small--title white-color fw-700 text-uppercase"><span
                                                class="white-line"></span>get Intouch<span
                                                class="white-line"></span></span>
                                        <h2 class="theme__big--title white-color fw-700 mb-40">Happy with our services? lets get in touch</h2>
                                        <a href="{!! url('/Contact-Us'); !!}" class="btn btn--icon btn--white theme-color">send message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Consultation End -->

        <!-- Sponsors area -->
        <div class="sponsor-area pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="sponsor-active">
                            <div class="sponsor__single">
                                <img src="assets/images/sponsor/sponsor1.png" alt="">
                            </div>
                            <div class="sponsor__single">
                                <img src="assets/images/sponsor/sponsor2.png" alt="">
                            </div>
                            <div class="sponsor__single">
                                <img src="assets/images/sponsor/sponsor3.png" alt="">
                            </div>
                            <div class="sponsor__single">
                                <img src="assets/images/sponsor/sponsor4.png" alt="">
                            </div>
                            <div class="sponsor__single">
                                <img src="assets/images/sponsor/sponsor5.png" alt="">
                            </div>
                            <div class="sponsor__single">
                                <img src="assets/images/sponsor/sponsor6.png" alt="">
                            </div>
                            <div class="sponsor__single">
                                <img src="assets/images/sponsor/sponsor3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection