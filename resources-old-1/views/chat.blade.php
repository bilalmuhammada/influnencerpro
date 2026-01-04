@extends('layout.master')
@section('content')
<hr style="margin-top:-10px;">
<div class="content-chat" style="background-color:#eee;margin-top:-13px;">
<div class="container-fluid" >
<div class="row">

<div class="col-md-12">
<div class="chat-window">

<div class="chat-cont-left">
<div class="chat-header">
<form class="chat-search">
<div class="input-group">
<div class="input-group-prepend">
<i class="fas fa-search icon-circle"></i>
</div>
<input type="text" class="form-control rounded-pill" placeholder="Search">
</div>
</form>
</div>
<div class="chat-users-list">
<div class="chat-scroll">
<a href="javascript:void(0);" class="media d-flex">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar avatar-away">
<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
</div>
<div class="media-body flex-grow-1">
<div>
<div class="user-name">Andrew Glover </div>
<div class="user-last-chat">It seems logical that the </div>
</div>
<div>
<div class="last-chat-time block">05 min</div>
<div class="badge bgg-yellow badge-pill">11</div>
</div>
</div>
</a>

<a href="javascript:void(0);" class="media d-flex">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar avatar-away">
<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
</div>
<div class="media-body flex-grow-1">
<div>
<div class="user-name">Andrew Glover </div>
<div class="user-last-chat">It seems logical that the </div>
</div>
<div>
<div class="last-chat-time block">05 min</div>
<div class="badge bgg-yellow badge-pill">11</div>
</div>
</div>
</a>

<a href="javascript:void(0);" class="media d-flex">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar avatar-away">
<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
</div>
<div class="media-body flex-grow-1">
<div>
<div class="user-name">Andrew Glover </div>
<div class="user-last-chat">It seems logical that the </div>
</div>
<div>
<div class="last-chat-time block">05 min</div>
<div class="badge bgg-yellow badge-pill">11</div>
</div>
</div>
</a>

<a href="javascript:void(0);" class="media d-flex">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar avatar-away">
<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
</div>
<div class="media-body flex-grow-1">
<div>
<div class="user-name">Andrew Glover </div>
<div class="user-last-chat">It seems logical that the </div>
</div>
<div>
<div class="last-chat-time block">05 min</div>
<div class="badge bgg-yellow badge-pill">11</div>
</div>
</div>
</a>

<a href="javascript:void(0);" class="media d-flex">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar avatar-away">
<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
</div>
<div class="media-body flex-grow-1">
<div>
<div class="user-name">Andrew Glover </div>
<div class="user-last-chat">It seems logical that the </div>
</div>
<div>
<div class="last-chat-time block">05 min</div>
<div class="badge bgg-yellow badge-pill">11</div>
</div>
</div>
</a>

<a href="javascript:void(0);" class="media d-flex">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar avatar-away">
<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
</div>
<div class="media-body flex-grow-1">
<div>
<div class="user-name">Andrew Glover </div>
<div class="user-last-chat">It seems logical that the </div>
</div>
<div>
<div class="last-chat-time block">05 min</div>
<div class="badge bgg-yellow badge-pill">11</div>
</div>
</div>
</a>

<a href="javascript:void(0);" class="media read-chat active d-flex">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar avatar-online">
<img src="assets/img/img-03.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
</div>
<div class="media-body flex-grow-1">
<div>
<div class="user-name">Mickey Bernier </div>
<div class="user-last-chat">Lorem Ipsum is simply dummy text</div>
</div>
<div>
<div class="last-chat-time block">05 Min</div>
<div class="badge bgg-yellow badge-pill">5</div>
</div>
</div>
</a>
</div>
</div>
</div>


<div class="chat-cont-right">
<div class="chat-header">
<a id="back_user_list" href="javascript:void(0)" class="back-user-list">
<i class="material-icons">chevron_left</i>
</a>
<div class="media d-flex">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar avatar-online">
<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
</div>
<div class="media-body flex-grow-1">
<div class="user-name">Doris Brown </div>
<div class="user-status">online</div>
</div>
</div>
<div class="chat-options">
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#voice_call">
<i class="material-icons icon-grey">local_phone</i>
</a>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#video_call">
<i class="material-icons icon-grey">videocam</i>
</a>
<!-- <a href="javascript:void(0)">
<i class="material-icons">more_vert</i>
</a> -->
</div>
</div>
<div class="chat-body">
<div class="chat-scroll">
<ul class="list-unstyled">
<li class="media received d-flex">
<div class="avatar flex-shrink-0">
<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div>
<p>Good morning.....</p>
<ul class="chat-msg-info">
<li>
<div class="chat-time">
<span>10:00 AM</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</li>
<li class="media sent d-flex">
<div class="avatar flex-shrink-0">
<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div>
<p>Good morning, How are you? What about our next meeting?</p>
<ul class="chat-msg-info">
<li>
<div class="chat-time">
<span>10:02 AM</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</li>


<li class="media sent d-flex">
<div class="avatar flex-shrink-0">
<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div>
<p>Good morning, How are you? What about our next meeting?</p>
<ul class="chat-msg-info">
<li>
<div class="chat-time">
<span>10:02 AM</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</li>



<li class="media sent d-flex">
<div class="avatar flex-shrink-0">
<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div>
<p>Good morning, How are you? What about our next meeting?</p>
<ul class="chat-msg-info">
<li>
<div class="chat-time">
<span>10:02 AM</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</li>

<li class="media sent d-flex">
<div class="avatar flex-shrink-0">
<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div>
<p>Good morning, How are you? What about our next meeting?</p>
<ul class="chat-msg-info">
<li>
<div class="chat-time">
<span>10:02 AM</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</li>


<li class="media received d-flex">
<div class="avatar flex-shrink-0">
<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div>
<p>I am good thanks</p>
<ul class="chat-msg-info">
<li>
<div class="chat-time">
<span>10:03 AM</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="chat-footer">
<div class="input-group">
<div class="avatar">
<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<input type="text" class="input-msg-send form-control" placeholder="Reply...">
<div class="btn-file btn">
<i class="far fa-grin fa-1x"></i>
</div>
<div class="btn-file btn">
<i class="fa fa-paperclip"></i>
<input type="file">
</div>
<button type="button" class="btn btn-primary msg-send-btn rounded-pill"><i class="fab fa-telegram-plane"></i></button>
</div>
</div>
</div>


</div>

</div>

</div>

</div>

</div>
<div class="col-md-12 back-text mt-3">
<a href="#" class="btn  back-btn"><i class="fa fa-chevron-left"></i> Back </a>
</div>

@endsection