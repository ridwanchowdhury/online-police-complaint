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


CloseCon($conn);





 ?>


 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
</head>
<body>


    <p><tr><td>Name: </td>
            <td><input type="text" name="name1" ></td></tr></p>
        <p><tr><td><label>Email</label></td>
        <input type="Email" name="email1" placeholder="sophie@example.com" ></tr></p>
        <p><tr><td>Phone number: </td><td><input type="text" name="phoneNumber1"  pattern="[0-9]{11}"></td></tr></p>
        <p><tr><td><label>Password: </label></td>
            <td><input type="text" name="password1"  pattern="[0-9]{5,}"></td></tr></p>
        <p><tr><td><label>Designation: </label></td>
            <td><input type="text" name="designation" ></td></tr></p>
        <p><tr><td><label>Station Address: </label></td><td><input type="text" name="saddress" ></td></tr></p>
        <p><tr><td><label>Cases: </label></td><td><input type="text" name="cases" ></td></tr></p>
        <p><tr><td><input type="submit" name="register" value="Update"></td></tr></p>
        <p><tr><td><input type="reset" name="reset"></td></tr></p>






    <?php 
    if (isset($_POST['register'])) {
        $name = $_POST['name1'];
        $email = $_POST['email1'];
        $phoneNumber = $_POST['phoneNumber1'];
        $password = $_POST['phoneNumber1'];
        $designation = $_POST['designation'];
        $saddress = $_POST['saddress'];
        $cases = $_POST['cases'];




        
    if (isset($_SESSION['loginId'])) {
        $loginid = $_SESSION['loginId'];

if ($loginid == $_SESSION['loginId']) {
    if ($_SESSION['p'] == 1) {
        
        $sql = "UPDATE `policetable` SET `pid`='$loginId',`password`='$password',`name`='$name',`designation`='$designation',`phoneNumber`='$phoneNumber',`email`='$email',`stationAddress`='$saddress',`cases`='$cases' WHERE `pid` = '$loginId'";
        $result = mysqli_query($conn, $sql);
        header('home.php');
       

        
        
    }
    
    
}

    }

}

     ?>

</body>
</html>
