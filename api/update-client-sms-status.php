
<?php
 
    
 if(!empty($_POST['sms_status']))
 {
 
 // echo "<img src='$path' />";
 $id = $_POST['id']; 
 $sms_status = $_POST['sms_status'];

    
 //include database configuration file
 include_once '../include/connection.php';
  
 //insert form data in the database
 $update = "update tbl_client set sms_status='".$sms_status."' where id='".$id."'";
//  $insert = $connection->query();
 if(mysqli_query($connection, $update)){
    // echo "Records were updated successfully.";    
    $response['status'] = 1; 
    $response['message'] = 'Form Submitted Successfully!'; 
    echo json_encode($response);
} else {
    // echo "ERROR: Could not able to execute $update. " . mysqli_error($connection);
    
    $response['status'] = 0; 
    $response['message'] = 'Error'; 
    echo json_encode($response);
}
  

 }
 


 ?>