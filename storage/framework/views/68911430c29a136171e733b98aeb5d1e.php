<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Search</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo e(Route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Search</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                        <div class="card search-filter">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Search Filter</h4>
                            </div>
                            <div class="card-body">
                                
                                <form action="<?php echo e(Route('search')); ?>" method="GET">


                                    <div class="filter-widget">
                                        <h4>Gender</h4>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="gender"  value="Male">
                                            <span class="checkmark"></span> Male Doctor
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span> Female Doctor
                                        </label>
                                    </div>
                                 </div>
                                 <div class="filter-widget">
                                    <h4>Select Specialist</h4>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="specialization" value="Urology" >
                                            <span class="checkmark"></span> Urology
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="specialization" value="Neurology" >
                                            <span class="checkmark"></span> Neurology
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="specialization" value="Dentist">
                                            <span class="checkmark"></span> Dentist
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="specialization" value="Orthopedic">
                                            <span class="checkmark"></span> Orthopedic
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="specialization" value="Cardiologist">
                                            <span class="checkmark"></span> Cardiologist
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="specialization" value="Immunology">
                                            <span class="checkmark"></span> Immunology
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="specialization" value="Dermatology">
                                            <span class="checkmark"></span> Dermatology
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="specialization" value="Radiology">
                                            <span class="checkmark"></span> Radiology
                                        </label>
                                    </div>
                                </div>
                                <div class="btn-search">
                                    <input type="submit" class="btn w-100" value="Search">
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-9">

                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card">
                            <div class="card-body">
                                <div class="doctor-widget">
                                    <div class="doc-info-left">
                                        
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="doctor-profile.html"><?php echo e($doctor->username); ?></a>
                                            </h4>
                                            <p class="doc-speciality"><?php echo e($doctor->degree); ?></p>
                                            <h5 class="doc-department"><img
                                                src="<?php echo e(asset('assets/img/specialities/specialities-05.png')); ?>"
                                                class="img-fluid" alt="Speciality"><?php echo e($doctor->speciality); ?></h5>
                                                <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(17)</span>
                                            </div>
                                            <div class="clinic-details">
                                                <p class="doc-location"><i class="fas fa-map-marker-alt"></i> <?php echo e($doctor->state); ?></p>
                                                    <ul class="clinic-gallery">
                                                        <li>
                                                        <a href="<?php echo e(asset('assets/img/features/feature-01.jpg')); ?>"
                                                            data-fancybox="gallery">
                                                            <img src="<?php echo e(asset('assets/img/features/feature-01.jpg')); ?>"
                                                            alt="Feature">
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="assets/img/features/feature-02.jpg"
                                                        data-fancybox="gallery">
                                                        <img src="<?php echo e(asset('assets/img/features/feature-02.jpg')); ?>"
                                                        alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="assets/img/features/feature-03.jpg"
                                                    data-fancybox="gallery">
                                                    <img src="<?php echo e(asset('assets/img/features/feature-03.jpg')); ?>"
                                                    alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-04.jpg"
                                                        data-fancybox="gallery">
                                                        <img src="<?php echo e(asset('assets/img/features/feature-04.jpg')); ?>"
                                                        alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span><?php echo e($doctor->services); ?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            
                                            <li><i class="fas fa-map-marker-alt"></i><?php echo e($doctor->state , $doctor->city); ?></li>
                                            <li><i class="far fa-money-bill-alt"></i> $100 <i
                                                class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                        title="Lorem Ipsum"></i> </li>
                                                    </ul>
                                                </div>
                                                <div class="clinic-booking">
                                                    <a class="view-pro-btn" href="<?php echo e(route('profile_view', ['id' => $doctor->id])); ?>">View Profile</a>
                                                    <a class="apt-btn" href="<?php echo e(route('booking', ['id' => $doctor->id])); ?>">Book Appointment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>




        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Doctors\resources\views/search.blade.php ENDPATH**/ ?>