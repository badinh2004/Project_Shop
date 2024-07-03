@extends('fe.master')
@section('main_master')
<main class="main__content_wrapper">
        
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Login / Register</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Login / Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start login section  -->
    <div class="login__section section--padding mb-80">
        <div class="container">
            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1">
                    <div class="col">
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading"></h4>
                                <p class="text-center">{{ session('error') }}</p>
                                <p class="mb-0"></p>
                            </div>
                        @endif
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title h3 mb-10">Login</h2>
                                <p class="account__login--header__desc">Login if you area a returning customer.</p>
                            </div>
                            <form action="{{route('postLogin')}}" method="post">
                                @csrf
                                <div class="account__login--inner">
                                    <label>
                                        <input class="account__login--input" placeholder="Email Addres" type="email" name="email">
                                        @Error('email')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                    <label>
                                        <input class="account__login--input" placeholder="Password" type="password" name="password">
                                        @Error('password')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                    <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" name="remember" id="check1" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check1">
                                                Remember me</label>
                                        </div>
                                        <a class="account__login--forgot" href="{{route('forgotpassword')}}">Forgot Your Password?</a>
                                    </div>
                                    <button class="account__login--btn btn" type="submit">Login</button>
                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>
                                    <div class="account__social d-flex justify-content-center mb-15">
                                        <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com/">Facebook</a>
                                        <a class="account__social--link google" target="_blank" href="{{route('google')}}">Google</a>
                                        <a class="account__social--link twitter" target="_blank" href="https://twitter.com/">Twitter</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading"></h4>
                                <p class="text-center">{{ session('success') }}</p>
                                <p class="mb-0"></p>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading"></h4>
                                <p class="text-center">{{ session('error') }}</p>
                                <p class="mb-0"></p>
                            </div>
                        @endif
                        <div class="account__login register">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                <p class="account__login--header__desc">Register here if you are a new customer</p>
                            </div>
                            <form action="{{route('postRegister')}}" method="post">
                                @csrf
                                <div class="account__login--inner">
                                    <label>
                                        <input class="account__login--input" placeholder="Username" type="text" name="name">
                                        @Error('name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                    <label>
                                        <input class="account__login--input" placeholder="Email Addres" type="email" name="email" >
                                        @Error('email')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                    <label>
                                        <input class="account__login--input" placeholder="Password" type="password" name="password">
                                        @Error('password')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                    <label>
                                        <input class="account__login--input" placeholder="Confirm Password" type="password" name="confirmpassword">
                                        @Error('confirmpassword')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                    <button class="account__login--btn btn mb-10" type="submit">Submit & Register</button>
                                    {{-- <div class="account__login--remember position__relative">
                                        <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label login__remember--label" for="check2">
                                            I have read and agree to the terms & conditions</label>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!-- End login section  -->

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
