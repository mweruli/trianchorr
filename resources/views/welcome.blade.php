@extends('layouts.index')
@section('title', 'Home | IT service provider company in kenya')
@section('content')
        
        <!-- Hero -->
        <section class="hero position-relative">
            <div class="hero--active">
                <div class="hero-single hero__padding" data-overlay="dark" data-opacity="4" data-background="assets/images/new/network.jpg">
                    <div class="hero__shape"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 text-center">
                                <div class="hero__caption">
                                    <h5 class="hero--small-title white-color fw-500" data-animation="fadeInDown" data-delay=".2s"><span></span>IT Solutions Services Agency<span></span></h5>
                                    <h1 class="hero--big-title white-color fw-700" data-animation="fadeInDown" data-delay=".4s">Leading ICT Service providers in Kenya.</h1>
                                    <a href="{!! url('/About-Us') !!}" class="btn btn--blue btn--icon white-color" data-animation="fadeInLeft" data-delay=".6s">Get started</a>
                                    <a href="{!! url('/why-us') !!}" class="bt-btn btn--border white-color fw-700" data-animation="fadeInRight" data-delay=".8s">How It Works</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single hero__padding" data-overlay="dark" data-opacity="4" data-background="assets/images/new/camera.jpg">
                    <div class="hero__shape"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-4 text-right">
                                <div class="hero__caption">
                                    <h5 class="hero--small-title white-color fw-500" data-animation="fadeInRight" data-delay=".2s"><span></span>IT Solutions Services Agency<span></span></h5>
                                    <h1 class="hero--big-title white-color fw-700" data-animation="fadeInRight" data-delay=".4s">Best IT Solutions Agency</h1>
                                    <a href="{!! url('/About-Us') !!}" class="btn btn--blue btn--icon white-color" data-animation="fadeInRight" data-delay=".6s">Get started</a>
                                    <a href="{!! url('/why-us') !!}" class="bt-btn btn--border white-color fw-700" data-animation="fadeInRight" data-delay=".8s">How It Works</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero end /-->

        <!-- Feature -->
        <section class="about grey-bg pb-80 fix">
            <!-- Sponsors area -->
            
            <!-- Sponsors area End -->
            <div class="container pt-130">
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="theme">
                            <span class="theme__small--title fw-700 text-uppercase theme__small--title-left"><span></span>about Us </span>
                            <h2 class="theme__big--title fw-700 mb-30">Trianchor Data Solution.</h2>
                        </div>
                        <div class="about-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true"><i class="fal fa-analytics"></i>Business Goals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false"><i class="fal fa-analytics"></i>Company History</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-30">
                                            <div class="about__content">
                                                <i class="fal fa-laptop-code"></i>
                                                <h5 class="fw-600 mb-10">Client Needs First</h5>
                                                <p>We listen closely to your wishes and expectations, we are always able to create a solution that addresses your specific issues. A solution that really makes a difference, that gives you peace of mind.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-30">
                                            <div class="about__content">
                                                <i class="fal fa-laptop-code"></i>
                                                <h5 class="fw-600 mb-10">Scalability</h5>
                                                <p>Trianchor Data Solution offers services to small, medium, and large enterprise organizations both in the public and private sector.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-30">
                                            <div class="about__content">
                                                <i class="fal fa-laptop-code"></i>
                                                <h5 class="fw-600 mb-10">Our History</h5>
                                                <p>Trianchor Data Solutions Limited is a certified company, founded in the year 2018 by Kenyan citizens. It seeks to instigate and adopt flexible business practices that will enable client entities to operate more efficiently and produce more value.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-30">
                                            <div class="about__content">
                                                <i class="fal fa-laptop-code"></i>
                                                <h5 class="fw-600 mb-10">Why Us</h5>
                                                <p>TADS being a limited entity seeks to fill the market gap that exists in the provision of quality services and goods. Especially in the ICT sector and also in office stationery and other supplies.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="about-thumb position-relative">
                            <span>5 Years Of Experience</span>
                            <img src="assets/images/new/home1.jpg" alt="">
                            <div class="about__shape--h5">
                                <!-- <img src="assets/images/shape/about-circle-shape.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->

        <!-- Servcies -->
        <section class="service grey-bg position-relative fix pt-125 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="theme text-center">
                            <span class="theme__small--title fw-700 text-uppercase"><span></span>what we do<span></span></span>
                            <h2 class="theme__big--title fw-700 mb-80">We provide reliable and <br> customized IT solutions for your business</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="service__block--h2 position-relative">
                            <div class="service__thumb--h2 fix">
                                <img src="assets/images/new/serv.png" alt="">
                            </div>
                            <div class="service__content--h2">
                                <span class="flaticon-presentation white-color"></span>
                                <h4 class="white-color hover-color-light"><a href="{!! url('/computer-Sytem-installation') !!}">Computer Systems Installation</a></h4>
                                <p>We have a team of trained and certified Information and Communication technicians, that have done large scale</p>
                                <a href="{!! url('/computer-Sytem-installation') !!}"><i class="fal fa-long-arrow-right white-color"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="service__block--h2 position-relative">
                            <div class="service__thumb--h2 fix">
                                <img src="assets/images/new/cam1.jpg" alt="">
                            </div>
                            <div class="service__content--h2">
                                <span class="flaticon-server white-color"></span>
                                <h4 class="white-color hover-color-light"><a href="{!! url('/Security-Surveillance-Systems') !!}">Security Surveillance Systems</a></h4>
                                <p>This is a service that we excel at and is a guarantee to our clients that all their areas of concern are under surveilance. </p>
                                <a href="{!! url('/Security-Surveillance-Systems') !!}"><i class="fal fa-long-arrow-right white-color"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="service__block--h2 position-relative">
                            <div class="service__thumb--h2 fix">
                                <img src="assets/images/new/hosting.jpg" alt="">
                            </div>
                            <div class="service__content--h2">
                                <span class="flaticon-speaker white-color"></span>
                                <h4 class="white-color hover-color-light"><a href="{!! url('/Support-Consultancy') !!}">Support , Consultancy & Managed Services</a></h4>
                                <p>We give every issue from our clients a prioirty no matter how small it may seem.</p>
                                <a href="{!! url('/Support-Consultancy') !!}"><i class="fal fa-long-arrow-right white-color"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="service__block--h2 position-relative">
                            <div class="service__thumb--h2 fix">
                                <img src="assets/images/new/printer.jpg" alt="">
                            </div>
                            <div class="service__content--h2">
                                <span class="flaticon-speaker white-color"></span>
                                <h4 class="white-color hover-color-light"><a href="{!! url('/General-Office-Supplies') !!}">General Office Supplies</a></h4>
                                <p>If you’re thinking of office supplies, say no more because it’s already done. What your business needs is a supplier</p>
                                <a href="{!! url('/General-Office-Supplies') !!}"><i class="fal fa-long-arrow-right white-color"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="service__block--h2 position-relative">
                            <div class="service__thumb--h2 fix">
                                <img src="assets/images/new/desktop.jpeg" alt="">
                            </div>
                            <div class="service__content--h2">
                                <span class="flaticon-speaker white-color"></span>
                                <h4 class="white-color hover-color-light"><a href="{!! url('/Computer-accessories-supplies') !!}">Computer Accessories supplies</a></h4>
                                <p>We strive to ensure you get the best prices and product quality from the best among Computer Accessories suppliers in Kenya</p>
                                <a href="{!! url('/Computer-accessories-supplies') !!}"><i class="fal fa-long-arrow-right white-color"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="service__block--h2 position-relative">
                            <div class="service__thumb--h2 fix">
                                <img src="assets/images/new/nee.jpg" alt="">
                            </div>
                            <div class="service__content--h2">
                                <span class="flaticon-speaker white-color"></span>
                                <h4 class="white-color hover-color-light"><a href="{!! url('/Network-installation') !!}">Network Installation and Configuration</a></h4>
                                <p>We've done installations for offices, homes, large residential and industrial clients. For large scale setups, </p>
                                <a href="{!! url('/Network-installation') !!}"><i class="fal fa-long-arrow-right white-color"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Servcies end -->
        <section class="feature pb-100 pt-130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 mb-30">
                        <div class="theme">
                            <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>best features</span>
                            <h2 class="theme__big--title fw-700 mb-25">TDS as a leading ICT Service Provider.</h2>
                            <p class="mb-40">We are a friendly IT organization providing all sizes of organization with leading-edge IT Services in Kenya.<br> We were formed with the aim of assisting organizations in using modern technology with a close relationship and continual personal interaction between our staff and the client.</p>
                        </div>
                        <div class="skill-wrapper mb-40 d-flex align-items-center">
                            <div class="skill-circle">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="109"
                                        data-bgcolor="#e8e8eb" data-fgcolor="#221f3c" data-thickness=".15" data-readonly="true" disabled>
                                </div>
                            </div>
                            <div class="skill-circle-text">
                                <h3>Professionalism</h3>
                                <p>We take pride in producing high-quality work and delivering exceptional services to our clients. We believe that our clients come first.</p>
                            </div>
                        </div>
                        <div class="skill-wrapper mb-40 d-flex align-items-center">
                            <div class="skill-circle">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="109"
                                        data-bgcolor="#e8e8eb" data-fgcolor="#221f3c" data-thickness=".15" data-readonly="true" disabled>
                                </div>
                            </div>
                            <div class="skill-circle-text">
                                <h3>Innovation</h3>
                                <p>we strive to adopt and embrace new technology to create opportunities that deliver value to organizations we serve</p>
                            </div>
                        </div>
                        <div class="skill-wrapper mb-40 d-flex align-items-center">
                            <div class="skill-circle">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="89" data-linecap="round" data-width="109"
                                        data-bgcolor="#e8e8eb" data-fgcolor="#221f3c" data-thickness=".15" data-readonly="true" disabled>
                                </div>
                            </div>
                            <div class="skill-circle-text">
                                <h3>Team work</h3>
                                <p>We emphasize on commitment to common goals based on open and honest communication while showing concern and support for each other</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 mb-30">
                        <div class="feature__thumb">
                            <img src="assets/images/new/roll.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company History -->
        <section class="service theme-bg position-relative pt-125 pb-100 fix">
             <img class="shape service__shape shape--h4" src="assets/images/shape/wwd-shape.png" alt="">
             <img class="shape shape--h42" src="assets/images/shape/wwd-squre-shape.png" alt="">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                         <div class="theme text-center">
                             <!-- <span class="theme__small--title fw-700 text-uppercase white-color"><span class="white-line"></span>what we do<span class="white-line"></span></span> -->
                             <h2 class="theme__big--title fw-700 mb-70 white-color">We not only Deliver IT Support We bring to you Efficiency, Reliability<br> and Security to Your Organization</h2>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-lg-4 col-md-6 mb-30">
                         <div class="service__block--h5 position-relative white-bg">
                             <div class="service__thumb--h5 fix">
                                 <img src="assets/images/img/wwd2.jpg" alt="">
                             </div>
                             <div class="service__content--h5">
                                 <div class="service__icon--h5">
                                     <span class="flaticon-monitor"></span>
                                 </div>
                                 <div class="service__text--h5">
                                     <h4 class="fw-600">Anti Malware Protection</h4>
                                     <p>Virus and Malware Protection <br>

