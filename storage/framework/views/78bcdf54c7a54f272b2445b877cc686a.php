<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content-chat top-space-chat">
    <div class="container-fluid">
        <div class="row chat-window">
            <div class="col-xl-12">
                <div class="chat-window">
                    <div class="chat-cont-left">
                        <div class="chat-header">
                            <span>Chats</span>
                            <a href="javascript:void(0)" class="chat-compose">
                                <i class="material-icons">control_point</i>
                            </a>
                        </div>
                        <form class="chat-search">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-search"></i>
                                </div>
                                <input type="text" class="form-control rounded-pill" placeholder="Search">
                            </div>
                        </form>
                        <div class="chat-users-list">
                            <div class="chat-scroll">
                                <a href="javascript:void(0);" class="notify-block d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-away">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-01.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Ruby Perrin</div>
                                            <div class="user-last-chat">Hey, How are you?</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">2 min</div>
                                            <div class="badge badge-success rounded-pill">15</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat active d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Darren Elder</div>
                                            <div class="user-last-chat">I'll call you later </div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">8:01 PM</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-away">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-03.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Deborah Angel</div>
                                            <div class="user-last-chat">Give me a full explanation about our project
                                            </div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">7:30 PM</div>
                                            <div class="badge badge-success rounded-pill">3</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-04.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Sofia Brient</div>
                                            <div class="user-last-chat">That's very good UI design</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">6:59 PM</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-offline">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-05.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Marvin Campbell</div>
                                            <div class="user-last-chat">Yesterday i completed the task</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">11:21 AM</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-06.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Katharine Berthold</div>
                                            <div class="user-last-chat">What is the major functionality?</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">10:05 AM</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-away">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-07.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Linda Tobin</div>
                                            <div class="user-last-chat">This has allowed me to showcase not only my
                                                technical skills</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">Yesterday</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-offline">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-08.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Paul Richard</div>
                                            <div class="user-last-chat">Let's talk briefly in the evening. </div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">Sunday</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-09.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. John Gibbs </div>
                                            <div class="user-last-chat">Do you have any collections? If so, what of?
                                            </div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">Saturday</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-away">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-10.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Dr. Olga Barlow</div>
                                            <div class="user-last-chat">Connect the two modules with in 1 day.</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">Friday</div>
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
                            <div class="notify-block d-flex">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar avatar-online">
                                        <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" alt="User Image"
                                            class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div class="user-name">Dr. Darren Elder</div>
                                    <div class="user-status">online</div>
                                </div>
                            </div>
                            <div class="chat-options">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#voice_call">
                                    <i class="material-icons">local_phone</i>
                                </a>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#video_call">
                                    <i class="material-icons">videocam</i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="material-icons">more_vert</i>
                                </a>
                            </div>
                        </div>
                        <div class="chat-body">
                            <div class="chat-scroll">
                                <ul class="list-unstyled">
                                    <li class="notify-block sent d-flex">
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>Hello. What can I do for you?</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:30 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block received d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>I'm just looking around.</p>
                                                    <p>Will you tell me something about yourself?</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:35 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="msg-box">
                                                <div>
                                                    <p>Are you there? That time!</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:40 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="msg-box">
                                                <div>
                                                    <div class="chat-msg-attachments">
                                                        <div class="chat-attachment">
                                                            <img src="<?php echo e(asset('assets/img/img-02.jpg')); ?>" alt="Attachment">
                                                            <div class="chat-attach-caption">placeholder.jpg</div>
                                                            <a href class="chat-attach-download">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </div>
                                                        <div class="chat-attachment">
                                                            <img src="<?php echo e(asset('assets/img/img-03.jpg')); ?>" alt="Attachment">
                                                            <div class="chat-attach-caption">placeholder.jpg</div>
                                                            <a href class="chat-attach-download">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:41 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block sent d-flex">
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>Where?</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:42 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="msg-box">
                                                <div>
                                                    <p>OK, my name is Limingqiang. I like singing, playing basketballand
                                                        so on.</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:42 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="msg-box">
                                                <div>
                                                    <div class="chat-msg-attachments">
                                                        <div class="chat-attachment">
                                                            <img src="assets/img/img-04.jpg" alt="Attachment">
                                                            <div class="chat-attach-caption">placeholder.jpg</div>
                                                            <a href class="chat-attach-download">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:50 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block received d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>You wait for notice.</p>
                                                    <p>Consectetuorem ipsum dolor sit?</p>
                                                    <p>Ok?</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:55 PM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-date">Today</li>
                                    <li class="notify-block received d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>10:17 AM</span>
                                                            </div>
                                                        </li>
                                                        <li><a href="#">Edit</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block sent d-flex">
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>Lorem ipsum dollar sit</p>
                                                    <div class="chat-msg-actions dropdown">
                                                        <a href="#" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-elipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>10:19 AM</span>
                                                            </div>
                                                        </li>
                                                        <li><a href="#">Edit</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block received d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <div class="msg-typing">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-footer">
                            <div class="input-group">
                                <div class="btn-file btn">
                                    <i class="fa fa-paperclip"></i>
                                    <input type="file">
                                </div>
                                <input type="text" class="input-msg-send form-control rounded-pill"
                                    placeholder="Type something">
                                <button type="button" class="btn msg-send-btn rounded-pill ms-2"><i
                                        class="fab fa-telegram-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<div class="modal fade call-modal" id="voice_call">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="call-box incoming-box">
                    <div class="call-wrapper">
                        <div class="call-inner">
                            <div class="call-user">
                                <img alt="User Image" src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>"
                                    class="call-avatar">
                                <h4>Darren Elder</h4>
                                <span>Connecting...</span>
                            </div>
                            <div class="call-items">
                                <a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="material-icons">call_end</i></a>
                                <a href="voice-call.html" class="btn call-item call-start"><i
                                        class="material-icons">call</i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="modal fade call-modal" id="video_call">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="call-box incoming-box">
                    <div class="call-wrapper">
                        <div class="call-inner">
                            <div class="call-user">
                                <img class="call-avatar" src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>"
                                    alt="User Image">
                                <h4>Darren Elder</h4>
                                <span>Calling ...</span>
                            </div>
                            <div class="call-items">
                                <a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="material-icons">call_end</i></a>
                                <a href="video-call.html" class="btn call-item call-start"><i
                                        class="material-icons">videocam</i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/chat.blade.php ENDPATH**/ ?>