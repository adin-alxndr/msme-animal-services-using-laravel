@extends('layout.master')

@section('home', 'active')

@section('content')

<!-- WELCOME CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
            aria-label="Slide 1"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{url('assets/img/index.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('assets/img/index_1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('assets/img/index_2.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('assets/img/index_3.png')}}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- TENTANG ANABULCOM -->
<div class="container py-5">
    <div class="row py-2">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h1 class="about-h1 mb-4"><span class="boarding" style="font-family: 'Exo 2', sans-serif;">Tentang Anabulcom</span>
            </h1>
            <h5 class="text-muted mb-3" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Anabulcom lahir dari kesamaan visi para founders untuk memberikan pelayanan premium yang lengkap untuk para pecinta kucing.</h5>
            <p class="mb-4" style="font-family:Montserrat">Pada 5 juni 2020, Anabul Pet Center sebagai offline experience center kami pertama kali dibuka di Depok, Jawa Barat dengan konsep one stop experience for cat lovers. 
                Mulai dari Pet Shop, Cat Grooming Center, Dokter Hewan, Premium Cat Hotel, hingga cat parents education center.
            </p>
            <ul class="list-inline">
                <li>
                    <h5><i class="bx bx-check-double" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"></i>  Pet Shop Offline dan Online</h5>
                </li>
                <li>
                    <h5><i class="bx bx-check-double" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"></i>  Cat Grooming Center</h5>
                </li>
                <li>
                    <h5><i class="bx bx-check-double" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"></i>  Dokter Hewan</h5>
                </li>
                <li>
                    <h5><i class="bx bx-check-double" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"></i>  Cat Hotel</h5>
                </li>
            </ul>
            <a href="#services" class="btn btn-lg btn-primary mt-3 px-4">Lihat Lebih Lanjut</a>
        </div>
        <div class="col-lg-5">
            <div class="row px-3">
                <div class="col-12 p-0">
                    <img class="img-fluid w-100" src="{{url('assets/img/icon.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOUNDERS -->
<div class="container mt-5 pt-5 pb-3 mb-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="mb-3 font-green">Founders Team</h4>
        <h1 class="feature-h1">Meet our <span class="orangee">Founders Team</span></h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="{{url('assets/img/founder_1.png')}}" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light details">
                        <h5>Riri Muhdiyati</h5>
                        <i>Cattery bersertifikat internasional (CFA dan ICA)</i>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="{{url('assets/img/founder_2.png')}}" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light details">
                        <h5>Trisetyani Suci (Uchy)</h5>
                        <i>Pegiat Kesejahteraan kucing, content creator @kucingmalasid</i>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="{{url('assets/img/founder_3.png')}}" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light details">
                        <h5>Dipa Utomo</h5>
                        <i>Certified Digital Marketer, content creator<br> @kucingmalasid </i>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- SERVICES -->
<div id="services" class="container-fluid bg-light pt-5 mt-5" style="background-color: #f2f2f4 !important;">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="our-services">Our Services</h4>
            <h1 class="service-h1"><span class="orangee">Premium</span> Pet Services</h1>
        </div>
        <div class="row pb-3">
            <div class="col-md-4 col-lg-3">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                    <div class="justify-content-center"><img class="images-icon" src="{{url('assets/img/services_shop.png')}}" alt=""></div>
                    <h3 class="mb-3">Online Pet Shop</h3>
                    <p>Makanan kucing, aksesoris kucing, mainan kucing, alat makan kucing, dan lainnya semua ada!</p>
                    <a class="text-uppercase font-weight-bold read-more" href="{{ route('product') }}">Belanja Sekarang >></a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                    <div class="justify-content-center"><img class="images-icon" src="{{url('assets/img/services_grooming.png')}}" alt=""></div>
                    <h3 class="mb-3">Cat Grooming Center</h3>
                    <p>Menyediakan tempat Grooming air hangat dengan ruangan yang bisa dilihat dari luar. </p>
                    <a class="text-uppercase font-weight-bold read-more" href="{{ route('grooming') }}">Lihat Fasilitas >></a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                    <div class="justify-content-center"><img class="images-icon" src="{{url('assets/img/services_doctor.png')}}" alt=""></div>
                    <h3 class="mb-3">Dokter Hewan/Vets</h3>
                    <p>Mau cek kesehatan, vaksin, atau steril kucing kamu? Yuk ke dokter hewan Anabul Pet Center.</p>
                    <a class="text-uppercase font-weight-bold read-more" href="{{ route('dokter') }}">Lihat Fasilitas >></a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                    <div class="justify-content-center"><img class="images-icon" src="{{url('assets/img/services_hotel.png')}}" alt=""></div>
                    <h3 class="mb-3">Cat Hotel</h3>
                    <p>Cat hotel premium di Depok dengan 3 pilihan kelas yang dilengkapi fasilitas terbaik dan berkualitas.</p>
                    <a class="text-uppercase font-weight-bold read-more" href="{{ route('hotel') }}">Lihat Fasilitas >></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LOCATION -->
<div class="container-fluid bg-light pt-5" style="background-color: #f2f2f4 !important;">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="service-h1 mb-5">Location</h1>
            <h4 class="our-services mb-5">Anabul Pet Center – Jl. Kartini No. 22D, Pancoran Mas, Depok – Jawa Barat</h4>
            <div id="map" class="rounded rounded-lg">
            </div>
        </div>
    </div>
</div>

<script>
    var mapCenter = [-6.404021, 106.822503]; // Coordinates you provided
    var map = L.map('map').setView(mapCenter, 26);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    var marker = L.marker(mapCenter).addTo(map);

    marker.bindPopup("Anabul Pet Center").openPopup();
</script>

@endsection