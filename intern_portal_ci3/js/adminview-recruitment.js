
// START ACCEPT REQUEST
$(document).on("click", "#accept", function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/accept_request';
    var url = $(this).attr("url");
    var acceptId = $(this).attr("value");
    Swal.fire({
        title: 'SET AN INTERVIEW',
        html: '<input data-toggle="datepicker" type="text" id="#interviewdatetime" class="swal2-input">',
        confirmButtonText: 'Confirm',
        showCancelButton: true,
        onOpen: function () {
            $('[data-toggle="datepicker"]').datetimepicker({
                startView: 2,
                autoHide: true,
                inline: true,
                zIndex: 999999,
                icons: {
                    time: 'far fa-clock'
                }
            });
        }
    }).then(function (result) {
        if (result.isConfirmed) {
            var acceptDateTime = $('[data-toggle="datepicker"]').val();
            var acceptBy = $('#account_login').text();

            // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
            ACCEPT_REQUEST(url, acceptId, acceptDateTime, acceptBy).then(function ($result) {

                // GET RETURN echo json_encode($result); FROM Adminview(Controller)/accept_request(Method)
                if ($result.status == 'SUCCESS') {
                    $('#tbl_request').DataTable().destroy();
                    ShowRequest()
                    SummaryRequest()
                    Swal.fire({
                        icon: 'success',
                        text: 'New Onboarding Added.',
                        title: 'Success!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

            async function ACCEPT_REQUEST(url, acceptId, acceptDateTime, acceptBy) {

                // POST TO Adminview/accept_request  
                var formData = new FormData();
                formData.append('acceptId', acceptId);
                formData.append('acceptDateTime', acceptDateTime);
                formData.append('acceptBy', acceptBy);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }

        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Interview Schedule has not been set.',
                showConfirmButton: false,
                timer: 1500
            })
        }
    });
});
// END ACCEPT REQUEST


// START QUOTA LIMIT
$(document).on("click", "#limit", function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/limit_request';
    var url = $(this).attr("url");
    var limitId = $(this).attr("value");


    Swal.fire({
        title: 'Are you sure to limit?',
        html: '<input type="text" id="limit_reason" class="swal2-input" placeholder="Reason : ">',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {

            var limitBy = $('#account_login').text();
            var limitReason = $('#limit_reason').val();

            // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
            QUOTA_LIMIT(url, limitId, limitBy, limitReason).then(function ($result) {

                // GET RETURN echo json_encode($result); FROM Adminview(Controller)/limit_request(Method)
                if ($result.status == 'SUCCESS') {
                    $('#tbl_request').DataTable().destroy();
                    ShowRequest()
                    SummaryRequest()
                    Swal.fire({
                        icon: 'success',
                        text: 'New Application has mark Quota Limited.',
                        title: 'Quota Limited!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

            async function QUOTA_LIMIT(url, limitId, limitBy, limitReason) {

                // POST TO Adminview/limit_request  
                var formData = new FormData();
                formData.append('limitId', limitId);
                formData.append('limitBy', limitBy);
                formData.append('limitReason', limitReason);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }
        }
    })
});
// END QUOTA LIMIT


// START REJECT REQUEST
$(document).on("click", "#reject", function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/reject_request';
    var url = $(this).attr("url");
    var rejectId = $(this).attr("value");

    Swal.fire({
        title: 'Are you sure to reject?',
        // text: "You won't be able to revert this!",
        html: '<input type="text" id="reject_reason" class="swal2-input" placeholder="Reason : ">',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {
            var rejectBy = $('#account_login').text();
            var rejectReason = $('#reject_reason').val();

            // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
            REJECT_REQUEST(url, rejectId, rejectBy, rejectReason).then(function ($result) {

                // GET RETURN echo json_encode($result); FROM Adminview(Controller)/reject_request(Method)
                if ($result.status == 'SUCCESS') {
                    $('#tbl_request').DataTable().destroy();
                    ShowRequest()
                    SummaryRequest()
                    Swal.fire({
                        icon: 'success',
                        text: 'New Application has been rejected.',
                        title: 'Rejected!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

            async function REJECT_REQUEST(url, rejectId, rejectBy, rejectReason) {

                // POST TO Adminview/reject_request  
                var formData = new FormData();
                formData.append('rejectId', rejectId);
                formData.append('rejectBy', rejectBy);
                formData.append('rejectReason', rejectReason);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }
        }
    })
});
// END REJECT REQUEST


ShowRejected()
// START DISPLAY REJECTED 
function ShowRejected() {

    // var url = '<?= base_url() ?>Adminview/display_rejected';
    var url = $('#tbl_rejected').attr("url"); // <----- view\admin_view\recruitment\tbody
    // <tbody id="tbl_rejected" url="<?= base_url() ?>Adminview/display_rejected">

    if (url) {
        DISPLAY_REJECTED(url).then(function ($result) {
            if ($result) {
                var i = "1";
                $('#tbl_rejected').empty();
                Array.from($result).forEach(function (row) {
                    $('#tbl_rejected').append(`
                        <tr>
                            <td data-label='#'>` + i++ + `</td> 
                            <td data-label='Name'>` + row.col_last_name + ', ' + row.col_frst_name + `</td> 
                            <td data-label='Rejected By'>` + row.col_reje_by + `</td> 
                            <td data-label='Reason'><span class='badge bg-danger'>` + row.col_reje_reas + `</span></td> 
                        </tr>
                        `)
                })
            } else {
                $('#tbl_rejected').empty();
            }
        })

        async function DISPLAY_REJECTED(url) {
            // GET TO Adminview/display_rejected  
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
};
// END DISPLAY REJECTED


ShowQuotaLimit()
// START DISPLAY QUOTA LIMIT 
function ShowQuotaLimit() {

    // var url = '<?= base_url() ?>Adminview/display_quota_limit';
    var url = $('#tbl_quota_limit').attr("url"); // <----- view\admin_view\recruitment\tbody

    // <tbody id="tbl_quota_limit" url="<?= base_url() ?>Adminview/display_quota_limit">
    // </tbody>
    if (url) {
        DISPLAY_QUOTA_LIMIT(url).then(function ($result) {
            if ($result) {
                var i = "1";
                $('#tbl_quota_limit').empty();
                Array.from($result).forEach(function (row) {
                    $('#tbl_quota_limit').append(`
                        <tr>
                            <td data-label='#'>` + i++ + `</td> 
                            <td data-label='Name'>` + row.col_last_name + ', ' + row.col_frst_name + `</td> 
                            <td data-label='Limit By'>` + row.col_reje_by + `</td> 
                            <td data-label='Reason'><span class='badge bg-warning'>` + row.col_reje_reas + `</span></td> 
                        </tr>
                        `)
                })
            } else {
                $('#tbl_quota_limit').empty();
            }
        })

        async function DISPLAY_QUOTA_LIMIT(url) {
            // GET TO Adminview/display_quota_limit  
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
};
// END DISPLAY QUOTA LIMIT


ShowForInterview()
// START DISPLAY FOR INTERVIEW 
function ShowForInterview() {
    // var url = '<?= base_url() ?>Adminview/display_for_interview';
    var url = $('#tbl_for_interview').attr("url"); // <----- view\admin_view\recruitment\tbody

    // <tbody id="tbl_for_interview" url="<?= base_url() ?>Adminview/display_for_interview">
    // </tbody>

    if (url) {
        DISPLAY_FOR_INTERVIEW(url).then(function ($result) {
            if ($result) {
                var i = "1";
                $('#tbl_for_interview').empty();
                Array.from($result).forEach(function (row) {
                    $('#tbl_for_interview').append(`
                        <tr>
                            <td data-label='#'>` + i++ + `</td> 
                            <td data-label='Date Submitted'>` + row.col_date_sbmt + `</td> 
                            <td data-label='Name'>` + row.col_last_name + ', ' + row.col_frst_name + `</td>
                            <td data-label='Interview Schedule'><span class='badge bg-success'>` + row.col_date_inte + `</span></td> 
                        </tr>
                        `)
                })
            } else {
                $('#tbl_for_interview').empty();
            }
        })

        async function DISPLAY_FOR_INTERVIEW(url) {
            // GET TO Adminview/display_for_interview  
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
};
// END DISPLAY FOR INTERVIEW


ShowPendingRequest()
// START DISPLAY PENDING REQUEST
function ShowPendingRequest() {
    // var url = '<?= base_url() ?>Adminview/display_pending_request';
    var url = $('#tbl_pending_request').attr("url"); // <----- view\admin_view\recruitment\tbody

    // <tbody id="tbl_pending_request" url="<?= base_url() ?>Adminview/display_pending_request">
    // </tbody>
    if (url) {
        DISPLAY_PENDING_REQUEST(url).then(function ($result) {
            if ($result) {
                var i = "1";
                $('#tbl_pending_request').empty();
                Array.from($result).forEach(function (row) {
                    $('#tbl_pending_request').append(`
                        <tr>
                            <td data-label='#'>` + i++ + `</td> 
                            <td data-label='Date Submitted'>` + row.col_date_sbmt + `</td> 
                            <td data-label='Name'>` + row.col_last_name + ', ' + row.col_frst_name + `</td>
                            <td data-label='Status'><span class='badge bg-info'>` + row.col_user_stat + `</span></td> 
                        </tr>
                        `)
                })
            } else {
                $('#tbl_pending_request').empty();
            }
        })

        async function DISPLAY_PENDING_REQUEST(url) {
            // GET TO Adminview/display_pending_request  
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
};
// END DISPLAY PENDING REQUEST


SummaryRequest();

// START SUMMARY REQUEST
function SummaryRequest() {
    // var url = '<?= base_url() ?>Adminview/total_recruitment';
    var url = $('#summary_request').attr("url"); // <----- view\admin_view\recruitment\

    // <div class="container-fluid" id="summary_request" url="<?= base_url() ?>Adminview/total_recruitment">

    if (url) {
        DISPLAY_REQUEST_SUMMARY(url).then(function ($result) {

            // GET RETURN echo json_encode($result); FROM Adminview(Controller)/total_recruitment(Method)
            $('#pending_id').text($result.pending['total_pending']);
            $('#accepted_id').text($result.accepted['total_accepted']);
            $('#quota_limited_id').text($result.quota_limited['total_quota_limit']);
            $('#rejected_id').text($result.rejected['total_rejected']);

        })

        async function DISPLAY_REQUEST_SUMMARY(url) {
            // GET TO Adminview/total_recruitment  
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
}
// END SUMMARY REQUEST


// START MORE INFO LIST REJECTED
$(document).on("click", "#list_rejected", function (e) {
    e.preventDefault();
    $('#view_rejected').modal('show');
    ShowRejected()
});
// END MORE INFO LIST REJECTED


// START MORE INFO LIST QUOTA LIMIT
$(document).on("click", "#list_quota_limit", function (e) {
    e.preventDefault();
    $('#view_quota_limit').modal('show');
    ShowQuotaLimit()
});
// END MORE INFO LIST QUOTA LIMIT


// START MORE INFO LIST FOR INTERVIEW
$(document).on("click", "#list_for_interview", function (e) {
    e.preventDefault();
    $('#view_for_interview').modal('show');
    ShowForInterview()
});
// END MORE INFO LIST FOR INTERVIEW


// START MORE INFO LIST PENDING REQUEST
$(document).on("click", "#list_pending_request", function (e) {
    e.preventDefault();
    $('#view_pending_request').modal('show');
    ShowPendingRequest()
});
// END MORE INFO LIST PENDING REQUEST



// DOWNLOAD FILES LINK
$('#download_resume').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    if (!filename) {
        Swal.fire({
            icon: 'error',
            text: 'File does not exist',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        window.location.href = url + '?filename=' + filename;
    }
})

$('#download_recommendation').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    if (!filename) {
        Swal.fire({
            icon: 'error',
            text: 'File does not exist',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        window.location.href = url + '?filename=' + filename;
    }
})

$('#download_waiver').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    if (!filename) {
        Swal.fire({
            icon: 'error',
            text: 'File does not exist',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        window.location.href = url + '?filename=' + filename;
    }
})

$('#download_agreement').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    if (!filename) {
        Swal.fire({
            icon: 'error',
            text: 'File does not exist',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        window.location.href = url + '?filename=' + filename;
    }
})


// DOWNLOAD FILES BUTTON
$('#download_resume_button').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    if (!filename) {
        Swal.fire({
            icon: 'error',
            text: 'File does not exist',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        window.location.href = url + '?filename=' + filename;
    }
})

$('#download_recommendation_button').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    if (!filename) {
        Swal.fire({
            icon: 'error',
            text: 'File does not exist',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        window.location.href = url + '?filename=' + filename;
    }
})

$('#download_waiver_button').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    if (!filename) {
        Swal.fire({
            icon: 'error',
            text: 'File does not exist',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        window.location.href = url + '?filename=' + filename;
    }
})

$('#download_agreement_button').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");
    if (!filename) {
        Swal.fire({
            icon: 'error',
            text: 'File does not exist',
            title: 'Failed !',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        window.location.href = url + '?filename=' + filename;
    }

})

// SAVE
$().ready(function () {
    $(function () {
        $('#quickForm_intern_details').validate({
            rules: {
                intern_lastname: {
                    required: true
                },
                intern_firstname: {
                    required: true
                },
                intern_middlename: {
                    required: true
                },
                intern_address: {
                    required: true
                },
                intern_email: {
                    email: true,
                    required: true
                },
                intern_contact: {
                    required: true
                },
                intern_bday: {
                    required: true,
                    email: true
                },
                intern_gender: {
                    required: true
                },
                intern_skillset: {
                    required: true
                },
                intern_course: {
                    required: true
                },
                intern_schoolname: {
                    required: true
                },
                intern_schoolcontact: {
                    required: true
                },
                intern_advisername: {
                    required: true
                },
                intern_advisercontact: {
                    required: true
                },
                intern_hours: {
                    required: true
                },
                intern_schedule: {
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
                Swal.fire({
                    title: 'Update ?',
                    text: 'Overwrite existing information',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#28a745',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Confirm'
                }).then((result) => {
                    if (result.isConfirmed) {

                        var url = $('#quickForm_intern_details').attr("action");
                        var id = $('#intern_id').val();

                        var lastname = $('#intern_lastname').val();
                        var firstname = $('#intern_firstname').val();
                        var middlename = $('#intern_middlename').val();

                        var address = $('#intern_address').val();
                        var email = $('#intern_email').val();
                        var contact = $('#intern_contact').val();
                        var birthday = $('#intern_bday').val();
                        var gender = $('#intern_gender').val();
                        var skillset = $('#intern_skillset').val();

                        var course = $('#intern_course').val();
                        var schoolaname = $('#intern_schoolname').val();
                        var schoolcontact = $('#intern_schoolcontact').val();
                        var advisername = $('#intern_advisername').val();
                        var advisercontact = $('#intern_advisercontact').val();
                        var hours = $('#intern_hours').val();
                        var schedule = $('#Monday').val() + '/' + $('#Tuesday').val() + '/' + $('#Wednesday').val() + '/' + $('#Thursday').val() + '/' + $('#Friday').val() + '/' + $('#Saturday').val() + '/';


                        UPDATE_INTERN_INFORMATION(url, id, lastname, firstname, middlename, address, email, contact, birthday, gender, skillset, course,
                            schoolaname, schoolcontact, advisername, advisercontact, hours, schedule).then(function ($result) {
                                if ($result.status == "SUCCESS") {
                                    Swal.fire({
                                        icon: 'success',
                                        text: 'Update Information Successfully',
                                        title: 'Success !',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                }
                                if ($result.status == "INCOMPLETE") {
                                    Swal.fire({
                                        icon: 'error',
                                        text: 'Incomplete fields',
                                        title: 'Failed !',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                }
                            })

                        async function UPDATE_INTERN_INFORMATION(url, id, lastname, firstname, middlename, address, email, contact, birthday, gender, skillset, course,
                            schoolaname, schoolcontact, advisername, advisercontact, hours, schedule) {

                            var formData = new FormData(quickForm_intern_details);
                            formData.append('ID', id);

                            formData.append('LASTNAME', lastname);
                            formData.append('FIRSTNAME', firstname);
                            formData.append('MIDDLENAME', middlename);

                            formData.append('ADDRESS', address);
                            formData.append('EMAIL', email);
                            formData.append('CONTACT', contact);
                            formData.append('BIRTHDAY', birthday);
                            formData.append('GENDER', gender);
                            formData.append('SKILLSET', skillset);
                            formData.append('COURSE', course);
                            formData.append('SCHOOLNAME', schoolaname);
                            formData.append('SCHOOLCONTACT', schoolcontact);
                            formData.append('ADVISERNAME', advisername);
                            formData.append('ADVISERCONTACT', advisercontact);
                            formData.append('HOURS', hours);
                            formData.append('SCHEDULE', schedule);

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
});

$('#add_file_resume').change(function () {

    var f = this.files[0];
    var name = f.name;

    // $('#intern_resume').attr("value", name);
    $('#intern_resume').text(name);
});

$('#add_file_waiver').change(function () {

    var f = this.files[0];
    var name = f.name;

    // $('#intern_resume').attr("value", name);
    $('#intern_waiver').text(name);
});

$('#add_file_recommendation').change(function () {

    var f = this.files[0];
    var name = f.name;

    // $('#intern_resume').attr("value", name);
    $('#intern_recommendation').text(name);
});

$('#add_file_agreement').change(function () {

    var f = this.files[0];
    var name = f.name;

    // $('#intern_resume').attr("value", name);
    $('#intern_agreement').text(name);
});

// ADD FILE
getFileResume = function () {
    $('#add_file_resume').show();
    $('#add_file_resume').focus();
    $('#add_file_resume').click();
    $('#add_file_resume').hide();
}

getFileRecommendation = function () {
    $('#add_file_recommendation').show();
    $('#add_file_recommendation').focus();
    $('#add_file_recommendation').click();
    $('#add_file_recommendation').hide();
}

getFileWaiver = function () {
    $('#add_file_waiver').show();
    $('#add_file_waiver').focus();
    $('#add_file_waiver').click();
    $('#add_file_waiver').hide();
}

getFileAgreement = function () {
    $('#add_file_agreement').show();
    $('#add_file_agreement').focus();
    $('#add_file_agreement').click();
    $('#add_file_agreement').hide();
}

// DELETE RESUME
$('#delete_resume_button').on('click', function (e) {
    e.preventDefault();

    Swal.fire({
        title: 'Delete ?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {

            var url = $(this).attr("url");
            var filename = $(this).attr("value");
            var id = $(this).attr("internId");

            DELETE_FILE_RESUME(url, id, filename).then(function ($result) {
                if ($result.status == "SUCCESS") {
                    Swal.fire({
                        icon: 'success',
                        text: 'File has been deleted',
                        title: 'Success !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#intern_resume').empty();
                    $('#download_resume_button').attr("value", '');
                    $('#delete_resume_button').attr("value", '');
                }
                if ($result.status == "FAILED") {
                    Swal.fire({
                        icon: 'error',
                        text: 'Something went wrong',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                if ($result.status == "INVALID") {
                    Swal.fire({
                        icon: 'error',
                        text: 'File does not exist',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

            async function DELETE_FILE_RESUME(url, id, filename) {

                var formData = new FormData();
                formData.append('ID', id);
                formData.append('FILENAME', filename);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }


        }
    })
})

// DELETE RECOMMENDATION
$('#delete_recommendation_button').on('click', function (e) {
    e.preventDefault();

    Swal.fire({
        title: 'Delete ?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {

            var url = $(this).attr("url");
            var filename = $(this).attr("value");
            var id = $(this).attr("internId");

            DELETE_FILE_RECOMMENDATION(url, id, filename).then(function ($result) {
                if ($result.status == "SUCCESS") {
                    Swal.fire({
                        icon: 'success',
                        text: 'File has been deleted',
                        title: 'Success !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#intern_recommendation').empty();
                    $('#download_recommendation_button').attr("value", '');
                    $('#delete_recommendation_button').attr("value", '');
                }
                if ($result.status == "FAILED") {
                    Swal.fire({
                        icon: 'error',
                        text: 'Something went wrong',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                if ($result.status == "INVALID") {
                    Swal.fire({
                        icon: 'error',
                        text: 'File does not exist',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

            async function DELETE_FILE_RECOMMENDATION(url, id, filename) {

                var formData = new FormData();
                formData.append('ID', id);
                formData.append('FILENAME', filename);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }


        }
    })
})

// DELETE WAIVER
$('#delete_waiver_button').on('click', function (e) {
    e.preventDefault();

    Swal.fire({
        title: 'Delete ?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {

            var url = $(this).attr("url");
            var filename = $(this).attr("value");
            var id = $(this).attr("internId");

            DELETE_FILE_WAIVER(url, id, filename).then(function ($result) {
                if ($result.status == "SUCCESS") {
                    Swal.fire({
                        icon: 'success',
                        text: 'File has been deleted',
                        title: 'Success !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#intern_waiver').empty();
                    $('#download_waiver_button').attr("value", '');
                    $('#delete_waiver_button').attr("value", '');
                }
                if ($result.status == "FAILED") {
                    Swal.fire({
                        icon: 'error',
                        text: 'Something went wrong',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                if ($result.status == "INVALID") {
                    Swal.fire({
                        icon: 'error',
                        text: 'File does not exist',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

            async function DELETE_FILE_WAIVER(url, id, filename) {

                var formData = new FormData();
                formData.append('ID', id);
                formData.append('FILENAME', filename);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }


        }
    })
})

// DELETE AGREEMENT
$('#delete_agreement_button').on('click', function (e) {
    e.preventDefault();

    Swal.fire({
        title: 'Delete ?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {

            var url = $(this).attr("url");
            var filename = $(this).attr("value");
            var id = $(this).attr("internId");

            DELETE_FILE_AGREEMENT(url, id, filename).then(function ($result) {
                if ($result.status == "SUCCESS") {
                    Swal.fire({
                        icon: 'success',
                        text: 'File has been deleted',
                        title: 'Success !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#intern_agreement').empty();
                    $('#download_agreement_button').attr("value", '');
                    $('#delete_agreement_button').attr("value", '');
                }
                if ($result.status == "FAILED") {
                    Swal.fire({
                        icon: 'error',
                        text: 'Something went wrong',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                if ($result.status == "INVALID") {
                    Swal.fire({
                        icon: 'error',
                        text: 'File does not exist',
                        title: 'Failed !',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

            async function DELETE_FILE_AGREEMENT(url, id, filename) {

                var formData = new FormData();
                formData.append('ID', id);
                formData.append('FILENAME', filename);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }


        }
    })
})