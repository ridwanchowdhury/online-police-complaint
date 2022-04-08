

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


        include("sidebar.php");
    
    
    
}

    }



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1><center> View your applications</center></h1>



	<p><h3>Profile information</h3></p>
     <table border="2">
  <tr>
    <td> application Id</td>
    <td>Applications</td>
    <td>pid</td>
    <td>photo ID</td>
    <td>nid</td>
  </tr>



     <?php 

     
        $sql = "SELECT * FROM `applicationtable` WHERE nid='$loginId' ";
        $result = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_array($result)){

    ?>
         <tr>
    <td><?php echo $data['appid']; ?></td>
    <td><?php echo $data['applications']; ?></td>
    <td><?php 
    echo $data['pid']; ?></td>
    <td><?php echo $data['photoID']; ?></td>
    <td><?php echo $data['nid']; ?></td>
    
  </tr> 
         <?php 
     }

      ?>

      <?php 

     

      ?>
  </table>

</body>
</html>
<?php include('bottombar.php');  
CloseCon($conn);
?>