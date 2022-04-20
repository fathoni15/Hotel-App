@extends('layouts.admin')
@section('title','Kamar')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                Kamar
                <a href="{{ route('kamar.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            </h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="example1">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Tipe Kamar</th>
                            <th>No kamar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dt->tipe_kamar }}</td>
                                <td>{{ $dt->no_kamar }}</td>
                                <td>{{ $dt->status }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('kamar.edit', $dt->id) }}" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i></a>
                                        <form action="{{ route('kamar.destroy', $dt->id) }}" method="POST">
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
