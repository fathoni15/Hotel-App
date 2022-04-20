@extends('layouts.guest')
@section('title','Payment')
@section('content')
<section class="accomodation_area section_gap">
<div class="section-heading">
    <h2 class="text-center">
        Your transaction
    </h2>
</div>
<div class="container">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr class="text-center">
                    <th>Username</th>
                    <th>Room number</th>
                    <th>Room type</th>
                    <th>Total orders</th>
                    <th>Price /night</th>
                    <th>Total price</th>
                    <th>Transaction status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $lt)
                    <tr class="text-center table-warning">
                        <td>{{ $lt->user->name }}</td>
                        <td>{{ $lt->kamar->no_kamar }}</td>
                        <td>{{ $lt->kamar->tipe->name }}</td>
                        <td>{{ $lt->jumlah_kamar }}</td>
                        <td>@currency($lt->kamar->tipe->harga)</td>
                        <td>@currency($lt->pay->harga)</td>
                        <td>
                            @if ($lt->status == "menunggu pembayaran")
                                <span class="badge badge-secondary">
                                    Waiting
                                </span>
                            @elseif($lt->status == "menunggu diverifikasi")
                                <span class="badge badge-primary">
                                    waiting for verify
                                </span>
                            @elseif ($lt->status == "ditolak")
                                there is something wrong with your transaction,
                                please make a payment again
                            @elseif($lt->status == "diverifikasi")
                                <span class="badge badge-success">
                                    Verified
                                </span>
                            @elseif($lt->status == "cancel")
                                <span class="badge badge-danger">
                                    Caceled
                                </span>
                            @else
                                <span class="badge badge-success">
                                    Transaction finished!
                                </span>
                            @endif
                        </td>
                        <td>
                            @if ($lt->status == "menunggu pembayaran")
                                <div class="btn-group">
                                    <a href="{{ route('customer.cancel', $lt->id) }}" class="btn btn-sm btn-outline-danger float-right" onclick="return confirm('sure want to appear ?')">Cancel</a>
                                    <a href="{{ route('customer.pay', $lt->id) }}" class="btn btn-sm btn-outline-primary float-right">Pay</a>
                                    <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="{{ '#upload'.$lt->id }}">Upload proof</button>
                                </div>
                            @elseif ($lt->status == "menunggu diverifikasi")
                                Waiting for verify
                            @elseif ($lt->status == "ditolak")
                                <div class="btn-group">
                                    <a href="{{ route('customer.pay', $lt->id) }}" class="btn btn-sm btn-outline-primary float-right">Repay</a>
                                    <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="{{ '#upload'.$lt->id }}">Upload proof</button>
                                </div>
                            @elseif ($lt->status == "cancel")
                                Canceled
                            @elseif($lt->status == "diverifikasi")
                                <a href="{{ route('customer.print', $lt->id) }}" class="btn btn-sm btn-outline-success">Print receipt</a>
                            @else
                                Transaction finished!
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('customer.invoice') }}" class="btn theme_btn button_hover float-right">Pay all</a>
        <a href="{{ route('customer.home') }}" class="btn theme_btn button_hover">Back</a>
</div>

{{-- modal --}}
@foreach ($list as $lt)
<div id="{{ 'upload'.$lt->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title">Upload proof</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- body modal -->
            <form method="post" action="{{ route('customer.upload', $lt->id) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <label for="tanggapan">Your Proof :</label>
                    <input type="file" class="form-control" name="bukti" required>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
</section>
@endsection
