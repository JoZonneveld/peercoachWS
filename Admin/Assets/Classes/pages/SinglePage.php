<?php

/**
* 
*/
class SinglePage
{
	var $Name;
	var $Text;

	function __construct($name, $text)
	{
		$this->Name = $name;
		$this->Text = $text;
	}

	function AddPage()
    {
        $db = new DB();

        $db->sql = mysqli_query($db->conn, "INSERT INTO pages (Name, Text) VALUES ('$this->Name', '$this->Text')");
    }

    function UpdatePage($name, $text) //Name is unique in the db
    {
        $this->Name = $name;
        $this->Text = $text;

        $db = new DB();
        $db->sql = mysqli_query($db->conn, ""); //create update query
    }

    function DeletePage($name) //Name is unique in the db
    {
        $db = new DB();
        $db->sql = mysqli_query($db->conn, ""); // create delete query
    }
}
