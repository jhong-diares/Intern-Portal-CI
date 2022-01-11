
$(function () {
    $('#quickForm_register').validate({
        rules: {
            INF_EMAIL: {
                required: true,
                email: true,
            },
            INF_PASSWORD: {
                required: true,
                minlength: 5
            },
            INF_PASSWORD_2: {
                required: true,
                minlength: 5,
                equalTo: "#INF_PASSWORD"
            },
        },
        messages: {
            INF_EMAIL: {
                required: "Please enter an email address",
                email: "Please enter a vaild email address"
            },
            INF_PASSWORD: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            INF_PASSWORD_2: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            }

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

