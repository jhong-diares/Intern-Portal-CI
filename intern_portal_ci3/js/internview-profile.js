$('#download_resume').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Internview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
    DOWNLOAD_RESUME(url, filename).then(function ($result) {

    })

    async function DOWNLOAD_RESUME(url, filename) {

        // POST TO Internview/download_requirements  
        var formData = new FormData();
        formData.append('filename', filename);

        const response = await fetch(url, {
            method: 'POST',
            body: formData,
        })
        return response.json();
    }
})

$('#download_recommendation').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Internview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
    DOWNLOAD_RECOMMENDATION(url, filename).then(function ($result) {

    })

    async function DOWNLOAD_RECOMMENDATION(url, filename) {

        // POST TO Internview/download_requirements  
        var formData = new FormData();
        formData.append('filename', filename);

        const response = await fetch(url, {
            method: 'POST',
            body: formData,
        })
        return response.json();
    }
})

$('#download_waiver').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Internview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
    DOWNLOAD_WAIVER(url, filename).then(function ($result) {

    })

    async function DOWNLOAD_WAIVER(url, filename) {

        // POST TO Internview/download_requirements  
        var formData = new FormData();
        formData.append('filename', filename);

        const response = await fetch(url, {
            method: 'POST',
            body: formData,
        })
        return response.json();
    }
})

$('#download_agreement').on('click', function (e) {
    e.preventDefault();

    // var url = '<?= base_url() ?>Internview/download_requirements';
    var url = $(this).attr("href");
    var filename = $(this).attr("value");

    // PASS INPUT FIELD VALUE VARIABLE TO PARAMETER
    DOWNLOAD_AGREEMENT(url, filename).then(function ($result) {

    })

    async function DOWNLOAD_AGREEMENT(url, filename) {

        // POST TO Internview/download_requirements  
        var formData = new FormData();
        formData.append('filename', filename);

        const response = await fetch(url, {
            method: 'POST',
            body: formData,
        })
        return response.json();
    }
})