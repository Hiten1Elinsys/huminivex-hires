    <?php include_once("header.php");?>       
    
    <meta charset="utf-8" />
    <title>Job details | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Huminivex Hires" name="description" />
    
    <?php include_once("css.php");?>
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "employee" || empty($_SESSION['member_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    <?php include_once("../controller/Job.php");
        $id = $_GET['id'];
        $jobObj = new jobs();
        $job = $jobObj->getJobById($id);
        // echo '<pre>';print_r($job);exit;
    ?>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include_once("sidebar.php");?>
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
                                    <h4 class="mb-sm-0">Job Posting Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="manage-job-posting.html">Job Posting </a></li>
                                            <li class="breadcrumb-item active">Job Posting Details</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row jobdet-tab-wrap">
                            <div class="col-12">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#jobdetails" role="tab" aria-controls="jobdetails">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Job Details</span>    
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#candidate" role="tab" aria-controls="candidate">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Candidate</span>    
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#interview" role="tab" aria-controls="interview">
                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">Interview</span>    
                                        </a>
                                    </li>
                                    
                                </ul>
        
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="jobdetails" role="tabpanel" aria-labelledby="jobdetails-tab">
                                        <div class="row">
                            
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-1 overflow-hidden">
                                                                <p class="text-truncate font-size-14 mb-2">Openings</p>
                                                                <h4 class="mb-0">12</h4>
                                                            </div>
                                                            <div class="text-primary ms-auto">
                                                                <i class="fas fa-tasks font-size-24"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-1 overflow-hidden">
                                                                <p class="text-truncate font-size-14 mb-2">In Progress</p>
                                                                <h4 class="mb-0 font-size-24">1</h4>
                                                            </div>
                                                            <div class="text-primary ms-auto">
                                                                <i class="fas fa-clock font-size-24 "></i>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-1 overflow-hidden">
                                                                <p class="text-truncate font-size-14 mb-2">Interview Scheduled</p>
                                                                <h4 class="mb-0">2</h4>
                                                            </div>
                                                            <div class="text-primary ms-auto">
                                                                <i class="fas fa-handshake font-size-24"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row cand-det-wrap">
                            
                                            <div class="col-12 cand-det-right">
                                                <div class="card ">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6">
                                                                <h3><?php echo !empty($job['title'])?$job['title']:"";?></h3>
                                                                <p><?php echo !empty($job['location'])?$job['location']:"";?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="d-inline-block pr-25"><b>Company:</b> <?php echo !empty($job['company_name'])?$job['company_name']:"";?></div>
                                                               
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row mb-2">
                                                            <div class="col-sm-5">
                                                                <p><b>Skills and qualifications:</b><br><?php echo !empty($job['skills'])?$job['skills']:"";?></p>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p><b>Education and experience requirements:</b><br><?php echo !empty($job['qualifications'])?$job['qualifications']:"";?></p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row mb-2">
                                                            <div class="col-sm-5">
                                                                <p><b>Salary range:</b><br><?php echo !empty($job['minimum_salary'])?$job['minimum_salary']." ".$job['maximum_salary']:"";?></p>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p><b>Job Type:</b><br><?php echo !empty($job['job_type'])?$job['job_type']:"";?></p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row mb-2">
                                                            <div class="col-sm-5">
                                                                <p><b>Date posted:</b><br><?php echo !empty($job['posted_at'])?date("d M, Y",strtotime($job['posted_at'])):"";?></p>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p><b>Application deadline:</b><br><?php echo !empty($job['application_deadline'])?date("d M, Y",strtotime($job['application_deadline'])):"";?></p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row mb-2">
                                                            <div class="col-sm-5">
                                                                <p><b>Benefits and perks:</b><br><?php echo !empty($job['benifits_perks'])?$job['benifits_perks']:"";?></p>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p><b>Remote work:</b><br><?php echo !empty($job['remote_work'])?(($job['remote_work']
                                                                =="y")?"YES":"NO"):"";?></p>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-12">
                                                                <p>
                                                                    <b class="">Company logo and images:</b></p>
                                                                    <p>
                                                                        <?php 
                                                                            $jobLogo = $jobObj->getJobLogoById($id);  
                                                                            if(!empty($jobLogo)){
                                                                                foreach($jobLogo as $logo){
                                                                         ?>
                                                                                
                                                                                 <a class="image-popup-vertical-fit" href="<?php echo $base_url.'uploads/job/logo/'.$logo['name'];?>" title="">
                                                                                    <img class="img-fluid" alt="img-2" src="<?php echo $base_url.'uploads/job/logo/'.$logo['name'];?>"  width="145">
                                                                                </a>
                                                                        <?php                                                                 
                                                                                }
                                                                            }
                                                                        ?>
                                                                    </p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row mb-2">
                                                            <div class="col-sm-5">
                                                                <p><b>Job description:</b><br>
                                                                    <?php echo !empty($job['job_description'])?$job['job_description']:"";?>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p><b>Responsibilities:</b><br>
                                                                   <?php echo !empty($job['responsibilities'])?$job['responsibilities']:"";?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-12">
                                                            <div class="col-sm-12">
                                                                <p><b>Application instructions (including contact details):</b><br>
                                                                    <?php echo !empty($job['application_instructions'])?$job['application_instructions']:"";?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-12">
                                                            <div class="col-sm-12">
                                                                <p><b>Company overview and mission statement:</b><br>
                                                                    <?php echo !empty($job['job_overview'])?$job['job_overview']:"";?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-12">
                                                            <div class="col-sm-12">
                                                                <p><b>Diversity and inclusion statement:</b><br>
                                                                    <?php echo !empty($job['diversity_inclusion'])?$job['diversity_inclusion']:"";?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="tab-pane" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">
                                        <div class="row">  
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                       <div class="table-responsive">
                                                            <table class="table table-centered datatable dt-responsive nowrap" data-bs-page-length="10" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Candidate ID</th>
                                                                        <th>Name</th>
                                                                        <th>Email address</th>
                                                                        <th>Phone number</th>
                                                                        <th>Job title</th>
                                                                        <th>Work experience</th>
                                                                        <th>Salary expectations</th>
                                                                        <th style="width: 120px;">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td><a href="candidate-details.html" class="fw-bold">#CI1572</a> </td>
                                                                        <td>Adam Smith</td>
                                                                        <td>adamsmith@gmail.com</td>
                                                                        <td>9876543210</td>
                                                                        <td>Web designer</td>
                                                                        <td>3+ Years</td>
                                                                        <td>50,000</td>
                                                                        <td id="tooltip-container1">
                                                                            <a href="edit-candidate.html" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="candidate-details.html" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td><a href="javascript: void(0);" class="fw-bold">#CI1572</a> </td>
                                                                        <td>Adam Smith</td>
                                                                        <td>adamsmith@gmail.com</td>
                                                                        <td>9876543210</td>
                                                                        <td>Web designer</td>
                                                                        <td>3+ Years</td>
                                                                        <td>50,000</td>
                                                                        <td id="tooltip-container1">
                                                                            <a href="javascript:void(0);" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td><a href="javascript: void(0);" class="fw-bold">#CI1572</a> </td>
                                                                        <td>Adam Smith</td>
                                                                        <td>adamsmith@gmail.com</td>
                                                                        <td>9876543210</td>
                                                                        <td>Web designer</td>
                                                                        <td>3+ Years</td>
                                                                        <td>50,000</td>
                                                                        <td id="tooltip-container1">
                                                                            <a href="javascript:void(0);" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td><a href="javascript: void(0);" class="fw-bold">#CI1572</a> </td>
                                                                        <td>Adam Smith</td>
                                                                        <td>adamsmith@gmail.com</td>
                                                                        <td>9876543210</td>
                                                                        <td>Web designer</td>
                                                                        <td>3+ Years</td>
                                                                        <td>50,000</td>
                                                                        <td id="tooltip-container1">
                                                                            <a href="javascript:void(0);" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td><a href="javascript: void(0);" class="fw-bold">#CI1572</a> </td>
                                                                        <td>Adam Smith</td>
                                                                        <td>adamsmith@gmail.com</td>
                                                                        <td>9876543210</td>
                                                                        <td>Web designer</td>
                                                                        <td>3+ Years</td>
                                                                        <td>50,000</td>
                                                                        <td id="tooltip-container1">
                                                                            <a href="javascript:void(0);" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>6</td>
                                                                        <td><a href="javascript: void(0);" class="fw-bold">#CI1572</a> </td>
                                                                        <td>Adam Smith</td>
                                                                        <td>adamsmith@gmail.com</td>
                                                                        <td>9876543210</td>
                                                                        <td>Web designer</td>
                                                                        <td>3+ Years</td>
                                                                        <td>50,000</td>
                                                                        <td id="tooltip-container1">
                                                                            <a href="javascript:void(0);" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7</td>
                                                                        <td><a href="javascript: void(0);" class="fw-bold">#CI1572</a> </td>
                                                                        <td>Adam Smith</td>
                                                                        <td>adamsmith@gmail.com</td>
                                                                        <td>9876543210</td>
                                                                        <td>Web designer</td>
                                                                        <td>3+ Years</td>
                                                                        <td>50,000</td>
                                                                        <td id="tooltip-container1">
                                                                            <a href="javascript:void(0);" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8</td>
                                                                        <td><a href="javascript: void(0);" class="fw-bold">#CI1572</a> </td>
                                                                        <td>Adam Smith</td>
                                                                        <td>adamsmith@gmail.com</td>
                                                                        <td>9876543210</td>
                                                                        <td>Web designer</td>
                                                                        <td>3+ Years</td>
                                                                        <td>50,000</td>
                                                                        <td id="tooltip-container1">
                                                                            <a href="javascript:void(0);" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
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
                                    </div>
                                    <div class="tab-pane" id="interview" role="tabpanel" aria-labelledby="interview-tab">
                                        <div class="row">  
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                        
                        
                        <!-- end row -->

                        
                    </div> <!-- container-fluid -->
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
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                © <script>document.write(new Date().getFullYear())</script> Huminivex Hires. All rights reserved.
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

       <?php include_once("footer_js.php");?>

       <?php include_once("footer.php");?>
