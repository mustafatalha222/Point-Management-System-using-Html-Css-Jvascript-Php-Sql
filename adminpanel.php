<?php
session_start();
 
 
?>
<html>
<head>
 

<style>

.xyz_firecuda
{
background:url('img/green-b.jpg') no-repeat ;
background-size:100% 100%;

}

</style>


</head>
  
  
  
 <body class="xyz_firecuda">
<div>


<div class="admintitle" align="center">
<h1 >Welcome to Admin Dashboard</h1>
<h4   style="float:right; margin:20px 20px 0px 0px; color:#fff; font-size:20px;"><a href="admin_logout.php">Logout</a></h4>
</div>


<table border="1" align="center" style="margin-top:50px;" cellpadding="10">
<tr >
<td>1.<a href="add_Driver.php">ADD DRIVER</a></td>
</tr>

<tr>
<td>2.<a href="delete_driver.php">DELETE DRIVER</a></td>
</tr>

<tr>
<td>3.<a href="add_route.php">ADD ROUTE </a></td>
</tr>


<tr>
<td>4.<a href="delete_route.php">DELETE ROUTE </a></td>
</tr>
<tr>
<td>5.<a href="view_users.php">View All User</a></td>
</tr>

<tr>
<td>6.<a href="add_stop.php">ADD STOP </a></td>
</tr>

<tr>
<td>7.<a href="delete_stop.php">DELETE STOP </a></td>
</tr>

<tr>
<td>8.<a href="add_bill.php">ADD Bill </a></td>
</tr>

<td>9.<a href="view_drivers.php">View All Drivers</a></td>
</tr>
</table>





</div>
</body>
</html>