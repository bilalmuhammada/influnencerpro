@extends('layout.master')

<style>
/* ---------------- CHAT STYLES ---------------- */
.chat-users-list {
    overflow-y: auto;
    max-height: 400px;
    padding: 10px;
    border-radius: 5px;
}
.btn-link:hover {
    color: goldenrod !important;
}
.lobibox-notify.notify-mini .lobibox-notify-body {
    margin: 7px 1px 0px 0px !important;
}
.lobibox-notify, .lobibox-notify-success, .animated-fast, .fadeInDown, .notify-mini {
    width: 150px !important;
    margin-right: 120px !important;
}
.dropdown-item:focus, .dropdown-item:hover {
    color: blue !important;
    background-color: #fff !important;
}
.dropdown-item {
    padding: 0rem 0.3rem !important;
}
.select2-results__option {
    padding: 0px !important;
    margin-left: 4px !important;
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
    box-shadow: none !important;
}
.emojionearea {
    border-color: goldenrod !important;
    box-shadow: none !important;
}
.emojionearea.emojionearea-inline>.emojionearea-editor {
    top: 5px !important;
}
.chat-scroll {
    padding-right: 10px;
}
.chat-item {
    margin-bottom: 15px;
}
.dropdown-menu.show {
    padding: 0;
    min-width: 12px;
    margin-left: -7rem;
}
.chat-title {
    text-decoration: none;
    color: #333;
    display: flex;
    align-items: center;
    padding: 10px;
    border-radius: 5px;
    border-bottom: 1px solid #ddd !important;
    margin-bottom: 2px;
    transition: background-color 0.3s;
}
.chat-title:hover {
    background-color: #f0f0f0;
}
::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-thumb {
    background-color: #997045;
    border-radius: 34px;
}
::-webkit-scrollbar-track {
    background: transparent;
}
.user-info { flex-grow: 1; }
.user-name { font-weight: bold; margin-bottom: 5px; }
.user-last-chat { color: #666; font-size: 14px; }
.emojionearea.emojionearea-inline { border-radius: 25px !important; }
.select2-container { margin-top: 5px !important; }
.mgn-send-color { color:#0686ee !important; }
.mgn-send-color:hover { color: goldenrod !important; }
.chat-info { display: flex; flex-direction: column; align-items: flex-end; }
.last-chat-time { color: #999; font-size: 12px; }
.unread-badge { display: flex; justify-content: center; align-items: center; margin-top: 5px; }
.unread-count {
    background-color: #ffc107;
    color: #333;
    font-size: 12px;
    padding: 3px 8px;
    border-radius: 10px;
}
.input-msg-send { width: 99% !important; }
.emojionearea-editor { font-size: 16px !important; color: #000 !important; left: 19px !important; }
/* Dropdown Styling */
#filter-dropdown:focus {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(0,123,255,0.5);
    outline: none;
}
#filter-dropdown:hover { border-color: #80bdff; }
.select2-container--open .select2-dropdown { left: 25px !important; }
.select2-container--default .select2-results > .select2-results__options { min-height: 0 !important; }
select::-ms-expand { display: none; }
.colorchangecompany:hover a,
.colorchangecompany:hover span {
    color: blue !important;
    text-decoration: none;
}
</style>

@section('content')
<div class="content-chat" style="background-color:#eee;min-height:500px;padding-top:59px;padding-bottom:7px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="chat-window">
                    {{-- LEFT SIDE CHAT LIST --}}
                    <div class="chat-cont-left">
                        {{-- FILTERS + ACTIONS --}}
                        <div class="row" style="padding:5px 8px;">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 text-center">
                                        <input type="checkbox" class="hiddencheck" id="check-all" style="margin-left:5px;margin-top:10px;">
                                    </div>
                                    <div class="col-md-10 hiddencheck" style="margin-top:7px;font-size:13px;">Select All</div>
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:-97px;">
                                <select class="form-select chat" id="filter-dropdown" style="width:160%;margin-top:9px;border:transparent !important">
                                    <option value="all">All Chats</option>
                                    <option value="favorites">Favorited</option>
                                    <option value="blocked">Blocked</option>
                                </select>
                            </div>
                            <div class="col-md-2 hiddentrash">
                                <div class="text-center" style="margin:9px 0 0 195px;">
                                    <i class="fa fa-trash" style="color:rgb(9,9,166);"></i>
                                </div>
                            </div>
                            <div class="col-md-2 edit">
                                <div class="text-center" style="margin:9px 0 0 195px;">
                                    <i class="fa fa-pencil" id="edit-icon" style="color:rgb(9,9,166);"></i>
                                </div>
                            </div>
                        </div>

                        {{-- CHAT USERS LIST --}}
                        <div class="chat-users-list" id="chat-users-list">
                            <div class="chat-scroll">
                                @foreach($chats as $chat)
                                    <a href="javascript:void(0);"
                                       class="media chatActionBlock chat-title {{ $chat->is_blocked ? 'blocked' : '' }} {{ $chat->is_favorite ? 'favorite' : '' }} @if(getSafeValueFromObject($chat->other_user, 'id') == request()->i) chat-with-user-{{ request()->i }} @endif"
                                       id="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')).'-'.getSafeValueFromObject($chat->other_user, 'id') }}"
                                       unread-ids="{{ json_encode($chat->unread_ids) }}" 
                                       chat-id="{{ $chat->id }}">
                                        <input type="checkbox" style="width:27px;margin-left:-14px;position:relative;z-index:10;pointer-events:auto;"
                                               value="{{ $chat->id }}" class="dlt-chat hiddencheck">
                                        <div class="media-img-wrap flex-shrink-0">
                                            <div class="avatar">
                                                <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') ?: 'https://via.placeholder.com/30x30' }}"
                                                     alt="User Image" class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div>
                                                <div class="user-name">{{ getSafeValueFromObject($chat->other_user, 'name') }} {{ getSafeValueFromObject($chat->other_user, 'last_name') }}</div>
                                                <div class="user-last-chat">{{ $chat->latest_message }}</div>
                                            </div>
                                            <div>
                                                <div class="badge bgg-yellow badge-pill unread-count"
                                                     style="display: {{ ($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) ? 'block' : 'none' }}">
                                                     {{ $chat->unread_count }}
                                                </div>
                                            </div>
                                            <div class="chat-container" id="chat-{{ $chat->id }}">
                                                <div style="display:flex;justify-content:flex-end;align-items:center;margin-top:-10px;margin-right:-63px;margin-bottom:25px;">
                                                    <button class="btn btn-link favorite-chat" title="{{ $chat->is_favorite ? 'Unfavourite' : 'Favourite' }}" data-chat-id="{{ $chat->id }}">
                                                        <i class="fa fa-heart" style="color:{{ $chat->is_favorite ? 'red' : 'grey' }}"></i>
                                                    </button>
                                                    <button class="btn btn-link block-chat" title="{{ $chat->is_blocked ? 'Unblock' : 'Block' }}" data-chat-id="{{ $chat->id }}">
                                                        <i class="fa fa-ban" style="color:{{ $chat->is_blocked ? 'goldenrod' : 'grey' }}"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="last-chat-time block" style="margin-top:26px;">{{ $chat->latest_message_recieved_time_diff }}</div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- RIGHT SIDE CHAT BODY --}}
                    <div class="chat-cont-right">
                        @foreach($chats as $key => $chat)
                            {{-- ... same as your original code for chat body ... --}}
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

$(document).ready(function () {

    // INIT select2
    $(".chat").select2({ minimumResultsForSearch: -1 });

    // INIT emoji area
    $('.emoji-trigger').emojioneArea({
        pickerPosition: "bottom",
        events: {
            keyup: checkInput,
            keydown: function (editor, event) {
                checkInput();
                if (event.which === 13) {
                    event.preventDefault();
                }
            },
            change: checkInput,
            paste: checkInput
        }
    });

    // Disable send btn initially
    $('.msg-send-btn').prop('disabled', true);

    function checkInput() {
        var inputMessage = $('.emojionearea-editor').text().trim();
        var hasImg = $('.emojionearea-editor').find('img').length > 0;
        $('.msg-send-btn').prop('disabled', !(inputMessage || hasImg));
    }

    // Edit / delete toggle
    $('#edit-icon').click(function () {
        $('.edit').hide();
        $('.hiddencheck, .hiddentrash').toggle();
    });

    // Select all
    $('#check-all').on('change', function () {
        $('.dlt-chat').prop('checked', $(this).prop('checked'));
    });

    // FAVORITE toggle
    $(document).on('click', '.favorite-chat', function () {
        let btn = $(this);
        $.post("{{ route('chat.favorite') }}", {
            _token: "{{ csrf_token() }}", chat_id: btn.data('chat-id')
        }, function (res) {
            btn.find('i').css('color', res.is_favorite ? 'red' : 'grey');
        });
    });

    // BLOCK toggle
    $(document).on('click', '.block-chat', function () {
        let btn = $(this);
        $.post("{{ route('chat.block') }}", {
            _token: "{{ csrf_token() }}", chat_id: btn.data('chat-id')
        }, function (res) {
            let area = $('.emojionearea.emojionearea-inline');
            let editor = $('.emojionearea-editor');
            if (res.is_blocked) {
                btn.find('i').css('color', 'goldenrod');
                area.css({'background':'#fdeaea','cursor':'not-allowed','pointer-events':'none'});
                editor.attr('contenteditable','false');
            } else {
                btn.find('i').css('color', 'grey');
                area.css({'background':'','cursor':'','pointer-events':''});
                editor.attr('contenteditable','true');
            }
        });
    });

    // CHAT filter
    $('#filter-dropdown').on('change', function () {
        let v = $(this).val();
        $('.chat-title').hide();
        if (v === 'all') $('.chat-title').show();
        if (v === 'favorites') $('.favorite').show();
        if (v === 'blocked') $('.blocked').show();
    });

});
</script>
@endsection
