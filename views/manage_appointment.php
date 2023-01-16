<?php
session_start();
//error_reporting(0);
include('../include/config.php');
include('../include/checklogin.php');
include('./sidebar.php');
include('./header.php');

check_login();
    $row = array(); 
    if($session['role'] == 'admin'){
        $sql = "SELECT * FROM appointment";
    }else{
        $sql = "SELECT * FROM appointment where patient_id = '{$session['id']}'";
    }
    
    $res = mysqli_query($con, $sql);


    
    
?>
 <!-- Body: Body -->       
 <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Appoinments</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <a href="./add_appointment.php" class="btn btn-primary btn-set-task w-sm-100" ><i class="icofont-plus-circle me-2 fs-6"></i>Add Appointment</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="col-md-12">
                            <p class="bg-success text-light text-center"><?php if (isset($_SESSION['msg'])) {echo $_SESSION['msg'];}?></p>
                            <?php unset($_SESSION["msg"]);?>
                </div>  
                <div class="col-md-12">
                            <p class="bg-danger text-light text-center"><?php if (isset($_SESSION['error'])) {echo $_SESSION['error'];}?></p>
                            <?php unset($_SESSION["error"]);?>
                </div>
                <div class="col-md-12" id="message">
                            
                </div>
                <div class="row clearfix g-3">
                  <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Appointment Date</th>
                                            <th>Appointment Time</th> 
                                            <th>Doctor</th>
                                            <th>Patient</th>
                                            
                                            <?php if($session['role'] == 'admin'){?>
                                                
                                                <th>Approval</th>
                                                <?php }?>
                                            <th>Status</th>
                                            <th>Send Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while($val = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $val['appointment_date'];?></td>
                                                <td><?php echo $val['appointment_time'];?></td>
                                                <?php 
                                                $row = array(); 
                                                $sql = "SELECT * FROM users where id = '{$val['doctor_id']}'";
                                                $res = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_assoc($res);
                                                ?>
                                                <td><?php echo $row['name']?></td>
                                                <?php 
                                                $row = array(); 
                                                $sql = "SELECT * FROM users where id = '{$val['patient_id']}'";
                                                $res = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_assoc($res);
                                                ?>
                                                <td><?php echo $row['name']?></td>
                                                               
                <?php if($session['role'] == 'admin'){?>
                    
                    <td>
                        <select name="approval" id="approval<?php echo $val['id']?>" onchange="approve_appointment('<?php echo $val['id'];?>')">
                            <option value="1" <?php if($val['status'] == 1){ echo 'selected';}?>>Approve</option>
                            <option value="0" <?php if($val['status'] == 0){ echo 'selected';}?>>Reject</option>
                        </select>
                    </td>
                    <?php }?>
                                                <td>
                                                    <?php if($val['status'] == true){?>
                                                        <span class="badge bg-success">Active</span>
                                                    <?php }else{?>
                                                        <span class="badge bg-danger">De-active</span>
                                                    <?php }?>
                                                </td>

                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit<?php echo $val['id'];?>">Send Message</button>
                                                    </div>
                                                </td>

                                                <!-- Edit Expence-->
        <div class="modal fade" id="expedit<?php echo $val['id'];?>" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="expeditLabel"> Send Message </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                    $notification_query = "SELECT * FROM notification where sender_id = '{$session['id']}' OR receiver_id = '{$session['id']}'";
                    $notification_query_data = mysqli_query($con, $notification_query);
                    while($notification = mysqli_fetch_assoc($notification_query_data)) {
                        
                        
                        
                    ?>
                    <?php if($notification['sender_message']){
                        $user_row = array(); 
                        $user_sql = "SELECT * FROM users where id = '{$notification['sender_id']}'";
                        $user_res = mysqli_query($con, $user_sql);
                        $user_row = mysqli_fetch_assoc($user_res);
                        ?>
                    <div class="mb-3">
                       <p><span style="color:orange"><?php echo $user_row['name']?>:</span>  <?php echo $notification['sender_message']?></p>
                    </div>
                    <?php }?>
                    <?php if($notification['receiver_message']){?>
                    <div class="mb-3">
                        <p><span style="color:green">Your Reply: </span><?php echo $notification['receiver_message']?></p>
                    </div>
                    <?php 
                    }
                    }
                    ?>
                    <div class="mb-3">
                        <label for="item1" class="form-label">Message</label>
                        <input type="hidden" name="sender_id" id="sender_id" value="<?php echo $session['id'];?>">
                        <input type="hidden" name="receiver_id" id="receiver_id" value="<?php echo $val['doctor_id'];?>">

                        <textarea  class="form-control" id="message<?php echo $val['id'];?>" rows="3"></textarea> 
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="send_message('<?php echo $val['id'];?>')">Send</button>
                </div>
            </div>
            </div>
        </div>
                                                
                                             <tr>
                                            <?php 
                                            
                                        }
                                        ?>
                                        
                                           
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                  </div>
                </div><!-- Row End -->
            </div>
        </div>


         
        
<?php
include('./footor.php');

?>
<script>

function approve_appointment(id){
    var status = $('#approval'+id).val();
    $.ajax({

        type: "POST",
        url: '../include/functions.php',
        data: {

            id: id,
            status: status,
            page: 'approve_appointment'

        },
        // method: 'POST', //Post method,
        // dataType: 'json',
        success: function(response) {
            if(response == 1){
                location.reload();
            }else{
                $("#message").html('<p class="bg-danger text-light text-center">Something went wrong</p>');
            }



        }
    });
}


function send_message(id){
    var message = $('#message'+id).val();
    var sender_id = $('#sender_id').val();
    var receiver_id = $('#receiver_id').val();
    alert(sender_id);
    alert(receiver_id);
    $.ajax({

        type: "POST",
        url: '../include/functions.php',
        data: {

            id: id,
            message: message,
            sender_id: sender_id,
            receiver_id: receiver_id,
            page: 'send_message',

        },
        // method: 'POST', //Post method,
        // dataType: 'json',
        success: function(response) {

            if(response == 1){

               alert('Message Send Successfully');
               location.reload();

            }



        }
    });
}

</script>