
$().ready(function () {
  $(function () {
    $('#quickForm_requirements').validate({
      rules: {
        waiver_attachment: {
          required: true
        },
        resume_attachment: {
          required: true
        },
        endorsement_attachment: {
          required: true
        },
        agreement_attachment: {
          required: true
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-control').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      },
      submitHandler: function (form) {
        // var url = '<?= base_url() ?>Internview/update_requirements';
        var url = $('#quickForm_requirements').attr('action');

        Swal.fire({
          title: 'Are you sure to submit?',
          text: "Someone will review your answer",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#28a745',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Submit'
        }).then((result) => {
          if (result.isConfirmed) {
            var intern_name = $('#INF_LAST').val() + '_' + $('#INF_FRST').val();
            var id = $('#INTR_ID_UPLOAD').attr('value');
            SAVE_REQUIREMENTS(url, intern_name, id).then(function ($result) {
              var submitted = '';
              // GET RETURN echo json_encode($result); FROM Internview(Controller)/update_requirements(Method)
              if ($result.status_waiver == 'SUCCESS') {
                submitted++;
              }
              if ($result.status_waiver == 'FAILED') {
                Swal.fire({
                  icon: 'error',
                  text: ' Waiver File Uploaded Failed.',
                  title: 'Error !',
                  showConfirmButton: false,
                })
              }

              if ($result.status_resume == 'SUCCESS') {
                submitted++;
              }
              if ($result.status_resume == 'FAILED') {
                Swal.fire({
                  icon: 'error',
                  text: ' Resume File Uploaded Failed.',
                  title: 'Error !',
                  showConfirmButton: false,
                })
              }

              if ($result.status_endorsement == 'SUCCESS') {
                submitted++;
              }
              if ($result.status_endorsement == 'FAILED') {
                Swal.fire({
                  icon: 'error',
                  text: ' Endorsement File Uploaded Failed.',
                  title: 'Error !',
                  showConfirmButton: false,
                })
              }

              if ($result.status_agreement == 'SUCCESS') {
                submitted++;
              }
              if ($result.status_agreement == 'FAILED') {
                Swal.fire({
                  icon: 'error',
                  text: ' Agreement File Uploaded Failed.',
                  title: 'Error !',
                  showConfirmButton: false,
                })
              }

              if (submitted == 4) {
                // Sweet Alert SUCCESS
                Swal.fire({
                  icon: 'success',
                  text: ' File Uploaded Successfully.',
                  title: 'Success !',
                  showConfirmButton: false,
                })

                // REMOVE NEXT BUTTON FROM TABS AFTER APPLICATION SUBMITTED
                $(".BTN_PERSONAL").remove();
                $(".BTN_INTERNSHIP").remove();
                $(".BTN_SCHEDULE").remove();
                $(".BTN_ESSAY").remove();
                $(".BTN_REQUIREMENTS").remove();
                $('input[id=radioForChecking]').attr("checked", true);
                $('input[id=radioForChecking]').prop("disabled", false);

                // Move slider to Step #2 - VERIFICATION
                $('#smartwizard').smartWizard("next");

                // GET DATE TODAY 
                var currentdate = new Date();
                var date = currentdate.getFullYear() + "-" +
                  (currentdate.getMonth() + 1) + "-" +
                  currentdate.getDate();

                // SET DATE to Step #2 - VERIFICATION
                $('#date_submitted').text(date);
              } else {
                Swal.fire({
                  icon: 'error',
                  text: ' Submit Requirements Failed.',
                  title: 'Error !',
                  showConfirmButton: false,
                  timer: 1500
                })
              }
            })

            async function SAVE_REQUIREMENTS(url, intern_name, id) {

              // POST TO Internview/update_requirements 
              var formData = new FormData(quickForm_requirements);
              formData.append('INTERN_NAME', intern_name);
              formData.append('INTR_ID_UPLOAD', id);

              const response = await fetch(url, {
                method: 'POST',
                body: formData,
              })
              return response.json();
            }
          }
        })
      }
    });
  });
  $(function () {
    bsCustomFileInput.init();
  });
});




