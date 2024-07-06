@extends('layout.master')

<style>/* Style for the chat users list */
    .chat-users-list {
        overflow-y: auto;
        max-height: 400px; /* Adjust as needed */
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .emojionearea .emojionearea-button>div, .emojionearea .emojionearea-picker .emojionearea-wrapper:after{
        filter: sepia(22%) saturate(904%) hue-rotate(12deg) !important;
    }
    
    .chat-scroll {
        padding-right: 10px;
    }
    
    .chat-item {
        margin-bottom: 15px;
    }
    
    .chat-title {
        text-decoration: none;
        color: #333;
        display: flex;
        align-items: center;
        transition: background-color 0.3s;
        padding: 10px;
        border-radius: 5px;
    }
    
    .chat-title:hover {
        background-color: #f0f0f0;
    }
    ::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
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
    
    .user-info {
        flex-grow: 1;
    }
    
    .user-name {
        font-weight: bold;
        margin-bottom: 5px;
    }
    
    .user-last-chat {
        color: #666;
        font-size: 14px;
    }
    
    .chat-info {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
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
    
    .unread-count {
        background-color: #ffc107;
        color: #333;
        font-size: 12px;
        padding: 3px 8px;
        border-radius: 10px;
    }
    </style>
@section('content')
    <div class="content-chat"
         style="background-color:#eee;min-height: 500px !important;padding-top:100px;padding-bottom:10px;">
        <div class="container-fluid">
            <div class="row">
                <!-- <div style="padding-bottom:2px;"><button class="btn btn-danger" id="deleteSelected"><i class="fa fa-trash"></i></button>
                <input type="checkbox" style="margin-left:26.5%;" id="check-all">&nbsp;ALL

                </div> -->
                <div class="col-md-12">
                    <div class="chat-window">

                        <div class="chat-cont-left">
                            <div class="row" style="padding:5px 8px;">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-2 text-center"><input type="checkbox" id="check-all"></div>
                                        <div class="col-md-10">Select ALL</div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-2">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <i class="fa fa-trash " style="color: rgb(9, 9, 166);"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="chat-header">
                                <form class="chat-search">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-search icon-circle"></i>
                                        </div>
                                        <input type="text" class="form-control rounded-pill search" id="search"
                                               placeholder="Search">
                                    </div>
                                </form>
                            </div> -->

                            <div class="chat-users-list" id="chat-users-list">
                                <div class="chat-scroll">

                                    @foreach($chats as $chat)
                                        <input type="checkbox" style="position:relative;top:57px;right:250px;"
                                               value="{{ $chat->id }}" class="dlt-chat">
                                        <a href="javascript:void(0);"
                                           class="media chat-title @if(getSafeValueFromObject($chat->other_user, 'id') == request()->i) chat-with-user-{{ request()->i }} @endif"
                                           style="display: flex;"
                                           id="{{ getSafeValueFromObject($chat->other_user, 'name') . '-' . getSafeValueFromObject($chat->other_user, 'id') }}"
                                           unread-ids="{{ json_encode($chat->unread_ids) }}" chat-id="{{ $chat->id }}">
                                            <div class="media-img-wrap flex-shrink-0">
                                                {{-- avatar-away --}}
                                                <div class="avatar">
                                                    <img
                                                        src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                        alt="User Image"
                                                        class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div>
                                                    <div
                                                        class="user-name">{{ getSafeValueFromObject($chat->other_user, 'name') }}</div>
                                                    <div class="user-last-chat">{{ $chat->latest_message }}</div>
                                                </div>
                                                <div>
                                                    <div
                                                        class="last-chat-time block">{{ $chat->latest_message_recieved_time_diff }}</div>

                                                    <div
                                                        class="badge bgg-yellow badge-pill unread-count"
                                                        style="display: {{($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) ? 'block' : 'none'}} ">{{ $chat->unread_count }}</div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="chat-cont-right">
                            @foreach($chats as $key => $chat)
                                <div class="chat-body-div"
                                     id="{{ getSafeValueFromObject($chat->other_user, 'name') . '-' . getSafeValueFromObject($chat->other_user, 'id') }}-chat-body-div"
                                     style="{{ $key > 0 ? 'display: none' : '' }}" chat-id="{{ $chat->id }}"
                                     user="{{ getSafeValueFromObject($chat->other_user, 'name') . '-' . getSafeValueFromObject($chat->other_user, 'id') }}">
                                    <div class="chat-header">
                                        <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                            <i class="material-icons">chevron_left</i>
                                        </a>
                                        <div class="media d-flex">
                                            <div class="media-img-wrap flex-shrink-0">
                                                <div class="avatar">
                                                    <img
                                                        src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                        alt="User Image"
                                                        class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="user-name">{{ getSafeValueFromObject($chat->other_user, 'name') }}</div>
                                                {{--                                            <div class="user-status">online</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    @if($chat->status == 'accepted')
                                        <div class="chat-body">
                                            <div class="chat-scroll">
                                                <ul class="list-unstyled message-body">
                                                    @foreach($chat->sorted_messages as $date => $sorted_messages)
                                                        <div class="text-center fw-bolds " style="font-size:12px;">{{ date("d-m-Y", strtotime($date))}}</div>
                                                        @foreach($sorted_messages as $date => $message)
                                                            <li class="media {{ $message->message_position == 'right' ? 'sent' : 'received' }} d-flex">
                                                                <div class="avatar flex-shrink-0">
                                                                    <img
                                                                        src="{{ $message->message_position == 'right' ? session()->get('User')['image_url'] : getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                                        alt="User Image"
                                                                        class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body flex-grow-1">
                                                                    <div class="msg-box">
                                                                        <div>
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
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-footer">
                                            <div class="input-group">
                                                <div class="avatar" style="padding:4px;">

                                                    <img
                                                        src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                        alt="User Image"
                                                        class="avatar-img rounded-circle">
                                                </div>
                                                <div class="inputs"
                                                     style="padding:4px;width:88%;height:42px !important;">
                                                    <input type="text" class="input-msg-send form-controls"
                                                           id="emoji-trigger"
                                                           placeholder="Reply..."
                                                           data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                                           data-chat-id="{{ $chat->id }}">
                                                    {{--                                    <div class="btn-file btn">--}}
                                                    {{--                                        <i class="far fa-grin fa-1x"></i>--}}
                                                    {{--                                    </div>--}}
                                                    {{--                                    <div class="btn-file btn">--}}
                                                    {{--                                        <i class="fa fa-paperclip"></i>--}}
                                                    {{--                                        <input type="file">--}}
                                                    {{--                                    </div>--}}
                                                    {{--                                                    <div class="btn-file btn" id="emoji-trigger">--}}
                                                    {{--                                                        <i class="far fa-grin fa-1x"></i>--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                                <button type="button" class="btn btn-primary msg-send-btn"
                                                        data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                                        data-chat-id="{{ $chat->id }}"
                                                        style="background-color:inherit !important;"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"
                                                        style="color:#0504aa;font-size:30px;background-color:none !important;"></i>
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

        $(document).ready(function () {
            @if(request()->i)
            $('.chat-body-div').css('display', 'none');
            $('.chat-with-user-{{ request()->i }}').click();
            @endif
            ajax_setup();


            $('#emoji-trigger').emojioneArea({
                pickerPosition: "bottom",
            });
        });

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
            $('.chat-body-div').css('display', 'none');
            $(chat_body_selector).css('display', 'block');
        });

        $(document).on('click', '.msg-send-btn', function () {
            thisElem = $(this);
            var message = $(thisElem).parents('.chat-footer').find('.input-msg-send');
            send_new_message(message, thisElem);
        });

        //send request on input enter
        // $(".emojionearea-editor").on('keydown', function (e) {
        //     console.log('djkf')
        //     console.log(e.which)
        //     if (e.which === 13) {
        //         console.log('good')
        //         // Check if the key pressed is Enter (key code 13)
        //         // e.preventDefault(); // Prevent the form submission
        //
        //         // send message
        //         $(this).blur();
        //         send_new_message($('.input-msg-send'), $('.input-msg-send'));
        //         $(this).focus();
        //
        //     }
        // });
        $(document).on('keydown', '.emojionearea-editor', function (e) {
            // Check if the pressed key is Enter (keyCode 13)
            if (e.keyCode === 13) {
                $(this).blur()
                send_new_message($('.input-msg-send'), $('.input-msg-send'));
                $(this).focus()
            }
        });

        function send_new_message(message, thisElem) {
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
                    console.log('error');
                }
            });
        }

        setInterval(function () {
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

            var li = `<li class="media ${message.message_position === 'right' ? 'sent' : 'received'} d-flex">
                    <div class="avatar flex-shrink-0">
                        <img
                            src="${message.message_position === 'right' ? "{{session()->get('User')['image_url']}}" : chat.other_user.image_url}"
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
                $(thisElem).parents('.chat-body-div').find('.message-body').append(li);
            } else {
                console.log(message)
                $(parent).find('.message-body').append(li);
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
                            data: {chat_ids: selectedValues},
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
    </script>
@endsection
