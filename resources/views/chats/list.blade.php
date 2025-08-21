@extends('layout.master')

@section('content')
<style>
/* --- Styles for chat layout --- */
.chat-users-list {
    overflow-y: auto;
    max-height: 400px;
    padding: 10px;
    border-radius: 5px;
}
.btn-link:hover { color: goldenrod !important; }

.lobibox-notify.notify-mini .lobibox-notify-body { margin: 7px 1px 0px 0px !important; }
.lobibox-notify, .lobibox-notify-success, .animated-fast, .fadeInDown, .notify-mini {
    width: 150px !important;
    margin-right: 120px !important;
}
.dropdown-item:focus, .dropdown-item:hover { color: blue !important; background-color: #ffffff !important; }
.dropdown-item { padding: 0rem 0.3rem !important; }
.select2-results__option { padding: 0px !important; margin-left: 4px !important; }

.emojionearea .emojionearea-button>div, 
.emojionearea .emojionearea-picker .emojionearea-wrapper:after {
    filter: sepia(22%) saturate(904%) hue-rotate(12deg) !important;
}
.emojionearea.emojionearea-inline>.emojionearea-button { right: 15px !important; top: 7px !important; }
.emojionearea.focused { border-color: blue !important; box-shadow: none !important; }
.emojionearea { border-color: goldenrod !important; box-shadow: none !important; }
.emojionearea.emojionearea-inline>.emojionearea-editor { top: 5px !important; }
.emojionearea.emojionearea-inline { border-radius: 25px !important; }
.emojionearea-editor { font-size: 16px !important; color: #000 !important; left: 19px !important; }

.chat-scroll { padding-right: 10px; }
.chat-item { margin-bottom: 15px; }
.chat-title { text-decoration: none; color: #333; display: flex; align-items: center; padding: 10px; border-radius: 5px; transition: background-color 0.3s; border-bottom: 1px solid #ddd !important; margin-bottom: 2px; }
.chat-title:hover { background-color: #f0f0f0; }

.user-info { flex-grow: 1; }
.user-name { font-weight: bold; margin-bottom: 5px; }
.user-last-chat { color: #666; font-size: 14px; }
.chat-info { display: flex; flex-direction: column; align-items: flex-end; }
.last-chat-time { color: #999; font-size: 12px; margin-top: 26px; }
.unread-badge { display: flex; justify-content: center; align-items: center; margin-top: 5px; }
.unread-count { background-color: #ffc107; color: #333; font-size: 12px; padding: 3px 8px; border-radius: 10px; }

.input-msg-send { width: 99% !important; border-radius: 30px; }
.mgn-send-color { color: #0686ee !important; }
.mgn-send-color:hover { color: goldenrod !important; }

.dropdown-menu.show { padding: 0; display: block; min-width: 12px; margin-left: -7rem; }
.select2-container { margin-top: 5px !important; }

.colorchangecompany:hover a,
.colorchangecompany:hover span { color: blue !important; text-decoration: none; }

::-webkit-scrollbar { width: 6px; }
::-webkit-scrollbar-thumb { background-color: #997045; border-radius: 34px; }
::-webkit-scrollbar-track { background: transparent; }
</style>

<div class="content-chat" style="background-color:#eee; min-height:500px; padding-top:59px; padding-bottom:7px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="chat-window">

                    {{-- Chat Left Panel --}}
                    <div class="chat-cont-left">
                        <div class="row p-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 text-center">
                                        <input type="checkbox" class="hiddencheck" id="check-all" style="margin-left: 5px; margin-top: 10px;">
                                    </div>
                                    <div class="col-md-10 hiddencheck" style="margin-top: 7px; padding:0; font-size:13px;">Select All</div>
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:-97px;">
                                <select class="form-select chat" id="filter-dropdown" style="width:160%; padding:0; margin-top:9px; border:transparent;">
                                    <option value="all">All Chats</option>
                                    <option value="favorites">Favorited</option>
                                    <option value="blocked">Blocked</option>
                                </select>
                            </div>
                            <div class="col-md-2 hiddentrash">
                                <div class="text-center mt-2" style="margin-left:195px;">
                                    <i class="fa fa-trash" style="color: rgb(9, 9, 166);"></i>
                                </div>
                            </div>
                            <div class="col-md-2 edit">
                                <div class="text-center mt-2" style="margin-left:195px;">
                                    <i class="fa fa-pencil" id="edit-icon" style="color: rgb(9, 9, 166);"></i>
                                </div>
                            </div>
                        </div>

                        <div class="chat-users-list" id="chat-users-list">
                            <div class="chat-scroll">
                                @foreach($chats as $chat)
                                <a href="javascript:void(0);"
                                   class="media chatActionBlock chat-title @if($chat->is_blocked) blocked @endif @if($chat->is_favorite) favorite @endif @if(getSafeValueFromObject($chat->other_user, 'id') == request()->i) chat-with-user-{{ request()->i }} @endif"
                                   style="display:flex;" 
                                   id="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')) }}-{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                   unread-ids="{{ json_encode($chat->unread_ids) }}" chat-id="{{ $chat->id }}">
                                    <input type="checkbox" class="dlt-chat hiddencheck" value="{{ $chat->id }}" style="width:27px; margin-left:-14px; position:relative; z-index:10; pointer-events:auto;">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar">
                                            <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') ?: 'https://via.placeholder.com/30x30' }}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <div class="user-name">{{ getSafeValueFromObject($chat->other_user, 'name') }} {{ getSafeValueFromObject($chat->other_user, 'last_name') }}</div>
                                        <div class="user-last-chat">{{ $chat->latest_message }}</div>
                                        <div class="badge bgg-yellow badge-pill unread-count" style="display: {{($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) ? 'block' : 'none'}}">{{ $chat->unread_count }}</div>
                                        <div class="chat-container" id="chat-{{ $chat->id }}">
                                            <div class="d-flex justify-content-end align-items-center mt-[-10px] mr-[-63px] mb-25px">
                                                <button class="btn btn-link favorite-chat" title="{{ $chat->is_favorite ? 'Unfavourite' : 'Favourite' }}" style="padding:0" data-chat-id="{{ $chat->id }}">
                                                    <i class="fa fa-heart" style="color: {{ $chat->is_favorite ? 'red' : 'grey' }};"></i>
                                                </button>
                                                <button class="btn btn-link block-chat" title="{{ $chat->is_blocked ? 'Unblock' : 'Block' }}" style="padding:8px;" data-chat-id="{{ $chat->id }}">
                                                    <i class="fa fa-ban" style="color:{{ $chat->is_blocked ? 'goldenrod' : 'grey' }};"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="last-chat-time">{{ $chat->latest_message_recieved_time_diff }}</div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Chat Right Panel --}}
                    <div class="chat-cont-right">
                        @foreach($chats as $chat)
                        <div class="chat-body-div" id="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')) }}-{{ getSafeValueFromObject($chat->other_user, 'id') }}-chat-body-div"
                             style="{{ getSafeValueFromObject($chat->other_user, 'id') == request()->i ? '' : 'display:none' }}"
                             chat-id="{{ $chat->id }}" user="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')) }}-{{ getSafeValueFromObject($chat->other_user, 'id') }}">
                            <div class="chat-header d-flex justify-content-between align-items-center">
                                <a id="back_user_list" href="javascript:void(0)" class="back-user-list"><i class="material-icons">chevron_left</i></a>
                                <div class="media d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}" alt="UserImage" width="50" height="50" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body flex-grow-1 ms-2 colorchangecompany">
                                        @php
                                        $user_categories = DB::table('user_categories')
                                            ->join('categories', 'user_categories.category_id', '=', 'categories.id')
                                            ->where('user_categories.user_id', getSafeValueFromObject($chat->other_user, 'id'))
                                            ->pluck('categories.name')->toArray();
                                        $categoryNames = implode(', ', $user_categories);
                                        @endphp
                                        <div class="user-name">
                                            <a href="{{ env('BASE_URL') }}/influencers/{{ getSafeValueFromObject($chat->other_user, 'id') }}/detail">
                                                {{ getSafeValueFromObject($chat->other_user, 'name') }} {{ getSafeValueFromObject($chat->other_user, 'last_name') }}
                                            </a>
                                            - <span>{{ $categoryNames }} {{ getSafeValueFromObject($chat->other_user, 'company_name') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-link p-0" type="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item block-chat" data-chat-id="{{ $chat->id }}" href="#">Block User</a>
                                        <a class="dropdown-item report-user-btn" data-bs-toggle="modal" data-bs-target="#reportUserModal" href="#">Report User</a>
                                    </div>
                                </div>
                            </div>

                            @if($chat->status == 'accepted')
                            <div class="chat-body">
                                <div class="chat-scroll">
                                    <ul class="list-unstyled message-body">
                                        @foreach($chat->sorted_messages as $date => $sorted_messages)
                                        <div class="text-center fw-bold" style="font-size:12px;">{{ \Carbon\Carbon::parse($date)->format('d-M-Y') }}</div>
                                        @foreach($sorted_messages as $message)
                                        <li class="media {{ $message->message_position == 'right' ? 'sent' : 'received' }} d-flex">
                                            <div class="avatar flex-shrink-0">
                                                <img src="{{ $message->message_position == 'right' ? session()->get('User')['image_url'] : getSafeValueFromObject($chat->other_user, 'image_url') }}" alt="User Image" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div class="msg-box">
                                                    <div class="d-flex justify-content-between">
                                                        <p>{{ $message->message }}</p>
                                                        <ul class="chat-msg-info">
                                                            <li><div class="chat-time"><span>{{ $message->sended_at_formatted }}</span></div></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="chat-footer">
                                <div class="input-group position-relative" style="width:93%; margin-left:17px; height:42px;">
                                    <input type="text" class="input-msg-send emoji-trigger form-controls"
                                           data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                           data-chat-id="{{ $chat->id }}" data-chat-block="{{ $chat->is_blocked }}" placeholder="Type a message...">
                                    <button type="button" id="msg-send-btn" class="btn btn-primary msg-send-btn position-absolute" style="right:41px; top:12px; background:transparent; border:none;" data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}" data-chat-id="{{ $chat->id }}">
                                        <i class="fa fa-arrow-circle-up mgn-send-color" style="font-size:30px;"></i>
                                    </button>
                                </div>
                            </div>

                            @else
                            <div class="chat-body">
                                <div class="row mt-4">
                                    <div class="col-md-6 col-12 text-end">
                                        <button class="btn btn-primary accept" chat-id="{{ $chat->id }}">Accept</button>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <button class="btn btn-danger reject" chat-id="{{ $chat->id }}">Reject</button>
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
<script>
$(document).ready(function() {
    // Initialize Select2
    $(".chat").select2({ minimumResultsForSearch: -1 });

    // Emoji Area
    $('.emoji-trigger').emojioneArea({
        pickerPosition: "bottom",
        events: {
            keyup: checkInput,
            keydown: checkInput,
            change: checkInput,
            paste: checkInput
        }
    });

    function checkInput() {
        var inputMessage = $('.emojionearea-editor').text().trim();
        var hasImg = $('.emojionearea-editor').find('img').length > 0;
        $('.msg-send-btn').prop('disabled', inputMessage === '' && !hasImg);
    }

    $('.msg-send-btn').prop('disabled', true);

    // Toggle edit mode
    $('#edit-icon').click(function() {
        $('.edit').hide();
        $('.hiddencheck').toggle();
        $('.hiddentrash').toggle();
    });

    // Select all checkboxes
    $('#check-all').change(function() {
        $('.dlt-chat').prop('checked', $(this).prop('checked'));
    });

    // Filter chats
    $('#filter-dropdown').change(function() {
        var value = $(this).val();
        $('.chat-title').hide();
        if (value === 'all') $('.chat-title').show();
        if (value === 'favorites') $('.favorite').show();
        if (value === 'blocked') $('.blocked').show();
    });

    // Chat title click
    $(document).on('click', '.chat-title', function() {
        var chat_body_selector = "#" + $(this).attr('id') + "-chat-body-div";
        $('.chat-body-div').hide();
        $(chat_body_selector).show();
    });

    // Favorite & Block buttons
    $(document).on('click', '.favorite-chat', function() {
        var button = $(this), chatId = button.data('chat-id');
        $.post("{{ route('chat.favorite') }}", {_token:"{{ csrf_token() }}", chat_id: chatId}, function(res){
            button.find('i').css('color', res.is_favorite ? 'red' : 'grey');
        });
    });

    $(document).on('click', '.block-chat', function() {
        var button = $(this), chatId = button.data('chat-id');
        $.post("{{ route('chat.block') }}", {_token:"{{ csrf_token() }}", chat_id: chatId}, function(res){
            var area = $('.emojionearea.emojionearea-inline'), editor = $('.emojionearea-editor');
            if(res.is_blocked){
                button.find('i').css('color','goldenrod');
                area.css({'background':'#fdeaea','cursor':'not-allowed','pointer-events':'none'});
                editor.attr('contenteditable','false');
            }else{
                button.find('i').css('color','grey');
                area.css({'background':'','cursor':'','pointer-events':''});
                editor.attr('contenteditable','true');
            }
        });
    });
});
</script>
@endsection
