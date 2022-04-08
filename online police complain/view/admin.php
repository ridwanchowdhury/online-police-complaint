
<?php
	session_start();
	include('dbh.php');
	$conn = OpenCon();
	//echo "connected successfully";
	
	

		if (isset($_POST['loginButton'])) {
	 		$loginId= $_POST['loginId'];
	 		$loginPassword= $_POST['loginPassword'];

	 		


	 				$sql = "select * from admintable where aid = '$loginId' && password = '$loginPassword'";
	 				$result = mysqli_query($conn, $sql);
	 				$num = mysqli_num_rows($result);
	 				if ($num == 1) {
	 					
	 					$_SESSION['loginId'] = $loginId;
						$_SESSION['loginPassword'] = $loginPassword;

								header('location:adminhome.php');
	 				}
	 				else{
	 					echo "<script>alert('Wrong ID or password')</script>";
	 					header('location:admin.php');
	 				}
	 				
	 			
	 		
	 		
	 	}

	 			
	 


CloseCon($conn);

?>






<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login Page</title>

  <link rel="stylesheet" type="text/css" href="login1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>





  <div class="title">
    <p>
    <h1>
      <center>ONLINE POLICE COMPLAINT</center>
    </h1> <br> </p>
    <p>
      <center>
        <h3>By Bangladesh Police</h3>
      </center>
    </p>

  </div>





  <form method="post">
      <div class="loginform">
        <p>Login Form</p>
      </div>
      <div class="idfield"><p>
      <input type="text" name="loginId" placeholder="ID" required >
     </p></div>
     
    <div class="passfield"><p>
      <input type="Password" name="loginPassword" placeholder="Password" required pattern="{5,}">
        </p> </div>

      
    
    
    <div class="submitbtn">
    <p><input type="submit" name="loginButton" value="Login"></p></div>
    <div class="frgtpswd">
    <p><a href="forgotPassword.php">forgot password?</a></p></div>
    <div class="sgnup">

    





  </form>
<div>
  
 




</div>


</body>

</html>
<?php //include('bottombar.php'); ?>