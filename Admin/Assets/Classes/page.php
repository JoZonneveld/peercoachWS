<?php

/**
* 
*/
class Page
{
	var $db;

	function __construct()
	{
		$this->db = new DB();
	}


	function getPages()
	{
		$this->db->sql = mysqli_query($this->db->conn, "SELECT * FROM pages");

        $pages = null;
        if ($this->db->sql->num_rows > 0)
        {
            $i = 0;
            while($row = $this->db->sql->fetch_assoc())
            {
            	$pages[$i] = new SinglePage($row['Id'], $row['Name'], $row['Text']);
            	$i++;
            }
        }
        return $pages;
	}

	function getOnePage($name)
	{
		$this->db->sql = mysqli_query($this->db->conn, "SELECT * FROM pages WHERE Name = '$name'");

		$page = null;
        if ($this->db->sql->num_rows > 0)
        {
            while($row = $this->db->sql->fetch_assoc())
            {
            	$page = new SinglePage($row['Id'], $row['Name'], $row['Text']);
            }
        }
        return $page;
	}
}

?>