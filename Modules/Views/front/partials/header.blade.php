<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/front/') }}/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Market Zone</title>
    <!--
  CSS
  ============================================= -->
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/nouislider.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/main.css">

</head>

<body>
    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            @if (Auth::check())
                                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>
                            @endif

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="{{ Auth::check() ? url('profile') : url('login') }}"
                                    class="cart"><span class="fa fa-user" style="font-size: 30px;"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>{{ Auth::check() ? 'Hi ! ' . Auth::user()->name : 'MarkeTZone' }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
