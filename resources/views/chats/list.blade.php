@extends('layout.master')

<style>/* Style for the chat users list */
    .chat-users-list {
        overflow-y: auto;
        max-height: 400px; /* Adjust as needed */
        padding: 10px;
        /* border: 1px solid #ddd; */
        border-radius: 5px;
    }
    .dropdown-item:focus, .dropdown-item:hover {
    color: blue !important;
    background-color: #ffffff !important;

}
.dropdown-item{
    padding: 0rem 0.3rem !important;
}

.select2-results__option{
    padding: 0px !important;
    margin-left: 4px !important;

}
    .emojionearea .emojionearea-button>div, .emojionearea .emojionearea-picker .emojionearea-wrapper:after{
        filter: sepia(22%) saturate(904%) hue-rotate(12deg) !important;
    }
    .emojionearea.emojionearea-inline>.emojionearea-button{
        right: 15px !important;
        top:7px !important;
    }
    .emojionearea.focused {
    border-color: blue !important;
    outline: 0;
  
    box-shadow: none  !important;
}

    .emojionearea {
    border-color: goldenrod !important;
    outline: 0;
  
    box-shadow: none  !important;
}

    .emojionearea.emojionearea-inline>.emojionearea-editor{
    top: 5px !important;
    
    }
    .chat-scroll {
        padding-right: 10px;
    }
    
    .chat-item {
        margin-bottom: 15px;
    }
    .dropdown-menu.show{
        display: block;
        min-width: 12px;
        margin-left: -7rem;
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

    .chat-title {
        border-bottom: 1px solid #ddd !important;
        padding-bottom: 10px;
        margin-bottom: 10px;
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
    .emojionearea.emojionearea-inline {

    border-radius: 25px !important;
}
.mgn-send-color{
color:#0686ee !important;
}
    
.mgn-send-color:hover{
color: goldenrod !important;
}
#select2-language_dropdown-container {
    margin-left: -22px !important;
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
    .input-msg-send{
        width: 99% !important;
    }
    .emojionearea-editor{
        font-size: 16px !important;
        color: #000 !important;
        left: 19px !important;
    }
    /* Professional Dropdown Styling */


#filter-dropdown:focus {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

#filter-dropdown:hover {
    border-color: #80bdff;
}

.select2-container--open .select2-dropdown {
    left: 25px !important;
}

.select2-container--default .select2-results > .select2-results__options {
    min-height: 0px !important;
}
/* Customize the dropdown arrow */
select::-ms-expand {
    display: none;
}

    </style>
@section('content')
    <div class="content-chat"
         style="background-color:#eee;min-height: 500px !important;padding-top:59px;padding-bottom:7px;">
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
                                        <div class="col-md-2 text-center ">
                                            <input type="checkbox" class="hiddencheck" id="check-all" style="margin-left: 5px;margin-top: 14px;">
                                        </div>
                                        <div class="col-md-10 hiddencheck" style="margin-top: 8px;padding:0px;">Select All</div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="margin-left: -97px;">
                                    <select class="form-select chat" id="filter-dropdown" style="width: 160%; padding: 0; border:transparent !important">
                                        <option value="all">All Chats</option>
                                        <option value="favorites">Favourited</option>
                                        <option value="blocked">Blocked</option>
                                    </select>
                                </div>
                                <div class="col-md-2 hiddentrash">
                                    <div class="row">
                                        <div class="col-md-12 text-center" style="margin: 9px 0px 0px 183px;">
                                            <i class="fa fa-trash" style="color: rgb(9, 9, 166);"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 edit">
                                    <div class="row">
                                        <div class="col-md-12 text-center" style="margin: 9px 0px 0px 180px;">
                                            <i class="fa fa-pencil" id="edit-icon" style="color: rgb(9, 9, 166);"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>                      
                            <div class="chat-users-list" id="chat-users-list">
                                <div class="chat-scroll">
                                    @foreach($chats as $chat)
                                   
                                        <a href="javascript:void(0);"
                                           class="media chat-title @if($chat->is_blocked) blocked @endif @if($chat->is_favorite) favorite @endif @if(getSafeValueFromObject($chat->other_user, 'id') == request()->i) chat-with-user-{{ request()->i }} @endif"
                                           style="display: flex;"
                                           id="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')). '-' . getSafeValueFromObject($chat->other_user, 'id') }}"
                                           unread-ids="{{ json_encode($chat->unread_ids) }}" chat-id="{{ $chat->id }}">
                                           <input type="checkbox" style="width: 27 !important; margin-left:-14px;position: relative; z-index: 10; pointer-events: auto; "
                                           value="{{ $chat->id }}" class="dlt-chat hiddencheck" >
                                            <div class="media-img-wrap flex-shrink-0">
                                                <div class="avatar">
                                                    <img
                                                        src="{{ getSafeValueFromObject($chat->other_user, 'image_url') ?: 'https://via.placeholder.com/30x30' }}"
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
                                                   
                                                    <div class="badge bgg-yellow badge-pill unread-count"
                                                         style="display: {{($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) ? 'block' : 'none'}} ">{{ $chat->unread_count }}</div>
                                                </div>
                                                <div style="display:flex; justify-content: flex-end; align-items: center;    margin-top: -10px;  margin-right: -63px;margin-bottom: 25px;">
                                                    <button class="btn btn-link favorite-chat" title="{{ $chat->is_favorite ? 'Unfavourite ' : 'Favourite' }}" style="padding: 0px;" data-chat-id="{{ $chat->id }}">
                                                        <i class="fa fa-heart"  style="color: {{ $chat->is_favorite ? 'red' : 'grey' }};"></i>
                                                    </button>
                                                    <button class="btn btn-link block-chat" title="{{ $chat->is_blocked ? 'Unblock' : 'Block ' }}" style="padding: 8px;"  data-chat-id="{{ $chat->id }}">
                                                        <i class="fa fa-ban"  style="color: {{ $chat->is_blocked ? 'goldenrod' : 'grey' }};"></i>
                                                    </button>
                                                </div>
                                              
                                            </div>
                                            <div class="last-chat-time block" style="margin-top: 26px;">{{ $chat->latest_message_recieved_time_diff }}</div>
                                          
                                        </a>
                                      
                                        <!-- Add Favorite and Block Icons -->
                                       
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>

                        <div class="chat-cont-right">
                        
                           
                            @foreach($chats as $key => $chat)
                                <div class="chat-body-div"
                                     id="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')). '-' . getSafeValueFromObject($chat->other_user, 'id') }}-chat-body-div"
                                     style="{{ getSafeValueFromObject($chat->other_user, 'id') == request()->i ? '' : 'display: none' }}" 
                                     chat-id="{{ $chat->id }}"
                                     user="{{ str_replace(' ', '', getSafeValueFromObject($chat->other_user, 'name')) . '-' . getSafeValueFromObject($chat->other_user, 'id') }}">
                                    <div class="chat-header">
                                        <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                            <i class="material-icons">chevron_left</i>
                                        </a>
                                        
                                        <div class="media d-flex">
                                            <div class="media-img-wrap theiaStickySidebar gallerys flex-shrink-0">
                                                <div class="avatar">
                                                    <a href="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}">
                                                    <img
                                                        src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                        alt="UserImage"  width="50px" height="50px"
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
                                                <div
                                                    class="user-name">{{ getSafeValueFromObject($chat->other_user, 'name') }} - {{ $categoryNames ?? ''}} {{ getSafeValueFromObject($chat->other_user, 'company_name') }}</div>
                                                {{--                                            <div class="user-status">online</div>--}}
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <button class="btn btn-link p-0" type="button" id="userOptionsMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            
                                            <!-- Dropdown menu options -->
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userOptionsMenu">
                                                <a class="dropdown-item" href="#" onclick="blockUser()">Block User</a>
                                                <a class="dropdown-item report-user-btn" data-bs-toggle="modal" data-bs-target="#reportUserModal" href="#">Report User</a>
                                            </div>
                                        </div>
                                    </div>
                                
                                    @if($chat->status == 'accepted')
                                   
                                        <div class="chat-body">
                                            <div class="chat-scroll">
                                                <ul class="list-unstyled message-body" style="font-weight: 300;">
                                                    @foreach($chat->sorted_messages as $date => $sorted_messages)
                                                        <div class="text-center fw-bolds " style="font-size:12px;">    {{ \Carbon\Carbon::parse($date)->format('d-M-Y') }}</div>
                                                        @foreach($sorted_messages as $date => $message)
                                                      
                                                            <li class="media {{ $message->message_position == 'right' ? 'sent' : 'received' }} d-flex">
                                                                <div class="avatar flex-shrink-0">
                                                                    <img
                                                                        src="{{ $message->message_position == 'right' ? session()->get('User')['image_url'] : getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                                        alt="User Image"
                                                                        class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body flex-grow-1">
                                                                    <div class="msg-box" >
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
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-footer">
                                            <div class="input-group" style="margin-left: 12px;" >
                                                {{-- <div class="avatar" style="padding:4px;">
                                                    <img
                                                        src="{{ getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                        alt="User Image"
                                                        class="avatar-img rounded-circle">
                                                </div> --}}
                                                <div class="input-group" style="position: relative; width: 93%; height: 42px;">
                                                    <input type="text" class="input-msg-send emoji-trigger form-controls"
                                                           id="emoji-trigger"
                                                           data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                                           data-chat-id="{{ $chat->id }}"
                                                           style="border-radius: 30px; width: 100%; padding-right: 50px;">
                                                   
                                                </div>
                                                        
                                                <button type="button" id="msg-send-btn" class="btn btn-primary msg-send-btn"
                                                data-user-id="{{ getSafeValueFromObject($chat->other_user, 'id') }}"
                                                data-chat-id="{{ $chat->id }}"
                                                style="position: absolute; right: 41px; top: 12px; background-color: transparent; border: none;">
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
        $(document).on('click', '.hiddencheck', function(e) {
    e.stopPropagation();  // Prevent the click from triggering the anchor link
});


$(document).on("click", "#userOptionsMenu", function() {

  $(".dropdown-menu-right").toggleClass("show");
});

// jQuery.noConflict();
// jQuery(document).ready(function($) {
 $(document).ready(function () {

    $(".chat").select2({
           
           minimumResultsForSearch: -1
       });
 


    $('.emoji-trigger').emojioneArea({
                pickerPosition: "bottom",
                events: {
            keyup: function (editor, event) {
                checkInput();
                console.log('emoji');
            },
         
            keydown: function (editor, event) {
                checkInput();
                if (event.which == 13) {
                    console.log('enter');
                 
               
                    $('#msg-send-btn').click();  
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
    $(document).on('click', '.msg-send-btn', function(e) {
        $('.msg-send-btn').prop('disabled', true);
     });
    
     
//         $(document).on('input keyup emoji-trigger.change', '.emojionearea-editor', function(e) { 
//     var inputMessage = $('.emojionearea-editor').text().trim();
//     var hasImg = $('.emojionearea-editor').find('img').length > 0;

//     if (inputMessage === '' && !hasImg) {
//         // If there's no text and no emojis
//         $('.msg-send-btn').prop('disabled', true);
//     } else {
//         $('.msg-send-btn').prop('disabled', false);
//     }
// });


            $('.gallerys').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enable: true
                }
            });
        
        // alert('ssss');
            @if(request()->i)
            $('.chat-body-div').css('display', 'none');
            $('.chat-with-user-{{ request()->i }}').click();
            @endif
            ajax_setup();


           
        });


$(document).ready(function() {

 $('.hiddentrash .fa-trash').on('click', function() {
        if (!$('input[type="checkbox"]').is(':checked')) {
            // Code to return to edit mode or perform your specific action
              $('.edit').show()
            $('.hiddencheck').hide();
            $('.hiddentrash').hide();
            console.log('Edit mode activated');
            // Your edit mode logic here
        }else{
       
        }
    });
   
    // Handle favorite button click
    $('.favorite-chat').on('click', function() {
            var button = $(this);
            var chatId = button.data('chat-id');

            $.ajax({
                url: "{{ route('chat.favorite') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    chat_id: chatId
                },
                success: function(response) {
                    if (response.is_favorite) {
                        button.find('i').css('color', 'red');
                    } else {
                        button.find('i').css('color', 'grey');
                    }
                }
            });
        });

        // Toggle block
        $('.block-chat').on('click', function() {
            var button = $(this);
            var chatId = button.data('chat-id');

            $.ajax({
                url: "{{ route('chat.block') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    chat_id: chatId
                },
                success: function(response) {
                    if (response.is_blocked) {
                        button.find('i').css('color', 'goldenrod');
                    } else {
                        button.find('i').css('color', 'grey');
                    }
                }
            });
        });
    //fiter dropdown

    
    $('#filter-dropdown').on('change', function() {
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
    });


});


        $(document).ready(function () {



            $('.hiddencheck').hide()
            $('.hiddentrash').hide()


            $('#edit-icon').click(function() {
                $('.edit').hide()
            $('.hiddencheck').toggle();
            $('.hiddentrash').toggle();
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
        //   alert(message);
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
        // $(document).on('keydown', '.emojionearea-editor', function (e) {
        //     // Check if the pressed key is Enter (keyCode 13)
        //  var inputMessage = $('.emojionearea-editor').text().trim();
        
        //     if (e.keyCode === 13  &&  inputMessage !='') {
        //         $(this).blur()
        //         send_new_message($('.input-msg-send'), $('.input-msg-send'));
        //         $(this).focus()
        //     }
        // });

        function send_new_message(message, thisElem) {
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
                    $(selector).find('.unread-count').css('display', 'none');
                },
                error: function (response) {
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
