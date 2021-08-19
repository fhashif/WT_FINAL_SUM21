<?php
	require_once 'Controllers/Student Control.php';
	
	$departments=getAllDepartments();
	
	
?>


<html>
<head>
 <title>
  All departments
 </title>
</head>
 <body>
  <center>
     <h1>All Departments</h1><br><br><br>
	 <form action="" method="post">
	   <table border="1" width="200px">
	         <?php echo $errorDatabase;?>
		   <tr>
			   <th>Id</th>
			   <th>Department</th>
		   </tr>
           <?php 
				foreach($departments as $d)
				{
					echo "<tr>";
					echo "<td>".$d["id"]."</td>";
					echo "<td>".$d["name"]."</td>";
					echo "</tr>";
				}
		   ?>		   
	   </table>
	  </form>
	</center>
 </body>
</html>