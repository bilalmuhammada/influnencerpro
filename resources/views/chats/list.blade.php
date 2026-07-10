@extends('layout.master')

<style>
    /* Style for the chat users list */
    .chat-users-list {
        overflow-y: auto;
        max-height: 400px;
        /* Adjust as needed */
        padding: 10px;
        /* border: 1px solid #ddd; */
        border-radius: 4px;
    }

    #userOptionsMenu:hover {
        color: goldenrod !important;
    }

    #userOptionsMenu {
        color: blue !important;
    }

    .lobibox-notify.notify-mini .lobibox-notify-body {
        margin: 7px 1px 0px 0px !important;
    }

    .lobibox-notify,
    .lobibox-notify-success,
    .animated-fast,
    .fadeInDown,
    .notify-mini {
        width: 150px !important;
        margin-right: 120px !important;
        /* text-align: center !important; */
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: goldenrod !important;
        background-color: transparent !important;
        box-shadow: none !important;
    }

    .dropdown-item {
        color: blue !important;
        padding: 0px 9px !important;
    }

    .dropdown-item.report-user-btn.reported-user,
    .dropdown-item.report-user-btn.reported-user:hover,
    .dropdown-item.report-user-btn.reported-user:focus {
        color: red !important;
        cursor: default;
        pointer-events: none;
        background-color: transparent !important;
    }

    .dropdown-item.block-chat-disabled,
    .dropdown-item.block-chat-disabled:hover {
        color: blue !important;
        cursor: not-allowed;
        background-color: transparent !important;
    }


    .emojionearea .emojionearea-button>div,
    .emojionearea .emojionearea-picker .emojionearea-wrapper:after {
        filter: sepia(22%) saturate(904%) hue-rotate(12deg) !important;
    }

    .emojionearea.emojionearea-inline>.emojionearea-button {
        right: 15px !important;
        top: 7px !important;
    }

    .emojionearea.focused {
        border-color: blue !important;
        outline: 0;
        box-shadow: none !important;
    }

    .emojionearea {
        border-color: #997045 !important;
        outline: 0;
        box-shadow: none !important;
    }

    .emojionearea.emojionearea-inline>.emojionearea-editor {
        top: 3px !important;

    }

    .chat-scroll {
        padding-right: 10px;
    }

    .chat-item {
        margin-bottom: 15px;
    }

    .dropdown-menu.show {
        box-shadow: none !important;
        padding: 0rem 0;
        display: block;
        min-width: 12px;
        margin-left: -5rem;
    }

    .chat-title {
        text-decoration: none;
        color: #333;
        display: flex;
        align-items: center;
        transition: background-color 0.3s;
        padding: 10px;
        border-radius: 2px;
        width: 100%;
    }

    .chat-title:hover {
        background-color: #f0f0f0;
    }

    ::-webkit-scrollbar {
        width: 6px;
        /* You can adjust this value based on your preference */
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

    .chat-title {
        border-bottom: 1px solid #ddd !important;
        padding-bottom: 10px;
        margin-bottom: 2px;
    }

    .chat-title.unread {
        background-color: #eeffff !important;
    }

    .chat-title.active-chat-user {
        background-color: #eeffff !important;
    }


    .user-info {
        flex-grow: 1;
    }

    .badge-premium-green {
        background-color: #dcfce7 !important;
        color: #166534 !important;
    }

    .user-name {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .user-last-chat {
        color: #666;
        font-size: 14px;
    }

    .emojionearea.emojionearea-inline {

        border-radius: 4px !important;
    }

    .chat-footer .emojionearea .emojionearea-picker {
        z-index: 1050 !important;
    }

    .select2-container {
        margin-top: 5px !important;
    }

    #filter-dropdown + .select2-container {
        margin-top: -2px !important;
    }

    .mgn-send-color {
        color: #0686ee !important;
    }

    .mgn-send-color:hover {
        color: #997045 !important;
    }

    .chat-info {
        flex: 0 0 90px;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 12px;
        margin-left: auto;
        margin-right: 3px;
    }

    .chat-cont-left .chat-users-list .chat-title .media-body {
        min-width: 0;
    }

    .chat-cont-left .chat-users-list .chat-title .media-body > div:first-child {
        min-width: 0;
        overflow: hidden;
    }

    .last-chat-time {
        color: #999;
        font-size: 12px;
    }

    .unread-badge {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5px;
    }



    .input-msg-send {
        width: 93% !important;
    }

    .emojionearea-editor {
        font-size: 16px !important;
        color: #000 !important;
        left: 19px !important;
    }

    /* Professional Dropdown Styling */


    #filter-dropdown:focus {
        border-color: #000fff;
        box-shadow: none;
        outline: none;
    }

    #filter-dropdown {
        color: #000fff;
        font-size: 13px;
        line-height: 1.2;
    }

    #filter-dropdown option {
        color: #000;
    }

    .chat-list-filter .select2-selection__rendered {
        color: #000fff !important;
    }

    input.form-control-search:focus {
        border-color: #000fff !important;
        box-shadow: none !important;

    }

    input.form-control-search {
        margin-top: 0px !important;
        margin-left: 21px !important;
        width: 90% !important;
        border: 1px solid #997045 !important;
        font-size: 12px !important;
        border-radius: 4px !important;
    }

    input.form-control-search:hover {
        border-color: #000fff !important;
        box-shadow: none !important;
    }

    .position-relative {
        position: relative;
    }

    #filter-dropdown:hover {
        border-color: #000fff;
    }

    .form-control-search::placeholder {
        color: #999;
        font-size: 12px;
        opacity: 1;
        /* Firefox */
    }

    .select2-container--open .select2-dropdown {
        left: 0px !important;
        top: -12px !important;
    }

    .select2-container--default .select2-results>.select2-results__options {
        min-height: 0px !important;
    }

    .select2-container--default .select2-results__option {
        padding: 2px 10px !important;
        color: #000 !important;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        color: #000fff !important;
    }

    /* Customize the dropdown arrow */
    select::-ms-expand {
        display: none;
    }

    .colorchangecompany:hover a,
    .colorchangecompany:hover,
    .colorchangecompany:hover span {
        color: blue !important;
        text-decoration: none;
        /* optional, to remove underline */
    }


    .hiddencheck-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 7px;
        white-space: nowrap;
    }

    .hiddencheck {
        margin-right: 5px;
    }

    .fa-trash:hover,
    .fa-pencil:hover {
        color: goldenrod !important;
    }

    .hiddencheck-label {
        font-size: 14px;
    }

    .checkbox-container {
        display: flex;
        align-items: center;
        position: relative;
        z-index: 10;

        box-sizing: border-box;
    }

    .dlt-chat {
        width: 13px;
        position: relative;
        /* same as left:-18px but cross-browser */
        cursor: pointer;

    }

    #checkbox {
        flex: 0 0 auto;
    }

    .chat-list-toolbar {
        align-items: center;
        display: flex;
        gap: 0px;
        min-height: 42px;
        padding: 5px 21px;
        position: relative;
        width: 100%;
    }

    .chat-list-filter {
        flex: 0 0 95px;
        left: 50%;
        position: absolute;
        transform: translateX(-50%);
    }

    .chat-list-filter #filter-dropdown {
        border: transparent !important;
        margin-top: 0;
        padding: 0 2px;
        width: 100%;
    }

    .chat-list-filter #filter-dropdown + .select2-container {
        margin-top: 0 !important;
        width: 95px !important;
    }

    .chat-list-toolbar-action {
        cursor: pointer;
        flex: 0 0 auto;
        margin-left: auto;
        text-align: right;
    }

    .chat-window {
        background-color: #fff !important;
        border: 1px solid #e5e5e5 !important;
        border-radius: 8px !important;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        height: calc(100vh - 90px);
    }

    .chat-cont-left,
    .chat-cont-right {
        background-color: #fff !important;
        height: 100%;
    }

    .chat-header,
    .chat-footer {
        background-color: #fff !important;
        border-bottom: 1px solid #f0f0f0 !important;
    }

    .chat-cont-right {
        display: flex;
        flex-direction: column;
        min-height: 0;
        position: relative;
    }

    .chat-cont-right .chat-body-div {
        display: none !important;
        flex: 1;
        height: 100%;
        min-height: 0;
        overflow: hidden;
        position: relative;
    }

    .chat-cont-right .chat-body-div.active-chat {
        display: flex !important;
        flex-direction: column;
    }

    .chat-cont-right .chat-body {
        flex: 0 0 auto;
        height: calc(100% - 136px);
        min-height: 0;
    }

    .chat-cont-right .chat-body>.chat-scroll {
        min-height: 0 !important;
        max-height: none !important;
        height: 100%;
        overflow-y: auto;
    }

    .chat-cont-right .chat-footer {
        bottom: 0;
        flex: 0 0 auto;
        left: 0;
        position: absolute !important;
        right: 0;
        z-index: 20;
    }

    .chat-footer.chat-blocked .emojionearea,
    .chat-footer.chat-blocked .input-msg-send {
        background: #fdeaea !important;
        cursor: not-allowed !important;
        pointer-events: none !important;
    }

    .chat-footer.chat-blocked .msg-send-btn {
        pointer-events: none !important;
        opacity: 0.55;
    }

    .chat-footer.chat-blocked {
        padding: 4px 0 6px !important;
    }

    .chat-blocked-note {
        color: red;
        display: none;
        font-size: 10px;
        font-weight: 700;
        line-height: 14px;
        height: 14px;
        margin: 0 0 4px 17px;
        text-align: center;
        transform: translate(-10px, 2px);
        width: 96%;
    }

    .chat-footer.chat-blocked .chat-blocked-note {
        display: block;
    }

    .chat-footer .input-msg-send:hover,
    .chat-footer .input-msg-send:focus,
    .chat-footer .emojionearea:hover,
    .chat-footer .emojionearea.focused {
        border-color: #000fff !important;
        box-shadow: none !important;
    }
