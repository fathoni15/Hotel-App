@extends('layouts.admin')
@section('title','Log aktivitas')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>
            Log aktivitas
        </h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="example1">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Transaction ID</th>
                        <th>Log</th>
                        <th>Executor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($log as $lg)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $lg->transaction_id }}</td>
                            <td>{{ $lg->log }}</td>
                            <td>{{ $lg->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
