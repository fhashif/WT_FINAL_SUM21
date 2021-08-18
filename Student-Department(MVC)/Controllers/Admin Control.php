<?php
    require_once 'Models/db_config.php';
	
	$name="";
	$errorName="";
	$username="";
	$errorUserName="";
	$password="";
	$errorPassword="";
	$errorDatabase="";
	$hasError=false;
	
	if(isset($_POST["login"]))
	{
		if(empty($_POST["username"]))
		{
	     $errorUserName="Enter username";
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
		
		
		if($hasError == false)
		{
			
			
			$result=authenticateUser($username);
			
				foreach($result as $r)
				{
					if($r["password"]!=$password)
					{
						$errorPassword="Incorrect password";
						$hasError=true;
					}
					else
					{
						header("Location: Dashboard.php");
						$hasError=true;
						break;
					}
				}
				if($hasError==false)
				{
					$errorDatabase="<b>User not found</b>";
				}
				
		}
	}

	
	
	function insertUser($name,$username,$email,$gender,$password)
	{
		$query = "insert into users values(NULL,'$name','$username','$email','$gender','$password')";
		return execute($query);
	}
	
	function authenticateUser($username)
	{
		$query = "select * from admin where username='$username'";
		$result = get($query);
	    return $result;
	}
?>