@extends('admin.layouts.main')
@section('container')
<div class="container">
        <h1 class="mb-5">Buat Alternatif Baru</h1>
        <form action="/alternatif" method="post">
            @csrf
            <div class="mb-3">
                <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
                <input type="text" class="form-control" id="kode_alternatif" name="kode_alternatif" placeholder="masukkan kode alternatif">
            </div>
            <div class="mb-3">
                <label for="nama_alternatif" class="form-label">Nama Alternatif</label>
                <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" placeholder="masukkan nama alternatif">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
@endsection