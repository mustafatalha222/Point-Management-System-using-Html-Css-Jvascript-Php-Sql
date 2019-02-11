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

 <center><b>BACK</b> <br></b><a href="adminpanel.php">BACK TO ADMIN PANEL</a></center><!--for centered text-->  
<form method="post" action="add_Driver.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;" cellpadding="5">



<tr>
<th>Driver ID</th>
<td><input type="text" name="driver_ID" placeholder="Enter Driver ID" required></td>
</tr>

<tr>
<th>Driver Name</th>
<td><input type="text" name="D_name" placeholder="Enter Name " required></td>
</tr>

<tr>
<th>Driver's DOB</th>
<td><input type="date" name="D_DOB" placeholder="Enter Driver's DOB" min="1980-01-01" max="2010-01-01" required></td>
</tr>
<tr>
<th>Driver Address</th>
<td><input type="text" name="D_address" placeholder="Enter Driver Address" required></td>
</tr>
<th>Driver Contactno</th>
<td><input type="text" name="D_contactno" placeholder="Enter Driver Contactno" pattern="^(?:\(\d{4}\)|\d{4})[- . ]?\d{3}[- . ]?\d{4}$" required></td>
</tr>


<!-- <tr>
<th>Image</th>
<td><input type="file" name="simg"></td>
</tr> -->

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



$driver_ID=$_POST['driver_ID'];

$D_name=$_POST['D_name'];

$D_DOB=$_POST['D_DOB'];

$D_address=$_POST['D_address'];

$D_contactno=$_POST['D_contactno'];

// $imagename=$_FILES['simg']['name'];
// $tempname=$_FILES['simg']['tmp_name'];

// move_uploaded_file($tempname,"../dataimg/$imagename");


$w="INSERT INTO `driver`(`driver_ID`, `D_name`, `D_DOB`, `D_address` , `D_contactno`) VALUES ('$driver_ID','$D_name','$D_DOB','$D_address','$D_contactno')";
$result=mysqli_query($con,$w);

if($result == true)

{
?>
<script>
 alert('Data Inserted Successfully');
</script>
<?php
}

}

?>