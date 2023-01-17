<?php


// $json_data = json_decode(file_get_contents('php://input'), true);
// if (!empty($json_data)) {
//     $_REQUEST = $json_data;
// }
// if ($_REQUEST['show_errors'] === 'true' || $_REQUEST['show_errors'] === true) {
//     error_reporting(E_ALL);
//     ini_set('display_errors', E_ALL);
// }

$servername = "sql104.epizy.com";
$username = "epiz_33376096";
$password = "nkc3jbWp8H";
$dbname = "epiz_33376096_hms";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db_name = "hms";

// // Create connection`
// $conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    send_response(false, [], 'Connection failed');
}

//Check request
if (!empty($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
        case "signup":
            signup($_REQUEST);
            break;
        case "login":
            login($_REQUEST);
            break;
        case "add_doctor";
            add_doctor($_REQUEST);
            break;
        case "add_patient";
            add_patient($_REQUEST);
            break;
        case "doctor_listing";
            doctor_listing($_REQUEST);
            break;
        case "patient_listing";
            patient_listing($_REQUEST);
            break;
        case "patient_appointment_listing";
            patient_appointment_listing($_REQUEST);
            break;
        case "doctor_appointment_listing";
            doctor_appointment_listing($_REQUEST);
            break;
        case "patient_appointment";
            patient_appointment($_REQUEST);
            break;
        default:
            send_response(false, [], 'Invalid Request'); 
    }
    exit;
}else{
    send_response(false, [], 'invalid request');
}

function send_response($status, $data=[], $message=''){
   
    $response = [
        'status' => $status,
        'data' => !empty($data) ? $data : (object)$data,
        'message' => $message,
    ];
    header("Content-type:application/json");
    echo json_encode($response);
    exit;
}

function check_duplication($table, $field, $value){
    global $conn;
    if(!empty($table) && !empty($field) && !empty($value)){

        $sql = "SELECT * FROM $table WHERE $field='$value'";
        // echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) { 
            return true;
        }
        return false;
    }else{
        return true;
    }
}

function generate_verification_code(){
    $digits = 4;
    return str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
}

function signup($request=[]){
    global $conn;
    if(!empty($request['name']) && !empty($request['email']) && !empty($request['password'])){


        $request['phone'] = $request['phone'] ?? '';

        // Escape special characters, if any
        $name = $conn->real_escape_string($request['name']);
        $email = $conn->real_escape_string($request['email']);
        $phone = $conn->real_escape_string($request['phone']);
        $password = md5($request['password']);
        $role = $conn->real_escape_string($request['role']);
        $token = substr(md5(rand()), 0, 7);
        $token = base64_encode($token);

        $created_date = date('Y-m-d H:i:s');
        // $updated_date = date('Y-m-d H:i:s');
        // $four_digit_code = generate_verification_code();
        
        //check email duplication
        
        if(check_duplication('users', 'email', $email) == false){
            //insert user
            $sql = "INSERT INTO users (name, email, password, status, role, created_at, token) VALUES ('$name', '$email', '$password', 1, '$role', '$created_date', '$token')";
            
            if ($conn->query($sql) === true) {
                //send email verification code 
                $id = $conn->insert_id;
                // $code = send_email_verification($id, $email, $four_digit_code);
                $sql = "SELECT * FROM users WHERE id='$id'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // unset($row['password']);
                        // unset($row['email_verification']);
                        send_response(true, $row, 'Data added Scessfully');
                    }
                }else{
                    send_response(false, [], $message = 'an error occured');
                }
            } else {
                // echo "Error: " . $sql . "<br>" . $conn->error;
                send_response(false, [], $message = 'an error occured');
            }
        }else{
            send_response(false, [], 'email already exists');
        }
    }else{
        send_response(false, [], 'name, email and password is required');
    }
}

