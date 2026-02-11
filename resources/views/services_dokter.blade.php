@extends('layout.master')

@section('services', 'active')

@section('content')

<div class="container mt-5 pt-5 pb-3">
    <div class="d-flex flex-column text-center">
        <div class="d-flex flex-column text-center">
            <h4 class="mb-3 font-green">Pilihan Terbaik untuk Kesehatan Kucingmu</h4>
            <h1 class="feature-h1">Dokter Hewan <span class="orangee">/ Vets</span></h1>
        </div>
    </div>
        <div class="col-lg-12 col-md-16">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-body" src="{{url('assets/img/dokter_main.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<!-- FOUNDERS -->
<div class="container mt-5 pt-5 pb-3 mb-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="mb-3 font-green">Vets Team</h4>
        <h1 class="feature-h1">Meet our <span class="orangee">Vets Team</span></h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="{{url('assets/img/dokter_1.png')}}" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light details">
                        <h5>drh. Naufal H Maulana</h5>
                        <i><strong>Jadwal:</strong></i>
                        <i>Hari Senin</i>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="{{url('assets/img/dokter_2.png')}}" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light details">
                        <h5>drh. Hamdika Yendri Putra</h5>
                        <i><strong>Jadwal:</strong></i>
                        <i>Hari Sabtu & Minggu</i>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="{{url('assets/img/dokter_3.png')}}" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light details">
                        <h5>drh. Puteri Pratiwi</h5>
                        <i><strong>Jadwal:</strong></i>
                        <i>Hari Rabu - Jumat</i>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="{{url('assets/img/dokter_4.png')}}" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light details">
                        <h5>drh. Noor Ihsan Anzary Bahtiar</h5>
                        <i><strong>Jadwal:</strong></i>
                        <i>Hari Senin</i>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light pt-5 mt-5" style="background-color: #f2f2f4 !important;">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="feature-h1"><span class="orangee">Services</span></h1>
        </div>
        
        <div class="row pb-3">
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid" src="{{url('assets/img/dokter_services1.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>KONSULTASI</h5>
                        <p>• Konsultasi masalah kesehatan kucing <br>
                            • General Check-up</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid" src="{{url('assets/img/dokter_services2.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>VAKSINASI</h5>
                        <p>• Vaksin Tricat <br>
                            • Vaksin Tetracat <br>
                            • Vaksin Rabies</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid" src="{{url('assets/img/dokter_services3.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>STERILISASI</h5>
                        <p>• Kastrasi (sterilisasi kucing jantan)<br>
                            • Steril OH (sterilisasi kucing betina)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid" src="{{url('assets/img/dokter_services4.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>DENTAL SCALING</h5>
                        <p>• Proses pembersihan karang gigi agar terhindar dari kerusakan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid" src="{{url('assets/img/dokter_services5.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>USG KUCING</h5>
                        <p>• USG kebuntingan <br>
                            • USG organ bagian Abdomen (Perut)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid" src="{{url('assets/img/dokter_services6.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>TES KIT</h5>
                        <p>• Tes kit FPV <br>
                            • Tes kit FCov <br>
                            • Tes kit Toxoplasma</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 mx-auto">
                <img class="img-fluid" src="{{url('assets/img/dokter_services7.png')}}" alt="">
                <div class="text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center details mt-3">
                        <h5>MIKROSKOPIS</h5>
                        <p>• Parasit Telinga <br>
                            • Parasit Bulu <br>
                            • Parasit Darah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- Jadwal Dokter -->
<div class="container mt-5">
    <h2 style="font-family: 'Nunito', sans-serif; font-weight: bold">Jadwal Dokter</h2>
    <button id="toggleButton1" class="toggleButton" onclick="toggleDescription('description1')">+</button>
    <div id="description1" style="display: none;">
        <p>Senin: <strong>drh. Noor Ihsan Anzary Bahtiar</strong><br>
            Selasa: <strong style="color: red;">LIBUR</strong><br>
            Rabu-Jumat: <strong>drh. Puteri Pratiwi</strong><br>
            Sabtu-Minggu: <strong>drh. Hamdika Yendri Putra</strong><br><br>
            Jam Operasional: pukul 10.00-17.00<br>
            Jam Istirahat: pukul 11.45-13.00<br><br>
            Tanggal merah dan hari raya: <strong style="color: red;">LIBUR</strong></p>
    </div>
</div>

<!-- SnK Steril -->
<div class="container mt-5">
    <h2 style="font-family: 'Nunito', sans-serif; font-weight: bold;">Syarat dan Ketentuan Steril/Kastrasi</h2>
    <button id="toggleButton2" class="toggleButton" onclick="toggleDescription('description2')">+</button>
    <div id="description2" style="display: none;">
        <ul>
            <li>Umur minimal 6 bulan (bb 2kg).</li>
            <li>Jika umur lebih dari 3 tahun akan dilakukan pemeriksaan darah. Kalau kondisi sehat tidak diperlukan pemeriksaan darah.</li>
            <li>Untuk jantan kalau testis sudah turun.</li>
            <li>Kucing WAJIB puasa sebelum steril MINIMAL 8 (DELAPAN) jam. Hanya puasa makan. Boleh tetap minum.</li>
            <li>Kucing sehat (berat badan cukup sesuai umurnya, tidak malnutrisi, tidak kutuan, tidak jamuran, tidak flu, yang jelas: TIDAK SAKIT), tidak hamil dan tidak berasal dari lingkungan kucing sakit.</li>
            <li>Kucing berkalung harap dilepas kalungnya sebelum dibawa ke lokasi steril.</li>
            <li>Tidak ada riwayat epilepsi/kejang.</li>
            <li>Apabila ada riwayat tidak bisa pipis/gangguan ginjal, harus sudah sembuh total dan akan diperiksa dokter terlebih dahulu.</li>
            <li>Tidak ada riwayat penyakit hati.</li>
            <li>Bersedia di rawat inap selama 7 hari pasca operasi untuk betina.</li>
        </ul>
    </div>
</div>

<!-- SnK Vaksin -->
<div class="container mt-5 mb-5">
    <h2 style="font-family: 'Nunito', sans-serif; font-weight: bold;">Syarat dan Ketentuan Vaksin</h2>
    <button id="toggleButton3" class="toggleButton" onclick="toggleDescription('description3')">+</button>
    <div id="description3" style="display: none;">
        <ul>
            <li>Kucing dalam keadaan sehat</li>
            <li>Kucing tidak dalam keadaan demam</li>
            <li>Kucing tidak dalam keadaan stress</li>
            <li>Sudah melewati masa adaptasi minimal 1-2 minggu</li>
            <li>Minimal usia 2,5 bulan</li>
            <li>Minimal berat badan 1,5kg</li>
        </ul>
    </div>
</div>

<script>
    function toggleDescription(id) {
        var description = document.getElementById(id);
        var toggleButton = document.getElementById("toggleButton" + id.charAt(id.length - 1));

        if (description.style.display === "none" || description.style.display === "") {
            description.style.display = "block";
            toggleButton.textContent = "-";
        } else {
            description.style.display = "none";
            toggleButton.textContent = "+";
        }
    }
</script>

@endsection