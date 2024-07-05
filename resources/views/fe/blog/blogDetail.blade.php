@extends('fe.master')
@section('main_master')
<main class="main__content_wrapper">
        
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Blog Details</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Blog Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start blog details section -->
    <section class="blog__details--section section--padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-8">
                    <div class="blog__details--wrapper">
                        <div class="entry__blog">
                            <div class="blog__post--header mb-30">
                                <h2 class="post__header--title mb-15">{{$blog->title}}</h2>
                                <p class="blog__post--meta">Posted by : {{$blog->users->name}} / On : {{ $blog->created_at->format('F j, Y') }} / In : <a class="blog__post--meta__link" href="#">{{$blog->category->name}}</a></p>                                     
                            </div>
                            <div class="blog__thumbnail mb-30">
                                <img class="blog__thumbnail--img border-radius-10" width="1000px" height="400px" src="{{ asset('storage/images/' . $blog->image) }}" alt="blog-img">
                            </div>
                            <div class="blog__details--content">
                                <h3 class="blog__details--content__subtitle mb-25">{{$blog->sortdescription}}</h3>
                                {!!$blog->description!!}
                            </div>
                        </div>
                        <div class="related__post--area mb-50">
                            <div class="section__heading text-center mb-30">
                                <span class="section__heading--subtitle">Recently added our store</span>
                                <h2 class="section__heading--maintitle">Related Articles</h2>
                            </div>
                            <div class="row row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n28">
                                @foreach ($blogbycategory as $value)
                                <div class="col mb-28">
                                    <div class="related__post--items">
                                        <div class="related__post--thumb border-radius-10 mb-20">
                                            <a class="display-block" href="{{ route('blogDetail', ['category' => $value->category->name, 'slug' => $value->slug]) }}"><img class="related__post--img display-block border-radius-10" src="{{ asset('storage/images/' . $value->image) }}" alt="related-post"></a>
                                        </div>
                                        <div class="related__post--text">
                                            <h3 class="related__post--title mb-10"><a class="related__post--title__link" href="{{ route('blogDetail', ['category' => $value->category->name, 'slug' => $value->slug]) }}">{{ Str::limit($value->title, 100) }}</a></h3>
                                            <span class="related__post--deta">{{ $value->created_at->format('F j, Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="comment__box">
                            <div class="reviews__comment--area2 mb-50">
                                <h2 class="reviews__comment--reply__title style2 h3 mb-25">Recent Comment</h2>
                                <div class="reviews__comment--inner" id="comments">
                                    @foreach ($comment as $item)
                                        <div class="reviews__comment--list d-flex">
                                            <div class="reviews__comment--thumb">
                                                <img src="assets/img/other/comment-thumb1.png" alt="comment-thumb">
                                            </div>
                                            <div class="reviews__comment--content ">
                                                <div class="reviews__comment--top d-flex justify-content-between">
                                                    <div class="reviews__comment--top__left">
                                                        <h3 class="reviews__comment--content__title2 h4">{{ $item->customer->name }}</h3>
                                                        <span class="reviews__comment--content__date2">{{ $item->created_at->format('F j, Y') }}</span>
                                                    </div>
                                                    <button class="comment__reply--btn btn">Reply</button>
                                                </div>
                                                <p class="reviews__comment--content__desc">{{ $item->content }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="reviews__comment--reply__area">
                                <form id="commentForm" action="{{ route('commentblog', $blog->id) }}" method="POST">
                                    <h3 class="reviews__comment--reply__title mb-20">Leave A Comment</h3>
                                    <div class="row">
                                        <div class="col-12 mb-15">
                                            <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...." name="content"></textarea>
                                        </div> 
                                    </div>
                                    <button class="btn text-white" data-hover="Submit" type="submit">SUBMIT</button>
                                </form>   
                            </div> 
                        </div> 
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4">
                    <div class="blog__sidebar--widget left widget__area">
                        <div class="single__widget widget__search widget__bg">
                            <h2 class="widget__title h3">Search Objects</h2>
                            <form class="widget__search--form" action="#">
                                <label>
                                    <input class="widget__search--form__input" placeholder="Search..." type="text">
                                </label>
                                <button class="widget__search--form__btn" aria-label="search button">
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                </button>
                            </form>
                        </div>
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Categories</h2>
                            <ul class="widget__categories--menu">
                                @foreach ($cate as $item)
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label">
                                            <a href="{{ route('filterBlogsByCategory', ['category' => $item->name]) }}">{{ $item->name }}</a>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Post Article</h2>
                            <div class="product__grid--inner">
                                @foreach ($blogs as $value)
                                <div class="product__grid--items d-flex align-items-center">
                                    <div class="product__grid--items--thumbnail">
                                        <a class="product__items--link" href="{{ route('blogDetail', ['category' => $value->category->name, 'slug' => $value->slug]) }}">
                                            <img class="product__grid--items__img product__primary--img"  src="{{ asset('storage/images/' . $value->image) }}" alt="product-img">
                                            <img class="product__grid--items__img product__secondary--img" src="{{ asset('storage/images/' . $value->image) }}" alt="product-img">
                                        </a>
                                    </div>
                                    <div class="product__grid--items--content">
                                        <h3 class="product__grid--items--content__title h4"><a href="{{ route('blogDetail', ['category' => $value->category->name, 'slug' => $value->slug]) }}">{{ Str::limit($value->title, 50) }}</a></h3>
                                        <span class="meta__deta">{{ $value->created_at->format('F j, Y') }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Brands</h2>
                            <ul class="widget__tagcloud">
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Organic</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Vegetable</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Giant</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Grocery</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Foods</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Bakery</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Dairies</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Nature </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog details section -->

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
            document.getElementById('commentForm').addEventListener('submit', function(e) {
                e.preventDefault();

                var form = e.target;
                var formData = new FormData(form);
                console.log(formData);

                axios.post(form.getAttribute('action'),formData)
                .then(function(response){
                    if (response.data.message) {
                        alert(response.data.message);

                        form.reset();
                        var newComment = response.data.comment;
                        var commentHTML = `
                            <div class="reviews__comment--list d-flex">
                                <div class="reviews__comment--thumb">
                                    <img src="assets/img/other/comment-thumb1.png" alt="comment-thumb">
                                </div>
                                <div class="reviews__comment--content ">
                                    <div class="reviews__comment--top d-flex justify-content-between">
                                        <div class="reviews__comment--top__left">
                                            <h3 class="reviews__comment--content__title2 h4">${newComment.customer.name}</h3>
                                            <span class="reviews__comment--content__date2">${new Date(newComment.created_at).toLocaleDateString('en-US', {
                                            year: 'numeric',
                                            month: 'long',
                                            day: 'numeric'
                                        })}</span>
                                        </div>
                                        <button class="comment__reply--btn btn">Reply</button>
                                    </div>
                                    <p class="reviews__comment--content__desc">${newComment.content}</p>
                                </div>
                            </div>
                        `;
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