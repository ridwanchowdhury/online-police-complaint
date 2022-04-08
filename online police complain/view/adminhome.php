<?php 




session_start();
include('dbh.php');
	$conn = OpenCon();
	//echo "connected successfully";
	


if (!isset($_SESSION['loginId'])) {
	header('Location:admin.php');
}
else{


    if (isset($_SESSION['loginId'])) {
        $loginid = $_SESSION['loginId'];



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







<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		home
	</title>
	<link rel="stylesheet" type="text/css" href="adminhome.css">
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
    
    <td>phone number</td>
    
  </tr>



     
      <?php 

    
        $sql = "select * from admintable where aid = '$dispId' ";
        $result = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_array($result)){

    ?>
         <tr>
    <td><?php echo $data['aid']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['name']; ?></td>
    
    <td><?php echo $data['phoneNumber']; ?></td>
    
  </tr> 
         <?php 
     }

      ?>
  </table>

<br><br><br>
<div>
<button class="createbtn" >Enter data</button>
<button class="readbtn" >Show all data</button>
<button class="searchbtn" >Search</button>
<button class="deletebtn" >Delete</button>
<button class="updatebtn" >Update</button>
</div>
     

<br><br><br>

<!-- <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
  else
  {
     document.getElementById("mytext").innerHTML = this.status;
  }
  };
  xhttp.open("POST", "/midProject/control/findcourse.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);
}
</script> -->

<br>

<label>Find details by "user ID" </label><br>
  <input type="text" id="uname" >
<!-- <p id="mytext"></p> -->


<table>
  <tr>
    <td><p id='ajax_name_label' hidden >Name: </p></td><td><p id='ajax_name'></p></td>
  </tr>
  <tr>
    <td><p id='ajax_password_label' hidden >Password: </p></td><td><p id='ajax_password'></p></td>
  </tr>
  <tr>
    <td><p id='ajax_email_label' hidden >Email: </p></td><td><p id='ajax_email'></p></td>
  </tr>
  <tr>
    <td><p id='ajax_phoneNumber_label' hidden >Phone Number: </p></td><td><p id='ajax_phoneNumber'></p></td>
  </tr>
  <tr>
    <td><p id='ajax_dob_label' hidden >DOB: </p></td><td><p id='ajax_dob'></p></td>
  </tr>
  <tr>
    <td><p id='ajax_age_label' hidden >Age: </p></td><td><p id='ajax_age'></p></td>
  </tr>
  <tr>
    <td><p id='ajax_address_label' hidden >Address: </p></td><td><p id='ajax_address'></p></td>
  </tr>
  <tr>
    <td><p id='ajax_currentAddress_label' hidden >Current Address: </p></td><td><p id='ajax_currentAddress'></p></td>
  </tr>
  
</table>


</body>
</html>
<?php CloseCon($conn); ?>

<script>
  $("#uname").keyup(function(){

  var search = $(this).val();
  // alert(search);return;
  

  
  
  
  if(search) {
    $.getJSON('get_ajax_data.php', {search: $(this).val()}, function(data){
      
      // var res = data.split("*");
      
      // $('#day').val(res[0]);
            
      
      if(data){
        // alert(data['name']);
        // $('#ajax_name_lable').css('visibility','visible');
        $('#ajax_name_label').show();
        $("#ajax_name").html(data['name']);

        $('#ajax_password_label').show();
        $("#ajax_password").html(data['password']);

        $('#ajax_email_label').show();
        $("#ajax_email").html(data['email']);

        $('#ajax_phoneNumber_label').show();
        $("#ajax_phoneNumber").html(data['phoneNumber']);

        $('#ajax_dob_label').show();
        $("#ajax_dob").html(data['dob']);

        $('#ajax_age_label').show();
        $("#ajax_age").html(data['age']);

        $('#ajax_address_label').show();
        $("#ajax_address").html(data['address']);

        $('#ajax_currentAddress_label').show();
        $("#ajax_currentAddress").html(data['currentAddress']);

      }
      

      
    });
      
  }else{
    $("#uname").empty();
    console.log("error");
  }
});
</script>