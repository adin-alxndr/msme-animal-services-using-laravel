@extends('layout.dashboardmaster')

@section('inputproduk', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> Input Produk Baru</h4>

    <div class="row">
        <!-- Basic -->
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Input Produk Baru</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">

                  <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <a href="{{ route('list_produk') }}" class="alert-link">Cek Produk Disini</a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="input-group mb-3">
                        <span class="input-group-text">Nama Produk</span>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" />
                    </div>
                    @error('nama_produk')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                
                    <div class="input-group mb-3">
                        <span class="input-group-text">Harga</span>
                        <input type="text" class="form-control" id="harga" name="harga" />
                        <span class="input-group-text">.00</span>
                    </div>
                    @error('harga')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                
                    <div class="input-group mb-3">
                        <span class="input-group-text">Link Produk</span>
                        <input type="text" class="form-control" placeholder="https://shopee.co.id/product/" id="link_shopee" name="link_shopee" />
                    </div>
                    @error('link_shopee')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto" accept="image/*" />
                        <label class="input-group-text">Upload</label>
                    </div>
                    @error('foto')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary" style="width: 200px;">Tambahkan Produk</button>
                    </div>
                </form>                                      

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
