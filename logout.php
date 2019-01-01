<?php	
	session_start();
	$_SESSION["admin_id"] = "";
	$_SESSION["admin_name"] = "";
	$_SESSION["admin_prgramme_id"] = "";
   	session_destroy();
	
	header("Location:index.php");
        exit();
?>