<?php
	require_once '../class/project.php';
	// pre($_POST);
	$title = $_POST["txttitle"];
	$subject = $_POST["ddlcategory"];
	$code = $_POST["txtcode"];
	$desc = $_POST["txtdescription"];
	if(val_alphaspace($title, "10,50") == false)
		echo "Please enter proper Title";
	else
	{
		$objproject->insert("snippets", "title, code, subject, description", "'$title', '$code', '$subject', '$desc'");
			echo "Snippet Added";
		
	}

?>