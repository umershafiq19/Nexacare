<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">My Patients</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="<?php echo e(Route('index')); ?>">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">My Patients</li>
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
                <div class="row row-grid">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="patient-profile.html" class="booking-doc-img">
                                            <img src="assets/img/patients/patient.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3><a href="patient-profile.html">Richard Wilson</a></h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> P0016</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Alabama,
                                                    USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 952 001 8563</span></li>
                                        <li>Age <span>38 Years, Male</span></li>
                                        <li>Blood Group <span>AB+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="patient-profile.html" class="booking-doc-img">
                                            <img src="assets/img/patients/patient1.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3><a href="patient-profile.html">Charlene Reed</a></h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> P0001</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> North
                                                    Carolina, USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 828 632 9170</span></li>
                                        <li>Age <span>29 Years, Female</span></li>
                                        <li>Blood Group <span>O+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient2.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Travis Trimble </h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0002</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Maine,
                                                    USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 207 729 9974</span></li>
                                        <li>Age <span>23 Years, Male</span></li>
                                        <li>Blood Group <span>B+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient3.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Carl Kelly</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0003</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Indiana,
                                                    USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 260 724 7769</span></li>
                                        <li>Age <span>32 Years, Male</span></li>
                                        <li>Blood Group <span>A+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient4.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Michelle Fairfax</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0004</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Indiana,
                                                    USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 504 368 6874</span></li>
                                        <li>Age <span>25 Years, Female</span></li>
                                        <li>Blood Group <span>B+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient5.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Gina Moore</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0005</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Florida,
                                                    USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 954 820 7887</span></li>
                                        <li>Age <span>25 Years, Female</span></li>
                                        <li>Blood Group <span>AB-</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient6.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Elsie Gilley</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0006</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Kentucky,
                                                    USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 315 384 4562</span></li>
                                        <li>Age <span>14 Years, Female</span></li>
                                        <li>Blood Group <span>O-</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient7.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Joan Gardner</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0007</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>
                                                    California, USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 707 2202 603</span></li>
                                        <li>Age <span>25 Years, Female</span></li>
                                        <li>Blood Group <span>A-</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient8.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Daniel Griffing</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0007</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> New
                                                    Jersey, USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 973 773 9497</span></li>
                                        <li>Age <span>28 Years, Male</span></li>
                                        <li>Blood Group <span>O+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient9.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Walter Roberson</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0009</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Florida,
                                                    USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 850 358 4445</span></li>
                                        <li>Age <span>28 Years, Male</span></li>
                                        <li>Blood Group <span>A+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient10.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Robert Rhodes</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0010</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>
                                                    California, USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 858 259 5285</span></li>
                                        <li>Age <span>19 Years, Male</span></li>
                                        <li>Blood Group <span>B+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient11.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Harry Williams</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0011</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Colorado,
                                                    USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 303 607 7075</span></li>
                                        <li>Age <span>9 Years, Male</span></li>
                                        <li>Blood Group <span>A-</span></li>
                                    </ul>
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
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/my-patients.blade.php ENDPATH**/ ?>