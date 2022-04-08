<?php 
session_start();
include('dbh.php');
	$conn = OpenCon();
	//echo "connected successfully";
	
if (isset($_POST['register'])) {
	$nid = $_POST['nid'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
	$signupPassword = $_POST['signupPassword'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$curAddress = $_POST['curaddress'];
	//$tempfilename = $nid.".txt";
	//file

	$sql = "select * from policetable where pid = '$loginId' && password = '$loginPassword'";
	 				$result = mysqli_query($conn, $sql);
	 				$num = mysqli_num_rows($result);
	 				if ($num == 1) {
	 					echo "<script>alert('User already exists')</script>";
	 					echo "user exists";
								header('location:login.php');
	 				}
	 				else{
	 					$sql = "INSERT INTO `usertable`(`nid`, `password`, `name`, `email`, `phoneNumber`, `dob`, `age`, `address`, `currentAddress`) VALUES ('$nid','$signupPassword','$name','$email','$phoneNumber','$dob','10','$address','$curAddress')";
	 					$result = mysqli_query($conn, $sql);
	 				
	 					echo "<script>alert('User added successfully!')</script>";
								header('location:login.php');

	 					
	 				}

	 				CloseCon($conn);
	 			}





	
/*
	if (!file_exists('../model/userid/'.$tempfilename)) {
		
	
	$filename = '../model/userid/'.$nid.".txt";
	$fileContent = 'Name: '.$name. ' email: ' . $email . ' Phone Number: '.$phoneNumber. ' Date of Birth: ' . $dob . ' Address: ' . $address;

	

if (file_put_contents($filename, $fileContent) !== false) {
	echo "file created ".basename($filename);
}
else{
	echo "cannot open the file". basename($filename);
}
}
else{
	echo "User already exist";
}
}*/

 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>

	<style type="text/css">
		

.title {
  background: #131B43;
  font-color: white;
  margin-top: 0px;
  padding-top: 14px;
  font-optical-sizing: auto;
  color: white;
  margin-top: -8px;
  margin-left: -8px;
  margin-right: -8px;
  margin: -8px;
  padding-left: ;
  padding-bottom: 27px;
}

/* Element | http://localhost/midProject/view/login1.php */

.title > center:nth-child(6) {
  margin-top: -27px;
}

/* Element | http://localhost/midProject/view/signUp.php */

body > form:nth-child(3) {
  background: mistyrose;
  position: relative;
  text-align: center;
  width: 630px;
  height: 566px;
  border-radius: 10px;
  margin-left: 430px;
  margin-top: -10px;
}

/* Element | http://localhost/midProject/view/signUp.php */

body > h1:nth-child(2) {
  margin-top: 15px;
}



/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(2) {
  padding-top: 16px;
}

/* Inline #1 | http://localhost/midProject/view/signUp.php */

body > form:nth-child(3) {
  /* text-align: center; */
}

/* Element | http://localhost/midProject/view/signUp.php */

.form {
  padding-left: 20px;
  font-size: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(3) > input:nth-child(1) {
  padding-left: 447px;
  padding-top: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(3) {
  padding-top: 10px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > p:nth-child(5) {
  padding-top: 0px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(7) > input:nth-child(1) {
  padding-left: 447px;
  padding-top: 15px;
  border-radius: 5px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(7) {
  padding-top: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(11) {
  padding-top: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(11) > input:nth-child(1) {
  padding-left: 447px;
  padding-top: 15px;
  border-radius: 5px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(15) {
  padding-top: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(15) > input:nth-child(1) {
  padding-left: 447px;
  padding-top: 15px;
  border-radius: 5px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(19) {
  padding-top: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(19) > input:nth-child(1) {
  padding-left: 447px;
  padding-top: 15px;
  border-radius: 5px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(23) {
  padding-top: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(23) > input:nth-child(1) {
  padding-left: 447px;
  padding-top: 15px;
  border-radius: 5px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(27) {
  padding-top: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(27) > input:nth-child(1) {
  padding-left: 447px;
  padding-top: 15px;
  border-radius: 5px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(31) {
  padding-top: 15px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(31) > input:nth-child(1) {
  padding-left: 447px;
  padding-top: 15px;
  border-radius: 5px;
}

/* Element | http://localhost/midProject/view/signUp.php */

body > form:nth-child(3) {
  height: 800px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(34) > input:nth-child(1) {
  background-color: #4CAF50;
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
 /* text-align: center;*/
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
  margin-top: 30px;
  width: 200px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(37) > input:nth-child(1) {
  background-color: #4CAF50;
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
 /* text-align: center;*/
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
  margin-top: 30px;
  width: 200px;
  margin-left: 192px;
}

/* Inline #1 | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(3) > input:nth-child(1) {
  border-radius: 5px;
}

/* Inline #1 | http://localhost/midProject/view/signUp.php */

body > form:nth-child(3) {
  /* text-align: center; */
}

body > form:nth-child(3) {
  /* height: 800px; */
  height: 980px;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(3) > input:nth-child(1) {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(7) > input:nth-child(1) {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(11) > input:nth-child(1) {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(15) > input:nth-child(1) {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(19) > input:nth-child(1) {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(23) > input:nth-child(1) {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(27) > input:nth-child(1) {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Element | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(31) > input:nth-child(1) {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}



/* Inline #1 | http://localhost/midProject/view/signUp.php */

.form > div:nth-child(3) > input:nth-child(1) {
  /* width: 100%; */
  width: 90%;
}

.form > div:nth-child(7) > input:nth-child(1) {
  /* width: 100%; */
  width: 90%;
}

.form > div:nth-child(11) > input:nth-child(1) {
  /* width: 100%; */
  width: 90%;
}

.form > div:nth-child(15) > input:nth-child(1) {
  /* width: 100%; */
  width: 90%;
}

.form > div:nth-child(19) > input:nth-child(1) {
  /* width: 100%; */
  width: 90%;
}

.form > div:nth-child(23) > input:nth-child(1) {
  /* width: 100%; */
  width: 90%;
}

.form > div:nth-child(27) > input:nth-child(1) {
  /* width: 100%; */
  width: 90%;
}

.form > div:nth-child(31) > input:nth-child(1) {
  /* width: 100%; */
  width: 90%;
}

body > form:nth-child(3) {
  /* text-align: center; */
}





/* Element | http://localhost/midProject/view/signUp.php */

body > li:nth-child(4) {
  background-color: #4CAF50;
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
  margin-top: 11px;
  margin-left: 450px;
  border-radius: 5px;
}


	</style>

<script>
function myfunction() {
   let a = document.getElementById("nid").value;
   let b = document.getElementById("name").value;
   let c = document.getElementById("email").value;
   let d = document.getElementById("phoneNumber").value;
   let e = document.getElementById("signupPassword").value;
   let f = document.getElementById("dob").value;
   let g = document.getElementById("address").value;
   let h = document.getElementById("curaddress").value;
   
  

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
   if (f == "" ) {
    alert("5th field must be filled out");
    return false;
  }
  if (g == "" ) {
    alert("6th field must be filled out");
    return false;
  }
  if (h == "" ) {
    alert("7th field must be filled out");
    return false;
  }
  if (i == "" ) {
    alert("4th field must be filled out");
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
	
	<h1><center>Signup Here</center></h1>
	<form action="" method="post">

		<div class="form">
		<p><tr><div>
			<td>NID: </td></div>
			<div> 
			<td><input type="text" name="nid" id="nid" required pattern="[0-9]{5}"></td></div>
		</tr>
	</p>
		<p><tr>
			<div><td>Name: </td></div>
			<div><td><input type="text" name="name" id="name" required></td></div>
		</tr></p>
		<p><tr>
			<div><td><label>Email</label></td></div>
		
		<div><input type="Email" name="email" id="email" placeholder="sophie@example.com" required></div></tr></p>
		<p><tr>
			<div><td>Phone number: </td>
				</div>
				<div><td><input type="text" name="phoneNumber" id="phoneNumber" required pattern="[0-9]{11}"></td></div>
			</tr></p>
		<p><tr><div><td><label>Password: </label></td></div>
			<div>
			<td><input type="text" name="signupPassword" id="signupPassword" required pattern="[0-9]{5,}"></td></div></tr></p>
		<p><tr><div><td><label>Date of Birth: </label></td></div>
			<div>
			<td><input type="Date" name="dob" id="dob" required></td></div></tr></p>
		<p><tr><div><td><label>Address: </label></td></div>
			<div><td><input type="text" name="address" id="address" required></td>
			</div></tr></p>
		<p><tr><div><td><label>Current Address: </label></td></div>
			<div><td><input type="text" name="curaddress" id="curaddress" required></td></div>
		</tr></p>
		<p><tr><div><td><input type="submit" name="register" id="register" onsubmit="myfunction()" value="Signup"></td></div></tr></p>
		<p><tr><div><td><input type="reset" name="reset"></td></div></tr></p>

			</div>





	</form>
	<li><a href="login.php">Back</a></li>



	<?php 
	include 'bottombar.php'; ?>

</body>
</html>