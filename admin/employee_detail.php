       <?php include_once("header.php");?>
       <?php
        if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
            header("Location:".$base_url);
        }     
        ?>  
        <?php include_once("../controller/employee.php");
            $id = $_GET['id'];
            $employeeObj = new Employees();
            $employee = $employeeObj->getEmployeeById($id);
           //echo '<pre>';print_r($employee);exit;
        ?>
        
        <meta charset="utf-8" />
        <title>Employee details | huminivex Hires</title>
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
                                    <h4 class="mb-sm-0">Employee Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url.'admin/list_employee.php';?>">Candidate</a></li>
                                            <li class="breadcrumb-item active">Employee Details</li>
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
                                                    <?php echo !empty($employee['fname'])?$employee['fname']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Last name</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($employee['lname'])?$employee['lname']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Email address</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($employee['email'])?$employee['email']:"";?>
                                                </div>
                                            </div>
                                             <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Primary Contact Number</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($employee['p_contact_no'])?$employee['p_contact_no']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Secondary Contact Number</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($employee['s_contact_no'])?$employee['s_contact_no']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Date of birth </label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($employee['dob'])?$employee['dob']:"";?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Password</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($employee['password'])?$employee['password']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Designation</label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($employee['designation'])?$employee['designation']:"";?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Role </label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($employee['role_title'])?$employee['role_title']:"";?>
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