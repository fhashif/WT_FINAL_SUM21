<?php
	require_once 'Models/db_config.php';


	$name="";
	$errorName="";
	$id="";
	$errorId="";
	$dob="";
	$errorDOB="";
	$credit="";
	$errorCredit="";
	$cgpa="";
	$errorCgpa="";
	$dept_id="";
	$errorDept_Id="";
	$errorDatabase="";
	$hasError=false;
	
	
	if(isset($_POST["add_student"]))
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
		
		
		if(empty($_POST["id"]))
		{
	     $errorId="Enter id";
		 $hasError=true;
		}
		else
		{
			$id=htmlspecialchars($_POST["id"]);
		}
		
		
		if(empty($_POST["dob"]))
		{
	     $errorDOB="Enter date of birth";
		 $hasError=true;
		}
		else
		{
			$dob=htmlspecialchars($_POST["dob"]);
		}
		
		
		
		if(empty($_POST["dob"]))
		{
	     $errorDOB="Enter date of birth";
		 $hasError=true;
		}
		else
		{
			$dob=htmlspecialchars($_POST["dob"]);
		}
		
		
		
		if(empty($_POST["credit"]))
		{
	     $errorCredit="Enter credit(s)";
		 $hasError=true;
		}
		else
		{
			$credit=htmlspecialchars($_POST["credit"]);
		}
		
		
		
		if(empty($_POST["cgpa"]))
		{
	     $errorCgpa="Enter cgpa";
		 $hasError=true;
		}
		else
		{
			$cgpa=htmlspecialchars($_POST["cgpa"]);
		}
		
		
		
		
		if(empty($_POST["dept_id"]))
		{
	     $errorDept_Id="Select department";
		 $hasError=true;
		}
		else
		{
			$dept_id=htmlspecialchars($_POST["dept_id"]);
		}
		
		
		
		
		
		
		
		
		if($hasError == false)
		{
			$result=insertStudent($name,$id,$dob,$credit,$cgpa,$dept_id);
			if($result === true)
			{
				header("Location: Dashboard.php"); 
			}
			else
			{
				$errorDatabase = "<b>".$result."</b>";
			}
		}
	}
	
	
	
	
	
	
	elseif(isset($_POST["edit_student"]))
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
		
		
		if(empty($_POST["id"]))
		{
	     $errorId="Enter id";
		 $hasError=true;
		}
		else
		{
			$id=htmlspecialchars($_POST["id"]);
		}
		
		
		if(empty($_POST["dob"]))
		{
	     $errorDOB="Enter date of birth";
		 $hasError=true;
		}
		else
		{
			$dob=htmlspecialchars($_POST["dob"]);
		}
		
		
		
		if(empty($_POST["dob"]))
		{
	     $errorDOB="Enter date of birth";
		 $hasError=true;
		}
		else
		{
			$dob=htmlspecialchars($_POST["dob"]);
		}
		
		
		
		if(empty($_POST["credit"]))
		{
	     $errorCredit="Enter credit(s)";
		 $hasError=true;
		}
		else
		{
			$credit=htmlspecialchars($_POST["credit"]);
		}
		
		
		
		if(empty($_POST["cgpa"]))
		{
	     $errorCgpa="Enter cgpa";
		 $hasError=true;
		}
		else
		{
			$cgpa=htmlspecialchars($_POST["cgpa"]);
		}
		
		
		
		
		if(empty($_POST["dept_id"]))
		{
	     $errorDept_Id="Select department";
		 $hasError=true;
		}
		else
		{
			$dept_id=htmlspecialchars($_POST["dept_id"]);
		}
		
		
		
		
		
		
		
		
		if($hasError == false)
		{
			$result=updateStudent($name,$id,$dob,$credit,$cgpa,$dept_id);
			if($result === true)
			{
				header("Location: All Students.php"); 
			}
				$errorDatabase = "<b>".$result."</b>";
			
		}
	}
	
	function insertStudent($name,$id,$dob,$credit,$cgpa,$dept_id)
	{
		$query = "insert into students values('$name','$id','$dob',$credit,$cgpa,$dept_id)";
		return execute($query);
	}
	
	
	function getAllDepartments()
	{
		$query = "select * from departments";
		$result = get($query);
		return $result;
	}
	
	
	
	function getAllStudents()
	{
		$query = "select s.*,d.name as 'department' from students s left join departments d on s.dept_id=d.id";
		$result = get($query);
		return $result;
	}
	
	
	function getStudent($id)
	{
		$query = "select * from students where id='$id'";
		$result = get($query);
		return $result[0];
	}
	
	
	
	
	function updateStudent($name,$id,$dob,$credit,$cgpa,$dept_id)
	{
		$query = "update students set name='$name',id='$id',dob='$dob',credit=$credit,cgpa=$cgpa,dept_id=$dept_id where id='$id'";
		return execute($query);
	}
?>