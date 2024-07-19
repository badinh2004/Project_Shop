@extends('fe.master')
@section('main_master')
@if (auth('customers')->check())
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">My Account</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->
    
    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <div class="my__account--section__inner border-radius-10 d-flex">
                <div class="account__left--sidebar">
                    <h2 class="account__content--title h3 mb-20">My Profile</h2>
                    <ul class="account__menu">
                        @if (auth('customers')->check())
                        <li class="account__menu--list active"><a href="{{ route('information') }}">Information</a></li>
                        @endif
                        <li class="account__menu--list "><a href="{{ route('ViewOrdersHistory') }}">Dashboard</a></li>
                        <li class="account__menu--list"><a href="{{route('ViewWish')}}">Wishlist</a></li>
                        <li class="account__menu--list"><a href="{{ route('logout') }}">Log Out</a></li>
                    </ul>
                </div>
                <div class="account__wrapper">
                    <div class="account__content">
                        {{-- <h2 class="account__content--title h3 mb-20">Addresses</h2>
                        <button class="new__address--btn btn mb-25" type="button">Add a new address</button> --}}
                        <div class="account__details two">
                            <h3 class="account__details--title h4">Information</h3>
                            @if (auth('customers')->user()->image == null)
                                <img src="{{ asset('storage/images/avatar.jpg') }}" class="img-fluid rounded-circle" width="100" alt="No Avatar"><br>
                            @else
                                <img src="{{ asset('storage/images/' . auth('customers')->user()->image) }}" class="img-fluid rounded-circle" width="100" alt="No Avatar">
                            @endif

                            <p class="account__details--desc">Name : {{auth('customers')->user()->name}} <br> 
                                Gender :
                                @if (auth('customers')->user()->gender == null)
                                    Add gender by editing
                                @elseif(auth('customers')->user()->gender == 1)
                                    Male
                                @elseif($auth('customers')->user()->gender == 2)
                                    Female
                                @endif <br>
                                Email : {{auth('customers')->user()->email}} <br> 
                                Address : 
                                @if (auth('customers')->user()->address == null)
                                    Add address by editing
                                @else
                                    {{auth('customers')->user()->address}}
                                @endif <br> 
                                NumberPhone : 
                                @if (auth('customers')->user()->phone == null)
                                    Add NumberPhone by editing
                                @else
                                    +84 {{auth('customers')->user()->phone}}
                                @endif <br> 
                                </p>
                            {{-- <a class="account__details--link" href="my-account-2.html">View Addresses (1)</a> --}}
                        </div>
                        <div class="account__details--footer d-flex">
                            <a class="account__details--footer__btn" type="button" href="{{route('EditInformation',auth('customers')->user()->id)}}">Edit</a>
                            {{-- <button class="account__details--footer__btn" type="button">Delete</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->

    <!-- Start shipping section -->
    <section class="shipping__section2 shipping__style3">
        <div class="container">
            <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping1.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Shipping</h2>
                        <p class="shipping__items2--content__desc">From handpicked sellers</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping2.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Payment</h2>
                        <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping3.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Return</h2>
                        <p class="shipping__items2--content__desc">30 day guarantee</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping4.png" alt="shipping img">
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
@else
    {{ redirect()->route('login') }}
@endif

@endsection
