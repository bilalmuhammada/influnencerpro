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
    padding-right:116px !important;

}
.dataTables_filter>input:focus{
   border-color:blue !important; 
}

.dataTables_filter>input{
    
    
    border-color:#997045 !important;
    /* padding-right: 12px !important; */
    /* margin-right: 161px !important; */

}
.table> :not(caption)>*>*, .datepicker table> :not(caption)>*>* {
    padding: 0px 0px !important;
}
.dataTables_filter{
    
    padding: 2px 29px 0px 0px !important ;
    /* border-color:#997045 !important; */
    /* margin-right: 161px !important; */

}
    ::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
}
th{
        font-weight: 900 !important;
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
    .table td img, .datepicker table td img {
        width: 25px !important;
        height: 25px !important;
    }
    table.dataTable tbody th, table.dataTable tbody td {
        padding: 6px 10px !important;
    }
</style>
@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <h6 class="card-title" style="color: blue !important;font-weight: bold; margin-left: 25px;">Categories</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>

        <div class="row" style="margin-top: -28px;">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h6 class="card-title">All Transactions</h6> -->
                        <div style="margin-bottom:10px;">
                            <button class="btn btn-primary btn-icon-text mb-2 mb-md-0" data-bs-toggle="modal"
                                    data-bs-target="#addcategory"><i width="15" class="link-icon text-white"
                                                                     data-feather="plus-circle"></i> Add
                                                                     Category
                            </button>
                            @include('admin_dashboards.modals.add-category')
                            @include('admin_dashboards.modals.edit-category')
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Category</th>
                                    <th>Category #</th>
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
                if (value.status === 'active') {
                    checked = 'checked';
                }
                table_body += `<tr>
                                <td> ${Number(count++)} </td>
                                <td>
                                    <img class="wd-30 ht-30 rounded-circle" src="${value.image_url}" alt="Image">
                                </td>
                                <td> ${value.name} </td>
                                <td> ${value.id} </td>
                                <td class='td-toggle'>
                                    <label class="c-toggle">
                                        <input type="checkbox" name="change-status" ${checked} class="change-status" category-id='${value.id}' state='${checked}'>
                                        <span class="c-slider"></span>
                                        
                                    </label>
                                </td>
                                <td>
                                    <a href='#' id='edit-category-btn'  category-id='${value.id}' class='open-popup mr-2' data-bs-toggle="modal" data-bs-target="#editcategory">

                                        Edit</a>
                                    <a href='#' id='delete-category-btn' category-id='${value.id}' class='remove-user text-danger'>
                                        
                                         Delete</a>
                                </td>
                               </tr>`;
            });

            $('.t-body').html(table_body);
            initializeDatatable('#datatable','Categories');
        }

        function fetchRecords() {
            // alert(api_url);
            $.ajax({
                url: api_url + 'categories/list',
                type: 'get',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        makeTableBody(response.data);
                    } else {
                        $('.t-body').html("<tr><td class='text-center' colspan='6'>No Record Found</td></tr>");
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

        $(document).on('change', '.change-status', function () {
            var status = 'off';
            if ($(this).attr('state') === '') {
                status = 'on'
            }

            $.ajax({
                url: api_url + 'categories/change-status',
                data: {
                    status: status,
                    category_id: $(this).attr('category-id')
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

        $(document).on('click', '#edit-category-btn', function () {
            var category_id = $(this).attr('category-id');
        // alert(category_id);
            $.ajax({
                url: api_url + 'categories/edit/' + category_id,
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        console.log(response.data)
                        $('.category_id').val(response.data.id);
                        $('.name').val(response.data.name);
                        $('.slug').val(response.data.slug);
                        $('.image').attr('src', response.data.image_url);
                        if (response.data.status === 'active') {
                            $('.status').prop('checked', true);
                        } else {
                            $('.status').prop('checked', false);
                        }
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

        $(document).on('click', '#edit-category-submit', function (e) {
            e.preventDefault();
            $('#editcategory').modal('hide');
            var formData = new FormData($("#edit-category-form")[0]);
            $.ajax({
                url: api_url + 'categories/update',
                type: 'post',
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
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

        $(document).on('click', '#add-category-submit', function (e) {
            e.preventDefault();
            $('#addcategory').modal('hide');
            var formData = new FormData($("#add-category-form")[0]);
            $.ajax({
                url: api_url + 'categories/store',
                type: 'post',
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
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

        $(document).on('click', '#delete-category-btn', function () {
            var category_id = $(this).attr('category-id');
            var url = api_url + 'categories/delete/' + category_id;
            deleteRecord(url, $(this));
        });
    </script>
@endsection
