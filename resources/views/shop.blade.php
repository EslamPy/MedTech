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
        <title>Shop</title>

        <!-- favicon -->
        <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <!-- fontawesome -->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- animate css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- mean menu css -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- responsive -->
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>

    <body>
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
        <!-- end search arewa -->

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>TECHNICAL AND EFFICIENT</p>
                            <h1>Shop</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- products -->
        <div class="product-section mt-150 mb-150">
            <div class="container">

                
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-filters">
                            <ul>
                                <li class="active" data-filter="*">CPU</li>
                                <li data-filter=".GPU">GPU</li>
                                <li data-filter=".RAM">RAM</li>
                                <li data-filter=".Case">CASE</li>
                                <li data-filter=".Motherboard">Motherboard</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row product-lists">
                    @foreach ($_category as $item)
                        <div class="col-lg-4 col-md-6 text-center PC">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="{{ route('Products') }}"><img
                                            src="{{ url($item->imgpath) }}"style="max-height: 250px !important; min-height: 250px !important"
                                            alt=""></a>
                                </div>
                                <h3>{{ $item->name }}</h3>
                                <p class="product-price"> {{ $item->price }}$ </p>
                                <a href="{{ route('cart') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="col-lg-12 text-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end products -->
        @endsection
