    <?php include_once("header.php");?>       
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "employee" || empty($_SESSION['member_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    <?php include_once("../controller/company.php");
        $id = $_GET['id'];
        $companyObj = new companies();
        $company = $companyObj->getCompanyById($id);
    ?>

    <meta charset="utf-8" />
    <title>Company details | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Huminivex Hires" name="description" />
    
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
                                    <h4 class="mb-sm-0">Company Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url.'admin/list_company.php;'?>">Company</a></li>
                                            <li class="breadcrumb-item active">Company Details</li>
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
                                            
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label"><b>Company name</b></label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($company['company_name'])?$company['company_name']:"";?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Industry or sector</label>
                                                <div class="col-sm-12">
                                                     <?php echo !empty($company['industry_title'])?$company['industry_title']:"";?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Company size (number of employees)</label>
                                                <div class="col-sm-12">
                                                      <?php echo !empty($company['comapny_size'])?$company['comapny_size']:"";?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Location</label>
                                                <div class="col-sm-12">
                                                     <?php echo !empty($company['location'])?$company['location']:"";?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Contact person or recruiter's point of contact</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($company['contact_person_name'])?$company['contact_person_name']:"";?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Website URL</label>
                                                <div class="col-sm-12">
                                                   <a href="<?php echo !empty($company['website_url'])?$company['website_url']:"";?>" target="_blank"> <?php echo !empty($company['website_url'])?$company['website_url']:"";?></a> 
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Company overview and history</label>
                                                <div class="col-sm-12">
                                                   <?php echo !empty($company['company_over_view'])?$company['company_over_view']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Mission and values</label>
                                                <div class="col-sm-12">
                                                     <?php echo !empty($company['mission_value'])?$company['mission_value']:"";?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Current job openings</label>
                                                <div class="col-sm-12">
                                                   <?php echo !empty($company['current_job_openings'])?$company['current_job_openings']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Working days</label>
                                                <div class="col-sm-12">
                                                   <?php echo !empty($company['working_days'])?$company['working_days']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 mb-3">
                                               <label for="example-text-input" class="col-sm-12 col-form-label">Working shifts</label>     
                                               <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
        
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Start Time</th>
                                                        <th>End Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                         $shifts = $companyObj->getShiftsByComapnyId($id);
                                                         if(!empty($shifts))
                                                         {
                                                            $i = 1;
                                                            foreach($shifts  as $shift)
                                                            {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i;?></th>
                                                        <td><?php echo !empty($shift['title'])?$shift['title']:"";?></td>
                                                        <td><?php echo !empty($shift['stime'])?$shift['stime']:"";?></td>
                                                        <td><?php echo !empty($shift['etime'])?$shift['etime']:"";?></td>
                                                    </tr>
                                                    <?php                
                                                            }
                                                         }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                            </div>

                                            <div class="col-sm-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Employee benefits and compensation packages</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($company['e_benifits'])?$company['e_benifits']:"";?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Company culture and work environment</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($company['company_culture'])?$company['company_culture']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Social responsibility initiatives</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($company['social_responsibility'])?$company['social_responsibility']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Diversity and inclusion policies and initiatives</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($company['diversity_inclusion'])?$company['diversity_inclusion']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Testimonials or case studies from past or current employees</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($company['testimonials'])?$company['testimonials']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Additional comments or notes</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($company['additional_comments'])?$company['additional_comments']:"";?>
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
