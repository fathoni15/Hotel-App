@extends('layouts.admin')
@section('title','Edit data')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                Edit data
            </h2>
        </div>
        <div class="card-body">
            <form action="{{ route('kamar.update', $edit->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="">Tipe Kamar</label>
                    <select name="tipe_kamar" class="form-control">
                        <option selected disabled>{{ $edit->tipe_kamar }}</option>
                        @foreach ($tampil as $tp)
                            <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">No kamar</label>
                    <input type="number" class="form-control @error('no_kamar') is-invalid @enderror" name="no_kamar" value="{{$edit->no_kamar}}" required autocomplete="no_kamar" autofocus>

                    @error('no_kamar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success float-right">Update</button>
            </form>
        </div>
    </div>
@endsection
