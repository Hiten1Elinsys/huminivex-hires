    <?php include_once("header.php");?>
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "employee" || empty($_SESSION['member_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    <?php include_once("../controller/company.php");?>
    <meta charset="utf-8" />
    <title>Add company | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Huminivex Hires" name="description" />

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
                                    <h4 class="mb-sm-0">Add Company</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="manage-company.html">Company</a></li>
                                            <li class="breadcrumb-item active">Add Company</li>
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
                                    <form name="company_frm" id="company_frm" >
                                        <div class="row mb-3">
                                           
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="comapny_name">Company name*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Company name" name="company_name" id="comapny_name" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="email">Official Email id*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="email" placeholder="example@gmail.com" name="email" id="email" required="">
                                                        <div id="emailError" class="invalid-feedback">Email is already exist.</div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="mobile_no">Official Contact No*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="9723XXXXXX" name="mobile_no" id="mobile_no" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Industry or sector*</label>
                                                    <div class="col-sm-12" for="industry_id">
                                                        <select class="form-control select2" name="industry_id" id="industry_id" required="">
                                                            <option value="">Select Industry or sector</option>
                                                                <?php 
                                                                    $company = new Companies();
                                                                    $industries = $company->getAllIndustries();

                                                                    if(!empty( $industries))
                                                                    {
                                                                        foreach( $industries as $industry)
                                                                        {
                                                                 ?>
                                                                  <option value="<?php echo $industry['id'];?>"><?php echo $industry['title'];?></option>
                                                                 <?php           
                                                                        }
                                                                    }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="comapny_size">Company size (number of employees)*</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control select2" name="comapny_size" id="comapny_size" required="">
                                                            <option value="">Select company size</option>
                                                            <option>0-10 employees</option>
                                                            <option>10-20 employees</option>
                                                            <option>20-50 employees</option>
                                                            <option>50-100 employees</option>
                                                            <option>100-500 employees</option>
                                                            <option>500-1000 employees</option>
                                                            <option>1000+ employees</option>   
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="location">Location*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Location" id="example-text-input" name="location" id="location" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="contact_person_name">Contact person or recruiter's point of contact*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Contact person or recruiter's point of contact" name="contact_person_name" id="contact_person_name" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="website_url">Website URL*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Website URL" name="website_url" id="website_url" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label  class="col-sm-12 col-form-label" for="company_over_view">Company overview and history</label>
                                                    <div class="col-sm-12">
                                                        <textarea name="company_over_view" id="company_over_view" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="mission_value">Mission and values</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Mission and values" name="mission_value" id="mission_value" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="current_job_openings">Current job openings</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="number" min='1' placeholder="Current job openings" name="current_job_openings" id="current_job_openings" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="working_days">Working Days</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="number" min='1' max='7' placeholder="working days" name="working_days" id="working_days" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <h4 class="card-title mt-4">Working shifts</h4>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12 education-main">
                                                            <div class="row mb-3 shift-wrap">
                                                                <div class="col-sm-3">
                                                                    <label  class="col-sm-12 col-form-label">Title</label>        
                                                                    <input class="form-control" type="text" placeholder="Enter Title" id="example-text-input" name="shift_title[]">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label  class="col-sm-12 col-form-label">Start time</label>
                                                                    <input class="form-control" type="time" placeholder="" id="example-text-input" name="shift_stime[]">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label  class="col-sm-12 col-form-label">End Time</label>
                                                                    <input class="form-control" type="time" placeholder="" id="example-text-input"  name="shift_etime[]">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label  class="col-sm-12 col-form-label">&nbsp;</label>
                                                                    <button type="button" class="btn btn-success waves-effect waves-light me-1 add_shift_e">Add Shift</button>
                                                                </div>
                                                            </div>
                                                        </div>                
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <label  class="col-sm-12 col-form-label" for="e_benifits">Employee benefits and compensation packages</label>
                                                    <div class="col-sm-12">
                                                        <textarea  name="e_benifits" id="e_benifits" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="company_culture">Company culture and work environment</label>
                                                    <div class="col-sm-12">
                                                        <textarea name="company_culture" id="company_culture"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Social responsibility initiatives</label>
                                                    <div class="col-sm-12">
                                                        <textarea id="social_responsibility" name="social_responsibility"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Diversity and inclusion policies and initiatives</label>
                                                    <div class="col-sm-12">
                                                        <textarea id="diversity_inclusion" name="diversity_inclusion" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label">Testimonials or case studies from past or current employees</label>
                                                    <div class="col-sm-12">
                                                        <textarea id="testimonials" name="testimonials" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label  class="col-sm-12 col-form-label">Additional comments or notes</label>
                                                    <div class="col-sm-12">
                                                        <textarea id="additional_comments" name="additional_comments" ></textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="module" value="company">
                                                <input type="hidden" name="action" value="save">
                                                <div class="col-sm-12 mt-4 text-center">
                                                    <input class="btn btn-primary waves-effect waves-light me-1" type="submit" name="submit" id="submit" value="Add Comapny">
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

        <script>
            $(document).ready(function() {
	$("#company_over_view").length && tinymce.init({
		selector: "textarea#company_over_view",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#e_benifits").length && tinymce.init({
		selector: "textarea#e_benifits",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#company_culture").length && tinymce.init({
		selector: "textarea#company_culture",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#social_responsibility").length && tinymce.init({
		selector: "textarea#social_responsibility",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
	$("#diversity_inclusion").length && tinymce.init({
		selector: "textarea#diversity_inclusion",
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
	$("#additional_comments").length && tinymce.init({
		selector: "textarea#additional_comments",
		height: 300,
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	})
});
</script>


    <script src="<?php echo $base_url;?>dist/assets/js/company.js"></script>



  <script type="text/javascript">
    $(document).ready(function(){
        var maxFieldLimit1 = 10; //Input fields increment limitation
        var add_more_button1 = $('.add_shift_e'); //Add button selector
        var Fieldwrapper1 = $('.shift-wrap'); //Input field wrapper
        var fieldHTML1 = '<div class="row mb-3 shift-wrap"  id="awards"><div class="col-sm-3"><label  class="col-sm-12 col-form-label">Title</label><input class="form-control" type="text" placeholder="Enter Title" id="example-text-input" name="shift_title[]"></div><div class="col-sm-3"><label  class="col-sm-12 col-form-label">Start time</label><input class="form-control" type="time" placeholder="" id="example-text-input" name="shift_stime[]"></div><div class="col-sm-3"><label  class="col-sm-12 col-form-label">End Time</label><input class="form-control" type="time" placeholder="" id="example-text-input" name="shift_etime[]"></div><div class="col-sm-3"><label  class="col-sm-12 col-form-label">&nbsp;</label><button type="button" class="btn btn-danger waves-effect waves-light me-1 awards_remove_button">Remove</button></div></div>';

        var x = 1; //Initial field counter is 1
        $(add_more_button1).click(function(){ //Once add button is clicked
            if(x < maxFieldLimit1){ //Check maximum number of input fields
                x++; //Increment field counter
                //$(Fieldwrapper).append(fieldHTML); // Add field html
                $(Fieldwrapper1).after( $(fieldHTML1 ) );
            }
        });
        $('.education-main').on('click', '.awards_remove_button', function(e){ //Once remove button is clicked
            e.preventDefault();
            //$(this).parent('#test').remove(); //Remove field html
            $(this).closest("#awards").remove();
            x--; //Decrement field counter
        });
        
    });
    </script>

    <?php include_once("footer.php");?>