<?php

$server = 'localhost';
$username= 'k152482';
$password= 'waqar123';
$dbname = 'pointManagementSystem';
$conn = mysqli_connect($server, $username, $password,$dbname);
if($conn->connect_error)
die("error in connection");
else
	echo "connected successfully<br/>";


$sql = "INSERT INTO Route VALUES (1, 'laal-flat', 'FAST');";
$sql.= "INSERT INTO Route VALUES (2, 'johar', 'FAST');";
$sql.= "INSERT INTO Route VALUES (3, 'paradiseBakery', 'FAST');";
$sql.= "INSERT INTO Stops VALUES (101, 'gulshan', 'Null');";
$sql.= "INSERT INTO Stops VALUES (102, 'Cgulshan', 'Null');";
$sql.= "INSERT INTO Stops VALUES (103, 'Bgulshan', 'Null');";
$sql.= "INSERT INTO Stops VALUES (104, 'Agulshan', 'Null');";

$sql.= "INSERT INTO has VALUES (101, 1);";

$sql.= "INSERT INTO has VALUES (102, 2);";
$sql.= "INSERT INTO has VALUES (103, 3);";
$sql.= "INSERT INTO has VALUES (104, 1);";



if ($conn->multi_query($sql) === TRUE) {
	echo "ALL Rows are inserted successfully!! ";
}

//echo "table altered successfully<br/>";

	
?>