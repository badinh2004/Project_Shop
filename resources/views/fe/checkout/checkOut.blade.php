@extends('fe.master')
@section('main_master')
<div class="checkout__page--area">
    <div class="container">
        <div class="checkout__page--inner d-flex">
            <div class="main checkout__mian">
                <main class="main__content_wrapper section--padding pt-0">
                    <form action="#">
                        <div class="checkout__content--step section__shipping--address">
                            <div class="section__header mb-25">
                                <h2 class="section__header--title h3">Shipping address</h2>
                            </div>
                            <div class="section__shipping--address__content">
                                <div class="row">
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list ">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="Name"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="Number Phone"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="Address"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="Apartment, suite, etc. (optional)"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="City"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-12">
                                        <div class="checkout__input--list checkout__input--select select">
                                            <label class="checkout__select--label" for="country">Country/region</label>
                                            <select class="checkout__input--select__field border-radius-5" id="country">
                                                <option value="1">India</option>
                                                <option value="2">United States</option>
                                                <option value="3">Netherlands</option>
                                                <option value="4">Afghanistan</option>
                                                <option value="5">Islands</option>
                                                <option value="6">Albania</option>
                                                <option value="7">Antigua Barbuda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="Postal code"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__checkbox">
                                    <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                    <span class="checkout__checkbox--checkmark"></span>
                                    <label class="checkout__checkbox--label" for="check2">
                                        Save this information for next time</label>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__content--step__footer d-flex align-items-center">
                            <a class="continue__shipping--btn btn border-radius-5" href="checkout-2.html">Continue To Shipping</a>
                            <a class="previous__link--content" href="cart.html">Return to cart</a>
                        </div>
                    </form>
                </main>
                <footer class="main__footer main__footer--wrapper">
                    <p class="copyright__content">Copyright © 2022 <a class="copyright__content--link text__primary" href="index.html">Grocee</a> . All Rights Reserved.Design By Grocee</p>
                </footer>
            </div>
            <aside class="checkout__sidebar sidebar">
                <div class="cart__table checkout__product--table">
                    <table class="cart__table--inner">
                        <tbody class="cart__table--body">
                            <tr class="cart__table--body__items">
                                <td class="cart__table--body__list">
                                    <div class="product__image two  d-flex align-items-center">
                                        <div class="product__thumbnail border-radius-5">
                                            <a href="product-details.html"><img class="border-radius-5" src="assets/img/product/small-product7.png" alt="cart-product"></a>
                                            <span class="product__thumbnail--quantity">1</span>
                                        </div>
                                        <div class="product__description">
                                            <h3 class="product__description--name h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <span class="product__description--variant">COLOR: Blue</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__table--body__list">
                                    <span class="cart__price">£65.00</span>
                                </td>
                            </tr>
                            <tr class="cart__table--body__items">
                                <td class="cart__table--body__list">
                                    <div class="cart__product d-flex align-items-center">
                                        <div class="product__thumbnail border-radius-5">
                                            <a href="product-details.html"><img class="border-radius-5" src="assets/img/product/small-product2.png" alt="cart-product"></a>
                                            <span class="product__thumbnail--quantity">1</span>
                                        </div>
                                        <div class="product__description">
                                            <h3 class="product__description--name h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <span class="product__description--variant">COLOR: Green</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__table--body__list">
                                    <span class="cart__price">£82.00</span>
                                </td>
                            </tr>
                            <tr class="cart__table--body__items">
                                <td class="cart__table--body__list">
                                    <div class="cart__product d-flex align-items-center">
                                        <div class="product__thumbnail border-radius-5">
                                            <a href="product-details.html"><img class="border-radius-5" src="assets/img/product/small-product4.png" alt="cart-product"></a>
                                            <span class="product__thumbnail--quantity">1</span>
                                        </div>
                                        <div class="product__description">
                                            <h3 class="product__description--name h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                            <span class="product__description--variant">COLOR: White</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__table--body__list">
                                    <span class="cart__price">£78.00</span>
                                </td>
                            </tr>
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
                                <td class="checkout__total--amount text-right">$860.00</td>
                            </tr>
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">Shipping</td>
                                <td class="checkout__total--calculated__text text-right">Calculated at next step</td>
                            </tr>
                        </tbody>
                        <tfoot class="checkout__total--footer">
                            <tr class="checkout__total--footer__items">
                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total </td>
                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right">$860.00</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
