<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
   
ul {
    list-style-type: none;
    margin-top: 5px;
    padding: 0;
    overflow: hidden;
    text-align: center;
    background-color: #9B0F22;
}
li {
    float: left;
}
li a {
    display: inline-flex;
    padding: 8px;
        padding-right: 8px;
        padding-left: 8px;
    text-decoration: none;
    color: white;
    padding-left: 1em;
    padding-right: 1em;
    text-align: center;
    font-size: 18.1px;
}
a:hover {
    background: #131B43;
}
header {
    padding-top: 25px;
    padding-bottom: 25px;
    background: #131B43;
}
#div1 {
    color: white;
    text-align: center;
    font-size: 35px;
}
#div2 {
    color: white;
    text-align: center;
    font-size: medium;
}




/* Element | http://localhost/midProject/view/sidebar.php#n */

.heading1 {
  background: #131B43;
  margin-top: 0px;
  height: 130px;
}

/* Element | http://localhost/midProject/view/sidebar.php#n */

.heading1 > h1:nth-child(2) {
  color: white;
  text-align: center;
  font-size: 35px;
  margin-top: 0;
  position: absolute;
  margin-left: 33%;
  padding-top: 22px;
}

/* Element | http://localhost/midProject/view/sidebar.php#n */

.heading1 > center:nth-child(4) {
  color: white;
  text-align: center;
  font-size: medium;
  margin-top: 62px;
}


  </style>
</head>
<body>
	<div class="heading1">
		<p><h1><center>ONLINE POLICE COMPLAINT</center></h1> <br>
			<center><h3>By Bangladesh Police</h3></center></p>

	</div>
	<div>
    <ul>
		<li><a href="home.php">Home</a></li>
	<li style="float: right;"><a href="profile.php">Profile</a></li>
	
	<li><a href="application.php">Application</a></li>
  <li><a href="viewUserApplication.php">View Applications</a></li>
	<li style="float: right;"><a href="logout.php">Logout</a></li>
	<li><a href="http://bdlaws.minlaw.gov.bd/act-367.html">Laws of Bangladesh</a></li>
	</ul>
	</div>
	

</body>
</html>