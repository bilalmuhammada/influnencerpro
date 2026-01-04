@extends('layout.master')

@section('content')
<style>
    .dt-button:hover {
        background-color: blue !important;
        color: white !important;
    }

    .dt-button {
        border-color: #997045 !important;
    }

    .col-sm-3 {
        padding-right: 116px !important;
    }

    .dataTables_filter>input:focus {
        border-color: blue !important;
    }

    .dataTables_filter>input {
        border-color: #997045 !important;
    }

    .table> :not(caption)>*>* {
        padding: 0px 0px !important;
    }

    .dataTables_filter {
        padding: 2px 29px 0px 0px !important;
    }

    ::-webkit-scrollbar {
        width: 6px;
    }

    th {
        font-weight: 900 !important;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #997045;
        border-radius: 34px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    .table td img {
        width: 50px !important;
        height: 50px !important;
    }

    /* Remove table borders */
    .table> :not(caption)>*>* {
        border-bottom-width: 0 !important;
        padding: 10px 10px !important;
        /* Increased padding for spacing */
        vertical-align: middle !important;
    }

    /* Remove link decoration */
    a {
        text-decoration: none !important;
        color: inherit !important;
    }

    .table-container {
        border-radius: 0px !important;
        border: 1px solid #e8e8e8 !important;
        background-color: #fff !important;
        box-shadow: 0px 4px 4px rgba(204, 204, 204, 0.25) !important;
        margin-bottom: 30px !important;
        padding: 1rem !important;
    }
</style>

<div class="page-content">
    <nav class="page-breadcrumb">
        <h6 class="card-title" style="color: blue !important;font-weight: bold; margin-left: 25px;">All Notifications</h6>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Notifications</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="table-responsive table-container">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th>Content</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($notifications as $notification)
                        <tr class="{{ $notification->read_at ? '' : 'fw-bold' }}" style="{{ $notification->read_at ? '' : 'background-color: #f8f9fa;' }}">
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar me-3"> <!-- Increased margin -->
                                        <img class="avatar-img rounded-circle"
                                            src="{{ getValueById(\App\Models\User::class, $notification->user_id, 'image_url') ?: asset('assets/img/default.png') }}"
                                            alt="User Image">
                                    </a>
                                    <a href="#">
                                        {{ $notification->data }}
                                        <span>{{ getValueById(\App\Models\User::class, $notification->user_id, 'name') }} {{ getValueById(\App\Models\User::class, $notification->user_id, 'last_name') }}</span>
                                    </a>
                                </h2>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="text-center">No notifications found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $notifications->links() }}
            </div>
        </div>
    </div>
</div>
@endsection