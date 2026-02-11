@extends('layout.dashboardmaster')

@section('menungguhotel', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menunggu /</span> Reservasi Hotel</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">List Reservasi Hotel</h5>
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
                                <th></th>
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
                                  <td><div><strong>Tanggal</strong><br>{{ $hotel->tgl_jemput }}</div>
                                      <div class="mt-3"><strong>Jam</strong><br>{{ $hotel->jam_jemput }}</div>
                                  </td>
                                  <td>{{ $hotel->status }}</td>
                                  <td>
                                    <div class="d-flex justify-content-center">
                                    <form method="POST" action="{{ route('hotel.disetujui', ['id' => $hotel->id_hotel]) }}" onsubmit="return confirm('Are you sure you want to update the status?')">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success check-btn" style="margin-right: 10px;">
                                            <i class="bx bx-check"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('hotel.batalkan.menunggu', ['id' => $hotel->id_hotel]) }}" onsubmit="return confirm('Are you sure you want to update the status?')">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bx bx-block"></i>
                                        </button>
                                    </form>
                                    </div>
                                </td>
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

@endsection