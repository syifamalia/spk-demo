@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1 class="mb-5">Daftar Akun</h1>
    <form action="/daftar-akun" method="POST">
        @csrf
        <div class="col-lg-12 mb-2">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama lengkap Anda" value="{{ old('name') }}" autofocus>
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-lg-12 mb-2">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukan username Anda" value="{{ old('username') }}">
          @error('username')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-lg-12">
            <label for="password" class="form-label">Password</label>
            <div class="input-group mb-2">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan password Anda">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary col-lg-12 mt-4">Daftar Akun</button>
    </form>
</div>
@endsection