
<?php  
  $dbcon=mysqli_connect("localhost","admin","");  
mysqli_select_db($dbcon,"pointManagementsystem");  
// include("database/db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same 
 //for customer
 
 
 //$c_ID=$_POST['c_ID'];
 $c_address=$_POST['c_address'];//here getting result from the post array after submitting the form.  
   // $c_DOB=$_POST['c_DOB'];//same  
    $Gender=$_POST['Gender'];//same 
	//for bus
	//$bus_id=$_POST['bus_id'];//same 
//for bill	
    //$bill_id=$_POST['bill_id'];//same 
	
  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $sql="insert into users (user_name,user_pass,user_email) VALUES ('$user_name','$user_pass','$user_email')";  
    //$sql.="insert into customer (c_ID,c_address,c_DOB,Gender) VALUES ('$c_ID','$c_address','$c_DOB','$Gender');";  
    
	if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('index.php','_self')</script>";  
    }
  
  

}  
  
?>