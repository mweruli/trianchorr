@extends('layouts.index')
@section('title', 'Computer Accessories supplies | IT service provider company in kenya')
@section('content')

 <div class="page-title-area page-title-padding pos-relative gray-bg fix"
            data-background="assets/images/new/computer.png" data-overlay="theme" data-opacity="7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title">
                            <h4 class="white-color">Computer Accessories supplies</h4>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{!! url('/'); !!}">Home</a></li>
                                <li>Computer Accessories supplies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Why Choose Us -->
        <section class="why-choose service position-relative fix pt-125 pb-60">
            <img src="assets/images/new/acces.jpg" alt="Shape" class="shape shape--mimg aos-init aos-animate d-none d-lg-block"
                data-aos="fade-left" data-aos-easing="ease-in-sine">
            <img src="assets/images/shape/services-man-bg-shape.png" alt="Shape" class="shape shape--mibg d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="theme">
                            <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>why choose us</span>
                            <h4 class="theme__big--title fw-700 mb-60">We strive to ensure you get the best prices and product quality from the best among Computer Accessories suppliers in Kenya <br>Our experts provide complete support to all our clients and  help them maintain the functionality of all their hardware’s</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6 mb-50">
                                        <div class="about__content sd-content">
                                            <i class="fal fa-chart-pie-alt"></i>
                                            <h5 class="fw-600 mb-10">Desktops & Laptops</h5>
                                            <p>both refurbished and brand new Desktop & Laptop Computers at better price</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-50">
                                        <div class="about__content sd-content">
                                            <i class="fal fa-laptop-code"></i>
                                            <h5 class="fw-600 mb-10">Servers</h5>
                                            <p>Optimal performing server computers from leading brands.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-50">
                                        <div class="about__content sd-content">
                                            <i class="fal fa-lock-open-alt"></i>
                                            <h5 class="fw-600 mb-10">Networking Devices</h5>
                                            <p>We provide networking hardware & devices from the popular brands</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-50">
                                        <div class="about__content sd-content">
                                            <i class="fal fa-layer-plus"></i>
                                            <h5 class="fw-600 mb-10">Security & Surveillance
</h5>
                                            <p>Provision of leading security and surveillance CCTV systems, DVR & NVR, Access control systems</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us End -->

        <!-- Feature End -->

        <!-- Consultation -->
        <section class="consult pb-130 consult__bg pt-125 pb-130" data-background="assets/images/img/consult-bg.jpg"
            data-overlay="theme" data-opacity="6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="theme text-center">
                                    <span class="theme__small--title white-color fw-700 text-uppercase"><span
                                            class="white-line"></span>get In touch<span
                                            class="white-line"></span></span>
                                    <h2 class="theme__big--title white-color fw-700 mb-40">Intrested in our supplies hit the button below 
                                        </h2>
                                    <a href="{!! url('/Contact-Us') !!}" class="btn btn--icon btn--white theme-color">contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Consultation End -->

        <!-- Price & Plan Area -->
        
        <!-- Price & Plan Area End -->

        <!-- Sponsors area -->
        <div class="sponsor-area pb-130">
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