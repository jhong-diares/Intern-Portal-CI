
$().ready(function () {
    $(function () {
        $('#quickFormReg').validate({
            rules: {
                lastname: {
                    required: true

                },
                firstname: {
                    required: true
                },
                account_type: {
                    required: true
                },
                SELC_SKLL: {
                    required: true
                },
                username: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                },
                confirm_password: {
                    required: true,
                    equalTo: "#password"
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
                    title: 'Create New Account?',
                    text: 'New Account',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#28a745',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Confirm'
                }).then((result) => {
                    if (result.isConfirmed) {

                        var url = $('#quickFormReg').attr("action");
                        var username = $('#username').val();
                        var password = $('#password').val();
                        var accountType = $('#account_type :selected').text();
                        var lastnName = $('#lastname').val();
                        var firstName = $('#firstname').val();

                        SAVE_ACCOUNT(url, username, password, accountType, lastnName, firstName).then(function ($result) {
                            if ($result.status == "TAKEN") {
                                Swal.fire({
                                    icon: 'error',
                                    text: 'Username is already taken.',
                                    title: 'Oppss..',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                            if ($result.status == "VALID") {
                                Swal.fire({
                                    icon: 'success',
                                    text: 'New Application Created Successfully.',
                                    title: 'Register Account',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        })

                        async function SAVE_ACCOUNT(url, username, password, accountType, lastnName, firstName) {

                            var formData = new FormData(quickFormReg);
                            formData.append('USERNAME', username);
                            formData.append('PASSWORD', password);
                            formData.append('ACCOUNTYPE', accountType);
                            formData.append('LASTNAME', lastnName);
                            formData.append('FIRSTNAME', firstName);

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