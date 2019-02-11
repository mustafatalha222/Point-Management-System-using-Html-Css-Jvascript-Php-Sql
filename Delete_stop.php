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



<form method="post" action="Delete_stop.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;" cellpadding="5">

 <center><b>BACK</b> <br></b><a href="adminpanel.php">BACK TO ADMIN PANEL</a></center><!--for centered text-->  

<tr>
<th>stop_ID</th>
<td><input type="text" name="stop_id" placeholder="Enter stop ID" required></td>
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

//$D_name=$_POST['D_name'];




//$sql="SELECT * FROM driver WHERE (driver_ID='$driver_ID') AND (D_name='$D_name') ";
// $run=mysqli_query($con,$sql);

$sql = "DELETE FROM stops  WHERE (stop_id='$stop_id')";
$run=mysqli_query($con,$sql);




{
?>
<script>
 alert('Data deleted Successfully');
 
</script>

<?php
}

}
     
  
?>