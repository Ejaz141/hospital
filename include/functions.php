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
    $sender_id = $_REQUEST['sender_id'];
    $receiver_id = $_REQUEST['receiver_id'];
    $created_at = date('d-m-Y');
    $sql = "SELECT * FROM notification WHERE (sender_id = '{$sender_id}' AND receiver_id = '{$receiver_id}') OR (sender_id = '{$receiver_id}' AND receiver_id = '{$sender_id}')";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $sender_id = $row['sender_id'];
        $receiver_id = $row['receiver_id'];
        if($sender_id){
            
            $receiver_message = $row['receiver_message'];
            if(!$receiver_message){
                $update_query = "Update notification set receiver_message='{$message}' where receiver_id = '{$receiver_id}' and sender_id = '{$sender_id }'";
                mysqli_query($con, $update_query);
            }else{
                $insert_query = "INSERT INTO notification (sender_id,receiver_id, sender_message, created_at) VALUES ('{$sender_id}','{$receiver_id}','{$message}', '{$created_at}')";
                mysqli_query($con, $insert_query);
                echo 1;
                exit;
            }
                
        }
            
        }else{

            $insert_query = "INSERT INTO notification (sender_id,receiver_id, sender_message, created_at) VALUES ('{$sender_id}','{$receiver_id}','{$message}', '{$created_at}')";
            mysqli_query($con, $insert_query);
            
        }
        echo 1;
    }


    if($_REQUEST['page'] == 'delete_doctor') {

            $id = $_GET['id'];
            $sql = "SELECT * FROM users where id = {$session['id']}";
            $sql = "DELETE FROM users where id = {$session['id']}";
            $result = mysqli_query($con, $sql) or die("query successful");
            header('./manage_doctor.php');
       
    }
    if($_REQUEST['page'] == 'delete_patient') {

            $id = $_GET['id'];
            $sql = "SELECT * FROM users where id = {$session['id']}";
            $sql = "DELETE FROM users where id = {$session['id']}";
            $result = mysqli_query($con, $sql) or die("query successful");
            header('./manage_doctor.php');
       
    }



?>