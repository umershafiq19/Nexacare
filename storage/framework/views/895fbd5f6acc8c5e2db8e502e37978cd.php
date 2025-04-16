<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="content top-space">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">

                            <div class="account-content">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-7 col-lg-6 login-left">
                                        <img src="<?php echo e(asset('assets/img/login-banner.png')); ?>" class="img-fluid"
                                            alt="Login Banner">
                                    </div>
                                    <div class="col-md-12 col-lg-6 login-right">
                                        <div class="login-header">
                                            <h3>Doctor Register <a href="<?php echo e(Route('register')); ?>">Not a Doctor?</a></h3>
                                        </div>

                                        <form
                                            action="<?php echo e(Route('doctor_register')); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('POST'); ?>
                                            <div class="mb-3 form-focus">
                                                <input type="text" class="form-control floating" name="name">
                                                <label class="focus-label">Name</label>
                                            </div>
                                            <div class="mb-3 form-focus">
                                                <input type="email" class="form-control floating" name="email">
                                                <label class="focus-label">Email</label>
                                            </div>
                                            <div class="mb-3 form-focus">
                                                <input class="form-control pass-input floating" type="password" name="password">
                                                <label class="focus-label">Create Password</label>
                                            </div>
                                            <div class="text-end">
                                                <a class="forgot-link" href="<?php echo e(Route('login')); ?>">Already have an account?</a>
                                            </div>
                                            <button class="btn btn-primary w-100 btn-lg login-btn"
                                                type="submit">Signup</button>
                                            
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


           <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/doctor-register.blade.php ENDPATH**/ ?>