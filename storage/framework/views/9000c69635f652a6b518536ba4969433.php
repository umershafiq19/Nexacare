<div class="header">

    <div class="header-left">
        <a href="<?php echo e(Route('admin_dashboard')); ?>" class="logo">
            <img src="../assets_admin/img/logo.png" alt="Logo">
        </a>
        <a href="<?php echo e(Route('admin_dashboard')); ?>" class="logo logo-small">
            <img src="../assets_admin/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>

    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>
    

    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>


    <ul class="nav user-menu">

        


        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle"
                        src="../assets_admin/img/profiles/avatar-01.jpg" width="31"
                        alt="Ryan Taylor"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>Ryan Taylor</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                
                <a class="dropdown-item" href="<?php echo e(Route('logout_admin')); ?>">Logout</a>
            </div>
        </li>

    </ul>

</div>


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="active">
                    <a href="<?php echo e(Route('admin_dashboard')); ?>"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li class>
                    <a href="<?php echo e(Route('admin_appointments')); ?>"><i class="fe fe-layout"></i>
                        <span>Appointments</span></a>
                </li>
                
                <li class>
                    <a href="<?php echo e(Route('admin_doctors')); ?>"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
                </li>
                <li class>
                    <a href="<?php echo e(Route('admin_patients')); ?>"><i class="fe fe-user"></i> <span>Patients</span></a>
                </li>
                
                
                
                
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/layouts/admin_dashboard_sidebar.blade.php ENDPATH**/ ?>