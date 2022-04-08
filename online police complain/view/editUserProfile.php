<?php 

session_start();
include('dbh.php');
	$conn = OpenCon();
	//echo "connected successfully";

	


if (!isset($_SESSION['loginId'])) {
	header('Location:login.php');
}
else{


    if (isset($_SESSION['loginId'])) {
        $loginid = $_SESSION['loginId'];

if ($loginid == $_SESSION['loginId']) {
    if ($_SESSION['p'] == 0) {
    	include("sidebar.php");
    	
        
    }
    else {
    	include("policenavbar.php");
        
    }
    
}

    }

}








 ?>

<?php 
	if (isset($_POST['register'])) {
		
	if (isset($_SESSION['loginId'])) {
        $loginid = $_SESSION['loginId'];

if ($loginid == $_SESSION['loginId']) {
    if ($_SESSION['p'] == 1) {

    	//header('editPoliceProfile.php');
      echo "can not update police profile at this moment";


      /*
    	
    	$sql = "select * from policetable where pid = '$loginId' ";
        $result = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_array($result)){

        	$name = $data['name'];
        	$designation = $data['designation'];
        	$phoneNumber = $data['phoneNumber'];
        	$email = $data['email'];
        	$stationAddress = $data['stationAddress'];
        	$case = $data['cases']
        	

        }*/

    	
        
    }
    else {
    	//incomplete code copy data from the above form and paste it into variable follow editPoliceProfile.php
      $loginId = $_SESSION['loginId'];
      echo $loginId;
    	$name = $_POST['name2'];
        $email = $_POST['email2'];
        $phoneNumber = $_POST['phoneNumber2'];
        $password = $_POST['password2'];
        $designation = $_POST['designation'];
        $dob = $_POST['$dob2'];
        $address = $_POST['address2'];
        $curAddress = $_POST['curaddress2'];

        $sql = "UPDATE `usertable` SET `password`='$password',`name`='$name',`email`='$email',`phoneNumber`='$phoneNumber',`dob`='$dob',`age`='10',`address`='$address',`currentAddress`='$curAddress' WHERE `nid` = '$loginId'";
        $result = mysqli_query($conn, $sql);
        echo "updated!";
        header('home.php');

        
    }
    
}

    }

}

	 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		
/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) {
  background: aquamarine;
  position: relative;
  margin-left: 32%;
  width: 500px;
  margin-top: 14px;
  height: 674px;
  font-size: 20px;
  border-radius: 13px;
  padding-left: 23px;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(1) > input:nth-child(1) {
  margin-right: 18px;
  height: 30px;
  height: 30px;
  width: 95%;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(2) > input:nth-child(2) {
  height: 30px;
  width: 95%;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(3) > input:nth-child(1) {
  height: 30px;
  width: 95%;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(4) > input:nth-child(2) {
  height: 30px;
  width: 95%;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(5) > input:nth-child(2) {
  height: 30px;
  width: 95%;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(6) > input:nth-child(2) {
  height: 30px;
  width: 95%;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(7) > input:nth-child(2) {
  height: 30px;
  width: 95%;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(8) > input:nth-child(1) {
  height: 30px;
  width: 95%;
  background: cyan;
}

/* Element | http://localhost/midProject/view/editUserProfile.php */

body > div:nth-child(8) > p:nth-child(9) > input:nth-child(1) {
  height: 30px;
  width: 95%;
  background: aqua;
}


	</style>
</head>
<body>
<form action="" method="POST">
	<div>
	<p><tr><td>Name: </td>
			<td><input type="text" name="name2" ></td></tr></p>
		<p><tr><td><label>Email</label></td>
		<input type="Email" name="email2" placeholder="sophie@example.com" ></tr></p>
		<p><tr><td>Phone number: </td><td><input type="text" name="phoneNumber2"  pattern="[0-9]{11}"></td></tr></p>
		<p><tr><td><label>Password: </label></td>
			<td><input type="text" name="password2"  pattern="[0-9]{5,}"></td></tr></p>
		<p><tr><td><label>Date of Birth: </label></td>
			<td><input type="Date" name="dob2" ></td></tr></p>
		<p><tr><td><label>Address: </label></td><td><input type="text" name="address2" ></td></tr></p>
		<p><tr><td><label>Current Address: </label></td><td><input type="text" name="curaddress2" ></td></tr></p>
		<p><tr><td><input type="submit" name="register" value="Update"></td></tr></p>
		<p><tr><td><input type="reset" name="reset"></td></tr></p>
</div>
</form>



<?php include('bottombar.php'); ?>

	

</body>
</html>

<?php 

CloseCon($conn);


 ?>