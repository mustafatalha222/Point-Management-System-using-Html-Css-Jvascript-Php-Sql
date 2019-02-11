<?php  
$dbcon=mysqli_connect("localhost","admin","");  
mysqli_select_db($dbcon,"pointManagementSystem");  

session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
  
<body>  
<h1>Welcome</h1><br>  
<?php  
echo $_SESSION['email']; 

 $sql = "SELECT user_name, user_pass,user_email FROM users WHERE user_email = '" . $_SESSION['email'] . "'";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_array($result);
echo "<br>USER details:<br>NAME:-" . $row['user_name']  ." <br>UserPAssword:-" . $row['user_pass'] . ".";

?>  
  
  
<h1><a href="logout.php">Logout here</a> </h1>  
  
  
</body>  
  
</html>