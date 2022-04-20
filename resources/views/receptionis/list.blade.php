@extends('layouts.admin')
@section('title','Transaction list')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                Data transaksi
            </h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="example1">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>User</th>
                            <th>Nomor Kamar</th>
                            <th>Tgl Check in</th>
                            <th>Tgl Check out</th>
                            <th>Jumlah Kamar</th>
                            <th>Tanggal pemesanan</th>
                            <th>Bukti pembayaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dt->user->name }}</td>
                                <td>{{ $dt->kamar->no_kamar }}</td>
                                <td>{{ $dt->check_in }}</td>
                                <td>{{ $dt->check_out }}</td>
                                <td>{{ $dt->jumlah_kamar }}</td>
                                <td>{{ $dt->created_at->diffForHumans() }}</td>
                                <td>
                                    @if ($dt->bukti != NULL)
                                    <a href="#" data-toggle="modal" data-target="{{ '#lihat'.$dt->id }}">lihat</a>
                                    @else
                                        Belum mengirim bukti!
                                    @endif
                                </td>
                                <td>{{ $dt->status }}</td>
                                <td>
                                    @if ($dt->status == 'menunggu pembayaran')
                                        menunggu
                                    @elseif ($dt->status == 'menunggu diverifikasi')
                                        <a href="{{ route('receptionis.ditolak', $dt->id) }}" class="btn btn-sm btn-danger">Tolak</a>
                                        <a href="{{ route('receptionis.diverifikasi', $dt->id) }}" class="btn btn-sm btn-success">Verifikasi</a>
                                    @elseif ($dt->status == 'diverifikasi')
                                        <a href="{{ route('receptionis.checkedIn', $dt->id) }}" class="btn btn-sm btn-info">Check in</a>
                                    @elseif ($dt->status == 'checked_in')
                                        <a href="{{ route('receptionis.checkedOut', $dt->id) }}" class="btn btn-sm btn-secondary">Check out</a>
                                    @elseif ($dt->status == 'ditolak')
                                        Menunggu tanggapan
                                    @else
                                        Transaksi Selesai!
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{-- modal --}}
@foreach ($data as $dt)
<div id="{{ 'lihat'.$dt->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title">Bukti pembayaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                <center>
                    <img src="{{ asset('images/'. $dt->bukti) }}" width="450"  alt="">
                </center>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
