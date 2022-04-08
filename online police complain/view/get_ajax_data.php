
<?php
	session_start();
	include('dbh.php');
	$conn = OpenCon();
	//echo "connected successfully";
	
	// print_r($_GET['search']);exit;

		if (isset($_GET['search'])) {
	 		$search_value= $_GET['search'];
	 		

	 		
	 			


	 				$sql = "select * from usertable where nid = '$search_value' ";
	 				$result = mysqli_query($conn, $sql);
	 				$num = mysqli_num_rows($result);
	 				if($num>0){
	 				$data_return=array();
	 				 while($data = mysqli_fetch_array($result)){
	 				 	
	 				 	$data_return['nid'] = $data['nid']; 
	 				 	$data_return['password'] = $data['password'];
	 				 	$data_return['name'] = $data['name'];
	 				 	// $data_return['password'] = $data['password'];
	 				 	$data_return['email'] = $data['email'];
	 				 	$data_return['phoneNumber'] = $data['phoneNumber'];
	 				 	$data_return['dob'] = $data['dob'];
	 				 	$data_return['age'] = $data['age'];
	 				 	$data_return['address'] = $data['address'];
	 				 	$data_return['currentAddress'] = $data['currentAddress'];
	 				 	

	 				 }
	 				
	 				// print_r($data_return);
	 				  echo json_encode($data_return);
	 				}
	 				// return $data_return
	 					
	 					
	 				
	 			
	 		
	 		
	 	}

	 			
	 


CloseCon($conn);

?>
