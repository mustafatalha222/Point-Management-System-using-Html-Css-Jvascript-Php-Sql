<?php  

$dbcon=mysqli_connect("localhost","admin","");  
mysqli_select_db($dbcon,"pointManagementSystem");  

//include("database/db_conection.php");  
$delete_id=$_GET['del'];  
$delete_query="delete  from users WHERE user_name='$delete_user_name'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>