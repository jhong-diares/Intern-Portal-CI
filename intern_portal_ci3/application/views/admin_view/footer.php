</div>
</section>
</div>

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
<!-- DataTables  & Plugins -->
<script src="<?= base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url(); ?>plugins/moment/moment.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>dist/js/pages/dashboard2.js"></script>
<!-- Sweet Alert -->
<script src="<?= base_url(); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url(); ?>plugins/toastr/toastr.min.js"></script>
<!-- jquery-validation -->
<script src="<?= base_url(); ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?= base_url(); ?>js/adminview-recruitment.js"></script>
<script src="<?= base_url(); ?>js/adminview-onboarding.js"></script>
<script src="<?= base_url(); ?>js/adminview-settings.js"></script>
<script src="<?= base_url(); ?>js/adminview-create_account.js"></script>


<script>
  function isLetterKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32))
      return true;
    return false;
  }
</script>

<script>
  $(document).ready(function() {
    var momentNow = moment();
    var interval = setInterval(function() {
      var momentNow = moment();
      // var $GetDateIn = $('#date-part').html(momentNow.format('dddd').substring(0, 3) + ', ' + momentNow.format('MMMM DD YYYY'));
      // var $GetTimeIn = $('#time-part').html(momentNow.format('hh:mm:ss A'));
      var $GetDateIn = momentNow.format('dddd').substring(0, 3) + ', ' + momentNow.format('MMMM DD YYYY');
      var $GetTimeIn = momentNow.format('hh:mm:ss A');

      $('#today').text(momentNow.format('dddd'));
      $('#month').text(momentNow.format('MMMM'));
      $('#day').text(momentNow.format('DD'));
      $('#year').text(momentNow.format('YYYY'));

      $('#hours').text(momentNow.format('hh:'));
      $('#minutes').text(momentNow.format('mm'));
      $('#seconds').text(momentNow.format(':ss'));
      $('#phase').text(momentNow.format('A'));
    }, 100);
  });
</script>

<script>
  if ($('#active_page').text() == 'Recruitment') {
    $('#recruitment').addClass('active');
  }
  if ($('#active_page').text() == 'Onboarding') {
    $('#onboarding').addClass('active');
  }
  if ($('#active_page').text() == 'Settings') {
    $('#settings').addClass('active');
  }
  if ($('#active_page').text() == 'Attendance') {
    $('#attendance').addClass('active');
  }
</script>

