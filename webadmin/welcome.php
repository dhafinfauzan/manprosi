<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>Manprosi</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="welcome.php" class="b-brand">
                    <div class="b-bg">
                        <img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">
                    </div>
                    <span class="b-title">Dhafin Fauzan</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="welcome.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Aset Lab</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="bc_button.html" class="">PC</a></li>
                            <li class=""><a href="bc_badges.html" class="">Proyektor</a></li>
                            <li class=""><a href="bc_breadcrumb-pagination.html" class="">Meja</a></li>
                            <li class=""><a href="bc_collapse.html" class="">Kursi</a></li>
                            <li class=""><a href="bc_tabs.html" class="">Mouse and keyboard</a></li>
                            <li class=""><a href="bc_typography.html" class="">Cables</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Denah Komputer FRI</label>
                    </li>
                    <li data-username="Maps Google" class="nav-item"><a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Denah Ruangan</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="sample-page.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>
                    <li data-username="Disabled Menu" class="nav-item disabled"><a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>Soeng Souy</span>
                                <a href="logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="reset_password.php" class="dropdown-item"><i class="feather icon-lock"></i> Change Password</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-8 col-md-6">
    <div class="card Recent-Users">
        <div class="card-header">
            <h5>Komplain Aset Laboratorium</h5>
        </div>
        <div class="card-block px-0 py-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr class="unread">
                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                            <td>
                                <h6 class="mb-1">Komplain PC Rusak</h6>
                                <p class="m-0">PC di lab 301 tidak bisa dinyalakan.</p>
                            </td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-yellow f-10 m-r-15"></i>11 MAY 12:56</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Resolve</a></td>
                        </tr>
                        <tr class="unread">
                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                            <td>
                                <h6 class="mb-1">Komplain Proyektor Mati</h6>
                                <p class="m-0">Proyektor di lab 302 tidak menampilkan gambar.</p>
                            </td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-yellow f-10 m-r-15"></i>11 MAY 10:35</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Resolve</a></td>
                        </tr>
                        <!-- Menambahkan baris komplain untuk Meja, Kursi, Mouse and Keyboard -->
                        <!-- Sesuaikan dengan informasi yang relevan -->
                        <tr class="unread">
                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                            <td>
                                <h6 class="mb-1">Komplain Meja Patah</h6>
                                <p class="m-0">Meja di lab 303 patah dan tidak dapat digunakan.</p>
                            </td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-yellow f-10 m-r-15"></i>9 MAY 17:38</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Resolve</a></td>
                        </tr>
                        <!-- ... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
                                <!--[ Recent Users ] end-->
                                <!-- [ statistics year chart ] start -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card card-event">
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col">
                                                    <h5 class="m-0">Today's Work</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="label theme-bg2 text-white f-14 f-w-400 float-right">Check</label>
                                                </div>
                                            </div>
                                            <h2 class="mt-3 f-w-300">3<sub class="text-muted f-14">Unfinished</sub></h2>
                                            <h2 class="mt-3 f-w-300">2<sub class="text-muted f-14">Finished</sub></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ statistics year chart ] end -->
                                <div class="col-xl-8 col-md-12 m-b-30">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">This Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">All</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Activity</th>
                                                        <th>Time</th>
                                                        <th>Status</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Siti Zubaedah</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">PC 301 tidak bisa dinyalakan</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">12:56 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-yellow">Not Resolved</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-yellow f-10"></i></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user">Roy Uchiha</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">Proyektor di lab 302 tidak menampilkan gambar</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">10.35 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-yellow">Not Resolved</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-yellow f-10"></i></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user">Nunung Kazama</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">Meja di lab 303 patah dan tidak dapat digunakan.</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">17:38 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-yellow">Not Resolved</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-yellow f-10"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">Kursi di lab integra R3 patah dan menyebabkan cedera</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">4:28 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-green">Done</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Syifa Melon</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">Kabel di lab integra R3 putus dan hampir kebakaran</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">4:28 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-green">Done</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Activity</th>
                                                        <th>Time</th>
                                                        <th>Status</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user">Albert Andersen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">Jumps over the lazy</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">2:37 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-red">Missed</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-red f-10"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">The quick brown fox</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">3:28 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-green">Done</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">The quick brown fox</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">4:28 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-green">Done</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user">Silje Larsen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">Dog the quick brown</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">10:23 AM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-purple">Delayed</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-purple f-10"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Activity</th>
                                                        <th>Time</th>
                                                        <th>Status</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user">Silje Larsen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">Dog the quick brown</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">10:23 AM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-purple">Delayed</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-purple f-10"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">The quick brown fox</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">3:28 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-green">Done</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user">Albert Andersen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">Jumps over the lazy</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">2:37 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-red">Missed</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-red f-10"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">The quick brown fox</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0">4:28 PM</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-c-green">Done</h6>
                                                        </td>
                                                        <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
