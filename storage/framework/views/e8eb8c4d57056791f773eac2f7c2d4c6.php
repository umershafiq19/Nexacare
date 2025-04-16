<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Appointments</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo e(Route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Appointments</li>
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
                        <div class="appointments">

                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Richard Wilson</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 14 Nov 2023, 10.00 AM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="acdec5cfc4cddec8ecc9d4cdc1dcc0c982cfc3c1">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 923 782 4575</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient1.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Charlene Reed </a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 12 Nov 2023, 5.00 PM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> North Carolina, United States
                                            </h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="36555e57445a5358534453535276534e575b465a531855595b">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 828 632 9170</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient2.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Travis Trimble</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 11 Nov 2023, 8.00 PM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> Maine, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="07737566716e7473756e6a656b6247627f666a776b622964686a">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 207 729 9974</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient3.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Carl Kelly</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 9 Nov 2023, 9.00 AM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="d1b2b0a3bdbab4bdbda891b4a9b0bca1bdb4ffb2bebc">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 260 724 7769</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient4.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Michelle Fairfax</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 9 Nov 2023, 1.00 PM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> Indiana, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="a5c8ccc6cdc0c9c9c0c3c4ccd7c3c4dde5c0ddc4c8d5c9c08bc6cac8">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 504 368 6874</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient5.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Gina Moore</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 8 Nov 2023, 3.00 PM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="5c3b35323d3133332e391c39243d312c3039723f3331">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 954 820 7887</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient6.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Elsie Gilley</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 6 Nov 2023, 9.00 AM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> Kentucky, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="85e0e9f6ece0e2ece9e9e0fcc5e0fde4e8f5e9e0abe6eae8">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 315 384 4562</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient7.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Joan Gardner</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 5 Nov 2023, 12.00 PM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> California, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="a4cecbc5cac3c5d6c0cac1d6e4c1dcc5c9d4c8c18ac7cbc9">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 707 2202 603</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient8.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Daniel Griffing</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 5 Nov 2023, 7.00 PM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> New Jersey, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="d5b1b4bbbcb0b9b2a7bcb3b3bcbbb295b0adb4b8a5b9b0fbb6bab8">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 973 773 9497</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient9.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Walter Roberson</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 4 Nov 2023, 10.00 AM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="d6a1b7baa2b3a4a4b9b4b3a4a5b9b896b3aeb7bba6bab3f8b5b9bb">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 850 358 4445</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient10.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Robert Rhodes</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 4 Nov 2023, 11.00 AM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> California, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e99b868b8c9b9d9b81868d8c9aa98c91888499858cc78a8684">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 858 259 5285</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="javascript:;" class="btn btn-sm bg-info-light" data-bs-toggle="modal"
                                        data-bs-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>


                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="assets/img/patients/patient11.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">Harry Williams</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i> 3 Nov 2023, 6.00 PM</h5>
                                            <h5><i class="fas fa-map-marker-alt"></i> Colorado, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                    href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e981889b9b909e8085858088849aa98c91888499858cc78a8684">[email&#160;protected]</a>
                                            </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 303 607 7075</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">

                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/appointments.blade.php ENDPATH**/ ?>