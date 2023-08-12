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
                        <li class="col-3 active">
                            <span data-text="Receipt"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- === left content === -->

        <div class="container">


            <!-- ========================  Receipt ======================== -->

            <div class="cart-wrapper">

                <div class="note-block">

                    <div class="row">
                        <!-- === left content === -->

                        <div class="col-md-6">


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
                        <!-- === right content === -->

                        <div class="col-md-6">

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
                                        @php
                                            $code = mt_rand(0,9999999999);
                                        @endphp
                                        <span>{{ $code }}</span>
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

                            <div class="h4">Payment details</div>

                            <hr />

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Transaction time</strong> <br />
                                        <span>{{ now()->format('d/m/Y') }} at {{ now()->format('H:i') }}</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Amount</strong><br />
                                        <span>{{ number_format(Session::get('cart_order')['total']) }} vnđ</span>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Cart details</strong><br />
                                        <span>******{{ substr($code,6) }}</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Items in cart</strong><br />
                                        <span>{{ Session::get('cart_order')['count'] }}</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <hr />

            <!-- ========================  Cart wrapper ======================== -->

            {{--  @include('User.Cart.cart_include')  --}}

            <!-- ========================  Cart navigation ======================== -->

            <div class="clearfix">
                <div class="row">
                    <div class="col-6 offset-6 text-right">
                        <a href="{{ route('home.index') }}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Go Home</a>
                    </div>
                </div>
            </div>

        </div>
        <!--/container-->

    </section>
@endsection
