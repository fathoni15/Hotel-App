@extends('layouts.admin')
@section('title','Fasilitas Umum')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>
            Fasilitas Umum
            <a href="{{ route('fasilitasUmum.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="example1">
                <thead>
                    <tr class="text-center">
                        <td>No.</td>
                        <td>Nama</td>
                        <td>Info</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->name }}</td>
                            <td>{{ $dt->info }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('fasilitasUmum.edit', $dt->id) }}" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('fasilitasUmum.destroy', $dt->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
