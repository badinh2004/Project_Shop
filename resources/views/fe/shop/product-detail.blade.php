@extends('fe.master')
@section('main_master')

    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Product Details</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Product Details</span>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span
                                        class="text-white">{{ $products->category->name }}</span>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span
                                        class="text-white">{{ $products->name }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start product details section -->
        <section class="product__details--section section--padding">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="product__details--media">
                            <div class="product__media--preview  swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <div>
                                                <div class="product__media--preview__items">
                                                    <img    
                                                    class="product__media--preview__items--img"
                                                            src="{{ asset('storage/images/' . $products->image) }}"
                                                            alt="product-media-img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product__details--info">
                            <script>
                                document.querySelectorAll('.variant__size--list').forEach(item => {
                                    item.addEventListener('click', function() {
                                        let price = parseFloat(this.getAttribute('data-price'));
                                        let salePrice = parseFloat(this.getAttribute('data-sale-price'));

                                        document.getElementById('product-price').textContent = '$' + price;
                                        document.getElementById('sale-price').textContent = '$' + salePrice;
                                    });
                                });
                            </script>

                            <form action="{{ route('addToCart', $products->id) }}" method="get">
                                @csrf
                                <h2 class="product__details--info__title mb-15">{{ $products->name }}</h2>
                                <div class="product__details--info__price mb-15">
                                    <span class="current__price"
                                        id="sale-price">${{ $products->variants->first()->sale_price }}</span>
                                    <span class="old__price" id="product-price">
                                        ${{ $products->variants->first()->price }}</span>
                                </div>
                                <div class="product__items--rating d-flex align-items-center mb-15">
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
                                    <span class="product__items--rating__count--number">({{ $comments_count }})</span>
                                </div>
                                <p class="product__details--info__desc mb-20">
                                    {{ Str::limit($products->sortdescription, 200) }}</p>
                                <div class="product__variant">
                                    <div class="product__variant--list mb-20">
                                        <fieldset class="variant__input--fieldset">
                                            <legend class="product__variant--title mb-8">Weight :</legend>
                                            <ul class="variant__size d-flex">
                                                @foreach ($products->variants as $index => $item)
                                                    <li class="variant__size--list" data-price="{{ $item->price }}"
                                                        data-sale-price="{{ $item->sale_price }}">
                                                        <input type="radio"
                                                            id="weight_{{ $products->id }}_{{ $index }}"
                                                            name="variant_id" value="{{ $item->id }}"
                                                            data-variant-id="{{ $item->id }}">
                                                        <label class="variant__size--value red"
                                                            for="weight_{{ $products->id }}_{{ $index }}">{{ $item->size }}</label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <div class="product__variant--list quantity d-flex align-items-center mb-20">
                                        <div class="quantity__box">
                                            {{-- <button type="button" --}}
                                                {{-- class="quantity__value quickview__value--quantity decrease" --}}
                                                {{-- aria-label="quantity value" value="Decrease Value">-</button> --}}
                                            <label>
                                                <input type="number" name="quantity"
                                                    class="quantity__number quickview__value--number" value="1" min="1"
                                                    data-counter />
                                            </label>
                                            {{-- <button type="button" --}}
                                                {{-- class="quantity__value quickview__value--quantity increase" --}}
                                                {{-- aria-label="quantity value" value="Increase Value">+</button> --}}
                                        </div>
                                        <button class="btn quickview__cart--btn" type="submit">Add To Cart</button>
                                    </div>
                                    <div class="product__variant--list mb-15">
                                        <a class="variant__wishlist--icon mb-15" href="{{ route('addWishlist', $products->id) }}"
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
                                        {{-- <button class="variant__buy--now__btn btn" type="submit">Buy it now</button> --}}
                                    </div>
                                    <div class="product__variant--list mb-15">
                                        <div class="product__details--info__meta">
                                            <p class="product__details--info__meta--list"><strong>Barcode:</strong> <span>
                                                    565461</span> </p>
                                            <p class="product__details--info__meta--list"><strong>Sky:</strong>
                                                <span>4420</span>
                                            </p>
                                            <p class="product__details--info__meta--list"><strong>Origin:</strong>
                                                <span>{{ $products->origin }}</span>
                                            </p>
                                            <p class="product__details--info__meta--list"><strong>Type:</strong>
                                                <span>{{ $products->category->name }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="quickview__social d-flex align-items-center mb-15">
                                    <label class="quickview__social--title">Social Share:</label>
                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank"
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
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank"
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
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank"
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
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank"
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product details section -->

        <!-- Start product details tab section -->
        <section class="product__details--tab__section section--padding">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <ul class="product__tab--one product__details--tab d-flex mb-30">
                            <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">
                                Description</li>
                            <li class="product__details--tab__list" data-toggle="tab" data-target="#reviews">Product
                                Reviews</li>
                            {{-- <li class="product__details--tab__list" data-toggle="tab" data-target="#information">
                                Additional Info</li>
                            <li class="product__details--tab__list" data-toggle="tab" data-target="#custom">Custom
                                Content</li> --}}
                        </ul>
                        <div class="product__details--tab__inner border-radius-10">
                            <div class="tab_content">
                                <div id="description" class="tab_pane active show">
                                    <div class="product__tab--content">
                                        {!! $products->description !!}
                                    </div>
                                </div>
                                <div id="reviews" class="tab_pane">
                                    <div class="product__reviews">
                                        <div class="product__reviews--header">
                                            <h2 class="product__reviews--header__title h3 mb-20">Customer Reviews</h2>
                                            <div class="reviews__ratting d-flex align-items-center">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $averageRating || $averageRating == 0)
                                                        <span class="reviews__ratting--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                height="12.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy"
                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                    transform="translate(0 -0.018)" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    @else
                                                        <span class="reviews__ratting--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                height="12.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy"
                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                    transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                            </svg>
                                                        </span>
                                                    @endif
                                                @endfor
                                                <span class="reviews__summary--caption">Based on {{ $comments_count }}
                                                    reviews</span>
                                            </div>
                                            <a class="actions__newreviews--btn btn" href="#writereview">Write A Review</a>
                                        </div>
                                        <div class="reviews__comment--area" id="comments">
                                            @foreach ($comment as $item)
                                                <div class="reviews__comment--list d-flex">
                                                    <div class="reviews__comment--thumb">
                                                        <img src="assets/img/other/comment-thumb1.png"
                                                            alt="comment-thumb">
                                                    </div>
                                                    <div class="reviews__comment--content">
                                                        <div class="reviews__comment--top d-flex justify-content-between">
                                                            <div class="reviews__comment--top__left">
                                                                <h3 class="reviews__comment--content__title h4">
                                                                    {{ $item->customer->name }}</h3>
                                                                @php
                                                                    $rating = $item->rating;
                                                                @endphp
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= $rating)
                                                                        <span class="reviews__ratting--icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14.105" height="12.732"
                                                                                viewBox="0 0 10.105 9.732">
                                                                                <path data-name="star - Copy"
                                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                                    transform="translate(0 -0.018)"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    @else
                                                                        <span class="reviews__ratting--icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14.105" height="12.732"
                                                                                viewBox="0 0 10.105 9.732">
                                                                                <path data-name="star - Copy"
                                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                                    transform="translate(0 -0.018)"
                                                                                    fill="#c7c5c2" />
                                                                            </svg>
                                                                        </span>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                            <span
                                                                class="reviews__comment--content__date">{{ $item->created_at->format('F j, Y') }}</span>
                                                        </div>
                                                        <p class="reviews__comment--content__desc">{{ $item->content }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{-- <div class="reviews__comment--list margin__left d-flex">
                                                <div class="reviews__comment--thumb">
                                                    <img src="assets/img/other/comment-thumb2.png" alt="comment-thumb">
                                                </div>
                                                <div class="reviews__comment--content">
                                                    <div class="reviews__comment--top d-flex justify-content-between">
                                                        <div class="reviews__comment--top__left">
                                                            <h3 class="reviews__comment--content__title h4">Laura Johnson</h3>
                                                        </div>
                                                        <span class="reviews__comment--content__date">February 13, 2022</span>
                                                    </div>
                                                    <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet
                                                        consectetur adipisicing elit. Eos ex repellat officiis neque.
                                                        Veniam, rem nesciunt. Assumenda distinctio, autem error repellat
                                                        eveniet ratione dolor facilis accusantium amet pariatur, non eius!
                                                    </p>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div id="writereview" class="reviews__comment--reply__area">
                                            <form id="commentForm" action="{{ route('commentproduct', $products->id) }}"
                                                method="POST">
                                                @csrf
                                                <h3 class="reviews__comment--reply__title mb-15">Add a review </h3>
                                                <div class="reviews__ratting d-flex align-items-center mb-20">
                                                    <ul class="d-flex">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <li class="reviews__ratting--list">
                                                                <span class="reviews__ratting--icon"
                                                                    id="reviews__ratting--icon"
                                                                    data-value="{{ $i }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                        height="12.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                                <input type="hidden" name="rating" id="rating" value="5">
                                                <div class="row">
                                                    <div class="col-12 mb-10">
                                                        <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...." name="content"></textarea>
                                                    </div>
                                                </div>
                                                <button class="btn text-white" data-hover="Submit"
                                                    type="submit">SUBMIT</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div id="information" class="tab_pane">
                                    <div class="product__tab--conten">
                                        <div class="product__tab--content__step mb-30">
                                            <h2 class="product__tab--content__title h4 mb-10">Nam provident sequi</h2>
                                            <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur
                                                adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum
                                                perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum
                                                suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro?
                                                Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam
                                                eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis
                                                necessitatibus nam ab?</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="custom" class="tab_pane">
                                    <div class="product__tab--content">
                                        <div class="product__tab--content__step mb-30">
                                            <h2 class="product__tab--content__title h4 mb-10">Nam provident sequi</h2>
                                            <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur
                                                adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum
                                                perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum
                                                suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro?
                                                Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam
                                                eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis
                                                necessitatibus nam ab?</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product details tab section -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding">
            <div class="container product3__section--container">
                <div class="section__heading3 text-center mb-40">
                    <h2 class="section__heading3--maintitle">Products in the same category</h2>
                </div>
                <div
                    class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($productbycategory as $value)
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
                                        {{-- <li class="product__items--action__list">
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
                                        </li> --}}
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

        <!-- Start shipping section -->
    </main>
@endsection
@section('script')
    <script>
        // submit from add to cart
        function submitForm(formId) {
        document.getElementById(formId).submit();
        }

        // variant price 
        document.querySelectorAll('.variant__size--list input[type="radio"]').forEach(item => {
            item.addEventListener('click', function() {
                let variantId = this.getAttribute('data-variant-id');
                document.querySelector('input[name="variant_id"]').value = variantId;

                let price = parseFloat(this.parentNode.getAttribute('data-price'));
                let salePrice = parseFloat(this.parentNode.getAttribute('data-sale-price'));

                document.getElementById('product-price').textContent = '$' + price;
                document.getElementById('sale-price').textContent = '$' + salePrice;
            });
        });
        let initialPrice = parseFloat(document.querySelector('.variant__size--list:first-of-type').getAttribute(
            'data-price'));
        let initialSalePrice = parseFloat(document.querySelector('.variant__size--list:first-of-type').getAttribute(
            'data-sale-price'));

        document.getElementById('product-price').textContent = '$' + initialPrice;
        document.getElementById('sale-price').textContent = '$' + initialSalePrice;


        // rating comment
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('#rating').value = 5;
            document.querySelectorAll('#reviews__ratting--icon svg path').forEach((path, idx) => {
                if (idx < 5) {
                    path.setAttribute('fill', 'currentColor');
                }
            });
        });

        document.querySelectorAll('#reviews__ratting--icon').forEach((star, index) => {
            star.addEventListener('click', () => {
                let rating = index + 1;
                document.querySelector('#rating').value = rating;
                document.querySelectorAll('#reviews__ratting--icon svg path').forEach((path, idx) => {
                    if (idx < rating) {
                        path.setAttribute('fill', 'currentColor');
                    } else {
                        path.setAttribute('fill', '#c7c5c2');
                    }
                });
                console.log(rating);
            });
        });

        // submit from comment
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('commentForm').addEventListener('submit', function(e) {
                e.preventDefault();

                var form = e.target;
                var formData = new FormData(form);
                console.log(formData);

                axios.post(form.getAttribute('action'), formData)
                    .then(function(response) {
                        if (response.data.success) {
                            alert(response.data.message);

                            form.reset();
                            var newComment = response.data.comment;
                            var ratingStars = Array.from({
                                    length: 5
                                }, (_, i) =>
                                i < newComment.rating ?
                                '<span class="reviews__ratting--icon"><svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732"><path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" /></svg></span>' :
                                '<span class="reviews__ratting--icon"><svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732"><path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" /></svg></span>'
                            ).join('');

                            var commentHTML = `
                        <div class="reviews__comment--list d-flex">
                            <div class="reviews__comment--thumb">
                                <img src="assets/img/other/comment-thumb1.png" alt="comment-thumb">
                            </div>
                            <div class="reviews__comment--content">
                                <div class="reviews__comment--top d-flex justify-content-between">
                                    <div class="reviews__comment--top__left">
                                        <h3 class="reviews__comment--content__title h4">${newComment.customer.name}</h3>
                                        ${ratingStars}
                                    </div>
                                    <span class="reviews__comment--content__date">${new Date(newComment.created_at).toLocaleDateString('en-US', {
                                            year: 'numeric',
                                            month: 'long',
                                            day: 'numeric'
                                        })}</span>
                                </div>
                                <p class="reviews__comment--content__desc">${newComment.content}</p>
                            </div>
                        </div>`;
                            document.querySelector('#comments').insertAdjacentHTML('beforeend',
                                commentHTML);

                        } else {
                            alert('Something went wrong, please try again.');
                        }
                    })
                    .catch(function(error) {
                        console.error('Error:', error);
                        if (error.response) {
                            console.error('Response data:', error.response.data);
                            console.error('Response status:', error.response.status);
                            console.error('Response headers:', error.response.headers);
                        }

                        alert('An error occurred, please try again.');
                    });
            });
        })
    </script>
@endsection
