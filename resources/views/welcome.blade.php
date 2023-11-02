@extends('Layouts.master')

@section('static')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Laravel E-Commerce Project by Sam">

        <!-- title -->
        <title>Laravel E-Commerce Project</title>

        <!-- favicon -->
        <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <!-- fontawesome -->
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <!-- mean menu css -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
        <!-- main style -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <!-- responsive -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    </head>



    <body>

        <!--PreLoader-->
        <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>
        <!--PreLoader Ends-->

        {{-- <section class="splash">
            <h1>The web is <span>complicated</span>.</h1>
            <div class="splash__bg">
              <span class="js-circle"></span>
              <span class="js-circle"></span>
              <span class="js-circle"></span>
              <span class="js-circle"></span>
              <span class="js-circle"></span>
              <span class="js-circle"></span>
              <span class="js-circle"></span>
              <span class="js-circle"></span>
            </div>
          </section> --}}



        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search area -->

        <!-- home page slider -->
        <div class="homepage-slider">
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Cutting-Edge & Reliable</p>
                                    <h1>High-Performance PC Parts</h1>
                                    <div class="hero-btns">
                                        <a href="{{ route('shop') }}" class="boxed-btn">Tech Essentials Collection</a>
                                        <a href="{{ route('contact') }}" class="bordered-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Open Everyday</p>
                                    <h1>100% Organic Collection</h1>
                                    <div class="hero-btns">
                                        <a href="{{ route('shop') }}" class="boxed-btn">Visit Shop</a>
                                        <a href="{{ route('contact') }}" class="bordered-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-right">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Mega Sale Going On!</p>
                                    <h1>Get December Discount</h1>
                                    <div class="hero-btns">
                                        <a href="{{ route('shop') }}" class="boxed-btn">Visit Shop</a>
                                        <a href="{{ route('contact') }}" class="bordered-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end home page slider -->

        <!-- features list section -->
        <div class="list-section pt-80 pb-80">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="content">
                                <h3>Free Shipping</h3>
                                <p>When order over $75</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="content">
                                <h3>24/7 Support</h3>
                                <p>Get support all day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="list-box d-flex justify-content-start align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <div class="content">
                                <h3>Refund</h3>
                                <p>Get refund within 3 days!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end features list section -->

        <!-- product section -->
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h3><span class="orange-text">Our</span> Products</h3>
                            <p>"Upgrade your PC with top-quality components. Explore our range of PC parts now!"</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    @foreach ($_category as $item)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                            <a href="{{ route('Products') }}">
                            <img src="{{ asset($item->imgpath) }}" style="max-height: 250px !important; min-height: 250px !important" alt="">
                            </div>
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->description }}</p>
                            <p class="product-price"><span>Price</span> {{ $item->price }} $ </p>
                            <a href="{{ route('cart') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end product section -->

        <!-- cart banner section -->
        <section class="cart-banner pt-100 pb-100">
            <div class="container">
                <div class="row clearfix">
                    <!--Image Column-->
                    <div class="image-column col-lg-6">
                        <div class="image">
                            <div class="price-box">
                                <div class="inner-price">
                                    <span class="price">
                                        <strong>30%</strong> <br> off Case
                                    </span>
                                </div>
                            </div>
                            <img src="assets/img/Project-images/Pc Gaming.png" alt="">
                        </div>
                    </div>
                    <!--Content Column-->
                    <div class="content-column col-lg-6">
                        <h3><span class="orange-text">Deal</span> of the month</h3>
                        <h4>Lian Li O11 Dynamic XL</h4>
                        <div class="text">Discover our 30% Off Deal of the Month on LianLi PC cases! Elevate your setup
                            with style and performance. This limited-time offer won't last, so act fast!"</div>
                        <!--Countdown Timer-->
                        <div class="time-counter">
                            <div class="time-countdown clearfix" data-countdown="2020/2/01">
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Days</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Hours</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Mins</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Secs</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('cart') }}" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to
                            Cart</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end cart banner section -->

        <!-- testimonail-section -->
        <div class="testimonail-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="testimonial-sliders">
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar1.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Saira Hakim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        "Amazing! Our PC Online is my go-to for gaming gear. Their selection is impressive,
                                        and they offer top-notch customer service. They helped me build my dream gaming rig
                                        within budget."
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar2.jpg" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>David Niph <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        "The best place for PC parts! Our PC Online's expertise and selection exceeded my
                                        expectations. They're my first choice for quality components."
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar3.jpg" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        "Game-changer for content creators! Our PC Online offers a wide range of quality
                                        components at competitive prices. I upgraded my setup and couldn't be happier.
                                        Highly recommended!"
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- shop banner -->
        <section class="shop-banner">
            <div class="container">
                <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
                <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
                <a href="{{ route('shop') }}" class="cart-btn btn-lg">Shop Now</a>
            </div>
        </section>
        <!-- end shop banner -->


        <!-- latest news -->
        <div class="latest-news pt-150 pb-150">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h3><span class="orange-text">Tech</span> Updates</h3>
                            <p>
                                Stay informed with Our News. Get the latest tech insights and product tips to enhance your
                                PC experience.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="{{ route('news') }}">
                                <div class="latest-news-bg news-bg-1"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="{{ route('news') }}">Graphics Card Shortages</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Adam</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2023</span>
                                </p>
                                <p class="excerpt">Gamers faced a severe shortage of graphics cards due to high demand,
                                    cryptocurrency mining, and supply chain disruptions, causing inflated prices and limited
                                    availability.</p>
                                <a href="{{ route('news') }}" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="{{ route('news') }}">
                                <div class="latest-news-bg news-bg-2"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="{{ route('news') }}">NVIDIA's RTX 40 Series</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2023</span>
                                </p>
                                <p class="excerpt">NVIDIA's RTX 30 series graphics cards, introduced in 2020, continued to
                                    dominate the market. Models like the RTX 3060 Ti and RTX 3080 offered exceptional
                                    performance and support for ray tracing technology, enhancing the gaming experience.</p>
                                <a href="{{ route('news') }}" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-latest-news">
                            <a href="{{ route('news') }}">
                                <div class="latest-news-bg news-bg-3"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="{{ route('news') }}">Good thoughts bear good fresh juicy fruit.</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                                </p>
                                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                    Praesent vitae mattis nunc, egestas viverra eros.</p>
                                <a href="{{ route('news') }}" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="{{ route('news') }}" class="boxed-btn">More News</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end latest news -->
    @endsection
