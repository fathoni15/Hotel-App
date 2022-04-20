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
            <form action="{{ route('fasilitasKamar.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
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
