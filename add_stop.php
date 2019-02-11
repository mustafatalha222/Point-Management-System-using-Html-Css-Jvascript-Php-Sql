
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
<form method="post" action="add_stop.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;" cellpadding="5">



<tr>
<th>STOP ID</th>
<td><input type="text" name="stop_id" placeholder="Enter STOP ID" required></td>
</tr>

<tr>
<th>stop_name</th>
<td><input type="text" name="stop_name" placeholder="Enter Stop name" required></td>
</tr>

<tr>
<th>location</th>
<td><input type="text" name="location" placeholder="Enter location" required></td>
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



$stop_id=$_POST['stop_id'];

$stop_name=$_POST['stop_name'];

$location=$_POST['location'];



$w="INSERT INTO `stops`(`stop_id`, `stop_name`, `location`) VALUES ('$stop_id','$stop_name','$location')";
$result=mysqli_query($con,$w);

echo "successfully connected";
}


?>

