@extends('fe.master')
@section('main_master')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Shopping Cart</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Shopping Cart</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container-fluid">
                <div class="cart__section--inner">
                    @if (auth('customers')->check())
                        <form action="#">
                            <h2 class="cart__title mb-40">Shopping Cart</h2>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="cart__table">
                                        <table class="cart__table--inner">
                                            <thead class="cart__table--header">
                                                <tr class="cart__table--header__items">
                                                    <th class="cart__table--header__list">Product</th>
                                                    <th class="cart__table--header__list">Price</th>
                                                    <th class="cart__table--header__list">Quantity</th>
                                                    <th class="cart__table--header__list">Total</th>
                                                    <th class="cart__table--header__list">Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $subtotal = 0;
                                            @endphp
                                            <tbody class="cart__table--body">
                                                @foreach ($cart as $value)
                                                    <tr class="cart__table--body__items" data-id="{{ $value->id }}">
                                                        <td class="cart__table--body__list">
                                                            <div class="cart__product d-flex align-items-center">
                                                                <div class="cart__thumbnail">
                                                                    <a href="product-details.html"><img
                                                                            class="border-radius-5"
                                                                            src="{{ asset('storage/images/' . $value->products->image) }}"
                                                                            alt="cart-product"></a>
                                                                </div>
                                                                <div class="cart__content">
                                                                    <h3 class="cart__content--title h4"><a
                                                                            href="">{{ $value->products->name }}</a>
                                                                    </h3>
                                                                    <span class="cart__content--variant">WEIGHT:
                                                                        {{ $value->variants->size }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="cart__table--body__list">
                                                            <span class="cart__price" id="price"
                                                                data-price="{{ $value->variants->sale_price }}">${{ $value->variants->sale_price }}</span>
                                                        </td>
                                                        <td class="cart__table--body__list">
                                                            <div class="quantity__box">
                                                                <button type="button" id="btnMinus"
                                                                    class="quantity__value quickview__value--quantity decrease "
                                                                    aria-label="quantity value"
                                                                    value="Decrease Value">-</button>
                                                                <label>
                                                                    <input type="text" id="quantity"
                                                                        class="quantity__number quickview__value--number"
                                                                        value="{{ $value->quantity }}" data-counter
                                                                        data-quantity="{{ $value->quantity }}" />
                                                                </label>
                                                                <button type="button" id="btnPlus"
                                                                    class="quantity__value quickview__value--quantity increase "
                                                                    aria-label="quantity value"
                                                                    value="Increase Value">+</button>
                                                            </div>
                                                        </td>
                                                        <td class="cart__table--body__list">
                                                            @php
                                                                $total =
                                                                    $value->quantity * $value->variants->sale_price;
                                                                $subtotal += $total;
                                                            @endphp
                                                            <span class="cart__price end"
                                                                id="toTal">${{ $total }}</span>
                                                        </td>
                                                        <td class="cart__table--body__list">
                                                            <form action="{{ route('deleteOne', ['id' => $value->id]) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="minicart__product--remove" type="submit">Remove</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="continue__shopping d-flex justify-content-between">
                                            <a class="continue__shopping--link" href="{{ route('shop') }}">Continue
                                                shopping</a>
                                            <form action="{{ route('deleteAll') }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="continue__shopping--clear" type="submit">Clear Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="cart__summary border-radius-10">
                                        <div class="coupon__code mb-30">
                                            <h3 class="coupon__code--title">Coupon</h3>
                                            <p class="coupon__code--desc">Enter your coupon code if you have one.</p>
                                            <div class="coupon__code--field d-flex">
                                                <label>
                                                    <input class="coupon__code--field__input border-radius-5"
                                                        placeholder="Coupon code" type="text">
                                                </label>
                                                <button class="coupon__code--field__btn btn" type="submit">Apply
                                                    Coupon</button>
                                            </div>
                                        </div>
                                        <div class="cart__summary--total mb-20">
                                            <table class="cart__summary--total__table">
                                                <tbody>
                                                    <tr class="cart__summary--total__list">
                                                        <td class="cart__summary--total__title text-left">SUBTOTAL</td>
                                                        <td class="cart__summary--amount text-right" id="">
                                                            ${{ $subtotal }}</td>
                                                    </tr>
                                                    <tr class="cart__summary--total__list">
                                                        <td class="cart__summary--total__title text-left">GRAND TOTAL</td>
                                                        <td class="cart__summary--amount text-right" id="grandtotal">
                                                            ${{ $subtotal }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="cart__summary--footer">
                                            <p class="cart__summary--footer__desc">Shipping & taxes calculated at checkout
                                            </p>
                                            <ul class="d-flex justify-content-between">
                                                <li><a class="cart__summary--footer__btn btn cart"
                                                        href="{{route('Cart')}}">Update Cart</a></li>
                                                <li><a class="cart__summary--footer__btn btn checkout"
                                                        href="{{route('Checkout')}}">Check Out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </section>
        <!-- cart section end -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading3 mb-40">
                    <h2 class="section__heading3--maintitle">New Products</h2>
                </div>
                <div
                    class="product__section--inner product3__section--inner__padding product__section--style3__inner product__column6--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($product as $value)
                        <div class="swiper-slide">
                            <div class="product__items product__items2">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="{{ route('productDetail', ['product' => $value->category->name, 'slug' => $value->slug]) }}">
                                        <img class="product__items--img product__primary--img"
                                            src="{{ asset('storage/images/' . $value->image) }}" alt="product-img">
                                        <img class="product__items--img product__secondary--img"
                                            src="{{ asset('storage/images/' . $value->image) }}" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        @if ($value->isNew)
                                            <span class="product__badge--items new">New</span>
                                        @else
                                            <span class="product__badge--items sale">Sale</span>
                                        @endif
                                    </div>
                                    <ul class="product__items--action">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="{{ route('addWishlist', $value->id) }}">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="compare.html">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32"
                                                        d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                    <path
                                                        d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__items--content product__items2--content text-center">
                                    <a href="{{ route('productDetail', ['product' => $value->category->name, 'slug' => $value->slug]) }}" class="add__to--cart__btn" style="font-size: 1.40rem;">-> More Detail</a>
                                    <h3 class="product__items--content__title h4"><a
                                            href="{{ route('productDetail', ['product' => $value->category->name, 'slug' => $value->slug]) }}">{{$value->name}}-{{$value->variants->first()->size}}</a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">
                                            @foreach ($value->variants as $var)
                                                <p>{{ $var->sale_price }}$</p>
                                            @break
                                            @endforeach
                                        </span>
                                        <span class="old__price">
                                            @foreach ($value->variants as $var)
                                                <p>{{ $var->price }}$</p>
                                            @break
                                            @endforeach
                                        </span>
                                    </div>
                                    <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        @php
                                            $comments_count = $value->comments->count();
                                            $totalRating = $value->comments->sum('rating');
                                            $averageRating = $comments_count > 0 ? $totalRating / $comments_count : 0;
                                        @endphp
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $averageRating || $averageRating == 0)
                                                <span class="reviews__ratting--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732"
                                                        viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            @else
                                                <span class="reviews__ratting--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732"
                                                        viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                    </svg>
                                                </span>
                                            @endif
                                        @endfor
                                        <span class="product__items--rating__count--number">({{$comments_count}})</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start brand logo section -->
        <div class="brand__logo--section section--padding pt-0">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="brand__logo--section__inner d-flex justify-content-between align-items-center">
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="assets/img/logo/brand-logo1.png" alt="brand img">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="assets/img/logo/brand-logo2.png" alt="brand img">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="assets/img/logo/brand-logo3.png" alt="brand img">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="assets/img/logo/brand-logo4.png" alt="brand img">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                    src="assets/img/logo/brand-logo5.png" alt="brand img">
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
@section('script')
    <script type="module">
        document.addEventListener('DOMContentLoaded', (event) => {
            var btnPlus = document.querySelectorAll('#btnPlus');
            var btnMinus = document.querySelectorAll('#btnMinus');

            btnPlus.forEach(function(button) {
                button.addEventListener('click', function() {
                    let tr = this.closest('tr');
                    let cartId = tr.getAttribute('data-id');
                    let quantityInput = tr.querySelector('#quantity');
                    let quantity = parseInt(quantityInput.value);
                    quantity + 1; // Tăng số lượng trước khi cập nhật giá trị

                    quantityInput.value = quantity; // Cập nhật giá trị hiển thị

                    let priceValue = tr.querySelector('#price').textContent;
                    let price = parseFloat(priceValue.replace(/[^0-9.]/g,
                    '')); // Sử dụng parseFloat để giữ lại phần thập phân

                    let total = tr.querySelector('#toTal');
                    let toTalPrice = price * quantity;
                    total.textContent = '$' + toTalPrice;

                    axios.post('{{ route('updateCart') }}', {
                            id: cartId,
                            quantity: quantity
                        })
                        .then(response => {
                            console.log(response.data);
                        })
                        .catch(e => {
                            console.error(e);
                        });
                });
            });

            btnMinus.forEach(function(button) {
                button.addEventListener('click', function() {
                    let tr = this.closest('tr');
                    let cartId = tr.getAttribute('data-id');
                    let quantityInput = tr.querySelector('#quantity');
                    let quantity = parseInt(quantityInput.value);

                    if (quantity > 1) { // Đảm bảo số lượng không giảm dưới 1
                        quantity - 1; // Giảm số lượng trước khi cập nhật giá trị
                        quantityInput.value = quantity; // Cập nhật giá trị hiển thị

                        let priceValue = tr.querySelector('#price').textContent;
                        let price = parseFloat(priceValue.replace(/[^0-9.]/g, ''));

                        let total = tr.querySelector('#toTal');
                        let toTalPrice = price * quantity;
                        total.textContent = '$' + toTalPrice;

                        axios.post('{{ route('updateCart') }}', {
                                id: cartId,
                                quantity: quantity
                            })
                            .then(response => {
                                console.log(response.data);
                            })
                            .catch(e => {
                                console.error(e);
                            });
                    }
                });
            });
        });
    </script>
@endsection
