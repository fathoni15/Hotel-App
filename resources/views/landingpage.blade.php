@extends('layouts.guest')
@section('title','Hotel Hebat')
@section('content')
<!--================Banner Area =================-->
<section class="banner_area" id="home">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Away from monotonous life</h6>
                <h2>Hotel Hebat</h2>
                <p>Clean, safe, comfortable, healthy hotel<br> Affordable prices you can stay here</p>
                <a href="#room" class="btn theme_btn button_hover">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!--================Banner Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap" id="room">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Hotel Accomodation</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
        </div>
        <div class="row">
            @foreach ($type as $tp)
            <div class="col-sm-4">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/'. $tp->foto) }}" alt="">
                        <a href="{{ route('detail', $tp->id) }}" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#"><h4 class="sec_h4">{{ $tp->name }}</h4></a>
                    <h5>@currency($tp->harga)<small>/night</small></h5>
                    <p>Available: {{ $tp->available->count() }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->

<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap" id="facilities">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Royal Facilities</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row mb_30">
            @foreach ($fasilitas as $fs)
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4">{{ $fs->name }}</h4>
                        <p>{{ $fs->info }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('template/image/about_bg.jpg') }}" alt="img">
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->

<!--================ Latest Blog Area  =================-->
<section class="latest_blog_area section_gap" id="gallery">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Our Gallery</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('template/image/blog/blog-1.jpg') }}" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Travel</a>
                            <a href="#" class="button_hover tag_btn">Life Style</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">Low Cost Advertising</h4></a>
                        <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.</p>
                        <h6 class="date title_color">31st January,2018</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('template/image/blog/blog-2.jpg') }}" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Travel</a>
                            <a href="#" class="button_hover tag_btn">Life Style</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">Creative Outdoor Ads</h4></a>
                        <p>Self-doubt and fear interfere with our ability to achieve or set goals. Self-doubt and fear are</p>
                        <h6 class="date title_color">31st January,2018</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('template/image/blog/blog-3.jpg') }}" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Travel</a>
                            <a href="#" class="button_hover tag_btn">Life Style</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">It S Classified How To Utilize Free</h4></a>
                        <p>Why do you want to motivate yourself? Actually, just answering that question fully can </p>
                        <h6 class="date title_color">31st January,2018</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Recent Area  =================-->

{{-- <!--================ Contact Area  =================-->
<section class="contact_info section_gap" id="contact">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Contact Us</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Garut, Indonesia</h6>
                        <p>Tarogong Kaler</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">(+62)876-987-098</a></h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">info@hotelhebat.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <form class="row contact_form" action="{{ asset('template/contact_process.php') }}" method="post" id="contactForm" novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn theme_btn button_hover">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================ Contact Area  =================--> --}}
@endsection

