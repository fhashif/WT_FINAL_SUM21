<?php
	include 'Controllers/Category Control.php';
	$id=$_GET["id"];
	$category=getCategory($id);
?>


<html>
<head>
 <title>
  Dashboard
 </title>
</head>
 <body>
  <center>
     <h1>Edit Category</h1><br><br><br>
	 <form action="" method="post">
	   <table>
	         <?php echo $errorDatabase;?>
			 <input type="hidden" name="id" value="<?php echo $category["id"];?>">
		   <tr>
			 <td>Name:</td>
		   </tr>
		   <tr>
			 <td><input type="text" name="name" value="<?php if($errorName==""){echo $category["name"];}else{echo " ";};?>"></td>
		   </tr>
		   <tr>
			 <td><?php echo $errorName;?></td>
		   </tr>
		   <tr>
			 <td><input type="submit" name="edit_category" value="Edit Category"></td>
		   </tr>		
	   </table>
	  </form>
	</center>
 </body>
</html>