We ensure total protection of your systems from virus and malware threats that are common in cyber space</p>
                                     <a href="#"><i class="far fa-long-arrow-right"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 mb-30">
                         <div class="service__block--h5 position-relative white-bg">
                             <div class="service__thumb--h5 fix">
                                 <img src="assets/images/img/wwd1.jpg" alt="">
                             </div>
                             <div class="service__content--h5">
                                 <div class="service__icon--h5">
                                     <span class="flaticon-server-1"></span>
                                 </div>
                                 <div class="service__text--h5">
                                     <h4 class="fw-600">IT Support</h4>
                                     <p>System Support <br>

We ensure our IT Support services improves on your systems and hardware functionality through preventive maintenance <br><br></p>
                                     <a href="#"><i class="far fa-long-arrow-right"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 mb-30">
                         <div class="service__block--h5 position-relative white-bg">
                             <div class="service__thumb--h5 fix">
                                 <img src="assets/images/img/wwd3.jpg" alt="">
                             </div>
                             <div class="service__content--h5">
                                 <div class="service__icon--h5">
                                     <span class="flaticon-server-1"></span>
                                 </div>
                                 <div class="service__text--h5">
                                     <h4 class="fw-600">
IT Monitoring</h4>
                                     <p>Health Check <br>

We provide often system checks and conditioning to ensure seamless functioning of the systems<br><br></p>
                                     <a href="#"><i class="far fa-long-arrow-right"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
        <!-- Company History End -->
        <!-- Team Member -->
        <section class="contacts--area position-relative grey-bg" data-background="assets/images/shape/contacts_shape_bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 position-relative">
                                <!-- <img class="contacts__help--bg" src="assets/images/shape/help-ma-bg.png" alt=""> -->
                                <div class="contacts__mcp contacts__mcp--h2 aos-init aos-animate" data-aos="fade-right">
                                    <img src="assets/images/new/phot1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="theme text-right position-relative">
                                    <span class="theme__small--title fw-700 text-uppercase text-right theme__small--title-right">need
                                        helps<span></span></span>
                                    <h2 class="theme__big--title fw-700 mb-25">Get in touch, send us an e-mail or call us</h2>
                                    <p class="mb-35 contacts__text--h2">
                                     Whether you are looking for information on any of the  programs or have any other questions, please feel free to contact us at Trianchor Data SOLUTIONS. Our staff is always happy to answer your questions.</p>
                                    <a href="{!! url('/About-Us') !!}" class="btn btn--blue btn--icon white-color aos-init aos-animate" data-aos="fade-up">Get
                                        started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Project  end -->

        <!-- Company statistics -->
        <section class="statistics--area pt-125 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="theme text-center">
                            <span class="theme__small--title fw-700 text-uppercase"><span></span>company statistics<span></span></span>
                            <h2 class="theme__big--title fw-700 mb-80">We are establish it consulting & digital solutions company</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-2 col-md-6 mb-30">
                        <div class="statistics__block statistics__block--h2">
                            <span class="fw-600 theme-color">
                                <i class="fal fa-dharmachakra theme-color d-block"></i>
                            </span>
                            <p><span class="counter">78</span> <sup><i class="fal fa-plus"></i></sup></p>
                            <h5 class="mb-10 primary-color">Project Complete</h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-30">
                        <div class="statistics__block statistics__block--h2">
                            <span class="fw-600 theme-color">
                                <i class="fal fa-crown theme-color d-block"></i>
                            </span>
                            <p><span class="counter">5</span> <sup><i class="fal fa-plus"></i></sup></p>
                            <h5 class="mb-10 primary-color">Year of experience</h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-30">
                        <div class="statistics__block statistics__block--h2">
                            <span class="fw-600 theme-color">
                                <i class="fal fa-heart theme-color d-block"></i>
                            </span>
                            <p><span class="counter">98</span> <sup><i class="fal fa-plus"></i></sup></p>
                            <h5 class="mb-10 primary-color">Satisfied Clients</h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-30">
                        <div class="statistics__block statistics__block--h2">
                            <span class="fw-600 theme-color">
                                <i class="fal fa-head-side-headphones theme-color d-block"></i>
                            </span>
                            <p><span class="counter">12</span> <sup><i class="fal fa-plus"></i></sup></p>
                            <h5 class="mb-10 primary-color">Expert Consulatant</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company statistics End -->

        <!-- Review area -->
        <section class="review--area review--minus">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-30">
                        <div class="review__img aos-init aos-animate" data-aos="fade-up">
                            <img src="assets/images/new/profile.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 mb-30">
                        <div class="review__active">
                            <div class="review__single">
                                <div class="review--header d-flex align-items-center position-relative">
                                    <i class="review__quote fal fa-quote-left"></i>
                                    <div class="review__header--img">
                                        <!-- <img src="assets/images/img/review.png" alt=""> -->
                                    </div>
                                    <div class="review__header--text pl-30">
                                        <h4>Samuel K. Mwangi</h4>
                                        <h6 class="primary-color fw-400 text-uppercase mb-0">Engineer</h6>
                                    </div>
                                </div>
                                <div class="review__content">
                                    <p>Propelling our success is a dedicated team of very skilled and driven personnel supported by an existing network of strategic partnerships comprised of industry leading OEMs (Original Equipment Manufacturers) and Vendors. As a result, we pride ourselves on staying ahead of competition with a cabinet decorated with some of the most advanced technology status certifications to match. </p>
                                </div>
                            </div>
                            <div class="review__single">
                                <div class="review--header d-flex align-items-center position-relative">
                                    <i class="review__quote fal fa-quote-left"></i>
                                    <div class="review__header--img">
                                        <!-- <img src="assets/images/img/review.png" alt=""> -->
                                    </div>
                                    <div class="review__header--text pl-30">
                                        <h4>Samuel K. Mwangi</h4>
                                        <h6 class="primary-color fw-400 text-uppercase mb-0">Engineer</h6>
                                    </div>
                                </div>
                                <div class="review__content">
                                    <p>Propelling our success is a dedicated team of very skilled and driven personnel supported by an existing network of strategic partnerships comprised of industry leading OEMs (Original Equipment Manufacturers) and Vendors. As a result, we pride ourselves on staying ahead of competition with a cabinet decorated with some of the most advanced technology status certifications to match. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sponsor-area pt-100 pb-130">
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
        <!-- Sponsors area End -->
        <!-- Contact Form-->
        <div class="contacts">
            <div class="contacts--bg position-relative pt-125 pb-100" data-background="assets/images/img/contact-bg.jpg" data-overlay="theme" data-opacity="95">
                <div class="container">
                    <div class="row align-items-end justify-content-end">
                        <div class="col-xl-6 col-lg-8 mb-70">
                            <div class="theme">
                                <h2 class="theme__big--title white-color fw-700">Don't hesitate to contact with us or say hello</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 mb-70 d-none d-md-block">
                            <div class="theme text-right position-relative">
                                <span class="add-btn"><i class="fal fa-plus"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="contacts__form" action="#">
                                <div class="row">
                                    <div class="col-lg-4 mb-30">
                                        <div class="contacts__input position-relative">
                                            <input type="text" placeholder="Full Name Here">
                                            <i class="fal fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-30">
                                        <div class="contacts__input position-relative">
                                            <input type="text" placeholder="Enter Your Email">
                                            <i class="fal fa-envelope-open"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-30">
                                        <div class="contacts__input position-relative">
                                            <input type="text" placeholder="Phone Number">
                                            <i class="fal fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-30">
                                        <div class="contacts__input position-relative">
                                            <select>
                                                <option value="Security Surveillance System">Security Surveillance Systems</option>
                             <option value="Computer Systems Installatio">Computer Systems Installation</option>
                             <option value="Support and Consultancy">Support and Consultancy </option>
                             <option value="General Office Supplies">General Office Supplies</option>
                             <option value="Access Control">Access Control (Biometric)</option>
                             <option value="Network Installation and Configuration">Network Installation and Configuration</option>
                                            </select>
                                            <i class="fal fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-50">
                                        <div class="contacts__input position-relative">
                                            <textarea placeholder="Write Here"></textarea>
                                            <!-- <i class="fal fa-angle-down"></i> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-30">
                                        <div class="contacts__input position-relative text-center">
                                            <button class="btn btn--icon">send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
    
