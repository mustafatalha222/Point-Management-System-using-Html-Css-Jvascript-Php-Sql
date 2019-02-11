<?php

$server = 'localhost';
$username= 'admin';
$password= '';
$dbname = 'pointManagementSystem';
$conn = mysqli_connect($server, $username, $password,$dbname);
if($conn->connect_error)
die("error in connection");
else
	echo "connected successfully<br/>";



//creation of simple values
//$CT0 = mysqli_query($conn,"CREATE TABLE Customer( user_name varchar(40), )");
$CT1 = mysqli_query($conn,"CREATE table Bill(bill_status int(30), bill_id VARCHAR(10),total_amount int(30),issue_date varchar(10), submit_date varchar(10))");
$CT2 = mysqli_query($conn,"CREATE table Bus(bus_id VARCHAR(10),route_no int(5),driver_ID varchar(10))");
$CT3 = mysqli_query($conn,"CREATE table Route(route_no int(5), start varchar(30), destination varchar(30))");
$CT4 = mysqli_query($conn,"CREATE table Driver(driver_ID varchar(10),D_name varchar(30), D_DOB varchar(30),D_address VARCHAR(50),D_contactno VARCHAR(11))");
$CT5 = mysqli_query($conn,"CREATE table Stops(stop_id int(10),stop_name VARCHAR(30), location VARCHAR(50))");
$CT6 = mysqli_query($conn,"CREATE table Has(stop_id int(10),route_no int(5))");
$CT7 = mysqli_query($conn,"CREATE table users(user_name varchar(30),user_pass varchar(30),user_email varchar(30),c_address VARCHAR(50) ,C_DOB VARCHAR(30),Gender VARCHAR(5),bus_id VARCHAR(10),
bill_id VARCHAR(30),C_contactno VARCHAR(11))");

echo "table created successfully<br/>";


// adding primary and foreign keys
//$alt1 = mysqli_query($conn,"Alter table Customer add constraint key1 PRIMARY KEY (user_name, bill_id, bus_id)");
$alt2 = mysqli_query($conn,"Alter table Bill add constraint key2 PRIMARY KEY (bill_id)");
$alt3 = mysqli_query($conn,"Alter table Bus add constraint key3 PRIMARY KEY (bus_id, route_no, driver_ID)");
$alt4 = mysqli_query($conn,"Alter table Route add constraint key4 PRIMARY KEY (route_no)");
$alt5 = mysqli_query($conn,"Alter table Driver add constraint key5 PRIMARY KEY (driver_ID)");
$alt6 = mysqli_query($conn,"Alter table Stops add constraint key6 PRIMARY KEY (stop_id)");
$alt7 = mysqli_query($conn,"Alter table has add constraint key7 PRIMARY KEY (stop_id, route_no)");
$alt8 = mysqli_query($conn,"Alter table users add constraint key8 PRIMARY KEY (user_name, user_email)");



$alter1 = mysqli_query($conn,"Alter table users add constraint fkey1 FOREIGN KEY(bus_id) REFERENCES Bus(bus_id)");
$alter2 = mysqli_query($conn,"Alter table users add constraint fkey2 FOREIGN KEY(bill_id) REFERENCES Bill(bill_id)");
$alter3 = mysqli_query($conn,"Alter table Bus add constraint fkey3 FOREIGN KEY(route_no) REFERENCES Route(route_no)");
$alter4 = mysqli_query($conn,"Alter table Bus add constraint fkey4 FOREIGN KEY(driver_ID) REFERENCES Driver(driver_ID)");
$alter5 = mysqli_query($conn,"Alter table Has add constraint fkey5 FOREIGN KEY(stop_id) REFERENCES Stops(stop_id)");
$alter6 = mysqli_query($conn,"Alter table Has add constraint fkey6 FOREIGN KEY(route_no) REFERENCES Route(route_no)");
//$alter7 = mysqli_query($conn,"Alter table Customer add constraint fkey7 FOREIGN KEY(user_name) REFERENCES users(user_name)");

echo "table altered successfully<br/>";

	
?>