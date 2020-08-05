@extends('layouts.index')
@section('title', 'Our Blogs | IT service provider company in kenya')
@section('content')

  <div class="page-title-area page-title-padding pos-relative gray-bg fix"
            data-background="assets/images/new/blog.jpg" data-overlay="theme" data-opacity="7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title">
                            <h3 class="white-color">Our Blogs</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{!! url('/'); !!}">Home</a></li>
                                <li>Our Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Blog Grid -->
        <section class="blog pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog__block blog__block--h3 position-relative mb-60">
                            <div class="blog__thumb blog__thumb--h3 position-relative fix mb-30">
                                <a href="#"><img src="assets/images/new/data.jpg" alt=""></a>
                                <div class="blog__meta--s2">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user"></i><span>Soamlia</span></a></li>
                                        <li><a href="#"><i class="fal fa-calendar-alt"></i><span>05 Aug 2019</span></a></li>
                                        <li><a href="#"><i class="far fa-comments"></i><span>Comments (03)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog__content">
                                <h2 class="blog__title blog__title--s2 mb-15"><a href="blog-details.html">Data Backup Strategy: Step by Step Guide for Small Business in Kenya</a></h2>
                                <p class="mb-30">A data backup strategy is a must have for all business including if you're running a small business.  Data...</p>
                                <a class="btn btn--icon btn--grey theme-color">learn more</a>
                            </div>
                        </div>
                        <div class="blog__block blog__block--h3 position-relative mb-60">
                            <div class="blog__thumb blog__thumb--h3 position-relative fix mb-30">
                                <a href="#"><img src="assets/images/new/root.jpg" alt=""></a>
                                <div class="blog__meta--s2">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user"></i><span>Soamlia</span></a></li>
                                        <li><a href="#"><i class="fal fa-calendar-alt"></i><span>05 Aug 2019</span></a></li>
                                        <li><a href="#"><i class="far fa-comments"></i><span>Comments (03)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog__content">
                                <h2 class="blog__title blog__title--s2 mb-15"><a href="blog-details.html">8 Best Server Monitoring Tools for Small Business</a></h2>
                                <p class="mb-30">while auto pilot is one technology we all would love to have everywhere, unfortunately its not so. Server Monitoring... </p>
                                <a class="btn btn--icon btn--grey theme-color">learn more</a>
                            </div>
                        </div>
                        <div class="blog__block blog__block--h3 position-relative mb-60">
                            <div class="blog__thumb blog__thumb--h3 position-relative fix mb-30">
                                <a href="#"><img src="assets/images/new/server.jpg" alt=""></a>
                                <div class="blog__meta--s2">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user"></i><span>Soamlia</span></a></li>
                                        <li><a href="#"><i class="fal fa-calendar-alt"></i><span>05 Aug 2019</span></a></li>
                                        <li><a href="#"><i class="far fa-comments"></i><span>Comments (03)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog__content">
                                <h2 class="blog__title blog__title--s2 mb-15"><a href="blog-details.html">How to prevent data breach</a></h2>
                                <p class="mb-30">While you can never completely prevent a data breach, here are the fundamental steps you can take to mitigate risk and protect mission-critical assets. ></p>
                                <a class="btn btn--icon btn--grey theme-color">learn more</a>
                            </div>
                        </div>

                        <div class="blog__pagination mb-30">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pt-0 pb-0 border-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="fal fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="fal fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__widget mb-60">
                            <form class="blog__widget--search position-relative">
                                <input type="text" placeholder="Search">
                                <button><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog__widget blog__widget--padding mb-60">
                            <div class="blog__widget--cate">
                                <h4 class="blog__widget--title mb-40">Category</h4>
                                <ul>
                                    <li><a href="#">IT Consulting<span>(8)</span></a></li>
                                    <li><a href="#">General office<span>(3)</span></a></li>
                                    <li><a href="#">computer accessories<span>(5)</span></a></li>
                                    <li><a href="#">Access controlls<span>(5)</span></a></li>
                                    <li><a href="#">Server Security<span>(5)</span></a></li>
                                    <li><a href="#">CCTVS<span>(5)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection