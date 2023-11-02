       <?php include_once("header.php");?>
       <?php
        if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
            header("Location:".$base_url);
        }     
        ?>  
        <?php 

            include_once("../controller/job.php");
            $id = $_GET['id'];
            $jobObj = new jobs();
            $candidates = $jobObj->getCandidatesByJobId($id);
            $job = $jobObj->getJobById($id);
           // echo '<pre>';print_r($job);exit;
        ?>
        
        <meta charset="utf-8" />
        <title>Candidate details | huminivex Hires</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="huminivex Hires" name="description" />

        <?php include_once("css.php");?>
    
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
                      
                        <!-- end page title -->


                        <div class="row mb-4 align-items-center">
                            <div class="col-sm-4">
                                <button type="button" id="Candidate-filter-btn" class="btn btn-primary btn-lg">Filter <i class="mdi mdi-chevron-down"></i></button>
                                <p class="canfil-cmp-name"><b><?php echo isset($job['company_name'])?$job['company_name']:"";?></b><br/><?php echo isset($job['title'])?$job['title']:"";?></p>
                            </div>
                            <div class="col-sm-3">
                               <span class="font-size-18">Total Candidates: <?php echo isset($job['opening'])?$job['opening']:"";?></span>     
                            </div>
                            <!-- <div class="col-sm-2">
                                <span class="font-size-18">Shortlist: 0</span>
                            </div> -->
                            <!-- <div class="col-sm-2">
                                <span class="font-size-18">Rejected: 0</span>
                            </div> -->
                        </div>
                        <div class="cand-filterbtn mb-4 mt-2" style="display: block;">
                        <div class="row">
                            
                                <div class="col-sm-2">
                                    <select class="form-control select2">
                                        <option>Location</option>
                                        <option>Ahmedabad</option>
                                        <option>Surat</option>
                                        <option>Rajkot</option>
                                        <option>Vadodara</option>
                                        <option>Gandhinagar</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control select2">
                                        <option>Total Exp.</option>
                                        <option>1 Year</option>
                                        <option>2 Year</option>
                                        <option>3 Year</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control select2">
                                        <option>Relevant Exp.</option>
                                        <option>1 Year</option>
                                        <option>2 Year</option>
                                        <option>3 Year</option>
                                    </select>
                                </div>
        
                                <!-- <div class="col-sm-2">
                                    <select class="form-control select2">
                                        <option>All Candidates</option>
                                        <option>Shortlisted</option>
                                        <option>Rejected</option>
                                    </select>
                                    
                                </div> -->
                            
                        </div>
                        </div>
                      
    
                        <div class="row">  
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 text-end mb-3">
                                                <button type="button" class="btn btn-primary waves-effect waves-light checkall">Select All</button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-centered datatable dt-responsive nowrap" data-bs-page-length="10" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Candidate</th>
                                                        <th>Job Position</th>
                                                        <th>Total Exp.</th>
                                                        <th>Relevant Exp.</th>
                                                        <th>Shortlist</th>
                                                        <th>Rejected</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if(!empty($candidates))
                                                    {
                                                        $i =1;
                                                        foreach($candidates as $candidate){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><a href="<?php echo $base_url."admin/candidate_detail.php?id=".$candidate['id'];?>"><?php echo $candidate['fname']." ".$candidate['lname'];?></a><br/><?php echo !empty($candidate['location'])?$candidate['location']:"";?></td>
                                                        <td><?php echo !empty($candidate['post_applied_for'])?$candidate['post_applied_for']:"";?></td>
                                                        <td><?php echo !empty($candidate['total_experience'])?$candidate['total_experience']:"0";?><small> Years</small></td>
                                                        <td><?php echo !empty($candidate['relevent_experience'])?$candidate['relevent_experience']:"0";?><small> Years</small></td>
                                                        <td>
                                                            <div class="form-check mb-3 sortlist-checkbox">
                                                                <input class="form-check-input" data-id="<?php echo $candidate['id'];?>" type="checkbox" id="formCheck<?php echo $candidate['id'];?>">
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript:void(0);" class="text-danger cand-rejected-icon" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected"><i class="mdi mdi-trash-can font-size-18"></i></a></td>
                                                    </tr>
                                                    <?php
                                                         $i++;       
                                                        }
                                                    }
                                                     ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="text-center mt-2">
                                            <a href="candidate-sortlist.html" class="btn btn-success waves-effect waves-light me-1">Candidate Sortlist</a>
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

        <?php include_once("footer_js.php");?>

        <?php include_once("footer.php");?>