    <?php include_once("header.php");?>       
    
    <meta charset="utf-8" />
    <title>Role details | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Huminivex Hires" name="description" />
    
    <?php include_once("css.php");?>
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    <?php include_once("../controller/role.php");
        $id = $_GET['id'];
        $roleObj = new roles();
        $role = $roleObj->getRoleById($id);
    ?>

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
                                    <h4 class="mb-sm-0">Role Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url.'admin/list_role.php';?>">Role</a></li>
                                            <li class="breadcrumb-item active">Role Details</li>
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
                                                <label for="example-text-input" class="col-sm-12 col-form-label"><b>Title:</b></label>
                                                <div class="col-sm-12">
                                                    <?php echo !empty($role['title'])?$role['title']:"";?>
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Modules</label>     
                                                 <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
            
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Module Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            $moduleIds = implode(",",json_decode($role['role']));
                                                            $modules = explode(",",$roleObj->getModulesByModuleIds($moduleIds)); 
                                                             if(!empty($modules))
                                                             {
                                                                $i = 1;
                                                                foreach($modules  as $module)
                                                                {
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $i;?></th>
                                                            <td><?php echo !empty($module)?$module:"";?></td>
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
