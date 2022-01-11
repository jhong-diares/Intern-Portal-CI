// START INTERNSHIP DETAILS VALIDATION
$().ready(function () {
    $(function () {
        $('#quickForm_internship').validate({
            rules: {
                INF_SCHL: {
                    required: true
                },
                INF_SCON: {
                    required: true
                },
                INF_ADVS: {
                    required: true
                },
                INF_ACON: {
                    required: true
                },
                SELC_COUR: {
                    required: true
                },
                INF_HOUR: {
                    required: true,
                    number: true,
                    maxlength: 3,
                    minlength: 2
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
                // var url = '<?= base_url() ?>Internview/update_internship';
                var url = $('#quickForm_internship').attr("action");

                // GET INPUT FIELD VALUE BY ID
                var id = $('#INF_USER_ID_INTR').val();
                var schoolname = $('#INF_SCHL').val();
                var schoolcontact = $('#INF_SCON').val();
                var advisername = $('#INF_ADVS').val();
                var advisercontact = $('#INF_ACON').val();
                var course = $('#SELC_COUR').val();
                var hour = $('#INF_HOUR').val();

                // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
                SAVE_INTERNSHIP_DETAILS(url, id, schoolname, schoolcontact, advisername, advisercontact, course, hour).then(function ($result) {

                    // GET RETURN echo json_encode($result); FROM Internview(Controller)/update_internship(Method)
                    if ($result.status == 'SUCCESS') {

                        // Sweet Alert SUCCESS
                        Swal.fire({
                            icon: 'success',
                            text: ' Update Information Successfully.',
                            title: 'Success !',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        // Schedule Tab Show
                        $('#schedule-tab').removeClass('disabled');
                        $('#custom-tabs-four-tab a[href="#Schedule"]').tab('show')
                    }

                    if ($result.status == 'FAILED') {

                        // Sweet Alert FAILED
                        Swal.fire({
                            icon: 'error',
                            text: ' Please complete all missing fields.',
                            title: 'Failed !',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                })

                async function SAVE_INTERNSHIP_DETAILS(url, id, schoolname, schoolcontact, advisername, advisercontact, course, hour) {

                    // POST TO Internview/update_internship 
                    var formData = new FormData(quickForm_internship);
                    formData.append('ID', id);
                    formData.append('SCHOOLNAME', schoolname);
                    formData.append('SCHOOLCONTACT', schoolcontact);
                    formData.append('ADVISERNAME', advisername);
                    formData.append('ADVISERCONTACT', advisercontact);
                    formData.append('COURSE', course);
                    formData.append('HOUR', hour);

                    const response = await fetch(url, {
                        method: 'POST',
                        body: formData,
                    })
                    return response.json();
                }
            }
        });
    });
});
// END INTERNSHIP DETAILS VALIDATION