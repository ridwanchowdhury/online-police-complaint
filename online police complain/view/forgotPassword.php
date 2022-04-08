<?php 
/*session_start();
if (!isset($_SESSION['loginId'])) {
	header('Location:login.php');
}
if (isset($_POST['submitPassword'])) {
	$password1 = $_POST['password1'];
	$confirmPassword = $_POST['confirmPassword'];
	if ($password1 == $confirmPassword) {
		$_SESSION['loginPassword'] = $password1;
	}
}
*/
include('dbh.php');
$conn = OpenCon();
if (isset($_POST['submitPassword'])) {
    $forgotnid = $_POST['forgotnid'];
    $forgotdob = $_POST['forgotdob'];
    $password1 = $_POST['password1'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password1==$confirmPassword) {
        
         $sql = "UPDATE usertable SET password = '$password1', [WHERE nid = '$forgotnid']";
         $result = mysqli_query($conn, $sql);
         echo "password updated";



    }
else{
    echo "password must be same";
}
   

}
CloseCon($conn);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Change password</title>
   <link rel="stylesheet" type="text/css" href="st.css">
   <style type="text/css">
      header {
  /* background: linear-gradient(120deg,#101056 30%,#28a4c9,#0b1284,#28a4c9,#ffffff); */
  background: background: #131B43;
  background: #131B43;
}

   </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
function myfunction() {
   let a = document.getElementById("forgotnid").value;
   let b = document.getElementById("forgotdob").value;
   let c = document.getElementById("password1").value;
   let d = document.getElementById("confirmPassword").value;
  

  if (a == "" ) {
    alert("1st field must be filled out");
    return false;
  }
  if (b == "" ) {
    alert("2nd field must be filled out");
    return false;
  }
  if (c == "" ) {
    alert("3rd field must be filled out");
    return false;
  }
  if (d == "" ) {
    alert("4th field must be filled out");
    return false;
  }
   
 
}
</script>



 </head>
 <body>

 	<?php 
//include('sidebar.php');
?>
 <form method="POST" action="">
    <header>
<div id="div1">Online Police Complaint</div>
<div id="div2">By Bangladesh Police</div>
</header>



   <center><h1>Change password</h1></center>
<div class="column">


    <p>Enter NID number: <input type="text" id="forgotnid" name="forgotnid" ></p>
 	
    <p>Enter Birthday: <input type="date" id="forgotdob" name="forgotdob" ></p>
    <p>Enter Password: <input type="text" id="password1" name="password1"  ><br></p>
 	<p>Confirm Password: <input type="text" id="confirmPassword" name="confirmPassword"  ><br></p>
 	<input type="submit" onclick="myfunction()" name="submitPassword" value="Submit">
   <button class="button button3"><a href="login.php">Back</button>
 	</form>
      </div>

 
 
    
 </body>
 </html>
 <?php 
include('bottombar.php');
  ?>