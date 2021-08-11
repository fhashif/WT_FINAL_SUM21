<?php
	include 'Controllers/User Control.php';
?>



<html>
<head>
 <title>
  Sign up
 </title>
</head>
 <body>
  <center>
	 <fieldset style="width:400px">
	  <legend align="center"><h1>Sign up</h1></legend>
	 
	  <form action="" method="post">
	   <table>
	         <?php echo $errorDatabase;?>
		   <tr>
			 <td align="right">Name:</td>
			 <td><input type="text" name="name" value="<?php echo $name;?>"></td>
		   </tr>
		   <tr>
			 <td></td>
			 <td><?php echo $errorName;?></td>
		   </tr>
		   <tr>
			 <td align="right">Username:</td>
			 <td><input type="text" name="username" value="<?php echo $username;?>"></td>
		   </tr>
		     <td></td>
			 <td><?php echo $errorUserName;?></td>
		   <tr>
			 <td align="right">Email:</td>
			 <td><input type="text" name="email" value="<?php echo $email;?>"></td>
		   </tr>
		   <tr>
			 <td></td>
			 <td><?php echo $errorEmail;?></td>
		   </tr>
		   <tr>
			 <td align="right">Password:</td>
			 <td><input type="password" name="password" value="<?php echo $password;?>"></td>
		   </tr>
		   <tr>
			 <td></td>
			 <td><?php echo $errorPassword;?></td>
		   </tr>
		   <tr>
			 <td align="right">Confirm Password:</td>
			 <td><input type="password" name="confirmPassword" value="<?php echo $confirmPassword;?>"></td>
		   </tr>
		   <tr>
			 <td></td>
			 <td><?php echo $errorConfirmPassword;?></td>
		   </tr>
		   <tr>
			 <td align="right">Gender:</td>
			 <td><input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked";?>>Male<input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked";?>>Female</td>
	       </tr>
		   <tr>
			 <td></td>
			 <td><?php echo $errorGender;?></td>
		   </tr>
		   <tr>
			   <td></td>
			   <td><input type="submit" name="sign_up" value="Sign up"></td>
		   </tr>		
	   </table>
	  </form>
	 </fieldset>
  </center>
 </body>
</html>