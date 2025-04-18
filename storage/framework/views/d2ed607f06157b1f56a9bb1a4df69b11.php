<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Schedule Timings</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo e(Route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Schedule Timings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <?php echo $__env->make('layouts.doctor_dashboard_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Schedule Timings</h4>
                                        <div class="profile-box">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="durations">Timing Slot Duration</label>
                                                        <select class="form-select form-control select">
                                                            <option>-</option>
                                                            <option>15 mins</option>
                                                            <option selected="selected">30 mins</option>
                                                            <option>45 mins</option>
                                                            <option>1 Hour</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card schedule-widget mb-0">
                                                        <div class="schedule-header">
                                                            <div class="schedule-nav">
                                                                <ul class="nav nav-tabs nav-justified">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#slot_sunday">Sunday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active"
                                                                            data-bs-toggle="tab"
                                                                            href="#slot_monday">Monday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#slot_tuesday">Tuesday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#slot_wednesday">Wednesday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#slot_thursday">Thursday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#slot_friday">Friday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#slot_saturday">Saturday</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tab-content schedule-cont">
                                                            <div id="slot_sunday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" data-bs-toggle="modal"
                                                                        href="#add_time_slot"><i
                                                                            class="fa fa-plus-circle"></i>
                                                                        Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <div id="slot_monday" class="tab-pane fade show active">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" data-bs-toggle="modal"
                                                                        href="#edit_time_slot"><i
                                                                            class="fa fa-edit me-1"></i>Edit</a>
                                                                </h4>
                                                                <div class="doc-times">
                                                                    <div class="doc-slot-list">
                                                                        8:00 pm - 11:30 pm
                                                                        <a href="javascript:void(0)"
                                                                            class="delete_schedule">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="doc-slot-list">
                                                                        11:30 pm - 1:30 pm
                                                                        <a href="javascript:void(0)"
                                                                            class="delete_schedule">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="doc-slot-list">
                                                                        3:00 pm - 5:00 pm
                                                                        <a href="javascript:void(0)"
                                                                            class="delete_schedule">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="doc-slot-list">
                                                                        6:00 pm - 11:00 pm
                                                                        <a href="javascript:void(0)"
                                                                            class="delete_schedule">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="slot_tuesday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" data-bs-toggle="modal"
                                                                        href="#add_time_slot"><i
                                                                            class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <div id="slot_wednesday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" data-bs-toggle="modal"
                                                                        href="#add_time_slot"><i
                                                                            class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <div id="slot_thursday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" data-bs-toggle="modal"
                                                                        href="#add_time_slot"><i
                                                                            class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <div id="slot_friday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" data-bs-toggle="modal"
                                                                        href="#add_time_slot"><i
                                                                            class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <div id="slot_saturday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" data-bs-toggle="modal"
                                                                        href="#add_time_slot"><i
                                                                            class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/schedule-timings.blade.php ENDPATH**/ ?>