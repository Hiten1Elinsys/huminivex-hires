    <?php include_once("header.php");?>
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "employee" || empty($_SESSION['member_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    <?php include_once("../controller/candidate.php");
        $id = $_GET['id'];
        $candidateObj = new candidates();
        $candidate = $candidateObj->getCandidateById($id);
       // echo '<pre>';print_r($candidate);exit;
    ?>

    <meta charset="utf-8" />
    <title>Edit Candidate | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Huminivex Hires" name="description" />
    <!-- App favicon -->
    <?php include_once("css.php");?>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            
           <?php include("sidebar.php");?>

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
                                    <h4 class="mb-sm-0">Edit Candidate</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url."member/list_candidate.php";?>">Candidate</a></li>
                                            <li class="breadcrumb-item active">Edit Candidate</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <form name="candidate_frm" id="candidate_frm" >
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Personal Details</h4>
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label" for="fname">First name</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter First name" id="fname" name="fname" value="<?php echo !empty($candidate['fname'])?$candidate['fname']:"";?>" required >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Last name</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter Last name" id="lname" name="lname" value="<?php echo !empty($candidate['lname'])?$candidate['lname']:"";?>" required >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Email Editress</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="email" placeholder="Enter Email Editress" id="email" name="email" value="<?php echo !empty($candidate['email'])?$candidate['email']:"";?>" >
                                                </div>
                                            </div>
                                             <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Candidate Location</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter Location" id="location" value="<?php echo !empty($candidate['location'])?$candidate['location']:"";?>" name="location" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Primary Contact Number</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter Mobile Number" id="primary_contact_no" name="primary_contact_no" value="<?php echo !empty($candidate['primary_contact_no'])?$candidate['primary_contact_no']:"";?>">
                                                </div>
                                                <span class="mt-2 d-inline-block me-1">Is this Whatsapp number?</span>
                                                <div class="form-check mb-2 d-inline-block mt-1">
                                                    <input class="form-check-input" type="radio" name="p_is_whatsapp"
                                                        id="p_is_whatsapp" value="y" <?php echo ($candidate['p_is_whatsapp'] == "y")?"checked":"";?> >
                                                    <label class="form-check-label" for="p_is_whatsapp">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check d-inline-block">
                                                    <input class="form-check-input" type="radio" name="p_is_whatsapp"
                                                        id="p_is_whatsapp_n" value="n" <?php echo ($candidate['p_is_whatsapp'] == "n")?"checked":"";?> >
                                                    <label class="form-check-label" for="p_is_whatsapp_n">
                                                        No
                                                    </label>
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Secondary Contact Number</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Mobile Number" id="s_contact_no" name="s_contact_no" value="<?php echo !empty($candidate['s_contact_no'])?$candidate['s_contact_no']:"";?>" >
                                                </div>
                                                <span class="mt-2 d-inline-block me-1">Is this Whatsapp number?</span>
                                                <div class="form-check mb-2 d-inline-block mt-1">
                                                    <input class="form-check-input" type="radio" name="s_is_whatsapp"
                                                        id="s_is_whatsapp" value="y" <?php echo ($candidate['s_is_whatsapp'] == "y")?"checked":"";?> >
                                                    <label class="form-check-label" for="s_is_whatsapp">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check d-inline-block">
                                                    <input class="form-check-input" type="radio" name="s_is_whatsapp"
                                                        id="s_is_whatsapp_n" value="n" <?php echo ($candidate['s_is_whatsapp'] == "n")?"checked":"";?> >
                                                    <label class="form-check-label" for="s_is_whatsapp_n">
                                                        No
                                                    </label>
                                                </div> 
                                            </div>
                                            <div class="col-sm-12">
                                                <label  class="col-sm-12 col-form-label">Address</label>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control mb-2" placeholder="Enter Address" id="address" name="address" rows="4"><?php echo !empty($candidate['address'])?$candidate['address']:"";?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Candidate Status</h4>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12 mt-2">
                                                    <div class="form-check mb-3 d-inline-block me-3">
                                                        <input class="form-check-input" type="radio" name="e_status"
                                                            id="e_status" value="fresher" <?php echo ($candidate['e_status'] == "fresher")?"checked":"";?> >
                                                        <label class="form-check-label" for="e_status">
                                                            Fresher
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-inline-block">
                                                        <input class="form-check-input" type="radio" name="e_status"
                                                            id="e_status_n" value="experience" <?php echo ($candidate['e_status'] == "experience")?"checked":"";?> >
                                                        <label class="form-check-label" for="e_status_n">
                                                            Experienced
                                                        </label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>


                                        <div class="employee-statusradio-wrap" <?php echo ($candidate['e_status'] == "experience")?"style='display:block;'":"";?>>
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Current Job title</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter Job title" id="current_job_title" name="current_job_title" value="<?php echo !empty($candidate['current_job_title'])?$candidate['current_job_title']:"";?>" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Which Field Experience</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter Field" id="w_field_experience" name="w_field_experience" value="<?php echo !empty($candidate['w_field_experience'])?$candidate['w_field_experience']:"";?>"  >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Total Years Experience</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="number" placeholder="" id="total_experience" name="total_experience" value="<?php echo !empty($candidate['total_experience'])?$candidate['total_experience']:"";?>" >
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Relevent Experience</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="number" placeholder="" id="relevent_experience" name="relevent_experience" value="<?php echo !empty($candidate['relevent_experience'])?$candidate['relevent_experience']:"";?>" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Current Salary(Monthly)</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter salary" id="c_salary" name="c_salary" value="<?php echo !empty($candidate['c_salary'])?$candidate['c_salary']:"";?>" >
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Notice Period(days)</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="number" placeholder="" min="0" id="notice_period" name="notice_period" value="<?php echo !empty($candidate['notice_period'])?$candidate['notice_period']:"";?>" >
                                                </div>
                                            </div>

                                            <div class="col-sm-12 work-experience-main">
                                                <h4 class="card-title mt-4">Work Experience</h4>

                                                <?php 
                                                    $expriences = $candidateObj->getWorkExperienceById($id);
                                                    if(!empty($expriences))
                                                    {
                                                        $i = 0;
                                                        foreach($expriences as $exprience)
                                                        {
                                                            if($i)
                                                            {
                                                ?>
                                                               <div class="row mb-3 work-experience-wrap" id="work-experience">
                                                <?php         
                                                            }
                                                            else{
                                                ?>
                                                                <div class="row mb-3 work-experience-wrap">
                                                <?php       
                                                            }
                                                ?>
                                                    <div class="col-sm-3">
                                                        <label  class="col-sm-12 col-form-label">Company name</label>        
                                                        <input class="form-control" type="text" placeholder="Enter Company name" name="company_name[]" value="<?php echo !empty($exprience['company_name'])?$exprience['company_name']:"";?>">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label  class="col-sm-12 col-form-label">Job title</label>        
                                                        <input class="form-control" type="text" placeholder="Enter Job title" name="job_title[]" value="<?php echo !empty($exprience['job_title'])?$exprience['job_title']:"";?>" >
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label  class="col-sm-12 col-form-label">Start date</label>        
                                                        <input class="form-control" type="date" placeholder="" name="start_d[]" value="<?php echo !empty($exprience['start_d'])?$exprience['start_d']:"";?>" >
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label  class="col-sm-12 col-form-label">End date</label>        
                                                        <input class="form-control" type="date" placeholder="End date" name="end_d[]" value="<?php echo !empty($exprience['end_d'])?$exprience['end_d']:"";?>" >
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label  class="col-sm-12 col-form-label">&nbsp;</label>
                                                        <?php
                                                            if($i>0){
                                                         ?>       
                                                            <button type="button" class="btn btn-danger waves-effect waves-light me-1 remove_button">Remove</button>
                                                         <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <button type="button" class="btn btn-success waves-effect waves-light me-1 add_button">Add Experience</button>
                                                        <?php
                                                            }
                                                        ?>   
                                                    </div>
                                                </div>

                                                <?php           
                                                            $i++;
                                                        }
                                                    }
                                                ?>    

                                            </div>
                                        </div>
                                    </div>


                                    </div>
                                </div>
                            </div>
                        </div>        
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Education history</h4>
                                        <div class="row mb-3">
                                            <div class="col-sm-12 education-main">

                                                <?php 
                                                    $qualifications = $candidateObj->getQualificationsById($id);
                                                    if(!empty($qualifications))
                                                    {
                                                        $i = 0;
                                                        foreach($qualifications as $qualification)
                                                        {
                                                            if($i)
                                                            {
                                                ?>
                                                                <div class="row mb-3 education-wrap" id="education">
                                                <?php         
                                                            }
                                                            else{
                                                ?>
                                                                <div class="row mb-3 education-wrap">
                                                <?php       
                                                            }
                                                ?>
                                                    <div class="col-sm-3">
                                                        <label  class="col-sm-12 col-form-label">Degree name</label>        
                                                        <input class="form-control" type="text" placeholder="Enter Degree name" name="degree_name[]" value="<?php echo !empty($qualification['degree_name'])?$qualification['degree_name']:"";?>" >
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label  class="col-sm-12 col-form-label">Percentage</label>        
                                                        <input class="form-control" type="text" placeholder="Enter Percentage" name="percentage[]" value="<?php echo !empty($qualification['percentage'])?$qualification['percentage']:"";?>" >
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label  class="col-sm-12 col-form-label">University name</label>        
                                                        <input class="form-control" type="text" placeholder="University name" name="univesity[]" value="<?php echo !empty($qualification['univesity'])?$qualification['univesity']:"";?>" >
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label  class="col-sm-12 col-form-label">Passing year</label>
                                                        <select class="form-select date-dropdown" name="passing_y[]" data-value="<?php echo !empty($qualification['passing_y'])?$qualification['passing_y']:"";?>"></select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label  class="col-sm-12 col-form-label">&nbsp;</label>
                                                        <?php
                                                            if($i>0){
                                                         ?>       
                                                            <button type="button" class="btn btn-danger waves-effect waves-light me-1 remove_button1">Remove</button>
                                                         <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <button type="button" class="btn btn-success waves-effect waves-light me-1 add_button_e">Add Education</button>
                                                        <?php
                                                            }
                                                        ?>   
                                                    </div>
                                                </div>
                                                <?php           
                                                            $i++;
                                                        }
                                                    }
                                                ?> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Others details</h4>
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Skills and abilities</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control select2" multiple="multiple" name="skills[]" id="skills">
                                                        <option value="">Select Skills</option>
                                                        <?php
                                                            if(isset($candidate['skills'])){
                                                                $skills = explode(",",$candidate['skills']);
                                                                foreach($skills as $skill)
                                                                {
                                                        ?>
                                                        <option selected ><?php echo $skill;?></option>
                                                        <?php            
                                                                }
                                                            }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row"><label  class="col-sm-12 col-form-label">Resume</label></div>      
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" id="resume" name="resume">
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="<?php echo $base_url."uploads/candidate/resume/".$candidate['resume'];?>"  target="_blank"><?php echo $candidate['resume'];?></a>
                                                        <a href="<?php echo $base_url."uploads/candidate/resume/".$candidate['resume'];?>" download > <i class="mdi mdi-download font-size-18"></i></a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Certifications and licenses</label>
                                                <div class="row">
                                                <div class="col-sm-9">
                                                    <div class="input-group ">
                                                        <input type="file" class="form-control" id="certifications" name="certifications">
                                                    </div>
                                                </div>
                                                 <div class="col-sm-3">
                                                        <a href="<?php echo $base_url."uploads/candidate/certification/".$candidate['certifications'];?>"  target="_blank"><?php echo $candidate['certifications'];?></a>
                                                        <a href="<?php echo $base_url."uploads/candidate/certification/".$candidate['certifications'];?>" download > <i class="mdi mdi-download font-size-18"></i></a>
                                                    </div>
                                                    </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">References</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="references" id="c_references" name="c_references" value="<?php echo !empty($candidate['c_references'])?$candidate['c_references']:"";?>" >
                                                </div>
                                            </div>
                                           <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Post applied for</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Enter..." id="post_applied_for" name="post_applied_for" value="<?php echo !empty($candidate['post_applied_for'])?$candidate['post_applied_for']:"";?>" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Joining period</label>
                                                <div class="col-sm-12">
                                                    <select class="form-select" aria-label="Default select example" name="joining_period" id="joining_period">
                                                        <option selected="">Select joining period</option>
                                                        <option <?php echo ($candidate['post_applied_for'] == "Immediately")?"selected":"";?> >Immediately</option>
                                                        <option  <?php echo ($candidate['post_applied_for'] == "15 days")?"selected":"";?> >15 days</option>
                                                        <option <?php echo ($candidate['post_applied_for'] == "1 Month")?"selected":"";?> >1 Month</option>
                                                        <option <?php echo ($candidate['post_applied_for'] == "1.5 Month")?"selected":"";?> >1.5 Month</option>
                                                        <option <?php echo ($candidate['post_applied_for'] == "2 Month")?"selected":"";?> >2 Month</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Shortlisted For</label>
                                                <div class="col-sm-12">
                                                    <select class="form-select" aria-label="Default select example" name="shortlisted_for" id="shortlisted_for">
                                                        <option selected="">Select Comapnies</option>
                                                        <?php include_once("../controller/company.php");
                                                            $companyObj = new companies();
                                                            $user_id = $_SESSION['id'];
                                                            $companies = $companyObj->getCompaniesByUserId($user_id);
                                                            if(!empty($companies)){
                                                                foreach($companies as $company){
                                                        ?>
                                                            <option value="<?php echo $company['id'];?>" <?php echo ($company['id'] == $candidate['shortlisted_for'])?"selected":"";?> ><?php echo $company['company_name'];?></option>
                                                         <?php           
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="col-sm-12 col-form-label">Salary expectations (Monthly)</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Salary expectations (Monthly)" id="salary_expectations" name="salary_expectations" value="<?php echo !empty($candidate['salary_expectations'])?$candidate['salary_expectations']:"";?>" >
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label  class="col-sm-12 col-form-label">Work location preference</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" placeholder="Work location preference" id="work_location" name="work_location" value="<?php echo !empty($candidate['work_location'])?$candidate['work_location']:"";?>" >
                                                </div>
                                            </div>
                                            <div class="col-sm-12 awards-main">
                                                <label  class="col-sm-12 col-form-label">Professional accomplishments and awards</label>

                                                <?php 
                                                    $awards = $candidateObj->getAwardsById($id);
                                                    if(!empty($awards))
                                                    {
                                                        $i = 0;
                                                        foreach($awards as $award)
                                                        {
                                                            if($i)
                                                            {
                                                ?>
                                                                <div class="row mb-3 awards-wrap" id="awards">
                                                <?php         
                                                            }
                                                            else{
                                                ?>
                                                                <div class="row mb-3 awards-wrap">
                                                <?php       
                                                            }
                                                ?>
                                                    <div class="col-sm-11">
                                                        <input class="form-control" type="text" placeholder="Professional accomplishments and awards" id="professional_accomlishments" name="professional_accomlishments[]" value="<?php echo !empty($award["title"])?$award["title"]:"";?>">
                                                    </div>
                                                    <div class="col-sm-1 text-center">
                                                        
                                                        <?php
                                                            if($i>0){
                                                         ?>       
                                                            <button type="button" id="awards" class="add_button_awards btn btn-danger waves-effect waves-light"><i class="mdi mdi-trash-can font-size-16"></i></button>
                                                         <?php
                                                            }
                                                            else{
                                                        ?>
                                                       <button type="button" class="add_button_awards btn btn-success waves-effect waves-light"><i class="mdi mdi-plus font-size-16"></i></button>
                                                        <?php
                                                            }
                                                        ?>   
                                                    </div>
                                                </div>
                                                <?php           
                                                            $i++;
                                                        }
                                                    }
                                                ?> 
                                                
                                            </div>
                                            <div class="col-sm-12">
                                                <label  class="col-sm-12 col-form-label">Additional comments or notes</label>
                                                <div class="col-sm-12">
                                                    <textarea id="additionalcomments" name="additionalcomments"><?php echo !empty($candidate['additionalcomments'])?$candidate['additionalcomments']:"";?></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="module" value="candidate">
                                            <input type="hidden" name="action" value="update">
                                            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                            <div class="col-sm-12 mt-4 text-center">
                                                <input class="btn btn-primary waves-effect waves-light me-1" type="submit" name="submit" id="submit" value="Update">
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        </form>    
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

         <?php include("footer_js.php");?>
        

        <script type="text/javascript">
            $(document).ready(function(){
                
                var maxFieldLimit = 10; //Input fields increment limitation
                var Edit_more_button = $('.add_button'); //Edit button selector
                var Fieldwrapper = $('.work-experience-wrap:last'); //Input field wrapper
                var fieldHTML = '<div id="work-experience" class="row mb-3 work-experience-wrap"> <div class="col-sm-3"> <label  class="col-sm-12 col-form-label">Company name</label> <input class="form-control" type="text" placeholder="Company name" name="company_name[]"> </div><div class="col-sm-3"> <label  class="col-sm-12 col-form-label">Job title</label> <input class="form-control" type="text" placeholder="Enter Job title" name="job_title[]"> </div><div class="col-sm-2"> <label  class="col-sm-12 col-form-label">Start date</label> <input class="form-control" type="date" placeholder="" name="start_d[]"> </div><div class="col-sm-2"> <label  class="col-sm-12 col-form-label">End date</label> <input class="form-control" type="date" placeholder="End date" name="end_d[]"> </div><div class="col-sm-2"> <label  class="col-sm-12 col-form-label">&nbsp;</label> <button type="button"  class="btn btn-danger waves-effect waves-light me-1 remove_button">Remove</button> </div></div>'; //New input field html 

                var x = 1; //Initial field counter is 1
                
                $(Edit_more_button).click(function(){ //Once Edit button is clicked
                    if(x < maxFieldLimit){ //Check maximum number of input fields
                        x++; //Increment field counter
                        //$(Fieldwrapper).append(fieldHTML); // Edit field html
                        $(Fieldwrapper).after( $(fieldHTML ) );
                    }
                });
                
                $('.work-experience-main').on('click', '.remove_button', function(e){ //Once remove button is clicked
                    e.preventDefault();
                    //$(this).parent('#test').remove(); //Remove field html
                    $(this).closest("#work-experience").remove();
                    x--; //Decrement field counter
                });
                
            });
            </script>

<script type="text/javascript">
    $(document).ready(function(){

        var datelist = $('.date-dropdown').prop('outerHTML');
        
        var maxFieldLimit1 = 10; //Input fields increment limitation
        var add_more_button1 = $('.add_button_e'); //Edit button selector
        var Fieldwrapper1 = $('.education-wrap:last'); //Input field wrapper
        var fieldHTML1 = '<div id="education" class="row mb-3 education-wrap"><div class="col-sm-3"> <label class="col-sm-12 col-form-label">Degree name</label> <input class="form-control" type="text" placeholder="Enter Degree name" name="degree_name[]"> </div><div class="col-sm-3"> <label class="col-sm-12 col-form-label">Percentage</label> <input class="form-control" type="text" placeholder="Enter Percentage" name="percentage[]"> </div><div class="col-sm-2"> <label class="col-sm-12 col-form-label">University name</label> <input class="form-control" type="text" placeholder="Enter University name" name="univesity[]"> </div><div class="col-sm-2"> <label class="col-sm-12 col-form-label">Passing year</label>  <select class="form-select date-dropdown" name="passing_y[]"></select>  </div><div class="col-sm-2"> <label class="col-sm-12 col-form-label">&nbsp;</label> <button type="button" class="btn btn-danger waves-effect waves-light me-1 remove_button1">Remove</button> </div></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        $(add_more_button1).click(function(){ //Once Edit button is clicked
            if(x < maxFieldLimit1){ //Check maximum number of input fields
                x++; //Increment field counter
                //$(Fieldwrapper).append(fieldHTML); // Edit field html
                $(Fieldwrapper1).after( $(fieldHTML1 ) );
                $('.date-dropdown1').empty().append(datelist);

                $('.date-dropdown').each(function() {
                    var d = $(this).attr("data-value");  
                    var year = (new Date()).getFullYear();
                    var current = year;
                    year -= 33;
                    for (var i = 0; i < 34; i++) {
                    if ((year+i) == current)
                        $(this).append('<option selected value="' + (year + i) + '">' + (year + i) + '</option>');
                    else
                        $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
                    }
                    if(d){$(this).val(d).change();}
                    
                })        

            }
        });


        
        // $(".Edit_button_e").on('click', function () { 
        //     $('.date-dropdown1').append(datelist);
        // });
        $('.education-main').on('click', '.remove_button1', function(e){ //Once remove button is clicked
            e.preventDefault();
            //$(this).parent('#test').remove(); //Remove field html
            $(this).closest("#education").remove();
            x--; //Decrement field counter
        });
        
    });
    </script>

            <script>
                //$(".select2").select2()
                $(".select2").select2({
                    tags: true,
                    tokenSeparators: [',']
                })
                $("#additionalcomments").length && tinymce.init({
                    selector: "textarea#additionalcomments",
                    height: 300,
                    plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                })
            </script>
              <script>

                    $('.date-dropdown').each(function() {
                        var d = $(this).attr("data-value");    
                        var year = (new Date()).getFullYear();
                        var current = year;
                        year -= 33;
                        for (var i = 0; i < 34; i++) {
                        if ((year+i) == current)
                            $(this).append('<option selected value="' + (year + i) + '"> ' + (year + i) + '</option>');
                        else
                            $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
                        }

                        $(this).val(d).change();

                    })

                    $(document).ready(function(){
                        $('.date-dropdown1').each(function() {

                            var year = (new Date()).getFullYear();
                            var current = year;
                            year -= 33;
                            for (var i = 0; i < 34; i++) {
                                if ((year+i) == current)
                                    $(this).append('<option selected value="' + (year + i) + '">' + (year + i) + '</option>');
                                else
                                     $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
                            }   

                        })
                    });
              </script>

              <script type="text/javascript">
                $(document).ready(function(){
                    var maxFieldLimit1 = 10; //Input fields increment limitation
                    var Edit_more_button1 = $('.add_button_awards'); //Edit button selector
                    var Fieldwrapper1 = $('.awards-wrap:last'); //Input field wrapper
                    var fieldHTML1 = '<div class="row mb-3 awards-wrap" id="awards"><div class="col-sm-11"><input class="form-control" name="professional_accomlishments[]" placeholder="Professional accomplishments and awards" type="text"></div><div class="col-sm-1 text-center"><button class="awards_remove_button btn btn-danger waves-effect waves-light" type="button"><i class="mdi mdi-trash-can font-size-16"></i></button></div></div>'; //New input field html 
                    var x = 1; //Initial field counter is 1
                    $(Edit_more_button1).click(function(){ //Once Edit button is clicked
                        if(x < maxFieldLimit1){ //Check maximum number of input fields
                            x++; //Increment field counter
                            //$(Fieldwrapper).append(fieldHTML); // Edit field html
                            $(Fieldwrapper1).after( $(fieldHTML1 ) );
                        }
                    });
                    $('.awards-main').on('click', '.awards_remove_button', function(e){ //Once remove button is clicked
                        e.preventDefault();
                        //$(this).parent('#test').remove(); //Remove field html
                        $(this).closest("#awards").remove();
                        x--; //Decrement field counter
                    });
                    
                });
                </script>
                <script>
                    $(document).ready(function(){
                        $("#e_status_n").click(function() {
                            $(".employee-statusradio-wrap").show();
                         }); 
                         $("#e_status").click(function() {
                            $(".employee-statusradio-wrap").hide();
                         });
                     }); 
                </script>
    <script src="<?php echo $base_url;?>dist/assets/js/candidate.js"></script>
    <?php include("footer.php");?>
