       <?php include_once("header.php");?>
       <?php
        if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
            header("Location:".$base_url);
        }     
        ?>  
        <?php include_once("../controller/candidate.php");
            $id = $_GET['id'];
            $candidateObj = new candidates();
            $candidate = $candidateObj->getCandidateById($id);
           //echo '<pre>';print_r($candidate);exit;
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
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Candidate Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url.'admin/list_candidate.php';?>">Candidate</a></li>
                                            <li class="breadcrumb-item active">Candidate Details</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mb-3 details-page-wrap">
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label"><b>First name</b></label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['fname'])?$candidate['fname']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Last name</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['lname'])?$candidate['lname']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Email address</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['email'])?$candidate['email']:"";?>
                                                </div>
                                            </div>
                                             <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Candidate Location</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['location'])?$candidate['location']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Primary Contact Number</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['primary_contact_no'])?$candidate['primary_contact_no']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Is this Whatsapp number?</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['p_is_whatsapp'])?($candidate['p_is_whatsapp']=="y"?"Yes":"No"):"No";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Secondary Contact Number</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['s_contact_no'])?$candidate['s_contact_no']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Is this Whatsapp number?</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['s_is_whatsapp'])?($candidate['s_is_whatsapp']=="y"?"Yes":"No"):"No";?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Address</label>
                                                <div class="col-sm-12">
                                                     <?php echo !empty($candidate['address'])?$candidate['address']:"";?> 
                                                </div>
                                            </div>

                                             <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Candidate Status</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['e_status'])?$candidate['e_status']:"";?> 
                                                </div>
                                            </div>

                                            <?php
                                                if($candidate['e_status'] == "experience"){
                                             ?>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Current Job title</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['current_job_title'])?$candidate['current_job_title']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Which Field Experience</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['w_field_experience'])?$candidate['w_field_experience']:"";?>
                                                </div>
                                            </div> 

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Total Years Experience</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['total_experience'])?$candidate['total_experience']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Current Salary(Monthly)</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['c_salary'])?$candidate['c_salary']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Notice Period(days)</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($candidate['notice_period'])?$candidate['notice_period']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 mb-3">
                                               <label for="example-text-input" class="col-sm-12 col-form-label">Work Experience</label>     
                                                <div class="table-responsive">
                                                    <table class="table table-bordered mb-0">

                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Company name</th>
                                                                <th>Job title</th>
                                                                <th>Start date</th>
                                                                <th>End date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $experiences = $candidateObj->getWorkExperienceById($id);    
                                                                if(!empty($experiences))
                                                                {
                                                                    $i = 1;
                                                                    foreach($experiences as $experience)
                                                                    {
                                                                       // echo '<pre>';print_r( $experience);exit;
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i;?></th>
                                                                <td><?php echo !empty($experience['company_name'])?$experience['company_name']:"";?></td>
                                                                <td><?php echo !empty($experience['job_title'])?$experience['job_title']:"";?></td>
                                                                <td><?php echo !empty($experience['start_d'])?$experience['start_d']:"";?></td>
                                                                <td><?php echo !empty($experience['end_d'])?$experience['end_d']:"";?></td>
                                                            </tr>
                                                            <?php    
                                                                        $i++;        
                                                                    }
                                                                }
                                                            ?>                                                  
                                                        </tbody>
                                                    </table>
                                                 </div>
                                            </div>
                                             <?php       
                                                }   
                                            ?>

                                            <div class="col-sm-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Education history</label>     
                                                <div class="table-responsive">
                                                    <table class="table table-bordered mb-0">

                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Degree name</th>
                                                                <th>Percentage</th>
                                                                <th>University name</th>
                                                                <th>Passing year</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $qualifications = $candidateObj->getQualificationsById($id);    
                                                                if(!empty($qualifications))
                                                                {
                                                                    $i = 1;
                                                                    foreach($qualifications as $qualification)
                                                                    {
                                                                        //echo '<pre>';print_r( $qualification);exit;
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i;?></th>
                                                                <td><?php echo !empty($qualification['degree_name'])?$qualification['degree_name']:"";?></td>
                                                                <td><?php echo !empty($qualification['percentage'])?$qualification['percentage']:"";?></td>
                                                                <td><?php echo !empty($qualification['univesity'])?$qualification['univesity']:"";?></td>
                                                                <td><?php echo !empty($qualification['passing_y'])?$qualification['passing_y']:"";?></td>
                                                            </tr>
                                                            <?php    
                                                                        $i++;        
                                                                    }
                                                                }
                                                            ?>                                                  
                                                        </tbody>
                                                    </table>
                                                 </div>
                                            </div>


                                            <h4>Other details</h4>    
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Skills and abilities</label>
                                                <div class="col-sm-12">
                                                   <?php echo !empty($candidate['skills'])?$candidate['skills']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Resume</label>
                                                <div class="col-sm-12">
                                                    <a href="<?php echo $base_url.'uploads/candidate/resume/'.$candidate['resume'];?>" target="_blank"><?php echo $candidate['resume'];?></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Certifications and licenses</label>
                                                <div class="col-sm-12">
                                                    <a href="<?php echo $base_url.'uploads/candidate/certification/'.$candidate['certifications'];?>" target="_blank"><?php echo $candidate['certifications'];?></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">References</label>
                                                <div class="col-sm-12">
                                                   <?php echo !empty($candidate['c_references'])?$candidate['c_references']:""?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Post applied for</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty( $candidate['post_applied_for'])? $candidate['post_applied_for']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Joining period</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty( $candidate['joining_period'])? $candidate['joining_period']:"";?>
                                                </div>
                                            </div>

                                             <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Shortlisted For</label>
                                                <div class="col-sm-12">
                                                    <?php 
                                                        $company_name = $candidateObj->getComapnyNameById($candidate['shortlisted_for']);    
                                                        echo !empty($company_name)?$company_name:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Salary expectations (Monthly)</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty( $candidate['salary_expectations'])?$candidate['salary_expectations']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Work location preference</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty( $candidate['work_location'])?$candidate['work_location']:"";?>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Professional accomplishments and awards</label>     
                                                <div class="table-responsive">
                                                    <table class="table table-bordered mb-0">

                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Title</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $awards = $candidateObj->getAwardsById($id);    
                                                                if(!empty($awards))
                                                                {
                                                                    $i = 1;
                                                                    foreach($awards as $award)
                                                                    {
                                                                        //echo '<pre>';print_r( $award);exit;
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i;?></th>
                                                                <td><?php echo !empty($award['title'])?$award['title']:"";?></td>
                                                            </tr>
                                                            <?php    
                                                                        $i++;        
                                                                    }
                                                                }
                                                            ?>                                                  
                                                        </tbody>
                                                    </table>
                                                 </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Additional comments or notes</label>
                                                <div class="col-sm-12">
                                                   <?php echo !empty( $candidate['additionalcomments'])?$candidate['additionalcomments']:"";?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
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

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <?php include_once("footer_js.php");?>

        <?php include_once("footer.php");?>