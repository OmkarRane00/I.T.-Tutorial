<!-- Hello World -->
<?php
	require_once '../class/project.php';
	// pre($_POST);
	$title = $_POST["txttitle"];
	$subject = $_POST["ddlcategory"];
	$reflink = $_POST["txtlink"];
	$desc = $_POST["txtdescription"];
	if(val_alphaspace($title, "10,50") == false)
		echo "Please enter proper Title";
	else
	{
		$objproject->insert("links", "title, subject, link, description", "'$title', '$subject', '$reflink', '$desc'");
			echo "Video Added";
		
	}

?>