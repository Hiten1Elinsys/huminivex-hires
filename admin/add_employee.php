   <?php include_once("header.php");?>
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
    ?>  
  
    <meta charset="utf-8" />
    <title>Add Employee | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Huminivex Hires" name="description" />

    <?php 
    include_once("../controller/role.php");
    $roleObj = new roles();
    ?>

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
                                    <h4 class="mb-sm-0">Add Employee</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url.'admin/list_employee.php';?>">Employee</a></li>
                                            <li class="breadcrumb-item active">Add Employee</li>
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
                                    <form name="employee_frm" id="employee_frm" >
                                        <div class="row mb-3">
                                           
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="fname">*First name</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Enter First name" name="fname" id="fname" required="">
                                                    </div>
                                                </div>	

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="lname">*Last name</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Enter Last name" name="lname" id="lname" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="email">*Email</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="email" placeholder="Enter Email" name="email" id="email" required="">
                                                        <div id="emailError" class="invalid-feedback">Email is already exist.</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="p_contact_no">*Primary Contact No</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Enter Primary Contact No" name="p_contact_no" id="p_contact_no" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="s_contact_no">Secondary Contact No</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Enter Secondary Contact No" name="s_contact_no" id="s_contact_no">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="dob">*Date Of Birth</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="date" placeholder="" name="dob" id="dob" required="">
                                                    </div>
                                                </div> 
                                                 <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="dob">*Password</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="" name="password" id="password" required="">
                                                    </div>
                                                </div> 

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="dob">*Designation</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="" name="designation" id="designation" required="">
                                                    </div>
                                                </div> 

                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="role_id">*Role</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control select2" placeholder="" name="role_id" id="role_id" required="">
                                                            <option value="">find role</option>
                                                            <?php 
                                                                $roles = $roleObj->getAllRoles();
                                                                if(!empty($roles))
                                                                {
                                                                    foreach($roles as $role)
                                                                    {
                                                            ?>
                                                            <option value="<?php echo !empty($role['id'])?$role['id']:"";?>"><?php echo !empty($role['title'])?$role['title']:"";?></option>
                                                            <?php
                                                                    }       
                                                                }       
                                                            ?>    
                                                        </select>    
                                                    </div>
                                                </div> 
                                                <input type="hidden" name="module" value="employee">
                                                <input type="hidden" name="action" value="save">
                                                <div class="col-sm-12 mt-4 text-center">
                                                    <input class="btn btn-primary waves-effect waves-light me-1" type="submit" name="submit" id="submit" value="Add Employee">
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

	    <script src="<?php echo $base_url;?>dist/assets/js/employee.js"></script>

    	<?php include_once("footer.php");?>