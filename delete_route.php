<?php
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


<form method="post" action="delete_route.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;" cellpadding="5">

 <center><b>BACK</b> <br></b><a href="adminpanel.php">BACK TO ADMIN PANEL</a></center><!--for centered text-->  

<tr>
<th>ROute NO</th>
<td><input type="text" name="route_no" placeholder="Enter ROute NO" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>


</table>
</form>
</div>
</body>
</html>

<?php

$con=mysqli_connect("localhost","admin","","pointManagementSystem");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['submit']))
{   



$route_no=$_POST['route_no'];


$sql = "DELETE FROM route WHERE (route_no='$route_no')";
$run=mysqli_query($con,$sql);

 if(mysqli_num_rows($run)<1)
{
echo "No Record Found";

}



{
?>
<script>
 alert('Data deleted Successfully');
 
</script>

<?php
}

}
     
  
?>