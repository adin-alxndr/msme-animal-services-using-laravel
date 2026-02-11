@extends('layout.dashboardmaster')

@section('disetujuihotel', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Disetujui /</span><span class="text-muted fw-light"> Reservasi Hotel /</span> Riwayat</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Riwayat Reservasi Hotel</h5>
                <div class="table-responsive card-body demo-vertical-spacing demo-only-element">

                    @if(count($hotels) > 0)
                    <table id="example" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Timestamp</th>
                                <th>Nama</th>
                                <th>Jenis Kamar</th>
                                <th>Pengantaran</th>
                                <th>Penjemputan</th>
                                <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                              @forelse ($hotels as $hotel)
                              <tr>
                                  <td>{{ $loop->index + 1 }}</td>
                                  <td class="text-center">
                                      <div>{{ \Carbon\Carbon::parse($hotel->timestamp)->format('Y-m-d') }}</div>
                                      <div>{{ \Carbon\Carbon::parse($hotel->timestamp)->format('H:i:s') }}</div>
                                  </td>
                                  <td>
                                      <div><strong>Owner</strong><br>{{ $hotel->nama_owner }}</div>
                                      <div class="mt-3"><strong>Anabul</strong><br>{{ $hotel->nama_anabul }}</div>
                                  </td>
                                  <td>{{ $hotel->jenis }}</td>
                                  <td>
                                      <div><strong>Tanggal</strong><br>{{ $hotel->tgl_antar }}</div>
                                      <div class="mt-3"><strong>Jam</strong><br>{{ $hotel->jam_antar }}</div>
                                  </td>
                                  <td>
                                    <div><strong>Tanggal</strong><br>{{ $hotel->tgl_jemput }}</div>
                                    <div class="mt-3"><strong>Jam</strong><br>{{ $hotel->jam_jemput }}</div>
                                  </td>
                                  <td>{{ $hotel->status }}</td>
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