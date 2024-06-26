@extends('fe.master')
@section('main_master')
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <!-- End breadcrumb section -->

    <!-- Start login section  -->
    <div class="login__section section--padding mb-80">
        <div class="container">
            <div class="login__section--inner">
                @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading"></h4>
                    <p class="text-center">{{ session('error') }}</p>
                    <p class="mb-0"></p>
                </div>
                @endif
                <div class="account__login">
                    <div class="account__login--header mb-25">
                        <h2 class="account__login--header__title h3 mb-10">Reset Password</h2>
                        <p class="account__login--header__desc">Reset Password if you are a returning customer.</p>
                    </div>
                    <form action="{{ route('postResetPass') }}" method="post">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                        <div class="account__login--inner">
                            <label>
                                <input class="account__login--input" placeholder="Email Address" type="email" name="email" value="{{ $customer->email }}" readonly>
                            </label>
                            <label>
                                <input class="account__login--input" placeholder="Password" type="password" name="password">
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </label>
                            <label>
                                <input class="account__login--input" placeholder="Confirm Password" type="password" name="confirm_password">
                                @error('confirm_password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </label>
                            <button class="account__login--btn btn" type="submit">Reset Password</button>
                        </div>
                    </form>
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