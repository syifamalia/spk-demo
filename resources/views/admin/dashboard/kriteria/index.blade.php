@extends('admin.layouts.main')
@section('container')
<div class="container">
        <h1 class="mb-5">Kriteria</h1>
        @if (session('added'))
            <div class="alert alert-success">
                {{ session('added') }}
            </div>
        @endif
        <form action="/kriteria" method="post">
            @csrf
            @foreach ($criterias as $k)
                <div class="form-group">
                    <label>{{ $k->pertanyaan_kriteria }}</label><br>
                    @foreach ([10, 20, 30, 40, 50] as $bobot)
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bobot[{{ $k->id }}]" value="{{ $bobot }}" id="bobot-{{ $k->id }}-{{ $bobot }}" required>
                            <label class="form-check-label mb-5" for="bobot-{{ $k->id }}-{{ $bobot }}">
                                @if ($bobot == 10)
                                    Tidak Penting
                                @elseif ($bobot == 20)
                                    Kurang Penting
                                @elseif ($bobot == 30)
                                    Cukup Penting
                                @elseif ($bobot == 40)
                                    Penting
                                @elseif ($bobot == 50)
                                    Sangat Penting
                                @endif
                            </label>
                    </div>
                    @endforeach
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary col-lg-12 mt-4">Submit</button>
        </form>
    </div>
@endsection