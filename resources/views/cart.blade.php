@extends('layouts.website')
@section('title', 'Cart')
@section('content')
    @include('partials.bradcaump', ['title' => 'Cart'])

    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    @include('partials.flash')
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-name">Lines</th>
                                        <th class="product-name">Minutes</th>
                                        <th class="product-name">Month</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="product-name">
                                                <span>{{ $order->product->name }}</span>
                                            </td>
                                            <td class="product-name">
                                                <span>{{ $order->product->lines }}</span>
                                            </td>
                                            <td class="product-name">
                                                <span>{{ $order->product->minutes }}</span>
                                            </td>
                                            <td class="product-name">
                                                <span>{{ $order->product->month }}</span>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">${{ $order->price }}</span>
                                            </td>
                                            <td class="product-remove">
                                                <span
                                                    onclick="event.preventDefault(); document.getElementById('order-{{ $order->id }}').submit();"
                                                    class="text-theme cursor-pointer">X</span>
                                            </td>
                                        </tr>
                                        <form id="{{ 'order-' . $order->id }}"
                                            action="{{ route('order.delete', $order->id) }}" method="post">
                                            @csrf @method('delete')
                                        </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    {{-- <input type="submit" value="Update Cart" /> --}}
                                    <a href="{{ route('services_page') }}">Continue Shopping</a>
                                </div>
                                <div class="coupon">
                                    <h3>Coupon</h3>
                                    <p>Enter your coupon code if you have one.</p>
                                    <input type="text" placeholder="Coupon code" />
                                    <input type="submit" value="Apply Coupon" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>Cart Totals</h2>
                                    <table>
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td>
                                                    <span class="amount">${{ $total }}</span>
                                                </td>
                                            </tr>
                                            {{-- <tr class="shipping">
                                                <th>Shipping</th>
                                                <td>
                                                    <ul id="shipping_method">
                                                        <li>
                                                            <input type="radio" />
                                                            <label>
                                                                Flat Rate:
                                                                <span class="amount">£7.00</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" />
                                                            <label>
                                                                Free Shipping
                                                            </label>
                                                        </li>
                                                        <li></li>
                                                    </ul>
                                                    <p>
                                                        <a class="shipping-calculator-button" href="#">Calculate
                                                            Shipping</a>
                                                    </p>
                                                </td>
                                            </tr> --}}
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong>
                                                        <span class="amount">${{ $total }}</span>
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{ route('user.checkout') }}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->

@endsection
