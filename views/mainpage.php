<?php
session_start();
//error_reporting(0);
include('../include/config.php');
include('../include/checklogin.php');
include('./sidebar.php');
include('./header.php');

check_login();
?>

 <!-- Body: Body -->
 <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row g-3 mb-3">
                    <div class="col-md-12 col-lg-4 col-xl-4 d-none d-lg-block">
                    <div class="card-body">
                                <div class="row g-12 row-deck">
                                <?php if($session['role'] == 'admin' || $session['role'] == 'Doctor'){?>
                                    <a href="./manage_doctor.php">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-patient-file fs-3 text-secondary"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Doctor</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php }if($session['role'] == 'admin' || $session['role'] == 'Patient'){?>
                                    <a href="./manage_patient.php">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-patient-file fs-3 text-secondary"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Patient</h6>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                <?php }?>
                                </div>
                            </div>
                    </div>
                       
                </div>
            </div>
        </div>

<?php
include('./footor.php');


?>