<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/admin/form-validation by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:53:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
<meta name="keywords" content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
<meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
<meta property="og:url" content="https://doccure.dreamguystech.com/html/">
<meta property="og:type" content="website">
<meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
<meta property="og:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
<meta property="og:image" content="assets/img/preview-banner.html">
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="https://doccure.dreamguystech.com/html/">
<meta property="twitter:url" content="https://doccure.dreamguystech.com/html/">
<meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
<meta name="twitter:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
<meta name="twitter:image" content="assets/img/preview-banner.html">
<title>Doccure - Form Validation</title>

<link rel="shortcut icon" type="image/x-icon" href="../assets_admin/img/favicon.png">

<link rel="stylesheet" href="../assets_admin/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets_admin/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="../assets_admin/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="../assets_admin/css/feather.css">

<link rel="stylesheet" href="../assets_admin/css/feathericon.min.css">
<link rel="stylesheet" href="../assets_admin/plugins/morris/morris.css">

<link rel="stylesheet" href="../assets_admin/css/select2.min.css">

<link rel="stylesheet" href="../assets_admin/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="../assets_admin/plugins/fullcalendar/fullcalendar.min.css">

<link rel="stylesheet" href="../assets_admin/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="../assets_admin/css/custom.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index_admin.html" class="logo">
<img src="../assets_admin/img/logo.png" alt="Logo">
</a>
<a href="index_admin.html" class="logo logo-small">
<img src="../assets_admin/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown noti-dropdown">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="fe fe-bell"></i> <span class="badge rounded-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="notify-block d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/doctors/doctor-thumb-01.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="notify-block d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/patients/patient1.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="notify-block d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/patients/patient2.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="notify-block d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/patients/patient3.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="../assets_admin/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Ryan Taylor</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
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
<li class>
<a href="index_admin.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
</li>
<li class>
<a href="appointment-list.html"><i class="fe fe-layout"></i>
<span>Appointments</span></a>
</li>
<li class>
<a href="specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
</li>
<li class>
<a href="doctor-list.html"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
</li>
<li class>
<a href="patient-list.html"><i class="fe fe-user"></i> <span>Patients</span></a>
</li>
<li class>
<a href="reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
</li>
<li class>
<a href="transactions-list.html"><i class="fe fe-activity"></i>
<span>Transactions</span></a>
</li>
<li class>
<a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="invoice-report.html">Invoice Reports</a></li>
</ul>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class>
<a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="login.html"> Login </a></li>
<li><a class href="register.html"> Register </a></li>
<li><a class href="forgot-password.html"> Forgot Password </a></li>
<li><a class href="lock-screen.html"> Lock Screen </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="error-404.html">404 Error </a></li>
<li><a class href="error-500.html">500 Error </a></li>
</ul>
</li>
<li>
<a class href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li class>
<a class href="components.html"><i class="fe fe-vector"></i> <span>Components</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-layout"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a class href="form-input-groups.html">Input Groups </a></li>
<li><a class href="form-horizontal.html">Horizontal Form</a></li>
<li><a class href="form-vertical.html"> Vertical Form </a></li>
<li><a class href="form-mask.html"> Form Mask </a></li>
<li><a class="active" href="form-validation.html"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="tables-basic.html">Basic Tables </a></li>
<li><a class href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Form Validation</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index_admin.html">Dashboard</a></li>
<li class="breadcrumb-item active">Form Validation</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Custom Bootstrap Form Validation</h5>
<p class="card-text">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your form. For server side validation <a href="https://getbootstrap.com/docs/4.1/components/forms/#server-side" target="_blank">read full documentation</a>.</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate>
<div class="row">
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationCustom01">First name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationCustom02">Last name</label>
<input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationCustomUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend">@</span>
<input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label class="mb-2" for="validationCustom03">City</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
<div class="invalid-feedback">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label class="mb-2" for="validationCustom04">State</label>
<input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
<div class="invalid-feedback">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label class="mb-2" for="validationCustom05">Zip</label>
<input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
<div class="invalid-feedback">
Please provide a valid zip.
</div>
</div>
</div>
<div class="mb-3">
<div class="form-check">
<input class="form-check-input" type="checkbox" value id="invalidCheck" required>
<label class="form-check-label" for="invalidCheck">
Agree to terms and conditions
</label>
<div class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Browser defaults</h5>
<p class="card-text">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below.</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form>
<div class="row">
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationDefault01">First name</label>
<input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
</div>
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationDefault02">Last name</label>
<input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
</div>
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationDefaultUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend2">@</span>
<input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label class="mb-2" for="validationDefault03">City</label>
<input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
</div>
<div class="col-md-3 mb-3">
<label class="mb-2" for="validationDefault04">State</label>
<input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
</div>
<div class="col-md-3 mb-3">
<label class="mb-2" for="validationDefault05">Zip</label>
<input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
</div>
</div>
<div class="mb-3">
<div class="form-check">
<input class="form-check-input" type="checkbox" value id="invalidCheck2" required>
<label class="form-check-label" for="invalidCheck2">
Agree to terms and conditions
</label>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Server side</h5>
<p class="card-text">We recommend using client side validation, but in case you require server side, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
</div>
<div class="card-body">
<form>
<div class="row">
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationServer01">First name</label>
<input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationServer02">Last name</label>
<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationServerUsername">Username</label>
<div class="input-group">
<span class="input-group-text" id="inputGroupPrepend3">@</span>
<input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label class="mb-2" for="validationServer03">City</label>
<input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
<div class="invalid-feedback">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label class="mb-2" for="validationServer04">State</label>
<input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
<div class="invalid-feedback">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label class="mb-2" for="validationServer05">Zip</label>
<input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
<div class="invalid-feedback">
Please provide a valid zip.
</div>
</div>
</div>
<div class="mb-3">
<div class="form-check">
<input class="form-check-input is-invalid" type="checkbox" value id="invalidCheck3" required>
<label class="form-check-label" for="invalidCheck3">
Agree to terms and conditions
</label>
<div class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Supported elements</h5>
<p class="card-text">Form validation styles are also available for bootstrap custom form controls.</p>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="was-validated">
<div class="form-check mb-3">
<input type="checkbox" class="form-check-input" id="customControlValidation1" required>
<label class="form-check-label" for="customControlValidation1">Check this custom checkbox</label>
<div class="invalid-feedback">Example invalid feedback text</div>
</div>
<div class="form-check">
<input type="radio" class="form-check-input" id="customControlValidation2" name="radio-stacked" required>
<label class="form-check-label" for="customControlValidation2">Toggle this custom radio</label>
</div>
<div class="form-check mb-3">
<input type="radio" class="form-check-input" id="customControlValidation3" name="radio-stacked" required>
<label class="form-check-label" for="customControlValidation3">Or toggle this other custom radio</label>
<div class="invalid-feedback">More example invalid feedback text</div>
</div>
<div class="mb-3">
<select class="form-select select" required>
<option value>Open this select menu</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
<div class="invalid-feedback">Example invalid custom select feedback</div>
</div>
<div class="mb-3">
<input type="file" class="form-control" id="validatedCustomFile" required>
<div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5 class="card-title">Tooltips</h5>
<p class="card-text">You can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
</div>
<div class="card-body">
<form class="needs-validation" novalidate>
<div class="row">
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationTooltip01">First name</label>
<input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
<div class="valid-tooltip">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationTooltip02">Last name</label>
<input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
<div class="valid-tooltip">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label class="mb-2" for="validationTooltipUsername">Username</label>
<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" required>
<div class="invalid-tooltip">
Please choose a unique and valid username.
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label class="mb-2" for="validationTooltip03">City</label>
<input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
<div class="invalid-tooltip">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label class="mb-2" for="validationTooltip04">State</label>
<input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
<div class="invalid-tooltip">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label class="mb-2" for="validationTooltip05">Zip</label>
<input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
<div class="invalid-tooltip">
Please provide a valid zip.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>

</div>
</div>

</div>
</div>

</div>


<script src="../assets_admin/js/jquery-3.7.0.min.js"></script>

<script src="../assets_admin/js/bootstrap.bundle.min.js"></script>

<script src="../assets_admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../assets_admin/js/form-validation.js"></script>

<script src="../assets_admin/js/jquery.maskedinput.min.js"></script>
<script src="../assets_admin/js/mask.js"></script>

<script src="../assets_admin/js/select2.min.js"></script>

<script src="../assets_admin/js/moment.min.js"></script>
<script src="../assets_admin/js/bootstrap-datetimepicker.min.js"></script>

<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="../assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>

<script src="../assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets_admin/plugins/datatables/datatables.min.js"></script>

<script src="../assets_admin/js/script.js"></script>
</body>

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/admin/form-validation by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:53:59 GMT -->
</html>
