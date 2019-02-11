<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fast University Point Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	
  </head>
  <body>
    <!-- NAVIGATION -->
    
      <div class="w3-top w3-bar w3-card-2 w3-black">
        <span class="branding w3-bar-item w3-mobile">Fast University Point Service</span>
        <span class="w3-right w3-mobile">
          <a class="w3-bar-item w3-button w3-ripple w3-mobile w3-hover-indigo" href="#">Home</a>
		  <a class="w3-bar-item w3-button w3-ripple w3-mobile w3-hover-indigo" href="#route">Routes</a>
          <a class="w3-bar-item w3-button w3-ripple w3-mobile w3-hover-indigo" href="#about">About</a>
          <a class="w3-bar-item w3-button w3-ripple w3-mobile w3-hover-indigo" href="#services">Services</a>
          <a class="w3-bar-item w3-button w3-ripple w3-mobile w3-hover-indigo" href="#contact">Contact</a>
        </span>
      </div>

    <!-- SHOWCASE -->
    <section class="showcase">
      <div class="w3-container w3-center">
        <h1 class="w3-text-shadow w3-animate-opacity">NUCES Fast</h1>
        <hr>
        <p class="w3-animate-opacity">Fast's transport system includes students of all areas. Keeping this in mind, we provide transport facilities to our students. The University has its own spacious and air-conditioned buses that run routes covering almost all parts of the city. Students are requested to fill out a Request of Transport Form upon enrolling and prior to the start of the term.</p>
        <button onclick="document.getElementById('start-modal').style.display='block'" class="w3-button w3-margin-right w3-ripple w3-indigo w3-large w3-hover-shadow w3-opacity-min col-sm-12">Register Here</button>
		<button onclick="document.getElementById('signin-modal').style.display='block'" class="w3-button w3-center w3-ripple w3-indigo w3-large w3-hover-shadow w3-opacity-min  col-sm-12">Sign In Here</button>
		<button onclick="document.getElementById('admin-modal').style.display='block'" class="w3-button w3-margin-left w3-ripple w3-indigo w3-large w3-hover-shadow w3-opacity-min  col-sm-12">Admin Sign In</button>
      </div>
    </section>

    <!-- SECTION 1 -->
    <section class="section w3-indigo w3-hover-opacity">
      <div class="w3-container w3-center">
        <i class="fa fa-envelope"></i>
        <h2>For Details</h2>
        <p>
		Director Development and Planning<br/>
		Transport Office Tahir Mansoor<br/>
		+92 42 111-865-865, (ext: 1020)<br/>
		tahir@nu.edu.pk<br/>
		</p>
      </div>
    </section>

    <!-- SECTION 2 -->
    <section class="section w3-light-grey w3-hover-opacity">
      <div class="w3-container w3-center">
        <i class="fa fa-road"></i>
        <h2>Routes</h2>
      </div>
    </section>

	<section id="route" class="section">
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
        
      </div>
    </section>
	
	
    <!-- ABOUT -->
    <section id="about" class="section">
      <div class="w3-container">
        <div class="w3-row-padding">
          <div class="w3-col m5">
            <img src="img/fleet.jpg">
          </div>
          <div class="w3-col m7">
            <button onclick="accFunction('what')" class="w3-btn-block w3-left-align">
            Mission Statement</button>

            <div id="what" class="w3-container w3-show">
              <h3>Transport services' mission statement</h3>
              <p>The provision of a reliable, cost effective, high quality transport service and vehicle and equipment maintenance facility to NUCES Fast. To offer support, advice and guidance on transport related matters. Included in our objective is the aspiration to identify and develop potential and suitable commercial business opportunities.</p>
            </div>

            <button onclick="accFunction('who')" class="w3-btn-block w3-left-align">
            Who are we</button>

            <div id="who" class="w3-container w3-hide">
              <h3>We Are FAST</h3>
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
            </div>

            <!--<button onclick="accFunction('where')" class="w3-btn-block w3-left-align">
            What We Do</button>-->

            <div id="where" class="w3-container w3-hide">
              <h3>We Are Everywhere</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES HEADING -->
    <section id="services" class="section w3-indigo w3-hover-opacity">
      <div class="w3-container w3-center">
        <h1 class="w3-text-shadow">OUR SERVICES</h1>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section w3-light-grey">
      <div class="w3-container w3-center">
        <div class="w3-row">
          <div class="w3-col m3">
            <i class="fa fa-wpforms w3-indigo w3-padding-small w3-round-xlarge"></i>
            <h3>Online registration</h3>
            <p>Ease of use in registration</p>
          </div>
          <div class="w3-col m3">
            <i class="fa fa-search w3-indigo w3-padding-small w3-round-xlarge"></i>
            <h3>Search</h3>
            <p>Search for Routes</p>
          </div>
          <div class="w3-col m3">
            <i class="fa fa-map w3-indigo w3-padding-small w3-round-xlarge"></i>
            <h3>Coverage</h3>
            <p>All areas covered</p>
          </div>
          <div class="w3-col m3">
            <i class="fa fa-database w3-indigo w3-padding-small w3-round-xlarge"></i>
            <h3>Efficient Record Storage</h3>
            <p>Easy Record Handling</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT HEADING -->
    <section id="contact" class="section w3-dark-grey w3-hover-opacity">
      <div class="w3-container w3-center">
        <h1 class="w3-text-shadow">GET IN TOUCH</h1>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="section">
      <div class="w3-container">
        <div class="w3-card-4">
          <div class="w3-container w3-dark-grey">
            <h2>Contact Us</h2>
          </div>
            <form class="w3-container w3-padding-xlarge">
            <label class="w3-label">Name</label>
            <input class="w3-input" type="text" pattern="[A-Z a-z]*">
            <label class="w3-label"> <i class="fa fa-envelope" aria-hidden="true"></i></label>
            <input class="w3-input" type="email" placeholder="enter email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
           <label class="w3-label"> <i class="fa fa-paper-plane" aria-hidden="true"></i></label>
            <textarea class="w3-input w3-border" placeholder="enter msg here" style="resize:none"></textarea>
            <br>
            <button type="submit" class="w3-button">Submit</button>
            <br><br>
            </form>
          </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="w3-black w3-padding-xlarge w3-center">
      <p>Fast University Point Service &copy; 2018</p>
    </footer>

	<!--adminSignIn MODAL -->
	<div id="admin-modal" class="w3-modal">
		<div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:600px">
			<header class="w3-container w3-indigo">
			<span onclick="document.getElementById('admin-modal').style.display='none'" class="w3-closebtn">&times;</span>
			<h2>Admin Sign in</h2>
			</header>
			
			<form action="adminpanel.php" method="POST" class="w3-container" name="f1" onsubmit="return valid()">
			<div class="w3-section">
				<label>Username</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" name="user" placeholder="Enter username" pattern="[A-Z a-z]*" required>
				<br>
				<label>Password</label>
              <input class="w3-input w3-border w3-margin-bottom" type="password" name="password" placeholder="Enter Password" required>
				<br>
				<button class="w3-black w3-btn-block w3-section w3-padding" type="submit" >Sign IN</button>
			</div>
			</form>
		
		
		</div>
	</div>
	
	<!--SignIn MODAL -->
	<div id="signin-modal" class="w3-modal">
		<div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:600px">
			<header class="w3-container w3-indigo">
			<span onclick="document.getElementById('signin-modal').style.display='none'" class="w3-closebtn">&times;</span>
			<h2>Sign in</h2>
			</header>
			
			<form class="w3-container" action="login.php" method="POST">
			<div class="w3-section">
				<label>Email ID</label>
              <input class="w3-input w3-border w3-margin-bottom" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email ID">
             
				<br>
				<label>Password</label>
              <input class="w3-input w3-border w3-margin-bottom" type="password" name="pass" placeholder="Enter Password">
				<br>
				
				<button class="w3-black w3-btn-block w3-section w3-padding" name="login">Sign IN</button>
			</div>
			</form>
		
		
		</div>
	</div>
	
	
    <!--registration MODAL -->
    <div id="start-modal" class="w3-modal">
      <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:800px">
        <header class="w3-container w3-indigo">
          <span onclick="document.getElementById('start-modal').style.display='none'" class="w3-closebtn">&times;</span>
          <h2>Registration Form</h2>
        </header>
		
		<div class="w3-bar w3-border-bottom">
	   <button class="tablink w3-ripple w3-bar-item w3-button" onclick="openCity(event, 'Student')">Student</button>
	   <button class="tablink w3-ripple w3-bar-item w3-button" onclick="openCity(event, 'Faculty')">Faculty</button>
		</div>

        <div id="Student" class="w3-container city w3-animate-opacity">
          <!-- <form action="test1.php" method="post" name="test1"> -->
		   <head id="Head1" runat="server">
    
    <script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>
