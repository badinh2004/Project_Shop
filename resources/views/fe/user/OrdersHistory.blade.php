@extends('fe.master')
@section('main_master')
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">My Account</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->
    
    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <p class="account__welcome--text">Hello, {{auth('customers')->user()->name}} welcome to your Orders History!</p>
            <div class="my__account--section__inner border-radius-10 d-flex">
                <div class="account__left--sidebar">
                    <h2 class="account__content--title h3 mb-20">My Profile</h2>
                    <ul class="account__menu">
                        <li class="account__menu--list "><a href="{{route('information')}}">Information</a></li>
                        <li class="account__menu--list active"><a href="{{route('ViewOrdersHistory')}}">Orders History</a></li>
                        <li class="account__menu--list"><a href="{{route('ViewWish')}}">Wishlist</a></li>
                        <li class="account__menu--list"><a href="{{ route('logout') }}">Log Out</a></li>
                    </ul>
                </div>
                <div class="account__wrapper">
                    <div class="account__content">
                        <h2 class="account__content--title h3 mb-20">Orders History</h2>
                        <div class="account__table--area">
                            <table class="account__table">
                                <thead class="account__table--header">
                                    <tr class="account__table--header__child">
                                        <th class="account__table--header__child--items">Order</th>
                                        <th class="account__table--header__child--items">Date</th>
                                        <th class="account__table--header__child--items">Payment Status</th>
                                        <th class="account__table--header__child--items">Fulfillment Status</th>
                                        <th class="account__table--header__child--items">Total</th>	 	 	 	
                                    </tr>
                                </thead>
                                <tbody class="account__table--body mobile__none">
                                    @foreach ($orders as $order)
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">{{$order->code}}</td>
                                        <td class="account__table--body__child--items">{{ $order->created_at->format('F j, Y') }}</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">{{$order->status->name}}</td>
                                        <td class="account__table--body__child--items">${{$order->total}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tbody class="account__table--body mobile__block">
                                    @foreach ($orders as $order)
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>{{$order->code}}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>{{ $order->created_at->format('F j, Y') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>{{$order->status->name}}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>${{$order->total}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->



</main>
@endsection
