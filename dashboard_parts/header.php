<?php

$id = $_SESSION['id'];
$select = "SELECT * FROM manage WHERE id = $id";
$res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/Raze/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/Raze/assets/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/Raze/assets/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="/Raze/assets/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/Raze/assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="/Raze/assets/assets/css/style.css" />
    <style>
        a:hover {
            text-decoration: none;
            color: whitesmoke;
        }

        a {
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">

            </div>
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <h3 class="mb-5">PRIXIMA</h3>
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="/Raze/uploads/users/<?= $after_assoc['img'] ?>" alt="">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column pr-3">
                            
                            <span class="font-weight-medium mb-2"><?= $after_assoc['name'] ?></span>
                            <span class="font-weight-normal">User</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Raze/dashboard.php">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="/Raze/user_details/users.php">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">User List</span>
                    </a>
                </li> -->
                <li class="nav-item sidebar-actions">
                    <div class="nav-link">
                        <div class="mt-4">
                            <ul class="mt-4 pl-0">
                                <a href="/Raze/index.php">Back To Home</a>
                                <br>
                                <a href="/Raze/logout.php">Sign Out</a>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3">Dark</div>
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles light"></div>
                    <div class="tiles dark"></div>
                </div>
            </div>
            <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                    <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="/Raze/assets/images/logo-mini.svg" alt="logo" /></a>
                    <button class="text-white navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                        <i class="text-white mdi mdi-menu"></i>
                    </button>

                    <ul class="navbar-nav navbar-nav-right ml-lg-auto">

                        <li class="nav-item nav-profile dropdown border-0">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <img class="nav-profile-img mr-2" alt="" src="/Raze/uploads/users/<?= $after_assoc['img'] ?>" />
                                <span class="text-white profile-name"><?= $after_assoc['name'] ?></span><i class="ml-3 fa-solid fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="/Raze/user_details/profile.php">
                                    <i class="mdi mdi-cached mr-2 text-success"></i> Profile </a>
                                <a class="dropdown-item" href="/Raze/logout.php">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <div class="page-header flex-wrap">
                        <h3 class="mb-0"> Hi <strong class="text-danger text-capitalize"><?= $after_assoc['name'] ?></strong> <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Welcome to Dashboard</span>
                        </h3>
                        <div class="d-flex">
                            <button type="button" class="btn btn-sm bg-white btn-icon-text border">
                                <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
                            <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                                <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                            <div class="row">
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                    <div class="card bg-warning">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Sales</p>
                                                    <h2 class="text-white"> $8,753.<span class="h5">00</span>
                                                    </h2>
                                                </div>
                                                <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                                            </div>
                                            <h6 class="text-white">18.33% Since last month</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                    <div class="card bg-danger">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Margin</p>
                                                    <h2 class="text-white"> $5,300.<span class="h5">00</span>
                                                    </h2>
                                                </div>
                                                <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                                            </div>
                                            <h6 class="text-white">13.21% Since last month</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                                    <div class="card bg-primary">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Orders</p>
                                                    <h2 class="text-white"> $1,753.<span class="h5">00</span>
                                                    </h2>
                                                </div>
                                                <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                                            </div>
                                            <h6 class="text-white">67.98% Since last month</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                                    <div class="card bg-success">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Affiliate</p>
                                                    <h2 class="text-white">2368</h2>
                                                </div>
                                                <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                                            </div>
                                            <h6 class="text-white">20.32% Since last month</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">