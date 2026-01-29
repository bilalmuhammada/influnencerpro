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

    /* No custom col-sm-3 padding */

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
        font-weight: 700 !important;
        color: #333 !important;
        font-size: 13px !important;
    }
    tr:hover {
        background-color: #efffff !important;
    }

    .gold-ellipsis {
        color: blue !important;
    }

    .gold-ellipsis:hover {
        color: #997045 !important;
    }

    .dropdown-item-compact:hover {
        background-color: aliceblue !important;
        color: #997045 !important;
    }

    .dropdown-item-compact {
        padding: 0px 8px !important;
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
        padding: 4px 10px !important;
        /* Increased padding for spacing */
        vertical-align: middle !important;
    }

    /* Remove link decoration within table only */
    .table-responsive a {
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

    .table-avatar {
        display: flex !important;
        align-items: center !important;
        margin-bottom: 0 !important;
    }

    .table-avatar a {
        color: black !important;
        margin-top: -2px !important;
        font-weight: 400 !important;
    }

    .notif-desc-text {
        color: black !important;
        font-weight: 400 !important;
        text-decoration: none !important;
        font-size: 13px !important;
    }

    .notif-desc-text:hover {
        color: blue !important;
    }

    td {
        font-size: 13px !important;
    }
</style>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="table-responsive table-container">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>All Notifications</th>
                                <th>Date</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($notifications as $notification)
                        <tr style="{{ $notification->read_at ? '' : 'background-color: #eeffff;' }}">
                            <td>
                                <div class="table-avatar">
                                    <a href="#" class="avatar me-3"> <!-- Increased margin -->
                                        <img class="avatar-img rounded-circle"
                                            src="{{ getValueById(\App\Models\User::class, $notification->user_id, 'image_url') ?: asset('assets/img/default.png') }}"
                                            alt="User Image">
                                    </a>
                                    <a href="#" class="notif-desc-text">
                                        {{ $notification->data }}
                                        <span class="d-block text-muted" style="font-size: 11px; margin-top: 15px; font-weight: 400;">{{ getValueById(\App\Models\User::class, $notification->user_id, 'name') }} {{ getValueById(\App\Models\User::class, $notification->user_id, 'last_name') }}</span>
                                    </a>
                                </div>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h gold-ellipsis"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-1" style="min-width: 6rem;">
                                        @if(!$notification->read_at)
                                        <form action="{{ route('notifications.mark-as-read', $notification->id) }}" method="POST" class="m-0">
                                            @csrf
                                            <button type="submit" class="dropdown-item dropdown-item-compact">
                                                Mark as Read
                                            </button>
                                        </form>
                                        @endif
                                        <form action="{{ route('notifications.delete', $notification->id) }}" method="POST" class="m-0">
                                            @csrf
                                            <button type="submit" class="dropdown-item dropdown-item-compact">
                                                Remove
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
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
</div>
@endsection