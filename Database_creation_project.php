<?php
$servername = "localhost";
$username = "admin";
$password = "";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed <br/>" . $conn->connect_error);
} 
else 

echo "connect successfully <br/>"; 
	

$sql = "CREATE DATABASE pointManagementSystem";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br/>";
} else {
    echo "database is not created... <br/>" . $conn->error;
}

$conn->close();
?>