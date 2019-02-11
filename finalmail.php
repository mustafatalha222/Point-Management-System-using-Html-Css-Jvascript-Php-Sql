<?php  
$dbcon=mysqli_connect("localhost","admin","");  
mysqli_select_db($dbcon,"pointManagementSystem");  

session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: regiist_final.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?> 



<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pointManagementSystem";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error);
} 
$res  = mysqli_query($conn,"SELECT user_name,user_pass,user_email,c_address,c_DOB,Gender,bus_id,bill_id,C_contactno,route,pickup from users  WHERE user_email = '" . $_SESSION['email'] . "'") or die(mysqli_error($conn));
if($res && mysqli_num_rows($res)>0)
{
    $data = mysqli_fetch_assoc($res);
	$name = $data['user_name'];
	$password = $data['user_pass'];
    $email = $data['user_email'];
	$address = $data['c_address'];
	$DOB = $data['c_DOB'];
	$gender = $data['Gender'];
	$bus = $data['bus_id'];
	$bill = $data['bill_id'];
	$no = $data['C_contactno'];
	$route = $data['route'];
	$pickup = $data['pickup'];
	

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.smtp2go.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mail@gmail.com';                 // SMTP username                //important
    $mail->Password = '';                           // SMTP password									 //important
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 2525;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('mail@nu.edu.pk', 'TALHA_Management'); //enter mail here from which it send
    $mail->addAddress($email, 'Fast_Point');     // Add a recipient
    $mail->addAddress('mail@nu.edu.pk');               // Name is optional
    $mail->addReplyTo('point@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
 //   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
 //   $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Msg from Fast Point';
    $mail->Body    = '<b>'.$name. '</b> Thanks for booking point <br/>Please Check below Details: <p>address is:<b>' .$address. '</b></p> Date of birth is : <b>' .$DOB.'</b><p>Gender :<b>' .$gender. '</b><br/></p><p> Bus info</p> :'.$bus.'<p> Contact no :<b>'.$no. '<b> </p></b><br/><p> Route no</p> :'.$route.'<p> Pick UP :<b>'.$pickup. '<b> </p>';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
	 session_destroy();
      header('Location: http://localhost:8080/project_se_final/alert.php');
	  
} catch (Exception $e) {
    //header('Location: http://localhost:8080/project_se_final/index.php');
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
}