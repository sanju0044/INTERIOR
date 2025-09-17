 <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">

                    <!-- Logo -->
                    <div id="logo" class="logo-white">
                        <a href="index.html">
                        <img src="{{ asset('images/img/logo.png') }}" data-sticky-logo="{{ asset('images/img/logo.png') }}" alt="Logo">
                        </a>
                    </div>

                    <!-- Navigation -->
                    <nav id="navigation" class="style-1 head-tr">
                        <ul id="responsive" class="d-flex list-unstyled mb-0">
                        <li class="ml-3 font-weight-bold"><a href="/">Home</a></li>
                        <li class="ml-3 font-weight-bold"><a href="about">About Us</a></li>
                        <li class="font-weight-bold"><a href="contact.html#">Offering</a>
                                    <ul>
                                        @foreach ($nav as $nv)
                                            <li><a href="/product-range/{{ encrypt($nv->id) }}">{{ $nv->product_cat }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                        <li class="ml-3 font-weight-bold"><a href="contact">Contact</a></li>
                        <li class="ml-3 font-weight-bold">
                            <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                            GET FREE QUOTE
                            </a>
                        </li>
                        </ul>
                    </nav>

                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger d-lg-none">
                        <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                        </button>
                    </div>

                    </div>
                </div>
                </div>

            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
