<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Login - Auction Online</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="./front/img/Logo.png" rel="icon">
    <link href="./front/img/Logo.png" rel="apple-touch-icon">

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

</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="admin/home" class="logo d-flex align-items-center w-auto">
                                    <span class="d-none d-lg-block">Auction Online</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your email & password to login</p>
                                    </div>

                                    <form method="post" class="row g-3 needs-validation">
                                        @csrf
                                        @include('admin.components.notification')

                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" class="form-control" id="email"
                                                       required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                   required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true"
                                                       id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                &copy; Copyright <strong><span>Auction Online</span></strong>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->



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


</body>

</html>
