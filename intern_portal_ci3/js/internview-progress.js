
// START BACK BUTTON
$('.BTN_BACK_INTR').on('click', function (e) {
    e.preventDefault();
    $('#custom-tabs-four-tab a[href="#Personal"]').tab('show')
})

$('.BTN_BACK_SCHE').on('click', function (e) {
    e.preventDefault();
    $('#custom-tabs-four-tab a[href="#Intern"]').tab('show')
})

$('.BTN_BACK_ESAY').on('click', function (e) {
    e.preventDefault();
    $('#custom-tabs-four-tab a[href="#Schedule"]').tab('show')
})

$('.BTN_BACK_REQU').on('click', function (e) {
    e.preventDefault();
    $('#custom-tabs-four-tab a[href="#Essay"]').tab('show')
})
// END BACK BUTTON

// START HIGHLIGHT TAB
if ($('#active_page').text() == 'My Attendance') {
    $('#attendance').addClass('active');
}
if ($('#active_page').text() == 'My Profile') {
    $('#profile').addClass('active');
}

if ($('#active_page').text() == 'My Profile') {
    $('#profile').addClass('active');
}
// END HIGHLIGHT TAB


$(function () {

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
        icons: {
            time: 'far fa-clock'
        }
    });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
    },
        function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'LT'
    })

})
