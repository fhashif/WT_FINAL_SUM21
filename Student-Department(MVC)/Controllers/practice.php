<?php
	require_once '../Models/db_config.php';
    $query = "select * from admin where username='fhashif'";
    $result = get($query);
	foreach($result as $r)
				{
					echo $r["password"];
				}

?>