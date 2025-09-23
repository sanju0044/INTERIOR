 <!-- Header Container
        ================================================== -->
      <header id="header-container" class="header head-tr">
  <div id="header" class="head-tr bottom">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">

        <!-- Logo -->
        <a class="navbar-brand" href="/">
          <img src="{{ asset('images/img/logo.png') }}"
               alt="Logo"
               class="d-inline-block align-top"
               style="height:50px;">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav align-items-lg-center">

            <li class="nav-item ml-lg-3 font-weight-bold">
              <a class="nav-link" href="/">Home</a>
            </li>

            <li class="nav-item ml-lg-3 font-weight-bold">
              <a class="nav-link" href="/about">About Us</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown ml-lg-3 font-weight-bold">
              <a class="nav-link dropdown-toggle" href="#" id="offeringDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Offering
              </a>
              <div class="dropdown-menu" aria-labelledby="offeringDropdown">
                @foreach ($nav as $nv)
                  <a class="dropdown-item d-flex align-items-center" href="/product-range/{{ encrypt($nv->id) }}">
                    <img src="{{ asset($nv->product_img) }}" alt="" class="mr-2" style="width:25px; height:25px;">
                    {{ $nv->product_cat }}
                  </a>
                @endforeach
              </div>
            </li>

            <li class="nav-item ml-lg-3 font-weight-bold">
              <a class="nav-link" href="/contact">Contact</a>
            </li>

            <li class="nav-item ml-lg-3 font-weight-bold">
              <a class="btn btn-primary text-white px-3 py-1" href="#" data-toggle="modal" data-target="#exampleModal">
                GET FREE QUOTE
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

        <div class="clearfix"></div>
        <!-- Header Container / End -->
