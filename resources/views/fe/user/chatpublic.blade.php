@extends('fe.master')
@section('main_master')
    <main class="main__content_wrapper">
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">test</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my__account--section section--padding">
            <div class="container" style="border:1px solid rgb(1, 239, 57);">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row horder">
                            @foreach ($users as $user)
                                <div class="col-md-12 item mt-3">
                                    <a href="" id="link{{$user->id}}">
                                        @php
                                            $image = $user ? $user->image : null;
                                        @endphp
                                        @if ($image && filter_var($image, FILTER_VALIDATE_URL))
                                            <img src="{{ $image }}" class="img-fluid rounded-circle" width="100" height="100">
                                        @elseif ($image)
                                            <img src="{{ asset('storage/images/' . $image) }}" class="img-fluid rounded-circle" width="100" height="100">
                                        @else
                                            <img src="{{ asset('storage/images/avatar.jpg') }}" class="img-fluid rounded-circle" width="100" height="100"><br>
                                        @endif
                                        <p>{{$user->name}}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row horder">
                            <ul id="messages" class="list-unstyled overflow-auto" style="min-height: 100vh">
                                <!-- Nội dung tin nhắn -->
                            </ul>
                            <form class="border-top">
                                <div class="row py-3">
                                    <div class="col-10">
                                        <input type="text" id="message" class="form-control form-control-lg mt-3">
                                    </div>
                                    <div class="col-2">
                                        <button id="send" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    </main>
@endsection

@section('script')
    <style>
        .item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .item a {
            padding: 15px;
            display: block;
            position: relative;
        }
        .item a:hover {
            background: rgb(231,102,102);
            border-radius: 5px;
            color: white;
        }
        .statustest {
            position: relative;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: green;
            top: 10px;
            left: 10px;
        }
        .my-message {
            text-align: right;
            color: rgb(4, 4, 4);
        }
    </style>
    
    <script type="module">
        
        Echo.join('testchat')
        .here(users => { // tat ca user trong kenh chat
            console.log(users);

        })
        .joining(user => { // ai them vao thi hien

        })
        .leaving(user => { // ai roi chat thi tat
        })  
        .listen('Useronltest', e => {
        })
    </script>
@endsection
