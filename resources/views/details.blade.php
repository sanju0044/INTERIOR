<!DOCTYPE HTML>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Details</title>
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
                    <h1 class="text-center">{{ $data->category->product_cat }} - {{ $data->solutions->solution }}</h1>
                </div>
            </div>
        </section>
        <div class="road">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="index.html">Home</a><span>»</span><span>{{ $data->category->product_cat }} - {{ $data->solutions->solution }}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION SERVICE DETAILS -->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 service-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 pdb-2">
                                        <img src="{{ asset('storage/' . $data->img) }}" alt="">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3 class="mt-4">{{ $data->category->product_cat }}  <span class="font-weight-bold"> {{ $data->solutions->solution }}</span></h3>
                                    <p class="mb-4">{!! $data->description !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="departments-details position-relative">
                            <!-- Blurred Content -->
                            <div class="">
                                <h3>PLAN AND <span class="font-weight-bold">PRICE </span></h3>
                                <p class="mb-4">If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros adipiscing.</p>

                                <div class="row">
                                    <div class="col-md-6 dep-list-1">
                                        <div class="depar-title">
                                            <h4 class="mt-1 ml-2">Plan</h4>
                                            <h4 class="mt-1 mr-2">Price</h4>
                                        </div>
                                        <div class="depart-list  blur-content">
                                            <ul class="mt-4 ml-4">
                                                <li>Prepare Home Remodeling Ideas</li>
                                                <li>Create Decorating Ideas</li>
                                                <li>Specify Materials</li>
                                                <li>Install Interior Door</li>
                                                <li>Paint Rooms</li>
                                                <li>Install Wall Insulation</li>
                                            </ul>
                                            <ul class="mt-4 mr-4">
                                                <li>****</li>
                                                <li>****</li>
                                                <li>****</li>
                                                <li>****</li>
                                                <li>****</li>
                                                <li>****</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="depar-title">
                                            <h4 class="mt-1 ml-2">Service</h4>
                                            <h4 class="mt-1 mr-2">Price</h4>
                                        </div>
                                        <div class="depart-list  blur-content">
                                            <ul class="mt-4 ml-4">
                                                <li>Architect</li>
                                                <li>Interior Designer</li>
                                                <li>Home Decorator</li>
                                                <li>Electrician</li>
                                                <li>Plumber</li>
                                                <li>House Renovation</li>
                                            </ul>
                                            <ul class="mt-4 mr-4">
                                                <li>****</li>
                                                <li>****</li>
                                                <li>****</li>
                                                <li>****</li>
                                                <li>****</li>
                                                <li>****</li>
                                            </ul>
                                        </div>
                                    </div>
                                     <a class="this-link btn btn-lg btn-block btn-primary mt-5" href="residental-interior.html" data-toggle="modal" data-target="#exampleModal"> 🔒 For The Best Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="completed-projects pb-0">
                            <div class="container">
                                <h3>COMPLETED <span class="font-weight-bold">PROJECTS </span></h3>
                                <div class="row">
                                    <div class="col-md-4 cons hover-effect">
                                        <div class="choos">
                                            <a href="modern-furniture.html#">
                                                <figure><img src="images/services/s-1.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 cons hover-effect">
                                        <div class="choos">
                                            <a href="modern-furniture.html#">
                                                <figure><img src="images/services/s-6.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 hover-effect">
                                        <div class="choos">
                                            <a href="modern-furniture.html#">
                                                <figure><img src="images/services/s-4.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <aside class="col-lg-3 col-md-12">
                        <div class="widget-service-details car">
                            <div class="business-service">
                                <h5 class="font-weight-bold">Product Ranges</h5>
                                <ul>
                                    @foreach ($nav as $nv)
                                         <li><a href="/product-range/{{ encrypt($nv->id) }}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ $nv->product_cat }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="business-service mt-3">
                                <h5 class="font-weight-bold mb-4">We provide solutions for</h5>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Electrical</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Facade</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">UPVC</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Tiles</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Paints</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Kitchen and Custom Products</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Other Interior Products</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Construction Chemicals</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Sanitary Ware & Fittings</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">CPVC Pipes & Fittings</a></span>
                                </div>
                            </div>
                            <!-- Start: Opening hour -->
                            <div class="widget-boxed mt-4">
                                <h5 class="font-weight-bold ">Opening Hours</h5>
                                <div class="widget-boxed-body">
                                    <div class="side-list">
                                        <ul>
                                            <li class="pt-0">Monday <span>9 AM - 5 PM</span></li>
                                            <li>Tuesday <span>9 AM - 5 PM</span></li>
                                            <li>Wednesday <span>9 AM - 5 PM</span></li>
                                            <li>Thursday <span>9 AM - 5 PM</span></li>
                                            <li>Friday <span>9 AM - 5 PM</span></li>
                                            <li>Saturday <span>9 AM - 3 PM</span></li>
                                            <li>Sunday <span>Closed</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Opening hour -->
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION SERVICE DETAILS -->

        @include('footer')

        <!-- ARCHIVES JS -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/tether.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/lightcase.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/inner-script.js') }}"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>
        <script>
            $('.style1').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 1,
                        margin: 20
                    },
                    500: {
                        items: 1,
                        margin: 20
                    },
                    768: {
                        items: 2,
                        margin: 20
                    },
                    991: {
                        items: 2,
                        margin: 20
                    },
                    1000: {
                        items: 3,
                        margin: 20
                    }
                }
            });

        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>

