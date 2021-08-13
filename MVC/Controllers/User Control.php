<?php
    include 'Models/db_config.php';
	
	
	$name="";
	$errorName="";
	$username="";
	$errorUserName="";
	$password="";
	$errorPassword="";
	$confirmPassword="";
	$errorConfirmPassword="";
	$email="";
	$errorEmail="";
    $gender="";
	$errorGender="";
	$errorDatabase="";
	$hasError=false;
	
	if(isset($_POST["sign_up"]))
	{
		if(empty($_POST["name"]))
		{
	     $errorName="Enter name";
		 $hasError=true;
		}
		else
		{
			$name=htmlspecialchars($_POST["name"]);
		}
		
		
		if(empty($_POST["username"]))
		{
	     $errorUserName="Enter username";
		 $hasError=true;
		}
		
		
		else
		{
			$username=htmlspecialchars($_POST["username"]);
			if(strpos($_POST["username"]," "))
			{
			 $errorUserName="Space not allowed";
			 $hasError=true;
			}
			elseif(strlen($_POST["username"])<6)
			{
			 $errorUserName="Username too short";
			 $hasError=true;
			}
		}
		
		
		if(empty($_POST["password"]))
		{
	     $errorPassword="Enter password";
		 $hasError=true;
		}
		elseif(strlen($_POST["password"])<8)
		{
	     $errorPassword="Password is too short";
		 $hasError=true;
		}
		elseif(!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?"))
		{
	     $errorPassword="Password must contain special characters";
		 $hasError=true;
		}
		elseif(!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?"))
		{
	     $errorPassword="Password must contain special characters";
		 $hasError=true;
		}
		else
		{
			$upperCase=false;
			$lowerCase=false;
			$chars = str_split($_POST["password"]);
			foreach ($chars as $c) 
			{
				if(ctype_upper($c))
				{
					$upperCase=true;
					break;
				}
            }
			foreach ($chars as $c) 
			{
				if(ctype_lower($c))
				{
					$lowerCase=true;
					break;
				}
            }
			if($upperCase==false)
			{
				$errorPassword="Password must contain one upper case letter";
				$hasError=true;
			}
			elseif($lowerCase==false)
			{
				$errorPassword="Password must contain one lower case letter";
				$hasError=true;
			}
			else
			{
			  $password=htmlspecialchars($_POST["password"]);	
			}
			
	    }
		
		
		if(empty($_POST["confirmPassword"]))
		{
	     $errorConfirmPassword="Confirm password";
		 $hasError=true;
		}
		elseif($_POST["confirmPassword"] != $_POST["password"])
		{
	     $errorConfirmPassword="Password does not match";
		 $hasError=true;
		}
		else
		{
			$confirmPassword=htmlspecialchars($_POST["confirmPassword"]);
		}
		
		
		if(empty($_POST["email"]))
		{
	     $errorEmail="Enter email";
		 $hasError=true;
		}
		else
		{
			$email=htmlspecialchars($_POST["email"]);
			
			if(!strpos($_POST["email"],"@"))
			{
			 $errorEmail="Email should contain @";
			 $hasError=true;
			}
			elseif(!strpos($_POST["email"],".",strpos($_POST["email"],"@")+1))
			{
			 $errorEmail = "Email should contain a dot(.) after @";
			 $hasError=true;
			}
		}
		
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$errorGender = "Select gender";
		}
		else{
			$gender = $_POST["gender"];
		}
	
	
		if($hasError == false)
		{
			$result=insertUser($name,$username,$email,$gender,$password);
			
			if($result === true)
			{
				header("Location: Login.php");
			}
			
			$errorDatabase="<b style='color:red'>".$result."</b>";
			
		}
	}
	
	
	
	elseif(isset($_POST["login"]))
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
			
			
			$result=authenticateUser($username,$password);
			
			if($result === true)
			{
				header("Location: Add Category.php");
			
			}
			else
			{
				$errorDatabase="<b>User not found</b>";
			}
		}
	}
	
	elseif(isset($_POST["signUp"]))
	{
		header("Location: Sign up.php");
	}
	
	
	function insertUser($name,$username,$email,$gender,$password)
	{
		$query = "insert into users values(NULL,'$name','$username','$email','$gender','$password')";
		return execute($query);
	}
	
	function authenticateUser($username,$password)
	{
		$query = "select * from users where username='$username' and password='$password'";
		$result = get($query);
		if(count($result) > 0)
		{
			return true;
		}
		return false;
	}
?>