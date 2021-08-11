<?php
	include 'Controllers/Category Control.php';
	
?>


<html>
<head>
 <title>
  Dashboard
 </title>
</head>
 <body>
  <center>
     <h1>Add Category</h1><br><br><br>
	 <form action="" method="post">
	   <table>
	         <?php echo $errorDatabase;?>
		   <tr>
			 <td>Name:</td>
		   </tr>
		   <tr>
			 <td><input type="text" name="name" value="<?php echo $name;?>"></td>
		   </tr>
		   <tr>
			 <td><?php echo $errorName;?></td>
		   </tr>
		   <tr>
			 <td><input type="submit" name="add_category" value="Add Category"></td>
		   </tr>		
	   </table>
	  </form>
	</center>
 </body>
</html>