@extends('layout.master')

@section('booking', 'active')

@section('content')

<div class="container-fluid bg-light pt-5 pb-4">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="mb-3 font-green">Reservasi</h4>
            <h1 class="feature-h1">Lakukan Reservasi <span class="orangee">Sekarang</span></h1>
        </div>
        <div class="border-0 p-0 text-center">
            <a class="nav-link active dropdown-toggle btn btn-primary btn-block text-center" style="border: 0; width:50%; margin: 0 auto;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Reservasi
            </a>
            
            <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink" style="width:40%;">
                <li><a class="dropdown-item" href="{{ route('reservasi_grooming') }}">Reservasi Grooming</a></li>
                <li><a class="dropdown-item" href="{{ route('reservasi_hotel') }}">Reservasi Hotel</a></li>
                <li><a class="dropdown-item" href="{{ route('reservasi_dokter') }}">Reservasi Vets</a></li>
            </ul>
        </div>

        <h4 class="text-center mb-3" style="margin-top: 130px">
            <span class="font-green">Sudah Pernah Reservasi? </span>
            <span class="font-green" style="color: #566a7f !important;">Cek Status Reservasimu Disini!</span>
        </h4>

        <!-- Search Bar -->
<div class="container mt-3" style="max-width: 400px;">
    <div class="mx-auto">
        <form action="#" method="GET" class="row g-2 align-items-center" id="searchForm">
            @csrf
            <div class="col-auto">
                <select class="form-select" id="searchPrefix" name="search_prefix">
                    <option value="CA">CA-</option>
                    <option value="GR">GR-</option>
                    <option value="HO">HO-</option>
                </select>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="search_query" placeholder="Reservation Code" aria-label="Search Reservation Code">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="button" id="searchButton">Search</button>
            </div>
        </form>
    </div>
</div>

<!-- JavaScript to handle form submission -->
<script>
    $(document).ready(function () {
        $('#searchButton').on('click', function () {
            var selectedPrefix = $('#searchPrefix').val();

            switch (selectedPrefix) {
                case 'CA':
                    $('#searchForm').attr('action', "{{ route('searchDokter') }}");
                    break;
                case 'GR':
                    $('#searchForm').attr('action', "{{ route('searchGrooming') }}");
                    break;
                case 'HO':
                    $('#searchForm').attr('action', "{{ route('searchHotel') }}");
                    break;
                default:
                    break;
            }

            $('#searchForm').submit();
        });
    });
</script>
        
        <!-- Display Search Results -->
        @if(isset($searchResults))
            <h2>Search Results:</h2>
            <table id="example" class="table" style="width:100%">
                <thead class="text-center">
                    <tr class="text-center">
                        <th>Kode Reservasi</th>
                        <th>Timestamp</th>
                        <th>Nama</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @forelse($searchResults as $result)
                    <tr>
                        <td>{{ $result->kode_reservasi }}</td>
                        <td>{{ $result->timestamp }}</td>
                        <td>
                            <div><strong>Owner</strong><br>{{ $result->nama_owner }}</div>
                            <div class="mt-3"><strong>Anabul</strong><br>{{ $result->nama_anabul }}</div>
                        </td>
                        <td>{{ $result->status }}</td>
                    </tr>
                    @empty
                    No records found.
                    @endforelse
                </tbody>
            </table>
            @endif

    </div>
</div>

@endsection