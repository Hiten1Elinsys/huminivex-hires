<?php 
    include("config.php");
    if(isset($_SESSION['group_name']))
    {
        if($_SESSION['group_name'] == "admin")
        {
            header("Location:".$base_url."admin");  
        }
        elseif($_SESSION['group_name'] == "client"){
            header("Location:".$base_url."client");
        }
    }
?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Huminivex Hires</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Huminivex Hires" name="description" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $base_url;?>dist/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?php echo $base_url;?>dist/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo $base_url;?>dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo $base_url;?>dist/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="<?php echo $base_url;?>dist/assets/css/custom-style.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="auth-body-bg">
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                            <div class="w-100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div>
                                            <div class="text-center">
                                                <div>
                                                    <a href="<?php echo $base_url;?>" class="">
                                                        <img src="<?php echo $base_url;?>dist/assets/images/logo-dark.png" alt="" class="auth-logo logo-dark mx-auto">
                                                        <img src="<?php echo $base_url;?>dist/assets/images/logo-light.png" alt="" height="20" class="auth-logo logo-light mx-auto">
                                                    </a>
                                                </div>
    
                                                <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                                <p class="text-muted">Sign in to continue to Huminivex Hires.</p>
                                            </div>

                                            <div class="p-2 mt-5">

                                                <?php 
                                                if(isset($_GET['error_code'] ))
                                                {
                                                    if($_GET['error_code'] == "400")
                                                    {
                                                ?>
                                                <div class="alert alert-danger mb-4" role="alert">
                                                    Oops, Something went wrong while login.
                                                </div>  
                                                <?php
                                                    }
                                                ?> 
                                                <?php 
                                                    if($_GET['error_code'] == "401")
                                                    {
                                                ?>
                                                <div class="alert alert-danger mb-4" role="alert">
                                                    Email or password is incorrect.
                                                </div>
                                                <?php
                                                    }
                                                }
                                                ?>   
                                                <form class="" action="<?php echo $base_url;?>login-exe.php" method="post">
                    
                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                        <label for="email">Email</label>
                                                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" value="<?php echo isset($_COOKIE['email'])?$_COOKIE['email']:"";?>" required >
                                                    </div>
                            
                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                        <label for="userpassword">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"  value="<?php echo  isset($_COOKIE['password'])?$_COOKIE['password']:"";?>"  required>
                                                    </div>
                            
                                                    <div class="form-check">
                                                        <input type="checkbox" name="remmberme" class="form-check-input" id="remmberme" <?php echo isset($_COOKIE['rememberme'])?"checked":"";?>>
                                                        <label class="form-check-label" for="remmberme">Remember me</label>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <!-- <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button> -->
                                                       <!--  <a class="btn btn-primary w-md waves-effect waves-light" href="dashboard.html">Log In</a> -->
                                                        <input type="submit" class="btn btn-primary w-md waves-effect waves-light" name="submit" id="submit" value="Login">
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <a href="recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="mt-5 text-center">
                                                <!--<p>Don't have an account ? <a href="register.html" class="fw-medium text-primary"> Register </a> </p>
                                            -->
                                                <p>© <script>document.write(new Date().getFullYear())</script> Huminivex Hires. All rights reserved.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="authentication-bg">
                            <div class="bg-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- JAVASCRIPT -->
        <script src="<?php echo $base_url;?>dist/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo $base_url;?>dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $base_url;?>dist/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo $base_url;?>dist/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo $base_url;?>dist/assets/libs/node-waves/waves.min.js"></script>

        <script src="<?php echo $base_url;?>dist/assets/js/app.js"></script>

    </body>
</html>
