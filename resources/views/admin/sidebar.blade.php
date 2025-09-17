    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="#" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('images/img/logo.png') }}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="/admin" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/contact-list" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Contact List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/product-category" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Product Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/provide-solution" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Provide Solution</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/product" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/add-gallery" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Gallery </p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
