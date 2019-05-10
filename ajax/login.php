<?php
	require_once("../class/project.php");

	// pre($_POST);

		
	$username1 = $_POST["username1"];
	$password = $_POST["password"];
	
	
	if(val_alphanum($username1,"3,50") == false)
		echo "Please enter proper username";
	else
		if(!(strlen(trim($password))>= 8 && strlen(trim($password))<= 16))
			echo "Please enter proper password";
		else
		{

		

			// $password = sha1($password);
			$rows = $objproject->select("count(*) AS flag", "usermaster", "username='$username1' and password = '$password'");
															// tablename	      provided uname            provided pass
							// pre($password);

			$rows = json_decode($rows, true);
			// pre($rows);
			$row = $rows[0];
			// pre($row);
			// echo $row['flag'];
			// return;
			$count = $row['flag'];

			if($count == 1)
			{
				session_start();
				$_SESSION['username'] = $username1;
				echo "1";
			}
			else
			{
				echo "Incorrect username or password";
			}
						}
?>