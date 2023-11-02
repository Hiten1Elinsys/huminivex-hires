        <?php include_once("header.php");?>
        <?php
        if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
             header("Location:".$base_url);
        }     
        ?>  
        <?php include_once("../controller/candidate.php");?>
        
        <meta charset="utf-8" />
        <title>Manage Candidate | Huminivex Hires</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        
        <?php include_once("css.php");?>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include_once("sidebar.php"); ?>
            
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
                                    <h4 class="mb-sm-0">Manage Candidate</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url."admin/list_candidate.php";?>">Candidate</a></li>
                                            <li class="breadcrumb-item active">Manage Candidate</li>
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
                                            <a href="<?php echo $base_url.'admin/add_candidate.php';?>" class="btn btn-success waves-effect waves-light me-1">Add Candidate</a>
                                        </div>
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
                                                     <?php
                                                        $candidateObj = new Candidates();
                                                        $clist =  $candidateObj->getAllCandidate();
                                                        if(!empty($clist))
                                                        {
                                                            $count = 1;
                                                            foreach($clist as $candidate)
                                                            {
                                                     ?>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a href="candidate-details.html" class="fw-bold">#<?php echo !empty($candidate['id'])?$candidate['id']:"";?></a> </td>
                                                        <td><?php echo !empty($candidate['fname'])?$candidate['fname']." ".$candidate['lname']:"";?></td>
                                                        <td><?php echo !empty($candidate['email'])?$candidate['email']:"";?></td>
                                                        <td><?php echo !empty($candidate['primary_contact_no'])?$candidate['primary_contact_no']:"";?></td>
                                                        <td><?php echo !empty($candidate['w_field_experience'])?$candidate['w_field_experience']:"";?></td>
                                                        <td><?php echo !empty($candidate['total_experience'])?$candidate['total_experience']:"";?> Years</td>
                                                        <td><?php echo !empty($candidate['salary_expectations'])?$candidate['salary_expectations']:"";?> </td>
                                                        <td id="tooltip-container1">
                                                            <a href="<?php echo $base_url."admin/edit_candidate.php?id=".$candidate['id'];?>" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="<?php echo $base_url."admin/candidate_detail.php?id=".$candidate['id'];?>" class="me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" onclick="deleteCandidateById(<?php echo $candidate['id'];?>)"  class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="mdi mdi-trash-can font-size-18"></i></a>
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
        
         <script src="<?php echo $base_url;?>dist/assets/js/candidate.js"></script>
    </body>

</html>