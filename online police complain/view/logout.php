<?php 

session_start();
if (!isset($_SESSION['loginId'])) {
    header('Location:login.php');
}



session_destroy();

 ?>
<?php include('home.php');
echo"<hr>";
echo "<h1> Logged out </h1";
header('location:login.php');
?>