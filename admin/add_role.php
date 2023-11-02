    <?php include_once("header.php");?>
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    <?php include_once("../controller/role.php");?>
    <meta charset="utf-8" />
    <title>Add Role | Huminivex Hires</title>
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
                                    <h4 class="mb-sm-0">Add Role</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="manage-company.html">Role</a></li>
                                            <li class="breadcrumb-item active">Add Role</li>
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
                                         <form name="role_frm" id="role_frm" >
                                             <div class="row mb-3">
                                                <div class="col-sm-6">
                                                    <label  class="col-sm-12 col-form-label" for="title">Role Title*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" placeholder="Enter Role title" name="title" id="title" required="">
                                                    </div>
                                                     <div class="col-sm-12 mt-3">
                                                        <div class="mt-4 mt-lg-0">
                                                            <h5 class="font-size-14 mb-3">Modules</h5>
                                                            <div class="row">
                                                                <?php 
                                                                $roleObj = new roles();
                                                                $roles = $roleObj->getAllModules();
                                                                if(!empty($roles ))
                                                                {
                                                                    foreach($roles  as $role)
                                                                    {
                                                            ?>
                                                             <div class="col-sm-6">
                                                                <div class="form-check mb-3">
                                                                    <input class="form-check-input" type="checkbox" name="role[]" id="role_<?php echo !empty($role['id'])?$role['id']:"";?>" value="<?php echo !empty($role['id'])?$role['id']:"";?>">
                                                                    <label class="form-check-label" for="role_<?php echo !empty($role['id'])?$role['id']:"";?>">
                                                                        <?php echo !empty($role['title'])?$role['title']:"";?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <?php            
                                                                    }
                                                                }
                                                            ?> 
                                                            </div>
                                                        </div>
                                                      </div>

                                                        <input type="hidden" name="module" value="role">
                                                        <input type="hidden" name="action" value="save">
                                                        <div class="col-sm-12 mt-4 text-center">
                                                            <input class="btn btn-primary waves-effect waves-light me-1" type="submit" name="submit" id="submit" value="Add Role">
                                                        </div>
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

        <script src="<?php echo $base_url;?>dist/assets/js/role.js"></script>

        <?php include_once("footer.php");?>