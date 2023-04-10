@extends('admin.layouts.main')
@section('container')
<div class="container">
        <h1 class="mb-5">List Alternatif</h1>
        @if (session('added'))
            <div class="alert alert-success">
                {{ session('added') }}
            </div>
        @endif
        <a href="/alternatif/create" class="btn btn-primary" role="button">Tambahkan Data Baru</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kode Alternatif</th>
                <th scope="col">Nama Alternatif</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($alternatifs as $alternatif)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $alternatif->kode_alternatif }}</td>
                <td>{{ $alternatif->nama_alternatif }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection