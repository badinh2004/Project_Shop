@extends('fe.master')
@section('main_master')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Portfolio Grid</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Portfolio</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start portfolio section -->
        <section class="portfolio__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Our Portfolio</span>
                    <h2 class="section__heading--maintitle">Watch Our Portfolio</h2>
                </div>
                <div class="portfolio__section--inner">
                    <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-2 mb--n30">
                        <div class="col mb-30">
                            <div class="portfolio__items">
                                <div class="portfolio__items--thumbnail position__relative">
                                    <a class="portfolio__items--thumbnail__link display-block glightbox"
                                        data-gallery="portfolio" href="{{ asset('assets/img/other/portfolio1.png')}}"><img
                                            class="portfolio__items--thumbnail__img display-block"
                                            src="{{ asset('assets/img/other/portfolio1.png')}}" alt="portfolio-img">
                                        <div class="portfolio__view--icon">
                                            <span class="portfolio__view--icon__link "><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="39.697" height="27.066"
                                                    viewBox="0 0 39.697 27.066">
                                                    <path
                                                        d="M20.849,4.5A21.341,21.341,0,0,0,1,18.033a21.322,21.322,0,0,0,39.7,0A21.341,21.341,0,0,0,20.849,4.5Zm0,22.555a9.022,9.022,0,1,1,9.022-9.022A9.025,9.025,0,0,1,20.849,27.055Zm0-14.435a5.413,5.413,0,1,0,5.413,5.413A5.406,5.406,0,0,0,20.849,12.62Z"
                                                        transform="translate(-1 -4.5)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="portfolio__items">
                                <div class="portfolio__items--thumbnail position__relative">
                                    <a class="portfolio__items--thumbnail__link display-block glightbox"
                                        data-gallery="portfolio" href="{{ asset('assets/img/other/portfolio2.png')}}"><img
                                            class="portfolio__items--thumbnail__img display-block"
                                            src="{{ asset('assets/img/other/portfolio2.png')}}" alt="portfolio-img">
                                        <div class="portfolio__view--icon">
                                            <span class="portfolio__view--icon__link "><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="39.697" height="27.066"
                                                    viewBox="0 0 39.697 27.066">
                                                    <path
                                                        d="M20.849,4.5A21.341,21.341,0,0,0,1,18.033a21.322,21.322,0,0,0,39.7,0A21.341,21.341,0,0,0,20.849,4.5Zm0,22.555a9.022,9.022,0,1,1,9.022-9.022A9.025,9.025,0,0,1,20.849,27.055Zm0-14.435a5.413,5.413,0,1,0,5.413,5.413A5.406,5.406,0,0,0,20.849,12.62Z"
                                                        transform="translate(-1 -4.5)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="portfolio__items">
                                <div class="portfolio__items--thumbnail position__relative">
                                    <a class="portfolio__items--thumbnail__link display-block glightbox"
                                        data-gallery="portfolio" href="{{ asset('assets/img/other/portfolio3.png')}}"><img
                                            class="portfolio__items--thumbnail__img display-block"
                                            src="{{ asset('assets/img/other/portfolio3.png')}}" alt="portfolio-img">
                                        <div class="portfolio__view--icon">
                                            <span class="portfolio__view--icon__link "><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="39.697" height="27.066"
                                                    viewBox="0 0 39.697 27.066">
                                                    <path
                                                        d="M20.849,4.5A21.341,21.341,0,0,0,1,18.033a21.322,21.322,0,0,0,39.7,0A21.341,21.341,0,0,0,20.849,4.5Zm0,22.555a9.022,9.022,0,1,1,9.022-9.022A9.025,9.025,0,0,1,20.849,27.055Zm0-14.435a5.413,5.413,0,1,0,5.413,5.413A5.406,5.406,0,0,0,20.849,12.62Z"
                                                        transform="translate(-1 -4.5)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="portfolio__items">
                                <div class="portfolio__items--thumbnail position__relative">
                                    <a class="portfolio__items--thumbnail__link display-block glightbox"
                                        data-gallery="portfolio" href="{{ asset('assets/img/other/portfolio4.png')}}"><img
                                            class="portfolio__items--thumbnail__img display-block"
                                            src="{{ asset('assets/img/other/portfolio4.png')}}" alt="portfolio-img">
                                        <div class="portfolio__view--icon">
                                            <span class="portfolio__view--icon__link "><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="39.697" height="27.066"
                                                    viewBox="0 0 39.697 27.066">
                                                    <path
                                                        d="M20.849,4.5A21.341,21.341,0,0,0,1,18.033a21.322,21.322,0,0,0,39.7,0A21.341,21.341,0,0,0,20.849,4.5Zm0,22.555a9.022,9.022,0,1,1,9.022-9.022A9.025,9.025,0,0,1,20.849,27.055Zm0-14.435a5.413,5.413,0,1,0,5.413,5.413A5.406,5.406,0,0,0,20.849,12.62Z"
                                                        transform="translate(-1 -4.5)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="portfolio__items">
                                <div class="portfolio__items--thumbnail position__relative">
                                    <a class="portfolio__items--thumbnail__link display-block glightbox"
                                        data-gallery="portfolio" href="{{ asset('assets/img/other/portfolio5.png')}}"><img
                                            class="portfolio__items--thumbnail__img display-block"
                                            src="{{ asset('assets/img/other/portfolio5.png')}}" alt="portfolio-img">
                                        <div class="portfolio__view--icon">
                                            <span class="portfolio__view--icon__link "><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="39.697" height="27.066"
                                                    viewBox="0 0 39.697 27.066">
                                                    <path
                                                        d="M20.849,4.5A21.341,21.341,0,0,0,1,18.033a21.322,21.322,0,0,0,39.7,0A21.341,21.341,0,0,0,20.849,4.5Zm0,22.555a9.022,9.022,0,1,1,9.022-9.022A9.025,9.025,0,0,1,20.849,27.055Zm0-14.435a5.413,5.413,0,1,0,5.413,5.413A5.406,5.406,0,0,0,20.849,12.62Z"
                                                        transform="translate(-1 -4.5)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="portfolio__items">
                                <div class="portfolio__items--thumbnail position__relative">
                                    <a class="portfolio__items--thumbnail__link display-block glightbox"
                                        data-gallery="portfolio" href="{{ asset('assets/img/other/portfolio1.png')}}"><img
                                            class="portfolio__items--thumbnail__img display-block"
                                            src="{{ asset('assets/img/other/portfolio1.png')}}" alt="portfolio-img">
                                        <div class="portfolio__view--icon">
                                            <span class="portfolio__view--icon__link "><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="39.697" height="27.066"
                                                    viewBox="0 0 39.697 27.066">
                                                    <path
                                                        d="M20.849,4.5A21.341,21.341,0,0,0,1,18.033a21.322,21.322,0,0,0,39.7,0A21.341,21.341,0,0,0,20.849,4.5Zm0,22.555a9.022,9.022,0,1,1,9.022-9.022A9.025,9.025,0,0,1,20.849,27.055Zm0-14.435a5.413,5.413,0,1,0,5.413,5.413A5.406,5.406,0,0,0,20.849,12.62Z"
                                                        transform="translate(-1 -4.5)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End portfolio section -->

        <!-- Start brand logo section -->
        <div class="brand__logo--section section--padding pt-0">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="brand__logo--section__inner d-flex justify-content-between align-items-center">
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="{{ asset('assets/img/logo/brand-logo1.png')}}" alt="brand img">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="{{ asset('assets/img/logo/brand-logo2.png')}}" alt="brand img">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="{{ asset('assets/img/logo/brand-logo3.png')}}" alt="brand img">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="{{ asset('assets/img/logo/brand-logo4.png')}}" alt="brand img">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="{{ asset('assets/img/logo/brand-logo5.png')}}" alt="brand img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End brand logo section -->

        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="{{ asset('assets/img/other/shipping1.png')}}" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Shipping</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="{{ asset('assets/img/other/shipping2.png')}}" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Payment</h2>
                            <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="{{ asset('assets/img/other/shipping3.png')}}" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Return</h2>
                            <p class="shipping__items2--content__desc">30 day guarantee</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="{{ asset('assets/img/other/shipping4.png')}}" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Support</h2>
                            <p class="shipping__items2--content__desc">Support every time</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->
    </main>
@endsection
