<?php
session_start();
//error_reporting(0);

include '../include/config.php';
include '../include/checklogin.php';
check_login();

// function add_doctor()
// {

if (isset($_POST['add_doctor'])) {
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $role = 'Doctor';
    $image = $_FILES['image'];
    $gender = $_POST['gender'];
    $prescription = $_POST['prescription'];

    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
        echo "<div class='alert alert-danger'>Email already exists</div>";
    } else {
        if ($password === $confirm_password) {
            $password = md5($password);

            $img_location = $_FILES['image']['tmp_name'];
            $img_name = $_FILES['image']['name'].date('dmyhis');
            $img_destination = "../assets/images/store/" . $img_name;
            move_uploaded_file($img_location, $img_destination);

            $insert_query = "INSERT INTO users (name, email,phonenumber, password, role, image, gender, prescription, status) VALUES ('{$name}', '{$email}','{$phonenumber}','{$password}','{$role}','{$img_name}','{$gender}', '{$prescription}', '1')";

            if (mysqli_query($con, $insert_query)) {
                $_SESSION['msg'] = "$name you are registerd successfully";
                header("Location: " . "./manage_doctor.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>something went wrong here...?</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Password are not match</div>";
        }
    }
}

include './sidebar.php';
include './header.php';
// }
?>
 <!-- Body: Body -->
 <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Add Doctor</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Doctor Inforamtion</h6>
                            </div>
                            <div class="card-body">
                                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label for="firstname" class="form-label">Name</label>
                                            <input type="text" name="firstname" class="form-control" id="firstname" required>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <label for="phonenumber" class="form-label">Phone Number</label>
                                            <input type="text" name="phonenumber" class="form-control" id="phonenumber" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="emailaddress" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control" id="emailaddress" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Confirm Password</label>
                                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="formFileMultiple" class="form-label"> Document Upload</label>
                                            <input class="form-control" type="file" name="image" id="formFileMultiple" multiple>
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label">Gender</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios11" value="male" checked>
                                                        <label class="form-check-label" for="exampleRadios11">
                                                        Male
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios22" value="female">
                                                        <label class="form-check-label" for="exampleRadios22">
                                                        Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="addnote" class="form-label">Prescription</label>
                                            <textarea  class="form-control" name="prescription" id="addnote" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-primary mt-4" name="add_doctor" value="Submit">
                                    <a href="./manage_doctor.php" class="btn btn-secondary mt-4">Cancel</a>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<?php
include './footor.php';

?>