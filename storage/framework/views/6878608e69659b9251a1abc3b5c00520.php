<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="javascript:;" class="booking-doc-img">
                <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3><?php echo e(Auth::user()->name); ?></h3>
                <div class="patient-details">
                    <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="<?php echo e(Route('doctor_dashboard')); ?>">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class>
                    <a href="<?php echo e(route('appointments')); ?>">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li class>
                    <a href="<?php echo e(Route('patients')); ?>">
                        <i class="fas fa-user-injured"></i>
                        <span>My Patients</span>
                    </a>
                </li>

                <li class>
                    <a href="<?php echo e(Route('available_timings')); ?>">
                        <i class="fas fa-clock"></i>
                        <span>Available Timings</span>
                    </a>
                </li>

                
                <li class>
                    <a href="<?php echo e(Route('doctor_chat')); ?>">
                        <i class="fas fa-comments"></i>
                        <span>Message</span>
                        <small class="unread-msg">23</small>
                    </a>
                </li>
                <li class>
                    <a href="<?php echo e(Route('doctor_profile')); ?>">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>

                <li class>
                    <a href="<?php echo e(Route('change_password')); ?>">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(Route('logout_doctor')); ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/layouts/doctor_dashboard_sidebar.blade.php ENDPATH**/ ?>