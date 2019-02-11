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
$CT0 = mysqli_query($conn,"CREATE TABLE Customer( C_name varchar(40), C_ID varchar(10), email_id VARCHAR(30),c_address VARCHAR(50) ,C_DOB VARCHAR(30),Gender VARCHAR(5),bus_id VARCHAR(10),bill_id VARCHAR(30),C_contactno VARCHAR(11) )");
$CT1 = mysqli_query($conn,"CREATE table Bill(bill_status int(30), bill_id VARCHAR(10),total_amount int(30),issue_date varchar(10), submit_date varchar(10))");
$CT2 = mysqli_query($conn,"CREATE table Bus(bus_id VARCHAR(10),route_no int(5),driver_ID varchar(10))");
$CT3 = mysqli_query($conn,"CREATE table Route(route_no int(5), start varchar(30), destination varchar(30))");
$CT4 = mysqli_query($conn,"CREATE table Driver(driver_ID varchar(10),D_name varchar(30), D_DOB varchar(30),D_address VARCHAR(50),D_contactno VARCHAR(11))");
$CT5 = mysqli_query($conn,"CREATE table stops(stop_id int(10),stop_name VARCHAR(30), location VARCHAR(50))");
$CT6 = mysqli_query($conn,"CREATE table Has(stop_id int(10),route_no int(5))");

echo "table created successfully<br/>";


// adding primary and foreign keys
// $alt1 = mysqli_query($conn,"Alter table Book add constraint key1 PRIMARY KEY (bookid,publisherName)");
// $alt2 = mysqli_query($conn,"Alter table Book_copies add constraint key2 PRIMARY KEY (bookid,branchid)");
// $alt3 = mysqli_query($conn,"Alter table Book_loans add constraint key3 PRIMARY KEY (bookid,branchid,cardno)");
// $alt4 = mysqli_query($conn,"Alter table Book_author add constraint key4 PRIMARY KEY (bookid,authorname)");
// $alt5 = mysqli_query($conn,"Alter table Publisher add constraint key5 PRIMARY KEY (name)");
// $alt6 = mysqli_query($conn,"Alter table Libraray_Branch add constraint key6 PRIMARY KEY (branchid)");
// $alt7 = mysqli_query($conn,"Alter table Borrower add constraint key7 PRIMARY KEY (cardno)");
// $alter1 = mysqli_query($conn,"Alter table Book add constraint fkey1 FOREIGN KEY publisherName REFERENCES Publisher(name)");
// $alter2 = mysqli_query($conn,"Alter table Book_loans add constraint fkey2 FOREIGN KEY bookid REFERENCES Book(bookid)");
// $alter3 = mysqli_query($conn,"Alter table Book_copies add constraint fkey3 FOREIGN KEY branchid REFERENCES Libraray_Branch(branchid)");
// $alter4 = mysqli_query($conn,"Alter table Book_author add constraint fkey4 FOREIGN KEY bookid REFERENCES Book(bookid)");
// $alter5 = mysqli_query($conn,"Alter table Book_copies add constraint fkey5 FOREIGN KEY bookid REFERENCES Book(bookid)");
// $alter6 = mysqli_query($conn,"Alter table Book_loans add constraint fkey6 FOREIGN KEY branchid REFERENCES Libraray_Branch(branchid)");
// $alter7 = mysqli_query($conn,"Alter table Book_loans add constraint fkey7 FOREIGN KEY cardno REFERENCES Borrower(cardno)");
    
//echo "table altered successfully<br/>";

	
?>