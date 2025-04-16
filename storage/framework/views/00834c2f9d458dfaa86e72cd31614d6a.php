
<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="javascript:;" class="booking-doc-img">
                <img src="<?php echo e(asset('assets/img/patients/patient.jpg')); ?>" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3><?php echo e(auth()->user()->name); ?></h3>
                <div class="patient-details">
                    
                </div>
            </div>
        </div>
    </div>


<div class="dashboard-widget">
    <nav class="dashboard-menu">
        <ul>
            <li class="active">
                <a href="<?php echo e(Route('dashboard')); ?>">
                    <i class="fas fa-columns"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class>
                <a href="<?php echo e(Route('chat')); ?>">
                    <i class="fas fa-comments"></i>
                    <span>Message</span>
                    <small class="unread-msg">23</small>
                </a>
            </li>

            
            
            <li class="">
                <a href="<?php echo e(Route('profile')); ?>">
                    <i class="fas fa-user-cog"></i>
                    <span>Profile Settings</span>
                </a>
            </li>
            <li class>
                <a href="<?php echo e(Route('change_password_patient')); ?>">
                    <i class="fas fa-lock"></i>
                    <span>Change Password</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(Route('logout')); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</div>



<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/layouts/patient_dashboard_sidebar.blade.php ENDPATH**/ ?>