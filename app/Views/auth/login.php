<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Auth Login - MFUTS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.png">
    <script src="moz-extension://22e150e5-ab91-430f-b46c-a63089cb458e/assets/prompt.js"></script>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../images/logo.svg" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>

                            <?php if (session()->getFlashdata('error')) : ?>
                                <div class="alert alert-danger alert-dismissable show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">x</button>
                                        <b>Error !! - </b>
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <form class="pt-3" action="<?= site_url('auth/do-login') ?>" method="POST" novalidate="">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email_user" name="email_user" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password_user" name="password_user" placeholder="Password">
                                </div>

                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                            <i class="input-helper"></i></label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="mt-3 mb-2">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                </div>

                                <div class="text-center mt-4 fw-light">
                                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url() ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>js/off-canvas.js"></script>
    <script src="<?= base_url() ?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>js/template.js"></script>
    <script src="<?= base_url() ?>js/settings.js"></script>
    <script src="<?= base_url() ?>js/todolist.js"></script>
    <!-- endinject -->



</body>

</html>