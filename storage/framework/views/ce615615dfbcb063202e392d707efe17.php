<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Change Password</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo e(Route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Change Password</li>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">

                                        <form action="<?php echo e(Route('password_change')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('Post'); ?>
                                            <div class="mb-3">
                                                <label class="mb-2">Old Password</label>
                                                <div class="pass-group">
                                                    <input class="form-control pass-input" type="password" name="old_password">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">New Password</label>
                                                <div class="pass-group">
                                                    <input class="form-control pass-input-sub" type="password" name="new_password">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Confirm Password</label>
                                                <div class="pass-group">
                                                    <input class="form-control pass-new-input" type="password" name="confirm_password">
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
            </div>
        </div>


        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/doctor-change-password.blade.php ENDPATH**/ ?>