<?php
	require_once("../class/project.php");

	//pre($_POST);

	$username = $_POST["username"];
	$email = $_POST["email"];
	$phoneno = $_POST["phoneno"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	if(val_alphanum($username,"5,20") == false)
		echo "Please enter Username of size 5-20 words";
	else
		if(val_email($email) == false)
			echo "Please enter proper emailid";
		else
			if(val_num($phoneno, "10") == false)
				echo "Please enter proper phone number";
			else
				if(!(strlen(trim($password))>= 8 && strlen(trim($password))<= 16))
						echo "Please select password 8 to 16 character wide";
					else
						if($password != $cpassword)
							echo "Password does not match";
						else
						{
							// echo "Save in db";

							$rows = $objproject->select("count(*) AS flag", "usermaster", "username='$username'");

							// pre($rows);
							$rows = json_decode($rows, true);
							// pre($rows);
							$row = $rows[0];
							// pre($row);
							$count = $row['flag'];

							if($count == 1)
								echo "Please select another username";
							else
								{

									// $password = sha1($password);
									//generate message digest of fixed len for all password
									
									$objproject->insert("usermaster", "username,password,phone,email", "'$username','$password','$phoneno','$email'");
								
									$objproject->insert("test", "user,number","'$username',0");
								
									echo "Registered Successfully";
								}
						}
?>