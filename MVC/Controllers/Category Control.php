<?php
	include 'Models/db_config.php';

    
    $name="";
	$errorName="";
	$hasError=false;
	
	
	if(isset($_POST["add_category"]))
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
		
		
		if($hasError == false)
		{
			$result=insertCategory($name);
			if($result === true)
			{
				echo "Category added"; 
			}
			else
			{
				$errorDatabase = "<b>".$result."</b>";
			}
		}
	}
	
	
	if(isset($_POST["edit_category"]))
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
		
		
		if($hasError == false)
		{
			$result=updateCategory($_POST["id"],$name);
			if($result === true)
			{
				header("Location: All Categories.php");
			}
			    $errorDatabase = "<b>".$result."</b>";
		}
	}
	
	function insertCategory($name)
	{
		$query = "insert into categories values(NULL,'$name')";
		return execute($query);
	}
	
	function getAllCategories()
	{
		$query = "select * from categories order by id asc";
		$result = get($query);
		return $result;
	}
	
	function getCategory($id)
	{
		$query = "select * from categories where id=$id";
		$result = get($query);
		return $result[0];
	}
	function updateCategory($id,$name)
	{
		$query = "update categories set name='$name' where id='$id'";
		return execute($query);
	}
?>