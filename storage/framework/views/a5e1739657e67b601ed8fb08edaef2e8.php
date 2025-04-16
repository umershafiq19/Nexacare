<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="keywords"
        content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
    <meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
    <meta property="og:url" content="https://doccure.dreamguystech.com/html/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
    <meta property="og:description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta property="og:image" content="assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://doccure.dreamguystech.com/html/">
    <meta property="twitter:url" content="https://doccure.dreamguystech.com/html/">
    <meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
    <meta name="twitter:description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="twitter:image" content="assets/img/preview-banner.jpg">
    <title>Doccure</title>

    <link rel="icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome/css/all.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/feather.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
</head>

<body>

    <div class="main-wrapper">

        <header class="header header-trans header-two">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="<?php echo e(Route('index')); ?>" class="navbar-brand logo">
                            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.html" class="menu-logo">
                                <img src="<?php echo e(asset('assets/img/logo.png')); ?>" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu megamenu active">
                                <a href="<?php echo e(Route('index')); ?>">Home </a>
                                


                            </li>
                            <?php if(auth()->check() && auth()->user()->role === 'doctor'): ?>
                            <li class="has-submenu ">
                                <a href="javascript:void(0);">Doctors <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li class><a href="<?php echo e(Route('doctor_dashboard')); ?>">Doctor Dashboard</a></li>
                                    <li class><a href="<?php echo e(Route('appointments')); ?>">Appointments</a></li>
                                    <li class><a href="<?php echo e(Route('schedule')); ?>">Schedule Timing</a></li>
                                    
                                    
                                    <li class><a href="<?php echo e(Route('doctor_chat')); ?>">Chat</a></li>
                                    
                                    <li class><a href="<?php echo e(Route('doctor_profile')); ?>">Profile Settings</a></li>
                                    
                                    <li class><a href="<?php echo e(Route('registerDoctor')); ?>">Doctor Register</a></li>
                                    <li class="has-submenu ">
                                        
                                        <ul class="submenu">
                                            <li class>
                                                
                                            </li>
                                            
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php if(auth()->check() && auth()->user()->role === 'patient'): ?>
                            <li class="has-submenu ">
                                <a href="javascript:void(0);">Patients <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    
                                        
                                        
                                        
                                    <li class="has-submenu ">
                                        <a href="<?php echo e(Route('search')); ?>">Search Doctor</a>
                                        
                                            
                                            
                                        
                                    </li>
                                    
                                    <li class="has-submenu ">
                                        
                                        
                                            
                                            
                                            
                                        </li>
                                    
                                    
                                    <li class>
                                        <a href="<?php echo e(Route('dashboard')); ?>">Patient
                                            Dashboard</a>
                                        </li>
                                        
                                        <li class><a href="<?php echo e(Route('chat')); ?>">Chat</a>
                                        </li>
                                        <li class><a href="<?php echo e(Route('profile')); ?>">Profile Settings</a></li>
                                        
                                    </ul>
                            </li>
                            <?php endif; ?>
                             <?php if(auth()->check() && auth()->user()->role === 'admin'): ?>
                            <li class="has-submenu ">
                                <a href="<?php echo e(Route('admin_dashboard')); ?>">Admin </a>



                            <?php endif; ?>




                            <?php if(auth()->guard()->guest()): ?>

                            <li class="login-link"><a href="<?php echo e(Route('login')); ?>">Login / Signup</a></li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login" href="<?php echo e(Route('login')); ?>">login / Signup </a>
                        </li>
                        <?php endif; ?>
                    </ul>

                </nav>
            </div>
            <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        </header>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/layouts/header.blade.php ENDPATH**/ ?>