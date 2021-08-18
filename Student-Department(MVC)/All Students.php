<?php
	require_once 'Controllers/Student Control.php';
	
	$students=getAllStudents();
	
	
?>


<html>
<head>
 <title>
  All students
 </title>
</head>
 <body>
  <center>
     <h1>All students</h1><br><br><br>
	 <form action="" method="post">
	   <table border="1" width="600px">
	         <?php echo $errorDatabase;?>
		   <tr>
			   <th>Name</th>
			   <th>Id</th>
			   <th>DOB</th>
			   <th>Credit</th>
			   <th>Cgpa</th>
			   <th>Department</th>
			   <th></th>
		   </tr>
           <?php 
				foreach($students as $s)
				{
					echo "<tr>";
					echo "<td>".$s["name"]."</td>";
					echo "<td>".$s["id"]."</td>";
					echo "<td>".$s["dob"]."</td>";
					echo "<td>".$s["credit"]."</td>";
					echo "<td>".$s["cgpa"]."</td>";
					echo "<td>".$s["department"]."</td>";
					echo '<td><a href="Edit Student.php?id='.$s["id"].'">Edit</a></td>';
					echo "</tr>";
				}
		   ?>		   
	   </table>
	  </form>
	</center>
 </body>
</html>