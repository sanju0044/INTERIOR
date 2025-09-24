<header id="header-container" class="header head-tr">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="container">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo" class="col-lg-2 logo-white">
                            <a href="/">
                                <img src="{{ asset('images/img/logo.png') }}" data-sticky-logo="{{ asset('images/img/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                           <ul id="responsive">
                                <li class="ml-3 font-weight-bold"><a href="/">Home</a></li>
                                <li class="ml-3 font-weight-bold"><a href="about">About Us</a></li>
                                <li class="font-weight-bold"><a href="#">Offering</a>
                                   <ul class="nav-list">
                                        @foreach ($nav as $nv)
                                            <li>
                                                <a href="/product-range/{{ encrypt($nv->id) }}">
                                                    {{-- <img src="{{ asset($nv->product_img) }}" alt="" width="100"> --}}
                                                    {{ $nv->product_cat }}
                                                </a>
                                            </li>
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
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->

        </header>
