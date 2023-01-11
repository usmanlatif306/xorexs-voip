@extends('layouts.website')
@section('title', 'Checkout')
@section('content')
    @include('partials.bradcaump', ['title' => 'Checkout'])

    <!-- Start Checkout Area -->
    <section class="htc__checkout bg--white section-padding--lg">
        <!-- Checkout Section Start-->
        <div class="checkout-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-30">

                        <!-- Checkout Accordion Start -->
                        <div id="checkout-accordion">

                            <!-- Checkout Method -->
                            <div class="single-accordion">
                                <a class="accordion-head d-flex justify-content-between" data-toggle="collapse"
                                    data-parent="#checkout-accordion" href="#checkout-method">
                                    <span>1. checkout method</span>
                                    <span id="method1" class="text-black pt-1 d-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                        </svg>
                                    </span>
                                </a>

                                <div id="checkout-method" class="collapse show">
                                    <div class="checkout-method accordion-body fix">
                                        <p>You are logged in as <b>{{ auth()->user()->email }}</b></p>
                                    </div>
                                </div>

                            </div>

                            <!-- Billing Method -->
                            <div class="single-accordion">
                                <a class="accordion-head collapsed d-flex justify-content-between" data-toggle="collapse"
                                    data-parent="#checkout-accordion" href="#billing-method">2. billing informatioon
                                    <span id="method2" class="text-black pt-1 d-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                        </svg>
                                    </span>
                                </a>
                                <div id="billing-method" class="collapse">

                                    <div class="accordion-body billing-method fix">

                                        <form action="#" class="billing-form checkout-form">
                                            <div class="row">
                                                <div class="col-12 mb--20">
                                                    <select>
                                                        <option value="1">Select a country</option>
                                                        <option value="2">bangladesh</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">Afghanistan</option>
                                                        <option value="5">Ghana</option>
                                                        <option value="6">Albania</option>
                                                        <option value="7">Bahrain</option>
                                                        <option value="8">Colombia</option>
                                                        <option value="9">Dominican Republic</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-12 mb--20">
                                                    <input type="text" placeholder="First Name">
                                                </div>
                                                <div class="col-md-6 col-12 mb--20">
                                                    <input type="text" placeholder="Last Name">
                                                </div>
                                                <div class="col-12 mb--20">
                                                    <input type="text" placeholder="Company Name">
                                                </div>
                                                <div class="col-12 mb--20">
                                                    <input placeholder="Street address" type="text">
                                                </div>
                                                <div class="col-12 mb--20">
                                                    <input placeholder="Apartment, suite, unit etc. (optional)"
                                                        type="text">
                                                </div>
                                                <div class="col-12 mb--20">
                                                    <input placeholder="Town / City" type="text">
                                                </div>
                                                <div class="col-md-6 col-12 mb--20">
                                                    <input type="text" placeholder="State / County">
                                                </div>
                                                <div class="col-md-6 col-12 mb--20">
                                                    <input placeholder="Postcode / Zip" type="text">
                                                </div>
                                                <div class="col-md-6 col-12 mb--20">
                                                    <input type="email" placeholder="Email Address">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <input placeholder="Phone Number" type="text">
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- Coupon Code -->
                            <div class="single-accordion">
                                <a class="accordion-head collapsed d-flex justify-content-between" data-toggle="collapse"
                                    data-parent="#checkout-accordion" href="#coupon-code">3. Coupon
                                    <span id="method3" class="text-black pt-1 d-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                        </svg>
                                    </span>
                                </a>
                                <div id="coupon-code" class="collapse">
                                    <div class="accordion-body shipping-method">
                                        <h5>Coupon</h5>
                                        <p>Enter your coupon code if you have one.</p>
                                        <div id="coupon-message" class="d-none alert"></div>
                                        <form action="{{ route('user.coupon') }}" class="coupon mb-0" id="coupon-form"
                                            method="POST">
                                            @csrf
                                            <input type="text" name="coupon" placeholder="Coupon code" required />
                                            <button id="coupon-btn" type="submit" class="btn-blue">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Method -->
                            <div class="single-accordion">
                                <a class="accordion-head collapsed d-flex justify-content-between" data-toggle="collapse"
                                    data-parent="#checkout-accordion" href="#payment-method">4. Payment
                                    <span id="method4" class="text-black pt-1 d-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                        </svg>
                                    </span>
                                </a>
                                <div id="payment-method" class="collapse">
                                    <div class="accordion-body payment-method fix">
                                        <form action="#" class="payment-form">
                                            <div class="row">
                                                <div class="input-box col-12 mb--20">
                                                    <label for="card-name">Name on Card *</label>
                                                    <input type="text" id="card-name" placeholder="Name on Card" />
                                                </div>
                                                <div class="input-box col-12 mb--20">
                                                    <label for="card-number">Credit Card Number *</label>
                                                    <input type="number" id="card-number"
                                                        placeholder="Credit Card Number" />
                                                </div>
                                                <div class="input-box col-12">
                                                    <div class="row">
                                                        <div class="input-box col-12">
                                                            <label>Expiration Date</label>
                                                        </div>
                                                        <div class="input-box col-md-6 col-12 mb--20">
                                                            <input type="number" id="card-month" placeholder="Month" />
                                                        </div>
                                                        <div class="input-box col-md-6 col-12 mb--20">
                                                            <input type="number" id="card-year" placeholder="Year" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-box col-12">
                                                    <label for="card-Verify">Card Verification Number *</label>
                                                    <input type="number" id="card-cvc"
                                                        placeholder="Card Verification Number (CVC)" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Accordion Start -->
                    </div>

                    <!-- Order Details -->
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="order-details-wrapper">
                            <h2>your order</h2>
                            <div class="order-details">
                                <form action="#">
                                    <ul>
                                        <li>
                                            <p class="strong">product</p>
                                            <p class="strong">total</p>
                                        </li>
                                        @foreach ($orders as $order)
                                            <li>
                                                <p>{{ $order->product->name }}</p>
                                                <p>${{ $order->price }}</p>
                                            </li>
                                        @endforeach
                                        <li>
                                            <p class="strong">cart subtotal</p>
                                            <p class="strong">${{ $total }}</p>
                                        </li>
                                        <li id="coupon-row" class="d-none">
                                            <p class="strong">Discount (<span id="coupon-ratio"></span>%)</p>
                                            <p class="strong">$<span id="discount"></span></p>
                                        </li>
                                        <li>
                                            <p class="strong">order total</p>
                                            <p class="strong">$ <span id="total"
                                                    class="">{{ $total }}</span>
                                                <span id="discounted-price"></span>
                                            </p>
                                        </li>
                                        <li>
                                            <button class="voopo__btn">Confirm Payment</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Checkout Section End-->
    </section>
    <!-- Start Checkout Area -->
