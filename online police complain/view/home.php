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


/*
session_start();
if (!isset($_SESSION['loginId'])) {
	header('Location:login.php');
}
else{

$loginid = $_SESSION['loginId'];

if ($loginid == '55555') {
	include("sidebar.php");
}
if ($loginid == '11111') {
	include("policenavbar.php");
}


}*/

CloseCon($conn);
 ?>


 
 <?php 
 
//include('sidebar.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h1><center>Home <br><br><br></center></h1>
<h4>Welcome to Online Police Complaint <br>
You can complain instantly here! <br>
No Need to Go to Police Station Physically Anymore..</h4>

<br><br><br>

</body>
</html>
<?php include('bottombar.php'); ?>