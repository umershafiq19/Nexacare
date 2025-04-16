

  <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content top-space">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Login <span>Doccure</span></h3>
                                    </div>
                                    <form method="Post" action="<?php echo e(Route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>
                                        <div class="mb-3 form-focus">
                                            <input type="email" class="form-control floating"
                                                value="" name="email" id="email">
                                            <label class="focus-label">Email</label>
                                        </div>
                                        <div class="mb-3 form-focus">
                                            <label class="focus-label">Password</label>
                                            <div class="pass-group">
                                                <input class="form-control pass-input floating" type="password"
                                                    value="" name="password" id="password">
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <button class="btn btn-primary w-100 btn-lg login-btn"
                                            type="submit">Login</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="row social-login">
                                            <div class="col-6">
                                                
                                            </div>
                                            <div class="col-6">
                                                
                                            </div>
                                        </div>
                                        <div class="text-center dont-have">Don’t have an account? <a
                                                href="<?php echo e(Route('register')); ?>">Register</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

 <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/login.blade.php ENDPATH**/ ?>