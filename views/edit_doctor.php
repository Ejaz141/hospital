<?php
session_start();
//error_reporting(0);

include '../include/config.php';
include '../include/checklogin.php';
check_login();

// function add_doctor()
// {
include './sidebar.php';

// }
if (isset($_POST['firstname'])) {
    $id = $_POST['id'];
    $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $role = 'Doctor';
    $image = $_FILES['image'];
    $gender = $_POST['gender'];
    $prescription = $_POST['prescription'];

    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $img_location = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_destination = "../assets/images/store/" . $img_name;
    move_uploaded_file($img_location, $img_destination);

    $update_query = "UPDATE users SET name = '$name', email = '$email', phonenumber = '$phonenumber', role = '$role', image = '$img_name', gender = '$gender', prescription = '$prescription', password = '$password'   WHERE id = '$id'";

    $result = mysqli_query($con, $update_query);

    header("Location: " . "./manage_doctor.php");
}

?>
<?php include './header.php';?>
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
                         <?php
include '../include/config.php';
$id = $_GET['id'];

$select_query = "SELECT * FROM users where id = $id";

$result = mysqli_query($con, $select_query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        ?>
                                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                                    <div class="row g-3 align-items-center">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <div class="col-md-6">

                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" name="firstname" value="<?php $first_name = explode(' ', $row['name'], 2);
        echo $first_name[0];?>" class="form-control" id="firstname" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" name="lastname" value="<?php $last_name = explode(' ', $row['name'], 2);
        echo $last_name[1];?>" class="form-control" id="lastname" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phonenumber" class="form-label">Phone Number</label>
                                            <input type="text" name="phonenumber" value="<?php echo $row['phonenumber']; ?>" class="form-control" id="phonenumber" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="emailaddress" class="form-label">Email Address</label>
                                            <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="emailaddress" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control" id="password" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Confirm Password</label>
                                            <input type="password" name="confirm_password" class="form-control" id="password" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="formFileMultiple" class="form-label"> Document Upload</label>
                                            <input class="form-control" type="file" name="image" value="<?php echo $row['image']; ?>" id="formFileMultiple" multiple required>
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label">Gender</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" value="<?php echo $row['gender']; ?>" id="exampleRadios11" value="male" checked>
                                                        <label class="form-check-label" for="exampleRadios11">
                                                        Male
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" value="<?php echo $row['gender']; ?>" id="exampleRadios22" value="female">
                                                        <label class="form-check-label" for="exampleRadios22">
                                                        Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="addnote" class="form-label">Prescription</label>
                                            <textarea  class="form-control" name="prescription" value="<?php echo $row['prescription']; ?>" id="addnote" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-success text-light mt-4" name="update" value="Update">
                                </form>
                                <?php }
}?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<?php
include './footor.php';

?>