</head>

		   <form  action="regiist_final.php" method="post" name="test1" form id="frm" runat="server"   enctype='multipart/form-data'>
            <div class="w3-section">
				<br><br>
              <label>Name</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name="name" onkeypress="return blockSpecialChar(event)" placeholder="Enter Full Name" pattern="[A-Z a-z]*"  required>
			  <br><br>
             
				<label>Gender</label>
             <!-- <input class="w3-input w3-border w3-margin-bottom" type="text" name="Gender" onkeypress="return blockSpecialChar(event)" placeholder="Enter Gender">  -->
 <select name="Gender" class="w3-input w3-border w3-margin-bottom">{<option>male</option><option>female</option>}</select>
			  <br><br>
              <label>Password</label>
              <input class="w3-input w3-border w3-margin-bottom" type="password" name="pass" placeholder="Enter Password" required>
			  
				<br><br>
              <label>Enter Address</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" name="address" onkeypress="return blockSpecialChar(event)" placeholder="Enter Address" required>
			  
				<br><br>
				<label>Date of Birth</label>
				<input class="w3-input w3-border w3-margin-bottom" type="date" name="C_DOB" placeholder="Enter date of birth" min="1980-01-01" max="2010-01-01" required>
			  <br><br>
				
				<label>Enter Route No</label></tr>
				<select class="w3-border w3-margin-bottom" name= "route" id= "update_indication_id" class="form-control" required>
				  <?php
					$server = 'localhost';
					$username = 'k152482';
					$password = 'waqar123';
					$dbname = 'pointManagementSystem';
					$conn = mysqli_connect($server, $username, $password, $dbname);
					if($conn->connect_error)
					die("error in connection");
					else
						echo "connected successfully<br/>";
					
					  $sql = "SELECT route_no From route";
					  $result=mysqli_query($conn,$sql);
					  while ($row =  mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['route_no'].'">'.$row['route_no'].'</option>';
					
					}
				   ?>
				   
				   
				   
				</select>
				
				<br><br>
				
				
				
					  <label>Pickup Location</label></tr>
              <select class="w3-border w3-margin-bottom" name= "pickup" id= "update_indication_id" class="form-control" required>
				  <?php
					$server = 'localhost';
					$username = 'k152482';
					$password = 'waqar123';
					$dbname = 'pointManagementSystem';
					$conn = mysqli_connect($server, $username, $password, $dbname);
					if($conn->connect_error)
					die("error in connection");
					else
						echo "connected successfully<br/>";
					
					  $sql = "SELECT stop_name From Stops";
					  $result=mysqli_query($conn,$sql);
					  while ($row =  mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['stop_name'].'">'.$row['stop_name'].'</option>';
					}
				   ?>
				</select>
				<br><br>
				
			  <label>Mobile No</label>
              <input class="w3-input w3-border w3-margin-bottom" name="Mobile_NO" type="text" onkeypress="return blockSpecialChar(event)" placeholder="Enter Mobile No" pattern="^(?:\(\d{4}\)|\d{4})[- . ]?\d{3}[- . ]?\d{4}$" required>
			 
				<br><br>
			  <label>Pay-Order NO</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name="Pay_Order" onkeypress="return blockSpecialChar(event)" placeholder="Enter Pay-Order NO" required>
			  
				<br><br>
			  <label>Email ID</label>
              <input class="w3-input w3-border w3-margin-bottom" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email ID" required>
              
			  
			  
			   <label>Select image</label>
			   <input class="w3-input w3-border w3-margin-bottom" type="file" name="file" required>
			  
			  
				<br><br>
			  <button class="w3-black w3-btn-block w3-section w3-padding" type="submit" name="register">Submit</button>
            </div>
          </form>
        </div>
		
		
		
		
		
		
		<div id="Faculty" class="w3-container city w3-animate-opacity">
          <form  action="regiist_final.php" method="post" name="test1" form id="frm" runat="server">
            <div class="w3-section">
				<br><br>
              <label>Name</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name="name" onkeypress="return blockSpecialChar(event)" placeholder="Enter Full Name" pattern="[A-Z a-z]*" required>
			  <br><br>
             
								<label>Gender</label>
             <!-- <input class="w3-input w3-border w3-margin-bottom" type="text" name="Gender" onkeypress="return blockSpecialChar(event)" placeholder="Enter Gender">  -->
 <select name="Gender" class="w3-input w3-border w3-margin-bottom">{<option>male</option><option>female</option>}</select>
				<br><br>
              <label>Password</label>
              <input class="w3-input w3-border w3-margin-bottom" type="password" name="pass" placeholder="Enter Password">
			  
				<br><br>
              <label>Enter Address</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" name="address" onkeypress="return blockSpecialChar(event)" placeholder="Enter Address" required>
				<br><br>
				<label>Date of Birth</label>
				<input class="w3-input w3-border w3-margin-bottom" type="date" name="C_DOB" placeholder="Enter date of birth" min="1980-01-01" max="2010-01-01" required>
			  <br><br>
				
				<label>Enter Route No</label></tr>
				<select class="w3-border w3-margin-bottom" name= "route" id= "update_indication_id" class="form-control" required>
				  <?php
					$server = 'localhost';
					$username = 'admin';
					$password = '';
					$dbname = 'pointManagementSystem';
					$conn = mysqli_connect($server, $username, $password, $dbname);
					if($conn->connect_error)
					die("error in connection");
					else
						echo "connected successfully<br/>";
					
					  $sql = "SELECT route_no From route";
					  $result=mysqli_query($conn,$sql);
					  while ($row =  mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['route_no'].'">'.$row['route_no'].'</option>';
					}
				   ?>
				</select>
				
				<br><br>
				
			  <label>Pickup Location</label></tr>
              <select class="w3-border w3-margin-bottom" name= "pickup" id= "update_indication_id" class="form-control" required>
				  <?php
					$server = 'localhost';
					$username = 'admin';
					$password = '';
					$dbname = 'pointManagementSystem';
					$conn = mysqli_connect($server, $username, $password, $dbname);
					if($conn->connect_error)
					die("error in connection");
					else
						echo "connected successfully<br/>";
					
					  $sql = "SELECT stop_name From Stops";
					  $result=mysqli_query($conn,$sql);
					  while ($row =  mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['stop_name'].'">'.$row['stop_name'].'</option>';
					}
				   ?>
				</select>
				<br><br>
				
				
					
				
			  <label>Mobile No</label>
              <input class="w3-input w3-border w3-margin-bottom" name="Mobile_NO" type="text" onkeypress="return blockSpecialChar(event)" placeholder="Enter Mobile No" pattern="^(?:\(\d{4}\)|\d{4})[- . ]?\d{3}[- . ]?\d{4}$" required>
			 
				<br><br>
			  <label>Pay-Order NO</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name="Pay_Order" onkeypress="return blockSpecialChar(event)" placeholder="Enter Pay-Order NO" required>
			  
				<br><br>
			  <label>Email ID</label>
              <input class="w3-input w3-border w3-margin-bottom" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email ID" required>
              
			  
			   <label>Select image</label>
			    <input class="w3-input w3-border w3-margin-bottom" type="file" name="file" required>
				<br><br>
			  <button class="w3-black w3-btn-block w3-section w3-padding" type="submit" onclick="playSound();" name="register">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
	
	
	
	<audio id="audio" src="http://www.soundjay.com/button/beep-07.wav" autoplay="false" ></audio>

    <script>
    function playSound() {
          var sound = document.getElementById("audio");
          sound.play();
      }
    </script>
	
	
	
	<script>
	function valid(){var password=document.f1.password.value;  var user=document.f1.user.value;
	if(password=="abcd123" && user=="Talha"){
	return true;}
	else
	alert('wrong passward or name'); return false;}
	</script>
	
	<script>
		document.getElementsByClassName("tablink")[0].click();

		function openCity(evt, cityName) {
		var i, x, tablinks;
		x = document.getElementsByClassName("city");
		for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablink");
		for (i = 0; i < x.length; i++) {
		tablinks[i].classList.remove("w3-light-grey");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.classList.add("w3-light-grey");
		}
	</script>
	
	
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
