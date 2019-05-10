<?php
require_once 'connect.php';

class helper extends connect
{
    function update($table, $collist, $condition)
    {
        $sql= "update $table set $collist where $condition";
        return $this->conn->query($sql);
    }


    function delete($table,$condition)
    {
        $sql= "delete from $table where $condition";
        return $this->conn->query($sql);
    }



    function insert($table,$collist,$valuelist)
    {
    	$sql= "insert into $table ($collist) values ($valuelist)";
    	return $this->conn->query($sql);
    }

    function select($columns,$table,$condition)
    {
    	$sql="Select $columns from $table where $condition";
    	$answer=$this->conn->query($sql);
    	if($answer->num_rows==0)
    	{
    		return 0;
    	}
    	else
    	{
    		while($ans=$answer->fetch_array(1))
    		{
    			$rows[]=$ans;
    		}
    	}
    	return json_encode($rows);
    }


    function dropdownlist($id, $collist, $table, $condition, $class)
    {
            echo "<select name='$id' id='$id' class='$class'>";
            echo "<option value='-1'>Select</option>";
    
            $rows = $this->select($collist, $table, $condition);
        //pre($rows);
        $rows = json_decode($rows, true);
        //pre($rows);

        foreach ($rows as $row) {
          //pre($row);
            $row = array_values($row);
            // pre($row);
         echo "<option value='{$row[0]}'>{$row[1]}</option>";
        }
      echo "</select>";
       
    }
}
?>