<!-- ===============================DATE TIME PICKER=============================== -->
<!-- <script>
  $(function() {
    $('#interviewdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });
  })
</script> -->

<!-- ======================================START ATTENDANCE====================================================== -->
<script>
  ShowAttendance();

  // START SHOW DATA TABLE ATTENDANCE
  function ShowAttendance() {
    var url = '<?= base_url() ?>Adminview/display_attendance';
    DISPLAY_ATTENDANCE(url).then(function(displayAttendance) {

      $("#tbl_attendance").DataTable({
        "data": displayAttendance.request,
        "responsive": true,
        "ordering": false,
        "lengthChange": false,
        "autoWidth": false,
        "bFilter": false,
        "columns": [{
            "data": "col_attn_date",
            "render": function(data, type, row, meta) {
              var retVal = row.col_attn_date;
              if (retVal) {
                return retVal;
              } else {
                return 'NO ATTENDANCE';
              }

            }
          },
          {
            "data": "LAST_NAME",
            "render": function(data, type, row, meta) {

              return a = row.LAST_NAME + ' ' + row.FIRST_NAME;
            }
          },
          {
            "data": "TIME_IN",
            "render": function(data, type, row, meta) {
              var retVal = row.TIME_IN;
              if (retVal) {

                var b = `
                          <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-success">${row.TIME_IN}</small></center>
                          `;
                return b;
              } else {
                var b = `
                          <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-success">NO TIME IN</small></center>
                          `;
                return b;
              }

            }
          },
          {
            "data": "TIME_OUT",
            "render": function(data, type, row, meta) {
              var retVal = row.TIME_OUT;
              if (retVal) {
                var c = `
                          <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-danger">${row.TIME_OUT}</small></center>
                          `;
                return c;
              } else {
                var c = `
                          <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-danger">NO TIME OUT</small></center>
                          `;
                return c;
              }

            }
          },
        ]
      }).buttons().container().appendTo('#tbl_attendance_wrapper .col-md-6:eq(0)');

    })
    async function DISPLAY_ATTENDANCE(url) {
      // GET TO Adminview/display_onboarding  
      const response = await fetch(url, {
        method: 'POST',
      })
      return response.json();
    }

  }
  // END SHOW DATA TABLE ATTENDANCE
</script>
<!-- ======================================END ATTENDANCE====================================================== -->


<!-- ======================================START RECRUITMENT====================================================== -->
<script>
  ShowRequest()

  // START SHOW DATA TABLE REQUEST
  function ShowRequest() {
    var url = '<?= base_url() ?>Adminview/display_request';
    DISPLAY_REQUEST(url).then(function(displayRequest) {

      $("#tbl_request").DataTable({
        "data": displayRequest.request,
        "responsive": true,
        "ordering": false,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf"],
        "columns": [{
            "data": "col_date_sbmt"
          },
          {
            "data": "col_last_name",
            "render": function(data, type, row) {
              return row.col_frst_name + ' ' + row.col_last_name;
            }
          },
          {
            "data": "id",
            "render": function(data, type, row, meta) {
              var a = `
                          <a href="#" class="text-center" value="${row.id}" id="view"><i class='far fa-eye ml-4'></i></a>
                        `;
              return a;
            }
          },
          {
            "data": "id",
            "render": function(data, type, row, meta) {
              var b = `
                      <div class="d-flex justify-content-center">
                      <div class="btn-group" style="display:relative;">
                      <button type="button" class="btn btn-block-no-width btn-success btn-re" id="accept" url="<?= base_url() ?>Adminview/accept_request" value="${row.id}"><i class="fa fa-check"></i> ACCEPT</button>
                      <button type="button" class="btn btn-block-no-width btn-warning btn-re" id="limit" url="<?= base_url() ?>Adminview/limit_request" value="${row.id}"><i class="fa fa-exclamation-triangle"></i>   LIMIT  </button>
                      <button type="button" class="btn btn-block-no-width btn-danger btn-re" id="reject" url="<?= base_url() ?>Adminview/reject_request" value="${row.id}"><i class="fa fa fa-times"></i> REJECT </button>
                      </div>
                      </div>`
              return b;
            }
          },
          {
            "data": "col_user_stat",
            "render": function(data, type, row, meta) {
              if (row.col_user_stat == 'REJECTED') {
                var c = `
                        <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-danger">${row.col_user_stat}</small></center>
                        `;
              } else if (row.col_user_stat == 'QUOTA LIMIT') {
                var c = `
                        <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-warning">${row.col_user_stat}</small></center>
                        `;
              } else {
                var c = `
                        <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-info">${row.col_user_stat}</small></center>
                        `;
              }

              return c;
            }
          },
          {
            "data": "col_reje_reas",
          },
        ]
      }).buttons().container().appendTo('#tbl_request_wrapper .col-md-6:eq(0)');

    })

    async function DISPLAY_REQUEST(url) {
      // GET TO Adminview/display_onboarding  
      const response = await fetch(url, {
        method: 'POST',
      })
      return response.json();
    }
  }
  // END SHOW DATA TABLE REQUEST

  // START VIEW INTERN
  $(document).on("click", "#view", function(e) {
    e.preventDefault();

    var url = '<?= base_url() ?>Adminview/view_intern';
    var viewId = $(this).attr("value");

    DISPLAY_INTERN_DETAILS(url, viewId).then(function($result) {

      // GET RETURN echo json_encode($result); FROM Adminview(Controller)/view_intern(Method)
      if ($result.status == 'SUCCESS') {
        SummaryRequest()
        $('#view_intern').modal('show');
        $('#intern_id').val(viewId);
        $('#intern_name').text($result.view.col_frst_name + ' ' + $result.view.col_last_name);
        $('#intern_name_2').val($result.view.col_frst_name + ' ' + $result.view.col_midl_name + ' ' + $result.view.col_last_name);

        $('#intern_lastname').val($result.view.col_last_name);
        $('#intern_firstname').val($result.view.col_frst_name);
        $('#intern_middlename').val($result.view.col_midl_name);

        $('#intern_address').val($result.view.col_curr_addr);
        $('#intern_email').val($result.view.col_emai_addr);
        $('#intern_contact').val($result.view.col_cell_numb);
        $('#intern_bday').val($result.view.col_birt_date);
        $('#intern_gender').val($result.view.col_intr_gndr);
        $('#intern_skillset').val($result.view.col_intr_skil);
        $('#intern_course').val($result.view.col_intr_cour);
        $('#intern_schoolname').val($result.view.col_scho_name);
        $('#intern_schoolcontact').val($result.view.col_schl_cont);
        $('#intern_advisername').val($result.view.col_advs_name);
        $('#intern_advisercontact').val($result.view.col_advs_cont);
        $('#intern_hours').val($result.view.col_totl_hour);
        $('#intern_schedule').empty();
        var str = $result.view.col_sche_day;
        var ret = str.split("/");
        var schedule_count = $(ret).length;
        var count = (schedule_count - 1);
        var day = ""
        const days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        for (let i = 0; i < count; i++) {
          day += '<input type="text" class="form-control" id="' + days[i] + '" ' + ' value="' + ret[i] + '"><br>';
        }

        $('#intern_schedule').append(day);

        $('#intern_resume').text($result.view.col_reqm_resm);
        $('#intern_recommendation').text($result.view.col_reqm_endo);
        $('#intern_waiver').text($result.view.col_reqm_waiv);
        $('#intern_agreement').text($result.view.col_reqm_agre);

        // LINK
        $("#download_resume").attr("value", $result.view.col_reqm_resm);
        $("#download_recommendation").attr("value", $result.view.col_reqm_endo);
        $("#download_waiver").attr("value", $result.view.col_reqm_waiv);
        $("#download_agreement").attr("value", $result.view.col_reqm_agre);

        // BUTTON DOWNLOAD
        $("#download_resume_button").attr("value", $result.view.col_reqm_resm);
        $("#download_recommendation_button").attr("value", $result.view.col_reqm_endo);
        $("#download_waiver_button").attr("value", $result.view.col_reqm_waiv);
        $("#download_agreement_button").attr("value", $result.view.col_reqm_agre);

        // BUTTON DELETE
        $("#delete_resume_button").attr("value", $result.view.col_reqm_resm); // RESUME
        $("#delete_resume_button").attr("internId", viewId);

        $("#delete_recommendation_button").attr("value", $result.view.col_reqm_endo); // RECOMMENDATION
        $("#delete_recommendation_button").attr("internId", viewId);

        $("#delete_waiver_button").attr("value", $result.view.col_reqm_waiv); // WAIVER
        $("#delete_waiver_button").attr("internId", viewId);

        $("#delete_agreement_button").attr("value", $result.view.col_reqm_agre); // AGREEMENT
        $("#delete_agreement_button").attr("internId", viewId);

        $('#intern_essay').text($result.view.col_esay_ansr);
        
        if ($result.view.col_imag_name == "") {
          $("#intern_photo").attr("src", "<?= base_url(); ?>intern_photo/default-profile.png");
        } else if (!$result.view.col_imag_name) {
          $("#intern_photo").attr("src", "<?= base_url(); ?>intern_photo/default-profile.png");
        } else {
          $("#intern_photo").attr("src", "<?= base_url(); ?>intern_photo/" + $result.view.col_imag_name);
        }

      }
    })

    async function DISPLAY_INTERN_DETAILS(url, viewId) {

      // POST TO Adminview/view_intern  
      var formData = new FormData();
      formData.append('viewId', viewId);

      const response = await fetch(url, {
        method: 'POST',
        body: formData,
      })
      return response.json();
    }
  });
  // END VIEW INTERN
</script>
<!-- ======================================END RECRUITMENT====================================================== -->


<!-- ======================================START ONBOARDING====================================================== -->
<script>
  ShowOnboarding()

  // START SHOW DATA TABLE ONBOARDING
  function ShowOnboarding() {

    var url = '<?= base_url() ?>Adminview/display_onboarding';
    DISPLAY_ONBOARDING(url).then(function(displayOnboarding) {
      var i = "1";
      $("#tbl_onboarding").DataTable({
        "data": displayOnboarding.request,
        "responsive": true,
        "ordering": false,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf"],
        "columns": [{
            "data": "col_date_inte",
            "render": function(data, type, row) {
              return row.col_date_inte;
              //  + ' ' + row.SUB_TIME;
            }
          },
          {
            "data": "col_last_name",
            "render": function(data, type, row) {
              return row.col_frst_name + ' ' + row.col_last_name;
            }
          },
          {
            "data": "id",
            "render": function(data, type, row, meta) {
              var a = `
                            <a href="#" class="text-center" value="${row.id}" id="view_details"><i class='far fa-eye ml-4'></i></a>
                          `;
              return a;
            }
          },
          {
            "data": "id",
            "render": function(data, type, row, meta) {
              var b = `
                        <div class="d-flex justify-content-center">
                        <div class="btn-group" style="display:relative;">
                        <button type="button" class="btn btn-block-no-width btn-success btn-re" id="hire" url="<?= base_url() ?>Adminview/hire_intern" value="${row.id}"><i class="fa fa-user-plus"></i> PASSED</button>
                        <button type="button" class="btn btn-block-no-width btn-warning btn-re" id="reschedule" url="<?= base_url() ?>Adminview/reschedule_intern" value="${row.id}"><i class="fa fa-calendar"></i> RESCHED</button>
                        <button type="button" class="btn btn-block-no-width btn-danger btn-re" id="failed" url="<?= base_url() ?>Adminview/failed_intern" value="${row.id}"><i class="fa fa fa-user-times"></i> FAILED</button>
                        </div>
                        </div>`
              return b;
            }
          },
          {
            "data": "col_user_stat",
            "render": function(data, type, row, meta) {
              if (row.col_user_stat == 'RESCHEDULE') {
                var c = `
                          <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-warning">${row.col_user_stat}</small></center>
                          `;
              } else if (row.col_user_stat == 'FAILED') {
                var c = `
                          <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-danger">${row.col_user_stat}</small></center>
                          `;
              } else if (row.col_user_stat == 'ACCEPTED') {
                var c = `
                          <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-success">${row.col_user_stat}</small></center>
                          `;
              } else {
                var c = `
                          <center class="text-muted" style="font-weight: 900; font-size: .85rem;"><small class="badge badge-primary">${row.col_user_stat}</small></center>
                          `;
              }
              return c;
            }
          }
        ]
      }).buttons().container().appendTo('#tbl_onboarding_wrapper .col-md-6:eq(0)');

    })

    async function DISPLAY_ONBOARDING(url) {
      // GET TO Adminview/display_onboarding  
      const response = await fetch(url, {
        method: 'POST',
      })
      return response.json();
    }


  }
  // END SHOW DATA TABLE ONBOARDING


  // START VIEW INTERN DETAILS
  $(document).on("click", "#view_details", function(e) {
    e.preventDefault();

    var url = '<?= base_url() ?>Adminview/details_intern';
    var detailsId = $(this).attr("value");

    DISPLAY_INTERN_DETAILS(url, detailsId).then(function($result) {

      // GET RETURN echo json_encode($result); FROM Adminview(Controller)/details_intern(Method)
      if ($result.status == 'SUCCESS') {
        SummaryOnboarding()
        $('#view_details').modal('show');
        $('#intern_name').text($result.details.col_frst_name + ' ' + $result.details.col_last_name);
        $('#intern_name_2').text($result.details.col_frst_name + ' ' + $result.details.col_midl_name + ' ' + $result.details.col_last_name);
        $('#intern_address').text($result.details.col_curr_addr);
        $('#intern_email').text($result.details.col_emai_addr);
        $('#intern_contact').text($result.details.col_cell_numb);
        $('#intern_bday').text($result.details.col_birt_date);
        $('#intern_gender').text($result.details.col_intr_gndr);
        $('#intern_skillset').text($result.details.col_intr_skil);
        $('#intern_course').text($result.details.col_intr_cour);
        $('#intern_schoolname').text($result.details.col_scho_name);
        $('#intern_schoolcontact').text($result.details.col_schl_cont);
        $('#intern_advisername').text($result.details.col_advs_name);
        $('#intern_advisercontact').text($result.details.col_advs_cont);
        $('#intern_hours').text($result.details.col_totl_hour);
        $('#intern_schedule_onboarding').empty();
        var str_sched = $result.details.col_sche_day;
        var ret_str = str_sched.split("/");
        var schedule_count = $(ret_str).length;
        var count = (schedule_count - 1);
        var internDetails_day = ""
        for (let i = 0; i < count; i++) {
          internDetails_day += (i + 1) + '. ' + ret_str[i] + '<br>';
        }
        $('#intern_schedule_onboarding').append(internDetails_day);

        $("#download_resume").attr("value", $result.details.col_reqm_resm);
        $("#download_recommendation").attr("value", $result.details.col_reqm_endo);
        $("#download_waiver").attr("value", $result.details.col_reqm_waiv);
        $("#download_agreement").attr("value", $result.details.col_reqm_agre);

        $('#intern_resume').text($result.details.col_reqm_resm);
        $('#intern_recommendation').text($result.details.col_reqm_endo);
        $('#intern_waiver').text($result.details.col_reqm_waiv);
        $('#intern_agreement').text($result.details.col_reqm_agre);

        $('#intern_essay').text($result.details.col_esay_ansr);

        if ($result.details.col_imag_name == "") {
          $("#intern_photo").attr("src", "<?= base_url(); ?>intern_photo/default-profile.png");
        } else if (!$result.details.col_imag_name) {
          $("#intern_photo").attr("src", "<?= base_url(); ?>intern_photo/default-profile.png");
        } else {
          $("#intern_photo").attr("src", "<?= base_url(); ?>intern_photo/" + $result.details.col_imag_name);
        }


      }
    })

    async function DISPLAY_INTERN_DETAILS(url, detailsId) {

      // POST TO Adminview/details_intern  
      var formData = new FormData();
      formData.append('detailsId', detailsId);

      const response = await fetch(url, {
        method: 'POST',
        body: formData,
      })
      return response.json();
    }

  });
  // END VIEW INTERN DETAILS
</script>
<!-- ======================================END ONBOARDING====================================================== -->

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