</style>
@section('content')
    <div class="content-chat"
        style="background-color:#ffff;min-height: 500px !important;padding-top:59px;padding-bottom:7px;">
        <div class="container" style="max-width: 80% !important;">
            <div class="row">



                <div class="col-md-12">
                    <div class="chat-window">

                        <div class="chat-cont-left">
                            <div class="chat-list-toolbar">
                                <div class="d-flex align-items-center" id="checkbox">
                                    <input type="checkbox" class="hiddencheck" id="check-all" style="width: auto;">
                                    <label for="check-all" class="mb-0 hiddencheck" style="font-size: 13px;">Select
                                        All</label>
                                </div>
                                <div class="chat-list-filter">
                                    <select class="form-select chat" id="filter-dropdown"
                                        aria-label="Filter chats">
                                        <option value="all">All Chats</option>
                                        <option value="unread">Unread</option>
                                        <option value="favorites">Favorited</option>
                                        <option value="blocked">Blocked</option>
                                    </select>
                                </div>
                                <div class="hiddentrash chat-list-toolbar-action">
                                    <i class="fa fa-trash" style="color: rgb(9, 9, 166);font-size: 15px;"></i>
                                </div>
                                <div class="edit chat-list-toolbar-action">
                                    <i class="fa fa-pencil" id="edit-icon"
                                        style="color: rgb(9, 9, 166);font-size: 15px;"></i>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 position-relative">

                                    <input type="text" name="" id="" placeholder="Search..."
                                        class="form-control form-control-search" style="min-height: 12px; ">

                                </div>
                            </div>

                            <div class="chat-users-list" id="chat-users-list">
                                <div class="chat-scroll">
                                    @foreach($chats as $chat)

                                                                <a href="javascript:void(0);"
                                                                    class="media chatActionBlock chat-title @if($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) unread @endif   @if($chat->is_blocked) blocked @endif @if($chat->is_favorite) favorite @endif @if(getSafeValueFromObject($chat->other_user, 'id') == request()->i) chat-with-user-{{ request()->i }} active-chat-user @endif"
                                                                    style="display: flex;"
                                                                    id="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')) . '-' . getSafeValueFromObject($chat->other_user, 'id') }}"
                                                                    unread-ids="{{ json_encode($chat->unread_ids) }}" chat-id="{{ $chat->id }}">
                                                                    <div class="checkbox-container">
                                                                        <input type="checkbox" value="{{ $chat->id }}" class="dlt-chat hiddencheck">
                                                                    </div>
                                                                    <div class="media-img-wrap flex-shrink-0">
                                                                        <div class="avatar">
                                                                            <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') ?: asset('assets/img/user.png') }}"
                                                                                alt="User Image" class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body flex-grow-1">
                                                                        <div>
                                                                            <div class="user-name">{{ getSafeValueFromObject($chat->other_user, 'name')
                                                                                                                                                }}
                                                                                {{getSafeValueFromObject($chat->other_user, 'last_name')}}
                                                                            </div>
                                                                            <div class="user-last-chat">{{ $chat->latest_message }}</div>
                                                                        </div>

                                                                        <div class="chat-info">
                                                                            <div style="display: flex; justify-content: flex-end; width: 100%;">
                                                                                <button class="btn btn-link favorite-chat"
                                                                                    title="{{ $chat->is_favorite ? 'Unfavourite' : 'Favourite' }}"
                                                                                    style="padding: 0;" data-chat-id="{{ $chat->id }}">
                                                                                    <i class="fa fa-heart"
                                                                                        style="color: {{ $chat->is_favorite ? 'red' : 'grey' }} !important;"></i>
                                                                                </button>
                                                                            </div>

                                                                            <div
                                                                                style="display: flex; align-items: center; gap: 9px; font-size: 12px; color: #666;">
                                                                                <div class="badge  badge-premium-green  unread-count"
                                                                                    style="display: {{ ($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) ? 'block' : 'none' }}; border-radius: 30px;margin-bottom: 2px;">
                                                                                    {{ $chat->unread_count }}
                                                                                </div>

                                                                                <span style="font-size: 12px; white-space: nowrap;">{{
                                        $chat->latest_message_recieved_time_diff }}</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                </a>

                                                                <!-- Add Favorite and Block Icons -->

                                    @endforeach
                                </div>
                            </div>

                        </div>

                        <div class="chat-cont-right">


                            @php $activeChatRendered = false; @endphp
                            @foreach($chats as $key => $chat)
                                                @php
                                                    $isActiveChat = getSafeValueFromObject($chat->other_user, 'id') == request()->i && !$activeChatRendered;
                                                    if ($isActiveChat) {
                                                        $activeChatRendered = true;
                                                    }
                                                @endphp

                                                <div class="chat-body-div {{ $isActiveChat ? 'active-chat' : '' }}"
                                                    id="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')) . '-' . getSafeValueFromObject($chat->other_user, 'id') }}-chat-body-div"
                                                    chat-id="{{ $chat->id }}"
                                                    user="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')) . '-' . getSafeValueFromObject($chat->other_user, 'id') }}">
                                                    <div class="chat-header">
                                                        <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                                            <i class="material-icons">chevron_left</i>
                                                        </a>

                                                        <div class="media d-flex">
                                                            <div class="media-img-wrap theiaStickySidebar gallerys flex-shrink-0">
                                                                <div class="avatar">
                                                                    <a href="{{ getSafeValueFromObject($chat->other_user, 'image_url') ?: asset('assets/img/user.png') }}">
                                                                        <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') ?: asset('assets/img/user.png') }}"
                                                                            alt="UserImage" width="50px" height="50px"
                                                                            class="avatar-img rounded-circle">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $user_categories = DB::table('user_categories')
                                                                    ->join('categories', 'user_categories.category_id', '=', 'categories.id')
                                                                    ->where('user_categories.user_id', getSafeValueFromObject($chat->other_user, 'id'))
                                                                    ->select('categories.name')
                                                                    ->get();
                                                                $categoryNames = '';
                                                                foreach ($user_categories as $key => $category) {
                                                                    // Append the category name to the string
                                                                    $categoryNames .= $category->name;
                                                                    // Add a comma and space if it's not the last category
                                                                    if ($key != $user_categories->count() - 1) {
                                                                        $categoryNames .= ', ';
                                                                    }
                                                                }




                                                            @endphp
                                                            <div class="media-body flex-grow-1">
                                                                <div class="user-name colorchangecompany"> {!!
                                strtolower(getSafeValueFromObject($chat->other_user, 'role')['name'] ?? '')
                                === 'vendor'
                                ? getSafeValueFromObject($chat->other_user, 'name') . ' ' .
                                getSafeValueFromObject($chat->other_user, 'last_name')
                                : '<a
                                                                                                                        href="' . env('BASE_URL') . '/influencers/' . getSafeValueFromObject($chat->other_user, 'id') . '/detail">'
                                . getSafeValueFromObject($chat->other_user, 'name') . ' ' .
                                getSafeValueFromObject($chat->other_user, 'last_name') .
                                '</a>' !!} - <span>{{ $categoryNames ?? ''}} {{
                                getSafeValueFromObject($chat->other_user, 'company_name') }} </span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        @php

                                                            $existingReport = \App\Models\ChatReported::where(
                                                                'reported_by',
                                                                $login_user_id
                                                            )
                                                                ->where('chat_id', $chat->id)
                                                                ->exists();
                                                        @endphp



                                                        <div class="dropdown">
                                                            <button class="btn btn-link p-0" type="button" id="userOptionsMenu"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v"></i>
                                                            </button>

                                                            <!-- Dropdown menu options -->
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userOptionsMenu">
                                                                @if(
                                                                    $chat->is_blocked
                                                                    && $chat->blocked_by !== null
                                                                    && (int) $chat->blocked_by !== (int) $login_user_id
                                                                )
                                                                    <span class="dropdown-item block-chat-disabled" style="font-size: 12px;"
                                                                        title="This user has already blocked this chat">Block User</span>
                                                                @else
                                                                    <a class="dropdown-item block-chat block_user" style="font-size: 12px;"
                                                                        data-chat-id="{{ $chat->id }}" href="#">{{ $chat->is_blocked ? 'Unblock User' : 'Block User' }}</a>
                                                                @endif

                                                                @if($existingReport)
                                                                    <span class="dropdown-item report-user-btn reported-user" style="font-size: 12px;"
                                                                        aria-disabled="true">Reported User</span>
                                                                @else
                                                                    <a class="dropdown-item report-user-btn" style="font-size: 12px;"
                                                                        data-chat-id="{{ $chat->id }}"
                                                                        data-bs-toggle="modal" data-bs-target="#reportUserModal" href="#">Report User</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @if($chat->status == 'accepted')

                                                        <div class="chat-body">
                                                            <div class="chat-scroll">
                                                                <ul class="list-unstyled message-body" style="font-weight: 300;">
                                                                    @if(!empty($chat->sorted_messages))
                                                                        @foreach($chat->sorted_messages as $date => $sorted_messages)
                                                                                                    <div class="text-center fw-bolds " style="font-size:12px;"> {{
                                                                            \Carbon\Carbon::parse($date)->format('d-M-Y') }}</div>
                                                                                                    @foreach($sorted_messages as $date => $message)

                                                                                                        <li
                                                                                                            class="media {{ $message->message_position == 'right' ? 'sent' : 'received' }} d-flex">
                                                                                                            <div class="avatar flex-shrink-0">
                                                                                                                <img src="{{ $message->message_position == 'right' ? (session()->get('User')['image_url'] ?? asset('assets/img/user.png')) : (getSafeValueFromObject($chat->other_user, 'image_url') ?: asset('assets/img/user.png')) }}"
                                                                                                                    alt="User Image" class="avatar-img rounded-circle">
                                                                                                            </div>
                                                                                                            <div class="media-body flex-grow-1">
                                                                                                                <div class="msg-box">
                                                                                                                    <div style="display: flex;">
                                                                                                                        <p>{{ $message->message }}</p>
                                                                                                                        <ul class="chat-msg-info">
                                                                                                                            <li>
                                                                                                                                <div class="chat-time">
                                                                                                                                    <span>{{ $message->sended_at_formatted }}</span>
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    @endforeach
                                                                        @endforeach
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="chat-footer {{ $chat->is_blocked ? 'chat-blocked' : '' }}">
                                                            <div class="chat-blocked-note">
                                                                    @if($chat->is_blocked)
                                                                    @if($chat->blocked_by == $login_user_id)
                                                                        Chat blocked by You
                                                                    @else
                                                                        Chat blocked by {{ getSafeValueFromObject($chat->other_user, 'name') }}
                                                                    @endif
                                                                @endif
                                                            </div>
                                                            <div class="input-group" style="margin-left: 17px;">
                                                                {{-- <div class="avatar" style="padding:4px;">
                                                                    <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                                        alt="User Image" class="avatar-img rounded-circle">
                                                                </div> --}}
                                                                <div class="input-group" style="position: relative; width: 96%; height: 42px;">
                                                                    <input type="text" class="input-msg-send emoji-trigger form-controls"
                                                                        id="emoji-trigger"
                                                                        data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                                                        data-chat-id="{{ $chat->id }}" data-chat-block="{{$chat->is_blocked}}"
                                                                        {{ $chat->is_blocked ? 'disabled' : '' }}
                                                                        style="border-radius: 4px; width: 100%; padding-right: 50px;">

                                                                </div>

                                                                <button type="button" id="msg-send-btn" class="btn btn-primary msg-send-btn"
                                                                    data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                                                    data-chat-id="{{ $chat->id }}"
                                                                    {{ $chat->is_blocked ? 'disabled' : '' }}
                                                                    style="position: absolute; right: 41px; top: 9px; background-color: transparent; border: none;">
                                                                    <i class="fa fa-arrow-circle-up mgn-send-color" aria-hidden="true"
                                                                        style="font-size: 30px; background-color: none;"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @else
                                                            <div class="chat-body">
                                                                <div class="row mt-4">
                                                                    <div class="col-md-6 col-12 text-end">
                                                                        <button class="btn btn-primary accept" chat-id="{{ $chat->id }}">
                                                                            Accept
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <button class="btn btn-danger reject" chat-id="{{ $chat->id }}">
                                                                            Reject
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @endif
                                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('page_scripts')
    <script type="text/javascript">

        var api_url = "{{ env('API_URL') }}";
        var fallback_avatar = "{{ asset('assets/img/user.png') }}";
        $(document).on('click', '.hiddencheck', function (e) {
            e.stopPropagation();  // Prevent the click from triggering the anchor link
        });





        // jQuery.noConflict();
        // jQuery(document).ready(function($) {
        $(document).ready(function () {

            $('.form-control-search').on('keyup', function () {
                var searchTerm = $(this).val().toLowerCase();

                // Loop through all chat items
                $('#chat-users-list a.chatActionBlock').each(function () {
                    var userName = $(this).find('.user-name').text().toLowerCase();
                    var lastMessage = $(this).find('.user-last-chat').text().toLowerCase();

                    // Show if search term matches name or last message
                    if (userName.indexOf(searchTerm) !== -1 || lastMessage.indexOf(searchTerm) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            $(document).on('click', '.btn-link', function (e) {
                e.stopPropagation(); // prevent closing immediately
                const $menu = $(this).next('.dropdown-menu');

                // Close any open dropdowns first
                $('.dropdown-menu').not($menu).removeClass('show');

                // Toggle the clicked one
                $menu.toggleClass('show');
            });

            // When clicking outside any dropdown
            $(document).on('click', function (e) {
                if (!$(e.target).closest('.dropdown-menu, .btn-link').length) {
                    $('.dropdown-menu').removeClass('show');
                }
            });



            $(".chat").select2({

                minimumResultsForSearch: -1
            });



            $('.emoji-trigger').emojioneArea({
                pickerPosition: "top",
                events: {
                    keyup: function (editor, event) {
                        checkInput();
                        console.log('emoji');
                    },

                    keydown: function (editor, event) {
                        checkInput();
                        if (event.which == 13) {
                            console.log('enter');


                            // $('#msg-send-btn').click();  
                        }

                    },

                    change: function (editor, event) {
                        checkInput();
                        console.log('emoji');
                    },
                    paste: function (editor, event) {
                        checkInput();
                        console.log('emoji');
                    }

                }

            });


            function checkInput() {
                var inputMessage = $('.emojionearea-editor').text().trim();
                var hasImg = $('.emojionearea-editor').find('img').length > 0;
                // var hasImg = emojioneAreaInstance.editor.find('img').length > 0;

                // alert(hasImg);
                if (inputMessage === '' && !hasImg) {
                    $('.msg-send-btn').prop('disabled', true);
                } else {
                    $('.msg-send-btn').prop('disabled', false);
                }
            }
            $('.msg-send-btn').prop('disabled', true);
            $('.chat-footer.chat-blocked').each(function () {
                setChatFooterBlocked($(this), true);
            });
            $(document).on('click', '.msg-send-btn', function (e) {
                $('.msg-send-btn').prop('disabled', true);
            });



            $('.gallerys').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enable: true
                },
                fixedContentPos: false
            });

            function scrollChatToBottom(pane) {
                var chatScroll = $(pane).find('.chat-body > .chat-scroll').first();
                if (!chatScroll.length) {
                    return;
                }

                chatScroll.scrollTop(chatScroll[0].scrollHeight);
            }

            window.scrollChatToBottom = scrollChatToBottom;

            window.showChatPane = function (selector) {
                var pane = $(selector).first();

                $('.chat-body-div').removeClass('active-chat');
                $('.chat-title').removeClass('active-chat-user');
                pane.addClass('active-chat');

                if (pane.length) {
                    $('#' + pane.attr('user')).addClass('active-chat-user');
                    setTimeout(function () {
                        scrollChatToBottom(pane);
                    }, 0);
                }
            };

            if ($('.chat-body-div.active-chat').length > 1) {
                var firstActivePane = $('.chat-body-div.active-chat').first();
                $('.chat-body-div').removeClass('active-chat');
                firstActivePane.addClass('active-chat');
            }

            setTimeout(function () {
                scrollChatToBottom($('.chat-body-div.active-chat'));
            }, 0);

            // alert('ssss');
            @if (request()->i)
                $('.chat-with-user-{{ request()->i }}').click();
            @endif
            ajax_setup();



        });


        $(document).ready(function () {

            $('.hiddentrash .fa-trash').on('click', function () {
                if (!$('input[type="checkbox"]').is(':checked')) {
                    // Code to return to edit mode or perform your specific action
                    $('.edit').show()
                    $('.hiddencheck').hide();
                    $('.hiddentrash').hide();
                    console.log('Edit mode activated');
                    // Your edit mode logic here
                } else {

                }
            });

            // Handle favorite button click
            $('.favorite-chat').on('click', function () {
                var button = $(this);

                var chatId = button.data('chat-id');

                $.ajax({
                    url: "{{ route('chat.favorite') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        chat_id: chatId
                    },
                    success: function (response) {
                        if (response.is_favorite) {
                            button.find('i').css('color', 'red');
                        } else {
                            button.find('i').css('color', 'grey');
                        }

                        var chatItem = $('.chat-title[chat-id="' + chatId + '"]');
                        if (response.is_favorite) {
                            chatItem.addClass('favorite');
                        } else {
                            chatItem.removeClass('favorite');
                        }
                    }
                });
            });



            // Toggle block
            $(document).on('click', '.block-chat', function (e) {
                e.preventDefault();
                e.stopPropagation();





                var button = $(this);

                var chatId = button.data('chat-id');





                $.ajax({
                    url: "{{ route('chat.block') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        chat_id: chatId
                    },
                    success: function (response) {


                        var chatItem = $('.chat-title[chat-id="' + chatId + '"]');
                        var chatPane = $('.chat-body-div[chat-id="' + chatId + '"]');
                        var blockButtons = $('.block-chat[data-chat-id="' + chatId + '"]');
                        var chatFooter = chatPane.find('.chat-footer');



                        if (response.is_blocked) {
                            // show_error_message('User Blocked')
                            blockButtons.find('i').css('color', 'goldenrod');
                            blockButtons.attr('title', 'Unblock');


                            blockButtons.text('Unblock User').show();
                            setChatFooterBlocked(chatFooter, true, response.blocked_message);
                        } else {
                            // show_success_message('User Unblocked');
                            blockButtons.find('i').css('color', 'grey');

                            blockButtons.attr('title', 'Block');
                            blockButtons.text('Block User').show();
                            setChatFooterBlocked(chatFooter, false);

                        }

                        if (response.is_blocked) {
                            chatItem.addClass('blocked');
                        } else {
                            chatItem.removeClass('blocked');
                        }






                    },
                    error: function (xhr) {
                        show_error_message(
                            xhr.responseJSON && xhr.responseJSON.message
                                ? xhr.responseJSON.message
                                : 'Unable to update this chat.'
                        );
                    }
                });
            });



            //fiter dropdown


            $('#filter-dropdown').on('change', function () {
                var filterValue = $(this).val();



                if (filterValue === 'all') {
                    $('.chat-title').show(); // Show all chats
                } else if (filterValue === 'favorites') {
                    $('.chat-title').hide(); // Hide all chats
                    $('.favorite').show();   // Show only favorite chats
                } else if (filterValue === 'blocked') {
                    $('.chat-title').hide(); // Hide all chats
                    $('.blocked').show();    // Show only blocked chats
                }
                else if (filterValue === 'unread') {
                    $('.chat-title').hide(); // Hide all chats
                    $('.unread').show();    // Show only blocked chats
                }

            });


        });


        $(document).on('click', '.report-user-btn', function () {
            $('#report-ad-form1')[0].reset();
            $('.ad-id').val($(this).data('chat-id'));
            $('.alert-text').text('');
            $('.alert-div').hide();
        });

        $('.hiddencheck').hide()
        $('.hiddentrash').hide()


        $('#edit-icon').click(function () {
            $('.edit').hide()
            $('.hiddencheck').toggle();
            $('.hiddentrash').toggle();
        });

        // });


        $(document).on('change', '#check-all', function () {
            // Get the checked state of the toggle checkbox
            var isChecked = $(this).prop('checked');

            // Set the same checked state to all other checkboxes with class 'otherCheckbox'
            $('.dlt-chat').prop('checked', isChecked);
        })

        function ajax_setup() {
            $.ajaxSetup({
                headers: {
                    // 'Authorization': 'Bearer ' + token,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json'
            });
        }

        function setChatFooterBlocked(chatFooter, isBlocked, blockedMessage) {
            var footer = $(chatFooter);
            var input = footer.find('.input-msg-send');
            var button = footer.find('.msg-send-btn');
            var editor = footer.find('.emojionearea-editor');
            var note = footer.find('.chat-blocked-note');
            var emojiInstance = input.data('emojioneArea') || (input[0] && input[0].emojioneArea);

            footer.toggleClass('chat-blocked', isBlocked);
            input.prop('disabled', isBlocked).attr('data-chat-block', isBlocked ? '1' : '0');
            button.prop('disabled', isBlocked);

            if (emojiInstance) {
                if (isBlocked) {
                    emojiInstance.disable();
                } else {
                    emojiInstance.enable();
                }
            } else {
                editor.attr('contenteditable', isBlocked ? 'false' : 'true');
            }

            if (isBlocked) {
                if (blockedMessage) {
                    note.text(blockedMessage);
                }
                if (emojiInstance) {
                    emojiInstance.setText('');
                } else {
                    editor.text('');
                }
                input.val('');
            } else {
                note.text('');
            }
        }

        //accept or reject chat request start
        $(document).on('click', '.accept', function (e) {
            e.preventDefault();
            accept_or_reject('accepted', $(this).attr('chat-id'));
        });

        $(document).on('click', '.reject', function (e) {
            e.preventDefault();
            accept_or_reject('rejected', $(this).attr('chat-id'));
        });


        function accept_or_reject(status, chat_id) {
            $.ajax({
                url: api_url + 'chats/accept-or-reject',
                method: 'POST',
                data: {
                    chat_id: chat_id,
                    status: status,
                },
                success: function (response) {
                    window.location.href = '';
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        //accept or reject chat request end


        function markMessageAsReaded(id, selector) {

            $.ajax({
                url: api_url + 'chats/mark-as-read',
                method: 'POST',
                data: {
                    id: id
                },
                success: function (response) {
                    $(selector).find('.unread-count').css('display', 'none');
                    $(selector).removeClass('unread');
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        $(document).on('click', '.chat-title', function (e) {
            e.preventDefault();


            //calling function to mark messages as readed
            markMessageAsReaded($(this).attr('chat-id'), $(this));

            var chat_body_selector = "#" + $(this).attr('id') + "-chat-body-div";
            showChatPane(chat_body_selector);
        });


        $(document).on('click', '.msg-send-btn', function () {
            thisElem = $(this);

            var message = $(thisElem).parents('.chat-footer').find('.input-msg-send');
            send_new_message(message, thisElem);
        });

        $(document).on('keydown', '.emojionearea-editor', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault(); // stop newline
                let chatFooter = $(this).closest('.chat-footer');

                if (chatFooter.hasClass('chat-blocked')) {
                    return;
                }

                // Get text + emojis
                let text = '';
                $(this).contents().each(function () {
                    if (this.nodeType === 3) { // text node
                        text += this.nodeValue;
                    } else if (this.nodeType === 1 && this.tagName === 'IMG') { // emoji image
                        text += $(this).attr('alt') || '';
                    }
                });
                text = text.trim();

                // now shows both text and emojis

                let message = chatFooter.find('.input-msg-send');
                let btn = chatFooter.find('.msg-send-btn');

                // copy editor text into hidden input
                message.val(text);

                send_new_message(message, btn);

                // clear after send
                $(this).text('');
                message.val('');
            }
        });


        function send_new_message(message, thisElem) {
            var chatFooter = $(thisElem).closest('.chat-footer');
            if (chatFooter.hasClass('chat-blocked') || $(message).attr('data-chat-block') === '1') {
                return;
            }

            // alert($(message).val());
            $.ajax({
                url: api_url + 'chats/send-message',
                method: 'POST',
                data: {
                    user_id: $(thisElem).attr('data-user-id'),
                    chat_id: $(thisElem).attr('data-chat-id'),
                    message: $(message).val()
                },
                success: function (response) {
                    if (response.status) {
                        send_msg_body(response.data, thisElem);

                        $(message).val('');
                        $('.emojionearea-editor').html('');
                    }
                    // $(selector).find('.unread-count').css('display', 'none');
                },
                error: function (response) {
                    if (response.status === 403) {
                        setChatFooterBlocked(chatFooter, true);
                    }
                    console.log('error');
                }
            });
        }

        setInterval(function () {

            // alert('sss');
            $.ajax({
                url: api_url + 'chats/get-new-messages',
                method: 'GET',
                success: function (response) {
                    if (response.status) {
                        $(response.data).each(function (i, chat) {
                            if (chat.messages.length > 0) {
                                $(chat.messages).each(function (i, msg) {
                                    send_msg_body(msg, '', false, $('#' + chat.other_user.name + '-' + chat.other_user.id + '-chat-body-div'), chat);
                                });

                                $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.user-last-chat').html(chat.latest_message);

                                if (response.login_user_id !== chat.latest_message_sender_id && chat.unread_count > 0) {
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').show();
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').html(chat.unread_count);
                                } else {
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').hide();
                                }
                            }
                        })
                    }
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }, 10000)


        function send_msg_body(message, thisElem, using_button = true, parent, chat) {
            var sender_avatar = "{{ session()->get('User')['image_url'] ?? '' }}" || fallback_avatar;
            var receiver_avatar = chat && chat.other_user && chat.other_user.image_url ? chat.other_user.image_url : fallback_avatar;

            var li = `<li class="media ${message.message_position === 'right' ? 'sent' : 'received'} d-flex">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="${message.message_position === 'right' ? sender_avatar : receiver_avatar}"
                                        alt="User Image"
                                        class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div class="msg-box">
                                        <div>
                                            <p>${message.message}</p>
                                            <ul class="chat-msg-info">
                                                <li>
                                                    <div class="chat-time">
                                                        <span>${message.sended_at_formatted}</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>`;

            if (using_button === true) {
                var pane = $(thisElem).parents('.chat-body-div');
                pane.find('.message-body').append(li);
                if (window.scrollChatToBottom) {
                    window.scrollChatToBottom(pane);
                }
            } else {
                console.log(message)
                $(parent).find('.message-body').append(li);
                if (window.scrollChatToBottom) {
                    window.scrollChatToBottom(parent);
                }
            }
        }

        // mark as read message on input focus
        $(document).on('focus', '.input-msg-send', function () {
            var chat_id = $(this).parents('.chat-body-div').attr('chat-id');
            var user = $(this).parents('.chat-body-div').attr('user');
            markMessageAsReaded(chat_id, $('#' + user));
        });

        // chat user filter code here
        // Get references to the input and the list

        $("#search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#chat-users-list .chat-title").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


        // Attach a click event to the 'Delete Selected' button
        $('#deleteSelected').on('click', function () {
            // Get an array of selected checkbox values
            var selectedValues = $('.dlt-chat:checked').map(function () {
                return this.value;
            }).get();

            if (selectedValues.length > 0)
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
                            url: api_url + 'chats/delete-chats',
                            type: 'POST',
                            dataType: "JSON",
                            data: { chat_ids: selectedValues },
                            success: function (response) {
                                if (response.status) {
                                    Swal.fire({
                                        title: 'Success!',
                                        text: response.message,
                                        icon: 'success',
                                    }).then((result) => {
                                        // $(thisElem).parents('tr').remove();
                                        window.location.reload();
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
        });


        $(document).on('click', '.report-ad-submit-btn', function () {
            var form = $('#report-ad-form1');

            $.ajax({
                url: api_url + 'influencers/report-chat',
                type: 'post',
                data: form.serialize(),
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('#reportUserModal').modal('hide');


                        show_success_message("Ad Reported!");

                    } else {
                        show_error_message(response.message || "Already Reported");

                    }
                },
                error: function (response) {
                    $('#reportUserModal').modal('hide');
                    $('.alert-text').text("Login");
                    $('.alert-div').show();

                    $('#loginModal').modal('show');

                    setTimeout(function () {
                        $('.alert-text').text('');
                        $('.alert-div').hide();
                    }, 7000);
                }
            });

        });





    </script>
@endsection
