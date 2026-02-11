<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Homepage - Pengguna | Anabulcom</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('./assets/img/icon.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin />
    <link href="{{url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap')}}" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{url('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{url('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />

    <!-- Table CSS -->
    <link rel="stylesheet" href="{{url('https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css')}}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/main.css')}}" />

    <!-- Bootstrap -->
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css')}}" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Leaflet CSS & JS -->
    <link rel="stylesheet" href="{{url('https://unpkg.com/leaflet/dist/leaflet.css')}}" />
    <script src="{{url('https://unpkg.com/leaflet/dist/leaflet.js')}}"></script>

    <!-- Helpers -->
    <script src="{{url('assets/vendor/js/helpers.js')}}"></script>

    <!-- Table JS -->
    <script src="{{url('https://code.jquery.com/jquery-3.7.1.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/2.0.0/js/dataTables.min.js')}}"></script>
    
    <script src="{{url("https://code.jquery.com/jquery-3.6.4.min.js")}}"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-dark fixed-top" style="background-color: #01AFB0;">
        <div class="container-fluid">
            <img src="{{url('./assets/img/logo-2.png')}}" class="img-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item @yield('home')">
                        <a class="nav-link" href="{{ route('index') }}">HOME</a>
                    </li>
                    <li class="nav-item dropdown @yield('services')">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('grooming') }}">Grooming</a></li>
                            <li><a class="dropdown-item" href="{{ route('hotel') }}">Hotel</a></li>
                            <li><a class="dropdown-item" href="{{ route('dokter') }}">Vets</a></li>
                        </ul>
                    </li>
                    <li class="nav-item @yield('product')">
                        <a class="nav-link" href="{{ route('product') }}">PRODUCT</a>
                    </li>
                    <li class="nav-item @yield('booking')">
                        <a class="nav-link" href="{{ route('booking') }}">BOOKING</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- carousel -->

    <!-- Content -->
    @section('content')

    @show

    <!-- / Content -->
    <div class="content-backdrop fade"></div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white feature-h1"><span class="orangee">Anabul</span>com
                </h1>
                <p class="m-0">Anabulcom diinisiasi sebagai Strategi Digitalisasi Untuk Pusat Pelayanan Hewan Berbasis UMKM Dengan Sistem Informasi Dan Reservasi Berbasis Website sebagai solusi untuk memberikan akses informasi yang lebih mudah, meningkatkan promosi, dan mendukung pengelolaan Pet Center secara lebih efektif.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="orangee mb-4">Contact</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>&nbsp;&nbsp;Jl. Kartini No. 22D, DEPOK</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>&nbsp;&nbsp;+62 89501652332</p>
                        <p><i class="fa fa-envelope mr-2"></i>&nbsp;&nbsp;hello@anabul.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;"  href="{{url('https://www.facebook.com/anabulpetcenter/')}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>&nbsp;&nbsp;
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="{{url('https://api.whatsapp.com/send?phone=6289501652332&text=Hello%20Catmin%20mau%20pesan%20dong')}}">
                                <i class="fab fa-whatsapp"></i>
                            </a>&nbsp;&nbsp;
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="{{url('https://www.instagram.com/anabulcom/')}}">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                <div class="col-md-4 mb-5">
                    <h5 class="orangee mb-4">Popular Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2 text-decoration-none" href="{{ route('index') }}">
                            <i class="fa fa-angle-right mr-2">&nbsp;</i>Home
                        </a>
                        <a class="text-white mb-2 text-decoration-none dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-angle-right mr-2">&nbsp;</i>Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('grooming') }}">Grooming</a></li>
                            <li><a class="dropdown-item" href="{{ route('hotel') }}">Hotel</a></li>
                            <li><a class="dropdown-item" href="{{ route('dokter') }}">Vets</a></li>
                        </ul>
                        <a class="text-white mb-2 text-decoration-none" href="{{ route('product') }}">
                            <i class="fa fa-angle-right mr-2">&nbsp;</i>Product
                        </a>
                        <a class="text-white mb-2 text-decoration-none" href="{{ route('booking') }}">
                            <i class="fa fa-angle-right mr-2">&nbsp;</i>Booking
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="orangee mb-4">Contact Us Now</h5>
                    <div>
                        <a class="btn btn-lg btn-primary btn-block border-0" style="width: 100%;" type="button" href="{{url('https://api.whatsapp.com/send?phone=6289501652332&text=Hello%20Catmin%20mau%20pesan%20dong')}}">Click Here</a>
                        <a class="btn btn-lg btn-primary btn-block border-0 mt-3" style="width: 100%;" type="button" href="{{url('https://shp.ee/pingv5p')}}">Go to Shopee</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-12 text-center text-md-left mb-3 mb-md-0">
                All Rights Reserved.
                ©
                <script>
                    document.write(new Date().getFullYear());
                </script>
                Copyright:
                <a href="" target="_blank" class="footer-link fw-bolder" style="color: white">Anabulcom | Anabul Pet Center, Jakarta</a>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

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