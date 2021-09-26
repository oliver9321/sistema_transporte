<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?=NOMBRE_APLICATION?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="description" />
    <meta content="" name="ofermin" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css -->
    <link href="plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="plugins/jquery-steps/jquery.steps.css">
    <script src="plugins/sweet-alert2/sweetalert2.min.js"></script>
    <!--

    
    <link href="plugins/sweet-alert2/bootstrap-4.css" rel="stylesheet">
    -->

          <!-- DataTables -->
          <link href="plugins/datatables/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

    <style>
        .select2-container--open {
            z-index: 9999999 !important;
        }

        .pac-container {
            z-index: 9999999 !important;
        }

    </style>
</head>

<body>


        
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.php?c=Dashboard&a=Index" class="logo">
                  <span class="text-secondary">
                     <b><?=SYSTEM_NAME?></b>
                    </span>
                <span>
                       <!-- <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">-->
                    </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Components</li>
                <li>
                    <a href="?c=Dashboard&a=Index"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                </li>

               <li>
                    <a href="javascript: void(0);"><i  class="fa fa-address-card align-self-center menu-icon"></i><span>Drivers</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index.php?c=Drivers&a=Index"><i class="ti-control-record"></i>List</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?c=Drivers&a=Edit"><i class="ti-control-record"></i>Create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="truck" class="align-self-center menu-icon"></i><span>Vehicles</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index.php?c=Vehicles&a=Index"><i class="ti-control-record"></i>List</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?c=Vehicles&a=Edit"><i class="ti-control-record"></i>Create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="briefcase" class="align-self-center menu-icon"></i><span>Company services</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index.php?c=companyServices&a=Index"><i class="ti-control-record"></i>List</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?c=companyServices&a=Edit"><i class="ti-control-record"></i>Create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="user-check" class="align-self-center menu-icon"></i><span>Customers</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index.php?c=Customers&a=Index"><i class="ti-control-record"></i>List</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?c=Customers&a=Edit"><i class="ti-control-record"></i>Create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="check-circle" class="align-self-center menu-icon"></i><span>Customer types</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index.php?c=customerType&a=Index"><i class="ti-control-record"></i>List</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?c=customerType&a=Edit"><i class="ti-control-record"></i>Create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="folder" class="align-self-center menu-icon"></i><span>Orders Status</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index.php?c=orderStatus&a=Index"><i class="ti-control-record"></i>List</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?c=orderStatus&a=Edit"><i class="ti-control-record"></i>Create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="plus-circle" class="align-self-center menu-icon"></i><span>Users Profiles</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index.php?c=userProfiles&a=Index"><i class="ti-control-record"></i>List</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?c=userProfiles&a=Edit"><i class="ti-control-record"></i>Create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="user-plus" class="align-self-center menu-icon"></i><span>Users</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index.php?c=users&a=Index"><i class="ti-control-record"></i>List</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?c=users&a=Edit"><i class="ti-control-record"></i>Create</a></li>
                    </ul>
                </li>


                <hr class="hr-dashed hr-menu">
               <!-- <li class="menu-label my-2">Components</li>-->

            </ul>
         
        </div>
    </div>
    <!-- end left-sidenav-->


    <div class="page-wrapper">
  
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav float-end mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="bell" class="align-self-center topbar-icon"></i>
                            <span class="badge bg-danger rounded-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Notifications <span class="badge bg-primary rounded-pill">2</span>
                            </h6>
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                            
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="ms-1 nav-user-name hidden-sm">User test</span>
                            <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual me-1"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                    </li>
                    <li class="creat-btn">
                        <div class="nav-link">
                            <a class="btn btn-sm btn-soft-primary" href="index.php?c=Dashboard&a=order" target="_blank"><i class="fas fa-plus me-2"></i>New Orden</a>
                            <!--<button type="button" class="btn btn-sm btn-soft-primary" data-bs-toggle="modal" data-bs-target="#ModalNewOrder"></button>-->
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->



        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
        