@extends('layout.dashboardlogin')

@section('content')

<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Login<strong> Admin</strong></h3>
  
              <form method="POST" action="{{ route('admin.login') }}">
                @csrf {{-- CSRF token --}}
                @error('error')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2">Username</label>
                    <input type="text" id="typeEmailX-2" name="name" class="form-control form-control-lg" />
                </div>
                

                <div class="form-outline mb-4">
                  <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" />
              </div>
              
                
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
            
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
