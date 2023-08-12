@extends('Layout_User')
@section('content')
    <!-- ========================  Contact ======================== -->

    <section class="contact">

        <!-- === Goolge map === -->

        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87347.05602302554!2d106.62709823499685!3d11.010143950516484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d0532499c615%3A0xc0d73d1d0c5560ca!2zQ2jhu6MgUGjDuiBN4bu5!5e0!3m2!1svi!2s!4v1646899120177!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>

        <div class="container">

            <div class="row">

                <div class="col-md-10 offset-md-1">

                    <div class="contact-block">

                        <div class="contact-info">
                            <div class="row">
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-map-marker"></span>
                                        <figcaption>
                                            <strong>Where are we?</strong>
                                            <span>132 A An Mỹ - Phú Mỹ, Thủ Dầu Một, <br /> Bình Dương, Việt Nam</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-phone"></span>
                                        <figcaption>
                                            <strong>Call us</strong>
                                            <span>
                                                <strong>T</strong> +84 3333 444 8888 <br />
                                                <strong>F</strong> +84 3333 444 9999
                                            </span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-clock"></span>
                                        <figcaption>
                                            <strong>Working hours</strong>
                                            <span>
                                                <strong>Mon</strong> - Sat: 10 am - 6 pm <br />
                                                <strong>Sun</strong> 12pm - 2 pm
                                            </span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="contact-info">
                            <h2 class="title">Send an email</h2>
                            <p>
                                Thanks for your interest in Mobel Theme. We believe in creativity as one of the major forces
                                of progress. Pleaseuse this form if you have any questions about our products and well get
                                back with you very soon.
                            </p>

                            <div class="contact-form-wrapper">

                                <div class="contact-form clearfix">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control"
                                                        placeholder="Your name" required="required">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" value="" class="form-control"
                                                        placeholder="Your email" required="required">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Your message"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <input type="submit" class="btn btn-primary" value="Send message" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/contact-block-->
                </div>
                <!--col-sm-8-->
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </section>

    <!-- ========================  Newsletter ======================== -->

    <section class="banner">

        <div class="container-fluid">

            <div class="banner-image" style="background-image:url({{ asset('frontend/assets/images/gallery-1.jpg') }})">
                <!--Header-->

                <header>
                    <div class="container">

                        <h2 class="h2 title">Stay in touch!</h2>
                        <div class="text">
                            <p>Be first to know about all new interior features!</p>
                        </div>

                    </div>
                </header>

                <!--Content-->

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <input type="email" class="form-control" name="name" value="" placeholder="Enter your e-mail">
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-clean">Subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/container-fluid-->

    </section>

    <!-- ========================  Benefits ======================== -->

    <section class="benefits">

        <!--Header-->

        <header class="d-none">
            <div class="container">
                <h2 class="h2 title">Benefits</h2>
            </div>
        </header>

        <!--Header-->

        <div class="container">

            <div class="row">

                <!--Icon-->

                <div class="col-6 col-lg-3" data-tilt>
                    <figure>
                        <div class="icon"><i class="icon icon-gift"></i></div>
                        <figcaption>
                            <span>
                                <strong>Get your gift</strong> <br />
                                <small>Are you a new customer?</small>
                            </span>
                        </figcaption>
                    </figure>
                </div>

                <!--Icon-->

                <div class="col-6 col-lg-3" data-tilt>
                    <figure>
                        <div class="icon"><i class="icon icon-rocket"></i></div>
                        <figcaption>
                            <span>
                                <strong>Fast delivery</strong> <br />
                                <small>We're shipping all over the world</small>
                            </span>
                        </figcaption>
                    </figure>
                </div>

                <!--Icon-->

                <div class="col-6 col-lg-3" data-tilt>
                    <figure>
                        <div class="icon"><i class="icon icon-history"></i></div>
                        <figcaption>
                            <span>
                                <strong>Money-back guarantee</strong> <br />
                                <small>30 day money back gurantee</small>
                            </span>
                        </figcaption>
                    </figure>
                </div>

                <!--Icon-->

                <div class="col-6 col-lg-3" data-tilt>
                    <figure>
                        <div class="icon"><i class="icon icon-diamond"></i></div>
                        <figcaption>
                            <span>
                                <strong>VIP discounts</strong> <br />
                                <small>Become VIP member</small>
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/container-->

    </section>
@endsection
