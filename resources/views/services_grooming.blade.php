@extends('layout.master')

@section('services', 'active')

@section('content')

<div class="container mt-5 pt-5 pb-3">
    <div class="d-flex flex-column text-center">
        <div class="d-flex flex-column text-center">
            <h4 class="mb-3 font-green">Pilihan Terbaik untuk Kebersihan Kucingmu</h4>
            <h1 class="feature-h1">Cat Grooming <span class="orangee">Center</span></h1>
        </div>
    </div>
        <div class="col-lg-12 col-md-16">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-body" src="{{url('assets/img/grooming_main.png')}}" alt="">
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
            <div class="col-lg-6 col-md-8">
                <img class="img-fluid w-75" src="{{url('assets/img/grooming_fasilitas2.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>Ruang Transparan</h5>
                        <p>Ruangan Grooming Anabul Pet Center memiliki sisi dinding yang transparan dan bisa ditungguin. Jadi, kamu bisa nungguin sambil nonton kucing kamu dimandikan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <img class="img-fluid w-75" src="{{url('assets/img/grooming_fasilitas.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>Bathtub yang Didesain Khusus untuk Kucing</h5>
                        <p>Ruangan Grooming Anabul Pet Center memiliki sisi dinding yang transparan dan bisa ditungguin. Jadi, kamu bisa nungguin sambil nonton kucing kamu dimandikan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/grooming_fasilitas3.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>Air Hangat</h5>
                        <p>Mandi air hangat bikin kucing kamu berasa lagi spa. Jadi tenang dan ekstra nyaman.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/grooming_fasilitas4.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>Peralatan Khusus Pet</h5>
                        <p>Kami tidak memakai hair dryer manusia yang panas dan berisik.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/grooming_fasilitas5.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>Ruang Tunggu Full AC</h5>
                        <p>Di Anabul Pet Center, kamu akan disediakan ruang tunggu yang nyaman dan full AC.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/grooming_fasilitas6.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>Nail Care</h5>
                        <p>Kuku-kuku kucing kamu dipotongin setiap grooming secara FREE.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto px-auto">
                <img class="img-fluid w-50" src="{{url('assets/img/grooming_fasilitas7.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>Ear Care</h5>
                        <p>Groomer kami juga akan menginspeksi kesehatan dan kebersihan telinga kucing.</p>
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
                    <h5 class="card-title" style="font-weight: bold;">Healthy Grooming</h5>
                    <ul class="list-group list-group-flush text-white">
                        <li class="list-group-item">Pre – Grooming</li>
                        <li class="list-group-item">Mandi Air Hangat</li>
                        <li class="list-group-item">Degrease</li>
                        <li class="list-group-item">Shampoo</li>
                        <li class="list-group-item">Alat grooming khusus pet</li>
                        <li class="list-group-item">Nail Care</li>
                        <li class="list-group-item">Ear Care</li>
                    </ul>
                    <p class="card-text" style="font-weight: bold; color: #ed6436; font-size: 20px;">Only Rp. 65.000</p>
                    <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #ed6436;">BOOK NOW</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;">Anti Kutu</h5>
                    <ul class="list-group list-group-flush text-white">
                        <li class="list-group-item">Pre – Grooming</li>
                        <li class="list-group-item">Mandi Air Hangat</li>
                        <li class="list-group-item">Degrease</li>
                        <li class="list-group-item" style="color: #ed6436;">Anti-Flea Shampoo</li>
                        <li class="list-group-item">Alat grooming khusus pet</li>
                        <li class="list-group-item">Nail Care</li>
                        <li class="list-group-item">Ear Care</li>
                    </ul>
                    <p class="card-text" style="font-weight: bold; color: #ed6436; font-size: 20px;">Only Rp. 75.000</p>
                    <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #ed6436;">BOOK NOW</a>
                </div>
            </div>
        </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title" style="font-weight: bold;">Anti Jamur</h5>
                <ul class="list-group list-group-flush text-white">
                    <li class="list-group-item">Pre – Grooming</li>
                    <li class="list-group-item">Mandi Air Hangat</li>
                    <li class="list-group-item">Degrease</li>
                    <li class="list-group-item" style="color: #ed6436;">Anti-Fungal Shampoo</li>
                    <li class="list-group-item">Alat grooming khusus pet</li>
                    <li class="list-group-item">Nail Care</li>
                    <li class="list-group-item">Ear Care</li>
                </ul>
                <p class="card-text" style="font-weight: bold; color: #ed6436; font-size: 20px;">Only Rp. 75.000</p>
                <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #ed6436;">BOOK NOW</a>
            </div>
        </div>
    </div>
</div>
    <div class="row justify-content-center mt-4">
        
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;">Complete</h5>
                    <ul class="list-group list-group-flush text-white">
                        <li class="list-group-item">Pre – Grooming</li>
                        <li class="list-group-item">Mandi Air Hangat</li>
                        <li class="list-group-item">Degrease</li>
                        <li class="list-group-item" style="color: #ed6436;">Anti Fungal + Flea Shampoo</li>
                        <li class="list-group-item">Alat grooming khusus pet</li>
                        <li class="list-group-item">Nail Care</li>
                        <li class="list-group-item">Ear Care</li>
                    </ul>
                    <p class="card-text" style="font-weight: bold; color: #ed6436; font-size: 20px;">Only Rp. 95.000</p>
                    <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #ed6436;">BOOK NOW</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;">Premium Spa</h5>
                    <ul class="list-group list-group-flush text-white">
                        <li class="list-group-item">Pre – Grooming</li>
                        <li class="list-group-item">Mandi Air Hangat</li>
                        <li class="list-group-item">Degrease</li>
                        <li class="list-group-item" style="color: #ed6436;">Premium Shampoo</li>
                        <li class="list-group-item">Conditioner</li>
                        <li class="list-group-item">Alat grooming khusus pet</li>
                        <li class="list-group-item">1 kucing 1 handuk</li>
                        <li class="list-group-item">Nail Care</li>
                        <li class="list-group-item">Ear Care</li>
                    </ul>
                    <p class="card-text" style="font-weight: bold; color: #ed6436; font-size: 20px;">Only Rp. 100.000</p>
                    <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #ed6436;">BOOK NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Price List End -->
@endsection