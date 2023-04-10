@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1 class="mb-5">Vector V</h1>
    @if (session('added'))
        <div class="alert alert-success">
            {{ session('added') }}
        </div>
    @endif
    <form action="/vektor-v" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <button type="submit" class="btn btn-primary col-lg-12 mt-4">Hitung Vektor V</button>
    </form>
    <p>Maka moisturizer yang paling cocok untuk saya adalah: </p>
    @foreach ($vektorV as $v)
        <p>{{ $loop->iteration }}</p>
        <p>{{ $v->alternatif->nama_alternatif }}</p>
    @endforeach
</div>
@endsection