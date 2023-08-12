@extends('Layout_User')
@section('content')
    <!-- ========================  Checkout ======================== -->

    <section class="checkout">

        <!-- === header === -->

        <header>
            <div class="container">
                <h2 class="title">Delivery checkout</h2>
                <div class="text">
                    <p>Confirm your order details</p>
                </div>
            </div>
        </header>

        <!-- === step wrapper === -->

        <div class="step-wrapper">

            <div class="container">

                <div class="stepper">
                    <ul class="row">
                        <li class="col-3 active">
                            <span data-text="Cart items"></span>
                        </li>
                        <li class="col-3 active">
                            <span data-text="Delivery"></span>
                        </li>
                        <li class="col-3 active">
                            <span data-text="Payment"></span>
                        </li>
                        <li class="col-3">
                            <span data-text="Receipt"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- === left content === -->

        <div class="container">

            <!-- ========================  Payment ======================== -->
            <form action="{{ route('pay-cart.store') }}" method="POST" id="submit_pay_cart">
                @csrf
                <div class="cart-wrapper">

                    <div class="note-block">

                        <div class="row">
                            <!-- === left content === -->

                            <div class="col-md-6">

                                <div class="white-block">

                                    <div class="h4">Order details</div>

                                    <hr />

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Order no.</strong> <br />
                                                <span>{{ mt_rand() }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Transaction ID</strong> <br />
                                                <span>{{ mt_rand() }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Order date</strong> <br />
                                                <span>{{ now()->format('d/m/Y') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Shipping arrival</strong> <br />
                                                <span>{{ Carbon\Carbon::now()->addDays(6)->format('d/m/Y') }}</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="h4">Shipping info</div>

                                    <hr />

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Name</strong> <br />
                                                <span>{{ ucfirst(Session::get('customer_cart')['name_cart']) }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Email</strong><br />
                                                <span>{{ Session::get('customer_cart')['email_cart'] }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Phone</strong><br />
                                                <span>{{ Session::get('customer_cart')['phone_cart'] }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Address</strong><br />
                                                <span>{{ Session::get('customer_cart')['address_cart'] }}</span>
                                            </div>
                                        </div>
                                        @if (Session::get('customer_cart')['note_cart'])
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Note</strong><br />
                                                <span>{{ Session::get('customer_cart')['note_cart'] }}</span>
                                            </div>
                                        </div>
                                        @endif



                                    </div>

                                </div>
                                <!--/col-md-6-->

                            </div>

                            <!-- === right content === -->

                            <div class="col-md-6">
                                <div class="white-block">

                                    <div class="h4">Choose payment</div>

                                    <hr />

                                    <span class="checkbox">
                                        <input type="radio" id="paymentID1" class="choose_pay" name="choose_pay"
                                            checked="checked" value="COD">
                                        <label for="paymentID1">
                                            <strong>Pay on delivery</strong> <br />
                                            <small>The store will send the goods to your address, you see the goods and then
                                                pay the delivery staff.</small>
                                        </label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="paymentID2" class="choose_pay" name="choose_pay"
                                            value="ATM">
                                        <label for="paymentID2">
                                            <strong>PayPal</strong> <br />
                                            <small>Purchase with your fingertips. Look for us the next time youre paying
                                                from a
                                                mobile app, and checkout faster on thousands of mobile websites.</small>
                                        </label>
                                    </span>

                                    <hr />

                                    <p>Please allow three working days for the payment confirmation to reflect in your <a
                                            href="#">online account</a>. Once your payment is confirmed, we will generate
                                        your
                                        e-invoice, which you can view/print from your account
                                        or email.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr />

                <!-- ========================  Cart wrapper ======================== -->

                @include('User.Cart.cart_include')

                <!-- ========================  Cart navigation ======================== -->

                <div class="clearfix">
                    <div class="row">
                        <div class="col-6">
                            <a href="javscript:void(0)" onclick="window.history.go(-1); return false;"
                                class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Shop more</a>
                        </div>
                        <div class="col-6 text-right {{ count($carts) > 0 ? '' : 'display' }}">
                            <button type="submit" class="btn btn-clean-dark changecod"><span class="icon icon-cart"></span> Go to
                                checkout</button>
                            <div class="changeatm display" id="paypal-button"></div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
        <!--/container-->
        @php
            $total = 0;
            foreach($carts as $cart){
                $total += ($cart->cart_qty * $cart->product_price);
            }
        @endphp
            <style>
                .display{
                    display: none;
                }
            </style>
    </section>
@endsection
@section('js2')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        $('.choose_pay').click(function(){
            var pay = $(this).val();
            if(pay == 'ATM'){
                $('.changeatm').removeClass('display');
                $('.changecod').addClass('display');
            }else{
                $('.changeatm').addClass('display');
                $('.changecod').removeClass('display');
            }
        });
        $(document).on('submit','#submit_pay_cart',function(e){
            e.preventDefault();
            var action = 'COD';

            $.ajax({
                type: 'post',
                url: '{{ route('pay-cart.store') }}',
                data: {action:action},
                success:function(res){
                    location.replace(res.url);
                }
            });
        });
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'AU1aqbLwuw2HGSIQujQRTEMJ-m5aRTR_bKYLggDV8MOcDbR6AEdRKw8WuW5oYsGOMAWoojM-BWZNtu7Q',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'medium',
                color: 'white',
                shape: 'rect',
                tagline: false,
                fundingicons: true
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: '{{ round($total * 0.0000441966,2) }}',
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    // Show a confirmation message to the buyer
                    var action = 'ATM';
                    $.ajax({
                        type: 'post',
                        url: '{{ route('pay-cart.store') }}',
                        data: {action:action},
                        success:function(res){
                            location.replace(res.url);
                        }
                    });
                });
            }
        }, '#paypal-button');
    </script>
@endsection
