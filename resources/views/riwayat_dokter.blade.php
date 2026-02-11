@extends('layout.dashboardmaster')

@section('disetujuidokter', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Disetujui /</span><span class="text-muted fw-light"> Reservasi Dokter /</span> Riwayat</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Riwayat Reservasi Dokter</h5>
                <div class="table-responsive card-body demo-vertical-spacing demo-only-element">

                    @if(count($dokters) > 0)
                    <table id="example" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Timestamp</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Sesi</th>
                                <th>Keluhan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dokters as $dokter)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td class="text-center">
                                    <div>{{ \Carbon\Carbon::parse($dokter->timestamp)->format('Y-m-d') }}</div>
                                    <div>{{ \Carbon\Carbon::parse($dokter->timestamp)->format('H:i:s') }}</div>
                                </td>
                                <td>
                                    <div><strong>Owner</strong><br>{{ $dokter->nama_owner }}</div>
                                    <div class="mt-3"><strong>Anabul</strong><br>{{ $dokter->nama_anabul }}</div>
                                </td>
                                <td>{{ $dokter->tanggal }}</td>
                                <td>{{ $dokter->sesi }}</td>
                                <td>{{ $dokter->catatan }}</td>
                                <td>{{ $dokter->status }}</td>
                            </tr>
                            @empty
                          
                            @endforelse
                        </tbody>
                    </table>
                    @else
                    <p class="text-center">No records found</p>
                    @endif

                </div>
            </div>
        </div>
    </div>

</div>

<script>
    new DataTable('#example', {
        search: {
            return: true
        }
    });
</script>
<script>
    $(document).ready(function(){
        $('.dropdown-toggle').dropdown();
    });
</script>

@endsection