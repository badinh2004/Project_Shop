@extends('fe.master')
@section('main_master')
<main class="main__content_wrapper">
        
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Wishlist</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Wishlist</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- cart section start -->
    <section class="cart__section section--padding">
        <div class="container">
            <div class="cart__section--inner">
                <h2 class="cart__title mb-40">Wishlist</h2>
                <div class="cart__table">
                    <table class="cart__table--inner">
                        <thead class="cart__table--header">
                            <tr class="cart__table--header__items">
                                <th class="cart__table--header__list">Product</th>
                                <th class="cart__table--header__list">Price</th>
                                <th class="cart__table--header__list text-right">ADD TO CART</th>
                            </tr>
                        </thead>
                        <tbody class="cart__table--body">
                            @foreach ($wish as $value)
                                <form action="{{ route('addToCart', $value->products->id) }}" method="get">
                                    <tr class="cart__table--body__items">
                                        <td class="cart__table--body__list">
                                            <div class="cart__product d-flex align-items-center">
                                                <a class="cart__remove--btn" aria-label="search button" href="{{ route('deleteWishList',$value->id) }}" type="button">
                                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                        <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/>
                                                    </svg>
                                                </a>
                                                <div class="cart__thumbnail">
                                                    <a href="{{ route('productDetail', ['product' => $value->products->category->name, 'slug' => $value->products->slug]) }}">
                                                        <img class="border-radius-5" src="{{ asset('storage/images/' . $value->products->image) }}" alt="cart-product">
                                                    </a>
                                                </div>
                                                <div class="cart__content">
                                                    <h3 class="cart__content--title h4">
                                                        <a href="{{ route('productDetail', ['product' => $value->products->category->name, 'slug' => $value->products->slug]) }}">{{ $value->products->name }}</a>
                                                    </h3>
                                                    <span class="cart__content--variant"></span>
                                                    <fieldset class="variant__input--fieldset">
                                                        <legend class="product__variant--title mb-8">Weight : </legend>
                                                        <ul class="variant__size d-flex">
                                                            @foreach ($value->products->variants as $index => $item)
                                                                <li class="variant__size--list" data-price="{{ $item->price }}" data-sale-price="{{ $item->sale_price }}">
                                                                    <input type="radio" id="weight_{{ $value->products->id }}_{{ $index }}" name="variant_id_{{ $value->products->id }}" value="{{ $item->id }}" data-variant-id="{{ $item->id }}">
                                                                    <label class="variant__size--value red" for="weight_{{ $value->products->id }}_{{ $index }}">{{ $item->size }}</label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="cart__price" id="sale-price-{{ $value->products->id }}">${{ $value->products->variants->first()->sale_price }}</span>
                                        </td>
                                        <td class="cart__table--body__list text-right">
                                            <input type="hidden" name="quantity" value="1">
                                            <button class="wishlist__cart--btn btn" type="submit">Add To Cart</button>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table> 
                    <div class="continue__shopping d-flex justify-content-between">
                            <a class="continue__shopping--link" href="{{ route('index') }}">Continue shopping</a>
                            <a class="continue__shopping--clear" href="{{ route('shop') }}">View All Products</a>
                    </div>
                </div> 
            </div>
        </div>     
    </section>
    <!-- cart section end -->

    <!-- Start product section -->
    <section class="product__section product__section--style3 section--padding pt-0">
        <div class="container">
            <div class="section__heading3 mb-40">
                <h2 class="section__heading3--maintitle">New Products</h2>
            </div>
            <div class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                <div class="swiper-wrapper">
                    @foreach ($productsort as $value)
                        <div class="swiper-slide">
                            <div class="product__items product__items2">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="{{ route('productDetail', ['product' => $value->category->name, 'slug' => $value->slug]) }}">
                                        <img class="product__items--img product__primary--img" src="{{ asset('storage/images/' . $value->image) }}" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="{{ asset('storage/images/' . $value->image) }}" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">New</span>
                                    </div>
                                    <ul class="product__items--action">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="{{ route('addWishlist', $value->id) }}">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                <span class="visually-hidden">Quick View</span>   
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="compare.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__items--content product__items2--content text-center">
                                    <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                    <h3 class="product__items--content__title h4"><a href="{{ route('productDetail', ['product' => $value->category->name, 'slug' => $value->slug]) }}">{{ $value->name }}</a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">
                                            @foreach ($value->variants as $var)
                                                <p>${{ $var->sale_price }}</p>
                                            @break
                                            @endforeach
                                        </span>
                                        <span class="old__price">
                                            @foreach ($value->variants as $var)
                                                <p>${{ $var->price }}</p>
                                            @break
                                            @endforeach
                                        </span>
                                    </div>
                                    <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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
                            <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo1.png" alt="brand img">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo2.png" alt="brand img">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo3.png" alt="brand img">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo4.png" alt="brand img">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo5.png" alt="brand img">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lắng nghe sự kiện click trên từng input radio
            document.querySelectorAll('.variant__size--list input[type="radio"]').forEach(item => {
                item.addEventListener('click', function() {
                    let variantId = this.getAttribute('data-variant-id');
                    let productId = this.name.split('_')[2];
                    
                    // Cập nhật giá hiển thị dựa trên variant được chọn
                    let price = parseFloat(this.parentNode.getAttribute('data-price'));
                    let salePrice = parseFloat(this.parentNode.getAttribute('data-sale-price'));
                    
                    document.getElementById('sale-price-' + productId).textContent = '$' + salePrice.toFixed(2); // Để hiển thị giá đúng dạng tiền tệ
                });
            });

            // Thiết lập giá ban đầu khi trang được tải lần đầu
            document.querySelectorAll('.cart__product').forEach(product => {
                let firstVariant = product.querySelector('.variant__size--list:first-of-type');
                if (firstVariant) {
                    let initialSalePrice = parseFloat(firstVariant.getAttribute('data-sale-price'));
                    let productId = firstVariant.querySelector('input[type="radio"]').name.split('_')[2];
                    document.getElementById('sale-price-' + productId).textContent = '$' + initialSalePrice.toFixed(2); // Để hiển thị giá đúng dạng tiền tệ
                }
            });
        });
    </script>
@endsection
