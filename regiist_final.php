
 <?php  
  $dbcon=mysqli_connect("localhost","admin","");  
mysqli_select_db($dbcon,"pointManagementsystem");  


// include("database/db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same 
		//$age=$_POST['age'];
		//$C_ID=$_POST['C_ID'];
		$C_address=$_POST['address'];
		$C_DOB=$_POST['C_DOB'];
		$Gender=$_POST['Gender'];
		$route=$_POST['route'];
		$pickup=$_POST['pickup'];
		$C_contactno=$_POST['Mobile_NO'];
			
		
	//$c_ID=$_POST['c_ID'];
	//here getting result from the post array after submitting the form.  
   // $c_DOB=$_POST['c_DOB'];//same  
    //$Gender=$_POST['Gender'];//same 
	//for bus
	//$bus_id=$_POST['bus_id'];//same 
//for bill	
    //$bill_id=$_POST['bill_id'];//same 
  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
echo "<script>window.open('index.php','_self')</script>";
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
	echo "<script>window.open('index.php','_self')</script>"; 
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
   echo "<script>window.open('index.php','_self')</script>";
    }  
	 // if($age=='')  
    // {  
        // echo"<script>alert('Please enter the age')</script>";  
    // exit();  
    // }
	 // if($C_ID=='')  
    // {  
        // echo"<script>alert('Please enter the ID')</script>";  
    // exit();  
    // }
	 // if($c_address=='')  
    // {  
        // echo"<script>alert('Please enter the address')</script>";  
    // exit();  
    // }
	 if($C_DOB=='')  
    {  
        echo"<script>alert('Please enter the C_DOB')</script>";  
    echo "<script>window.open('index.php','_self')</script>";  
    }
	 // if($bus_id=='')  
    // {  
        // echo"<script>alert('Please enter the bus Id')</script>";  
    // exit();  
    // }
	
	// if($bill_id=='')  
    // {  
        // echo"<script>alert('Please enter the bill Id')</script>";  
    // exit();  
    // }  
	if($Gender=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the Gender')</script>";  
echo "<script>window.open('index.php','_self')</script>";
    }  
	
	if($C_contactno=='')  
    {  
        echo"<script>alert('Please enter the ontactno')</script>";  
echo "<script>window.open('index.php','_self')</script>"; 
    }  
	
	

	
	
	
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
			
	
		//here query check weather if user already registered so can't register again.  
			$check_email_query="select * from users WHERE user_email='$user_email'";  
			$run_query=mysqli_query($dbcon,$check_email_query);  
		  
			if(mysqli_num_rows($run_query)>0)  
			{  
		echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
		echo "<script>window.open('index.php','_self')</script>"; 
			}  
		//insert the user into the database.  
			$insert_user="insert into users (user_name,user_pass,user_email, C_address, C_DOB, Gender, C_contactno,file_name,route,pickup) VALUES ('$user_name','$user_pass','$user_email','$C_address','$C_DOB','$Gender','$C_contactno','$fileName','$route','$pickup')";	
			
			session_start();
			$_SESSION['email'] =$user_email;
			

			
			if(mysqli_query($dbcon,$insert_user))  
			{  
					echo "<script>alert('User has been registered!')</script>";
				
					 header('Location: http://localhost:8080/project_se_final/finalmail.php');
					 	
				echo"<script>window.open('index.php','_self')</script>";  
			}
			 
		}	  
	}
	}
?>
