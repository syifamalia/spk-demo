@extends('admin.layouts.main')
@section('container')
<div class="container">
        <h1 class="mb-5">List Pertanyaan</h1>
        @if (session('added'))
            <div class="alert alert-success">
                {{ session('added') }}
            </div>
        @endif
        <a href="/pertanyaan-perbandingan/create" class="btn btn-primary" role="button">Tambahkan Data Baru</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kode Alternatif</th>
                <th scope="col">Kode Kriteria</th>
                <th scope="col">Pertanyaan</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($cQuestion as $q)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $q->alternatif_id }}</td>
                <td>{{ $q->criteria_id }}</td>
                <td>{{ $q->pertanyaan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection