    <?php include_once("header.php");

    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
   
    include_once("../controller/job.php");
    $id = $_GET['id'];
    $jobObj = new jobs();
    $job = $jobObj->getJobById($id);
    $skills = $jobObj->getAllSkills()
    ?>
    <?php include_once("../controller/company.php");
         $companyObj = new companies();
        $added_by = $_SESSION['id'];
        $companies = $companyObj->getCompaniesByUserId($added_by);
    ?>
    <meta charset="utf-8" />
    <title>Edit Job | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Huminivex Hires" name="description" />

    <?php include_once("css.php");?>
    <link href="<?php echo $base_url;?>admin/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

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
                                    <h4 class="mb-sm-0">Edit Job Posting</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url.'admin/list_job_posting.php';?>">Job Posting</a></li>
                                            <li class="breadcrumb-item active">Edit Job Posting</li>
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
                                    <form name="job_frm" id="job_frm" >

                                         <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label" for="title">Job Title*</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter Title" id="title" name="title" value="<?php echo !empty($job['title'])?$job['title']:"";?>" required >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Company*</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control select2" name="company_id" id="company_id" required >
                                                        <option vale="">Select Company</option>
                                                        <?php
                                                        if(!empty($companies))
                                                        {


                                                            $i = 0;
                                                            foreach($companies as $company)
                                                            {
                                                        ?>
                                                         <option value="<?php echo !empty($company['id'])?$company['id']:"";?>" <?php echo ($company['id'] == $job['company_id'])?"selected":"";?>><?php echo !empty($company['company_name'])?$company['company_name']:"";?></option>
                                                        <?php
                                                            $i++;
                                                            }
                                                        }
                                                        ?>                                                              
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-2">
                                                <label  class="col-sm-12 col-form-label">Job description</label>
                                                <div class="col-sm-12">
                                                    <textarea  name="job_description" id="job_description"><?php echo !empty($job['job_description'])?$job['job_description']:"";?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-2">
                                                <label  class="col-sm-12 col-form-label">Responsibilities</label>
                                                <div class="col-sm-12">
                                                    <textarea name="responsibilities" id="responsibilities"><?php echo !empty($job['job_description'])?$job['job_description']:"";?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-2">
                                                <label  class="col-sm-12 col-form-label" for="skills">Skills and qualifications*</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control select2" multiple="multiple" name="skills[]" id="skills">
                                                            <option value="">Select Skills</option>
                                                            <?php
                                                                if(!empty($skills)){
                                                                    $skis = json_decode($job['skills']);
                                                                    foreach($skills as $skill)
                                                                    {
                                                            ?>
                                                            <option value="<?php echo !empty($skill['id'])?$skill['id']:"";?>"  <?php echo in_array($skill['id'],$skis)?"selected":"";?>><?php echo !empty($skill['name'])?$skill['name']:"";?></option>
                                                            <?php            
                                                                    }
                                                                }

                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-2">
                                                <label  class="col-sm-12 col-form-label">Education requirements</label>
                                                <div class="col-sm-12">
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple" data-placeholder="Education and experience requirements ..." name="qualifications" id="qualifications">
                                                        <option value="">Select Qualification</option>
                                                        <option  <?php echo !empty($job['qualifications'])?(($job['qualifications'] == "BCA")?"selected":""):"";?> > BCA</option>
                                                        <option <?php echo !empty($job['qualifications'])?(($job['qualifications'] == "MCA")?"selected":""):"";?> > MCA</option>
                                                        <option <?php echo !empty($job['qualifications'])?(($job['qualifications'] == "Post Graduation")?"selected":""):"";?>  > Post Graduation</option>
                                                        <option <?php echo !empty($job['qualifications'])?(($job['qualifications'] == "B.Tech")?"selected":""):"";?> > B.Tech</option>
                                                        <option <?php echo !empty($job['qualifications'])?(($job['qualifications'] == "B.E.")?"selected":""):"";?> > B.E.</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-2">
                                                <label  class="col-sm-12 col-form-label">Experience(in Years)*</label>
                                                <div class="col-sm-12s">
                                                     <input class="form-control" type="text" placeholder="" id="experience" name="experience" value="<?php echo $job['experience']?$job['experience']:"";?>" required >
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-2">
                                                <label  class="col-sm-12 col-form-label">Openings*</label>
                                                <div class="col-sm-12s">
                                                     <input class="form-control" type="text" placeholder="" id="opening" name="opening" value="<?php echo $job['opening']?$job['opening']:"";?>" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Job Type*</label>
                                                <div class="col-sm-12">
                                                    <select class="select2 form-control select2-multiple"
                                                            multiple="multiple" data-placeholder="Select Job Type ..." name="job_type" id="job_type">
                                                        <option value="">Select Job Type</option>
                                                        <option <?php echo !empty($job['job_type'])?(($job['job_type'] == "Full Time")?"selected":""):"";?> >Full Time</option>
                                                        <option <?php echo !empty($job['job_type'])?(($job['job_type'] == "Part Time")?"selected":""):"";?> >Part Time</option>
                                                        <option <?php echo !empty($job['job_type'])?(($job['job_type'] == "Contract")?"selected":""):"";?> >Contract</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Salary range*</label>
                                                <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" placeholder="Minimum Salary" id="minimum_salary" name="minimum_salary" value="<?php echo !empty($job['minimum_salary'])?$job['minimum_salary']:"";?>" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" placeholder="Maximum Salary" id="maximum_salary" name="maximum_salary" value="<?php echo !empty($job['maximum_salary'])?$job['maximum_salary']:"";?>" required>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Benefits and perks</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Benefits and perks" id="benifits_perks" name="benifits_perks" value="<?php echo !empty($job['benifits_perks'])?$job['benifits_perks']:"";?>" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Remote work*</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control select2" name="remote_work" id="remote_work" required >
                                                        <option value="">Select Remote work</option>
                                                        <option value="y" <?php echo !empty($job['remote_work'])?(($job['remote_work'] == "y")?"selected":""):"";?> > Yes</option>
                                                        <option value="n" <?php echo !empty($job['remote_work'])?(($job['remote_work'] == "n")?"selected":""):"";?> > No</option>                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label  class="col-sm-12 col-form-label">Location*</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control mb-2" type="text" placeholder="Location" id="location" name="location" value="<?php echo !empty($job['location'])?$job['location']:"";?>"  required >
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label  class="col-sm-12 col-form-label">Application instructions (including contact details)</label>
                                                <div class="col-sm-12">
                                                    <textarea name="application_instructions" id="application_instructions"><?php echo !empty($job['application_instructions'])?$job['application_instructions']:"";?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Date posted</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group" id="datepicker2">
                                                        <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                            data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                                                            data-date-autoclose="true" id="posted_at" name="posted_at"  value="<?php echo !empty($job['posted_at'])?$job['posted_at']:"";?>" >
                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Application deadline</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group" id="datepicker1">
                                                        <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                            data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker"
                                                            data-date-autoclose="true" name="application_deadline" id="application_deadline" value="<?php echo !empty($job['application_deadline'])?$job['application_deadline']:"";?>"  >
                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 row">
                                                <label  class="col-sm-12 col-form-label">job logo and images</label>
                                                <div class="col-sm-6 pe-0">
                                                    <input type="file" class="form-control" id="logo_images" name="logo_images[]" multiple="">
                                                </div>
                                                <div class="col-sm-6 ps-4">
                                                    <?php 
                                                        $jobLogo = $jobObj->getJobLogoById($id); 
                                                         if(!empty($jobLogo)){
                                                            foreach($jobLogo as $logo){
                                                    ?>
                                                            <a href="<?php echo $base_url.'uploads/job/logo/'.$logo['name'];?>" target="_blank" ><?php echo $base_url.'uploads/job/logo/'.$logo['name'];?> </a>
                                                    <?php                                                                 
                                                            }
                                                        }
                                                    ?>

                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <label  class="col-sm-12 col-form-label">job overview and mission statement</label>
                                                <div class="col-sm-12">
                                                    <textarea id="job_overview" name="job_overview"><?php echo !empty($job['job_overview'])?$job['job_overview']:"";?></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12 mb-2">
                                                <label  class="col-sm-12 col-form-label">Diversity and inclusion statement</label>
                                                <div class="col-sm-12">
                                                    <textarea id="diversity_inclusion" name="diversity_inclusion"><?php echo !empty($job['diversity_inclusion'])?$job['diversity_inclusion']:"";?></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                                            <input type="hidden" name="module" value="job">
                                            <input type="hidden" name="action" value="update">
                                            <div class="col-sm-12 mt-4 text-center">
                                                <input class="btn btn-primary waves-effect waves-light me-1" type="submit" name="submit" id="submit" value="Update">
                                                 <a href="candidate-filter.html" class="btn btn-info waves-effect waves-light me-1">Candidate Filter</a>
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
        <script src="<?php echo $base_url;?>admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#job_description").length && tinymce.init({
                selector: "textarea#job_description",
                height: 300,
                plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            })

            $("#responsibilities").length && tinymce.init({
                selector: "textarea#responsibilities",
                height: 300,
                plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            })

            $("#application_instructions").length && tinymce.init({
                selector: "textarea#application_instructions",
                height: 300,
                plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            })


            $("#job_overview").length && tinymce.init({
                selector: "textarea#job_overview",
                height: 300,
                plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            })

            $("#diversity_inclusion").length && tinymce.init({
                selector: "textarea#diversity_inclusion",
                height: 300,
                plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            })

        });
    </script>
	    <script src="<?php echo $base_url;?>dist/assets/js/job.js"></script>

    	<?php include_once("footer.php");?>