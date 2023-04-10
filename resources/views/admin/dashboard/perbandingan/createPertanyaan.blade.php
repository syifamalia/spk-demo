@extends('admin.layouts.main')
@section('container')
<div class="container">
        <h1 class="mb-5">Buat Pertanyaan Baru</h1>
        <form action="/pertanyaan-perbandingan" method="post">
            @csrf
            <div class="form-group row">
                <label for="tittle" class="col-sm-2 col-form-label">Kode Alternatif</label>
                <div class="col-sm-8">
                  <select class="custom-select" name="alternatif_id">
                    @foreach ($alternatifs as $alternatif)
                    @if (old('alternatif_id') == $alternatif->id)
                      <option value="{{ $alternatif->id }}" selected>{{ $alternatif->kode_alternatif }}</option>  
                    @else
                      <option value="{{ $alternatif->id }}">{{ $alternatif->kode_alternatif }}</option>    
                    @endif
                  @endforeach
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tittle" class="col-sm-2 col-form-label">Kode Kriteria</label>
                <div class="col-sm-8">
                  <select class="custom-select" name="criteria_id">
                    @foreach ($criterias as $criteria)
                    @if (old('criteria_id') == $criteria->id)
                      <option value="{{ $criteria->id }}" selected>{{ $criteria->kode_kriteria }}</option>  
                    @else
                      <option value="{{ $criteria->id }}">{{ $criteria->kode_kriteria }}</option>    
                    @endif
                  @endforeach
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Masukan judul artikel" name="pertanyaan" value="{{ old('pertanyaan') }}">
                  @error('pertanyaan')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
@endsection