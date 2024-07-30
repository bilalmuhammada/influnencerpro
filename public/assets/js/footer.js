// if (!token) {
//     window.location = base_url;
// }

// var api_url = "{{ env('API_URL') }}";
function logout(e) {
    // e.preventDefault();
    alert(api_url);
    $.ajax({
        url: api_url + 'logout',
        type: 'POST',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                localStorage.removeItem('user_token');

                // Handle successful submission here
                setTimeout(function () {
                    window.location.assign(base_url);
                }, 600);
            }
        },
        error: function (response) {
            // Handle error
            // showAlert("error", "Server Error");
        }
    });
}

$(document).on('click', '.read-all-notification', function (e) {
    e.preventDefault();
    $.ajax({
        url: api_url + 'chats/mark-as-read-all',
        type: 'POST',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                $(this).parents('.notifications').removeClass('show');
            }
        },
        error: function (response) {
            // Handle error
            // showAlert("error", "Server Error");
        }
    });
});


function ajax_setup() {
    $.ajaxSetup({
        headers: {
            'Authorization': 'Bearer ' + token,
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json'
    });
}

function deleteRecord(url, thisElem) {
    Swal.fire({
        icon: 'warning',
        title: "Are you sure?",
        text: "You will not be able to recover this!",
        type: "error",
        showCancelButton: true,
        cancelButtonClass: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Delete!',
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            console.log($(thisElem).parents('tr'))
                            $(thisElem).parents('tr').remove();

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
        }
    })
}
