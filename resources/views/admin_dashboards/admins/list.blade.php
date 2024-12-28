@extends('admin_dashboards.layout.master')
<style>
    .dt-button:hover{
    background-color: blue !important;
    color: white !important;
}
.dt-button{
    border-color: #997045 !important;

}
.col-sm-3{
    padding-right: 285px !important;

}

.dataTables_filter>input:focus{
   border-color:blue !important; 
}

.dataTables_filter>input{
    
    
    border-color:#997045 !important;
    /* margin-right: 161px !important; */

}
.dataTables_filter{
    
    padding: 2px 0px 0px 0px !important ;
    /* border-color:#997045 !important; */
    margin-right: -135px !important;

} 
::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
}

/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}

.c-toggle {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 30px;
    }

    /* The hidden checkbox input */
    .c-toggle input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider (background) */
    .c-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: red !important; /* Inactive state */
        transition: 0.4s;
        border-radius: 34px;
    }
    th{
        font-weight: 900 !important;
    }
    /* Circle inside the slider */
    .c-slider:before {
        position: absolute;
        content: "\2715" !important; /* Unicode for X */
        height: 24px;
        width: 24px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        color: red !important;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.4s;
        border-radius: 50%;
    }
    .table> :not(caption)>*>*, .datepicker table> :not(caption)>*>* {
    padding: 4px 4px !important;
}
table td img, .datepicker table td img {
        width: 25px !important;
        height: 25px !important;
    }

    /* Toggle to active (checked) state */
    input:checked + .c-slider {
        background-color: green !important; /* Active state */
    }

    /* Move the circle and change icon when checked */
    input:checked + .c-slider:before {
        transform: translateX(30px);
        content: "\2713" !important; /* Unicode for checkmark */
        color: green !important;
    }

    .open-popup{
        margin-right: 7px !important;
        color: blue !important;
    }
    .fa-eye-slash {
    position: absolute !important;
    top: 28% !important;
    right: 4% !important;
    cursor: pointer !important;
    /* color: lightgray !important; */
    }
