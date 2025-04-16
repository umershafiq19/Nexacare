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
                        
                            <?php echo $__env->make('layouts.patient_dashboard_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            
                        
                    </div>

                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">

                                <form action="<?php echo e(Route('profile_create')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="mb-3">
                                                <div class="change-avatar">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">First Name</label>
                                                <input type="text" class="form-control"  value="<?php echo e(old('first_name')); ?>" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Last Name</label>
                                                <input type="text" class="form-control"  value="<?php echo e(old('last_name')); ?>" name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Date of Birth</label>
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control datetimepicker"
                                                        value="<?php echo e(old('date_of_birth')); ?>" name="date_of_birth">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Blood Group</label>
                                                <select class="form-select form-control select" name="blood_group" >
                                                    <option value="A-">A-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="O+">O+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Email ID</label>
                                                <input type="email" class="form-control"
                                                    name="email"  value="<?php echo e(old('email')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Mobile</label>
                                                <input type="text" value="<?php echo e(old('phone')); ?>" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="mb-2">Address</label>
                                                <input type="text" class="form-control"
                                                value="<?php echo e(old('address')); ?>" name="address">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">City</label>
                                                <input type="text" class="form-control" value="<?php echo e(old('city')); ?>" name="city">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">State</label>
                                                <input type="text" class="form-control" value="<?php echo e(old('state')); ?>" name="state">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Zip Code</label>
                                                <input type="text" class="form-control" value="<?php echo e(old('zip_code')); ?>" name="zip_code">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Country</label>
                                                <input type="text" class="form-control" value="<?php echo e(old('country')); ?>" name="country">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <input type="submit" class="btn btn-primary submit-btn" value="Save Changes">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/profile-settings.blade.php ENDPATH**/ ?>