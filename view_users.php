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

<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive">
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>User Name</th>  
            <th>User Pass</th>  
            <th>User E-mail</th>  
            <th>User Age</th>  
              <th>Route no</th>  
            <th>Pick up </th> 
        </tr>  
        </thead>  
 
        <?php
$dbcon=mysqli_connect("localhost","admin","");  
mysqli_select_db($dbcon,"pointManagementSystem");  
	
       
        $view_users_query="select * from users";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_email=$row[2];  
            $user_pass=$row[3];  
			 $route=$row[10];  
            $pickup=$row[11];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_email;  ?></td>  
            <td><?php echo $user_pass;  ?></td>  
              <td><?php echo $route;  ?></td> 
			   <td><?php echo $pickup;  ?></td> 
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
 </div> 
</body>  
  
</html>