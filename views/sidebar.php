<?php 
 
 $session = $_SESSION['login'];

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from www.pixelwibes.com/template/ihealth/html/dist/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 13:45:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: I-Health::  Appointment </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="../assets/css/ihealth.style.min.css">
     <!-- plugin css file  -->
     <link rel="stylesheet" href="../assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="../assets/plugin/datatables/dataTables.bootstrap5.min.css">
</head>
<body>

<div id="ihealth-layout" class="theme-tradewind">
   
   <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
           
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link" href="./mainpage.php">
                    <i class="icofont-ui-home fs-5"></i> <span>Dashboard</span> </a>
                   
                </li>

               <?php if($session['role'] == 'admin' || $session['role'] == 'Doctor'){?>
                <li class="collapsed">
                    <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu-Doctor" href="#">
                        <i class="icofont-doctor-alt fs-5"></i>  <span>Doctor</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse show" id="menu-Doctor">
                            <li><a class="ms-link" href="./manage_doctor.php">All Doctors</a></li>
                            <li><a class="ms-link" href="./add_doctor.php">Add Doctor</a></li>
                            <li><a class="ms-link" href="./doctor_patient.php">Patients</a></li>
                          
                        </ul>
                </li>
                <?php }?>
                <?php if($session['role'] == 'admin' || $session['role'] == 'Patient'){?>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Patient" href="#">
                    <i class="icofont-blind fs-5"></i> <span>Patient</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Patient">
                        <li><a class="ms-link" href="./manage_patient.php">Patient List</a></li>
                        <li><a class="ms-link" href="./add_patient.php">Add Patient</a></li>
                        <li><a class="ms-link" href="./manage_appointment.php">Appointment</a></li>
                    </ul>
                </li>
                <?php }?>
              
            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>