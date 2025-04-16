<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Profile Settings</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo e(Route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Profile Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <?php echo $__env->make('layouts.doctor_dashboard_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <form action="<?php echo e(Route('profile_create_doctor')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Information</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="change-avatar">
                                                
                                                
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Username <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">First Name <span
                                                class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="first_name" value="<?php echo e(old('first_name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="last_name" value="<?php echo e(old('last_name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Phone Number</label>
                                            <input type="text" class="form-control" name="phone_number" value="<?php echo e(old('phone_number')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Gender</label>
                                            <select class="form-select form-control select" name="gender" value="<?php echo e(old('gender')); ?>">
                                                <option>Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Date of Birth</label>
                                            <input type="text" class="form-control" name="date_of_birth" value="<?php echo e(old('date_of_birth')); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">About Me</h4>
                                <div class="mb-3">
                                    <label class="mb-2">Biography</label>
                                    <textarea class="form-control" rows="5" name="biography" value="<?php echo e(old('biography')); ?>"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Clinic Info</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Clinic Name</label>
                                            <input type="text" class="form-control" name="clinic_name" value="<?php echo e(old('clinic_name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Clinic Address</label>
                                            <input type="text" class="form-control" name="clinic_address" value="<?php echo e(old('clinic_address')); ?>">
                                        </div>
                                    </div>
                                    
                                        
                                    
                                </div>
                            </div>
                        </div>


                        <div class="card ">
                            <div class="card-body">
                                <h4 class="card-title">Contact Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Address Line 1</label>
                                            <input type="text" class="form-control" name="address_line_1" value="<?php echo e(old('address_line_1')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">Address Line 2</label>
                                            <input type="text" class="form-control" name="address_line_2" value="<?php echo e(old('address_line_2')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control" name="city" value="<?php echo e(old('city')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">State / Province</label>
                                            <input type="text" class="form-control" name="state" value="<?php echo e(old('state')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">Country</label>
                                            <input type="text" class="form-control" name="country" value="<?php echo e(old('country')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">Postal Code</label>
                                            <input type="text" class="form-control" name="postal_code" value="<?php echo e(old('postal_code')); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pricing</h4>
                                <div class="mb-3">
                                    <div id="pricing_select">
                                        <div class="custom-control form-check custom-control-inline">
                                            <input type="radio" id="price_free"
                                            class="form-check-input" value="free" checked name="pricing" >
                                            <label class="form-check-label" for="price_free">Free</label>
                                        </div>
                                            
                                        <div class="custom-control form-check custom-control-inline">
                                            <input type="radio" id="price_custom"
                                            value="custom" class="form-check-input"  name="pricing">
                                            <label class="form-check-label" for="price_custom">Custom Price (per
                                                hour)</label>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>


                        <div class="card services-card">
                            <div class="card-body">
                                <h4 class="card-title">Services and Specialization</h4>
                                <div class="mb-3">
                                    <label class="mb-2">Services</label>
                                    <input type="text" data-role="tagsinput" class="input-tags form-control"
                                    placeholder="Enter Services" name="services" value="<?php echo e(old('services')); ?>"
                                        id="services">
                                        <small class="form-text text-muted">Note : Type & Press enter to add new
                                        services</small>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">Specialization</label>
                                    <select class="form-select form-control select" name="specialization" value="<?php echo e(old('specialization')); ?>">
                                        <option>Select</option>
                                        <option value="urology">Urology</option>
                                        <option value="neurology">Neurology</option>
                                        <option value="orthopedic">Orthopedic</option>
                                        <option value="cardiologist">Cardiologist</option>
                                        <option value="dentist">Dentist</option>
                                        <option value="dentist">Immunology</option>
                                        <option value="dermatology">Dermatology</option>
                                        <option value="radiology">Radiology</option>
                                    </select>
                                </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">
                                <h4 class="card-title">Education</h4>
                                <div class="education-info">
                                    <div class="row education-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Degree</label>
                                                        <input type="text" class="form-control" name="degree" value="<?php echo e(old('degree')); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">College/Institute</label>
                                                        <input type="text" class="form-control" name="college" value="<?php echo e(old('college')); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Year of Completion</label>
                                                        <input type="text" class="form-control" name="year_of_completion" value="<?php echo e(old('year_of_completion')); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Experience</h4>
                                <div class="experience-info">
                                    <div class="row experience-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Hospital Name</label>
                                                        <input type="text" class="form-control" name="hospital_name" value="<?php echo e(old('hospital_name')); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">From</label>
                                                        <input type="text" class="form-control" name="from" value="<?php echo e(old('from')); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">To</label>
                                                        <input type="text" class="form-control" name="to" value="<?php echo e(old('to')); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Designation</label>
                                                        <input type="text" class="form-control" name="designation" value="<?php echo e(old('designation')); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                            </div>


                            


                            

                        <div class="submit-section submit-btn-bottom">
                            <input type="submit" class="btn btn-primary prime-btn" value="Save Changes">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/doctor-profile-settings.blade.php ENDPATH**/ ?>