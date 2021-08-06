<?php
	if(isset($_SESSION["loggeduser"]))
	{
		header("Location: Dashboard.php");
	}
	$username="";
	$errorUsername="";
	$password="";
	$errorPassword="";
	$hasError=false;
    $users=array("Farhan"=>"1234","Kritanjoli"=>"5678");
	
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
		if(empty($_POST["username"]))
		{
	     $errorUsername="Enter username";
		 $hasError=true;
		}
		else
		{
			$username=htmlspecialchars($_POST["username"]);
		}
		
		if(empty($_POST["password"]))
		{
	     $errorPassword="Enter password";
		 $hasError=true;
		}
		else
		{
			$password=htmlspecialchars($_POST["password"]);
		}
		if($hasError==false)
		{
			foreach($users as $u=>$p)
			{
				if($username==$u)
			{
				if($password!=$p)
				{
			       $errorPassword="Incorrect password";
				}
				else
				{
					setcookie("loggeduser",$username,time()+60);
				    header("Location: Dashboard.php");
				}
			}
			}
			echo "<center>User not found</center>";
		}
    }
?>

<html>
 <body>
  <center>
	  <form action="" method="post">
	   <table>
		 <tr>
		 <td align="right">Username:</td>
		 <td><input type="text" name="username" value="<?php echo $username;?>"><span><?php echo $errorUsername;?></span></td>
		 </tr>
		 <tr>
		 <td align="right">Password:</td>
		 <td><input type="password" name="password" value="<?php echo $password;?>"><span><?php echo $errorPassword;?></span></td>
		</tr>
		 <tr>
		 <td></td>
		 <td align="center"><input type="submit" value="Login"></td>
		</tr>
	   </table>
	  </form>
  </center>
 </body>
</html>