@extends('layout.master')
@section('content')
    <div class="content-chat" style="background-color:#eee;min-height: 500px !important;padding-top:100px;padding-bottom:10px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="chat-window">

                        <div class="chat-cont-left">
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
                                        <a href="javascript:void(0);" class="media chat-title" style="display: flex"
                                           id="{{ getSafeValueFromObject($chat->other_user, 'name') . '-' . getSafeValueFromObject($chat->other_user, 'id') }}"
                                           unread-ids="{{ json_encode($chat->unread_ids) }}" chat-id="{{ $chat->id }}">
                                            <div class="media-img-wrap flex-shrink-0">
                                                {{-- avatar-away --}}
                                                <div class="avatar">
                                                    <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                         alt="User Image"
                                                         class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div>
                                                    <div class="user-name">{{ getSafeValueFromObject($chat->other_user, 'name') }}</div>
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
                                                    <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                         alt="User Image"
                                                         class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div class="user-name">{{ getSafeValueFromObject($chat->other_user, 'name') }}</div>
                                                {{--                                            <div class="user-status">online</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    @if($chat->status == 'accepted')
                                        <div class="chat-body">
                                            <div class="chat-scroll">
                                                <ul class="list-unstyled message-body">
                                                    @foreach($chat->messages as $message)
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
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-footer">
                                            <div class="input-group">
                                                <div class="avatar" style="padding:4px;">
                                                    <img src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}" alt="User Image"
                                                         class="avatar-img rounded-circle">
                                                </div>
                                                <div class="inputs" style="padding:4px;width:88%;">
                                                <input type="text" class="input-msg-send form-control"
                                                       placeholder="Reply..." data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                                       data-chat-id="{{ $chat->id }}">
                                                {{--                                    <div class="btn-file btn">--}}
                                                {{--                                        <i class="far fa-grin fa-1x"></i>--}}
                                                {{--                                    </div>--}}
                                                {{--                                    <div class="btn-file btn">--}}
                                                {{--                                        <i class="fa fa-paperclip"></i>--}}
                                                {{--                                        <input type="file">--}}
                                                {{--                                    </div>--}}
                                                </div>
                                                <button type="button" class="btn btn-primary msg-send-btn rounded-pill"
                                                        data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                                        data-chat-id="{{ $chat->id }}"><i
                                                        class="fab fa-telegram-plane"></i></button>
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
            ajax_setup();
        });

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
        $(".input-msg-send").on('keypress', function(e) {
            console.log(e.which)
            if (e.which === 13) {
                console.log('good')
                // Check if the key pressed is Enter (key code 13)
                e.preventDefault(); // Prevent the form submission

                // send message
                send_new_message($(this), $(this));

            }
        });

        function send_new_message(message, thisElem){
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
    </script>
@endsection
