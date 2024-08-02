@extends('fe.master')
@section('main_master')
    <div class="checkout__page--area">
        <div class="container">
            <div class="checkout__page--inner d-flex">
                <div class="main checkout__mian">
                    <main class="main__content_wrapper section--padding pt-0">
                        <form action="#">
                            <div class="checkout__content--step checkout__contact--information2 border-radius-5">
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label">Name</label>
                                        <span class="checkout__review--content">{{ $order->name }}</span>
                                    </div>

                                </div>
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label"> Ship to</label>
                                        <span class="checkout__review--content"> {{ $order->address }}</span>
                                    </div>

                                </div>
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label"> Phone</label>
                                        <span class="checkout__review--content"> {{ $order->phone }}</span>
                                    </div>

                                </div>
                            </div>
                            <div class="checkout__content--step__footer d-flex align-items-center">
                                {{-- <form action="{{route('checkdetail',$order->id)}}" method="get">
                                    @csrf
                                    <div class="heckout__review--inner d-flex align-items-center">
                                        <h2 class="section__header--title h3">Payment</h2>
                                        <p class="section__header--desc">All transactions are secure and encrypted.</p>
                                    </div>
                                    <div class="heckout__review--inner d-flex align-items-center">
                                        <select name="payment" class="checkout__input--field border-radius-5">
                                            <option value="COD">Thanh toán khi nhận hàng (COD)</option>
                                            <option value="VNPay">Thanh toán qua VNPay</option>
                                        </select>
                                    </div> 
                                    <input type="hidden" name="id" value="{{$order->id}}">
                                    <button class="continue__shipping--btn btn border-radius-5">Pay now</button>
                                </form> --}}
                                <a class="continue__shipping--btn btn border-radius-5" href="{{route('checkcout',$order->id)}}">Pay now</a>
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
                                                    <span
                                                        class="product__thumbnail--quantity">{{ $products->quantity }}</span>
                                                </div>
                                                <div class="product__description">
                                                    <h3 class="product__description--name h4"><a
                                                            href="product-details.html">{{ $products->product->name }}</a>
                                                    </h3>
                                                    <span
                                                        class="product__description--variant">WEIGHT:{{ $products->size }}</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="checkout__discount--code">
                        <form class="d-flex" action="{{ route('coupon') }}" method="POST">
                            @csrf
                            <label>
                                <input type="hidden" name="order" value="{{ $order->id }}">
                                <input class="checkout__discount--code__input--field border-radius-5"
                                    placeholder="Gift card or discount code" name="gift" type="text">
                            </label>
                            <button class="checkout__discount--code__btn btn border-radius-5" type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="checkout__total">
                        <table class="checkout__total--table">
                            <tbody class="checkout__total--body">
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Subtotal </td>
                                    <td class="checkout__total--amount text-right">${{ $order->total + $order->subtotal}}</td>
                                </tr>
                                @if ($order->subtotal != null)
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Sale</td>
                                    <td class="checkout__total--calculated__text text-right">{{$order->subtotal}}
                                    </td>
                                </tr>
                                @else
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Sale</td>
                                    <td class="checkout__total--calculated__text text-right">0$
                                    </td>
                                </tr>
                                @endif
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total
                                    </td>
                                    <td class="checkout__total--footer__amount checkout__total--footer__list text-right">
                                        ${{ $order->total }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
