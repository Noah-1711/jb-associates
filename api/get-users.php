<?php
include('../include/connection.php');
// include 'include/conn.php';

header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');

$request_method=$_SERVER["REQUEST_METHOD"];
// echo $request_method;

switch($request_method)
{
	case 'GET':
			// Retrive Products	Category
            getUsers();
 
	break;

	default:
			// Invalid Request Method
	header("HTTP/1.0 405 Method Not Allowed");
	break;
}
 

function getUsers()
{
	global $connection;
	$query;
	 
		$query="SELECT * FROM tbl_user";		 
 
	$response=array();
	if($result=mysqli_query($connection, $query));
	{
		if(mysqli_num_rows($result) > 0){

			while($row=mysqli_fetch_assoc($result))
			{
				$response[]=$row;
			}
			// echo $response;
			header('Content-Type: application/json');

			echo json_encode($response);

		}
		else{

		}
	}

}


// @mysqli_close($conn);

?>
