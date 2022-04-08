
<?php
	session_start();
	include('dbh.php');
	$conn = OpenCon();
	//echo "connected successfully";
	
	

		if (isset($_POST['loginButton'])) {
	 		$loginId= $_POST['loginId'];
	 		$loginPassword= $_POST['loginPassword'];

	 		if (isset($_POST['checkbox'])) {
	 			$_SESSION['p'] = 1;


	 				$sql = "select * from policetable where pid = '$loginId' && password = '$loginPassword'";
	 				$result = mysqli_query($conn, $sql);
	 				$num = mysqli_num_rows($result);
	 				if ($num == 1) {
	 					
	 					$_SESSION['loginId'] = $loginId;
						$_SESSION['loginPassword'] = $loginPassword;

								header('location:home.php');
	 				}
	 				else{
	 					echo "<script>alert('Wrong ID or password')</script>";
	 					header('location:login.php');
	 				}
	 				
	 			
	 		}
	 		else{
	 			$sql = "select * from usertable where nid = '$loginId' && password = '$loginPassword'";
	 				$result = mysqli_query($conn, $sql);
	 				$num = mysqli_num_rows($result);
	 				if ($num == 1) {
	 					//$_SESSION['p'] = 0;
	 					$_SESSION['loginId'] = $loginId;
						$_SESSION['loginPassword'] = $loginPassword;
								header('location:home.php');

	 				}
	 				else{
	 					echo "<script>alert('Wrong ID or password')</script>";
	 					header('location:login.php');
	 				}

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
<script>
function validateForm() {
  let x = document.forms["myForm"]["loginId"].value;
  let y = document.forms["myForm"]["loginPassword"].value;
  if (x == "" ) {
    alert("ID must be filled out");
    return false;
  }
   if (x >= "6") {
    alert("Use maximum 5 numbers for now");
    return false;
  }
  if (y == "" ) {
    alert("Password must be filled out");
    return false;
  }
 
}
</script>


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





  <form method="post" name="myForm" onsubmit="return validateForm()">
      <div class="loginform">
        <p>Login Form</p>
      </div>
      <div class="idfield"><p>
      <input type="text" name="loginId" placeholder="ID">
     </p></div>
     
    <div class="passfield"><p>
      <input type="Password" name="loginPassword" placeholder="Password" >
        </p> </div>

       <div class="checkbox"> 
    <p><input type="checkbox" name="checkbox" value="police"></p></div>
    <div class="police"><p>
      Police
    </p></div>

    
    <div class="submitbtn">
    <p><input type="submit" name="loginButton" value="Login"></p></div>
    <div class="frgtpswd">
    <p><a href="forgotPassword.php">forgot password?</a></p></div>
    <div class="sgnup">

    <p><a href="signUp.php">Sign up!</a></p></div>





  </form>
<div>
  
  <footer>


<div class="about-section">
  <br>
   
<button class=" button2"><a href="aboutus.php">About Us</a></button>
<button class=" button2"><a href="contacts.php">Contact Us</a></button>
</div>

</footer>




</div>









</body>

</html>
<?php //include('bottombar.php'); ?>