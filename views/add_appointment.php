<?php
session_start();

//error_reporting(0);
include('../include/config.php');
include('../include/checklogin.php');
include('./sidebar.php');


    check_login();
    
    $row = array(); 
    $sql = "SELECT * FROM users WHERE role = 'Doctor'";
    $res = mysqli_query($con, $sql);

    if (isset($_POST['appointment'])) {
        $session = $_SESSION['login'];
        $appointment_date = $_POST['appointment_date'];
        $appointment_time = $_POST['appointment_time'];
        $doctor_id = $_POST['doctor_id'];
        $patient_id = $session['id'];

        $newDate = date("d-m-Y", strtotime($appointment_date));
        $created_at = date("d-m-Y");
        
        $sql = "SELECT * FROM appointment WHERE doctor_id = '{$doctor_id}' and appointment_date = '{$newDate}'";
        $res = mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
            $_SESSION['error'] = "You already added an appointment with this doctor.";
            header("Location: " . "./add_appointment.php");
        } else {
            $insert_query = "INSERT INTO appointment (appointment_date,appointment_time,doctor_id,status,prescription,image,patient_id,created_at) VALUES ('{$newDate}', '{$appointment_time}', '{$doctor_id}','0',null,null,'{$patient_id}','{$created_at}')";
           
            if (mysqli_query($con, $insert_query)) {
                $_SESSION['msg'] = "Data added successfully";
                header("Location: " . "./manage_appointment.php");
            } else {
                $_SESSION['error'] = "Something went wrong, please try again";
                header("Location: " . "./manage_appointment.php");
            }
        }
    }

    
    include('./header.php');
?>
 <!-- Body: Body -->
 <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Appointment</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row mb-3">
                    <div class="col-sm-12">
                    <div class="col-md-12">
                            <p class="bg-danger text-light text-center"><?php if (isset($_SESSION['error'])) {echo $_SESSION['error'];}?></p>
                            <?php unset($_SESSION["error"]);?>
                    </div>
                        <div class="card mb-3">
                           
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row g-3 align-items-center">
                                        
                                        <div class="col-md-6">
                                            <label for="admitdate" class="form-label">Join Date</label>
                                            <input type="date" class="form-control" id="admitdate" name="appointment_date" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="admittime" class="form-label">Join Time</label>
                                            <input type="time" class="form-control" id="admittime" name="appointment_time" required>
                                        </div>

                                        <div class="col-md-6">
                                                <label class="form-label">Doctor</label>
                                                <select class="form-select" name="doctor_id">
                                                <?php 
                                                    while($val = mysqli_fetch_assoc($res)) {
                                                ?>
                                                    <option value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                                                <?php 
                                                    }
                                                ?>
                                                </select>
                                        </div>

                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-4" name="appointment">Submit</button>
                                    <a href="./manage_appointment.php" class="btn btn-secondary mt-4">Cancel</a>
                                </form>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
      
<?php
include('./footor.php');


?>