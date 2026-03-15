/**
 * Global SweetAlert2 Suppression Override
 * Suppresses "Success", "Error", and "Info" notifications to skip action pop-ups,
 * while preserving "Warning" (confirmations).
 */
(function() {
    if (typeof Swal !== 'undefined') {
        const originalSwal = Swal.fire;
        Swal.fire = function(...args) {
            let options = args[0];
            if (typeof options === 'string') {
                const icon = args[2];
                if (icon === 'success' || icon === 'error' || icon === 'info' || !icon) {
                    return Promise.resolve({ value: true, isConfirmed: true, isDenied: false, isDismissed: false });
                }
            } else if (typeof options === 'object' && options !== null) {
                const isConfirmation = options.showCancelButton || options.icon === 'warning' || (options.title && options.title.toLowerCase().includes('sure'));
                if (!isConfirmation) {
                    return Promise.resolve({ value: true, isConfirmed: true, isDenied: false, isDismissed: false });
                }
            }
            return originalSwal.apply(this, args);
        };

        const originalMixin = Swal.mixin;
        Swal.mixin = function(mixinOptions) {
            const mixin = originalMixin.apply(this, arguments);
            const originalMixinFire = mixin.fire;
            mixin.fire = function(...args) {
                let options = args[0];
                const isConfirmation = (typeof options === 'object' && options !== null) && 
                    (options.showCancelButton || options.icon === 'warning' || (options.title && options.title.toLowerCase().includes('sure')));
                if (!isConfirmation) {
                    return Promise.resolve({ value: true, isConfirmed: true, isDenied: false, isDismissed: false });
                }
                return originalMixinFire.apply(this, args);
            };
            return mixin;
        };
    }
})();

// if (!token) {
//     window.location = base_url;
// }

// var api_url = "{{ env('API_URL') }}";
function logout(e) {
    // e.preventDefault();
   
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
                        // Suppressed success pop-up
                        // Swal.fire({
                        //     title: 'Success!',
                        //     text: response.message,
                        //     icon: 'success',
                        // }).then((result) => {
                            $(thisElem).parents('tr').remove();
                        // })
                    } else {
                        // Suppressed problem pop-up
                        // Swal.fire({
                        //     title: 'Problem!',
                        //     text: response.message,
                        //     icon: 'warning',
                        // })
                    }
                },
                error: function (response) {
                    // Suppressed unexpected error pop-up
                    // Swal.fire({
                    //     title: 'Problem!',
                    //     text: 'Unexpected error',
                    //     icon: 'warning',
                    // })
                }
            });
        }
    })
}
