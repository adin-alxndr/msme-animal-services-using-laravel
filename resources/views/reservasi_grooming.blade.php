@extends('layout.master')
@section('booking', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Reservasi /</span> Grooming</h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h2 class="card-header m-3 text-center">Reservasi Grooming</h2>
        <div class="card-body demo-vertical-spacing demo-only-element">

          @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Simpanlah kode ini untuk mengecek status reservasimu!
        Kode Reservasi: <strong>{{ session('kode_reservasi') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


          <form action="{{ route('grooming.store') }}" method="POST">
            @csrf
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon11">Nama Owner</span>
            <input
              name="nama_owner"
              type="text"
              class="form-control"
              aria-label="Username"
              aria-describedby="basic-addon11"
            />
          </div>
          @error('nama_owner')
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @enderror

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon11">Nama Anabul</span>
            <input
            name="nama_anabul"
              type="text"
              class="form-control"
              aria-label="Username"
              aria-describedby="basic-addon11"
            />
          </div>
@error('nama_anabul')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror   

          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Pilih Jenis Grooming</label>
            <select name="jenis" class="form-select" id="exampleFormControlSelect1" aria-label="Jenis Grooming" onchange="showDescription()">
              <option value="0" selected disabled>Pilih Jenis Grooming</option>
              <option value="Grooming Kering">Grooming Kering</option>
              <option value="Grooming Sehat">Grooming Sehat</option>
              <option value="Grooming Kutu">Grooming Kutu</option>
              <option value="Grooming Jamur">Grooming Jamur</option>
              <option value="Grooming Lengkap Medis">Grooming Lengkap Medis</option>
              <option value="Grooming Lengkap SPA">Grooming Lengkap SPA</option>
              <option value="Grooming Treatment Whitening">Grooming Treatment Whitening</option>
            </select>
            <p id="description">Silahkan pilih jenis grooming untuk melihat deskripsi.</p>
          </div>
          
          <script>
            function showDescription() {
              var select = document.getElementById("exampleFormControlSelect1");
              var description = document.getElementById("description");
              var selectedIndex = select.selectedIndex;
          
              switch (selectedIndex) {
                case 1:
                  description.innerHTML = "Grooming tanpa masuk air, bersihkan mata telinga, gunting kuku, trimming kaki dan pantat. <br>Harga: Rp 40.000";
                  break;
                case 2:
                  description.innerHTML = "Grooming 3 tahap, shampo + degrease + conditioner. <br>Harga: Rp 65.000";
                  break;
                case 3:
                  description.innerHTML = "Grooming 3 tahap, shampoo anti kutu + degrease + conditioner. <br>Harga: Rp 75.000";
                  break;
                case 4:
                  description.innerHTML = "Grooming 3 tahap, shampoo anti jamur + degrease + conditioner. <br>Harga: 75.000";
                  break;
                case 5:
                  description.innerHTML = "Grooming 3 tahap, shampoo anti kutu & jamur + degrease + conditioner. <br>Harga: 95.000";
                  break;
                case 6:
                  description.innerHTML = "Grooming 3 tahap, shampoo premium + degrease + SPA + conditioner. <br>Harga: 95.000";
                  break;
                case 7:
                  description.innerHTML = "Grooming 3 tahap, shampoo hyper white + degrease + conditioner. <br>Harga: 150.000";
                  break;
                default:
                  description.textContent = "Silahkan pilih jenis grooming untuk melihat deskripsi dan harga.";
                  break;
              }
            }
          </script>
@error('jenis')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror   
          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Pilih Tipe Bulu</label>
            <select name="tipe" class="form-select" id="exampleFormControlSelect1" aria-label="Tipe Bulu">
              <option value="0" selected disabled>Pilih Tipe Bulu</option>
              <option value="Short Hair">Short Hair</option>
              <option value="Long Hair">Long Hair</option>
            </select>
          </div>               
          @error('tipe')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror   

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="datePicker" class="form-label">Pilih Tanggal</label>
                <input type="date" class="form-control" id="datePicker" name="tanggal" min="{{ date('Y-m-d') }}" />
              </div>
              @error('tanggal')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror   
            </div>
            

            <div class="col-md-6">
              <div class="mb-3">
                <label for="timePicker" class="form-label">Pilih Jam</label>
                <select class="form-select" id="timePicker" name="jam">
                  <option value="" selected disabled>Pilih Jam</option>
                  @for ($hour = 10; $hour <= 21; $hour++)
                    @php
                      $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT); // Add leading zero if needed
                    @endphp
                    <option value="{{ $formattedHour }}:00 WIB">{{ $formattedHour }}:00 WIB</option>
                  @endfor
                </select>
              </div>
              @error('jam')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror   
            </div>
      
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" style="width: 200px;">Reservasi Sekarang</button>
          </div>
        </form>

        </div>
        
      </div>
    </div>
  </div>
</div>
</div>

@endsection