<?php
	require_once 'Controllers/Student Control.php';
	
	$departments=getAllDepartments();
	
	
?>


<html>
<head>
 <title>
  Add student
 </title>
</head>
 <body>
  <center>
     <h1>Add student</h1><br><br><br>
	 <form action="" method="post">
	   <table>
	         <?php echo $errorDatabase;?>
		   <tr>
			 <td align="right">Name:</td><td><input type="text" name="name" value="<?php echo $name;?>"><?php echo $errorName;?></td>
		   </tr>
		   <tr>
		   <tr>
			 <td align="right">Id:</td> <td><input type="text" name="id" value="<?php echo $id;?>"><?php echo $errorId;?></td>
		   </tr>
		   <tr>
			 <td align="right">Date of birth:</td><td><input type="text" name="dob" value="<?php echo $dob;?>"><?php echo $errorDOB;?></td>
		   </tr>
		    <tr>
			 <td align="right">Credit(s):</td><td><input type="text" name="credit" value="<?php echo $credit;?>"><?php echo $errorCredit;?></td>
		   </tr>
		    <tr>
			 <td align="right">Cgpa:</td><td><input type="text" name="cgpa" value="<?php echo $cgpa;?>"><?php echo $errorCgpa;?></td>
		   </tr>
		   <tr>
		     <td>Department:</td>
			 <td>		    
			  <select align="center" style="width:70px" name="dept_id">
				<option align="center" selected disabled>Choose</option>
				<?php
				foreach($departments as $d)
				{
					if($d["id"] == $dept_id)
					{
						echo "<option selected value='".$d["id"]."'>".$d["name"]."</option>";
					}
					else
					{
						echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
					}
				}
				?>
			  </select><span><?php echo $errorDept_Id;?></span>
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
			 <td><input type="submit" name="add_student" value="Add student"></td>
		   </tr>		
	   </table>
	  </form>
	</center>
 </body>
</html>