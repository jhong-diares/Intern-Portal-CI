<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!-- Style -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="<?= base_url(); ?>css/ero-login-set.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">
  <!-- Erovoutika Icon -->
  <link rel="icon" href="<?= base_url(); ?>dist/img/beta-logo.png" type="image/gif">
  <!-- Sweet Alert -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


</head>

<body class="hold-transition register-page container" style="background-color: #012579;">
  <div class="div dark-mode">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img src="<?= base_url(); ?>dist/img/ero-logo-white.png" class="img-fluid">
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form id="quickForm_register" action="<?= base_url() ?>Login/sign_up" method="post">
          <div class="input-group mb-3 form-group">
            <input type="email" class="form-control" id="INF_EMAIL" name="INF_EMAIL" placeholder="Email">
          </div>
          <div class="input-group mb-3 form-group">
            <input type="password" class="form-control" id="INF_PASSWORD" name="INF_PASSWORD" placeholder="Password">
          </div>
          <div class="input-group mb-4 form-group">
            <input type="password" class="form-control" id="INF_PASSWORD_2" name="INF_PASSWORD_2" placeholder="Retype password">
          </div>
          <div class="row">
            <div class="col-12 mb-2">
              <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
            <div class="col-12 mb-2">
              <a href="<?= base_url(); ?>login" class="btn btn-secondary btn-block">Cancel </a>
            </div>
          </div>
        </form>
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
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>dist/js/demo.js"></script>
  <!-- Sweet Alert -->
  <script src="<?= base_url(); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url(); ?>js/login-register.js"></script>

  <!-- Page specific script -->

  <script>
    $('#quickForm_register').on('submit', function(e) {
      e.preventDefault();
      var url = '<?= base_url() ?>Login/sign_up';

      var username = $('#INF_EMAIL').val();
      var password = $('#INF_PASSWORD').val();
      var confirm_password = $('#INF_PASSWORD_2').val();

      SIGN_UP(url, username, password).then(function($result) {
        if ($result.status == 'SUCCESS') {
          window.location.href = "<?= base_url(); ?>Login";
        }

        if ($result.status == 'INCORRECT') {
          Swal.fire({
            icon: 'error',
            text: ' Password does not match.',
            title: 'Error !',
            showConfirmButton: false,
            timer: 1500
          })
        }

        if ($result.status == 'EXISTED') {
          Swal.fire({
            icon: 'error',
            text: ' Username already exist',
            title: 'Error !',
            showConfirmButton: false,
            timer: 1500
          })
        }
        if ($result.status == 'FAILED') {
          Swal.fire({
            icon: 'error',
            text: ' Registration Failed',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
          })
        }
      })

      async function SIGN_UP(url, username, password) {
        var formData = new FormData();
        formData.append('USERNAME', username);
        formData.append('PASSWORD', password);
        formData.append('CONFIRM_PASSWORD', confirm_password);
        const response = await fetch(url, {
          method: 'POST',
          body: formData,
        })
        return response.json();
      }

    })
  </script>





</body>

</html>