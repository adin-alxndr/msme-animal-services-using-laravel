@extends('layout.master')
@section('booking', 'active')

@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Reservasi /</span> Hotel</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h2 class="card-header m-3 text-center">Reservasi Hotel</h2>
                    <div class="card-body demo-vertical-spacing demo-only-element">           

                      @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Simpanlah kode ini untuk mengecek status reservasimu!
        Kode Reservasi: <strong>{{ session('kode_reservasi') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

                    <form action="{{ route('hotel.store') }}" method="POST">
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
                        <label for="exampleFormControlSelect1" class="form-label">Pilih Jenis Kamar</label>
                        <select name="jenis" class="form-select" id="exampleFormControlSelect1" aria-label="Jenis Kamar" onchange="showDescription()">
                          <option value="0" selected disabled>Pilih Jenis Kamar</option>
                          <option value="VIP Room">VIP Room</option>
                          <option value="Deluxe Room">Deluxe Room</option>
                          <option value="Standard Room">Standard Room</option>
                        </select>
                        <p id="description">Silahkan pilih jenis kamar untuk melihat deskripsi dan harga.</p>
                      </div>
                      
                      <script>
                        function showDescription() {
                          var select = document.getElementById("exampleFormControlSelect1");
                          var description = document.getElementById("description");
                          var selectedIndex = select.selectedIndex;
                      
                          switch (selectedIndex) {
                            case 1:
                              description.innerHTML = "Fasilitas:<ul>\
                                                        <li>Kandang premium permanen</li>\
                                                        <li>Lantai full keramik</li>\
                                                        <li>Ukuran luas banget 120 X 100 X 100cm</li>\
                                                        <li>Full AC</li>\
                                                        <li>Sirkulasi ruangan exhaust fan</li>\
                                                        <li>Air mineral human grade</li>\
                                                        <li>Include premium cat food</li>\
                                                        <li>Pasir rutin diganti</li>\
                                                        <li>Harga: Rp100.000/ Room / Night</li>\
                                                      </ul>";
                              break;
                            case 2:
                              description.innerHTML = "Fasilitas:<ul>\
                                                        <li>Kandang Alumunium</li>\
                                                        <li>Lantai full keramik</li>\
                                                        <li>Ukuran 80 X 70 X 50cm</li>\
                                                        <li>Full AC</li>\
                                                        <li>Sirkulasi ruangan exhaust fan</li>\
                                                        <li>Air mineral human grade</li>\
                                                        <li>Include premium cat food</li>\
                                                        <li>Pasir rutin diganti</li>\
                                                        <li>Harga: Rp85.000/ Room / Night</li>\
                                                      </ul>";
                              break;
                            case 3:
                              description.innerHTML = "Fasilitas:<ul>\
                                                        <li>Kandang lipat</li>\
                                                        <li>Ukuran 90</li>\
                                                        <li>Full AC</li>\
                                                        <li>Sirkulasi ruangan exhaust fan</li>\
                                                        <li>Air mineral human grade</li>\
                                                        <li>Include premium cat food</li>\
                                                        <li>Pasir rutin diganti</li>\
                                                        <li>Harga: Rp65.000/ Room / Night</li>\
                                                      </ul>";
                              break;
                            default:
                              description.textContent = "Silahkan pilih jenis kamar untuk melihat deskripsi dan harga.";
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

                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="tanggalAntarPicker" class="form-label">Pilih Tanggal Antar</label>
                            <input type="date" class="form-control" id="tanggalAntarPicker" name="tgl_antar" min="{{ date('Y-m-d') }}">
                          </div>
                       
                        @error('tgl_antar')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror
                      </div>

                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="jamAntarPicker" class="form-label">Pilih Jam Antar</label>
                            <select class="form-select" id="timePicker" name="jam_antar">
                              <option value="" selected disabled>Pilih Jam</option>
                              @for ($hour = 10; $hour <= 21; $hour++)
                                @php
                                  $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT); // Add leading zero if needed
                                @endphp
                                <option value="{{ $formattedHour }}:00 WIB">{{ $formattedHour }}:00 WIB</option>
                              @endfor
                            </select>
                          </div>
                      @error('jam_antar')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="tanggalJemputPicker" class="form-label">Pilih Tanggal Jemput</label>
                            <input type="date" class="form-control" id="tanggalJemputPicker" name="tgl_jemput" min="{{ date('Y-m-d') }}">
                          </div>
                        @error('tgl_jemput')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror
                      </div>

                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="jamJemputPicker" class="form-label">Pilih Jam Jemput</label>
                            <select class="form-select" id="timePicker" name="jam_jemput">
                              <option value="" selected disabled>Pilih Jam</option>
                              @for ($hour = 10; $hour <= 21; $hour++)
                                @php
                                  $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT); // Add leading zero if needed
                                @endphp
                                <option value="{{ $formattedHour }}:00 WIB">{{ $formattedHour }}:00 WIB</option>
                              @endfor
                            </select>
                          </div>
                      @error('jam_jemput')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @enderror
                    </div>             
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
            <script>
  document.addEventListener('DOMContentLoaded', function () {
    var tanggalAntarPicker = document.getElementById('tanggalAntarPicker');
    var tanggalJemputPicker = document.getElementById('tanggalJemputPicker');

    // Event listener for changes in tanggalAntarPicker
    tanggalAntarPicker.addEventListener('change', function () {
      // Set the min attribute of tanggalJemputPicker to ensure it's before or equal to tanggalAntarPicker
      tanggalJemputPicker.min = tanggalAntarPicker.value;
    });
  });
</script>
@endsection