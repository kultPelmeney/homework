<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> @yield('title') - Auction Online</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="shortcut icon" href="https://demo.bootstrapious.com/shopio/img/favicon.9f24e811.png">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="./admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="./admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="./admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./admin/assets/css/style.css" rel="stylesheet">
    <link href="./front/css/client.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
{{--            <img src="./front/img/Logo.png" alt="">--}}
            <span class="d-none d-lg-block">Auction Online</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 4 new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">

            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="front/img/user/{{ \Illuminate\Support\Facades\Auth::user()->avatar ?? 'default-avatar.jpg'}}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ \Illuminate\Support\Facades\Auth::user()->name }}</h6>
{{--                        <span>{{ \App\Utilities\Constant::$user_level[\Illuminate\Support\Facades\Auth::user()->level] }}</span>--}}
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>


                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="./account/login">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'seller') ? '' : 'collapsed' }}" href="client/seller/product">
                <i class="bi bi-box"></i>
                <span>Sell Products</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'buyer') ? '' : 'collapsed' }}" href="client/buyer/product">
                <i class="bi bi-palette2"></i>
                <span>Auction Products</span>
            </a>
        </li>


    </ul>

</aside>
<!-- End Sidebar-->


@yield('body')


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Auction Online</span></strong>
    </div>
</footer><!-- End Footer -->



<script type="text/javascript" src="./admin/assets/js/jquery-3.2.1.min.js"></script>

<!-- Vendor JS Files -->
<script src="./admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="./admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./admin/assets/vendor/chart.js/chart.min.js"></script>
<script src="./admin/assets/vendor/echarts/echarts.min.js"></script>
<script src="./admin/assets/vendor/quill/quill.min.js"></script>
<script src="./admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="./admin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="./admin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script type="text/javascript" src="./admin/assets/js/main.js"></script>
<script type="text/javascript" src="./admin/assets/js/my_script.js"></script>
<script type="text/javascript" src="./admin/assets/js/countDown.js"></script>


</body>

</html>

