// START PERSONAL INFORMATION VALIDATION
$().ready(function () {
    $(function () {
        $('#quickForm_personal').validate({
            rules: {
                INF_EMAI: {
                    required: true,
                    email: true
                },
                INF_LAST: {
                    required: true
                },
                INF_FRST: {
                    required: true
                },
                INF_MDLE: {
                    required: true
                },
                INF_ADDR: {
                    required: true
                },
                INF_CONT: {
                    required: true
                },
                INF_BRTH: {
                    required: true
                },
                SELC_GNDR: {
                    required: true
                },
                SELC_SKLL: {
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
                // var url = '<?= base_url() ?>Internview/update_personal';
                var url = $('#quickForm_personal').attr("action");

                // GET INPUT FIELD VALUE BY ID
                var id = $('#INF_USER_ID').val();
                var lastname = $('#INF_LAST').val();
                var firstname = $('#INF_FRST').val();
                var middlename = $('#INF_MDLE').val();
                var address = $('#INF_ADDR').val();
                var email = $('#INF_EMAI').val();
                var contact = $('#INF_CONT').val();
                var birthday = $('#INF_BRTH').val();
                var gender = $('#SELC_GNDR').val();
                var skill = $('#skill_set').val();
                // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
                SAVE_PERSONAL_INFORMATION(url, id, lastname, firstname, middlename, address,
                    email, contact, birthday, gender, skill).then(function ($result) {
                        // GET RETURN echo json_encode($result); FROM Internview(Controller)/update_personal(Method)
                        if ($result.status == 'SUCCESS') {
                            // Sweet Alert SUCCESS
                            Swal.fire({
                                icon: 'success',
                                text: ' Update Information Successfully.',
                                title: 'Success !',
                                showConfirmButton: false,
                                timer: 1500
                            })

                            // Internship Details Tab Show
                            $('#internship-tab').removeClass('disabled');
                            $('#custom-tabs-four-tab a[href="#Intern"]').tab('show')
                        }

                        if ($result.status == 'FAILED') {
                            // Sweet Alert FAILED
                            Swal.fire({
                                icon: 'error',
                                text: ' Please complete all missing fields',
                                title: 'Failed !',
                                showConfirmButton: false,
                            })
                        }

                        if ($result.status_img == 'FAILED') {
                            // Sweet Alert UPLOAD IMAGE FAILED
                            Swal.fire({
                                icon: 'error',
                                text: ' Please attach supported file type (JPG, PNG, JPEG)',
                                title: 'Failed !',
                                showConfirmButton: false,
                            })
                        }

                    })

                async function SAVE_PERSONAL_INFORMATION(url, id, lastname, firstname, middlename, address,
                    email, contact, birthday, gender, skill) {

                    // POST TO Internview/update_personal  
                    var formData = new FormData(quickForm_personal);
                    formData.append('ID', id);
                    formData.append('LASTNAME', lastname);
                    formData.append('FIRSTNAME', firstname);
                    formData.append('MIDDLENAME', middlename);
                    formData.append('ADDRESS', address);
                    formData.append('EMAIL', email);
                    formData.append('CONTACT', contact);
                    formData.append('BIRTHDAY', birthday);
                    formData.append('GENDER', gender);
                    formData.append('SKILL', skill);

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
// END PERSONAL INFORMATION VALIDATION


// START SELECT2
$(function () {
    $('.SELC_SKLL').select2({});

    $('.SELC_SKLL').on('change', function () {
        var data = $(".SELC_SKLL option:selected").text();
        $("#skill_set").val(data);
    })
});
// END SELECT2