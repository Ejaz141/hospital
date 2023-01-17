<?php
session_start();

$session = $_SESSION['login'];
//error_reporting(0);

include '../include/config.php';
include '../include/checklogin.php';
check_login();


if (isset($_POST['add_prescription'])) {

    $id = $_GET['id'];
    $image = $_FILES['image'];
    $prescription = $_POST['prescription'];
    $old_image = $_POST['old_image'];
   
    $img_location = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'].date('dmyhis');
    $img_destination = "../assets/images/prescription/" . $img_name;

    if(isset($old_image)){
        $del_img_destination = "../assets/images/prescription/" . $old_image;
        unlink($del_img_destination);
    }
    
    move_uploaded_file($img_location, $img_destination);

    $update_query = "UPDATE appointment SET prescription = '$prescription', image = '$img_name' WHERE id = '$id'";

    $result = mysqli_query($con, $update_query);

    header("Location: " . "./doctor_patient.php");
}

include './sidebar.php';
include './header.php';

$a_id = $_GET['id'];
$select_query = "SELECT * FROM appointment where id = '$a_id'";
$result = mysqli_query($con, $select_query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

?>
        <!-- Body: Body -->
        <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Add Prescription</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            </div>
                            <div class="card-body">
                                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                                    
                                <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label for="prescription" class="form-label">Prescription</label>
                                            <textarea  class="form-control" name="prescription" id="prescription" rows="3"><?php echo $row['prescription'];?></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="formFileMultiple" class="form-label"> Document Upload</label>
                                            <input class="form-control" type="file" name="image" id="formFileMultiple" multiple>
                                            <?php if($row['image']){?>
                                            <img src="../assets/images/prescription/<?php echo $row['image'];?>" alt="" width="100px" height="100px">
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-primary mt-4" name="add_prescription" value="Submit">
                                    <a href="./doctor_patient.php" class="btn btn-secondary mt-4">Cancel</a>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php 
        }
    }
?>

<?php
include './footor.php';

?>