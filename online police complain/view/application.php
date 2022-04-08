
 <?php 
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

}
 ?>







 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Application</title>

        <style type="text/css">


/* Element | http://localhost/midProject/view/application.php */

body > div:nth-child(6) {
  position: absolute;
  width: 100%;
  margin-top: 40px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) {
  position: absolute;
  margin-top: 100px;
  margin: ;
  margin-left: 50px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(2) > input:nth-child(2) {
  margin-left: 100px;
  position: absolute;
  padding-right: 27px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(5) > label:nth-child(1) > input:nth-child(1) {
  margin-left: 35px;
  position: absolute;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(8) > input:nth-child(2) {
  /* margin-left: 50\[; */
  /* margin-left: 50\[x; */
  position: absolute;
  margin-left: 20px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(11) > label:nth-child(1) > input:nth-child(1) {
  position: absolute;
  margin-left: 40px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(14) > label:nth-child(1) > input:nth-child(1) {
  position: absolute;
  margin-left: 43px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(17) > label:nth-child(1) > input:nth-child(1) {
  position: absolute;
  margin-left: 36px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(20) > input:nth-child(2) {
  position: absolute;
  margin-left: 27px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(23) > input:nth-child(2) {
  position: absolute;
  margin-left: 8px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(32) > button:nth-child(1) {
  /* font-size: 10\[; */
  background: beige;
  margin: auto;
  margin: 0px;
  padding: 10px;
  padding-block: 7px;
  padding-left: 30px;
  padding-right: 30px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(32) > button:nth-child(2) {
  background: beige;
  margin: auto;
  margin: 0px;
  padding: 10px;
  padding-right: 10px;
  padding-left: 10px;
  padding-block: 7px;
  padding-left: 30px;
  padding-right: 30px;
}


/* Inline #3 | http://localhost/midProject/view/application.php */

body > form:nth-child(7) {
  margin-left: 535px;
  margin-top: 150px;
}


/* Element | http://localhost/midProject/view/application.php */

body > div:nth-child(7) {
  height: 1px;
  background: black;
  width: 27%;
  position: absolute;
  margin-top: 103px;
  margin-left: 549px;
}

/* Inline #3 | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(2) > input:nth-child(2) {
  width: 180px;
}

body > form:nth-child(7) > div:nth-child(5) > label:nth-child(1) > input:nth-child(1) {
  width: 205px;
}

body > form:nth-child(7) > div:nth-child(8) > input:nth-child(2) {
  width: 205px;
}

body > form:nth-child(7) > div:nth-child(11) > label:nth-child(1) > input:nth-child(1) {
  width: 205px;
}

body > form:nth-child(7) > div:nth-child(14) > label:nth-child(1) > input:nth-child(1) {
  width: 205px;
}

body > form:nth-child(7) > div:nth-child(17) > label:nth-child(1) > input:nth-child(1) {
  width: 205px;
}

body > form:nth-child(7) > div:nth-child(20) > input:nth-child(2) {
  width: 205px;
}

body > form:nth-child(7) > div:nth-child(23) > input:nth-child(2) {
  width: 205px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) {
  background: aliceblue;
}


/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) {
  margin-left: 381px;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) > div:nth-child(32) {
  /* margin\=top: 1; */
  /* margin\=top: 10; */
  /* margin\=top: 10p; */
  /* margin\=top: 10px; */
  /* margin\=top: 11px; */
  /* margin\=top: 12px; */
  /* margin\=top: 13px; */
  /* margin\=top: 14px; */
  /* margin\=top: 15px; */
  /* margin\=top: 16px; */
  /* margin\=top: 17px; */
  /* margin\=top: 18px; */
  /* margin\=top: 19px; */
  /* margin\=top: 20px; */
  /* margin\=top: 21px; */
  /* margin\=top: 22px; */
  /* margin\=top: 23px; */
  /* margin\=top: 24px; */
  margin-left: 278px;
  margin=top: 24px;
  margin-top: 31px;
}

/* Element | http://localhost/midProject/view/application.php */

body {
  background: aliceblue;
}

/* Element | http://localhost/midProject/view/application.php */

body > form:nth-child(7) {
  height: 70%;
}

/* Element | http://localhost/midProject/view/application.php */

body > li:nth-child(14) {
  margin-top: 780px;
}


/* Element | http://localhost/midProject/view/application.php */

.about-section {
  position: absolute;
  top: 886px;
}

/* Inline #2 | http://localhost/midProject/view/application.php */

.about-section {
  /* top: 886px; */
  top: 632px;
}

            
        </style>
    </head>
    <body>
    	 
        <div>
    	<h1><center>Application Form</center></h1>
        </div>


        


        <form action="uploads.php" method="post" enctype="multipart/form-data"> 
            <p><div>
                <lebel for="Date">Date: </lebel>
                <input type="Date" name="appDate" required >
            </div></p>
            <p><div><label>Thana location: </lebel>
                <input type="text" name="appLocation" required></div></p>
                <p><div>
                 <label>Applicant's name: </label>
                 <input type="text" name="appName" required >
            </div></p>
                
            <p>
            <div>
                <label>National id no: </lebel>
                <input type="text" name="appid" required pattern="[0-9]{5}">
            </div>	
            </p>
            <p><div>
                <label>Father's name: </lebel>
                <input type="text" name="appFathersName" required>
            </div></p>
            <p><div>
                <label>Mother's name: </lebel>
                <input type="text" name="appMothersName" required>
            </div></p>
            <p><div>
                <label>Current location:</label>
                <input type="text" name="appCurLocation" required>
            </div></p>
            <p><div>
                <lebel>Permanent location: </lebel>
                <input type="text" name="appPerLocation" required>
            </div></p>
            <p><div>
                <p>Write your complain here: </p>
                <textarea id="gd" name="gd" rows="10" cols="100" required></textarea>
            </div></p>
            <p><div>
                <p>Attach evidence </p>
                <input type="file" name="file1[]" value="" multiple = "">
            </div></p>
            <p><div>
            <button type="reset">Reset</button>
              <button type="submit" name="submit">Submit</button>
            </div></p>
            
        </form>

            

        <li><a href="home.php">Back</a></li><br><br><br>
        <?php 
        	include('bottombar.php');
         ?>
    </body>
</html>

