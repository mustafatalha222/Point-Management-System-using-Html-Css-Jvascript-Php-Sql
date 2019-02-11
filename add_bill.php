
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

<body class="xyz_firecuda" >
<div>

 <center><b>BACK</b> <br></b><a href="adminpanel.php">BACK TO ADMIN PANEL</a></center><!--for centered text-->  
<form method="post" action="add_bill.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;" cellpadding="5">



<tr>
<th>Bill ID</th>
<td><input type="text" name="bill_id" placeholder="Enter Bill ID" required></td>
</tr>

<tr>
<th>bill_status</th>
<td><input type="text" name="bill_status" placeholder="Enter Bill status" required></td>
</tr>

<tr>
<th>total_amount</th>
<td><input type="text" name="total_amount" placeholder="Enter total amount" required></td>
</tr>

<tr>
<th>issue_date	</th>
<td><input type="date" name="issue_date" placeholder="Enter issue date" min="1980-01-01" max="2019-01-01" required></td>
</tr>

<tr>
<th>submit_date</th>
<td><input type="date" name="submit_date" placeholder="Enter submit date" min="1980-01-01" max="2019-01-01" required></td>
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



$bill_id=$_POST['bill_id'];

$bill_status=$_POST['bill_status'];

$total_amount=$_POST['total_amount'];


$issue_date=$_POST['issue_date'];

$submit_date=$_POST['submit_date'];



$w="INSERT INTO `bill`(`bill_id`, `bill_status`, `total_amount`, `issue_date`, `submit_date`) VALUES ('$bill_id','$bill_status','$total_amount','$issue_date','$submit_date')";
$result=mysqli_query($con,$w);
echo "successfully connected";
}


?>

