@extends('admin.layouts.main')
@section('container')
<div class="container">
    <p class="h5 mt-5">Masuk</p>
    
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" style="margin-bottom: -35px" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" style="margin-bottom: -35px" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <form action="/login" method="POST" class="mt-5">
        @csrf
        <div class="mb-4">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukan alamat username Anda" autofocus value="{{ old('username') }}">
          @error('username')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <label for="password" class="form-label">Password</label>
        <div class="input-group mb-5">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan password Anda">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <small class="d-block my-2"><a href="/forgot-password">Lupa kata sandi?</a></small>
        <button type="submit" class="btn btn-primary col-lg-12 mb-3">Masuk</button>
      </form>
      <a href="/daftar-akun" class="btn btn-info col-lg-12">Daftar Akun</a>
    </div>
</div>
@endsection