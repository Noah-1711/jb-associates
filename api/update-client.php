
<?php
 
    
 if(!empty($_POST['uclientname']) || !empty($_POST['uemail']))
 {
 
 // echo "<img src='$path' />";
 $id = $_POST['id'];
 $agentname = $_POST['uagentname'];
 $agent_id = $_POST['uagent_id'];
 $servicename = $_POST['uservicename'];
 $service_id = $_POST['uservice_id'];
//  $servicename = $_POST['servicename'];
 $servicearray = implode(",", $servicename);

//  $service_id = $_POST['service_id'];
 $serviceidarray = implode(",", $service_id);
 $isWhatsapp = $_POST['uisWhatsapp'];
 $isPrint = $_POST['uisPrint'];
 $payment_mode = $_POST['upaymentmode'];
 $clientname = $_POST['uclientname']; 
 $address= $_POST['uaddress']; 
 $firmname = $_POST['ufirmname'];
 $contact= $_POST['ucontact']; 
 $email = $_POST['uemail']; 
 $task = $_POST['utask'];
 $assigned_userid = $_POST['uassigned_userid'];
 $assigned_username= $_POST['uassigned_username'];
 $total_amount = $_POST['utotal_amount'];
 $deposited_amount=$_POST['udeposited_amount'];
 $remaining_amount = $_POST['uremaining_amount'];
 $submission_date = $_POST['usubmission_date'];
 $updated_status = $_POST['uupdated_status'];

    
 //include database configuration file
 include_once '../include/connection.php';
  
 //insert form data in the database
 $update = "update tbl_client set agentname='".$agentname."',agent_id='".$agent_id."',servicename='".$servicearray."',service_id='".$servicearray."',isWhatsapp='".$isWhatsapp."',isPrint='".$isPrint."',paymentmode='".$payment_mode."',clientname='".$clientname."', address='".$address."', firmname='".$firmname."', contact='".$contact."', email='".$email."',task='".$task."', assigned_userid='".$assigned_userid."', assigned_username='".$assigned_username."', status='".$updated_status."', total_amount='".$total_amount."', deposited_amount='".$deposited_amount."', remaining_amount='".$remaining_amount."', submission_date='".$submission_date."' where id='".$id."'";
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