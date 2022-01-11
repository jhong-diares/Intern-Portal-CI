$('#quickForm_essay').on('submit', function (e) {
    e.preventDefault();
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
            // var url = '<?= base_url() ?>Internview/update_essay';
            var url = $('#quickForm_essay').attr("action");

            // GET INPUT FIELD VALUE BY ID
            var id = $('.INF_USER_ID_INTR').val();
            var essay = $("#essay").val();

            // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
            SAVE_ESSAY(url, id, essay).then(function ($result) {

                // GET RETURN echo json_encode($result); FROM Internview(Controller)/update_essay(Method)
                if ($result.status == 'SUCCESS') {

                    // Sweet Alert SUCCESS
                    Swal.fire({
                        icon: 'success',
                        text: ' Update Information Successfully.',
                        title: 'Success !',
                        showConfirmButton: false,
                        timer: 1500
                    })

                    // Requirements Tab Show
                    $('#requirements-tab').removeClass('disabled');
                    $('#custom-tabs-four-tab a[href="#Requirement"]').tab('show')
                } else {

                    // Sweet Alert FAILED
                    Swal.fire({
                        icon: 'error',
                        text: ' Please answer the question first before to proceed.',
                        title: 'Failed !',
                        showConfirmButton: false,
                    })
                }
            })
        }
    })

    async function SAVE_ESSAY(url, id, essay) {

        // POST TO Internview/update_essay 
        var formData = new FormData(quickForm_essay);
        formData.append('ID', id);
        formData.append('ESSAY', essay);

        const response = await fetch(url, {
            method: 'POST',
            body: formData,
        })
        return response.json();
    }
})