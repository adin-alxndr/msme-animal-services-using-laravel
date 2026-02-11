@extends('layout.master')
@section('booking', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Reservasi /</span> Dokter Hewan
    </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h2 class="card-header m-3 text-center">Reservasi Dokter Hewan</h2>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    
                    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Simpanlah kode ini untuk mengecek status reservasimu!
        Kode Reservasi: <strong>{{ session('kode_reservasi') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
                    
                    <form action="{{ route('dokter.store') }}" method="POST">
                        @csrf

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon11">Nama Owner</span>
                            <input name="nama_owner" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon11"/>
                        </div>
                        @error('nama_owner')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon11">Nama Anabul</span>
                            <input name="nama_anabul" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon11"/>
                        </div> 
                        @error('nama_anabul')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror          

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

                        <div class="mb-3">
                            <label for="timePicker" class="form-label">Pilih Sesi</label>
                            <select class="form-select" id="timePicker" name="sesi"></select>
                        </div>
                        @error('sesi')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror

                        <div class="mb-3">
                            <label for="keluhanTextarea" class="form-label">Keluhan</label>
                            <textarea class="form-control" id="keluhanTextarea" name="catatan" rows="4"
                            ></textarea>
                        </div>
                        @error('catatan')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @enderror

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
        // Call updateTimeSlots on page load
        updateTimeSlots();

        // Add event listener for date picker change
        const datePicker = document.getElementById('datePicker');
        datePicker.addEventListener('change', updateTimeSlots);
    });

    function updateTimeSlots() {
        const dayPicker = document.getElementById('datePicker');
        const timePicker = document.getElementById('timePicker');
        const selectedDay = new Date(dayPicker.value).getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday

        // Clear existing options
        timePicker.innerHTML = '';

        if (selectedDay >= 3 && selectedDay <= 6) {
            // Wednesday to Sunday
            addOption('10:30-11:30');
            addOption('13:00-15:00');
            addOption('15:00-16:30');
        } else if (selectedDay === 1 || selectedDay === 2) {
            // Monday and Tuesday
            addOption('10:30-11:30');
            addOption('11:30-13:30');
            addOption('14:45-17:00');
            addOption('17:00-18:45');
        }
    }

    function addOption(timeSlot) {
        const option = document.createElement('option');
        option.value = timeSlot;
        option.textContent = timeSlot;
        document.getElementById('timePicker').appendChild(option);
    }
</script>

@endsection