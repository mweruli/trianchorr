@extends('layouts.index')
@section('title', 'Portfolio | IT service provider company in kenya')
@section('content')

 <div class="page-title-area page-title-padding pos-relative gray-bg fix"
            data-background="assets/images/img/page-title-bg.jpg" data-overlay="theme" data-opacity="7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title">
                            <h3 class="white-color">portfolio</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{!! url('/'); !!}">Home</a></li>
                                <li>portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Case Study -->
        <section class="case pt-125 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="case__tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Show All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">More</a>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/cam1.jpg" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>IT Consulting</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/acces.jpg" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>Product Engineering</h4>
                                                <ul>
                                                    <li>Technology</li>
                                                    <li>It</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/camera.jpg" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>Product Design</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/dome1.png" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>Web Design</h4>
                                                <ul>
                                                    <li>product design</li>
                                                    <li>photoshop</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/home1.jpg" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>Business Solutions</h4>
                                                <ul>
                                                    <li>IT</li>
                                                    <li>consulting</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/nee.jpg" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>Cyber Security</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/power.jpg" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>Product Analysis</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/charger.jpg" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>Web Analysis</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img src="assets/images/new/offe.jpeg" alt=""></a>
                                            </div>
                                            <div class="case__content case__content--s2">
                                                <h4>Business Solutions</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/router.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">Business Solutions</h4>
                                                <ul>
                                                    <li>IT</li>
                                                    <li>consulting</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/download.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">Cyber Security</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/rot.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">Product Analysis</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/cable.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">Web Analysis</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/root1.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">IT Consulting</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/exte.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">Product Engineering</h4>
                                                <ul>
                                                    <li>Technology</li>
                                                    <li>It</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/roll.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">Product Design</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/fence.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">Web Design</h4>
                                                <ul>
                                                    <li>product design</li>
                                                    <li>photoshop</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="case__block">
                                            <div class="case__thumb case__thumb--s2">
                                                <a href="case-details.html"><img
                                                        src="assets/images/new/bank.jpg" alt=""></a>
                                            </di di--s2v>
                                        >
                                                <h4 class="white-color">Business Solutions</h4>
                                                <ul>
                                                    <li>business</li>
                                                    <li>idea</li>
                                                </ul>
                                            </div>
                                        </div>
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
        <!-- Case Study End -->

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
                                                class="white-line"></span>get consultation<span
                                                class="white-line"></span></span>
                                        <h2 class="theme__big--title white-color fw-700 mb-40">Need free consultation
                                            about digital solutions ?</h2>
                                        <a href="contacts.html" class="btn btn--icon btn--white theme-color">send message</a>
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