<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Doctor Profile</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo e(Route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Doctor Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container">

                <div class="card">
                    <div class="card-body">
                        <div class="doctor-widget">
                            <div class="doc-info-left">
                                <div class="doctor-img">
                                    <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" class="img-fluid"
                                        alt="User Image">
                                </div>
                                <div class="doc-info-cont">
                                    <h4 class="doc-name"><?php echo e($doctors->username); ?></h4>
                                    <p class="doc-speciality"><?php echo e($doctors->degree); ?></p>
                                    <p class="doc-department"><img src="<?php echo e(asset('assets/img/specialities/specialities-05.png')); ?>"
                                            class="img-fluid" alt="Speciality"><?php echo e($doctors->specialization); ?></p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(35)</span>
                                    </div>
                                    <div class="clinic-details">
                                        <p class="doc-location"><i class="fas fa-map-marker-alt"></i><?php echo e($doctors->state); ?>,
                                            <?php echo e($doctors->country); ?>

                                            </p>
                                        <ul class="clinic-gallery">
                                            <div wire:id="YPKJfOg5qgEBnxLPmqwz"
                                                wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;YPKJfOg5qgEBnxLPmqwz&quot;,&quot;name&quot;:&quot;fancybox-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;doctor-profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;3e994cc8&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;20996bcd20e637ca53c0a72f6e2bcd7f57acb71e4c85dd5ee05306b1fda86af6&quot;}}">
                                                <li>
                                                    <a data-fancybox="gallery"
                                                        href="assets/img/features/feature-01.jpg">
                                                        <img src="<?php echo e(asset('assets/img/features/feature-01.jpg')); ?>"
                                                            alt="Product Image">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-fancybox="gallery"
                                                        href="assets/img/features/feature-02.jpg">
                                                        <img src="<?php echo e(asset('assets/img/features/feature-02.jpg')); ?>"
                                                            alt="Product Image">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-fancybox="gallery"
                                                        href="assets/img/features/feature-03.jpg">
                                                        <img src="<?php echo e(asset('assets/img/features/feature-03.jpg')); ?>"
                                                            alt="Product Image">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-fancybox="gallery"
                                                        href="assets/img/features/feature-04.jpg">
                                                        <img src="<?php echo e(asset('assets/img/features/feature-04.jpg')); ?>"
                                                            alt="Product Image">
                                                    </a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="clinic-services">
                                        <span><?php echo e($doctors->services); ?></span>

                                    </div>
                                </div>
                            </div>
                            <div class="doc-info-right">
                                <div class="clini-infos">
                                    <ul>
                                        <li><i class="far fa-thumbs-up"></i> 99%</li>
                                        <li><i class="far fa-comment"></i> 35 Feedback</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                        <li><i class="far fa-money-bill-alt"></i> $100 per hour </li>
                                    </ul>
                                </div>
                                <div class="doctor-action">
                                    <a href="javascript:void(0)" class="btn btn-white fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                    <a href="chat.html" class="btn btn-white msg-btn">
                                        <i class="far fa-comment-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-white call-btn"
                                        data-bs-toggle="modal" data-bs-target="#voice_call">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-white call-btn"
                                        data-bs-toggle="modal" data-bs-target="#video_call">
                                        <i class="fas fa-video"></i>
                                    </a>
                                </div>
                                <div class="clinic-booking">
                                    <a class="apt-btn" href="booking.html">Book Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body pt-0">

                        <nav class="user-tabs mb-4">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#doc_overview" data-bs-toggle="tab">Overview</a>
                                </li>
                                
                            </ul>
                        </nav>


                        <div class="tab-content pt-0">

                            <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-md-12 col-lg-9">

                                        <div class="widget about-widget">
                                            <h4 class="widget-title">About Me</h4>
                                            <p><?php echo e($doctors->biography); ?></p>
                                        </div>


                                        <div class="widget education-widget">
                                            <h4 class="widget-title">Education</h4>
                                            <div class="experience-box">
                                                <ul class="experience-list">
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <a href="#/" class="name">American Dental
                                                                    Medical
                                                                    University</a>
                                                                <div>BDS</div>
                                                                <span class="time">1998 - 2003</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <a href="#/" class="name">American Dental
                                                                    Medical
                                                                    University</a>
                                                                <div>MDS</div>
                                                                <span class="time">2003 - 2005</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="widget experience-widget">
                                            <h4 class="widget-title">Work & Experience</h4>
                                            <div class="experience-box">
                                                <ul class="experience-list">
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <a href="#/" class="name">Glowing Smiles Family
                                                                    Dental
                                                                    Clinic</a>
                                                                <span class="time">2010 - Present (5 years)</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <a href="#/" class="name">Comfort Care Dental
                                                                    Clinic</a>
                                                                <span class="time">2007 - 2010 (3 years)</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <a href="#/" class="name">Dream Smile Dental
                                                                    Practice</a>
                                                                <span class="time">2005 - 2007 (2 years)</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="widget awards-widget">
                                            <h4 class="widget-title">Awards</h4>
                                            <div class="experience-box">
                                                <ul class="experience-list">
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <p class="exp-year">July 2023</p>
                                                                <h4 class="exp-title">Humanitarian Award</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Proin a ipsum tellus. Interdum et malesuada fames ac
                                                                    ante
                                                                    ipsum primis in faucibus.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <p class="exp-year">March 2011</p>
                                                                <h4 class="exp-title">Certificate for International
                                                                    Volunteer
                                                                    Service</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Proin a ipsum tellus. Interdum et malesuada fames ac
                                                                    ante
                                                                    ipsum primis in faucibus.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <p class="exp-year">May 2008</p>
                                                                <h4 class="exp-title">The Dental Professional of The
                                                                    Year Award
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Proin a ipsum tellus. Interdum et malesuada fames ac
                                                                    ante
                                                                    ipsum primis in faucibus.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="service-list">
                                            <h4>Services</h4>
                                            <ul class="clearfix">
                                                <li>Tooth cleaning </li>
                                                <li>Root Canal Therapy</li>
                                                <li>Implants</li>
                                                <li>Composite Bonding</li>
                                                <li>Fissure Sealants</li>
                                                <li>Surgical Extractions</li>
                                            </ul>
                                        </div>


                                        <div class="service-list">
                                            <h4>Specializations</h4>
                                            <ul class="clearfix">
                                                <li>Children Care</li>
                                                <li>Dental Care</li>
                                                <li>Oral and Maxillofacial Surgery </li>
                                                <li>Orthodontist</li>
                                                <li>Periodontist</li>
                                                <li>Prosthodontics</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div role="tabpanel" id="doc_locations" class="tab-pane fade">

                                <div class="location-list">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="clinic-content">
                                                <h4 class="clinic-name"><a href="javascript:;">Smile Cute Dental Care
                                                        Center</a>
                                                </h4>
                                                <p class="doc-speciality">MDS - Periodontology and Oral Implantology,
                                                    BDS</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(4)</span>
                                                </div>
                                                <div class="clinic-details mb-0">
                                                    <h5 class="clinic-direction"> <i
                                                            class="fas fa-map-marker-alt"></i> 2286
                                                        Sundown Lane, Austin, Texas 78749, USA <br><a
                                                            href="javascript:void(0);">Get Directions</a></h5>
                                                    <ul>
                                                        <div wire:id="KYPGFMKAHdYN4Z22aZRQ"
                                                            wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;KYPGFMKAHdYN4Z22aZRQ&quot;,&quot;name&quot;:&quot;fancybox-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;doctor-profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;3e994cc8&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;ebfc2a4e2b8f9b4800b4ca1cef80dd6f7221d3165ab0aa48c2c00b599d253944&quot;}}">
                                                            <li>
                                                                <a data-fancybox="gallery"
                                                                    href="assets/img/features/feature-01.jpg">
                                                                    <img src="assets/img/features/feature-01.jpg"
                                                                        alt="Product Image">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-fancybox="gallery"
                                                                    href="assets/img/features/feature-02.jpg">
                                                                    <img src="assets/img/features/feature-02.jpg"
                                                                        alt="Product Image">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-fancybox="gallery"
                                                                    href="assets/img/features/feature-03.jpg">
                                                                    <img src="assets/img/features/feature-03.jpg"
                                                                        alt="Product Image">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-fancybox="gallery"
                                                                    href="assets/img/features/feature-04.jpg">
                                                                    <img src="assets/img/features/feature-04.jpg"
                                                                        alt="Product Image">
                                                                </a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="clinic-timing">
                                                <div>
                                                    <p class="timings-days">
                                                        <span> Mon - Sat </span>
                                                    </p>
                                                    <p class="timings-times">
                                                        <span>10:00 AM - 2:00 PM</span>
                                                        <span>4:00 PM - 9:00 PM</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="timings-days">
                                                        <span>Sun</span>
                                                    </p>
                                                    <p class="timings-times">
                                                        <span>10:00 AM - 2:00 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="consult-price">
                                                $250
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="location-list">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="clinic-content">
                                                <h4 class="clinic-name"><a href="javascript:;">The Family Dentistry
                                                        Clinic</a></h4>
                                                <p class="doc-speciality">MDS - Periodontology and Oral Implantology,
                                                    BDS</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(4)</span>
                                                </div>
                                                <div class="clinic-details mb-0">
                                                    <p class="clinic-direction"> <i class="fas fa-map-marker-alt"></i>
                                                        2883
                                                        University Street, Seattle, Texas Washington, 98155 <br><a
                                                            href="javascript:void(0);">Get Directions</a></p>
                                                    <ul>
                                                        <div wire:id="LhGY5yyoxmQgQPZ7Ii5h"
                                                            wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;LhGY5yyoxmQgQPZ7Ii5h&quot;,&quot;name&quot;:&quot;fancybox-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;doctor-profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;3e994cc8&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;743313a0eb98dd9be33fd75cb9a67fff6ad5a466995c37fa347b454a467c6b58&quot;}}">
                                                            <li>
                                                                <a data-fancybox="gallery"
                                                                    href="assets/img/features/feature-01.jpg">
                                                                    <img src="assets/img/features/feature-01.jpg"
                                                                        alt="Product Image">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-fancybox="gallery"
                                                                    href="assets/img/features/feature-02.jpg">
                                                                    <img src="assets/img/features/feature-02.jpg"
                                                                        alt="Product Image">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-fancybox="gallery"
                                                                    href="assets/img/features/feature-03.jpg">
                                                                    <img src="assets/img/features/feature-03.jpg"
                                                                        alt="Product Image">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-fancybox="gallery"
                                                                    href="assets/img/features/feature-04.jpg">
                                                                    <img src="assets/img/features/feature-04.jpg"
                                                                        alt="Product Image">
                                                                </a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="clinic-timing">
                                                <div>
                                                    <p class="timings-days">
                                                        <span> Tue - Fri </span>
                                                    </p>
                                                    <p class="timings-times">
                                                        <span>11:00 AM - 1:00 PM</span>
                                                        <span>6:00 PM - 11:00 PM</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="timings-days">
                                                        <span>Sat - Sun</span>
                                                    </p>
                                                    <p class="timings-times">
                                                        <span>8:00 AM - 10:00 AM</span>
                                                        <span>3:00 PM - 7:00 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="consult-price">
                                                $350
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div role="tabpanel" id="doc_reviews" class="tab-pane fade">

                                <div class="widget review-listing">
                                    <ul class="comments-list">

                                        <li>
                                            <div class="comment">
                                                <img class="avatar avatar-sm rounded-circle" alt="User Image"
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
                                                    <p class="recommended"><i class="far fa-thumbs-up"></i> I
                                                        recommend the
                                                        doctor</p>
                                                    <p class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
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
                                                        <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                            src="assets/img/patients/patient1.jpg">
                                                        <div class="comment-body">
                                                            <div class="meta-data">
                                                                <span class="comment-author">Charlene Reed</span>
                                                                <span class="comment-date">Reviewed 3 Days ago</span>
                                                                <div class="review-count rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <p class="comment-content">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna
                                                                aliqua.
                                                                Ut enim ad minim veniam.
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

                                        </li>


                                        <li>
                                            <div class="comment">
                                                <img class="avatar avatar-sm rounded-circle" alt="User Image"
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
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
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

                                    <div class="all-feedback text-center">
                                        <a href="javascript:;" class="btn btn-primary btn-sm">
                                            Show all feedback <strong>(167)</strong>
                                        </a>
                                    </div>

                                </div>


                                <div class="write-review">
                                    <h4>Write a review for <strong>Dr. Darren Elder</strong></h4>

                                    <form>
                                        <div class="mb-3">
                                            <label class="mb-2">Review</label>
                                            <div class="star-rating">
                                                <input id="star-5" type="radio" name="rating" value="star-5">
                                                <label for="star-5" title="5 stars">
                                                    <i class="active fa fa-star"></i>
                                                </label>
                                                <input id="star-4" type="radio" name="rating" value="star-4">
                                                <label for="star-4" title="4 stars">
                                                    <i class="active fa fa-star"></i>
                                                </label>
                                                <input id="star-3" type="radio" name="rating" value="star-3">
                                                <label for="star-3" title="3 stars">
                                                    <i class="active fa fa-star"></i>
                                                </label>
                                                <input id="star-2" type="radio" name="rating" value="star-2">
                                                <label for="star-2" title="2 stars">
                                                    <i class="active fa fa-star"></i>
                                                </label>
                                                <input id="star-1" type="radio" name="rating" value="star-1">
                                                <label for="star-1" title="1 star">
                                                    <i class="active fa fa-star"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Title of your review</label>
                                            <input class="form-control" type="text"
                                                placeholder="If you could say it in one sentence, what would you say?">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Your review</label>
                                            <textarea id="review_desc" maxlength="100" class="form-control"></textarea>
                                            <div class="d-flex justify-content-between mt-3"><small
                                                    class="text-muted"><span id="chars">100</span> characters
                                                    remaining</small></div>
                                        </div>
                                        <hr>
                                        <div class="mb-3">
                                            <div class="terms-accept">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="terms_accept">
                                                    <label for="terms_accept">I have read and accept <a
                                                            href="terms-condition.html">Terms
                                                            &amp; Conditions</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-section">
                                            <button type="submit" class="btn btn-primary submit-btn">Add
                                                Review</button>
                                        </div>
                                    </form>

                                </div>

                            </div>


                            <div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">

                                        <div class="widget business-widget">
                                            <div class="widget-content">
                                                <div class="listing-hours">
                                                    <div class="listing-day current">
                                                        <div class="day">Today <span>14 Jul 2023</span></div>
                                                        <div class="time-items">
                                                            <span class="open-status"><span
                                                                    class="badge bg-success-light">Open
                                                                    Now</span></span>
                                                            <span class="time">07:00 AM - 09:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="listing-day">
                                                        <div class="day">Monday</div>
                                                        <div class="time-items">
                                                            <span class="time">07:00 AM - 09:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="listing-day">
                                                        <div class="day">Tuesday</div>
                                                        <div class="time-items">
                                                            <span class="time">07:00 AM - 09:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="listing-day">
                                                        <div class="day">Wednesday</div>
                                                        <div class="time-items">
                                                            <span class="time">07:00 AM - 09:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="listing-day">
                                                        <div class="day">Thursday</div>
                                                        <div class="time-items">
                                                            <span class="time">07:00 AM - 09:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="listing-day">
                                                        <div class="day">Friday</div>
                                                        <div class="time-items">
                                                            <span class="time">07:00 AM - 09:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="listing-day">
                                                        <div class="day">Saturday</div>
                                                        <div class="time-items">
                                                            <span class="time">07:00 AM - 09:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="listing-day closed">
                                                        <div class="day">Sunday</div>
                                                        <div class="time-items">
                                                            <span class="time"><span
                                                                    class="badge bg-danger-light">Closed</span></span>
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
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/doctor-profile.blade.php ENDPATH**/ ?>