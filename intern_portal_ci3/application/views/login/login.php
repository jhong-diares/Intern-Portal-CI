<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Style -->
    <link href="<?= base_url(); ?>css/ero-login-set.css" rel="stylesheet">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">
    <!-- Erovoutika Icon -->
    <link rel="icon" href="<?= base_url(); ?>dist/img/beta-logo.png" type="image/gif">
    <!-- Login style -->
    <link href="<?= base_url(); ?>css/ero-login.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
</head>

<body class="hold-transition login-page bg-gradient-ero ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="head_img a1">
                    <img src="<?= base_url(); ?>images/internportal_bg_img.jpg" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="div center dark-mode">
                    <div class="card card-outline card-primary">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>dist/img/ero-logo-white.png" class="img-fluid">
                            <p class="login-box-msg">Sign in to start your session</p>
                            <form id="quickForm_login" action="<?= base_url() ?>Login/sign_in" method="post">
                                <div class="input-group mb-3 quickForm">
                                    <input type="email" class="form-control" id="INF_USER" name="INF_USER" placeholder="Email">
                                </div>
                                <div class="input-group mb-3 quickForm">
                                    <input type="password" class="form-control" id="INF_PASS" name="INF_PASS" placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="BTN_SIGN" id="BTN_SIGN" class="btn btn-primary btn-block">Sign In</button>
                                    <a href="<?= base_url(); ?>Login/register" name="BTN_APPLY" id="BTN_APPLY" class="btn btn-success btn-block">Apply Now</a>
                                </div>
                            </form>
                            <div class="mb-2">
                                <p class="mb-1">
                                    <a href="<?= base_url(); ?>Login/forgot_password">I forgot my password</a>
                                </p>
                                <p class="mb-1">
                                    <a href="<?= base_url(); ?>Login/register" class="text-center">Register a new membership</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="<?= base_url(); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>dist/js/adminlte.min.js"></script>
    <!-- jquery-validation -->
    <script src="<?= base_url(); ?>plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- Sweet Alert -->
    <script src="<?= base_url(); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url(); ?>js/login-login.js"></script>

    <script>
        $('#BTN_APPLY').on('click', function(e) {

        })
        $('#quickForm_login').on('submit', function(e) {
            e.preventDefault();
            var url = '<?= base_url() ?>Login/sign_in';

            var username = $('#INF_USER').val();
            var password = $('#INF_PASS').val();

            SIGN_IN(url, username, password).then(function($result) {

                if ($result.status == 'MISSING FIELD') {
                    Swal.fire({
                        icon: 'error',
                        text: ' Please complete all fields',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

                if ($result.status == 'LOGIN FAILED') {
                    Swal.fire({
                        icon: 'error',
                        text: ' Incorrect Email/Password',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                // LOGIN AS INTERN REDIRECT
                if ($result.status == 'AS_INTERN') {
                    window.location.href = "<?= base_url(); ?>Internview/progress";
                }

                // LOGIN AS ADMIN REDIRECT
                if ($result.status == 'AS_ADMIN') {
                    window.location.href = "<?= base_url(); ?>Adminview/onboarding_list";
                }

                // LOGIN AS ACCEPTED REDIRECT
                if ($result.status == 'AS_ACCEPTED') {
                    window.location.href = "<?= base_url(); ?>Internview/profile";
                }



            })

            async function SIGN_IN(url, username, password) {
                var formData = new FormData();
                formData.append('USERNAME', username);
                formData.append('PASSWORD', password);
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }
        })
    </script>









    <!-- =============================== LOGIN_FAILED =============================== -->
    <?php
    if ($this->session->userdata('LOGIN_FAILED')) {
    ?>
        <script>
            Swal.fire(
                '<?php echo $this->session->userdata('LOGIN_FAILED'); ?>',
                'Incorrect Email or Password',
                'error'
            )
        </script>
    <?php
        $this->session->unset_userdata('LOGIN_FAILED');
    }
    ?>
    <!-- =============================== MISSING_FIELD =============================== -->

    <?php
    if ($this->session->userdata('MISSING_FIELD')) {
    ?>
        <script>
            Swal.fire(
                '<?php echo $this->session->userdata('MISSING_FIELD'); ?>',
                'Please complete all fields',
                'error'
            )
        </script>
    <?php
        $this->session->unset_userdata('MISSING_FIELD');
    }
    ?>

    <!-- =============================== INVALID_ACCOUNT =============================== -->
    <?php
    if ($this->session->userdata('INVALID_ACCOUNT')) {
    ?>
        <script>
            Swal.fire(
                '<?php echo $this->session->userdata('INVALID_ACCOUNT'); ?>',
                'Account does not exist',
                'error'
            )
        </script>
    <?php
        $this->session->unset_userdata('INVALID_ACCOUNT');
    }
    ?>

    <!-- =============================== REGISTER SUCCESS =============================== -->
    <?php
    if ($this->session->userdata('REGISTER_SUCCESS')) {
    ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: ' <?php echo $this->session->userdata('REGISTER_SUCCESS'); ?>',
                title: 'Success !',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php
        $this->session->unset_userdata('REGISTER_SUCCESS');
    }
    ?>


</body>

</html>