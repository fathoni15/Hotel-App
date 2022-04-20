@extends('layouts.admin')
@section('title','Tambah data')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                Tambah data
            </h2>
        </div>
        <div class="card-body">
            <form action="{{ route('kamar.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Tipe Kamar</label>
                    <select name="tipe_kamar" class="form-control">
                        <option selected disabled>Pilih Tipe...</option>
                        @foreach ($tipe as $tp)
                            <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">No kamar</label>
                    <input type="number" class="form-control @error('no_kamar') is-invalid @enderror" name="no_kamar" value="{{ old('no_kamar') }}" required autocomplete="no_kamar" autofocus>

                    @error('no_kamar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary float-right">Kirim</button>
            </form>
        </div>
    </div>
@endsection
