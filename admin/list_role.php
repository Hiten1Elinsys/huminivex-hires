    <?php include_once("header.php");?>
    
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    
    <?php include_once("../controller/role.php");?>

    <meta charset="utf-8" />
    <title>Manage Role | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />

    <?php include_once("css.php");?>

    </head>

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
                                    <h4 class="mb-sm-0">Manage Role</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url;?>admin/list_role.php">Role</a></li>
                                            <li class="breadcrumb-item active">Manage Role</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- end page title -->

                        <div class="row">  
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-sm-12 mt-0 mb-4 text-end">
                                            <a href="<?php echo $base_url.'admin/add_role.php';?>" class="btn btn-success waves-effect waves-light me-1">Add Role</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-centered datatable dt-responsive nowrap" data-bs-page-length="10" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>#Id</th>
                                                        <th>Title</th>
                                                        <th>Module</th>
                                                        <th style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                        $roleObj = new roles();
                                                        $roles =  $roleObj->getAllRoles();
                                                        if(!empty($roles))
                                                        {
                                                            $count = 1;
                                                            foreach($roles as $role)
                                                            {
                                                                $moduleIds = implode(",",json_decode($role['role']));
                                                                $modules = $roleObj->getModulesByModuleIds($moduleIds);  
                                                                
                                                     ?>
                                                     <tr>
                                                        <td><?php echo $count++;?></td>
                                                        <td>#<?php echo $role['id'];?></td>
                                                        <td><?php echo $role['title'];?></td>
                                                        <td><?php echo $modules;?></td>
                                                        <td id="tooltip-container1">
                                                            <a href="<?php echo $base_url.'admin/edit_role.php?id='. $role['id']?>" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="<?php echo $base_url.'admin/role_detail.php?id='.$role['id'];?>" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" onclick="deleteRoleById(<?php echo $role['id'];?>)" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                    </tr>
                                                     <?php           
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
                        <!-- end row -->
                    </div>
                    
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
    </body>

</html>