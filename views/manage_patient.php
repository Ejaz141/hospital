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
    $sql = "SELECT * FROM users WHERE role = 'Patient'";
}else{
    $sql = "SELECT * FROM users WHERE role = 'Patient' AND id = '{$session['id']}'";
}

$res = mysqli_query($con, $sql);



?>
 <!-- Body: Body -->       
 <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Patient</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <a href="./add_patient.php" class="btn btn-primary btn-set-task w-sm-100" ><i class="icofont-plus-circle me-2 fs-6"></i>Add Patient</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row clearfix g-3">
                  <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th> 
                                            <th>Status</th>
                                         
                                            <th>Actions</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while($val = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $val['name'];?></td>
                                                <td><?php echo $val['email'];?></td>
                                                <td>
                                                    <?php if($val['status'] == true){?>
                                                        <span class="badge bg-success">Active</span>
                                                    <?php }else{?>
                                                        <span class="badge bg-danger">De-active</span>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="./edit_patient.php?id=<?php echo $val['id']; ?>" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <a href="javascript:void(0)" class="btn btn-outline-secondary deleterow"  onclick="deletedata('<?php echo $val['id'];?>')"><i class="icofont-ui-delete text-danger"></i></a>
                                                 </div>
                                             </td>
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

<<script>

function deletedata(id){
   
    $.ajax({

        type: "POST",
        url: '../include/functions.php',
        data: {

            id: id,
            page: 'delete_patient',

        },
        // method: 'POST', //Post method,
        // dataType: 'json',
        success: function(response) {
            // if(response == 1){

            //    alert('Message Send Successfully');
            //    location.reload();

            // }



        }
    });
}
</script>