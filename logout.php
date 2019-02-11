<?php  
 
   $dbcon=mysqli_connect("localhost","admin","");  
mysqli_select_db($dbcon,"pointManagementSystem");  
 
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
header("Location: index.php");//use for the redirection to some page  
?>