@extends('admin_dashboards.layout.master')

<style>
    th{
        font-weight: 900 !important;
    }
    .dataTables_filter>input:focus{
   border-color:blue !important; 
}

.dataTables_filter>input{
    
    
    border-color:#997045 !important;
    /* margin-right: 161px !important; */

}
.dataTables_filter{
    
    padding: 0px 55px 0px 0px !important ;
    /* border-color:#997045 !important; */
    margin-right: 137px !important;

}
</style>
@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <h6 class="card-title" style="color: blue; font-weight: bold; "> Reported Influencers</h6>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID #</th>
                                    <th>Photo</th>
                                    <th>Name</th>

                                    <th>Gender</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Nationality</th>
                                    <th>Reported/Blocked By</th>
                                    <th>ID#</th>
                                    <th>Reason</th>
                                    <th>Message</th>
                                    <th>Date</th>

                                    <th>Action By</th>
                                    <th>ID#</th>
                                    <th>Date</th>
                            
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="t-body">

                                </tbody>
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
        function makeTableBody(data) {
            var table_body = '';
            var count = 1;
            data.forEach(function (value, key) {

                console.log(value);
                var checked = '';
                if (value.status === 'active') {
                    checked = 'checked';
                }
                table_body += `<tr>
                                    <td>${count++}</td>
                                      <td>${value.id}</td>
                                    <td><img src="${value.user.attachment ? value.user.attachment.file_url : '-'}" alt=""></td>
                                  
                                   
                                    <td>${value.user ? value.user.name : '-'} ${value.user ? value.user.last_name : ''}</td>
                                   
                                       <td>${value.user_personal_information ? value.user_personal_information.age : '-'} </td>
                                  <td>${value.user ? value.user.phone : '-'}</td>
                                   <td>${value.user ? value.user.email : '-'}</td>
                                      <td>${value.country ? value.country.name : '-'}</td>
                                        <td>${value.user ? value.user.name : '-'} ${value.user ? value.user.last_name : ''}</td>
                                   
                                       <td>${value.user.id ?? '-'}</td>
                                    <td>${value.message ?? '-'}</td>
                                     <td>${value.message ?? '-'}</td>
                                    <td>${convertToShortMonthFormat(value.created_at) ?? '-'}</td>

     
                                  <td>${value.user ? value.user.name : '-'} ${value.user ? value.user.last_name : ''}</td>
                                   
                                       <td>${value.user.id ?? '-'}</td>
                                  
                                    
            <td>${convertToShortMonthFormat(value.date_formatted) ?? '-'}</td>

                                    
                                    <td>${value.status ?? '-'}</td>
                                    <td>
                                    <a href='#' id='delete-btn' review-id='${value.id}' class='remove-review text-danger'><i class='fa fa-trash'></i></a></td>

                                </tr>`;
            });

            $('.t-body').html(table_body);
            initializeDatatable('#dataTable');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'users/reviews',
                type: 'post',
                data: {'role': 'influencer'},
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        makeTableBody(response.data);
                    } else {
                        $('.t-body').html("<tr><td class='text-center' colspan='17'>No Data</td></tr>");
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

        $(document).on('click', '.remove-review', function () {
            var id = $(this).attr('review-id');
            var url = api_url + 'users/' + id + '/delete-review';
            deleteRecord(url, $(this));
        });
    </script>
@endsection
