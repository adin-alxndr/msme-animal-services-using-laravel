@extends('layout.master')

@section('product', 'active')

@section('content')

<!-- Pricing Plan Start -->
<div class="container-fluid bg-light pt-5 pb-4">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="mb-3 font-green">Produk</h4>
            <h1 class="feature-h1">Beli <span class="orangee">Sekarang</span></h1>
        </div>

        <div class="row">
            
            @forelse ($products as $produk)
            <div class="col-lg-2 mb-4">
                <div class="card border-0 custom-card">                    
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img src="{{ asset('storage/' . $produk->foto) }}" alt="Product Image" class="card-img-top">
                    </div>
                    <div class="card-body text-center p-0">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2" style="height: 120px; font-size: 15px">{{ $produk->nama_produk }}</li>
                            <li class="list-group-item p-2" style="height: 20px"><strong>Rp{{ number_format($produk->harga, 0, ',', '.') }},-</strong></li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <a href="{{ $produk->link_shopee }}" class="btn btn-primary btn-block" style="border: 0; width:100%;">
                            <i class="fas fa-shopping-basket"></i> <!-- Font Awesome basket icon -->
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="d-flex justify-content-center text-center">
                Produk belum tersedia.
            </div>
            @endforelse
            
        </div>
    </div>
</div>

@endsection