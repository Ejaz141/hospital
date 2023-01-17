<?php 
include('../include/config.php');
if($_REQUEST['page'] == 'approve_appointment') {
    $id = $_REQUEST['id'];
    $status = $_REQUEST['status'];

    $update_query = "Update appointment set status='{$status}' where id='{$id}'";

    if(mysqli_query($con, $update_query)) {
        echo 1;
    }else {
        echo 0;
    }
}

if($_REQUEST['page'] == 'send_message') {
    $id = $_REQUEST['id'];
    $message = $_REQUEST['message'];
    $sender_id_new = $_REQUEST['sender_id'];
    $receiver_id_new = $_REQUEST['receiver_id'];
    $created_at = date('d-m-Y');
    $sql = "SELECT * FROM notification WHERE (sender_id = '{$sender_id_new}' AND receiver_id = '{$receiver_id_new}') OR (sender_id = '{$receiver_id_new}' AND receiver_id = '{$sender_id_new}') AND appointment_id = '{$id}'  order by id DESC limit 1"; 
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $sender_id = $row['sender_id'];
        $receiver_id = $row['receiver_id'];
        if($sender_id && $sender_id != $sender_id_new){
            
            $receiver_message = $row['receiver_message'];
            if(!$receiver_message){
                $update_query = "Update notification set receiver_message='{$message}' where receiver_id = '{$receiver_id}' and sender_id = '{$sender_id}' and appointment_id = '{$id}'  order by id DESC limit 1";
                mysqli_query($con, $update_query);
            }else{
                $insert_query = "INSERT INTO notification (sender_id,receiver_id, sender_message, appointment_id, created_at) VALUES ('{$sender_id_new}','{$receiver_id_new}','{$message}', '{$id}', '{$created_at}')";
                mysqli_query($con, $insert_query);
                echo 1;
                exit;
            }
                
        }else{
            $insert_query = "INSERT INTO notification (sender_id,receiver_id, sender_message, appointment_id, created_at) VALUES ('{$sender_id_new}','{$receiver_id_new}','{$message}', '{$id}', '{$created_at}')";
                mysqli_query($con, $insert_query);
                echo 1;
                exit;
        }
            
        }else{

            $insert_query = "INSERT INTO notification (sender_id,receiver_id, sender_message, appointment_id, created_at) VALUES ('{$sender_id_new}','{$receiver_id_new}','{$message}', '{$id}', '{$created_at}')";
            mysqli_query($con, $insert_query);
            
        }
        echo 1;
    }


    if($_REQUEST['page'] == 'delete_doctor') {

            $id = $_GET['id'];
            $sql = "SELECT * FROM users where id = {$id}";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            if(isset($row['image'])){
                $del_img_destination = "../assets/images/store/" . $row['image'];
                unlink($del_img_destination);
            }
            $sql = "DELETE FROM users where id = {$id}";
            
            header('./manage_doctor.php');
       
    }
    if($_REQUEST['page'] == 'delete_patient') {

        $id = $_GET['id'];
        $sql = "SELECT * FROM users where id = {$id}";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if(isset($row['image'])){
            $del_img_destination = "../assets/images/patient/" . $row['image'];
            unlink($del_img_destination);
        }
        $sql = "DELETE FROM users where id = {$id}";
        
        header('./manage_doctor.php');
       
    }



?>