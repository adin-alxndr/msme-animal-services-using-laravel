@extends('layout.dashboardmaster')

@section('listproduk', 'active')

@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> List Produk</h4>


              <div class="row">
                <!-- Basic -->
                <div class="col-md-12">
                  <div class="card mb-4">
                    
                    <h5 class="card-header">List Produk Tersedia</h5>
                    <div class="table-responsive card-body demo-vertical-spacing demo-only-element">
                      @if(count($products) > 0)

                      <table id="example" class="" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Timestamp</th>
                                <th></th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
            $counter = 1;
        @endphp
        @forelse ($products as $produk)
            <tr>
                <td>{{ $counter++ }}</td>
                                <td class="text-center">
                                  <div>
                                    {{ \Carbon\Carbon::parse($produk->updated_at)->format('Y-m-d') }}
                                  </div>
                                  <div>
                                    {{ \Carbon\Carbon::parse($produk->updated_at)->format('H:i:s') }}
                                  </div>
                                </td>
                                <td class="text-center">
                                  <div class="image-container" style="width: 100px; height: 100px; overflow: hidden;">
                                      <img src="{{ asset('storage/' . $produk->foto) }}" alt="Product Image" style="width: 100%; height: 100%; object-fit: cover;">
                                  </div>
                                </td>
                                <td>{{ $produk->nama_produk }}</td>
                                <td>Rp{{ number_format($produk->harga, 0, ',', '.') }},-</td>

                                <td class="text-center">
                                  <a href="{{ $produk->link_shopee }}" target="_blank">Link</a>  
                                </td>
                                <td class="px-3">
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#editModal{{ $produk->id_produk }}">
                                            <i class="bx bx-pen"></i>
                                        </button>
                                        <form method="POST" action="{{ route('produk.destroy', $produk->id_produk) }}" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                          @csrf
                                          @method('DELETE')
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
                     
                    @foreach ($products as $produk)
                    <!-- Edit Modal for each product -->
                    <div class="modal fade" id="editModal{{ $produk->id_produk }}" tabindex="-1" role="dialog"
                      aria-labelledby="editModalLabel{{ $produk->id_produk }}" aria-hidden="true"
                      data-bs-backdrop="static" data-bs-keyboard="false">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="editModalLabel{{ $produk->id_produk }}">Ubah Produk</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <form id="editForm{{ $produk->id_produk }}"
                                       method="POST"
                                       action="{{ route('produk.update', $produk->id_produk) }}"
                                       enctype="multipart/form-data">
                                     @csrf
                                     @method('PATCH')
                                
                                    <div class="mb-3">
                                      <label for="nama_produk" class="form-label">Nama Produk</label>
                                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') ?? $produk->nama_produk }}">
                                      <div id="errorNamaProduk{{ $produk->id_produk }}" class="text-danger"></div>
                                    </div>

                                    <div class="mb-3">
                                      <label for="harga" class="form-label">Harga</label>
                                      <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') ?? $produk->harga }}">
                                      <div id="errorHargaProduk{{ $produk->id_produk }}" class="text-danger"></div>
                                    </div>

                                    <div class="mb-3">
                                      <label for="link_shopee" class="form-label">Link</label>
                                      <input type="text" class="form-control" id="link_shopee" name="link_shopee" value="{{ old('link_shopee') ?? $produk->link_shopee }}">
                                      <div id="errorLinkProduk{{ $produk->id_produk }}" class="text-danger"></div>
                                    </div>

                                    <div class="mb-3">
                                      <label for="foto" class="form-label">Foto</label>
                                      <input type="file" class="form-control" id="foto" name="foto" value="{{ old('foto') ?? $produk->foto }}" onchange="previewImage(this)" accept="image/*">
                                      <img class="mt-3" id="foto-preview" src="{{ asset('storage/' . $produk->foto) }}" alt="Preview Foto" style="max-width: 100px; max-height: 100px;">
                                      <div id="errorFotoProduk{{ $produk->id_produk }}" class="text-danger"></div>
                                    </div>
                                    
                               <button type="submit" class="btn btn-primary" onclick="submitForm('{{ $produk->id_produk }}')">Simpan Perubahan</button>
                           
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach

                    </div>
                  </div>
                </div>
        
                <script>
                  function submitForm(id) {
                      var form = document.getElementById('editForm' + id);
              
                      // Clear previous error messages
                      clearErrorMessages(id);
              
                      // Validate the form fields here
                      if (!form.querySelector('#nama_produk').value.trim()) {
                          displayErrorMessage('Nama Produk is required.', 'errorNamaProduk' + id);
                          return false;
                      }

                      if (!form.querySelector('#harga').value.trim()) {
                          displayErrorMessage('Harga is required.', 'errorHargaProduk' + id);
                          return false;
                      }

                      if (!form.querySelector('#link_shopee').value.trim()) {
                          displayErrorMessage('Link is required.', 'errorLinkProduk' + id);
                          return false;
                      }
                      // If validation passes, manually submit the form
                        form.submit();
                        return true;
                    }
                  
              
                  function displayErrorMessage(message, errorMessagesId) {
                      var errorMessagesDiv = document.getElementById(errorMessagesId);
                      errorMessagesDiv.className= 'mt-3 alert alert-danger alert-dismissible fade show';
                      errorMessagesDiv.role = 'alert';
                      errorMessagesDiv.innerHTML = message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';

                  }
              
                  function clearErrorMessages(id) {
                      var form = document.getElementById('editForm' + id);
              
                      // Clear error messages for each input field
                      var errorFields = form.querySelectorAll('[id^=error]');
                      errorFields.forEach(function (errorField) {
                          errorField.innerHTML = '';
                      });
                  }
              </script>
                                
    <script>
      new DataTable('#example', {
    search: {
        return: true
    }
});
    </script>
    <script>
      function previewImage(input) {
          var preview = document.getElementById('foto-preview');
          var file = input.files[0];
          var reader = new FileReader();
  
          reader.onloadend = function () {
              preview.src = reader.result;
          }
  
          if (file) {
              reader.readAsDataURL(file);
          } else {
              preview.src = "";
          }
      }
  </script>

@endsection