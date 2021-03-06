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
<title>View Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}


</style>
<body class="w3-light-grey">

<div class="w3-top w3-bar w3-card-2 w3-black">
        <span class="branding w3-bar-item w3-mobile">Fast University Point Service</span>
        </span>
      </div>
	  
	  <br><br>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-quarter">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="img/Capture.JPG" style="width:100%" style="color:#fff" alt="Avatar">
          <div class="w3-display-bottomleft w3-container">
            <h2></h2>
          </div>
        </div>
		<br>
        <div class="w3-container w3-center">
			<br><div><a href="logout.php" class="w3-button w3-indigo " style="width:90%">Logout</a></div><br>
			<div><a href="card.php" class="w3-button w3-indigo " style="width:90%">Print Point Card</a></div><br><br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-rest">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>User Profile</h2>
        <hr>
		<br>
		<div class="w3-container w3-margin-left">
          
		  
		  <div class="w3-row w3-large">
			<div class="w3-quarter w3-opacity">
				<p><strong>Name:</strong></p>
			</div>
			<div class="w3-rest">
			<?php  

 $sql = "SELECT user_name FROM users WHERE user_email = '" . $_SESSION['email'] . "'";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_array($result);
echo "<p>" . $row['user_name']  . "</p>";

?>  
			
			</div>
		  </div>
        
		
          <div class="w3-row w3-large">
			<div class="w3-quarter w3-opacity">
				<p><strong>Email:</strong></p>
			</div>
			<div class="w3-rest">
			<?php
				
				echo "<p>" . $_SESSION['email'] . "</p>";
			?>
			</div>
		  </div>
		  
		  <div class="w3-row w3-large">
			<div class="w3-quarter w3-opacity">
				<p><strong>Gender:</strong></p>
			</div>
			<div class="w3-rest">
			<?php  
				$sql4 = "SELECT Gender FROM users WHERE user_email = '" . $_SESSION['email'] . "'";
				$result = mysqli_query($dbcon, $sql4);
				$row = mysqli_fetch_array($result);
				echo "<p>" . $row['Gender']  . "</p>";
				?>
			
			</div>
		  </div>
          
       
          <div class="w3-row w3-large">
			<div class="w3-quarter w3-opacity">
				<p><strong>Bill Status:</strong></p>
			</div>
			<div class="w3-rest">
				<p>Paid</p>
			
			</div>
		  </div>
		  
		  <div class="w3-row w3-large">
			<div class="w3-quarter w3-opacity">
				<p><strong>Password:</strong></p>
			</div>
			<div class="w3-rest">
				<?php  

				 $sql2 = "SELECT user_pass FROM users WHERE user_email = '" . $_SESSION['email'] . "'";
				$result = mysqli_query($dbcon, $sql2);
				$row = mysqli_fetch_array($result);
				echo "<p>" . $row['user_pass']  . "</p>";

				?>  
			
			</div>
		  </div>
		  
		  <div class="w3-row w3-large">
			<div class="w3-quarter w3-opacity">
				<p><strong>Address:</strong></p>
			</div>
			<div class="w3-rest">
				<?php  

				 $sql3 = "SELECT C_address FROM users WHERE user_email = '" . $_SESSION['email'] . "'";
				$result = mysqli_query($dbcon, $sql3);
				$row = mysqli_fetch_array($result);
				echo "<p>" . $row['C_address']  . "</p>";

				?>
			
			</div>
		  </div>
		  
		  <div class="w3-row w3-large">
			<div class="w3-quarter w3-opacity">
				<p><strong>Route No:</strong></p>
			</div>
			<div class="w3-rest">
				<?php  
				$sql6 = "SELECT bus_id FROM users WHERE user_email = '" . $_SESSION['email'] . "'";
				$result = mysqli_query($dbcon, $sql6);
				$row = mysqli_fetch_array($result);
				echo "<p>" . $row['bus_id']  . "</p>";
				?>
			
			</div>
		  </div>
		  
		  <div class="w3-row w3-large">
			<div class="w3-quarter w3-opacity">
				<p><strong>Contact No:</strong></p>
			</div>
			<div class="w3-rest">
			<?php  
				$sql5 = "select total_amount from bill where bill_id in (SELECT bill_id FROM users WHERE user_email = '" . $_SESSION['email'] . "')";
				$result = mysqli_query($dbcon, $sql5);
				$row = mysqli_fetch_array($result);
				echo "<p>" . $row['total_amount']  . "</p>";
				?>
			
			</div>
		  </div>
		  
		  
		  
		  <br>
     
        </div>
		
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-road fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>Routes</h2>
        <div class="w3-container w3-padding">
	  <div class="w3-content w3-display-container w3-card-4 w3-center" style="max-width:900px">

		<div class="w3-display-container mySlides">
		  <img src="img/route 1.PNG" style="width:90%">
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/route 2.PNG" style="width:90%">
		</div>
		
		<div class="w3-display-container mySlides">
		  <img src="img/Route 3.PNG" style="width:90%">
		</div>

		<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
		<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

		</div>
        <br>
      </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-indigo w3-center w3-margin-top">
  <p>Fast University Point Service &copy; 2017</p>
</footer>

<script>
		var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
	  showDivs(slideIndex += n);
	}

	function showDivs(n) {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  if (n > x.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = x.length}
	  for (i = 0; i < x.length; i++) {
		 x[i].style.display = "none";  
	  }
	  x[slideIndex-1].style.display = "block";  
	}
	
      function accFunction(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
              x.className += " w3-show";
          } else {
              x.className = x.className.replace(" w3-show", "");
          }
      }
      </script>


</body>
</html>
