<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/AdminLTE/dist/img/himakom.png" rel="icon">
    <link href="assetsLogin/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assetsLogin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetsLogin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetsLogin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assetsLogin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assetsLogin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assetsLogin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assetsLogin/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assetsLogin/css/style.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="/assets/AdminLTE/dist/img/himakom.png" alt="">
                    <span class="d-none d-lg-block">SiDani</span>
                    </a>
                </div><!-- End Logo -->

                <div class="card mb-3">

                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login Admin</h5>
                            <p class="text-center small">Masukkan Username dan Password</p>
                        </div>

                        <main class="form-signin">
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                            <?php endif; ?>
                            <form method="post" action="<?= base_url(); ?>/login/processs">
                                <?= csrf_field(); ?>
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
                                <br>
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                                <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <br>
                                <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
                            </form>
                        </main>
                    </div>
                </div>

                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                    SiDani
                </div>

                </div>
            </div>
            </div>

        </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assetsLogin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assetsLogin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsLogin/vendor/chart.js/chart.min.js"></script>
    <script src="assetsLogin/vendor/echarts/echarts.min.js"></script>
    <script src="assetsLogin/vendor/quill/quill.min.js"></script>
    <script src="assetsLogin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assetsLogin/vendor/tinymce/tinymce.min.js"></script>
    <script src="assetsLogin/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetsLogin/js/main.js"></script>

</body>

</html>
