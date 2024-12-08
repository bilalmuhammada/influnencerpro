//submitting register form
$(document).on('click', '.register-button', function () {
    grecaptcha.ready(function () {
        grecaptcha.execute(GOOGLE_RECAPTCHA_KEY).then(function (token) {
            $('#g-recaptcha-response').val(token);
            $.ajax({
                url: api_url + 'register',
                data: $('.register-form').serialize(),
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success'
                        })
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        });
    });
});

//submitting login form
$(document).on('click', '.login-submit-button', function () {
    $.ajax({
        url: api_url + 'admins-dashboard/login',
        data: $('.login-form').serialize(),
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            console.log(response.status);
            if (response.status) {
                window.location.assign(base_url + 'admins-dashboard/dashboard');
            } else {
                Swal.fire({
                    title: 'Problem!',
                    text: response.message,
                    icon: 'warning',
                })
            }
        },
        error: function (response) {
            Swal.fire({
                title: 'Problem!',
                text: 'Unexpected error',
                icon: 'warning',
            })
        }
    });
});

//logout user
$(document).on('click', '.logout-btn', function () {
    $.ajax({
        url: api_url + 'logout',
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                window.location.assign(base_url + '/login');
            } else {
                Swal.fire({
                    title: 'Problem!',
                    text: response.message,
                    icon: 'warning',
                })
            }
        },
        error: function (response) {
            Swal.fire({
                title: 'Problem!',
                text: 'Unexpected error',
                icon: 'warning',
            })
        }
    });
});

//submitting forgot password form
$(document).on('click', '.forgot-submit', function () {
    $.ajax({
        url: api_url + 'generate-password-email',
        data: $('.forgot-password-form').serialize(),
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                $('.password-alert').show().text(response.message);
            } else {
                Swal.fire({
                    title: 'Problem!',
                    text: response.message,
                    icon: 'warning',
                })
            }
        },
        error: function (response) {
            Swal.fire({
                title: 'Problem!',
                text: 'Unexpected error',
                icon: 'warning',
            })
        }
    });
});

//updating reset password form
$(document).on('click', '.update-password-submit', function () {
    $.ajax({
        url: api_url + 'update-password',
        data: $('.update-password-form').serialize(),
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                Swal.fire({
                    title: 'Sucess!',
                    text: response.message,
                    icon: 'success',
                })
            } else {
                Swal.fire({
                    title: 'Problem!',
                    text: response.message,
                    icon: 'warning',
                })
            }
        },
        error: function (response) {
            Swal.fire({
                title: 'Problem!',
                text: 'Unexpected error',
                icon: 'warning',
            })
        }
    });
});

//reseting reset password form
$(document).on('click', '.reset-password-submit', function () {
    $.ajax({
        url: api_url + 'reset-password',
        data: $('.reset-password-form').serialize(),
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                Swal.fire({
                    title: 'Success!',
                    text: response.message,
                    icon: 'success',
                })
            } else {
                Swal.fire({
                    title: 'Problem!',
                    text: response.message,
                    icon: 'warning',
                })
            }
        },
        error: function (response) {
            Swal.fire({
                title: 'Problem!',
                text: 'Unexpected error',
                icon: 'warning',
            })
        }
    });
});
