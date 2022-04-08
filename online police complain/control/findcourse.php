<?php

include('../view/dbh.php');



$user = $_POST['uname'];



if($user=="")

{

    echo "Please give input to find Course !";

}

if($user != "")

{




$connection = new dbh();

$conobj=$connection->OpenCon();



$MyQuery=$connection->GetUserByUname($conobj,"admintable",$user );



if($MyQuery->num_rows > 0){

    while($row=$MyQuery->fetch_assoc())

    {

        echo "Data found.. <br><br>";

    echo "<table border='1'> <tr><th>id</th><th>cname</th> <th>cid</th></tr>";

    echo "<tr>";

    echo "<td>" . $row['id'] . "</td>";

    echo "<td>" . $row['cname'] . "</td>";

    echo "<td>" . $row['cid'] . "</td>";

    echo "</tr>";

    }

    echo "</table>";

    }

 else {

    echo "<br>No results found !";

  }

}