<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Ranges</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700%7COpen+Sans:300,400" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body class="inner-page">
    <!-- Wrapper -->
    <div id="wrapper">

        @include('navbar')

        <section class="headings">
            <div class="text-heading">
                <div class="container">
                    <h1 class="text-center">Product Ranges</h1>
                </div>
            </div>
        </section>
        <div class="road">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="index.html">Home</a><span>»</span><span>Product Ranges</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION SERVICES -->
        <section class="all-services">
            <div class="container">
                <div class="section-title">
                    <h3>Product Ranges</h3>
                    <h2>We provide solutions for</h2>
                </div>
                <div class="row mt-50">
                    @foreach ($pro_range as $pr)
                        <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                            <div class="item mb-30">
                                <div class=service-box>
                                    <figure class="img-box">
                                        <a href="#"><img src="{{ asset($pr->provide_solutions_img) }}" alt="" style="height: 260px;"></a>
                                        <figcaption class="default-overlay-outer">
                                            <div class="inner">
                                                <div class="content-layer">
                                                    <a class="this-link btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Enquery</a>
                                                    <a class="btn btn-secondary mt-5" href="/details/{{ encrypt($pr->id) }}">Details&nbsp;&nbsp;&nbsp;</a>
                                                 </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="clearfix service-inner-box">
                                        <div class=service-content-box>
                                            <h3 style="color: black;font-weight:900">{{ $pr->category->product_cat }}</h3>
                                            <h3 style="color: #601a34;font-weight:500">{{ $pr->solution }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END SECTION SERVICES -->

        <!-- START SECTION TESTIMONIALS -->
        <section class="testimonials bg-white-2">
            <div class="container">
                <div class="section-title">
                    <h3>Our Customers</h3>
                    <h2>Words</h2>
                </div>
                <div class="owl-carousel style1">
                    <div class="test-1">
                        <h3>Lisa Smith</h3>
                        <img src="images/testimonials/ts-1.jpg" alt="">
                        <h6 class="mt-2">New York</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1">
                        <h3>Jhon Morris</h3>
                        <img src="images/testimonials/ts-2.jpg" alt="">
                        <h6 class="mt-2">Los Angeles</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1">
                        <h3>Mary Deshaw</h3>
                        <img src="images/testimonials/ts-3.jpg" alt="">
                        <h6 class="mt-2">Chicago</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1">
                        <h3>Gary Steven</h3>
                        <img src="images/testimonials/ts-4.jpg" alt="">
                        <h6 class="mt-2">Philadelphia</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1">
                        <h3>Cristy Mayer</h3>
                        <img src="images/testimonials/ts-5.jpg" alt="">
                        <h6 class="mt-2">San Francisco</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1">
                        <h3>Ichiro Tasaka</h3>
                        <img src="images/testimonials/ts-6.jpg" alt="">
                        <h6 class="mt-2">Houston</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TESTIMONIALS -->

       @include('footer')

        @include('js')

    </div>
    <!-- Wrapper / End -->
</body>

</html>
