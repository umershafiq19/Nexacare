<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Booking</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(Route('index')); ?>">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="booking-doc-info">
                            <a href="#" class="booking-doc-img">
                                <img src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" alt="User Image">
                            </a>
                            <div class="booking-info">
                                <h4><a href="#"><?php echo e($doctor_name); ?></a></h4>
                                
                                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo e($doctor_state); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-6">
                        <h4 class="mb-1"><?php echo e(now()->format('M d, Y')); ?></h4>
                        <p class="text-muted"><?php echo e(now()->format('l')); ?></p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 text-sm-end">
                        <div class="bookingrange btn btn-white btn-sm mb-3">
                            <i class="far fa-calendar-alt me-2"></i>
                            <span></span>
                            <i class="fas fa-chevron-down ms-2"></i>
                        </div>
                    </div>
                </div>

                <form action="<?php echo e(route('booking_appointment', ['id' => $doctor_id])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <input type="hidden" name="doctor_id" value="<?php echo e($doctor_id); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                    <input type="hidden" name="price" value="$100">


                    <div class="form-group">


                        <label for="date">Date:</label>


                        <input type="date" class="form-control" id="date" name="date" required>


                    </div>
                    <div class="form-group">
                        <label for="Purpose">Purpose</label>
                        <input type="text" class="form-control" id="purpose" name="purpose" required>
                    </div>



                    <div class="form-group">


                        <label for="time">Time:</label>


                        <select class="form-control" id="time" name="time" required>
                            <option value="9:00 AM">9:00 AM - 10:00 AM</option>
                            <option value="10:00 AM">10:00 AM - 11:00 AM</option>
                            <option value="11:00 AM">11:00 AM - 12:00 PM</option>
                            <option value="12:00 PM">12:00 PM - 1:00 PM</option>
                            <option value="1:00 PM">1:00 PM - 2:00 PM</option>
                            <option value="2:00 PM">2:00 PM - 3:00 PM</option>
                            <option value="3:00 PM">3:00 PM - 4:00 PM</option>
                            <option value="4:00 PM">4:00 PM - 5:00 PM</option>
                            <option value="5:00 PM">5:00 PM - 6:00 PM</option>
                            <option value="6:00 PM">6:00 PM - 7:00 PM</option>
                            <option value="7:00 PM">7:00 PM - 8:00 PM</option>
                            <option value="8:00 PM">8:00 PM - 9:00 PM</option>
                            <option value="9:00 PM">9:00 PM - 10:00 PM</option>
                        </select>


                    </div>
                    
                    <div class="submit-section proceed-btn text-end">
                        <input type="submit" class="btn btn-primary submit-btn" value="Book Appointment">
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/booking.blade.php ENDPATH**/ ?>