@extends('layouts.guest')
@section('title','Detail room')
@section('content')
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/'. $detail->tipe->foto) }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Detail Room
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2">{{'Room type : ' . ' ' . $detail->tipe->name}}</h6>
                            <h6 class="card-subtitle mb-2">{{'Facility room : ' . ' ' . $detail->tipe->id_fasilitas}}</h6>
                            <h6 class="card-subtitle mb-2">{{'capacity : ' . ' ' . 2}}</h6>
                            <h6 class="card-subtitle mb-2">Price : @currency($detail->tipe->harga)</h6>
                            <h6 class="card-subtitle mb-2">{{'Room available : ' . ' ' . $jumlahPesanan}}</h6>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Booking Form
                        </div>
                        <div class="card-body">
                            @if (!Auth::check())
                                <center>
                                    <a href="{{ route('login') }}" class="btn theme_btn button_hover">Login</a>
                                </center>
                            @else
                                <form action="{{ route('customer.booking') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="tipe_kamar" value="{{ $id }}">
                                    <div class="form-group">
                                        <label for="">Rooms total</label>
                                        <input type="number" class="form-control" {{ $jumlahPesanan == 0 ? 'disabled' : '' }} value="{{ $jumlahPesanan == 0 ? '0' : '1' }}" name="jumlah" min="1" max="{{ $jumlahPesanan }}" required>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="check_in">Check In</label>
                                            <input type="date" class="form-control" value="{{old('check_in')}}" onchange="checkout()" name="check_in" id="check_in" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="check_out">Check Out</label>
                                            <input type="date" disabled class="form-control" value="{{old('check_out')}}" name="check_out" id="check_out" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="check_out">Phone number</label>
                                        <input type="number" class="form-control" value="{{old('no_hp')}}" name="no_hp" id="no_hp" min="12" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="check_out">Guest name</label>
                                        <input type="text" class="form-control" value="{{old('nama_tamu')}}" name="nama_tamu" id="nama_tamu" required>
                                    </div>

                                    <button type="submit" class="btn theme_btn button_hover float-right">Book</button>
                                </form>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('script')
<script>
    function checkout(){
        var checkin = new Date($('#check_in').val());
        var dd = checkin.getDate()+1;
        var mm = checkin.getMonth()+1; //January is 0 so need to add 1 to make it 1!
        var yyyy = checkin.getFullYear();
        var lastDayOfMonth = new Date(yyyy, mm, 0);
        if(dd<10){
            dd='0'+dd
        }
        if(dd > lastDayOfMonth.getDate()){
            dd='01'
            mm+=1
        }
        if(mm<10){
            mm='0'+mm
        }

        today = yyyy+'-'+mm+'-'+dd;
        console.log(today);
        document.getElementById("check_out").setAttribute("min", today);
        document.getElementById("check_out").removeAttribute("disabled");
    }
</script>
@endsection
@endsection
