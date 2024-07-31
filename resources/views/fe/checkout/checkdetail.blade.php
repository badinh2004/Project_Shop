@extends('fe.master')
@section('main_master')
    <div class="checkout__page--area">
        <div class="container">
            <div class="checkout__page--inner d-flex">
                <div class="main checkout__mian">
                    <main class="main__content_wrapper section--padding pt-0">
                        <form action="#">
                            <div class="checkout__content--step section__shipping--address pt-0">
                                <div class="section__header checkout__header--style3 position__relative mb-25">
                                    <span class="checkout__order--number">Order #{{$order->code}}</span>
                                    <h2 class="section__header--title h3">Thank you submission</h2>
                                    <div class="checkout__submission--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.995" height="25.979"
                                            viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="order__confirmed--area border-radius-5 mb-15">
                                    <h3 class="order__confirmed--title h4">Your order is confirmed</h3>
                                    <p class="order__confirmed--desc">You,ll receive a confirmation email with your order
                                        number shortly</p>
                                </div>
                                <div class="customer__information--area border-radius-5">
                                    <h3 class="customer__information--title h4">Customer Information</h3>
                                    <div class="customer__information--inner d-flex">
                                        <div class="customer__information--list">
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Shipping address</h4>
                                                <ul>
                                                    <li><span class="customer__information--text">{{$order->name}}</span></li>
                                                    <li><span class="customer__information--text">{{$order->phone}}</span></li>
                                                    <li><span class="customer__information--text">{{$order->address}}</span></li>
                                                    <li><span class="customer__information--text">{{$order->email}}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="customer__information--list">
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Payment method</h4>
                                                <ul>
                                                    <li><span class="customer__information--text">{{$order->payment}}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step__footer d-flex align-items-center">
                                <a class="previous__link--content" href="{{route('index')}}">Home</a>
                            </div>
                        </form>
                    </main>
                    <footer class="main__footer main__footer--wrapper">
                        <p class="copyright__content">Copyright © 2022 <a class="copyright__content--link text__primary"
                                href="index.html">Grocee</a> . All Rights Reserved.Design By Grocee</p>
                    </footer>
                </div>
                <aside class="checkout__sidebar sidebar">
                    <div class="cart__table checkout__product--table">
                        <table class="cart__table--inner">
                            <tbody class="cart__table--body">
                                @foreach ($orderproduct as $products)
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="product__image two  d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="product-details.html"><img class="border-radius-5"
                                                        src="{{ asset('storage/images/' . $products->product->image) }}"
                                                        alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">{{$products->quantity}}</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a
                                                        href="product-details.html">{{$products->product->name}}</a></h3>
                                                <span class="product__description--variant">WEIGHT:{{$products->size}}</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <table class="checkout__total--table">
                        <tfoot class="checkout__total--footer">
                            <tr class="checkout__total--footer__items">
                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">
                                    Total :</td>
                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right">
                                    ${{$order->total}}</td>
                            </tr>
                        </tfoot>
                    </table>
                </aside>
            </div>
        </div>
    </div>
@endsection
