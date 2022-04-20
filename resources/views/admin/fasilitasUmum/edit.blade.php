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
            <form action="{{ route('fasilitasUmum.update', $edit->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$edit->name}}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Info</label>
                    <textarea name="info" id="" cols="30" rows="10" class="form-control @error('info') is-invalid @enderror" value="{{ old('info') }}" required autocomplete="info">{{ $edit->info }}</textarea>

                    @error('info')
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
