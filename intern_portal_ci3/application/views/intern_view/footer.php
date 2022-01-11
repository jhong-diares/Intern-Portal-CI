</div>
</section>
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<!-- <footer class="main-footer">
  <strong>Copyright &copy; 2021 <a href="#">Erovoutika Internportal</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
  </div>
</footer> -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>dist/js/adminlte.js"></script>


<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url(); ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url(); ?>plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url(); ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url(); ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>

<!-- ChartJS -->
<script src="<?= base_url(); ?>plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>dist/js/pages/dashboard2.js"></script>
<!-- Select2 -->
<script src="<?= base_url(); ?>plugins/select2/js/select2.full.min.js"></script>
<!-- SmartWizard -->
<script src="<?= base_url(); ?>plugins/smart-wizard/js/jquery.smartWizard.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url(); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url(); ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Sweet Alert -->
<script src="<?= base_url(); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url(); ?>plugins/toastr/toastr.min.js"></script>
<!-- jquery-validation -->
<script src="<?= base_url(); ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>plugins/jquery-validation/additional-methods.min.js"></script>

<script src="<?= base_url(); ?>js/internview-progress.js"></script>
<script src="<?= base_url(); ?>js/internview-essay.js"></script>
<script src="<?= base_url(); ?>js/internview-schedule.js"></script>
<script src="<?= base_url(); ?>js/internview-personal.js"></script>
<script src="<?= base_url(); ?>js/internview-internship.js"></script>
<script src="<?= base_url(); ?>js/internview-requirements.js"></script>

<script src="<?= base_url(); ?>js/internview-profile.js"></script>
<script src="<?= base_url(); ?>js/internview-attendance.js"></script>



<!-- START DISABLE NON-NUMERIC KEY -->
<script>
  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }
</script>
<!-- END DISABLE NON-NUMERIC KEY -->

<script>
  function isLetterKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32))
      return true;
    return false;
  }
</script>

<!-- START SMART WIZARD -->
<script>
  $(document).ready(function() {
    // Smart Wizard
    $('#smartwizard').smartWizard({
      enableURLhash: !1,
      selected: 0,
      theme: 'arrows',
      transition: {
        animation: 'fade', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
      },
      toolbarSettings: {
        showNextButton: !1,
        showPreviousButton: !1
      },
      keyboardSettings: {
        keyNavigation: !1,
        keyLeft: [37],
        keyRight: [39]
      },
    });

    <?php for ($i = 0; $i <= $USER_DATA->col_step_prog; $i++) { ?>
      $('#smartwizard').smartWizard("goToStep", <?= $i ?>);
      <?php if ($USER_DATA->col_user_stat == "FOR INTERVIEW" || $USER_DATA->col_user_stat == "PENDING" || $USER_DATA->col_user_stat == "QUOTA LIMIT" || $USER_DATA->col_user_stat == "RESCHEDULE") { ?>
        $(".BTN_PERSONAL").remove();
        $(".BTN_INTERNSHIP").remove();
        $(".BTN_SCHEDULE").remove();
        $(".BTN_ESSAY").remove();
        $(".BTN_REQUIREMENTS").remove();
      <?php } ?>
    <?php } ?>
  });
</script>
<!-- END SMART WIZARD -->

<!-- START SELECT DISPLAY PHOTO -->
<script>
  $(function() {
    $('.browse').on("click", function() {
      var file = $(this).parents().find(".file");
      file.trigger("click");
    });
    $('.file_input').change(function(e) {
      var fileName = e.target.files[0].name;
      $("#img_filename").val(fileName);
      if (e.target.files) {
        let imageFile = e.target.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
          var img = document.createElement("img");
          img.onload = function(event) {
            var MAX_WIDTH = 200;
            var MAX_HEIGHT = 200;

            var width = img.width;
            var height = img.height;

            // Change the resizing logic
            if (width <= MAX_WIDTH || height <= MAX_HEIGHT) {
              height = MAX_HEIGHT;
              width = MAX_WIDTH;
            }
            if (width > height) {
              if (width > MAX_WIDTH) {
                height = height * (MAX_WIDTH / width);
                width = MAX_WIDTH;
                if (height < width) {
                  height = width;
                  width = MAX_WIDTH;
                }
              }
            } else {
              if (height > MAX_HEIGHT) {
                width = width * (MAX_HEIGHT / height);
                height = MAX_HEIGHT;
                if (width < height) {
                  width = height;
                  height = MAX_HEIGHT;
                }
              }
            }

            var canvas = document.createElement("canvas");
            canvas.width = width;
            canvas.height = height;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0, width, height);

            // Show resized image in preview element
            var dataurl = canvas.toDataURL(imageFile.type);
            document.getElementById("preview").src = dataurl;
          }
          img.src = e.target.result;
        }
        reader.readAsDataURL(imageFile);
      }
    });
  });
</script>
<!-- END SELECT DISPLAY PHOTO -->








<!-- =============================== LOGIN_SUCCESS =============================== -->
<?php
if ($this->session->userdata('LOGIN_SUCCESS')) {
?>
  <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
    Toast.fire({
      icon: 'success',
      title: '   <?= $this->session->userdata('LOGIN_SUCCESS'); ?>'
    });
  </script>
<?php
  $this->session->unset_userdata('LOGIN_SUCCESS');
}
?>


</body>

</html>