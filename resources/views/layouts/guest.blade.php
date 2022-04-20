<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
        <!--Font Awesome-->
        <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ route('landingpage') }}"><h5>HOTEL <span style="color:gold">HEBAT</span></h5></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('landingpage') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#facilities">Facilities</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                            @guest
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i> Login/Register</a></li>
                            @else
                                <li class="nav-item submenu dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fas fa-user"></i> {{ Auth::user()->name }}
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('customer.list') }}">
                                                <i class="fas fa-money"></i> Your transaction
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

        @yield('content')

        <!--================ start footer Area  =================-->
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="{{ asset('template/image/instagram/Image-01.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-02.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-03.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-04.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-05.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-06.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-07.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-08.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('template/js/popper.js') }}"></script>
        <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('template/js/mail-script.js') }}"></script>
        <script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('template/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
        <script src="{{ asset('template/js/mail-script.js') }}"></script>
        <script src="{{ asset('template/js/stellar.js') }}"></script>
        <script src="{{ asset('template/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('template/js/custom.js') }}"></script>
        @yield('script')
    </body>
</html>
