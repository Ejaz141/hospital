<?php 
include "./include/config.php";
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $incpass = md5($password);
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        $pass = $row['password'];
        if ($pass === $incpass) {
            session_start(); //to ensure you are using same session

            $_SESSION['login'] = $row;
         
            header("Location: " . "views/mainpage.php");
        } else {
            echo "<div class='alert alert-danger'>Invalid password</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Invalid Email</div>";
    }
}

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/ihealth/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 13:45:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: I-Health:: Signin</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <!-- <link rel="stylesheet" href="../assets/css/ihealth.style.min.css"> -->
    <link rel="stylesheet" href="./assets/css/ihealth.style.min.css">
</head>

<body>

<div id="ihealth-layout" class="theme-tradewind">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5 ">
        
        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <div class="text-center mb-5">
                                <i class="icofont-heart-beat secondary-color" style="font-size: 90px;"></i>
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">Hospital Management System</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="./assets/images/login-img.svg" alt="login-img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-1 p-3 p-md-4" action="" method="post">
                                <div class="col-12 text-center mb-5">
                                    <h1>Sign in</h1>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control form-control-lg" placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label">
                                            <span class="d-flex justify-content-between align-items-center">
                                                Password
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control form-control-lg" placeholder="*******">
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin" type="submit" name="login">SIGN IN</button>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <span>Don't have an account yet? <a href="register.php" >Register here</a></span>
                                </div>
                            </form>
                            <!-- End Form -->
                            
                        </div>
                    </div>
                </div> <!-- End Row -->
                
            </div>
        </div>

    </div>

</div>

<!-- Jquery Core Js -->
<!-- <script src="./assets/bundles/libscripts.bundle.js"></script> -->
<script src="./assets/bundles/libscripts.bundle.js"></script>

</body>

<!-- Mirrored from www.pixelwibes.com/template/ihealth/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 13:45:57 GMT -->
</html>