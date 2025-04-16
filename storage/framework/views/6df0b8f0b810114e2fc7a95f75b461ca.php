<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Dashboard</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('index')); ?>">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Dashboard</li>
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
                <?php echo $__env->make('layouts.patient_dashboard_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
            </div>

            <div class="col-md-7 col-lg-8 col-xl-9">
                
                <div class="card">
                    <div class="card-body pt-0">

                        <nav class="user-tabs mb-4">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pat_appointments"
                                        data-bs-toggle="tab">Appointments</a>
                                </li>
                                
                                
                            </ul>
                        </nav>


                        <div class="tab-content pt-0">

                            <div id="pat_appointments" class="tab-pane fade show active">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0"
                                                id="patient-dashboard_data">
                                                <thead>
                                                    <tr>
                                                        <th>Doctor</th>
                                                        <th>Appt Date</th>
                                                        <th>time</th>
                                                        <th>Amount</th>

                                                        <th>Status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($appointment->doctor_name); ?></td>
                                                            <td><?php echo e($appointment->date); ?></td>
                                                            <td><?php echo e($appointment->time); ?></td>
                                                            <td>$100</td>
                                                             <?php if($appointment->status === 'pending'): ?>

                                                             <td>
                                                                 <button
                                                                 class="btn btn-sm bg-warning-light m-2"><?php echo e($appointment->status); ?></button>
                                                                </td>
                                                                <?php endif; ?>
                                                            <?php if($appointment->status === 'Confirmed'): ?>
                                                                <td>
                                                                    <button class="btn btn-sm bg-success-light m-2">
                                                                        <i class="fas fa-check"></i> Confirmed
                                                                    </button>
                                                                </td>
                                                            <?php elseif($appointment->status === 'Canceled'): ?>
                                                                <td>
                                                                    <button class="btn btn-sm bg-danger-light m-2">
                                                                        <i class="fas fa-times"></i> Canceled
                                                                    </button>
                                                                </td>
                                                            <?php endif; ?>


                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pat_prescriptions">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0"
                                                id="patient-dashboard-prescription_data">
                                                <thead>
                                                    <tr>
                                                        <th>Date </th>
                                                        <th>Name</th>
                                                        <th>Created by </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="pat_medical_records" class="tab-pane fade">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0"
                                                id="patient-dashboard-medical_data">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Date </th>
                                                        <th>Description</th>
                                                        <th>Attachment</th>
                                                        <th>Created</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="pat_billing" class="tab-pane fade">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0" id="pat_billing_table">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice No</th>
                                                        <th>Doctor</th>
                                                        <th>Amount</th>
                                                        <th>Paid On</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/patient-dashboard.blade.php ENDPATH**/ ?>