<?php

namespace app;

class All_records
{
    private $full_name;
    private $db;

    public function __construct($full_name,$db)
    {
        $this->full_name = $full_name;
        $this->db = $db;
    }

    public function getAllMessages()
    {
        $query = "SELECT * FROM `feedback` WHERE `full_name` = '$this->full_name'";
        return mysqli_query($this->db,$query);
    }
}