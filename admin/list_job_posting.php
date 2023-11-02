    <?php include_once("header.php");?>
    
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    
    <?php include_once("../controller/job.php");?>

    <meta charset="utf-8" />
    <title>Manage Job | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />

    <?php include_once("css.php");?>

    </head>

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
                                    <h4 class="mb-sm-0">Manage Job Posting</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url.'admin/list_job_posting.php';?>">Job Posting</a></li>
                                            <li class="breadcrumb-item active">Manage Job Posting</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                      
    
                        <div class="row">  
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-sm-12 mt-0 mb-4 text-end">
                                            <a href="<?php echo $base_url.'admin/add_job_posting.php';?>" class="btn btn-success waves-effect waves-light me-1">Add Job Posting</a>
                                        </div>
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
                                                    <?php

                                                        $jobObj = new jobs();
                                                        $jobs =  $jobObj->getAllJobs();
                                                        if(!empty($jobs))
                                                        {
                                                            $count = 1;
                                                            foreach($jobs as $job)
                                                            {
                                                                //echo '<pre>';print_r($job);exit;
                                                    ?>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a><?php echo !empty($job['title'])?$job['title']:"";?></a></td>
                                                        <td><?php echo !empty($job['company_name'])?$job['company_name']:"";?></td>
                                                        <td><?php echo !empty($job['job_type'])?$job['job_type']:"";?></td>
                                                        <td><?php echo !empty($job['minimum_salary'])?$job['minimum_salary'] ."-".$job['maximum_salary']:"";?></td>
                                                        <td><?php echo !empty($job['location'])?$job['location']:"";?></td>
                                                        <td><?php echo !empty($job['application_deadline'])?$job['application_deadline']:"";?></td>
                                                        <td><?php echo !empty($job['remote_work'])?$job['remote_work']:"";?></td>
                                                        <td id="tooltip-container1">
                                                            <a href="<?php echo $base_url."admin/candidate_search.php?id=".$job['id']?>" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Candidate Filter"><i class="mdi mdi-filter font-size-18"></i></a>
                                                            <a href="<?php echo $base_url."admin/edit_job_posting.php?id=".$job['id'];?>" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="<?php echo $base_url."admin/job_posting_detail.php?id=".$job['id'];?>" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" onclick="deleteJobById(<?php echo $job['id'];?>)" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php

                                                            }
                                                        }
                                                    ?>
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
        <script src="<?php echo $base_url;?>dist/assets/js/job.js"></script>
    </body>

</html>