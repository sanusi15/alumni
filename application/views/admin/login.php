<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="assets/css/rap4.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="assets/css/css'); ?>">
    <style>
        .container-login100 {
            background: url('assets/login/images/bg-01.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" action="<?= base_url('signIn'); ?>" method="post">
                    <span class="login100-form-title p-b-13">
                        Silahkan Login
                    </span>
                    <?php if ($this->session->flashdata('pesan')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Username
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="username" autocomplete="off" autofocus>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <a href="<?= base_url('signUp'); ?>" class="txt2 bo1">
                            Daftar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/login/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url('assets/login/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>js/main.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/js/bootstrap4.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->

</body>

</html>