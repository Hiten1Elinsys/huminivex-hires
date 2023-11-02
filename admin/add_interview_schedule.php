<?php include_once("header.php");?>
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
    ?>  
        <meta charset="utf-8" />
        <title>Add nterview Schedule | Signature Hires</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Signature Hires" name="description" />
    <?php include_once("../controller/candidate.php");?>   
    <?php include_once("../controller/company.php");?>
    <?php include_once("../controller/job.php");?>
    <?php include_once("../controller/interview.php")?>
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
                                    <h4 class="mb-sm-0">Interview Schedule</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="manage-interview.html">Interview</a></li>
                                            <li class="breadcrumb-item active">Interview Schedule</li>
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
                                        <form name="interview_frm" id="interview_frm" >     
                                            <div class="row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Candidate Name*</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control select2" name="candidate_name" required>
                                                            <option value="">Select Candidate Name</option>
                                                            <?php
                                                                $candidateObj = new Candidates();
                                                                $candidates = $candidateObj ->getAllCandidate();
                                                                if(!empty( $candidates)){
                                                                   
                                                                    foreach($candidates as $candidate)
                                                                    {
                                                               ?>
                                                                    <option value="<?php echo !empty($candidate['id'])?$candidate['id']:""?>"> <?php echo !empty($candidate['fname'])?$candidate['fname'].' '.$candidate['lname']:""?> </option>
                                                            <?php  
                                                                   }
                                                                }
                                                           ?>   
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Candidate Email ID*</label>
                                                    <div class="col-sm-12">
                                                        <input  class="form-control" type="email" placeholder="example@mail.com" name="candidate_email" id="email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Company Name*</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control select2" name="company_name"required>
                                                            <option value="">Select Company Name</option>
                                                            <?php
                                                                $companyObj = new Companies();
                                                                $companies = $companyObj ->getAllComapnies();
                                                                
                                                                if(!empty($companies)){
                                                                    $i = 0;
                                                                    foreach($companies as $company)
                                                                    {   
                                                               ?>
                                                                    <option value="<?php echo !empty($company['id'])?$company['id']:""?>"> <?php echo !empty($company['company_name'])?$company['company_name']:""?> </option>
                                                            <?php  
                                                                   }
                                                                }
                                                           ?>    
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Interviewer Name</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Interviewer Name" name="interviewer_name" id="InterviewerName">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Interviewer Email ID</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="example@gmail.com" name="interviewer_email" id="InterviewerEmail">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Interviewer Mobile Number</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="9876543210" name="interviewer_mobile_number" id="InterviewerMobileNumber">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Job Position</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control select2" name="job_post">
                                                            <option value="" >Select Job Position</option>
                                                            <?php
                                                                $jobsObj = new Jobs();
                                                                $jobs = $jobsObj ->getAllJobs();

                                                                if(!empty($jobs)){
                                                                    foreach ($jobs as $job) {
                                                            ?>
                                                                    <option value="<?php echo !empty($job['id'])?$job['id']:""?>"> <?php echo !empty($job['title'])?$job['title']:""?> </option>
                                                                <?php  
                                                                    }
                                                                }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Interview Type</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control select2" name="interview_type">
                                                            <option value="">Select Interview Type</option>
                                                            <?php
                                                                $intervieswObj = new Interviews();
                                                                $interview_types = $intervieswObj -> getAllInterviewType();
                                                                if(!empty($interview_types)){
                                                                    foreach ($interview_types as $interview_type){
                                                            ?>        
                                                                    <option value="<?php echo !empty($interview_type['id'])?$interview_type['id']:""?>"> <?php echo !empty($interview_type['type'])?$interview_type['type']:""?> </option>
                                                               <?php
                                                                    }
                                                                }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Interview Round</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control select2" name="interview_round">
                                                            <option value="">Select Interview Round</option>

                                                            <?php
                                                                $interviewsObj = new Interviews();
                                                                $interview_rounds = $interviewsObj -> getAllInterviewRound();
                                                                if(!empty($interview_rounds)){
                                                                    foreach($interview_rounds as $interview_round){
                                                                    ?>
                                                                    <option value="<?php echo !empty($interview_round['id'])?$interview_round['id']:""?>"> <?php echo !empty($interview_round['round'])?$interview_round['round']:""?> </option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label  class="col-sm-12 col-form-label">Schedule Date On</label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="date" name="scheduled_date" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label  class="col-sm-12 col-form-label">Schedule Time On</label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="time" name="scheduled_time" value="00:00" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                
                                                <input type="hidden" name="module" value="interview">
                                                <input type="hidden" name="action" value="save">
                                                <div class="col-sm-12 mt-4 text-center">
                                                    <input class="btn btn-primary waves-effect waves-light me-1" type="submit" name="submit" id="submit" value="Save">
                                                </div>
                                            </div>
                                        </form>
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
        <script>
            $(document).ready(function() {
	$("#companyoverview").length && tinymce.init({
		selector: "textarea#companyoverview",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#employee-benefits").length && tinymce.init({
		selector: "textarea#employee-benefits",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#company-culture").length && tinymce.init({
		selector: "textarea#company-culture",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#social-responsibility").length && tinymce.init({
		selector: "textarea#social-responsibility",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#diversity-inclusion").length && tinymce.init({
		selector: "textarea#diversity-inclusion",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#testimonials").length && tinymce.init({
		selector: "textarea#testimonials",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#additional-comments").length && tinymce.init({
		selector: "textarea#additional-comments",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
});
        </script>

        <script src="<?php echo $base_url;?>dist/assets/js/interview.js"></script>
         <?php include_once("footer.php");?>
