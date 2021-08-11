<?php
	include 'Controllers/Category Control.php';
	
	$categories = getAllCategories();
?>


<html>
<head>
 <title>
  Dashboard
 </title>
</head>
 <body>
  <center>
     <h1>All Categories</h1><br><br><br>
	 <form action="" method="post">
	   <table border="1" width="400px">
	         <?php echo $errorDatabase;?>
		   <tr>
			   <th >Serial</th>
			   <th colspan="2">Category name</th>
		   </tr>
           <?php 
				foreach($categories as $c)
				{
					echo "<tr>";
					echo "<td>".$c["id"]."</td>";
					echo "<td>".$c["name"]."</td>";
					echo '<td><a href="Edit Category.php?id='.$c["id"].'">Edit</a></td>';
					echo "</tr>";
				}
		   ?>		   
	   </table>
	  </form>
	</center>
 </body>
</html>