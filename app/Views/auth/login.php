<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Auth Login - MFUTS</title>
    <!-- plugins:css -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/fontawesome.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?= base_url() ?>assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url() ?>assetsassets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>assets/js/config.js"></script>
</head>

<body>

    <div class="authentication-wrapper authentication-cover">
        <!-- Logo -->
        <a href="index.html" class="auth-cover-brand d-flex align-items-center gap-2">
            <span class="app-brand-logo demo">
                <span style="color: var(--bs-primary)">
                    <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z" fill="currentColor" />
                        <path d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z" fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
                        <path d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z" fill="currentColor" />
                        <path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="currentColor" />
                        <path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
                        <path d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z" fill="currentColor" />
                        <defs>
                            <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138" x2="10.532" y2="24.104" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-opacity="1" />
                                <stop offset="1" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139" x2="10.3357" y2="24.1155" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-opacity="1" />
                                <stop offset="1" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
            </span>
            <span class="app-brand-text demo text-heading fw-bold">Materialize</span>
        </a>
        <!-- /Logo -->
        <div class="authentication-inner row m-0">
            <!-- /Left Section -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-5 pb-2">
                <img src="<?= base_url() ?>assets/img/illustrations/auth-login-illustration-light.png" class="auth-cover-illustration w-100" alt="auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png" data-app-dark-img="illustrations/auth-login-illustration-dark.png" />
                <img src="<?= base_url() ?>assets/img/illustrations/auth-cover-login-mask-light.png" class="authentication-image" alt="mask" data-app-light-img="illustrations/auth-cover-login-mask-light.png" data-app-dark-img="illustrations/auth-cover-login-mask-dark.png" />
            </div>
            <!-- /Left Section -->

            <!-- Login -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-5 px-4 py-4">
                <div class="w-px-400 mx-auto pt-5 pt-lg-0">
                    <h4 class="mb-2 fw-semibold">Welcome to Materialize! 👋</h4>
                    <p class="mb-4">Please sign-in to your account and start the adventure</p>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger alert-dismissable show fade">
                            <div class="alert-body d-flex gap-2">
                                <button class="btn-close btn-sm" data-bs-dismiss="alert"></button>
                                <b>Error !! - </b>
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form id="formAuthentication" class="mb-3" action="<?= site_url('auth/do-login') ?>" method="POST" novalidate="">
                        <?= csrf_field() ?>
                        <div class="form-floating form-floating-outline mb-3">
                            <input type="text" class="form-control" id="email_user" name="email_user" placeholder="Enter your email or username" autofocus />
                            <label for="email_user">Email or Username</label>
                        </div>
                        <div class="mb-3">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input type="password" id="password_user" class="form-control" name="password_user" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                        <label for="password_user">Password</label>
                                    </div>
                                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                            <a href="#" class="float-end mb-1">
                                <span>Forgot Password?</span>
                            </a>
                        </div>
                        <button type="submit" class="btn btn-primary d-grid w-100">Sign in</button>
                    </form>

                    <p class="text-center mt-2">
                        <span>New on our platform?</span>
                        <a href="auth-register-cover.html">
                            <span>Create an account</span>
                        </a>
                    </p>

                    <div class="divider my-4">
                        <div class="divider-text">or</div>
                    </div>

                    <div class="d-flex justify-content-center gap-2">
                        <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-facebook">
                            <i class="tf-icons mdi mdi-24px mdi-facebook"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-twitter">
                            <i class="tf-icons mdi mdi-24px mdi-twitter"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-github">
                            <i class="tf-icons mdi mdi-24px mdi-github"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-google-plus">
                            <i class="tf-icons mdi mdi-24px mdi-google"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="<?= base_url() ?>assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="<?= base_url() ?>assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url() ?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url() ?>assets/js/pages-auth.js"></script>

    <!-- endinject -->



</body>

</html>