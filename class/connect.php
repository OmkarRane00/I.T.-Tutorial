<?php
require_once 'library.php';

interface localDB
{
	  const HOST1="localhost";
	  const USER1="root";
	  const PWD1="";
	  const DB1="itsol";
}
interface serverDB
{
	  const HOST2="132.145.0.1";
	  const USER2="root";
	  const PWD2="";
	  const DB2="backup";
}
class connect implements localDB, serverDB
{
	public $conn="";
	function __construct($type)
	{
		if($type==1)
		{
			$this->conn = new mysqli(self::HOST1, self::USER1, self::PWD1,self::DB1);
		}
		else
		{
			$this->conn = new mysqli(self::HOST2, self::USER2, self::PWD2,self::DB2);
		}
		//echo "DB Connected";
	}
	function __destruct()
	{
		$this->conn->close();
		//echo "DB Disconnected";
	}
}
?>