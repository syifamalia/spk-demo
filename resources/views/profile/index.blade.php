@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1 class="mb-5">Profile</h1>
    @if (session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
    @endif

    @foreach ($users as $user)
        <p>Nama: {{ $user->name }}</p>
        <p>Username: {{ $user->username }}</p>
    @endforeach
    <a href="/reset-akun">Reset Akun</a>
</div>
@endsection