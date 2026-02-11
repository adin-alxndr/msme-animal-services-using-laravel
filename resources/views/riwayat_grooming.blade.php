@extends('layout.dashboardmaster')

@section('disetujuigrooming', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Disetujui /</span><span class="text-muted fw-light"> Reservasi Grooming /</span> Riwayat</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Riwayat Reservasi Grooming</h5>
                <div class="table-responsive card-body demo-vertical-spacing demo-only-element">

                    @if(count($groomings) > 0)
                    <table id="example" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Timestamp</th>
                                <th>Nama</th>
                                <th>Jenis Grooming</th>
                                <th>Tipe Bulu</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                              @forelse ($groomings as $grooming)
                              <tr>
                                  <td>{{ $loop->index + 1 }}</td>
                                  <td class="text-center">
                                      <div>{{ \Carbon\Carbon::parse($grooming->timestamp)->format('Y-m-d') }}</div>
                                      <div>{{ \Carbon\Carbon::parse($grooming->timestamp)->format('H:i:s') }}</div>
                                  </td>
                                  <td>
                                      <div><strong>Owner</strong><br>{{ $grooming->nama_owner }}</div>
                                      <div class="mt-3"><strong>Anabul</strong><br>{{ $grooming->nama_anabul }}</div>
                                  </td>
                                  <td>{{ $grooming->jenis }}</td>
                                  <td>{{ $grooming->tipe }}</td>
                                  <td>{{ $grooming->tanggal }}</td>
                                  <td>{{ $grooming->jam }}</td>
                                  <td>{{ $grooming->status }}</td>
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