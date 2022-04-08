<?php 
session_start();
$loginId = $_SESSION['loginId'];
$loginPassword = $_SESSION['loginPassword'];
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
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Profile</title>
    <style type="text/css">
        



/* Element | http://localhost/midProject/view/profile.php */

.crud > a:nth-child(1) {
  background-color: #34eb5e;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding-right: 40px;
}

/* Element | http://localhost/midProject/view/profile.php */

.crud > a:nth-child(3) {
  background-color: red;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top: 38px;
}



/* Inline #1 | http://localhost/midProject/view/profile.php */

.crud > a:nth-child(1) {
  margin-top: 20px;
}


    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>
 <body>
 	<?php 







   // include('sidebar.php');
     ?><br><br><br>
     <h1><center>Profile</center></h1>

 	<?php 

 	$dispId = $_SESSION['loginId'];
 	//echo $dispId ."<br>";


 	 ?>

 	 Your login id is <?php echo $dispId; ?> <br><br>
     <p><h3>Profile information</h3></p>
     <table border="2">
  <tr>
    <td>Id</td>
    <td>password</td>
    <td>name</td>
    <td>email</td>
    <td>phone number</td>
    <td>dob</td>
    <td>address</td>
    <td>Current address</td>
  </tr>



     <?php 

     if ($_SESSION['p'] == 1) {
        $sql = "select * from policetable where pid = '$loginId' ";
        $result = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_array($result)){

    ?>
         <tr>
    <td><?php echo $data['pid']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['designation']; ?></td>
    <td><?php echo $data['phoneNumber']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['stationAddress']; ?></td>
    <td><?php echo $data['cases']; ?></td>
  </tr> 
         <?php 
     }}

      ?>

      <?php 

     if ($_SESSION['p'] == 0) {
        $sql = "select * from usertable where nid = '$loginId' ";
        $result = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_array($result)){

    ?>
         <tr>
    <td><?php echo $data['nid']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['phoneNumber']; ?></td>
    <td><?php echo $data['dob']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['currentAddress']; ?></td>
  </tr> 
         <?php 
     }}

      ?>
  </table>

<div class="crud">
    <a href="editUserProfile.php">Edit profile</a><br>
    <a href="delete.php"> Delete profile</a><br>
    
      </div>


     <?php /*
        $filename = $_SESSION['loginId'];
        $fh = fopen('../model/userid/'.$filename.'.txt','r');
while ($line = fgets($fh)) {
  // <... Do your work with the line ...>
   echo($line);
}
fclose($fh);
*/


      ?>

<br><br><br>
 </body>
 </html>
 <?php include('bottombar.php'); 
CloseCon($conn);
?>