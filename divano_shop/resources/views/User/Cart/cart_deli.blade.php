@extends('Layout_User')
@section('content')
    <!-- ========================  Checkout ======================== -->

    <section class="checkout">

        <!--Header-->

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
                        <li class="col-3">
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


            <!-- ========================  Delivery ======================== -->
            <form action="{{ route('cart.store') }}" method="post">
                @csrf
                <div class="cart-wrapper">

                    <div class="note-block">
                        <div class="row">

                            <!-- === left content === -->

                            <div class="col-md-6">

                                <div class="login-wrapper">

                                    <div class="login-block login-block-signup">

                                        <div class="h4">Shipping info</div>

                                        <hr />
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" id="name_cart" name="name_cart" class="form-control" required
                                                        placeholder="Full name: *" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="tel" id="phone_cart" name="phone_cart" pattern="[0-9]{10}" value="" class="form-control" required
                                                        placeholder="Phone: *">
                                                </div>
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <input type="email" id="email_cart" name="email_cart" class="form-control" required
                                                        placeholder="Email: *" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="address_cart" name="address_cart" required placeholder="Address: *" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="note_cart" name="note_cart" placeholder="Note: " rows="3"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <!--/login-wrapper-->
                            </div>
                            <!--/col-md-6-->
                            <!-- === right content === -->

                            <div class="col-md-6">


                                <div class="h4">Choose delivery</div>

                                <hr />
                                <div class="checkbox">
                                    <input type="radio" checked id="deliveryId3" name="deliveryOption">
                                    <label for="deliveryId3">Pick up in the store - <strong>Free</strong></label>
                                </div>

                                <hr />

                                <div class="clearfix">
                                    <p>A frequently overlooked, powerful fulfillment option is offering local pick-up. If
                                        you
                                        have a physical location and can allow your customers to forgo paying shipping costs
                                        altogether, you should!</p>
                                    <p><strong>Benefits:</strong></p>
                                    <ul>
                                        <li>Avoid both shipping and packaging costs</li>
                                        <li>Develop a face-to-face relationship with your customers</li>
                                        <li>Potential for additional purchases while customers are at your store</li>
                                    </ul>
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
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-clean-dark clickinfo"><span class="icon icon-cart"></span> Proceed
                                to payment</button>

                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!--/container-->

    </section>
@endsection

