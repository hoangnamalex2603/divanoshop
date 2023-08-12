@extends('Layout_User')
@section('content')
    <!-- ========================  About ======================== -->

    <section class="about pt-4 pt-lg-5">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="title">About page</h2>
                <div class="text">
                    <p>Suspendisse scelerisque odio eu felis eleifend, vitae gravida magna iaculis. Vestibulum volutpat,
                        purus in consectetur porta, velit felis suscipit metus, et pharetra enim augue suscipit est. Aenean
                        non ante tortor. Nam egestas
                        tincidunt turpis, quis accumsan est vestibulum non</p>
                </div>
            </div>
        </header>

        <!--Main image-->

        <div class="container-fluid">
            <div class="image">
                <img src="{{ asset('frontend/assets/images/gallery-2.jpg') }}" alt="Alternate Text" />
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <h4>Divano Store</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan efficitur dui in
                        porttitor. Donec mollis volutpat consectetur. Vestibulum pulvinar iaculis dolor, molestie semper
                        ulvinar iaculis purus lacinia quis.
                    </p>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>Our success</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan efficitur dui in
                        porttitor. Donec mollis volutpat consectetur. Vestibulum pulvinar iaculis dolor, molestie semper
                        ulvinar iaculis purus lacinia quis.
                    </p>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>What we beleive in</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan efficitur dui in
                        porttitor. Donec mollis volutpat consectetur. Vestibulum pulvinar iaculis dolor, molestie semper
                        ulvinar iaculis purus lacinia quis.
                    </p>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                </div>
            </div>

        </div>

    </section>

    <!-- ========================  Team ======================== -->

    <section class="team">

        <!--Header-->

        <header>
            <div class="container">
                <h1 class="h2 title">Meet our team</h1>
                <div class="text">
                    <p>Our architects and designers constantly and carefully monitor the environment, they accept and
                        develop changes, research fashion and architectural, as well as sociological, changes and transform
                        them into unique design.</p>
                </div>
            </div>
        </header>

        <!--Content-->

        <div class="container">

            <div class="row">

                <!--Team member-->

                <div class="col-md-3" data-3d>
                    <article>
                        <div class="details details-text">
                            <div class="inner">
                                <h5 class="title">Jason Richards</h5>
                                <h6 class="title">Supervisor</h6>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/person-4.jpg') }}" alt="" />
                        </div>
                        <div class="details details-social">
                            <div class="inner">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </article>
                </div>

                <!--Team member-->

                <div class="col-md-3" data-3d>
                    <article>
                        <div class="details details-text">
                            <div class="inner">
                                <h5 class="title">Michael Doe</h5>
                                <h6 class="title">Director</h6>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/person-1.jpg') }}" alt="" />
                        </div>
                        <div class="details details-social">
                            <div class="inner">
                                <a href="#"><i class="fa fa-phone"></i></a>
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </article>
                </div>

                <!--Team member-->

                <div class="col-md-3" data-3d>
                    <article>
                        <div class="details details-text">
                            <div class="inner">
                                <h5 class="title">Jim Douglas</h5>
                                <h6 class="title">Architect</h6>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/person-2.jpg') }}" alt="" />
                        </div>
                        <div class="details details-social">
                            <div class="inner">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </article>
                </div>

                <!--Team member-->

                <div class="col-md-3" data-3d>
                    <article>
                        <div class="details details-text">
                            <div class="inner">
                                <h5 class="title">Mathew Coock</h5>
                                <h6 class="title">Quality director</h6>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/person-3.jpg') }}" alt="" />
                        </div>
                        <div class="details details-social">
                            <div class="inner">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
            <!--/row-->

        </div>

    </section>

    <!-- ========================  Numbers ======================== -->

    <section class="numbers">

        <!--Header-->

        <header>
            <div class="container">
                <h1 class="h2 title">Your success is our success</h1>
                <div class="text">
                    <p>Our architects and designers constantly and carefully monitor the environment, they accept and
                        develop changes, research fashion and architectural, as well as sociological, changes and transform
                        them into unique design.</p>
                </div>
            </div>
        </header>

        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <div class="item">
                        <span class="chart" data-percent="100">
                            <span class="percent"></span>
                        </span>
                        <div class="title">Delivery</div>
                        <div class="text">We act skilfully</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="chart" data-percent="40">
                            <span class="percent"></span>
                        </span>
                        <div class="title">Discounts</div>
                        <div class="text">We respond quickly </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="chart" data-percent="85">
                            <span class="percent"></span>
                        </span>
                        <div class="title">Promo</div>
                        <div class="text">We focus on market</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="chart" data-percent="100">
                            <span class="percent"></span>
                        </span>
                        <div class="title">Happy clients</div>
                        <div class="text">We work with our customers </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
