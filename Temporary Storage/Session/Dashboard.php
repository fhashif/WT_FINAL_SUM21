<?php
	session_start();
	if(!isset($_SESSION["loggeduser"]))
	{
		header("Location: Login.php");
	}
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
	</body>
</html>