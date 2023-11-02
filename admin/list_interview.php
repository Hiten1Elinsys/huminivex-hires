<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Manage Interview | Signature Hires</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">

        <!-- jquery.vectormap css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom-style.css" rel="stylesheet" type="text/css" />
    </head>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                           <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-light.png" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="logo-light" height="35">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form>

                       
                    </div>

                    <div class="d-flex">

                        

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-notification-3-line"></i>
                                <span class="noti-dot"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="ri-shopping-cart-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="ri-checkbox-circle-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-4.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">Kevin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="index.html"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="dashboard.html" class="waves-effect">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ri-user-fill"></i>
                                    <span>Candidate</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="add-candidate.html">Add Candidate</a></li>
                                    <li><a href="manage-candidate.html">Manage Candidate</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ri-building-line"></i>
                                    <span>Company</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="add-company.html">Add Company</a></li>
                                    <li><a href="manage-company.html">Manage Company</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ri-briefcase-line"></i>
                                    <span>job posting</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="add-job-posting.html">Add job posting</a></li>
                                    <li><a href="manage-job-posting.html">Manage job posting</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-podcast"></i>
                                    <span>Interview</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="interview-schedule.html">Interview Schedule</a></li>
                                    <li><a href="manage-interview.html">Manage Interview</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="hired.html" class="waves-effect">
                                    <i class="fas fa-handshake"></i>
                                    <span>Hired</span>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        

                        <div class="row mb-4 align-items-center">
                            <div class="col-sm-4">
                                <button type="button" id="Candidate-filter-btn" class="btn btn-primary btn-lg">Filter <i class="mdi mdi-chevron-down"></i></button>
                                <p class="canfil-cmp-name"><strong>Total job post: 10</strong></p>
                            </div>
                            <div class="col-sm-8">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0 justify-content-end">
                                        <li class="breadcrumb-item"><a href="manage-interview.html">Interview</a></li>
                                        <li class="breadcrumb-item active">Manage Interview</li>
                                    </ol>
                                </div>
                            </div>
                           
                        </div>
                        <div class="cand-filterbtn mb-4 mt-2" style="display: block;">
                        <div class="row">
                            <div class="col-sm-2">
                                <select class="form-control select2">
                                    <option>Company Name</option>
                                    <option>Elinsys</option>
                                    <option>Huminivex</option>
                                    <option>Signature Hires</option>
                                </select>
                            </div>
                                <div class="col-sm-2">
                                    <select class="form-control select2">
                                        <option>Job Position</option>
                                        <option>Web Developer</option>
                                        <option>BDE</option>
                                        <option>PHP</option>
                                        <option>Front End</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control select2">
                                        <option>Interview Type</option>
                                        <option>Virtual</option>
                                        <option>In Person</option>
                                    </select>
                                </div>
                               
                            
                        </div>
                        </div>
    
                        <div class="row">  
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-sm-12 mt-0 mb-4 text-end">
                                            <a href="interview-schedule.html" class="btn btn-success waves-effect waves-light me-1">Add Interview Schedule</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-centered datatable dt-responsive nowrap" data-bs-page-length="10" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Candidate</th>
                                                        <th>Company name</th>
                                                        <th>Job Position</th>
                                                        <th>Schedule on</th>
                                                        
                                                        <th>Type</th>
                                                        <th>Interviewer Name</th>
                                                        <th>Status</th>
                                                        <th style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a href="candidate-details.html" class="fw-bold">Adam Smith</a> </td>
                                                        <td>elinsys</td>
                                                        <td>Web Developer</td>
                                                        <td><b>02 April 2023</b><br>Monday, 01:00 PM</td>
                                                        
                                                        <td>Virtual</td>
                                                        <td>Adam Smith</td>
                                                        <td>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected="">Status</option>
                                                                <option value="1">Selected</option>
                                                                <option value="2">Rejected</option>
                                                                <option value="3">Reschedule</option>
                                                                <option value="4">Not Appeared</option>
                                                                </select>
                                                        </td>
                                                        <td id="tooltip-container1">
                                                            <a href="javascript:void(0);" class="text-info me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reschedule">
                                                                <i data-bs-toggle="modal" data-bs-target=".reschedule-popup" class="mdi mdi-recycle font-size-18"></i>
                                                            </a>
                                                            <a href="edit-interview-schedule.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="interview-details.html" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td><a href="candidate-details.html" class="fw-bold">Adam Smith</a> </td>
                                                        <td>elinsys</td>
                                                        <td>Web Developer</td>
                                                        <td><b>02 April 2023</b><br>Monday, 01:00 PM</td>
                                                        
                                                        <td>Virtual</td>
                                                        <td>Adam Smith</td>
                                                        <td>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected="">Status</option>
                                                                <option value="1">Selected</option>
                                                                <option value="2">Rejected</option>
                                                                <option value="3">Reschedule</option>
                                                                <option value="4">Not Appeared</option>
                                                                </select>
                                                        </td>
                                                        <td id="tooltip-container1">
                                                            <a href="javascript:void(0);" class="text-info me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reschedule">
                                                                <i data-bs-toggle="modal" data-bs-target=".reschedule-popup" class="mdi mdi-recycle font-size-18"></i>
                                                            </a>
                                                            <a href="edit-interview-schedule.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="interview-details.html" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td><a href="candidate-details.html" class="fw-bold">Adam Smith</a> </td>
                                                        <td>elinsys</td>
                                                        <td>Web Developer</td>
                                                        <td><b>02 April 2023</b><br>Monday, 01:00 PM</td>
                                                        
                                                        <td>Virtual</td>
                                                        <td>Adam Smith</td>
                                                        <td>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected="">Status</option>
                                                                <option value="1">Selected</option>
                                                                <option value="2">Rejected</option>
                                                                <option value="3">Reschedule</option>
                                                                <option value="4">Not Appeared</option>
                                                                </select>
                                                        </td>
                                                        <td id="tooltip-container1">
                                                            <a href="javascript:void(0);" class="text-info me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reschedule">
                                                                <i data-bs-toggle="modal" data-bs-target=".reschedule-popup" class="mdi mdi-recycle font-size-18"></i>
                                                            </a>
                                                            <a href="edit-interview-schedule.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="interview-details.html" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td><a href="candidate-details.html" class="fw-bold">Adam Smith</a> </td>
                                                        <td>elinsys</td>
                                                        <td>Web Developer</td>
                                                        <td><b>02 April 2023</b><br>Monday, 01:00 PM</td>
                                                       
                                                        <td>Virtual</td>
                                                        <td>Adam Smith</td>
                                                        <td>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected="">Status</option>
                                                                <option value="1">Selected</option>
                                                                <option value="2">Rejected</option>
                                                                <option value="3">Reschedule</option>
                                                                <option value="4">Not Appeared</option>
                                                                </select>
                                                        </td>
                                                        <td id="tooltip-container1">
                                                            <a href="javascript:void(0);" class="text-info me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reschedule">
                                                                <i data-bs-toggle="modal" data-bs-target=".reschedule-popup" class="mdi mdi-recycle font-size-18"></i>
                                                            </a>
                                                            <a href="edit-interview-schedule.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="interview-details.html" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td><a href="candidate-details.html" class="fw-bold">Adam Smith</a> </td>
                                                        <td>elinsys</td>
                                                        <td>Web Developer</td>
                                                        <td><b>02 April 2023</b><br>Monday, 01:00 PM</td>
                                                        
                                                        <td>Virtual</td>
                                                        <td>Adam Smith</td>
                                                        <td>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected="">Status</option>
                                                                <option value="1">Selected</option>
                                                                <option value="2">Rejected</option>
                                                                <option value="3">Reschedule</option>
                                                                <option value="4">Not Appeared</option>
                                                                </select>
                                                        </td>
                                                        <td id="tooltip-container1">
                                                            <a href="javascript:void(0);" class="text-info me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reschedule">
                                                                <i data-bs-toggle="modal" data-bs-target=".reschedule-popup" class="mdi mdi-recycle font-size-18"></i>
                                                            </a>
                                                            <a href="edit-interview-schedule.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="interview-details.html" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    
                </div>
                <!-- End Page-content -->
               
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                © <script>document.write(new Date().getFullYear())</script> Signature Hires. All rights reserved.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Elinsys
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <div class="modal fade reschedule-popup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reschedule Interview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label  class="col-sm-12 col-form-label">Schedule Date On</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="date" value="2023-05-02">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label  class="col-sm-12 col-form-label">Schedule Time On</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="time" value="11:00" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/js/pages/form-advanced.init.js"></script>
        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
             $(document).ready(function() {
                $(".datatable").DataTable({
                    lengthMenu: [5, 10, 25, 50],
                    pageLength: 5,
                    language: {
                        paginate: {
                            previous: "<i class='mdi mdi-chevron-left'>",
                            next: "<i class='mdi mdi-chevron-right'>"
                        }
                    },
                    drawCallback: function() {
                        $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                    }
                    }), $(".dataTables_length select").addClass("form-select form-select-sm")
                });
        </script>
         <script>

               $(document).ready(function() {
                   $("#Candidate-filter-btn").click(function(){
                       $(".cand-filterbtn").slideToggle();
                   });
               });

       </script>
    </body>

</html>