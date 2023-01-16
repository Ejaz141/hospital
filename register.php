<?php 


include "./include/config.php";
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
        echo "<div class='alert alert-danger'>Email already exists</div>";
    } else {
        if ($password === $confirm_password) {
            $pass = md5($password);
            $insert_query = "INSERT INTO users (name, email, password, role, status) VALUES ('{$name}', '{$email}', '{$pass}','{$role}','1')";

            if (mysqli_query($con, $insert_query)) {
                $_SESSION['msg'] = "$name you are registerd successfully";
                header("Location: " . "./index.php");
            } else {
                echo "<div class='alert alert-danger'>something went wrong here...?</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Password are not match</div>";
        }
    }
}

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/ihealth/html/dist/ui-elements/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 13:45:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Signup</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="./assets/css/ihealth.style.min.css">
</head>

<body>

<div id="ihealth-layout" class="theme-tradewind">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5">
        
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
                                    <h1>Create your account</h1>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Full name</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Enter Your Name" name="name" required>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control form-control-lg" placeholder="name@example.com" name="email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">User Type</label>
                                        <select class="form-select" name="role">

                                            <option value="Doctor">Doctor</option>
                                            <option value="Patient">Patient</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="Enter Your Password" required name="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Confirm password</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="Confirm Password" name="confirm_password" required>
                                    </div>
                                </div>
                                
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" name="register">SIGN UP</button>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <span>Already have an account? <a href="./index.php" title="Sign in" >Sign in here</a></span>
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
<script src="./assets/bundles/libscripts.bundle.js"></script>

</body>

<!-- Mirrored from www.pixelwibes.com/template/ihealth/html/dist/ui-elements/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 13:45:57 GMT -->
</html>