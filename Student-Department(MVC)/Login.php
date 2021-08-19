<?php
	require_once 'Controllers/Admin Control.php';
?>



<html>
<head>
 <title>
  Login
 </title>
</head>
 <body>
  <center>
	 <fieldset style="width:400px">
	  <legend><h1>Login</h1></legend>
	 
	  <form action="" method="post">
	   <table>
	         <?php echo $errorDatabase;?>
		   <tr>
			 <td align="right">Username:</td>
			 <td><input type="text" name="username" value="<?php echo $username;?>"></td>
		   </tr>
		     <td></td>
			 <td><?php echo $errorUserName;?></td>
		   <tr>
			 <td align="right">Password:</td>
			 <td><input type="password" name="password" value="<?php echo $password;?>"></td>
		   </tr>
		   <tr>
			 <td></td>
			 <td><?php echo $errorPassword;?></td>
		   </tr>
		   <tr>
			   <td></td>
			   <td><input type="submit" name="login" value="Login"></td>
		   </tr>		
	   </table>
	  </form>
	 </fieldset>
  </center>
 </body>
</html>