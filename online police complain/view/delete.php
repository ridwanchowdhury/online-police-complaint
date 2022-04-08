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
    	$sql = "DELETE FROM `usertable` WHERE nid = '$loginid'";
    	$result = mysqli_query($conn, $sql);
    	echo "deleted";
    	header('location:login.php');
        
    }
    else {
        $sql = "DELETE FROM `policetable` WHERE pid = '$loginid'";
    	$result = mysqli_query($conn, $sql);
    	echo "deleted";
    	header('location:login.php');
    }
    
}

    }

}


CloseCon($conn);

 ?>