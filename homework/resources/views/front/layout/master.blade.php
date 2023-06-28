<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('/')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title') | Auction</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts-->
    <link rel="stylesheet" href="./front/css/css2.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="./front/css/swiper-bundle.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="./front/css/style-default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="./front/css/style.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="./front/css/add.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://demo.bootstrapious.com/shopio/img/favicon.9f24e811.png">
    <!-- Font Awesome Pro-->
    <link rel="stylesheet" href="./front/css/fontawesome-pro-6.1.0-web/css/all.css">
    <script src="./front/css/fontawesome-pro-6.1.0-web/js/all.js"></script>

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="{{ (request()->segment(1) == 'profile') ? 'background-color: #ececec' : '' }}">
<section id="loading">
    <div id="load">
        <div style="--value: 1;"></div>
        <div style="--value: 2;"></div>
        <div style="--value: 3;"></div>
        <div style="--value: 4;"></div>
        <div style="--value: 5;"></div>
        <div style="--value: 6;"></div>
        <div style="--value: 7;"></div>
        <div style="--value: 8;"></div>
    </div>
</section>
<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-4 bg-white shadow-sm">
    <div class="container">
        <!-- Navbar brand--><a class="navbar-brand" href=""><img src="./front/img/Logo.png" alt="Patrol online store" width="100"></a>
        <!-- Navbar toggler-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <!-- Navbar collapse-->
        <div class="collapse navbar-collapse d-lg-flex align-items-lg-center justify-content-lg-between" id="navbarSupportedContent">
            <!-- Navbar menu right-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-lg-3"><a class="nav-link text-uppercase {{ (request()->segment(1) == '') ? 'active' : '' }}" aria-current="page" href="./">Home</a></li>
                <li class="nav-item me-lg-3"><a class="nav-link text-uppercase {{ (request()->segment(1) == 'shop') ? 'active' : '' }}" href="./shop">Shop</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase {{ (request()->segment(1)== 'about') ? 'active' : '' }}" href="./about_us">About</a></li>
                <li class="nav-item dropdown me-lg-3">
                    <a class="nav-link text-uppercase dropdown-toggle {{ (request()->segment(1)== 'blog' ) || (request()->segment(1) == 'help_center' ) ? 'active' : '' }}" id="navbarDropdown" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                    <ul class="dropdown-menu mt-3" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./blog">Blog</a></li>
                        <li><a class="dropdown-item" href="./help_center">Help Center</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Navbar menu left-->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 flex-row">
                <li class="nav-item me-3 flec">
                    <a class="nav-link text-uppercase position-relative icon-nav" href="./cart">
                        <i class="fa-regular fa-cart-shopping"></i>
                        <span class="badge rounded-pill bg-primary">{{\Illuminate\Support\Facades\Auth::check() ? count( App\Models\Cart::all()->where('user_id', Auth::user()->id )) : '0'}}</span>
                    </a>
                </li>
                <li class="nav-item me-3 flec" id="glass-icon-nav">
                     <span class="nav-link text-uppercase icon-nav" >
                    <i class="fa-regular fa-magnifying-glass"></i>
              </span>
                </li>
                <li class="nav-item dropdown me-3 user-login">

                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a class="nav-link dropdown-toggle user-login-con" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./front/img/user/{{Auth::user()->avatar ?? 'default-avatar.jpg'}}" alt="user">
                            <span>{{Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu login-tag mt-3" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="./client/seller/product"><span><i class="fa-solid fa-gavel"></i></span> Auctioneer</a></li>
                            <li><a class="dropdown-item" href="./profile"><span><i class="fa-solid fa-user"></i></span> Profile </a></li>

                            <li><a class="dropdown-item" href="./account/logout"><span><i class="fa-solid fa-right-from-bracket"></i></span> Sign out </a></li>
                        </ul>
                    @else
                        <a class="nav-link text-uppercase icon-nav" href="./account/login">
                            <i class="fa-regular fa-user"></i>
                        </a>
                    @endif

                </li>
            </ul>
        </div>
    </div>
</nav>
<!--  Search  -->
<div id="search-nav">
    <div id="close-nav-search">
        <button class="btn btn-close"></button>
    </div>
    <form action="./shop" class="col-lg-12">
        <input name="search" class="form-control" type="search" placeholder="Search here">
        <button type="submit" class="btn-search btn btn-primary"><i class="fa-regular fa-magnifying-glass"></i></button>
    </form>
</div>



@yield('body')



<footer class="bg-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-3 mb-md-0"><img class="img-fluid mb-3" src="./front/img/Logo-white.png" alt="Patrol" width="120">
                <p class="text-muted">Auction online</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fab fa-cc-visa text-gray"></i></li>
                    <li class="list-inline-item"><i class="fab fa-cc-mastercard text-gray"></i></li>
                    <li class="list-inline-item"><i class="fab fa-cc-discover text-gray"></i></li>
                    <li class="list-inline-item"><i class="fab fa-cc-paypal text-gray"></i></li>
                    <li class="list-inline-item"><i class="fab fa-cc-amex text-gray"></i></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-12 mb-3 mb-md-0">
                <h6 class="text-white">Menu</h6>
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-2"> <a class="reset-anchor" href="./about_us">About</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="./blog">Blog</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="./help_center">Contact</a></li>
                    <!-- <li class="mb-2"><a class="reset-anchor" href="">FAQ</a></li> -->
                </ul>
            </div>
            <div class="col-md-2 col-sm-12 mb-3 mb-md-0">
                <h6 class="text-white">Checkout</h6>
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-2"> <a class="reset-anchor" href="./profile">My Account</a></li>
                    <li class="mb-2"> <a class="reset-anchor" href="./client/seller/product">Orders Tracking</a></li>
                    <!-- <li class="mb-2"> <a class="reset-anchor" href="">Checkout</a></li>
                    <li class="mb-2"> <a class="reset-anchor" href="">Wishlist</a></li> -->
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
                <p class="lead mb-1 text-white"><a class="reset-anchor" href="tel:+998 123 456 789">+998 123 456 789</a></p>
                <p class="text-muted">Platform 9¾ at King's Cross Station XD</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a class="social-icon" href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a class="social-icon" href=""><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="social-icon" href=""><i class="fab fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a class="social-icon" href=""><i class="fab fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-top py-4" style="border-color: #1d1d1d !important">
            <div class="row">
                <div class="col-lg-6">
                    <p class="small text-muted mb-0">© 2023 All rights reserved.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p class="small text-muted mb-0">Privacy Policy  Terms of service</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
<!-- JavaScript files-->
<script src="./front/js/bootstrap.bundle.min.js"></script>
<script src="./front/js/swiper-bundle.min.js"></script>
<script src="./front/js/theme.b8c44118.js"></script>
<script src="./front/js/add.js"></script>
<script src="./front/js/notify.js"></script>

</html>
