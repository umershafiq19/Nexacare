<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Reviews</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo e(Route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Reviews</li>
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
                        <div class="doc-review review-listing">

                            <ul class="comments-list">

                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Richard Wilson</span>
                                                <span class="comment-date">Reviewed 2 Days ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the
                                                doctor</p>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="javascript:;">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="javascript:;" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="javascript:;" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="comments-reply">

                                        <li>
                                            <div class="comment">
                                                <img class="avatar rounded-circle" alt="User Image"
                                                    src="assets/img/doctors/doctor-thumb-02.jpg">
                                                <div class="comment-body">
                                                    <div class="meta-data">
                                                        <span class="comment-author">Dr. Darren Elder</span>
                                                        <span class="comment-date">Reviewed 3 Days ago</span>
                                                    </div>
                                                    <p class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                        Ut enim ad minim veniam.
                                                        Curabitur non nulla sit amet nisl tempus
                                                    </p>
                                                    <div class="comment-reply">
                                                        <a class="comment-btn" href="javascript:;">
                                                            <i class="fas fa-reply"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                </li>


                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient2.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Travis Trimble</span>
                                                <span class="comment-date">Reviewed 4 Days ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="javascript:;">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="javascript:;" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="javascript:;" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient3.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Carl Kelly</span>
                                                <span class="comment-date">Reviewed 5 Days ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="javascript:;">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="javascript:;" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="javascript:;" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient4.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Michelle Fairfax</span>
                                                <span class="comment-date">Reviewed 6 Days ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="javascript:;">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="javascript:;" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="javascript:;" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient5.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Gina Moore</span>
                                                <span class="comment-date">Reviewed 1 Week ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="javascript:;">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="javascript:;" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="javascript:;" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient9.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Walter Roberson</span>
                                                <span class="comment-date">Reviewed 1 Week ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="javascript:;">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="javascript:;" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="javascript:;" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient8.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Daniel Griffing</span>
                                                <span class="comment-date">Reviewed on 1 Jul 2023</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="javascript:;">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="javascript:;" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="javascript:;" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/reviews.blade.php ENDPATH**/ ?>