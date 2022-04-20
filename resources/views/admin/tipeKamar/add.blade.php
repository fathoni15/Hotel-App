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
            <form action="{{ route('tipeKamar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Info</label>
                        <input type="text" class="form-control @error('info') is-invalid @enderror" name="info" value="{{ old('info') }}" required autocomplete="info" autofocus>

                        @error('info')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Harga</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="harga" autofocus>

                        @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Fasilitas</label>
                    @foreach ($fasilitas as $item)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="id_fasilitas[]" id="{{$item->id}}" value="{{ $item->name }}">
                            <label class="form-check-label" for="{{$item->id}}">
                                {{$item->name}}
                            </label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary float-right">Kirim</button>

            </form>
        </div>
    </div>
@endsection
