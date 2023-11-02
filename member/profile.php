    <?php include("header.php");?>
    
    <meta charset="utf-8" />
    <title>Profile | Huminivex Hires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Huminivex Hires" name="description" />
    
    <?php include('css.php');?>
    <?php include('../controller/profile.php');
        $userObj = new users();
        $user = $userObj->getUserDetailById($_SESSION['id']);
        // echo '<pre>';print_r($user);exit;

    ?>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include('sidebar.php');?>

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
                                    <h4 class="mb-sm-0">Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo $base_url;?>">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <form class="" name="profle_frm" id="profile_frm" novalidate> 
                                                <div class="col-sm-12 mt-3 mb-4 text-center">
                                                    <div class="profile-pic-wrap">
                                                    <div class="circle">
                                                        <?php 
                                                            $userImg = $no_image;
                                                            if(!empty($user['image'])){

                                                                $userImg = $base_url."uploads/user/".$user['image'];
                                                            }

                                                        ?>
                                                        <img class="profile-pic" src="<?php echo $userImg;?>">
                                                      </div>
                                                      <div class="p-image">
                                                        <i class="fa fa-camera upload-button"></i>
                                                         <input class="file-upload" type="file" accept="image/*" name="user_image" id="user_image"/>
                                                      </div>
                                                    </div>
                                                </div>   

                                                <div class="col-sm-12">
                                                    <label  class="col-sm-12 col-form-label" for="full_name">Full Name*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" name="full_name" id="full_name" value="<?php echo !empty($user['name'])?$user['name']:""; ?>" >
                                                        <div class="invalid-feedback" id="full_name_error">
                                                            Required Field.
                                                        </div>  
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-12">
                                                    <label  class="col-sm-12 col-form-label" for="email">Email address*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="email" name="email" id="email" value="<?php echo !empty($user['email'])?$user['email']:""; ?>" >
                                                        <div class="invalid-feedback" id="email_error">
                                                            Required Field.
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label  class="col-sm-12 col-form-label" for="old_pass">Current Password*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="password" name="old_pass" id="old_pass">
                                                        <span class="error" id="old_pass_error"></span>
                                                        <span class="invalid-feedback" id="old_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label  class="col-sm-12 col-form-label" for="new_pass">New Password*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="password" name="new_pass" value="" id="new_pass">
                                                        <span class="error" id="passerror"></span>
                                                        <span class="invalid-feedback" id="new_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label  class="col-sm-12 col-form-label" for="confirm_pass">Confirm New Password*</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="password" name="confirm_pass" value="" id="confirm_pass">
                                                        <span class="invalid-feedback" id="confirm_error"></span>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="module" value="user">
                                                <input type="hidden" name="action" value="update">
                                                <div class="col-sm-12 mt-4 text-center">
                                                    <input class="btn btn-primary waves-effect waves-light me-1" type="submit" name="submit" id="submit" value="Save">
                                                  </div>
                                            </form>
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

        <?php include("footer_js.php");?>

        <script>
           $(document).ready(function() {
                var readURL = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('.profile-pic').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $(".file-upload").on('change', function(){
                    readURL(this);
                });
                $(".upload-button").on('click', function() {
                     $(".file-upload").click();
                });
            });
        </script>
        <script src="<?php echo $base_url;?>dist/assets/js/user.js"></script>
    </body>
</html>
