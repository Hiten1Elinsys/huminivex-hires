    <?php include('header.php');?>  
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
    ?>    
    <meta charset="utf-8" />
    <title>Dashboard | Huminivex Hires</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" /> 
     

    <?php include('css.php');?>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include('sidebar.php');?>
            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Huminivex Hires</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-1 overflow-hidden">
                                                        <p class="text-truncate font-size-14 mb-2">Total Company</p>
                                                        <h4 class="mb-0">14</h4>
                                                    </div>
                                                    <div class="text-primary ms-auto">
                                                        <i class="ri-store-2-line font-size-24"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body border-top py-3 text-center">
                                                <a href="manage-company.html" class="btn btn-primary btn-sm">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-1 overflow-hidden">
                                                        <p class="text-truncate font-size-14 mb-2">Total Hired</p>
                                                        <h4 class="mb-0 font-size-24">15</h4>
                                                    </div>
                                                    <div class="text-primary ms-auto">
                                                        <i class="fas fa-handshake font-size-24 "></i>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="card-body border-top py-3 text-center">
                                                <a href="hired.html" class="btn btn-primary btn-sm">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-1 overflow-hidden">
                                                        <p class="text-truncate font-size-14 mb-2">Total job postings</p>
                                                        <h4 class="mb-0">18</h4>
                                                    </div>
                                                    <div class="text-primary ms-auto">
                                                        <i class="ri-briefcase-4-line font-size-24"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body border-top py-3 text-center">
                                                <a href="manage-job-posting.html" class="btn btn-primary btn-sm">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
    
                               
                            </div>

                           
    
                           
                        </div>
                        <!-- end row -->

                        <!-- <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                               
                                                <h4 class="card-title mb-4">Total Candidate</h4>
                                                <canvas id="bar" height="300"></canvas>
                                            </div>
                
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>         -->


                       

                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Recent Interview</h4>
    
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

                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Recent Job posting</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-centered datatable dt-responsive nowrap" data-bs-page-length="10" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Job Title</th>
                                                        <th>Company name</th>
                                                        <th>Job Type</th>
                                                        <th>Salary range</th>
                                                        <th>Location</th>
                                                        <th>Application deadline</th>
                                                        <th>Remote work</th>
                                                        <th style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a href="job-posting-details.html">Web Developer</a></td>
                                                        <td>Softtech Point</td>
                                                        <td>Full Time</td>
                                                        <td>20,000 - 35,000</td>
                                                        <td>Ahmedabad</td>
                                                        <td>30 Apr, 2023</td>
                                                        <td>No</td>
                                                        <td id="tooltip-container1">
                                                            <a href="candidate-filter.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Candidate Filter"><i class="mdi mdi-filter font-size-18"></i></a>
                                                            <a href="edit-job-posting.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="manage-job-posting.html" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td><a href="job-posting-details.html">HTML Developer</a></td>
                                                        <td>Softtech Point</td>
                                                        <td>Full Time</td>
                                                        <td>20,000 - 35,000</td>
                                                        <td>Ahmedabad</td>
                                                        <td>30 Apr, 2023</td>
                                                        <td>No</td>
                                                        <td id="tooltip-container1">
                                                            <a href="candidate-filter.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Candidate Filter"><i class="mdi mdi-filter font-size-18"></i></a>
                                                            <a href="edit-job-posting.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="manage-job-posting.html" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
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
                                <script>document.write(new Date().getFullYear())</script> © Nazox.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

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

        <?php include('footer_js.php');?>
        <?php include('footer.php');?>