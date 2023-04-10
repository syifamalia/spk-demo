@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1 class="mb-5">Hitung Vektor S</h1>
    @if (session('added'))
        <div class="alert alert-success">
            {{ session('added') }}
        </div>
    @endif
    <form action="/vektor-s" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <button type="submit" class="btn btn-primary col-lg-12 mt-4">Hitung Vektor S</button>
    </form>
    </div>
@endsection