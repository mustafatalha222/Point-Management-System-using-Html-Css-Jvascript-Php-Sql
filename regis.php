<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Registration</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="regis.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="C_name" type="text" autofocus>  
                            </div>  
							   <div class="form-group">  
                                <input class="form-control" placeholder="C_ID" name="C_ID" type="text" >  
                            </div>  
     <div class="form-group">  
                                <input class="form-control" placeholder="C_DOB" name="C_DOB" type="text">  
                            </div>  
     <div class="form-group">  
                                <input class="form-control" placeholder="c_address" name="c_address" type="text" >  
                            </div>  
     <div class="form-group">  
                                <input class="form-control" placeholder="Gender" name="Gender" type="text">  
                            </div>  
							   <div class="form-group">  
                                <input class="form-control" placeholder="bus_id" name="bus_id" type="text">  
                            </div>  
     <div class="form-group">  
                                <input class="form-control" placeholder="bill_id" name="bill_id" type="text">  
                            </div>  
     <div class="form-group">  
                                <input class="form-control" placeholder="C_contactno" name="C_contactno" type="text">  
                            </div>  
  
  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email_id" type="email" >  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  

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

// $conn=mysqli_connect("localhost","k152482","waqar123");  
// mysqli_select_db($conn,"pointManagementSystem");  

// echo "oh yeah";
// include("project_db_final/db_conection2.php");//make connection here 

if(isset($_POST['register']))  
{  
    $C_name=$_POST['C_name'];//here getting result from the post array after submitting the form.  
    $pass=$_POST['pass'];//same  
    $C_ID=$_POST['C_ID'];//same  
	$email_id=$_POST['email_id'];
	$c_address=$_POST['c_address'];
	$bus_id=$_POST['bus_id'];
	$bill_id=$_POST['bill_id'];
	$C_contactno=$_POST['C_contactno'];
	$C_DOB=$_POST['C_DOB'];
	$Gender=$_POST['Gender'];
  
  
    if($C_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($email_id=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from customer WHERE email_id='$email_id'";  
    $run_query=mysqli_query($conn,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email_id is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into customer (C_name,C_ID,email_id,c_address,C_DOB,Gender,bus_id,bill_id,C_contactno,pass) VALUE('$C_name','$email_id','$c_address','$C_DOB','$Gender','$bus_id','$bill_id','$C_contactno','$pass')";  
    if(mysqli_query($conn,$insert_user))  
    {  
	echo "stored";
      echo"<script>window.open('welcome.php','_self')</script>";  
    }  
}  
  
?>