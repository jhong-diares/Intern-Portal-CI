
$(function () {
    $('#quickForm_login').validate({
        rules: {
            INF_USER: {
                required: true,
                email: true,
            },
            INF_PASS: {
                required: true,
                minlength: 5
            },
        },
        messages: {
            INF_USER: {
                required: "Please enter a email address",
                email: "Please enter a vaild email address"
            },
            INF_PASS: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});

