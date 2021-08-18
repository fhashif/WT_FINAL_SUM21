<?php
	require_once 'Controllers/Student Control.php';
	
	$id=$_GET["id"];
	$student=getStudent($id);
	$departments=getAllDepartments();
	
?>



<html>
<head>
 <title>
  Edit student
 </title>
</head>
 <body>
  <center>
     <h1>Edit student</h1><br><br><br>
	 <form action="" method="post">
	   <table>
	         <?php echo $errorDatabase;?>
		   <tr>
			 <td align="right">Name:</td><td><input type="text" name="name" value="<?php echo $student["name"];?>"><?php echo $errorName;?></td>
		   </tr>
		   <tr>
		   <tr>
			 <td><input type="hidden" name="id" value="<?php echo $student["id"];?>"></td>
		   </tr>
		   <tr>
			 <td align="right">Date of birth:</td><td><input type="text" name="dob" value="<?php echo $student["dob"];?>"><?php echo $errorDOB;?></td>
		   </tr>
		    <tr>
			 <td align="right">Credit(s):</td><td><input type="text" name="credit" value="<?php echo $student["credit"];?>"><?php echo $errorCredit;?></td>
		   </tr>
		    <tr>
			 <td align="right">Cgpa:</td><td><input type="text" name="cgpa" value="<?php echo $student["cgpa"];?>"><?php echo $errorCgpa;?></td>
		   </tr>
		   <tr>
		     <td align="right">Department:</td>
			 <td>		    
			  <select name="dept_id">
				<option selected disabled>Choose</option>
				<?php
				foreach($departments as $d)
				{
					if($d["id"] == $student["dept_id"])
					{
						echo "<option selected value='".$d["id"]."'>".$d["name"]."</option>";
					}
					else
					{
						echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
					}
				}
				?>
			 </td>
		   </tr>
		   <tr>
		   <td></td>
		   </tr>
		   <tr>
		   <td></td>
		   </tr>
		   <tr>
		   <td></td>
		   </tr>
		   <tr>
		   <td></td>
		   </tr>
		   <tr>
		     <td></td>
			 <td><input type="submit" name="edit_student" value="Edit student"></td>
		   </tr>		
	   </table>
	  </form>
	</center>
 </body>
</html>