<?php
	session_start();

	$username = $_SESSION["username"];
	
	if($username == "admin")
		header("location: admin/products.php");
	else
		header("location: user/product.php?sub=1");
?>