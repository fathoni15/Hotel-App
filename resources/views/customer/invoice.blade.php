@extends('layouts.guest')
@section('title','Invoice')
@section('content')
<section class="accomodation_ara section_gap">
    <div class="section-heading">
        <h2 class="text-center">
            Transfer here!
        </h2>
    </div>
    <center>
        <div class="card col-md-4 my-3  ">
            <div class="card-body">
                <h6 class="card-subtitle mb-2">{{'Rekening number : ' . ' ' . '0021788823234356'}}</h6>
                <h6 class="card-subtitle mb-2">Total : @currency($totalHarga)</h6>
            </div>
        </div>
        <a href="{{ route('customer.list') }}" class="btn theme_btn button_hover">Back</a>
    </center>
</section>
@endsection
