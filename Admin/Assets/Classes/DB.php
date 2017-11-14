<?php
class DB
{
    var $sql;
    var $conn;
    function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "peercoachws");
        if (!$this->conn)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}

?>