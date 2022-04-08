


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


 ?>








<?php /*
session_start();
if (!isset($_SESSION['loginId'])) {
	header('Location:login.php');
}
else{


    if (isset($_SESSION['loginId'])) {
        $loginid = $_SESSION['loginId'];

if ($loginid == '55555') {
    include("sidebar.php");
}
if ($loginid == '11111') {
    include("policenavbar.php");
}
    }

}*/
 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Applications</title>

    <style type="text/css">
        
/* Element | http://localhost/midProject/view/viewapplication.php */

.searchbar > input:nth-child(1) {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  float: left;
}

/* Element | http://localhost/midProject/view/viewapplication.php */

.searchbar > button:nth-child(2) {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
  margin-left: 2%;
  float: left;
  margin-top: 4px;
  border-radius: 5px;
}

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<br><br><br>
<h1><center>View Applications</center></h1>
<form action="" method="POST">
<div class="searchbar">
    <input type="text" name="searchbar" placeholder="Search By ID">
    <input type="submit" name="searchit">
    <button name="searchbtn">Search</button>
</div>



<br><br><br>
</form>

 <?php 
 
     
        //$sql = "select * from applicationtable where nid = '$_POST['searchit']' ";
        $sql = "SELECT * FROM `applicationtable`";
        $result = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_array($result)){

    ?>
         <tr>
    <td><?php echo $data['appid']; ?></td>
    <td><?php echo $data['applications']; ?></td>
    <td><?php echo $data['pid']; ?></td>
    <td><?php echo $data['photoID']; ?></td>
    <td><?php echo $data['nid']; ?></td>
  </tr> 
         <?php 
     }

      ?>
  </table>

</body>
</html>
<?php 
CloseCon($conn); ?>
<?php 
include('bottombar.php');

 ?>