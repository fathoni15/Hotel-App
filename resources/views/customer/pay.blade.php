@extends('layouts.guest')
@section('title','payment')
@section('content')
<section class="accomodation_area section_gap">
    <div class="section-heading">
        <h2 class="text-center">
            Your Payment
        </h2>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th>Room type</th>
                        <th>Room number</th>
                        <th>Total order</th>
                        <th>Price per night</th>
                        <th>Total price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center table-warning">
                        <td>{{ $data->name }}</td>
                        <td>{{ $nomorKamar }}</td>
                        <td>{{ $jumlahPesanan }}</td>
                        <td>@currency($data->harga)</td>
                        <td>@currency($totalHarga)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('customer.invoice') }}" class="btn theme_btn button_hover float-right">Pay</a>
    </div>
</section>
@endsection
