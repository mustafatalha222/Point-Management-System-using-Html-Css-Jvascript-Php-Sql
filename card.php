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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Point Card</h2>

<div class="card">
  	  <?php  

 $sql = "SELECT file_name FROM users WHERE user_email = '" . $_SESSION['email'] . "'";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_array($result);
$imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>"style="width:100%" style="color:#fff" alt="Avatar" />
  <?php  

 $sql = "SELECT user_name FROM users WHERE user_email = '" . $_SESSION['email'] . "'";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_array($result);
echo "<h1>" . $row['user_name']  . "</h1>";

?>
  <p class="title">Student</p>
  <p>FAST University</p>
  <br>
</div>

</body>
</html>