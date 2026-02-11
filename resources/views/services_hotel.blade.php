@extends('layout.master')

@section('services', 'active')

@section('content')

<div class="container mt-5 pt-5 pb-3">
    <div class="d-flex flex-column text-center">
        <div class="d-flex flex-column text-center">
            <h4 class="mb-3 font-green">Pilihan Terbaik untuk Penginapan Kucingmu</h4>
            <h1 class="feature-h1">Premium <span class="orangee">Cat Hotel</span></h1>
        </div>
    </div>
        <div class="col-lg-12 col-md-16">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-body" src="{{url('assets/img/hotel_main.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light pt-5 mt-5" style="background-color: #f2f2f4 !important;">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="feature-h1"><span class="orangee">Fasilitas</span></h1>
        </div>
        
        <div class="row pb-3">
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/hotel_fasilitas1.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>FULL AC</h5>
                        <p>Supaya kucing tetap extra nyaman dan terhidrasi dengan baik.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/hotel_fasilitas2.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>EXHAUST FAN</h5>
                        <p>Udara di ruangan cat hotel selalu tersirkulasi dengan baik.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/hotel_fasilitas3.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>AIR MINERAL</h5>
                        <p>Include air mineral human grade, bukan air keran/air mentah.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/hotel_fasilitas4.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>PASIR RUTIN DIGANTI</h5>
                        <p>Supaya kucingmu kalau mau pup atau pip tetap nyaman.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto px-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/hotel_fasilitas5.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>RUANGAN LUAS</h5>
                        <p>Besar ruangan tergantung kelas yang kamu pilih.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto px-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/hotel_fasilitas6.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>INCLUDE CAT FOOD </h5>
                        <p>Kami memberikan makanan terbaik untuk kucing tamu di hotel kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Price List -->
<div class="container mt-5 mb-5">
    <h2 class="my-3 text-center" style="font-family: 'Nunito', sans-serif; font-weight: bold; font-size: 3.0rem; padding: 10px;">Price List</h2>
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{url('assets/img/hotel_price1.png')}}" class="card-img-top" alt="...">
                    <h5 class="card-title" style="font-weight: bold; padding: 10px;">VIP Room</h5>
                    <ul class="list-group list-group-flush text-white">
                        <li class="list-group-item">Kandang premium permanen</li>
                        <li class="list-group-item">Lantai full keramik</li>
                        <li class="list-group-item">Ukuran luas 120 X 100 X 100cm</li>
                        <li class="list-group-item">Full AC</li>
                        <li class="list-group-item">Sirkulasi ruangan exhaust fan</li>
                        <li class="list-group-item">Air mineral human grade</li>
                        <li class="list-group-item">Include premium cat food</li>
                        <li class="list-group-item">Pasir rutin diganti</li>
                    </ul>
                    <p class="card-text" style="font-weight: bold; color: #ed6436; font-size: 20px;">Rp. 100.000 /Room /Night</p>
                    <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #ed6436;">BOOK NOW</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{url('assets/img/hotel_price2.png')}}" class="card-img-top" alt="...">
                    <h5 class="card-title" style="font-weight: bold; padding: 10px;">Deluxe Room</h5>
                    <ul class="list-group list-group-flush text-white">
                        <li class="list-group-item">Kandang Alumunium</li>
                        <li class="list-group-item">Lantai full keramik</li>
                        <li class="list-group-item">Ukuran 80 X 70 X 50cm</li>
                        <li class="list-group-item">Full AC</li>
                        <li class="list-group-item">Sirkulasi ruangan exhaust fan</li>
                        <li class="list-group-item">Air mineral human grade</li>
                        <li class="list-group-item">Include premium cat food</li>
                        <li class="list-group-item">Pasir rutin diganti</li>
                    </ul>
                    <p class="card-text" style="font-weight: bold; color: #ed6436; font-size: 20px;">Rp. 85.000 /Room /Night</p>
                    <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #ed6436;">BOOK NOW</a>
                </div>
            </div>
        </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <img src="{{url('assets/img/hotel_price3.png')}}" class="card-img-top" alt="...">
                <h5 class="card-title" style="font-weight: bold; padding: 10px;">Standard Room</h5>
                <ul class="list-group list-group-flush text-white">
                    <li class="list-group-item">Kandang lipat</li>
                    <li class="list-group-item">Ukuran 90 cm</li>
                    <li class="list-group-item">Full AC</li>
                    <li class="list-group-item">Sirkulasi ruangan exhaust fan</li>
                    <li class="list-group-item">Air mineral human grade</li>
                    <li class="list-group-item">Include premium cat food</li>
                    <li class="list-group-item">Pasir rutin diganti</li>
                </ul>
                <p class="card-text" style="font-weight: bold; color: #ed6436; font-size: 20px;">Rp. 65.000 /Room /Night</p>
                <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #ed6436;">BOOK NOW</a>
            </div>
        </div>
    </div>
</div>
</div>
    
<!-- Price List End -->
@endsection