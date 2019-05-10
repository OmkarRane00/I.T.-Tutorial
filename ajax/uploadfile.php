<?php
	require_once '../class/project.php';

	// pre($_POST);

	 // pre($_FILES);

	// return;

	$title = $_POST["txttitle"];
	$subject = $_POST["ddlcategory"];
	$desc = $_POST["txtdescription"];

	if(isset($_POST["txttype"]))
		$type = $_POST["txttype"];


	$filename = "../assets/docs/" . time() . "_" . $_FILES['docup']['name'];


	if(val_alphanumspace($title, "2,50") == false)
		echo "Please enter proper name";
	else
		if(strlen($desc) < 5)
			echo "Please enter description";
		else
		{

	

			move_uploaded_file($_FILES['docup']['tmp_name'],  $filename);


			$filename = '../' . $filename;
			$objproject->insert("docs", "title, subject, desciption, file", "'$title', '$subject', '$desc', '$filename'");

			echo "File Uploaded Succesfully";
	}
?>