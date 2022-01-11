// <!-- START TIME IN / TIME OUT / DISPLAY ATTENDANCE -->
$(document).ready(function () {
    var momentNow = moment();
    var interval = setInterval(function () {
        var momentNow = moment();
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

    ShowAttendance()

    function ShowAttendance() {
        // var url = '<?= base_url() ?>Internview/display_attendance';
        var url = $('#tbl_attendance').attr('url');
        if (url) {
            DISPLAY_ATTENDANCE(url).then(function ($result) {
                $('#tbl_attendance').html('');
                if ($result.status == 'SUCCESS') {
                    Array.from($result.displayAttendance).forEach(function (row) {
                        $('#tbl_attendance').append(`
                        <tr>
                            <td data-label='#'>` + row.id + `</td> 
                            <td data-label='Date'>` + row.col_attn_date + `</td> 
                            <td data-label='Time In'><span class='badge bg-success'>` + row.col_time_in + `</span></td> 
                            <td data-label='Time Out'><span class='badge bg-danger'>` + row.col_time_out + `</span></td> 
                        </tr>
                        `)
                    })
                }
            })
        }
        async function DISPLAY_ATTENDANCE(url) {
            // GET TO Internview/display_attendance  
            const response = await fetch(url, {
                method: 'GET',
            })
            return response.json();
        }
    }

    // START TIME IN
    $('.TimeIn').on('click', function () {
        Swal.fire({
            title: 'Do you want to Time In?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Time In'
        }).then((result) => {
            if (result.isConfirmed) {

                // var url = '<?= base_url() ?>Internview/insert_attendance';
                var url = $(this).attr('url');
                var id = $('#intern_id').val();
                var intern_name = $('#lastname').val() + ', ' + $('#firstname').val();
                var date_today = $('#today').text().substring(0, 3) + ', ' + $('#month').text() + ' ' + $('#day').text() + ' ' + $('#year').text();
                var time = $('#hours').text() + $('#minutes').text();
                var phase = $('#phase').text();

                // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
                SAVE_TIME_IN(url, id, intern_name, date_today, time, phase).then(function ($result) {

                    var timeIn = $result.time;

                    // GET RETURN echo json_encode($result); FROM Internview(Controller)/insert_attendance(Method)
                    if ($result.status == 'SUCCESS') {

                        // Sweet Alert SUCCESS
                        Swal.fire({
                            icon: 'success',
                            html: ' Time IN Successful: <b>' + timeIn + '</b>',
                            title: 'Success !',
                            showConfirmButton: false,
                            timer: 1700
                        })
                        ShowAttendance()
                    }
                    if ($result.status == 'FAILED') {
                        // Sweet Alert FAILED
                        Swal.fire({
                            icon: 'error',
                            html: ' You are already IN: <b>' + timeIn + '</b>',
                            title: 'Failed !',
                            showConfirmButton: false,
                            timer: 1700
                        })
                    }
                    ShowAttendance()
                })

                async function SAVE_TIME_IN(url, id, intern_name, date_today, time, phase) {

                    // POST TO Internview/insert_attendance  
                    var formData = new FormData();
                    formData.append('ID', id);
                    formData.append('INTERN_NAME', intern_name);
                    formData.append('DATE_TODAY', date_today);
                    formData.append('TIME', time);
                    formData.append('PHASE', phase);

                    const response = await fetch(url, {
                        method: 'POST',
                        body: formData,
                    })
                    return response.json();
                }

            }
        });
    })
    // END TIME IN

    // START TIME OUT
    $('.TimeOut').on('click', function () {
        Swal.fire({
            title: 'Do you want to Time Out?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Time Out'
        }).then((result) => {
            if (result.isConfirmed) {
                // var url = '<?= base_url() ?>Internview/update_attendance';
                var url = $(this).attr('url');
                var id = $('#intern_id').val();
                var time = $('#hours').text() + $('#minutes').text();
                var phase = $('#phase').text();

                // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
                SAVE_TIME_OUT(url, id, time, phase).then(function ($result) {
                    var timeIn = $result.time;

                    // GET RETURN echo json_encode($result); FROM Internview(Controller)/update_attendance(Method)
                    if ($result.status == 'SUCCESS') {

                        // Sweet Alert SUCCESS
                        Swal.fire({
                            icon: 'success',
                            html: ' Time OUT Successful: <b>' + timeIn + '</b>',
                            title: 'Success !',
                            showConfirmButton: false,
                            timer: 1700
                        })
                        ShowAttendance()
                    }
                    if ($result.status == 'FAILED') {
                        // Sweet Alert FAILED
                        Swal.fire({
                            icon: 'error',
                            html: ' You are already OUT: <b>' + timeIn + '</b>',
                            title: 'Failed !',
                            showConfirmButton: false,
                            timer: 1700
                        })
                    }
                    ShowAttendance()
                    if ($result.status == 'NO_TIME_IN') {
                        // Sweet Alert NO_TIME_IN
                        Swal.fire({
                            icon: 'error',
                            html: ' No time in record for today.',
                            title: 'Time in not found !',
                            showConfirmButton: false,

                        })
                    }
                    ShowAttendance()
                })

                async function SAVE_TIME_OUT(url, id, time, phase) {

                    // POST TO Internview/update_attendance  
                    var formData = new FormData();
                    formData.append('ID', id);
                    formData.append('TIME', time);
                    formData.append('PHASE', phase);

                    const response = await fetch(url, {
                        method: 'POST',
                        body: formData,
                    })
                    return response.json();
                }

            }
        })
    });
    // END TIME OUT
});
// <!-- END TIME IN / TIME OUT / DISPLAY ATTENDANCE -->