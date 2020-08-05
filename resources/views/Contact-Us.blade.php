@extends('layouts.index')
@section('title', 'Contact Us | IT service provider company in kenya')
@section('content')

<div class="page-title-area page-title-padding pos-relative gray-bg fix"
            data-background="assets/images/new/contact-us.png" data-overlay="theme" data-opacity="7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title">
                            <h3 class="white-color">Contact Us</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{!! url('/'); !!}">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Contacts -->
        <section class="contacts pt-125 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-30">
                        <div class="theme">
                            <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>contact us</span>
                            <h2 class="theme__big--title fw-700 mb-25">We have a expert teams don’t hesite <br> to contact us</h2>
                        </div>
                        <div class="contacts__social">
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/itsTADS"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.pigiame.co.ke/biz/trianchor-data-solutions"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/samuel-kaira-960339104/?originalSubdomain=ke"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google"></i></a></li>
                                 
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 mb-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-40">
                                <div class="contacts__address">
                                    <i class="fal fa-envelope-open"></i>
                                    <h5 class="primary-color">Email Address</h5>
                                    <h4>info@trianchor.co.ke</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-40">
                                <div class="contacts__address">
                                    <i class="fal fa-phone"></i>
                                    <h5 class="primary-color">Phone Number</h5>
                                    <h4>+254 701 927 752</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-40">
                                <div class="contacts__address">
                                    <i class="fal fa-map-marked-alt"></i>
                                    <h5 class="primary-color">Head Office</h5>
                                    <h4>Nairobi Kenya</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-40">
                                <div class="contacts__address">
                                    <i class="fal fa-home"></i>
                                    <h5 class="primary-color">Office Location</h5>
                                    <h4>Moi avenue, Nairobi</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contacts End -->

        <!-- contact-form-area start -->
        <section class="contact-form-area">
            <div class="container">
                <div class="form-wrapper grey-bg">
                    <div class="row align-items-center">
                        <div class="col-sm-12 text-center mb-40">
                            <div class="theme">
                                <h2 class="black-color mb-15">Send Us a Message</h2>
                               <!--  <h5 class="fw-500 primary-color">How To Build A Simple Cryptocurrency Blockchain In Node.js</h5> -->
                            </div>
                        </div>
                    </div>
                      @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
                    <div class="contact-form">
                        <form id="contact-form" action="{!! url('/contacts'); !!}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box phone-icon mb-30">
                                        <input type="text" name="phone" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="subject" placeholder="Your Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="contact-btn text-center">
                                        <button class="btn btn--grey" type="submit">get action <img
                                                src="assets/img/icon/arrow.png" alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response text-center"></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-area end -->

        <!-- Contact Map Start -->
        <div class="map">
            <div class="container-fluid p-0 fix">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="1300" height="597" id="gmap_canvas" src="https://maps.google.com/maps?q=development%20house%20nairobi&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:597px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:597px;width:100%;}</style></div>
            </div>
        </div>

@endsection