@extends('fe.master')
@section('main_master')
<div class="checkout__page--area">
    <div class="container">
        <div class="checkout__page--inner d-flex">
            <div class="main checkout__mian">
                <main class="main__content_wrapper section--padding pt-0">
                    <form action="{{route('addOder')}}" method="POST">
                        @csrf
                        <div class="checkout__content--step section__shipping--address">
                            <div class="section__header mb-25">
                                <h2 class="section__header--title h3">Shipping address</h2>
                            </div>
                            <div class="section__shipping--address__content">
                                <div class="row">
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list ">
                                            <label>
                                                <h5>Name:</h5>
                                                <input class="checkout__input--field border-radius-5" name="name" placeholder="Name"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <h5>Number Phone:</h5>
                                                <input class="checkout__input--field border-radius-5" name="phone" placeholder="Number Phone"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <h5>Address:</h5>
                                                <input class="checkout__input--field border-radius-5" name="address" placeholder="Address"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <h5>Email:</h5>
                                                <input class="checkout__input--field border-radius-5" name="email" placeholder="Email"  type="email">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <h5>Note:</h5>
                                                <textarea name="note" class="checkout__input--field border-radius-5" placeholder="note" id="" cols="30" rows="10"></textarea>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__content--step__footer d-flex align-items-center">
                            <button class="continue__shipping--btn btn border-radius-5" type="submit">Continue To Shipping</button>
                            <a class="previous__link--content" href="{{route('Cart')}}">Return to cart</a>
                        </div>
                    </form>
                </main>
                <footer class="main__footer main__footer--wrapper">
                    <p class="copyright__content">Copyright © 2022 <a class="copyright__content--link text__primary" href="index.html">Grocee</a> . All Rights Reserved.Design By Grocee</p>
                </footer>
            </div>
                @php
                    $subtotal = 0;
                @endphp
            <aside class="checkout__sidebar sidebar">
                <div class="cart__table checkout__product--table">
                    <table class="cart__table--inner">
                        <tbody class="cart__table--body">
                            @foreach ($carts as $value)
                            <tr class="cart__table--body__items">
                                <td class="cart__table--body__list">
                                    <div class="product__image two  d-flex align-items-center">
                                        <div class="product__thumbnail border-radius-5">
                                            <a href="product-details.html"><img class="border-radius-5" src="{{ asset('storage/images/' . $value->products->image) }}" alt="cart-product"></a>
                                            <span class="product__thumbnail--quantity">{{ $value->quantity }}</span>
                                        </div>
                                        <div class="product__description">
                                            <h3 class="product__description--name h4"><a href="{{ route('productDetail', ['product' => $value->products->category->name, 'slug' => $value->products->slug]) }}">{{ $value->products->name }}</a></h3>
                                            <span class="product__description--variant">WEIGHT: {{ $value->variants->size }}</span>
                                        </div>
                                    </div>
                                </td>
                                @php
                                    $total = $value->quantity * $value->variants->sale_price;
                                    $subtotal += $total;
                                @endphp
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">${{ $total }}</span>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table> 
                </div>
                <div class="checkout__discount--code">
                    <form class="d-flex" action="#">
                        <label>
                            <input class="checkout__discount--code__input--field border-radius-5" placeholder="Gift card or discount code"  type="text">
                        </label>
                        <button class="checkout__discount--code__btn btn border-radius-5" type="submit">Apply</button>
                    </form>
                </div>
                <div class="checkout__total">
                    <table class="checkout__total--table">
                        <tbody class="checkout__total--body">
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">Subtotal </td>
                                <td class="checkout__total--amount text-right">${{ $subtotal }}</td>
                            </tr>
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">Shipping</td>
                                <td class="checkout__total--calculated__text text-right">Free Ship</td>
                            </tr>
                        </tbody>
                        <tfoot class="checkout__total--footer">
                            <tr class="checkout__total--footer__items">
                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total </td>
                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right">${{ $subtotal }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