@endsection
@push('scripts')
    <script>
        $(function() {
            $('#coupon-form').on('submit', function(e) {
                e.preventDefault();
                if (!$('#coupon-message').hasClass('d-none')) {
                    $('#coupon-message').addClass('d-none');
                }
                let total = $('#total').text();
                $('#coupon-btn').attr('disabled', 'disabled')
                $.ajax({
                    url: $(this).prop('action'),
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(res) {
                        console.log(res);
                        $('#coupon-message').removeClass('d-none');
                        // valid coupon code
                        if (!res.error) {
                            let discount = ((res.discount / 100) * total).toFixed(2);
                            let disAmount = (total - discount).toFixed(2);
                            $('#coupon-row').removeClass('d-none');
                            $('#coupon-ratio').text(res.discount);
                            $('#discount').text(discount);
                            $('#discounted-price').text(disAmount);
                            $('#total').addClass('line-through');
                            if ($('#coupon-message').hasClass('alert-danger')) {
                                $('#coupon-message').removeClass('alert-danger');
                            }
                            $('#coupon-message').addClass('alert-success').text(res.message);
                            $('#coupon-btn').text('Applied');
                        } else {
                            // invalid coupon code
                            $('#coupon-btn').attr('disabled', false);
                            if ($('#coupon-message').hasClass('alert-success')) {
                                $('#coupon-message').removeClass('alert-success');
                            }
                            $('#coupon-message').addClass('alert-danger').text(res.message);
                        }
                        // showMessage(response)
                    },
                    error: function(err) {
                        showMessage({
                            error: true,
                            message: err.responseJSON.message
                        })

                    }
                });
            })
        })
    </script>
@endpush