function login($request=[]){
    global $conn;
    if (!empty($request['email']) && !empty($request['password'])) {
        // Escape special characters, if any
        $email = $conn->real_escape_string($request['email']);
        $password = md5($request['password']);

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                send_response(true, $row, 'Login Sccessfully');
            }
        }else{
            send_response(false, $data = [], 'invalid credentials');
        }
    } else {
        send_response(false, [], 'email and password is required');
    }
}

function add_doctor($request=[]){
    global $conn;
    if(isset($request['id']) && ___auth($request['id']) == false){
        send_response(false, [], 'Invalid user');
    }
    if(!empty($request['role']) && $request['role'] == 'admin'){

        if (!empty($request['name']) && !empty($request['phone']) && !empty($request['email']) && !empty($request['password']) && !empty($request['gender'])) {
            // Escape special characters, if any
            $name = $request['name'];
            $phonenumber = $request['phone'];
            $email = $conn->real_escape_string($request['email']);
            $gender = $request['gender'];
            $password = md5($request['password']);
            if(isset($request['prescription'])){
                $prescription = $request['prescription'];
            }else{
                $prescription = '';
            }
            
            $created_at = date('Y-m-d h:i:s'); 
            $role = 'Doctor';
            if(check_duplication('users', 'email', $email) == false){
                $sql = "INSERT INTO users (name, email, password, status, role, created_at, gender, phonenumber) VALUES ('$name', '$email', '$password', 1, '$role', '$created_at', '$gender', '$phonenumber')";
                if ($conn->query($sql) === true) {
                    send_response(false, [], 'Data added successfully');
                }
            }else{
                send_response(false, [], 'Email already exist');
            }
            
            
    
        } else {
            send_response(false, [], 'name, email, phone, password, gender is required');
        }

    }else {
        send_response(false, [], 'Admin can add the doctors');
    }
   
}


function add_patient($request=[]){
    global $conn;
    if(isset($request['id']) && ___auth($request['id']) == false){
        send_response(false, [], 'Invalid user');
    }
    if(!empty($request['role']) && $request['role'] == 'admin'){

        if (!empty($request['name']) && !empty($request['phone']) && !empty($request['email']) && !empty($request['password']) && !empty($request['gender'])) {
            // Escape special characters, if any
            $name = $request['name'];
            $phonenumber = $request['phone'];
            $email = $conn->real_escape_string($request['email']);
            $gender = $request['gender'];
            $password = md5($request['password']);
            if(isset($request['prescription'])){
                $prescription = $request['prescription'];
            }else{
                $prescription = '';
            }
            
            $created_at = date('Y-m-d h:i:s'); 
            $role = 'Patient';
            if(check_duplication('users', 'email', $email) == false){
                $sql = "INSERT INTO users (name, email, password, status, role, created_at, gender, phonenumber) VALUES ('$name', '$email', '$password', 1, '$role', '$created_at', '$gender', '$phonenumber')";
                if ($conn->query($sql) === true) {
                    send_response(false, [], 'Data added successfully');
                }
            }else{
                send_response(false, [], 'Email already exist');
            }
            
            
    
        } else {
            send_response(false, [], 'name, email, phone, password, gender is required');
        }

    }else {
        send_response(false, [], 'Admin can add the patients');
    }
   
}

function doctor_listing($request=[]){
    global $conn;
    if(isset($request['id']) && ___auth($request['id']) == false){
        send_response(false, [], 'Invalid user');
    }
    if(!empty($request['role']) && $request['role'] == 'admin'){
        $sql = "SELECT * FROM users WHERE role='Doctor'";
        $result = $conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            send_response(true, $data, 'success');
        }else{
            send_response(false, $data = [], 'Data not found');
        }
    }else{
        if(isset($request['id'])){
            $id = $request['id'];
            $sql = "SELECT * FROM users WHERE role='Doctor' and id = '$id'";
            $result = $conn->query($sql);
            $data = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                send_response(true, $data, 'success');
            }else{
                send_response(false, $data = [], 'Data not found');
            }
        }else{
            send_response(false, $data = [], 'Data not found');
        }
       
    }
}


