<?php

	function js($file)
	{
		//echo "$file";
		echo "<script type='text/javascript' src='../../assets/js/$file.js'></script>";
	}

	function css($file)
	{
		//echo "$file";
		echo "<link rel='stylesheet' type='text/css' href='../../assets/css/$file.css'>";
	}

	function re($file)
	{
		if(file_exists("$file.php"))
		{
			require_once("$file.php");
		}
		//echo "$file";
		// require_once '$file.php';
	}

	function br($n)
	{
		for($i=1;$i<=$n;$i++)
		{
			echo "<br/>";
		}
	}

	function hr($n)
	{
		for($i=1;$i<=$n;$i++)
		{
			echo "<hr/>";
		}
	}
	function pre($data)
	{
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

   function val_num($data,$len)
   {
   	$regex= "/^[0-9]{" .$len. "}$/";
   	return preg_match($regex,trim($data));
   }
    function val_alpha($data,$len)
   {
   	$regex= "/^[a-zA-Z]{" .$len. "}$/";
   	return preg_match($regex,trim($data));
   }
    function val_alphaspace($data,$len)
   {
   	$regex= "/^[a-z A-Z]{" .$len. "}$/";
   	return preg_match($regex,trim($data));
   }
   function val_email($data)
   {
   	$regex="/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
   	return preg_match($regex,trim($data));
   }
    function val_alphanumspace($data,$len)
   {
   	$regex= "/^[a-z A-Z0-9]{" .$len. "}$/";
   	return preg_match($regex,trim($data));
   }

   function val_alphanum($data,$len)
   {
   	$regex= "/^[a-zA-Z0-9]{" .$len. "}$/";
   	return preg_match($regex,trim($data));
   }
?>	