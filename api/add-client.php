    
<?php
 
    
 if(!empty($_POST['clientname']) || !empty($_POST['contact']))
 {
 
 // echo "<img src='$path' />";
 $agentname = $_POST['agentname'];
 $agent_id = $_POST['agent_id'];
 $servicename = $_POST['servicename'];
 $servicearray = implode(",", $servicename);

 $service_id = $_POST['service_id'];
 $serviceidarray = implode(",", $service_id);
 $sms_status = 'not_sent';
 $isWhatsapp = $_POST['isWhatsapp'];
 $payment_mode = $_POST['paymentmode'];
 $isPrint = $_POST['isPrint'];
 $clientname = $_POST['clientname']; 
 $address= $_POST['address']; 
 $firmname = $_POST['firmname'];
 $contact= $_POST['contact']; 
 $email = $_POST['email']; 
 $task = $_POST['task'];
 $assigned_userid = $_POST['assigned_userid'];
 $assigned_username= $_POST['assigned_username'];
 $total_amount = $_POST['total_amount'];
 $deposited_amount=$_POST['deposited_amount'];
 $remaining_amount = $_POST['remaining_amount'];
 $submission_date = $_POST['submission_date'];
//  $beforeConvDate = DateTime::createFromFormat('d/m/Y', $submission_date_ini);
//  $submission_date = $beforeConvDate->format("Y-m-d H:i:s");

 $date = date('Y-m-d H:i:s');
 
 //include database configuration file
 include_once '../include/connection.php';
  
 //insert form data in the database
 $insert = $connection->query("INSERT INTO tbl_client (agentname, agent_id, servicename, service_id, isWhatsapp, isPrint, paymentmode, clientname, address, firmname, contact, email,task, assigned_userid, assigned_username, status, sms_status, total_amount, deposited_amount, remaining_amount, submission_date, registered_date)
  VALUES ('".$agentname."','".$agent_id."','".$servicearray."','".$serviceidarray."','".$isWhatsapp."','".$isPrint."','".$payment_mode."','".$clientname."','".$address."','".$firmname."','".$contact."','".$email."', '".$task."','".$assigned_userid."','".$assigned_username."','pending','not_sent','".$total_amount."','".$deposited_amount."','".$remaining_amount."','".$submission_date."','".$date."')"); 
 //echo $insert?'ok':'err';

     $response['status'] = 1; 
     $response['message'] = 'Form Submitted Successfully!'; 

 }
 else  
 {
     $response['status'] = 0; 
     $response['message'] = 'Error'; 
 
 }
 


 echo json_encode($response);
 ?>