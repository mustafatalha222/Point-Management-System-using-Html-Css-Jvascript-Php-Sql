\
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
<div >

 <center><b>BACK</b> <br></b><a href="adminpanel.php">BACK TO ADMIN PANEL</a></center><!--for centered text-->  
<form method="post" action="add_route.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;" cellpadding="5">



<tr>
<th>Route NO</th>
<td><input type="text" name="route_no" placeholder="Enter Route NO" required></td>
</tr>

<tr>
<th>Starting Point</th>
<td><input type="text" name="start" placeholder="Enter Starting Point" required></td>
</tr>

<tr>
<th>Destination Point</th>
<td><input type="text" name="destination" placeholder="Enter Destination Point" required></td>
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

$start=$_POST['start'];

$destination=$_POST['destination'];



$w="INSERT INTO `route`(`route_no`, `start`, `destination`) VALUES ('$route_no','$start','$destination')";
$result=mysqli_query($con,$w);

echo "successfully connected";
}


?>