function patient_listing($request=[]){
    global $conn;
    if(isset($request['id']) && ___auth($request['id']) == false){
        send_response(false, [], 'Invalid user');
    }
    if(!empty($request['role']) && $request['role'] == 'admin'){
        $sql = "SELECT * FROM users WHERE role='Patient'";
        $result = $conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            send_response(true, $data, 'success');
        }else{
            send_response(false, $data = [], 'Data not found');
        }
    }else{
        if(isset($request['id'])){
            $id = $request['id'];
            $sql = "SELECT * FROM users WHERE role='Patient' and id = '$id'";
            $result = $conn->query($sql);
            $data = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                send_response(true, $data, 'success');
            }else{
                send_response(false, $data = [], 'Data not found');
            }
        }else{
            send_response(false, $data = [], 'Data not found');
        }
       
    }
}


function patient_appointment_listing($request=[]){
    global $conn;
    if(isset($request['id']) && ___auth($request['id']) == false){
        send_response(false, [], 'Invalid user');
    }
    if(!empty($request['role']) && $request['role'] == 'admin'){
        $sql = "SELECT * FROM appointment";
        $result = $conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            send_response(true, $data, 'success');
        }else{
            send_response(false, $data = [], 'Data not found');
        }
    }else{
        if(isset($request['id'])){
            $id = $request['id'];
            $sql = "SELECT * FROM appointment WHERE patient_id='$id'";
            $result = $conn->query($sql);
            $data = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                send_response(true, $data, 'success');
            }else{
                send_response(false, $data = [], 'Data not found');
            }
        }else{
            send_response(false, $data = [], 'Data not found');
        }
       
    }
}


function doctor_appointment_listing($request=[]){
    global $conn;
    if(isset($request['id']) && ___auth($request['id']) == false){
        send_response(false, [], 'Invalid user');
    }
    if(!empty($request['role']) && $request['role'] == 'admin'){
        $sql = "SELECT * FROM appointment";
        $result = $conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            send_response(true, $data, 'success');
        }else{
            send_response(false, $data = [], 'Data not found');
        }
    }else{
        if(isset($request['id'])){
            $id = $request['id'];
            $sql = "SELECT * FROM appointment WHERE doctor_id='$id'";
            $result = $conn->query($sql);
            $data = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                send_response(true, $data, 'success');
            }else{
                send_response(false, $data = [], 'Data not found');
            }
        }else{
            send_response(false, $data = [], 'Data not found');
        }
       
    }
}


function patient_appointment($request=[]){
    global $conn;
    if(isset($request['id']) && ___auth($request['id']) == false){
        send_response(false, [], 'Invalid user');
    }
    if(!empty($request['role']) && $request['role'] == 'Patient'){

        if (!empty($request['date']) && !empty($request['time']) && !empty($request['doctor_id'])) {
            // Escape special characters, if any
            $date = date("d-m-Y", strtotime($request['date']));
            $time = $request['time'];
            $doctor_id = $conn->real_escape_string($request['doctor_id']);
            $patient_id = $request['id'];
       
            $created_at = date('Y-m-d h:i:s'); 
            $sql = "INSERT INTO appointment (appointment_date, appointment_time, doctor_id, patient_id, created_at, status) VALUES ('$date', '$time', '$doctor_id', $patient_id, '$created_at', 0)";
            if ($conn->query($sql) === true) {
                send_response(false, [], 'Data added successfully');
            }  
    
        } else {
            send_response(false, [], 'date, time and doctor is required');
        }

    }else {
        send_response(false, [], 'Admin or Patient can add the Appointment');
    }
   
}


function ___auth($id){
    global $conn;
    $sql = "SELECT * FROM users WHERE id='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return true;
        }else{
            return false;
        }
}


?>