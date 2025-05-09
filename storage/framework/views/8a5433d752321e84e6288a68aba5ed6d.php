

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="onboard-wrapper">
        <div class="left-panel">
            <div class="onboarding-logo text-center">
                <a href="https://doccure-laravel.dreamguystech.com/template/public"><img
                        src="assets/img/onboard-img/onb-logo.png" class="img-fluid" alt="doccure-logo"></a>
            </div>
            <div class="onboard-img">
                <img src="assets/img/onboard-img/onb-slide-img.png" class="img-fluid" alt="onboard-slider">
            </div>
            <div class="onboarding-slider">

                <div id="onboard-slider" class="owl-carousel owl-theme onboard-slider slider">

                    <div class="onboard-item text-center">
                        <div class="onboard-content">
                            <h3>Welcome to Doccure</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>


                    <div class="onboard-item text-center">
                        <div class="onboard-content">
                            <h3>Welcome to Doccure</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>


                    <div class="onboard-item text-center">
                        <div class="onboard-content">
                            <h3>Welcome to Doccure</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="right-panel">
            <div class="container">
                <div class="onboarding-content passcode-wrap mail-box">
                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <div class="right-panel-title text-center">
                                <a href="https://doccure-laravel.dreamguystech.com/template/public"> <img
                                        src="assets/img/onboard-img/onb-logo.png" alt="doccure-logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="on-board-wizard">
                                <ul>
                                    <li>
                                        <a href="patient-email.html">
                                            <div class="onboarding-progress active">
                                                <span>1</span>
                                            </div>
                                            <div class="onboarding-list">
                                                <h6>Registration</h6>
                                                <p>Enter Details for Register </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="patient-Personalize.html">
                                            <div class="onboarding-progress active">
                                                <span>2</span>
                                            </div>
                                            <div class="onboarding-list">
                                                <h6>Profile Picture</h6>
                                                <p>Upload Profile picture</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="patient-details.html">
                                            <div class="onboarding-progress active">
                                                <span>3</span>
                                            </div>
                                            <div class="onboarding-list">
                                                <h6>Personal Details</h6>
                                                <p>Enter your Personal Details</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="patient-family-details.html">
                                            <div class="onboarding-progress">
                                                <span>4</span>
                                            </div>
                                            <div class="onboarding-list">
                                                <h6>Select Members</h6>
                                                <p>Enter Details for Register </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="patient-dependant-details.html">
                                            <div class="onboarding-progress">
                                                <span>5</span>
                                            </div>
                                            <div class="onboarding-list">
                                                <h6>Dependant details</h6>
                                                <p>Dependants Profile</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="patient-other-details.html">
                                            <div class="onboarding-progress">
                                                <span>6</span>
                                            </div>
                                            <div class="onboarding-list">
                                                <h6>Other Detail</h6>
                                                <p>More information</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="onboarding-content-box content-wrap">
                                <div class="onboarding-title">
                                    <h2>What are your personal details? <span>*</span></h2>
                                    <h6>Please provide your personal information</h6>
                                </div>
                                <div class="patient-details-form">
                                    <div class="login-header">
                                        <form id="personal_details" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <div class="row select-gender-option">
                                                    <div class="col-6">
                                                        <div class="option-set">
                                                            <input type="radio" id="test1" name="gender"
                                                                value="Male">
                                                            <label for="test1">
                                                                <span><i class="fas fa-mars"></i> Male</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <input type="radio" id="test2" name="gender"
                                                            value="Female">
                                                        <label for="test2">
                                                            <span><i class="fas fa-venus"></i> Female</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="mb-3">
                                                        <div class="passcode-wrap input-placeholder form-focus">
                                                            <label class="focus-label">Your
                                                                Weight<span>*</span></label>
                                                            <input type="text" class="form-control floating"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <select class="select">
                                                            <option selected>KG</option>
                                                            <option>LBS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="mb-3">
                                                        <div class="passcode-wrap input-placeholder form-focus">
                                                            <label class="focus-label">Your
                                                                Height<span>*</span></label>
                                                            <input type="text" class="form-control floating"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <select class="select">
                                                            <option selected>CM</option>
                                                            <option>FEET</option>
                                                            <option>INCH</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="passcode-wrap input-placeholder form-focus">
                                                            <label class="focus-label">Age<span>*</span></label>
                                                            <input type="text" class="form-control floating"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <select class="select">
                                                            <option disabled selected>Blood Type</option>
                                                            <option>O+ve</option>
                                                            <option>O-ve</option>
                                                            <option>B+ve</option>
                                                            <option>B-ve</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="passcode-wrap input-placeholder form-focus">
                                                            <label class="focus-label">Heart Rate<span>*</span></label>
                                                            <input type="text" class="form-control floating"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="passcode-wrap input-placeholder form-focus">
                                                            <label class="focus-label">Blood Pressure
                                                                <span>*</span></label>
                                                            <input type="text" class="form-control floating"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="passcode-wrap input-placeholder form-focus">
                                                            <label class="focus-label">Glucose Level
                                                                <span>*</span></label>
                                                            <input type="text" class="form-control floating"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="passcode-wrap input-placeholder form-focus">
                                                            <label class="focus-label">Allergies <span>*</span></label>
                                                            <input type="text" class="form-control floating"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="pregnant-col pt-4">
                                                            <div>
                                                                <div
                                                                    class="remember-me-col d-flex justify-content-between align-items-center">
                                                                    <span class="mt-1">Are you Pregnant</span>
                                                                    <label class="custom_check">
                                                                        <input type="checkbox" class
                                                                            id="is_registered" name="pregnant"
                                                                            value="1">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="step-process-col mt-4">
                                                            <div class="mb-3" id="preg_div"
                                                                style="display: none;">
                                                                <select class=" select form-control" id="preg_term"
                                                                    name="preg_term" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option selected value>Select Your
                                                                        Pregnancy Month</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value>7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <div class="checklist-col">
                                                                <div
                                                                    class="remember-me-col d-flex justify-content-between align-items-center">
                                                                    <span class="mt-1">Do you have any pre-exisiting
                                                                        conditions?</span>
                                                                    <label class="custom_check">
                                                                        <input type="checkbox" class name="cancer"
                                                                            id="cancer" onclick="show_cancer()"
                                                                            value="1">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="remember-me-col" id="cancer_div"
                                                                    style="display:none">
                                                                    <div class="condition_input">
                                                                        <input type="text" id="conditions"
                                                                            name="conditions[]" class="form-control"
                                                                            placeholder>
                                                                    </div>
                                                                    <a href="javascript:void(0);"
                                                                        class="add_condition"><i
                                                                            class="fa fa-plus"></i></a>
                                                                </div>
                                                                <div
                                                                    class="remember-me-col d-flex justify-content-between align-items-center">
                                                                    <span class="mt-1">Are you currently taking any
                                                                        medication</span>
                                                                    <label class="custom_check">
                                                                        <input type="checkbox" class name="medicine"
                                                                            id="medicine" onclick="show_medicine()"
                                                                            value="1">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="remember-me-col" id="medicine_div"
                                                                    style="display:none">
                                                                    <div class="medicine_input">
                                                                        <input type="text" id="medicine_name"
                                                                            name="medicine_name[]" value
                                                                            class="form-control"
                                                                            placeholder="Enter medicine_name">
                                                                        <input type="text" value id="dosage"
                                                                            name="dosage[]" class="form-control"
                                                                            placeholder="Enter dosage">
                                                                    </div>
                                                                    <a href="javascript:void(0);"
                                                                        class="add_medicine"><i
                                                                            class="fa fa-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="onboarding-btn">
                                    <a href="patient-family-details.html">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.7.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/aos.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>


    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/patient-details by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:53:15 GMT -->

</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/patient-details.blade.php ENDPATH**/ ?>