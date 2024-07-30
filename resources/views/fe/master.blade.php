<!doctype html>
<html lang="en">


<!-- Mirrored from risingtheme.com/html/demo-grocee/grocee/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 09:29:17 GMT -->

<head>
    <meta charset="utf-8">
    <title>Grocee - Organic Food HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/glightbox.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

</head>

<body>
@if (session('err'))
<script>
    alert('{{session('err')}}');
</script>
@endif
@if (session('success'))
<script>
    alert('{{session('success')}}');
</script>
@endif

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>

                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>

                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- Start header area -->
    <header class="header__section header__transparent">
        <div class="header__topbar bg__primary2">
            <div class="container">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <p class="wellcome__text text-white m-0">Wellcome You To Grocee Store !</p>
                    <div class="header__topbar--right d-flex align-items-center">
                        <div class="language__currency d-none d-lg-block">
                            <ul class="d-flex align-items-center">
                                <li class="language__currency--list">
                                    <a class="language__switcher text-white" href="#">
                                        <img class="language__switcher--icon__img"
                                            src="{{ asset('assets') }}/img/icon/language-icon.png" alt="currency">
                                        <span>EN</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                                            viewBox="0 0 9.797 6.05">
                                            <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <div class="dropdown__language">
                                        <ul>
                                            <li class="language__items"><a class="language__text"
                                                    href="#">France</a></li>
                                            <li class="language__items"><a class="language__text"
                                                    href="#">Russia</a></li>
                                            <li class="language__items"><a class="language__text"
                                                    href="#">Spanish</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="language__currency--list">
                                    <a class="account__currency--link text-white" href="javascript:void(0)">
                                        <img src="{{ asset('assets') }}/img/icon/usd-icon.png" alt="currency">
                                        <span>USD</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                                            viewBox="0 0 9.797 6.05">
                                            <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <div class="dropdown__currency">
                                        <ul>
                                            <li class="currency__items"><a class="currency__text" href="#">CAD</a>
                                            </li>
                                            <li class="currency__items"><a class="currency__text" href="#">CNY</a>
                                            </li>
                                            <li class="currency__items"><a class="currency__text" href="#">EUR</a>
                                            </li>
                                            <li class="currency__items"><a class="currency__text" href="#">GBP</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="header__widget--social d-flex">
                            <li class="header__widget--social__list">
                                <a class="header__widget--social__icon" target="_blank"
                                    href="https://www.facebook.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                        viewBox="0 0 7.667 16.524">
                                        <path data-name="Path 237"
                                            d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                            transform="translate(-960.13 -345.407)" fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li class="header__widget--social__list">
                                <a class="header__widget--social__icon" target="_blank" href="https://twitter.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                        viewBox="0 0 16.489 13.384">
                                        <path data-name="Path 303"
                                            d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                            transform="translate(-951.23 -1140.849)" fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                            </li>
                            <li class="header__widget--social__list">
                                <a class="header__widget--social__icon" target="_blank"
                                    href="https://www.instagram.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492"
                                        viewBox="0 0 19.497 19.492">
                                        <path data-name="Icon awesome-instagram"
                                            d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                            transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                            <li class="header__widget--social__list">
                                <a class="header__widget--social__icon" target="_blank"
                                    href="https://www.youtube.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                        viewBox="0 0 16.49 11.582">
                                        <path data-name="Path 321"
                                            d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                            transform="translate(-951.269 -1359.8)" fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Youtube</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__header main__header2 header__sticky">
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                            </svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="{{ route('index') }}"><img
                                    class="main__logo--img" src="{{ asset('assets') }}/img/logo/nav-log.png"
                                    alt="logo-img"></a></h1>
                    </div>
                    <div class="header__menu d-none d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="{{ route('index') }}">Home</a>
                                </li>
                                {{-- <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="{{ route('shop') }}">Shop
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__mega--menu d-flex">
                                        <li class="header__mega--menu__li">
                                            <ul class="header__mega--sub__menu">
                                                @foreach ($categorys as $category)
                                                    <li class="header__mega--sub__menu_li">
                                                        <a class="offcanvas__sub_menu_item" href="{{ route('filterProductsByCategory', ['category' => $category->name]) }}">
                                                            {{ $category->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Two</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-details.html">Product Details</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-video.html">Video Product</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-details.html">Variable Product</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-left-sidebar.html">Product Left Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-gallery.html">Product Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Three</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="my-account.html">My Account</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="my-account-2.html">My Account 2</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="404.html">404
                                                        Page</a></li>
                                                @if (auth('customers')->check())
                                                    <li class="header__mega--sub__menu_li"><a href="{{ route('logout') }}"
                                                            class="header__mega--sub__menu--title">Logout</a></li>
                                                @else
                                                    <li class="header__mega--sub__menu_li"><a href="{{ route('login') }}"
                                                            class="header__mega--sub__menu--title">Login Page</a></li>
                                                @endif
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="faq.html">FaqPage</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Four</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="compare.html">Compare Pages</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="checkout.html">Checkout page</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="checkout-2.html">Checkout Style 2</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="checkout-3.html">Checkout Style 3</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="checkout-4.html">Checkout Style 4</a></li>
                                            </ul>
                                        </li> 
                                    </ul>
                                </li> --}}
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="{{ route('shop') }}">Shop
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        @foreach ($categorys as $category)
                                            <li class="header__sub--menu__items">
                                                <a class="header__sub--menu__link" href="{{ route('filterProductsByCategory', ['category' => $category->name]) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="{{route('blogs')}}">Blog
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        @foreach ($categorys as $category)
                                            <li class="header__sub--menu__items">
                                                <a class="header__sub--menu__link" href="{{ route('filterBlogsByCategory', ['category' => $category->name]) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#">Pages
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="{{route('about')}}"
                                                class="header__sub--menu__link">About Us</a></li>
                                        <li class="header__sub--menu__items"><a href="{{route('Cart')}}"
                                                class="header__sub--menu__link">Cart Page</a>
                                        </li>
                                        <li class="header__sub--menu__items"><a href="{{route('portfolio')}}"
                                                class="header__sub--menu__link">Portfolio Page</a></li>
                                        <li class="header__sub--menu__items"><a href="{{route('ViewWish')}}"
                                                class="header__sub--menu__link">Wishlist Page</a>
                                        </li>
                                        @if (auth('customers')->check())
                                            <li class="header__sub--menu__items"><a href="{{ route('logout') }}"
                                                    class="header__sub--menu__link">Logout</a>
                                            </li>
                                        @else
                                            <li class="header__sub--menu__items"><a href="{{ route('login') }}"
                                                    class="header__sub--menu__link">Login</a>
                                            </li>
                                        @endif
                                        {{-- <li class="header__sub--menu__items"><a href="404.html"
                                                class="header__sub--menu__link">Error Page</a>
                                        </li>
                                        <li class="header__menu--items">
                                            <a class="header__menu--link" href="contact.html">Contact </a>
                                        </li> --}}
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__account">
                        <ul class="d-flex">
                            <li class="header__account--items  header__account--search__items d-sm-2-none">
                                <a class="header__account--btn search__open--btn" href="javascript:void(0)"
                                    data-offcanvas>
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 512 512">
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                    </svg>
                                    <span class="visually-hidden">Search</span>
                                </a>
                            </li>
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="{{route('ViewWish')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.541" height="15.557"
                                        viewBox="0 0 18.541 15.557">
                                        <path
                                            d="M71.775,135.51a5.153,5.153,0,0,1,1.267-1.524,4.986,4.986,0,0,1,6.584.358,4.728,4.728,0,0,1,1.174,4.914,10.458,10.458,0,0,1-2.132,3.808,22.591,22.591,0,0,1-5.4,4.558c-.445.282-.9.549-1.356.812a.306.306,0,0,1-.254.013,25.491,25.491,0,0,1-6.279-4.8,11.648,11.648,0,0,1-2.52-4.009,4.957,4.957,0,0,1,.028-3.787,4.629,4.629,0,0,1,3.744-2.863,4.782,4.782,0,0,1,5.086,2.447c.013.019.025.034.057.076Z"
                                            transform="translate(-62.498 -132.915)" fill="currentColor" />
                                    </svg>
                                    <span class="items__count">{{$wish->count()}}</span>
                                </a>
                            </li>
                            @if (auth('customers')->check())
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" title="{{ auth('customers')->user()->name }}" href="{{route('information')}}">
                                        @php
                                            $user = auth('customers')->user();
                                            $image = $user ? $user->image : null;
                                        @endphp
                                        @if ($image && filter_var($image, FILTER_VALIDATE_URL))
                                            <img src="{{ $image }}" class="img-fluid rounded-circle" width="100" height="100">
                                        @elseif ($image)
                                            <img src="{{ asset('storage/images/' . $image) }}" class="img-fluid rounded-circle" width="100" height="100">
                                        @else
                                            <img src="{{ asset('storage/images/avatar.jpg') }}" class="img-fluid rounded-circle" width="100"  height="100"><br>
                                        @endif
                                    </a>
                                </li>
                            @else
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="{{ route('login') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" />
                                            <path
                                                d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                        </svg>
                                        <span class="visually-hidden">My account</span>
                                    </a>
                                </li>
                            @endif
                            <li class="header__account--items">
                                <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                    data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.706" height="15.534"
                                        viewBox="0 0 14.706 13.534">
                                        <g id="cart" transform="translate(0 0)">
                                            <g id="cart_icon">
                                                <path id="Path_16787" data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="#fefefe" />
                                                <path id="Path_16788" data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="#fefefe" />
                                                <path id="Path_16789" data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="#fefefe" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="items__count">{{$carts->count()}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="{{ route('index') }}">
                        <img src="{{ asset('assets') }}/img/logo/nav-log.png" alt="Grocee Logo" width="158"
                            height="36">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('shop') }}">Shop</a>
                            <ul class="offcanvas__sub_menu">
                                @foreach ($categorys as $category)
                                    <li class="offcanvas__sub_menu_li">
                                        <a class="offcanvas__sub_menu_item" href="{{ route('filterProductsByCategory', ['category' => $category->name]) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('blogs') }}">Blog</a>
                            <ul class="offcanvas__sub_menu">
                                @foreach ($categorys as $category)
                                    <li class="offcanvas__sub_menu_li">
                                        <a class="offcanvas__sub_menu_item" href="{{ route('filterBlogsByCategory', ['category' => $category->name]) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Pages</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="{{route('about')}}"
                                        class="offcanvas__sub_menu_item">About Us</a></li>
                                {{-- <li class="offcanvas__sub_menu_li"><a href="contact.html"
                                        class="offcanvas__sub_menu_item">Contact Us</a></li> --}}
                                <li class="offcanvas__sub_menu_li"><a href="{{route('Cart')}}"
                                        class="offcanvas__sub_menu_item">Cart Page</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="{{route('portfolio')}}"
                                        class="offcanvas__sub_menu_item">Portfolio Page</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="{{route('ViewWish')}}"
                                        class="offcanvas__sub_menu_item">Wishlist Page</a></li>
                                @if (auth('customers')->check())
                                    <li class="offcanvas__sub_menu_li"><a href="{{ route('logout') }}"
                                            class="offcanvas__sub_menu_item">Logout</a></li>
                                @else
                                    <li class="offcanvas__sub_menu_li"><a href="{{ route('login') }}"
                                            class="offcanvas__sub_menu_item">Login</a></li>
                                @endif
                                {{-- <li class="offcanvas__sub_menu_li"><a href="404.html" --}}
                                        {{-- class="offcanvas__sub_menu_item">Error Page</a></li> --}}
                            </ul>
                        </li>
                        {{-- <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="about.html">About</a>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                                href="contact.html">Contact</a></li> --}}
                    </ul>
                    <div class="offcanvas__account--items">
                        @if (auth('customers')->check())
                            <a class="offcanvas__account--items__btn d-flex align-items-center"
                                href="{{ route('logout') }}">
                                <span class="offcanvas__account--items__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                    </svg>
                                </span>
                                <span class="offcanvas__account--items__label">Logout</span>
                            </a>
                        @else
                            <a class="offcanvas__account--items__btn d-flex align-items-center"
                                href="{{ route('login') }}">
                                <span class="offcanvas__account--items__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                    </svg>
                                </span>
                                <span class="offcanvas__account--items__label">Login / Register</span>
                            </a>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

        <!-- Start Offcanvas stikcy toolbar -->
            <div class="offcanvas__stikcy--toolbar">
                <ul class="d-flex justify-content-between">
                    <li class="offcanvas__stikcy--toolbar__list">
                        <a class="offcanvas__stikcy--toolbar__btn" href="{{ route('index') }}">
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443"
                                    viewBox="0 0 22 17">
                                    <path fill="currentColor"
                                        d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z">
                                    </path>
                                </svg>
                            </span>
                            <span class="offcanvas__stikcy--toolbar__label">Home</span>
                        </a>
                    </li>
                    <li class="offcanvas__stikcy--toolbar__list">
                        <a class="offcanvas__stikcy--toolbar__btn" href="{{ route('shop') }}">
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51"
                                    height="17.443" viewBox="0 0 448 512">
                                    <path
                                        d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z">
                                    </path>
                                </svg>
                            </span>
                            <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                        </a>
                    </li>
                    <li class="offcanvas__stikcy--toolbar__list ">
                        <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)"
                            data-offcanvas>
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                    viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                </svg>
                            </span>
                            <span class="offcanvas__stikcy--toolbar__label">Search</span>
                        </a>
                    </li>
                    <li class="offcanvas__stikcy--toolbar__list">
                        <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)"
                            data-offcanvas>
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443"
                                    viewBox="0 0 18.51 15.443">
                                    <path
                                        d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z"
                                        transform="translate(-62.393 -135.3)" fill="currentColor" />
                                </svg>
                            </span>
                            <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                            <span class="items__count">{{$carts->count()}}</span>
                        </a>
                    </li>
                    <li class="offcanvas__stikcy--toolbar__list">
                        <a class="offcanvas__stikcy--toolbar__btn" href="{{route('ViewWish')}}">
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.541" height="15.557"
                                    viewBox="0 0 18.541 15.557">
                                    <path
                                        d="M71.775,135.51a5.153,5.153,0,0,1,1.267-1.524,4.986,4.986,0,0,1,6.584.358,4.728,4.728,0,0,1,1.174,4.914,10.458,10.458,0,0,1-2.132,3.808,22.591,22.591,0,0,1-5.4,4.558c-.445.282-.9.549-1.356.812a.306.306,0,0,1-.254.013,25.491,25.491,0,0,1-6.279-4.8,11.648,11.648,0,0,1-2.52-4.009,4.957,4.957,0,0,1,.028-3.787,4.629,4.629,0,0,1,3.744-2.863,4.782,4.782,0,0,1,5.086,2.447c.013.019.025.034.057.076Z"
                                        transform="translate(-62.498 -132.915)" fill="currentColor" />
                                </svg>
                            </span>
                            <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                            <span class="items__count">{{$wish->count()}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        <!-- End Offcanvas stikcy toolbar -->

        <!-- Start offCanvas minicart -->
        @if (auth('customers')->check())
            <div class="offCanvas__minicart">
                <div class="minicart__header ">
                    <div class="minicart__header--top d-flex justify-content-between align-items-center">
                        <h3 class="minicart__title"> Shopping Cart</h3>
                        <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                            </svg>
                        </button>
                    </div>
                    <p class="minicart__header--desc">The organic foods products are limited</p>
                </div>
                <div class="minicart__product">
                    @foreach ($carts as $item)
                        <div class="minicart__product--items d-flex" data-id="{{$item->products->id}}">
                            <div class="minicart__thumb">
                                <a href="product-details.html"><img
                                        src="{{ asset('storage/images/' . $item->products->image) }}" alt="prduct-img"></a>
                            </div>
                            <div class="minicart__text">
                                <h4 class="minicart__subtitle"><a href="">{{ $item->products->name }}</a>
                                </h4>
                                <span class="color__variant"><b>Weight:</b> {{ $item->variants->size }}</span><br>
                                <span class="color__variant" id="price"><b>Price:</b> ${{ $item->variants->sale_price }}</span>
                                <div class="minicart__price d-flex justify-content-between">
                                    {{-- <div>
                                        <span class="color__variant" id="price">${{ $item->variants->sale_price }}</span>
                                    </div> --}}
                                    <div>
                                        <span class="" id="toTal"><b>Quantity: x{{ $item->quantity }}</b></span>
                                    </div>
                                    <div>
                                        <span class="text-danger" id="toTal"><b> ${{ $item->quantity*$item->variants->sale_price }}</b></span>
                                    </div>
                                </div>
                                <div class="minicart__text--footer d-flex align-items-center">
                                    <form action="{{ route('deleteOne', ['id' => $item->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="minicart__product--remove" type="submit">Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="minicart__amount">
                    <div class="minicart__amount_list d-flex justify-content-between">
                        <span>Total:</span>
                        <span class="text-danger">
                            <b>                         
                                @php
                                    $totalPrice = 0;
                                @endphp
                                @foreach ($carts as $value)
                                    @php
                                        $totalPrice += $value->variants->sale_price * $value->quantity;
                                    @endphp
                                @endforeach
                                ${{ $totalPrice }}
                            </b>
                        </span>
                    </div>
                </div>
                <div class="minicart__button d-flex justify-content-center">
                    <a class="btn minicart__button--link" href="{{route('Cart')}}">View cart</a>
                    <a class="btn minicart__button--link" href="{{route('shop')}}">Continue shopping</a>
                </div>
            </div>
        @endif
        <!-- End offCanvas minicart -->

        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form id="searchForm" class="predictive__search--form" action="{{ route('handleSearchQuery') }}" method="GET">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text" name="search" id="queryInput">
                    </label>
                    <button class="predictive__search--button" aria-label="search button" type="submit">
                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/>
                        </svg>
                    </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                    height="30.443" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                </svg>
            </button>
        </div>
        <!-- End serch box area -->
    </header>
    <!-- End header area -->

    @yield('main_master')

    <!-- Start footer section -->
        <footer class="footer__section footer__section3 footer__bg">
            <div class="container">
                <div class="footer__top footer__section3--topbar">
                    <div class="row main__footer--wrapper footer__top--row">
                        <div class="col-lg-3 footer__col--width col-md-7 footer__col--padding footer__col--order">
                            <div class="footer__widget">
                                <h3 class="footer__widget--title sm__footer--widget__bock">About Us
                                    <button class="footer__widget--button" aria-label="footer widget button">
                                        <svg class="footer__widget--title__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394"
                                            viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </h3>
                                <div class="footer__widget--inner">
                                    <a class="footer__widget--logo" href="{{ route('index') }}"><img
                                            src="{{ asset('assets') }}/img/logo/nav-log.png" alt="footer-logo"></a>
                                    <p class="footer__widget--desc m-0">The variety of products available at our store at
                                        the moment is vast, but we still continue to widen our assortment.</p>
                                    <ul class="footer__widget--social d-flex">
                                        <li class="footer__widget--social__list">
                                            <a class="footer__widget--social__icon" target="_blank"
                                                href="https://www.facebook.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                                    viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237"
                                                        d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                        transform="translate(-960.13 -345.407)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="footer__widget--social__list">
                                            <a class="footer__widget--social__icon" target="_blank"
                                                href="https://twitter.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                                    viewBox="0 0 16.489 13.384">
                                                    <path data-name="Path 303"
                                                        d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                        transform="translate(-951.23 -1140.849)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="footer__widget--social__list">
                                            <a class="footer__widget--social__icon" target="_blank"
                                                href="https://www.instagram.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492"
                                                    viewBox="0 0 19.497 19.492">
                                                    <path data-name="Icon awesome-instagram"
                                                        d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                        transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="footer__widget--social__list">
                                            <a class="footer__widget--social__icon" target="_blank"
                                                href="https://www.youtube.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                                    viewBox="0 0 16.49 11.582">
                                                    <path data-name="Path 321"
                                                        d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                        transform="translate(-951.269 -1359.8)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 footer__col--width col-md-4 footer__col--padding">
                            <div class="footer__widget">
                                <h3 class="footer__widget--title">Information
                                    <button class="footer__widget--button" aria-label="footer widget button">
                                        <svg class="footer__widget--title__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394"
                                            viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </h3>
                                <ul class="footer__widget--menu footer__widget--inner">
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="about.html">About Us</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="contact.html">Contact Us</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="{{route('ViewWish')}}">Wishlist</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="portfolio.html">Portfolio</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="privacy-policy.html">Privacy Policy</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="faq.html">Frequently</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 footer__col--width col-md-4 footer__col--padding">
                            <div class="footer__widget">
                                <h3 class="footer__widget--title">Categories
                                    <button class="footer__widget--button" aria-label="footer widget button">
                                        <svg class="footer__widget--title__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394"
                                            viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </h3>
                                <ul class="footer__widget--menu footer__widget--inner">
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="{{ route('shop') }}">All Products</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="shop.html">Grocery & Frozen</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="shop.html">Fresh Fruits</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="shop.html">Package Foods</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="shop.html">Organic Foods</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="shop.html">Health & Wellness</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 footer__col--width col-md-4 footer__col--padding">
                            <div class="footer__widget">
                                <h3 class="footer__widget--title">My Account
                                    <button class="footer__widget--button" aria-label="footer widget button">
                                        <svg class="footer__widget--title__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394"
                                            viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </h3>
                                <ul class="footer__widget--menu footer__widget--inner">
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="my-account.html">My Account</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="{{route('Cart')}}">Shopping Cart</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="checkout.html">Checkout</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="{{ route('login') }}">Login</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="{{ route('login') }}">Register</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                            href="compare.html">Compare</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 footer__col--padding footer__col--order">
                            <div class="footer__widget">
                                <h3 class="footer__widget--title">Newsletter
                                    <button class="footer__widget--button" aria-label="footer widget button">
                                        <svg class="footer__widget--title__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394"
                                            viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </h3>
                                <div class="footer__widget--inner">
                                    <p class="footer__widget--desc m-0">Get updates by subscribe
                                        our weekly newsletter</p>
                                    <div class="newsletter__subscribe">
                                        <form class="newsletter__subscribe--form" action="#">
                                            <label>
                                                <input class="newsletter__subscribe--input"
                                                    placeholder="Your mail here ...." type="text">
                                            </label>
                                            <button class="newsletter__subscribe--button"
                                                type="submit">subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 col-md-auto">
                            <p class="copyright__content">Copyright © 2022 <a
                                    class="copyright__content--link text__primary"
                                    href="{{ route('index') }}">Grocee</a> . All Rights Reserved.Design By Grocee</p>
                        </div>
                        <div class="col-12 col-md-auto">
                            <div class="footer__payment">
                                <ul class="footer__payment--inner d-flex">
                                    <li class="footer__payment--list"><img
                                            src="{{ asset('assets') }}/img/other/payment1.png" alt="payment-img"></li>
                                    <li class="footer__payment--list"><img
                                            src="{{ asset('assets') }}/img/other/payment2.png" alt="payment-img"></li>
                                    <li class="footer__payment--list"><img
                                            src="{{ asset('assets') }}/img/other/payment3.png" alt="payment-img"></li>
                                    <li class="footer__payment--list"><img
                                            src="{{ asset('assets') }}/img/other/payment4.png" alt="payment-img"></li>
                                    <li class="footer__payment--list"><img
                                            src="{{ asset('assets') }}/img/other/payment5.png" alt="payment-img"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="footer__position--shape__one" src="{{ asset('assets') }}/img/other/footer-shape1.png"
                alt="footer-shape">
            <img class="footer__position--shape__two" src="{{ asset('assets') }}/img/other/footer-shape2.png"
                alt="footer-shape">
        </footer>
    <!-- End footer section -->

    <!-- Quickview Wrapper -->
        {{-- 
        <div class="modal" id="modal1" data-animation="slideInUp">
            <div class="modal-dialog quickview__main--wrapper">
                <header class="modal-header quickview__header">
                    <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
                </header>
                <div class="quickview__inner">
                    <div class="row row-cols-lg-2 row-cols-md-2">
                        <div class="col">
                            <div class="quickview__gallery">
                                <div>
                                    <div class="product__media--preview__items">
                                        <img    class="product__media--preview__items--img"
                                                src="{{ asset('assets') }}/img/product/big-product1.jpg"
                                                alt="product-media-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="quickview__info">
                                <form action="#">
                                    <h2 class="product__details--info__title mb-15">Red-tomato-isolated</h2>
                                    <div class="product__details--info__price mb-12">
                                        <span class="current__price">$58.00</span>
                                        <span class="old__price">$68.00</span>
                                    </div>
                                    <div class="product__items--rating d-flex align-items-center mb-12">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div>
                                    <p class="product__details--info__desc mb-10">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit is. Deserunt totam dolores ea numquam labore! Illum magnam totam
                                        tenetur fuga quo dolor.</p>
                                    <div class="product__variant">
                                        <div class="product__variant--list mb-10">
                                            <fieldset class="variant__input--fieldset">
                                                <legend class="product__variant--title mb-8">Color :</legend>
                                                <div class="variant__color d-flex">
                                                    <div class="variant__color--list">
                                                        <input id="color-red1" name="color" type="radio" checked>
                                                        <label class="variant__color--value red" for="color-red1"
                                                            title="Red"><img class="variant__color--value__img"
                                                                src="{{ asset('assets') }}/img/product/product1.png"
                                                                alt="variant-color-img"></label>
                                                    </div>
                                                    <div class="variant__color--list">
                                                        <input id="color-red2" name="color" type="radio">
                                                        <label class="variant__color--value red" for="color-red2"
                                                            title="Black"><img class="variant__color--value__img"
                                                                src="{{ asset('assets') }}/img/product/product2.png"
                                                                alt="variant-color-img"></label>
                                                    </div>
                                                    <div class="variant__color--list">
                                                        <input id="color-red3" name="color" type="radio">
                                                        <label class="variant__color--value red" for="color-red3"
                                                            title="Pink"><img class="variant__color--value__img"
                                                                src="{{ asset('assets') }}/img/product/product3.png"
                                                                alt="variant-color-img"></label>
                                                    </div>
                                                    <div class="variant__color--list">
                                                        <input id="color-red4" name="color" type="radio">
                                                        <label class="variant__color--value red" for="color-red4"
                                                            title="Orange"><img class="variant__color--value__img"
                                                                src="{{ asset('assets') }}/img/product/product4.png"
                                                                alt="variant-color-img"></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="product__variant--list mb-15">
                                            <fieldset class="variant__input--fieldset">
                                                <legend class="product__variant--title mb-8">Weight :</legend>
                                                <ul class="variant__size d-flex">
                                                    <li class="variant__size--list">
                                                        <input id="weight1" name="weight" type="radio" checked>
                                                        <label class="variant__size--value red" for="weight1">5
                                                            kg</label>
                                                    </li>
                                                    <li class="variant__size--list">
                                                        <input id="weight2" name="weight" type="radio">
                                                        <label class="variant__size--value red" for="weight2">3
                                                            kg</label>
                                                    </li>
                                                    <li class="variant__size--list">
                                                        <input id="weight3" name="weight" type="radio">
                                                        <label class="variant__size--value red" for="weight3">2
                                                            kg</label>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </div>
                                        <div class="quickview__variant--list quantity d-flex align-items-center mb-10">
                                            <div class="quantity__box">
                                                <button type="button"
                                                    class="quantity__value quickview__value--quantity decrease"
                                                    aria-label="quantity value" value="Decrease Value">-</button>
                                                <label>
                                                    <input type="number"
                                                        class="quantity__number quickview__value--number" value="1"
                                                        data-counter />
                                                </label>
                                                <button type="button"
                                                    class="quantity__value quickview__value--quantity increase"
                                                    aria-label="quantity value" value="Increase Value">+</button>
                                            </div>
                                            <button class="btn quickview__cart--btn" type="submit">Add To Cart</button>
                                        </div>
                                        <div class="quickview__variant--list variant__wishlist mb-10">
                                            <a class="variant__wishlist--icon" href="wishlist.html"
                                                title="Add to wishlist">
                                                <svg class="quickview__variant--wishlist__svg"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                </svg>
                                                Add to Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quickview__social d-flex align-items-center">
                                        <label class="quickview__social--title">Social Share:</label>
                                        <ul class="quickview__social--wrapper mt-0 d-flex">
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank"
                                                    href="https://www.facebook.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.667"
                                                        height="16.524" viewBox="0 0 7.667 16.524">
                                                        <path data-name="Path 237"
                                                            d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                            transform="translate(-960.13 -345.407)"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="visually-hidden">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank"
                                                    href="https://twitter.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.489"
                                                        height="13.384" viewBox="0 0 16.489 13.384">
                                                        <path data-name="Path 303"
                                                            d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                            transform="translate(-951.23 -1140.849)"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="visually-hidden">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank"
                                                    href="https://www.instagram.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.497"
                                                        height="17.492" viewBox="0 0 19.497 19.492">
                                                        <path data-name="Icon awesome-instagram"
                                                            d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                            transform="translate(0.004 -1.492)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                    <span class="visually-hidden">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank"
                                                    href="https://www.youtube.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.49"
                                                        height="11.582" viewBox="0 0 16.49 11.582">
                                                        <path data-name="Path 321"
                                                            d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                            transform="translate(-951.269 -1359.8)"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="visually-hidden">Youtube</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        --}}
    <!-- Quickview Wrapper End -->

    <!-- Start News letter popup -->
    {{-- <div class="newsletter__popup" data-animation="slideInUp">
        <div id="boxes" class="newsletter__popup--inner">
            <button class="newsletter__popup--close__btn" aria-label="search close button">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                </svg>
            </button>
            <div class="box newsletter__popup--box d-flex align-items-center">
                <div class="newsletter__popup--thumbnail">
                    <img class="newsletter__popup--thumbnail__img display-block" src="{{asset('assets')}}/img/banner/newsletter-popup-thumb2.png" alt="newsletter-popup-thumb">
                </div>
                <div class="newsletter__popup--box__right">
                    <h2 class="newsletter__popup--title">Join Our Newsletter</h2>
                    <div class="newsletter__popup--content">
                        <label class="newsletter__popup--content--desc">Enter your email address to subscribe our notification of our new post &amp; features by email.</label>
                        <div class="newsletter__popup--subscribe" id="frm_subscribe">
                            <form class="newsletter__popup--subscribe__form">
                                <input class="newsletter__popup--subscribe__input" type="text" placeholder="Enter you email address here...">
                                <button class="newsletter__popup--subscribe__btn">Subscribe</button>
                            </form>
                            <div class="newsletter__popup--footer">
                                <input type="checkbox" id="newsletter__dont--show">
                                <label class="newsletter__popup--dontshow__again--text" for="newsletter__dont--show">Don't show this popup again</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End News letter popup -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="{{ asset('assets') }}/js/vendor/popper.js" defer="defer"></script>
    <script src="{{ asset('assets') }}/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="{{ asset('assets') }}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/glightbox.min.js"></script>
    {{-- @vite(['resources/js/app.js']) --}}
    @yield('script')
    <!-- Customscript js -->
    <script src="{{ asset('assets') }}/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
</body>
</html>

