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
    <h1 align="center">All Drivers</h1>  
  
<div class="table-responsive">
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Driver ID</th>  
            <th>Driver Name	</th>  
            <th>Driver DOB</th>  
            <th>Driver Address</th> 

            <th>Driver Contact NO</th>			
              
        </tr>  
        </thead>  
 
        <?php
$dbcon=mysqli_connect("localhost","admin","");  
mysqli_select_db($dbcon,"pointManagementSystem");  
	
       
        $view_users_query="select * from driver";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $driver_ID=$row[0];  
            $D_name=$row[1];  
            $D_DOB=$row[2];  
            $D_address=$row[3];  
			 $D_contactno=$row[4];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $driver_ID;  ?></td>  
            <td><?php echo $D_name;  ?></td>  
            <td><?php echo $D_DOB;  ?></td>  
            <td><?php echo $D_address;  ?></td>  
			<td><?php echo $D_contactno;  ?></td>  
             
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
 </div> 
</body>  
  
</html>