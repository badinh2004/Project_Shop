@extends('fe.master')
@section('main_master')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">My Account</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a>
                                </li>
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
                            <li class="account__menu--list active"><a href="{{ route('information') }}">Information</a></li>
                            <li class="account__menu--list "><a href="{{ route('ViewOrdersHistory') }}">Dashboard</a></li>
                            <li class="account__menu--list"><a href="{{ route('ViewWish') }}">Wishlist</a></li>
                            <li class="account__menu--list"><a href="{{ route('logout') }}">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="account__wrapper">
                        <div class="account__content">
                            <form action="{{route('updateInformation',auth('customers')->user())}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT');
                                <div class="account__details two">
                                    <h3 class="account__details--title h4">Edit Information</h3>
                                </div>
                                <div class="form-group">
                                    <label for="name1">Name:</label>
                                    <input type="text" class="form-control form-control-lg mt-2" name='name' id="name" placeholder="Enter name" value="{{auth('customers')->user()->name}}" readonly>
                                </div>
                                <div class="form-group">
                                    <img src="{{ asset('storage/images/' . auth('customers')->user()->image) }}" width="100px" alt="">
                                    <label for="image1">Image:</label>
                                    <input type="file" class="form-control form-control-lg mt-2" name="photo" id="image">
                                </div>
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male1" value="1" {{ auth('customers')->user()->gender == 1 ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="male1">Male</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female1" value="2" {{ auth('customers')->user()->gender == 2 ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="female1">Female</label>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone1">Phone;</label>
                                    <input type="text" class="form-control form-control-lg mt-2" name="phone" id="phone" value="{{auth('customers')->user()->phone}}"
                                        placeholder="Enter phone number">
                                </div>
                                <div class="form-group">
                                    <label for="address1">Address:</label>
                                    <input type="text" class="form-control form-control-lg mt-2" name="address" id="address" value="{{auth('customers')->user()->address}}" placeholder="Enter address">
                                </div>
                                <div class="form-group">
                                    <label for="email1">Email:</label>
                                    <input type="email" class="form-control form-control-lg mt-2" name="email" id="email" value="{{auth('customers')->user()->email}}" readonly>
                                </div>
                                <div class="account__details--footer d-flex">
                                    <button class="account__details--footer__btn" type="submit" >Edit</button>
                                </div>
                            </form>
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
@endsection