</style>
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h6 class="card-title" style="color: blue !important; font-weight: bold; margin-left: 25px;">Admins</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>
        @include('admin_dashboards.modals.edit-admin-users')
        <div class="row" style="margin-top: -28px;">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        
                            <div class="table-responsive">
                            <table id="datatable" class="table">
                                
                            <div style="margin-bottom:10px;">
                                <a href="{{ env('BASE_URL') . '/admins-dashboard/admins/create'}}">
                                    {{-- <button class="btn btn-primary btn-icon-text mb-2 mb-md-0"><i width="15"
                                                                                                  class="link-icon text-white"
                                                                                                  data-feather="plus-circle"></i>
                                        Add New Influencer
                                    </button> --}}

                                      <button class="btn btn-primary btn-icon-text mb-2 mb-md-0"><i width="15"
                                                                                                  class="link-icon text-white"
                                                                                                  data-feather="plus-circle"></i>
                                        Add Admin
                                    </button>
                                </a>
                                @include('admin_dashboards.modals.edit-admin-users')

                                @include('admin_dashboards.modals.edit-vendor-and-influencer-status-modal')
                                <thead>
                        <!-- <h6 class="card-title">All Transactions</h6> -->
                                <tr>
                                    <th>#</th>
                                    <th>ID #</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    {{-- <th>ID</th> --}}
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    {{-- <th>Email</th> --}}
                                   
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Position</th>
                                   
                                    <th>Added By</th>
                                   
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Joined</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="t-body"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
    function validateInput(input) {
            
            // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
            input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
        } 
        
     $(document).ready(function() {
        
        if ($('.floating').length > 0) {
            $('.floating').on('focus blur', function(e) {
                $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
            }).trigger('blur');
        }

        // Toggle Password Visibility
        $('#togglePassword').on('click', function() {
            let input = $(this).siblings('input');
            let type = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
    });
        function makeTableBody(data) {
            var table_body = '';
            var count = 1;
            data.forEach(function (value, key) {
                var checked = '';
                if (value.status === 'ACTIVE') {
                    checked = 'checked';
                }
                table_body += `<tr>

                                <td> ${Number(count++)} </td>
                                <td> ${value.id} </td>
                                <td>
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                                </td>
                                <td> ${value.name} </td>
                                

                                <td> ${value.email} </td>
<td> ${value.phone ?? '-'} </td>

  <td>${value.personal_information ? value.personal_information.gender : '-'}</td>
<td>${ value.personal_information ? value.personal_information.age :'-'}</td>
<td> ${value.position ?? '-'} </td>

<td> ${value.addedby ?? '-'} </td>

       <td>${value.city_name ?? '-'}</td>
                                    <td>${value.country_name ?? '-'}</td>

<td>${ convertToShortMonthFormat(value.member_since) }</td> 
                                                    <td class='td-toggle'>
    <label class="c-toggle">
        <input type="checkbox" name="change-status" ${checked} class="change-status" category-id='${value.id}' state='${checked}'>
        <span class="c-slider"></span>
    </label>
</td>
         
                              
                 <td>
                
                                    
                                    <a href='#'  edit-id='${value.id}' class='open-popup mr-2 edit-btn'>
                                       
                                        Edit</a>
                                    <a href='#' id='delete-btn' influencer-id='${value.id}' class='remove-user text-danger'>
                                     
                                            </i> Delete</a>
                                </td>
                 </tr>`;
            });

            $('.t-body').html(table_body);
            initializeDatatable('#datatable','Admins');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'users',
                type: 'post',
                data: {'role': 'admin', 'status': "{{ request()->status }}"},
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        makeTableBody(response.data);
                    } else {
                        $('.t-body').html("<tr><td class='text-center' colspan='15'>No Data</td></tr>");
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

        $(document).ready(function () {
            fetchRecords();
        });

        $(document).on('submit', '#edit-status-form-data', function (e) {
            e.preventDefault();
            $.ajax({
                url: api_url + 'users/change-status',
                data: {
                    status: $("#editStatusModal .status").val(),
                    id: $("#editStatusModal .id").val(),
                },
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
                            $("#editStatusModal").modal('hide')
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

        $(document).on('change', '.change-status', function () {
            var status = 'off';
            if ($(this).attr('state') === '') {
                status = 'on'
            }

            $.ajax({
                url: api_url + 'users/change-status',
                data: {
                    status: status,
                    id: $(this).attr('category-id')
                },
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
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
        $(document).on('click', '#edit-role-btn', function () {
            var role_id = $(this).attr('role-id');
            $.ajax({
                url: api_url + 'roles/edit/' + role_id,
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('.role_id').val(response.data.id);
                        $('.name').val(response.data.name);
                        $('.notes').val(response.data.notes);
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

        $(document).on('click', '#edit-role-submit', function () {
            var role_id = $(this).attr('role-id');
            $('#edit-role').modal('hide');
            setTimeout($.ajax({
                url: api_url + 'roles/update',
                type: 'post',
                data: $('.edit-role-form').serialize(),
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
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
            }), 1000);
        });

        $(document).on('click', '#add-role-submit', function () {
            $('#add-role').modal('hide');
            $.ajax({
                url: api_url + 'roles/store',
                type: 'post',
                data: $('.add-role-form').serialize(),
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
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

        $(document).on('click', '#delete-role-btn', function () {
            var role_id = $(this).attr('role-id');
            var url = api_url + 'roles/delete/' + role_id;
            deleteRecord(url, $(this));
        });
        $(document).on('click', '.edit-btn', function () {
            var id = $(this).attr('edit-id');
            $.ajax({
                url: api_url + 'users/' + id + '/show',
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('.id').val(response.data.id);
                        // $('.category_id').val(response.data.id);
                        $('.first_name').val(response.data.name);
                        $('.last_name').val(response.data.last_name);
                        $('.email').val(response.data.email);
                        $('.description').text(response.data.description);
                        $('.phone').val(response.data.phone);
                        $('.addedby').val(response.data.addedby);
                        $('.position').val(response.data.position);
                        $('.country_id').val(response.data.country_id);
                        $('.gender').val(response.data.personal_information ? response.data.personal_information.gender:'');
                        $('.age').val(response.data.personal_information ? response.data.personal_information.age :'')
                        $('.city_id').val(response.data.city_id);
                        // $('.nationality').val(response.data.nationality);
                        $('.type').val(response.data.type);
                        // $('.image-show').attr('src', response.data.image_url);

                        getCitiesByCountry(response.data.country_id);

                        setTimeout(function () {

                            $('.country_id').val(response.data.country_id);
                            $('.state_id').val(response.data.state_id);
                            $('.city_id').val(response.data.city_id);
                        }, 200)

                        if (response.data.status == 1) {
                            $("#formSwitch1").prop('checked', true);
                        } else {
                            $("#formSwitch1").prop('checked', false);
                        }

                        $("#editadmin").modal('show')
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

        $(document).on('submit', '#edit-admin-form-data', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            alert('dd');
            setTimeout($.ajax({
                url: api_url + 'users/update',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
                            $("#editinfluencer").modal('hide')
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
            }), 1000);
        });

        $(document).on('change', '#country_id', function () {
            var nationality_id = $(this).val();
            // alert(nationality_id );
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "POST",
                    dataType: "json",
                    data: {
                        "nationality_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#city_id").empty();
                            $("#brand_city_id").empty();

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                    $("#brand_city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#city_id").empty();
                            $("#brand_city_id").empty();
                        }
                    }
                });
            }
        });

    </script>
@endsection
