    <?php include_once("header.php");?>
    <?php
    if(empty($_SESSION['group_name']) || $_SESSION['group_name'] != "admin" || empty($_SESSION['recruiter_id'])){
        header("Location:".$base_url);
    }     
    ?>  
    <?php include_once("../controller/company.php");?>

    <meta charset="utf-8" />
    <title>Manage Candidate | Signature Hires</title>
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
                                    <h4 class="mb-sm-0">Manage company</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url;?>admin/list_company.php">Company</a></li>
                                            <li class="breadcrumb-item active">Manage Company</li>
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
                                            <a href="<?php echo $base_url.'admin/add_company.php';?>" class="btn btn-success waves-effect waves-light me-1">Add Company</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-centered datatable dt-responsive nowrap" data-bs-page-length="10" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Company ID</th>
                                                        <th>company email</th>
                                                        <th>company password</th>
                                                        <th>Company name</th>
                                                        <th>Industry or sector</th>
                                                        <th>Company size</th>
                                                        <th>Location</th>
                                                        <th>Contact person</th>
                                                        <th>Website URL</th>
                                                        <th style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                        $company = new Companies();
                                                        $clist =  $company->getAllComapnies();
                                                        if(!empty($clist))
                                                        {
                                                            $count = 1;
                                                            foreach($clist as $client)
                                                            {
                                                     ?>
                                                     <tr>
                                                        <td><?php echo $count++;?></td>
                                                        <td><a href="company-details.html" class="text-dark fw-bold">#<?php echo $client['id'];?></a> </td>
                                                        <td><?php echo $client['email'];?></td>
                                                        <td><?php echo $client['password'];?></td>
                                                        <td><?php echo $client['company_name'];?></td>
                                                        <td><?php echo $client['industry_title'];?></td>
                                                        <td><?php echo $client['comapny_size'];?></td>
                                                        <td><?php echo $client['location'];?></td>
                                                        <td><?php echo $client['contact_person_name'];?></td>
                                                        <td><a target="_blank" href="<?php echo $client['website_url'];?>"><?php echo $client['website_url'];?></a></td>
                                                        <td id="tooltip-container1">
                                                            <a href="<?php echo $base_url.'admin/edit_company.php?id='. $client['id']?>" class="text-primary me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="<?php echo $base_url.'admin/comapny_detail.php?id='.$client['id'];?>" class="text-dark me-1" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="javascript:void(0);" onclick="deleteComapnyById(<?php echo $client['id'];?>)" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
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
        <script src="<?php echo $base_url;?>dist/assets/js/company.js"></script>
    </body>

</html>