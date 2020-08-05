@extends('layouts.index')
@section('title', 'About Us | IT service provider company in kenya')
@section('content')

<div class="page-title-area page-title-padding pos-relative gray-bg fix"
            data-background="assets/images/new/about-us.png" data-overlay="theme" data-opacity="7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 text-center">
                        <div class="page-title">
                            <h3 class="white-color">About Us</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- About -->
        <section class="feature feature-area pt-125 pb-100 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-30">
                        <div class="about-ex theme">
                            <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>about Trianchor</span>
                            <h2 class="theme-color fw-700 mb-30">More than 5+
                                years we provide
                                it solution, digital
                                marketing, cyber
                                solutions
                            </h2>
                            <!-- <p class="mb-20">But I must explain to you how all this mistaken idea of denounc pleasure and praising
                                pain was born</p> -->
                        </div>
                    </div>
                    <div class="col-lg-7 mb-30">
                        <div class="about-img position-relative">
                            <img src="assets/images/new/about.jpg" alt="">
                            <div class="about-img--2 d-none d-md-block">
                                <!-- <img src="assets/images/img/about-img-ex2.jpg" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Servcies -->
        <section class="service position-relative fix pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30 text-center">
                        <div class="about-service position-relative white-bg">
                            <img src="assets/images/new/history-1.png" alt="">
                            <div class="about-service--content">
                                <h4 class="service__title fw-600">Comapny History</h4>
                                <p class="mb-20">Trianchor Data Solutions Limited is a certified company, founded in the year 2018 by Kenyan citizens. It seeks to instigate and adopt flexible business practices that will enable client entities to operate more efficiently and produce more value.</p>
                                <a href="#" class="service__link--h4 text-uppercase fw-700"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 text-center">
                        <div class="about-service position-relative white-bg">
                            <img src="assets/images/new/mission.jpg" alt="">
                            <div class="about-service--content">
                                <h4 class="service__title fw-600">Mission</h4>
                                <p class="mb-20">Through quality, affordable andcustomized  services.<br><br><br></p>
                                <a href="#" class="service__link--h4 text-uppercase fw-700"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 text-center">
                        <div class="about-service position-relative white-bg">
                            <img src="assets/images/new/viss.jpg" alt="">
                            <div class="about-service--content">
                                <h4 class="service__title fw-600">Vission</h4>
                                <p class="mb-20">Provision of foods and services for a better tomorrow<br><br><br></p>
                                <a href="#" class="service__link--h4 text-uppercase fw-700"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Servcies end -->

        <!-- Consultation -->
        <section class="consult consult__bg consult__bg--h5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="position-relative consult-box--ex">
                            <img src="assets/images/shape/consult-shape1.png" alt=""
                                class="consult__shape consult__shape1">
                            <img src="assets/images/shape/consult-shape2.png" alt=""
                                class="consult__shape consult__shape2">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="theme">
                                        <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>get
                                            consultation</span>
                                        <h2 class="theme__big--title fw-700 mb-35">Need consultation about IT solutions ? </h2>
                                        <div class="consult-button ">
                                            <a href="{!! url('/Contact-Us'); !!}"
                                                class="btn btn--blue btn--icon white-color aos-init aos-animate"
                                                data-aos="fade-up">Get started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 offset-xl-1 col-lg-5 d-none d-lg-block">
                                    <div class="consult__thumb">
                                        <!-- <img src="assets/images/img/consult-right-thumb-ex.png" alt=""> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Consultation End -->

        <!-- Feature -->
        
        <!-- Feature End -->

        <!-- Company statistics -->
        <section class="team-area pt-125 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-8 mb-30">
                        <div class="theme">
                            <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>team member</span>
                            <h2 class="theme__big--title fw-700 mb-25">Meet our exclusive team member that provides solutions</h2>
                           <!--  <p class="mb-40">But I must explain to you how all this mistaken idea of denounc ing pleasure and praising pain was born and I will give yomplete acount of the system, and expound the actua</p> -->
                            <a href="about-details.html" class="btn btn--blue btn--icon white-color aos-init aos-animate" data-aos="fade-up">Get started</a>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 text-center team__col1">
                                <div class="team team--h2 mb-30">
                                    <div class="team__thumb--h2 mb-25 position-relative">
                                        <!-- <img class="img" src="assets/images/team/team-thumb-h2-1.jpg" alt=""> -->
                                        <div class="team__social team__social--h2">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team__content team__content--h2">
                                        <h3 class="fw-700">Eric Mutinda Jona</h3>
                                        <h6 class="primary-color text-uppercase fw-400 mb-0">Manager</h6>
                                    </div>
                                </div>
                                <div class="team team--h2 mb-30">
                                    <div class="team__thumb--h2 mb-25 position-relative">
                                        <!-- <img class="img" src="assets/images/team/team-thumb-h2-3.jpg" alt=""> -->
                                        <div class="team__social team__social--h2">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team__content team__content--h2">
                                        <h3 class="fw-700">Kevin M. Njuguna</h3>
                                        <h6 class="primary-color text-uppercase fw-400 mb-0">Support</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 text-center team__col2">
                                <div class="team team--h2 mb-30">
                                    <div class="team__thumb--h2 mb-25 position-relative">
                                        <!-- <img class="img" src="assets/images/team/team-thumb-h2-2.jpg" alt=""> -->
                                        <div class="team__social team__social--h2">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team__content team__content--h2">
                                        <h3 class="fw-700">Samuel k. Mwangi</h3>
                                        <h6 class="primary-color text-uppercase fw-400 mb-0">Engineer</h6>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company statistics End -->

        <!-- Review area -->
        <section class="review--area pt-125 position-relative">
            <img src="assets/images/icon/h4-quotes-icon.png" alt="" class="review__quotes--icon">
            <img src="assets/images/shape/rev-shape-ex.png" alt="Shape" class="review-shape--line aos-init aos-animate"
                data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="9000">
            <div class="review__shape review__shape--ex"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="theme text-center">
                            <span class="theme__small--title fw-700 text-uppercase color-text-2"><span class="white-line"></span>our testimonails<span class="white-line"></span></span>
                            <h2 class="theme__big--title fw-700 mb-80 white-color">What’s our customer say
                                about our agency</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="review__active--h2 review__active--h4 row">
                            <div class="review__single col-lg-4 mb-80">
                                <div class="review__wrapper review__wrapper--h4 white-bg">
                                    <div class="review__content review__content--h4 position-relative">
                                        <h5 class="mb-20 primary-color fw-400"><i class="fal fa-quote-left"></i>We could not be more pleased! We love your staff that we have worked with.They are so great to work with and are quick to respond to anything we ask! Thank you for all your help, suggestions, and patience while decisions were made. You all are a top notch business and we will recommend your services!.<br><br><br></h5>
                                        
                                    </div>
                                    <div class="review--header--h2 position-relative d-flex align-items-center">
                                        <div class="review--author--img position-relative">
                                            <!-- <img src="assets/images/review/review-h4-thumb-1.png" alt=""> -->
                                        </div>
                                        <div class="review__header--text pl-15">
                                            <h4>CEO Ecore technologies</h4>
                                            <!-- <h6 class="primary-color fw-400 text-uppercase mb-0">software engineer</h6> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review__single col-lg-4 mb-80">
                                <div class="review__wrapper review__wrapper--h4 white-bg">
                                    <div class="review__content review__content--h4 position-relative">
                                        <h5 class="mb-20 primary-color fw-400"><i class="fal fa-quote-left"></i>We chose IT Decisions because of their local presence in Harrisonburg as well as the large support team. We appreciate the knowledge and experience that they have brought to multiple larger projects as well as supporting the day to day IT needs of our four branches. In addition their staff are professional and yet very personable, so we thoroughly enjoy working with them.</h5>
                                       <!--  <h5 class="fw-400 mb-30">Accusum doloremqudantiues totam reme aperiam eaque system</h5> -->
                                    </div>
                                    <div class="review--header--h2 position-relative d-flex align-items-center">
                                        <div class="review--author--img position-relative">
                                            <!-- <img src="assets/images/review/review-h4-thumb-1.png" alt=""> -->
                                        </div>
                                        <div class="review__header--text pl-15">
                                            <h4>Excel chemicals</h4>
                                            <!-- <h6 class="primary-color fw-400 text-uppercase mb-0">software engineer</h6> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review__single col-lg-4 mb-80">
                                <div class="review__wrapper review__wrapper--h4 white-bg">
                                    <div class="review__content review__content--h4 position-relative">
                                        <h5 class="mb-20 primary-color fw-400"><i class="fal fa-quote-left"></i>We really appreciate all the service you’ve provided us over these many years. Your level of dependability and high quality service is truly outstanding, and very impressive compared to other service providers of any sort, especially these days… I’m sure we will continue to need your help for many, many years to come.<br><br><br></h5>
                                       <!--  <h5 class="fw-400 mb-30">Accusum doloremqudantiues totam reme aperiam eaque system</h5> -->
                                    </div>
                                    <div class="review--header--h2 position-relative d-flex align-items-center">
                                        <div class="review--author--img position-relative">
                                            <!-- <img src="assets/images/review/review-h4-thumb-1.png" alt=""> -->
                                        </div>
                                        <div class="review__header--text pl-15">
                                            <h4>Anqad systems ltd</h4>
                                           <!--  <h6 class="primary-color fw-400 text-uppercase mb-0">software engineer</h6> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review__single col-lg-4 mb-80">
                                <div class="review__wrapper review__wrapper--h4 white-bg">
                                    <div class="review__content review__content--h4 position-relative">
                                        <h5 class="mb-20 primary-color fw-400"><i class="fal fa-quote-left"></i>The entire team over at IT Decisions have been extremely professional and easy to work with. They are always quick to respond and are always willing to go the extra mile to meet your needs. Working with IT Decisions has helped us save time and money with improved performance and security. I highly recommend IT Decisions for anyone with IT needs.<br><br></h5>
                                        <!-- <h5 class="fw-400 mb-30">Accusum doloremqudantiues totam reme aperiam eaque system</h5> -->
                                    </div>
                                    <div class="review--header--h2 position-relative d-flex align-items-center">
                                        <div class="review--author--img position-relative">
                                            <!-- <img src="assets/images/review/review-h4-thumb-1.png" alt=""> -->
                                        </div>
                                        <div class="review__header--text pl-15">
                                            <h4>County supermarket</h4>
                                           <!--  <h6 class="primary-color fw-400 text-uppercase mb-0">software engineer</h6> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Review area End -->

        <!-- Sponsors area -->
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

@endsection