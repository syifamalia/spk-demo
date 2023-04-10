@extends('admin.layouts.main')
@section('container')
<div class="container">
        <h1 class="mb-5">Perbandingan</h1>
        @if (session('added'))
            <div class="alert alert-success">
                {{ session('added') }}
            </div>
        @endif
        <form action="/perbandingan" method="post">
            @csrf
            @foreach ($alternatifs as $alt)
                <h3>{{ $alt->kode_alternatif }}</h3>
                @foreach ($criterias as $cr)
                    <h5>{{ $cr->kode_kriteria }}</h5>
                    @foreach ($comparison_questions->where('alternatif_id', $alt->id)->where('criteria_id', $cr->id) as $cQ)
                        <div class="form-group">
                            <label>{{ $cQ->pertanyaan }}</label><br>
                            @foreach ([10, 20, 30, 40, 50] as $bobot)
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="bobot[{{ $alt->id }}][{{ $cQ->criteria_id }}]" value="{{ $bobot }}" id="bobot-{{ $cQ->id }}-{{ $bobot }}" required class="form-check-input">
                                    <label class="form-check-label mb-5" for="bobot-{{ $cQ->id }}-{{ $bobot }}">
                                        @if ($bobot == 10)
                                            Sangat Tidak Setuju
                                        @elseif ($bobot == 20)
                                            Tidak Setuju
                                        @elseif ($bobot == 30)
                                            Netral
                                        @elseif ($bobot == 40)
                                            Setuju
                                        @elseif ($bobot == 50)
                                            Sangat Setuju
                                        @endif
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endforeach
            @endforeach
            <button type="submit" class="btn btn-primary col-lg-12 mt-4">Submit</button>
        </form>
    </div>
@endsection