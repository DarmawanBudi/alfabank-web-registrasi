<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Login Alfabank Couse Jogja</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/owl.carousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Tempo - v2.1.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= register Section ======= -->
    <section id="login" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Admin Login Form</h2>
                <h3>let's fill this<span> form</span></h3>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12 mt-5 mt-lg-0">
                    <form action="{{route('admin-login-action')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan mail" />
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" />
                        </div>

                        <div class="text-center">
                            <button class="custom-button mt-2" type="submit">Login</button>
                        </div>
                    </form>
                </div>
    </section>
    </main>


    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    <!-- Vendor JS Files -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/venobox/venobox.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>