// START HIRE INTERN/PASSED
$(document).on("click", "#hire", function (e) {
    e.preventDefault();
    // var url = '<?= base_url() ?>Adminview/hire_intern';
    var url = $(this).attr("url"); // FROM ShowOnboarding();
    // <button type="button" class="btn btn-block-no-width btn-success btn-re" id="hire" url="<?= base_url() ?>Adminview/hire_intern" value="${row.id}"><i class="fa fa-user-plus"></i> PASSED</button>

    var hireId = $(this).attr("value");
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {

            // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
            HIRE_INTERN(url, hireId).then(function ($result) {

                // GET RETURN echo json_encode($result); FROM Adminview(Controller)/hire_intern(Method)
                if ($result.status == 'SUCCESS') {
                    $('#tbl_onboarding').DataTable().destroy();
                    ShowOnboarding()
                    SummaryOnboarding()
                    // Sweet Alert SUCCESS
                    Swal.fire({
                        icon: 'success',
                        text: 'New Intern Added Successfully.',
                        title: 'Success!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

            async function HIRE_INTERN(url, hireId) {

                // POST TO Adminview/hire_intern  
                var formData = new FormData();
                formData.append('ID', hireId);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }

        }
    })
});
// END HIRE INTERN/PASSED


// START RESCHEDULE INTERVIEW
$(document).on("click", "#reschedule", function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/reschedule_intern';
    var url = $(this).attr("url");
    var rescheduleId = $(this).attr("value");

    Swal.fire({
        title: 'CALENDAR',
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
            var rescheduleDateTime = $('[data-toggle="datepicker"]').val();
            // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
            RESCHEDULE_INTERVIEW(url, rescheduleId, rescheduleDateTime).then(function ($result) {

                // GET RETURN echo json_encode($result); FROM Adminview(Controller)/reschedule_intern(Method)
                if ($result.status == 'SUCCESS') {
                    $('#tbl_onboarding').DataTable().destroy();
                    ShowOnboarding()
                    SummaryOnboarding()
                    // Sweet Alert SUCCESS
                    Swal.fire({
                        icon: 'success',
                        html: ' New Schedule to: <b>' + $result.date_time + '</b>',
                        title: 'Reschedule',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
            })

            async function RESCHEDULE_INTERVIEW(url, rescheduleId, rescheduleDateTime) {

                // POST TO Adminview/reschedule_intern  
                var formData = new FormData();
                formData.append('rescheduleId', rescheduleId);
                formData.append('rescheduleDateTime', rescheduleDateTime);

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
                text: 'Failed to set reschedule date.',
                showConfirmButton: false,
                timer: 1500
            })
        }
    });
});
// END RESCHEDULE INTERVIEW


// START FAILED INTERVIEW
$(document).on("click", "#failed", function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/failed_intern';
    var url = $(this).attr("url");
    var failedId = $(this).attr("value");

    Swal.fire({
        title: 'Are you sure ?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {

            FAILED_INTERVIEW(url, failedId).then(function ($result) {

                // GET RETURN echo json_encode($result); FROM Adminview(Controller)/failed_intern(Method)
                if ($result.status == 'SUCCESS') {
                    $('#tbl_onboarding').DataTable().destroy();
                    ShowOnboarding()
                    SummaryOnboarding()
                    Swal.fire({
                        icon: 'success',
                        text: 'New Applicant Failed.',
                        title: 'Rejected!',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
            })

            async function FAILED_INTERVIEW(url, failedId) {

                // POST TO Adminview/failed_intern  
                var formData = new FormData();
                formData.append('failedId', failedId);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                return response.json();
            }
        }
    })
});
// END FAILED INTERVIEW


SummaryOnboarding()

// START SUMMARY ONBOARDING
function SummaryOnboarding() {

    // var url = '<?= base_url() ?>Adminview/total_onboarding';
    var url = $('#summary_onboarding').attr("url"); // <----- view\admin_view\onboarding\
    if (url) {
        // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
        DISPLAY_ONBOARDING_SUMMARY(url).then(function ($result) {

            // GET RETURN echo json_encode($result); FROM Adminview(Controller)/total_onboarding(Method)
            $('#hired_intern_id').text($result.hired['total_hired']);
            $('#for_interview_id').text($result.for_interview['total_for_interview']);
            $('#rescheduled_id').text($result.rescheduled['total_rescheduled']);
            $('#failed_id').text($result.failed['total_failed']);
        })

        async function DISPLAY_ONBOARDING_SUMMARY(url) {

            // GET TO Adminview/total_onboarding  
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }

}
// END SUMMARY ONBOARDING

ShowFailed()

// START VIEW FAILED
function ShowFailed() {

    // var url = '<?= base_url() ?>Adminview/display_failed';
    var url = $('#tbl_failed').attr("url"); // <----- view\admin_view\onboarding\tbody
    // <tbody id="tbl_failed" url="<?= base_url() ?>Adminview/display_failed">
    if (url) {
        DISPLAY_FAILED(url).then(function ($result) {
            if ($result) {
                var i = "1";
                $('#tbl_failed').empty();
                Array.from($result).forEach(function (row) {
                    $('#tbl_failed').append(`
                        <tr>
                            <td data-label='#'>` + i++ + `</td> 
                            <td data-label='Interview Schedule'>` + row.col_date_inte + `</td> 
                            <td data-label='Name'>` + row.col_last_name + ', ' + row.col_frst_name + `</td> 
                            <td data-label='Status'><span class='badge bg-danger'>` + row.col_user_stat + `</span></td> 
                        </tr>
                        `)
                })
            } else {
                $('#tbl_failed').empty();
            }
        })

        async function DISPLAY_FAILED(url) {

            // GET TO Adminview/display_failed
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
};
// END VIEW FAILED

ShowReschedule()
// START VIEW RESCHEDULED
function ShowReschedule() {

    // var url = '<?= base_url() ?>Adminview/display_reschedule';
    var url = $('#tbl_reschedule').attr("url"); // <----- view\admin_view\onboarding\tbody
    // <tbody id="tbl_reschedule" url="<?= base_url() ?>Adminview/display_reschedule">
    if (url) {
        DISPLAY_RESCHEDULE(url).then(function ($result) {
            if ($result) {
                var i = "1";
                $('#tbl_reschedule').empty();
                Array.from($result).forEach(function (row) {
                    $('#tbl_reschedule').append(`
                        <tr>
                            <td data-label='#'>` + i++ + `</td> 
                            <td data-label='To Interview Schedule'>` + row.col_date_inte + `</td>
                            <td data-label='From Interview Schedule'>` + row.col_inte_resc + `</td>
                            <td data-label='Name'>` + row.col_last_name + ', ' + row.col_frst_name + `</td> 
                            <td data-label='Status'><span class='badge bg-warning'>` + row.col_user_stat + `</span></td> 
                        </tr>
                        `)
                })
            } else {
                $('#tbl_reschedule').empty();
            }
        })
        async function DISPLAY_RESCHEDULE(url) {

            // GET TO Adminview/display_reschedule
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
};
// END VIEW RESCHEDULED


ShowForInterviewOnBoarding()

// START VIEW FOR INTERVIEW
function ShowForInterviewOnBoarding() {
    // var url = '<?= base_url() ?>Adminview/display_for_interview';
    var url = $('#tbl_for_interview_onboarding').attr("url"); // <----- view\admin_view\onboarding\tbody
    // <tbody id="tbl_for_interview_onboarding" url="<?= base_url() ?>Adminview/display_reschedule">
    if (url) {
        DISPLAY_FOR_INTERVIEW(url).then(function ($result) {
            if ($result) {
                var i = "1";
                $('#tbl_for_interview_onboarding').empty();
                Array.from($result).forEach(function (row) {
                    $('#tbl_for_interview_onboarding').append(`
                        <tr>
                            <td data-label='#'>` + i++ + `</td> 
                            <td data-label='Date Submitted'>` + row.col_date_sbmt + `</td>
                            <td data-label='Name'>` + row.col_last_name + ', ' + row.col_frst_name + `</td> 
                            <td data-label='Interview Schedule'><span class='badge bg-primary'>` + row.col_date_inte + `</span></td> 
                        </tr>
                        `)
                })
            } else {
                $('#tbl_for_interview_onboarding').empty();
            }
        })
        async function DISPLAY_FOR_INTERVIEW(url) {

            // GET TO Adminview/display_failed
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
};
// END VIEW FOR INTERVIEW


ShowHiredIntern()

// START VIEW HIRED INTERN
function ShowHiredIntern() {
    // var url = '<?= base_url() ?>Adminview/display_hired_intern';
    var url = $('#tbl_hired_intern').attr("url"); // <----- view\admin_view\onboarding\tbody
    // <tbody id="tbl_hired_intern" url="<?= base_url() ?>Adminview/display_hired_intern">
    if (url) {
        DISPLAY_HIRED_INTERN(url).then(function ($result) {
            if ($result) {
                var i = "1";
                $('#tbl_hired_intern').empty();
                Array.from($result).forEach(function (row) {
                    $('#tbl_hired_intern').append(`
                        <tr>
                            <td data-label='#'>` + i++ + `</td> 
                            <td data-label='Date Hired'>` + row.col_star_date + `</td>
                            <td data-label='Name'>` + row.col_last_name + ', ' + row.col_frst_name + `</td> 
                            <td data-label='Hired By'>` + row.col_inte_name + `</td>
                            <td data-label='Status'><span class='badge bg-success'>` + row.col_inte_stat + `</span></td> 
                        </tr>
                        `)
                })
            } else {
                $('#tbl_hired_intern').empty();
            }
        })
        async function DISPLAY_HIRED_INTERN(url) {

            // GET TO Adminview/display_hired_intern
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }
};
// END VIEW HIRED INTERN


// START MORE INFO LIST FAILED
$(document).on("click", "#list_failed", function (e) {
    e.preventDefault();
    $('#view_failed').modal('show');
    ShowFailed()
});
// END MORE INFO LIST FAILED

// START MORE INFO LIST RESCHEDULE
$(document).on("click", "#list_reschedule", function (e) {
    e.preventDefault();
    $('#view_reschedule').modal('show');
    ShowReschedule()
});
// END MORE INFO LIST RESCHEDULE

// START MORE INFO LIST FOR INTERVIEW
$(document).on("click", "#list_for_interview_onboarding", function (e) {
    e.preventDefault();
    $('#view_for_interview_onboarding').modal('show');
    ShowForInterviewOnBoarding()
});
// END MORE INFO LIST FOR INTERVIEW

// START MORE INFO LIST HIRED INTERN
$(document).on("click", "#list_hired_intern", function (e) {
    e.preventDefault();
    $('#view_hired_intern').modal('show');
    ShowHiredIntern()
});
// END MORE INFO LIST HIRED INTERN





// DOWNLOAD FILES
$('#download_resume').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
    window.location.href = url + '?filename=' + filename;
})

$('#download_recommendation').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
    window.location.href = url + '?filename=' + filename;
})

$('#download_waiver').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    window.location.href = url + '?filename=' + filename;
})

$('#download_agreement').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Adminview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    window.location.href = url + '?filename=' + filename;
})
