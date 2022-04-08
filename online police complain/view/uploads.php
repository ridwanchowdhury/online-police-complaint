<?php 
if (isset($_POST['submit'])) {
	$appDate = $_POST['appDate'];
	$appLocation = $_POST['appLocation'];
	$appName = $_POST['appName'];
	$appid = $_POST['appid'];
	$appFathersName = $_POST['appFathersName'];
	$appMothersName = $_POST['appMothersName'];
	$appCurLocation = $_POST['appCurLocation'];
	$appPerLocation = $_POST['appPerLocation'];
	$gd = $_POST['gd'];
	/*---This is for file attachment---*/
	if (isset($_FILES['file1'])) {
		
	}

	/*---This is for file attachment---*/
	
	$tempfilename = $appid.".txt";
	//file
	if (!file_exists('../model/application/'.$tempfilename)) {
		
	
	$filename = '../model/application/'.$appid.".txt";
	$fileContent = 'Date: '.$appDate. ' Thana location: ' . $appLocation . ' Applicants name: '.$appName. ' NID: ' . $appid . ' Fathers name: ' . $appFathersName. ' Mothers name: '.$appMothersName. ' Current location: '.$appCurLocation.' Permanent location: ' .$appPerLocation. '...............................................................................................'.$gd;

	

if (file_put_contents($filename, $fileContent) !== false) {
	echo "file created ".basename($filename). '\n';
}
else{
	echo "cannot open the file". basename($filename);
}
}
else{
	echo "User already exist";
}




/*------------------------------uploadimage---------------------*/


$fileName = $_FILES['file1']['name'];
	$fileType = $_FILES['file1']['type'];
	$fileSize = $_FILES['file1']['size'];
	$file1TmpLoc =  $_FILES['file1']['tmp_name'];
	echo $fileName;
	echo $fileType;
	echo $fileSize;
	echo $file1TmpLoc;
	$targetLoc = "../model/evidence/";

	if (!empty($fileName)) {
		if ($fileType != "image/jpeg" || $fileType != "image/png" || $fileType != "image/jpg") {
			if ($fileSize<=100000000000) {
				move_uploaded_file($file1TmpLoc, $targetLoc.$fileName);
			echo "Uploaded successfully";
			}
			else{
				echo "Maximum file size exceeded";
			}
			
		}
	}
	else{
		echo "Select a file";
	}

	

}



 ?>





















<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Uploaded</title>
</head>
<body>

<li><a href="home.php">Go back</a></li>


</body>
</html>