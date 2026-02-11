<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Admin | Anabulcom</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('assets/img/icon.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin />
    <link
      href="{{url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap')}}"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{url('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{url('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{url('assets/css/dashboard.css')}}" />

    <!-- Table CSS -->
    <link rel="stylesheet" href="{{url('https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css')}}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{url('assets/vendor/js/helpers.js')}}"></script>

    <!-- Table JS -->
    <script src="{{url('https://code.jquery.com/jquery-3.7.1.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/2.0.0/js/dataTables.min.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{url('assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
              <img src="{{url('assets/img/logo.png')}}" class="img-fluid">
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                  <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
          </div>
      
          <div class="menu-inner-shadow"></div>
      
          <ul class="menu-inner py-1">
      
              <!-- Layouts -->
              <li class="menu-header small text-uppercase">
                  <span class="menu-header-text">Produk</span>
              </li>
              <li class="menu-item @yield('listproduk')">
                  <a href="{{ route('list_produk') }}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                      <div data-i18n="Basic">List Produk</div>
                  </a>
              </li>
              <li class="menu-item @yield('inputproduk')">
                  <a href="{{ route('input_produk') }}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                      <div data-i18n="Basic">Input Produk Baru</div>
                  </a>
              </li>
      
              <li class="menu-header small text-uppercase">
                  <span class="menu-header-text">Disetujui</span>
              </li>
              <li class="menu-item @yield('disetujuigrooming')">
                  <a href="{{ route('disetujui_grooming') }}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                      <div data-i18n="Basic">Reservasi Grooming</div>
                  </a>
              </li>
              <li class="menu-item @yield('disetujuidokter')">
                  <a href="{{ route('disetujui_dokter') }}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                      <div data-i18n="Basic">Reservasi Dokter</div>
                  </a>
              </li>
              <li class="menu-item @yield('disetujuihotel')">
                  <a href="{{ route('disetujui_hotel') }}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                      <div data-i18n="Basic">Reservasi Hotel</div>
                  </a>
              </li>
      
              <li class="menu-header small text-uppercase">
                  <span class="menu-header-text">Menunggu Persetujuan</span>
              </li>
              <li class="menu-item @yield('menunggugrooming')">
                  <a href="{{ route('menunggu_grooming') }}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                      <div data-i18n="Basic">Reservasi Grooming</div>
                  </a>
              </li>
              <li class="menu-item @yield('menunggudokter')">
                  <a href="{{ route('menunggu_dokter') }}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                      <div data-i18n="Basic">Reservasi Dokter</div>
                  </a>
              </li>
              <li class="menu-item @yield('menungguhotel')">
                  <a href="{{ route('menunggu_hotel') }}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                      <div data-i18n="Basic">Reservasi Hotel</div>
                  </a>
              </li>
      
          </ul>
      </aside>
      <!-- / Menu -->
      

        <!-- Layout container -->
        <div class="layout-page">
          
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                </div>
              </div>

              <div id="searchResults"></div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{url('assets/img/user.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{url('assets/img/user.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Admin</span>
                            <small class="text-muted">Online</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Log Out</span>
                      </a>
                      <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
                  
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            @section('content')

            @show
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-center py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Copyright:
                  <a href="" target="_blank" class="footer-link fw-bolder ">Anabulcom | Anabul Pet Center, Jakarta</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{url('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{url('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{url('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{url('assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="{{url('assets/js/dashboard_js/main.js')}}"></script>

    <!-- jQuery and Popper.js -->
    <script src="{{url('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}"></script>

    <!-- Bootstrap JavaScript -->
    <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>

  </body>
</html>
